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

/* themes/wosh/templates/node/node--blog.html.twig */
class __TwigTemplate_5fd1736fbb6a8065d760cad1d127283a7b1070071c5314af8d0a15ef6b2d3b9e extends \Twig\Template
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
        // line 8
        $context["classes"] = [0 => "node", 1 => ("node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 10
($context["node"] ?? null), "bundle", [], "any", false, false, true, 10), 10, $this->source))), 2 => "node-content", 3 => "post-wrapper", 4 => ((twig_get_attribute($this->env, $this->source,         // line 13
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 13)) ? ("node--promoted") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 14
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 14)) ? ("node--sticky") : ("")), 6 => (( !twig_get_attribute($this->env, $this->source,         // line 15
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 15)) ? ("node--unpublished") : (""))];
        // line 18
        echo "
";
        // line 19
        if (($context["teaser"] ?? null)) {
            // line 20
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "blog-post-teaser post-row"], "method", false, false, true, 20), 20, $this->source), "html", null, true);
            echo " >
  ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 21, $this->source), "html", null, true);
            echo "
  ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 22, $this->source), "html", null, true);
            echo "
<div class=\"post-thumb\">
\t";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_blog_format", [], "any", false, false, true, 24)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 24)), "value", [], "any", false, false, true, 24) == "standard")) {
                // line 25
                echo "\t\t";
                if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 25))) {
                    // line 26
                    echo "\t\t\t<div class=\"post-image\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 26), 0, [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                    echo "</div>
\t\t";
                }
                // line 27
                echo "\t
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source,             // line 28
($context["content"] ?? null), "field_blog_format", [], "any", false, false, true, 28)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 28)), "value", [], "any", false, false, true, 28) == "slider")) {
                // line 29
                echo "\t\t<div class=\"post-image\">
\t\t<div class=\"image-carousel\">
\t\t";
                // line 31
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "
\t\t</div>
\t\t</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source,             // line 34
($context["content"] ?? null), "field_blog_format", [], "any", false, false, true, 34)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 34)), "value", [], "any", false, false, true, 34) == "video")) {
                // line 35
                echo "\t\t<div class=\"entry-video\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_video", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "</div>
\t";
            }
            // line 37
            echo "</div>
\t<div class=\"post-content-wrap\">
\t<div class=\"content-wrap\">
\t";
            // line 40
            if (($context["display_submitted"] ?? null)) {
                // line 41
                echo "\t<div class=\"post-meta\">
\t<div class=\"post-meta-item post-date\"><i class=\"ion-ios-clock-outline\"></i> ";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 42), 42, $this->source), "j M Y"), "html", null, true);
                echo "</div>
\t<div class=\"post-meta-item post-category\"><i class=\"ion-ios-folder-outline\"></i> ";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_category", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "</div>
\t<div class=\"post-meta-item post-comment\"><i class=\"ion-ios-chatboxes-outline\"></i> ";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "comment", [], "any", false, false, true, 44), "comment_count", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo " comments</div>
\t</div>
\t";
            }
            // line 47
            echo "\t<div class=\"post-content\">
\t<div class=\"post-title-wrap\"><h3 class=\"post-title\"><a href=\"";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 48, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 48, $this->source), "html", null, true);
            echo "</a></h3></div>
\t<div class=\"post-body\">";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "</div>
\t<div class=\"post-link\"><a href=\"";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 50, $this->source), "html", null, true);
            echo "\">Read More</a></div>
\t</div>
\t</div>
\t</div>
</div>

";
        } else {
            // line 57
            echo "
<div";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "blog-post-full"], "method", false, false, true, 58), 58, $this->source), "html", null, true);
            echo ">
  ";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 59, $this->source), "html", null, true);
            echo "
  ";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 60, $this->source), "html", null, true);
            echo "
\t<div class=\"post-media\">
\t";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_blog_format", [], "any", false, false, true, 62)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 62)), "value", [], "any", false, false, true, 62) == "standard")) {
                // line 63
                echo "\t\t";
                if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 63))) {
                    // line 64
                    echo "\t\t\t<div class=\"post-image\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 64), 0, [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                    echo "</div>
\t\t";
                }
                // line 65
                echo "\t
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source,             // line 66
($context["content"] ?? null), "field_blog_format", [], "any", false, false, true, 66)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 66)), "value", [], "any", false, false, true, 66) == "slider")) {
                // line 67
                echo "\t\t<div class=\"post-image\">
\t\t<div class=\"image-carousel\">
\t\t";
                // line 69
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                echo "
\t\t</div>
\t\t</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source,             // line 72
($context["content"] ?? null), "field_blog_format", [], "any", false, false, true, 72)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 72)), "value", [], "any", false, false, true, 72) == "video")) {
                // line 73
                echo "\t\t<div class=\"entry-video video\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_video", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                echo "</div>
\t";
            }
            // line 75
            echo "\t</div>
