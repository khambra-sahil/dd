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

/* themes/wosh/templates/views/views-view.html.twig */
class __TwigTemplate_a978ce8bf2361a3ba8445526854ea752ef39f75b1cbe60c85676e278b85e4080 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        $context["classes"] = [0 => ((        // line 37
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 37, $this->source))) : ("")), 1 => "view-item"];
        // line 41
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
        echo ">
  ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 42, $this->source), "html", null, true);
        echo "
  ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 43, $this->source), "html", null, true);
        echo "
  ";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 44, $this->source), "html", null, true);
        echo "

  ";
        // line 46
        if (($context["header"] ?? null)) {
            // line 47
            echo "    <div class=\"view-header\">
      ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 48, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 51
        echo "
  ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 52, $this->source), "html", null, true);
        echo "
  ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 53, $this->source), "html", null, true);
        echo "

  ";
        // line 55
        if (($context["rows"] ?? null)) {
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 56, $this->source), "html", null, true);
            echo "
  ";
        } elseif (        // line 57
($context["empty"] ?? null)) {
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 58, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 60
        echo "  
  ";
        // line 61
        if (($context["pager"] ?? null)) {
            // line 62
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 62, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 64
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 65
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 66, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 69
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 70
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 70, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 72
        echo "
  ";
        // line 73
        if (($context["footer"] ?? null)) {
            // line 74
            echo "    <div class=\"view-footer\">
      ";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 75, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 78
        echo "
  ";
        // line 79
        if (($context["feed_icons"] ?? null)) {
            // line 80
            echo "    <div class=\"feed-icons\">
      ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 81, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 84
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/wosh/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 84,  150 => 81,  147 => 80,  145 => 79,  142 => 78,  136 => 75,  133 => 74,  131 => 73,  128 => 72,  122 => 70,  119 => 69,  113 => 66,  110 => 65,  107 => 64,  101 => 62,  99 => 61,  96 => 60,  91 => 58,  89 => 57,  85 => 56,  83 => 55,  78 => 53,  74 => 52,  71 => 51,  65 => 48,  62 => 47,  60 => 46,  55 => 44,  51 => 43,  47 => 42,  42 => 41,  40 => 37,  39 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/wosh/templates/views/views-view.html.twig", "/Users/heenakhambra/sites/dd/themes/wosh/templates/views/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 36, "if" => 46);
        static $filters = array("escape" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
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
