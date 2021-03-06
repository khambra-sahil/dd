<?php

namespace Drupal\field_timer\Plugin\Field\FieldFormatter;

use Drupal\Component\Utility\Crypt;
use Drupal\Core\Field\FieldItemInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Implementation of formatters that uses JavaScript to render timer/countdown.
 */
abstract class FieldTimerJsFormatterBase extends FormatterBase {

  /**
   * Plugin name used to render timer/countdown widget.
   */
  const LIBRARY_NAME = '';

  /**
   * Key used by js code to determine how to initialize the timer/countdown.
   */
  const JS_KEY = '';

  /**
   * Stores set of unique html ids for current items.
   *
   * @var array
   */
  protected $itemKeys;

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];

    $elements['#attached']['library'][] = 'field_timer/' . static::LIBRARY_NAME;
    $elements['#attached']['library'][] = 'field_timer/init';
    $elements['#attached']['drupalSettings']['field_timer'] = $this->generateJsSettings($items, $langcode);

    return $elements;
  }

  /**
   * Generates unique ids for the field items.
   *
   * @param \Drupal\Core\Field\FieldItemListInterface $items
   *   The field items.
   *
   * @return array
   *   Array of ids keyed by field item delta.
   */
  protected function getItemKeys(FieldItemListInterface $items) {
    $entity = $items->getEntity();
    if (!isset($this->itemKeys[$entity->getEntityTypeId()][$entity->id()][$items->getFieldDefinition()->getName()])) {
      $entity = $items->getEntity();

      $this->itemKeys = [];
      foreach ($items as $delta => $item) {
        $this->itemKeys[$entity->getEntityTypeId()][$entity->id()][$items->getFieldDefinition()->getName()][$delta] = implode('-', [
          $entity->getEntityTypeId(),
          $entity->id(),
          $items->getFieldDefinition()->getName(),
          $delta,
          Crypt::randomBytesBase64(8),
        ]);
      }
    }

    return $this->itemKeys[$entity->getEntityTypeId()][$entity->id()][$items->getFieldDefinition()->getName()] ?? [];
  }

  /**
   * Generates JS settings for the field.
   *
   * @param \Drupal\Core\Field\FieldItemListInterface $items
   *   Field items.
   * @param string $langcode
   *   Langcode value.
   *
   * @return array
   *   Array of JS settings to be used to initialize timer/countdown widget.
   */
  protected function generateJsSettings(FieldItemListInterface $items, $langcode) {
    $keys = $this->getItemKeys($items);
    $js_settings = [];

    foreach ($items as $delta => $item) {
      $timestamp = $this->getTimestamp($item);
      if ($timestamp !== NULL) {
        $js_settings[$keys[$delta]]['settings'] = $this->preparePluginSettings($item, $langcode);
        $js_settings[$keys[$delta]]['plugin'] = static::JS_KEY;
      }
    }

    return $js_settings;
  }

  /**
   * Retrieves timestamp from field item.
   *
   * @param \Drupal\Core\Field\FieldItemInterface $item
   *   Field item.
   *
   * @return int|null
   *   Datetime field item timestamp.
   */
  protected function getTimestamp(FieldItemInterface $item) {
    if (!empty($item->date)) {
      return $item->date->getTimestamp();
    }

    return NULL;
  }

  /**
   * Prepares array of settings used to initialize jQuery plugin.
   *
   * @param \Drupal\Core\Field\FieldItemInterface $item
   *   Field item.
   * @param string $langcode
   *   Langcode value.
   *
   * @return array
   *   Array of key-value pairs.
   */
  abstract protected function preparePluginSettings(FieldItemInterface $item, $langcode);

}
