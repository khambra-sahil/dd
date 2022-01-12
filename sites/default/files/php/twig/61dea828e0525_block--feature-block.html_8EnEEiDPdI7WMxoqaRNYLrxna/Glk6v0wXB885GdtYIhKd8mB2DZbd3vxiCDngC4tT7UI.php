<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/wosh/templates/block/block--feature-block.html.twig */
class __TwigTemplate_2ae378c9ca92007ea4805fdcbb1f252de3c5494182ee910385b0cfe2659dba0a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $context["classes"] = [0 => "block", 1 => "feature-block", 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 11
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 11), 11, $this->source))), 3 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 12
($context["plugin_id"] ?? null), 12, $this->source)))];
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 15)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 15)), "value", [], "any", false, false, true, 15) == "video-popup")) {
            // line 16
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("wosh/colorbox"), "html", null, true);
            echo "
";
        }
        // line 18
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo " ";
        if (($context["block_style"] ?? null)) {
            echo "style=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_style"] ?? null), 18, $this->source), "html", null, true);
            echo "\"";
        }
        echo ">
<div class=\"container-wrap feature-block-";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_feature_layout", [], "any", false, false, true, 19)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["#items"] ?? null) : null), "value", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo " clearfix\">
  ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 20, $this->source), "html", null, true);
        echo "
  ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 21, $this->source), "html", null, true);
        echo "
  ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 229
        echo "</div>
</div>";
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "  
 <div class=\"row-wrap block-content\">
";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_feature_layout", [], "any", false, false, true, 25)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 25)), "value", [], "any", false, false, true, 25) == "layout1")) {
            // line 26
            echo "\t<div class=\"row feature-block-wrap feature-block-image-left\">
\t<div class=\"col-12 col-md-6 feat-block-image-wrap ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 27)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["#items"] ?? null) : null), "value", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\">
\t";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 28)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 28)), "value", [], "any", false, false, true, 28) == "static-image")) {
                // line 29
                echo "\t<div class=\"feat-block-image\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source,             // line 30
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 30)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 30)), "value", [], "any", false, false, true, 30) == "background-image")) {
                // line 31
                echo "\t<div class=\"feat-block-image\" style=\"background-image: url(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 31), 0, [], "any", false, false, true, 31)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["#item"] ?? null) : null), "entity", [], "any", false, false, true, 31), "uri", [], "any", false, false, true, 31), "value", [], "any", false, false, true, 31), 31, $this->source)]), "html", null, true);
                echo ");\">
\t\t<div class=\"feat-block-image-bg\">";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "</div>
\t</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source,             // line 34
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 34)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 34)), "value", [], "any", false, false, true, 34) == "slider-image")) {
                // line 35
                echo "\t<div class=\"feat-block-image feat-block-slide\">
\t\t<div class=\"slide-carousel owl-carousel\" data-nav=\"false\" data-items=\"1\" data-dots=\"true\" data-autoplay=\"true\" data-loop=\"true\">
\t\t";
                // line 37
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "
\t\t</div>
\t</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source,             // line 40
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 40)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 40)), "value", [], "any", false, false, true, 40) == "video-popup")) {
                // line 41
                echo "\t<div class=\"feat-block-image feat-block-video\" style=\"background-image: url(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 41), 0, [], "any", false, false, true, 41)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["#item"] ?? null) : null), "entity", [], "any", false, false, true, 41), "uri", [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41), 41, $this->source)]), "html", null, true);
                echo ");\">
\t\t<div class=\"feat-block-image-bg\">";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "</div>
\t\t<a class=\"colorbox video-colorbox\" href=\"";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_video", [], "any", false, false, true, 43), 0, [], "any", false, false, true, 43)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["#url"] ?? null) : null), 43, $this->source), "html", null, true);
                echo "\"><span class=\"video-link ti-control-play\"></span></a>
\t</div>
\t";
            }
            // line 46
            echo "\t</div>
\t<div class=\"col-12 col-md-6 feat-block-content\">
\t<div class=\"feat-content-wrap\">
\t";
            // line 49
            if (($context["label"] ?? null)) {
                // line 50
                echo "\t<div class=\"block-title-wrap\">
\t<div class=\"block-title-content\">
\t";
                // line 52
                if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                    // line 53
                    echo "\t";
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 53, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 54
                    echo "\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 54), 54, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 54, $this->source), "html", null, true);
                    echo "</h2>
\t";
                } else {
                    // line 56
                    echo "\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 56), 56, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 56, $this->source), "html", null, true);
                    echo "</h2>
\t";
                    // line 57
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 57, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 58
                    echo "\t";
                }
                // line 59
                echo "\t</div>
