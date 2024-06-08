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

/* Professeur/cours/addcourse.html.twig */
class __TwigTemplate_b631b719e21601ee7f3a18f6bb3d4561 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/cours/addcourse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/cours/addcourse.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "Professeur/cours/addcourse.html.twig", 1);
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

        echo "Classes";
        
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
        echo "<hr style=\"color: #103741; margin:0%\">
<div class=\"container p-5\">
    <div class=\"bg-light rounded\">
        <div class=\"row g-0\">
            <div class=\"col-lg-6 wow fadeIn \" data-wow-delay=\"0.1s\"
                style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;\">
                <div class=\"h-100 d-flex flex-column justify-content-center p-5\">
                    <h1 style=\"margin-left:75px;\" class=\"mb-3\">Add a course</h1>
                    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f_cours"]) || array_key_exists("f_cours", $context) ? $context["f_cours"] : (function () { throw new RuntimeError('Variable "f_cours" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"row g-3\">
                        <div class=\"col-12 \">
                            <div class=\"form-floating\">
                                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_cours"]) || array_key_exists("f_cours", $context) ? $context["f_cours"] : (function () { throw new RuntimeError('Variable "f_cours" does not exist.', 19, $this->source); })()), "titre", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "form-control border-0", "placeholder" => "Title"]]);
        // line 21
        echo "
                        
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_cours"]) || array_key_exists("f_cours", $context) ? $context["f_cours"] : (function () { throw new RuntimeError('Variable "f_cours" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control border-0", "placeholder" => "Description", "style" => "height: 150px"]]);
        // line 29
        echo "
                               
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_cours"]) || array_key_exists("f_cours", $context) ? $context["f_cours"] : (function () { throw new RuntimeError('Variable "f_cours" does not exist.', 35, $this->source); })()), "duree", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "form-control border-0", "placeholder" => "Period in weeks"]]);
        // line 37
        echo "
                           
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_cours"]) || array_key_exists("f_cours", $context) ? $context["f_cours"] : (function () { throw new RuntimeError('Variable "f_cours" does not exist.', 43, $this->source); })()), "nbChapitre", [], "any", false, false, false, 43), 'row', ["attr" => ["class" => "form-control border-0", "placeholder" => "Number of chapters"]]);
        // line 45
        echo "
                                
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_cours"]) || array_key_exists("f_cours", $context) ? $context["f_cours"] : (function () { throw new RuntimeError('Variable "f_cours" does not exist.', 51, $this->source); })()), "categorie", [], "any", false, false, false, 51), 'row', ["attr" => ["class" => "form-control border-0", "placeholder" => "Categorie"]]);
        // line 53
        echo "
                            </div>
                        </div>

                        <div style=\"margin-left: 40px;\" class=\"col-sm-6\">
                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_cours"]) || array_key_exists("f_cours", $context) ? $context["f_cours"] : (function () { throw new RuntimeError('Variable "f_cours" does not exist.', 58, $this->source); })()), "save", [], "any", false, false, false, 58), 'row', ["attr" => ["class" => "btn btn-primary w-100 py-3"]]);
        echo "
                        </div>
                    </div>
                    ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f_cours"]) || array_key_exists("f_cours", $context) ? $context["f_cours"] : (function () { throw new RuntimeError('Variable "f_cours" does not exist.', 61, $this->source); })()), 'form_end');
        echo "

                </div>
            </div>
            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\"
                style=\"min-height: 400px; visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;\">
                <div class=\"position-relative h-100\">
                    <img class=\"position-absolute w-100 h-100 rounded\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/appointment.jpg"), "html", null, true);
        echo "\"
                        style=\"object-fit: cover;\">
                </div>
            </div>
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
        return "Professeur/cours/addcourse.html.twig";
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
        return array (  189 => 68,  179 => 61,  173 => 58,  166 => 53,  164 => 51,  156 => 45,  154 => 43,  146 => 37,  144 => 35,  136 => 29,  134 => 27,  126 => 21,  124 => 19,  117 => 15,  107 => 7,  97 => 6,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Classes{% endblock %}
{% block navimg %}
{% endblock %}
{% block body %}
<hr style=\"color: #103741; margin:0%\">
<div class=\"container p-5\">
    <div class=\"bg-light rounded\">
        <div class=\"row g-0\">
            <div class=\"col-lg-6 wow fadeIn \" data-wow-delay=\"0.1s\"
                style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;\">
                <div class=\"h-100 d-flex flex-column justify-content-center p-5\">
                    <h1 style=\"margin-left:75px;\" class=\"mb-3\">Add a course</h1>
                    {{ form_start(f_cours,{'attr': {'novalidate': 'novalidate'}} ) }}
                    <div class=\"row g-3\">
                        <div class=\"col-12 \">
                            <div class=\"form-floating\">
                                {{ form_row(f_cours.titre, {'attr': {'class': 'form-control border-0',
                                'placeholder':'Title'}})
                                }}
                        
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_row(f_cours.description, {'attr': {'class': 'form-control border-0',
                                'placeholder':
                                'Description','style': 'height: 150px'}}) }}
                               
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_row(f_cours.duree, {'attr': {'class': 'form-control border-0',
                                'placeholder':
                                'Period in weeks'}}) }}
                           
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_row(f_cours.nbChapitre, {'attr': {'class': 'form-control border-0',
                                'placeholder':
                                'Number of chapters'}}) }}
                                
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_row(f_cours.categorie, {'attr': {'class': 'form-control border-0',
                                'placeholder':
                                'Categorie'}}) }}
                            </div>
                        </div>

                        <div style=\"margin-left: 40px;\" class=\"col-sm-6\">
                            {{ form_row(f_cours.save, {'attr': {'class': 'btn btn-primary w-100 py-3'}}) }}
                        </div>
                    </div>
                    {{ form_end(f_cours) }}

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
{% endblock %}", "Professeur/cours/addcourse.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Professeur\\cours\\addcourse.html.twig");
    }
}
