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

/* C:\laragon\www\new15/themes/coop152020_2/pages/vision.htm */
class __TwigTemplate_408c96ebb70abd92201e385569a9b4693606d5e86c6d18494dbe968e25daa823 extends \Twig\Template
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
        echo "<p style=\"text-align: center;\"><span style=\"font-size:18px\">Seguridad, confianza y solidez a trav&eacute;s del tiempo, para nuestros clientes</span></p>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\new15/themes/coop152020_2/pages/vision.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p style=\"text-align: center;\"><span style=\"font-size:18px\">Seguridad, confianza y solidez a trav&eacute;s del tiempo, para nuestros clientes</span></p>", "C:\\laragon\\www\\new15/themes/coop152020_2/pages/vision.htm", "");
    }
}
