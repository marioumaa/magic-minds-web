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

/* Professeur/showEvenement.html.twig */
class __TwigTemplate_1b3ca390a3046ff2296ade1abe3cc767 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navimg' => [$this, 'block_navimg'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/showEvenement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/showEvenement.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "Professeur/showEvenement.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_navimg($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navimg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navimg"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<style>
.navigation {
    text-align: center;
}

.pagination {
    display: flex;
    justify-content: center; /* Centrer les éléments horizontalement */
}

.pagination-button {
    background-color: #dbdfe4;
    color: #fff;
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin: 0 5px; /* Ajoute une marge horizontale entre les boutons */
    width: 100px; /* Spécifie une largeur fixe pour tous les boutons */
}

.pagination-button.disabled {
    opacity: 0.5;
    cursor: not-allowed;
}


.event-card {
    background-color: rgba(255, 255, 255, 0.9); 
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
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

.btn-edit:hover, .btn-delete:hover, .btn-participer:hover {
    background-color:#FE5D37;
}
.event-image {
    width: 150px; 
    height: auto; 
    border-radius: 8px; 
    align-self: center; 
    margin-bottom: 10px;
}
</style>
<style>
  
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
    
  
    </style>
    
    <div style=\"text-align: center;\"> 
        <a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addevenement");
        echo "\" class=\"btn-add-event\">Create a new event</a>
    </div>
";
        // line 106
        echo "
    <form action=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenementp");
        echo "\" method=\"get\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"mb-3\">
                    <label for=\"categorie\" class=\"form-label\">Category:</label>

                    <input type=\"text\" id=\"categorie\" name=\"categorie\" class=\"form-control\">
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"mb-3\">
                    <label for=\"localisation\" class=\"form-label\">Location:</label>

                    <input type=\"text\" id=\"localisation\" class=\"form-control\" name=\"localisation\">
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"mb-3 d-grid\">
                    <label for=\"lou\" class=\"invisible\">Bouton</label>
                    <input type=\"submit\" class=\"btn btn-participer \" value=\"Filter\" name=\"lou\">
                </div>
            </div>
        </div>
    </form>
   
        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 132, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 133
            echo "        <div class=\"event-card\">
            <img src=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/th2.jpg"), "html", null, true);
            echo "\" alt=\"Image de l'événement\" class=\"event-image\">
            <div class=\"event-details\">
                <p><strong>Event Name:</strong>";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 136), "html", null, true);
            echo "</p>
                <p><strong>Description:</strong>";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "description", [], "any", false, false, false, 137), "html", null, true);
            echo "</p>
                <p><strong>Start Date:</strong> ";
            // line 138
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "dateDebut", [], "any", false, false, false, 138), "Y-m-d"), "html", null, true);
            echo "</p>
                <p><strong>End Date:</strong>";
            // line 139
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "dateFin", [], "any", false, false, false, 139), "Y-m-d"), "html", null, true);
            echo "</p>
                <p><strong>Location:</strong>";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 140), "html", null, true);
            echo "</p>
                <p><strong>Category:</strong>";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "categorie", [], "any", false, false, false, 141), "html", null, true);
            echo "</p>
                <p><strong>Number of Participants:</strong> ";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nbParticipant", [], "any", false, false, false, 142), "html", null, true);
            echo "</p>
            </div>
            <div class=\"event-actions\">
                <a href=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editevenement", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 145)]), "html", null, true);
            echo "\" class=\"btn-edit\">Update</a>
                <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteevenementp", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 146)]), "html", null, true);
            echo "\" class=\"btn-delete\">Delete</a>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "        <div class=\"navigation\">
            <ul class=\"pagination\">
                <li class=\"page-item\">
                    ";
        // line 153
        if ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 153, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 153) > 1)) {
            // line 154
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenementp", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 154, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 154) - 1)]), "html", null, true);
            echo "\" class=\"page-link pagination-button\">Previous</a>
                    ";
        } else {
            // line 156
            echo "                        <span class=\"page-link pagination-button disabled\">Previous</span>
                    ";
        }
        // line 158
        echo "                </li>
                <li class=\"page-item\">
                    ";
        // line 160
        if ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 160, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 160) < twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 160, $this->source); })()), "pageCount", [], "any", false, false, false, 160))) {
            // line 161
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenementp", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 161, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 161) + 1)]), "html", null, true);
            echo "\" class=\"page-link pagination-button\">Next</a>
                    ";
        } else {
            // line 163
            echo "                        <span class=\"page-link pagination-button disabled\">Next</span>
                    ";
        }
        // line 165
        echo "                </li>
            </ul>
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
        return "Professeur/showEvenement.html.twig";
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
        return array (  304 => 165,  300 => 163,  294 => 161,  292 => 160,  288 => 158,  284 => 156,  278 => 154,  276 => 153,  271 => 150,  261 => 146,  257 => 145,  251 => 142,  247 => 141,  243 => 140,  239 => 139,  235 => 138,  231 => 137,  227 => 136,  222 => 134,  219 => 133,  215 => 132,  187 => 107,  184 => 106,  179 => 95,  87 => 5,  77 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}
{% block navimg %}
{% endblock %}
{% block body %}
<style>
.navigation {
    text-align: center;
}

