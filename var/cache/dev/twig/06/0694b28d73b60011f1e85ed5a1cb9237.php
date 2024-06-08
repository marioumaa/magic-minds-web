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

/* Admin/cours/pdf.html.twig */
class __TwigTemplate_7a618592897d9a5aaaca850a1c64fd45 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/cours/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/cours/pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>

<body>
    <table style=\"width:100%; border:none\">
        <tr>
                <p style=\"margin-left: 20px ;\">";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 12, $this->source); })()), "Y-m-d H:i:s"), "html", null, true);
        echo "</p>
        </td>
        </tr>
        <tr>
            <td colspan=\"4\">
                <h2 style=\"text-align: center; color:#103741\">Classes Details</h2>
            </td>
        </tr>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 21
            echo "        <tr>
            <td colspan=\"3\">
                <table style=\"font-family: Arial, Helvetica, sans-serif;\">
                    <tr>
                        <td>Title :</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "titre", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <td>Description :</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "description", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <td>Number of courses :</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nbrCours", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <td>Number of chapitre :</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nbrChapitre", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan=\"4\">
                <table style=\"width: 100%;\" border=\"1 solid\">
                        <tr>
                            <th><h4>Title</h4></th>
                            <th><h4>Esteamed periode</h4></th>
                            <th><h4>Number of chapters</h4></th>
                        </tr>
                        ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 51, $this->source); })()), "getcourses", [twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 51)], "method", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["co"]) {
                // line 52
                echo "                        <tr>
                            <td align=\"center\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["co"], "titre", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
                            <td align=\"center\">";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["co"], "duree", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
                            <td align=\"center\">";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["co"], "nbChapitre", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['co'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                </table>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    </table>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Admin/cours/pdf.html.twig";
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
        return array (  148 => 62,  139 => 58,  130 => 55,  126 => 54,  122 => 53,  119 => 52,  115 => 51,  99 => 38,  92 => 34,  85 => 30,  78 => 26,  71 => 21,  67 => 20,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>

<body>
    <table style=\"width:100%; border:none\">
        <tr>
                <p style=\"margin-left: 20px ;\">{{date|date('Y-m-d H:i:s')}}</p>
        </td>
        </tr>
        <tr>
            <td colspan=\"4\">
                <h2 style=\"text-align: center; color:#103741\">Classes Details</h2>
            </td>
        </tr>
        {% for c in categories %}
        <tr>
            <td colspan=\"3\">
                <table style=\"font-family: Arial, Helvetica, sans-serif;\">
                    <tr>
                        <td>Title :</td>
                        <td>{{c.titre}}</td>
                    </tr>
                    <tr>
                        <td>Description :</td>
                        <td>{{c.description}}</td>
                    </tr>
                    <tr>
                        <td>Number of courses :</td>
                        <td>{{c.nbrCours}}</td>
                    </tr>
                    <tr>
                        <td>Number of chapitre :</td>
                        <td>{{c.nbrChapitre}}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan=\"4\">
                <table style=\"width: 100%;\" border=\"1 solid\">
                        <tr>
                            <th><h4>Title</h4></th>
                            <th><h4>Esteamed periode</h4></th>
                            <th><h4>Number of chapters</h4></th>
                        </tr>
                        {% for co in course.getcourses(c.id) %}
                        <tr>
                            <td align=\"center\">{{co.titre}}</td>
                            <td align=\"center\">{{co.duree}}</td>
                            <td align=\"center\">{{co.nbChapitre}}</td>
                        </tr>
                        {% endfor %}
                </table>
            </td>
        </tr>
        {% endfor %}
    </table>
</body>

</html>", "Admin/cours/pdf.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Admin\\cours\\pdf.html.twig");
    }
}
