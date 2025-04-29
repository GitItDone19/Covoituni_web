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

/* passager/event_annonce_reserver.html.twig */
class __TwigTemplate_e172bb8433b22c55b87151183dab6d86 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/event_annonce_reserver.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/event_annonce_reserver.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "passager/event_annonce_reserver.html.twig", 1);
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

        yield "Réserver un covoiturage - ";
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
            <div class=\"flex justify-between items-start mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Réserver un covoiturage</h1>
                    <p class=\"text-gray-600\">Complétez votre réservation pour ce trajet.</p>
                </div>
                <a href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_event_annonces", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 13, $this->source); })()), "event", [], "any", false, false, false, 13), "idEvent", [], "any", false, false, false, 13)]), "html", null, true);
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour aux covoiturages
                </a>
            </div>

            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", ["success"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            yield "                <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "            
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", ["error"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            yield "                <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
                <div class=\"bg-white rounded-xl shadow-md overflow-hidden\">
                    <div class=\"p-6\">
                        <h2 class=\"text-xl font-semibold text-gray-800 mb-4\">Détails du covoiturage</h2>
                        
                        <div class=\"space-y-4\">
                            <div>
                                <h3 class=\"font-bold text-gray-900\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 40, $this->source); })()), "titre", [], "any", false, false, false, 40), "html", null, true);
        yield "</h3>
                                <p class=\"text-gray-600\">Pour l'événement : ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 41, $this->source); })()), "event", [], "any", false, false, false, 41), "nom", [], "any", false, false, false, 41), "html", null, true);
        yield "</p>
                            </div>
                            
                            <div class=\"space-y-2\">
                                <div class=\"flex items-start\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                    </svg>
                                    <div>
                                        <span class=\"text-gray-700 font-medium\">Trajet:</span>
                                        <p class=\"text-gray-600\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 52, $this->source); })()), "departurePoint", [], "any", false, false, false, 52), "html", null, true);
        yield " → ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 52, $this->source); })()), "arrivalPoint", [], "any", false, false, false, 52), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                                
                                <div class=\"flex items-start\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                    </svg>
                                    <div>
                                        <span class=\"text-gray-700 font-medium\">Date et heure de départ:</span>
                                        <p class=\"text-gray-600\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 62, $this->source); })()), "departureDate", [], "any", false, false, false, 62), "d/m/Y à H:i"), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                                
                                <div class=\"flex items-start\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                                    </svg>
                                    <div>
                                        <span class=\"text-gray-700 font-medium\">Places disponibles:</span>
                                        <p class=\"text-gray-600\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 72, $this->source); })()), "availableSeats", [], "any", false, false, false, 72), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                                
                                <div class=\"flex items-start\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                    </svg>
                                    <div>
                                        <span class=\"text-gray-700 font-medium\">Prix:</span>
                                        <p class=\"text-gray-600\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 82, $this->source); })()), "prix", [], "any", false, false, false, 82), "html", null, true);
        yield " DT</p>
                                    </div>
                                </div>
                            </div>
                            
                            ";
        // line 87
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 87, $this->source); })()), "description", [], "any", false, false, false, 87)) {
            // line 88
            yield "                                <div>
                                    <span class=\"text-gray-700 font-medium\">Description:</span>
                                    <p class=\"text-gray-600 mt-1\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 90, $this->source); })()), "description", [], "any", false, false, false, 90), "html", null, true);
            yield "</p>
                                </div>
                            ";
        }
        // line 93
        yield "                        </div>
                    </div>
                </div>
                
                <div class=\"bg-white rounded-xl shadow-md overflow-hidden\">
                    <div class=\"p-6\">
                        <h2 class=\"text-xl font-semibold text-gray-800 mb-4\">Formulaire de réservation</h2>
                        
                        <form action=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_event_annonce_reserver", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
        yield "\" method=\"post\" class=\"space-y-6\">
                            <div>
                                <label for=\"comment\" class=\"block text-sm font-medium text-gray-700 mb-1\">Commentaire (facultatif)</label>
                                <textarea id=\"comment\" name=\"comment\" rows=\"4\"
                                        class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                                        placeholder=\"Ajoutez un commentaire pour le conducteur (ex: détails sur votre point de rencontre, besoin d'espace pour des bagages, etc.)\"></textarea>
                                <p class=\"mt-1 text-sm text-red-600\">Veuillez éviter les mots inappropriés ou offensants dans votre commentaire.</p>
                            </div>
                            
                            <div class=\"bg-yellow-50 p-4 rounded-xl\">
                                <h3 class=\"font-semibold text-yellow-800 mb-2\">À propos de cette réservation :</h3>
                                <ul class=\"list-disc list-inside text-sm text-yellow-700 space-y-1\">
                                    <li>Votre réservation sera en attente jusqu'à confirmation par le conducteur.</li>
                                    <li>Vous recevrez une notification une fois que le conducteur aura accepté ou refusé votre demande.</li>
                                    <li>Vous pouvez annuler votre réservation tant qu'elle n'est pas terminée.</li>
                                </ul>
                            </div>
                            
                            <div class=\"flex justify-end\">
                                <button type=\"submit\" 
                                        class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                                    </svg>
                                    Confirmer ma réservation
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        return "passager/event_annonce_reserver.html.twig";
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
        return array (  255 => 101,  245 => 93,  239 => 90,  235 => 88,  233 => 87,  225 => 82,  212 => 72,  199 => 62,  184 => 52,  170 => 41,  166 => 40,  156 => 32,  147 => 29,  144 => 28,  140 => 27,  137 => 26,  128 => 23,  125 => 22,  121 => 21,  110 => 13,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Réserver un covoiturage - {{ annonce.titre }}{% endblock %}

{% block content %}
    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"flex justify-between items-start mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Réserver un covoiturage</h1>
                    <p class=\"text-gray-600\">Complétez votre réservation pour ce trajet.</p>
                </div>
                <a href=\"{{ path('app_passager_event_annonces', {'id': annonce.event.idEvent}) }}\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour aux covoiturages
                </a>
            </div>

            {% for message in app.flashes('success') %}
                <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>{{ message }}</p>
                </div>
            {% endfor %}
            
            {% for message in app.flashes('error') %}
                <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>{{ message }}</p>
                </div>
            {% endfor %}

            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
                <div class=\"bg-white rounded-xl shadow-md overflow-hidden\">
                    <div class=\"p-6\">
                        <h2 class=\"text-xl font-semibold text-gray-800 mb-4\">Détails du covoiturage</h2>
                        
                        <div class=\"space-y-4\">
                            <div>
                                <h3 class=\"font-bold text-gray-900\">{{ annonce.titre }}</h3>
                                <p class=\"text-gray-600\">Pour l'événement : {{ annonce.event.nom }}</p>
                            </div>
                            
                            <div class=\"space-y-2\">
                                <div class=\"flex items-start\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                    </svg>
                                    <div>
                                        <span class=\"text-gray-700 font-medium\">Trajet:</span>
                                        <p class=\"text-gray-600\">{{ annonce.departurePoint }} → {{ annonce.arrivalPoint }}</p>
                                    </div>
                                </div>
                                
                                <div class=\"flex items-start\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                    </svg>
                                    <div>
                                        <span class=\"text-gray-700 font-medium\">Date et heure de départ:</span>
                                        <p class=\"text-gray-600\">{{ annonce.departureDate|date('d/m/Y à H:i') }}</p>
                                    </div>
                                </div>
                                
                                <div class=\"flex items-start\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                                    </svg>
                                    <div>
                                        <span class=\"text-gray-700 font-medium\">Places disponibles:</span>
                                        <p class=\"text-gray-600\">{{ annonce.availableSeats }}</p>
                                    </div>
                                </div>
                                
                                <div class=\"flex items-start\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                    </svg>
                                    <div>
                                        <span class=\"text-gray-700 font-medium\">Prix:</span>
                                        <p class=\"text-gray-600\">{{ annonce.prix }} DT</p>
                                    </div>
                                </div>
                            </div>
                            
                            {% if annonce.description %}
                                <div>
                                    <span class=\"text-gray-700 font-medium\">Description:</span>
                                    <p class=\"text-gray-600 mt-1\">{{ annonce.description }}</p>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
                
                <div class=\"bg-white rounded-xl shadow-md overflow-hidden\">
                    <div class=\"p-6\">
                        <h2 class=\"text-xl font-semibold text-gray-800 mb-4\">Formulaire de réservation</h2>
                        
                        <form action=\"{{ path('app_passager_event_annonce_reserver', {'id': annonce.id}) }}\" method=\"post\" class=\"space-y-6\">
                            <div>
                                <label for=\"comment\" class=\"block text-sm font-medium text-gray-700 mb-1\">Commentaire (facultatif)</label>
                                <textarea id=\"comment\" name=\"comment\" rows=\"4\"
                                        class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                                        placeholder=\"Ajoutez un commentaire pour le conducteur (ex: détails sur votre point de rencontre, besoin d'espace pour des bagages, etc.)\"></textarea>
                                <p class=\"mt-1 text-sm text-red-600\">Veuillez éviter les mots inappropriés ou offensants dans votre commentaire.</p>
                            </div>
                            
                            <div class=\"bg-yellow-50 p-4 rounded-xl\">
                                <h3 class=\"font-semibold text-yellow-800 mb-2\">À propos de cette réservation :</h3>
                                <ul class=\"list-disc list-inside text-sm text-yellow-700 space-y-1\">
                                    <li>Votre réservation sera en attente jusqu'à confirmation par le conducteur.</li>
                                    <li>Vous recevrez une notification une fois que le conducteur aura accepté ou refusé votre demande.</li>
                                    <li>Vous pouvez annuler votre réservation tant qu'elle n'est pas terminée.</li>
                                </ul>
                            </div>
                            
                            <div class=\"flex justify-end\">
                                <button type=\"submit\" 
                                        class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                                    </svg>
                                    Confirmer ma réservation
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %} ", "passager/event_annonce_reserver.html.twig", "D:\\Covoituni_web-master\\templates\\passager\\event_annonce_reserver.html.twig");
    }
}
