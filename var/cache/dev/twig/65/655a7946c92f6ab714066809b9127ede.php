<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Enfant/cours/categorylist.html.twig */
class __TwigTemplate_858b2b5d871ffc2139d7e84e2f7e313b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Enfant/cours/categorylist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Enfant/cours/categorylist.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "Enfant/cours/categorylist.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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

        yield " Category list ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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

        return; yield '';
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
        yield "<div class=\"container-xxl py-5 page-header position-relative mb-5\">
    <div class=\"container py-5\">
        <h1 class=\"display-2 text-white animated slideInDown mb-4\">Welcome </h1>
    </div>
</div>
<hr style=\"color:#103741\" class=\"p-0 m-0\" />
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
                    <datalist></datalist>
                </div>
            </div>
        </div>
    </form>
</div>
<div class=\"container bg-white\" id=\"content\">
    ";
        // line 36
        yield from         $this->loadTemplate("Visiteur/_serachcontent.html.twig", "Enfant/cours/categorylist.html.twig", 36)->unwrap()->yield($context);
        // line 37
        yield "</div>
<!-- Classes End -->
<script src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./asset/User/js/searchByCat.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./asset/User/js/EnfantCat.js"), "html", null, true);
        yield "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Enfant/cours/categorylist.html.twig";
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
        return array (  151 => 40,  147 => 39,  143 => 37,  141 => 36,  110 => 7,  100 => 6,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %} Category list {% endblock %}
{% block navimg %}
{% endblock %}
{% block body %}
<div class=\"container-xxl py-5 page-header position-relative mb-5\">
    <div class=\"container py-5\">
        <h1 class=\"display-2 text-white animated slideInDown mb-4\">Welcome </h1>
    </div>
</div>
<hr style=\"color:#103741\" class=\"p-0 m-0\" />
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
                    <datalist></datalist>
                </div>
            </div>
        </div>
    </form>
</div>
<div class=\"container bg-white\" id=\"content\">
    {% include \"Visiteur/_serachcontent.html.twig\" %}
</div>
<!-- Classes End -->
<script src=\"{{ asset('./asset/User/js/searchByCat.js')}}\"></script>
<script src=\"{{ asset('./asset/User/js/EnfantCat.js')}}\"></script>

{% endblock %}", "Enfant/cours/categorylist.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Enfant\\cours\\categorylist.html.twig");
    }
}
