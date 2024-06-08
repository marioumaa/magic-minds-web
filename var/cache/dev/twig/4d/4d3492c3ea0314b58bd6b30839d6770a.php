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

/* stat/stats.html.twig */
class __TwigTemplate_9b978dd4365dc63c78e33023664073af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stat/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stat/stats.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "stat/stats.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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
        echo "
<div class=\"content-page\">
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-12\">

                        <h4 class=\"page-title\">Statistiques des questions</h4>
                    </div>
                </div>
            </div>
            
            <!-- Contenu de la vue des statistiques -->
            <div class=\"row\" style=\"padding-left: 500px\">
                <div class=\"col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Répartition des questions par son  type:enfant[rouge] ou parent[vert]</h5>
                            <canvas id=\"reclamationChart\" width=\"400\" height=\"400\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin du contenu de la vue des statistiques -->
            
        </div>
    </div>
</div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\"></script>
<script>
    let reclamationCanvas = document.querySelector(\"#reclamationChart\");
    let reclamationChart = new Chart(reclamationCanvas, {
        type: 'pie',
        data: {
            labels: ";
        // line 38
        echo (isset($context["recColor"]) || array_key_exists("recColor", $context) ? $context["recColor"] : (function () { throw new RuntimeError('Variable "recColor" does not exist.', 38, $this->source); })());
        echo ",
            datasets: [{
                label: 'Nombre de réclamations par type',
                data: ";
        // line 41
        echo (isset($context["recCount"]) || array_key_exists("recCount", $context) ? $context["recCount"] : (function () { throw new RuntimeError('Variable "recCount" does not exist.', 41, $this->source); })());
        echo ",
                backgroundColor: ";
        // line 42
        echo (isset($context["recColor"]) || array_key_exists("recColor", $context) ? $context["recColor"] : (function () { throw new RuntimeError('Variable "recColor" does not exist.', 42, $this->source); })());
        echo ",
            }]
        }
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
        return "stat/stats.html.twig";
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
        return array (  114 => 42,  110 => 41,  104 => 38,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/base.html.twig' %}

{% block content %}

<div class=\"content-page\">
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-12\">

                        <h4 class=\"page-title\">Statistiques des questions</h4>
                    </div>
                </div>
            </div>
            
            <!-- Contenu de la vue des statistiques -->
            <div class=\"row\" style=\"padding-left: 500px\">
                <div class=\"col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Répartition des questions par son  type:enfant[rouge] ou parent[vert]</h5>
                            <canvas id=\"reclamationChart\" width=\"400\" height=\"400\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin du contenu de la vue des statistiques -->
            
        </div>
    </div>
</div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\"></script>
<script>
    let reclamationCanvas = document.querySelector(\"#reclamationChart\");
    let reclamationChart = new Chart(reclamationCanvas, {
        type: 'pie',
        data: {
            labels: {{ recColor|raw }},
            datasets: [{
                label: 'Nombre de réclamations par type',
                data: {{ recCount|raw }},
                backgroundColor: {{ recColor|raw }},
            }]
        }
    });
</script>
{% endblock %}

", "stat/stats.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\stat\\stats.html.twig");
    }
}
