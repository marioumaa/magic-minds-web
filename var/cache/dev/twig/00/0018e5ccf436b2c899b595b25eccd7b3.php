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

/* Visiteur/base.html.twig */
class __TwigTemplate_59d294285a08c186c0493c7bbc373ed8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Visiteur/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Visiteur/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\" />
  <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 9
        yield "  </title>
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
  <meta content=\"\" name=\"keywords\" />
  <meta content=\"\" name=\"description\" />

  ";
        // line 14
        $context["visiteur"] = "visiteur";
        // line 15
        yield "
  <!-- Google Web Fonts -->
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
  <link
    href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap\"
    rel=\"stylesheet\" />

  <!-- Icon Font Stylesheet -->
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\" />
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\" />

  <!-- Libraries Stylesheet -->
  <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/lib/animate/animate.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

  <!-- Template Stylesheet -->
  <link href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
</head>

<body class=\"bg-white\">
  <div class=\"container-xxl bg-white p-0\">
    <!-- Spinner Start -->
    <div id=\"spinner\"
      class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
      <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem\" role=\"status\">
        <span class=\"sr-only\">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0\">
      <a href=\"home.html.twig\" class=\"navbar-brand\">
        <img src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/logo.png"), "html", null, true);
        yield "\" alt=\"Your Logo\" style=\"width: 100px; height: auto\" />
      </a>
      <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <div class=\"navbar-nav mx-auto\">
          <a href=\"#\" class=\"nav-item nav-link \">Home</a>
          <a href=\"#\" class=\"nav-item nav-link\">Products</a>
          <a href=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_showcat", ["role" => (isset($context["visiteur"]) || array_key_exists("visiteur", $context) ? $context["visiteur"] : (function () { throw new RuntimeError('Variable "visiteur" does not exist.', 61, $this->source); })())]), "html", null, true);
        yield "\" class=\"nav-item nav-link active\">Courses</a>
          <a href=\"#\" class=\"nav-item nav-link\">About Us</a>
          <a href=\"#\" class=\"nav-item nav-link\">Contact Us</a>
          <a href=\"Store.html\" class=\"nav-item nav-link\"><i class=\"fas fa-shopping-cart cart-icon\"></i></a>
        </div>
        <a href=\"\" class=\"btn btn-primary rounded-pill px-3 d-none d-lg-block\">Join Us<i
            class=\"fa fa-arrow-right ms-3\"></i></a>
      </div>
  </div>
  </nav>
  <!-- Navbar End -->

  <!--   main of page -->
  ";
        // line 74
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 77
        yield "  <!-- End  main of page -->







  <!-- Back to Top -->
  <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
  </div>

  <!-- JavaScript Libraries -->
  <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
  <script src=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>

  <!-- Template Javascript -->
  <script src=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/js/main.js"), "html", null, true);
        yield "\"></script>
