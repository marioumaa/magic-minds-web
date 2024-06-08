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

/* Admin/base.html.twig */
class __TwigTemplate_e05b83b8237d1f431312e36d5d6b8e94 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        // line 15
        echo "    </title>

    <!-- Custom fonts for this template-->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
   <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/css/style.css"), "html", null, true);
        echo "\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" />
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_module/@fortawesome/fontawesome-free/css/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
    ";
        // line 30
        $this->displayBlock('style', $context, $blocks);
        // line 32
        echo "</head>

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" width=\"100px\" height=\"100px\">
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">
                <i class=\"fa-solid fa-gauge-simple-high\"></i>
                <span>Dashboard</span></a>
        </li>
            <hr class=\"sidebar-divider my-0\">
          <!--Start Menu -->
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.show1");
        echo "\">
                <i class=\"fa-solid fa-user\"></i>
                <span>User Management</span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_showproduct");
        echo "\">
                <i class=\"fa-solid fa-cart-shopping\"></i>
                <span>Products Management</span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.category.show");
        echo "\">
                <i class=\"fa-brands fa-youtube\"></i>
                <span>Courses Management</span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showquizzadmin");
        echo "\">
                <i class=\"fa fa-question\" ></i>
                <span>Quiz </span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
";
        // line 96
        echo "
";
        // line 101
        echo "        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenements");
        echo "\">
                <i class=\"fa fa-calendar\" ></i>
                <span>Events </span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showParticipationa");
        echo "\">
                <i class=\"fa-solid fa-right-to-bracket\"></i>
                <span>Participation </span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_qestion22");
        echo "\">
                <i class=\"fa-solid fa-comment\"></i>
                <span>Forum Question </span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_reponse22");
        echo "\">
                <i class=\"fa-solid fa-comment\"></i>
                <span>Forum Reponse</span></a>
        </li>
          <!-- Divider -->
          <hr class=\"sidebar-divider my-0\">
";
        // line 136
        echo "          <!--End Menu -->

            <!-- Divider -->
            <hr class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

";
        // line 152
        echo "
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
        echo "
                    <!-- Topbar Navbar -->
                    <ul class=\"navbar-nav ml-auto\">

";
        // line 210
        echo "
";
        // line 261
        echo "
                        <!-- Nav Item - Messages -->
";
        // line 327
        echo "
                        <div class=\"topbar-divider d-none d-sm-block\"></div>

                        <!-- Nav Item - User Information -->
                        <li class=\"nav-item dropdown no-arrow\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">";
        // line 334
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 334, $this->source); })()), "user", [], "any", false, false, false, 334), "username", [], "any", false, false, false, 334), "html", null, true);
        echo "</span>
                                <img class=\"img-profile rounded-circle\"
                                    src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/img/undraw_profile.svg"), "html", null, true);
        echo "\">
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" data-toggle=\"modal\" data-target=\"#logoutModal\">
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 361, $this->source); })()), "session", [], "any", false, false, false, 361), "flashBag", [], "any", false, false, false, 361), "get", ["info"], "method", false, false, false, 361));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 362
            echo "                        <div class=\"alert alert-info\" >
                            ";
            // line 363
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 366
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 366, $this->source); })()), "session", [], "any", false, false, false, 366), "flashBag", [], "any", false, false, false, 366), "get", ["success"], "method", false, false, false, 366));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 367
            echo "                        <div class=\"alert alert-success\" >
                            ";
            // line 368
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 371
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 371, $this->source); })()), "session", [], "any", false, false, false, 371), "flashBag", [], "any", false, false, false, 371), "get", ["error"], "method", false, false, false, 371));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 372
            echo "                        <div class=\"alert alert-danger\" >
                            ";
            // line 373
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 376
        echo "                </div>



            <!-- End of Content Wrapper -->



                ";
        // line 384
        $this->displayBlock('content', $context, $blocks);
        // line 387
        echo "            <!-- End of Main Content -->

            <!-- Footer -->
";
        // line 397
        echo "            <!-- End of Footer -->
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Page level plugins -->
    <script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Page level custom scripts -->
    <script src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/js/demo/chart-area-demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/js/demo/chart-pie-demo.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 445
        $this->displayBlock('js', $context, $blocks);
        // line 447
        echo "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "        Magic Minds
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "                    admin
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  538 => 446,  528 => 445,  517 => 385,  507 => 384,  497 => 31,  487 => 30,  476 => 13,  466 => 12,  454 => 447,  452 => 445,  448 => 444,  444 => 443,  438 => 440,  432 => 437,  426 => 434,  420 => 431,  416 => 430,  405 => 422,  378 => 397,  373 => 387,  371 => 384,  361 => 376,  352 => 373,  349 => 372,  344 => 371,  335 => 368,  332 => 367,  327 => 366,  318 => 363,  315 => 362,  311 => 361,  294 => 347,  280 => 336,  275 => 334,  266 => 327,  262 => 261,  259 => 210,  253 => 183,  232 => 152,  220 => 136,  211 => 123,  201 => 116,  191 => 109,  181 => 102,  178 => 101,  175 => 96,  166 => 88,  156 => 81,  146 => 74,  136 => 67,  126 => 60,  110 => 47,  93 => 32,  91 => 30,  86 => 28,  80 => 25,  76 => 24,  67 => 18,  62 => 15,  60 => 12,  47 => 1,);
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

</html>", "Admin/base.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\Admin\\base.html.twig");
    }
}
