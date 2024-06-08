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

/* question/index.html.twig */
class __TwigTemplate_21e60d83abfcc961d7ed5b1066f6d24d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "question/index.html.twig", 1);
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
        echo "    <style>

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

        .btn-add-event:hover {
            color: orange;
        }
    </style>


    <div style=\"text-align: center;\">
        <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_question");
        echo "\" class=\"btn-add-event\">ADD Question </a>
    </div>
    <div class=\"card-body\">
        <!-- Loop through each question -->
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Question"]) || array_key_exists("Question", $context) ? $context["Question"] : (function () { throw new RuntimeError('Variable "Question" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 33
            echo "            <div class=\"card mb-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</h5>
                    <p class=\"card-text\">Date: ";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "date", [], "any", false, false, false, 36), "d-m-Y"), "html", null, true);
            echo "</p>
                    <p class=\"card-text\">Type: ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "Type", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
                    <p class=\"card-text\">commntaire: ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "commentaire", [], "any", false, false, false, 38), "html", null, true);
            echo "</p>
                    <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["question"], "image", [], "any", false, false, false, 39))), "html", null, true);
            echo "\" style=\"width: 80px; height: 80px;\" class=\"card-img-top\" alt=\"Image\">
                </div>
                <div class=\"card-footer\">
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Actions\">
                        <a class=\"btn cur-p btn-danger\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_ab", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">Delete</a>
                        <a class=\"btn cur-p btn-success\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_ab", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">Update</a>
";
            // line 46
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like_question", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/like.png"), "html", null, true);
            echo "\" alt=\"Like\" class=\"like-button\" width=\"80\" height=\"50\"></a>
                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dislike_question", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/unlike.png"), "html", null, true);
            echo "\" alt=\"DisLike\" class=\"dislike-button\" width=\"80\" height=\"50\"></a>
                        
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        <div class=\"pagination\">
            ";
        // line 54
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["Question"]) || array_key_exists("Question", $context) ? $context["Question"] : (function () { throw new RuntimeError('Variable "Question" does not exist.', 54, $this->source); })()));
        echo "
        </div>
    </div>

    <script>

        document.querySelectorAll('.dislike-button').forEach(button => {
            button.addEventListener('click', () => {
                const url = button.dataset.action;
                fetch(url)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        // Rafraîchir la page après l'action réussie
                        location.reload();
                    %})
                    .catch(error => console.error('Error:', error));
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
        return "question/index.html.twig";
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
        return array (  182 => 54,  179 => 53,  165 => 47,  158 => 46,  154 => 44,  150 => 43,  143 => 39,  139 => 38,  135 => 37,  131 => 36,  127 => 35,  123 => 33,  119 => 32,  112 => 28,  87 => 5,  77 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}
{% block navimg %}
{% endblock %}
{% block body %}
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

        .btn-add-event:hover {
            color: orange;
        }
    </style>


    <div style=\"text-align: center;\">
        <a href=\"{{ path('add_question')}}\" class=\"btn-add-event\">ADD Question </a>
    </div>
    <div class=\"card-body\">
        <!-- Loop through each question -->
        {% for question in Question %}
            <div class=\"card mb-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ question.name }}</h5>
                    <p class=\"card-text\">Date: {{ question.date|date('d-m-Y') }}</p>
                    <p class=\"card-text\">Type: {{ question.Type }}</p>
                    <p class=\"card-text\">commntaire: {{ question.commentaire }}</p>
                    <img src=\"{{ asset('uploads/images/' ~ question.image) }}\" style=\"width: 80px; height: 80px;\" class=\"card-img-top\" alt=\"Image\">
                </div>
                <div class=\"card-footer\">
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Actions\">
                        <a class=\"btn cur-p btn-danger\" href=\"{{ path('delete_ab', {'id': question.id}) }}\">Delete</a>
                        <a class=\"btn cur-p btn-success\" href=\"{{ path('update_ab', {'id': question.id}) }}\">Update</a>
{#                        <a class=\"btn cur-p btn-primary\" href=\"{{ path('add_Reponse') }}\">Repondre</a>#}
                        <a href=\"{{ path('like_question', {'id': question.id}) }}\"><img src=\"{{ asset('images/like.png') }}\" alt=\"Like\" class=\"like-button\" width=\"80\" height=\"50\"></a>
                        <a href=\"{{ path('dislike_question', {'id': question.id}) }}\"><img src=\"{{ asset('images/unlike.png') }}\" alt=\"DisLike\" class=\"dislike-button\" width=\"80\" height=\"50\"></a>
                        
                    </div>
                </div>
            </div>
        {% endfor %}
        <div class=\"pagination\">
            {{ knp_pagination_render(Question) }}
        </div>
    </div>

    <script>

        document.querySelectorAll('.dislike-button').forEach(button => {
            button.addEventListener('click', () => {
                const url = button.dataset.action;
                fetch(url)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        // Rafraîchir la page après l'action réussie
                        location.reload();
                    %})
                    .catch(error => console.error('Error:', error));
            });
        });
    </script>
{% endblock %}
", "question/index.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\question\\index.html.twig");
    }
}