\t</div>
\t";
            }
            // line 62
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 62))) {
                echo "<div class=\"feat-block-text\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                echo "</div>";
            }
            // line 63
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block", [], "any", false, false, true, 63))) {
                // line 64
                echo "\t<div class=\"text-left block-right\">
\t";
                // line 65
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                echo "
\t</div>
\t";
            }
            // line 68
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 68))) {
                // line 69
                echo "\t<a class=\"button button-default\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 69), 0, [], "any", false, false, true, 69)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["#url"] ?? null) : null), 69, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 69), 0, [], "any", false, false, true, 69)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["#title"] ?? null) : null), 69, $this->source), "html", null, true);
                echo "</a>
\t";
            }
            // line 71
            echo "\t</div>
\t</div>
\t</div>

";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = twig_get_attribute($this->env, $this->source,         // line 75
($context["content"] ?? null), "field_feature_layout", [], "any", false, false, true, 75)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 75)), "value", [], "any", false, false, true, 75) == "layout2")) {
            // line 76
            echo "\t<div class=\"row feature-block-wrap feature-block-image-right\">
\t<div class=\"col-12 col-md-6 feat-block-content\">
\t<div class=\"feat-content-wrap\">
\t";
            // line 79
            if (($context["label"] ?? null)) {
                // line 80
                echo "\t<div class=\"block-title-wrap\">
\t<div class=\"block-title-content\">
\t";
                // line 82
                if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                    // line 83
                    echo "\t";
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 83, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 84
                    echo "\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 84), 84, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 84, $this->source), "html", null, true);
                    echo "</h2>
\t";
                } else {
                    // line 86
                    echo "\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 86), 86, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 86, $this->source), "html", null, true);
                    echo "</h2>
\t";
                    // line 87
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 87, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 88
                    echo "\t";
                }
                // line 89
                echo "\t</div>
\t</div>
\t";
            }
            // line 92
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 92))) {
                echo "<div class=\"feat-block-text\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                echo "</div>";
            }
            // line 93
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block", [], "any", false, false, true, 93))) {
                // line 94
                echo "\t<div class=\"text-left block-right\">
\t";
                // line 95
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                echo "
\t</div>
\t";
            }
            // line 98
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 98))) {
                // line 99
                echo "\t<a class=\"button button-default\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 99), 0, [], "any", false, false, true, 99)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["#url"] ?? null) : null), 99, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 99), 0, [], "any", false, false, true, 99)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["#title"] ?? null) : null), 99, $this->source), "html", null, true);
                echo "</a>
\t";
            }
            // line 101
            echo "\t</div>
\t</div>
\t<div class=\"col-12 col-md-6 feat-block-image-wrap ";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 103)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["#items"] ?? null) : null), "value", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "\">
\t";
            // line 104
            if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 104)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 104)), "value", [], "any", false, false, true, 104) == "static-image")) {
                // line 105
                echo "\t<div class=\"feat-block-image\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
                echo "</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = twig_get_attribute($this->env, $this->source,             // line 106
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 106)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 106)), "value", [], "any", false, false, true, 106) == "background-image")) {
                // line 107
                echo "\t<div class=\"feat-block-image\" style=\"background-image: url(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 107), 0, [], "any", false, false, true, 107)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["#item"] ?? null) : null), "entity", [], "any", false, false, true, 107), "uri", [], "any", false, false, true, 107), "value", [], "any", false, false, true, 107), 107, $this->source)]), "html", null, true);
                echo ");\">
\t\t<div class=\"feat-block-image-bg\">";
                // line 108
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
                echo "</div>
\t</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = twig_get_attribute($this->env, $this->source,             // line 110
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 110)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 110)), "value", [], "any", false, false, true, 110) == "slider-image")) {
                // line 111
                echo "\t<div class=\"feat-block-image feat-block-slide\">
\t\t<div class=\"slide-carousel owl-carousel\" data-nav=\"false\" data-items=\"1\" data-dots=\"true\" data-autoplay=\"true\" data-loop=\"true\">
\t\t";
                // line 113
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                echo "
\t\t</div>
\t</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = twig_get_attribute($this->env, $this->source,             // line 116
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 116)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 116)), "value", [], "any", false, false, true, 116) == "video-popup")) {
                // line 117
                echo "\t<div class=\"feat-block-image feat-block-video\" style=\"background-image: url(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 117), 0, [], "any", false, false, true, 117)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["#item"] ?? null) : null), "entity", [], "any", false, false, true, 117), "uri", [], "any", false, false, true, 117), "value", [], "any", false, false, true, 117), 117, $this->source)]), "html", null, true);
                echo ");\">
\t\t<div class=\"feat-block-image-bg\">";
                // line 118
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
                echo "</div>
\t\t<a class=\"colorbox video-colorbox\" href=\"";
                // line 119
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_video", [], "any", false, false, true, 119), 0, [], "any", false, false, true, 119)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["#url"] ?? null) : null), 119, $this->source), "html", null, true);
                echo "\"><span class=\"video-link ti-control-play\"></span></a>
\t</div>
\t";
            }
            // line 122
            echo "\t</div>
