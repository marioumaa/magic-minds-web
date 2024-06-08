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

/* question/addquestions.html1.twig */
class __TwigTemplate_81bcedec48104aad5add8e6c01a134b7 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/addquestions.html1.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/addquestions.html1.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/addquestions.html1.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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
        yield "    <div class=\"card-body\">
        <!-- Loop through each question -->
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 7
            yield "            <div class=\"card mb-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "name", [], "any", false, false, false, 9), "html", null, true);
            yield "</h5>
                    <p class=\"card-text\">Date: ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "date", [], "any", false, false, false, 10), "d-m-Y"), "html", null, true);
            yield "</p>
                    <p class=\"card-text\">Type: ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "Type", [], "any", false, false, false, 11), "html", null, true);
            yield "</p>
                    <p class=\"card-text\">Commentaire: ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "commentaire", [], "any", false, false, false, 12), "html", null, true);
            yield "</p>
                    <img src=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["question"], "image", [], "any", false, false, false, 13))), "html", null, true);
            yield "\" style=\"width: 80px; height: 80px;\" class=\"card-img-top\" alt=\"Image\">
                </div>
                <div class=\"card-footer\">
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Actions\">
                        <a class=\"btn cur-p btn-danger\" href=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_ab", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            yield "\">Delete</a>
                        <a class=\"btn cur-p btn-success\" href=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_ab", ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "name", [], "any", false, false, false, 18)]), "html", null, true);
            yield "\">Update</a>
                        <a class=\"btn cur-p btn-primary\" href=\"";
            // line 19
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_Reponse");
            yield "\">Envoyer un message</a>
                        <a href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like_question", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\"><img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/like.jpg"), "html", null, true);
            yield "\" alt=\"Like\" class=\"like-button\" width=\"80\" height=\"50\"></a>
                        <a href=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dislike_question", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            yield "\"><img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/dislike.png"), "html", null, true);
            yield "\" alt=\"DisLike\" class=\"dislike-button\" width=\"80\" height=\"50\"></a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "        <div class=\"pagination\">
            ";
        // line 27
        yield $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 27, $this->source); })()));
        yield "
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

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "question/addquestions.html1.twig";
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
        return array (  138 => 27,  135 => 26,  122 => 21,  116 => 20,  112 => 19,  108 => 18,  104 => 17,  97 => 13,  93 => 12,  89 => 11,  85 => 10,  81 => 9,  77 => 7,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"card-body\">
        <!-- Loop through each question -->
        {% for question in questions %}
            <div class=\"card mb-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ question.name }}</h5>
                    <p class=\"card-text\">Date: {{ question.date|date('d-m-Y') }}</p>
                    <p class=\"card-text\">Type: {{ question.Type }}</p>
                    <p class=\"card-text\">Commentaire: {{ question.commentaire }}</p>
                    <img src=\"{{ asset('uploads/images/' ~ question.image) }}\" style=\"width: 80px; height: 80px;\" class=\"card-img-top\" alt=\"Image\">
                </div>
                <div class=\"card-footer\">
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Actions\">
                        <a class=\"btn cur-p btn-danger\" href=\"{{ path('delete_ab', {'id': question.id}) }}\">Delete</a>
                        <a class=\"btn cur-p btn-success\" href=\"{{ path('update_ab', {'name': question.name}) }}\">Update</a>
                        <a class=\"btn cur-p btn-primary\" href=\"{{ path('add_Reponse') }}\">Envoyer un message</a>
                        <a href=\"{{ path('like_question', {'id': question.id}) }}\"><img src=\"{{ asset('images/like.jpg') }}\" alt=\"Like\" class=\"like-button\" width=\"80\" height=\"50\"></a>
                        <a href=\"{{ path('dislike_question', {'id': question.id}) }}\"><img src=\"{{ asset('images/dislike.png') }}\" alt=\"DisLike\" class=\"dislike-button\" width=\"80\" height=\"50\"></a>
                    </div>
                </div>
            </div>
        {% endfor %}
        <div class=\"pagination\">
            {{ knp_pagination_render(questions) }}
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
", "question/addquestions.html1.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\question\\addquestions.html1.twig");
    }
}
