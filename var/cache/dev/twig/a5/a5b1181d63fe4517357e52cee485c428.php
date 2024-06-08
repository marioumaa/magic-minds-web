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

/* Admin/cours/showDetail.html.twig */
class __TwigTemplate_004e9286212f9eaf431fa0ae61239eb8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'categorie' => [$this, 'block_categorie'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Admin/cours/showDetail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/cours/showDetail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/cours/showDetail.html.twig"));

        $this->parent = $this->loadTemplate("Admin/cours/showDetail.html.twig", "Admin/cours/showDetail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_categorie($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categorie"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categorie"));

        // line 3
        echo "
<div id=\"cat\" class=\"content\">
    <div class=\"card-body\">
        <div>
            <div id=\"dataTable_wrapper\" class=\"dataTables_wrapper dt-bootstrap4\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <table class=\"table table-bordered dataTable\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\"
                            role=\"grid\" aria-describedby=\"dataTable_info\" style=\"width: 100%;\">
                            <thead>
                                <tr role=\"row\">
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\"
                                        aria-label=\"Office: activate to sort column ascending\" style=\"width:20%;\">
                                        Title
                                    </th>
                                    <th class=\"sorting sorting_asc\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                        colspan=\"1\" aria-sort=\"ascending\"
                                        aria-label=\"Name: activate to sort column descending\" style=\"width:16%;\">
                                        Number of chapters
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\"
                                        aria-label=\"Position: activate to sort column ascending\" style=\"width:16%;\">
                                        Esteamed periode
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\"
                                        aria-label=\"Position: activate to sort column ascending\" style=\"width:16%;\">
                                        Category
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\"
                                        aria-label=\"Position: activate to sort column ascending\" style=\"width:16%;\">
                                        Status
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\"
                                        aria-label=\"Office: activate to sort column ascending\" style=\"width:16%;;\">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courslist"]) || array_key_exists("courslist", $context) ? $context["courslist"] : (function () { throw new RuntimeError('Variable "courslist" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 43
            echo "                                <tr class=\"odd\">
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "titre", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                                    <td class=\"sorting_1\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "nbChapitre", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "duree", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "categorie", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "status", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                    <td style=\"border-left:none ;border-top:none;border-right:none\" class=\"row\">
                                        <div class=\"col-lg-4\"><a
                                                href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin.cours.valid", ["id" => twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">
                                                <i style=\"color:#FE5D37;\" class=\"fa-solid fa-check\"></i></a>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin.cours.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">update</a>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin.cours.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">delete</a>
                                        </div>

                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                            </tbody>
                        </table>
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
        return "Admin/cours/showDetail.html.twig";
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
        return array (  163 => 64,  151 => 58,  145 => 55,  138 => 51,  132 => 48,  128 => 47,  124 => 46,  120 => 45,  116 => 44,  113 => 43,  109 => 42,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/cours/showDetail.html.twig' %}
{% block categorie %}

<div id=\"cat\" class=\"content\">
    <div class=\"card-body\">
        <div>
            <div id=\"dataTable_wrapper\" class=\"dataTables_wrapper dt-bootstrap4\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <table class=\"table table-bordered dataTable\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\"
                            role=\"grid\" aria-describedby=\"dataTable_info\" style=\"width: 100%;\">
                            <thead>
                                <tr role=\"row\">
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\"
                                        aria-label=\"Office: activate to sort column ascending\" style=\"width:20%;\">
                                        Title
                                    </th>
                                    <th class=\"sorting sorting_asc\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                        colspan=\"1\" aria-sort=\"ascending\"
                                        aria-label=\"Name: activate to sort column descending\" style=\"width:16%;\">
                                        Number of chapters
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\"
                                        aria-label=\"Position: activate to sort column ascending\" style=\"width:16%;\">
                                        Esteamed periode
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\"
                                        aria-label=\"Position: activate to sort column ascending\" style=\"width:16%;\">
                                        Category
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\"
                                        aria-label=\"Position: activate to sort column ascending\" style=\"width:16%;\">
                                        Status
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\"
                                        aria-label=\"Office: activate to sort column ascending\" style=\"width:16%;;\">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for course in courslist %}
                                <tr class=\"odd\">
                                    <td>{{course.titre}}</td>
                                    <td class=\"sorting_1\">{{course.nbChapitre}}</td>
                                    <td>{{course.duree}}</td>
                                    <td>{{course.categorie}}</td>
                                    <td>{{course.status}}</td>
                                    <td style=\"border-left:none ;border-top:none;border-right:none\" class=\"row\">
                                        <div class=\"col-lg-4\"><a
                                                href=\"{{path('app_admin.cours.valid',{'id':course.id})}}\">
                                                <i style=\"color:#FE5D37;\" class=\"fa-solid fa-check\"></i></a>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <a href=\"{{path('app_admin.cours.edit',{'id':course.id})}}\">update</a>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <a href=\"{{path('app_admin.cours.delete',{'id':course.id})}}\">delete</a>
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
{% endblock %}", "Admin/cours/showDetail.html.twig", "C:\\Users\\HBY\\Desktop\\Final\\MagicMinds\\templates\\Admin\\cours\\showDetail.html.twig");
    }
}
