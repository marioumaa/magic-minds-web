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

/* base1.html.twig */
class __TwigTemplate_f0c4207bcf5b46a434814f3470f928ac extends Template
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
            'css' => [$this, 'block_css'],
            'nav' => [$this, 'block_nav'],
            'navimg' => [$this, 'block_navimg'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title >";
        // line 4
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
";
        // line 6
        yield "    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    ";
        // line 9
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 74
        yield "</head>
<body class=\"animsition\">

<!-- Header -->
<header>
    ";
        // line 79
        yield from $this->unwrap()->yieldBlock('nav', $context, $blocks);
        // line 194
        yield "    <!-- Navbar End -->
    ";
        // line 195
        yield from $this->unwrap()->yieldBlock('navimg', $context, $blocks);
        // line 270
        yield "

    <!-- Modal Search -->
    <div class=\"modal-search-header flex-c-m trans-04 js-hide-modal-search\">
        <div class=\"container-search-header\">
            <button class=\"flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search\">
                <img src=\"";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/images/icons/icon-close2.png"), "html", null, true);
        yield "\" alt=\"CLOSE\">
            </button>

            <form class=\"wrap-search-header flex-w p-l-15\">
                <button class=\"flex-c-m trans-04\">
                    <i class=\"zmdi zmdi-search\"></i>
                </button>
                <input class=\"plh3\" type=\"text\" name=\"search\" placeholder=\"Search...\">
            </form>
        </div>
    </div>


<!-- Cart -->
<div class=\"wrap-header-cart js-panel-cart\">
    <div class=\"s-full js-hide-cart\"></div>

    <div class=\"header-cart flex-col-l p-l-65 p-r-25\">
        <div class=\"header-cart-title flex-w flex-sb-m p-b-8\">
\t\t\t\t<span class=\"mtext-103 cl2\">
\t\t\t\t\tYour Cart
\t\t\t\t</span>

            <div class=\"fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart\">
                <i class=\"zmdi zmdi-close\"></i>
            </div>
        </div>

        <div class=\"header-cart-content flex-w js-pscroll\">
            ";
        // line 305
        $context["cart"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 305, $this->source); })()), "session", [], "any", false, false, false, 305), "get", ["cart", []], "method", false, false, false, 305);
        // line 306
        yield "            <ul class=\"header-cart-wrapitem w-full\">
                ";
        // line 307
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 307, $this->source); })()))) {
            // line 308
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 308, $this->source); })()));
            foreach ($context['_seq'] as $context["productId"] => $context["productDetails"]) {
                // line 309
                yield "                        <li class=\"header-cart-item flex-w flex-t m-b-12\">
                            <div class=\"header-cart-item-img\">
                                <img src=\"";
                // line 311
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["productDetails"], "img_url", [], "any", false, false, false, 311), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["productDetails"], "name", [], "any", false, false, false, 311), "html", null, true);
                yield "\">
                            </div>

                            <div class=\"header-cart-item-txt p-t-8\">
                                <a href=\"#\" class=\"header-cart-item-name m-b-18 hov-cl1 trans-04\">
                                    ";
                // line 316
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["productDetails"], "name", [], "any", false, false, false, 316), "html", null, true);
                yield "
                                </a>

                                <span class=\"header-cart-item-info\">
\t\t\t\t\t\t\t";
                // line 320
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["productDetails"], "quantity", [], "any", false, false, false, 320), "html", null, true);
                yield " x \$";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["productDetails"], "price", [], "any", false, false, false, 320), "html", null, true);
                yield "
\t\t\t\t\t\t\t</span>
                            </div>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['productId'], $context['productDetails'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 325
            yield "                ";
        } else {
            // line 326
            yield "                    <p>Your cart is empty.</p>
                ";
        }
        // line 328
        yield "            </ul>

            <div class=\"w-full\">
                <div class=\"header-cart-total w-full p-tb-40\">

                    Total: \$";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 333, $this->source); })()), "session", [], "any", false, false, false, 333), "get", ["totalPrice"], "method", false, false, false, 333), "html", null, true);
        yield "
                </div>

                <div class=\"header-cart-buttons flex-w w-full\">

                    ";
        // line 338
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 339
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment");
            yield "\" class=\"flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10\">
                        Check Out
                    </a>
                    ";
        }
        // line 343
        yield "                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"bg-white\">
";
        // line 351
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 444
        yield "</div>
<!-- Footer Start -->
";
        // line 446
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 590
        yield "<!-- Footer End -->


<!-- Back to top -->
<div class=\"btn-back-to-top\" id=\"myBtn\">
\t\t<span class=\"symbol-btn-back-to-top\">
\t\t\t<i class=\"zmdi zmdi-chevron-up\"></i>
\t\t</span>
</div>


";
        // line 601
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 729
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "   Magic Minds ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 9
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 10
        yield "        <!--===============================================================================================-->
