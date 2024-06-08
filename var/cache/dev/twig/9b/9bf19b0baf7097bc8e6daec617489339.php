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

/* registration/register.html.twig */
class __TwigTemplate_b199e8bd14d99f31da92b54e69b3b52a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/css/style.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_module/@fortawesome/fontawesome-free/css/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
</head>

<body id=\"page-top\">

<div class=\"container\">

    <div class=\"card o-hidden border-0 shadow-lg my-5\">
        <div class=\"card-body p-0\">
            <!-- Nested Row within Card Body -->
            <div class=\"row\">
                <div class=\"col-lg-5 d-none d-lg-block bg-register-image\">
                    <img class=\"position-absolute w-100 h-100 rounded\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/appointment.jpg"), "html", null, true);
        echo "\"
                         style=\"object-fit: cover;\">
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"p-5\">
                        <div class=\"text-center\">
                            <h1 class=\"h4 text-gray-900 mb-4\">Create an Account!</h1>
                        </div>

                            ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "user"]]);
        // line 45
        echo "

                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 48
            echo "                                <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">

                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "firstName", [], "any", false, false, false, 54), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "First Name"]]);
        // line 58
        echo "
                                </div>
                                <div class=\"col-sm-6\">

                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "lastName", [], "any", false, false, false, 62), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Last Name"]]);
        // line 66
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">

                                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "email", [], "any", false, false, false, 71), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Email Address"]]);
        // line 75
        echo "
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">

                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "roles", [], "any", false, false, false, 80), 'row', ["attr" => ["class" => "form-control "]]);
        // line 84
        echo "
                                </div>
                                <div class=\"col-sm-6\">

                                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 88, $this->source); })()), "gender", [], "any", false, false, false, 88), 'row', ["attr" => ["class" => "form-control"]]);
        // line 92
        echo "
                                </div>
                            </div>
                            <div class=\"form-group \">


                                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 98, $this->source); })()), "password", [], "any", false, false, false, 98), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Password"]]);
        // line 102
        echo "
                                </div>




                        <div class=\"form-group \">
                            ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 109, $this->source); })()), "age", [], "any", false, false, false, 109), 'row', ["attr" => ["class" => "form-control form-control-user"]]);
        // line 113
        echo "
                        </div>

                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 116, $this->source); })()), "agreeTerms", [], "any", false, false, false, 116), 'row', ["attr" => []]);
        // line 120
        echo "
                            <button type=\"submit\" class=\"btn bgOrange blColor btn-user btn-block\">Register</button>
                            ";
        // line 122
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 122, $this->source); })()), 'form_end');
        echo "

                        <hr>
                        <div class=\"text-center\">
                            <a class=\"small\" href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Forgot Password?</a>
                        </div>
                        <div class=\"text-center\">
                            <a class=\"small\" href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>









";
        // line 150
        echo "
";
        // line 152
        echo "
";
        // line 154
        echo "
";
        // line 161
        echo "
";
        // line 164
        echo "



    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"";
        // line 175
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
        return "registration/register.html.twig";
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
        return array (  258 => 175,  252 => 172,  246 => 169,  242 => 168,  236 => 164,  233 => 161,  230 => 154,  227 => 152,  224 => 150,  203 => 129,  197 => 126,  190 => 122,  186 => 120,  184 => 116,  179 => 113,  177 => 109,  168 => 102,  166 => 98,  158 => 92,  156 => 88,  150 => 84,  148 => 80,  141 => 75,  139 => 71,  132 => 66,  130 => 62,  124 => 58,  122 => 54,  117 => 51,  108 => 48,  104 => 47,  100 => 45,  98 => 42,  86 => 33,  71 => 21,  67 => 20,  63 => 19,  43 => 1,);
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

    <div class=\"card o-hidden border-0 shadow-lg my-5\">
        <div class=\"card-body p-0\">
            <!-- Nested Row within Card Body -->
            <div class=\"row\">
                <div class=\"col-lg-5 d-none d-lg-block bg-register-image\">
                    <img class=\"position-absolute w-100 h-100 rounded\" src=\"{{ asset('asset/User/img/appointment.jpg') }}\"
                         style=\"object-fit: cover;\">
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"p-5\">
                        <div class=\"text-center\">
                            <h1 class=\"h4 text-gray-900 mb-4\">Create an Account!</h1>
                        </div>

                            {{ form_start(registrationForm,{'attr': {'novalidate': 'novalidate',
                                'class' : 'user'

                            } }) }}

                            {% for flash_error in app.flashes('verify_email_error') %}
                                <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
                            {% endfor %}
{#                            {{ form_errors(registrationForm) }}#}
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">

                                    {{ form_row(registrationForm.firstName,{ 'attr' : {
                                        'class' : 'form-control form-control-user',
                                        'placeholder' : 'First Name'

                                    }}) }}
                                </div>
                                <div class=\"col-sm-6\">

                                    {{ form_row(registrationForm.lastName,{ 'attr' : {
                                        'class' : 'form-control form-control-user',
                                        'placeholder' : 'Last Name'

                                    }}) }}
                                </div>
                            </div>
                            <div class=\"form-group\">

                                {{ form_row(registrationForm.email,{ 'attr' : {
                                    'class' : 'form-control form-control-user',
                                    'placeholder' : 'Email Address'

                                }}) }}
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">

                                    {{ form_row(registrationForm.roles,{ 'attr' : {
                                        'class' : 'form-control ',


                                    }}) }}
                                </div>
                                <div class=\"col-sm-6\">

                                    {{ form_row(registrationForm.gender,{ 'attr' : {
                                        'class' : 'form-control',


                                    }}) }}
                                </div>
                            </div>
                            <div class=\"form-group \">


                                    {{ form_row(registrationForm.password,{ 'attr' : {
                                        'class' : 'form-control form-control-user',
                                        'placeholder' : 'Password'

                                    }}) }}
                                </div>




                        <div class=\"form-group \">
                            {{ form_row(registrationForm.age,{ 'attr' : {
                                'class' : 'form-control form-control-user',


                            }}) }}
                        </div>

                            {{ form_row(registrationForm.agreeTerms,{ 'attr' : {



                            }}) }}
                            <button type=\"submit\" class=\"btn bgOrange blColor btn-user btn-block\">Register</button>
                            {{ form_end(registrationForm) }}

                        <hr>
                        <div class=\"text-center\">
                            <a class=\"small\" href=\"{{ path('app_forgot_password_request')}}\">Forgot Password?</a>
                        </div>
                        <div class=\"text-center\">
                            <a class=\"small\" href=\"{{ path('app_login') }}\">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>









{#    {% for flash_error in app.flashes('verify_email_error') %}#}
{#        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>#}
{#    {% endfor %}#}

{#    <h1>Register</h1>#}

{#    {{ form_errors(registrationForm) }}#}

{#    {{ form_start(registrationForm,{'attr': {'novalidate': 'novalidate'}}) }}#}
{#        {{ form_row(registrationForm.email) }}#}
{#        {{ form_row(registrationForm.plainPassword, {#}
{#            label: 'Password'#}
{#        }) }}#}
{#        {{ form_row(registrationForm.agreeTerms) }}#}

{#        <button type=\"submit\" class=\"btn\">Register</button>#}
{#    {{ form_end(registrationForm) }}#}




    <script src=\"{{ asset('asset/Admin/vendor/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('asset/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"{{ asset('asset/Admin/vendor/jquery-easing/jquery.easing.min.js') }}\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"{{ asset('asset/Admin/js/sb-admin-2.min.js') }}\"></script>

</body>

</html>", "registration/register.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\registration\\register.html.twig");
    }
}
