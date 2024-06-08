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

/* store/index.html.twig */
class __TwigTemplate_746edeacb4b63aebcae5f3e2a4fa4bfb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "store/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "store/index.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "store/index.html.twig", 1);
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

        // line 3
        echo "    <!-- Carousel Start -->
    <div class=\"container-fluid p-0 mb-5\">
        <div class=\"owl-carousel header-carousel position-relative\">
            <div class=\"owl-carousel-item position-relative\">
                <img class=\"img-fluid\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/img/i1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                <div
                        class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\"
                        style=\"background: rgba(0, 0, 0, 0.2)\"
                >
                    <div class=\"container\">
                        <div class=\"row justify-content-start\">
                            <div class=\"col-10 col-lg-8\">
                                <h1 class=\"display-2 text-white animated slideInDown mb-4\">
                                    The best e-learning school for your Child
                                </h1>
                                <p class=\"fs-5 fw-medium text-white mb-4 pb-2\">
                                    Vero elitr justo clita lorem. Ipsum dolor at sed stet sit
                                    diam no. Kasd rebum ipsum et diam justo clita et kasd
                                    rebum sea elitr.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"owl-carousel-item position-relative\">
                <img class=\"img-fluid\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/img/i1.2.png"), "html", null, true);
        echo "\" alt=\"\" />
                <div
                        class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\"
                        style=\"background: rgba(0, 0, 0, 0.2)\"
                >
                    <div class=\"container\">
                        <div class=\"row justify-content-start\">
                            <div class=\"col-10 col-lg-8\">
                                <h1 class=\"display-2 text-white animated slideInDown mb-4\">
                                    The best e-learning school for your Child
                                </h1>
                                <p class=\"fs-5 fw-medium text-white mb-4 pb-2\">
                                    Vero elitr justo clita lorem. Ipsum dolor at sed stet sit
                                    diam no. Kasd rebum ipsum et diam justo clita et kasd
                                    rebum sea elitr.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "    <!-- Product -->
    <section class=\"bg0 p-t-23 p-b-140\">
        <div class=\"container\">
            <div class=\"p-b-10\">
                <h3 class=\"ltext-103 cl5\">
                    Product Overview
                </h3>
            </div>

            <div class=\"flex-w flex-sb-m p-b-52\">
                <div class=\"flex-w flex-l-m filter-tope-group m-tb-10\">
                    <button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1\" data-filter=\"*\">
                        All Products
                    </button>

                    <button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".women\">
                        categorie1
                    </button>

                    <button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".men\">
                        categorie2
                    </button>

                    <button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".bag\">
                        categorie3
                    </button>

                    <button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".shoes\">
                        categorie4
                    </button>

                    <button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".watches\">
                        categorie4
                    </button>
                </div>

                <div class=\"flex-w flex-c-m m-tb-10\">
                    <div class=\"flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter\">
                        <i class=\"icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list\"></i>
                        <i class=\"icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none\"></i>
                        Filter
                    </div>

                    <div class=\"flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search\">
                        <i class=\"icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search\"></i>
                        <i class=\"icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none\"></i>
                        Search
                    </div>
                </div>

                <!-- Search product -->
                <div class=\"dis-none panel-search w-full p-t-10 p-b-15\">
                    <div class=\"bor8 dis-flex p-l-15\">
                        <button class=\"size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04\">
                            <i class=\"zmdi zmdi-search\"></i>
                        </button>

                        <input class=\"mtext-107 cl2 size-114 plh2 p-r-15\" type=\"text\" name=\"search-product\" placeholder=\"Search\">
                    </div>
                </div>

                <!-- Filter -->
                <div class=\"dis-none panel-filter w-full p-t-10\">
                    <div class=\"wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm\">
                        <div class=\"filter-col1 p-r-15 p-b-27\">
                            <div class=\"mtext-102 cl2 p-b-15\">
                                Sort By
                            </div>

                            <ul>
                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        Default
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        Popularity
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        Average rating
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04 filter-link-active\">
                                        Newness
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        Price: Low to High
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        Price: High to Low
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class=\"filter-col2 p-r-15 p-b-27\">
                            <div class=\"mtext-102 cl2 p-b-15\">
                                Price
                            </div>

                            <ul>
                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04 filter-link-active\">
                                        All
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        \$0.00 - \$50.00
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        \$50.00 - \$100.00
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        \$100.00 - \$150.00
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        \$150.00 - \$200.00
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        \$200.00+
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class=\"filter-col3 p-r-15 p-b-27\">
                            <div class=\"mtext-102 cl2 p-b-15\">
                                Color
                            </div>

                            <ul>
                                <li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #222;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        Black
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #4272d7;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

                                    <a href=\"#\" class=\"filter-link stext-106 trans-04 filter-link-active\">
                                        Blue
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #b3b3b3;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        Grey
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #00ad5f;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        Green
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #fa4251;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        Red
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #aaa;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</span>

                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        White
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class=\"filter-col4 p-b-27\">
                            <div class=\"mtext-102 cl2 p-b-15\">
                                Tags
                            </div>

                            <div class=\"flex-w p-t-4 m-r--5\">
                                <a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
                                    Fashion
                                </a>

                                <a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
                                    Lifestyle
                                </a>

                                <a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
                                    Denim
                                </a>

                                <a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
                                    Streetstyle
                                </a>

                                <a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
                                    Crafts
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row isotope-grid\">
                ";
        // line 307
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 307, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 308
            echo "                <div class=\"col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women\">
                    <!-- Block2 -->
                    <div class=\"block2\">
                        <div class=\"block2-pic hov-img0\">
                            <img src=\"";
            // line 312
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "img1", [], "any", false, false, false, 312), "html", null, true);
            echo "\" alt=\"IMG-PRODUCT\">

                            <a href=\"";
            // line 314
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_viewproduct", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 314)]), "html", null, true);
            echo "\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 \">
                                Quick View
                            </a>
                        </div>

                        <div class=\"block2-txt flex-w flex-t p-t-14\">
                            <div class=\"block2-txt-child1 flex-col-l \">
                                <a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
                                   ";
            // line 322
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nom", [], "any", false, false, false, 322), "html", null, true);
            echo "
                                </a>

                                <span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\$";
            // line 326
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "prix", [], "any", false, false, false, 326), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</span>
                            </div>

                            <div class=\"block2-txt-child2 flex-r p-t-3\">
                                <a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
                                    <img class=\"icon-heart1 dis-block trans-04\" src=\"";
            // line 332
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/images/icons/icon-heart-01.png"), "html", null, true);
            echo "\" alt=\"ICON\">
                                    <img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"";
            // line 333
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/images/icons/icon-heart-02.png"), "html", null, true);
            echo "\" alt=\"ICON\">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 340
        echo "            </div>

            <!-- Load more -->
            <div class=\"flex-c-m flex-w w-full p-t-45\">
                <a href=\"#\" class=\"flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04\">
                    Load More
                </a>
            </div>
        </div>
    </section>
    <script
            id=\"ChatcubeScript\"
            src=\"https://chatcube.co/api/chat-iframe\"
            data-id=\"212bac08-4605-4b22-aeb7-af32487ccb8e\"
            message-text=\"Hello! 👋 What can I help you with?\"
            color=\"#fe5d37\"
            defer>
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "store/index.html.twig";
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
        return array (  458 => 340,  445 => 333,  441 => 332,  432 => 326,  425 => 322,  414 => 314,  409 => 312,  403 => 308,  399 => 307,  145 => 55,  135 => 54,  100 => 29,  75 => 7,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}
{% block navimg %}
    <!-- Carousel Start -->
    <div class=\"container-fluid p-0 mb-5\">
        <div class=\"owl-carousel header-carousel position-relative\">
            <div class=\"owl-carousel-item position-relative\">
                <img class=\"img-fluid\" src=\"{{ asset('base/img/i1.jpg') }}\" alt=\"\" />
                <div
                        class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\"
                        style=\"background: rgba(0, 0, 0, 0.2)\"
                >
                    <div class=\"container\">
                        <div class=\"row justify-content-start\">
                            <div class=\"col-10 col-lg-8\">
                                <h1 class=\"display-2 text-white animated slideInDown mb-4\">
                                    The best e-learning school for your Child
                                </h1>
                                <p class=\"fs-5 fw-medium text-white mb-4 pb-2\">
                                    Vero elitr justo clita lorem. Ipsum dolor at sed stet sit
                                    diam no. Kasd rebum ipsum et diam justo clita et kasd
                                    rebum sea elitr.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"owl-carousel-item position-relative\">
                <img class=\"img-fluid\" src=\"{{ asset('base/img/i1.2.png') }}\" alt=\"\" />
                <div
                        class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\"
                        style=\"background: rgba(0, 0, 0, 0.2)\"
                >
                    <div class=\"container\">
                        <div class=\"row justify-content-start\">
                            <div class=\"col-10 col-lg-8\">
                                <h1 class=\"display-2 text-white animated slideInDown mb-4\">
                                    The best e-learning school for your Child
                                </h1>
                                <p class=\"fs-5 fw-medium text-white mb-4 pb-2\">
                                    Vero elitr justo clita lorem. Ipsum dolor at sed stet sit
                                    diam no. Kasd rebum ipsum et diam justo clita et kasd
                                    rebum sea elitr.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
{% endblock %}
{% block body %}
    <!-- Product -->
    <section class=\"bg0 p-t-23 p-b-140\">
        <div class=\"container\">
            <div class=\"p-b-10\">
                <h3 class=\"ltext-103 cl5\">
                    Product Overview
                </h3>
            </div>

            <div class=\"flex-w flex-sb-m p-b-52\">
                <div class=\"flex-w flex-l-m filter-tope-group m-tb-10\">
                    <button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1\" data-filter=\"*\">
                        All Products
                    </button>

                    <button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".women\">
                        categorie1
                    </button>

                    <button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".men\">
                        categorie2
                    </button>

                    <button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".bag\">
                        categorie3
                    </button>

                    <button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".shoes\">
                        categorie4
                    </button>

                    <button class=\"stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5\" data-filter=\".watches\">
                        categorie4
                    </button>
                </div>

                <div class=\"flex-w flex-c-m m-tb-10\">
                    <div class=\"flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter\">
                        <i class=\"icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list\"></i>
                        <i class=\"icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none\"></i>
                        Filter
                    </div>

                    <div class=\"flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search\">
                        <i class=\"icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search\"></i>
                        <i class=\"icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none\"></i>
                        Search
                    </div>
                </div>

                <!-- Search product -->
                <div class=\"dis-none panel-search w-full p-t-10 p-b-15\">
                    <div class=\"bor8 dis-flex p-l-15\">
                        <button class=\"size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04\">
                            <i class=\"zmdi zmdi-search\"></i>
                        </button>

                        <input class=\"mtext-107 cl2 size-114 plh2 p-r-15\" type=\"text\" name=\"search-product\" placeholder=\"Search\">
                    </div>
                </div>

                <!-- Filter -->
                <div class=\"dis-none panel-filter w-full p-t-10\">
                    <div class=\"wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm\">
                        <div class=\"filter-col1 p-r-15 p-b-27\">
                            <div class=\"mtext-102 cl2 p-b-15\">
                                Sort By
                            </div>

                            <ul>
                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        Default
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        Popularity
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        Average rating
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04 filter-link-active\">
                                        Newness
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        Price: Low to High
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        Price: High to Low
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class=\"filter-col2 p-r-15 p-b-27\">
                            <div class=\"mtext-102 cl2 p-b-15\">
                                Price
                            </div>

                            <ul>
                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04 filter-link-active\">
                                        All
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        \$0.00 - \$50.00
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        \$50.00 - \$100.00
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        \$100.00 - \$150.00
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        \$150.00 - \$200.00
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        \$200.00+
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class=\"filter-col3 p-r-15 p-b-27\">
                            <div class=\"mtext-102 cl2 p-b-15\">
                                Color
                            </div>

                            <ul>
                                <li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #222;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        Black
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #4272d7;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

                                    <a href=\"#\" class=\"filter-link stext-106 trans-04 filter-link-active\">
                                        Blue
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #b3b3b3;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        Grey
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #00ad5f;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        Green
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #fa4251;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>

                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        Red
                                    </a>
                                </li>

                                <li class=\"p-b-6\">
