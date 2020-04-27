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
<header id=\"header\" class=\"\">

    <div id=\"topbar\">
        <div class=\"container\">
            <div class=\"social-links\">
                <a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\"></i></a>
                <a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook\"></i></a>
                <a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"fab fa-youtube\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\"></i></a>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"logo pull-left\">
            <a href=\"/\">
                <img src=\" ";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo-small.png");
        echo " \"  alt=\"\" class=\"img-fluid\">
            </a>
        </div>

        <nav class=\"main-nav float-right d-none d-lg-block\">
           
           ";
        // line 25
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticMenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "
        </nav><!-- .main-nav -->

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
        return array (  70 => 26,  66 => 25,  57 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ======= Header ======= -->
<header id=\"header\" class=\"\">

    <div id=\"topbar\">
        <div class=\"container\">
            <div class=\"social-links\">
                <a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\"></i></a>
                <a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook\"></i></a>
                <a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"fab fa-youtube\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\"></i></a>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"logo pull-left\">
            <a href=\"/\">
                <img src=\" {{ 'assets/img/logo-small.png'|theme }} \"  alt=\"\" class=\"img-fluid\">
            </a>
        </div>

        <nav class=\"main-nav float-right d-none d-lg-block\">
           
           {% component 'staticMenu' %}

        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->", "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/header.htm", "");
    }
}
