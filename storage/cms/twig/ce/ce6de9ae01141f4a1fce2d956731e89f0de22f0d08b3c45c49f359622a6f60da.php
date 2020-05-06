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

/* C:\laragon\www\new15/themes/coop152020_2/partials/site/content_section.htm */
class __TwigTemplate_a7beb9d56e8d30faf294f6b0332a6af9cf9c0f205c68dac86fbf2c8ddd84ef6d extends \Twig\Template
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
<div class=\"d-table  center-content wow fadeInUp\">

    <img class=\"img-fluid shadow-sm\" src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/background");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4), "html", null, true);
        echo ".jpg\" alt=\"image\">

</div>
<!-- End
About Section -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/content_section.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ======= About Section ======= -->
<div class=\"d-table  center-content wow fadeInUp\">

    <img class=\"img-fluid shadow-sm\" src=\"{{ 'assets/img/background'|theme}}/{{ this.page.id }}.jpg\" alt=\"image\">

</div>
<!-- End
About Section -->", "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/content_section.htm", "");
    }
}
