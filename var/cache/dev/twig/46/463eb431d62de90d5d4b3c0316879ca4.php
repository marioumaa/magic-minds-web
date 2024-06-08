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

/* Professeur/showEvenement.html.twig */
class __TwigTemplate_08205e25fa39054994cfff23eb726de4 extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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

        return; yield '';
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
        yield "<style>
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addevenement");
        yield "\" class=\"btn-add-event\">Create a new event</a>
    </div>
";
        // line 106
        yield "
    <form action=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenementp");
        yield "\" method=\"get\">
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 132, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 133
            yield "        <div class=\"event-card\">
            <img src=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/th2.jpg"), "html", null, true);
            yield "\" alt=\"Image de l'événement\" class=\"event-image\">
            <div class=\"event-details\">
                <p><strong>Event Name:</strong>";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 136), "html", null, true);
            yield "</p>
                <p><strong>Description:</strong>";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "description", [], "any", false, false, false, 137), "html", null, true);
            yield "</p>
                <p><strong>Start Date:</strong> ";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dateDebut", [], "any", false, false, false, 138), "Y-m-d"), "html", null, true);
            yield "</p>
                <p><strong>End Date:</strong>";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dateFin", [], "any", false, false, false, 139), "Y-m-d"), "html", null, true);
            yield "</p>
                <p><strong>Location:</strong>";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 140), "html", null, true);
            yield "</p>
                <p><strong>Category:</strong>";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "categorie", [], "any", false, false, false, 141), "html", null, true);
            yield "</p>
                <p><strong>Number of Participants:</strong> ";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nbParticipant", [], "any", false, false, false, 142), "html", null, true);
            yield "</p>
            </div>
            <div class=\"event-actions\">
                <a href=\"";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editevenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 145)]), "html", null, true);
            yield "\" class=\"btn-edit\">Update</a>
                <a href=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteevenementp", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 146)]), "html", null, true);
            yield "\" class=\"btn-delete\">Delete</a>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        yield "        <div class=\"navigation\">
            <ul class=\"pagination\">
                <li class=\"page-item\">
                    ";
        // line 153
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 153, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 153) > 1)) {
            // line 154
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenementp", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 154, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 154) - 1)]), "html", null, true);
            yield "\" class=\"page-link pagination-button\">Previous</a>
                    ";
        } else {
            // line 156
            yield "                        <span class=\"page-link pagination-button disabled\">Previous</span>
                    ";
        }
        // line 158
        yield "                </li>
                <li class=\"page-item\">
                    ";
        // line 160
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 160, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 160) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 160, $this->source); })()), "pageCount", [], "any", false, false, false, 160))) {
            // line 161
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenementp", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 161, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 161) + 1)]), "html", null, true);
            yield "\" class=\"page-link pagination-button\">Next</a>
                    ";
        } else {
            // line 163
            yield "                        <span class=\"page-link pagination-button disabled\">Next</span>
                    ";
        }
        // line 165
        yield "                </li>
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
        return array (  306 => 165,  302 => 163,  296 => 161,  294 => 160,  290 => 158,  286 => 156,  280 => 154,  278 => 153,  273 => 150,  263 => 146,  259 => 145,  253 => 142,  249 => 141,  245 => 140,  241 => 139,  237 => 138,  233 => 137,  229 => 136,  224 => 134,  221 => 133,  217 => 132,  189 => 107,  186 => 106,  181 => 95,  89 => 5,  79 => 4,  60 => 2,  37 => 1,);
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
    
    
    ", "Professeur/showEvenement.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Professeur\\showEvenement.html.twig");
    }
}