\t\t\t\t\t\t\t\t\t<span class=\"fs-15 lh-12 m-r-6\" style=\"color: #aaa;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</span>

                                    <a href=\"#\" class=\"filter-link stext-106 trans-04\">
                                        White
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class=\"filter-col4 p-b-27\">
                            <div class=\"mtext-102 cl2 p-b-15\">
                                Tags
                            </div>

                            <div class=\"flex-w p-t-4 m-r--5\">
                                <a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
                                    Fashion
                                </a>

                                <a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
                                    Lifestyle
                                </a>

                                <a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
                                    Denim
                                </a>

                                <a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
                                    Streetstyle
                                </a>

                                <a href=\"#\" class=\"flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5\">
                                    Crafts
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row isotope-grid\">
                {% for i in product %}
                <div class=\"col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women\">
                    <!-- Block2 -->
                    <div class=\"block2\">
                        <div class=\"block2-pic hov-img0\">
                            <img src=\"{{ i.img1 }}\" alt=\"IMG-PRODUCT\">

                            <a href=\"{{ path('app_viewproduct', {'id':i.id}) }}\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 \">
                                Quick View
                            </a>
                        </div>

                        <div class=\"block2-txt flex-w flex-t p-t-14\">
                            <div class=\"block2-txt-child1 flex-col-l \">
                                <a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">
                                   {{ i.nom }}
                                </a>

                                <span class=\"stext-105 cl3\">
