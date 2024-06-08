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

/* commande/commande.html.twig */
class __TwigTemplate_1e156d1f4a7e10cbc6c1f08435e20c8a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/commande.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/commande.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "commande/commande.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        // line 5
        echo "    <script>
        var factureUrlTemplate = '";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture", ["commandId" => "__commandId__"]);
        echo "';
    </script>

    <div class=\"container mt-4\">
        <div class=\"row\">
            <div class=\"col-12\">
                <input type=\"text\" id=\"searchInput\" placeholder=\"Search by ID...\" class=\"form-control mb-3\">
               
            </div>
            <div class=\"col-12\">
                <table class=\"table table-bordered\" id=\"commandsTable\">
                    <thead>
                    <tr>
                        <th scope=\"col\">ID</th>
                        <th scope=\"col\">Total Price</th>
                        <th scope=\"col\">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Results will be displayed here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function() {
            function fetchCommands(term = '', price = '') {
                \$.ajax({
                    url: '";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_commande");
        echo "',
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        term: term,
                        price: price,
                    },
                    success: function(commands) {
                        \$('#commandsTable tbody').empty();
                        \$.each(commands, function(i, item) {
                            // Replace the placeholder in the URL template with the actual commandId
                            var itemFactureUrl = factureUrlTemplate.replace('__commandId__', item.id);

                            var row = '<tr>' +
                                '<td>' + item.id + '</td>' +
                                '<td>\$' + item.totalprice + '</td>' +
                                '<td><button type=\"button\" class=\"btn btn-primary\"><a href=\"' + itemFactureUrl + '\" class=\"text-white\"><i class=\"far fa-eye\"></i></a></button></td>' +
                                '</tr>';
                            \$('#commandsTable tbody').append(row);
                        });
                    }
                });
            }

            \$('#searchInput, #priceInput').on('keyup change', function() {
                fetchCommands(\$('#searchInput').val(), \$('#priceInput').val());
            });

            // Initial fetch of commands
            fetchCommands();
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
        return "commande/commande.html.twig";
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
        return array (  107 => 37,  73 => 6,  70 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block body %}
    {# Define a template URL with a placeholder for commandId #}
    <script>
        var factureUrlTemplate = '{{ path('app_facture', {'commandId': '__commandId__'}) }}';
    </script>

    <div class=\"container mt-4\">
        <div class=\"row\">
            <div class=\"col-12\">
                <input type=\"text\" id=\"searchInput\" placeholder=\"Search by ID...\" class=\"form-control mb-3\">
               
            </div>
            <div class=\"col-12\">
                <table class=\"table table-bordered\" id=\"commandsTable\">
                    <thead>
                    <tr>
                        <th scope=\"col\">ID</th>
                        <th scope=\"col\">Total Price</th>
                        <th scope=\"col\">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Results will be displayed here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function() {
            function fetchCommands(term = '', price = '') {
                \$.ajax({
                    url: '{{ path('search_commande') }}',
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        term: term,
                        price: price,
                    },
                    success: function(commands) {
                        \$('#commandsTable tbody').empty();
                        \$.each(commands, function(i, item) {
                            // Replace the placeholder in the URL template with the actual commandId
                            var itemFactureUrl = factureUrlTemplate.replace('__commandId__', item.id);

                            var row = '<tr>' +
                                '<td>' + item.id + '</td>' +
                                '<td>\$' + item.totalprice + '</td>' +
                                '<td><button type=\"button\" class=\"btn btn-primary\"><a href=\"' + itemFactureUrl + '\" class=\"text-white\"><i class=\"far fa-eye\"></i></a></button></td>' +
                                '</tr>';
                            \$('#commandsTable tbody').append(row);
                        });
                    }
                });
            }

            \$('#searchInput, #priceInput').on('keyup change', function() {
                fetchCommands(\$('#searchInput').val(), \$('#priceInput').val());
            });

            // Initial fetch of commands
            fetchCommands();
        });

    </script>

{% endblock %}
", "commande/commande.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\commande\\commande.html.twig");
    }
}
