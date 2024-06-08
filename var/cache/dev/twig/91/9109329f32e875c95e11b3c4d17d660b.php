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

/* store/viewproduct.twig */
class __TwigTemplate_cee8f6d8b686e80aa92fe870757a9bce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "store/viewproduct.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "store/viewproduct.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "store/viewproduct.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <!-- Modal1 -->
        <div class=\"container\">
            <div class=\"bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent\">
                <button class=\"how-pos3 hov3 trans-04 js-hide-modal1\">
                    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("store/images/icons/icon-close.png"), "html", null, true);
        echo "\" alt=\"CLOSE\">
                </button>

                <div class=\"row\">
                    <div class=\"col-md-6 col-lg-7 p-b-30\">
                        <div class=\"p-l-25 p-r-30 p-lr-0-lg\">
                            <div class=\"wrap-slick3 flex-sb flex-w\">
                                <div class=\"wrap-slick3-dots\"></div>
                                <div class=\"wrap-slick3-arrows flex-sb-m flex-w\"></div>

                                <div class=\"slick3 gallery-lb\">
                                    <div class=\"item-slick3\" data-thumb=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "img1", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
                                        <div class=\"wrap-pic-w pos-relative\">
                                            <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "img1", [], "any", false, false, false, 20), "html", null, true);
        echo "\" alt=\"IMG-PRODUCT\">

                                            <a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "img1", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
                                                <i class=\"fa fa-expand\"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"item-slick3\" data-thumb=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "img2", [], "any", false, false, false, 28), "html", null, true);
        echo "\">
                                        <div class=\"wrap-pic-w pos-relative\">
                                            <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "img2", [], "any", false, false, false, 30), "html", null, true);
        echo "\" alt=\"IMG-PRODUCT\">

                                            <a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "img2", [], "any", false, false, false, 32), "html", null, true);
        echo "\">
                                                <i class=\"fa fa-expand\"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"item-slick3\" data-thumb=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "img3", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
                                        <div class=\"wrap-pic-w pos-relative\">
                                            <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()), "img3", [], "any", false, false, false, 40), "html", null, true);
        echo "\" alt=\"IMG-PRODUCT\">

                                            <a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "img3", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
                                                <i class=\"fa fa-expand\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section style=\"background-color: #FFFFFF;\">
                            <div class=\"container my-5 py-5\">
                                <h1>comments:</h1>
                                <div class=\"row d-flex justify-content-center\">
                                    <div class=\"col-md-12 col-lg-10 col-xl-8\">
                                        <div class=\"card\">
                                            <div class=\"card-body\">
                                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comm"]) || array_key_exists("comm", $context) ? $context["comm"] : (function () { throw new RuntimeError('Variable "comm" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 58
            echo "
                                                <div class=\"d-flex flex-start align-items-center\">
                                                    <img class=\"rounded-circle shadow-1-strong me-3\"
                                                         src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp\" alt=\"avatar\" width=\"60\"
                                                         height=\"60\" />
                                                    <div>
                                                        <h6 class=\"fw-bold text-primary mb-1\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "iduser", [], "any", false, false, false, 64), "html", null, true);
            echo "</h6>
                                                        <p class=\"text-muted small mb-0\">
                                                            Shared publicly - ";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "date", [], "any", false, false, false, 66), "Y-m-d"), "html", null, true);
            echo "
                                                        </p>
                                                    </div>
                                                </div>

                                                <p class=\"mt-3 mb-4 pb-2\">
                                                   ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "descrip", [], "any", false, false, false, 72), "html", null, true);
            echo "
                                                </p>

                                                <div class=\"small d-flex justify-content-start\">
                                                    <a href=\"#!\" class=\"d-flex align-items-center me-3\">
                                                        <i class=\"far fa-thumbs-up me-2\"></i>
                                                        <p class=\"mb-0\">Like</p>
                                                    </a>

                                                    ";
            // line 81
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "iduser", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "session", [], "any", false, false, false, 81), "get", ["id_user"], "method", false, false, false, 81))) {
                // line 82
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_removecomment", ["id" => twig_get_attribute($this->env, $this->source, $context["j"], "id", [], "any", false, false, false, 82), "ip" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "idproduit", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82)]), "html", null, true);
                echo "\" class=\"d-flex align-items-center me-3\">
                                                            <i class=\"far fa-comment-dots me-2\"></i>
                                                            <p class=\"mb-0\">Remove</p>
                                                        </a>
                                                        <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_updatecomment", ["id" => twig_get_attribute($this->env, $this->source, $context["j"], "id", [], "any", false, false, false, 86), "ip" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "idproduit", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86)]), "html", null, true);
                echo "\" class=\"d-flex align-items-center me-3\">
                                                            <i class=\"far fa-comment-dots me-2\"></i>
                                                            <p class=\"mb-0\">Update</p>
                                                        </a>
                                                     ";
            }
            // line 91
            echo "                                                </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                                            </div>
                                            <div class=\"card-footer py-3 border-0\" style=\"background-color: #f8f9fa;\">
                                                <div class=\"d-flex flex-start w-100\">
                                                    ";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 96, $this->source); })()), 'form_start');
        echo "
                                                    <img class=\"rounded-circle shadow-1-strong me-3\"
                                                         src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp\" alt=\"avatar\" width=\"40\"
                                                         height=\"40\" />
                                                    <div class=\"form-outline w-100\">
                                                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 101, $this->source); })()), "descrip", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control", "id" => "textAreaExample", "rows" => "4", "style" => "background: #fff;"]]);
        echo "
                                                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 102, $this->source); })()), "descrip", [], "any", false, false, false, 102), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Message"]);
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"float-end mt-2 pt-1\">
                                                    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 106, $this->source); })()), "submit", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "btn btn-primary btn-sm"]]);
        echo "
                                                    <button type=\"button\" class=\"btn btn-outline-primary btn-sm\">Cancel</button>
                                                </div>
                                                ";
        // line 109
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 109, $this->source); })()), 'form_end');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class=\"col-md-6 col-lg-5 p-b-30\">
                        <div class=\"p-r-50 p-t-5 p-lr-0-lg\">
                            <h4 class=\"mtext-105 cl2 js-name-detail p-b-14\">
                                ";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 121, $this->source); })()), "nom", [], "any", false, false, false, 121), "html", null, true);
        echo "
                            </h4>

                            <span class=\"mtext-106 cl2\">
