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

/* Admin/cours/showcat.html.twig */
class __TwigTemplate_d0a256c0a68c0650527383a3290af962 extends Template
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
            'categorie' => [$this, 'block_categorie'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/cours/showcat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/cours/showcat.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/cours/showcat.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        yield "Categories
";
        
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
        yield "<style>
    .content {
        display: none;
    }

    .contentd {
        display: none;
    }
</style>
<div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <div class=\"row\">
            <table>
                <tr>
                    <td><a href=\"#\" onclick=\"contentDisplay(1)\">
                            <h6 style=\"color:#103741 ;margin-right:10px\" class=\"font-weight-bold\">Categories</h6>
                        </a>
                    </td>
                    <td><a href=\"#\" onclick=\"contentDisplay(2)\">
                            <h6 style=\"color:#103741 ;margin-right:10px\" class=\"font-weight-bold\">Courses</h6>
                        </a>
                    </td>
                    <td><a href=\"#\" onclick=\"contentDisplay(3)\">
                            <h6 style=\"color:#103741 ;margin-right:10px\" class=\"font-weight-bold\">Chapters</h6>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div id=\"block1\" class=\"content\">
        <div class=\"card-body\">
            <div>
                <div id=\"dataTable_wrapper\" class=\"dataTables_wrapper dt-bootstrap4\">
                    <div class=\"d-flex flex-row-reverse\">
                        <div class=\"p-2\">
                            <a style=\"background-color:#103741;color:white\" href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.category.add");
        yield "\"
                                class=\"btn\">
                                <span class=\"text\">Add new category</span>
                            </a>
                        </div>
                        <div class=\"p-2\">
                            <a style=\"background-color:#369669;color:white\" href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_generatePDF");
        yield "\"
                                class=\"btn\">
                                <span class=\"text\">Download <i class=\"bi bi-filetype-pdf\"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <table class=\"table table-bordered dataTable\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\"
                                role=\"grid\" aria-describedby=\"dataTable_info\" style=\"width: 100%;\">
                                <thead>
                                    <tr role=\"row\">
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Office: activate to sort column ascending\"
                                            style=\"width:8%;\">
                                            Image</th>
                                        <th class=\"sorting sorting_asc\" tabindex=\"0\" aria-controls=\"dataTable\"
                                            rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\"
                                            aria-label=\"Name: activate to sort column descending\" style=\"width:25%;\">
                                            Title</th>
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Position: activate to sort column ascending\"
                                            style=\"width:25%;\">
                                            Number of courses</th>
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Position: activate to sort column ascending\"
                                            style=\"width:25%;\">
                                            Number of chapitre
                                        </th>
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Office: activate to sort column ascending\"
                                            style=\"width:17%;\">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 85
            yield "                                    <tr class=\"odd\">
                                        <td><img style=\"width: 50px;height: 50px;;\"
                                                src=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 87))), "html", null, true);
            yield "\" alt=\"\"></td>
                                        <td class=\"sorting_1\"><a href=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_showDetails", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "titre", [], "any", false, false, false, 88), "html", null, true);
            yield "</a></td>
                                        <td>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "nbrCours", [], "any", false, false, false, 89), "html", null, true);
            yield "</td>
                                        <td>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "nbrChapitre", [], "any", false, false, false, 90), "html", null, true);
            yield "</td>
                                        <td style=\"border-left:none ;border-top:none;border-right:none\" class=\"row\">
                                            <div class=\"col-lg-6\"><a href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admineditcategorie", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            yield "\">
                                                    <i style=\"color:#FE5D37;\" class=\"fa-solid fa-pen-to-square\"></i></a>
                                            </div>
                                            <div class=\"col-lg-6\"><a
                                                    href=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admindeletecategorie", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            yield "\">
                                                    <i style=\"color:#FE5D37;\" class=\"fa-solid fa-trash\"></i>
                                                    </a>
                                            </div>
                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"block2\" class=\"content\">
        <div class=\"card-body\">
            <div>
                <div id=\"dataTable_wrapper\" class=\"dataTables_wrapper dt-bootstrap4\">
                    <div class=\"row mb-2 \">
                        <div class=\"col-lg-10\">
                            <form id=\"filtercat\">
                                <table class=\"m-2 \">
                                    <tr class=\"justify-content-end\">

                                        ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "getcategories", [], "any", false, false, false, 121));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 122
            yield "                                        <td>
                                            <p><input type=\"checkbox\" name=\"categories[]\" id=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 123), "html", null, true);
            yield "\"
                                                    value=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 124), "html", null, true);
            yield "\">
                                                <label for=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 125), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "titre", [], "any", false, false, false, 125), "html", null, true);
            yield "</label>
                                            </p>
                                        </td>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        yield "                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class=\"col-lg-2\">
                            <a style=\"background-color:#103741;color:white\" href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.cours.add");
        yield "\"
                                class=\"btn\">
                                <span class=\"text\">Add new course</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"row\" id=\"filtercontent\">
                        ";
        // line 141
        yield from         $this->loadTemplate("Admin/cours/_contentcour.html.twig", "Admin/cours/showcat.html.twig", 141)->unwrap()->yield($context);
        // line 142
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"block3\" class=\"content\">
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
                                            Title</th>
                                        <th class=\"sorting sorting_asc\" tabindex=\"0\" aria-controls=\"dataTable\"
                                            rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\"
                                            aria-label=\"Name: activate to sort column descending\" style=\"width:42%;\">
                                            Type</th>
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Position: activate to sort column ascending\"
                                            style=\"width:20%;\">
                                            Course</th>
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Office: activate to sort column ascending\"
                                            style=\"width:30%;\">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chapters"]) || array_key_exists("chapters", $context) ? $context["chapters"] : (function () { throw new RuntimeError('Variable "chapters" does not exist.', 176, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
            // line 177
            yield "                                    <tr class=\"odd\">
                                        <td>";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ch"], "titre", [], "any", false, false, false, 178), "html", null, true);
            yield "</td>
                                        <td class=\"sorting_1\">";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ch"], "type", [], "any", false, false, false, 179), "html", null, true);
            yield "</td>
                                        <td>";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ch"], "idCours", [], "any", false, false, false, 180), "html", null, true);
            yield "</td>
                                        <td style=\"border-left:none ;border-top:none;border-right:none\" class=\"row\">
                                            <div class=\"col-lg-6\"><a href=\"#\">
                                                    <i style=\"color:#FE5D37;\" class=\"fa-solid fa-pen-to-square\"></i></a>
                                            </div>
                                            <div class=\"col-lg-6\"><a
                                                    href=\"";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admindeleteressource", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ch"], "id", [], "any", false, false, false, 186)]), "html", null, true);
            yield "\">
                                                    <i style=\"color:#FE5D37;\" class=\"fa-solid fa-trash\"></i>
                                                    </a>
                                            </div>
                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 201
        yield from $this->unwrap()->yieldBlock('categorie', $context, $blocks);
        // line 203
        yield "
