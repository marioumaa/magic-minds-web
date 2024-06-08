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

/* Professeur/cours/showchap.html.twig */
class __TwigTemplate_2212e3379e832e5118aef37b2c9aad78 extends Template
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
        return "Professeur/cours/courcemanage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/cours/showchap.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/cours/showchap.html.twig"));

        $this->parent = $this->loadTemplate("Professeur/cours/courcemanage.html.twig", "Professeur/cours/showchap.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        yield "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"row\"
                style=\"border: 2px solid #103741; border-radius: 20px ; width: 100%; height:150px ; margin-top:20px\">
                <div class=\"col-lg-10\">
                    <h1 class=\"p-2\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>
                    <p style=\"margin-left:10px;\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 10, $this->source); })()), "description", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
                </div>
                <div style=\"padding: 10px;\" class=\"col-lg-1\">
                    <a style=\"margin:10px;\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof.cours.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        yield "\"><i
                            class=\"bi fa-2x bi-pen \"></i></a>
                </div>
                <div style=\"padding: 10px;\" class=\"col-lg-1\">
                    <a style=\"margin: 10px;\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof.cours.delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        yield "\"><i
                            class=\"bi fa-2x bi-trash\"></i></a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class=\"row mt-3\">
        <div class=\"col-lg-6\">
            <h5 class=\"mb-1\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 26, $this->source); })()), "titre", [], "any", false, false, false, 26), "html", null, true);
        yield " chapters</h5>
        </div>
        <div class=\"col-lg-6 d-flex justify-content-end\">
            <a style=\"margin-right:10px;\" class=\"btn btn-primary\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ressource.add");
        yield "\">Add a
                chapter</a>
        </div>

        <div style=\"padding-right:2%\" class=\"row pt-3\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ress"]) || array_key_exists("ress", $context) ? $context["ress"] : (function () { throw new RuntimeError('Variable "ress" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 35
            yield "            <div style=\"margin-bottom:20px\" class=\"col-lg-4\">
                <div style=\"border: 2px solid #103741; border-radius: 20px ; width:100%; height:100px ;\">
                    <table width=\"100%\">
                        <tr>
                            <td align=\"center\">
                                <h4 class=\" text-success\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "titre", [], "any", false, false, false, 40), "html", null, true);
            yield "</h4>
                            </td>
                            <td align=\"center\">
                                <a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ressourced", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\">
                                    <div><img width=\"100px\" height=\"100px\"
                                            src=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./asset/User/img/file.png"), "html", null, true);
            yield "\">
                                    </div>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                </a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "        </div>
    </div>
</div>
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
        return "Professeur/cours/showchap.html.twig";
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
        return array (  158 => 55,  142 => 45,  137 => 43,  131 => 40,  124 => 35,  120 => 34,  112 => 29,  106 => 26,  94 => 17,  87 => 13,  81 => 10,  77 => 9,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Professeur/cours/courcemanage.html.twig' %}
{% block content %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"row\"
                style=\"border: 2px solid #103741; border-radius: 20px ; width: 100%; height:150px ; margin-top:20px\">
                <div class=\"col-lg-10\">
                    <h1 class=\"p-2\">{{course.titre}}</h1>
                    <p style=\"margin-left:10px;\">{{course.description}}</p>
                </div>
                <div style=\"padding: 10px;\" class=\"col-lg-1\">
                    <a style=\"margin:10px;\" href=\"{{path('prof.cours.edit',{'id':course.id})}}\"><i
                            class=\"bi fa-2x bi-pen \"></i></a>
                </div>
                <div style=\"padding: 10px;\" class=\"col-lg-1\">
                    <a style=\"margin: 10px;\" href=\"{{path('prof.cours.delete',{'id':course.id})}}\"><i
                            class=\"bi fa-2x bi-trash\"></i></a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class=\"row mt-3\">
        <div class=\"col-lg-6\">
            <h5 class=\"mb-1\">{{course.titre}} chapters</h5>
        </div>
        <div class=\"col-lg-6 d-flex justify-content-end\">
            <a style=\"margin-right:10px;\" class=\"btn btn-primary\" href=\"{{path('app_ressource.add')}}\">Add a
                chapter</a>
        </div>

        <div style=\"padding-right:2%\" class=\"row pt-3\">
            {% for r in ress %}
            <div style=\"margin-bottom:20px\" class=\"col-lg-4\">
                <div style=\"border: 2px solid #103741; border-radius: 20px ; width:100%; height:100px ;\">
                    <table width=\"100%\">
                        <tr>
                            <td align=\"center\">
                                <h4 class=\" text-success\">{{r.titre}}</h4>
                            </td>
                            <td align=\"center\">
                                <a href=\"{{ path('app_ressourced', {'id': r.id}) }}\">
                                    <div><img width=\"100px\" height=\"100px\"
                                            src=\"{{ asset('./asset/User/img/file.png') }}\">
                                    </div>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                </a>
            </div>
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}", "Professeur/cours/showchap.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Professeur\\cours\\showchap.html.twig");
    }
}
