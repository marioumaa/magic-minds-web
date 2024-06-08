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

/* question/index.html.twig */
class __TwigTemplate_be38fcc826443984189a059414bb4d00 extends Template
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
        yield "    <style>

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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_question");
        yield "\" class=\"btn-add-event\">ADD Question </a>
    </div>
    <div class=\"card-body\">
        <!-- Loop through each question -->
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["Question"]) || array_key_exists("Question", $context) ? $context["Question"] : (function () { throw new RuntimeError('Variable "Question" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 33
            yield "            <div class=\"card mb-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "name", [], "any", false, false, false, 35), "html", null, true);
            yield "</h5>
                    <p class=\"card-text\">Date: ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "date", [], "any", false, false, false, 36), "d-m-Y"), "html", null, true);
            yield "</p>
                    <p class=\"card-text\">Type: ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "Type", [], "any", false, false, false, 37), "html", null, true);
            yield "</p>
                    <p class=\"card-text\">commntaire: ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "commentaire", [], "any", false, false, false, 38), "html", null, true);
            yield "</p>
                    <img src=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["question"], "image", [], "any", false, false, false, 39))), "html", null, true);
            yield "\" style=\"width: 80px; height: 80px;\" class=\"card-img-top\" alt=\"Image\">
                </div>
                <div class=\"card-footer\">
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Actions\">
                        <a class=\"btn cur-p btn-danger\" href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_ab", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\">Delete</a>
                        <a class=\"btn cur-p btn-success\" href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_ab", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\">Update</a>
";
            // line 46
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like_question", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\"><img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/like.png"), "html", null, true);
            yield "\" alt=\"Like\" class=\"like-button\" width=\"80\" height=\"50\"></a>
                        <a href=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dislike_question", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\"><img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/unlike.png"), "html", null, true);
            yield "\" alt=\"DisLike\" class=\"dislike-button\" width=\"80\" height=\"50\"></a>
                        
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "        <div class=\"pagination\">
            ";
        // line 54
        yield $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["Question"]) || array_key_exists("Question", $context) ? $context["Question"] : (function () { throw new RuntimeError('Variable "Question" does not exist.', 54, $this->source); })()));
        yield "
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

        return; yield '';
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
        return array (  184 => 54,  181 => 53,  167 => 47,  160 => 46,  156 => 44,  152 => 43,  145 => 39,  141 => 38,  137 => 37,  133 => 36,  129 => 35,  125 => 33,  121 => 32,  114 => 28,  89 => 5,  79 => 4,  60 => 2,  37 => 1,);
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
", "question/index.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\question\\index.html.twig");
    }
}
