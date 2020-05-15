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

/* C:\laragon\www\new15/themes/coop152020_2/partials/site/call_section.htm */
class __TwigTemplate_803ab0c353228def4f17d64ef052b439a75d6966bb5da7ff9cfb39809e339b60 extends \Twig\Template
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
        echo "<!-- ======= Call To Action Section ======= -->
<section id=\"call-to-action\" class=\"call-to-action wow fadeInUp\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-9 text-center text-lg-left\">
                <h3 class=\"cta-title\">Call To Action</h3>
                <p class=\"cta-text\"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

    </div>
</section><!--  End Call To Action Section -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/call_section.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ======= Call To Action Section ======= -->
<section id=\"call-to-action\" class=\"call-to-action wow fadeInUp\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-9 text-center text-lg-left\">
                <h3 class=\"cta-title\">Call To Action</h3>
                <p class=\"cta-text\"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

    </div>
</section><!--  End Call To Action Section -->", "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/call_section.htm", "");
    }
}