\t<div class=\"post-content\">
\t\t\t<h3 class=\"post-title\">";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 77, $this->source), "html", null, true);
            echo "</h3>
\t\t\t";
            // line 78
            if (($context["display_submitted"] ?? null)) {
                // line 79
                echo "\t\t\t<div class=\"post-meta\">
\t\t\t\t<div class=\"post-meta-item\"><i class=\"ion-ios-clock-outline\"></i> ";
                // line 80
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 80), 80, $this->source), "j M Y"), "html", null, true);
                echo "</div>
\t\t\t\t";
                // line 81
                if (($context["author_name"] ?? null)) {
                    // line 82
                    echo "\t\t\t\t<div class=\"post-meta-item\"><i class=\"ion-ios-person-outline\"></i> by ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 82, $this->source), "html", null, true);
                    echo "</div>
\t\t\t\t";
                }
                // line 84
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_category", [], "any", false, false, true, 84)) {
                    // line 85
                    echo "\t\t\t\t<div class=\"post-meta-item\"><i class=\"ion-ios-folder-outline\"></i> ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_category", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                    echo "</div>
\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 87)) {
                    // line 88
                    echo "\t\t\t\t<div class=\"post-meta-item\"><i class=\"ion-ios-chatboxes-outline\"></i> ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "comment", [], "any", false, false, true, 88), "comment_count", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                    echo " comments</div>
\t\t\t\t";
                }
                // line 90
                echo "\t\t\t\t
\t\t\t</div>
\t\t\t";
            }
            // line 93
            echo "\t\t\t<div class=\"post-body\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
            echo "</div>
\t\t\t";
            // line 94
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 94))) {
                // line 95
                echo "\t\t\t<div class=\"post-tags clearfix\"><i class=\"ion-ios-pricetags-outline\"></i> <span>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Tags:"));
                echo " </span>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 97
            echo "\t\t\t
\t\t\t";
            // line 98
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 98)) {
                // line 99
                echo "\t\t\t\t<div class=\"post-comment\">
\t\t\t\t<div class=\"post-stats\">
\t\t\t\t<span class=\"comment-label\">";
                // line 101
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Comments"));
                echo "</span> <span class=\"comment-count\">( ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "comment", [], "any", false, false, true, 101), "comment_count", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                echo " )</span>
\t\t\t\t</div>
\t\t\t\t";
                // line 103
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 106
            echo "\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/wosh/templates/node/node--blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 106,  274 => 103,  267 => 101,  263 => 99,  261 => 98,  258 => 97,  250 => 95,  248 => 94,  243 => 93,  238 => 90,  232 => 88,  229 => 87,  223 => 85,  220 => 84,  214 => 82,  212 => 81,  208 => 80,  205 => 79,  203 => 78,  199 => 77,  195 => 75,  189 => 73,  187 => 72,  181 => 69,  177 => 67,  175 => 66,  172 => 65,  166 => 64,  163 => 63,  161 => 62,  156 => 60,  152 => 59,  148 => 58,  145 => 57,  135 => 50,  131 => 49,  125 => 48,  122 => 47,  116 => 44,  112 => 43,  108 => 42,  105 => 41,  103 => 40,  98 => 37,  92 => 35,  90 => 34,  84 => 31,  80 => 29,  78 => 28,  75 => 27,  69 => 26,  66 => 25,  64 => 24,  59 => 22,  55 => 21,  50 => 20,  48 => 19,  45 => 18,  43 => 15,  42 => 14,  41 => 13,  40 => 10,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/wosh/templates/node/node--blog.html.twig", "/Users/heenakhambra/sites/dd/themes/wosh/templates/node/node--blog.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "if" => 19);
        static $filters = array("clean_class" => 10, "escape" => 20, "first" => 24, "render" => 25, "date" => 42, "t" => 95);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'first', 'render', 'date', 't'],
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
