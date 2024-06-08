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

/* Admin/cours/addcat.html.twig */
class __TwigTemplate_a2a0bf1cb06b48e9cf8f406ca53d00d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/cours/addcat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/cours/addcat.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/cours/addcat.html.twig", 1);
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

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "
<div class=\"card\">
    <div class=\"border-bottom-0 p-0 card-header\">
        <div class=\"nav-lb-tab nav card-header-undefined\" role=\"tablist\">
            <div class=\"nav-item\">
                <a role=\"tab\" data-rr-ui-event-key=\"all\" id=\"react-aria-240-tab-all\"
                    aria-controls=\"react-aria-240-tabpane-all\" aria-selected=\"true\"
                    class=\"mb-sm-3 mb-md-0 nav-link active\" tabindex=\"0\"
                    href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.category.show");
        yield "\">Go back</a>
            </div>
    </div
</div>
    <div class=\"p-0 card-body\">
        <div class=\"tab-content\">
            <div style=\"margin: 50px ;\" class=\"container\">
                <div class=\"bg-light rounded\">
                    <div class=\"row g-0\">
                        <div class=\"col-lg-12 wow fadeIn\" data-wow-delay=\"0.1s\"
                            style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;\">
                            <div class=\"h-100 d-flex flex-column justify-content-center p-5\">

                                <h1 style=\"margin-left:75px;\" class=\"mb-3\">Add a category</h1>
                                ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                                <div class=\"row g-3\">
                                    <div class=\"col-12\">
                                        <div class=\"form-floating\">
                                            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 32, $this->source); })()), "titre", [], "any", false, false, false, 32), 'row', ["attr" => ["class" => "form-control border-0", "placeholder" => "Title"]]);
        // line 35
        yield "
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-floating\">
                                            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), 'row', ["attr" => ["class" => "form-control
                                            border-0", "placeholder" => "Description", "style" => "height: 150px"]]);
        // line 43
        yield "
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div>
                                            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 48, $this->source); })()), "image", [], "any", false, false, false, 48), 'row', ["attr" => ["class" => "form-control border-0
                                            bg-white"]]);
        // line 49
        yield "
                                        </div>
                                    </div>
                                    <div  class=\"col-sm-12\">
                                        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 53, $this->source); })()), "save", [], "any", false, false, false, 53), 'row', ["attr" => ["class" => "btn btn-primary w-100 py-3", "style" => "background-color:#103741;color:white"]]);
        // line 54
        yield "
                                    </div>
                                </div>
                                ";
        // line 57
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 57, $this->source); })()), 'form_end');
        yield "

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

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Admin/cours/addcat.html.twig";
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
        return array (  159 => 57,  154 => 54,  152 => 53,  146 => 49,  143 => 48,  136 => 43,  133 => 40,  126 => 35,  124 => 32,  117 => 28,  100 => 14,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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
    <div class=\"p-0 card-body\">
        <div class=\"tab-content\">
            <div style=\"margin: 50px ;\" class=\"container\">
                <div class=\"bg-light rounded\">
                    <div class=\"row g-0\">
                        <div class=\"col-lg-12 wow fadeIn\" data-wow-delay=\"0.1s\"
                            style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;\">
                            <div class=\"h-100 d-flex flex-column justify-content-center p-5\">

                                <h1 style=\"margin-left:75px;\" class=\"mb-3\">Add a category</h1>
                                {{ form_start( f_categorie,{'attr': {'novalidate': 'novalidate'}} ) }}
                                <div class=\"row g-3\">
                                    <div class=\"col-12\">
                                        <div class=\"form-floating\">
                                            {{ form_row(f_categorie.titre, {'attr': {'class': 'form-control border-0',
                                            'placeholder':
                                            'Title'}})
                                            }}
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-floating\">
                                            {{ form_row(f_categorie.description, {'attr': {'class': 'form-control
                                            border-0',
                                            'placeholder':
                                            'Description','style': 'height: 150px'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div>
                                            {{ form_row(f_categorie.image, {'attr': {'class': 'form-control border-0
                                            bg-white'}}) }}
                                        </div>
                                    </div>
                                    <div  class=\"col-sm-12\">
                                        {{ form_row(f_categorie.save, {'attr': {'class': 'btn btn-primary w-100 py-3','style':'background-color:#103741;color:white'}})
                                        }}
                                    </div>
                                </div>
                                {{ form_end(f_categorie) }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "Admin/cours/addcat.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Admin\\cours\\addcat.html.twig");
    }
}
