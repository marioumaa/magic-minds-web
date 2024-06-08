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

/* Professeur/showParticipation.html.twig */
class __TwigTemplate_23906d71a6137c6454732a116966e74d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/showParticipation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/showParticipation.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "Professeur/showParticipation.html.twig", 1);
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
        yield "       <style>
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
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/participation_orig.jpg"), "html", null, true);
        yield "\" alt=\"Image de l'événement\" class=\"event-image\">
        </div>

        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["Participation"]) || array_key_exists("Participation", $context) ? $context["Participation"] : (function () { throw new RuntimeError('Variable "Participation" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
            // line 74
            yield "            <div class=\"card separator\" id=\"participation-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 74), "html", null, true);
            yield "\">
                <!-- Card header -->
                <div class=\"card-header\">
                    <h2 class=\"date-time\">Date: ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "date", [], "any", false, false, false, 77), "Y-m-d"), "html", null, true);
            yield "</h2>
                    <h3 class=\"date-time\">Time: ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "heure", [], "any", false, false, false, 78), "H:i:s"), "html", null, true);
            yield "</h3>
                    <p class=\"event-name\">Event: ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "idEvenement", [], "any", false, false, false, 79), "nom", [], "any", false, false, false, 79), "html", null, true);
            yield "</p>
                    <p class=\"user-name\">Student: ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "idUser", [], "any", false, false, false, 80), "firstName", [], "any", false, false, false, 80), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "idUser", [], "any", false, false, false, 80), "lastName", [], "any", false, false, false, 80), "html", null, true);
            yield "</p>
                  </div>
        <!-- Card body -->
        <div class=\"card-body\">
            <button class=\"btn-cancel\" data-id=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 84), "html", null, true);
            yield "\">Cancel</button>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        const cancelButtons = document.querySelectorAll('.btn-cancel');

        cancelButtons.forEach(button => {
            button.addEventListener('click', function() {
                const participationId = this.getAttribute('data-id');

                if (confirm(\"Are you sure you want to cancel this participation?\")) {
                    fetch(`/deleteParticipationp/\${participationId}`, {
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

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Professeur/showParticipation.html.twig";
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
        return array (  204 => 88,  194 => 84,  185 => 80,  181 => 79,  177 => 78,  173 => 77,  166 => 74,  162 => 73,  156 => 70,  89 => 5,  79 => 4,  60 => 2,  37 => 1,);
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
            <div class=\"card separator\" id=\"participation-{{ participation.id }}\">
                <!-- Card header -->
                <div class=\"card-header\">
                    <h2 class=\"date-time\">Date: {{ participation.date|date('Y-m-d') }}</h2>
                    <h3 class=\"date-time\">Time: {{ participation.heure|date('H:i:s') }}</h3>
                    <p class=\"event-name\">Event: {{ participation.idEvenement.nom }}</p>
                    <p class=\"user-name\">Student: {{ participation.idUser.firstName }} {{ participation.idUser.lastName }}</p>
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
                    fetch(`/deleteParticipationp/\${participationId}`, {
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

{% endblock %}
", "Professeur/showParticipation.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Professeur\\showParticipation.html.twig");
    }
}
