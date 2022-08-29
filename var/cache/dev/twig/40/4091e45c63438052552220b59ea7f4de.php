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

/* homepage.html.twig */
class __TwigTemplate_083c2bd0b881b306f07706a78c841bc6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        // line 2
        $context["flashesbag"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "flashes", [], "any", false, false, false, 2);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container\">
        <div class=\"row\">

            ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["flashesbag"] ?? null), "success", [], "any", true, true, false, 8)) {
            // line 9
            echo "                <div class=\"col-8 mx-auto bg-success border border-dark shadow rounded\">
                    <p>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["flashesbag"]) || array_key_exists("flashesbag", $context) ? $context["flashesbag"] : (function () { throw new RuntimeError('Variable "flashesbag" does not exist.', 10, $this->source); })()), "success", [], "any", false, false, false, 10), 0, [], "array", false, false, false, 10), "html", null, true);
            echo "</p>
                </div>
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14)) {
            // line 15
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 16
                echo "                <div class=\"col-5 mx-auto bg-white border border-dark shadow my-3 p-2\">
                    <div class=\"d-inline-block\">
                        <strong>Tytuł: ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 18), "html", null, true);
                echo "</strong>
                        <p> <strong>Opis: </strong> ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "info", [], "any", false, false, false, 19), "html", null, true);
                echo "</p>
                        <p><strong>Czas utworzenia posta: </strong>";
                // line 20
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "adddate", [], "any", false, false, false, 20), "Y:m:d H:i:s"), "html", null, true);
                echo "</p>
                    </div>
                </div>
                <div class=\"d-inline-block float-right\">

                    <a class=\"btn btn-outline-primary my-2\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("see", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\"><i class=\"fa-edit\"></i></a>

                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            ";
        } else {
            // line 30
            echo "                <h1>W celu korzystania z portalu, potrzeba być zalogowanym</h1>
            ";
        }
        // line 32
        echo "
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 32,  130 => 30,  127 => 29,  117 => 25,  109 => 20,  105 => 19,  101 => 18,  97 => 16,  92 => 15,  90 => 14,  87 => 13,  81 => 10,  78 => 9,  76 => 8,  71 => 5,  61 => 4,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% set flashesbag = app.flashes %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">

            {% if flashesbag.success is defined %}
                <div class=\"col-8 mx-auto bg-success border border-dark shadow rounded\">
                    <p>{{ flashesbag.success[0] }}</p>
                </div>
            {% endif %}

            {% if app.user %}
            {% for post in posts %}
                <div class=\"col-5 mx-auto bg-white border border-dark shadow my-3 p-2\">
                    <div class=\"d-inline-block\">
                        <strong>Tytuł: {{ post.title }}</strong>
                        <p> <strong>Opis: </strong> {{ post.info }}</p>
                        <p><strong>Czas utworzenia posta: </strong>{{ post.adddate|date('Y:m:d H:i:s')}}</p>
                    </div>
                </div>
                <div class=\"d-inline-block float-right\">

                    <a class=\"btn btn-outline-primary my-2\" href=\"{{ path('see', {'id': post.id}) }}\"><i class=\"fa-edit\"></i></a>

                </div>
            {% endfor %}
            {% else %}
                <h1>W celu korzystania z portalu, potrzeba być zalogowanym</h1>
            {% endif %}

        </div>
    </div>

{% endblock %}", "homepage.html.twig", "/home/graczer057/Documents/Blog-project/templates/homepage.html.twig");
    }
}
