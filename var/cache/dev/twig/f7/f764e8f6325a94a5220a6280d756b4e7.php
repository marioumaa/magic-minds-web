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

/* Admin/showEvenement.html.twig */
class __TwigTemplate_20b4f9408c77be1d9a4cbdf30bef2500 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/showEvenement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/showEvenement.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/showEvenement.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        yield "
<style>
    /* Style pour le tableau */
    table {
        width: 100%;
        border-spacing: 0;
        margin-bottom: 20px;
        border: 1px solid #ddd; /* Ajout d'une bordure autour du tableau */
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
        color: #333; /* Couleur du texte pour les en-têtes de colonne */
        font-weight: bold; /* Mise en gras du texte pour les en-têtes de colonne */
    }

    td {
        background-color: #fff; /* Couleur de fond pour les cellules */
        color: #666; /* Couleur du texte pour les cellules */
    }

    /* Style pour les lignes impaires */
    tr:nth-child(odd) {
        background-color: #f9f9f9; /* Couleur de fond pour les lignes impaires */
    }
    /* Style pour la pagination */
    .navigation {
        text-align: center;
        margin-top: 20px;
    }

    .pagination {
        display: flex;
        justify-content: center;
    }

    .pagination-button {
        background-color: #dbdfe4;
        color: #fff;
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin: 0 5px;
        width: 100px;
    }

    .pagination-button.disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    .pagination-button:hover {
        color: orange;
    }
    .event-details {
        margin-bottom: 10px;
    }
    
    
    .event-actions {
        display: flex;
        justify-content: flex-end;
    }
    
    .btn-edit, .btn-delete, .btn-participer {
        background-color: #FE5D37;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 8px 12px;
        text-decoration: none;
        transition: background-color 0.3s ease;
        margin-left: 10px;
    }
    
 
    .event-image {
        width: 150px; 
        height: auto; 
        border-radius: 8px; 
        align-self: center; 
        margin-bottom: 10px;
    }
    .btn-add-event {
            background-color: #FE5D37;
            color: #fff;
            border: none;
            border-radius: 8px; 
            padding: 15px 30px; 
            text-decoration: none;
            transition: background-color 0.3s ease;
            display: inline-block; 
            text-align: center;
            font-size: 18px; 
            margin: 20px auto; 
        }
        .btn-edit:hover, .btn-delete:hover, .btn-participer:hover {
            color: orange;
    }
        .btn-add-event:hover {
            color: orange;
        }
    </style>
</style>
        
        <div style=\"text-align: center;\"> 
        <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addevenemente");
        yield "\" class=\"btn-add-event\">Create a new event</a>
    </div>

  
  <form action=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenements");
        yield "\" method=\"get\">
    <label for=\"categorie\">Category:</label>
    <input type=\"text\" id=\"categorie\" name=\"categorie\">
    
    <label for=\"localisation\">Location:</label>
    <input type=\"text\" id=\"localisation\" name=\"localisation\">
    <input type=\"submit\" value=\"Filter\">
