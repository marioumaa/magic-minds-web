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

/* Admin/detailsproduct.html.twig */
class __TwigTemplate_90e47231e51b62fd68658252921e7d64 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/detailsproduct.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/detailsproduct.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/detailsproduct.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        yield "    <div class=\"row\">
        <div class=\"col-md-6 col-xl-4 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex flex-row justify-content-between\">
                        <h4 class=\"card-title\">Comments</h4>
                        <p class=\"text-muted mb-1 small\">View all</p>
                    </div>
                    <section>
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comm"]) || array_key_exists("comm", $context) ? $context["comm"] : (function () { throw new RuntimeError('Variable "comm" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 13
            yield "                        <div class=\"preview-list\">
                            <div class=\"preview-item border-bottom\">
                                <div class=\"preview-thumbnail\">
                                    <img
                                            src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp\"
                                            alt=\"image\"
                                            class=\"rounded-circle\" height=\"50px\"
                                    />
                                    <h6 class=\"preview-subject\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "iduser", [], "any", false, false, false, 21), "html", null, true);
            yield "</h6>

                                    <p class=\"text-muted text-small\" >";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "date", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true);
            yield "   </p>
                                    <a href=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deletecomment", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["i"], "idproduit", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "ic" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\"><i class=\"mdi mdi-delete-forever\">d</i></a>
                                </div>
                                <div class=\"preview-item-content d-flex flex-grow\">
                                    <div class=\"flex-grow\">
                                        <div
                                                class=\"d-flex d-md-block d-xl-flex justify-content-between\"
                                        >

                                        </div>
                                        <p class=\"text-muted\">
                                            ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "descrip", [], "any", false, false, false, 34), "html", null, true);
            yield "
                                        </p>
                                    </div>



                                </div>

                            </div>

                    </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                    </section>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-xl-4 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Product details</h4>
                    <div
                            class=\"owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel\"
                            id=\"owl-carousel-basic\"
                    >
                        <div class=\"item\">
                            <img
                                    src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 60, $this->source); })()), "img1", [], "any", false, false, false, 60), "html", null, true);
        yield "\"
                                    alt=\"\"
                            />

                    </div>
                    <hr>
                    <hr>
                   <h3>name: ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 67, $this->source); })()), "nom", [], "any", false, false, false, 67), "html", null, true);
        yield "</h3>
                    <h3>price: \$";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 68, $this->source); })()), "prix", [], "any", false, false, false, 68), "html", null, true);
        yield "</h3>
                    <h3>Quantite: ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 69, $this->source); })()), "quantite", [], "any", false, false, false, 69), "html", null, true);
        yield "</h3>
                    <h3>categorie: ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 70, $this->source); })()), "categorie", [], "any", false, false, false, 70), "html", null, true);
        yield "</h3>
                    <p class=\"text-muted\">description: <br>h4";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 71, $this->source); })()), "description", [], "any", false, false, false, 71), "html", null, true);
        yield "</p>
                    <div class=\"progress progress-md portfolio-progress\">
                        <div
                                class=\"progress-bar bg-success\"
                                role=\"progressbar\"
                                style=\"width: 50%\"
                                aria-valuenow=\"25\"
                                aria-valuemin=\"0\"
                                aria-valuemax=\"100\"
                        ></div>
                    </div>
                </div>
            </div>
        </div>
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
        return "Admin/detailsproduct.html.twig";
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
        return array (  176 => 71,  172 => 70,  168 => 69,  164 => 68,  160 => 67,  150 => 60,  134 => 46,  116 => 34,  103 => 24,  99 => 23,  94 => 21,  84 => 13,  80 => 12,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/base.html.twig' %}
{% block content %}
    <div class=\"row\">
        <div class=\"col-md-6 col-xl-4 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex flex-row justify-content-between\">
                        <h4 class=\"card-title\">Comments</h4>
                        <p class=\"text-muted mb-1 small\">View all</p>
                    </div>
                    <section>
                        {% for i in comm %}
                        <div class=\"preview-list\">
                            <div class=\"preview-item border-bottom\">
                                <div class=\"preview-thumbnail\">
                                    <img
                                            src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp\"
                                            alt=\"image\"
                                            class=\"rounded-circle\" height=\"50px\"
                                    />
                                    <h6 class=\"preview-subject\">{{ i.iduser }}</h6>

                                    <p class=\"text-muted text-small\" >{{ i.date|date('Y-m-d') }}   </p>
                                    <a href=\"{{ path('app_deletecomment', {'id': i.idproduit.id, 'ic': i.id}) }}\"><i class=\"mdi mdi-delete-forever\">d</i></a>
                                </div>
                                <div class=\"preview-item-content d-flex flex-grow\">
                                    <div class=\"flex-grow\">
                                        <div
                                                class=\"d-flex d-md-block d-xl-flex justify-content-between\"
                                        >

                                        </div>
                                        <p class=\"text-muted\">
                                            {{ i.descrip }}
                                        </p>
                                    </div>



                                </div>

                            </div>

                    </div>
                        {% endfor %}
                    </section>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-xl-4 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Product details</h4>
                    <div
                            class=\"owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel\"
                            id=\"owl-carousel-basic\"
                    >
                        <div class=\"item\">
                            <img
                                    src=\"{{ produit.img1 }}\"
                                    alt=\"\"
                            />

                    </div>
                    <hr>
                    <hr>
                   <h3>name: {{ produit.nom }}</h3>
                    <h3>price: \${{ produit.prix }}</h3>
                    <h3>Quantite: {{ produit.quantite }}</h3>
                    <h3>categorie: {{ produit.categorie }}</h3>
                    <p class=\"text-muted\">description: <br>h4{{ produit.description }}</p>
                    <div class=\"progress progress-md portfolio-progress\">
                        <div
                                class=\"progress-bar bg-success\"
                                role=\"progressbar\"
                                style=\"width: 50%\"
                                aria-valuenow=\"25\"
                                aria-valuemin=\"0\"
                                aria-valuemax=\"100\"
                        ></div>
                    </div>
                </div>
            </div>
        </div>
{% endblock %}", "Admin/detailsproduct.html.twig", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\Admin\\detailsproduct.html.twig");
    }
}
