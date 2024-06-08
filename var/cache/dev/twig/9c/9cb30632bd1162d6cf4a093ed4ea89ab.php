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

/* Professeur/cours/editcourse.html.twig */
class __TwigTemplate_58ae9879c0982bdda2a0e2f2ce9cea1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/cours/editcourse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/cours/editcourse.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "Professeur/cours/editcourse.html.twig", 1);
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

        yield "Classes";
        
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
        yield "<hr style=\"color: #103741; margin:0%\">
<div style=\"margin: 50px ;\" class=\"container\">
    <div class=\"bg-light rounded\">
        <div class=\"row g-0\">
            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\"
                style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;\">
                <div class=\"h-100 d-flex flex-column justify-content-center p-5\">

                    <h1 class=\"mb-3\">Add a course</h1>
                    ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 16, $this->source); })()), 'form_start');
        yield "
                    <div class=\"row g-3\">
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control border-0", "placeholder" => "Title"]]);
        // line 23
        yield "
                                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 24, $this->source); })()), "titre", [], "any", false, false, false, 24), 'label', ["label" => "Title"]);
        yield "
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control border-0", "placeholder" => "Description", "style" => "height: 150px"]]);
        // line 31
        yield "
                                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'label', ["label" => "Description"]);
        yield "
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 37, $this->source); })()), "duree", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control border-0", "placeholder" => "Period in weeks"]]);
        // line 39
        yield "
                                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 40, $this->source); })()), "duree", [], "any", false, false, false, 40), 'label', ["label" => "Period in weeks"]);
        yield "
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 45, $this->source); })()), "nbChapitre", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control border-0", "placeholder" => "Number of chapters"]]);
        // line 47
        yield "
                                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 48, $this->source); })()), "nbChapitre", [], "any", false, false, false, 48), 'label', ["label" => "Number of chapters"]);
        yield "
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 53, $this->source); })()), "categorie", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control border-0", "placeholder" => "Categorie"]]);
        // line 55
        yield "
                            </div>
                        </div>

                        <div class=\"col-sm-6\">
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 60, $this->source); })()), "save", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "btn btn-primary w-100 py-3"]]);
        yield "
                        </div>
                    </div>
                    ";
        // line 63
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 63, $this->source); })()), 'form_end');
        yield "

                </div>
            </div>
            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\"
                style=\"min-height: 400px; visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;\">
                <div class=\"position-relative h-100\">
                    <img class=\"position-absolute w-100 h-100 rounded\" src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/appointment.jpg"), "html", null, true);
        yield "\"
                        style=\"object-fit: cover;\">
                </div>
            </div>
        </div>
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
        return "Professeur/cours/editcourse.html.twig";
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
        return array (  205 => 70,  195 => 63,  189 => 60,  182 => 55,  180 => 53,  172 => 48,  169 => 47,  167 => 45,  159 => 40,  156 => 39,  154 => 37,  146 => 32,  143 => 31,  141 => 29,  133 => 24,  130 => 23,  128 => 20,  121 => 16,  110 => 7,  100 => 6,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Classes{% endblock %}
{% block navimg %}
{% endblock %}
{% block body %}
<hr style=\"color: #103741; margin:0%\">
<div style=\"margin: 50px ;\" class=\"container\">
    <div class=\"bg-light rounded\">
        <div class=\"row g-0\">
            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\"
                style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;\">
                <div class=\"h-100 d-flex flex-column justify-content-center p-5\">

                    <h1 class=\"mb-3\">Add a course</h1>
                    {{ form_start( editf) }}
                    <div class=\"row g-3\">
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_widget(editf.titre, {'attr': {'class': 'form-control border-0',
                                'placeholder':
                                'Title'}})
                                }}
                                {{ form_label(editf.titre, 'Title') }}
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_widget(editf.description, {'attr': {'class': 'form-control border-0',
                                'placeholder':
                                'Description','style': 'height: 150px'}}) }}
                                {{ form_label(editf.description, 'Description') }}
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_widget(editf.duree, {'attr': {'class': 'form-control border-0',
                                'placeholder':
                                'Period in weeks'}}) }}
                                {{ form_label(editf.duree, 'Period in weeks') }}
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_widget(editf.nbChapitre, {'attr': {'class': 'form-control border-0',
                                'placeholder':
                                'Number of chapters'}}) }}
                                {{ form_label(editf.nbChapitre, 'Number of chapters') }}
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_widget(editf.categorie, {'attr': {'class': 'form-control border-0',
                                'placeholder':
                                'Categorie'}}) }}
                            </div>
                        </div>

                        <div class=\"col-sm-6\">
                            {{ form_widget(editf.save, {'attr': {'class': 'btn btn-primary w-100 py-3'}}) }}
                        </div>
                    </div>
                    {{ form_end(editf) }}

                </div>
            </div>
            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\"
                style=\"min-height: 400px; visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;\">
                <div class=\"position-relative h-100\">
                    <img class=\"position-absolute w-100 h-100 rounded\" src=\"{{ asset('asset/User/img/appointment.jpg') }}\"
                        style=\"object-fit: cover;\">
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "Professeur/cours/editcourse.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Professeur\\cours\\editcourse.html.twig");
    }
}
