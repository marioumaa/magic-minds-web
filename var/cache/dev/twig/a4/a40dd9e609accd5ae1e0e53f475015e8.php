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

/* Admin/base.html.twig */
class __TwigTemplate_6f1400139c29a035c7043f472eb258d0 extends Template
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
            'style' => [$this, 'block_style'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 12
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 15
        yield "    </title>

    <!-- Custom fonts for this template-->
    <link href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/css/sb-admin-2.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
   <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/css/style.css"), "html", null, true);
        yield "\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" />
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_module/@fortawesome/fontawesome-free/css/all.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
    ";
        // line 30
        yield from $this->unwrap()->yieldBlock('style', $context, $blocks);
        // line 32
        yield "</head>

<body id=\"page-top\">

    <!-- Page Wrapper -->
    <div id=\"wrapper\">

        <!-- Sidebar -->
        <ul class=\"navbar-nav bgOrange sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <!-- Sidebar - Brand -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-laugh-wink\"></i>
                </div>
                <img src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/img/logo.png"), "html", null, true);
        yield "\" alt=\"\" width=\"100px\" height=\"100px\">
            </a>

            <!-- Divider -->
            <hr class=\"sidebar-divider my-0\">

            <!-- Nav Item - Dashboard -->


            <!-- Divider -->
            <hr class=\"sidebar-divider my-0\">
          <!--Start Menu -->
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                <i class=\"fa-solid fa-gauge-simple-high\"></i>
                <span>Dashboard</span></a>
        </li>
            <hr class=\"sidebar-divider my-0\">
          <!--Start Menu -->
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.show1");
        yield "\">
                <i class=\"fa-solid fa-user\"></i>
                <span>User Management</span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_showproduct");
        yield "\">
                <i class=\"fa-solid fa-cart-shopping\"></i>
                <span>Products Management</span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.category.show");
        yield "\">
                <i class=\"fa-brands fa-youtube\"></i>
                <span>Courses Management</span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showquizzadmin");
        yield "\">
                <i class=\"fa fa-question\" ></i>
                <span>Quiz </span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
";
        // line 96
        yield "
";
        // line 101
        yield "        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenements");
        yield "\">
                <i class=\"fa fa-calendar\" ></i>
                <span>Events </span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showParticipationa");
        yield "\">
                <i class=\"fa-solid fa-right-to-bracket\"></i>
                <span>Participation </span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_qestion22");
        yield "\">
                <i class=\"fa-solid fa-comment\"></i>
                <span>Forum Question </span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_reponse22");
        yield "\">
                <i class=\"fa-solid fa-comment\"></i>
                <span>Forum Reponse</span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
";
        // line 136
        yield "          <!--End Menu -->

            <!-- Divider -->
            <hr class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

";
        // line 152
        yield "
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id=\"content-wrapper\" class=\"d-flex flex-column\">

            <!-- Main Content -->
            <div id=\"content\">

                <!-- Topbar -->
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                        <i class=\"fa fa-bars\"></i>
                    </button>

                    <!-- Topbar Search -->
";
        // line 183
        yield "
                    <!-- Topbar Navbar -->
                    <ul class=\"navbar-nav ml-auto\">

";
        // line 210
        yield "
";
        // line 261
        yield "
                        <!-- Nav Item - Messages -->
