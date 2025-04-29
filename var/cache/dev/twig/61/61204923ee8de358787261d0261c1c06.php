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
use Twig\TemplateWrapper;

/* qrcode/annonce.html.twig */
class __TwigTemplate_6ae408518fa04103d0df3ac6ca34e6f9 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "qrcode/annonce.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "qrcode/annonce.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "qrcode/annonce.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "QR Code pour ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .qr-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem;
        }
        .qr-code {
            text-align: center;
            margin: 2rem 0;
        }
        .qr-code img {
            max-width: 300px;
            height: auto;
        }
        .annonce-details {
            margin-top: 2rem;
            padding: 1.5rem;
            background-color: white;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .detail-row {
            display: flex;
            margin-bottom: 0.75rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid #f3f4f6;
        }
        .detail-label {
            font-weight: 600;
            width: 40%;
        }
        .detail-value {
            width: 60%;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 45
        yield "    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"qr-container\">
            <div class=\"mb-6\">
                <a href=\"javascript:history.back()\" class=\"inline-flex items-center text-primary hover:text-primary-dark\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour
                </a>
            </div>
            
            <h1 class=\"text-3xl font-bold text-gray-900 mb-2\">QR Code pour l'annonce</h1>
            <p class=\"text-gray-600 mb-6\">Scannez ce code pour accéder aux détails de l'annonce: ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 57, $this->source); })()), "titre", [], "any", false, false, false, 57), "html", null, true);
        yield "</p>
            
            <div class=\"qr-code\">
                <div id=\"qrcode\"></div>
                <p class=\"text-sm text-gray-600 mt-2\">QR Code généré pour ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["annonceUrl"]) || array_key_exists("annonceUrl", $context) ? $context["annonceUrl"] : (function () { throw new RuntimeError('Variable "annonceUrl" does not exist.', 61, $this->source); })()), "html", null, true);
        yield "</p>
            </div>
            
            <div class=\"annonce-details\">
                <h2 class=\"text-xl font-semibold text-gray-800 mb-4\">Détails de l'annonce</h2>
                
                <div class=\"detail-row\">
                    <div class=\"detail-label\">Titre:</div>
                    <div class=\"detail-value\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 69, $this->source); })()), "titre", [], "any", false, false, false, 69), "html", null, true);
        yield "</div>
                </div>
                
                <div class=\"detail-row\">
                    <div class=\"detail-label\">Départ:</div>
                    <div class=\"detail-value\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 74, $this->source); })()), "trajet", [], "any", false, false, false, 74), "departurePoint", [], "any", false, false, false, 74), "html", null, true);
        yield "</div>
                </div>
                
                <div class=\"detail-row\">
                    <div class=\"detail-label\">Destination:</div>
                    <div class=\"detail-value\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 79, $this->source); })()), "trajet", [], "any", false, false, false, 79), "arrivalPoint", [], "any", false, false, false, 79), "html", null, true);
        yield "</div>
                </div>
                
                <div class=\"detail-row\">
                    <div class=\"detail-label\">Date de départ:</div>
                    <div class=\"detail-value\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 84, $this->source); })()), "departureDate", [], "any", false, false, false, 84), "d/m/Y à H:i"), "html", null, true);
        yield "</div>
                </div>
                
                <div class=\"detail-row\">
                    <div class=\"detail-label\">Prix:</div>
                    <div class=\"detail-value\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 89, $this->source); })()), "trajet", [], "any", false, false, false, 89), "price", [], "any", false, false, false, 89), "html", null, true);
        yield " DT</div>
                </div>
                
                <div class=\"detail-row\">
                    <div class=\"detail-label\">Places disponibles:</div>
                    <div class=\"detail-value\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 94, $this->source); })()), "availableSeats", [], "any", false, false, false, 94) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 94, $this->source); })()), "reservations", [], "any", false, false, false, 94))), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 94, $this->source); })()), "availableSeats", [], "any", false, false, false, 94), "html", null, true);
        yield "</div>
                </div>
                
                <div class=\"detail-row\">
                    <div class=\"detail-label\">Statut:</div>
                    <div class=\"detail-value\">
                        ";
        // line 100
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 100, $this->source); })()), "status", [], "any", false, false, false, 100) == "ouvert")) {
            // line 101
            yield "                            <span class=\"px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">Ouvert</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 102
(isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 102, $this->source); })()), "status", [], "any", false, false, false, 102) == "plein")) {
            // line 103
            yield "                            <span class=\"px-3 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full\">Plein</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 104
(isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 104, $this->source); })()), "status", [], "any", false, false, false, 104) == "termine")) {
            // line 105
            yield "                            <span class=\"px-3 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full\">Terminé</span>
                        ";
        } else {
            // line 107
            yield "                            <span class=\"px-3 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 107, $this->source); })()), "status", [], "any", false, false, false, 107), "html", null, true);
            yield "</span>
                        ";
        }
        // line 109
        yield "                    </div>
                </div>
                
                ";
        // line 112
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 112, $this->source); })()), "description", [], "any", false, false, false, 112)) {
            // line 113
            yield "                    <div class=\"mt-4\">
                        <div class=\"font-semibold mb-2\">Description:</div>
                        <p class=\"text-gray-700\">";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 115, $this->source); })()), "description", [], "any", false, false, false, 115), "html", null, true);
            yield "</p>
                    </div>
                ";
        }
        // line 118
        yield "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 123
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Options pour le QR code avec l'API qr-code-generator.com
            const qrData = ";
        // line 129
        yield json_encode((isset($context["annonceUrl"]) || array_key_exists("annonceUrl", $context) ? $context["annonceUrl"] : (function () { throw new RuntimeError('Variable "annonceUrl" does not exist.', 129, $this->source); })()));
        yield ";
            
            // Générer le QR code via l'API
            const qrElement = document.getElementById('qrcode');
            qrElement.innerHTML = `<img src=\"https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=\${encodeURIComponent(qrData)}\" alt=\"QR Code pour l'annonce\">`;
            
            // Alternative avec qrcode.js (si l'API ne fonctionne pas)
            /*
            new QRCode(document.getElementById(\"qrcode\"), {
                text: qrData,
                width: 300,
                height: 300,
                colorDark: \"#000000\",
                colorLight: \"#ffffff\",
                correctLevel: QRCode.CorrectLevel.H
            });
            */
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "qrcode/annonce.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  323 => 129,  314 => 124,  301 => 123,  287 => 118,  281 => 115,  277 => 113,  275 => 112,  270 => 109,  264 => 107,  260 => 105,  258 => 104,  255 => 103,  253 => 102,  250 => 101,  248 => 100,  237 => 94,  229 => 89,  221 => 84,  213 => 79,  205 => 74,  197 => 69,  186 => 61,  179 => 57,  165 => 45,  152 => 44,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}QR Code pour {{ annonce.titre }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .qr-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem;
        }
        .qr-code {
            text-align: center;
            margin: 2rem 0;
        }
        .qr-code img {
            max-width: 300px;
            height: auto;
        }
        .annonce-details {
            margin-top: 2rem;
            padding: 1.5rem;
            background-color: white;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .detail-row {
            display: flex;
            margin-bottom: 0.75rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid #f3f4f6;
        }
        .detail-label {
            font-weight: 600;
            width: 40%;
        }
        .detail-value {
            width: 60%;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"qr-container\">
            <div class=\"mb-6\">
                <a href=\"javascript:history.back()\" class=\"inline-flex items-center text-primary hover:text-primary-dark\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour
                </a>
            </div>
            
            <h1 class=\"text-3xl font-bold text-gray-900 mb-2\">QR Code pour l'annonce</h1>
            <p class=\"text-gray-600 mb-6\">Scannez ce code pour accéder aux détails de l'annonce: {{ annonce.titre }}</p>
            
            <div class=\"qr-code\">
                <div id=\"qrcode\"></div>
                <p class=\"text-sm text-gray-600 mt-2\">QR Code généré pour {{ annonceUrl }}</p>
            </div>
            
            <div class=\"annonce-details\">
                <h2 class=\"text-xl font-semibold text-gray-800 mb-4\">Détails de l'annonce</h2>
                
                <div class=\"detail-row\">
                    <div class=\"detail-label\">Titre:</div>
                    <div class=\"detail-value\">{{ annonce.titre }}</div>
                </div>
                
                <div class=\"detail-row\">
                    <div class=\"detail-label\">Départ:</div>
                    <div class=\"detail-value\">{{ annonce.trajet.departurePoint }}</div>
                </div>
                
                <div class=\"detail-row\">
                    <div class=\"detail-label\">Destination:</div>
                    <div class=\"detail-value\">{{ annonce.trajet.arrivalPoint }}</div>
                </div>
                
                <div class=\"detail-row\">
                    <div class=\"detail-label\">Date de départ:</div>
                    <div class=\"detail-value\">{{ annonce.departureDate|date(\"d/m/Y à H:i\") }}</div>
                </div>
                
                <div class=\"detail-row\">
                    <div class=\"detail-label\">Prix:</div>
                    <div class=\"detail-value\">{{ annonce.trajet.price }} DT</div>
                </div>
                
                <div class=\"detail-row\">
                    <div class=\"detail-label\">Places disponibles:</div>
                    <div class=\"detail-value\">{{ annonce.availableSeats - annonce.reservations|length }}/{{ annonce.availableSeats }}</div>
                </div>
                
                <div class=\"detail-row\">
                    <div class=\"detail-label\">Statut:</div>
                    <div class=\"detail-value\">
                        {% if annonce.status == 'ouvert' %}
                            <span class=\"px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">Ouvert</span>
                        {% elseif annonce.status == 'plein' %}
                            <span class=\"px-3 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full\">Plein</span>
                        {% elseif annonce.status == 'termine' %}
                            <span class=\"px-3 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full\">Terminé</span>
                        {% else %}
                            <span class=\"px-3 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full\">{{ annonce.status }}</span>
                        {% endif %}
                    </div>
                </div>
                
                {% if annonce.description %}
                    <div class=\"mt-4\">
                        <div class=\"font-semibold mb-2\">Description:</div>
                        <p class=\"text-gray-700\">{{ annonce.description }}</p>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Options pour le QR code avec l'API qr-code-generator.com
            const qrData = {{ annonceUrl|json_encode|raw }};
            
            // Générer le QR code via l'API
            const qrElement = document.getElementById('qrcode');
            qrElement.innerHTML = `<img src=\"https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=\${encodeURIComponent(qrData)}\" alt=\"QR Code pour l'annonce\">`;
            
            // Alternative avec qrcode.js (si l'API ne fonctionne pas)
            /*
            new QRCode(document.getElementById(\"qrcode\"), {
                text: qrData,
                width: 300,
                height: 300,
                colorDark: \"#000000\",
                colorLight: \"#ffffff\",
                correctLevel: QRCode.CorrectLevel.H
            });
            */
        });
    </script>
{% endblock %} ", "qrcode/annonce.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\qrcode\\annonce.html.twig");
    }
}
