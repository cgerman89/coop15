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

/* C:\laragon\www\new15/themes/coop152020_2/layouts/home_layout.htm */
class __TwigTemplate_8d5e961c353fa274ee9ebca2bb8893afec6bdcf450bca5352797351e776dd0dc extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Coop15Abril - ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "meta_description", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "meta_title", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"coop15Abril\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"  ";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon.png");
        echo " \" rel=\"icon\">
    <link href=\" ";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/apple-touch-icon.png");
        echo " \" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Muli:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap\" rel=\"stylesheet\">
    <!-- Vendor CSS Files -->
    <link href=\" ";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/css/bootstrap.min.css");
        echo " \" rel=\"stylesheet\">
    <link href=\" ";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/adminlte3/dist/css/adminlte.min.css");
        echo " \" rel=\"stylesheet\">
    <link href=\" ";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/animate.css/animate.min.css");
        echo " \" rel=\"stylesheet\">
    <link href=\" ";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/font-awesome/css/font-awesome.min.css");
        echo " \" rel=\"stylesheet\">
    <link href=\" ";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/fontawesome-free/css/all.min.css");
        echo " \" rel=\"stylesheet\">
    <link href=\" ";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/ionicons/css/ionicons.min.css");
        echo " \" rel=\"stylesheet\">
    <link href=\" ";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/venobox/venobox.css");
        echo " \" rel=\"stylesheet\">
    <link href=\" ";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel/assets/owl.carousel.min.css");
        echo " \" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\" ";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/revolution-slider.css");
        echo " \" rel=\"stylesheet\">
    <link href=\" ";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slider-setting.css");
        echo " \" rel=\"stylesheet\">
    <link href=\" ";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo " \" rel=\"stylesheet\">
    <link href=\" ";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/btn_slider.css");
        echo " \" rel=\"stylesheet\">


    <!-- =======================================================
    * Template Name: Rapid - v2.0.0
    * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
<div  id=\"preloader\" class=\"bg-light\"></div>

";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/slider2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "
<main id=\"main\">

    ";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/services_card"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/features_section"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/call_section"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "</main><!-- End #main -->

";
        // line 58
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 59
        echo "
<a href=\"#\" class=\"back-to-top\"><i class=\"fa fa-chevron-up\"></i></a>

<!-- Vendor JS Files -->
<script src=\" ";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery/jquery.min.js");
        echo " \"></script>
<script src=\" ";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/js/bootstrap.bundle.min.js");
        echo " \"></script>
<script src=\" ";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/adminlte3/dist/js/adminlte.min.js");
        echo " \"></script>
<script src=\" ";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.easing/jquery.easing.min.js");
        echo " \"></script>
<script src=\" ";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/php-email-form/validate.js");
        echo " \"></script>
<script src=\" ";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/isotope-layout/isotope.pkgd.min.js");
        echo " \"></script>
<script src=\" ";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/counterup/counterup.min.js");
        echo " \"></script>
<script src=\" ";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/venobox/venobox.min.js");
        echo " \"></script>
<script src=\" ";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/mobile-nav/mobile-nav.js");
        echo " \"></script>
<script src=\" ";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/wow/wow.min.js");
        echo " \"></script>
<script src=\" ";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel/owl.carousel.min.js");
        echo " \"></script>
<script src=\" ";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/waypoints/jquery.waypoints.min.js");
        echo " \"></script>



<!-- Template Main JS File -->
<script src=\" ";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/revolution.min.js");
        echo " \"></script>
