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

/* C:\laragon\www\new15/plugins/mey/breadcrumbs/components/breadcrumbs/default.htm */
class __TwigTemplate_810998d16aa98e7d44ca69f8a42f81a88265ba13d65c26922165b43575f7f09c extends \Twig\Template
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
        $context["crumbOptions"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "options", [], "any", false, false, false, 1);
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["currentCrumb"] ?? null), "show_crumb", [], "any", false, false, false, 2)) {
            // line 3
            echo "<ol class=\"";
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["crumbOptions"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["main-ol-class"] ?? null) : null), "html", null, true);
            echo "\">
";
            // line 4
            $context["activeCrumb"] = "";
            // line 5
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
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 6
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, $context["crumb"], "in_crumb_trail", [], "any", false, false, false, 6)) {
                    // line 7
                    echo "    <li class=\"";
                    echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["crumbOptions"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["main-li-class"] ?? null) : null), "html", null, true);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, $context["crumb"], "crumb_disabled", [], "any", false, false, false, 7)) {
                        echo " ";
                        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["crumbOptions"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["disabled-class"] ?? null) : null), "html", null, true);
                        echo " ";
                    }
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 7)) {
                        echo " ";
                        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["crumbOptions"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["active-class"] ?? null) : null), "html", null, true);
                        echo " ";
                    }
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 7)) {
                        echo " id=\"bcLast\" ";
                    }
                    echo ">
        ";
                    // line 8
                    if (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 8) &&  !twig_get_attribute($this->env, $this->source, $context["crumb"], "crumb_disabled", [], "any", false, false, false, 8))) {
                        echo " <a href=\"";
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, $context["crumb"], "baseFileName", [], "any", false, false, false, 8));
                        echo "\"> ";
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["crumb"], "title", [], "any", false, false, false, 8), "html", null, true);
                    echo " ";
                    if (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 8) &&  !twig_get_attribute($this->env, $this->source, $context["crumb"], "is_disabled", [], "any", false, false, false, 8))) {
                        echo "</a>";
                    }
                    // line 9
                    echo "    </li>
    ";
                }
                // line 11
                echo "
    ";
                // line 12
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "        ";
                    $context["activeCrumb"] = $context["crumb"];
                    // line 14
                    echo "    ";
                }
                // line 15
                echo "
";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "</ol>
";
        }
        // line 19
        echo "
";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["activeCrumb"] ?? null), "elementTitle", [], "any", false, false, false, 21)) {
            // line 22
            echo "<script>
    document.addEventListener('DOMContentLoaded', function (){
        var bcTitle = document.getElementById('";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["activeCrumb"] ?? null), "elementTitle", [], "any", false, false, false, 24), "html", null, true);
            echo "');
        var bcActive = document.getElementById('bcLast');

        if (bcTitle) {
            bcActive.innerHTML = bcTitle.innerHTML;
        }
    });
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\new15/plugins/mey/breadcrumbs/components/breadcrumbs/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 24,  140 => 22,  138 => 21,  135 => 19,  131 => 17,  116 => 15,  113 => 14,  110 => 13,  108 => 12,  105 => 11,  101 => 9,  89 => 8,  68 => 7,  65 => 6,  48 => 5,  46 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set crumbOptions = __SELF__.options %}
{% if currentCrumb.show_crumb %}
<ol class=\"{{crumbOptions['main-ol-class']}}\">
{% set activeCrumb = '' %}
{% for crumb in breadcrumbs %}
    {% if crumb.in_crumb_trail %}
    <li class=\"{{crumbOptions['main-li-class']}} {% if crumb.crumb_disabled %} {{crumbOptions['disabled-class']}} {% endif %} {% if loop.last %} {{crumbOptions['active-class']}} {% endif %}\" {% if loop.last %} id=\"bcLast\" {% endif %}>
        {% if not loop.last and not crumb.crumb_disabled %} <a href=\"{{crumb.baseFileName | page}}\"> {% endif %} {{crumb.title}} {% if not loop.last and not crumb.is_disabled %}</a>{% endif %}
    </li>
    {% endif %}

    {% if loop.last %}
        {% set activeCrumb = crumb %}
    {% endif %}

{% endfor %}
</ol>
{% endif %}

{# javascript to enable dynamic breadcrumbs. Helpful for ':slug' type routes #}
{% if activeCrumb.elementTitle %}
<script>
    document.addEventListener('DOMContentLoaded', function (){
        var bcTitle = document.getElementById('{{activeCrumb.elementTitle}}');
        var bcActive = document.getElementById('bcLast');

        if (bcTitle) {
            bcActive.innerHTML = bcTitle.innerHTML;
        }
    });
</script>
{% endif %}
", "C:\\laragon\\www\\new15/plugins/mey/breadcrumbs/components/breadcrumbs/default.htm", "");
    }
}
