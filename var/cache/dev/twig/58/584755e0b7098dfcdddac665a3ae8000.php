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

/* Parent/showParticipation.html.twig */
class __TwigTemplate_69aac626e1a6690b3157b6681139fec8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Parent/showParticipation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Parent/showParticipation.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "Parent/showParticipation.html.twig", 1);
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
        echo "
 <style>
          .event-image {
        width: 300px;
        height: auto;
        display: block;
        margin: 0 auto 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

            /* Style pour la carte */
            .card {
                width: 40%;
                margin: 20px auto; /* Centrer la carte horizontalement */
                border: 1px solid #ddd;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Ombre plus prononcée */
                background-color: #f9f9f9; /* Couleur de fond légèrement différente */
                font-family: Arial, sans-serif;
                position: relative;
                text-align: center;
            }

            .card-header {
                padding: 12px;
                text-align: left;
                background-color: #f2f2f2;
                border-top-left-radius: 8px; /* Bordures arrondies */
                border-top-right-radius: 8px;
            }

            .card-body {
                padding: 12px;
            }

            .btn-cancel {
                background-color: #FE5D37;
                color: #fff;
                border: none;
                border-radius: 4px;
                padding: 8px 12px;
                text-decoration: none;
                transition: background-color 0.3s ease;
                margin-right: 10px;
            }

            .btn-cancel:hover {
                background-color: #FE5D37;
            }

            .date-time {
                font-size: 0.8em;
                color: #333; /* Couleur de texte plus foncée */
            }

            .event-name, .user-name {
                font-weight: bold; /* Mettre en gras */
            }

            .separator {
                margin-bottom: 10px; /* Espacement entre chaque carte */
            }
        </style>


<div class=\"event-container\">
    <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/participation_orig.jpg"), "html", null, true);
        echo "\" alt=\"Image de l'événement\" class=\"event-image\">
</div>


";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Participation"]) || array_key_exists("Participation", $context) ? $context["Participation"] : (function () { throw new RuntimeError('Variable "Participation" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
            // line 77
            echo "    <div class=\"card\" id=\"participation-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 77), "html", null, true);
            echo "\">
        <!-- Card header -->
        <div class=\"card-header\">
            <h2 class=\"date-time\">Date: ";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "date", [], "any", false, false, false, 80), "Y-m-d"), "html", null, true);
            echo "</h2>
            
        <h3 class=\"date-time\">Time: ";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "heure", [], "any", false, false, false, 82), "H:i:s"), "html", null, true);
            echo "</h3>
        <p class=\"event-name\">Event: ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participation"], "idEvenement", [], "any", false, false, false, 83), "nom", [], "any", false, false, false, 83), "html", null, true);
            echo "</p> <!-- Ajout du nom de l'événement -->
        </div>
        <!-- Card body -->
        <div class=\"card-body\">
            <button class=\"btn-cancel\" data-id=\"";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "\">Cancel</button>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        const cancelButtons = document.querySelectorAll('.btn-cancel');

        cancelButtons.forEach(button => {
            button.addEventListener('click', function() {
                const participationId = this.getAttribute('data-id');

                if (confirm(\"Are you sure you want to cancel this participation?\")) {
                    fetch(`/deleteParticipationa/\${participationId}`, {
                        method: 'DELETE'
                    })
                    .then(response => {
                        if (response.ok) {
                            // Supprime la carte sans recharger la page
                            const card = document.getElementById('participation-' + participationId);
                            card.remove();
                        } else {
                            console.error('Failed to cancel participation');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                }
            });
        });
    });
</script>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Parent/showParticipation.html.twig";
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
        return array (  200 => 91,  190 => 87,  183 => 83,  179 => 82,  174 => 80,  167 => 77,  163 => 76,  156 => 72,  87 => 5,  77 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}
{% block navimg %}
{% endblock %}
{% block body %}

 <style>
          .event-image {
        width: 300px;
        height: auto;
        display: block;
        margin: 0 auto 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

            /* Style pour la carte */
            .card {
                width: 40%;
                margin: 20px auto; /* Centrer la carte horizontalement */
                border: 1px solid #ddd;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Ombre plus prononcée */
                background-color: #f9f9f9; /* Couleur de fond légèrement différente */
                font-family: Arial, sans-serif;
                position: relative;
                text-align: center;
            }

            .card-header {
                padding: 12px;
                text-align: left;
                background-color: #f2f2f2;
                border-top-left-radius: 8px; /* Bordures arrondies */
                border-top-right-radius: 8px;
            }

            .card-body {
                padding: 12px;
            }

            .btn-cancel {
                background-color: #FE5D37;
                color: #fff;
                border: none;
                border-radius: 4px;
                padding: 8px 12px;
                text-decoration: none;
                transition: background-color 0.3s ease;
                margin-right: 10px;
            }

            .btn-cancel:hover {
                background-color: #FE5D37;
            }

            .date-time {
                font-size: 0.8em;
                color: #333; /* Couleur de texte plus foncée */
            }

            .event-name, .user-name {
                font-weight: bold; /* Mettre en gras */
            }

            .separator {
                margin-bottom: 10px; /* Espacement entre chaque carte */
            }
        </style>


<div class=\"event-container\">
    <img src=\"{{ asset('asset/User/img/participation_orig.jpg') }}\" alt=\"Image de l'événement\" class=\"event-image\">
</div>


{% for participation in Participation %}
    <div class=\"card\" id=\"participation-{{ participation.id }}\">
        <!-- Card header -->
        <div class=\"card-header\">
            <h2 class=\"date-time\">Date: {{ participation.date|date('Y-m-d') }}</h2>
            
        <h3 class=\"date-time\">Time: {{ participation.heure|date('H:i:s') }}</h3>
        <p class=\"event-name\">Event: {{ participation.idEvenement.nom }}</p> <!-- Ajout du nom de l'événement -->
        </div>
        <!-- Card body -->
        <div class=\"card-body\">
            <button class=\"btn-cancel\" data-id=\"{{ participation.id }}\">Cancel</button>
        </div>
    </div>
{% endfor %}
<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        const cancelButtons = document.querySelectorAll('.btn-cancel');

        cancelButtons.forEach(button => {
            button.addEventListener('click', function() {
                const participationId = this.getAttribute('data-id');

                if (confirm(\"Are you sure you want to cancel this participation?\")) {
                    fetch(`/deleteParticipationa/\${participationId}`, {
                        method: 'DELETE'
                    })
                    .then(response => {
                        if (response.ok) {
                            // Supprime la carte sans recharger la page
                            const card = document.getElementById('participation-' + participationId);
                            card.remove();
                        } else {
                            console.error('Failed to cancel participation');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                }
            });
        });
    });
</script>


{% endblock %}", "Parent/showParticipation.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Parent\\showParticipation.html.twig");
    }
}
