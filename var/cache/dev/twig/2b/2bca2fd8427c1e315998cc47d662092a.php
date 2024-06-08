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

/* Admin/cours/_contentcour.html.twig */
class __TwigTemplate_62c5917e6ceeef305354670d15b077dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/cours/_contentcour.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/cours/_contentcour.html.twig"));

        // line 1
        yield "<div class=\"col-sm-12\">
    <table class=\"table table-bordered dataTable\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\" role=\"grid\"
        aria-describedby=\"dataTable_info\" style=\"width: 100%;\">
        <thead>
            <tr role=\"row\">
                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\"
                    aria-label=\"Office: activate to sort column ascending\" style=\"width:20%;\">
                    Title
                </th>
                <th class=\"sorting sorting_asc\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\"
                    aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width:16%;\">
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
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["co"]) {
            // line 34
            yield "            <tr class=\"odd\">
                <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["co"], "titre", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                <td class=\"sorting_1\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["co"], "nbChapitre", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["co"], "duree", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["co"], "categorie", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["co"], "status", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                <td style=\"border-left:none ;border-top:none;border-right:none\" class=\"row\">
                    <div class=\"col-lg-4\"><a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin.cours.valid", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["co"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\">
                            <i style=\"color:#FE5D37;\" class=\"fa-solid fa-check\"></i></a>
                    </div>
                    <div class=\"col-lg-4\">
                        <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin.cours.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["co"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\"><i style=\"color:#FE5D37;\" class=\"fa-solid fa-pen-to-square\"></i></a>
                    </div>
                    <div class=\"col-lg-4\">
                        <a href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin.cours.delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["co"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\"><i style=\"color:#FE5D37;\" class=\"fa-solid fa-trash\"></i></a>
                    </div>

                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['co'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "        </tbody>
    </table>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Admin/cours/_contentcour.html.twig";
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
        return array (  131 => 54,  119 => 48,  113 => 45,  106 => 41,  101 => 39,  97 => 38,  93 => 37,  89 => 36,  85 => 35,  82 => 34,  78 => 33,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-sm-12\">
    <table class=\"table table-bordered dataTable\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\" role=\"grid\"
        aria-describedby=\"dataTable_info\" style=\"width: 100%;\">
        <thead>
            <tr role=\"row\">
                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\"
                    aria-label=\"Office: activate to sort column ascending\" style=\"width:20%;\">
                    Title
                </th>
                <th class=\"sorting sorting_asc\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\" colspan=\"1\"
                    aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width:16%;\">
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
            {% for co in courses %}
            <tr class=\"odd\">
                <td>{{co.titre}}</td>
                <td class=\"sorting_1\">{{co.nbChapitre}}</td>
                <td>{{co.duree}}</td>
                <td>{{co.categorie}}</td>
                <td>{{co.status}}</td>
                <td style=\"border-left:none ;border-top:none;border-right:none\" class=\"row\">
                    <div class=\"col-lg-4\"><a href=\"{{path('app_admin.cours.valid',{'id':co.id})}}\">
                            <i style=\"color:#FE5D37;\" class=\"fa-solid fa-check\"></i></a>
                    </div>
                    <div class=\"col-lg-4\">
                        <a href=\"{{path('app_admin.cours.edit',{'id':co.id})}}\"><i style=\"color:#FE5D37;\" class=\"fa-solid fa-pen-to-square\"></i></a>
                    </div>
                    <div class=\"col-lg-4\">
                        <a href=\"{{path('app_admin.cours.delete',{'id':co.id})}}\"><i style=\"color:#FE5D37;\" class=\"fa-solid fa-trash\"></i></a>
                    </div>

                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>", "Admin/cours/_contentcour.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Admin\\cours\\_contentcour.html.twig");
    }
}
