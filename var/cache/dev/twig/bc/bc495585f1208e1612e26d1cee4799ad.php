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

/* security/login.html.twig */
class __TwigTemplate_3532247079c9461aca74789ac6fe5dc5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        yield "
<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>
            login

    </title>


    <link href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/css/sb-admin-2.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/css/style.css"), "html", null, true);
        yield "\">
    <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_module/@fortawesome/fontawesome-free/css/all.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
</head>

<body id=\"page-top\">

    <div class=\"container\">
        <div class=\"form-inline mb-3\">
            <a class=\"btn bgOrange blColor btn-small mr-auto\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Home Page</a>

        </div>
        <!-- Outer Row -->
        <div class=\"row justify-content-center\">

            <div class=\"col-xl-10 col-lg-12 col-md-9\">

                <div class=\"card o-hidden border-0 shadow-lg my-5\">
                    <div class=\"card-body p-0\">
                        <!-- Nested Row within Card Body -->
                        <div class=\"row\">
                            <div class=\"col-lg-6 d-none d-lg-block bg-login-image\">
                                <img class=\"position-absolute w-100 h-100 rounded\" src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/appointment.jpg"), "html", null, true);
        yield "\"
                                     style=\"object-fit: cover;\">
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"p-5\">
                                    <div class=\"text-center\">
                                        <h1 class=\"h4 text-gray-900 mb-4\">Welcome Back!</h1>
                                    </div>
                                    <form class=\"user\" method=\"post\" novalidate=\"novalidate\">

                                        <div class=\"form-group\">
                                        ";
        // line 52
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 52, $this->source); })())) {
            // line 53
            yield "                                            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()), "messageKey", [], "any", false, false, false, 53), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()), "messageData", [], "any", false, false, false, 53), "security"), "html", null, true);
            yield "</div>
                                        ";
        }
        // line 55
        yield "
                                        ";
        // line 56
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)) {
            // line 57
            yield "                                            <div class=\"mb-3\">
                                                You are logged in as ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "userIdentifier", [], "any", false, false, false, 58), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                                            </div>
                                        ";
        }
        // line 61
        yield "                                        </div>
                                        <div class=\"form-group\">

                                            <input type=\"email\" value=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 64, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\"
                                                   class=\"form-control form-control-user\" autocomplete=\"email\"
                                                   placeholder=\"Enter Email Address...\"
                                                   required autofocus>
                                        </div>
                                        <div class=\"form-group\">


                                            <input type=\"password\" name=\"password\" id=\"inputPassword\"
                                                   class=\"form-control form-control-user\"
                                                   placeholder=\"Password\"
                                                   autocomplete=\"current-password\" required>
                                        </div>
                                        <div class=\"form-group\">


                                            <input type=\"hidden\" name=\"_csrf_token\"
                                                   class=\"form-control form-control-user\"
                                                   value=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
                                            >
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"custom-control custom-checkbox small\">
                                                <input type=\"checkbox\" class=\"custom-control-input\"
                                                       id=\"customCheck\"
                                                       name=\"_remember_me\">
                                                <label class=\"custom-control-label\" for=\"customCheck\">Remember
                                                    Me</label>

                                            </div>
                                        </div>

                                        <button class=\"btn bgOrange blColor btn-user btn-block\" type=\"submit\">
                                            Login
                                        </button>
";
        // line 106
        yield "                                    </form>
                                    <hr>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" >Forgot Password</a>
                                    </div>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
