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

/* post.html.twig */
class __TwigTemplate_6bc7c7b6092b7b45de2dec3c9acb4c776376f5dd74c7ae7f8a7fbee56bae61f5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post.html.twig"));

        // line 2
        $context["flashesbag"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "flashes", [], "any", false, false, false, 2);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["posts"]) {
            // line 15
            echo "                <div class=\"col-5 mx-auto bg-light border border-dark shadow my-3 p-2\">
                    <div class=\"d-inline-block\">
                        <strong>Tytuł: ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["posts"], "title", [], "any", false, false, false, 17), "html", null, true);
            echo "</strong>
                        <p> <strong>Opis: </strong> ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["posts"], "info", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                        <p><strong>Czas utworzenia posta: </strong>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["posts"], "adddate", [], "any", false, false, false, 19), "Y:m:d H:i:s"), "html", null, true);
            echo "</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['posts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 23,  106 => 19,  102 => 18,  98 => 17,  94 => 15,  90 => 14,  87 => 13,  81 => 10,  78 => 9,  76 => 8,  71 => 5,  61 => 4,  50 => 1,  48 => 2,  35 => 1,);
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

            {% for posts in post %}
                <div class=\"col-5 mx-auto bg-light border border-dark shadow my-3 p-2\">
                    <div class=\"d-inline-block\">
                        <strong>Tytuł: {{ posts.title }}</strong>
                        <p> <strong>Opis: </strong> {{ posts.info }}</p>
                        <p><strong>Czas utworzenia posta: </strong>{{ posts.adddate|date('Y:m:d H:i:s')}}</p>
                    </div>
                </div>
            {% endfor %}

        </div>
    </div>

{% endblock %}", "post.html.twig", "C:\\Users\\bartl\\Projekty_tydzień_2\\Blog_vol.1\\templates\\post.html.twig");
    }
}
