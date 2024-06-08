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

/* Enfant/quizz_enfant/historique.html.twig */
class __TwigTemplate_7a4aba694f0e912602365547e9b1e0e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Enfant/quizz_enfant/historique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Enfant/quizz_enfant/historique.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "Enfant/quizz_enfant/historique.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "
<div class=\"container my-5\">
    
    <h1 class=\"display-3 text-center my-5\">History</h1>
    
    <div class=\"row justify-content-center\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eval"]) || array_key_exists("eval", $context) ? $context["eval"] : (function () { throw new RuntimeError('Variable "eval" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            yield "        <div class=\"col-lg-4 col-md-6 col-sm-12 mb-4\">
            <div class=\"card bg-light\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\"><span class=\"text-primary\">Quiz</span> ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "idQuiz", [], "any", false, false, false, 15), "html", null, true);
            yield "</h5>
                    <p class=\"card-text\"><span class=\"text-success\">Result:</span> ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "resultat", [], "any", false, false, false, 16), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["i"], "idQuiz", [], "any", false, false, false, 16), "nbquestion", [], "any", false, false, false, 16), "html", null, true);
            yield "</p>
                    <p class=\"card-text\"><span class=\"text-danger\">Date:</span> ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "date", [], "any", false, false, false, 17), "F j, Y"), "html", null, true);
            yield "</p>
                    <p class=\"card-text\"><span class=\"text-danger\">Chapter:</span> ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["i"], "idQuiz", [], "any", false, false, false, 18), "Chapter", [], "any", false, false, false, 18), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["i"], "idQuiz", [], "any", false, false, false, 18), "Chapter", [], "any", false, false, false, 18), "idCours", [], "any", false, false, false, 18), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["i"], "idQuiz", [], "any", false, false, false, 18), "Chapter", [], "any", false, false, false, 18), "idCours", [], "any", false, false, false, 18), "categorie", [], "any", false, false, false, 18), "html", null, true);
            yield "</p>
                    
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "    </div>
    <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showallquizz");
        yield "\" class=\"btn btn-primary mb-3\">Go back</a> 
</div>

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
        return "Enfant/quizz_enfant/historique.html.twig";
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
        return array (  139 => 25,  136 => 24,  120 => 18,  116 => 17,  110 => 16,  106 => 15,  101 => 12,  97 => 11,  89 => 5,  79 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}
{% block navimg %}
{% endblock %}
{% block body %}

<div class=\"container my-5\">
    
    <h1 class=\"display-3 text-center my-5\">History</h1>
    
    <div class=\"row justify-content-center\">
        {% for i in eval %}
        <div class=\"col-lg-4 col-md-6 col-sm-12 mb-4\">
            <div class=\"card bg-light\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\"><span class=\"text-primary\">Quiz</span> {{ i.idQuiz }}</h5>
                    <p class=\"card-text\"><span class=\"text-success\">Result:</span> {{ i.resultat }}/{{ i.idQuiz.nbquestion}}</p>
                    <p class=\"card-text\"><span class=\"text-danger\">Date:</span> {{ i.date|date('F j, Y') }}</p>
                    <p class=\"card-text\"><span class=\"text-danger\">Chapter:</span> {{ i.idQuiz.Chapter  }}/{{ i.idQuiz.Chapter.idCours }}/{{ i.idQuiz.Chapter.idCours.categorie }}</p>
                    
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
    <a href=\"{{ path('showallquizz') }}\" class=\"btn btn-primary mb-3\">Go back</a> 
</div>

{% endblock %}
", "Enfant/quizz_enfant/historique.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Enfant\\quizz_enfant\\historique.html.twig");
    }
}
