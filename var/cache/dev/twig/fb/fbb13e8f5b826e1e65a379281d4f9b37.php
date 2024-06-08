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

/* Professeur/questions/questions_for_quiz.html.twig */
class __TwigTemplate_151643d119f50aaf1162be5802dbe070 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/questions/questions_for_quiz.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/questions/questions_for_quiz.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "Professeur/questions/questions_for_quiz.html.twig", 1);
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
        echo "<div class=\"container\">
    <h1 class=\"mb-4\">Questions for Quiz ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
    <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 9
            echo "        <div class=\"col mb-4\">
            <div class=\"card h-100\" style=\"background-color: #FFF5F3; border: 2px solid #103741; border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 12), "html", null, true);
            echo "</h5>
                    <ul class=\"list-unstyled\">
                        <li><strong>Choice 1:</strong> ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "choix1", [], "any", false, false, false, 14), "html", null, true);
            echo "</li>
                        <li><strong>Choice 2:</strong> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "choix2", [], "any", false, false, false, 15), "html", null, true);
            echo "</li>
                        <li><strong>Choice 3:</strong> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "choix3", [], "any", false, false, false, 16), "html", null, true);
            echo "</li>
                    </ul>
                    <p class=\"card-text\"><strong>Correct Answer:</strong> ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "reponse", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                    <div class=\"text-center mt-3\">
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editquestion", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm mr-2\">Edit</a>
                        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletequestion", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </div>
    ";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 28, $this->source); })())) <= 14)) {
            // line 29
            echo "        <div class=\"row justify-content-start mt-4\">
            <div class=\"col\">
                <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addquestion");
            echo "\" class=\"btn btn-success\">Add Question</a>
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showquizzid", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn btn-primary ml-2\">Back to Quiz Details</a>
            </div>
        </div>
    ";
        } else {
            // line 36
            echo "        <p class=\"text-danger mt-4\">You cannot add more questions. The maximum limit (15) has been reached.</p>
    ";
        }
        // line 38
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Professeur/questions/questions_for_quiz.html.twig";
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
        return array (  167 => 38,  163 => 36,  156 => 32,  152 => 31,  148 => 29,  146 => 28,  143 => 27,  131 => 21,  127 => 20,  122 => 18,  117 => 16,  113 => 15,  109 => 14,  104 => 12,  99 => 9,  95 => 8,  90 => 6,  87 => 5,  77 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}
{% block navimg %}
{% endblock %}
{% block body %}
<div class=\"container\">
    <h1 class=\"mb-4\">Questions for Quiz {{ quiz.id }}</h1>
    <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3\">
        {% for question in questions %}
        <div class=\"col mb-4\">
            <div class=\"card h-100\" style=\"background-color: #FFF5F3; border: 2px solid #103741; border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ question.question }}</h5>
                    <ul class=\"list-unstyled\">
                        <li><strong>Choice 1:</strong> {{ question.choix1 }}</li>
                        <li><strong>Choice 2:</strong> {{ question.choix2 }}</li>
                        <li><strong>Choice 3:</strong> {{ question.choix3 }}</li>
                    </ul>
                    <p class=\"card-text\"><strong>Correct Answer:</strong> {{ question.reponse }}</p>
                    <div class=\"text-center mt-3\">
                        <a href=\"{{ path('editquestion', {'id': question.id}) }}\" class=\"btn btn-primary btn-sm mr-2\">Edit</a>
                        <a href=\"{{ path('deletequestion', {'id': question.id}) }}\" class=\"btn btn-danger btn-sm\">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
    {% if questions|length <= 14 %}
        <div class=\"row justify-content-start mt-4\">
            <div class=\"col\">
                <a href=\"{{ path('addquestion') }}\" class=\"btn btn-success\">Add Question</a>
                <a href=\"{{ path('showquizzid', {'id': quiz.id}) }}\" class=\"btn btn-primary ml-2\">Back to Quiz Details</a>
            </div>
        </div>
    {% else %}
        <p class=\"text-danger mt-4\">You cannot add more questions. The maximum limit (15) has been reached.</p>
    {% endif %}
</div>
{% endblock %}
", "Professeur/questions/questions_for_quiz.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Professeur\\questions\\questions_for_quiz.html.twig");
    }
}
