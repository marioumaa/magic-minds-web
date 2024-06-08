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

/* Parent/showEvenement.html.twig */
class __TwigTemplate_4a0dee4fb7a729b8e06f547d02eedc84 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Parent/showEvenement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Parent/showEvenement.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "Parent/showEvenement.html.twig", 1);
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
        yield "
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
        color: orange;
    }
    .event-image {
        width: 150px; 
        height: auto; 
        border-radius: 8px; 
        align-self: center; 
        margin-bottom: 10px;
    }
    </style>
   
       
          
";
        // line 85
        yield "    <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenementpa");
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
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 111
            yield "<div class=\"event-card\">
    <img src=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/th1.jpg"), "html", null, true);
            yield "\" alt=\"Image de l'événement\" class=\"event-image\">
    <div class=\"event-details\">
        <p><strong>Event Name:</strong>";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 114), "html", null, true);
            yield "</p>
        <p><strong>Description:</strong>";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "description", [], "any", false, false, false, 115), "html", null, true);
            yield "</p>
        <p><strong>Start Date:</strong> ";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dateDebut", [], "any", false, false, false, 116), "Y-m-d"), "html", null, true);
            yield "</p>
        <p><strong>End Date:</strong>";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dateFin", [], "any", false, false, false, 117), "Y-m-d"), "html", null, true);
            yield "</p>
        <p><strong>Location:</strong>";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 118), "html", null, true);
            yield "</p>
        <p><strong>Category:</strong>";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "categorie", [], "any", false, false, false, 119), "html", null, true);
            yield "</p>
        <p><strong>Number of Participants:</strong> ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nbParticipant", [], "any", false, false, false, 120), "html", null, true);
            yield "</p>
        
       

  
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "<div id=\"map\" style=\"height: 400px;\"></div> <!-- Élément div pour afficher la carte -->

 <div id=\"map\"></div>
  
<script>
    function initMap() {
        // Création de la carte avec une position par défaut
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: { lat: 0, lng: 0 } // Position par défaut (à remplacer par le centre souhaité)
        });


    }
</script>
<section id=\"google-map\">
   <!-- How to change your own map point
          1. Go to Google Maps
          2. Click on your location point
          3. Click \"Share\" and choose \"Embed map\" tab
          4. Copy only URL and paste it within the src=\"\" field below
  -->
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945\" width=\"100%\" height=\"350\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
   </section>     
   
<script>
     // Ajoutez le code JavaScript ici pour gérer la recherche de centres de collecte et la mise à jour du menu déroulant
     // Utilisez AJAX pour envoyer une requête au serveur Symfony pour récupérer les centres de collecte en fonction du code postal
 
     document.getElementById('zipCode').addEventListener('change', function () {
         var zipCode = this.value;
 
         // Utilisez AJAX pour envoyer la requête au serveur Symfony
         // Assurez-vous d'adapter le chemin de l'URL à votre configuration Symfony
         fetch(/path/to/your/search/action?zipCode=\${zipCode})
             .then(response => response.json())
             .then(data => {
                 // Mettez à jour le menu déroulant avec les centres de collecte récupérés
                 var centreDropdown = document.querySelector('select[name=\"centredecollecte\"]');
                 centreDropdown.innerHTML = '';
 
                 data.centres.forEach(centre => {
                     var option = document.createElement('option');
                     option.value = centre.id;
                     option.textContent = centre.name;
                     centreDropdown.appendChild(option);
                 });
             })
             .catch(error => console.error('Erreur lors de la recherche :', error));
     });
     </script>

 <br>
<div class=\"navigation\">
    <ul class=\"pagination\">
        <li class=\"page-item\">
            ";
        // line 183
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 183, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 183) > 1)) {
            // line 184
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenementpa", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 184, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 184) - 1)]), "html", null, true);
            yield "\" class=\"page-link pagination-button\">Previous</a>
            ";
        } else {
            // line 186
            yield "                <span class=\"page-link pagination-button disabled\">Previous</span>
            ";
        }
        // line 188
        yield "        </li>
        <li class=\"page-item\">
            ";
        // line 190
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 190, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 190) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 190, $this->source); })()), "pageCount", [], "any", false, false, false, 190))) {
            // line 191
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenementpa", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 191, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 191) + 1)]), "html", null, true);
            yield "\" class=\"page-link pagination-button\">Next</a>
            ";
        } else {
            // line 193
            yield "                <span class=\"page-link pagination-button disabled\">Next</span>
            ";
        }
        // line 195
        yield "        </li>
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
        return "Parent/showEvenement.html.twig";
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
        return array (  327 => 195,  323 => 193,  317 => 191,  315 => 190,  311 => 188,  307 => 186,  301 => 184,  299 => 183,  241 => 127,  228 => 120,  224 => 119,  220 => 118,  216 => 117,  212 => 116,  208 => 115,  204 => 114,  199 => 112,  196 => 111,  192 => 110,  163 => 85,  89 => 5,  79 => 4,  60 => 2,  37 => 1,);
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
        color: orange;
    }
    .event-image {
        width: 150px; 
        height: auto; 
        border-radius: 8px; 
        align-self: center; 
        margin-bottom: 10px;
    }
    </style>
   
       
          
