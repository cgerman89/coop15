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

/* C:\laragon\www\new15/themes/coop152020_2/partials/site/about_section.htm */
class __TwigTemplate_b47d119a113999dd0e55d70abc6e200e2c6e94a06f35e0cbff66853e222f15e6 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- ======= About Section ======= -->
<div id=\"about\" class=\"content  wow fadeInUp\">

    <div class=\"container\">

        <div class=\"row\">

           <div class=\"about-content\">
                
                ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "                
           </div>

        </div>

    </div>

</div><!-- End About Section -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/about_section.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ======= About Section ======= -->
<div id=\"about\" class=\"content  wow fadeInUp\">

    <div class=\"container\">

        <div class=\"row\">

           <div class=\"about-content\">
                
                {% component 'staticPage' %}
                
           </div>

        </div>

    </div>

</div><!-- End About Section -->", "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/about_section.htm", "");
    }
}
