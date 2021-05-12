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
            'javascripts' => [$this, 'block_javascripts'],
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
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["flashesbag"] ?? null), "success", [], "any", true, true, false, 7)) {
            // line 8
            echo "                <div id=\"success\" class=\"col-8 mx-auto bg-success border border-dark shadow rounded\">
                    <p>comment add</p>
                </div>
            ";
        }
        // line 12
        echo "                <div class=\"col-5 mx-auto bg-light border border-dark shadow my-3 p-2\">
                    <div id=\"likes_area\" class=\"d-inline-block\">
                        <strong>Tytuł: ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</strong>
                        <p> <strong>Opis: </strong> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 15, $this->source); })()), "info", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
                        <p><strong>Czas utworzenia posta: </strong>";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 16, $this->source); })()), "adddate", [], "any", false, false, false, 16), "Y:m:d H:i:s"), "html", null, true);
        echo "</p>
                        <p class=\"like__count\" id=\"like__count\"><strong>Liczba polubień: </strong><span id=\"likes__quantity\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["likes"]) || array_key_exists("likes", $context) ? $context["likes"] : (function () { throw new RuntimeError('Variable "likes" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</span></p>
";
        // line 19
        echo "                        <button class=\"btn__unlike\" id=\"btn__unlike\">Nie lubię tego</button>
                    </div>
                </div>

            <div class=\"col-5 mx-auto bg-light border border-dark shadow my-3 p-2\">

                <h5>Jeśli chcesz pozostawić komentarz pod tym postem musisz być zalogowany</h5>


                ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "
                    ";
            // line 30
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start', ["attr" => ["class" => "comment_form"]]);
            echo "
                    ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "info", [], "any", false, false, false, 31), 'row');
            echo "

                    <button class=\"btn__comment\" id=\"btn__comment\">Skomentuj</button>

                    ";
            // line 35
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
            echo "

                ";
        }
        // line 38
        echo "            </div>

            <div class=\"col-12\">
                <div id=\"comments-area\" class=\"row\">
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 43
            echo "                        <div id=\"comment-show\" class=\"col-5 mx-auto bg-light border border-dark shadow my-3 p-2\">
                            <p><strong>Komentarz: </strong>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "info", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
                            <p><strong>Czas utworzenia posta: </strong>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "adddate", [], "any", false, false, false, 45), "Y:m:d H:i:s"), "html", null, true);
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "
    <script>
        \$('.btn__unlike').on('click', function (event){
            event.preventDefault();

            \$.ajax({
                url: '";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unlike", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)]), "html", null, true);
        echo "',
                type: \"delete\",
                method: \"delete\",
                success: (responseData) => {
                    let newLikeHtmlObj = \$('#likes__quantity')

                    newLikeHtmlObj.html(parseInt(newLikeHtmlObj.html()) - 1)
                }
            })
        })
        \$('.btn__like').on('click', function (event){
            event.preventDefault();

            \$.ajax({
                url: '";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_like", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75)]), "html", null, true);
        echo "',
                type: \"post\",
                method: \"post\",
                success: (responseData) => {
                    let newLikeHtmlObj = \$('#likes__quantity')

                    newLikeHtmlObj.html(parseInt(newLikeHtmlObj.html()) + 1)
                }
            })
        })
        \$('.comment_form').on('submit', function (event){
            event.preventDefault();
            let info = document.getElementById('comment_info').value
            let time = new Date()
            let addDate = time.getFullYear() + \":\" +  time.getMonth() + \":\" + time.getDay() + \" \" + time.getHours() + \":\" + time.getMinutes() + \":\" + time.getSeconds()
            \$.ajax({
                url: '";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_comment", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91)]), "html", null, true);
        echo "',
                type: \"post\",
                method: \"post\",
                data: \$(this).serialize(),
                success: (dataResponse) => {
                    let successMSG = dataResponse.status

                    \$('#success').append(successMSG)

                    let newCommentHtmlObj =
                        '<div id=\"comment-show\" class=\"col-5 mx-auto bg-light border border-dark shadow my-3 p-2\"><p><strong>Komentarz: </strong>'+info+'</p><p><strong>Czas utworzenia posta: </strong>'+addDate+'</p></div>'

                    \$('#comments-area').append(newCommentHtmlObj)
                }
            })
        })
    </script>
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
        return array (  232 => 91,  213 => 75,  196 => 61,  188 => 55,  178 => 54,  163 => 48,  154 => 45,  150 => 44,  147 => 43,  143 => 42,  137 => 38,  131 => 35,  124 => 31,  120 => 30,  117 => 29,  115 => 28,  104 => 19,  100 => 17,  96 => 16,  92 => 15,  88 => 14,  84 => 12,  78 => 8,  76 => 7,  72 => 5,  62 => 4,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% set flashesbag = app.flashes %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            {% if flashesbag.success is defined %}
                <div id=\"success\" class=\"col-8 mx-auto bg-success border border-dark shadow rounded\">
                    <p>comment add</p>
                </div>
            {% endif %}
                <div class=\"col-5 mx-auto bg-light border border-dark shadow my-3 p-2\">
                    <div id=\"likes_area\" class=\"d-inline-block\">
                        <strong>Tytuł: {{ post.title }}</strong>
                        <p> <strong>Opis: </strong> {{ post.info }}</p>
                        <p><strong>Czas utworzenia posta: </strong>{{ post.adddate|date('Y:m:d H:i:s')}}</p>
                        <p class=\"like__count\" id=\"like__count\"><strong>Liczba polubień: </strong><span id=\"likes__quantity\">{{ likes }}</span></p>
{#                        <button class=\"btn__like\" id=\"btn__like\">Lubię to</button>#}
                        <button class=\"btn__unlike\" id=\"btn__unlike\">Nie lubię tego</button>
                    </div>
                </div>

            <div class=\"col-5 mx-auto bg-light border border-dark shadow my-3 p-2\">

                <h5>Jeśli chcesz pozostawić komentarz pod tym postem musisz być zalogowany</h5>


                {% if app.user %}

                    {{ form_start(form, { 'attr': {'class':'comment_form'}}) }}
                    {{ form_row(form.info) }}

                    <button class=\"btn__comment\" id=\"btn__comment\">Skomentuj</button>

                    {{ form_end(form) }}

                {% endif %}
            </div>

            <div class=\"col-12\">
                <div id=\"comments-area\" class=\"row\">
                    {% for comment in comments %}
                        <div id=\"comment-show\" class=\"col-5 mx-auto bg-light border border-dark shadow my-3 p-2\">
                            <p><strong>Komentarz: </strong>{{ comment.info }}</p>
                            <p><strong>Czas utworzenia posta: </strong>{{ comment.adddate|date('Y:m:d H:i:s')}}</p>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>

{% endblock %}
{% block javascripts %}

    <script>
        \$('.btn__unlike').on('click', function (event){
            event.preventDefault();

            \$.ajax({
                url: '{{ path('app_unlike', {'id':post.id}) }}',
                type: \"delete\",
                method: \"delete\",
                success: (responseData) => {
                    let newLikeHtmlObj = \$('#likes__quantity')

                    newLikeHtmlObj.html(parseInt(newLikeHtmlObj.html()) - 1)
                }
            })
        })
        \$('.btn__like').on('click', function (event){
            event.preventDefault();

            \$.ajax({
                url: '{{ path('add_like',{'id':post.id}) }}',
                type: \"post\",
                method: \"post\",
                success: (responseData) => {
                    let newLikeHtmlObj = \$('#likes__quantity')

                    newLikeHtmlObj.html(parseInt(newLikeHtmlObj.html()) + 1)
                }
            })
        })
        \$('.comment_form').on('submit', function (event){
            event.preventDefault();
            let info = document.getElementById('comment_info').value
            let time = new Date()
            let addDate = time.getFullYear() + \":\" +  time.getMonth() + \":\" + time.getDay() + \" \" + time.getHours() + \":\" + time.getMinutes() + \":\" + time.getSeconds()
            \$.ajax({
                url: '{{ path('create_comment',{'id':post.id}) }}',
                type: \"post\",
                method: \"post\",
                data: \$(this).serialize(),
                success: (dataResponse) => {
                    let successMSG = dataResponse.status

                    \$('#success').append(successMSG)

                    let newCommentHtmlObj =
                        '<div id=\"comment-show\" class=\"col-5 mx-auto bg-light border border-dark shadow my-3 p-2\"><p><strong>Komentarz: </strong>'+info+'</p><p><strong>Czas utworzenia posta: </strong>'+addDate+'</p></div>'

                    \$('#comments-area').append(newCommentHtmlObj)
                }
            })
        })
    </script>
{% endblock %}", "post.html.twig", "C:\\Users\\bartl\\BLOG\\templates\\post.html.twig");
    }
}
