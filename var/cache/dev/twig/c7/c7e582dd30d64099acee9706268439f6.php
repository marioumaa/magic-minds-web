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

/* Enfant/showEvenement.html.twig */
class __TwigTemplate_714e0f9a55217c27493d213cb052ae23 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Enfant/showEvenement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Enfant/showEvenement.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "Enfant/showEvenement.html.twig", 1);
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
    <!doctype html>
    <html lang=\"en\">
    <head>
        <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap\" rel=\"stylesheet\">

        <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("planification/fonts/icomoon/style.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("planification/fullcalendar/packages/core/main.css"), "html", null, true);
        yield "\">
        <link href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("planification/fullcalendar/packages/daygrid/main.css"), "html", null, true);
        yield "\" rel='stylesheet' />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("planification/css/bootstrap.min.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("planification/css/style.css"), "html", null, true);
        yield "\">
        <title>Calendar #9</title>
    </head>
    <body>


    <div class=\"content\">
        <div id='calendar'></div>
    </div>

    <script src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("planification/js/jquery-3.3.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("planification/js/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("planification/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("planification/fullcalendar/packages/core/main.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("planification/fullcalendar/packages/interaction/main.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("planification/fullcalendar/packages/daygrid/main.js"), "html", null, true);
        yield "\"></script>



    <script src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("planification/js/main.js"), "html", null, true);
        yield "\"></script>
    </body>
    </html>

";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 44
            yield "    <div class=\"alert alert-danger\" style=\"position: absolute; top: 10px; left: 50%; transform: translateX(-50%); z-index: 9999;\">
        ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "<style>
    .navigation {
        text-align: center;
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
        background-color: #FE5D37;
    }

    .event-image {
        width: 150px;
        height: auto;
        border-radius: 8px;
        align-self: center;
        margin-bottom: 10px;
    }
</style>

 
<div id=\"calendar\"></div>


   
";
        // line 130
        yield "
<form action=\"";
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenemente");
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
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 156, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 157
            yield "<div class=\"event-card\">
    <img src=\"";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/th1.jpg"), "html", null, true);
            yield "\" alt=\"Image de l'événement\" class=\"event-image\">
    <div class=\"event-details\">
        <p><strong>Event Name:</strong>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 160), "html", null, true);
            yield "</p>
        <p><strong>Description:</strong>";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "description", [], "any", false, false, false, 161), "html", null, true);
            yield "</p>
        <p><strong>Start Date:</strong> ";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dateDebut", [], "any", false, false, false, 162), "Y-m-d"), "html", null, true);
            yield "</p>
        <p><strong>End Date:</strong>";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dateFin", [], "any", false, false, false, 163), "Y-m-d"), "html", null, true);
            yield "</p>
        <p><strong>Location:</strong>";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 164), "html", null, true);
            yield "</p>
        <p><strong>Category:</strong>";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "categorie", [], "any", false, false, false, 165), "html", null, true);
            yield "</p>
        <p><strong>Number of Participants:</strong> ";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nbParticipant", [], "any", false, false, false, 166), "html", null, true);
            yield "</p>
    </div>
    <div class=\"event-actions\">
        <a class=\"btn-participer\" href=\"";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addparticipation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 169)]), "html", null, true);
            yield "\">participate</a>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "
<div class=\"navigation\">
    <ul class=\"pagination\">
        <li class=\"page-item\">
            ";
        // line 177
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 177, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 177) > 1)) {
            // line 178
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenemente", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 178, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 178) - 1)]), "html", null, true);
            yield "\"
                   class=\"page-link pagination-button\">Previous</a>
            ";
        } else {
            // line 181
            yield "                <span class=\"page-link pagination-button disabled\">Previous</span>
            ";
        }
        // line 183
        yield "        </li>
        <li class=\"page-item\">
            ";
        // line 185
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 185, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 185) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 185, $this->source); })()), "pageCount", [], "any", false, false, false, 185))) {
            // line 186
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenemente", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 186, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 186) + 1)]), "html", null, true);
            yield "\"
                   class=\"page-link pagination-button\">Next</a>
            ";
        } else {
            // line 189
            yield "                <span class=\"page-link pagination-button disabled\">Next</span>
            ";
        }
        // line 191
        yield "        </li>
    </ul>
</div>

