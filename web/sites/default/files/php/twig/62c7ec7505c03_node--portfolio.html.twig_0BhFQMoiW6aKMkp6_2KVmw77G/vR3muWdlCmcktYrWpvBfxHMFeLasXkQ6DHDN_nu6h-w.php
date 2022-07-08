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

/* themes/custom/kinasevych_dev/templates/node/node--portfolio.html.twig */
class __TwigTemplate_f7f24cbb589409aa6c7e942e24077e5f743688f29b0b089d22b90c7eb7178f0f extends \Twig\Template
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
        // line 39
        echo "
<article";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "node", 1 => "portfolio-full"], "method", false, false, true, 40), 40, $this->source), "html", null, true);
        echo ">

  <h1>";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "</h1>

  <ul class=\"info-items\">

    <li class=\"item\">
      <span class=\"item--label\">";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Client"));
        echo ": </span>

      <div class=\"item--name\">
        ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_client", [], "any", false, false, true, 50), 0, [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "
      </div>
    </li>

    <li class=\"item\">
      <span class=\"item--label\">";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Website"));
        echo ": </span>

      <div class=\"item--url\">
        <a href=\"#\" rel=\"nofollow\">";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_website", [], "any", false, false, true, 58), 0, [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "</a>
      </div>
    </li>

  </ul>

  <div class=\"portfolio--body\">
    ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "
  </div>

  <div class=\"portfolio--image\">
    <img src=\"\" alt=\"\"/>";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_project_images", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "
  </div>

  ";
        // line 73
        echo "  <div class=\"block-nextprevious \">
    ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "portfolionextprevious", "full", null, false), "html", null, true);
        echo "
  </div>

</article>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/kinasevych_dev/templates/node/node--portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 74,  98 => 73,  92 => 69,  85 => 65,  75 => 58,  69 => 55,  61 => 50,  55 => 47,  47 => 42,  42 => 40,  39 => 39,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a field.
 *
 * To override output, copy the \"field.html.twig\" from the templates directory
 * to your theme's directory and customize it, just like customizing other
 * Drupal templates such as page.html.twig or node.html.twig.
 *
 * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - field--node--field-foo--article.html.twig
 * - field--node--field-foo.html.twig
 * - field--node--article.html.twig
 * - field--field-foo.html.twig
 * - field--text-with-summary.html.twig
 * - field.html.twig
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - multiple: TRUE if a field can contain multiple items.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 * @see template_preprocess_field()
 */
#}

<article{{ attributes.addClass('node', 'portfolio-full') }}>

  <h1>{{ node.label }}</h1>

  <ul class=\"info-items\">

    <li class=\"item\">
      <span class=\"item--label\">{{ 'Client'|t }}: </span>

      <div class=\"item--name\">
        {{ content.field_client.0 }}
      </div>
    </li>

    <li class=\"item\">
      <span class=\"item--label\">{{ 'Website'|t }}: </span>

      <div class=\"item--url\">
        <a href=\"#\" rel=\"nofollow\">{{ content.field_website.0 }}</a>
      </div>
    </li>

  </ul>

  <div class=\"portfolio--body\">
    {{ content.body }}
  </div>

  <div class=\"portfolio--image\">
    <img src=\"\" alt=\"\"/>{{ content.field_project_images }}
  </div>

  {# ---------------------------------------------------------- #}
  <div class=\"block-nextprevious \">
    {{ drupal_entity('block', 'portfolionextprevious', check_access=false) }}
  </div>

</article>

", "themes/custom/kinasevych_dev/templates/node/node--portfolio.html.twig", "/app/web/themes/custom/kinasevych_dev/templates/node/node--portfolio.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 40, "t" => 47);
        static $functions = array("drupal_entity" => 74);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
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
