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

/* realisations/realisations.html.twig */
class __TwigTemplate_96bb36095955de7e945727901f840a1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "realisations/realisations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "realisations/realisations.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "realisations/realisations.html.twig", 1);
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

        echo "Réalisations";
        
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
    <h1>Quelques exemples de Réalisations</h1>
    
    <div class=\"realisations\">
        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/01_S5000005.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\"alt=\"\"></li>
        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/02_P1160020.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\"alt=\"\"></li>
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/03_P1160025.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\"alt=\"\"></li>
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/04_P2015 060.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/04_P1160028.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/06_P1160026.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/07_S5000006.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/08_140616044.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/a_01_S500XM5100.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/a_02_9092622035486).JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/a_03_19092620307248.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/a_04_140616 090.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/a_05_P3010041.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/b_01_15203325S6.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/b_02_3547851D1S8.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/b_03_140616056.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/b_04_140616050.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/b_05_1678791034337.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/b_06_1678791034347.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/b_07_1678791034376.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/c_01_50175160J35.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/c_02_1604225198K314.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/c_03_185234H54.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/c_04_14742L564.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/realisations/c_05_1678791065672.JPG"), "html", null, true);
        echo "\" class=\"img-realisation\" alt=\"\"></li>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "realisations/realisations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 34,  186 => 33,  182 => 32,  178 => 31,  174 => 30,  170 => 29,  166 => 28,  162 => 27,  158 => 26,  154 => 25,  150 => 24,  146 => 23,  142 => 22,  138 => 21,  134 => 20,  130 => 19,  126 => 18,  122 => 17,  118 => 16,  114 => 15,  110 => 14,  106 => 13,  102 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}Réalisations{% endblock title %}

{% block content %}

    <h1>Quelques exemples de Réalisations</h1>
    
    <div class=\"realisations\">
        <img src=\"{{ asset('images/realisations/01_S5000005.JPG') }}\" class=\"img-realisation\"alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/02_P1160020.JPG') }}\" class=\"img-realisation\"alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/03_P1160025.JPG') }}\" class=\"img-realisation\"alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/04_P2015 060.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/04_P1160028.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/06_P1160026.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/07_S5000006.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/08_140616044.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/a_01_S500XM5100.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/a_02_9092622035486).JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/a_03_19092620307248.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/a_04_140616 090.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/a_05_P3010041.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/b_01_15203325S6.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/b_02_3547851D1S8.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/b_03_140616056.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/b_04_140616050.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/b_05_1678791034337.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/b_06_1678791034347.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/b_07_1678791034376.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/c_01_50175160J35.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/c_02_1604225198K314.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/c_03_185234H54.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/c_04_14742L564.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
        <img src=\"{{ asset('images/realisations/c_05_1678791065672.JPG') }}\" class=\"img-realisation\" alt=\"\"></li>
    </div>

{% endblock content %}", "realisations/realisations.html.twig", "C:\\wamp64\\www\\dwwm-doranco\\Symfony\\site_interieur\\templates\\realisations\\realisations.html.twig");
    }
}
