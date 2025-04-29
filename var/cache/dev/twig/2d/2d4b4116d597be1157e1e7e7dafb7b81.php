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

/* map/trajet.html.twig */
class __TwigTemplate_5f0faf0b5eb544cb3a9d88fa92dd1456 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "map/trajet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "map/trajet.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "map/trajet.html.twig", 1);
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

        yield "Carte du trajet ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["trajet"] ?? null), "titre", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 3, $this->source); })()), "departurePoint", [], "any", false, false, false, 3) . " → ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 3, $this->source); })()), "arrivalPoint", [], "any", false, false, false, 3)))) : (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 3, $this->source); })()), "departurePoint", [], "any", false, false, false, 3) . " → ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 3, $this->source); })()), "arrivalPoint", [], "any", false, false, false, 3)))), "html", null, true);
        
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
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.3/dist/leaflet.css\" integrity=\"sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=\" crossorigin=\"\"/>
    <style>
        #map {
            height: 500px;
            width: 100%;
            border-radius: 0.75rem;
        }
        .info-box {
            padding: 1rem;
            background-color: white;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            margin-bottom: 1rem;
        }
        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }
        .info-item svg {
            margin-right: 0.5rem;
            color: #4f46e5;
        }
        .info-label {
            font-weight: 600;
            margin-right: 0.25rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 37
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

        // line 38
        yield "    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"mb-6\">
            <h1 class=\"text-3xl font-bold text-gray-900 mb-2\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["trajet"] ?? null), "titre", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 40, $this->source); })()), "titre", [], "any", false, false, false, 40), ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 40, $this->source); })()), "departurePoint", [], "any", false, false, false, 40) . " → ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 40, $this->source); })()), "arrivalPoint", [], "any", false, false, false, 40)))) : (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 40, $this->source); })()), "departurePoint", [], "any", false, false, false, 40) . " → ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 40, $this->source); })()), "arrivalPoint", [], "any", false, false, false, 40)))), "html", null, true);
        yield "</h1>
            <p class=\"text-gray-600\">Carte du trajet avec itinéraire</p>
            
            <div class=\"mt-4\">
                <a href=\"javascript:history.back()\" class=\"inline-flex items-center text-primary hover:text-primary-dark\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour à la liste
                </a>
            </div>
        </div>
        
        <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
            <div class=\"lg:col-span-2\">
                <div id=\"map\"></div>
            </div>
            
            <div>
                <div class=\"info-box\">
                    <h2 class=\"text-xl font-semibold text-gray-800 mb-4\">Informations du trajet</h2>
                    
                    <div class=\"info-item\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                        </svg>
                        <span class=\"info-label\">Départ:</span> 
                        <span class=\"text-gray-700\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 68, $this->source); })()), "departurePoint", [], "any", false, false, false, 68), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"info-item\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                        </svg>
                        <span class=\"info-label\">Arrivée:</span>
                        <span class=\"text-gray-700\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 77, $this->source); })()), "arrivalPoint", [], "any", false, false, false, 77), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"info-item\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        <span class=\"info-label\">Durée:</span>
                        <span class=\"text-gray-700\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mapData"]) || array_key_exists("mapData", $context) ? $context["mapData"] : (function () { throw new RuntimeError('Variable "mapData" does not exist.', 85, $this->source); })()), "duration", [], "any", false, false, false, 85), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"info-item\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 7h8m0 0v8m0-8l-8 8-4-4-6 6\" />
                        </svg>
                        <span class=\"info-label\">Distance:</span>
                        <span class=\"text-gray-700\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mapData"]) || array_key_exists("mapData", $context) ? $context["mapData"] : (function () { throw new RuntimeError('Variable "mapData" does not exist.', 93, $this->source); })()), "distance", [], "any", false, false, false, 93), "html", null, true);
        yield " km</span>
                    </div>
                    
                    <div class=\"info-item\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        <span class=\"info-label\">Prix:</span>
                        <span class=\"text-gray-700 font-medium\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 101, $this->source); })()), "price", [], "any", false, false, false, 101), "html", null, true);
        yield " DT</span>
                    </div>
                </div>
                
                <div class=\"info-box\">
                    <h2 class=\"text-xl font-semibold text-gray-800 mb-4\">Légende</h2>
                    
                    <div class=\"info-item\">
                        <div class=\"w-4 h-4 rounded-full bg-green-500 mr-2\"></div>
                        <span>Point de départ</span>
                    </div>
                    
                    <div class=\"info-item\">
                        <div class=\"w-4 h-4 rounded-full bg-red-500 mr-2\"></div>
                        <span>Point d'arrivée</span>
                    </div>
                    
                    <div class=\"info-item\">
                        <div class=\"w-4 h-1 bg-blue-500 mr-2\"></div>
                        <span>Itinéraire</span>
                    </div>
                </div>
                
                <div class=\"text-sm text-gray-500 mt-4\">
                    Données cartographiques © <a href=\"https://www.openstreetmap.org/copyright\" target=\"_blank\" class=\"text-primary hover:underline\">OpenStreetMap</a> contributors
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 132
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

        // line 133
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://unpkg.com/leaflet@1.9.3/dist/leaflet.js\" integrity=\"sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=\" crossorigin=\"\"></script>
    <script src=\"https://unpkg.com/@mapbox/polyline@1.1.1/src/polyline.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Données du trajet
            const mapData = ";
        // line 139
        yield json_encode((isset($context["mapData"]) || array_key_exists("mapData", $context) ? $context["mapData"] : (function () { throw new RuntimeError('Variable "mapData" does not exist.', 139, $this->source); })()));
        yield ";
            
            // Création de la carte
            const map = L.map('map');
            
            // Ajouter la couche de tuiles OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
            }).addTo(map);
            
            // Ajouter les marqueurs pour le point de départ et d'arrivée
            const departureMarker = L.marker([mapData.departurePoint.lat, mapData.departurePoint.lon], {
                icon: L.divIcon({
                    className: 'custom-div-icon',
                    html: `<div style=\"background-color: #10b981; width: 12px; height: 12px; border-radius: 50%; border: 2px solid white;\"></div>`,
                    iconSize: [12, 12],
                    iconAnchor: [6, 6]
                })
            }).addTo(map);
            
            const arrivalMarker = L.marker([mapData.arrivalPoint.lat, mapData.arrivalPoint.lon], {
                icon: L.divIcon({
                    className: 'custom-div-icon',
                    html: `<div style=\"background-color: #ef4444; width: 12px; height: 12px; border-radius: 50%; border: 2px solid white;\"></div>`,
                    iconSize: [12, 12],
                    iconAnchor: [6, 6]
                })
            }).addTo(map);
            
            // Décoder le polyline et créer un itinéraire
            const decodedRoute = polyline.decode(mapData.route);
            const routeLatLngs = decodedRoute.map(coords => [coords[0], coords[1]]);
            const route = L.polyline(routeLatLngs, {
                color: '#3b82f6',
                weight: 5,
                opacity: 0.7
            }).addTo(map);
            
            // Ajuster la vue de la carte pour montrer l'itinéraire complet
            map.fitBounds(route.getBounds(), {
                padding: [30, 30]
            });
            
            // Ajouter popup aux marqueurs
            departureMarker.bindPopup(`<b>Départ:</b> \${mapData.departurePoint.display_name}`);
            arrivalMarker.bindPopup(`<b>Arrivée:</b> \${mapData.arrivalPoint.display_name}`);
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
        return "map/trajet.html.twig";
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
        return array (  302 => 139,  292 => 133,  279 => 132,  238 => 101,  227 => 93,  216 => 85,  205 => 77,  193 => 68,  162 => 40,  158 => 38,  145 => 37,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Carte du trajet {{ trajet.titre|default(trajet.departurePoint ~ ' → ' ~ trajet.arrivalPoint) }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.3/dist/leaflet.css\" integrity=\"sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=\" crossorigin=\"\"/>
    <style>
        #map {
            height: 500px;
            width: 100%;
            border-radius: 0.75rem;
        }
        .info-box {
            padding: 1rem;
            background-color: white;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            margin-bottom: 1rem;
        }
        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }
        .info-item svg {
            margin-right: 0.5rem;
            color: #4f46e5;
        }
        .info-label {
            font-weight: 600;
            margin-right: 0.25rem;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"mb-6\">
            <h1 class=\"text-3xl font-bold text-gray-900 mb-2\">{{ trajet.titre|default(trajet.departurePoint ~ ' → ' ~ trajet.arrivalPoint) }}</h1>
            <p class=\"text-gray-600\">Carte du trajet avec itinéraire</p>
            
            <div class=\"mt-4\">
                <a href=\"javascript:history.back()\" class=\"inline-flex items-center text-primary hover:text-primary-dark\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour à la liste
                </a>
            </div>
        </div>
        
        <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
            <div class=\"lg:col-span-2\">
                <div id=\"map\"></div>
            </div>
            
            <div>
                <div class=\"info-box\">
                    <h2 class=\"text-xl font-semibold text-gray-800 mb-4\">Informations du trajet</h2>
                    
                    <div class=\"info-item\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                        </svg>
                        <span class=\"info-label\">Départ:</span> 
                        <span class=\"text-gray-700\">{{ trajet.departurePoint }}</span>
                    </div>
                    
                    <div class=\"info-item\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                        </svg>
                        <span class=\"info-label\">Arrivée:</span>
                        <span class=\"text-gray-700\">{{ trajet.arrivalPoint }}</span>
                    </div>
                    
                    <div class=\"info-item\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        <span class=\"info-label\">Durée:</span>
                        <span class=\"text-gray-700\">{{ mapData.duration }}</span>
                    </div>
                    
                    <div class=\"info-item\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 7h8m0 0v8m0-8l-8 8-4-4-6 6\" />
                        </svg>
                        <span class=\"info-label\">Distance:</span>
                        <span class=\"text-gray-700\">{{ mapData.distance }} km</span>
                    </div>
                    
                    <div class=\"info-item\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        <span class=\"info-label\">Prix:</span>
                        <span class=\"text-gray-700 font-medium\">{{ trajet.price }} DT</span>
                    </div>
                </div>
                
                <div class=\"info-box\">
                    <h2 class=\"text-xl font-semibold text-gray-800 mb-4\">Légende</h2>
                    
                    <div class=\"info-item\">
                        <div class=\"w-4 h-4 rounded-full bg-green-500 mr-2\"></div>
                        <span>Point de départ</span>
                    </div>
                    
                    <div class=\"info-item\">
                        <div class=\"w-4 h-4 rounded-full bg-red-500 mr-2\"></div>
                        <span>Point d'arrivée</span>
                    </div>
                    
                    <div class=\"info-item\">
                        <div class=\"w-4 h-1 bg-blue-500 mr-2\"></div>
                        <span>Itinéraire</span>
                    </div>
                </div>
                
                <div class=\"text-sm text-gray-500 mt-4\">
                    Données cartographiques © <a href=\"https://www.openstreetmap.org/copyright\" target=\"_blank\" class=\"text-primary hover:underline\">OpenStreetMap</a> contributors
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://unpkg.com/leaflet@1.9.3/dist/leaflet.js\" integrity=\"sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=\" crossorigin=\"\"></script>
    <script src=\"https://unpkg.com/@mapbox/polyline@1.1.1/src/polyline.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Données du trajet
            const mapData = {{ mapData|json_encode|raw }};
            
            // Création de la carte
            const map = L.map('map');
            
            // Ajouter la couche de tuiles OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
            }).addTo(map);
            
            // Ajouter les marqueurs pour le point de départ et d'arrivée
            const departureMarker = L.marker([mapData.departurePoint.lat, mapData.departurePoint.lon], {
                icon: L.divIcon({
                    className: 'custom-div-icon',
                    html: `<div style=\"background-color: #10b981; width: 12px; height: 12px; border-radius: 50%; border: 2px solid white;\"></div>`,
                    iconSize: [12, 12],
                    iconAnchor: [6, 6]
                })
            }).addTo(map);
            
            const arrivalMarker = L.marker([mapData.arrivalPoint.lat, mapData.arrivalPoint.lon], {
                icon: L.divIcon({
                    className: 'custom-div-icon',
                    html: `<div style=\"background-color: #ef4444; width: 12px; height: 12px; border-radius: 50%; border: 2px solid white;\"></div>`,
                    iconSize: [12, 12],
                    iconAnchor: [6, 6]
                })
            }).addTo(map);
            
            // Décoder le polyline et créer un itinéraire
            const decodedRoute = polyline.decode(mapData.route);
            const routeLatLngs = decodedRoute.map(coords => [coords[0], coords[1]]);
            const route = L.polyline(routeLatLngs, {
                color: '#3b82f6',
                weight: 5,
                opacity: 0.7
            }).addTo(map);
            
            // Ajuster la vue de la carte pour montrer l'itinéraire complet
            map.fitBounds(route.getBounds(), {
                padding: [30, 30]
            });
            
            // Ajouter popup aux marqueurs
            departureMarker.bindPopup(`<b>Départ:</b> \${mapData.departurePoint.display_name}`);
            arrivalMarker.bindPopup(`<b>Arrivée:</b> \${mapData.arrivalPoint.display_name}`);
        });
    </script>
{% endblock %} ", "map/trajet.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\map\\trajet.html.twig");
    }
}