";
        // line 12
        yield "        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        yield "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/fonts/iconic/css/material-design-iconic-font.min.css"), "html", null, true);
        yield "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/fonts/linearicons-v1.0.0/icon-font.min.css"), "html", null, true);
        yield "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/animate/animate.css"), "html", null, true);
        yield "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        yield "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/animsition/css/animsition.min.css"), "html", null, true);
        yield "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/select2/select2.min.css"), "html", null, true);
        yield "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/daterangepicker/daterangepicker.css"), "html", null, true);
        yield "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/slick/slick.css"), "html", null, true);
        yield "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/MagnificPopup/magnific-popup.css"), "html", null, true);
        yield "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/css/util.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/css/main.css"), "html", null, true);
        yield "\">

        <!--first templait css:====================================================================-->

        <link href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/img/favicon.ico"), "html", null, true);
        yield "\" rel=\"icon\" />

        <!-- Google Web Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
        <link
                href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap\"
                rel=\"stylesheet\"
        />

        <!-- Icon Font Stylesheet -->
        <link
                href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\"
                rel=\"stylesheet\"
        />
        <link
                href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\"
                rel=\"stylesheet\"
        />

        <!-- Libraries Stylesheet -->
        <link href=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/lib/animate/animate.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

        <!-- Template Stylesheet -->
        <link href=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

        <!--===============================================================================================-->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 79
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 80
        yield "        <!-- Navbar Start -->
        <nav
                class=\"navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0\"
        >
            <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand\">
                <img
                        src=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/img/logo.png"), "html", null, true);
        yield "\"
                        alt=\"Your Logo\"
                        style=\"width: 100px; height: auto\"
                />
            </a>
            <button
                    type=\"button\"
                    class=\"navbar-toggler\"
                    data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarCollapse\"
                    class=\"pl-5\"
            >
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
";
        // line 102
        yield "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 103
            yield "                    ";
            $context["foo1"] = "250px";
            // line 104
            yield "                ";
        } else {
            // line 105
            yield "                    ";
            $context["foo1"] = "350px";
            // line 106
            yield "                ";
        }
        // line 107
        yield "                <div class=\"navbar-nav \" style=\"padding-left:";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["foo1"]) || array_key_exists("foo1", $context) ? $context["foo1"] : (function () { throw new RuntimeError('Variable "foo1" does not exist.', 107, $this->source); })()), "html", null, true);
        yield "\">

                    <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\" nav-link \">Home</a>
                    <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home2");
        yield "\" class=\" nav-link\">About Us</a>
";
        // line 112
        yield " <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_store");
        yield "\" class=\" nav-link\">Store</a>
";
        // line 114
        yield "

                    ";
        // line 116
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 117
            yield "                           ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROFESSOR")) {
                // line 118
                yield "                               <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_catAll");
                yield "\" class=\"nav-item nav-link\">Courses</a>
                               <a href=\"";
                // line 119
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showquizz");
                yield "\" class=\"nav-item nav-link\">Quizz</a>
                               <a href=\"";
                // line 120
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenementp");
                yield "\" class=\"nav-item nav-link\">Event</a>
                               <a href=\"";
                // line 121
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showParticipationpr");
                yield "\" class=\"nav-item nav-link\">Participation</a>
                               <a href=\"";
                // line 122
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_reponse");
                yield "\" class=\"nav-item nav-link\">Forum</a>
                               ";
            }
            // line 124
            yield "                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CHILD")) {
                // line 125
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_showcat");
                yield "\" class=\"nav-item nav-link\">Courses</a>
                            <a href=\"";
                // line 126
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showallquizz");
                yield "\" class=\"nav-item nav-link\">Quizz</a>
                            <a href=\"";
                // line 127
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showevenemente");
                yield "\" class=\"nav-item nav-link\">Event</a>
                            <a href=\"";
                // line 128
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showParticipatione");
                yield "\" class=\"nav-item nav-link\">Participation</a>
                            <a href=\"";
                // line 129
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_qestion");
                yield "\" class=\"nav-item nav-link\">Forum</a>
                               ";
            }
            // line 131
            yield "                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PARENT")) {
                // line 132
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_showcatVisiteur");
                yield "\" class=\"nav-item nav-link\">Courses</a>
                            <a href=\"";
                // line 133
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showParticipationpa");
                yield "\" class=\"nav-item nav-link\">Participation</a>

                        ";
            }
            // line 136
            yield "
                    ";
        }
        // line 138
        yield "                 </div>
                ";
        // line 139
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 140
            yield "                ";
            $context["foo"] = "d-flex align-items-center";
            // line 141
            yield "                ";
        } else {
            // line 142
            yield "                ";
            $context["foo"] = "wrap-icon-header flex-w flex-r-m";
            // line 143
            yield "                ";
        }
        // line 144
        yield "                <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 144, $this->source); })()), "html", null, true);
        yield "\">
