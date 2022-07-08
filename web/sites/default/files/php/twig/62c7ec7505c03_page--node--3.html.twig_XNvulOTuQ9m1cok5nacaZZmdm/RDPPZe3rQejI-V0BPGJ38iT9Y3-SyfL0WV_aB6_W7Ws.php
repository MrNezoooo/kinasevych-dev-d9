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

/* themes/custom/kinasevych_dev/templates/layout/page--node--3.html.twig */
class __TwigTemplate_7a6f711967799c3f6a153f79fba1f76d9e34afc25c32606b6def19af134e161f extends \Twig\Template
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
        // line 48
        echo "
";
        // line 50
        $this->loadTemplate("@kinasevych_dev/includes/header.html.twig", "themes/custom/kinasevych_dev/templates/layout/page--node--3.html.twig", 50)->display($context);
        // line 51
        echo "
<div class=\"main-wrap\">

  ";
        // line 55
        echo "  ";
        $this->loadTemplate("@kinasevych_dev/includes/components/region-left.html.twig", "themes/custom/kinasevych_dev/templates/layout/page--node--3.html.twig", 55)->display($context);
        // line 56
        echo "
  <div class=\"region-content\">
    <div class=\"tw-container-inner\">


      <h1 class=\"inner-page\">About <span>Me</span></h1>


      ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
      ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "
      ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "
      ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
      ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "



      ";
        // line 73
        echo "      <div class=\"node-content\">
        ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "
      </div>

      ";
        // line 78
        echo "      <div class=\"block-services\">
        ";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "aboutservices", "full", null, false), "html", null, true);
        echo "
      </div>

      <div class=\"block-about\">

        ";
        // line 85
        echo "        <div class=\"block-item block-item--information\">
          ";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "aboutpersonalinformation", "full", null, false), "html", null, true);
        echo "
        </div>

        ";
        // line 90
        echo "        <div class=\"block-item block-item--skills\">
          ";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "aboutskills", "full", null, false), "html", null, true);
        echo "
        </div>

      </div>

      ";
        // line 97
        echo "
      ";
        // line 99
        echo "      ";
        // line 100
        echo "
    </div>";
        // line 102
        echo "
    <div class=\"block-testimonials\">
      <div class=\"testimonials-inner-wrapper\">
        <h2 class=\"block-title\">";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Testimonial"));
        echo "</h2>
        ";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("about_page", "block_1"), "html", null, true);
        echo "
      </div>
    </div>

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/kinasevych_dev/templates/layout/page--node--3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 106,  138 => 105,  133 => 102,  130 => 100,  128 => 99,  125 => 97,  117 => 91,  114 => 90,  108 => 86,  105 => 85,  97 => 79,  94 => 78,  88 => 74,  85 => 73,  78 => 68,  74 => 67,  70 => 66,  66 => 65,  62 => 64,  52 => 56,  49 => 55,  44 => 51,  42 => 50,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}

{# Include header twig template #}
{% include '@kinasevych_dev/includes/header.html.twig' %}

<div class=\"main-wrap\">

  {# Include region-left twig template #}
  {% include '@kinasevych_dev/includes/components/region-left.html.twig' %}

  <div class=\"region-content\">
    <div class=\"tw-container-inner\">


      <h1 class=\"inner-page\">About <span>Me</span></h1>


      {{ page.primary_menu }}
      {{ page.secondary_menu }}
      {{ page.breadcrumb }}
      {{ page.highlighted }}
      {{ page.help }}



      {# Content type - content #}
      <div class=\"node-content\">
        {{ page.content }}
      </div>

      {# Block - services #}
      <div class=\"block-services\">
        {{ drupal_entity('block', 'aboutservices', check_access=false) }}
      </div>

      <div class=\"block-about\">

        {# Block - personal information #}
        <div class=\"block-item block-item--information\">
          {{ drupal_entity('block', 'aboutpersonalinformation', check_access=false) }}
        </div>

        {# Block - skills #}
        <div class=\"block-item block-item--skills\">
          {{ drupal_entity('block', 'aboutskills', check_access=false) }}
        </div>

      </div>

      {# Block - testimonial #}

      {# Include twig template #}
      {# {% include '@sychenko_dev/node/node-testimonial-teaser.html.twig' %} #}

    </div>{# /.layout-container #}

    <div class=\"block-testimonials\">
      <div class=\"testimonials-inner-wrapper\">
        <h2 class=\"block-title\">{{ 'Testimonial'|t }}</h2>
        {{ drupal_view('about_page', 'block_1') }}
      </div>
    </div>

  </div>

</div>
", "themes/custom/kinasevych_dev/templates/layout/page--node--3.html.twig", "/app/web/themes/custom/kinasevych_dev/templates/layout/page--node--3.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 50);
        static $filters = array("escape" => 64, "t" => 105);
        static $functions = array("drupal_entity" => 79, "drupal_view" => 106);

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape', 't'],
                ['drupal_entity', 'drupal_view']
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
