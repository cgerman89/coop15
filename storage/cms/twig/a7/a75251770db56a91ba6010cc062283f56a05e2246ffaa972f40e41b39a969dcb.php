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

/* C:\laragon\www\new15/themes/coop152020_2/partials/site/acceso_virtual.htm */
class __TwigTemplate_0dd78f9c883f91947eb23a6c7057767eb8b275fee089d61213aa36f262c4cfe3 extends \Twig\Template
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
        echo "<a id=\"acceso_virtual\" href=\"https://wbanking.coop15abril.fin.ec/15onLine/inicio.jsf\"  target=\"_blank\" class=\"btn btn-success\" >
    <i class=\"fab fa-internet-explorer\"></i>&nbsp;15 online
</a>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/acceso_virtual.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a id=\"acceso_virtual\" href=\"https://wbanking.coop15abril.fin.ec/15onLine/inicio.jsf\"  target=\"_blank\" class=\"btn btn-success\" >
    <i class=\"fab fa-internet-explorer\"></i>&nbsp;15 online
</a>", "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/acceso_virtual.htm", "");
    }
}
