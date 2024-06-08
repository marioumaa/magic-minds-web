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

/* reponse/index.html22.twig */
class __TwigTemplate_56b49c213d4dfc033115238c06176282 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/index.html22.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/index.html22.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "reponse/index.html22.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "    <style>

        .btn-add-event {
            background-color: #FE5D37;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 15px 30px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            display: inline-block;
            text-align: center;
            font-size: 18px;
            margin: 20px auto;
        }

        .btn-add-event:hover {
            color: orange;
        }
    </style>


    <div style=\"text-align: center;\">
        <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statsquestion");
        yield "\" class=\"btn-add-event\">Statistique</a>
    </div>
    <div class=\"card-body\">
        <h5 class=\"card-title\">Responses</h5>

        <!-- Loop through each response -->
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 34
            yield "            <div class=\"card mb-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Fullname: ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["response"], "fullname", [], "any", false, false, false, 36), "html", null, true);
            yield "</h5>
                    <p class=\"card-text\">Question: ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["response"], "questions", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
            yield "</p>
                    <p class=\"card-text\">Description: ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["response"], "description", [], "any", false, false, false, 38), "html", null, true);
            yield "</p>
                </div>
                <div class=\"card-footer\">
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Actions\">
                        <a class=\"btn cur-p btn-danger\" href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_adh", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\">Delete</a>
                        
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "    <div class=\"pagination\">
        ";
        // line 49
        yield $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["Reponse"]) || array_key_exists("Reponse", $context) ? $context["Reponse"] : (function () { throw new RuntimeError('Variable "Reponse" does not exist.', 49, $this->source); })()));
        yield "
    </div>
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
        return "reponse/index.html22.twig";
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
        return array (  141 => 49,  138 => 48,  126 => 42,  119 => 38,  115 => 37,  111 => 36,  107 => 34,  103 => 33,  94 => 27,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/base.html.twig' %}

{% block content %}
    <style>

        .btn-add-event {
            background-color: #FE5D37;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 15px 30px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            display: inline-block;
            text-align: center;
            font-size: 18px;
            margin: 20px auto;
        }

        .btn-add-event:hover {
            color: orange;
        }
    </style>


    <div style=\"text-align: center;\">
        <a href=\"{{ path('statsquestion')}}\" class=\"btn-add-event\">Statistique</a>
    </div>
    <div class=\"card-body\">
        <h5 class=\"card-title\">Responses</h5>

        <!-- Loop through each response -->
        {% for response in Reponse %}
            <div class=\"card mb-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Fullname: {{ response.fullname }}</h5>
                    <p class=\"card-text\">Question: {{ response.questions.name }}</p>
                    <p class=\"card-text\">Description: {{ response.description }}</p>
                </div>
                <div class=\"card-footer\">
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Actions\">
                        <a class=\"btn cur-p btn-danger\" href=\"{{ path('delete_adh', {'id': response.id}) }}\">Delete</a>
                        
                    </div>
                </div>
            </div>
        {% endfor %}
    <div class=\"pagination\">
        {{ knp_pagination_render(Reponse) }}
    </div>
    </div>
{% endblock %}
", "reponse/index.html22.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\reponse\\index.html22.twig");
    }
}
