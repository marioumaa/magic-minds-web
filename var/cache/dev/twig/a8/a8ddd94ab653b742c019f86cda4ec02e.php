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

/* Admin/showParticipation.html.twig */
class __TwigTemplate_a40768146957f29c4916d3e33b64eeb6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/showParticipation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/showParticipation.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/showParticipation.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "
<style>
    /* Style pour l'image de l'événement */
    .event-container {
        text-align: center;
        margin-bottom: 20px;
    }

    .event-image {
        width: 300px;
        height: auto;
        display: block;
        margin: 0 auto 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Style pour la table */
    #participation-table {
        width: 80%;
        margin: 0 auto;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
    }

    #participation-table th, #participation-table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    #participation-table th {
        background-color: #f2f2f2;
    }

    /* Style pour les lignes de participation */
    .participation-row {
        background-color: #f9f9f9;
    }

    .participation-row:hover {
        background-color: #eaeaea;
    }

    /* Style pour les boutons */
    .btn-delete {
        background-color: #FE5D37; /* Couleur du bouton */
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 8px 12px;
        text-decoration: none;
        transition: background-color 0.3s ease;
        margin-right: 10px;
    }

    .btn-delete:hover {
        background-color: #FE5D37; /* Couleur au survol */
    }
</style>

<div class=\"event-container\">
    <img src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/participation_orig.jpg"), "html", null, true);
        yield "\" alt=\"Image de l'événement\" class=\"event-image\">
</div>

<table id=\"participation-table\">
    <!-- Table header -->
    <thead>
        <tr>
            <th>Date</th>
            <th>Time</th>
             <th>Event</th>
            <th>Student</th>
            <th>Action</th>
        </tr>
    </thead>
    <!-- Table body -->
    <tbody>
        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["Participation"]) || array_key_exists("Participation", $context) ? $context["Participation"] : (function () { throw new RuntimeError('Variable "Participation" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
            // line 83
            yield "            <tr class=\"participation-row\" id=\"participation-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 83), "html", null, true);
            yield "\">
                <td>";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "date", [], "any", false, false, false, 84), "Y-m-d"), "html", null, true);
            yield "</td>
                <td>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "heure", [], "any", false, false, false, 85), "H:i:s"), "html", null, true);
            yield "</td>
                 <td> ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "idEvenement", [], "any", false, false, false, 86), "nom", [], "any", false, false, false, 86), "html", null, true);
            yield "</td> <!-- Ajout du nom de l'événement -->
                  <td>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "idUser", [], "any", false, false, false, 87), "firstName", [], "any", false, false, false, 87), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "idUser", [], "any", false, false, false, 87), "lastName", [], "any", false, false, false, 87), "html", null, true);
            yield "</td> <!-- Ajout du nom de l'utilisateur -->
                <td>
                    <button class=\"btn-delete\" data-id=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 89), "html", null, true);
            yield "\">Delete</button>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "    </tbody>
</table>

<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        const deleteButtons = document.querySelectorAll('.btn-delete');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const participationId = this.getAttribute('data-id');

                if (confirm(\"Are you sure you want to delete this participation?\")) {
                    fetch(`/deleteParticipationa/\${participationId}`, {
                        method: 'DELETE'
                    })
                    .then(response => {
                        if (response.ok) {
                           
                            const row = document.getElementById('participation-' + participationId);
                            row.remove();
                        } else {
                            console.error('Failed to delete participation');
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
        return "Admin/showParticipation.html.twig";
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
        return array (  190 => 93,  180 => 89,  173 => 87,  169 => 86,  165 => 85,  161 => 84,  156 => 83,  152 => 82,  133 => 66,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/base.html.twig' %}

{% block content %}

<style>
    /* Style pour l'image de l'événement */
    .event-container {
        text-align: center;
        margin-bottom: 20px;
    }

    .event-image {
        width: 300px;
        height: auto;
        display: block;
        margin: 0 auto 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Style pour la table */
    #participation-table {
        width: 80%;
        margin: 0 auto;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
    }

    #participation-table th, #participation-table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    #participation-table th {
        background-color: #f2f2f2;
    }

    /* Style pour les lignes de participation */
    .participation-row {
        background-color: #f9f9f9;
    }

    .participation-row:hover {
        background-color: #eaeaea;
    }

    /* Style pour les boutons */
    .btn-delete {
        background-color: #FE5D37; /* Couleur du bouton */
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 8px 12px;
        text-decoration: none;
        transition: background-color 0.3s ease;
        margin-right: 10px;
    }

    .btn-delete:hover {
        background-color: #FE5D37; /* Couleur au survol */
    }
</style>

<div class=\"event-container\">
    <img src=\"{{ asset('asset/User/img/participation_orig.jpg') }}\" alt=\"Image de l'événement\" class=\"event-image\">
</div>

<table id=\"participation-table\">
    <!-- Table header -->
    <thead>
        <tr>
            <th>Date</th>
            <th>Time</th>
             <th>Event</th>
            <th>Student</th>
            <th>Action</th>
        </tr>
    </thead>
    <!-- Table body -->
    <tbody>
        {% for participation in Participation %}
            <tr class=\"participation-row\" id=\"participation-{{ participation.id }}\">
                <td>{{ participation.date|date('Y-m-d') }}</td>
                <td>{{ participation.heure|date('H:i:s') }}</td>
                 <td> {{ participation.idEvenement.nom }}</td> <!-- Ajout du nom de l'événement -->
                  <td>{{ participation.idUser.firstName }} {{ participation.idUser.lastName }}</td> <!-- Ajout du nom de l'utilisateur -->
                <td>
                    <button class=\"btn-delete\" data-id=\"{{ participation.id }}\">Delete</button>
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>

<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        const deleteButtons = document.querySelectorAll('.btn-delete');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const participationId = this.getAttribute('data-id');

                if (confirm(\"Are you sure you want to delete this participation?\")) {
                    fetch(`/deleteParticipationa/\${participationId}`, {
                        method: 'DELETE'
                    })
                    .then(response => {
                        if (response.ok) {
                           
                            const row = document.getElementById('participation-' + participationId);
                            row.remove();
                        } else {
                            console.error('Failed to delete participation');
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
", "Admin/showParticipation.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Admin\\showParticipation.html.twig");
    }
}
