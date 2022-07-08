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

/* themes/custom/kinasevych_dev/templates/layout/page--front.html.twig */
class __TwigTemplate_6749a23f301ec2d3a3d4bac7780bc9ea441f30235199de8ab556dc360ea22acc extends \Twig\Template
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
        // line 46
        echo "

<div class=\"main-background\"></div>

";
        // line 51
        $this->loadTemplate("@kinasevych_dev/includes/header.html.twig", "themes/custom/kinasevych_dev/templates/layout/page--front.html.twig", 51)->display($context);
        // line 52
        echo "

";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "

";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "


<div class=\"content\" role=\"main\">
  <div class=\"content-inner tw-container\">

    ";
        // line 63
        echo "    <div class=\"block-hero\">
      ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "hero", "full", null, false), "html", null, true);
        echo "
    </div>

    ";
        // line 68
        echo "    <div class=\"block-mainmenu\">
      ";
        // line 69
        $this->loadTemplate("@kinasevych_dev/includes/components/main-menu.html.twig", "themes/custom/kinasevych_dev/templates/layout/page--front.html.twig", 69)->display($context);
        // line 70
        echo "    </div>

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/kinasevych_dev/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 70,  77 => 69,  74 => 68,  68 => 64,  65 => 63,  56 => 56,  51 => 54,  47 => 52,  45 => 51,  39 => 46,);
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


<div class=\"main-background\"></div>

{# Include header twig template #}
{% include '@kinasevych_dev/includes/header.html.twig' %}


{{ page.highlighted }}

{{ page.help }}


<div class=\"content\" role=\"main\">
  <div class=\"content-inner tw-container\">

    {# Block - hero #}
    <div class=\"block-hero\">
      {{ drupal_entity('block', 'hero', check_access=false) }}
    </div>

    {# Include main menu #}
    <div class=\"block-mainmenu\">
      {% include '@kinasevych_dev/includes/components/main-menu.html.twig' %}
    </div>

  </div>

</div>
", "themes/custom/kinasevych_dev/templates/layout/page--front.html.twig", "/app/web/themes/custom/kinasevych_dev/templates/layout/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 51);
        static $filters = array("escape" => 54);
        static $functions = array("drupal_entity" => 64);

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
                ['drupal_entity']
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
