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

/* C:\laragon\www\new15/themes/coop152020_2/partials/site/pricin_section.htm */
class __TwigTemplate_41a6e72a617bf932e8b14057fdcaeb91656ff15812e5997a7d75682983b42c6f extends \Twig\Template
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
        echo "<!-- ======= Pricing Section ======= -->
<section id=\"pricing\" class=\"pricing section-bg wow fadeInUp\">

    <div class=\"container\">

        <header class=\"section-header\">
            <h3>Pricing</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <div class=\"row flex-items-xs-middle flex-items-xs-center\">

            <!-- Basic Plan  -->
            <div class=\"col-xs-12 col-lg-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><span class=\"currency\">\$</span>19<span class=\"period\">/month</span></h3>
                    </div>
                    <div class=\"card-block\">
                        <h4 class=\"card-title\">
                            Basic Plan
                        </h4>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">Odio animi voluptates</li>
                            <li class=\"list-group-item\">Inventore quisquam et</li>
                            <li class=\"list-group-item\">Et perspiciatis suscipit</li>
                            <li class=\"list-group-item\">24/7 Support System</li>
                        </ul>
                        <a href=\"#\" class=\"btn\">Choose Plan</a>
                    </div>
                </div>
            </div>

            <!-- Regular Plan  -->
            <div class=\"col-xs-12 col-lg-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><span class=\"currency\">\$</span>29<span class=\"period\">/month</span></h3>
                    </div>
                    <div class=\"card-block\">
                        <h4 class=\"card-title\">
                            Regular Plan
                        </h4>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">Odio animi voluptates</li>
                            <li class=\"list-group-item\">Inventore quisquam et</li>
                            <li class=\"list-group-item\">Et perspiciatis suscipit</li>
                            <li class=\"list-group-item\">24/7 Support System</li>
                        </ul>
                        <a href=\"#\" class=\"btn\">Choose Plan</a>
                    </div>
                </div>
            </div>

            <!-- Premium Plan  -->
            <div class=\"col-xs-12 col-lg-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><span class=\"currency\">\$</span>39<span class=\"period\">/month</span></h3>
                    </div>
                    <div class=\"card-block\">
                        <h4 class=\"card-title\">
                            Premium Plan
                        </h4>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">Odio animi voluptates</li>
                            <li class=\"list-group-item\">Inventore quisquam et</li>
                            <li class=\"list-group-item\">Et perspiciatis suscipit</li>
                            <li class=\"list-group-item\">24/7 Support System</li>
                        </ul>
                        <a href=\"#\" class=\"btn\">Choose Plan</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section><!-- End Pricing Section -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/pricin_section.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ======= Pricing Section ======= -->
<section id=\"pricing\" class=\"pricing section-bg wow fadeInUp\">

    <div class=\"container\">

        <header class=\"section-header\">
            <h3>Pricing</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <div class=\"row flex-items-xs-middle flex-items-xs-center\">

            <!-- Basic Plan  -->
            <div class=\"col-xs-12 col-lg-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><span class=\"currency\">\$</span>19<span class=\"period\">/month</span></h3>
                    </div>
                    <div class=\"card-block\">
                        <h4 class=\"card-title\">
                            Basic Plan
                        </h4>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">Odio animi voluptates</li>
                            <li class=\"list-group-item\">Inventore quisquam et</li>
                            <li class=\"list-group-item\">Et perspiciatis suscipit</li>
                            <li class=\"list-group-item\">24/7 Support System</li>
                        </ul>
                        <a href=\"#\" class=\"btn\">Choose Plan</a>
                    </div>
                </div>
            </div>

            <!-- Regular Plan  -->
            <div class=\"col-xs-12 col-lg-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><span class=\"currency\">\$</span>29<span class=\"period\">/month</span></h3>
                    </div>
                    <div class=\"card-block\">
                        <h4 class=\"card-title\">
                            Regular Plan
                        </h4>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">Odio animi voluptates</li>
                            <li class=\"list-group-item\">Inventore quisquam et</li>
                            <li class=\"list-group-item\">Et perspiciatis suscipit</li>
                            <li class=\"list-group-item\">24/7 Support System</li>
                        </ul>
                        <a href=\"#\" class=\"btn\">Choose Plan</a>
                    </div>
                </div>
            </div>

            <!-- Premium Plan  -->
            <div class=\"col-xs-12 col-lg-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3><span class=\"currency\">\$</span>39<span class=\"period\">/month</span></h3>
                    </div>
                    <div class=\"card-block\">
                        <h4 class=\"card-title\">
                            Premium Plan
                        </h4>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">Odio animi voluptates</li>
                            <li class=\"list-group-item\">Inventore quisquam et</li>
                            <li class=\"list-group-item\">Et perspiciatis suscipit</li>
                            <li class=\"list-group-item\">24/7 Support System</li>
                        </ul>
                        <a href=\"#\" class=\"btn\">Choose Plan</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section><!-- End Pricing Section -->", "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/pricin_section.htm", "");
    }
}
