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

/* C:\laragon\www\new15/themes/coop152020_2/pages/historia.htm */
class __TwigTemplate_50f9087aa1e8209008a3c230b06fe30247e9aac713ee0c10511d418f8dc1e5e0 extends \Twig\Template
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
        echo "<h2>Rese&ntilde;a</h2>
<p>La idea de crear la Cooperativa de Ahorro y Cr&eacute;dito 15 de Abril surge cuando en la anterior crisis econ&oacute;mica, en 1964, 20 j&oacute;venes portovejenses decidieron abrir una cuenta de ahorros en el Banco Nacional de Fomento con 4.500 sucres, fue con el sue&ntilde;o de abrir una Cooperativa de Ahorros.</p>
<p>En honor al d&iacute;a en que depositaron su dinero, decidieron que la mencionada Cooperativa deb&iacute;a llevar ese nombre y desde ese momento trabajaron fuerte para lograr la confianza de los ciudadanos; con el pasar del tiempo, esos j&oacute;venes ve&iacute;an como su proyecto empezaba a tomar cuerpo.</p>
<p>La Cooperativa de Ahorro y Cr&eacute;dito 15 de Abril, durante sus ";
        // line 4
        echo twig_escape_filter($this->env, ($context["anios"] ?? null), "html", null, true);
        echo " a&ntilde;os de trayectoria ha brindado atenci&oacute;n y servicio &aacute;gil y oportuno a todos sus socios y clientes que han visto en esta instituci&oacute;n un referente de prestigio, solidez, y sobre todo seguridad y confianza, lo que nos ha fortalecido y encaminado hacia el &eacute;xito obtenido, convirti&eacute;ndonos en una de las cooperativas m&aacute;s grandes de Manab&iacute;.</p>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\new15/themes/coop152020_2/pages/historia.htm";
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
        return new Source("<h2>Rese&ntilde;a</h2>
<p>La idea de crear la Cooperativa de Ahorro y Cr&eacute;dito 15 de Abril surge cuando en la anterior crisis econ&oacute;mica, en 1964, 20 j&oacute;venes portovejenses decidieron abrir una cuenta de ahorros en el Banco Nacional de Fomento con 4.500 sucres, fue con el sue&ntilde;o de abrir una Cooperativa de Ahorros.</p>
<p>En honor al d&iacute;a en que depositaron su dinero, decidieron que la mencionada Cooperativa deb&iacute;a llevar ese nombre y desde ese momento trabajaron fuerte para lograr la confianza de los ciudadanos; con el pasar del tiempo, esos j&oacute;venes ve&iacute;an como su proyecto empezaba a tomar cuerpo.</p>
<p>La Cooperativa de Ahorro y Cr&eacute;dito 15 de Abril, durante sus {{ anios }} a&ntilde;os de trayectoria ha brindado atenci&oacute;n y servicio &aacute;gil y oportuno a todos sus socios y clientes que han visto en esta instituci&oacute;n un referente de prestigio, solidez, y sobre todo seguridad y confianza, lo que nos ha fortalecido y encaminado hacia el &eacute;xito obtenido, convirti&eacute;ndonos en una de las cooperativas m&aacute;s grandes de Manab&iacute;.</p>", "C:\\laragon\\www\\new15/themes/coop152020_2/pages/historia.htm", "");
    }
}
