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

/* Admin/UserManagement/UserShow.html.twig */
class __TwigTemplate_16e60f967704013b1e6d5abfb88e3314 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/UserManagement/UserShow.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/UserManagement/UserShow.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/UserManagement/UserShow.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        yield "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 6
        yield "            <!-- Styles Bootstrap (CSS) -->

            <!-- Axentix CSS minified version -->
            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@2.2.1/dist/axentix.min.css\">
            <!-- Scripts Bootstrap (JavaScript) -->

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        yield "
      <div class=\"container mt-5\">
          <div class=\"row-cols-lg-auto\">
              <div class=\"col-md-12\">
                  <h2 class=\"text-center mb-4\">User Management</h2>
                  <div class=\"form-inline mb-3\">
                      <a class=\"btn bgOrange blColor btn-small mr-auto\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.add");
        yield "\">Add User</a>
                      <button class=\"btn bg-success blColor btn-small ml-auto\" onclick=\"handleAdd()\">Export data csv</button>
                  </div>
                  <!-- Filtrage et Tri -->

                  <div class=\"form-inline mb-3 \">
                      ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                      ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "mots", [], "any", false, false, false, 30), 'row', ["attr" => ["class" => "form-control mr-2", "id" => "searchInput"]]);
        // line 32
        yield "
                      ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "Rechercher", [], "any", false, false, false, 33), 'row', ["attr" => ["class" => "btn bgOrange blColor btn-small mr-auto"]]);
        // line 34
        yield "

                      ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        yield "
";
        // line 38
        yield "                          <select class=\"form-control ml-auto  mr-2\">
                              <option value=\"\">Option 1</option>
                              <option value=\"\">Option 2</option>
                              <option value=\"\">Option 3</option>
                          </select>
                          <button class=\"btn bgOrange btn-small blColor\" onclick=\"handleFilter()\">Filter</button>
