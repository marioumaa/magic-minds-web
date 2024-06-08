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

/* Professeur/cours/Courcebycat.html.twig */
class __TwigTemplate_1a08f4c7ec51d57559c92324f7acc621 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/cours/Courcebycat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/cours/Courcebycat.html.twig"));

        $this->parent = $this->loadTemplate("Professeur/cours/courcemanage.html.twig", "Professeur/cours/Courcebycat.html.twig", 1);
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
        <div style=\"text-align:center;\" class=\"col-lg-2 justify-content-center pt-1 \">
          <img width=\"130px\" height=\"130px\" src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 9, $this->source); })()), "image", [], "any", false, false, false, 9))), "html", null, true);
        yield "\" alt=\"\">
        </div>
        <div class=\"col-lg-8\">
          <h1 class=\"p-2\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 12, $this->source); })()), "titre", [], "any", false, false, false, 12), "html", null, true);
        yield "</h1>
          <p style=\"margin-left:10px;\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13), "html", null, true);
        yield "</p>
        </div>
        <div style=\"padding: 10px;\" class=\"col-lg-1\">
          <a style=\"margin:10px;\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_editcategorie", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        yield "\"><i
              class=\"bi fa-2x bi-pen \"></i></a>
        </div>
        <div style=\"padding: 10px;\" class=\"col-lg-1\">
          <a style=\"margin: 10px;\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deletecategorie", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
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
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 29, $this->source); })()), "titre", [], "any", false, false, false, 29), "html", null, true);
        yield " courses list</h5>
    </div>
    <div class=\"col-lg-6 d-flex justify-content-end\">
      <a style=\"margin-right: 10px;\" class=\"btn btn-primary\" href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof.cours.add");
        yield "\">Add a course</a>
    </div>
    <hr style=\"margin-top:5px;\">
    <div class=\"row\">
      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 36, $this->source); })()), "getcourses", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 37
            yield "      <div style=\"margin-bottom:20px\" class=\"col-lg-3 d-flex justify-content-center\">
        <a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prof.course.chapters", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cl"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\">
          <div style=\"border: 2px solid #103741 ; border-radius: 20px ; width:  200px; height:100px ;\">
            <div class=\"row\">
              <h4 style=\"margin-left:20px; color:#369669 ;\" class=\"mb-1 mt-1\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cl"], "titre", [], "any", false, false, false, 41), "html", null, true);
            yield "</h4>
              <h6 style=\"margin-left:20px;\" class=\"mb-1 mt-1\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cl"], "duree", [], "any", false, false, false, 42), "html", null, true);
            yield " semaines</h6>
              <h6 style=\"margin-left:20px;\" class=\"mb-1 mt-1\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cl"], "nbChapitre", [], "any", false, false, false, 43), "html", null, true);
            yield " chapitre</h6>
            </div>
          </div>
        </a>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "    </div>
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
        return "Professeur/cours/Courcebycat.html.twig";
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
        return array (  158 => 49,  146 => 43,  142 => 42,  138 => 41,  132 => 38,  129 => 37,  125 => 36,  118 => 32,  112 => 29,  100 => 20,  93 => 16,  87 => 13,  83 => 12,  77 => 9,  69 => 3,  59 => 2,  36 => 1,);
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
        <div style=\"text-align:center;\" class=\"col-lg-2 justify-content-center pt-1 \">
          <img width=\"130px\" height=\"130px\" src=\"{{asset('uploads/images/' ~ categorie.image)}}\" alt=\"\">
        </div>
        <div class=\"col-lg-8\">
          <h1 class=\"p-2\">{{categorie.titre}}</h1>
          <p style=\"margin-left:10px;\">{{categorie.description}}</p>
        </div>
        <div style=\"padding: 10px;\" class=\"col-lg-1\">
          <a style=\"margin:10px;\" href=\"{{path('app_editcategorie',{'id':categorie.id})}}\"><i
              class=\"bi fa-2x bi-pen \"></i></a>
        </div>
        <div style=\"padding: 10px;\" class=\"col-lg-1\">
          <a style=\"margin: 10px;\" href=\"{{path('app_deletecategorie',{'id':categorie.id})}}\"><i
              class=\"bi fa-2x bi-trash\"></i></a>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class=\"row mt-3\">
    <div class=\"col-lg-6\">
      <h5 class=\"mb-1\">{{categorie.titre}} courses list</h5>
    </div>
    <div class=\"col-lg-6 d-flex justify-content-end\">
      <a style=\"margin-right: 10px;\" class=\"btn btn-primary\" href=\"{{path('prof.cours.add')}}\">Add a course</a>
    </div>
    <hr style=\"margin-top:5px;\">
    <div class=\"row\">
      {% for cl in course.getcourses(categorie.id) %}
      <div style=\"margin-bottom:20px\" class=\"col-lg-3 d-flex justify-content-center\">
        <a href=\"{{path('app_prof.course.chapters',{'id':cl.id})}}\">
          <div style=\"border: 2px solid #103741 ; border-radius: 20px ; width:  200px; height:100px ;\">
            <div class=\"row\">
              <h4 style=\"margin-left:20px; color:#369669 ;\" class=\"mb-1 mt-1\">{{cl.titre}}</h4>
              <h6 style=\"margin-left:20px;\" class=\"mb-1 mt-1\">{{cl.duree}} semaines</h6>
              <h6 style=\"margin-left:20px;\" class=\"mb-1 mt-1\">{{cl.nbChapitre}} chapitre</h6>
            </div>
          </div>
        </a>
      </div>
      {% endfor %}
    </div>
  </div>
</div>
{% endblock %}", "Professeur/cours/Courcebycat.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Professeur\\cours\\Courcebycat.html.twig");
    }
}
