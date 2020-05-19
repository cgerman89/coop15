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

/* C:\laragon\www\new15/themes/coop152020_2/pages/cuenta-ahorro-nino.htm */
class __TwigTemplate_930fcfb47f989fe34a271570cc86906b92d86f53bbc0a4562d7426293ea50d6c extends \Twig\Template
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
        echo "<h3>Cuenta de Ahorro Niño Feliz</h3>

<p>Fomente la cultura de ahorro de sus hijos brindándoles un mejor futuro.</p>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\new15/themes/coop152020_2/pages/cuenta-ahorro-nino.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Cuenta de Ahorro Niño Feliz</h3>

<p>Fomente la cultura de ahorro de sus hijos brindándoles un mejor futuro.</p>", "C:\\laragon\\www\\new15/themes/coop152020_2/pages/cuenta-ahorro-nino.htm", "");
    }
}
