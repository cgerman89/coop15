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
        <header class=\"section-header\">
            <h3>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h3>
        </header>

        ";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 10
        echo "
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
        return array (  52 => 10,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ======= About Section ======= -->
<div id=\"about\" class=\"content  wow fadeInUp\">

    <div class=\"container\">
        <header class=\"section-header\">
            <h3>{{ this.page.title }}</h3>
        </header>

        {% page %}

    </div>

    </div>

</div><!-- End About Section -->", "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/about_section.htm", "");
    }
}
