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

/* Admin/showproduct.html.twig */
class __TwigTemplate_ebc09d368420cd5f928b8e42aebe70be extends Template
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
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/showproduct.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/showproduct.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/showproduct.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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
        echo "    <div class=\"row\">
        <div class=\"col-12 grid-margin\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Order Status</h4>
                    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addproduct");
        echo "\">
                    <button type=\"button\" class=\"btn btn-danger btn-fw\">add</button></a>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>
                                    <div class=\"form-check form-check-muted m-0\">
                                        <label class=\"form-check-label\">
                                            <input
                                                    type=\"checkbox\"
                                                    class=\"form-check-input\"
                                            />
                                        </label>
                                    </div>
                                </th>
                                <th>product name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>remove</th>
                                <th>edit</th>
                                <th>show</th>

                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 35
            echo "                                <tr>
                                    <td>
                                        <div class=\"form-check form-check-muted m-0\">
                                            <label class=\"form-check-label\">
                                                <input
                                                        type=\"checkbox\"
                                                        class=\"form-check-input\"
                                                />
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <img
                                                src=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "img1", [], "any", false, false, false, 48), "html", null, true);
            echo "\"
                                                alt=\"image\" width=\"80px\"
                                                height=\"80px\"
                                        />
                                        <span class=\"pl-2\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nom", [], "any", false, false, false, 52), "html", null, true);
            echo "</span>
                                    </td>
                                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "quantite", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "prix", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_removeproduct", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-danger btn-fw\">del</button></a> </td>
                                    <td><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_updateproduct", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-primary btn-fw\">edit</button></a></td>
                                    <td><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detailsproduct", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-success btn-fw\">show</button></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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
        return "Admin/showproduct.html.twig";
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
        return array (  160 => 61,  151 => 58,  147 => 57,  143 => 56,  139 => 55,  135 => 54,  130 => 52,  123 => 48,  108 => 35,  104 => 34,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/base.html.twig' %}
{% block content %}
    <div class=\"row\">
        <div class=\"col-12 grid-margin\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Order Status</h4>
                    <a href=\"{{ path('app_addproduct') }}\">
                    <button type=\"button\" class=\"btn btn-danger btn-fw\">add</button></a>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>
                                    <div class=\"form-check form-check-muted m-0\">
                                        <label class=\"form-check-label\">
                                            <input
                                                    type=\"checkbox\"
                                                    class=\"form-check-input\"
                                            />
                                        </label>
                                    </div>
                                </th>
                                <th>product name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>remove</th>
                                <th>edit</th>
                                <th>show</th>

                            </tr>
                            </thead>
                            <tbody>
                            {% for i in produit %}
                                <tr>
                                    <td>
                                        <div class=\"form-check form-check-muted m-0\">
                                            <label class=\"form-check-label\">
                                                <input
                                                        type=\"checkbox\"
                                                        class=\"form-check-input\"
                                                />
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <img
                                                src=\"{{ i.img1 }}\"
                                                alt=\"image\" width=\"80px\"
                                                height=\"80px\"
                                        />
                                        <span class=\"pl-2\">{{ i.nom }}</span>
                                    </td>
                                    <td>{{ i.quantite }}</td>
                                    <td>{{ i.prix }}</td>
                                    <td><a href=\"{{ path('app_removeproduct',{'id':i.id}) }}\"><button type=\"button\" class=\"btn btn-danger btn-fw\">del</button></a> </td>
                                    <td><a href=\"{{ path('app_updateproduct',{'id':i.id}) }}\"><button type=\"button\" class=\"btn btn-primary btn-fw\">edit</button></a></td>
                                    <td><a href=\"{{ path('app_detailsproduct',{'id':i.id}) }}\"><button type=\"button\" class=\"btn btn-success btn-fw\">show</button></a></td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "Admin/showproduct.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Admin\\showproduct.html.twig");
    }
}
