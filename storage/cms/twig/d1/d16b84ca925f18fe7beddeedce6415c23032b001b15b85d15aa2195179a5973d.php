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

/* C:\laragon\www\new15/themes/coop152020_2/partials/site/breadcrumb_section.htm */
class __TwigTemplate_b5622ce0bdbd986926941d3ab2d1826fc89bbcd38efcc0cb728708f839b03485 extends \Twig\Template
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
        echo "<div class=\"content-header  wow fadeInUp\">
    <div class=\" container \">

        <div class=\"row mb-2\">
            <div class=\"col-sm-6\">
                <h1 class=\"m-0 text-dark \"> ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "html", null, true);
        echo " </h1>
            </div><!-- /.col -->
            <div class=\"col-sm-6\">
           
               ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("breadcrumbs"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "                     
                     
            </div><!-- /.col -->
        </div><!-- /.row -->

    </div><!-- /.container-fluid -->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/breadcrumb_section.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content-header  wow fadeInUp\">
    <div class=\" container \">

        <div class=\"row mb-2\">
            <div class=\"col-sm-6\">
                <h1 class=\"m-0 text-dark \"> {{ this.page.title }} </h1>
            </div><!-- /.col -->
            <div class=\"col-sm-6\">
           
               {% component 'breadcrumbs' %}
                     
                     
            </div><!-- /.col -->
        </div><!-- /.row -->

    </div><!-- /.container-fluid -->
</div>", "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/breadcrumb_section.htm", "");
    }
}
