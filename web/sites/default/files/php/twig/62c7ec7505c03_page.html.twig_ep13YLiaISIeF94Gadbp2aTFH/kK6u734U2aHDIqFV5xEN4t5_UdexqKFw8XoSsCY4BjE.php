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

/* themes/custom/kinasevych_dev/templates/layout/page.html.twig */
class __TwigTemplate_313a459c48b99858b3b2f2dcbc22101305433a59cc26a2c72454a7645ea6544d extends \Twig\Template
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
        $this->loadTemplate("@kinasevych_dev/includes/header.html.twig", "themes/custom/kinasevych_dev/templates/layout/page.html.twig", 50)->display($context);
        // line 51
        echo "
<div class=\"main-wrap\">

  ";
        // line 55
        echo "  ";
        $this->loadTemplate("@kinasevych_dev/includes/components/region-left.html.twig", "themes/custom/kinasevych_dev/templates/layout/page.html.twig", 55)->display($context);
        // line 56
        echo "
  <div class=\"region-content\">

    <div class=\"tw-container-inner\">

     ";
        // line 62
        echo "

      ";
        // line 71
        echo "

      ";
        // line 74
        echo "      <div class=\"content\">
        ";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "
      </div>

    </div>

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/kinasevych_dev/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 75,  67 => 74,  63 => 71,  59 => 62,  52 => 56,  49 => 55,  44 => 51,  42 => 50,  39 => 48,);
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

     {# <h1 class=\"inner-page\"><span class=\"color-text\">Portfolio</span></h1>#}


      {#
      {{ page.primary_menu }}
      {{ page.secondary_menu }}
      {{ page.breadcrumb }}
      {{ page.highlighted }}
      {{ page.help }}
      #}


      {# Content type - content #}
      <div class=\"content\">
        {{ page.content }}
      </div>

    </div>

  </div>

</div>
", "themes/custom/kinasevych_dev/templates/layout/page.html.twig", "/app/web/themes/custom/kinasevych_dev/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 50);
        static $filters = array("escape" => 75);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
