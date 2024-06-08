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

/* Parent/base.html.twig */
class __TwigTemplate_ba6782d51f145d3a7340bb092664f2b4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Parent/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Parent/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
    <meta content=\"\" name=\"keywords\" />
    <meta content=\"\" name=\"description\" />

    <!-- Favicon -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\" />

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap\"
      rel=\"stylesheet\"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\"
      rel=\"stylesheet\"
    />
    <link
      href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\"
      rel=\"stylesheet\"
    />

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/lib/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  </head>

  <body>
    <div class=\"container-xxl bg-white p-0\">
      <!-- Spinner Start -->
      <div
        id=\"spinner\"
        class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\"
      >
        <div
          class=\"spinner-border text-primary\"
          style=\"width: 3rem; height: 3rem\"
          role=\"status\"
        >
          <span class=\"sr-only\">Loading...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar Start -->
      <nav
        class=\"navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0\"
      >
        <a href=\"index.html\" class=\"navbar-brand\">
          <img
            src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/logo.png"), "html", null, true);
        echo "\"
            alt=\"Your Logo\"
            style=\"width: 100px; height: auto\"
          />
        </a>
        <button
          type=\"button\"
          class=\"navbar-toggler\"
          data-bs-toggle=\"collapse\"
          data-bs-target=\"#navbarCollapse\"
 >
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
          <div class=\"navbar-nav mx-auto\">
            <a href=\"#\" class=\"nav-item nav-link active\">Dashboard</a>

            <a href=\"#\" class=\"nav-item nav-link\">subscription</a>
            <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_store");
        echo "\" class=\"nav-item nav-link\">Shop</a>



            <a href=\"Store.html\" class=\"nav-item nav-link\"
              ><i class=\"fas fa-shopping-cart cart-icon\"></i
            ></a>
          </div>
           <!-- Nav Item - User Information -->
           <div class=\"nav-item dropdown no-arrow\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
                <img class=\"img-profile rounded-circle\"
                    src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/user.jpg"), "html", null, true);
        echo "\" width=\"50px\" height=\"50px\">
            </a>
            <!-- Dropdown - User Information -->
            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                aria-labelledby=\"userDropdown\">
                <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profile
                </a>

               
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Logout
                </a>
            </div>
       </div>
        </div>
      </nav>
      <!-- Navbar End -->

