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

/* Professeur/coursmanage.html.twig */
class __TwigTemplate_8b50f28c114a231d4149b30cd5541b20 extends Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        echo "Classes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "
<hr style=\"color: #103741; margin:0%\">
";
        // line 10
        echo "<div style=\"width: 280px; \" class=\"d-flex flex-column flex-shrink-0 bg-light p-3 mb-0\" >
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
        echo "                <button type=\"button\" class=\"btn btn-primary\" style=\"border-radius: 50%;\" data-bs-toggle=\"modal\"
                    data-bs-target=\"#addcategory\">
                    +
                </button>
                ";
        // line 25
        echo "            </td>
        </tr>
    </table>
    <hr style=\"color: #ffffff\">
    <ul class=\"nav nav-pills flex-column mb-auto\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 31
            echo "        <li class=\"nav-item\">
            <a href=\"#\"  class=\"nav-link \" aria-current=\"page\">
                ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "titre", [], "any", false, false, false, 33), "html", null, true);
            echo "
            </a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </ul>
    ";
        // line 39
        echo "    <div class=\"modal-dialog modal-dialog-centered\">

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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 49, $this->source); })()), 'form_start');
        echo "
                        <div class=\"row g-3\">
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 53, $this->source); })()), "titre", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control border-0", "placeholder" => "Title"]]);
        // line 56
        echo "
                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 57, $this->source); })()), "titre", [], "any", false, false, false, 57), 'label', ["label" => "Title"]);
        echo "
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 62, $this->source); })()), "description", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control border-0", "placeholder" => "Description", "style" => "height: 150px"]]);
        // line 64
        echo "
                                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 65, $this->source); })()), "description", [], "any", false, false, false, 65), 'label', ["label" => "Description"]);
        echo "
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 70, $this->source); })()), "image", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control border-0", "placeholder" => "Category
                                    image"]]);
        // line 73
        echo "
                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 74, $this->source); })()), "image", [], "any", false, false, false, 74), 'label', ["label" => "Category image"]);
        echo "
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 78, $this->source); })()), "save", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "btn btn-primary w-100 py-3"]]);
        echo "
                            </div>
                            <div class=\"col-sm-6\">
                                <button type=\"button\" class=\"btn btn-primary w-100 py-3\"
                                    data-bs-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                        ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f_categorie"]) || array_key_exists("f_categorie", $context) ? $context["f_categorie"] : (function () { throw new RuntimeError('Variable "f_categorie" does not exist.', 85, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 92
        echo "</div>
";
        // line 94
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  236 => 94,  233 => 92,  224 => 85,  214 => 78,  207 => 74,  204 => 73,  201 => 70,  193 => 65,  190 => 64,  188 => 62,  180 => 57,  177 => 56,  175 => 53,  168 => 49,  156 => 39,  153 => 37,  143 => 33,  139 => 31,  135 => 30,  128 => 25,  122 => 20,  111 => 10,  107 => 7,  97 => 6,  79 => 4,  60 => 3,  37 => 1,);
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
", "Professeur/coursmanage.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Professeur\\coursmanage.html.twig");
    }
}
