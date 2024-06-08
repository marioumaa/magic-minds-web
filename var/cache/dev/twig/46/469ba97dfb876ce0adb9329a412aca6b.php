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

/* Admin/dashboard.html.twig */
class __TwigTemplate_8b03ccafdec390fdb7df5aa556d6d1db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/dashboard.html.twig", 1);
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

        yield "Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\"
    integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\"
    crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\">

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card shadow\"
                style=\"border: 2px solid white; border-radius: 20px ; width: 100%; height:120px ; margin-top:20px\">
                <div class=\"card-body\">
                    <table align=\"left\">
                        <tr>
                            <td>
                                <h4 class=\"card-title\">Total </h4>
                                <h3 class=\"card-title\">Users</h3>
                            </td>
                            <td>
                                <h1 class=\"text-success\" style=\"margin-left:80px;\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["Tusers"]) || array_key_exists("Tusers", $context) ? $context["Tusers"] : (function () { throw new RuntimeError('Variable "Tusers" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "</h1>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card shadow\"
                style=\"border: 2px solid white; border-radius: 20px ; width: 100%; height:120px ; margin-top:20px\">
                <div class=\"card-body\">
                    <table align=\"left\">
                        <tr>
                            <td>
                                <h4 class=\"card-title\">Total </h4>
                                <h3 class=\"card-title\">Courses</h3>
                            </td>
                            <td>
                                <h1 class=\"text-success\" style=\"margin-left: 50px;\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["Tcourses"]) || array_key_exists("Tcourses", $context) ? $context["Tcourses"] : (function () { throw new RuntimeError('Variable "Tcourses" does not exist.', 39, $this->source); })()), "html", null, true);
        yield "</h1>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card shadow\"
                style=\"border: 2px solid white; border-radius: 20px ; width: 100%; height:120px ; margin-top:20px\">
                <div class=\"card-body\">
                    <table align=\"left\">
                        <tr>
                            <td>
                                <h4 class=\"card-title\">Total </h4>
                                <h3 class=\"card-title\">Product</h3>
                            </td>
                            <td>
                                <h1 class=\"text-success\" style=\"margin-left: 50px;\"> ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["Tproduct"]) || array_key_exists("Tproduct", $context) ? $context["Tproduct"] : (function () { throw new RuntimeError('Variable "Tproduct" does not exist.', 57, $this->source); })()), "html", null, true);
        yield "</h1>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card shadow\"
                style=\"border: 2px solid white; border-radius: 20px ; width: 100%; height:120px ; margin-top:20px\">
                <div class=\"card-body\">
                    <table align=\"left\">
                        <tr>
                            <td>
                                <h4 class=\"card-title\">Total </h4>
                                <h3 class=\"card-title\">Events</h3>
                            </td>
                            <td>
                                <h1 class=\"text-success\" style=\"margin-left:80px;\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["Tevent"]) || array_key_exists("Tevent", $context) ? $context["Tevent"] : (function () { throw new RuntimeError('Variable "Tevent" does not exist.', 75, $this->source); })()), "html", null, true);
        yield "</h1>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row align-items-center pt-3 mb-2\">
        <div class=\"col-6 p-2 align-items-center\">
            <div class=\"align-items-center card shadow mr-1\">
                <canvas id=\"usersPie\" width=\"100px\" height=\"100px\" style=\"padding: 30px;\"></canvas>
                <h6>Gender Distribution</h6>
            </div>
        </div>
        <div class=\"col-6 p-2 align-items-center\">
            <div class=\"align-items-center card shadow \">
                <canvas id=\"usersBars\" width=\"100px\" height=\"100px\" style=\"padding: 30px;\"></canvas>
                <h6>Users Distribution</h6>
            </div>
        </div>
    </div>
</div>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\"
    integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\"
    crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\">
    </script>
