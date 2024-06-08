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

/* Enfant/quizz_enfant/showquizzenfant.html.twig */
class __TwigTemplate_278e9bd7d84fe2f6fa5591fb056623e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Enfant/quizz_enfant/showquizzenfant.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Enfant/quizz_enfant/showquizzenfant.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "Enfant/quizz_enfant/showquizzenfant.html.twig", 1);
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
        echo "<div class=\"container my-5\">
<h1 class=\"mb-5 mt-3 text-center display-3\">- ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), "html", null, true);
        echo " -</h1>
<div class=\"row justify-content-center\">
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 8, $this->source); })()), "idQuestion", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["i"] => $context["question"]) {
            // line 9
            echo "<div class=\"col-lg-4 col-md-6 col-sm-12 mb-4\">
<div class=\"card bg-light\">
<div class=\"card-body\">
<h2 class=\"my-3 mx-2\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 12), "html", null, true);
            echo "</h2>

<div class=\"d-flex gap-2 px-3\">
    <input type=\"checkbox\" name=\"answer\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "choix1", [], "any", false, false, false, 15), "html", null, true);
            echo "\" id=\"choix1\">
    <label type=\"checkbox\" name=\"\" id=\"choix1\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "choix1", [], "any", false, false, false, 16), "html", null, true);
            echo "</label>
</div>
<div class=\"d-flex gap-2 px-3\">
    <input type=\"checkbox\" name=\"answer\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "choix2", [], "any", false, false, false, 19), "html", null, true);
            echo "\" id=\"choix2\">
    <label type=\"checkbox\" name=\"\" id=\"choix2\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "choix2", [], "any", false, false, false, 20), "html", null, true);
            echo "</label>
</div>
<div class=\"d-flex gap-2 px-3\">
    <input type=\"checkbox\" name=\"answer\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "choix3", [], "any", false, false, false, 23), "html", null, true);
            echo "\" id=\"choix3\">
    <label type=\"checkbox\" name=\"\" id=\"choix3\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "choix3", [], "any", false, false, false, 24), "html", null, true);
            echo "</label>
</div>

<h2 hidden>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "reponse", [], "any", false, false, false, 27), "html", null, true);
            echo "</h2>
</div>
</div>
</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "

<form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_result", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\">
    
    
    <input hidden name=\"result\" type=\"text\" id=\"result\">
    <button type=\"submit\" class=\"btn btn-success next-btn my-5\" onclick=\"submitQuiz()\">Submit</button>
</form>
</div>
</div>
    <script>
        const submitQuiz = () => {
            const headerResult = document.querySelector(\"#result\");
            const checkboxes = document.querySelectorAll(\"input[name='answer']\");
            const answers = document.querySelectorAll(\"h6\");
    
            var i = 0;
            var arrChoix = [];
            checkboxes.forEach((checkbox, i) => {
                if (checkbox.checked)
                    arrChoix.push(i);
            })
            var result = 0;
            answers.forEach((answer, i) => {
                for (let index = i * 3; index < i*3 + 3; index++) {
                    if (answer.textContent === checkboxes[arrChoix[i]].value) {
                        result++;
                        break;
                    }
                }
            });
            headerResult.value = result;

        }
    </script>
    


    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Enfant/quizz_enfant/showquizzenfant.html.twig";
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
        return array (  155 => 34,  151 => 32,  140 => 27,  134 => 24,  130 => 23,  124 => 20,  120 => 19,  114 => 16,  110 => 15,  104 => 12,  99 => 9,  95 => 8,  90 => 6,  87 => 5,  77 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}
{% block navimg %}
{% endblock %}
{% block body %}
<div class=\"container my-5\">
<h1 class=\"mb-5 mt-3 text-center display-3\">- {{ quiz.titre }} -</h1>
<div class=\"row justify-content-center\">
{% for i, question in quiz.idQuestion %}
<div class=\"col-lg-4 col-md-6 col-sm-12 mb-4\">
<div class=\"card bg-light\">
<div class=\"card-body\">
<h2 class=\"my-3 mx-2\">{{question.question}}</h2>

<div class=\"d-flex gap-2 px-3\">
    <input type=\"checkbox\" name=\"answer\" value=\"{{ question.choix1 }}\" id=\"choix1\">
    <label type=\"checkbox\" name=\"\" id=\"choix1\">{{ question.choix1 }}</label>
</div>
<div class=\"d-flex gap-2 px-3\">
    <input type=\"checkbox\" name=\"answer\" value=\"{{ question.choix2 }}\" id=\"choix2\">
    <label type=\"checkbox\" name=\"\" id=\"choix2\">{{ question.choix2 }}</label>
</div>
<div class=\"d-flex gap-2 px-3\">
    <input type=\"checkbox\" name=\"answer\" value=\"{{ question.choix3 }}\" id=\"choix3\">
    <label type=\"checkbox\" name=\"\" id=\"choix3\">{{ question.choix3 }}</label>
</div>

<h2 hidden>{{ question.reponse }}</h2>
</div>
</div>
</div>
    {% endfor %}


<form action=\"{{ path('app_quiz_result',{'id':quiz.id}) }}\">
    
    
    <input hidden name=\"result\" type=\"text\" id=\"result\">
    <button type=\"submit\" class=\"btn btn-success next-btn my-5\" onclick=\"submitQuiz()\">Submit</button>
</form>
</div>
</div>
    <script>
        const submitQuiz = () => {
            const headerResult = document.querySelector(\"#result\");
            const checkboxes = document.querySelectorAll(\"input[name='answer']\");
            const answers = document.querySelectorAll(\"h6\");
    
            var i = 0;
            var arrChoix = [];
            checkboxes.forEach((checkbox, i) => {
                if (checkbox.checked)
                    arrChoix.push(i);
            })
            var result = 0;
            answers.forEach((answer, i) => {
                for (let index = i * 3; index < i*3 + 3; index++) {
                    if (answer.textContent === checkboxes[arrChoix[i]].value) {
                        result++;
                        break;
                    }
                }
            });
            headerResult.value = result;

        }
    </script>
    


    {% endblock %}", "Enfant/quizz_enfant/showquizzenfant.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Enfant\\quizz_enfant\\showquizzenfant.html.twig");
    }
}