.pagination {
    display: flex;
    justify-content: center; /* Centrer les éléments horizontalement */
}

.pagination-button {
    background-color: #dbdfe4;
    color: #fff;
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin: 0 5px; /* Ajoute une marge horizontale entre les boutons */
    width: 100px; /* Spécifie une largeur fixe pour tous les boutons */
}

.pagination-button.disabled {
    opacity: 0.5;
    cursor: not-allowed;
}


.event-card {
    background-color: rgba(255, 255, 255, 0.9); 
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
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

.btn-edit:hover, .btn-delete:hover, .btn-participer:hover {
    background-color:#FE5D37;
}
.event-image {
    width: 150px; 
    height: auto; 
    border-radius: 8px; 
    align-self: center; 
    margin-bottom: 10px;
}
</style>
<style>
  
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
    
  
    </style>
    
    <div style=\"text-align: center;\"> 
        <a href=\"{{ path('addevenement')}}\" class=\"btn-add-event\">Create a new event</a>
    </div>
{#    #}
{#  <form action=\"{{ path('showevenementp') }}\" method=\"get\">#}
{#    <label for=\"categorie\">Category:</label>#}
{#    <input type=\"text\" id=\"categorie\" name=\"categorie\">#}
{#    #}
{#    <label for=\"localisation\">Location:</label>#}
{#    <input type=\"text\" id=\"localisation\" name=\"localisation\">#}
{#    <input type=\"submit\" value=\"Filter\">#}
{#</form>#}

    <form action=\"{{ path('showevenementp') }}\" method=\"get\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"mb-3\">
                    <label for=\"categorie\" class=\"form-label\">Category:</label>

                    <input type=\"text\" id=\"categorie\" name=\"categorie\" class=\"form-control\">
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"mb-3\">
                    <label for=\"localisation\" class=\"form-label\">Location:</label>

                    <input type=\"text\" id=\"localisation\" class=\"form-control\" name=\"localisation\">
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"mb-3 d-grid\">
                    <label for=\"lou\" class=\"invisible\">Bouton</label>
                    <input type=\"submit\" class=\"btn btn-participer \" value=\"Filter\" name=\"lou\">
                </div>
            </div>
        </div>
    </form>
   
        {% for a in evenement %}
        <div class=\"event-card\">
            <img src=\"{{ asset('asset/User/img/th2.jpg') }}\" alt=\"Image de l'événement\" class=\"event-image\">
            <div class=\"event-details\">
                <p><strong>Event Name:</strong>{{ a.nom }}</p>
                <p><strong>Description:</strong>{{ a.description }}</p>
                <p><strong>Start Date:</strong> {{ a.dateDebut|date('Y-m-d') }}</p>
                <p><strong>End Date:</strong>{{ a.dateFin|date('Y-m-d') }}</p>
                <p><strong>Location:</strong>{{ a.localisation }}</p>
                <p><strong>Category:</strong>{{ a.categorie }}</p>
                <p><strong>Number of Participants:</strong> {{ a.nbParticipant }}</p>
            </div>
            <div class=\"event-actions\">
                <a href=\"{{ path('editevenement', {'id': a.id}) }}\" class=\"btn-edit\">Update</a>
                <a href=\"{{ path('deleteevenementp', {'id': a.id}) }}\" class=\"btn-delete\">Delete</a>
            </div>
        </div>
        {% endfor %}
        <div class=\"navigation\">
            <ul class=\"pagination\">
                <li class=\"page-item\">
                    {% if evenement.currentPageNumber > 1 %}
                        <a href=\"{{ path('showevenementp', {'page': evenement.currentPageNumber - 1}) }}\" class=\"page-link pagination-button\">Previous</a>
                    {% else %}
                        <span class=\"page-link pagination-button disabled\">Previous</span>
                    {% endif %}
                </li>
                <li class=\"page-item\">
                    {% if evenement.currentPageNumber < evenement.pageCount %}
                        <a href=\"{{ path('showevenementp', {'page': evenement.currentPageNumber + 1}) }}\" class=\"page-link pagination-button\">Next</a>
                    {% else %}
                        <span class=\"page-link pagination-button disabled\">Next</span>
                    {% endif %}
                </li>
            </ul>
        </div>


    {% endblock %}
    
    
    ", "Professeur/showEvenement.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Professeur\\showEvenement.html.twig");
    }
}
