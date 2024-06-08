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

/* Professeur/cours/showcat.html.twig */
class __TwigTemplate_968dfaa508efcd76046e2c0a8c407fe2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/cours/showcat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/cours/showcat.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "Professeur/cours/showcat.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

    // line 3
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<hr style=\"color: #103741; margin:0; padding:0\" />
<div class=\"container bg-white\" id=\"content\">
    <div class=\"row g-3 \">
        <div class=\"col-lg-6\">
            <h3 style=\"margin:50px;\">New Categories</h3>
        </div>
        <div class=\"col-lg-6 d-flex justify-content-end\">
            <a style=\"margin:50px; font-size:large\" class=\"btn btn-primary\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category.add");
        echo "\">New Category</a>
        </div>
    </div>
    <div class=\"row g-3 \">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["NewCategories"]) || array_key_exists("NewCategories", $context) ? $context["NewCategories"] : (function () { throw new RuntimeError('Variable "NewCategories" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 18
            echo "        <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\"
            style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;\">
            <div class=\"classes-item\">
                <div class=\"bg-light rounded-circle w-75 mx-auto p-3\">
                    <img class=\"img-fluid rounded-circle\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 22))), "html", null, true);
            echo "\" alt=\"\">
                </div>
                <div class=\"bg-light rounded p-4 pt-5 mt-n5 mb-3\">
                    <a class=\"d-block text-center h3 mt-3 mb-4\"
                        href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category.showbyid", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "titre", [], "any", false, false, false, 26), "html", null, true);
            echo "
                    </a>
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        <div style=\"height: 100px;\" class=\"d-flex align-items-center\">
                            <small style=\"text-align:justify;\" class=\"ms-3\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "description", [], "any", false, false, false, 30), "html", null, true);
            echo "</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </div>
    <hr style=\"color: #103741; margin: 12px; padding:0\" />
    <div class=\"row g-3\">
        <h3 style=\"margin:50px;\">All Categories</h3>
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 42
            echo "        <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\"
            style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;\">
            <div class=\"classes-item\">
                <div class=\"bg-light rounded-circle w-75 mx-auto p-3\">
                    <img class=\"img-fluid rounded-circle\" src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 46))), "html", null, true);
            echo "\" alt=\"\">
                </div>
                <div class=\"bg-light rounded p-4 pt-5 mt-n5 mb-3\">
                    <a class=\"d-block text-center h3 mt-3 mb-4\"
                        href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category.showbyid", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "titre", [], "any", false, false, false, 50), "html", null, true);
            echo "
                    </a>
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        <div style=\"height: 100px;\" class=\"d-flex align-items-center\">
                            <small style=\"text-align:justify;\" class=\"ms-3\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "description", [], "any", false, false, false, 54), "html", null, true);
            echo "</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Professeur/cours/showcat.html.twig";
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
        return array (  207 => 61,  194 => 54,  185 => 50,  178 => 46,  172 => 42,  168 => 41,  162 => 37,  149 => 30,  140 => 26,  133 => 22,  127 => 18,  123 => 17,  116 => 13,  107 => 6,  97 => 5,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}
{% block title %}Classes{% endblock %}
{% block navimg %}
{% endblock %}
{% block body %}
<hr style=\"color: #103741; margin:0; padding:0\" />
<div class=\"container bg-white\" id=\"content\">
    <div class=\"row g-3 \">
        <div class=\"col-lg-6\">
            <h3 style=\"margin:50px;\">New Categories</h3>
        </div>
        <div class=\"col-lg-6 d-flex justify-content-end\">
            <a style=\"margin:50px; font-size:large\" class=\"btn btn-primary\" href=\"{{path('category.add')}}\">New Category</a>
        </div>
    </div>
    <div class=\"row g-3 \">
        {% for c in NewCategories %}
        <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\"
            style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;\">
            <div class=\"classes-item\">
                <div class=\"bg-light rounded-circle w-75 mx-auto p-3\">
                    <img class=\"img-fluid rounded-circle\" src=\"{{asset('uploads/images/' ~ c.image)}}\" alt=\"\">
                </div>
                <div class=\"bg-light rounded p-4 pt-5 mt-n5 mb-3\">
                    <a class=\"d-block text-center h3 mt-3 mb-4\"
                        href=\"{{path('category.showbyid',{'id':c.id})}}\">{{c.titre}}
                    </a>
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        <div style=\"height: 100px;\" class=\"d-flex align-items-center\">
                            <small style=\"text-align:justify;\" class=\"ms-3\">{{c.description}}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
    <hr style=\"color: #103741; margin: 12px; padding:0\" />
    <div class=\"row g-3\">
        <h3 style=\"margin:50px;\">All Categories</h3>
        {% for c in categorie %}
        <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\"
            style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;\">
            <div class=\"classes-item\">
                <div class=\"bg-light rounded-circle w-75 mx-auto p-3\">
                    <img class=\"img-fluid rounded-circle\" src=\"{{asset('uploads/images/' ~ c.image)}}\" alt=\"\">
                </div>
                <div class=\"bg-light rounded p-4 pt-5 mt-n5 mb-3\">
                    <a class=\"d-block text-center h3 mt-3 mb-4\"
                        href=\"{{path('category.showbyid',{'id':c.id})}}\">{{c.titre}}
                    </a>
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        <div style=\"height: 100px;\" class=\"d-flex align-items-center\">
                            <small style=\"text-align:justify;\" class=\"ms-3\">{{c.description}}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>
{% endblock %}", "Professeur/cours/showcat.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Professeur\\cours\\showcat.html.twig");
    }
}