<script src=\"planification/fullcalendar/packages/core/main.js\"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            plugins: [ 'dayGrid' ],
            events: [
                ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 204, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 205
            yield "                    {
                        title: '";
            // line 206
            yield CoreExtension::getAttribute($this->env, $this->source, $context["b"], "nom", [], "any", false, false, false, 206);
            yield "',
                        start: '";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "dateDebut", [], "any", false, false, false, 207), "Y-m-d"), "html", null, true);
            yield "',
                        end: '";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "dateFin", [], "any", false, false, false, 208), "Y-m-d"), "html", null, true);
            yield "'
                        
                    }";
            // line 210
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 210)) {
                yield ",";
            }
            // line 211
            yield "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        yield "            ]
        });
        calendar.render();
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
        return "Enfant/showEvenement.html.twig";
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
        return array (  442 => 212,  428 => 211,  424 => 210,  419 => 208,  415 => 207,  411 => 206,  408 => 205,  391 => 204,  376 => 191,  372 => 189,  365 => 186,  363 => 185,  359 => 183,  355 => 181,  348 => 178,  346 => 177,  340 => 173,  330 => 169,  324 => 166,  320 => 165,  316 => 164,  312 => 163,  308 => 162,  304 => 161,  300 => 160,  295 => 158,  292 => 157,  288 => 156,  260 => 131,  257 => 130,  181 => 48,  172 => 45,  169 => 44,  165 => 43,  158 => 39,  151 => 35,  147 => 34,  143 => 33,  139 => 32,  135 => 31,  131 => 30,  118 => 20,  114 => 19,  110 => 18,  106 => 17,  102 => 16,  89 => 5,  79 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}
{% block navimg %}
{% endblock %}
{% block body %}

    <!doctype html>
    <html lang=\"en\">
    <head>
        <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap\" rel=\"stylesheet\">

        <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"{{asset('planification/fonts/icomoon/style.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('planification/fullcalendar/packages/core/main.css')}}\">
        <link href=\"{{asset('planification/fullcalendar/packages/daygrid/main.css')}}\" rel='stylesheet' />
        <link rel=\"stylesheet\" href=\"{{asset('planification/css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('planification/css/style.css')}}\">
        <title>Calendar #9</title>
    </head>
    <body>


    <div class=\"content\">
        <div id='calendar'></div>
    </div>

    <script src=\"{{asset('planification/js/jquery-3.3.1.min.js')}}\"></script>
    <script src=\"{{asset('planification/js/popper.min.js')}}\"></script>
    <script src=\"{{asset('planification/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('planification/fullcalendar/packages/core/main.js')}}\"></script>
    <script src=\"{{asset('planification/fullcalendar/packages/interaction/main.js')}}\"></script>
    <script src=\"{{asset('planification/fullcalendar/packages/daygrid/main.js')}}\"></script>



    <script src=\"{{asset('planification/js/main.js')}}\"></script>
    </body>
    </html>

{% for flash_message in app.flashes('warning') %}
    <div class=\"alert alert-danger\" style=\"position: absolute; top: 10px; left: 50%; transform: translateX(-50%); z-index: 9999;\">
        {{ flash_message }}
    </div>
{% endfor %}
<style>
    .navigation {
        text-align: center;
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
        background-color: #FE5D37;
    }

    .event-image {
        width: 150px;
        height: auto;
        border-radius: 8px;
        align-self: center;
        margin-bottom: 10px;
    }
</style>

 
<div id=\"calendar\"></div>


   
{#  <form action=\"{{ path('showevenemente') }}\" method=\"get\">#}
{#    <label for=\"categorie\">Category:</label>#}
{#    <input type=\"text\" id=\"categorie\" name=\"categorie\">#}
{#    #}
{#    <label for=\"localisation\">Location:</label>#}
{#    <input type=\"text\" id=\"localisation\" name=\"localisation\">#}
{#    <input type=\"submit\" value=\"Filter\">#}
{#</form>#}

<form action=\"{{ path('showevenemente') }}\" method=\"get\">
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
    <div class=\"event-actions\">
        <a class=\"btn-participer\" href=\"{{ path('addparticipation',{'id': a.id} )}}\">participate</a>
    </div>
</div>
{% endfor %}

<div class=\"navigation\">
    <ul class=\"pagination\">
        <li class=\"page-item\">
            {% if evenement.currentPageNumber > 1 %}
                <a href=\"{{ path('showevenemente', {'page': evenement.currentPageNumber - 1}) }}\"
                   class=\"page-link pagination-button\">Previous</a>
            {% else %}
                <span class=\"page-link pagination-button disabled\">Previous</span>
            {% endif %}
        </li>
        <li class=\"page-item\">
            {% if evenement.currentPageNumber < evenement.pageCount %}
                <a href=\"{{ path('showevenemente', {'page': evenement.currentPageNumber + 1}) }}\"
                   class=\"page-link pagination-button\">Next</a>
            {% else %}
                <span class=\"page-link pagination-button disabled\">Next</span>
            {% endif %}
        </li>
    </ul>
</div>

<script src=\"planification/fullcalendar/packages/core/main.js\"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            plugins: [ 'dayGrid' ],
            events: [
                {% for b in evenement %}
                    {
                        title: '{{ b.nom|raw }}',
                        start: '{{ b.dateDebut|date(\"Y-m-d\") }}',
                        end: '{{ b.dateFin|date(\"Y-m-d\") }}'
                        
                    }{% if not loop.last %},{% endif %}
                {% endfor %}
            ]
        });
        calendar.render();
    });
</script>


{% endblock %}
", "Enfant/showEvenement.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Enfant\\showEvenement.html.twig");
    }
}
