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

/* C:\laragon\www\new15/plugins/andreishilov/spmbreadcrumbs/components/breadcrumbs/default.htm */
class __TwigTemplate_1a2c2e4d13d9570c766addffce7cca70293bb238d1f3668ec1dd8e98fac10950 extends \Twig\Template
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
        echo "<ol id=\"breadcrumbs\" class=\"breadcrumb float-sm-right\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 3
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 3)) {
                // line 4
                echo "            <li class=\"breadcrumb-item text-capitalize\">";
                echo twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 4);
                echo "</li>
        ";
            } else {
                // line 6
                echo "            <li class=\"breadcrumb-item text-capitalize active\">
                <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 7), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 7);
                echo "</a>
            </li>
        ";
            }
            // line 10
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ol>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\new15/plugins/andreishilov/spmbreadcrumbs/components/breadcrumbs/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 11,  77 => 10,  69 => 7,  66 => 6,  60 => 4,  57 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ol id=\"breadcrumbs\" class=\"breadcrumb float-sm-right\">
    {% for link in breadcrumbs %}
        {% if loop.last %}
            <li class=\"breadcrumb-item text-capitalize\">{{ link.title|raw }}</li>
        {% else %}
            <li class=\"breadcrumb-item text-capitalize active\">
                <a href=\"{{ link.url }}\">{{ link.title|raw }}</a>
            </li>
        {% endif %}
    {% endfor %}
</ol>", "C:\\laragon\\www\\new15/plugins/andreishilov/spmbreadcrumbs/components/breadcrumbs/default.htm", "");
    }
}
