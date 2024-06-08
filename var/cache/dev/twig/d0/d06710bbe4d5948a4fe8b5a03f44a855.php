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

/* Visiteur/Classes.html.twig */
class __TwigTemplate_a8f42d892c0ca285f73b98c720d4e748 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'navimg' => [$this, 'block_navimg'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Visiteur/Classes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Visiteur/Classes.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "Visiteur/Classes.html.twig", 1);
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

        echo " Classes ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_navimg($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navimg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navimg"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<!-- Page Header start  -->
<div class=\"container-fluid page-header position-relative mb-0\">
    <div class=\"container py-5\">
        <h1 class=\"display-2 text-white animated slideInDown mb-4\">Classes</h1>
    </div>
</div>
<!-- Page Header End -->


<!-- Classes Start -->
<div class=\"container bg-white\">
    <div class=\"text-center mx-auto mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\"
        style=\"max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;\">
        <h1 class=\"mb-3 mt-5\">Magic Minds Classes</h1>
        <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod
            sit. Ipsum diam justo sed rebum vero dolor duo.</p>
    </div>
    <form id=\"searchF\">
        <div style=\"display:flex; justify-content:center\" class=\"row\">
            <div style=\"width: 40%;\" class=\"p-1 rounded search-bg rounded-pill shadow-sm mb-5\">
                <div class=\"input-group\">
                    <input style=\"border:none;\" type=\"text\" id=\"search-input\" autocomplete=\"off\" placeholder=\"What're you searching for?\"
                        aria-describedby=\"button-addon1\" class=\"form-control\" />
                    <div class=\"input-group-append\">
                        <div id=\"button-addon1\" class=\"btn btn-link text-primary\"><i class=\"fa fa-search\"></i></div>
                    </div>
                    <datalist 
                </div>
            </div>
        </div>
    </form>
</div>
<div class=\"container bg-white\" id=\"content\">
    ";
        // line 40
        $this->loadTemplate("Visiteur/_serachcontent.html.twig", "Visiteur/Classes.html.twig", 40)->display($context);
        // line 41
        echo "</div>
<!-- Classes End -->
<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/js/searchByCat.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Visiteur/Classes.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  148 => 43,  144 => 41,  142 => 40,  107 => 7,  97 => 6,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %} Classes {% endblock %}
{% block navimg %}
{% endblock %}
{% block body %}
<!-- Page Header start  -->
<div class=\"container-fluid page-header position-relative mb-0\">
    <div class=\"container py-5\">
        <h1 class=\"display-2 text-white animated slideInDown mb-4\">Classes</h1>
    </div>
</div>
<!-- Page Header End -->


<!-- Classes Start -->
<div class=\"container bg-white\">
    <div class=\"text-center mx-auto mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\"
        style=\"max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;\">
        <h1 class=\"mb-3 mt-5\">Magic Minds Classes</h1>
        <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod
            sit. Ipsum diam justo sed rebum vero dolor duo.</p>
    </div>
    <form id=\"searchF\">
        <div style=\"display:flex; justify-content:center\" class=\"row\">
            <div style=\"width: 40%;\" class=\"p-1 rounded search-bg rounded-pill shadow-sm mb-5\">
                <div class=\"input-group\">
                    <input style=\"border:none;\" type=\"text\" id=\"search-input\" autocomplete=\"off\" placeholder=\"What're you searching for?\"
                        aria-describedby=\"button-addon1\" class=\"form-control\" />
                    <div class=\"input-group-append\">
                        <div id=\"button-addon1\" class=\"btn btn-link text-primary\"><i class=\"fa fa-search\"></i></div>
                    </div>
                    <datalist 
                </div>
            </div>
        </div>
    </form>
</div>
<div class=\"container bg-white\" id=\"content\">
    {% include \"Visiteur/_serachcontent.html.twig\" %}
</div>
<!-- Classes End -->
<script src=\"{{ asset('asset/User/js/searchByCat.js')}}\"></script>
{% endblock %}", "Visiteur/Classes.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Visiteur\\Classes.html.twig");
    }
}