";
        // line 45
        yield "                  </div>
            <div class=\"table-responsive\">
                  <table class=\"table table-striped \">
                      <thead class=\"table-light\">
                      <tr>
                          <th scope=\"col\">#</th>
                          <th scope=\"col\" >FirstName  <i class=\"fa fa-sort\" aria-hidden=\"true\"></i></th>
                          <th scope=\"col\">LastName <i class=\"fa fa-sort\" aria-hidden=\"true\"></i></th>
                          <th scope=\"col\">Gender  <i class=\"fa fa-sort\" aria-hidden=\"true\"></i></th>
                          <th scope=\"col\">Active</th>
                          <th scope=\"col\">Action</th>
                      </tr>
                      </thead>
                      <tbody id=\"tableBody\">
                      <!-- Data rows will be inserted here dynamically -->
                      ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 61
            yield "                      <tr>
                          <td>1</td>
                          <td>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "firstName", [], "any", false, false, false, 63), "html", null, true);
            yield "</td>
                          <td>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "lastName", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
                          <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "gender", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                          <td>

                              <label class=\"form-switch mt-2\">

                                  <input type=\"checkbox\" ";
            // line 70
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["i"], "active", [], "any", false, false, false, 70)) ? ("checked") : (""));
            yield "
                                  data-id=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 71), "html", null, true);
            yield "\"
                                  />
                                  <span class=\"form-slider\"></span>

                              </label>
                          </td>
                          <td>
                              <a class=\"btn bg-info blColor btn-small btn-sm\" href=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            yield "\">Show</a>
                              <a class=\"btn bg-success blColor btn-small btn-sm\" href=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\">Edit</a>


                              <a href=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-small btn-sm\" >Delete</a>
                          </td>
                      </tr>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "                      </tbody>
                  </table>
            </div>
                  <nav aria-label=\"Page navigation\">
                      <ul class=\"pagination justify-content-center pagination-small\">
                          <li class=\"page-item\">
                              <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                                  <span aria-hidden=\"true\">&laquo;</span>
                                  <span class=\"sr-only\">Previous</span>
                              </a>
                          </li>
                          <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                          <!-- Ajouter plus de pages ici si nécessaire -->
                          <li class=\"page-item\">
                              <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                                  <span aria-hidden=\"true\">&raquo;</span>
                                  <span class=\"sr-only\">Next</span>
                              </a>
                          </li>
                      </ul>
                  </nav>
              </div>
          </div>
      </div>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 121
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 122
        yield "     <script>
         window.onload = () => {
             let modal = new Axentix.Modal('#modal-example');
             let active = document.querySelectorAll(\"[type=checkbox]\");
             for(let bouton of active){
                 bouton.addEventListener(\"click\",function (){
                     let xmlHttp = new XMLHttpRequest();
                     xmlHttp.open(\"get\",`/user/activer/\${this.dataset.id}`)
                     xmlHttp.send()
                 });
             }
         }
     </script>
     <!-- Axentix JS minified version -->
     <script src=\"https://cdn.jsdelivr.net/npm/axentix@2.2.1/dist/axentix.min.js\"></script>
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
        return "Admin/UserManagement/UserShow.html.twig";
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
        return array (  289 => 122,  279 => 121,  239 => 86,  229 => 82,  223 => 79,  219 => 78,  209 => 71,  205 => 70,  197 => 65,  193 => 64,  189 => 63,  185 => 61,  181 => 60,  164 => 45,  156 => 38,  152 => 36,  148 => 34,  146 => 33,  143 => 32,  141 => 30,  137 => 29,  128 => 23,  120 => 17,  110 => 16,  93 => 6,  83 => 5,  72 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/base.html.twig' %}
      {% block title %}
      {% endblock %}

        {% block style %}
            <!-- Styles Bootstrap (CSS) -->

            <!-- Axentix CSS minified version -->
            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@2.2.1/dist/axentix.min.css\">
            <!-- Scripts Bootstrap (JavaScript) -->

        {% endblock %}



  {% block content %}

      <div class=\"container mt-5\">
          <div class=\"row-cols-lg-auto\">
              <div class=\"col-md-12\">
                  <h2 class=\"text-center mb-4\">User Management</h2>
                  <div class=\"form-inline mb-3\">
                      <a class=\"btn bgOrange blColor btn-small mr-auto\" href=\"{{ path('user.add') }}\">Add User</a>
                      <button class=\"btn bg-success blColor btn-small ml-auto\" onclick=\"handleAdd()\">Export data csv</button>
                  </div>
                  <!-- Filtrage et Tri -->

                  <div class=\"form-inline mb-3 \">
                      {{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}
                      {{ form_row(form.mots, {'attr': {'class': 'form-control mr-2',
                          'id' : 'searchInput'
                      }}) }}
                      {{ form_row(form.Rechercher, {'attr': {'class': 'btn bgOrange blColor btn-small mr-auto',
                      }}) }}

                      {{ form_end(form) }}
{#                      <div class=\"form-inline mb-3\">#}
                          <select class=\"form-control ml-auto  mr-2\">
                              <option value=\"\">Option 1</option>
                              <option value=\"\">Option 2</option>
                              <option value=\"\">Option 3</option>
                          </select>
                          <button class=\"btn bgOrange btn-small blColor\" onclick=\"handleFilter()\">Filter</button>
{#                      </div>#}
                  </div>
            <div class=\"table-responsive\">
                  <table class=\"table table-striped \">
                      <thead class=\"table-light\">
                      <tr>
                          <th scope=\"col\">#</th>
                          <th scope=\"col\" >FirstName  <i class=\"fa fa-sort\" aria-hidden=\"true\"></i></th>
                          <th scope=\"col\">LastName <i class=\"fa fa-sort\" aria-hidden=\"true\"></i></th>
                          <th scope=\"col\">Gender  <i class=\"fa fa-sort\" aria-hidden=\"true\"></i></th>
                          <th scope=\"col\">Active</th>
                          <th scope=\"col\">Action</th>
                      </tr>
                      </thead>
                      <tbody id=\"tableBody\">
                      <!-- Data rows will be inserted here dynamically -->
                      {% for i in users %}
                      <tr>
                          <td>1</td>
                          <td>{{ i.firstName }}</td>
                          <td>{{ i.lastName }}</td>
                          <td>{{ i.gender }}</td>
                          <td>

                              <label class=\"form-switch mt-2\">

                                  <input type=\"checkbox\" {{ (i.active)? 'checked' : '' }}
                                  data-id=\"{{ i.id }}\"
                                  />
                                  <span class=\"form-slider\"></span>

                              </label>
                          </td>
                          <td>
                              <a class=\"btn bg-info blColor btn-small btn-sm\" href=\"{{ path('user.show',{'id': i.id}) }}\">Show</a>
                              <a class=\"btn bg-success blColor btn-small btn-sm\" href=\"{{ path('user.add',{'id': i.id}) }}\">Edit</a>


                              <a href=\"{{ path('user.delete',{'id': i.id}) }}\" class=\"btn btn-danger btn-small btn-sm\" >Delete</a>
                          </td>
                      </tr>
                   {% endfor %}
                      </tbody>
                  </table>
            </div>
                  <nav aria-label=\"Page navigation\">
                      <ul class=\"pagination justify-content-center pagination-small\">
                          <li class=\"page-item\">
                              <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                                  <span aria-hidden=\"true\">&laquo;</span>
                                  <span class=\"sr-only\">Previous</span>
                              </a>
                          </li>
                          <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                          <!-- Ajouter plus de pages ici si nécessaire -->
                          <li class=\"page-item\">
                              <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                                  <span aria-hidden=\"true\">&raquo;</span>
                                  <span class=\"sr-only\">Next</span>
                              </a>
                          </li>
                      </ul>
                  </nav>
              </div>
          </div>
      </div>




{% endblock %}





 {% block js %}
     <script>
         window.onload = () => {
             let modal = new Axentix.Modal('#modal-example');
             let active = document.querySelectorAll(\"[type=checkbox]\");
             for(let bouton of active){
                 bouton.addEventListener(\"click\",function (){
                     let xmlHttp = new XMLHttpRequest();
                     xmlHttp.open(\"get\",`/user/activer/\${this.dataset.id}`)
                     xmlHttp.send()
                 });
             }
         }
     </script>
     <!-- Axentix JS minified version -->
     <script src=\"https://cdn.jsdelivr.net/npm/axentix@2.2.1/dist/axentix.min.js\"></script>
 {% endblock %}", "Admin/UserManagement/UserShow.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Admin\\UserManagement\\UserShow.html.twig");
    }
}
