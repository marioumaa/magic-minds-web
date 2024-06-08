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

/* Professeur/cours/addchapter.html.twig */
class __TwigTemplate_16e5f572864c2e6201ab520268ae3953 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/cours/addchapter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/cours/addchapter.html.twig"));

        // line 1
        yield "<h1>Adding a new product</h1>

";
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f_ressource"]) || array_key_exists("f_ressource", $context) ? $context["f_ressource"] : (function () { throw new RuntimeError('Variable "f_ressource" does not exist.', 3, $this->source); })()), 'form_start');
        yield "
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f_ressource"]) || array_key_exists("f_ressource", $context) ? $context["f_ressource"] : (function () { throw new RuntimeError('Variable "f_ressource" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), 'row');
        yield "
    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f_ressource"]) || array_key_exists("f_ressource", $context) ? $context["f_ressource"] : (function () { throw new RuntimeError('Variable "f_ressource" does not exist.', 5, $this->source); })()), "type", [], "any", false, false, false, 5), 'row');
        yield "
    ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f_ressource"]) || array_key_exists("f_ressource", $context) ? $context["f_ressource"] : (function () { throw new RuntimeError('Variable "f_ressource" does not exist.', 6, $this->source); })()), "file", [], "any", false, false, false, 6), 'row');
        yield "
    ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f_ressource"]) || array_key_exists("f_ressource", $context) ? $context["f_ressource"] : (function () { throw new RuntimeError('Variable "f_ressource" does not exist.', 7, $this->source); })()), "idCours", [], "any", false, false, false, 7), 'row');
        yield "
    ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f_ressource"]) || array_key_exists("f_ressource", $context) ? $context["f_ressource"] : (function () { throw new RuntimeError('Variable "f_ressource" does not exist.', 8, $this->source); })()), "save", [], "any", false, false, false, 8), 'row');
        yield "
";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f_ressource"]) || array_key_exists("f_ressource", $context) ? $context["f_ressource"] : (function () { throw new RuntimeError('Variable "f_ressource" does not exist.', 9, $this->source); })()), 'form_end');
        yield "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Professeur/cours/addchapter.html.twig";
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
        return array (  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Adding a new product</h1>

{{ form_start(f_ressource) }}
    {{ form_row(f_ressource.titre) }}
    {{ form_row(f_ressource.type) }}
    {{ form_row(f_ressource.file) }}
    {{ form_row(f_ressource.idCours) }}
    {{ form_row(f_ressource.save) }}
{{ form_end(f_ressource) }}

", "Professeur/cours/addchapter.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Professeur\\cours\\addchapter.html.twig");
    }
}
