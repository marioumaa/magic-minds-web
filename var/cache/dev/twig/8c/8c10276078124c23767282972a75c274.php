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

/* registration/register.html.twig */
class __TwigTemplate_c5c1d2c9a3e5905e47dd43f15d4c19cd extends Template
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

    <div class=\"card o-hidden border-0 shadow-lg my-5\">
        <div class=\"card-body p-0\">
            <!-- Nested Row within Card Body -->
            <div class=\"row\">
                <div class=\"col-lg-5 d-none d-lg-block bg-register-image\">
                    <img class=\"position-absolute w-100 h-100 rounded\" src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/appointment.jpg"), "html", null, true);
        yield "\"
                         style=\"object-fit: cover;\">
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"p-5\">
                        <div class=\"text-center\">
                            <h1 class=\"h4 text-gray-900 mb-4\">Create an Account!</h1>
                        </div>

                            ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "user"]]);
        // line 45
        yield "

                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 48
            yield "                                <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">

                                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "firstName", [], "any", false, false, false, 54), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "First Name"]]);
        // line 58
        yield "
                                </div>
                                <div class=\"col-sm-6\">

                                    ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "lastName", [], "any", false, false, false, 62), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Last Name"]]);
        // line 66
        yield "
                                </div>
                            </div>
                            <div class=\"form-group\">

                                ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "email", [], "any", false, false, false, 71), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Email Address"]]);
        // line 75
        yield "
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">

                                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "roles", [], "any", false, false, false, 80), 'row', ["attr" => ["class" => "form-control "]]);
        // line 84
        yield "
                                </div>
                                <div class=\"col-sm-6\">

                                    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 88, $this->source); })()), "gender", [], "any", false, false, false, 88), 'row', ["attr" => ["class" => "form-control"]]);
        // line 92
        yield "
                                </div>
                            </div>
                            <div class=\"form-group \">


                                    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 98, $this->source); })()), "password", [], "any", false, false, false, 98), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Password"]]);
        // line 102
        yield "
                                </div>




                        <div class=\"form-group \">
                            ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 109, $this->source); })()), "age", [], "any", false, false, false, 109), 'row', ["attr" => ["class" => "form-control form-control-user"]]);
        // line 113
        yield "
                        </div>

                            ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 116, $this->source); })()), "agreeTerms", [], "any", false, false, false, 116), 'row', ["attr" => []]);
        // line 120
        yield "
                            <button type=\"submit\" class=\"btn bgOrange blColor btn-user btn-block\">Register</button>
                            ";
        // line 122
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 122, $this->source); })()), 'form_end');
        yield "

                        <hr>
                        <div class=\"text-center\">
                            <a class=\"small\" href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\">Forgot Password?</a>
                        </div>
                        <div class=\"text-center\">
                            <a class=\"small\" href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>









";
        // line 150
        yield "
";
        // line 152
        yield "
";
        // line 154
        yield "
";
        // line 161
        yield "
";
        // line 164
        yield "



    <script src=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"";
        // line 175
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
        return array (  259 => 175,  253 => 172,  247 => 169,  243 => 168,  237 => 164,  234 => 161,  231 => 154,  228 => 152,  225 => 150,  204 => 129,  198 => 126,  191 => 122,  187 => 120,  185 => 116,  180 => 113,  178 => 109,  169 => 102,  167 => 98,  159 => 92,  157 => 88,  151 => 84,  149 => 80,  142 => 75,  140 => 71,  133 => 66,  131 => 62,  125 => 58,  123 => 54,  118 => 51,  109 => 48,  105 => 47,  101 => 45,  99 => 42,  87 => 33,  72 => 21,  68 => 20,  64 => 19,  44 => 1,);
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

</html>", "registration/register.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\registration\\register.html.twig");
    }
}