\t</div>
\t
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = twig_get_attribute($this->env, $this->source,         // line 125
($context["content"] ?? null), "field_feature_layout", [], "any", false, false, true, 125)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 125)), "value", [], "any", false, false, true, 125) == "layout3")) {
            // line 126
            echo "\t<div class=\"row feature-block-wrap feature-block-image-left\">
\t<div class=\"col-12 col-md-5 feat-block-image-wrap ";
            // line 127
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 127)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["#items"] ?? null) : null), "value", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
            echo "\">
\t";
            // line 128
            if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 128)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 128)), "value", [], "any", false, false, true, 128) == "static-image")) {
                // line 129
                echo "\t<div class=\"feat-block-image\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
                echo "</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = twig_get_attribute($this->env, $this->source,             // line 130
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 130)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 130)), "value", [], "any", false, false, true, 130) == "background-image")) {
                // line 131
                echo "\t<div class=\"feat-block-image\" style=\"background-image: url(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 131), 0, [], "any", false, false, true, 131)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["#item"] ?? null) : null), "entity", [], "any", false, false, true, 131), "uri", [], "any", false, false, true, 131), "value", [], "any", false, false, true, 131), 131, $this->source)]), "html", null, true);
                echo ");\">
\t\t<div class=\"feat-block-image-bg\">";
                // line 132
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
                echo "</div>
\t</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = twig_get_attribute($this->env, $this->source,             // line 134
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 134)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 134)), "value", [], "any", false, false, true, 134) == "slider-image")) {
                // line 135
                echo "\t<div class=\"feat-block-image feat-block-slide\">
\t\t<div class=\"slide-carousel owl-carousel\" data-nav=\"false\" data-items=\"1\" data-dots=\"true\" data-autoplay=\"true\" data-loop=\"true\">
\t\t";
                // line 137
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
                echo "
\t\t</div>
\t</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = twig_get_attribute($this->env, $this->source,             // line 140
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 140)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 140)), "value", [], "any", false, false, true, 140) == "video-popup")) {
                // line 141
                echo "\t<div class=\"feat-block-image feat-block-video\" style=\"background-image: url(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 141), 0, [], "any", false, false, true, 141)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["#item"] ?? null) : null), "entity", [], "any", false, false, true, 141), "uri", [], "any", false, false, true, 141), "value", [], "any", false, false, true, 141), 141, $this->source)]), "html", null, true);
                echo ");\">
\t\t<div class=\"feat-block-image-bg\">";
                // line 142
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
                echo "</div>
\t\t<a class=\"colorbox video-colorbox\" href=\"";
                // line 143
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_video", [], "any", false, false, true, 143), 0, [], "any", false, false, true, 143)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["#url"] ?? null) : null), 143, $this->source), "html", null, true);
                echo "\"><span class=\"video-link ti-control-play\"></span></a>
\t</div>
\t";
            }
            // line 146
            echo "\t</div>
