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
class __TwigTemplate_f79e50d8ab475b0a51fa95ce41d797ef extends Template
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
<h1>Accueil</h1>
    <div class=\"d-flex text-center justify-content-center\">
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
        <h2>Comment un conseil peut vous apporter plus que vous ne croyez : </h2>
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
        <div class=\"container row d-flex justify-content-center\" width=\"30vw\" height=\"10wh\">
            <div class=\"d-flex col-12 justify-content-center\">
                <div class=\"card\">
                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/interieur_1.png"), "html", null, true);
        echo "\" alt=\"service Aménagement\" class=\"bg-image img-services\" width= \"200vw\" height=\"200vh\">
                    <p>Copropriétés</p>
                </div>
                <div class=\"card\">
                    <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/isolation_1.png"), "html", null, true);
        echo "\" alt=\"service Isolation appartement\" class=\"bg-image img-services\" width= \"200vw\" height=\"200vh\">
                </div>
            </div>
            <div class=\"container d-flex col-12 justify-content-center\">
                <div class=\"card img-service-copro\">
                    <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/trend_interieur.jpg"), "html", null, true);
        echo "\" alt=\"service Aménagement\" class=\"bg-image img-services\" width= \"200vw\" height=\"200vh\">
                    <div class=\"img-service-text\">
                        <p>Copropriétés</p>  
                    </div>
                </div>
                <div class=\"card\">
                    <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/logo.png"), "html", null, true);
        echo "\" alt=\"service Isolation appartement\" class=\"bg-image img-services\" width= \"200vw\" height=\"200vh\">
                </div>
            </div>
        </div>
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
        return array (  147 => 48,  138 => 42,  130 => 37,  123 => 33,  109 => 22,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block content %}

<h1>Accueil</h1>
    <div class=\"d-flex text-center justify-content-center\">
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
        <h2>Comment un conseil peut vous apporter plus que vous ne croyez : </h2>
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
        <div class=\"container row d-flex justify-content-center\" width=\"30vw\" height=\"10wh\">
            <div class=\"d-flex col-12 justify-content-center\">
                <div class=\"card\">
                    <img src=\"{{ asset('images/home/interieur_1.png') }}\" alt=\"service Aménagement\" class=\"bg-image img-services\" width= \"200vw\" height=\"200vh\">
                    <p>Copropriétés</p>
                </div>
                <div class=\"card\">
                    <img src=\"{{ asset('images/home/isolation_1.png') }}\" alt=\"service Isolation appartement\" class=\"bg-image img-services\" width= \"200vw\" height=\"200vh\">
                </div>
            </div>
            <div class=\"container d-flex col-12 justify-content-center\">
                <div class=\"card img-service-copro\">
                    <img src=\"{{ asset('images/home/trend_interieur.jpg') }}\" alt=\"service Aménagement\" class=\"bg-image img-services\" width= \"200vw\" height=\"200vh\">
                    <div class=\"img-service-text\">
                        <p>Copropriétés</p>  
                    </div>
                </div>
                <div class=\"card\">
                    <img src=\"{{ asset('images/home/logo.png') }}\" alt=\"service Isolation appartement\" class=\"bg-image img-services\" width= \"200vw\" height=\"200vh\">
                </div>
            </div>
        </div>
        <br>
    </div>

{% endblock %}", "home.html.twig", "C:\\wamp64\\www\\dwwm-doranco\\Symfony\\site_interieur\\templates\\home.html.twig");
    }
}
