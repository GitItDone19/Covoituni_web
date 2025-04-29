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
class __TwigTemplate_7e9401488f390233b586f03e4aac9162 extends Template
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
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layouts/user_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "qrcode/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "qrcode/show.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "qrcode/show.html.twig", 1);
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

        yield "Code QR - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"mb-6\">
                <h1 class=\"text-3xl font-bold text-gray-800 mb-2\">Code QR pour l'annonce</h1>
                <p class=\"text-lg text-gray-600\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 10, $this->source); })()), "titre", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
                
                <div class=\"mt-4\">
                    <a href=\"javascript:history.back()\" class=\"inline-flex items-center text-primary hover:text-primary-dark\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                        </svg>
                        Retour
                    </a>
                </div>
            </div>
            
            <div class=\"flex flex-col md:flex-row items-center justify-center gap-8\">
                <div class=\"bg-white rounded-xl p-4 shadow-md\">
                    <img src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qrcode_data_uri"]) || array_key_exists("qrcode_data_uri", $context) ? $context["qrcode_data_uri"] : (function () { throw new RuntimeError('Variable "qrcode_data_uri" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "\" alt=\"QR Code pour l'annonce\" class=\"w-64 h-64\">
                </div>
                
                <div class=\"max-w-md\">
                    <h2 class=\"text-xl font-semibold text-gray-800 mb-4\">Scannez ce code QR pour afficher les détails de l'annonce</h2>
                    
                    <div class=\"space-y-4\">
                        <div class=\"bg-primary/5 rounded-lg p-4\">
                            <h3 class=\"font-medium text-primary mb-2\">Comment scanner ce code QR ?</h3>
                            <ol class=\"list-decimal list-inside text-gray-700 space-y-2\">
                                <li>Ouvrez l'application appareil photo de votre smartphone</li>
                                <li>Pointez votre caméra vers le code QR</li>
                                <li>Appuyez sur la notification qui apparaît</li>
                                <li>Les détails de l'annonce s'afficheront instantanément</li>
                            </ol>
                        </div>
                        
                        <div class=\"bg-blue-50 rounded-lg p-4\">
                            <h3 class=\"font-medium text-blue-700 mb-2\">Informations de l'annonce</h3>
                            <div class=\"space-y-2 text-gray-700\">
                                <p><span class=\"font-medium\">Départ :</span> ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 44, $this->source); })()), "trajet", [], "any", false, false, false, 44), "departurePoint", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
                                <p><span class=\"font-medium\">Arrivée :</span> ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 45, $this->source); })()), "trajet", [], "any", false, false, false, 45), "arrivalPoint", [], "any", false, false, false, 45), "html", null, true);
        yield "</p>
                                <p><span class=\"font-medium\">Date :</span> ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 46, $this->source); })()), "departureDate", [], "any", false, false, false, 46), "d/m/Y à H:i"), "html", null, true);
        yield "</p>
                                <p><span class=\"font-medium\">Prix :</span> ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 47, $this->source); })()), "trajet", [], "any", false, false, false, 47), "price", [], "any", false, false, false, 47), "html", null, true);
        yield " DT</p>
                                <p><span class=\"font-medium\">Places disponibles :</span> ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 48, $this->source); })()), "availableSeats", [], "any", false, false, false, 48), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        
                        <div class=\"text-sm text-gray-500\">
                            <p>Ce code QR est lié à l'annonce #";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53), "html", null, true);
        yield "</p>
                            <p>URL d'API : <span class=\"text-xs font-mono bg-gray-100 p-1 rounded\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scan_url"]) || array_key_exists("scan_url", $context) ? $context["scan_url"] : (function () { throw new RuntimeError('Variable "scan_url" does not exist.', 54, $this->source); })()), "html", null, true);
        yield "</span></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"mt-8 flex justify-center\">
                <a href=\"#\" id=\"downloadBtn\" class=\"inline-flex items-center px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4\" />
                    </svg>
                    Télécharger le code QR
                </a>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 72
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

        // line 73
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const downloadBtn = document.getElementById('downloadBtn');
            const qrCodeImg = '";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qrcode_data_uri"]) || array_key_exists("qrcode_data_uri", $context) ? $context["qrcode_data_uri"] : (function () { throw new RuntimeError('Variable "qrcode_data_uri" does not exist.', 77, $this->source); })()), "html", null, true);
        yield "';
            
            downloadBtn.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Créer un élément a temporaire pour le téléchargement
                const link = document.createElement('a');
                link.href = qrCodeImg;
                link.download = 'qrcode-annonce-";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85), "html", null, true);
        yield ".png';
                
                // Ajouter à la page, cliquer, puis supprimer
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
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
        return array (  236 => 85,  225 => 77,  217 => 73,  204 => 72,  176 => 54,  172 => 53,  164 => 48,  160 => 47,  156 => 46,  152 => 45,  148 => 44,  125 => 24,  108 => 10,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Code QR - {{ annonce.titre }}{% endblock %}

{% block content %}
    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"mb-6\">
                <h1 class=\"text-3xl font-bold text-gray-800 mb-2\">Code QR pour l'annonce</h1>
                <p class=\"text-lg text-gray-600\">{{ annonce.titre }}</p>
                
                <div class=\"mt-4\">
                    <a href=\"javascript:history.back()\" class=\"inline-flex items-center text-primary hover:text-primary-dark\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                        </svg>
                        Retour
                    </a>
                </div>
            </div>
            
            <div class=\"flex flex-col md:flex-row items-center justify-center gap-8\">
                <div class=\"bg-white rounded-xl p-4 shadow-md\">
                    <img src=\"{{ qrcode_data_uri }}\" alt=\"QR Code pour l'annonce\" class=\"w-64 h-64\">
                </div>
                
                <div class=\"max-w-md\">
                    <h2 class=\"text-xl font-semibold text-gray-800 mb-4\">Scannez ce code QR pour afficher les détails de l'annonce</h2>
                    
                    <div class=\"space-y-4\">
                        <div class=\"bg-primary/5 rounded-lg p-4\">
                            <h3 class=\"font-medium text-primary mb-2\">Comment scanner ce code QR ?</h3>
                            <ol class=\"list-decimal list-inside text-gray-700 space-y-2\">
                                <li>Ouvrez l'application appareil photo de votre smartphone</li>
                                <li>Pointez votre caméra vers le code QR</li>
                                <li>Appuyez sur la notification qui apparaît</li>
                                <li>Les détails de l'annonce s'afficheront instantanément</li>
                            </ol>
                        </div>
                        
                        <div class=\"bg-blue-50 rounded-lg p-4\">
                            <h3 class=\"font-medium text-blue-700 mb-2\">Informations de l'annonce</h3>
                            <div class=\"space-y-2 text-gray-700\">
                                <p><span class=\"font-medium\">Départ :</span> {{ annonce.trajet.departurePoint }}</p>
                                <p><span class=\"font-medium\">Arrivée :</span> {{ annonce.trajet.arrivalPoint }}</p>
                                <p><span class=\"font-medium\">Date :</span> {{ annonce.departureDate|date(\"d/m/Y à H:i\") }}</p>
                                <p><span class=\"font-medium\">Prix :</span> {{ annonce.trajet.price }} DT</p>
                                <p><span class=\"font-medium\">Places disponibles :</span> {{ annonce.availableSeats }}</p>
                            </div>
                        </div>
                        
                        <div class=\"text-sm text-gray-500\">
                            <p>Ce code QR est lié à l'annonce #{{ annonce.id }}</p>
                            <p>URL d'API : <span class=\"text-xs font-mono bg-gray-100 p-1 rounded\">{{ scan_url }}</span></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"mt-8 flex justify-center\">
                <a href=\"#\" id=\"downloadBtn\" class=\"inline-flex items-center px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4\" />
                    </svg>
                    Télécharger le code QR
                </a>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const downloadBtn = document.getElementById('downloadBtn');
            const qrCodeImg = '{{ qrcode_data_uri }}';
            
            downloadBtn.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Créer un élément a temporaire pour le téléchargement
                const link = document.createElement('a');
                link.href = qrCodeImg;
                link.download = 'qrcode-annonce-{{ annonce.id }}.png';
                
                // Ajouter à la page, cliquer, puis supprimer
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
        });
    </script>
{% endblock %} ", "qrcode/show.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\qrcode\\show.html.twig");
    }
}
