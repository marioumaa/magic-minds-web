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

/* Admin\cours\showcat.html.twig */
class __TwigTemplate_dab6acbf4e6583a83ae05c106ea6c2cb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin\\cours\\showcat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin\\cours\\showcat.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin\\cours\\showcat.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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
        echo "Categories
";
        
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
        echo "<style>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.category.add");
        echo "\"
                                class=\"btn\">
                                <span class=\"text\">Add new category</span>
                            </a>
                        </div>
                        <div class=\"p-2\">
                            <a style=\"background-color:#369669;color:white\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_generatePDF");
        echo "\"
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
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 85
            echo "                                    <tr class=\"odd\">
                                        <td><img style=\"width: 50px;height: 50px;;\"
                                                src=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 87))), "html", null, true);
            echo "\" alt=\"\"></td>
                                        <td class=\"sorting_1\"><a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_showDetails", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "titre", [], "any", false, false, false, 88), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nbrCours", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                                        <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nbrChapitre", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                                        <td style=\"border-left:none ;border-top:none;border-right:none\" class=\"row\">
                                            <div class=\"col-lg-6\"><a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admineditcategorie", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\">
                                                    <i style=\"color:#FE5D37;\" class=\"fa-solid fa-pen-to-square\"></i></a>
                                            </div>
                                            <div class=\"col-lg-6\"><a
                                                    href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admindeletecategorie", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            echo "\">
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
        echo "                                </tbody>
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cat"], "getcategories", [], "any", false, false, false, 121));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 122
            echo "                                        <td>
                                            <p><input type=\"checkbox\" name=\"categories[]\" id=\"";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 123), "html", null, true);
            echo "\"
                                                    value=\"";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 124), "html", null, true);
            echo "\">
                                                <label for=\"";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 125), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "titre", [], "any", false, false, false, 125), "html", null, true);
            echo "</label>
                                            </p>
                                        </td>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class=\"col-lg-2\">
                            <a style=\"background-color:#103741;color:white\" href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.cours.add");
        echo "\"
                                class=\"btn\">
                                <span class=\"text\">Add new course</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"row\" id=\"filtercontent\">
                        ";
        // line 141
        $this->loadTemplate("Admin/cours/_contentcour.html.twig", "Admin\\cours\\showcat.html.twig", 141)->display($context);
        // line 142
        echo "                    </div>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["chapters"]) || array_key_exists("chapters", $context) ? $context["chapters"] : (function () { throw new RuntimeError('Variable "chapters" does not exist.', 176, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
            // line 177
            echo "                                    <tr class=\"odd\">
                                        <td>";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ch"], "titre", [], "any", false, false, false, 178), "html", null, true);
            echo "</td>
                                        <td class=\"sorting_1\">";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ch"], "type", [], "any", false, false, false, 179), "html", null, true);
            echo "</td>
                                        <td>";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ch"], "idCours", [], "any", false, false, false, 180), "html", null, true);
            echo "</td>
                                        <td style=\"border-left:none ;border-top:none;border-right:none\" class=\"row\">
                                            <div class=\"col-lg-6\"><a href=\"#\">
                                                    <i style=\"color:#FE5D37;\" class=\"fa-solid fa-pen-to-square\"></i></a>
                                            </div>
                                            <div class=\"col-lg-6\"><a
                                                    href=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admindeleteressource", ["id" => twig_get_attribute($this->env, $this->source, $context["ch"], "id", [], "any", false, false, false, 186)]), "html", null, true);
            echo "\">
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
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 201
        $this->displayBlock('categorie', $context, $blocks);
        // line 203
        echo "
</div>
<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./asset/Admin/js/filter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./asset/Admin/js/content.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Admin\\cours\\showcat.html.twig";
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
        return array (  406 => 202,  396 => 201,  383 => 206,  379 => 205,  375 => 203,  373 => 201,  363 => 193,  350 => 186,  341 => 180,  337 => 179,  333 => 178,  330 => 177,  326 => 176,  290 => 142,  288 => 141,  278 => 134,  271 => 129,  259 => 125,  255 => 124,  251 => 123,  248 => 122,  244 => 121,  224 => 103,  211 => 96,  204 => 92,  199 => 90,  195 => 89,  189 => 88,  185 => 87,  181 => 85,  177 => 84,  138 => 48,  129 => 42,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
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

{% endblock %}", "Admin\\cours\\showcat.html.twig", "C:\\Users\\HBY\\Desktop\\Final\\MagicMinds\\templates\\Admin\\cours\\showcat.html.twig");
    }
}
