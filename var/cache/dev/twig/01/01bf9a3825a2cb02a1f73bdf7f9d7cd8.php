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

/* Admin/UserManagement/ParentUserProfile.html.twig */
class __TwigTemplate_94fc8f83a18f149e47bb8d116497f4c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/UserManagement/ParentUserProfile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/UserManagement/ParentUserProfile.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/UserManagement/ParentUserProfile.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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

        // line 6
        yield "
";
        // line 9
        yield "
";
        // line 11
        yield "
";
        // line 16
        yield "
";
        // line 19
        yield "

";
        // line 22
        yield "
";
        // line 24
        yield "

";
        // line 30
        yield "
";
        // line 35
        yield "
";
        // line 40
        yield "
";
        // line 49
        yield "
";
        // line 56
        yield "      <div class=\"container mt-5\">
      <div class=\"row\">
      <div class=\"col-md-12\">

      <hr style=\"color: #103741; margin:0\">
      <div style=\"margin: 50px ;\" class=\"container\">
          <div class=\"bg-light rounded\">
              <div class=\"row g-0\">
                  <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\"
                       style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;\">
                      <div class=\"h-100 d-flex flex-column justify-content-center p-5\">
                          <h1 class=\"mb-3\">Edit Users</h1>
                          ";
        // line 68
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 68, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                          ";
        // line 69
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 69, $this->source); })()), ["bootstrap_4_layout.html.twig"], true);
        // line 70
        yield "                          <div class=\"row g-3\">
                              <div class=\"col-12 mr-2\">
                                  <div class=\"form-floating\">
                                      ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 73, $this->source); })()), "firstName", [], "any", false, false, false, 73), 'row', ["attr" => ["class" => "form-control border-0"]]);
        // line 75
        yield "

                                  </div>
                              </div>
                              <div class=\"col-12\">
                                  <div class=\"form-floating\">
                                      ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 81, $this->source); })()), "lastName", [], "any", false, false, false, 81), 'row', ["attr" => ["class" => "form-control border-0"]]);
        // line 82
        yield "

                                  </div>
                              </div>
                              <div class=\"col-12\">
                                  <div class=\"form-floating\">
                                      ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 88, $this->source); })()), "age", [], "any", false, false, false, 88), 'row', ["attr" => ["class" => "form-control border-0"]]);
        // line 89
        yield "

                                  </div>
                              </div>
                              <div class=\"col-12\">
                                  <div class=\"form-floating\">
                                      ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 95, $this->source); })()), "gender", [], "any", false, false, false, 95), 'row', ["attr" => ["class" => "form-control border-0"]]);
        // line 96
        yield "

                                  </div>
                              </div>
                              <div class=\"col-12\">
                                  <div class=\"form-floating\">
                                      ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 102, $this->source); })()), "password", [], "any", false, false, false, 102), 'row', ["attr" => ["class" => "form-control border-0"]]);
        // line 103
        yield "
                                  </div>
                              </div>
                              <div class=\"col-12\">
                                  <div class=\"form-floating\">
                                      ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 108, $this->source); })()), "tel", [], "any", false, false, false, 108), 'row', ["attr" => ["class" => "form-control border-0"]]);
        // line 109
        yield "
                                  </div>
                              </div>
                              <div class=\"col-12\">
                                  <div class=\"form-floating\">
                                      ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 114, $this->source); })()), "email", [], "any", false, false, false, 114), 'row', ["attr" => ["class" => "form-control border-0"]]);
        // line 115
        yield "
                                  </div>
                              </div>
                              <div class=\"col-12\">
                                  <div class=\"form-floating\">
                                      ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 120, $this->source); })()), "picture", [], "any", false, false, false, 120), 'row', ["attr" => ["class" => "form-control border-0"]]);
        // line 121
        yield "
                                  </div>
                              </div>

                              <div class=\"col-12\">
                                  <div class=\"form-floating\">
                                      ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 127, $this->source); })()), "roles", [], "any", false, false, false, 127), 'row', ["attr" => ["class" => "form-control border-0"]]);
        // line 128
        yield "
                                  </div>
                              </div>
                              <div class=\"col-sm-6\">
                                  ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 132, $this->source); })()), "Save", [], "any", false, false, false, 132), 'row', ["attr" => ["class" => "btn bgOrange blColor w-100 py-3"]]);
        yield "
                              </div>
                          </div>
                          ";
        // line 135
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 135, $this->source); })()), 'form_end');
        yield "

                      </div>
                  </div>
                  <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\"
                       style=\"min-height: 400px; visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;\">
                      <div class=\"position-relative h-100\">
                          <img class=\"position-absolute w-100 h-100 rounded\" src=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/appointment.jpg"), "html", null, true);
        yield "\"
                               style=\"object-fit: cover;\">
                      </div>
                  </div>
              </div>
          </div>
      </div>


      </div>
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
        return "Admin/UserManagement/ParentUserProfile.html.twig";
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
        return array (  230 => 142,  220 => 135,  214 => 132,  208 => 128,  206 => 127,  198 => 121,  196 => 120,  189 => 115,  187 => 114,  180 => 109,  178 => 108,  171 => 103,  169 => 102,  161 => 96,  159 => 95,  151 => 89,  149 => 88,  141 => 82,  139 => 81,  131 => 75,  129 => 73,  124 => 70,  122 => 69,  118 => 68,  104 => 56,  101 => 49,  98 => 40,  95 => 35,  92 => 30,  88 => 24,  85 => 22,  81 => 19,  78 => 16,  75 => 11,  72 => 9,  69 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/base.html.twig' %}


  {% block content %}
{#      <div class=\"container\">#}

{#      <!-- Outer Row -->#}
{#      <div class=\"row justify-content-center\">#}

{#      <div class=\"col-xl-10 col-lg-12 col-md-9\">#}

{#      <div class=\"card o-hidden border-0 shadow-lg my-5\">#}
{#      <div class=\"card-body p-0\">#}
{#      <!-- Nested Row within Card Body -->#}
{#          <div class=\"col-lg-10\">#}

{#      {{ form_start(f, {'attr': {'novalidate': 'novalidate'}}) }}#}
{#      <div class=\"row justify-content-center\">#}


{#            <div class=\"col\">{{ form_row(f.firstName) }}</div>#}

{#             <div class=\"col\">{{ form_row(f.lastName,{'attr': {'class': 'form-select'}}) }}</div></td>#}


{#      </div>#}
{#          <div class=\"row\">#}
{#              <div class=\"col\">{{ form_row(f.age) }}</div>#}
{#              <div class=\"col\">{{ form_row(f.gender) }}</div>#}

{#          </div>#}
{#              <div class=\"row\">#}
{#                  <div class=\"col\">{{ form_row(f.password) }}</div>#}
{#                  <div class=\"col\">{{ form_row(f.tel) }}</div>#}

{#              </div>#}
{#              <div class=\"row\">#}
{#                  <div class=\"col\">{{ form_row(f.email) }}</div>#}
{#                  <div class=\"col\">{{ form_row(f.picture) }}</div>#}

{#              </div>#}
{#              <div class=\"row\">#}
{#                  <div class=\"col\">{{ form_row(f.role) }}</div>#}
{#              </div>#}
{#              <div class=\"row justify-content-center\">#}
{#                  <div class=\"col\">{{ form_row(f.Save) }}</div>#}
{#              </div>#}
{#      {{ form_end(f) }}#}

{#          </div>#}
{#      </div>#}
{#      </div>#}
{#      </div>#}
{#      </div>#}
{#      </div>#}
      <div class=\"container mt-5\">
      <div class=\"row\">
      <div class=\"col-md-12\">

      <hr style=\"color: #103741; margin:0\">
      <div style=\"margin: 50px ;\" class=\"container\">
          <div class=\"bg-light rounded\">
              <div class=\"row g-0\">
                  <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\"
                       style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;\">
                      <div class=\"h-100 d-flex flex-column justify-content-center p-5\">
                          <h1 class=\"mb-3\">Edit Users</h1>
                          {{ form_start(f,{'attr': {'novalidate': 'novalidate'}} ) }}
                          {% form_theme f 'bootstrap_4_layout.html.twig' %}
                          <div class=\"row g-3\">
                              <div class=\"col-12 mr-2\">
                                  <div class=\"form-floating\">
                                      {{ form_row(f.firstName, {'attr': {'class': 'form-control border-0',
                                          }})
                                      }}

                                  </div>
                              </div>
                              <div class=\"col-12\">
                                  <div class=\"form-floating\">
                                      {{ form_row(f.lastName, {'attr': {'class': 'form-control border-0',
                                         }}) }}

                                  </div>
                              </div>
                              <div class=\"col-12\">
                                  <div class=\"form-floating\">
                                      {{ form_row(f.age, {'attr': {'class': 'form-control border-0',
                                          }}) }}

                                  </div>
                              </div>
                              <div class=\"col-12\">
                                  <div class=\"form-floating\">
                                      {{ form_row(f.gender, {'attr': {'class': 'form-control border-0',
                                         }}) }}

                                  </div>
                              </div>
                              <div class=\"col-12\">
                                  <div class=\"form-floating\">
                                      {{ form_row(f.password, {'attr': {'class': 'form-control border-0',
                                          }}) }}
                                  </div>
                              </div>
                              <div class=\"col-12\">
                                  <div class=\"form-floating\">
                                      {{ form_row(f.tel, {'attr': {'class': 'form-control border-0',
                                       }}) }}
                                  </div>
                              </div>
                              <div class=\"col-12\">
                                  <div class=\"form-floating\">
                                      {{ form_row(f.email, {'attr': {'class': 'form-control border-0',
                                         }}) }}
                                  </div>
                              </div>
                              <div class=\"col-12\">
                                  <div class=\"form-floating\">
                                      {{ form_row(f.picture, {'attr': {'class': 'form-control border-0',
                                          }}) }}
                                  </div>
                              </div>

                              <div class=\"col-12\">
                                  <div class=\"form-floating\">
                                      {{ form_row(f.roles, {'attr': {'class': 'form-control border-0',
                                         }}) }}
                                  </div>
                              </div>
                              <div class=\"col-sm-6\">
                                  {{ form_row(f.Save, {'attr': {'class': 'btn bgOrange blColor w-100 py-3'}}) }}
                              </div>
                          </div>
                          {{ form_end(f) }}

                      </div>
                  </div>
                  <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\"
                       style=\"min-height: 400px; visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;\">
                      <div class=\"position-relative h-100\">
                          <img class=\"position-absolute w-100 h-100 rounded\" src=\"{{ asset('asset/User/img/appointment.jpg') }}\"
                               style=\"object-fit: cover;\">
                      </div>
                  </div>
              </div>
          </div>
      </div>


      </div>
      </div>
      </div>


  {% endblock %}
", "Admin/UserManagement/ParentUserProfile.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Admin\\UserManagement\\ParentUserProfile.html.twig");
    }
}
