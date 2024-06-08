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

/* Admin/cours/addcourse.html.twig */
class __TwigTemplate_bc4302907dbb7340ba74413b2c1f81ce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/cours/addcourse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/cours/addcourse.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/cours/addcourse.html.twig", 1);
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

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<div class=\"card\">
    <div class=\"border-bottom-0 p-0 card-header\">
        <div class=\"nav-lb-tab nav card-header-undefined\" role=\"tablist\">
            <div class=\"nav-item\">
                <a role=\"tab\" data-rr-ui-event-key=\"all\" id=\"react-aria-240-tab-all\"
                    aria-controls=\"react-aria-240-tabpane-all\" aria-selected=\"true\"
                    class=\"mb-sm-3 mb-md-0 nav-link active\" tabindex=\"0\"
                    href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.category.show");
        echo "\">Go back</a>
            </div>
    </div>
</div>
    <div class=\"p-0 card-body\">
        <div class=\"tab-content\">
            <div style=\"margin: 50px ;\" class=\"container\">
                <div class=\"bg-light rounded\">
                    <div class=\"row g-0\">
                        <div class=\"col-lg-12 wow fadeIn\" data-wow-delay=\"0.1s\"
                            style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;\">
                            <div class=\"h-100 d-flex flex-column justify-content-center p-5\">

                                <h1 style=\"margin-left:75px;\" class=\"mb-3\">Add a cource</h1>
                                ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f_cours"]) || array_key_exists("f_cours", $context) ? $context["f_cours"] : (function () { throw new RuntimeError('Variable "f_cours" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"row g-3\">
                        <div class=\"col-12 \">
                            <div class=\"form-floating\">
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_cours"]) || array_key_exists("f_cours", $context) ? $context["f_cours"] : (function () { throw new RuntimeError('Variable "f_cours" does not exist.', 32, $this->source); })()), "titre", [], "any", false, false, false, 32), 'row', ["attr" => ["class" => "form-control border-0", "placeholder" => "Title"]]);
        // line 34
        echo "
                        
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_cours"]) || array_key_exists("f_cours", $context) ? $context["f_cours"] : (function () { throw new RuntimeError('Variable "f_cours" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), 'row', ["attr" => ["class" => "form-control border-0", "placeholder" => "Description", "style" => "height: 150px"]]);
        // line 42
        echo "
                               
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_cours"]) || array_key_exists("f_cours", $context) ? $context["f_cours"] : (function () { throw new RuntimeError('Variable "f_cours" does not exist.', 48, $this->source); })()), "duree", [], "any", false, false, false, 48), 'row', ["attr" => ["class" => "form-control border-0", "placeholder" => "Period in weeks"]]);
        // line 50
        echo "
                           
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_cours"]) || array_key_exists("f_cours", $context) ? $context["f_cours"] : (function () { throw new RuntimeError('Variable "f_cours" does not exist.', 56, $this->source); })()), "nbChapitre", [], "any", false, false, false, 56), 'row', ["attr" => ["class" => "form-control border-0", "placeholder" => "Number of chapters"]]);
        // line 58
        echo "
                                
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_cours"]) || array_key_exists("f_cours", $context) ? $context["f_cours"] : (function () { throw new RuntimeError('Variable "f_cours" does not exist.', 64, $this->source); })()), "categorie", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "form-control border-0", "placeholder" => "Categorie"]]);
        // line 66
        echo "
                            </div>
                        </div>

                        <div  class=\"col-sm-12\">
                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_cours"]) || array_key_exists("f_cours", $context) ? $context["f_cours"] : (function () { throw new RuntimeError('Variable "f_cours" does not exist.', 71, $this->source); })()), "save", [], "any", false, false, false, 71), 'row', ["attr" => ["class" => "btn btn-primary w-100 py-3", "style" => "background-color:#103741;color:white"]]);
        echo "
                        </div>
                    </div>
                    ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f_cours"]) || array_key_exists("f_cours", $context) ? $context["f_cours"] : (function () { throw new RuntimeError('Variable "f_cours" does not exist.', 74, $this->source); })()), 'form_end');
        echo "

                            </div>
                        </div>
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
        return "Admin/cours/addcourse.html.twig";
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
        return array (  177 => 74,  171 => 71,  164 => 66,  162 => 64,  154 => 58,  152 => 56,  144 => 50,  142 => 48,  134 => 42,  132 => 40,  124 => 34,  122 => 32,  115 => 28,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/base.html.twig' %}

{% block title %}Classes{% endblock %}

{% block content %}

<div class=\"card\">
    <div class=\"border-bottom-0 p-0 card-header\">
        <div class=\"nav-lb-tab nav card-header-undefined\" role=\"tablist\">
            <div class=\"nav-item\">
                <a role=\"tab\" data-rr-ui-event-key=\"all\" id=\"react-aria-240-tab-all\"
                    aria-controls=\"react-aria-240-tabpane-all\" aria-selected=\"true\"
                    class=\"mb-sm-3 mb-md-0 nav-link active\" tabindex=\"0\"
                    href=\"{{path('admin.category.show')}}\">Go back</a>
            </div>
    </div>
</div>
    <div class=\"p-0 card-body\">
        <div class=\"tab-content\">
            <div style=\"margin: 50px ;\" class=\"container\">
                <div class=\"bg-light rounded\">
                    <div class=\"row g-0\">
                        <div class=\"col-lg-12 wow fadeIn\" data-wow-delay=\"0.1s\"
                            style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;\">
                            <div class=\"h-100 d-flex flex-column justify-content-center p-5\">

                                <h1 style=\"margin-left:75px;\" class=\"mb-3\">Add a cource</h1>
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

                        <div  class=\"col-sm-12\">
                            {{ form_row(f_cours.save, {'attr': {'class': 'btn btn-primary w-100 py-3','style':'background-color:#103741;color:white'}}) }}
                        </div>
                    </div>
                    {{ form_end(f_cours) }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "Admin/cours/addcourse.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Admin\\cours\\addcourse.html.twig");
    }
}