{#  <form action=\"{{ path('showevenementpa') }}\" method=\"get\">#}
{#    <label for=\"categorie\">Category:</label>#}
{#    <input type=\"text\" id=\"categorie\" name=\"categorie\">#}
{#    #}
{#    <label for=\"localisation\">Location:</label>#}
{#    <input type=\"text\" id=\"localisation\" name=\"localisation\">#}
{#    <input type=\"submit\" value=\"Filter\">#}
{#</form>#}
    <form action=\"{{ path('showevenementpa') }}\" method=\"get\">
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
    <img src=\"{{ asset('asset/User/img/th1.jpg') }}\" alt=\"Image de l'événement\" class=\"event-image\">
    <div class=\"event-details\">
        <p><strong>Event Name:</strong>{{ a.nom }}</p>
        <p><strong>Description:</strong>{{ a.description }}</p>
        <p><strong>Start Date:</strong> {{ a.dateDebut|date('Y-m-d') }}</p>
        <p><strong>End Date:</strong>{{ a.dateFin|date('Y-m-d') }}</p>
        <p><strong>Location:</strong>{{ a.localisation }}</p>
        <p><strong>Category:</strong>{{ a.categorie }}</p>
        <p><strong>Number of Participants:</strong> {{ a.nbParticipant }}</p>
        
       

  
</div>
{% endfor %}
<div id=\"map\" style=\"height: 400px;\"></div> <!-- Élément div pour afficher la carte -->

 <div id=\"map\"></div>
  
<script>
    function initMap() {
        // Création de la carte avec une position par défaut
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: { lat: 0, lng: 0 } // Position par défaut (à remplacer par le centre souhaité)
        });


    }
</script>
<section id=\"google-map\">
   <!-- How to change your own map point
          1. Go to Google Maps
          2. Click on your location point
          3. Click \"Share\" and choose \"Embed map\" tab
          4. Copy only URL and paste it within the src=\"\" field below
  -->
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945\" width=\"100%\" height=\"350\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
   </section>     
   
<script>
     // Ajoutez le code JavaScript ici pour gérer la recherche de centres de collecte et la mise à jour du menu déroulant
     // Utilisez AJAX pour envoyer une requête au serveur Symfony pour récupérer les centres de collecte en fonction du code postal
 
     document.getElementById('zipCode').addEventListener('change', function () {
         var zipCode = this.value;
 
         // Utilisez AJAX pour envoyer la requête au serveur Symfony
         // Assurez-vous d'adapter le chemin de l'URL à votre configuration Symfony
         fetch(/path/to/your/search/action?zipCode=\${zipCode})
             .then(response => response.json())
             .then(data => {
                 // Mettez à jour le menu déroulant avec les centres de collecte récupérés
                 var centreDropdown = document.querySelector('select[name=\"centredecollecte\"]');
                 centreDropdown.innerHTML = '';
 
                 data.centres.forEach(centre => {
                     var option = document.createElement('option');
                     option.value = centre.id;
                     option.textContent = centre.name;
                     centreDropdown.appendChild(option);
                 });
             })
             .catch(error => console.error('Erreur lors de la recherche :', error));
     });
     </script>

 <br>
<div class=\"navigation\">
    <ul class=\"pagination\">
        <li class=\"page-item\">
            {% if evenement.currentPageNumber > 1 %}
                <a href=\"{{ path('showevenementpa', {'page': evenement.currentPageNumber - 1}) }}\" class=\"page-link pagination-button\">Previous</a>
            {% else %}
                <span class=\"page-link pagination-button disabled\">Previous</span>
            {% endif %}
        </li>
        <li class=\"page-item\">
            {% if evenement.currentPageNumber < evenement.pageCount %}
                <a href=\"{{ path('showevenementpa', {'page': evenement.currentPageNumber + 1}) }}\" class=\"page-link pagination-button\">Next</a>
            {% else %}
                <span class=\"page-link pagination-button disabled\">Next</span>
            {% endif %}
        </li>
    </ul>
</div>

{% endblock %}", "Parent/showEvenement.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Parent\\showEvenement.html.twig");
    }
}