";
        // line 327
        yield "
                        <div class=\"topbar-divider d-none d-sm-block\"></div>

                        <!-- Nav Item - User Information -->
                        <li class=\"nav-item dropdown no-arrow\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 334, $this->source); })()), "user", [], "any", false, false, false, 334), "username", [], "any", false, false, false, 334), "html", null, true);
        yield "</span>
                                <img class=\"img-profile rounded-circle\"
                                    src=\"";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/img/undraw_profile.svg"), "html", null, true);
        yield "\">
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
        // line 347
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class=\"container-fluid px-4\">
                    ";
        // line 361
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 361, $this->source); })()), "session", [], "any", false, false, false, 361), "flashBag", [], "any", false, false, false, 361), "get", ["info"], "method", false, false, false, 361));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 362
            yield "                        <div class=\"alert alert-info\" >
                            ";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 366
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 366, $this->source); })()), "session", [], "any", false, false, false, 366), "flashBag", [], "any", false, false, false, 366), "get", ["success"], "method", false, false, false, 366));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 367
            yield "                        <div class=\"alert alert-success\" >
                            ";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 371
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 371, $this->source); })()), "session", [], "any", false, false, false, 371), "flashBag", [], "any", false, false, false, 371), "get", ["error"], "method", false, false, false, 371));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 372
            yield "                        <div class=\"alert alert-danger\" >
                            ";
            // line 373
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 376
        yield "                </div>



            <!-- End of Content Wrapper -->



                ";
        // line 384
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 387
        yield "            <!-- End of Main Content -->

            <!-- Footer -->
