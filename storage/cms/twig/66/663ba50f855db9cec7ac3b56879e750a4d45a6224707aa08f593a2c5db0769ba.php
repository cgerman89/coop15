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

/* C:\laragon\www\new15/themes/coop152020_2/partials/site/header.htm */
class __TwigTemplate_665448631421bc618c00fe53724e9831ae91094f734585c09f6b3f047338ef4b extends \Twig\Template
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
        echo "<!-- ======= Header ======= -->
<header id=\"header\" class=\" d-table center-content\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-2\">

                    <div class=\"logo pull-left\">
                        <a href=\"/\">
                            <img src=\" ";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo_fondo_bl-01-01-2.png");
        echo " \"  alt=\"\" class=\"img-fluid\">
                        </a>
                    </div>

            </div>
            <div class=\"col-10\">
                    <div id=\"topbar\">
                        <div class=\"container\">
                           <div class=\"text-right\">
                               ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/acceso_virtual"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "                           </div>
                        </div>
                    </div>
                    <nav class=\"main-nav float-right d-none d-lg-block\">

                            ";
        // line 24
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticMenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 25
        echo "
                    </nav><!-- .main-nav -->
            </div>
        </div>
    </div>
</header><!-- #header -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  70 => 24,  63 => 19,  59 => 18,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ======= Header ======= -->
<header id=\"header\" class=\" d-table center-content\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-2\">

                    <div class=\"logo pull-left\">
                        <a href=\"/\">
                            <img src=\" {{ 'assets/img/logo_fondo_bl-01-01-2.png'|theme }} \"  alt=\"\" class=\"img-fluid\">
                        </a>
                    </div>

            </div>
            <div class=\"col-10\">
                    <div id=\"topbar\">
                        <div class=\"container\">
                           <div class=\"text-right\">
                               {% partial 'site/acceso_virtual' %}
                           </div>
                        </div>
                    </div>
                    <nav class=\"main-nav float-right d-none d-lg-block\">

                            {% component 'staticMenu' %}

                    </nav><!-- .main-nav -->
            </div>
        </div>
    </div>
</header><!-- #header -->", "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/header.htm", "");
    }
}
