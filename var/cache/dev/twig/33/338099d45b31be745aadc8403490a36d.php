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

/* Admin/abonnement/editabonnement.html.twig */
class __TwigTemplate_8a17adc2ab1417d92b99f99d8c41eb27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/abonnement/editabonnement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/abonnement/editabonnement.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/abonnement/editabonnement.html.twig", 1);
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
                    class=\"mb-sm-3 mb-md-0 nav-link active\" tabindex=\"0\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.category.show");
        echo "\">Go
                    back</a>
            </div>
        </div>
        <hr style=\"color: #103741; margin:0%\">
        <div style=\"margin: 50px ;\" class=\"container\">
            <div class=\"bg-light rounded\">
                <div class=\"row g-0 justify-content-center\">
                    <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\"
                        style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;\">
                        <div class=\"h-100 d-flex flex-column justify-content-center p-5\">
                            <h1 class=\"mb-3\">Edit Subscription</h1>
                            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 24, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            <div class=\"row g-3\">
                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 28, $this->source); })()), "type", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control border-0 mb-2 bg-white", "placeholder" => "Type"]]);
        // line 31
        echo "
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 36, $this->source); })()), "tarif", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control border-0 mb-2 bg-white", "placeholder" => "Price"]]);
        // line 38
        echo "
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div>
                                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 43, $this->source); })()), "duree", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control border-0 mb-2 bg-white
                                        bg-white"]]);
        // line 44
        echo "
                                    </div>
                                </div>
                                <div class=\"col-sm-12\">
                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 48, $this->source); })()), "save", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "btn btn-primary w-100
                                    py-3", "style" => "background-color:#103741;color:white"]]);
        // line 49
        echo "
                                </div>
                            </div>
                            ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editf"]) || array_key_exists("editf", $context) ? $context["editf"] : (function () { throw new RuntimeError('Variable "editf" does not exist.', 52, $this->source); })()), 'form_end');
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
        return "Admin/abonnement/editabonnement.html.twig";
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
        return array (  153 => 52,  148 => 49,  145 => 48,  139 => 44,  136 => 43,  129 => 38,  127 => 36,  120 => 31,  118 => 28,  111 => 24,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                    class=\"mb-sm-3 mb-md-0 nav-link active\" tabindex=\"0\" href=\"{{path('admin.category.show')}}\">Go
                    back</a>
            </div>
        </div>
        <hr style=\"color: #103741; margin:0%\">
        <div style=\"margin: 50px ;\" class=\"container\">
            <div class=\"bg-light rounded\">
                <div class=\"row g-0 justify-content-center\">
                    <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\"
                        style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;\">
                        <div class=\"h-100 d-flex flex-column justify-content-center p-5\">
                            <h1 class=\"mb-3\">Edit Subscription</h1>
                            {{ form_start( editf,{'attr': {'novalidate': 'novalidate'}}) }}
                            <div class=\"row g-3\">
                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        {{ form_widget(editf.type, {'attr': {'class': 'form-control border-0 mb-2 bg-white',
                                        'placeholder':
                                        'Type'}})
                                        }}
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        {{ form_widget(editf.tarif, {'attr': {'class': 'form-control border-0 mb-2 bg-white',
                                        'placeholder':
                                        'Price'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div>
                                        {{ form_widget(editf.duree, {'attr': {'class': 'form-control border-0 mb-2 bg-white
                                        bg-white'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-sm-12\">
                                    {{ form_widget(editf.save, {'attr': {'class': 'btn btn-primary w-100
                                    py-3','style':'background-color:#103741;color:white'}}) }}
                                </div>
                            </div>
                            {{ form_end(editf) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        {% endblock %}", "Admin/abonnement/editabonnement.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Admin\\abonnement\\editabonnement.html.twig");
    }
}
