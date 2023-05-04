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

/* article/allArticles.html.twig */
class __TwigTemplate_a2d885a8562d802de72fda38934005b8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/allArticles.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "article/allArticles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des articles";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<h1>Liste des articles : </h1>
    <hr>
    <table class=\"table table-bordered text-center\">
        <thead class=\"bg-primary <style-color:white;>\">
            <tr>
                <th style=\"width: 20%\">Photo/image</th>
                <th style=\"width: 20%\">Catégorie</th>
                <th>Titre</th>
                <th style=\"width: 15%\">Actions</th>
            </tr>
        </thead>

        <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 20
            echo "                <tr>
                    <td>
                        ";
            // line 22
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 22))) {
                // line 23
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/articles/" . twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 23))), "html", null, true);
                echo "\" class=\"img-fluid m-3\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 23), "html", null, true);
                echo "\" style=\"width: 15%\">
                        ";
            }
            // line 25
            echo "                    </td>
                    <td>
                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "categories", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 28
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 28), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    </td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">
                            <i class=\"fas fa-eye mx-1 text-info\"></i>
                        </a>
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_update", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">
                            <i class=\"fas fa-edit mx-1 text-success\"></i>
                        </a>
                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">
                            <i class=\"fas fa-trash text-danger\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "article/allArticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 45,  143 => 39,  137 => 36,  131 => 33,  126 => 31,  123 => 30,  114 => 28,  110 => 27,  106 => 25,  98 => 23,  96 => 22,  92 => 20,  88 => 19,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Liste des articles{% endblock %}

{% block content %}
<h1>Liste des articles : </h1>
    <hr>
    <table class=\"table table-bordered text-center\">
        <thead class=\"bg-primary <style-color:white;>\">
            <tr>
                <th style=\"width: 20%\">Photo/image</th>
                <th style=\"width: 20%\">Catégorie</th>
                <th>Titre</th>
                <th style=\"width: 15%\">Actions</th>
            </tr>
        </thead>

        <tbody>
            {% for article in articles %}
                <tr>
                    <td>
                        {% if article.image is not null %}
                            <img src=\"{{ asset('images/articles/' ~ article.image) }}\" class=\"img-fluid m-3\" alt=\"{{ article.titre }}\" style=\"width: 15%\">
                        {% endif %}
                    </td>
                    <td>
                        {% for categorie in article.categories %}
                            {{ categorie.nom }}
                        {% endfor %}
                    </td>
                    <td>{{ article.titre }}</td>
                    <td>
                        <a href=\"{{ path('app_article', {id: article.id}) }}\">
                            <i class=\"fas fa-eye mx-1 text-info\"></i>
                        </a>
                        <a href=\"{{ path('app_article_update', {id: article.id}) }}\">
                            <i class=\"fas fa-edit mx-1 text-success\"></i>
                        </a>
                        <a href=\"{{ path('app_article_delete', {id: article.id}) }}\">
                            <i class=\"fas fa-trash text-danger\"></i>
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

{% endblock %}", "article/allArticles.html.twig", "C:\\wamp64\\www\\dwwm-doranco\\Symfony\\site_interieur\\templates\\article\\allArticles.html.twig");
    }
}