\t<div class=\"col-12 col-md-7 feat-block-content\">
\t<div class=\"feat-content-wrap\">
\t";
            // line 149
            if (($context["label"] ?? null)) {
                // line 150
                echo "\t<div class=\"block-title-wrap\">
\t<div class=\"block-title-content\">
\t";
                // line 152
                if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                    // line 153
                    echo "\t";
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 153, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 154
                    echo "\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 154), 154, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 154, $this->source), "html", null, true);
                    echo "</h2>
\t";
                } else {
                    // line 156
                    echo "\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 156), 156, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 156, $this->source), "html", null, true);
                    echo "</h2>
\t";
                    // line 157
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 157, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 158
                    echo "\t";
                }
                // line 159
                echo "\t</div>
\t</div>
\t";
            }
            // line 162
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 162))) {
                echo "<div class=\"feat-block-text\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
                echo "</div>";
            }
            // line 163
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block", [], "any", false, false, true, 163))) {
                // line 164
                echo "\t<div class=\"text-left block-right feat-block-content-alt\">
\t";
                // line 165
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
                echo "
\t</div>
\t";
            }
            // line 168
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 168))) {
                // line 169
                echo "\t<a class=\"button button-default\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 169), 0, [], "any", false, false, true, 169)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["#url"] ?? null) : null), 169, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 169), 0, [], "any", false, false, true, 169)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["#title"] ?? null) : null), 169, $this->source), "html", null, true);
                echo "</a>
\t";
            }
            // line 171
            echo "\t</div>
\t</div>
\t</div>\t
\t
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = twig_get_attribute($this->env, $this->source,         // line 175
($context["content"] ?? null), "field_feature_layout", [], "any", false, false, true, 175)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 175)), "value", [], "any", false, false, true, 175) == "layout4")) {
            // line 176
            echo "\t<div class=\"row feature-block-wrap feature-block-image-right\">
\t<div class=\"col-12 col-md-7 feat-block-content\">
\t<div class=\"feat-content-wrap\">
\t";
            // line 179
            if (($context["label"] ?? null)) {
                // line 180
                echo "\t<div class=\"block-title-wrap\">
\t<div class=\"block-title-content\">
\t";
                // line 182
                if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                    // line 183
                    echo "\t";
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 183, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 184
                    echo "\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 184), 184, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 184, $this->source), "html", null, true);
                    echo "</h2>
\t";
                } else {
                    // line 186
                    echo "\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 186), 186, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 186, $this->source), "html", null, true);
                    echo "</h2>
\t";
                    // line 187
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 187, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 188
                    echo "\t";
                }
                // line 189
                echo "\t</div>
\t</div>
\t";
            }
            // line 192
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 192))) {
                echo "<div class=\"feat-block-text\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
                echo "</div>";
            }
            // line 193
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block", [], "any", false, false, true, 193))) {
                // line 194
                echo "\t<div class=\"text-left block-right feat-block-content-alt\">
\t";
                // line 195
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
                echo "
\t</div>
\t";
            }
            // line 198
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 198))) {
                // line 199
                echo "\t<a class=\"button button-default\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 199), 0, [], "any", false, false, true, 199)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["#url"] ?? null) : null), 199, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 199), 0, [], "any", false, false, true, 199)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["#title"] ?? null) : null), 199, $this->source), "html", null, true);
                echo "</a>
\t";
            }
            // line 201
            echo "\t</div>
\t</div>
\t<div class=\"col-12 col-md-5 feat-block-image-wrap ";
            // line 203
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 203)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["#items"] ?? null) : null), "value", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
            echo "\">
\t";
            // line 204
            if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 204)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 204)), "value", [], "any", false, false, true, 204) == "static-image")) {
                // line 205
                echo "\t<div class=\"feat-block-image\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 205), 205, $this->source), "html", null, true);
                echo "</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = twig_get_attribute($this->env, $this->source,             // line 206
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 206)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 206)), "value", [], "any", false, false, true, 206) == "background-image")) {
                // line 207
                echo "\t<div class=\"feat-block-image\" style=\"background-image: url(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 207), 0, [], "any", false, false, true, 207)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["#item"] ?? null) : null), "entity", [], "any", false, false, true, 207), "uri", [], "any", false, false, true, 207), "value", [], "any", false, false, true, 207), 207, $this->source)]), "html", null, true);
                echo ");\">
\t\t<div class=\"feat-block-image-bg\">";
                // line 208
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 208), 208, $this->source), "html", null, true);
                echo "</div>
