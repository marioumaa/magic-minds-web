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

/* Admin/UserManagement/ParentUserShow.html.twig */
class __TwigTemplate_cc1b6e91f92089e655bb06f1723b08c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/UserManagement/ParentUserShow.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/UserManagement/ParentUserShow.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/UserManagement/ParentUserShow.html.twig", 1);
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
        echo "
      <div class=\"container\">
          <div class=\"main-body\">

              <!-- Breadcrumb -->
              <nav aria-label=\"breadcrumb\" class=\"main-breadcrumb\">
                  <ol class=\"breadcrumb\">

                      <li class=\"breadcrumb-item active\" aria-current=\"page\">User Profile</li>
                  </ol>
              </nav>
              <!-- /Breadcrumb -->

              <div class=\"row gutters-sm\">
                  <div class=\"col-md-4 mb-3\">
                      <div class=\"card\">
                          <div class=\"card-body\">
                              <div class=\"d-flex flex-column align-items-center text-center\">
                                  <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/user/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "picture", [], "any", false, false, false, 23)), "html", null, true);
        echo "\" alt=\"Admin\" class=\"rounded-circle\" width=\"150\">
                                  <div class=\"mt-3\">
                                      <h4>John Doe</h4>
                                      <p class=\"text-secondary mb-1\"> ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "firstname", [], "any", false, false, false, 26), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "lastname", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
                                      <p class=\"text-muted font-size-sm\"> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "tel", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>

                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
                  <div class=\"col-md-8\">
                      <div class=\"card mb-3\">
                          <div class=\"card-body\">
                              <div class=\"row\">
                                  <div class=\"col-sm-3\">
                                      <h6 class=\"mb-0\">FIrstName</h6>
                                  </div>
                                  <div class=\"col-sm-9 text-secondary\">
                                     ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "firstname", [], "any", false, false, false, 43), "html", null, true);
        echo "
                                  </div>
                              </div>
                              <hr>
                              <div class=\"row\">
                                  <div class=\"col-sm-3\">
                                      <h6 class=\"mb-0\">LastName</h6>
                                  </div>
                                  <div class=\"col-sm-9 text-secondary\">
                                      ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "lastname", [], "any", false, false, false, 52), "html", null, true);
        echo "
                                  </div>
                              </div>
                              <hr>
                              <div class=\"row\">
                                  <div class=\"col-sm-3\">
                                      <h6 class=\"mb-0\">Email</h6>
                                  </div>
                                  <div class=\"col-sm-9 text-secondary\">
                                      ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), "html", null, true);
        echo "
                                  </div>
                              </div>
                              <hr>
                              <div class=\"row\">
                                  <div class=\"col-sm-3\">
                                      <h6 class=\"mb-0\">Mobile</h6>
                                  </div>
                                  <div class=\"col-sm-9 text-secondary\">
                                      ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "tel", [], "any", false, false, false, 70), "html", null, true);
        echo "
                                  </div>
                              </div>
                              <hr>
                              <div class=\"row\">
                                  <div class=\"col-sm-3\">
                                      <h6 class=\"mb-0\">Age</h6>
                                  </div>
                                  <div class=\"col-sm-9 text-secondary\">
                                      ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "age", [], "any", false, false, false, 79), "html", null, true);
        echo "
                                  </div>
                              </div>
                              <hr>

                              <div class=\"row\">
                                  <div class=\"col-sm-3\">
                                      <h6 class=\"mb-0\">Gender</h6>
                                  </div>
                                  <div class=\"col-sm-9 text-secondary\">
                                      ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "gender", [], "any", false, false, false, 89), "html", null, true);
        echo "
                                  </div>
                              </div>
                              <hr>
                              <div class=\"row\">
                                  <div class=\"col-sm-12\">
                                      <a class=\"btn btn-info \" target=\"__blank\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95)]), "html", null, true);
        echo "\">Edit</a>
                                  </div>
                              </div>
                          </div>
                      </div>




                  </div>
              </div>

          </div>


      ";
        // line 163
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Admin/UserManagement/ParentUserShow.html.twig";
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
        return array (  207 => 163,  189 => 95,  180 => 89,  167 => 79,  155 => 70,  143 => 61,  131 => 52,  119 => 43,  100 => 27,  94 => 26,  88 => 23,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/base.html.twig' %}


  {% block content %}

      <div class=\"container\">
          <div class=\"main-body\">

              <!-- Breadcrumb -->
              <nav aria-label=\"breadcrumb\" class=\"main-breadcrumb\">
                  <ol class=\"breadcrumb\">

                      <li class=\"breadcrumb-item active\" aria-current=\"page\">User Profile</li>
                  </ol>
              </nav>
              <!-- /Breadcrumb -->

              <div class=\"row gutters-sm\">
                  <div class=\"col-md-4 mb-3\">
                      <div class=\"card\">
                          <div class=\"card-body\">
                              <div class=\"d-flex flex-column align-items-center text-center\">
                                  <img src=\"{{ asset('uploads/user/')~user.picture }}\" alt=\"Admin\" class=\"rounded-circle\" width=\"150\">
                                  <div class=\"mt-3\">
                                      <h4>John Doe</h4>
                                      <p class=\"text-secondary mb-1\"> {{ user.firstname }} {{ user.lastname }}</p>
                                      <p class=\"text-muted font-size-sm\"> {{ user.tel }}</p>

                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
                  <div class=\"col-md-8\">
                      <div class=\"card mb-3\">
                          <div class=\"card-body\">
                              <div class=\"row\">
                                  <div class=\"col-sm-3\">
                                      <h6 class=\"mb-0\">FIrstName</h6>
                                  </div>
                                  <div class=\"col-sm-9 text-secondary\">
                                     {{ user.firstname }}
                                  </div>
                              </div>
                              <hr>
                              <div class=\"row\">
                                  <div class=\"col-sm-3\">
                                      <h6 class=\"mb-0\">LastName</h6>
                                  </div>
                                  <div class=\"col-sm-9 text-secondary\">
                                      {{ user.lastname }}
                                  </div>
                              </div>
                              <hr>
                              <div class=\"row\">
                                  <div class=\"col-sm-3\">
                                      <h6 class=\"mb-0\">Email</h6>
                                  </div>
                                  <div class=\"col-sm-9 text-secondary\">
                                      {{ user.email }}
                                  </div>
                              </div>
                              <hr>
                              <div class=\"row\">
                                  <div class=\"col-sm-3\">
                                      <h6 class=\"mb-0\">Mobile</h6>
                                  </div>
                                  <div class=\"col-sm-9 text-secondary\">
                                      {{ user.tel }}
                                  </div>
                              </div>
                              <hr>
                              <div class=\"row\">
                                  <div class=\"col-sm-3\">
                                      <h6 class=\"mb-0\">Age</h6>
                                  </div>
                                  <div class=\"col-sm-9 text-secondary\">
                                      {{ user.age }}
                                  </div>
                              </div>
                              <hr>

                              <div class=\"row\">
                                  <div class=\"col-sm-3\">
                                      <h6 class=\"mb-0\">Gender</h6>
                                  </div>
                                  <div class=\"col-sm-9 text-secondary\">
                                      {{ user.gender}}
                                  </div>
                              </div>
                              <hr>
                              <div class=\"row\">
                                  <div class=\"col-sm-12\">
                                      <a class=\"btn btn-info \" target=\"__blank\" href=\"{{ path('user.add',{'id': user.id}) }}\">Edit</a>
                                  </div>
                              </div>
                          </div>
                      </div>




                  </div>
              </div>

          </div>


      {#      <section class=\"vh-100\" style=\"background-color: #f4f5f7;\">#}
{#          <div class=\"container py-5 h-100\">#}
{#              <div class=\"row d-flex justify-content-center align-items-center h-100\">#}
{#                  <div class=\"col col-lg-6 mb-4 mb-lg-0\">#}
{#                      <div class=\"card mb-3\" style=\"border-radius: .5rem;\">#}
{#                          <div class=\"row g-0\">#}
{#                              <div class=\"col-md-4 gradient-custom text-center text-white\"#}
{#                                   style=\"border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;\">#}
{#                                  <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp\"#}
{#                                       alt=\"Avatar\" class=\"img-fluid my-5\" style=\"width: 80px;\" />#}
{#                                  <h5>Marie Horwitz</h5>#}
{#                                  <p>Web Designer</p>#}
{#                                  <i class=\"far fa-edit mb-5\"></i>#}
{#                              </div>#}
{#                              <div class=\"col-md-8\">#}
{#                                  <div class=\"card-body p-4\">#}
{#                                      <h6>Information</h6>#}
{#                                      <hr class=\"mt-0 mb-4\">#}
{#                                      <div class=\"row pt-1\">#}
{#                                          <div class=\"col-6 mb-3\">#}
{#                                              <h6>Email</h6>#}
{#                                              <p class=\"text-muted\">info@example.com</p>#}
{#                                          </div>#}
{#                                          <div class=\"col-6 mb-3\">#}
{#                                              <h6>Phone</h6>#}
{#                                              <p class=\"text-muted\">123 456 789</p>#}
{#                                          </div>#}
{#                                      </div>#}
{#                                      <h6>Projects</h6>#}
{#                                      <hr class=\"mt-0 mb-4\">#}
{#                                      <div class=\"row pt-1\">#}
{#                                          <div class=\"col-6 mb-3\">#}
{#                                              <h6>Recent</h6>#}
{#                                              <p class=\"text-muted\">Lorem ipsum</p>#}
{#                                          </div>#}
{#                                          <div class=\"col-6 mb-3\">#}
{#                                              <h6>Most Viewed</h6>#}
{#                                              <p class=\"text-muted\">Dolor sit amet</p>#}
{#                                          </div>#}
{#                                      </div>#}
{#                                      <div class=\"d-flex justify-content-start\">#}
{#                                          <a href=\"#!\"><i class=\"fab fa-facebook-f fa-lg me-3\"></i></a>#}
{#                                          <a href=\"#!\"><i class=\"fab fa-twitter fa-lg me-3\"></i></a>#}
{#                                          <a href=\"#!\"><i class=\"fab fa-instagram fa-lg\"></i></a>#}
{#                                      </div>#}
{#                                  </div>#}
{#                              </div>#}
{#                          </div>#}
{#                      </div>#}
{#                  </div>#}
{#              </div>#}
{#          </div>#}
{#      </section>#}
  {% endblock %}", "Admin/UserManagement/ParentUserShow.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Admin\\UserManagement\\ParentUserShow.html.twig");
    }
}
