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

/* Visiteur/_serachcontent.html.twig */
class __TwigTemplate_d1268074ac06325f95a80b3a08a7948d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Visiteur/_serachcontent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Visiteur/_serachcontent.html.twig"));

        // line 1
        yield "<div class=\"row g-4\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 3
            yield "    <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\"
        style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;\">
        <div class=\"classes-item\">
            <div class=\"bg-light rounded-circle w-75 mx-auto p-3\">
                <img class=\"img-fluid rounded-circle\" src=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 7))), "html", null, true);
            yield "\" alt=\"\">
            </div>
            <div class=\"bg-light rounded p-4 pt-5 mt-n5 mb-3\">
                <a class=\"d-block text-center h3 mt-3 mb-4\" href=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enfant.cources", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 10)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "titre", [], "any", false, false, false, 10), "html", null, true);
            yield "
                </a>
                <div class=\"d-flex align-items-center justify-content-between mb-4\">
                    <div style=\"height: 100px;\" class=\"d-flex align-items-center\">
                            <small style=\"text-align:justify;\" class=\"ms-3\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "description", [], "any", false, false, false, 14), "html", null, true);
            yield "</small>
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
        // line 21
        yield "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Visiteur/_serachcontent.html.twig";
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
        return array (  85 => 21,  72 => 14,  63 => 10,  57 => 7,  51 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row g-4\">
    {% for c in categories %}
    <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\"
        style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;\">
        <div class=\"classes-item\">
            <div class=\"bg-light rounded-circle w-75 mx-auto p-3\">
                <img class=\"img-fluid rounded-circle\" src=\"{{asset('uploads/images/' ~ c.image)}}\" alt=\"\">
            </div>
            <div class=\"bg-light rounded p-4 pt-5 mt-n5 mb-3\">
                <a class=\"d-block text-center h3 mt-3 mb-4\" href=\"{{path('enfant.cources',{'id':c.id})}}\">{{c.titre}}
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
</div>", "Visiteur/_serachcontent.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Visiteur\\_serachcontent.html.twig");
    }
}