<script>
    let usersPie = document.querySelector(\"#usersPie\")
    var femaleV = \"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["Tfemale"]) || array_key_exists("Tfemale", $context) ? $context["Tfemale"] : (function () { throw new RuntimeError('Variable "Tfemale" does not exist.', 104, $this->source); })()), "html", null, true);
        yield "\"
    var maleV = \"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["Tmale"]) || array_key_exists("Tmale", $context) ? $context["Tmale"] : (function () { throw new RuntimeError('Variable "Tmale" does not exist.', 105, $this->source); })()), "html", null, true);
        yield "\"
    let genderGraph = new Chart(usersPie, {
        type: \"pie\",
        data: {
            labels: [\"Female\", \"Male\"],
            datasets: [{
                label: \"gender\",
                data: [femaleV, maleV],
                backgroundColor: [\"#FFC107\", \"#103741\"]
            }]
        }
    })

</script>
<script>
    let usersBars = document.querySelector(\"#usersBars\")
    let catGraph = new Chart(usersBars, {
        type: 'bar',
        data: {
            labels: ";
        // line 124
        yield (isset($context["topName"]) || array_key_exists("topName", $context) ? $context["topName"] : (function () { throw new RuntimeError('Variable "topName" does not exist.', 124, $this->source); })());
        yield " ,
            datasets: [{
                label: 'Course Count By category',
                data: ";
        // line 127
        yield (isset($context["topNbr"]) || array_key_exists("topNbr", $context) ? $context["topNbr"] : (function () { throw new RuntimeError('Variable "topNbr" does not exist.', 127, $this->source); })());
        yield " ,
                backgroundColor: 'rgba(75, 192, 192, 0.2)', 
                borderColor: 'rgba(75, 192, 192, 1)', 
                borderWidth: 1 
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true // Start the y-axis from zero
                }
            }
        }
    });
</script>
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
        return "Admin/dashboard.html.twig";
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
        return array (  236 => 127,  230 => 124,  208 => 105,  204 => 104,  172 => 75,  151 => 57,  130 => 39,  109 => 21,  90 => 4,  80 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/base.html.twig' %}
{% block title %}Dashboard{% endblock %}
{% block content %}
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\"
    integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\"
    crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\">

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card shadow\"
                style=\"border: 2px solid white; border-radius: 20px ; width: 100%; height:120px ; margin-top:20px\">
                <div class=\"card-body\">
                    <table align=\"left\">
                        <tr>
                            <td>
                                <h4 class=\"card-title\">Total </h4>
                                <h3 class=\"card-title\">Users</h3>
                            </td>
                            <td>
                                <h1 class=\"text-success\" style=\"margin-left:80px;\">{{Tusers}}</h1>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card shadow\"
                style=\"border: 2px solid white; border-radius: 20px ; width: 100%; height:120px ; margin-top:20px\">
                <div class=\"card-body\">
                    <table align=\"left\">
                        <tr>
                            <td>
                                <h4 class=\"card-title\">Total </h4>
                                <h3 class=\"card-title\">Courses</h3>
                            </td>
                            <td>
                                <h1 class=\"text-success\" style=\"margin-left: 50px;\">{{Tcourses}}</h1>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card shadow\"
                style=\"border: 2px solid white; border-radius: 20px ; width: 100%; height:120px ; margin-top:20px\">
                <div class=\"card-body\">
                    <table align=\"left\">
                        <tr>
                            <td>
                                <h4 class=\"card-title\">Total </h4>
                                <h3 class=\"card-title\">Product</h3>
                            </td>
                            <td>
                                <h1 class=\"text-success\" style=\"margin-left: 50px;\"> {{Tproduct}}</h1>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card shadow\"
                style=\"border: 2px solid white; border-radius: 20px ; width: 100%; height:120px ; margin-top:20px\">
                <div class=\"card-body\">
                    <table align=\"left\">
                        <tr>
                            <td>
                                <h4 class=\"card-title\">Total </h4>
                                <h3 class=\"card-title\">Events</h3>
                            </td>
                            <td>
                                <h1 class=\"text-success\" style=\"margin-left:80px;\">{{Tevent}}</h1>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row align-items-center pt-3 mb-2\">
        <div class=\"col-6 p-2 align-items-center\">
            <div class=\"align-items-center card shadow mr-1\">
                <canvas id=\"usersPie\" width=\"100px\" height=\"100px\" style=\"padding: 30px;\"></canvas>
                <h6>Gender Distribution</h6>
            </div>
        </div>
        <div class=\"col-6 p-2 align-items-center\">
            <div class=\"align-items-center card shadow \">
                <canvas id=\"usersBars\" width=\"100px\" height=\"100px\" style=\"padding: 30px;\"></canvas>
                <h6>Users Distribution</h6>
            </div>
        </div>
    </div>
</div>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\"
    integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\"
    crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\">
    </script>
<script>
    let usersPie = document.querySelector(\"#usersPie\")
    var femaleV = \"{{Tfemale}}\"
    var maleV = \"{{Tmale}}\"
    let genderGraph = new Chart(usersPie, {
        type: \"pie\",
        data: {
            labels: [\"Female\", \"Male\"],
            datasets: [{
                label: \"gender\",
                data: [femaleV, maleV],
                backgroundColor: [\"#FFC107\", \"#103741\"]
            }]
        }
    })

</script>
<script>
    let usersBars = document.querySelector(\"#usersBars\")
    let catGraph = new Chart(usersBars, {
        type: 'bar',
        data: {
            labels: {{topName | raw}} ,
            datasets: [{
                label: 'Course Count By category',
                data: {{topNbr | raw}} ,
                backgroundColor: 'rgba(75, 192, 192, 0.2)', 
                borderColor: 'rgba(75, 192, 192, 1)', 
                borderWidth: 1 
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true // Start the y-axis from zero
                }
            }
        }
    });
</script>
{% endblock %}", "Admin/dashboard.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Admin\\dashboard.html.twig");
    }
}
