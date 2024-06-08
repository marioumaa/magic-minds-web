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

/* aboutUs.html.twig */
class __TwigTemplate_67649d4fca4925a410db95bf695904c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navimg' => [$this, 'block_navimg'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aboutUs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aboutUs.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "aboutUs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_navimg($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navimg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navimg"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <!-- About Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5 align-items-center\">
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <h1 class=\"mb-4\">
                        Learn More About Our Work And Our Cultural Activities
                    </h1>
                    <p>
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                        Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                        sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <p class=\"mb-4\">
                        Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No
                        stet est diam rebum amet diam ipsum. Clita clita labore, dolor
                        duo nonumy clita sit at, sed sit sanctus dolor eos, ipsum labore
                        duo duo sit no sea diam. Et dolor et kasd ea. Eirmod diam at
                        dolor est vero nonumy magna.
                    </p>
                    <div class=\"row g-4 align-items-center\">
                        <div class=\"col-sm-6\">
                            <a class=\"btn btn-primary rounded-pill py-3 px-5\" href=\"\"
                            >Read More</a
                            >
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"d-flex align-items-center\">
                                <img
                                        class=\"rounded-circle flex-shrink-0\"
                                        src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/img/user.jpg"), "html", null, true);
        echo "\"
                                        alt=\"\"
                                        style=\"width: 45px; height: 45px\"
                                />
                                <div class=\"ms-3\">
                                    <h6 class=\"text-primary mb-1\">Jhon Doe</h6>
                                    <small>CEO & Founder</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 about-img wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"row\">
                        <div class=\"col-12 text-center\">
                            <img
                                    class=\"img-fluid w-75 rounded-circle bg-light p-3\"
                                    src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/img/f1.jpg"), "html", null, true);
        echo "\"
                                    alt=\"\"
                            />
                        </div>
                        <div class=\"col-6 text-start\" style=\"margin-top: -150px\">
                            <img
                                    class=\"img-fluid w-100 rounded-circle bg-light p-3\"
                                    src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/img/i4.jpg"), "html", null, true);
        echo "\"
                                    alt=\"\"
                            />
                        </div>
                        <div class=\"col-6 text-end\" style=\"margin-top: -150px\">
                            <img
                                    class=\"img-fluid w-100 rounded-circle bg-light p-3\"
                                    src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/img/i3.jpg"), "html", null, true);
        echo "\"
                                    alt=\"\"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Call To Action Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"bg-light rounded\">
                <div class=\"row g-0\">
                    <div
                            class=\"col-lg-6 wow fadeIn\"
                            data-wow-delay=\"0.1s\"
                            style=\"min-height: 400px\"
                    >
                        <div class=\"position-relative h-100\">
                            <img
                                    class=\"position-absolute w-100 h-100 rounded\"
                                    src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/img/i2.png"), "html", null, true);
        echo "\"
                                    style=\"object-fit: cover\"
                            />
                        </div>
                    </div>
                    <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                        <div
                                class=\"h-100 d-flex flex-column justify-content-center p-5\"
                        >
                            <h1 class=\"mb-4\">Become A Teacher</h1>
                            <p class=\"mb-4\">
                                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                                sit, sed stet lorem sit clita duo justo magna dolore erat
                                amet
                            </p>
                            <a class=\"btn btn-primary py-3 px-5\" href=\"\"
                            >Get Started Now<i class=\"fa fa-arrow-right ms-2\"></i
                                ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "aboutUs.html.twig";
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
        return array (  186 => 90,  159 => 66,  149 => 59,  139 => 52,  119 => 35,  87 => 5,  77 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}
{% block navimg %}
{% endblock %}
{% block body %}
    <!-- About Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5 align-items-center\">
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <h1 class=\"mb-4\">
                        Learn More About Our Work And Our Cultural Activities
                    </h1>
                    <p>
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                        Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                        sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <p class=\"mb-4\">
                        Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No
                        stet est diam rebum amet diam ipsum. Clita clita labore, dolor
                        duo nonumy clita sit at, sed sit sanctus dolor eos, ipsum labore
                        duo duo sit no sea diam. Et dolor et kasd ea. Eirmod diam at
                        dolor est vero nonumy magna.
                    </p>
                    <div class=\"row g-4 align-items-center\">
                        <div class=\"col-sm-6\">
                            <a class=\"btn btn-primary rounded-pill py-3 px-5\" href=\"\"
                            >Read More</a
                            >
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"d-flex align-items-center\">
                                <img
                                        class=\"rounded-circle flex-shrink-0\"
                                        src=\"{{ asset('base/img/user.jpg') }}\"
                                        alt=\"\"
                                        style=\"width: 45px; height: 45px\"
                                />
                                <div class=\"ms-3\">
                                    <h6 class=\"text-primary mb-1\">Jhon Doe</h6>
                                    <small>CEO & Founder</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 about-img wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"row\">
                        <div class=\"col-12 text-center\">
                            <img
                                    class=\"img-fluid w-75 rounded-circle bg-light p-3\"
                                    src=\"{{ asset('base/img/f1.jpg') }}\"
                                    alt=\"\"
                            />
                        </div>
                        <div class=\"col-6 text-start\" style=\"margin-top: -150px\">
                            <img
                                    class=\"img-fluid w-100 rounded-circle bg-light p-3\"
                                    src=\"{{ asset('base/img/i4.jpg') }}\"
                                    alt=\"\"
                            />
                        </div>
                        <div class=\"col-6 text-end\" style=\"margin-top: -150px\">
                            <img
                                    class=\"img-fluid w-100 rounded-circle bg-light p-3\"
                                    src=\"{{ asset('base/img/i3.jpg') }}\"
                                    alt=\"\"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Call To Action Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"bg-light rounded\">
                <div class=\"row g-0\">
                    <div
                            class=\"col-lg-6 wow fadeIn\"
                            data-wow-delay=\"0.1s\"
                            style=\"min-height: 400px\"
                    >
                        <div class=\"position-relative h-100\">
                            <img
                                    class=\"position-absolute w-100 h-100 rounded\"
                                    src=\"{{ asset('base/img/i2.png') }}\"
                                    style=\"object-fit: cover\"
                            />
                        </div>
                    </div>
                    <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                        <div
                                class=\"h-100 d-flex flex-column justify-content-center p-5\"
                        >
                            <h1 class=\"mb-4\">Become A Teacher</h1>
                            <p class=\"mb-4\">
                                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                                sit, sed stet lorem sit clita duo justo magna dolore erat
                                amet
                            </p>
                            <a class=\"btn btn-primary py-3 px-5\" href=\"\"
                            >Get Started Now<i class=\"fa fa-arrow-right ms-2\"></i
                                ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->

{% endblock %}", "aboutUs.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\aboutUs.html.twig");
    }
}
