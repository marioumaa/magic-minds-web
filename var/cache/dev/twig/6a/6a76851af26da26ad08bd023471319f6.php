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

/* reset_password/reset.html.twig */
class __TwigTemplate_9743824ae6c9c11573aa8a57c192c879 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>
        Reset your password

    </title>


    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/css/style.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_module/@fortawesome/fontawesome-free/css/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
</head>

<body id=\"page-top\">

<div class=\"container mt-5\">

    <!-- Outer Row -->
    <div class=\"row justify-content-center\">

        <div class=\"col-xl-10 col-lg-12 col-md-9\">

            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                <div class=\"card-body p-0\">
                    <!-- Nested Row within Card Body -->
                    <div class=\"row\">
                        <div class=\"col-lg-6 d-none d-lg-block bg-password-image\">

                            <img class=\"position-absolute w-100 h-100 rounded\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/appointment.jpg"), "html", null, true);
        echo "\"
                                 style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"p-5\">
                                <div class=\"text-center\">
                                    <h1 class=\"h4 text-gray-900 mb-2\">Forgot Your Password?</h1>
                                    <p class=\"mb-4\">We get it, stuff happens. Just enter your email address below
                                        and we'll send you a link to reset your password!</p>
                                </div>

                                ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 49, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "user"]]);
        // line 52
        echo "

                                <div class=\"form-group\">

                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 56, $this->source); })()), "plainPassword", [], "any", false, false, false, 56), "first", [], "any", false, false, false, 56), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Enter new password"]]);
        // line 61
        echo "
                                </div>
                                <div class=\"form-group\">

                                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 65, $this->source); })()), "plainPassword", [], "any", false, false, false, 65), "second", [], "any", false, false, false, 65), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Enter new password"]]);
        // line 70
        echo "
                                </div>


                                <button class=\"btn bgOrange blColor btn-user btn-block\">Reset Password</button>
                                ";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 75, $this->source); })()), 'form_end');
        echo "

                                <hr>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"register.html\">Create an Account!</a>
                                </div>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"login.html\">Already have an account? Login!</a>
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
        // line 110
        echo "
";
        // line 113
        echo "
";
        // line 117
        echo "





<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

<!-- Core plugin JavaScript-->
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

<!-- Custom scripts for all pages-->
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reset_password/reset.html.twig";
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
        return array (  196 => 130,  190 => 127,  184 => 124,  180 => 123,  172 => 117,  169 => 113,  166 => 110,  130 => 75,  123 => 70,  121 => 65,  115 => 61,  113 => 56,  107 => 52,  105 => 49,  91 => 38,  70 => 20,  66 => 19,  62 => 18,  43 => 1,);
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

    <title>
        Reset your password

    </title>


    <link href=\"{{ asset('asset/Admin/css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('asset/Admin/css/style.css') }}\">
    <link href=\"{{asset('node_module/@fortawesome/fontawesome-free/css/all.css')}}\" rel=\"stylesheet\" />
</head>

<body id=\"page-top\">

<div class=\"container mt-5\">

    <!-- Outer Row -->
    <div class=\"row justify-content-center\">

        <div class=\"col-xl-10 col-lg-12 col-md-9\">

            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                <div class=\"card-body p-0\">
                    <!-- Nested Row within Card Body -->
                    <div class=\"row\">
                        <div class=\"col-lg-6 d-none d-lg-block bg-password-image\">

                            <img class=\"position-absolute w-100 h-100 rounded\" src=\"{{ asset('asset/User/img/appointment.jpg') }}\"
                                 style=\"object-fit: cover;\">
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"p-5\">
                                <div class=\"text-center\">
                                    <h1 class=\"h4 text-gray-900 mb-2\">Forgot Your Password?</h1>
                                    <p class=\"mb-4\">We get it, stuff happens. Just enter your email address below
                                        and we'll send you a link to reset your password!</p>
                                </div>

                                {{ form_start(resetForm,{'attr': {'novalidate': 'novalidate',
                                    'class' : 'user'

                                } }) }}

                                <div class=\"form-group\">

                                    {{ form_row(resetForm.plainPassword.first,{ 'attr' : {
                                        'class' : 'form-control form-control-user',
                                        'placeholder' : 'Enter new password',


                                    }}) }}
                                </div>
                                <div class=\"form-group\">

                                    {{ form_row(resetForm.plainPassword.second,{ 'attr' : {
                                        'class' : 'form-control form-control-user',
                                        'placeholder' : 'Enter new password',


                                    }}) }}
                                </div>


                                <button class=\"btn bgOrange blColor btn-user btn-block\">Reset Password</button>
                                {{ form_end(resetForm) }}

                                <hr>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"register.html\">Create an Account!</a>
                                </div>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"login.html\">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>













{#{% block body %}#}
{#    <h1>Reset your password</h1>#}

{#    {{ form_start(resetForm,{'attr': {'novalidate': 'novalidate'}} ) }}#}
{#        {{ form_row(resetForm.plainPassword) }}#}

{#        <button class=\"btn btn-primary\">Reset password</button>#}
{#    {{ form_end(resetForm) }}#}
{#{% endblock %}#}






<script src=\"{{ asset('asset/Admin/vendor/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('asset/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

<!-- Core plugin JavaScript-->
<script src=\"{{ asset('asset/Admin/vendor/jquery-easing/jquery.easing.min.js') }}\"></script>

<!-- Custom scripts for all pages-->
<script src=\"{{ asset('asset/Admin/js/sb-admin-2.min.js') }}\"></script>

</body>

</html>", "reset_password/reset.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\reset_password\\reset.html.twig");
    }
}
