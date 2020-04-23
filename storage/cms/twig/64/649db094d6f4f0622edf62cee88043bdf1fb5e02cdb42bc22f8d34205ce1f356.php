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

/* C:\laragon\www\new15/themes/coop152020_2/partials/site/services_card.htm */
class __TwigTemplate_eab1cadddabb8b9d55ffd17ea832ee7bc2d45e2454684081a2791f57631113b2 extends \Twig\Template
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
        echo "<!-- ======= Clients Section ======= -->
<section id=\"clients\" class=\"clients wow fadeInUp\">
    <div class=\"container\">

        <header class=\"section-header\">
            <h4>Nuestros Servicios</h4>
        </header>

        <div class=\"row\">
              <div class=\"col-md-3\">
                  <div class=\"info-box\">
                      <span class=\"info-box-icon \">
                          <i class=\"fas fa-chart-line color-verde-fuerte\"></i>
                      </span>
                      <div class=\"info-box-content\">
                          <span class=\"info-box-text\">Inversiones</span>
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
                          <span class=\"info-box-text\">Cuenta Ahorros</span>
                          <a href=\"#\" class=\"small-box-footer\">
                              mas info <i class=\"fas fa-arrow-circle-right\"></i>
                          </a>
                      </div>
                  </div>
              </div>

            <div class=\"col-md-3\">
                <div class=\"info-box\">
                      <span class=\"info-box-icon \">
                        <i class=\"fas fa-hand-holding-usd color-verde-fuerte\"></i>
                      </span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Microcrédito</span>
                        <a href=\"#\" class=\"small-box-footer\">
                            mas info <i class=\"fas fa-arrow-circle-right\"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-md-3\">
                <div class=\"info-box\">
                      <span class=\"info-box-icon \">
                        <i class=\"fas fa-credit-card color-verde-fuerte\"></i>
                      </span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Tarjeta debito</span>
                        <a href=\"#\" class=\"small-box-footer\">
                            mas info <i class=\"fas fa-arrow-circle-right\"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-md-3\">
                <div class=\"info-box\">
                      <span class=\"info-box-icon \">
                       <i class=\"fas fa-user-md color-verde-fuerte\"></i>
                      </span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Seguros de vida</span>
                        <a href=\"#\" class=\"small-box-footer\">
                            mas info <i class=\"fas fa-arrow-circle-right\"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Clients Section -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/services_card.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ======= Clients Section ======= -->
<section id=\"clients\" class=\"clients wow fadeInUp\">
    <div class=\"container\">

        <header class=\"section-header\">
            <h4>Nuestros Servicios</h4>
        </header>

        <div class=\"row\">
              <div class=\"col-md-3\">
                  <div class=\"info-box\">
                      <span class=\"info-box-icon \">
                          <i class=\"fas fa-chart-line color-verde-fuerte\"></i>
                      </span>
                      <div class=\"info-box-content\">
                          <span class=\"info-box-text\">Inversiones</span>
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
                          <span class=\"info-box-text\">Cuenta Ahorros</span>
                          <a href=\"#\" class=\"small-box-footer\">
                              mas info <i class=\"fas fa-arrow-circle-right\"></i>
                          </a>
                      </div>
                  </div>
              </div>

            <div class=\"col-md-3\">
                <div class=\"info-box\">
                      <span class=\"info-box-icon \">
                        <i class=\"fas fa-hand-holding-usd color-verde-fuerte\"></i>
                      </span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Microcrédito</span>
                        <a href=\"#\" class=\"small-box-footer\">
                            mas info <i class=\"fas fa-arrow-circle-right\"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-md-3\">
                <div class=\"info-box\">
                      <span class=\"info-box-icon \">
                        <i class=\"fas fa-credit-card color-verde-fuerte\"></i>
                      </span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Tarjeta debito</span>
                        <a href=\"#\" class=\"small-box-footer\">
                            mas info <i class=\"fas fa-arrow-circle-right\"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-md-3\">
                <div class=\"info-box\">
                      <span class=\"info-box-icon \">
                       <i class=\"fas fa-user-md color-verde-fuerte\"></i>
                      </span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Seguros de vida</span>
                        <a href=\"#\" class=\"small-box-footer\">
                            mas info <i class=\"fas fa-arrow-circle-right\"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Clients Section -->", "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/services_card.htm", "");
    }
}
