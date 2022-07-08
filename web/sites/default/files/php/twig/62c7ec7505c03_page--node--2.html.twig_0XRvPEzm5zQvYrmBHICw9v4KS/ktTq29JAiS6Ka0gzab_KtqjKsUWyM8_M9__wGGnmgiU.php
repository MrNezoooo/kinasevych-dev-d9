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

/* themes/custom/kinasevych_dev/templates/layout/page--node--2.html.twig */
class __TwigTemplate_697fcb0d47a2a5115ebecb74668b0d4b31f77b08fd3631983458ef71b23ed648 extends \Twig\Template
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
        // line 2
        echo "

";
        // line 5
        $this->loadTemplate("@kinasevych_dev/includes/header.html.twig", "themes/custom/kinasevych_dev/templates/layout/page--node--2.html.twig", 5)->display($context);
        // line 6
        echo "

<div class=\"main-wrap\">

  ";
        // line 11
        echo "  ";
        $this->loadTemplate("@kinasevych_dev/includes/components/region-left.html.twig", "themes/custom/kinasevych_dev/templates/layout/page--node--2.html.twig", 11)->display($context);
        // line 12
        echo "
  <div class=\"tw-container-inner\">

    <div class=\"block-title\">
      <h1 class=\"inner-page\">Contact <span class=\"color-text\">Me</span></h1>
    </div>

    <div class=\"contact-form-wrap\">
      ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("webform", "contact"), "html", null, true);
        echo "
    </div>

  </div>";
        // line 24
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/kinasevych_dev/templates/layout/page--node--2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  64 => 20,  54 => 12,  51 => 11,  45 => 6,  43 => 5,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {{ vardumper(content) }} #}


{# Include header twig template #}
{% include '@kinasevych_dev/includes/header.html.twig' %}


<div class=\"main-wrap\">

  {# Include region-left twig template #}
  {% include '@kinasevych_dev/includes/components/region-left.html.twig' %}

  <div class=\"tw-container-inner\">

    <div class=\"block-title\">
      <h1 class=\"inner-page\">Contact <span class=\"color-text\">Me</span></h1>
    </div>

    <div class=\"contact-form-wrap\">
      {{ drupal_entity('webform', 'contact') }}
    </div>

  </div>{# /.layout-container #}

</div>
", "themes/custom/kinasevych_dev/templates/layout/page--node--2.html.twig", "/app/web/themes/custom/kinasevych_dev/templates/layout/page--node--2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 5);
        static $filters = array("escape" => 20);
        static $functions = array("drupal_entity" => 20);

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