\t\t\t\t\t\t\t\t\t\${{ i.prix }}
\t\t\t\t\t\t\t\t</span>
                            </div>

                            <div class=\"block2-txt-child2 flex-r p-t-3\">
                                <a href=\"#\" class=\"btn-addwish-b2 dis-block pos-relative js-addwish-b2\">
                                    <img class=\"icon-heart1 dis-block trans-04\" src=\"{{ asset('store/images/icons/icon-heart-01.png') }}\" alt=\"ICON\">
                                    <img class=\"icon-heart2 dis-block trans-04 ab-t-l\" src=\"{{ asset('store/images/icons/icon-heart-02.png') }}\" alt=\"ICON\">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>

            <!-- Load more -->
            <div class=\"flex-c-m flex-w w-full p-t-45\">
                <a href=\"#\" class=\"flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04\">
                    Load More
                </a>
            </div>
        </div>
    </section>
    <script
            id=\"ChatcubeScript\"
            src=\"https://chatcube.co/api/chat-iframe\"
            data-id=\"212bac08-4605-4b22-aeb7-af32487ccb8e\"
            message-text=\"Hello! 👋 What can I help you with?\"
            color=\"#fe5d37\"
            defer>
    </script>
{% endblock %}
", "store/index.html.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\store\\index.html.twig");
    }
}
