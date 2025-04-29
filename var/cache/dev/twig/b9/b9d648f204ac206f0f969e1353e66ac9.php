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

/* qrcode/show.html.twig */
class __TwigTemplate_3fb7e0f6286cb2f6edb31710db90f735 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "qrcode/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "qrcode/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "qrcode/show.html.twig", 1);
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

        yield "QR Code - ";
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
            background-color: white;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            padding: 2rem;
            max-width: 500px;
            margin: 0 auto;
        }
        .qr-image {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            padding: 0.5rem;
            background-color: white;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        }
        .qr-info {
            margin-top: 1.5rem;
            border-top: 1px solid #e5e7eb;
            padding-top: 1.5rem;
        }
        .qr-info-item {
            display: flex;
            margin-bottom: 0.75rem;
        }
        .qr-info-label {
            font-weight: 600;
            width: 140px;
            color: #4b5563;
        }
        .qr-info-value {
            color: #1f2937;
        }
        .back-button {
            display: inline-flex;
            align-items: center;
            margin-bottom: 1rem;
            color: #4f46e5;
            font-weight: 500;
            transition: color 0.2s;
        }
        .back-button:hover {
            color: #4338ca;
        }
        .back-button svg {
            margin-right: 0.5rem;
        }
        .qr-code-title {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #1f2937;
        }
        .qr-fallback {
            text-align: center;
            color: #ef4444;
            margin-top: 1rem;
            padding: 0.5rem;
            border: 1px dashed #ef4444;
            border-radius: 0.375rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
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

        // line 75
        yield "    <div class=\"container mx-auto py-8 px-4\">
        <a href=\"javascript:history.back()\" class=\"back-button\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
            </svg>
            Retour
        </a>
        
        <div class=\"qr-container\">
            <h1 class=\"qr-code-title text-2xl font-bold\">QR Code pour l'annonce</h1>
            
            <div class=\"text-center mb-4\">
                <img src=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qrCodeUrl"]) || array_key_exists("qrCodeUrl", $context) ? $context["qrCodeUrl"] : (function () { throw new RuntimeError('Variable "qrCodeUrl" does not exist.', 87, $this->source); })()), "html", null, true);
        yield "\" id=\"qr-code-image\" alt=\"QR Code pour l'annonce ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 87, $this->source); })()), "titre", [], "any", false, false, false, 87), "html", null, true);
        yield "\" class=\"qr-image inline-block\" onerror=\"document.getElementById('qr-error').style.display='block';\">
                <div id=\"qr-error\" class=\"qr-fallback\" style=\"display: none;\">
                    Le QR code n'a pas pu être affiché. <a href=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qrCodeUrl"]) || array_key_exists("qrCodeUrl", $context) ? $context["qrCodeUrl"] : (function () { throw new RuntimeError('Variable "qrCodeUrl" does not exist.', 89, $this->source); })()), "html", null, true);
        yield "\" target=\"_blank\" class=\"underline\">Voir le QR code</a>
                </div>
            </div>
            
            <div class=\"qr-info\">
                <div class=\"qr-info-item\">
                    <div class=\"qr-info-label\">Titre:</div>
                    <div class=\"qr-info-value\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 96, $this->source); })()), "titre", [], "any", false, false, false, 96), "html", null, true);
        yield "</div>
                </div>
                
                <div class=\"qr-info-item\">
                    <div class=\"qr-info-label\">Trajet:</div>
                    <div class=\"qr-info-value\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 101, $this->source); })()), "trajet", [], "any", false, false, false, 101), "departurePoint", [], "any", false, false, false, 101), "html", null, true);
        yield " → ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 101, $this->source); })()), "trajet", [], "any", false, false, false, 101), "arrivalPoint", [], "any", false, false, false, 101), "html", null, true);
        yield "</div>
                </div>
                
                <div class=\"qr-info-item\">
                    <div class=\"qr-info-label\">Date de départ:</div>
                    <div class=\"qr-info-value\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 106, $this->source); })()), "departureDate", [], "any", false, false, false, 106), "d/m/Y à H:i"), "html", null, true);
        yield "</div>
                </div>
                
                <div class=\"qr-info-item\">
                    <div class=\"qr-info-label\">Prix:</div>
                    <div class=\"qr-info-value\">";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 111, $this->source); })()), "trajet", [], "any", false, false, false, 111), "price", [], "any", false, false, false, 111), "html", null, true);
        yield " DT</div>
                </div>
                
                <div class=\"qr-info-item\">
                    <div class=\"qr-info-label\">Places disponibles:</div>
                    <div class=\"qr-info-value\">";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 116, $this->source); })()), "availableSeats", [], "any", false, false, false, 116), "html", null, true);
        yield "</div>
                </div>
                
                <div class=\"qr-info-item\">
                    <div class=\"qr-info-label\">Statut:</div>
                    <div class=\"qr-info-value\">
                        ";
        // line 122
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 122, $this->source); })()), "status", [], "any", false, false, false, 122) == "ouvert")) {
            // line 123
            yield "                            <span class=\"px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">Ouvert</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 124
(isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 124, $this->source); })()), "status", [], "any", false, false, false, 124) == "plein")) {
            // line 125
            yield "                            <span class=\"px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full\">Plein</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 126
(isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 126, $this->source); })()), "status", [], "any", false, false, false, 126) == "termine")) {
            // line 127
            yield "                            <span class=\"px-2 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full\">Terminé</span>
                        ";
        } else {
            // line 129
            yield "                            <span class=\"px-2 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 129, $this->source); })()), "status", [], "any", false, false, false, 129), "html", null, true);
            yield "</span>
                        ";
        }
        // line 131
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Vérifier si l'image du QR code a bien été chargée
        document.addEventListener('DOMContentLoaded', function() {
            var qrImage = document.getElementById('qr-code-image');
            if (qrImage.complete && qrImage.naturalHeight === 0) {
                document.getElementById('qr-error').style.display = 'block';
            }
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
        return "qrcode/show.html.twig";
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
        return array (  290 => 131,  284 => 129,  280 => 127,  278 => 126,  275 => 125,  273 => 124,  270 => 123,  268 => 122,  259 => 116,  251 => 111,  243 => 106,  233 => 101,  225 => 96,  215 => 89,  208 => 87,  194 => 75,  181 => 74,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}QR Code - {{ annonce.titre }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .qr-container {
            background-color: white;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            padding: 2rem;
            max-width: 500px;
            margin: 0 auto;
        }
        .qr-image {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            padding: 0.5rem;
            background-color: white;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        }
        .qr-info {
            margin-top: 1.5rem;
            border-top: 1px solid #e5e7eb;
            padding-top: 1.5rem;
        }
        .qr-info-item {
            display: flex;
            margin-bottom: 0.75rem;
        }
        .qr-info-label {
            font-weight: 600;
            width: 140px;
            color: #4b5563;
        }
        .qr-info-value {
            color: #1f2937;
        }
        .back-button {
            display: inline-flex;
            align-items: center;
            margin-bottom: 1rem;
            color: #4f46e5;
            font-weight: 500;
            transition: color 0.2s;
        }
        .back-button:hover {
            color: #4338ca;
        }
        .back-button svg {
            margin-right: 0.5rem;
        }
        .qr-code-title {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #1f2937;
        }
        .qr-fallback {
            text-align: center;
            color: #ef4444;
            margin-top: 1rem;
            padding: 0.5rem;
            border: 1px dashed #ef4444;
            border-radius: 0.375rem;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container mx-auto py-8 px-4\">
        <a href=\"javascript:history.back()\" class=\"back-button\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
            </svg>
            Retour
        </a>
        
        <div class=\"qr-container\">
            <h1 class=\"qr-code-title text-2xl font-bold\">QR Code pour l'annonce</h1>
            
            <div class=\"text-center mb-4\">
                <img src=\"{{ qrCodeUrl }}\" id=\"qr-code-image\" alt=\"QR Code pour l'annonce {{ annonce.titre }}\" class=\"qr-image inline-block\" onerror=\"document.getElementById('qr-error').style.display='block';\">
                <div id=\"qr-error\" class=\"qr-fallback\" style=\"display: none;\">
                    Le QR code n'a pas pu être affiché. <a href=\"{{ qrCodeUrl }}\" target=\"_blank\" class=\"underline\">Voir le QR code</a>
                </div>
            </div>
            
            <div class=\"qr-info\">
                <div class=\"qr-info-item\">
                    <div class=\"qr-info-label\">Titre:</div>
                    <div class=\"qr-info-value\">{{ annonce.titre }}</div>
                </div>
                
                <div class=\"qr-info-item\">
                    <div class=\"qr-info-label\">Trajet:</div>
                    <div class=\"qr-info-value\">{{ annonce.trajet.departurePoint }} → {{ annonce.trajet.arrivalPoint }}</div>
                </div>
                
                <div class=\"qr-info-item\">
                    <div class=\"qr-info-label\">Date de départ:</div>
                    <div class=\"qr-info-value\">{{ annonce.departureDate|date(\"d/m/Y à H:i\") }}</div>
                </div>
                
                <div class=\"qr-info-item\">
                    <div class=\"qr-info-label\">Prix:</div>
                    <div class=\"qr-info-value\">{{ annonce.trajet.price }} DT</div>
                </div>
                
                <div class=\"qr-info-item\">
                    <div class=\"qr-info-label\">Places disponibles:</div>
                    <div class=\"qr-info-value\">{{ annonce.availableSeats }}</div>
                </div>
                
                <div class=\"qr-info-item\">
                    <div class=\"qr-info-label\">Statut:</div>
                    <div class=\"qr-info-value\">
                        {% if annonce.status == 'ouvert' %}
                            <span class=\"px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">Ouvert</span>
                        {% elseif annonce.status == 'plein' %}
                            <span class=\"px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full\">Plein</span>
                        {% elseif annonce.status == 'termine' %}
                            <span class=\"px-2 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full\">Terminé</span>
                        {% else %}
                            <span class=\"px-2 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full\">{{ annonce.status }}</span>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Vérifier si l'image du QR code a bien été chargée
        document.addEventListener('DOMContentLoaded', function() {
            var qrImage = document.getElementById('qr-code-image');
            if (qrImage.complete && qrImage.naturalHeight === 0) {
                document.getElementById('qr-error').style.display = 'block';
            }
        });
    </script>
{% endblock %} ", "qrcode/show.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\qrcode\\show.html.twig");
    }
}
