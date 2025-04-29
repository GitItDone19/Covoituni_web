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

/* passager/mes_reservations.html.twig */
class __TwigTemplate_9f4d2035a7f2838f2c981c5fc2a6ab42 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/mes_reservations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/mes_reservations.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "passager/mes_reservations.html.twig", 1);
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

        yield "Mes Réservations";
        
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
            <div class=\"flex justify-between items-center mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Mes réservations</h1>
                    <p class=\"text-gray-600\">Consultez et gérez vos réservations de covoiturage en cours.</p>
                </div>
                <div class=\"flex space-x-4\">
                    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_liste_annonce");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-primary-ultra-light text-primary rounded-xl border border-primary/20 hover:bg-primary-ultra-light/70 transition duration-300\">
                        <i class=\"fas fa-search mr-2\"></i>
                        Chercher une annonce
                    </a>
                    <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_historique_reservations");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                        <i class=\"fas fa-history mr-2\"></i>
                        Historique
                    </a>
                </div>
            </div>

            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", ["success"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            yield "                <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 27
            yield $context["message"];
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "            
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", ["error"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 32
            yield "                <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "
            ";
        // line 37
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 37, $this->source); })()))) {
            // line 38
            yield "                <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucune réservation en cours</h3>
                    <p class=\"mt-2 text-gray-600\">Vous n'avez pas encore de réservations de trajet en cours.</p>
                    <a href=\"";
            // line 44
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_liste_annonce");
            yield "\" class=\"mt-4 inline-flex items-center px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300\">
                        <i class=\"fas fa-search mr-2\"></i>
                        Trouver une annonce
                    </a>
                </div>
            ";
        } else {
            // line 50
            yield "                <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
                    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 51, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 52
                yield "                        <div class=\"bg-white rounded-xl shadow-md overflow-hidden\">
                            <div class=\"p-6\">
                                <div class=\"flex justify-between items-start\">
                                    <div>
                                        <h3 class=\"font-bold text-xl text-gray-900\">
                                            ";
                // line 57
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 57) == "EVENT") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 57))) {
                    // line 58
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 58), "departurePoint", [], "any", false, false, false, 58), "html", null, true);
                    yield " → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 58), "arrivalPoint", [], "any", false, false, false, 58), "html", null, true);
                    yield "
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 59
$context["reservation"], "annonce", [], "any", false, false, false, 59) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 59), "trajet", [], "any", false, false, false, 59))) {
                    // line 60
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 60), "trajet", [], "any", false, false, false, 60), "getDeparturePoint", [], "method", false, false, false, 60), "html", null, true);
                    yield " → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 60), "trajet", [], "any", false, false, false, 60), "getArrivalPoint", [], "method", false, false, false, 60), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 62
                    yield "                                                Trajet inconnu
                                            ";
                }
                // line 64
                yield "                                        </h3>
                                        <p class=\"text-gray-600\">
                                            ";
                // line 66
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 66) == "EVENT") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 66))) {
                    // line 67
                    yield "                                                Départ le ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 67), "departureDate", [], "any", false, false, false, 67), "d/m/Y à H:i"), "html", null, true);
                    yield "
                                            ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 68
$context["reservation"], "annonce", [], "any", false, false, false, 68)) {
                    // line 69
                    yield "                                                Départ le ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 69), "departureDate", [], "any", false, false, false, 69), "d/m/Y à H:i"), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 71
                    yield "                                                Date inconnue
                                            ";
                }
                // line 73
                yield "                                        </p>
                                    </div>
                                    ";
                // line 75
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 75) == "PENDING")) {
                    // line 76
                    yield "                                        <span class=\"px-3 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full\">
                                            En attente
                                        </span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 79
$context["reservation"], "status", [], "any", false, false, false, 79) == "ACCEPTED")) {
                    // line 80
                    yield "                                        <span class=\"px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">
                                            Acceptée
                                        </span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 83
$context["reservation"], "status", [], "any", false, false, false, 83) == "REJECTED")) {
                    // line 84
                    yield "                                        <span class=\"px-3 py-1 bg-red-100 text-red-800 text-xs font-semibold rounded-full\">
                                            Refusée
                                        </span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 87
$context["reservation"], "status", [], "any", false, false, false, 87) == "CANCELLED_BY_PASSENGER")) {
                    // line 88
                    yield "                                        <span class=\"px-3 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full\">
                                            Annulée
                                        </span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 91
$context["reservation"], "status", [], "any", false, false, false, 91) == "COMPLETED")) {
                    // line 92
                    yield "                                        <span class=\"px-3 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full\">
                                            Terminée
                                        </span>
                                    ";
                } else {
                    // line 96
                    yield "                                        <span class=\"px-3 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full\">
                                            ";
                    // line 97
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 97), "html", null, true);
                    yield "
                                        </span>
                                    ";
                }
                // line 100
                yield "                                </div>
                                
                                <div class=\"mt-4 space-y-2\">
                                    ";
                // line 103
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 103) == "EVENT") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 103))) {
                    // line 104
                    yield "                                        <div class=\"flex items-start\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                            </svg>
                                            <span class=\"text-gray-700\">Pour l'événement: ";
                    // line 108
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 108), "event", [], "any", false, false, false, 108), "nom", [], "any", false, false, false, 108), "html", null, true);
                    yield "</span>
                                        </div>
                                    ";
                }
                // line 111
                yield "                                    
                                    <div class=\"flex items-start\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                                        </svg>
                                        <div>
                                            <span class=\"text-gray-700\">
                                                ";
                // line 118
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "driver", [], "any", false, false, false, 118)) {
                    // line 119
                    yield "                                                    Conducteur: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "driver", [], "any", false, false, false, 119), "prenom", [], "any", false, false, false, 119), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "driver", [], "any", false, false, false, 119), "nom", [], "any", false, false, false, 119), "html", null, true);
                    yield "
                                                ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 120
$context["reservation"], "type", [], "any", false, false, false, 120) == "EVENT") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 120))) {
                    // line 121
                    yield "                                                    Conducteur #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 121), "driverId", [], "any", false, false, false, 121), "html", null, true);
                    yield "
                                                ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 122
$context["reservation"], "annonce", [], "any", false, false, false, 122)) {
                    // line 123
                    yield "                                                    Conducteur #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 123), "driverId", [], "any", false, false, false, 123), "html", null, true);
                    yield "
                                                ";
                }
                // line 125
                yield "                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class=\"flex items-start\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                        </svg>
                                        <div class=\"flex items-center space-x-2 text-sm font-medium text-gray-900\">
                                            <div class=\"flex items-center\">
                                                ";
                // line 135
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 135) == "EVENT") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 135))) {
                    // line 136
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 136), "prix", [], "any", false, false, false, 136), 2, ",", " "), "html", null, true);
                    yield " DT
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 137
$context["reservation"], "annonce", [], "any", false, false, false, 137) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 137), "trajet", [], "any", false, false, false, 137))) {
                    // line 138
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 138), "trajet", [], "any", false, false, false, 138), "price", [], "any", false, false, false, 138), "html", null, true);
                    yield " DT
                                                ";
                } else {
                    // line 140
                    yield "                                                    - DT
                                                ";
                }
                // line 142
                yield "                                            </div>
                                        </div>
                                    </div>

                                    ";
                // line 146
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "comment", [], "any", false, false, false, 146)) {
                    // line 147
                    yield "                                        <div class=\"flex items-start\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z\" />
                                            </svg>
                                            <div class=\"text-gray-700 text-sm\">
                                                <span class=\"font-semibold\">Votre commentaire:</span> ";
                    // line 152
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "comment", [], "any", false, false, false, 152), "html", null, true);
                    yield "
                                            </div>
                                        </div>
                                    ";
                }
                // line 156
                yield "                                </div>
                                
                                <div class=\"mt-4 flex justify-between items-center\">
                                    <div class=\"flex space-x-2\">
                                        ";
                // line 160
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 160) == "PENDING")) {
                    // line 161
                    yield "                                            <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_annuler_reservation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 161)]), "html", null, true);
                    yield "\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler cette réservation?');\">
                                                <button type=\"submit\" class=\"px-3 py-1.5 bg-red-100 text-red-800 text-xs font-medium rounded-lg hover:bg-red-200 transition-colors duration-300\">
                                                    <i class=\"fas fa-times-circle mr-1\"></i> Annuler
                                                </button>
                                            </form>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 166
$context["reservation"], "status", [], "any", false, false, false, 166) == "ACCEPTED")) {
                    // line 167
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chat_conversation", ["reservationId" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 167), "type" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 167)]), "html", null, true);
                    yield "\" class=\"px-3 py-1.5 bg-primary text-white text-xs font-medium rounded-lg hover:bg-primary-dark transition-colors duration-300\">
                                                <i class=\"fas fa-comments mr-1\"></i> Discuter avec le conducteur
                                            </a>
                                        ";
                }
                // line 171
                yield "                                    </div>
                                    
                                    <a href=\"";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chat_conversation", ["reservationId" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 173), "type" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 173)]), "html", null, true);
                yield "\" class=\"px-3 py-1.5 bg-gray-100 text-gray-800 text-xs font-medium rounded-lg hover:bg-gray-200 transition-colors duration-300\">
                                        <i class=\"fas fa-eye mr-1\"></i> Détails
                                    </a>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            yield "                </div>
            ";
        }
        // line 182
        yield "        </div>
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
        return "passager/mes_reservations.html.twig";
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
        return array (  446 => 182,  442 => 180,  429 => 173,  425 => 171,  417 => 167,  415 => 166,  406 => 161,  404 => 160,  398 => 156,  391 => 152,  384 => 147,  382 => 146,  376 => 142,  372 => 140,  366 => 138,  364 => 137,  359 => 136,  357 => 135,  345 => 125,  339 => 123,  337 => 122,  332 => 121,  330 => 120,  323 => 119,  321 => 118,  312 => 111,  306 => 108,  300 => 104,  298 => 103,  293 => 100,  287 => 97,  284 => 96,  278 => 92,  276 => 91,  271 => 88,  269 => 87,  264 => 84,  262 => 83,  257 => 80,  255 => 79,  250 => 76,  248 => 75,  244 => 73,  240 => 71,  234 => 69,  232 => 68,  227 => 67,  225 => 66,  221 => 64,  217 => 62,  209 => 60,  207 => 59,  200 => 58,  198 => 57,  191 => 52,  187 => 51,  184 => 50,  175 => 44,  167 => 38,  165 => 37,  162 => 36,  153 => 33,  150 => 32,  146 => 31,  143 => 30,  134 => 27,  131 => 26,  127 => 25,  117 => 18,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Mes Réservations{% endblock %}

{% block content %}
    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"flex justify-between items-center mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Mes réservations</h1>
                    <p class=\"text-gray-600\">Consultez et gérez vos réservations de covoiturage en cours.</p>
                </div>
                <div class=\"flex space-x-4\">
                    <a href=\"{{ path('app_passager_liste_annonce') }}\" class=\"inline-flex items-center px-4 py-2 bg-primary-ultra-light text-primary rounded-xl border border-primary/20 hover:bg-primary-ultra-light/70 transition duration-300\">
                        <i class=\"fas fa-search mr-2\"></i>
                        Chercher une annonce
                    </a>
                    <a href=\"{{ path('app_passager_historique_reservations') }}\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                        <i class=\"fas fa-history mr-2\"></i>
                        Historique
                    </a>
                </div>
            </div>

            {% for message in app.flashes('success') %}
                <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>{{ message|raw }}</p>
                </div>
            {% endfor %}
            
            {% for message in app.flashes('error') %}
                <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>{{ message }}</p>
                </div>
            {% endfor %}

            {% if reservations is empty %}
                <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucune réservation en cours</h3>
                    <p class=\"mt-2 text-gray-600\">Vous n'avez pas encore de réservations de trajet en cours.</p>
                    <a href=\"{{ path('app_passager_liste_annonce') }}\" class=\"mt-4 inline-flex items-center px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300\">
                        <i class=\"fas fa-search mr-2\"></i>
                        Trouver une annonce
                    </a>
                </div>
            {% else %}
                <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
                    {% for reservation in reservations %}
                        <div class=\"bg-white rounded-xl shadow-md overflow-hidden\">
                            <div class=\"p-6\">
                                <div class=\"flex justify-between items-start\">
                                    <div>
                                        <h3 class=\"font-bold text-xl text-gray-900\">
                                            {% if reservation.type == 'EVENT' and reservation.annonceEvent %}
                                                {{ reservation.annonceEvent.departurePoint }} → {{ reservation.annonceEvent.arrivalPoint }}
                                            {% elseif reservation.annonce and reservation.annonce.trajet %}
                                                {{ reservation.annonce.trajet.getDeparturePoint() }} → {{ reservation.annonce.trajet.getArrivalPoint() }}
                                            {% else %}
                                                Trajet inconnu
                                            {% endif %}
                                        </h3>
                                        <p class=\"text-gray-600\">
                                            {% if reservation.type == 'EVENT' and reservation.annonceEvent %}
                                                Départ le {{ reservation.annonceEvent.departureDate|date(\"d/m/Y à H:i\") }}
                                            {% elseif reservation.annonce %}
                                                Départ le {{ reservation.annonce.departureDate|date(\"d/m/Y à H:i\") }}
                                            {% else %}
                                                Date inconnue
                                            {% endif %}
                                        </p>
                                    </div>
                                    {% if reservation.status == 'PENDING' %}
                                        <span class=\"px-3 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full\">
                                            En attente
                                        </span>
                                    {% elseif reservation.status == 'ACCEPTED' %}
                                        <span class=\"px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">
                                            Acceptée
                                        </span>
                                    {% elseif reservation.status == 'REJECTED' %}
                                        <span class=\"px-3 py-1 bg-red-100 text-red-800 text-xs font-semibold rounded-full\">
                                            Refusée
                                        </span>
                                    {% elseif reservation.status == 'CANCELLED_BY_PASSENGER' %}
                                        <span class=\"px-3 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full\">
                                            Annulée
                                        </span>
                                    {% elseif reservation.status == 'COMPLETED' %}
                                        <span class=\"px-3 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full\">
                                            Terminée
                                        </span>
                                    {% else %}
                                        <span class=\"px-3 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full\">
                                            {{ reservation.status }}
                                        </span>
                                    {% endif %}
                                </div>
                                
                                <div class=\"mt-4 space-y-2\">
                                    {% if reservation.type == 'EVENT' and reservation.annonceEvent %}
                                        <div class=\"flex items-start\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                            </svg>
                                            <span class=\"text-gray-700\">Pour l'événement: {{ reservation.annonceEvent.event.nom }}</span>
                                        </div>
                                    {% endif %}
                                    
                                    <div class=\"flex items-start\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                                        </svg>
                                        <div>
                                            <span class=\"text-gray-700\">
                                                {% if reservation.driver %}
                                                    Conducteur: {{ reservation.driver.prenom }} {{ reservation.driver.nom }}
                                                {% elseif reservation.type == 'EVENT' and reservation.annonceEvent %}
                                                    Conducteur #{{ reservation.annonceEvent.driverId }}
                                                {% elseif reservation.annonce %}
                                                    Conducteur #{{ reservation.annonce.driverId }}
                                                {% endif %}
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class=\"flex items-start\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                        </svg>
                                        <div class=\"flex items-center space-x-2 text-sm font-medium text-gray-900\">
                                            <div class=\"flex items-center\">
                                                {% if reservation.type == 'EVENT' and reservation.annonceEvent %}
                                                    {{ reservation.annonceEvent.prix|number_format(2, ',', ' ') }} DT
                                                {% elseif reservation.annonce and reservation.annonce.trajet %}
                                                    {{ reservation.annonce.trajet.price }} DT
                                                {% else %}
                                                    - DT
                                                {% endif %}
                                            </div>
                                        </div>
                                    </div>

                                    {% if reservation.comment %}
                                        <div class=\"flex items-start\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z\" />
                                            </svg>
                                            <div class=\"text-gray-700 text-sm\">
                                                <span class=\"font-semibold\">Votre commentaire:</span> {{ reservation.comment }}
                                            </div>
                                        </div>
                                    {% endif %}
                                </div>
                                
                                <div class=\"mt-4 flex justify-between items-center\">
                                    <div class=\"flex space-x-2\">
                                        {% if reservation.status == 'PENDING' %}
                                            <form action=\"{{ path('app_passager_annuler_reservation', {'id': reservation.id}) }}\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler cette réservation?');\">
                                                <button type=\"submit\" class=\"px-3 py-1.5 bg-red-100 text-red-800 text-xs font-medium rounded-lg hover:bg-red-200 transition-colors duration-300\">
                                                    <i class=\"fas fa-times-circle mr-1\"></i> Annuler
                                                </button>
                                            </form>
                                        {% elseif reservation.status == 'ACCEPTED' %}
                                            <a href=\"{{ path('app_chat_conversation', {'reservationId': reservation.id, 'type': reservation.type}) }}\" class=\"px-3 py-1.5 bg-primary text-white text-xs font-medium rounded-lg hover:bg-primary-dark transition-colors duration-300\">
                                                <i class=\"fas fa-comments mr-1\"></i> Discuter avec le conducteur
                                            </a>
                                        {% endif %}
                                    </div>
                                    
                                    <a href=\"{{ path('app_chat_conversation', {'reservationId': reservation.id, 'type': reservation.type}) }}\" class=\"px-3 py-1.5 bg-gray-100 text-gray-800 text-xs font-medium rounded-lg hover:bg-gray-200 transition-colors duration-300\">
                                        <i class=\"fas fa-eye mr-1\"></i> Détails
                                    </a>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %} ", "passager/mes_reservations.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\passager\\mes_reservations.html.twig");
    }
}
