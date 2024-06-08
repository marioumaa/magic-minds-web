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

/* Enfant/cours/_coursecontent.html.twig */
class __TwigTemplate_e7f005a048d39a5ea089206c1157ee0f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Enfant/cours/_coursecontent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Enfant/cours/_coursecontent.html.twig"));

        // line 1
        yield " <div class=\"row p-4\">
        ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["courslist"]) || array_key_exists("courslist", $context) ? $context["courslist"] : (function () { throw new RuntimeError('Variable "courslist" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 3
            yield "        <div style=\"margin-bottom:20px\" class=\"col-lg-4\">
            <a href=\"";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course.chapters", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cl"], "id", [], "any", false, false, false, 4)]), "html", null, true);
            yield "\">
                <div style=\"border: 2px solid #103741 ; border-radius: 20px ; width: 400px; height:200px ;\">
                    <table width=\"100%\">
                        <tr>
                            <td rowspan=\"2\"><h3 style=\"margin-left:20px; color:#369669 ;\" class=\"mb-1 mt-1\">";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cl"], "titre", [], "any", false, false, false, 8), "html", null, true);
            yield "</h3></td>
                            <td align=\"right\" ><h6 style=\"margin-right:20px;\" class=\"mb-1 mt-1\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cl"], "duree", [], "any", false, false, false, 9), "html", null, true);
            yield " semaines</h6></td>
                        </tr>
                        <tr>
                            <td align=\"right\" ><h6 style=\"margin-right:20px;\" class=\"mb-1 mt-1\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cl"], "nbChapitre", [], "any", false, false, false, 12), "html", null, true);
            yield " semaines</h6></td>
                        </tr>
                        <tr>
                            <td colspan=\"2\">
                                <p style=\"color:black ;margin:20px\" class=\"fs-7\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cl"], "description", [], "any", false, false, false, 16), "html", null, true);
            yield "</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </a>                                                               
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "    </div>
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
        return "Enfant/cours/_coursecontent.html.twig";
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
        return array (  92 => 24,  78 => 16,  71 => 12,  65 => 9,  61 => 8,  54 => 4,  51 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <div class=\"row p-4\">
        {% for cl in courslist %}
        <div style=\"margin-bottom:20px\" class=\"col-lg-4\">
            <a href=\"{{path('app_course.chapters',{'id':cl.id})}}\">
                <div style=\"border: 2px solid #103741 ; border-radius: 20px ; width: 400px; height:200px ;\">
                    <table width=\"100%\">
                        <tr>
                            <td rowspan=\"2\"><h3 style=\"margin-left:20px; color:#369669 ;\" class=\"mb-1 mt-1\">{{cl.titre}}</h3></td>
                            <td align=\"right\" ><h6 style=\"margin-right:20px;\" class=\"mb-1 mt-1\">{{cl.duree}} semaines</h6></td>
                        </tr>
                        <tr>
                            <td align=\"right\" ><h6 style=\"margin-right:20px;\" class=\"mb-1 mt-1\">{{cl.nbChapitre}} semaines</h6></td>
                        </tr>
                        <tr>
                            <td colspan=\"2\">
                                <p style=\"color:black ;margin:20px\" class=\"fs-7\">{{cl.description}}</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </a>                                                               
        </div>
        {% endfor %}
    </div>
", "Enfant/cours/_coursecontent.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Enfant\\cours\\_coursecontent.html.twig");
    }
}