";
        // line 148
        yield "
                    <div class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart\" data-notify=\"2\">
                        <i class=\"zmdi zmdi-shopping-cart\"></i>
                    </div>
                    ";
        // line 152
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 153
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande");
            yield "\" class=\"dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti\" data-notify=\"0\">
                        <i class=\"zmdi zmdi-favorite-outline\"></i>
                    </a>
                    ";
        }
        // line 157
        yield "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 158
            yield "                    <!-- Nav Item - User Information -->

                    <div class=\"nav-item dropdown no-arrow\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "user", [], "any", false, false, false, 163), "username", [], "any", false, false, false, 163), "html", null, true);
            yield "</span>
                            <img class=\"img-profile rounded-circle\"
                                 src=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/Admin/img/undraw_profile.svg"), "html", null, true);
            yield "\" width=\"50px\" height=\"50px\">
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
            // line 177
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" >
                                <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Logout
                            </a>
                        </div>
                    </div>
                </div>

                    ";
        } else {
            // line 186
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-primary rounded-pill px-3 d-none d-lg-block\"
                    >Join Us<i class=\"fa fa-arrow-right ms-3\"></i
                        ></a>
                    ";
        }
        // line 190
        yield "                </div>
            </div>
        </nav>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 195
    public function block_navimg($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navimg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navimg"));

        // line 196
        yield "        <!-- Carousel Start -->

    <div class=\"container-fluid p-0 mb-5\">
        <div class=\"owl-carousel header-carousel position-relative\">
            <div class=\"owl-carousel-item position-relative\">
                <img class=\"img-fluid\" src=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/i1.jpg"), "html", null, true);
        yield "\" alt=\"\" />
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
                                <a
                                        href=\"\"
                                        class=\"btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft\"
                                >Learn More</a
                                >
                                <a
                                        href=\"\"
                                        class=\"btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight\"
                                >best Courses</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"owl-carousel-item position-relative\">
                <img class=\"img-fluid\" src=\"";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/i1.2.png"), "html", null, true);
        yield "\" alt=\"\" />
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
                                <a
                                        href=\"\"
                                        class=\"btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft\"
                                >Learn More</a
                                >
                                <a
                                        href=\"\"
                                        class=\"btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight\"
                                >Our Classes</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
        <!-- Carousel End -->

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 351
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 352
        yield "

    <!-- Facilities Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div
                    class=\"text-center mx-auto mb-5 wow fadeInUp\"
                    data-wow-delay=\"0.1s\"
                    style=\"max-width: 600px\"
            >
                <h1 class=\"mb-3\">Our Goals</h1>
                <p>
                    Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut
                    dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed
                    rebum vero dolor duo.
                </p>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"facility-item\">
                        <div class=\"facility-icon bg-primary\">
                            <span class=\"bg-primary\"></span>
                            <i class=\"fa fa-chalkboard-teacher fa-3x text-primary\"></i>
                            <span class=\"bg-primary\"></span>
                        </div>
                        <div class=\"facility-text bg-primary\">
                            <h3 class=\"text-primary mb-3\">Make learning easier</h3>
                            <p class=\"mb-0\">
                                Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero
                                ipsum sit
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"facility-item\">
                        <div class=\"facility-icon bg-success\">
                            <span class=\"bg-success\"></span>
                            <i class=\"fa fa-chalkboard-teacher fa-3x text-success\"></i>
                            <span class=\"bg-success\"></span>
                        </div>
                        <div class=\"facility-text bg-success\">
                            <h3 class=\"text-success mb-3\">Make learning fun</h3>
                            <p class=\"mb-0\">
                                Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero
                                ipsum sit
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"facility-item\">
                        <div class=\"facility-icon bg-warning\">
                            <span class=\"bg-warning\"></span>
                            <i class=\"fa fa-chalkboard-teacher fa-3x text-warning\"></i>
                            <span class=\"bg-warning\"></span>
                        </div>
                        <div class=\"facility-text bg-warning\">
                            <h3 class=\"text-warning mb-3\">ensure Accesibility for all</h3>
                            <p class=\"mb-0\">
                                Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero
                                ipsum sit
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"facility-item\">
                        <div class=\"facility-icon bg-info\">
                            <span class=\"bg-info\"></span>
                            <i class=\"fa fa-chalkboard-teacher fa-3x text-info\"></i>
                            <span class=\"bg-info\"></span>
                        </div>
                        <div class=\"facility-text bg-info\">
                            <h3 class=\"text-info mb-3\">emphasize practice</h3>
                            <p class=\"mb-0\">
                                Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero
                                ipsum sit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities End -->





