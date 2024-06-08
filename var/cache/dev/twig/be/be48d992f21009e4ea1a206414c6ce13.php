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

/* Admin/UserManagement/ParentUserDetails.html.twig */
class __TwigTemplate_ea9be53b5c8a36201362d0d013022165 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/UserManagement/ParentUserDetails.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/UserManagement/ParentUserDetails.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/UserManagement/ParentUserDetails.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "      <div class=\"col-sm-2\">
      <a class=\"btn bgOrange blColor w-100 py-3 mb-2\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.add");
        echo "\">Add User</a>
      </div>
      <section class=\"container\" style=\"background-color: #eee;\">
          ";
        // line 9
        if (array_key_exists("users", $context)) {
            // line 10
            echo "              <table class=\"table\">
                  <thead>
                  <tr>
                      <th scope=\"col\">#</th>
                      <th scope=\"col\">FirstName</th>
                      <th scope=\"col\">LastName</th>
                      <th scope=\"col\">Gender</th>
                      <th scope=\"col\">Age</th>
                      <th scope=\"col\">email</th>
                      <th scope=\"col\">Delete</th>
                      <th scope=\"col\">Update</th>
                      <th scope=\"col\">details</th>
                  </tr>
                  </thead>
                  ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 25
                echo "                  <tbody>
                  <tr>
                       <td></td>
                          <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "firstName", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                      <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "lastName", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                      <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "gender", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                      <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "age", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                          <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "email", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>

                      <td><a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\"><i class=\"fa-solid fa-trash\"></i></a></td>
                      <td><a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.add", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\"><i class=\"fa-solid fa-pen-to-square\"></i></a></td>
                      <td><a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.show", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\"> <i class=\"fa-solid fa-compact-disc\"></i></a></td>
                  </tr>
                  </tbody>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
              </table>
          ";
        } else {
            // line 43
            echo "              <h1 style=\"color:red;\">no user now </h1>

          ";
        }
        // line 46
        echo "

";
        // line 66
        echo "
";
        // line 68
        echo "
";
        // line 70
        echo "
";
        // line 74
        echo "
";
        // line 76
        echo "      </section>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Admin/UserManagement/ParentUserDetails.html.twig";
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
        return array (  169 => 76,  166 => 74,  163 => 70,  160 => 68,  157 => 66,  153 => 46,  148 => 43,  143 => 40,  133 => 36,  129 => 35,  125 => 34,  120 => 32,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  99 => 25,  95 => 24,  79 => 10,  77 => 9,  71 => 6,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/base.html.twig' %}


  {% block content %}
      <div class=\"col-sm-2\">
      <a class=\"btn bgOrange blColor w-100 py-3 mb-2\" href=\"{{ path('user.add') }}\">Add User</a>
      </div>
      <section class=\"container\" style=\"background-color: #eee;\">
          {% if users is defined %}
              <table class=\"table\">
                  <thead>
                  <tr>
                      <th scope=\"col\">#</th>
                      <th scope=\"col\">FirstName</th>
                      <th scope=\"col\">LastName</th>
                      <th scope=\"col\">Gender</th>
                      <th scope=\"col\">Age</th>
                      <th scope=\"col\">email</th>
                      <th scope=\"col\">Delete</th>
                      <th scope=\"col\">Update</th>
                      <th scope=\"col\">details</th>
                  </tr>
                  </thead>
                  {% for i in users %}
                  <tbody>
                  <tr>
                       <td></td>
                          <td>{{ i.firstName }}</td>
                      <td>{{ i.lastName }}</td>
                      <td>{{ i.gender }}</td>
                      <td>{{ i.age }}</td>
                          <td>{{ i.email }}</td>

                      <td><a href=\"{{ path('user.delete',{'id': i.id}) }}\"><i class=\"fa-solid fa-trash\"></i></a></td>
                      <td><a href=\"{{ path('user.add',{'id': i.id}) }}\"><i class=\"fa-solid fa-pen-to-square\"></i></a></td>
                      <td><a href=\"{{ path('user.show',{'id': i.id}) }}\"> <i class=\"fa-solid fa-compact-disc\"></i></a></td>
                  </tr>
                  </tbody>
                  {% endfor %}

              </table>
          {% else %}
              <h1 style=\"color:red;\">no user now </h1>

          {% endif %}


{#          {% if users is defined %}#}
{#          {% for i in users %}#}
{#              <div class=\"row\">#}
{#                  <div class=\"col-lg-4\">#}
{#                      <div class=\"card mb-4\">#}
{#                          <div class=\"card-body text-center\">#}
{#                              <img src=\"{{ asset('uploads/user/')~i.picture }}\" alt=\"avatar\"#}
{#                                   class=\"rounded-circle img-fluid\" style=\"width: 150px;\">#}
{#                              <img class=\"rounded-circle\" width=\"50\" height=\"50\" src=\"{{ asset('uploads/user/')~i.picture }}\">#}
{#                              <h5 class=\"my-3\">{{ i.firstName }}  {{ i.lastName }}</h5>#}
{#                              <p class=\"text-muted mb-1\">{{ i.gender }}</p>#}
{#                              <p class=\"text-muted mb-4\">{{ i.email }}</p>#}
{#                              <div class=\"d-flex justify-content-center mb-2\">#}
{#                                 <a class=\"btn btn-primary\" href=\"{{ path('user.delete',{'id': i.id}) }}\">Delete</a>#}
{#                                 <a class=\"btn btn-outline-primary ms-1\" href=\"{{ path('user.add',{'id': i.id}) }}\">Update</a>#}
{#                              </div>#}
{#                          </div>#}
{#                      </div>#}

{#                  </div>#}

{#              </div>#}

{#          {% endfor %}#}
{#          {% else %}#}
{#              <h1 style=\"color:red;\">no user now </h1>#}

{#          {% endif %}#}
      </section>
  {% endblock %}", "Admin/UserManagement/ParentUserDetails.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Admin\\UserManagement\\ParentUserDetails.html.twig");
    }
}
