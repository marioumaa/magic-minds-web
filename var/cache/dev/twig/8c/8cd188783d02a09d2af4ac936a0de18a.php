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

/* Professeur/coursmanage.html.twig */
class __TwigTemplate_76fd28af9c99480acbde57f4cdf006f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/coursmanage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/coursmanage.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "Professeur/coursmanage.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Classes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "
<hr style=\"color: #103741; margin:0%\">
";
        // line 10
        yield "<div style=\"width: 280px; \" class=\"d-flex flex-column flex-shrink-0 bg-light p-3 mb-0\" >
    <table>
        <tr>
            <td align=\"center\">
                <a href=\"/\" class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none\">
                    <span  class=\"fs-4\">Categories</span>
                </a>
            </td>
            <td>
                ";
        // line 20
        yield "                <button type=\"button\" class=\"btn btn-primary\" style=\"border-radius: 50%;\" data-bs-toggle=\"modal\"
                    data-bs-target=\"#addcategory\">
                    +
                </button>
                ";
        // line 25
        yield "            </td>
        </tr>
    </table>
    <hr style=\"color: #ffffff\">
    <ul class=\"nav nav-pills flex-column mb-auto\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 31
            yield "        <li class=\"nav-item\">
            <a href=\"#\"  class=\"nav-link \" aria-current=\"page\">
                ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "titre", [], "any", false, false, false, 33), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "    </ul>
    ";
        // line 39
        yield "    <div class=\"modal-dialog modal-dialog-centered\">

        <div class=\"modal fade\" id=\"addcategory\" tabindex=\"-1\" aria-labelledby=\"addcategoryLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\" style=\"background-color: #fff5f3\">
                    <div class=\"modal-header\">
                        <h1 class=\"mb-2\" style=\"text-align: center\" id=\"addcategoryLabel\">Add a category</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        ";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 49, $this->source); })()), 'form_start');
        yield "
                        <div class=\"row g-3\">
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 53, $this->source); })()), "titre", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control border-0", "placeholder" => "Title"]]);
        // line 56
        yield "
                                    ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 57, $this->source); })()), "titre", [], "any", false, false, false, 57), 'label', ["label" => "Title"]);
        yield "
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 62, $this->source); })()), "description", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control border-0", "placeholder" => "Description", "style" => "height: 150px"]]);
        // line 64
        yield "
                                    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 65, $this->source); })()), "description", [], "any", false, false, false, 65), 'label', ["label" => "Description"]);
        yield "
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 70, $this->source); })()), "image", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control border-0", "placeholder" => "Category
                                    image"]]);
        // line 73
        yield "
                                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 74, $this->source); })()), "image", [], "any", false, false, false, 74), 'label', ["label" => "Category image"]);
        yield "
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 78, $this->source); })()), "save", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "btn btn-primary w-100 py-3"]]);
        yield "
                            </div>
                            <div class=\"col-sm-6\">
                                <button type=\"button\" class=\"btn btn-primary w-100 py-3\"
                                    data-bs-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                        ";
        // line 85
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 85, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 92
        yield "</div>
";
        // line 94
        yield "

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
        return "Professeur/coursmanage.html.twig";
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
        return array (  239 => 94,  236 => 92,  227 => 85,  217 => 78,  210 => 74,  207 => 73,  204 => 70,  196 => 65,  193 => 64,  191 => 62,  183 => 57,  180 => 56,  178 => 53,  171 => 49,  159 => 39,  156 => 37,  146 => 33,  142 => 31,  138 => 30,  131 => 25,  125 => 20,  114 => 10,  110 => 7,  100 => 6,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Classes{% endblock %}
{% block navimg %}
{% endblock %}
{% block body %}

<hr style=\"color: #103741; margin:0%\">
{# sidnav bar start #}
<div style=\"width: 280px; \" class=\"d-flex flex-column flex-shrink-0 bg-light p-3 mb-0\" >
    <table>
        <tr>
            <td align=\"center\">
                <a href=\"/\" class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none\">
                    <span  class=\"fs-4\">Categories</span>
                </a>
            </td>
            <td>
                {# bouton add-category #}
                <button type=\"button\" class=\"btn btn-primary\" style=\"border-radius: 50%;\" data-bs-toggle=\"modal\"
                    data-bs-target=\"#addcategory\">
                    +
                </button>
                {# category pop up #}
            </td>
        </tr>
    </table>
    <hr style=\"color: #ffffff\">
    <ul class=\"nav nav-pills flex-column mb-auto\">
        {% for c in cat %}
        <li class=\"nav-item\">
            <a href=\"#\"  class=\"nav-link \" aria-current=\"page\">
                {{c.titre}}
            </a>
        </li>
        {% endfor %}
    </ul>
    {# addcategory popup #}
    <div class=\"modal-dialog modal-dialog-centered\">

        <div class=\"modal fade\" id=\"addcategory\" tabindex=\"-1\" aria-labelledby=\"addcategoryLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\" style=\"background-color: #fff5f3\">
                    <div class=\"modal-header\">
                        <h1 class=\"mb-2\" style=\"text-align: center\" id=\"addcategoryLabel\">Add a category</h1>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        {{ form_start( f_categorie) }}
                        <div class=\"row g-3\">
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    {{ form_widget(f_categorie.titre, {'attr': {'class': 'form-control border-0',
                                    'placeholder':
                                    'Title'}})
                                    }}
                                    {{ form_label(f_categorie.titre, 'Title') }}
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    {{ form_widget(f_categorie.description, {'attr': {'class': 'form-control border-0',
                                    'placeholder':
                                    'Description','style': 'height: 150px'}}) }}
                                    {{ form_label(f_categorie.description, 'Description') }}
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    {{ form_widget(f_categorie.image, {'attr': {'class': 'form-control border-0',
                                    'placeholder':
                                    'Category
                                    image'}}) }}
                                    {{ form_label(f_categorie.image, 'Category image') }}
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                {{ form_widget(f_categorie.save, {'attr': {'class': 'btn btn-primary w-100 py-3'}}) }}
                            </div>
                            <div class=\"col-sm-6\">
                                <button type=\"button\" class=\"btn btn-primary w-100 py-3\"
                                    data-bs-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                        {{ form_end(f_categorie) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {# end add_category pop up #}
</div>
{# sidbar end #}


{% endblock %}
", "Professeur/coursmanage.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Professeur\\coursmanage.html.twig");
    }
}
