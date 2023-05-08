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

/* auteur/allAuteurs.html.twig */
class __TwigTemplate_a966f0a1f5c0496051b027012a90a9fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteur/allAuteurs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteur/allAuteurs.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "auteur/allAuteurs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des auteurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<h1>Liste des auteurs des articles : </h1>
    <hr>
    <table class=\"table table-bordered text-center\">
        <thead class=\"bg-primary tableau-recap\">
            <tr>
                <th style=\"width: 25%\">Photo/image</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["auteurs"]) || array_key_exists("auteurs", $context) ? $context["auteurs"] : (function () { throw new RuntimeError('Variable "auteurs" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["auteur"]) {
            // line 20
            echo "                <tr>
                    <td>
                        ";
            // line 22
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["auteur"], "image", [], "any", false, false, false, 22))) {
                // line 23
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/auteurs/" . twig_get_attribute($this->env, $this->source, $context["auteur"], "image", [], "any", false, false, false, 23))), "html", null, true);
                echo "\" class=\"img-fluid m-3\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "fullName", [], "any", false, false, false, 23), "html", null, true);
                echo "\" style=\"width: 15%\">
                        ";
            }
            // line 25
            echo "                    </td>
                    <td class=\"texte-tableau-recap\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "nom", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td class=\"texte-tableau-recap\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "prenom", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td class=\"texte-tableau-recap\">
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_auteur_update", ["id" => twig_get_attribute($this->env, $this->source, $context["auteur"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">
                            <i class=\"fas fa-edit mx-1 text-success\"></i>
                        </a>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_auteur_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["auteur"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">
                            <i class=\"fas fa-trash text-danger\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "auteur/allAuteurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 38,  139 => 32,  133 => 29,  128 => 27,  124 => 26,  121 => 25,  113 => 23,  111 => 22,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Liste des auteurs{% endblock %}

{% block content %}
<h1>Liste des auteurs des articles : </h1>
    <hr>
    <table class=\"table table-bordered text-center\">
        <thead class=\"bg-primary tableau-recap\">
            <tr>
                <th style=\"width: 25%\">Photo/image</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            {% for auteur in auteurs %}
                <tr>
                    <td>
                        {% if auteur.image is not null %}
                            <img src=\"{{ asset('images/auteurs/' ~ auteur.image) }}\" class=\"img-fluid m-3\" alt=\"{{ auteur.fullName }}\" style=\"width: 15%\">
                        {% endif %}
                    </td>
                    <td class=\"texte-tableau-recap\">{{ auteur.nom }}</td>
                    <td class=\"texte-tableau-recap\">{{ auteur.prenom }}</td>
                    <td class=\"texte-tableau-recap\">
                        <a href=\"{{ path('admin_app_auteur_update', {id: auteur.id}) }}\">
                            <i class=\"fas fa-edit mx-1 text-success\"></i>
                        </a>
                        <a href=\"{{ path('admin_app_auteur_delete', {id: auteur.id}) }}\">
                            <i class=\"fas fa-trash text-danger\"></i>
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

{% endblock %}", "auteur/allAuteurs.html.twig", "C:\\Users\\padet\\Desktop\\site_interieur\\templates\\auteur\\allAuteurs.html.twig");
    }
}
