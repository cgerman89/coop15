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

/* C:\laragon\www\new15/themes/coop152020_2/partials/site/features_section.htm */
class __TwigTemplate_183856f3af6130ed6a50ebd3b81f9b7a7e2b89a852ee4071a8b9262a50f45ec7 extends \Twig\Template
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
        echo "<!-- ======= Features Section ======= -->
<section id=\"features\" class=\"features\">
    <div class=\"container\">
        <div class=\"row feature-item\">
            <div class=\"col-lg-6 wow fadeInUp\">
                <img src=\" ";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/image-8.jpg");
        echo " \" class=\"img-fluid\" alt=\"\">
            </div>
            <div class=\"col-lg-6 wow fadeInUp pt-5 pt-lg-0\">
                <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
                <p>
                    Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
                </p>
                <p>
                    Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
                </p>
            </div>
        </div>

        <div class=\"row feature-item mt-5 pt-5\">
            <div class=\"col-lg-6 wow fadeInUp order-1 order-lg-2\">
                <img src=\" ";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/features-2.svg");
        echo " \" class=\"img-fluid\" alt=\"\">
            </div>

            <div class=\"col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1\">
                <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
                <p>
                    Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt.
                </p>
                <p>
                    Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
                </p>
                <p>
                    Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
                </p>
            </div>

        </div>

    </div>
</section><!-- End Features Section -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/features_section.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 21,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ======= Features Section ======= -->
<section id=\"features\" class=\"features\">
    <div class=\"container\">
        <div class=\"row feature-item\">
            <div class=\"col-lg-6 wow fadeInUp\">
                <img src=\" {{ 'assets/img/image-8.jpg'|theme }} \" class=\"img-fluid\" alt=\"\">
            </div>
            <div class=\"col-lg-6 wow fadeInUp pt-5 pt-lg-0\">
                <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
                <p>
                    Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
                </p>
                <p>
                    Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
                </p>
            </div>
        </div>

        <div class=\"row feature-item mt-5 pt-5\">
            <div class=\"col-lg-6 wow fadeInUp order-1 order-lg-2\">
                <img src=\" {{ 'assets/img/features-2.svg'|theme }} \" class=\"img-fluid\" alt=\"\">
            </div>

            <div class=\"col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1\">
                <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
                <p>
                    Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt.
                </p>
                <p>
                    Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
                </p>
                <p>
                    Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
                </p>
            </div>

        </div>

    </div>
</section><!-- End Features Section -->", "C:\\laragon\\www\\new15/themes/coop152020_2/partials/site/features_section.htm", "");
    }
}