<script src=\" ";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo " \"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\new15/themes/coop152020_2/layouts/home_layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 80,  230 => 79,  222 => 74,  218 => 73,  214 => 72,  210 => 71,  206 => 70,  202 => 69,  198 => 68,  194 => 67,  190 => 66,  186 => 65,  182 => 64,  178 => 63,  172 => 59,  168 => 58,  164 => 56,  159 => 55,  154 => 54,  150 => 53,  145 => 50,  141 => 49,  137 => 48,  120 => 34,  116 => 33,  112 => 32,  108 => 31,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  66 => 16,  62 => 15,  54 => 10,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Coop15Abril - {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"coop15Abril\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"  {{ 'assets/img/favicon.png'|theme }} \" rel=\"icon\">
    <link href=\" {{ 'assets/img/apple-touch-icon.png'|theme }} \" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Muli:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap\" rel=\"stylesheet\">
    <!-- Vendor CSS Files -->
    <link href=\" {{ 'assets/vendor/bootstrap/css/bootstrap.min.css'|theme }} \" rel=\"stylesheet\">
    <link href=\" {{ 'assets/vendor/adminlte3/dist/css/adminlte.min.css'|theme }} \" rel=\"stylesheet\">
    <link href=\" {{ 'assets/vendor/animate.css/animate.min.css'|theme }} \" rel=\"stylesheet\">
    <link href=\" {{ 'assets/vendor/font-awesome/css/font-awesome.min.css'|theme }} \" rel=\"stylesheet\">
    <link href=\" {{ 'assets/vendor/fontawesome-free/css/all.min.css'|theme }} \" rel=\"stylesheet\">
    <link href=\" {{ 'assets/vendor/ionicons/css/ionicons.min.css'|theme }} \" rel=\"stylesheet\">
    <link href=\" {{ 'assets/vendor/venobox/venobox.css'|theme }} \" rel=\"stylesheet\">
    <link href=\" {{ 'assets/vendor/owl.carousel/assets/owl.carousel.min.css'|theme }} \" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\" {{ 'assets/css/revolution-slider.css'|theme }} \" rel=\"stylesheet\">
    <link href=\" {{ 'assets/css/slider-setting.css'|theme }} \" rel=\"stylesheet\">
    <link href=\" {{ 'assets/css/style.css'|theme }} \" rel=\"stylesheet\">
    <link href=\" {{ 'assets/css/btn_slider.css'|theme }} \" rel=\"stylesheet\">


    <!-- =======================================================
    * Template Name: Rapid - v2.0.0
    * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
<div  id=\"preloader\" class=\"bg-light\"></div>

{% partial 'site/header' %}
{% partial 'site/slider2' %}

<main id=\"main\">

    {% partial 'site/services_card' %}
    {% partial 'site/features_section' %}
    {% partial 'site/call_section' %}
</main><!-- End #main -->

{% partial 'site/footer' %}

<a href=\"#\" class=\"back-to-top\"><i class=\"fa fa-chevron-up\"></i></a>

<!-- Vendor JS Files -->
<script src=\" {{ 'assets/vendor/jquery/jquery.min.js'|theme }} \"></script>
<script src=\" {{ 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'|theme }} \"></script>
<script src=\" {{ 'assets/vendor/adminlte3/dist/js/adminlte.min.js'|theme }} \"></script>
<script src=\" {{ 'assets/vendor/jquery.easing/jquery.easing.min.js'|theme }} \"></script>
<script src=\" {{ 'assets/vendor/php-email-form/validate.js'|theme }} \"></script>
<script src=\" {{ 'assets/vendor/isotope-layout/isotope.pkgd.min.js'|theme }} \"></script>
<script src=\" {{ 'assets/vendor/counterup/counterup.min.js'|theme }} \"></script>
<script src=\" {{ 'assets/vendor/venobox/venobox.min.js'|theme }} \"></script>
<script src=\" {{ 'assets/vendor/mobile-nav/mobile-nav.js'|theme }} \"></script>
<script src=\" {{ 'assets/vendor/wow/wow.min.js'|theme }} \"></script>
<script src=\" {{ 'assets/vendor/owl.carousel/owl.carousel.min.js'|theme }} \"></script>
<script src=\" {{ 'assets/vendor/waypoints/jquery.waypoints.min.js'|theme }} \"></script>



<!-- Template Main JS File -->
<script src=\" {{ 'assets/js/revolution.min.js'|theme }} \"></script>
<script src=\" {{ 'assets/js/main.js'|theme }} \"></script>

</body>

</html>", "C:\\laragon\\www\\new15/themes/coop152020_2/layouts/home_layout.htm", "");
    }
}
