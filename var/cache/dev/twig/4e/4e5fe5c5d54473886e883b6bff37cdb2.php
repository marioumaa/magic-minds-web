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

/* question/index.html22.twig */
class __TwigTemplate_bba05d38db21c480fa7230d50995ebb4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html22.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html22.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "question/index.html22.twig", 1);
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
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statsquestion");
        echo "\" class=\"btn-add-event\">Statistique</a>
    </div>


    <div class=\"card-body\">
        <!-- Loop through each question -->
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Question"]) || array_key_exists("Question", $context) ? $context["Question"] : (function () { throw new RuntimeError('Variable "Question" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 34
            echo "            <div class=\"card mb-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "name", [], "any", false, false, false, 36), "html", null, true);
            echo "</h5>
                    <p class=\"card-text\">Date: ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "date", [], "any", false, false, false, 37), "d-m-Y"), "html", null, true);
            echo "</p>
                    <p class=\"card-text\">Type: ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "Type", [], "any", false, false, false, 38), "html", null, true);
            echo "</p>
                    <p class=\"card-text\">commntaire: ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "commentaire", [], "any", false, false, false, 39), "html", null, true);
            echo "</p>
                    <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["question"], "image", [], "any", false, false, false, 40))), "html", null, true);
            echo "\" style=\"width: 80px; height: 80px;\" class=\"card-img-top\" alt=\"Image\">
                </div>
                <div class=\"card-footer\">
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Actions\">
                        <a class=\"btn cur-p btn-danger\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_ab", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">Delete</a>
                        
                        
                        
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        <div class=\"pagination\">
            ";
        // line 53
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["Question"]) || array_key_exists("Question", $context) ? $context["Question"] : (function () { throw new RuntimeError('Variable "Question" does not exist.', 53, $this->source); })()));
        echo "
        </div>
    </div>

    <script>
        // Fonction pour envoyer une requête HTTP lorsqu'un bouton Dislike est cliqué
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
                    })
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
        return "question/index.html22.twig";
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
        return array (  150 => 53,  147 => 52,  133 => 44,  126 => 40,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  106 => 34,  102 => 33,  93 => 27,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/base.html.twig' %}

{% block content %}
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
        <a href=\"{{ path('statsquestion')}}\" class=\"btn-add-event\">Statistique</a>
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
                        
                        
                        
                    </div>
                </div>
            </div>
        {% endfor %}
        <div class=\"pagination\">
            {{ knp_pagination_render(Question) }}
        </div>
    </div>

    <script>
        // Fonction pour envoyer une requête HTTP lorsqu'un bouton Dislike est cliqué
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
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    </script>
{% endblock %}
", "question/index.html22.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\question\\index.html22.twig");
    }
}