<!--   main of page -->
      ";
        // line 123
        $this->displayBlock('body', $context, $blocks);
        // line 126
        echo "      <!-- End  main of page -->

   

      

      <!-- Footer Start -->
      <div
        class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn\"
        data-wow-delay=\"0.1s\"
      >
        <div class=\"container py-5\">
          <div class=\"row g-5\">
            <div class=\"col-lg-3 col-md-6\">
              <h3 class=\"text-white mb-4\">Get In Touch</h3>
              <p class=\"mb-2\">
                <i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York,
                USA
              </p>
              <p class=\"mb-2\">
                <i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890
              </p>
              <p class=\"mb-2\">
                <i class=\"fa fa-envelope me-3\"></i>info@example.com
              </p>
              <div class=\"d-flex pt-2\">
                <a class=\"btn btn-outline-light btn-social\" href=\"\"
                  ><i class=\"fab fa-twitter\"></i
                ></a>
                <a class=\"btn btn-outline-light btn-social\" href=\"\"
                  ><i class=\"fab fa-facebook-f\"></i
                ></a>
                <a class=\"btn btn-outline-light btn-social\" href=\"\"
                  ><i class=\"fab fa-youtube\"></i
                ></a>
                <a class=\"btn btn-outline-light btn-social\" href=\"\"
                  ><i class=\"fab fa-linkedin-in\"></i
                ></a>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <h3 class=\"text-white mb-4\">Quick Links</h3>
                <a class=\"btn btn-link text-white-50\" href=\"\">Dashboard</a>
              <a class=\"btn btn-link text-white-50\" href=\"\">Child</a>
              <a class=\"btn btn-link text-white-50\" href=\"\">subscription</a>
              <a class=\"btn btn-link text-white-50\" href=\"\">Shop</a>
              <a class=\"btn btn-link text-white-50\" href=\"\">Contact Us</a>
              <a class=\"btn btn-link text-white-50\" href=\"\">Privacy Policy</a>
              <a class=\"btn btn-link text-white-50\" href=\"\"
                >Terms & Condition</a
              >
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <h3 class=\"text-white mb-4\">Photo Gallery</h3>
              <div class=\"row g-2 pt-2\">
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-1.jpg"), "html", null, true);
        echo "\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-2.jpg"), "html", null, true);
        echo "\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-3.jpg"), "html", null, true);
        echo "\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-4.jpg"), "html", null, true);
        echo "\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-5.jpg"), "html", null, true);
        echo "\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-6.jpg"), "html", null, true);
        echo "\"
                    alt=\"\"
                  />
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <h3 class=\"text-white mb-4\">Newsletter</h3>
              <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
              <div class=\"position-relative mx-auto\" style=\"max-width: 400px\">
                <input
                  class=\"form-control bg-transparent w-100 py-3 ps-4 pe-5\"
                  type=\"text\"
                  placeholder=\"Your email\"
                />
                <button
                  type=\"button\"
                  class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\"
                >
                  SignUp
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"container\">
          <div class=\"copyright\">
            <div class=\"row\">
              <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All
                Right Reserved.

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                Designed By
                <a class=\"border-bottom\" href=\"https://htmlcodex.com\"
                  >HTML Codex</a
                >
              </div>
              <div class=\"col-md-6 text-center text-md-end\">
                <div class=\"footer-menu\">
                  <a href=\"\">Home</a>
                  <a href=\"\">Cookies</a>
                  <a href=\"\">Help</a>
                  <a href=\"\">FQAs</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"
        ><i class=\"bi bi-arrow-up\"></i
      ></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/js/main.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "      magicMindes
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 123
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 124
        echo "        <h1>Espace Parent</h1>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Parent/base.html.twig";
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
        return array (  436 => 124,  426 => 123,  415 => 6,  405 => 5,  391 => 286,  385 => 283,  381 => 282,  377 => 281,  373 => 280,  309 => 219,  299 => 212,  289 => 205,  279 => 198,  269 => 191,  259 => 184,  199 => 126,  197 => 123,  183 => 112,  168 => 100,  151 => 86,  130 => 68,  101 => 42,  95 => 39,  89 => 36,  85 => 35,  61 => 14,  53 => 8,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <title>{% block title %}
      magicMindes
      {% endblock %}
    </title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
    <meta content=\"\" name=\"keywords\" />
    <meta content=\"\" name=\"description\" />

    <!-- Favicon -->
    <link href=\"{{ asset('asset/User/img/favicon.ico')}}\" rel=\"icon\" />

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap\"
      rel=\"stylesheet\"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\"
      rel=\"stylesheet\"
    />
    <link
      href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\"
      rel=\"stylesheet\"
    />

    <!-- Libraries Stylesheet -->
    <link href=\"{{ asset('asset/User/lib/animate/animate.min.css')}}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('asset/User/lib/owlcarousel/assets/owl.carousel.min.css')}}\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{ asset('asset/User/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />

    <!-- Template Stylesheet -->
    <link href=\"{{ asset('asset/User/css/style.css')}}\" rel=\"stylesheet\" />
  </head>

  <body>
    <div class=\"container-xxl bg-white p-0\">
      <!-- Spinner Start -->
      <div
        id=\"spinner\"
        class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\"
      >
        <div
          class=\"spinner-border text-primary\"
          style=\"width: 3rem; height: 3rem\"
          role=\"status\"
        >
          <span class=\"sr-only\">Loading...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar Start -->
      <nav
        class=\"navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0\"
      >
        <a href=\"index.html\" class=\"navbar-brand\">
          <img
            src=\"{{ asset('asset/User/img/logo.png') }}\"
            alt=\"Your Logo\"
            style=\"width: 100px; height: auto\"
          />
        </a>
        <button
          type=\"button\"
          class=\"navbar-toggler\"
          data-bs-toggle=\"collapse\"
          data-bs-target=\"#navbarCollapse\"
 >
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
          <div class=\"navbar-nav mx-auto\">
            <a href=\"#\" class=\"nav-item nav-link active\">Dashboard</a>

            <a href=\"#\" class=\"nav-item nav-link\">subscription</a>
            <a href=\"{{ path('app_store') }}\" class=\"nav-item nav-link\">Shop</a>



            <a href=\"Store.html\" class=\"nav-item nav-link\"
              ><i class=\"fas fa-shopping-cart cart-icon\"></i
            ></a>
          </div>
           <!-- Nav Item - User Information -->
           <div class=\"nav-item dropdown no-arrow\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
                <img class=\"img-profile rounded-circle\"
                    src=\"{{ asset('asset/User/img/user.jpg') }}\" width=\"50px\" height=\"50px\">
            </a>
            <!-- Dropdown - User Information -->
            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                aria-labelledby=\"userDropdown\">
                <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profile
                </a>

               
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Logout
                </a>
            </div>
       </div>
        </div>
      </nav>
      <!-- Navbar End -->

<!--   main of page -->
      {% block body %}
        <h1>Espace Parent</h1>
      {% endblock %}
      <!-- End  main of page -->

   

      

      <!-- Footer Start -->
      <div
        class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn\"
        data-wow-delay=\"0.1s\"
      >
        <div class=\"container py-5\">
          <div class=\"row g-5\">
            <div class=\"col-lg-3 col-md-6\">
              <h3 class=\"text-white mb-4\">Get In Touch</h3>
              <p class=\"mb-2\">
                <i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York,
                USA
              </p>
              <p class=\"mb-2\">
                <i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890
              </p>
              <p class=\"mb-2\">
                <i class=\"fa fa-envelope me-3\"></i>info@example.com
              </p>
              <div class=\"d-flex pt-2\">
                <a class=\"btn btn-outline-light btn-social\" href=\"\"
                  ><i class=\"fab fa-twitter\"></i
                ></a>
                <a class=\"btn btn-outline-light btn-social\" href=\"\"
                  ><i class=\"fab fa-facebook-f\"></i
                ></a>
                <a class=\"btn btn-outline-light btn-social\" href=\"\"
                  ><i class=\"fab fa-youtube\"></i
                ></a>
                <a class=\"btn btn-outline-light btn-social\" href=\"\"
                  ><i class=\"fab fa-linkedin-in\"></i
                ></a>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <h3 class=\"text-white mb-4\">Quick Links</h3>
                <a class=\"btn btn-link text-white-50\" href=\"\">Dashboard</a>
              <a class=\"btn btn-link text-white-50\" href=\"\">Child</a>
              <a class=\"btn btn-link text-white-50\" href=\"\">subscription</a>
              <a class=\"btn btn-link text-white-50\" href=\"\">Shop</a>
              <a class=\"btn btn-link text-white-50\" href=\"\">Contact Us</a>
              <a class=\"btn btn-link text-white-50\" href=\"\">Privacy Policy</a>
              <a class=\"btn btn-link text-white-50\" href=\"\"
                >Terms & Condition</a
              >
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <h3 class=\"text-white mb-4\">Photo Gallery</h3>
              <div class=\"row g-2 pt-2\">
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"{{ asset('asset/User/img/classes-1.jpg') }}\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"{{ asset('asset/User/img/classes-2.jpg') }}\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"{{ asset('asset/User/img/classes-3.jpg') }}\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"{{ asset('asset/User/img/classes-4.jpg') }}\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"{{ asset('asset/User/img/classes-5.jpg') }}\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"{{ asset('asset/User/img/classes-6.jpg') }}\"
                    alt=\"\"
                  />
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <h3 class=\"text-white mb-4\">Newsletter</h3>
              <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
              <div class=\"position-relative mx-auto\" style=\"max-width: 400px\">
                <input
                  class=\"form-control bg-transparent w-100 py-3 ps-4 pe-5\"
                  type=\"text\"
                  placeholder=\"Your email\"
                />
                <button
                  type=\"button\"
                  class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\"
                >
                  SignUp
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"container\">
          <div class=\"copyright\">
            <div class=\"row\">
              <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All
                Right Reserved.

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                Designed By
                <a class=\"border-bottom\" href=\"https://htmlcodex.com\"
                  >HTML Codex</a
                >
              </div>
              <div class=\"col-md-6 text-center text-md-end\">
                <div class=\"footer-menu\">
                  <a href=\"\">Home</a>
                  <a href=\"\">Cookies</a>
                  <a href=\"\">Help</a>
                  <a href=\"\">FQAs</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"
        ><i class=\"bi bi-arrow-up\"></i
      ></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{ asset('asset/User/lib/wow/wow.min.js')}}\"></script>
    <script src=\"{{ asset('asset/User/lib/easing/easing.min.js')}}\"></script>
    <script src=\"{{ asset('asset/User/lib/waypoints/waypoints.min.js')}}\"></script>
    <script src=\"{{ asset('asset/User/lib/owlcarousel/owl.carousel.min.js')}}\"></script>

    <!-- Template Javascript -->
    <script src=\"{{ asset('asset/User/js/main.js')}}\"></script>
  </body>
</html>
", "Parent/base.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Parent\\base.html.twig");
    }
}