";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 446
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 447
        yield "    <script
            id=\"ChatcubeScript\"
            src=\"https://chatcube.co/api/chat-iframe\"
            data-id=\"212bac08-4605-4b22-aeb7-af32487ccb8e\"
            message-text=\"Hello! 👋 What can I help you with?\"
            color=\"#fe5d37\"
            defer>
    </script>
    <div
            class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn\"
            data-wow-delay=\"0.1s\"
    >
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
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"
                        ><i class=\"fab fa-twitter\"></i
                            ></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"
                        ><i class=\"fab fa-facebook-f\"></i
                            ></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"
                        ><i class=\"fab fa-youtube\"></i
                            ></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"
                        ><i class=\"fab fa-linkedin-in\"></i
                            ></a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h3 class=\"text-white mb-4\">Quick Links</h3>
                    <a class=\"btn btn-link text-white-50\" href=\"\">About Us</a>
                    <a class=\"btn btn-link text-white-50\" href=\"\">Contact Us</a>
                    <a class=\"btn btn-link text-white-50\" href=\"\">Our Services</a>
                    <a class=\"btn btn-link text-white-50\" href=\"\">Privacy Policy</a>
                    <a class=\"btn btn-link text-white-50\" href=\"\"
                    >Terms & Condition</a
                    >
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h3 class=\"text-white mb-4\">Photo Gallery</h3>
                    <div class=\"row g-2 pt-2\">
                        <div class=\"col-4\">
                            <img
                                    class=\"img-fluid rounded bg-light p-1\"
                                    src=\"";
        // line 504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/img/classes-1.jpg"), "html", null, true);
        yield "\"
                                    alt=\"\"
                            />
                        </div>
                        <div class=\"col-4\">
                            <img
                                    class=\"img-fluid rounded bg-light p-1\"
                                    src=\"";
        // line 511
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/img/classes-2.jpg"), "html", null, true);
        yield "\"
                                    alt=\"\"
                            />
                        </div>
                        <div class=\"col-4\">
                            <img
                                    class=\"img-fluid rounded bg-light p-1\"
                                    src=\"";
        // line 518
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/img/classes-3.jpg"), "html", null, true);
        yield "\"
                                    alt=\"\"
                            />
                        </div>
                        <div class=\"col-4\">
                            <img
                                    class=\"img-fluid rounded bg-light p-1\"
                                    src=\"";
        // line 525
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/img/classes-4.jpg"), "html", null, true);
        yield "\"
                                    alt=\"\"
                            />
                        </div>
                        <div class=\"col-4\">
                            <img
                                    class=\"img-fluid rounded bg-light p-1\"
                                    src=\"";
        // line 532
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/img/classes-5.jpg"), "html", null, true);
        yield "\"
                                    alt=\"\"
                            />
                        </div>
                        <div class=\"col-4\">
                            <img
                                    class=\"img-fluid rounded bg-light p-1\"
                                    src=\"";
        // line 539
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/img/classes-6.jpg"), "html", null, true);
        yield "\"
                                    alt=\"\"
                            />
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h3 class=\"text-white mb-4\">Newsletter</h3>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class=\"position-relative mx-auto\" style=\"max-width: 400px\">
                        <input
                                class=\"form-control bg-transparent w-100 py-3 ps-4 pe-5\"
                                type=\"text\"
                                placeholder=\"Your email\"
                        />
                        <button
                                type=\"button\"
                                class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\"
                        >
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
                        <a class=\"border-bottom\" href=\"https://htmlcodex.com\"
                        >HTML Codex</a
                        >
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 601
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 602
        yield "    <!--===============================================================================================-->
    <script src=\"";
        // line 603
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        yield "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 605
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/animsition/js/animsition.min.js"), "html", null, true);
        yield "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 607
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/bootstrap/js/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 608
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 610
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/select2/select2.min.js"), "html", null, true);
        yield "\"></script>
    <script>
        \$(\".js-select2\").each(function(){
            \$(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: \$(this).next('.dropDownSelect2')
            });
        })
    </script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 620
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/daterangepicker/moment.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 621
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/daterangepicker/daterangepicker.js"), "html", null, true);
        yield "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 623
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/slick/slick.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 624
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/js/slick-custom.js"), "html", null, true);
        yield "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 626
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/parallax100/parallax100.js"), "html", null, true);
        yield "\"></script>
    <script>
        \$('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/MagnificPopup/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script>
        \$('.gallery-lb').each(function() { // the containers for all your galleries
            \$(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled:true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 645
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/isotope/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 647
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
    <script>
        \$('.js-addwish-b2').on('click', function(e){
            e.preventDefault();
        });

        \$('.js-addwish-b2').each(function(){
            var nameProduct = \$(this).parent().parent().find('.js-name-b2').html();
            \$(this).on('click', function(){
                swal(nameProduct, \"is added to wishlist !\", \"success\");

                \$(this).addClass('js-addedwish-b2');
                \$(this).off('click');
            });
        });

        \$('.js-addwish-detail').each(function(){
            var nameProduct = \$(this).parent().parent().parent().find('.js-name-detail').html();

            \$(this).on('click', function(){
                swal(nameProduct, \"is added to wishlist !\", \"success\");

                \$(this).addClass('js-addedwish-detail');
                \$(this).off('click');
            });
        });

        /*---------------------------------------------*/

        \$('.js-addcart-detail').each(function(){
            var nameProduct = \$(this).parent().parent().parent().parent().find('.js-name-detail').html();
            var addToCartButton = \$(this); // Cache the button element

            \$(this).on('click', function(){
                // Perform the redirection
                var url = \"";
        // line 682
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_store");
        yield "\"; // Replace 'your_route_name' with the actual name of your route
                window.location.href = url;

                // Display a success message (you can adjust this according to your needs)
                swal(nameProduct, \"is added to cart !\", \"success\");
            });
        });


    </script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 693
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/vendor/perfect-scrollbar/perfect-scrollbar.min.js"), "html", null, true);
        yield "\"></script>
    <script>
        \$('.js-pscroll').each(function(){
            \$(this).css('position','relative');
            \$(this).css('overflow','hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            \$(window).on('resize', function(){
                ps.update();
            })
        });
    </script>
    <!======================================================================-->


    <!--===============================================================================================-->
    <script src=\"";
        // line 713
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/js/main.js"), "html", null, true);
        yield "\"></script>


    <!-- JavaScript Libraries first templait-->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 719
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 720
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 721
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 722
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 725
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base/js/main.js"), "html", null, true);
        yield "\"></script>
    <!--===============================================================================================-->

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
        return "base1.html.twig";
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
        return array (  1244 => 725,  1238 => 722,  1234 => 721,  1230 => 720,  1226 => 719,  1217 => 713,  1194 => 693,  1180 => 682,  1142 => 647,  1137 => 645,  1120 => 631,  1112 => 626,  1107 => 624,  1103 => 623,  1098 => 621,  1094 => 620,  1081 => 610,  1076 => 608,  1072 => 607,  1067 => 605,  1062 => 603,  1059 => 602,  1049 => 601,  987 => 539,  977 => 532,  967 => 525,  957 => 518,  947 => 511,  937 => 504,  878 => 447,  868 => 446,  766 => 352,  756 => 351,  708 => 233,  673 => 201,  666 => 196,  656 => 195,  642 => 190,  634 => 186,  622 => 177,  607 => 165,  602 => 163,  595 => 158,  592 => 157,  584 => 153,  582 => 152,  576 => 148,  571 => 144,  568 => 143,  565 => 142,  562 => 141,  559 => 140,  557 => 139,  554 => 138,  550 => 136,  544 => 133,  539 => 132,  536 => 131,  531 => 129,  527 => 128,  523 => 127,  519 => 126,  514 => 125,  511 => 124,  506 => 122,  502 => 121,  498 => 120,  494 => 119,  489 => 118,  486 => 117,  484 => 116,  480 => 114,  475 => 112,  471 => 110,  467 => 109,  461 => 107,  458 => 106,  455 => 105,  452 => 104,  449 => 103,  446 => 102,  428 => 86,  423 => 84,  417 => 80,  407 => 79,  392 => 70,  386 => 67,  380 => 64,  376 => 63,  352 => 42,  345 => 38,  341 => 37,  336 => 35,  331 => 33,  326 => 31,  321 => 29,  316 => 27,  311 => 25,  306 => 23,  301 => 21,  296 => 19,  291 => 17,  286 => 15,  281 => 13,  278 => 12,  275 => 10,  265 => 9,  245 => 4,  232 => 729,  230 => 601,  217 => 590,  215 => 446,  211 => 444,  209 => 351,  199 => 343,  191 => 339,  189 => 338,  181 => 333,  174 => 328,  170 => 326,  167 => 325,  154 => 320,  147 => 316,  137 => 311,  133 => 309,  128 => 308,  126 => 307,  123 => 306,  121 => 305,  89 => 276,  81 => 270,  79 => 195,  76 => 194,  74 => 79,  67 => 74,  65 => 9,  60 => 6,  56 => 4,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title >{% block title %}   Magic Minds {% endblock %}</title>
{#    <link rel=\"icon\" href=\"{{ asset('base/img/logo.png') }}\" type=\"image/png\">#}
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    {% block css %}
        <!--===============================================================================================-->
{#        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('store/images/icons/favicon.png') }}\"/>#}
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('store/vendor/bootstrap/css/bootstrap.min.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('store/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('store/fonts/iconic/css/material-design-iconic-font.min.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('store/fonts/linearicons-v1.0.0/icon-font.min.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('store/vendor/animate/animate.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('store/vendor/css-hamburgers/hamburgers.min.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('store/vendor/animsition/css/animsition.min.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('store/vendor/select2/select2.min.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('store/vendor/daterangepicker/daterangepicker.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('store/vendor/slick/slick.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('store/vendor/MagnificPopup/magnific-popup.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('store/vendor/perfect-scrollbar/perfect-scrollbar.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('store/css/util.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('store/css/main.css') }}\">

        <!--first templait css:====================================================================-->

        <link href=\"{{ asset('base/img/favicon.ico') }}\" rel=\"icon\" />

        <!-- Google Web Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
        <link
                href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap\"
                rel=\"stylesheet\"
        />

        <!-- Icon Font Stylesheet -->
        <link
                href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\"
                rel=\"stylesheet\"
        />
        <link
                href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\"
                rel=\"stylesheet\"
        />

        <!-- Libraries Stylesheet -->
        <link href=\"{{ asset('base/lib/animate/animate.min.css') }}\" rel=\"stylesheet\" />
        <link href=\"{{ asset('base/lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"{{ asset('base/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />

        <!-- Template Stylesheet -->
        <link href=\"{{ asset('base/css/style.css') }}\" rel=\"stylesheet\" />

        <!--===============================================================================================-->
    {% endblock%}
</head>
<body class=\"animsition\">

<!-- Header -->
<header>
    {% block nav %}
        <!-- Navbar Start -->
        <nav
                class=\"navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0\"
        >
            <a href=\"{{ path('app_home') }}\" class=\"navbar-brand\">
                <img
                        src=\"{{ asset('base/img/logo.png') }}\"
                        alt=\"Your Logo\"
                        style=\"width: 100px; height: auto\"
                />
            </a>
            <button
                    type=\"button\"
                    class=\"navbar-toggler\"
                    data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarCollapse\"
                    class=\"pl-5\"
            >
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
{#                <div class=\"navbar-nav mx-auto\">#}
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    {% set foo1 = '250px' %}
                {% else %}
                    {% set foo1 = '350px' %}
                {% endif %}
                <div class=\"navbar-nav \" style=\"padding-left:{{foo1 }}\">

                    <a href=\"{{ path('home') }}\" class=\" nav-link \">Home</a>
                    <a href=\"{{ path('home2') }}\" class=\" nav-link\">About Us</a>
{#                    <a href=\"{{ path('app_catAll') }}\" class=\"nav-item nav-link\">Courses</a>#}
 <a href=\"{{ path('app_store') }}\" class=\" nav-link\">Store</a>
{#                    <a href=\"{{ path('showevenemente') }}\" class=\"nav-item nav-link\">Event</a>#}


                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                           {% if is_granted('ROLE_PROFESSOR') %}
                               <a href=\"{{ path('app_catAll') }}\" class=\"nav-item nav-link\">Courses</a>
                               <a href=\"{{ path('showquizz') }}\" class=\"nav-item nav-link\">Quizz</a>
                               <a href=\"{{ path('showevenementp') }}\" class=\"nav-item nav-link\">Event</a>
                               <a href=\"{{ path('showParticipationpr') }}\" class=\"nav-item nav-link\">Participation</a>
                               <a href=\"{{ path('afficher_reponse') }}\" class=\"nav-item nav-link\">Forum</a>
                               {% endif %}
                        {% if is_granted('ROLE_CHILD') %}
                            <a href=\"{{ path('app_showcat') }}\" class=\"nav-item nav-link\">Courses</a>
                            <a href=\"{{ path('showallquizz') }}\" class=\"nav-item nav-link\">Quizz</a>
                            <a href=\"{{ path('showevenemente') }}\" class=\"nav-item nav-link\">Event</a>
                            <a href=\"{{ path('showParticipatione') }}\" class=\"nav-item nav-link\">Participation</a>
                            <a href=\"{{ path('afficher_qestion') }}\" class=\"nav-item nav-link\">Forum</a>
                               {% endif %}
                        {% if is_granted('ROLE_PARENT') %}
                            <a href=\"{{ path('app_showcatVisiteur') }}\" class=\"nav-item nav-link\">Courses</a>
                            <a href=\"{{ path('showParticipationpa') }}\" class=\"nav-item nav-link\">Participation</a>

                        {% endif %}

                    {% endif %}
                 </div>
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                {% set foo = 'd-flex align-items-center' %}
                {% else %}
                {% set foo = 'wrap-icon-header flex-w flex-r-m' %}
                {% endif %}
                <div class=\"{{ foo }}\">
{#                    <div class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search\">#}
{#                        <i class=\"zmdi zmdi-search\"></i>#}
{#                    </div>#}

                    <div class=\"icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart\" data-notify=\"2\">
                        <i class=\"zmdi zmdi-shopping-cart\"></i>
                    </div>
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <a href=\"{{ path('app_commande') }}\" class=\"dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti\" data-notify=\"0\">
                        <i class=\"zmdi zmdi-favorite-outline\"></i>
                    </a>
                    {% endif %}
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <!-- Nav Item - User Information -->

                    <div class=\"nav-item dropdown no-arrow\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">{{ app.user.username }}</span>
                            <img class=\"img-profile rounded-circle\"
                                 src=\"{{ asset('asset/Admin/img/undraw_profile.svg') }}\" width=\"50px\" height=\"50px\">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                             aria-labelledby=\"userDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Profile
                            </a>


                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\" >
                                <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Logout
                            </a>
                        </div>
                    </div>
                </div>

                    {% else %}
                    <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary rounded-pill px-3 d-none d-lg-block\"
                    >Join Us<i class=\"fa fa-arrow-right ms-3\"></i
                        ></a>
                    {% endif %}
                </div>
            </div>
        </nav>
    {% endblock %}
    <!-- Navbar End -->
    {% block navimg %}
        <!-- Carousel Start -->

    <div class=\"container-fluid p-0 mb-5\">
        <div class=\"owl-carousel header-carousel position-relative\">
            <div class=\"owl-carousel-item position-relative\">
                <img class=\"img-fluid\" src=\"{{ asset('asset/User/img/i1.jpg') }}\" alt=\"\" />
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
                                <a
                                        href=\"\"
                                        class=\"btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft\"
                                >Learn More</a
                                >
                                <a
                                        href=\"\"
                                        class=\"btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight\"
                                >best Courses</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"owl-carousel-item position-relative\">
                <img class=\"img-fluid\" src=\"{{ asset('asset/User/img/i1.2.png') }}\" alt=\"\" />
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
                                <a
                                        href=\"\"
                                        class=\"btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft\"
                                >Learn More</a
                                >
                                <a
                                        href=\"\"
                                        class=\"btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight\"
                                >Our Classes</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
        <!-- Carousel End -->

    {% endblock %}


    <!-- Modal Search -->
    <div class=\"modal-search-header flex-c-m trans-04 js-hide-modal-search\">
        <div class=\"container-search-header\">
            <button class=\"flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search\">
                <img src=\"{{ asset('store/images/icons/icon-close2.png') }}\" alt=\"CLOSE\">
            </button>

            <form class=\"wrap-search-header flex-w p-l-15\">
                <button class=\"flex-c-m trans-04\">
                    <i class=\"zmdi zmdi-search\"></i>
                </button>
                <input class=\"plh3\" type=\"text\" name=\"search\" placeholder=\"Search...\">
            </form>
        </div>
    </div>


<!-- Cart -->
<div class=\"wrap-header-cart js-panel-cart\">
    <div class=\"s-full js-hide-cart\"></div>

    <div class=\"header-cart flex-col-l p-l-65 p-r-25\">
        <div class=\"header-cart-title flex-w flex-sb-m p-b-8\">
\t\t\t\t<span class=\"mtext-103 cl2\">
\t\t\t\t\tYour Cart
\t\t\t\t</span>

            <div class=\"fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart\">
                <i class=\"zmdi zmdi-close\"></i>
            </div>
        </div>

        <div class=\"header-cart-content flex-w js-pscroll\">
            {% set cart = app.session.get('cart', {}) %}
            <ul class=\"header-cart-wrapitem w-full\">
                {% if cart is not empty %}
                    {% for productId, productDetails in cart %}
                        <li class=\"header-cart-item flex-w flex-t m-b-12\">
                            <div class=\"header-cart-item-img\">
                                <img src=\"{{ productDetails.img_url }}\" alt=\"{{ productDetails.name }}\">
                            </div>

                            <div class=\"header-cart-item-txt p-t-8\">
                                <a href=\"#\" class=\"header-cart-item-name m-b-18 hov-cl1 trans-04\">
                                    {{ productDetails.name }}
                                </a>

                                <span class=\"header-cart-item-info\">
\t\t\t\t\t\t\t{{ productDetails.quantity }} x \${{ productDetails.price }}
\t\t\t\t\t\t\t</span>
                            </div>
                        </li>
                    {% endfor %}
                {% else %}
                    <p>Your cart is empty.</p>
                {% endif %}
            </ul>

            <div class=\"w-full\">
                <div class=\"header-cart-total w-full p-tb-40\">

                    Total: \${{ app.session.get('totalPrice') }}
                </div>

                <div class=\"header-cart-buttons flex-w w-full\">

                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <a href=\"{{ path('app_payment') }}\" class=\"flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10\">
                        Check Out
                    </a>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"bg-white\">
{% block body %}


    <!-- Facilities Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div
                    class=\"text-center mx-auto mb-5 wow fadeInUp\"
                    data-wow-delay=\"0.1s\"
                    style=\"max-width: 600px\"
            >
                <h1 class=\"mb-3\">Our Goals</h1>
                <p>
                    Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut
                    dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed
                    rebum vero dolor duo.
                </p>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"facility-item\">
                        <div class=\"facility-icon bg-primary\">
                            <span class=\"bg-primary\"></span>
                            <i class=\"fa fa-chalkboard-teacher fa-3x text-primary\"></i>
                            <span class=\"bg-primary\"></span>
                        </div>
                        <div class=\"facility-text bg-primary\">
                            <h3 class=\"text-primary mb-3\">Make learning easier</h3>
                            <p class=\"mb-0\">
                                Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero
                                ipsum sit
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"facility-item\">
                        <div class=\"facility-icon bg-success\">
                            <span class=\"bg-success\"></span>
                            <i class=\"fa fa-chalkboard-teacher fa-3x text-success\"></i>
                            <span class=\"bg-success\"></span>
                        </div>
                        <div class=\"facility-text bg-success\">
                            <h3 class=\"text-success mb-3\">Make learning fun</h3>
                            <p class=\"mb-0\">
                                Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero
                                ipsum sit
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"facility-item\">
                        <div class=\"facility-icon bg-warning\">
                            <span class=\"bg-warning\"></span>
                            <i class=\"fa fa-chalkboard-teacher fa-3x text-warning\"></i>
                            <span class=\"bg-warning\"></span>
                        </div>
                        <div class=\"facility-text bg-warning\">
                            <h3 class=\"text-warning mb-3\">ensure Accesibility for all</h3>
                            <p class=\"mb-0\">
                                Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero
                                ipsum sit
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"facility-item\">
                        <div class=\"facility-icon bg-info\">
                            <span class=\"bg-info\"></span>
                            <i class=\"fa fa-chalkboard-teacher fa-3x text-info\"></i>
                            <span class=\"bg-info\"></span>
                        </div>
                        <div class=\"facility-text bg-info\">
                            <h3 class=\"text-info mb-3\">emphasize practice</h3>
                            <p class=\"mb-0\">
                                Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero
                                ipsum sit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities End -->





{% endblock %}
</div>
<!-- Footer Start -->
{% block footer%}
    <script
            id=\"ChatcubeScript\"
            src=\"https://chatcube.co/api/chat-iframe\"
            data-id=\"212bac08-4605-4b22-aeb7-af32487ccb8e\"
            message-text=\"Hello! 👋 What can I help you with?\"
            color=\"#fe5d37\"
            defer>
    </script>
    <div
            class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn\"
            data-wow-delay=\"0.1s\"
    >
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
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"
                        ><i class=\"fab fa-twitter\"></i
                            ></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"
                        ><i class=\"fab fa-facebook-f\"></i
                            ></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"
                        ><i class=\"fab fa-youtube\"></i
                            ></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"
                        ><i class=\"fab fa-linkedin-in\"></i
                            ></a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h3 class=\"text-white mb-4\">Quick Links</h3>
                    <a class=\"btn btn-link text-white-50\" href=\"\">About Us</a>
                    <a class=\"btn btn-link text-white-50\" href=\"\">Contact Us</a>
                    <a class=\"btn btn-link text-white-50\" href=\"\">Our Services</a>
                    <a class=\"btn btn-link text-white-50\" href=\"\">Privacy Policy</a>
                    <a class=\"btn btn-link text-white-50\" href=\"\"
                    >Terms & Condition</a
                    >
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h3 class=\"text-white mb-4\">Photo Gallery</h3>
                    <div class=\"row g-2 pt-2\">
                        <div class=\"col-4\">
                            <img
                                    class=\"img-fluid rounded bg-light p-1\"
                                    src=\"{{ asset('base/img/classes-1.jpg') }}\"
                                    alt=\"\"
                            />
                        </div>
                        <div class=\"col-4\">
                            <img
                                    class=\"img-fluid rounded bg-light p-1\"
                                    src=\"{{ asset('base/img/classes-2.jpg') }}\"
                                    alt=\"\"
                            />
                        </div>
                        <div class=\"col-4\">
                            <img
                                    class=\"img-fluid rounded bg-light p-1\"
                                    src=\"{{ asset('base/img/classes-3.jpg') }}\"
                                    alt=\"\"
                            />
                        </div>
                        <div class=\"col-4\">
                            <img
                                    class=\"img-fluid rounded bg-light p-1\"
                                    src=\"{{ asset('base/img/classes-4.jpg') }}\"
                                    alt=\"\"
                            />
                        </div>
                        <div class=\"col-4\">
                            <img
                                    class=\"img-fluid rounded bg-light p-1\"
                                    src=\"{{ asset('base/img/classes-5.jpg') }}\"
                                    alt=\"\"
                            />
                        </div>
                        <div class=\"col-4\">
                            <img
                                    class=\"img-fluid rounded bg-light p-1\"
                                    src=\"{{ asset('base/img/classes-6.jpg') }}\"
                                    alt=\"\"
                            />
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h3 class=\"text-white mb-4\">Newsletter</h3>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class=\"position-relative mx-auto\" style=\"max-width: 400px\">
                        <input
                                class=\"form-control bg-transparent w-100 py-3 ps-4 pe-5\"
                                type=\"text\"
                                placeholder=\"Your email\"
                        />
                        <button
                                type=\"button\"
                                class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\"
                        >
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
                        <a class=\"border-bottom\" href=\"https://htmlcodex.com\"
                        >HTML Codex</a
                        >
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
{% endblock %}
<!-- Footer End -->


<!-- Back to top -->
<div class=\"btn-back-to-top\" id=\"myBtn\">
\t\t<span class=\"symbol-btn-back-to-top\">
\t\t\t<i class=\"zmdi zmdi-chevron-up\"></i>
\t\t</span>
</div>


{% block js %}
    <!--===============================================================================================-->
    <script src=\"{{ asset('store/vendor/jquery/jquery-3.2.1.min.js') }}\"></script>
    <!--===============================================================================================-->
    <script src=\"{{ asset('store/vendor/animsition/js/animsition.min.js') }}\"></script>
    <!--===============================================================================================-->
    <script src=\"{{ asset('store/vendor/bootstrap/js/popper.js') }}\"></script>
    <script src=\"{{ asset('store/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
    <!--===============================================================================================-->
    <script src=\"{{ asset('store/vendor/select2/select2.min.js') }}\"></script>
    <script>
        \$(\".js-select2\").each(function(){
            \$(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: \$(this).next('.dropDownSelect2')
            });
        })
    </script>
    <!--===============================================================================================-->
    <script src=\"{{ asset('store/vendor/daterangepicker/moment.min.js') }}\"></script>
    <script src=\"{{ asset('store/vendor/daterangepicker/daterangepicker.js') }}\"></script>
    <!--===============================================================================================-->
    <script src=\"{{ asset('store/vendor/slick/slick.min.js') }}\"></script>
    <script src=\"{{ asset('store/js/slick-custom.js') }}\"></script>
    <!--===============================================================================================-->
    <script src=\"{{ asset('store/vendor/parallax100/parallax100.js') }}\"></script>
    <script>
        \$('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script src=\"{{ asset('store/vendor/MagnificPopup/jquery.magnific-popup.min.js') }}\"></script>
    <script>
        \$('.gallery-lb').each(function() { // the containers for all your galleries
            \$(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled:true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src=\"{{ asset('store/vendor/isotope/isotope.pkgd.min.js') }}\"></script>
    <!--===============================================================================================-->
    <script src=\"{{ asset('store/vendor/sweetalert/sweetalert.min.js') }}\"></script>
    <script>
        \$('.js-addwish-b2').on('click', function(e){
            e.preventDefault();
        });

        \$('.js-addwish-b2').each(function(){
            var nameProduct = \$(this).parent().parent().find('.js-name-b2').html();
            \$(this).on('click', function(){
                swal(nameProduct, \"is added to wishlist !\", \"success\");

                \$(this).addClass('js-addedwish-b2');
                \$(this).off('click');
            });
        });

        \$('.js-addwish-detail').each(function(){
            var nameProduct = \$(this).parent().parent().parent().find('.js-name-detail').html();

            \$(this).on('click', function(){
                swal(nameProduct, \"is added to wishlist !\", \"success\");

                \$(this).addClass('js-addedwish-detail');
                \$(this).off('click');
            });
        });

        /*---------------------------------------------*/

        \$('.js-addcart-detail').each(function(){
            var nameProduct = \$(this).parent().parent().parent().parent().find('.js-name-detail').html();
            var addToCartButton = \$(this); // Cache the button element

            \$(this).on('click', function(){
                // Perform the redirection
                var url = \"{{ path('app_store') }}\"; // Replace 'your_route_name' with the actual name of your route
                window.location.href = url;

                // Display a success message (you can adjust this according to your needs)
                swal(nameProduct, \"is added to cart !\", \"success\");
            });
        });


    </script>
    <!--===============================================================================================-->
    <script src=\"{{ asset('store/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}\"></script>
    <script>
        \$('.js-pscroll').each(function(){
            \$(this).css('position','relative');
            \$(this).css('overflow','hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            \$(window).on('resize', function(){
                ps.update();
            })
        });
    </script>
    <!======================================================================-->


    <!--===============================================================================================-->
    <script src=\"{{ asset('store/js/main.js') }}\"></script>


    <!-- JavaScript Libraries first templait-->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{ asset('base/lib/wow/wow.min.js') }}\"></script>
    <script src=\"{{ asset('base/lib/easing/easing.min.js') }}\"></script>
    <script src=\"{{ asset('base/lib/waypoints/waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('base/lib/owlcarousel/owl.carousel.min.js') }}\"></script>

    <!-- Template Javascript -->
    <script src=\"{{ asset('base/js/main.js') }}\"></script>
    <!--===============================================================================================-->

{% endblock %}
</body>
</html>
", "base1.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\base1.html.twig");
    }
}
