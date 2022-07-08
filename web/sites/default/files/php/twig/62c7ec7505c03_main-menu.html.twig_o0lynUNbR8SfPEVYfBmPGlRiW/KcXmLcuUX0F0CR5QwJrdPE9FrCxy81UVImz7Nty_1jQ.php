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

/* @kinasevych_dev/includes/components/main-menu.html.twig */
class __TwigTemplate_094bca378e9fa1f6a04382b59ed1a384bee0fca0cc77f8cd045a365cafb4688c extends \Twig\Template
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
        // line 1
        echo "<div class=\"main-menu\">
  ";
        // line 3
        echo "  ";
        $context["main_menu_items"] = $this->env->getFunction('simplify_menu')->getCallable()("main");
        // line 4
        echo "
  <ul class=\"main-menu--list\" role=\"menu\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["main_menu_items"] ?? null), "menu_tree", [], "any", false, false, true, 6));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
            // line 7
            echo "
      <li class=\"main-menu--item item-";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\">";
            // line 9
            echo "        <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["menu_item"], "url", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\"
           class=\"main-menu--link\">
          <span>";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["menu_item"], "text", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</span>
        </a>
      </li>

    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "@kinasevych_dev/includes/components/main-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 16,  78 => 11,  72 => 9,  69 => 8,  66 => 7,  49 => 6,  45 => 4,  42 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"main-menu\">
  {# Get main menu items #}
  {% set main_menu_items = simplify_menu('main') %}

  <ul class=\"main-menu--list\" role=\"menu\">
    {% for menu_item in main_menu_items.menu_tree %}

      <li class=\"main-menu--item item-{{ loop.index }}\">{#loop.index це i (це порядок в списку)#}
        <a href=\"{{ menu_item.url }}\"
           class=\"main-menu--link\">
          <span>{{ menu_item.text }}</span>
        </a>
      </li>

    {% endfor %}
  </ul>
</div>
", "@kinasevych_dev/includes/components/main-menu.html.twig", "/app/web/themes/custom/kinasevych_dev/templates/includes/components/main-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "for" => 6);
        static $filters = array("escape" => 8);
        static $functions = array("simplify_menu" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape'],
                ['simplify_menu']
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
