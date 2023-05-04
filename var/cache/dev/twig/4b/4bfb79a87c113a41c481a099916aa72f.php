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

/* panier/index.html.twig */
class __TwigTemplate_c09d04f6c10b6e8dd896218a9c852cd4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "panier/index.html.twig", 1);
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

        echo "Panier";
        
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
        echo "<section class=\"h-100 h-custom\" style=\"background-color: #eee;\">
\t<div class=\"container py-5 h-100\">
\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prestations_client");
        echo " \" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-long-arrow-alt-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\tRetourner aux Prestations
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<hr>
                                ";
        // line 21
        if ( !twig_test_empty((isset($context["dataPanier"]) || array_key_exists("dataPanier", $context) ? $context["dataPanier"] : (function () { throw new RuntimeError('Variable "dataPanier" does not exist.', 21, $this->source); })()))) {
            // line 22
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dataPanier"]) || array_key_exists("dataPanier", $context) ? $context["dataPanier"] : (function () { throw new RuntimeError('Variable "dataPanier" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 23
                echo "                                    <div class=\"card mb-3\">
                                        <div class=\"card-body\">
                                            <div class=\"d-flex justify-content-between\">
                                                <div class=\"d-flex flex-row align-items-center\">
                                                    ";
                // line 30
                echo "                                                    <div class=\"ms-3\">
                                                        <h5>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "produit", [], "any", false, false, false, 31), "titre", [], "any", false, false, false, 31), "html", null, true);
                echo "</h5>
                                                        <p class=\"small mb-0\">Description : ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "produit", [], "any", false, false, false, 32), "description", [], "any", false, false, false, 32), "html", null, true);
                echo "</p>
                                                        <p class=\"small mb-0\">Tarif : ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "produit", [], "any", false, false, false, 33), "prix", [], "any", false, false, false, 33), "html", null, true);
                echo " €</p>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex flex-row align-items-center\">
                                                    <div style=\"width: 50px;\">
                                                        <h6 class=\"fw-normal mb-0\">
                                                            ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "produit", [], "any", false, false, false, 39), "prix", [], "any", false, false, false, 39), "html", null, true);
                echo "€</h6>
                                                    </div>
                                                    <div style=\"width: 50px;\">
                                                        <h6 class=\"fw-normal mb-0\">x";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "quantite", [], "any", false, false, false, 42), "html", null, true);
                echo "</h6>
                                                    </div>
                                                    <div style=\"width: 80px;\">
                                                        <h5 class=\"mb-0\">";
                // line 45
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["data"], "quantite", [], "any", false, false, false, 45) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "produit", [], "any", false, false, false, 45), "prix", [], "any", false, false, false, 45)), "html", null, true);
                echo "€</h5>
                                                    </div>
                                                    <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_delete_product", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "produit", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" style=\"color: #cecece;\">
                                                        <i class=\"fas fa-trash-alt text-danger\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                                ";
        } else {
            // line 56
            echo "                                    <div class=\"alert themeColor text-center text-black\">
                                        <p>Votre panier est vide.</p>
                                    </div>
                                ";
        }
        // line 60
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t<div class=\"card-produit themeColor text-white rounded-3\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between m-1 panier-total row\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 col-6\">Total</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 col-6\">";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "€ TTC</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-panier btn-block btn-lg m-5\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commander");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Commander
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-long-arrow-alt-right ms-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 70,  188 => 65,  181 => 60,  175 => 56,  172 => 55,  158 => 47,  153 => 45,  147 => 42,  141 => 39,  132 => 33,  128 => 32,  124 => 31,  121 => 30,  115 => 23,  110 => 22,  108 => 21,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Panier{% endblock %}

{% block content %}
<section class=\"h-100 h-custom\" style=\"background-color: #eee;\">
\t<div class=\"container py-5 h-100\">
\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_prestations_client') }} \" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-long-arrow-alt-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\tRetourner aux Prestations
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<hr>
                                {% if dataPanier is not empty %}
                                {% for data in dataPanier %}
                                    <div class=\"card mb-3\">
                                        <div class=\"card-body\">
                                            <div class=\"d-flex justify-content-between\">
                                                <div class=\"d-flex flex-row align-items-center\">
                                                    {# <div>
                                                        <img src=\"{{ asset('photos/produit/' ~ data.produit.photo) }}\" class=\"img-fluid rounded-3\" alt=\"Shopping item\" style=\"width: 65px;\">
                                                    </div> #}
                                                    <div class=\"ms-3\">
                                                        <h5>{{ data.produit.titre }}</h5>
                                                        <p class=\"small mb-0\">Description : {{ data.produit.description }}</p>
                                                        <p class=\"small mb-0\">Tarif : {{ data.produit.prix }} €</p>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex flex-row align-items-center\">
                                                    <div style=\"width: 50px;\">
                                                        <h6 class=\"fw-normal mb-0\">
                                                            {{ data.produit.prix }}€</h6>
                                                    </div>
                                                    <div style=\"width: 50px;\">
                                                        <h6 class=\"fw-normal mb-0\">x{{ data.quantite }}</h6>
                                                    </div>
                                                    <div style=\"width: 80px;\">
                                                        <h5 class=\"mb-0\">{{ data.quantite * data.produit.prix }}€</h5>
                                                    </div>
                                                    <a href=\"{{ path('app_panier_delete_product', {id: data.produit.id}) }}\" style=\"color: #cecece;\">
                                                        <i class=\"fas fa-trash-alt text-danger\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                                {% else %}
                                    <div class=\"alert themeColor text-center text-black\">
                                        <p>Votre panier est vide.</p>
                                    </div>
                                {% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t<div class=\"card-produit themeColor text-white rounded-3\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between m-1 panier-total row\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 col-6\">Total</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2 col-6\">{{ total }}€ TTC</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-panier btn-block btn-lg m-5\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_commander') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Commander
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-long-arrow-alt-right ms-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

{% endblock %}
", "panier/index.html.twig", "C:\\wamp64\\www\\dwwm-doranco\\Symfony\\site_interieur\\templates\\panier\\index.html.twig");
    }
}
