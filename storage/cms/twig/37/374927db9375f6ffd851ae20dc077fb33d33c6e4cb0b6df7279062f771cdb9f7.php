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

/* C:\laragon\www\new15/themes/coop152020_2/pages/cuenta-de-ahorro.htm */
class __TwigTemplate_fb850d558f1474c48e4af7ef1080e9bcae84b647c59dfc70cfee5cf3f3b3aaa2 extends \Twig\Template
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
        echo "<h3 class=\"about-title\">Características</h3>
<p class=\"text-justify\">Monto de apertura mínima \$50.00, destinados a certificado de aportación \$30.00. Cero costos de mantenimiento.</p>
<div class=\"row\">
    <div class=\"col-md-3\">
        <div class=\"info-box\">
                      <span class=\"info-box-icon \">
                          <i class=\"fas fa-chart-line color-verde-fuerte\"></i>
                      </span>
            <div class=\"info-box-content\">
                <span class=\"info-box-text\">Ahorro</span>
                <a href=\"#\" class=\"small-box-footer\">
                    mas info <i class=\"fas fa-arrow-circle-right\"></i>
                </a>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"info-box\">
                      <span class=\"info-box-icon \">
                        <i class=\"fas fa-donate color-verde-fuerte\"></i>
                      </span>
            <div class=\"info-box-content\">
                <span class=\"info-box-text\">Ahorros Niño Feliz</span>
                <a href=\"#\" class=\"small-box-footer\">
                    mas info <i class=\"fas fa-arrow-circle-right\"></i>
                </a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\new15/themes/coop152020_2/pages/cuenta-de-ahorro.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3 class=\"about-title\">Características</h3>
<p class=\"text-justify\">Monto de apertura mínima \$50.00, destinados a certificado de aportación \$30.00. Cero costos de mantenimiento.</p>
<div class=\"row\">
    <div class=\"col-md-3\">
        <div class=\"info-box\">
                      <span class=\"info-box-icon \">
                          <i class=\"fas fa-chart-line color-verde-fuerte\"></i>
                      </span>
            <div class=\"info-box-content\">
                <span class=\"info-box-text\">Ahorro</span>
                <a href=\"#\" class=\"small-box-footer\">
                    mas info <i class=\"fas fa-arrow-circle-right\"></i>
                </a>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"info-box\">
                      <span class=\"info-box-icon \">
                        <i class=\"fas fa-donate color-verde-fuerte\"></i>
                      </span>
            <div class=\"info-box-content\">
                <span class=\"info-box-text\">Ahorros Niño Feliz</span>
                <a href=\"#\" class=\"small-box-footer\">
                    mas info <i class=\"fas fa-arrow-circle-right\"></i>
                </a>
            </div>
        </div>
    </div>
</div>", "C:\\laragon\\www\\new15/themes/coop152020_2/pages/cuenta-de-ahorro.htm", "");
    }
}
