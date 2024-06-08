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

/* Professeur/quizz/showquizz.html.twig */
class __TwigTemplate_e1cb1421136d2a278682db04f1ca7c6f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/quizz/showquizz.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/quizz/showquizz.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "Professeur/quizz/showquizz.html.twig", 1);
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
        echo "<style>
    .quiz-square {
        width: 200px;
        height: 200px;
        background-color: #FFF5F3;
        /* Utilisation de la couleur de fond spécifiée */
        border: 1px solid #103741;
        /* Utilisation de la couleur de la bordure spécifiée */
        border-radius: 10px;
        margin: 10px;
        padding: 20px;
        display: inline-block;
        text-decoration: none;
        /* Supprimer le soulignement du texte */
        color: #FE5D37;
        /* Utilisation de la couleur du texte spécifiée */
    }

    .quiz-square:hover {
        background-color: #FE5D37;
        /* Changer la couleur de fond au survol */
    }

    .quiz-square h3 {
        text-align: center;
    }

    .btn-primary {
        background-color: #369669;
        /* Utilisation d'une couleur différente pour le bouton */
        border-color: #369669;
    }

    .btn-primary:hover {
        background-color: #369669;
        /* Maintenir la même couleur de fond au survol */
        border-color: #369669;
    }

    .list-quiz {
        display: grid;
        width: 80%;
        margin: 0 auto;
        grid-template-columns: repeat(3, 1fr);

    }
</style>
<h1 class=\"text-center display-3 my-3\">List of Quizzes</h1>
<div class=\"list-quiz\">
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["quiz"]);
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 55
            echo "    <div class=\"\">
        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showquizzid", ["id" => twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" class=\"quiz-square shadow-sm\">
            <h3>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "titre", [], "any", false, false, false, 57), "html", null, true);
            echo "</h3>
        </a>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
</div>
<center>
    <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addquizz");
        echo "\" class=\"btn btn-primary w-25 mx-auto\">Add a Quiz</a>
</center>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Professeur/quizz/showquizz.html.twig";
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
        return array (  164 => 64,  159 => 61,  149 => 57,  145 => 56,  142 => 55,  138 => 54,  87 => 5,  77 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}
{% block navimg %}
{% endblock %}
{% block body %}
<style>
    .quiz-square {
        width: 200px;
        height: 200px;
        background-color: #FFF5F3;
        /* Utilisation de la couleur de fond spécifiée */
        border: 1px solid #103741;
        /* Utilisation de la couleur de la bordure spécifiée */
        border-radius: 10px;
        margin: 10px;
        padding: 20px;
        display: inline-block;
        text-decoration: none;
        /* Supprimer le soulignement du texte */
        color: #FE5D37;
        /* Utilisation de la couleur du texte spécifiée */
    }

    .quiz-square:hover {
        background-color: #FE5D37;
        /* Changer la couleur de fond au survol */
    }

    .quiz-square h3 {
        text-align: center;
    }

    .btn-primary {
        background-color: #369669;
        /* Utilisation d'une couleur différente pour le bouton */
        border-color: #369669;
    }

    .btn-primary:hover {
        background-color: #369669;
        /* Maintenir la même couleur de fond au survol */
        border-color: #369669;
    }

    .list-quiz {
        display: grid;
        width: 80%;
        margin: 0 auto;
        grid-template-columns: repeat(3, 1fr);

    }
</style>
<h1 class=\"text-center display-3 my-3\">List of Quizzes</h1>
<div class=\"list-quiz\">
    {% for quiz in quiz %}
    <div class=\"\">
        <a href=\"{{ path('showquizzid', {'id': quiz.id}) }}\" class=\"quiz-square shadow-sm\">
            <h3>{{ quiz.titre }}</h3>
        </a>
    </div>
    {% endfor %}

</div>
<center>
    <a href=\"{{ path('addquizz') }}\" class=\"btn btn-primary w-25 mx-auto\">Add a Quiz</a>
</center>

{% endblock %}", "Professeur/quizz/showquizz.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Professeur\\quizz\\showquizz.html.twig");
    }
}
