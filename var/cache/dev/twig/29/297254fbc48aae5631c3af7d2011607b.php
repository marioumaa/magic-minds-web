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

/* Admin/cours/editcat.html.twig */
class __TwigTemplate_d7c7f54ee8a72c2dd6c841cec28455c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/cours/editcat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/cours/editcat.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/cours/editcat.html.twig", 1);
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

        yield " Edit category ";
        
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
        yield "<div class=\"card\">
    <div class=\"border-bottom-0 p-0 card-header\">
        <div class=\"nav-lb-tab nav card-header-undefined\" role=\"tablist\">
            <div class=\"nav-item\">
                <a role=\"tab\" data-rr-ui-event-key=\"all\" id=\"react-aria-240-tab-all\"
                    aria-controls=\"react-aria-240-tabpane-all\" aria-selected=\"true\"
                    class=\"mb-sm-3 mb-md-0 nav-link active\" tabindex=\"0\"
                    href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.category.show");
        yield "\">Go back</a>
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
                    <h1 class=\"mb-3\">Edit a category</h1>
                    ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                    <div class=\"row g-3\">
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 29, $this->source); })()), "titre", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control border-0", "placeholder" => "Title"]]);
        // line 32
        yield "
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control border-0", "placeholder" => "Description", "style" => "height: 150px"]]);
        // line 39
        yield "
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div>
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 44, $this->source); })()), "image", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control border-0 bg-white"]]);
        yield "
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 48, $this->source); })()), "save", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "btn btn-primary w-100 py-3", "style" => "background-color:#103741;color:white"]]);
        yield "
                        </div>
                    </div>
                    ";
        // line 51
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 51, $this->source); })()), 'form_end');
        yield "
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
        return "Admin/cours/editcat.html.twig";
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
        return array (  152 => 51,  146 => 48,  139 => 44,  132 => 39,  130 => 37,  123 => 32,  121 => 29,  114 => 25,  99 => 13,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/base.html.twig' %}

{% block title %} Edit category {% endblock %}

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
                    <h1 class=\"mb-3\">Edit a category</h1>
                    {{ form_start( editf,{'attr': {'novalidate': 'novalidate'}}) }}
                    <div class=\"row g-3\">
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_widget(editf.titre, {'attr': {'class': 'form-control border-0',
                                'placeholder':
                                'Title'}})
                                }}
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_widget(editf.description, {'attr': {'class': 'form-control border-0',
                                'placeholder':
                                'Description','style': 'height: 150px'}}) }}
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div>
                                {{ form_widget(editf.image, {'attr': {'class': 'form-control border-0 bg-white'}}) }}
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            {{ form_widget(editf.save, {'attr': {'class': 'btn btn-primary w-100 py-3','style':'background-color:#103741;color:white'}}) }}
                        </div>
                    </div>
                    {{ form_end(editf) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "Admin/cours/editcat.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Admin\\cours\\editcat.html.twig");
    }
}