</body>
<footer>
  <!-- Footer Start -->
  <div class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-0 wow fadeIn\" data-wow-delay=\"0.1s\">
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
            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
          <h3 class=\"text-white mb-4\">Quick Links</h3>
          <a class=\"btn btn-link text-white-50\" href=\"\">About Us</a>
          <a class=\"btn btn-link text-white-50\" href=\"\">Contact Us</a>
          <a class=\"btn btn-link text-white-50\" href=\"\">Our Services</a>
          <a class=\"btn btn-link text-white-50\" href=\"\">Privacy Policy</a>
          <a class=\"btn btn-link text-white-50\" href=\"\">Terms & Condition</a>
        </div>
        <div class=\"col-lg-3 col-md-6\">
          <h3 class=\"text-white mb-4\">Photo Gallery</h3>
          <div class=\"row g-2 pt-2\">
            <div class=\"col-4\">
              <img class=\"img-fluid rounded bg-light p-1\" src=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-1.jpg"), "html", null, true);
        yield "\" alt=\"\" />
            </div>
            <div class=\"col-4\">
              <img class=\"img-fluid rounded bg-light p-1\" src=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-2.jpg"), "html", null, true);
        yield "\" alt=\"\" />
            </div>
            <div class=\"col-4\">
              <img class=\"img-fluid rounded bg-light p-1\" src=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-3.jpg"), "html", null, true);
        yield "\" alt=\"\" />
            </div>
            <div class=\"col-4\">
              <img class=\"img-fluid rounded bg-light p-1\" src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-4.jpg"), "html", null, true);
        yield "\" alt=\"\" />
            </div>
            <div class=\"col-4\">
              <img class=\"img-fluid rounded bg-light p-1\" src=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-5.jpg"), "html", null, true);
        yield "\" alt=\"\" />
            </div>
            <div class=\"col-4\">
              <img class=\"img-fluid rounded bg-light p-1\" src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-6.jpg"), "html", null, true);
        yield "\" alt=\"\" />
            </div>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
          <h3 class=\"text-white mb-4\">Newsletter</h3>
          <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
          <div class=\"position-relative mx-auto\" style=\"max-width: 400px\">
            <input class=\"form-control bg-transparent w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\" />
            <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">
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
            <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a>
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
</footer>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 7
        yield "    magicMindes
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 74
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 75
        yield "  <h1>Espace Visiteur</h1>
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
        return "Visiteur/base.html.twig";
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
        return array (  337 => 75,  327 => 74,  315 => 7,  305 => 6,  251 => 151,  245 => 148,  239 => 145,  233 => 142,  227 => 139,  221 => 136,  180 => 98,  174 => 95,  170 => 94,  166 => 93,  162 => 92,  145 => 77,  143 => 74,  127 => 61,  115 => 52,  95 => 35,  89 => 32,  83 => 29,  79 => 28,  64 => 15,  62 => 14,  55 => 9,  53 => 6,  46 => 1,);
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

  {% set visiteur =\"visiteur\" %}

  <!-- Google Web Fonts -->
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
  <link
    href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap\"
    rel=\"stylesheet\" />

  <!-- Icon Font Stylesheet -->
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\" />
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\" />

  <!-- Libraries Stylesheet -->
  <link href=\"{{ asset('asset/User/lib/animate/animate.min.css')}}\" rel=\"stylesheet\" />
  <link href=\"{{ asset('asset/User/lib/owlcarousel/assets/owl.carousel.min.css')}}\" rel=\"stylesheet\" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href=\"{{ asset('asset/User/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />

  <!-- Template Stylesheet -->
  <link href=\"{{ asset('asset/User/css/style.css')}}\" rel=\"stylesheet\" />
</head>

<body class=\"bg-white\">
  <div class=\"container-xxl bg-white p-0\">
    <!-- Spinner Start -->
    <div id=\"spinner\"
      class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
      <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem\" role=\"status\">
        <span class=\"sr-only\">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0\">
      <a href=\"home.html.twig\" class=\"navbar-brand\">
        <img src=\"{{ asset('asset/User/img/logo.png') }}\" alt=\"Your Logo\" style=\"width: 100px; height: auto\" />
      </a>
      <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <div class=\"navbar-nav mx-auto\">
          <a href=\"#\" class=\"nav-item nav-link \">Home</a>
          <a href=\"#\" class=\"nav-item nav-link\">Products</a>
          <a href=\"{{path('app_showcat',{'role':visiteur})}}\" class=\"nav-item nav-link active\">Courses</a>
          <a href=\"#\" class=\"nav-item nav-link\">About Us</a>
          <a href=\"#\" class=\"nav-item nav-link\">Contact Us</a>
          <a href=\"Store.html\" class=\"nav-item nav-link\"><i class=\"fas fa-shopping-cart cart-icon\"></i></a>
        </div>
        <a href=\"\" class=\"btn btn-primary rounded-pill px-3 d-none d-lg-block\">Join Us<i
            class=\"fa fa-arrow-right ms-3\"></i></a>
      </div>
  </div>
  </nav>
  <!-- Navbar End -->

  <!--   main of page -->
  {% block body %}
  <h1>Espace Visiteur</h1>
  {% endblock %}
  <!-- End  main of page -->







  <!-- Back to Top -->
  <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
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
<footer>
  <!-- Footer Start -->
  <div class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-0 wow fadeIn\" data-wow-delay=\"0.1s\">
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
            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
          <h3 class=\"text-white mb-4\">Quick Links</h3>
          <a class=\"btn btn-link text-white-50\" href=\"\">About Us</a>
          <a class=\"btn btn-link text-white-50\" href=\"\">Contact Us</a>
          <a class=\"btn btn-link text-white-50\" href=\"\">Our Services</a>
          <a class=\"btn btn-link text-white-50\" href=\"\">Privacy Policy</a>
          <a class=\"btn btn-link text-white-50\" href=\"\">Terms & Condition</a>
        </div>
        <div class=\"col-lg-3 col-md-6\">
          <h3 class=\"text-white mb-4\">Photo Gallery</h3>
          <div class=\"row g-2 pt-2\">
            <div class=\"col-4\">
              <img class=\"img-fluid rounded bg-light p-1\" src=\"{{ asset('asset/User/img/classes-1.jpg') }}\" alt=\"\" />
            </div>
            <div class=\"col-4\">
              <img class=\"img-fluid rounded bg-light p-1\" src=\"{{ asset('asset/User/img/classes-2.jpg') }}\" alt=\"\" />
            </div>
            <div class=\"col-4\">
              <img class=\"img-fluid rounded bg-light p-1\" src=\"{{ asset('asset/User/img/classes-3.jpg') }}\" alt=\"\" />
            </div>
            <div class=\"col-4\">
              <img class=\"img-fluid rounded bg-light p-1\" src=\"{{ asset('asset/User/img/classes-4.jpg') }}\" alt=\"\" />
            </div>
            <div class=\"col-4\">
              <img class=\"img-fluid rounded bg-light p-1\" src=\"{{ asset('asset/User/img/classes-5.jpg') }}\" alt=\"\" />
            </div>
            <div class=\"col-4\">
              <img class=\"img-fluid rounded bg-light p-1\" src=\"{{ asset('asset/User/img/classes-6.jpg') }}\" alt=\"\" />
            </div>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
          <h3 class=\"text-white mb-4\">Newsletter</h3>
          <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
          <div class=\"position-relative mx-auto\" style=\"max-width: 400px\">
            <input class=\"form-control bg-transparent w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\" />
            <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">
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
            <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a>
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
</footer>

</html>", "Visiteur/base.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Visiteur\\base.html.twig");
    }
}
