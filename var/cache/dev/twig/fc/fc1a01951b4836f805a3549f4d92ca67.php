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

/* Admin/editEvenement.html.twig */
class __TwigTemplate_f1c528b29f1d9943dd9b2e967bade619 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/editEvenement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/editEvenement.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/editEvenement.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 offset-md-3\">
                ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                <div class=\"mb-3\">
                    <label class=\"form-label\">Name</label>
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    <div class=\"form-error\">
                        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Description</label>
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    <div class=\"form-error\">
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Category</label>
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "categorie", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    <div class=\"form-error\">
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "categorie", [], "any", false, false, false, 26), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"mb-3\">

                    <label class=\"form-label\">Start Date</label>
                       ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "dateDebut", [], "any", false, false, false, 32), 'errors');
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "dateDebut", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    <div class=\"form-error\">
                       
                    </div>
                </div>
                <br>
                <div class=\"mb-3\">
                    <label class=\"form-label\">End Date</label>
                     ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "dateFin", [], "any", false, false, false, 41), 'errors');
        echo "
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "dateFin", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    <div class=\"form-error\">
                       
                    </div>
                </div>
                <br>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Number of Participants</label>
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "nbParticipant", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    <div class=\"form-error\">
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "nbParticipant", [], "any", false, false, false, 52), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Location</label>
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "localisation", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    <div class=\"form-error\">
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "localisation", [], "any", false, false, false, 59), 'errors');
        echo "
                    </div>
                </div>
               <button type=\"submit\" class=\"btn btn-primary\" style=\"background-color: #FE5D37;\">Submit</button>

                ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_end');
        echo "
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
        return "Admin/editEvenement.html.twig";
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
        return array (  175 => 64,  167 => 59,  162 => 57,  154 => 52,  149 => 50,  138 => 42,  134 => 41,  123 => 33,  119 => 32,  110 => 26,  105 => 24,  97 => 19,  92 => 17,  84 => 12,  79 => 10,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/base.html.twig' %}

{% block content %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 offset-md-3\">
                {{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
                <div class=\"mb-3\">
                    <label class=\"form-label\">Name</label>
                    {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                    <div class=\"form-error\">
                        {{ form_errors(form.nom) }}
                    </div>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Description</label>
                    {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
                    <div class=\"form-error\">
                        {{ form_errors(form.description) }}
                    </div>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Category</label>
                    {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
                    <div class=\"form-error\">
                        {{ form_errors(form.categorie) }}
                    </div>
                </div>
                <div class=\"mb-3\">

                    <label class=\"form-label\">Start Date</label>
                       {{ form_errors(form.dateDebut) }}
                    {{ form_widget(form.dateDebut, {'attr': {'class': 'form-control'}}) }}
                    <div class=\"form-error\">
                       
                    </div>
                </div>
                <br>
                <div class=\"mb-3\">
                    <label class=\"form-label\">End Date</label>
                     {{ form_errors(form.dateFin) }}
                    {{ form_widget(form.dateFin, {'attr': {'class': 'form-control'}}) }}
                    <div class=\"form-error\">
                       
                    </div>
                </div>
                <br>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Number of Participants</label>
                    {{ form_widget(form.nbParticipant, {'attr': {'class': 'form-control'}}) }}
                    <div class=\"form-error\">
                        {{ form_errors(form.nbParticipant) }}
                    </div>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Location</label>
                    {{ form_widget(form.localisation, {'attr': {'class': 'form-control'}}) }}
                    <div class=\"form-error\">
                        {{ form_errors(form.localisation) }}
                    </div>
                </div>
               <button type=\"submit\" class=\"btn btn-primary\" style=\"background-color: #FE5D37;\">Submit</button>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}
", "Admin/editEvenement.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Admin\\editEvenement.html.twig");
    }
}
