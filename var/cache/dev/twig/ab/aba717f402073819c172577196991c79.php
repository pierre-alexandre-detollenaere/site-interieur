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

/* layout.html.twig */
class __TwigTemplate_51f49730c8507fc2b3f312d940e1feae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $context["categories"] = twig_get_attribute($this->env, $this->source, (isset($context["category_service"]) || array_key_exists("category_service", $context) ? $context["category_service"] : (function () { throw new RuntimeError('Variable "category_service" does not exist.', 4, $this->source); })()), "findAll", [], "method", false, false, false, 4);
        // line 5
        echo "<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark themeColor\">
        <div class=\"container-fluid nav-head\">
            <a class=\"navbar-brand text-center\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">CODE
                <h6 class=\"text-center\">CONCEPTION DESIGN</h6>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                    <a class=\"nav-link active nav-accueil\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_all");
        echo "\">Tous les Articles</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Nos prestations
                        </a>
                        <ul class=\"dropdown-menu\">
                            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 28
            echo "                                ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 28))) {
                // line 29
                echo "                                    <li><a class=\"dropdown-item\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 29), "html", null, true);
                echo "</a></li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                ";
            }
            // line 32
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                        </ul>
                    </li>

                    ";
        // line 36
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 37
            echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Ajouts
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_categorie_add");
            echo "\">Ajouter un Service (Prestation)</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_auteur_add");
            echo "\">Ajouter un Auteur</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_article_add");
            echo "\">Ajouter un Article</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Voir les listes
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_auteurs");
            echo "\">Liste des auteurs</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_categories");
            echo "\">Liste des services (prestations)</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_articles");
            echo "\">Liste des articles</a></li>
                            </ul>
                        </li>
                    ";
        }
        // line 62
        echo "                </ul>
                <div class=\"d-flex\">
                    ";
        // line 64
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 65
            echo "                        <button type=\"button\" class=\"btn m-2 auto nav-log\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></button>
                        <button type=\"button\" class=\"btn m-2 auto nav-log\"><a href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a></button>
                    ";
        } else {
            // line 68
            echo "                        <button type=\"button\" class=\"btn m-2 auto nav-log\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a></button>
                    ";
        }
        // line 70
        echo "
                    ";
        // line 75
        echo "                </div>
            </div>
        </div>
    </nav>
</header>
<main class=\"container\">
    <div class=\"position-relative\">
        ";
        // line 82
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "</div>
</main>

<footer class=\"fixed-bottom-0 w-100 position-absolute mt-3\">
    <nav class=\"navbar navbar-expand-lg themeColor\">
        <div class=\"container-footer\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-auto text-center\">
                <li><a class=\"navbar-brand nav-link\" href=\"#\">Qui sommes-nous</a></li>
                <li><a class=\"navbar-brand nav-link\" href=\"#\">Nous contacter</a></li>
                <li><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.695227982012!2d2.368109515840733!3d48.86402180826401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66dfd1c5609ff%3A0x1f278358e0e6d126!2s35%20Rue%20Oberkampf%2C%2075011%20Paris!5e0!3m2!1sfr!2sfr!4v1676050853757!5m2!1sfr!2sfr\" width=\"300\" height=\"200\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe></li>
            </ul>
        </div>
    </nav>
    <div class=\"text-center\">
        <p>©️ Deco.2023. Tous droits réservés.</p>
    </div>
</footer>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 82
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 83
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 83,  243 => 82,  214 => 84,  212 => 82,  203 => 75,  200 => 70,  194 => 68,  189 => 66,  184 => 65,  182 => 64,  178 => 62,  171 => 58,  166 => 56,  161 => 54,  150 => 46,  145 => 44,  140 => 42,  133 => 37,  131 => 36,  126 => 33,  120 => 32,  111 => 29,  108 => 28,  104 => 27,  94 => 20,  88 => 17,  76 => 8,  71 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
{% set categories = category_service.findAll() %}
<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark themeColor\">
        <div class=\"container-fluid nav-head\">
            <a class=\"navbar-brand text-center\" href=\"{{ path('app_home') }}\">CODE
                <h6 class=\"text-center\">CONCEPTION DESIGN</h6>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                    <a class=\"nav-link active nav-accueil\" href=\"{{ path('app_home') }}\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_articles_all') }}\">Tous les Articles</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Nos prestations
                        </a>
                        <ul class=\"dropdown-menu\">
                            {% for categorie in categories %}
                                {% if categorie.nom is not null %}
                                    <li><a class=\"dropdown-item\" href=\"{{ path('app_categorie', {id: categorie.id}) }}\">{{ categorie.nom }}</a></li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    </li>

                    {% if is_granted(\"IS_AUTHENTICATED_FULLY\") and is_granted(\"ROLE_ADMIN\") %}
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Ajouts
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"{{ path('admin_app_categorie_add') }}\">Ajouter un Service (Prestation)</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('admin_app_auteur_add') }}\">Ajouter un Auteur</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('admin_app_article_add') }}\">Ajouter un Article</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Voir les listes
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"{{ path('admin_app_auteurs') }}\">Liste des auteurs</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('admin_app_categories') }}\">Liste des services (prestations)</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('admin_app_articles') }}\">Liste des articles</a></li>
                            </ul>
                        </li>
                    {% endif %}
                </ul>
                <div class=\"d-flex\">
                    {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
                        <button type=\"button\" class=\"btn m-2 auto nav-log\"><a href=\"{{ path('app_login') }}\">Connexion</a></button>
                        <button type=\"button\" class=\"btn m-2 auto nav-log\"><a href=\"{{ path('app_register') }}\">Inscription</a></button>
                    {% else %}
                        <button type=\"button\" class=\"btn m-2 auto nav-log\"><a href=\"{{ path('app_logout') }}\">Déconnexion</a></button>
                    {% endif %}

                    {# <form class=\"d-flex\" role=\"search\">
                        <input class=\"form-control me-sm-2\" type=\"search\" placeholder=\"Search\">
                        <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
                    </form> #}
                </div>
            </div>
        </div>
    </nav>
</header>
<main class=\"container\">
    <div class=\"position-relative\">
        {% block content %}
        {% endblock content %}
</div>
</main>

<footer class=\"fixed-bottom-0 w-100 position-absolute mt-3\">
    <nav class=\"navbar navbar-expand-lg themeColor\">
        <div class=\"container-footer\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-auto text-center\">
                <li><a class=\"navbar-brand nav-link\" href=\"#\">Qui sommes-nous</a></li>
                <li><a class=\"navbar-brand nav-link\" href=\"#\">Nous contacter</a></li>
                <li><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.695227982012!2d2.368109515840733!3d48.86402180826401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66dfd1c5609ff%3A0x1f278358e0e6d126!2s35%20Rue%20Oberkampf%2C%2075011%20Paris!5e0!3m2!1sfr!2sfr!4v1676050853757!5m2!1sfr!2sfr\" width=\"300\" height=\"200\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe></li>
            </ul>
        </div>
    </nav>
    <div class=\"text-center\">
        <p>©️ Deco.2023. Tous droits réservés.</p>
    </div>
</footer>


{% endblock body %}", "layout.html.twig", "C:\\wamp64\\www\\dwwm-doranco\\Symfony\\site_interieur\\templates\\layout.html.twig");
    }
}
