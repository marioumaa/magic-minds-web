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

/* Professeur/quizz/showquizz_details.html.twig */
class __TwigTemplate_b4c2e3cdedca6c71c000e700024590d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/quizz/showquizz_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/quizz/showquizz_details.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "Professeur/quizz/showquizz_details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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
        echo "    <div class=\"container\">
        <h1 class=\"mb-4\">Quiz Details</h1>
        <div class=\"card p-4 mb-4\" style=\"background-color: #f8f9fa; border: 2px solid #103741; border-radius: 15px;\">
            <div class=\"card-body\">
                <h5 class=\"card-title mb-3\" style=\"color: #103741;\">Title: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), "html", null, true);
        echo "</h5>
                <p class=\"card-text mb-2\">Time: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 10, $this->source); })()), "temp", [], "any", false, false, false, 10), "html", null, true);
        echo " minutes</p>
                <p class=\"card-text mb-2\">Number of Questions: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 11, $this->source); })()), "nbquestion", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
                <p class=\"card-text mb-2\">Chapter: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 12, $this->source); })()), "Chapter", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
                <p class=\"card-text mb-2\">Course: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 13, $this->source); })()), "Chapter", [], "any", false, false, false, 13), "idCours", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
                <p class=\"card-text mb-2\">Category: ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 14, $this->source); })()), "Chapter", [], "any", false, false, false, 14), "idCours", [], "any", false, false, false, 14), "categorie", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
                ";
        // line 16
        echo "            </div>
        </div>

        <div class=\"d-flex justify-content-between\">
            <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showquizz");
        echo "\" class=\"btn btn-primary\">Back to Quiz List</a>
            <div>
                <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletequizz", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
        echo "\" class=\"btn btn-danger mr-2\">Delete Quiz</a>
                <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editquizz", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\" class=\"btn btn-warning text-white mr-2\">Edit Quiz</a>
                <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("questions_for_quiz", ["quizId" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
        echo "\" class=\"btn btn-success\">View Questions</a>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Professeur/quizz/showquizz_details.html.twig";
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
        return array (  136 => 24,  132 => 23,  128 => 22,  123 => 20,  117 => 16,  113 => 14,  109 => 13,  105 => 12,  101 => 11,  97 => 10,  93 => 9,  87 => 5,  77 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}
{% block navimg %}
{% endblock %}
{% block body %}
    <div class=\"container\">
        <h1 class=\"mb-4\">Quiz Details</h1>
        <div class=\"card p-4 mb-4\" style=\"background-color: #f8f9fa; border: 2px solid #103741; border-radius: 15px;\">
            <div class=\"card-body\">
                <h5 class=\"card-title mb-3\" style=\"color: #103741;\">Title: {{ quiz.titre }}</h5>
                <p class=\"card-text mb-2\">Time: {{ quiz.temp }} minutes</p>
                <p class=\"card-text mb-2\">Number of Questions: {{ quiz.nbquestion }}</p>
                <p class=\"card-text mb-2\">Chapter: {{ quiz.Chapter }}</p>
                <p class=\"card-text mb-2\">Course: {{ quiz.Chapter.idCours }}</p>
                <p class=\"card-text mb-2\">Category: {{ quiz.Chapter.idCours.categorie }}</p>
                {# Ajoutez d'autres détails du quiz ici si nécessaire #}
            </div>
        </div>

        <div class=\"d-flex justify-content-between\">
            <a href=\"{{ path('showquizz') }}\" class=\"btn btn-primary\">Back to Quiz List</a>
            <div>
                <a href=\"{{ path('deletequizz', {'id': quiz.id}) }}\" class=\"btn btn-danger mr-2\">Delete Quiz</a>
                <a href=\"{{ path('editquizz', {'id': quiz.id}) }}\" class=\"btn btn-warning text-white mr-2\">Edit Quiz</a>
                <a href=\"{{ path('questions_for_quiz', {'quizId': quiz.id}) }}\" class=\"btn btn-success\">View Questions</a>
            </div>
        </div>
    </div>
{% endblock %}
", "Professeur/quizz/showquizz_details.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Professeur\\quizz\\showquizz_details.html.twig");
    }
}
