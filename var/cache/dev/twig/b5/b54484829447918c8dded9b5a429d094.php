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

/* home.html.twig */
class __TwigTemplate_2739d08cc8c2b8f92e92cdbfb6492d3e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home.html.twig", 1);
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

        echo "Accueil";
        
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
        echo "
    ";
        // line 8
        echo "    <div class=\"d-flex text-center justify-content-center mt-5\">
        <figure>
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/logo_mini.png"), "html", null, true);
        echo "\" alt=\"logo societe\" width=\"300vw\" height=\"150vh\">
            <figcaption>
                <p>Thierry Jacotet</p>
                <p>Société CODE CONCEPTION DESIGN</p>
            </figcaption>
        </figure>
    </div>
    <hr>
    <div>
        <h1>Comment un conseil peut vous apporter plus que vous ne croyez : </h1>
            <div>
                <video id=\"intro\" controls width=\"500vw\" height=\"300vh\" autoplay class=\"justify-content-center homeVideo\">
                    <source src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/home/shilingck_en.mp4"), "html", null, true);
        echo "\" type=\"Video/mp4\">
                </video>
                <p class=\"text-center mt-3\">Téléphone : 06 63 77 88 25</p>
                <p class=\"text-center\">Email : <a href=\"mailto:thierry.jacotet@gmail.com\">thierry.jacotet@gmail.com</a></p>
            </div>
            <br>
        <hr>
        <h2>Nos services :</h2>
        <div class=\"container row d-flex justify-content-center p-4\" width=\"30vw\" height=\"10wh\">
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 32
            echo "                ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 32))) {
                // line 33
                echo "                    <div class=\"d-flex col-3 justify-content-center\">
                        <div class=\"img-taille-service-mission\">
                            <div class=\"img-texte\">
                                <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\"><p class=\"img-service-text cat-div\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 36), "html", null, true);
                echo "</p></a>
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 41
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            ";
        // line 66
        echo "        </div>
        <br>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 66,  150 => 42,  144 => 41,  134 => 36,  129 => 33,  126 => 32,  122 => 31,  110 => 22,  95 => 10,  91 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block content %}

    {# <h2 class=\"text-center mt-2\">Notre objectif : <br>Démocratiser l'accès aux conseils d'un Architecte diplômé d'État</h2> #}
    <div class=\"d-flex text-center justify-content-center mt-5\">
        <figure>
            <img src=\"{{ asset('images/home/logo_mini.png') }}\" alt=\"logo societe\" width=\"300vw\" height=\"150vh\">
            <figcaption>
                <p>Thierry Jacotet</p>
                <p>Société CODE CONCEPTION DESIGN</p>
            </figcaption>
        </figure>
    </div>
    <hr>
    <div>
        <h1>Comment un conseil peut vous apporter plus que vous ne croyez : </h1>
            <div>
                <video id=\"intro\" controls width=\"500vw\" height=\"300vh\" autoplay class=\"justify-content-center homeVideo\">
                    <source src=\"{{ asset('videos/home/shilingck_en.mp4') }}\" type=\"Video/mp4\">
                </video>
                <p class=\"text-center mt-3\">Téléphone : 06 63 77 88 25</p>
                <p class=\"text-center\">Email : <a href=\"mailto:thierry.jacotet@gmail.com\">thierry.jacotet@gmail.com</a></p>
            </div>
            <br>
        <hr>
        <h2>Nos services :</h2>
        <div class=\"container row d-flex justify-content-center p-4\" width=\"30vw\" height=\"10wh\">
            {% for categorie in categories %}
                {% if categorie.nom is not null %}
                    <div class=\"d-flex col-3 justify-content-center\">
                        <div class=\"img-taille-service-mission\">
                            <div class=\"img-texte\">
                                <a href=\"{{ path('app_categorie', {id: categorie.id}) }}\"><p class=\"img-service-text cat-div\">{{ categorie.nom }}</p></a>
                            </div>
                        </div>
                    </div>
                {% endif %}
            {% endfor %}
            {# <div class=\"d-flex col-12 justify-content-center\">
                <div class=\"img-taille-service-mission\">
                    <div class=\"img-texte\">
                        <a href=\"#\"><p class=\"img-service-text\">Missions</p></a>
                    </div>
                </div>
                <div class=\"img-taille-service-discount\">
                    <div class=\"img-texte-double\">
                        <a href=\"#\"><p class=\"img-service-text\">Mission Discount</p></a>
                    </div>
                </div>
            </div>
            <div class=\"container d-flex col-12 justify-content-center img-service-copro\">
                <div class=\"img-taille-service\">
                    <div class=\"img-texte\">
                        <a href=\"#\"><p class=\"img-service-text\">Copropriétés</p></a>
                    </div>
                </div>
                <div class=\"img-taille-service\">
                    <div>
                        <img src=\"{{ asset('images/home/logo_mini.png') }}\" width=\"200px\" height=\"200px\" alt=\"logo société CODE CONCEPTION DESIGN\">
                    </div>
                </div>
            </div> #}
        </div>
        <br>
    </div>

{% endblock %}", "home.html.twig", "C:\\wamp64\\www\\dwwm-doranco\\Symfony\\site_interieur\\templates\\home.html.twig");
    }
}
