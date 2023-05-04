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

/* article/oneArticle.html.twig */
class __TwigTemplate_9330b9b0305d321e31f5a674a2d7e532 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/oneArticle.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "article/oneArticle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Voir l'article ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        // line 10
        echo "            ";
        // line 17
        echo "
    <div class=\"row d-flex justify-content-center text-center\">  

        <h1>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), "html", null, true);
        echo "</h1>
        <h6 class=\"text-muted\"> publié le : ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 21, $this->source); })()), "dateDeCreation", [], "any", false, false, false, 21), "d/m/Y à H\\hi"), "html", null, true);
        echo "</h6>
        ";
        // line 22
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 22, $this->source); })()), "dateDeModification", [], "any", false, false, false, 22))) {
            // line 23
            echo "            <h6 class=\"text-muted\"> modifié le : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 23, $this->source); })()), "dateDeModification", [], "any", false, false, false, 23), "d/m/Y à H\\hi"), "html", null, true);
            echo "</h6>
        ";
        }
        // line 25
        echo "        
        ";
        // line 26
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 26, $this->source); })()), "auteur", [], "any", false, false, false, 26))) {
            // line 27
            echo "                <h6>auteur : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 27, $this->source); })()), "auteur", [], "any", false, false, false, 27), "fullName", [], "any", false, false, false, 27), "html", null, true);
            echo "</h6>
        ";
        } else {
            // line 29
            echo "                <h6 class=\"text-muted\"> auteur anonyme</h6>
        ";
        }
        // line 31
        echo "
        <div>
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\">
                <i class=\"fas fa-edit mx-1 text-success\"></i>
            </a>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\" onClick=\"return confirm('êtes-vous sûr de vouloir supprimer l\\'article ?')\">
                <i class=\"fas fa-trash mx-1 text-danger\"></i>
            </a>
        </div>

        ";
        // line 41
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 41, $this->source); })()), "image", [], "any", false, false, false, 41))) {
            // line 42
            echo "        ";
            // line 43
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/articles/" . twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 43, $this->source); })()), "image", [], "any", false, false, false, 43))), "html", null, true);
            echo "\" class=\"img-fluid m-3\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 43, $this->source); })()), "titre", [], "any", false, false, false, 43), "html", null, true);
            echo "\" style=\"width: 25%\">
        ";
        }
        // line 45
        echo "
        <p>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 46, $this->source); })()), "contenu", [], "any", false, false, false, 46), "html", null, true);
        echo "</p>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "article/oneArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 46,  143 => 45,  135 => 43,  133 => 42,  131 => 41,  123 => 36,  117 => 33,  113 => 31,  109 => 29,  103 => 27,  101 => 26,  98 => 25,  92 => 23,  90 => 22,  86 => 21,  82 => 20,  77 => 17,  75 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Voir l'article {% endblock %}

{% block content %}
    {# {% for article in articles %}
        <div class=\"card\">
            <h1>{{ article.titre }}</h1>
            {# <h2>{{ article.categorie }}</h2> #}
            {# {% if article.image is not null %}
                <img src=\"{{ asset('images/articles/' ~ article.image) }}\" class=\"img-fluid m-3\" alt=\"{{ article.titre }}\" style=\"width: 15%\">
            {% endif %}
            <br>
            <p>{{ article.contenu }}</p>
        </div>
    {% endfor %} #}

    <div class=\"row d-flex justify-content-center text-center\">  

        <h1>{{ article.titre }}</h1>
        <h6 class=\"text-muted\"> publié le : {{ article.dateDeCreation | date(\"d/m/Y \\à H\\\\hi\") }}</h6>
        {% if article.dateDeModification is not null %}
            <h6 class=\"text-muted\"> modifié le : {{ article.dateDeModification | date(\"d/m/Y \\à H\\\\hi\") }}</h6>
        {% endif %}
        
        {% if article.auteur is not null %}
                <h6>auteur : {{ article.auteur.fullName }}</h6>
        {% else %}
                <h6 class=\"text-muted\"> auteur anonyme</h6>
        {% endif %}

        <div>
            <a href=\"{{ path('app_article_update', {id: article.id}) }}\">
                <i class=\"fas fa-edit mx-1 text-success\"></i>
            </a>
            <a href=\"{{ path('app_article_delete', {id: article.id}) }}\" onClick=\"return confirm('êtes-vous sûr de vouloir supprimer l\\'article ?')\">
                <i class=\"fas fa-trash mx-1 text-danger\"></i>
            </a>
        </div>

        {% if article.image is not null %}
        {# la fonction asset() va chercher dans le dossier public #}
                <img src=\"{{ asset('images/articles/' ~ article.image) }}\" class=\"img-fluid m-3\" alt=\"{{ article.titre }}\" style=\"width: 25%\">
        {% endif %}

        <p>{{ article.contenu }}</p>
    </div>

{% endblock %}", "article/oneArticle.html.twig", "C:\\wamp64\\www\\dwwm-doranco\\Symfony\\site_interieur\\templates\\article\\oneArticle.html.twig");
    }
}