</div>
<script src=\"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./asset/Admin/js/filter.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./asset/Admin/js/content.js"), "html", null, true);
        yield "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 201
    public function block_categorie($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categorie"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categorie"));

        // line 202
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Admin/cours/showcat.html.twig";
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
        return array (  409 => 202,  399 => 201,  385 => 206,  381 => 205,  377 => 203,  375 => 201,  365 => 193,  352 => 186,  343 => 180,  339 => 179,  335 => 178,  332 => 177,  328 => 176,  292 => 142,  290 => 141,  280 => 134,  273 => 129,  261 => 125,  257 => 124,  253 => 123,  250 => 122,  246 => 121,  226 => 103,  213 => 96,  206 => 92,  201 => 90,  197 => 89,  191 => 88,  187 => 87,  183 => 85,  179 => 84,  140 => 48,  131 => 42,  93 => 6,  83 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Admin/base.html.twig\" %}
{% block title %}
Categories
{% endblock %}
{% block content %}
<style>
    .content {
        display: none;
    }

    .contentd {
        display: none;
    }
</style>
<div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <div class=\"row\">
            <table>
                <tr>
                    <td><a href=\"#\" onclick=\"contentDisplay(1)\">
                            <h6 style=\"color:#103741 ;margin-right:10px\" class=\"font-weight-bold\">Categories</h6>
                        </a>
                    </td>
                    <td><a href=\"#\" onclick=\"contentDisplay(2)\">
                            <h6 style=\"color:#103741 ;margin-right:10px\" class=\"font-weight-bold\">Courses</h6>
                        </a>
                    </td>
                    <td><a href=\"#\" onclick=\"contentDisplay(3)\">
                            <h6 style=\"color:#103741 ;margin-right:10px\" class=\"font-weight-bold\">Chapters</h6>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div id=\"block1\" class=\"content\">
        <div class=\"card-body\">
            <div>
                <div id=\"dataTable_wrapper\" class=\"dataTables_wrapper dt-bootstrap4\">
                    <div class=\"d-flex flex-row-reverse\">
                        <div class=\"p-2\">
                            <a style=\"background-color:#103741;color:white\" href=\"{{path('admin.category.add')}}\"
                                class=\"btn\">
                                <span class=\"text\">Add new category</span>
                            </a>
                        </div>
                        <div class=\"p-2\">
                            <a style=\"background-color:#369669;color:white\" href=\"{{path('app_generatePDF')}}\"
                                class=\"btn\">
                                <span class=\"text\">Download <i class=\"bi bi-filetype-pdf\"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <table class=\"table table-bordered dataTable\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\"
                                role=\"grid\" aria-describedby=\"dataTable_info\" style=\"width: 100%;\">
                                <thead>
                                    <tr role=\"row\">
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Office: activate to sort column ascending\"
                                            style=\"width:8%;\">
                                            Image</th>
                                        <th class=\"sorting sorting_asc\" tabindex=\"0\" aria-controls=\"dataTable\"
                                            rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\"
                                            aria-label=\"Name: activate to sort column descending\" style=\"width:25%;\">
                                            Title</th>
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Position: activate to sort column ascending\"
                                            style=\"width:25%;\">
                                            Number of courses</th>
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Position: activate to sort column ascending\"
                                            style=\"width:25%;\">
                                            Number of chapitre
                                        </th>
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Office: activate to sort column ascending\"
                                            style=\"width:17%;\">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for c in categorie %}
                                    <tr class=\"odd\">
                                        <td><img style=\"width: 50px;height: 50px;;\"
                                                src=\"{{asset('uploads/images/' ~ c.image)}}\" alt=\"\"></td>
                                        <td class=\"sorting_1\"><a href=\"{{path('app_showDetails',{'id':c.id})}}\">{{c.titre}}</a></td>
                                        <td>{{c.nbrCours}}</td>
                                        <td>{{c.nbrChapitre}}</td>
                                        <td style=\"border-left:none ;border-top:none;border-right:none\" class=\"row\">
                                            <div class=\"col-lg-6\"><a href=\"{{path('admineditcategorie',{'id':c.id})}}\">
                                                    <i style=\"color:#FE5D37;\" class=\"fa-solid fa-pen-to-square\"></i></a>
                                            </div>
                                            <div class=\"col-lg-6\"><a
                                                    href=\"{{path('admindeletecategorie',{'id':c.id})}}\">
                                                    <i style=\"color:#FE5D37;\" class=\"fa-solid fa-trash\"></i>
                                                    </a>
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
    <div id=\"block2\" class=\"content\">
        <div class=\"card-body\">
            <div>
                <div id=\"dataTable_wrapper\" class=\"dataTables_wrapper dt-bootstrap4\">
                    <div class=\"row mb-2 \">
                        <div class=\"col-lg-10\">
                            <form id=\"filtercat\">
                                <table class=\"m-2 \">
                                    <tr class=\"justify-content-end\">

                                        {% for cat in cat.getcategories %}
                                        <td>
                                            <p><input type=\"checkbox\" name=\"categories[]\" id=\"{{cat.id}}\"
                                                    value=\"{{cat.id}}\">
                                                <label for=\"{{cat.id}}\">{{cat.titre}}</label>
                                            </p>
                                        </td>
                                        {% endfor %}
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class=\"col-lg-2\">
                            <a style=\"background-color:#103741;color:white\" href=\"{{path('admin.cours.add')}}\"
                                class=\"btn\">
                                <span class=\"text\">Add new course</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"row\" id=\"filtercontent\">
                        {% include \"Admin/cours/_contentcour.html.twig\" %}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"block3\" class=\"content\">
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
                                            Title</th>
                                        <th class=\"sorting sorting_asc\" tabindex=\"0\" aria-controls=\"dataTable\"
                                            rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\"
                                            aria-label=\"Name: activate to sort column descending\" style=\"width:42%;\">
                                            Type</th>
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Position: activate to sort column ascending\"
                                            style=\"width:20%;\">
                                            Course</th>
                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"dataTable\" rowspan=\"1\"
                                            colspan=\"1\" aria-label=\"Office: activate to sort column ascending\"
                                            style=\"width:30%;\">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for ch in chapters %}
                                    <tr class=\"odd\">
                                        <td>{{ch.titre}}</td>
                                        <td class=\"sorting_1\">{{ch.type}}</td>
                                        <td>{{ch.idCours}}</td>
                                        <td style=\"border-left:none ;border-top:none;border-right:none\" class=\"row\">
                                            <div class=\"col-lg-6\"><a href=\"#\">
                                                    <i style=\"color:#FE5D37;\" class=\"fa-solid fa-pen-to-square\"></i></a>
                                            </div>
                                            <div class=\"col-lg-6\"><a
                                                    href=\"{{path('admindeleteressource',{'id':ch.id})}}\">
                                                    <i style=\"color:#FE5D37;\" class=\"fa-solid fa-trash\"></i>
                                                    </a>
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
    {% block categorie %}
    {%endblock %}

</div>
<script src=\"{{ asset('./asset/Admin/js/filter.js')}}\"></script>
<script src=\"{{ asset('./asset/Admin/js/content.js')}}\"></script>

{% endblock %}", "Admin/cours/showcat.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Admin\\cours\\showcat.html.twig");
    }
}
