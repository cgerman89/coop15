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

/* C:\laragon\www\new15/themes/coop152020_2/partials/site/slider2.htm */
class __TwigTemplate_cd66317a2b9ef604296f55bd50d951b8ae61fa10a67b073ab3ee801206c91aff extends \Twig\Template
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
        echo "<section class=\"main-slider\" data-start-height=\"650\" data-slide-overlay=\"yes\">
        <div class=\"tp-banner-container\">
            <div class=\"tp-banner\">
                <ul>

                    <li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"1000\" data-thumb=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/main-slider/4.jpg");
        echo "\"  data-saveperformance=\"off\"  data-title=\"Call Center\">
                        <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/main-slider/4.jpg");
        echo "\"  alt=\"\"  data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"right\" data-hoffset=\"-15\"
                             data-y=\"center\" data-voffset=\"-90\"
                             data-speed=\"1500\"
                             data-start=\"0\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><h3><span style=\"color:#878382\">COMUNICATE CON NOSOTROS</span></h3></div>
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"right\" data-hoffset=\"-15\"
                             data-y=\"center\" data-voffset=\"-40\"
                             data-speed=\"1500\"
                             data-start=\"500\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><h4><span class=\"text-success\">AL CALL CENTER</span></h4></div>
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"right\" data-hoffset=\"-15\"
                             data-y=\"center\" data-voffset=\"25\"
                             data-speed=\"1500\"
                             data-start=\"1000\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"></div>
                    </li>
                    <li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"1000\" data-thumb=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/main-slider/1.jpg");
        echo "\"  data-saveperformance=\"off\"  data-title=\"Awesome Title Here\">
                        <img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/main-slider/1.jpg");
        echo "\"  alt=\"\"  data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"left\" data-hoffset=\"15\"
                             data-y=\"center\" data-voffset=\"-70\"
                             data-speed=\"1500\"
                             data-start=\"0\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"> <h3>AYUDAMOS A SU NEGOCIO A  <br> CRECER Y EXPANDIRSE</h3> </div>
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"left\" data-hoffset=\"15\"
                             data-y=\"center\" data-voffset=\"30\"
                             data-speed=\"1500\"
                             data-start=\"500\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><div class=\"text\">Créditos ágiles y oportunos para su negocio.</div></div>
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"left\" data-hoffset=\"15\"
                             data-y=\"center\" data-voffset=\"110\"
                             data-speed=\"1500\"
                             data-start=\"1000\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><a href=\"#\" class=\"theme-btn btn-style-one\">CONTACTO</a> &ensp;&ensp; <a href=\"#\" class=\"theme-btn btn-style-two\">SERVICIOS</a></div>
                    </li>
                    <li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"1000\" data-thumb=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/main-slider/2.jpg");
        echo "\"  data-saveperformance=\"off\"  data-title=\"Awesome Title Here\">
                        <img src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/main-slider/2.jpg");
        echo "\"  alt=\"\"  data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                        <div class=\"slide-overlay\"></div>
                        <div class=\"tp-caption sft sfb tp-resizeme\"
                             data-x=\"center\" data-hoffset=\"0\"
                             data-y=\"center\" data-voffset=\"-70\"
                             data-speed=\"1500\"
                             data-start=\"0\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><div class=\"text-center\"><h2>TARJETA DE DÉBITO <span class=\"theme_color\">TÚ DINERO AL INSTANTE</span></h2></div></div>
                        <div class=\"tp-caption sft sfb tp-resizeme\"
                             data-x=\"center\" data-hoffset=\"0\"
                             data-y=\"center\" data-voffset=\"5\"
                             data-speed=\"1500\"
                             data-start=\"500\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><div class=\"text text-center\">Fácil, segura y a cualquier hora.</div></div>
                        <div class=\"tp-caption sfb sfb tp-resizeme\"
                             data-x=\"center\" data-hoffset=\"0\"
                             data-y=\"center\" data-voffset=\"90\"
                             data-speed=\"1500\"
                             data-start=\"1000\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><a href=\"servicios.php?info=TarjetaDebito\" class=\"theme-btn btn-style-three\">Solicitala</a></div>
                    </li>
                    <li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"1000\" data-thumb=\"";
        // line 124
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/main-slider/3.jpg");
        echo "\"  data-saveperformance=\"off\"  data-title=\"Awesome Title Here\">
                        <img src=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/main-slider/3.jpg");
        echo "\"  alt=\"\"  data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                        <div class=\"slide-overlay\"></div>
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"right\" data-hoffset=\"-15\"
                             data-y=\"center\" data-voffset=\"-90\"
                             data-speed=\"1500\"
                             data-start=\"0\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><div class=\"text-right\"><h3>Estámos junto a ti</h3></div></div>
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"right\" data-hoffset=\"-15\"
                             data-y=\"center\" data-voffset=\"-40\"
                             data-speed=\"1500\"
                             data-start=\"500\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><h3>¡Visítanos en nuestras oficinas!</h3></div>
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"right\" data-hoffset=\"-15\"
                             data-y=\"center\" data-voffset=\"25\"
                             data-speed=\"1500\"
                             data-start=\"1000\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><h3>Personal capacitado y responsable, le dará respuesta a todas tus dudas</h3></div>
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"right\" data-hoffset=\"-15\"
                             data-y=\"center\" data-voffset=\"100\"
                             data-speed=\"1500\"
                             data-start=\"1500\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><a href=\"#\" class=\"theme-btn btn-style-three\">CONTACTO</a> &ensp;&ensp; <a href=\"\" class=\"theme-btn btn-style-four\">SERVICIOS</a></div>
                    </li>

                </ul>
            </div>
        </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/slider2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 125,  180 => 124,  138 => 85,  134 => 84,  93 => 46,  89 => 45,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"main-slider\" data-start-height=\"650\" data-slide-overlay=\"yes\">
        <div class=\"tp-banner-container\">
            <div class=\"tp-banner\">
                <ul>

                    <li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"1000\" data-thumb=\"{{ 'assets/img/main-slider/4.jpg'|theme }}\"  data-saveperformance=\"off\"  data-title=\"Call Center\">
                        <img src=\"{{ 'assets/img/main-slider/4.jpg'|theme }}\"  alt=\"\"  data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"right\" data-hoffset=\"-15\"
                             data-y=\"center\" data-voffset=\"-90\"
                             data-speed=\"1500\"
                             data-start=\"0\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><h3><span style=\"color:#878382\">COMUNICATE CON NOSOTROS</span></h3></div>
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"right\" data-hoffset=\"-15\"
                             data-y=\"center\" data-voffset=\"-40\"
                             data-speed=\"1500\"
                             data-start=\"500\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><h4><span class=\"text-success\">AL CALL CENTER</span></h4></div>
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"right\" data-hoffset=\"-15\"
                             data-y=\"center\" data-voffset=\"25\"
                             data-speed=\"1500\"
                             data-start=\"1000\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"></div>
                    </li>
                    <li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"1000\" data-thumb=\"{{ 'assets/img/main-slider/1.jpg'|theme }}\"  data-saveperformance=\"off\"  data-title=\"Awesome Title Here\">
                        <img src=\"{{ 'assets/img/main-slider/1.jpg'|theme }}\"  alt=\"\"  data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"left\" data-hoffset=\"15\"
                             data-y=\"center\" data-voffset=\"-70\"
                             data-speed=\"1500\"
                             data-start=\"0\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"> <h3>AYUDAMOS A SU NEGOCIO A  <br> CRECER Y EXPANDIRSE</h3> </div>
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"left\" data-hoffset=\"15\"
                             data-y=\"center\" data-voffset=\"30\"
                             data-speed=\"1500\"
                             data-start=\"500\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><div class=\"text\">Créditos ágiles y oportunos para su negocio.</div></div>
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"left\" data-hoffset=\"15\"
                             data-y=\"center\" data-voffset=\"110\"
                             data-speed=\"1500\"
                             data-start=\"1000\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><a href=\"#\" class=\"theme-btn btn-style-one\">CONTACTO</a> &ensp;&ensp; <a href=\"#\" class=\"theme-btn btn-style-two\">SERVICIOS</a></div>
                    </li>
                    <li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"1000\" data-thumb=\"{{ 'assets/img/main-slider/2.jpg'|theme }}\"  data-saveperformance=\"off\"  data-title=\"Awesome Title Here\">
                        <img src=\"{{ 'assets/img/main-slider/2.jpg'|theme }}\"  alt=\"\"  data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                        <div class=\"slide-overlay\"></div>
                        <div class=\"tp-caption sft sfb tp-resizeme\"
                             data-x=\"center\" data-hoffset=\"0\"
                             data-y=\"center\" data-voffset=\"-70\"
                             data-speed=\"1500\"
                             data-start=\"0\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><div class=\"text-center\"><h2>TARJETA DE DÉBITO <span class=\"theme_color\">TÚ DINERO AL INSTANTE</span></h2></div></div>
                        <div class=\"tp-caption sft sfb tp-resizeme\"
                             data-x=\"center\" data-hoffset=\"0\"
                             data-y=\"center\" data-voffset=\"5\"
                             data-speed=\"1500\"
                             data-start=\"500\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><div class=\"text text-center\">Fácil, segura y a cualquier hora.</div></div>
                        <div class=\"tp-caption sfb sfb tp-resizeme\"
                             data-x=\"center\" data-hoffset=\"0\"
                             data-y=\"center\" data-voffset=\"90\"
                             data-speed=\"1500\"
                             data-start=\"1000\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><a href=\"servicios.php?info=TarjetaDebito\" class=\"theme-btn btn-style-three\">Solicitala</a></div>
                    </li>
                    <li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"1000\" data-thumb=\"{{ 'assets/img/main-slider/3.jpg'|theme }}\"  data-saveperformance=\"off\"  data-title=\"Awesome Title Here\">
                        <img src=\"{{ 'assets/img/main-slider/3.jpg'|theme }}\"  alt=\"\"  data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                        <div class=\"slide-overlay\"></div>
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"right\" data-hoffset=\"-15\"
                             data-y=\"center\" data-voffset=\"-90\"
                             data-speed=\"1500\"
                             data-start=\"0\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><div class=\"text-right\"><h3>Estámos junto a ti</h3></div></div>
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"right\" data-hoffset=\"-15\"
                             data-y=\"center\" data-voffset=\"-40\"
                             data-speed=\"1500\"
                             data-start=\"500\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><h3>¡Visítanos en nuestras oficinas!</h3></div>
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"right\" data-hoffset=\"-15\"
                             data-y=\"center\" data-voffset=\"25\"
                             data-speed=\"1500\"
                             data-start=\"1000\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><h3>Personal capacitado y responsable, le dará respuesta a todas tus dudas</h3></div>
                        <div class=\"tp-caption sfl sfb tp-resizeme\"
                             data-x=\"right\" data-hoffset=\"-15\"
                             data-y=\"center\" data-voffset=\"100\"
                             data-speed=\"1500\"
                             data-start=\"1500\"
                             data-easing=\"easeOutExpo\"
                             data-splitin=\"none\"
                             data-splitout=\"none\"
                             data-elementdelay=\"0.01\"
                             data-endelementdelay=\"0.3\"
                             data-endspeed=\"1200\"
                             data-endeasing=\"Power4.easeIn\"><a href=\"#\" class=\"theme-btn btn-style-three\">CONTACTO</a> &ensp;&ensp; <a href=\"\" class=\"theme-btn btn-style-four\">SERVICIOS</a></div>
                    </li>

                </ul>
            </div>
        </div>
    </section>", "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/slider2.htm", "");
    }
}
