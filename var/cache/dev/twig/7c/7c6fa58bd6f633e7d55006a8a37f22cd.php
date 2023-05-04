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
class __TwigTemplate_762ba35530573ecace3afaf1cf3134ee extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $context["categories"] = twig_get_attribute($this->env, $this->source, (isset($context["category_service"]) || array_key_exists("category_service", $context) ? $context["category_service"] : (function () { throw new RuntimeError('Variable "category_service" does not exist.', 4, $this->source); })()), "findAll", [], "method", false, false, false, 4);
        // line 5
        echo "<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\">D&co</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_all");
        echo "\">Tous les Articles</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Nos prestations
                        </a>
                        <ul class=\"dropdown-menu\">
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 26
            echo "                                ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 26))) {
                // line 27
                echo "                                    <li><a class=\"dropdown-item\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 27), "html", null, true);
                echo "</a></li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                ";
            }
            // line 30
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                        </ul>
                    </li>

                    ";
        // line 34
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 35
            echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Ajouts
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_categorie_add");
            echo "\">Ajouter un Service (Prestation)</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_auteur_add");
            echo "\">Ajouter un Auteur</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 44
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
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_auteurs");
            echo "\">Liste des auteurs</a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_articles");
            echo "\">Liste des articles</a></li>
                            </ul>
                        </li>
                    ";
        }
        // line 58
        echo "                </ul>
                <div class=\"d-flex\">
                    ";
        // line 60
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 61
            echo "                    <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo " \">Inscription</a>
                        </li>
                    ";
            // line 68
            echo "                    ";
        } else {
            // line 69
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                        </li>
                    ";
        }
        // line 73
        echo "
                    <form class=\"d-flex\" role=\"search\">
                        <input class=\"form-control me-sm-2\" type=\"search\" placeholder=\"Search\">
                        <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
<main class=\"container\">
    <div class=\"position-relative\">
        ";
        // line 85
        $this->displayBlock('content', $context, $blocks);
        // line 87
        echo "</div>
</main>

<footer class=\"fixed-bottom-0 w-100 position-absolute mt-3\">
    <nav class=\"navbar navbar-expand-lg bg-primary\">
        <div class=\"container\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-auto text-center\">
                <li><a class=\"navbar-brand nav-link\" href=\"#\">Qui sommes-nous</a></li>
                <li><a class=\"navbar-brand nav-link\" href=\"#\">Nous contacter</a></li>
                <li><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6242.0333324670255!2d2.280189421022182!3d48.86866454291875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fec70fb1d8f%3A0xd9b5676e112e643d!2sArc%20de%20Triomphe!5e0!3m2!1sfr!2sfr!4v1675078267209!5m2!1sfr!2sfr\" width=\"300vw\" height=\"150vh\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe></li>
            </ul>
        </div>
    </nav>
    <div class=\"text-center\">
        <p>©️ Deco.2023. Tous droits réservés.</p>
    </div>
</footer>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 85
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 86
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  237 => 86,  230 => 85,  204 => 87,  202 => 85,  188 => 73,  182 => 70,  179 => 69,  176 => 68,  171 => 65,  165 => 62,  162 => 61,  160 => 60,  156 => 58,  149 => 54,  144 => 52,  133 => 44,  128 => 42,  123 => 40,  116 => 35,  114 => 34,  109 => 31,  103 => 30,  94 => 27,  91 => 26,  87 => 25,  77 => 18,  62 => 5,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
{% set categories = category_service.findAll() %}
<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\">D&co</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#\">Accueil</a>
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
                                <li><a class=\"dropdown-item\" href=\"{{ path('admin_app_articles') }}\">Liste des articles</a></li>
                            </ul>
                        </li>
                    {% endif %}
                </ul>
                <div class=\"d-flex\">
                    {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
                    <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_register') }} \">Inscription</a>
                        </li>
                    {# si un user est authentifié on affiche le bouton déconnexion #}
                    {% else %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                        </li>
                    {% endif %}

                    <form class=\"d-flex\" role=\"search\">
                        <input class=\"form-control me-sm-2\" type=\"search\" placeholder=\"Search\">
                        <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
                    </form>
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
    <nav class=\"navbar navbar-expand-lg bg-primary\">
        <div class=\"container\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-auto text-center\">
                <li><a class=\"navbar-brand nav-link\" href=\"#\">Qui sommes-nous</a></li>
                <li><a class=\"navbar-brand nav-link\" href=\"#\">Nous contacter</a></li>
                <li><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6242.0333324670255!2d2.280189421022182!3d48.86866454291875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fec70fb1d8f%3A0xd9b5676e112e643d!2sArc%20de%20Triomphe!5e0!3m2!1sfr!2sfr!4v1675078267209!5m2!1sfr!2sfr\" width=\"300vw\" height=\"150vh\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe></li>
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