";
        // line 126
        yield "


     <script src=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
     <script src=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

     <!-- Core plugin JavaScript-->
     <script src=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        yield "\"></script>

     <!-- Custom scripts for all pages-->
     <script src=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/js/sb-admin-2.min.js"), "html", null, true);
        yield "\"></script>

        </body>

        </html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
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
        return array (  230 => 136,  224 => 133,  218 => 130,  214 => 129,  209 => 126,  193 => 112,  187 => 109,  182 => 106,  162 => 82,  141 => 64,  136 => 61,  128 => 58,  125 => 57,  123 => 56,  120 => 55,  114 => 53,  112 => 52,  98 => 41,  82 => 28,  72 => 21,  68 => 20,  64 => 19,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>
            login

    </title>


    <link href=\"{{ asset('asset/Admin/css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('asset/Admin/css/style.css') }}\">
    <link href=\"{{asset('node_module/@fortawesome/fontawesome-free/css/all.css')}}\" rel=\"stylesheet\" />
</head>

<body id=\"page-top\">

    <div class=\"container\">
        <div class=\"form-inline mb-3\">
            <a class=\"btn bgOrange blColor btn-small mr-auto\" href=\"{{ path('home') }}\">Home Page</a>

        </div>
        <!-- Outer Row -->
        <div class=\"row justify-content-center\">

            <div class=\"col-xl-10 col-lg-12 col-md-9\">

                <div class=\"card o-hidden border-0 shadow-lg my-5\">
                    <div class=\"card-body p-0\">
                        <!-- Nested Row within Card Body -->
                        <div class=\"row\">
                            <div class=\"col-lg-6 d-none d-lg-block bg-login-image\">
                                <img class=\"position-absolute w-100 h-100 rounded\" src=\"{{ asset('asset/User/img/appointment.jpg') }}\"
                                     style=\"object-fit: cover;\">
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"p-5\">
                                    <div class=\"text-center\">
                                        <h1 class=\"h4 text-gray-900 mb-4\">Welcome Back!</h1>
                                    </div>
                                    <form class=\"user\" method=\"post\" novalidate=\"novalidate\">

                                        <div class=\"form-group\">
                                        {% if error %}
                                            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                        {% endif %}

                                        {% if app.user %}
                                            <div class=\"mb-3\">
                                                You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                                            </div>
                                        {% endif %}
                                        </div>
                                        <div class=\"form-group\">

                                            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\"
                                                   class=\"form-control form-control-user\" autocomplete=\"email\"
                                                   placeholder=\"Enter Email Address...\"
                                                   required autofocus>
                                        </div>
                                        <div class=\"form-group\">


                                            <input type=\"password\" name=\"password\" id=\"inputPassword\"
                                                   class=\"form-control form-control-user\"
                                                   placeholder=\"Password\"
                                                   autocomplete=\"current-password\" required>
                                        </div>
                                        <div class=\"form-group\">


                                            <input type=\"hidden\" name=\"_csrf_token\"
                                                   class=\"form-control form-control-user\"
                                                   value=\"{{ csrf_token('authenticate') }}\"
                                            >
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"custom-control custom-checkbox small\">
                                                <input type=\"checkbox\" class=\"custom-control-input\"
                                                       id=\"customCheck\"
                                                       name=\"_remember_me\">
                                                <label class=\"custom-control-label\" for=\"customCheck\">Remember
                                                    Me</label>

                                            </div>
                                        </div>

                                        <button class=\"btn bgOrange blColor btn-user btn-block\" type=\"submit\">
                                            Login
                                        </button>
{#                                        <hr>#}
{#                                        <a href=\"index.html\" class=\"btn btn-google btn-user btn-block\">#}
{#                                            <i class=\"fab fa-google fa-fw\"></i> Login with Google#}
{#                                        </a>#}
{#                                        <a href=\"index.html\" class=\"btn btn-facebook btn-user btn-block\">#}
{#                                            <i class=\"fab fa-facebook-f fa-fw\"></i> Login with Facebook#}
{#                                        </a>#}
                                    </form>
                                    <hr>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"{{ path('app_forgot_password_request')}}\" >Forgot Password</a>
                                    </div>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"{{ path('app_register') }}\">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
{#    #}



     <script src=\"{{ asset('asset/Admin/vendor/jquery/jquery.min.js') }}\"></script>
     <script src=\"{{ asset('asset/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

     <!-- Core plugin JavaScript-->
     <script src=\"{{ asset('asset/Admin/vendor/jquery-easing/jquery.easing.min.js') }}\"></script>

     <!-- Custom scripts for all pages-->
     <script src=\"{{ asset('asset/Admin/js/sb-admin-2.min.js') }}\"></script>

        </body>

        </html>", "security/login.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\security\\login.html.twig");
    }
}