</form>
       
    <table>
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Location</th>
                <th>Category</th>
                <th>Number of Participants</th>
                <th>Actions</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 144, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 145
            yield "                <tr>
                    <td>";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 146), "html", null, true);
            yield "</td>
                    <td>";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "description", [], "any", false, false, false, 147), "html", null, true);
            yield "</td>
                    <td>";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dateDebut", [], "any", false, false, false, 148), "Y-m-d"), "html", null, true);
            yield "</td>
                    <td>";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dateFin", [], "any", false, false, false, 149), "Y-m-d"), "html", null, true);
            yield "</td>
                    <td>";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 150), "html", null, true);
            yield "</td>
                    <td>";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "categorie", [], "any", false, false, false, 151), "html", null, true);
            yield "</td>
                    <td>";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nbParticipant", [], "any", false, false, false, 152), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editevenemente", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 154)]), "html", null, true);
            yield "\" class=\"btn-edit\">Update</a>
                    </td>
                    <td>
                        <a href=\"";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteevenementadmin", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 157)]), "html", null, true);
            yield "\" class=\"btn-delete\">Delete</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        yield "        </tbody>
    </table>

    <div class=\"navigation\">
        <ul class=\"pagination\">
            <li class=\"page-item\">
                ";
        // line 167
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 167, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 167) > 1)) {
            // line 168
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenements", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 168, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 168) - 1)]), "html", null, true);
            yield "\" class=\"page-link pagination-button\">Previous</a>
                ";
        } else {
            // line 170
            yield "                    <span class=\"page-link pagination-button disabled\">Previous</span>
                ";
        }
        // line 172
        yield "            </li>
            <li class=\"page-item\">
                ";
        // line 174
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 174, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 174) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 174, $this->source); })()), "pageCount", [], "any", false, false, false, 174))) {
            // line 175
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenements", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 175, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 175) + 1)]), "html", null, true);
            yield "\" class=\"page-link pagination-button\">Next</a>
                ";
        } else {
            // line 177
            yield "                    <span class=\"page-link pagination-button disabled\">Next</span>
                ";
        }
        // line 179
        yield "            </li>
        </ul>
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
        return "Admin/showEvenement.html.twig";
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
        return array (  306 => 179,  302 => 177,  296 => 175,  294 => 174,  290 => 172,  286 => 170,  280 => 168,  278 => 167,  270 => 161,  260 => 157,  254 => 154,  249 => 152,  245 => 151,  241 => 150,  237 => 149,  233 => 148,  229 => 147,  225 => 146,  222 => 145,  218 => 144,  191 => 120,  184 => 116,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/base.html.twig' %}
{% block content %}

<style>
    /* Style pour le tableau */
    table {
        width: 100%;
        border-spacing: 0;
        margin-bottom: 20px;
        border: 1px solid #ddd; /* Ajout d'une bordure autour du tableau */
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
        color: #333; /* Couleur du texte pour les en-têtes de colonne */
        font-weight: bold; /* Mise en gras du texte pour les en-têtes de colonne */
    }

    td {
        background-color: #fff; /* Couleur de fond pour les cellules */
        color: #666; /* Couleur du texte pour les cellules */
    }

    /* Style pour les lignes impaires */
    tr:nth-child(odd) {
        background-color: #f9f9f9; /* Couleur de fond pour les lignes impaires */
    }
    /* Style pour la pagination */
    .navigation {
        text-align: center;
        margin-top: 20px;
    }

    .pagination {
        display: flex;
        justify-content: center;
    }

    .pagination-button {
        background-color: #dbdfe4;
        color: #fff;
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin: 0 5px;
        width: 100px;
    }

    .pagination-button.disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    .pagination-button:hover {
        color: orange;
    }
    .event-details {
        margin-bottom: 10px;
    }
    
    
    .event-actions {
        display: flex;
        justify-content: flex-end;
    }
    
    .btn-edit, .btn-delete, .btn-participer {
        background-color: #FE5D37;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 8px 12px;
        text-decoration: none;
        transition: background-color 0.3s ease;
        margin-left: 10px;
    }
    
 
    .event-image {
        width: 150px; 
        height: auto; 
        border-radius: 8px; 
        align-self: center; 
        margin-bottom: 10px;
    }
    .btn-add-event {
            background-color: #FE5D37;
            color: #fff;
            border: none;
            border-radius: 8px; 
            padding: 15px 30px; 
            text-decoration: none;
            transition: background-color 0.3s ease;
            display: inline-block; 
            text-align: center;
            font-size: 18px; 
            margin: 20px auto; 
        }
        .btn-edit:hover, .btn-delete:hover, .btn-participer:hover {
            color: orange;
    }
        .btn-add-event:hover {
            color: orange;
        }
    </style>
</style>
        
        <div style=\"text-align: center;\"> 
        <a href=\"{{ path('addevenemente')}}\" class=\"btn-add-event\">Create a new event</a>
    </div>

  
  <form action=\"{{ path('showevenements') }}\" method=\"get\">
    <label for=\"categorie\">Category:</label>
    <input type=\"text\" id=\"categorie\" name=\"categorie\">
    
    <label for=\"localisation\">Location:</label>
    <input type=\"text\" id=\"localisation\" name=\"localisation\">
    <input type=\"submit\" value=\"Filter\">
</form>
       
    <table>
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Location</th>
                <th>Category</th>
                <th>Number of Participants</th>
                <th>Actions</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for a in evenement %}
                <tr>
                    <td>{{ a.nom }}</td>
                    <td>{{ a.description }}</td>
                    <td>{{ a.dateDebut|date('Y-m-d') }}</td>
                    <td>{{ a.dateFin|date('Y-m-d') }}</td>
                    <td>{{ a.localisation }}</td>
                    <td>{{ a.categorie }}</td>
                    <td>{{ a.nbParticipant }}</td>
                    <td>
                        <a href=\"{{ path('editevenemente', {'id': a.id}) }}\" class=\"btn-edit\">Update</a>
                    </td>
                    <td>
                        <a href=\"{{ path('deleteevenementadmin', {'id': a.id}) }}\" class=\"btn-delete\">Delete</a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"navigation\">
        <ul class=\"pagination\">
            <li class=\"page-item\">
                {% if evenement.currentPageNumber > 1 %}
                    <a href=\"{{ path('showevenements', {'page': evenement.currentPageNumber - 1}) }}\" class=\"page-link pagination-button\">Previous</a>
                {% else %}
                    <span class=\"page-link pagination-button disabled\">Previous</span>
                {% endif %}
            </li>
            <li class=\"page-item\">
                {% if evenement.currentPageNumber < evenement.pageCount %}
                    <a href=\"{{ path('showevenements', {'page': evenement.currentPageNumber + 1}) }}\" class=\"page-link pagination-button\">Next</a>
                {% else %}
                    <span class=\"page-link pagination-button disabled\">Next</span>
                {% endif %}
            </li>
        </ul>
    </div>
{% endblock %}
", "Admin/showEvenement.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Admin\\showEvenement.html.twig");
    }
}
