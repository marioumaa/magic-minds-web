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

/* Admin/abonnement/showabonnement.html.twig */
class __TwigTemplate_301dac14afff80d868c27a339c73d748 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/abonnement/showabonnement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/abonnement/showabonnement.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/abonnement/showabonnement.html.twig", 1);
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
<div class=\"container-fluid\">


    <!-- DataTales Example -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Subscriptionst</h6>
        </div>
        <div class=\"card-body\">
            <div>
                <div id=\"dataTable_wrapper\" class=\"dataTables_wrapper dt-bootstrap4\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <table class=\"table table-bordered dataTable\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\"
                                role=\"grid\" aria-describedby=\"dataTable_info\" style=\"width: 100%;\">
                                <thead>
                                    <tr role=\"row\">
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Office: activate to sort column ascending\"
                                            style=\"width:8%;\">
                                            Type</th>
                                        <th class=\"sorting sorting_asc\" tabindex=\"0\" aria-controls=\"dataTable\"
                                            rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\"
                                            aria-label=\"Name: activate to sort column descending\" style=\"width:25%;\">
                                            Price</th>
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Position: activate to sort column ascending\"
                                            style=\"width:25%;\">
                                            Periode</th>
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Position: activate to sort column ascending\"
                                            style=\"width:25%;\">
                                            Book date
                                        </th>
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Office: activate to sort column ascending\"
                                            style=\"width:17%;\">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 49
            echo "                                    <tr class=\"odd\">
                                        <td class=\"sorting_1\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "type", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "tarif", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "duree", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "dateDebut", [], "any", false, false, false, 53), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                                        <td style=\"border-left:none ;border-top:none;border-right:none\" class=\"row\">
                                            <div class=\"col-lg-6\"><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_editabonnement", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">
                                                <i style=\"color:#103741; margin-left:10px\" class=\"bi fa-2x bi-pen\"></i></a>
                                            </div>
                                            <div class=\"col-lg-6\"><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deleteabonnement", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">
                                            <i style=\"color:#FE5D37;\" class=\"bi fa-2x bi-trash\"></i></a>
                                        </div>
                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                                </tbody>
                            </table>
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
        return "Admin/abonnement/showabonnement.html.twig";
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
        return array (  174 => 64,  162 => 58,  156 => 55,  151 => 53,  147 => 52,  143 => 51,  139 => 50,  136 => 49,  132 => 48,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/base.html.twig' %}

{% block title %}Classes{% endblock %}

{% block content %}

<div class=\"container-fluid\">


    <!-- DataTales Example -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Subscriptionst</h6>
        </div>
        <div class=\"card-body\">
            <div>
                <div id=\"dataTable_wrapper\" class=\"dataTables_wrapper dt-bootstrap4\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <table class=\"table table-bordered dataTable\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\"
                                role=\"grid\" aria-describedby=\"dataTable_info\" style=\"width: 100%;\">
                                <thead>
                                    <tr role=\"row\">
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Office: activate to sort column ascending\"
                                            style=\"width:8%;\">
                                            Type</th>
                                        <th class=\"sorting sorting_asc\" tabindex=\"0\" aria-controls=\"dataTable\"
                                            rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\"
                                            aria-label=\"Name: activate to sort column descending\" style=\"width:25%;\">
                                            Price</th>
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Position: activate to sort column ascending\"
                                            style=\"width:25%;\">
                                            Periode</th>
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Position: activate to sort column ascending\"
                                            style=\"width:25%;\">
                                            Book date
                                        </th>
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Office: activate to sort column ascending\"
                                            style=\"width:17%;\">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for a in abonnement %}
                                    <tr class=\"odd\">
                                        <td class=\"sorting_1\">{{a.type}}</td>
                                        <td>{{a.tarif}}</td>
                                        <td>{{a.duree}}</td>
                                        <td>{{a.dateDebut|date('Y-m-d H:i:s')}}</td>
                                        <td style=\"border-left:none ;border-top:none;border-right:none\" class=\"row\">
                                            <div class=\"col-lg-6\"><a href=\"{{path('app_editabonnement',{'id':a.id})}}\">
                                                <i style=\"color:#103741; margin-left:10px\" class=\"bi fa-2x bi-pen\"></i></a>
                                            </div>
                                            <div class=\"col-lg-6\"><a href=\"{{path('app_deleteabonnement',{'id':a.id})}}\">
                                            <i style=\"color:#FE5D37;\" class=\"bi fa-2x bi-trash\"></i></a>
                                        </div>
                                        </td>
                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
{% endblock %}", "Admin/abonnement/showabonnement.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Admin\\abonnement\\showabonnement.html.twig");
    }
}
