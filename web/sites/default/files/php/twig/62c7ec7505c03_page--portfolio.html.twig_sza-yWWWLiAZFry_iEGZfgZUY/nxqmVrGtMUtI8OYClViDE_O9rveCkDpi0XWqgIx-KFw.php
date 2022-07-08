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

/* themes/custom/kinasevych_dev/templates/layout/page--portfolio.html.twig */
class __TwigTemplate_d2ee11cb9131f1b3df3665d52fd110de65b79fb51008d1a6cd2a300975eb2322 extends \Twig\Template
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
        // line 47
        echo "
";
        // line 51
        echo "
";
        // line 54
        echo "
";
        // line 56
        echo "
";
        // line 58
        echo "
";
        // line 60
        echo "
";
        // line 63
        echo "
";
        // line 67
        echo "
";
        // line 73
        echo "
";
        // line 79
        echo "
";
        // line 81
        echo "
";
        // line 87
        echo "
";
        // line 94
        $this->loadTemplate("@kinasevych_dev/includes/header.html.twig", "themes/custom/kinasevych_dev/templates/layout/page--portfolio.html.twig", 94)->display($context);
        // line 95
        echo "
<div class=\"main-wrap\">

  ";
        // line 99
        echo "  ";
        $this->loadTemplate("@kinasevych_dev/includes/components/region-left.html.twig", "themes/custom/kinasevych_dev/templates/layout/page--portfolio.html.twig", 99)->display($context);
        // line 100
        echo "
  <div class=\"region-content\">
    <div class=\"tw-container-inner\">

      <h1 class=\"inner-page\"><span class=\"color-text\">Portfolio</span></h1>


      ";
        // line 114
        echo "

      <div class=\"content\">
        ";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
        echo "
      </div>

    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/kinasevych_dev/templates/layout/page--portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 117,  94 => 114,  85 => 100,  82 => 99,  77 => 95,  75 => 94,  72 => 87,  69 => 81,  66 => 79,  63 => 73,  60 => 67,  57 => 63,  54 => 60,  51 => 58,  48 => 56,  45 => 54,  42 => 51,  39 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
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
 */
#}
{#<div class=\"layout-container\">#}

{#  <header role=\"banner\">#}
{#    {{ page.header }}#}
{#  </header>#}

{#  {{ page.primary_menu }}#}
{#  {{ page.secondary_menu }}#}

{#  {{ page.breadcrumb }}#}

{#  {{ page.highlighted }}#}

{#  {{ page.help }}#}

{#  <main role=\"main\">#}
{#    <a id=\"main-content\" tabindex=\"-1\"></a>#}{# link is in html.html.twig #}

{#    <div class=\"layout-content\">#}
{#      {{ page.content }}#}
{#    </div>#}{# /.layout-content #}

{#    {% if page.sidebar_first %}#}
{#      <aside class=\"layout-sidebar-first\" role=\"complementary\">#}
{#        {{ page.sidebar_first }}#}
{#      </aside>#}
{#    {% endif %}#}

{#    {% if page.sidebar_second %}#}
{#      <aside class=\"layout-sidebar-second\" role=\"complementary\">#}
{#        {{ page.sidebar_second }}#}
{#      </aside>#}
{#    {% endif %}#}

{#  </main>#}

{#  {% if page.footer %}#}
{#    <footer role=\"contentinfo\">#}
{#      {{ page.footer }}#}
{#    </footer>#}
{#  {% endif %}#}

{#</div>#}{# /.layout-container #}


{#--------------------------#}

{# Include header twig template #}
{% include '@kinasevych_dev/includes/header.html.twig' %}

<div class=\"main-wrap\">

  {# Include region-left twig template #}
  {% include '@kinasevych_dev/includes/components/region-left.html.twig' %}

  <div class=\"region-content\">
    <div class=\"tw-container-inner\">

      <h1 class=\"inner-page\"><span class=\"color-text\">Portfolio</span></h1>


      {#
      {{ page.primary_menu }}
      {{ page.secondary_menu }}
      {{ page.breadcrumb }}
      {{ page.highlighted }}
      {{ page.help }}
      #}


      <div class=\"content\">
        {{ page.content }}
      </div>

    </div>
  </div>
</div>
", "themes/custom/kinasevych_dev/templates/layout/page--portfolio.html.twig", "/app/web/themes/custom/kinasevych_dev/templates/layout/page--portfolio.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 94);
        static $filters = array("escape" => 117);
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