\t\t\t\t\t\t\t\t\$";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 125, $this->source); })()), "prix", [], "any", false, false, false, 125), "html", null, true);
        echo "
\t\t\t\t\t\t\t</span>

                            <p class=\"stext-102 cl3 p-t-23\">
                                ";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 129, $this->source); })()), "description", [], "any", false, false, false, 129), "html", null, true);
        echo "
                            </p>

                            <!--  -->


                            <div class=\"flex-w flex-r-m p-b-10\">
                                <div class=\"size-203 flex-c-m respon6\">
                                    Color
                                </div>

                                <div class=\"size-204 respon6-next\">
                                    <div class=\"rs1-select2 bor8 bg0\">
                                        <select class=\"js-select2\" name=\"time\">
                                            <option>Choose an option</option>
                                            <option>Red</option>
                                            <option>Blue</option>
                                            <option>White</option>
                                            <option>Grey</option>
                                        </select>
                                        <div class=\"dropDownSelect2\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"flex-w flex-r-m p-b-10\">
                                <div class=\"size-204 flex-w flex-m respon6-next\">
                                    <div class=\"wrap-num-product flex-w m-r-20 m-tb-10\">
                                        <div class=\"btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m\">
                                            <i class=\"fs-16 zmdi zmdi-minus\"></i>
                                        </div>

                                        <input class=\"mtext-104 cl3 txt-center num-product\" type=\"number\" name=\"num-product\" value=\"1\">

                                        <div class=\"btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m\">
                                            <i class=\"fs-16 zmdi zmdi-plus\"></i>
                                        </div>
                                    </div>

                                    <button class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail \">
                                        <a href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addtocart", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 169, $this->source); })()), "id", [], "any", false, false, false, 169), "qt" => 1]), "html", null, true);
        echo "\">Add to cart</a>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!--  -->
                        <div class=\"flex-w flex-m p-l-100 p-t-40 respon7\">
                            <div class=\"flex-m bor9 p-r-10 m-r-11\">
                                <a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100\" data-tooltip=\"Add to Wishlist\">
                                    <i class=\"zmdi zmdi-favorite\"></i>
                                </a>
                            </div>

                            <a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Facebook\">
                                <i class=\"fa fa-facebook\"></i>
                            </a>

                            <a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Twitter\">
                                <i class=\"fa fa-twitter\"></i>
                            </a>

                            <a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Google Plus\">
                                <i class=\"fa fa-google-plus\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "store/viewproduct.twig";
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
        return array (  319 => 169,  276 => 129,  269 => 125,  262 => 121,  247 => 109,  241 => 106,  234 => 102,  230 => 101,  222 => 96,  217 => 93,  210 => 91,  202 => 86,  194 => 82,  192 => 81,  180 => 72,  171 => 66,  166 => 64,  158 => 58,  154 => 57,  136 => 42,  131 => 40,  126 => 38,  117 => 32,  112 => 30,  107 => 28,  98 => 22,  93 => 20,  88 => 18,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}
{% block body %}
    <!-- Modal1 -->
        <div class=\"container\">
            <div class=\"bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent\">
                <button class=\"how-pos3 hov3 trans-04 js-hide-modal1\">
                    <img src=\"{{ asset('store/images/icons/icon-close.png') }}\" alt=\"CLOSE\">
                </button>

                <div class=\"row\">
                    <div class=\"col-md-6 col-lg-7 p-b-30\">
                        <div class=\"p-l-25 p-r-30 p-lr-0-lg\">
                            <div class=\"wrap-slick3 flex-sb flex-w\">
                                <div class=\"wrap-slick3-dots\"></div>
                                <div class=\"wrap-slick3-arrows flex-sb-m flex-w\"></div>

                                <div class=\"slick3 gallery-lb\">
                                    <div class=\"item-slick3\" data-thumb=\"{{ product.img1 }}\">
                                        <div class=\"wrap-pic-w pos-relative\">
                                            <img src=\"{{ product.img1 }}\" alt=\"IMG-PRODUCT\">

                                            <a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"{{ product.img1 }}\">
                                                <i class=\"fa fa-expand\"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"item-slick3\" data-thumb=\"{{ product.img2 }}\">
                                        <div class=\"wrap-pic-w pos-relative\">
                                            <img src=\"{{ product.img2 }}\" alt=\"IMG-PRODUCT\">

                                            <a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"{{ product.img2 }}\">
                                                <i class=\"fa fa-expand\"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"item-slick3\" data-thumb=\"{{ product.img3 }}\">
                                        <div class=\"wrap-pic-w pos-relative\">
                                            <img src=\"{{ product.img3 }}\" alt=\"IMG-PRODUCT\">

                                            <a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"{{ product.img3 }}\">
                                                <i class=\"fa fa-expand\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section style=\"background-color: #FFFFFF;\">
                            <div class=\"container my-5 py-5\">
                                <h1>comments:</h1>
                                <div class=\"row d-flex justify-content-center\">
                                    <div class=\"col-md-12 col-lg-10 col-xl-8\">
                                        <div class=\"card\">
                                            <div class=\"card-body\">
                                                {% for j in comm %}

                                                <div class=\"d-flex flex-start align-items-center\">
                                                    <img class=\"rounded-circle shadow-1-strong me-3\"
                                                         src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp\" alt=\"avatar\" width=\"60\"
                                                         height=\"60\" />
                                                    <div>
                                                        <h6 class=\"fw-bold text-primary mb-1\">{{ j.iduser }}</h6>
                                                        <p class=\"text-muted small mb-0\">
                                                            Shared publicly - {{ j.date|date('Y-m-d') }}
                                                        </p>
                                                    </div>
                                                </div>

                                                <p class=\"mt-3 mb-4 pb-2\">
                                                   {{ j.descrip }}
                                                </p>

                                                <div class=\"small d-flex justify-content-start\">
                                                    <a href=\"#!\" class=\"d-flex align-items-center me-3\">
                                                        <i class=\"far fa-thumbs-up me-2\"></i>
                                                        <p class=\"mb-0\">Like</p>
                                                    </a>

                                                    {% if j.iduser.id== app.session.get('id_user') %}
                                                        <a href=\"{{ path('app_removecomment',{'id': j.id, 'ip': j.idproduit.id}) }}\" class=\"d-flex align-items-center me-3\">
                                                            <i class=\"far fa-comment-dots me-2\"></i>
                                                            <p class=\"mb-0\">Remove</p>
                                                        </a>
                                                        <a href=\"{{ path('app_updatecomment',{'id': j.id, 'ip': j.idproduit.id}) }}\" class=\"d-flex align-items-center me-3\">
                                                            <i class=\"far fa-comment-dots me-2\"></i>
                                                            <p class=\"mb-0\">Update</p>
                                                        </a>
                                                     {% endif %}
                                                </div>
                                                {% endfor %}
                                            </div>
                                            <div class=\"card-footer py-3 border-0\" style=\"background-color: #f8f9fa;\">
                                                <div class=\"d-flex flex-start w-100\">
                                                    {{ form_start(f) }}
                                                    <img class=\"rounded-circle shadow-1-strong me-3\"
                                                         src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp\" alt=\"avatar\" width=\"40\"
                                                         height=\"40\" />
                                                    <div class=\"form-outline w-100\">
                                                        {{ form_widget(f.descrip, {'attr': {'class': 'form-control', 'id': 'textAreaExample', 'rows': '4', 'style': 'background: #fff;'}}) }}
                                                        {{ form_label(f.descrip, 'Message', {'label_attr': {'class': 'form-label'}}) }}
                                                    </div>
                                                </div>
                                                <div class=\"float-end mt-2 pt-1\">
                                                    {{ form_widget(f.submit, {'attr': {'class': 'btn btn-primary btn-sm'}}) }}
                                                    <button type=\"button\" class=\"btn btn-outline-primary btn-sm\">Cancel</button>
                                                </div>
                                                {{ form_end(f) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class=\"col-md-6 col-lg-5 p-b-30\">
                        <div class=\"p-r-50 p-t-5 p-lr-0-lg\">
                            <h4 class=\"mtext-105 cl2 js-name-detail p-b-14\">
                                {{ product.nom }}
                            </h4>

                            <span class=\"mtext-106 cl2\">
\t\t\t\t\t\t\t\t\${{ product.prix }}
\t\t\t\t\t\t\t</span>

                            <p class=\"stext-102 cl3 p-t-23\">
                                {{ product.description }}
                            </p>

                            <!--  -->


                            <div class=\"flex-w flex-r-m p-b-10\">
                                <div class=\"size-203 flex-c-m respon6\">
                                    Color
                                </div>

                                <div class=\"size-204 respon6-next\">
                                    <div class=\"rs1-select2 bor8 bg0\">
                                        <select class=\"js-select2\" name=\"time\">
                                            <option>Choose an option</option>
                                            <option>Red</option>
                                            <option>Blue</option>
                                            <option>White</option>
                                            <option>Grey</option>
                                        </select>
                                        <div class=\"dropDownSelect2\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"flex-w flex-r-m p-b-10\">
                                <div class=\"size-204 flex-w flex-m respon6-next\">
                                    <div class=\"wrap-num-product flex-w m-r-20 m-tb-10\">
                                        <div class=\"btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m\">
                                            <i class=\"fs-16 zmdi zmdi-minus\"></i>
                                        </div>

                                        <input class=\"mtext-104 cl3 txt-center num-product\" type=\"number\" name=\"num-product\" value=\"1\">

                                        <div class=\"btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m\">
                                            <i class=\"fs-16 zmdi zmdi-plus\"></i>
                                        </div>
                                    </div>

                                    <button class=\"flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail \">
                                        <a href=\"{{ path('app_addtocart', {'id':product.id, 'qt':1}) }}\">Add to cart</a>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!--  -->
                        <div class=\"flex-w flex-m p-l-100 p-t-40 respon7\">
                            <div class=\"flex-m bor9 p-r-10 m-r-11\">
                                <a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100\" data-tooltip=\"Add to Wishlist\">
                                    <i class=\"zmdi zmdi-favorite\"></i>
                                </a>
                            </div>

                            <a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Facebook\">
                                <i class=\"fa fa-facebook\"></i>
                            </a>

                            <a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Twitter\">
                                <i class=\"fa fa-twitter\"></i>
                            </a>

                            <a href=\"#\" class=\"fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100\" data-tooltip=\"Google Plus\">
                                <i class=\"fa fa-google-plus\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

    </div>
{% endblock %}
", "store/viewproduct.twig", "C:\\Users\\hp\\Desktop\\MagicMinds\\templates\\store\\viewproduct.twig");
    }
}