";
        // line 397
        yield "            <!-- End of Footer -->
            </div>
        </div>

    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>

    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=\"";
        // line 422
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src=\"";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"";
        // line 437
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/js/sb-admin-2.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Page level plugins -->
    <script src=\"";
        // line 440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/chart.js/Chart.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Page level custom scripts -->
    <script src=\"";
        // line 443
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/js/demo/chart-area-demo.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 444
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/js/demo/chart-pie-demo.js"), "html", null, true);
        yield "\"></script>
    ";
        // line 445
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 447
        yield "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 13
        yield "        Magic Minds
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 30
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 31
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 384
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 385
        yield "                    admin
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 445
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 446
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Admin/base.html.twig";
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
        return array (  543 => 446,  533 => 445,  521 => 385,  511 => 384,  500 => 31,  490 => 30,  478 => 13,  468 => 12,  455 => 447,  453 => 445,  449 => 444,  445 => 443,  439 => 440,  433 => 437,  427 => 434,  421 => 431,  417 => 430,  406 => 422,  379 => 397,  374 => 387,  372 => 384,  362 => 376,  353 => 373,  350 => 372,  345 => 371,  336 => 368,  333 => 367,  328 => 366,  319 => 363,  316 => 362,  312 => 361,  295 => 347,  281 => 336,  276 => 334,  267 => 327,  263 => 261,  260 => 210,  254 => 183,  233 => 152,  221 => 136,  212 => 123,  202 => 116,  192 => 109,  182 => 102,  179 => 101,  176 => 96,  167 => 88,  157 => 81,  147 => 74,  137 => 67,  127 => 60,  111 => 47,  94 => 32,  92 => 30,  87 => 28,  81 => 25,  77 => 24,  68 => 18,  63 => 15,  61 => 12,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %}
        Magic Minds
        {% endblock %}
    </title>

    <!-- Custom fonts for this template-->
    <link href=\"{{ asset('asset/Admin/vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"{{ asset('asset/Admin/css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
   <link rel=\"stylesheet\" href=\"{{ asset('asset/Admin/css/style.css') }}\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" />
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"{{asset('node_module/@fortawesome/fontawesome-free/css/all.css')}}\" rel=\"stylesheet\" />
    <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
    {% block style %}
    {% endblock %}
</head>

<body id=\"page-top\">

    <!-- Page Wrapper -->
    <div id=\"wrapper\">

        <!-- Sidebar -->
        <ul class=\"navbar-nav bgOrange sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <!-- Sidebar - Brand -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-laugh-wink\"></i>
                </div>
                <img src=\"{{ asset('asset/Admin/img/logo.png') }}\" alt=\"\" width=\"100px\" height=\"100px\">
            </a>

            <!-- Divider -->
            <hr class=\"sidebar-divider my-0\">

            <!-- Nav Item - Dashboard -->


            <!-- Divider -->
            <hr class=\"sidebar-divider my-0\">
          <!--Start Menu -->
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('app_dashboard') }}\">
                <i class=\"fa-solid fa-gauge-simple-high\"></i>
                <span>Dashboard</span></a>
        </li>
            <hr class=\"sidebar-divider my-0\">
          <!--Start Menu -->
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('user.show1') }}\">
                <i class=\"fa-solid fa-user\"></i>
                <span>User Management</span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('app_showproduct') }}\">
                <i class=\"fa-solid fa-cart-shopping\"></i>
                <span>Products Management</span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('admin.category.show') }}\">
                <i class=\"fa-brands fa-youtube\"></i>
                <span>Courses Management</span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('showquizzadmin') }}\">
                <i class=\"fa fa-question\" ></i>
                <span>Quiz </span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
{#            <li class=\"nav-item active\">#}
{#            <a class=\"nav-link\" href=\"{{ path('showquestionadmin') }}\">#}

{#                <span>Question </span></a>#}
{#        </li>#}
{#          <!-- Divider -->#}
{#          <hr class=\"sidebar-divider my-0\">#}
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('showevenements') }}\">
                <i class=\"fa fa-calendar\" ></i>
                <span>Events </span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('showParticipationa') }}\">
                <i class=\"fa-solid fa-right-to-bracket\"></i>
                <span>Participation </span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('afficher_qestion22') }}\">
                <i class=\"fa-solid fa-comment\"></i>
                <span>Forum Question </span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('afficher_reponse22') }}\">
                <i class=\"fa-solid fa-comment\"></i>
                <span>Forum Reponse</span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
{#        <li class=\"nav-item active\">#}
{#            <a class=\"nav-link\" href=\"{{ path('app_showabonnement') }}\">#}
{#                #}
{#                <span>Subscription </span></a>#}
{#        </li>#}
{#          <!-- Divider -->#}
{#          <hr class=\"sidebar-divider my-0\">#}
          <!--End Menu -->

            <!-- Divider -->
            <hr class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

{#            <!-- Sidebar Message -->#}
{#            <div class=\"sidebar-card d-none d-lg-flex\">#}
{#                <img class=\"sidebar-card-illustration mb-2\" src=\"{{ asset('asset/Admin/img/undraw_rocket.svg') }}\" alt=\"...\">#}
{#                <p class=\"text-center mb-2\"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>#}
{#                <a class=\"btn btn-success btn-sm\" href=\"https://startbootstrap.com/theme/sb-admin-pro\">Upgrade to Pro!</a>#}
{#            </div>#}

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id=\"content-wrapper\" class=\"d-flex flex-column\">

            <!-- Main Content -->
            <div id=\"content\">

                <!-- Topbar -->
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                        <i class=\"fa fa-bars\"></i>
                    </button>

                    <!-- Topbar Search -->
{#                    <form#}
{#                        class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">#}
{#                        <div class=\"input-group\">#}
{#                            <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"#}
{#                                aria-label=\"Search\" aria-describedby=\"basic-addon2\">#}
{#                            <div class=\"input-group-append\">#}
{#                                <button class=\"btn bgOrange\" type=\"button\">#}
{#                                    <i class=\"fas fa-search fa-sm\"></i>#}
{#                                </button>#}
{#                            </div>#}
{#                        </div>#}
{#                    </form>#}

                    <!-- Topbar Navbar -->
                    <ul class=\"navbar-nav ml-auto\">

{#                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->#}
{#                        <li class=\"nav-item dropdown no-arrow d-sm-none\">#}
{#                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"#}
{#                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">#}
{#                                <i class=\"fas fa-search fa-fw\"></i>#}
{#                            </a>#}
{#                            <!-- Dropdown - Messages -->#}
{#                            <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"#}
{#                                aria-labelledby=\"searchDropdown\">#}
{#                                <form class=\"form-inline mr-auto w-100 navbar-search\">#}
{#                                    <div class=\"input-group\">#}
{#                                        <input type=\"text\" class=\"form-control bg-light border-0 small\"#}
{#                                            placeholder=\"Search for...\" aria-label=\"Search\"#}
{#                                            aria-describedby=\"basic-addon2\">#}
{#                                        <div class=\"input-group-append\">#}
{#                                            <button class=\"btn btn-primary\" type=\"button\">#}
{#                                                <i class=\"fas fa-search fa-sm\"></i>#}
{#                                            </button>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                </form>#}
{#                            </div>#}
{#                        </li>#}

{#                        <!-- Nav Item - Alerts -->#}
{#                        <li class=\"nav-item dropdown no-arrow mx-1\">#}
{#                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"#}
{#                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">#}
{#                                <i class=\"fas fa-bell fa-fw\"></i>#}
{#                                <!-- Counter - Alerts -->#}
{#                                <span class=\"badge badge-danger badge-counter\">3+</span>#}
{#                            </a>#}
{#                            <!-- Dropdown - Alerts -->#}
{#                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"#}
{#                                aria-labelledby=\"alertsDropdown\">#}
{#                                <h6 class=\"dropdown-header\">#}
{#                                    Alerts Center#}
{#                                </h6>#}
{#                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">#}
{#                                    <div class=\"mr-3\">#}
{#                                        <div class=\"icon-circle bg-primary\">#}
{#                                            <i class=\"fas fa-file-alt text-white\"></i>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                    <div>#}
{#                                        <div class=\"small text-gray-500\">December 12, 2019</div>#}
{#                                        <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>#}
{#                                    </div>#}
{#                                </a>#}
{#                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">#}
{#                                    <div class=\"mr-3\">#}
{#                                        <div class=\"icon-circle bg-success\">#}
{#                                            <i class=\"fas fa-donate text-white\"></i>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                    <div>#}
{#                                        <div class=\"small text-gray-500\">December 7, 2019</div>#}
{#                                        \$290.29 has been deposited into your account!#}
{#                                    </div>#}
{#                                </a>#}
{#                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">#}
{#                                    <div class=\"mr-3\">#}
{#                                        <div class=\"icon-circle bg-warning\">#}
{#                                            <i class=\"fas fa-exclamation-triangle text-white\"></i>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                    <div>#}
{#                                        <div class=\"small text-gray-500\">December 2, 2019</div>#}
{#                                        Spending Alert: We've noticed unusually high spending for your account.#}
{#                                    </div>#}
{#                                </a>#}
{#                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>#}
{#                            </div>#}
{#                        </li>#}

                        <!-- Nav Item - Messages -->
{#                        <li class=\"nav-item dropdown no-arrow mx-1\">#}
{#                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"#}
{#                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">#}
{#                                <i class=\"fas fa-envelope fa-fw\"></i>#}
{#                                <!-- Counter - Messages -->#}
{#                                <span class=\"badge badge-danger badge-counter\">7</span>#}
{#                            </a>#}
{#                            <!-- Dropdown - Messages -->#}
{#                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"#}
{#                                aria-labelledby=\"messagesDropdown\">#}
{#                                <h6 class=\"dropdown-header\">#}
{#                                    Message Center#}
{#                                </h6>#}
{#                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">#}
{#                                    <div class=\"dropdown-list-image mr-3\">#}
{#                                        <img class=\"rounded-circle\" src=\"{{ asset('asset/Admin/img/undraw_profile_1.svg') }}\"#}
{#                                            alt=\"...\">#}
{#                                        <div class=\"status-indicator bg-success\"></div>#}
{#                                    </div>#}
{#                                    <div class=\"font-weight-bold\">#}
{#                                        <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a#}
{#                                            problem I've been having.</div>#}
{#                                        <div class=\"small text-gray-500\">Emily Fowler · 58m</div>#}
{#                                    </div>#}
{#                                </a>#}
{#                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">#}
{#                                    <div class=\"dropdown-list-image mr-3\">#}
{#                                        <img class=\"rounded-circle\" src=\"{{ asset('asset/Admin/img/undraw_profile_2.svg') }}\"#}
{#                                            alt=\"...\">#}
{#                                        <div class=\"status-indicator\"></div>#}
{#                                    </div>#}
{#                                    <div>#}
{#                                        <div class=\"text-truncate\">I have the photos that you ordered last month, how#}
{#                                            would you like them sent to you?</div>#}
{#                                        <div class=\"small text-gray-500\">Jae Chun · 1d</div>#}
{#                                    </div>#}
{#                                </a>#}
{#                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">#}
{#                                    <div class=\"dropdown-list-image mr-3\">#}
{#                                        <img class=\"rounded-circle\" src=\"{{ asset('asset/Admin/img/undraw_profile_3.svg') }}\"#}
{#                                            alt=\"...\">#}
{#                                        <div class=\"status-indicator bg-warning\"></div>#}
{#                                    </div>#}
{#                                    <div>#}
{#                                        <div class=\"text-truncate\">Last month's report looks great, I am very happy with#}
{#                                            the progress so far, keep up the good work!</div>#}
{#                                        <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>#}
{#                                    </div>#}
{#                                </a>#}
{#                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">#}
{#                                    <div class=\"dropdown-list-image mr-3\">#}
{#                                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"#}
{#                                            alt=\"...\">#}
{#                                        <div class=\"status-indicator bg-success\"></div>#}
{#                                    </div>#}
{#                                    <div>#}
{#                                        <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone#}
{#                                            told me that people say this to all dogs, even if they aren't good...</div>#}
{#                                        <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>#}
{#                                    </div>#}
{#                                </a>#}
{#                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>#}
{#                            </div>#}
{#                        </li>#}

                        <div class=\"topbar-divider d-none d-sm-block\"></div>

                        <!-- Nav Item - User Information -->
                        <li class=\"nav-item dropdown no-arrow\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">{{ app.user.username }}</span>
                                <img class=\"img-profile rounded-circle\"
                                    src=\"{{ asset('asset/Admin/img/undraw_profile.svg') }}\">
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
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class=\"container-fluid px-4\">
                    {% for message in app.session.flashBag.get('info') %}
                        <div class=\"alert alert-info\" >
                            {{message}}
                        </div>
                    {% endfor %}
                    {% for message in app.session.flashBag.get('success') %}
                        <div class=\"alert alert-success\" >
                            {{message}}
                        </div>
                    {% endfor %}
                    {% for message in app.session.flashBag.get('error') %}
                        <div class=\"alert alert-danger\" >
                            {{message}}
                        </div>
                    {% endfor %}
                </div>



            <!-- End of Content Wrapper -->



                {% block content %}
                    admin
                {% endblock %}
            <!-- End of Main Content -->

            <!-- Footer -->
{#          <footer class=\"sticky-footer bg-white\">#}
{#                <div class=\"container my-auto\">#}
{#                    <div class=\"copyright text-center my-auto\">#}
{#                        <span>Copyright &copy; Your Website 2021</span>#}
{#                    </div>#}
{#                </div>#}
{#            </footer>#}
            <!-- End of Footer -->
            </div>
        </div>

    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>

    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=\"{{ path('app_logout') }}\">Logout</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src=\"{{ asset('asset/Admin/vendor/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('asset/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"{{ asset('asset/Admin/vendor/jquery-easing/jquery.easing.min.js') }}\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"{{ asset('asset/Admin/js/sb-admin-2.min.js') }}\"></script>

    <!-- Page level plugins -->
    <script src=\"{{ asset('asset/Admin/vendor/chart.js/Chart.min.js') }}\"></script>

    <!-- Page level custom scripts -->
    <script src=\"{{ asset('asset/Admin/js/demo/chart-area-demo.js') }}\"></script>
    <script src=\"{{ asset('asset/Admin/js/demo/chart-pie-demo.js') }}\"></script>
    {% block js %}
    {% endblock %}
</body>

</html>", "Admin/base.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Admin\\base.html.twig");
    }
}
