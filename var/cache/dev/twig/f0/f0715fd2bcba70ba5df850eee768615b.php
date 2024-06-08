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

/* Admin/cours/editcours.html.twig */
class __TwigTemplate_7321355417cfc43694d2773be630c51f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/cours/editcours.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/cours/editcours.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/cours/editcours.html.twig", 1);
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
        echo "<div class=\"card\">
  <div class=\"border-bottom-0 p-0 card-header\">
        <div class=\"nav-lb-tab nav card-header-undefined\" role=\"tablist\">
            <div class=\"nav-item\">
                <a role=\"tab\" data-rr-ui-event-key=\"all\" id=\"react-aria-240-tab-all\"
                    aria-controls=\"react-aria-240-tabpane-all\" aria-selected=\"true\"
                    class=\"mb-sm-3 mb-md-0 nav-link active\" tabindex=\"0\"
                    href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.category.show");
        echo "\">Go back</a>
            </div>
    </div
</div>
<hr style=\"color: #103741; margin:0%\">
<div style=\"margin: 50px ;\" class=\"container\">
    <div class=\"bg-light rounded\">
        <div class=\"row g-0\">
            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\"
                style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;\">
                <div class=\"h-100 d-flex flex-column justify-content-center p-5\">

                    <h1 class=\"mb-3\">Edit a course</h1>
                    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"row g-3\">
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 30, $this->source); })()), "titre", [], "any", false, false, false, 30), 'row', ["attr" => ["class" => "form-control border-0", "placeholder" => "Title"]]);
        // line 33
        echo "
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), 'row', ["attr" => ["class" => "form-control border-0", "placeholder" => "Description", "style" => "height: 150px"]]);
        // line 40
        echo "
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 45, $this->source); })()), "duree", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "form-control border-0", "placeholder" => "Period in weeks"]]);
        // line 47
        echo "
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 52, $this->source); })()), "nbChapitre", [], "any", false, false, false, 52), 'row', ["attr" => ["class" => "form-control border-0", "placeholder" => "Number of chapters"]]);
        // line 54
        echo "
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 55, $this->source); })()), "nbChapitre", [], "any", false, false, false, 55), 'label', ["label" => "Number of chapters"]);
        echo "
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 60, $this->source); })()), "categorie", [], "any", false, false, false, 60), 'row', ["attr" => ["class" => "form-control border-0", "placeholder" => "Categorie"]]);
        // line 62
        echo "
                            </div>
                        </div>

                        <div class=\"col-sm-6\">
                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 67, $this->source); })()), "save", [], "any", false, false, false, 67), 'row', ["attr" => ["class" => "btn btn-primary w-100 py-3", "style" => "background-color:#103741;color:white ; margin-top:10px"]]);
        echo "
                        </div>
                    </div>
                    ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 70, $this->source); })()), 'form_end');
        echo "

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
        return "Admin/cours/editcours.html.twig";
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
        return array (  175 => 70,  169 => 67,  162 => 62,  160 => 60,  152 => 55,  149 => 54,  147 => 52,  140 => 47,  138 => 45,  131 => 40,  129 => 38,  122 => 33,  120 => 30,  113 => 26,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
    </div
</div>
<hr style=\"color: #103741; margin:0%\">
<div style=\"margin: 50px ;\" class=\"container\">
    <div class=\"bg-light rounded\">
        <div class=\"row g-0\">
            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\"
                style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;\">
                <div class=\"h-100 d-flex flex-column justify-content-center p-5\">

                    <h1 class=\"mb-3\">Edit a course</h1>
                    {{ form_start( editf,{'attr': {'novalidate': 'novalidate'}}) }}
                    <div class=\"row g-3\">
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_row(editf.titre, {'attr': {'class': 'form-control border-0',
                                'placeholder':
                                'Title'}})
                                }}
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_row(editf.description, {'attr': {'class': 'form-control border-0',
                                'placeholder':
                                'Description','style': 'height: 150px'}}) }}
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_row(editf.duree, {'attr': {'class': 'form-control border-0',
                                'placeholder':
                                'Period in weeks'}}) }}
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_row(editf.nbChapitre, {'attr': {'class': 'form-control border-0',
                                'placeholder':
                                'Number of chapters'}}) }}
                                {{ form_label(editf.nbChapitre, 'Number of chapters') }}
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_row(editf.categorie, {'attr': {'class': 'form-control border-0',
                                'placeholder':
                                'Categorie'}}) }}
                            </div>
                        </div>

                        <div class=\"col-sm-6\">
                            {{ form_row(editf.save, {'attr': {'class': 'btn btn-primary w-100 py-3','style':'background-color:#103741;color:white ; margin-top:10px'}}) }}
                        </div>
                    </div>
                    {{ form_end(editf) }}

                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "Admin/cours/editcours.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Admin\\cours\\editcours.html.twig");
    }
}
