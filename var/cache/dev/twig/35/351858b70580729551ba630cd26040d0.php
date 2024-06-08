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

/* email/facture.html */
class __TwigTemplate_f2e3c37e86e24ea67bbc370121cbff16 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/facture.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/facture.html"));

        yield "<!doctype html>
<html lang=\"en\">
<header>
    <style>
        body {

            padding: 30px;
        }

        .container {
            width: 21cm;
            min-height: 29.7cm;
        }

        .invoice {

            width: 100%;
            padding: 50px;
        }

        .logo {
            width: 5cm;
        }

        .document-type {
            text-align: right;
            color: #444;
        }

        .conditions {
            font-size: 0.7em;
            color: #666;
        }

        .bottom-page {
            font-size: 0.7em;
        }
    </style>
</header>
<bod>
<div class=\"container\">
    <div class=\"invoice\">
        <div class=\"row\">
            <div class=\"col-7\">
                <img src=\"C:\\Users\\achra\\Desktop\\pide\\Magic-Minds\\public\\asset\\Admin\\img\\logo.png\" class=\"logo\">
            </div>
            <div class=\"col-5\">
                <h1 class=\"document-type display-4\">FACTURE</h1>
                <p class=\"text-right\"><strong>N°90T-17-01-0123</strong></p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-7\">
                <p>
                    <strong>Client</strong><br>
                    {user_name} {user_last}<br>
                </p>
            </div>
            <div class=\"col-5\">
                <br><br><br>
                <p>
                    <strong>MagicMinds</strong><br>
                    Réf. Client <em>C00022</em><br>
                    esprit<br>
                    54250 JARNY
                </p>
            </div>
        </div>
        <br>
        <br>
        <h6>Audits et rapports mensuels (4er Mars 2024 )</h6>
        <br>

        <table border='1' class=\"table table-striped\">
            <thead>
            <tr>
                <th>id_product</th>
                <th>name</th>
                <th>description</th>
                <th>price</th>
                <th>Quantity</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                {products}
            </tbody>
        </table>
        <div class=\"row\">
            <div class=\"col-8\">
            </div>
            <div class=\"col-4\">
                <br>
                <br>
                <table class=\"table table-sm text-right\">

                    <tr>
                        <td><strong>Total TTC: </strong></td>
                        <td class=\"text-right\">\$ {total}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</bod>
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
        return "email/facture.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<header>
    <style>
        body {

            padding: 30px;
        }

        .container {
            width: 21cm;
            min-height: 29.7cm;
        }

        .invoice {

            width: 100%;
            padding: 50px;
        }

        .logo {
            width: 5cm;
        }

        .document-type {
            text-align: right;
            color: #444;
        }

        .conditions {
            font-size: 0.7em;
            color: #666;
        }

        .bottom-page {
            font-size: 0.7em;
        }
    </style>
</header>
<bod>
<div class=\"container\">
    <div class=\"invoice\">
        <div class=\"row\">
            <div class=\"col-7\">
                <img src=\"C:\\Users\\achra\\Desktop\\pide\\Magic-Minds\\public\\asset\\Admin\\img\\logo.png\" class=\"logo\">
            </div>
            <div class=\"col-5\">
                <h1 class=\"document-type display-4\">FACTURE</h1>
                <p class=\"text-right\"><strong>N°90T-17-01-0123</strong></p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-7\">
                <p>
                    <strong>Client</strong><br>
                    {user_name} {user_last}<br>
                </p>
            </div>
            <div class=\"col-5\">
                <br><br><br>
                <p>
                    <strong>MagicMinds</strong><br>
                    Réf. Client <em>C00022</em><br>
                    esprit<br>
                    54250 JARNY
                </p>
            </div>
        </div>
        <br>
        <br>
        <h6>Audits et rapports mensuels (4er Mars 2024 )</h6>
        <br>

        <table border='1' class=\"table table-striped\">
            <thead>
            <tr>
                <th>id_product</th>
                <th>name</th>
                <th>description</th>
                <th>price</th>
                <th>Quantity</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                {products}
            </tbody>
        </table>
        <div class=\"row\">
            <div class=\"col-8\">
            </div>
            <div class=\"col-4\">
                <br>
                <br>
                <table class=\"table table-sm text-right\">

                    <tr>
                        <td><strong>Total TTC: </strong></td>
                        <td class=\"text-right\">\$ {total}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</bod>
</html>", "email/facture.html", "C:\\Users\\mariem\\Desktop\\MagicMinds\\MagicMinds\\templates\\email\\facture.html");
    }
}