\t</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = twig_get_attribute($this->env, $this->source,             // line 210
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 210)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 210)), "value", [], "any", false, false, true, 210) == "slider-image")) {
                // line 211
                echo "\t<div class=\"feat-block-image feat-block-slide\">
\t\t<div class=\"slide-carousel owl-carousel\" data-nav=\"false\" data-items=\"1\" data-dots=\"true\" data-autoplay=\"true\" data-loop=\"true\">
\t\t";
                // line 213
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 213), 213, $this->source), "html", null, true);
                echo "
\t\t</div>
\t</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = twig_get_attribute($this->env, $this->source,             // line 216
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 216)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 216)), "value", [], "any", false, false, true, 216) == "video-popup")) {
                // line 217
                echo "\t<div class=\"feat-block-image feat-block-video\" style=\"background-image: url(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 217), 0, [], "any", false, false, true, 217)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["#item"] ?? null) : null), "entity", [], "any", false, false, true, 217), "uri", [], "any", false, false, true, 217), "value", [], "any", false, false, true, 217), 217, $this->source)]), "html", null, true);
                echo ");\">
\t\t<div class=\"feat-block-image-bg\">";
                // line 218
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
                echo "</div>
\t\t<a class=\"colorbox video-colorbox\" href=\"";
                // line 219
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_video", [], "any", false, false, true, 219), 0, [], "any", false, false, true, 219)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["#url"] ?? null) : null), 219, $this->source), "html", null, true);
                echo "\"><span class=\"video-link ti-control-play\"></span></a>
\t</div>
\t";
            }
            // line 222
            echo "\t</div>
\t</div>\t

";
        }
        // line 226
        echo "\t
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/wosh/templates/block/block--feature-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  659 => 226,  653 => 222,  647 => 219,  643 => 218,  638 => 217,  636 => 216,  630 => 213,  626 => 211,  624 => 210,  619 => 208,  614 => 207,  612 => 206,  607 => 205,  605 => 204,  601 => 203,  597 => 201,  589 => 199,  586 => 198,  580 => 195,  577 => 194,  574 => 193,  567 => 192,  562 => 189,  559 => 188,  553 => 187,  546 => 186,  538 => 184,  531 => 183,  529 => 182,  525 => 180,  523 => 179,  518 => 176,  516 => 175,  510 => 171,  502 => 169,  499 => 168,  493 => 165,  490 => 164,  487 => 163,  480 => 162,  475 => 159,  472 => 158,  466 => 157,  459 => 156,  451 => 154,  444 => 153,  442 => 152,  438 => 150,  436 => 149,  431 => 146,  425 => 143,  421 => 142,  416 => 141,  414 => 140,  408 => 137,  404 => 135,  402 => 134,  397 => 132,  392 => 131,  390 => 130,  385 => 129,  383 => 128,  379 => 127,  376 => 126,  374 => 125,  369 => 122,  363 => 119,  359 => 118,  354 => 117,  352 => 116,  346 => 113,  342 => 111,  340 => 110,  335 => 108,  330 => 107,  328 => 106,  323 => 105,  321 => 104,  317 => 103,  313 => 101,  305 => 99,  302 => 98,  296 => 95,  293 => 94,  290 => 93,  283 => 92,  278 => 89,  275 => 88,  269 => 87,  262 => 86,  254 => 84,  247 => 83,  245 => 82,  241 => 80,  239 => 79,  234 => 76,  232 => 75,  226 => 71,  218 => 69,  215 => 68,  209 => 65,  206 => 64,  203 => 63,  196 => 62,  191 => 59,  188 => 58,  182 => 57,  175 => 56,  167 => 54,  160 => 53,  158 => 52,  154 => 50,  152 => 49,  147 => 46,  141 => 43,  137 => 42,  132 => 41,  130 => 40,  124 => 37,  120 => 35,  118 => 34,  113 => 32,  108 => 31,  106 => 30,  101 => 29,  99 => 28,  95 => 27,  92 => 26,  90 => 25,  86 => 23,  82 => 22,  77 => 229,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  52 => 18,  46 => 16,  44 => 15,  42 => 12,  41 => 11,  40 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/wosh/templates/block/block--feature-block.html.twig", "/Users/heenakhambra/sites/dd/themes/wosh/templates/block/block--feature-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "if" => 15, "block" => 22);
        static $filters = array("clean_class" => 11, "first" => 15, "escape" => 16, "render" => 62);
        static $functions = array("attach_library" => 16, "file_url" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'first', 'escape', 'render'],
                ['attach_library', 'file_url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
