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
        echo "<div class=\"content-header mt-4 wow fadeInUp\">
    <div class=\"container \">
        <div class=\"row mb-2\">
            <div class=\"col-sm-4\"></div>
            <div class=\"col-sm-8\">
                <nav aria-label=\"breadcrumb\" class=\"pull-right\">
                    ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("breadcrumbs"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "                </nav>
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
        return array (  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content-header mt-4 wow fadeInUp\">
    <div class=\"container \">
        <div class=\"row mb-2\">
            <div class=\"col-sm-4\"></div>
            <div class=\"col-sm-8\">
                <nav aria-label=\"breadcrumb\" class=\"pull-right\">
                    {% component 'breadcrumbs' %}
                </nav>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>", "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/breadcrumb_section.htm", "");
    }
}
