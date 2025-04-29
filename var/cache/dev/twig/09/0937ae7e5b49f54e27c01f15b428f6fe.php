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

/* passager/historique_reservations.html.twig */
class __TwigTemplate_b43083619cb7d8cad6a2dbda4f92ae4d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/historique_reservations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/historique_reservations.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "passager/historique_reservations.html.twig", 1);
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

        yield "Historique des Réservations";
        
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
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Historique des réservations</h1>
                    <p class=\"text-gray-600\">Consultez vos trajets passés et terminés.</p>
                </div>
                <div class=\"flex space-x-4\">
                    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_mes_reservations");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                        <i class=\"fas fa-arrow-left mr-2\"></i>
                        Retour aux réservations
                    </a>
                </div>
            </div>

            <!-- Formulaire de filtrage -->
            <div class=\"bg-gradient-to-r from-gray-50 to-gray-100 rounded-xl p-6 mb-6 shadow-sm\">
                <form action=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_historique_reservations");
        yield "\" method=\"get\" class=\"flex flex-col md:flex-row items-center gap-6\">
                    <div class=\"flex flex-col md:flex-row md:items-center gap-3 flex-grow\">
                        <label for=\"date\" class=\"text-sm font-medium text-gray-700 whitespace-nowrap\">Date de réservation</label>
                        <div class=\"w-full md:w-64\">
                            <input type=\"date\" id=\"date\" name=\"date\" 
                                value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dateFilter"]) || array_key_exists("dateFilter", $context) ? $context["dateFilter"] : (function () { throw new RuntimeError('Variable "dateFilter" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\" 
                                class=\"block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-primary focus:outline-none focus:ring-primary\">
                        </div>
                    </div>
                    
                    <div class=\"flex flex-col md:flex-row md:items-center gap-3 flex-grow\">
                        <label for=\"trajet\" class=\"text-sm font-medium text-gray-700 whitespace-nowrap\">Lieu</label>
                        <div class=\"w-full\">
                            <input type=\"text\" id=\"trajet\" name=\"trajet\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["trajetFilter"]) || array_key_exists("trajetFilter", $context) ? $context["trajetFilter"] : (function () { throw new RuntimeError('Variable "trajetFilter" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Ex: tunis, sfax, etc.\" 
                                class=\"block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-primary focus:outline-none focus:ring-primary\">
                        </div>
                    </div>
                    
                    <div class=\"flex gap-2 mt-4 md:mt-0 md:ml-4\">
                        <button type=\"submit\" class=\"inline-flex items-center justify-center px-5 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors\">
                            <i class=\"fas fa-filter mr-2\"></i>
                            Filtrer
                        </button>
                        ";
        // line 46
        if (((isset($context["dateFilter"]) || array_key_exists("dateFilter", $context) ? $context["dateFilter"] : (function () { throw new RuntimeError('Variable "dateFilter" does not exist.', 46, $this->source); })()) || (isset($context["trajetFilter"]) || array_key_exists("trajetFilter", $context) ? $context["trajetFilter"] : (function () { throw new RuntimeError('Variable "trajetFilter" does not exist.', 46, $this->source); })()))) {
            // line 47
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_historique_reservations");
            yield "\" class=\"inline-flex items-center justify-center px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors\">
                                <i class=\"fas fa-times mr-2\"></i>
                                Réinitialiser
                            </a>
                        ";
        }
        // line 52
        yield "                    </div>
                </form>
            </div>

            ";
        // line 56
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 56, $this->source); })()))) {
            // line 57
            yield "                <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucun trajet terminé</h3>
                    <p class=\"mt-2 text-gray-600\">Votre historique de réservations est vide pour le moment.</p>
                    <a href=\"";
            // line 63
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_liste_annonce");
            yield "\" class=\"mt-4 inline-flex items-center px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300\">
                        <i class=\"fas fa-search mr-2\"></i>
                        Trouver une annonce
                    </a>
                </div>
            ";
        } else {
            // line 69
            yield "                <div class=\"space-y-6\">
                    ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 70, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 71
                yield "                        <div class=\"bg-white shadow-md rounded-xl overflow-hidden\">
                            <div class=\"p-5\">
                                <div class=\"flex flex-col md:flex-row md:justify-between md:items-start\">
                                    <div class=\"mb-4 md:mb-0\">
                                        <div class=\"flex items-center\">
                                            <div class=\"font-bold text-lg text-gray-900 mr-3\">
                                                ";
                // line 77
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 77) == "EVENT") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 77))) {
                    // line 78
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 78), "departurePoint", [], "any", false, false, false, 78), "html", null, true);
                    yield " → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 78), "arrivalPoint", [], "any", false, false, false, 78), "html", null, true);
                    yield "
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 79
$context["reservation"], "annonce", [], "any", false, false, false, 79) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 79), "trajet", [], "any", false, false, false, 79))) {
                    // line 80
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 80), "trajet", [], "any", false, false, false, 80), "getDeparturePoint", [], "method", false, false, false, 80), "html", null, true);
                    yield " → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 80), "trajet", [], "any", false, false, false, 80), "getArrivalPoint", [], "method", false, false, false, 80), "html", null, true);
                    yield "
                                                ";
                } else {
                    // line 82
                    yield "                                                    <span class=\"text-gray-500\">Informations non disponibles</span>
                                                ";
                }
                // line 84
                yield "                                            </div>
                                            <span class=\"px-2.5 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">
                                                Terminé
                                            </span>
                                        </div>
                                        
                                        ";
                // line 90
                if ((((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 90) == "EVENT") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 90)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 90), "event", [], "any", false, false, false, 90))) {
                    // line 91
                    yield "                                            <div class=\"text-xs text-gray-500 mt-1\">
                                                Pour l'événement: ";
                    // line 92
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 92), "event", [], "any", false, false, false, 92), "nom", [], "any", false, false, false, 92), "html", null, true);
                    yield "
                                            </div>
                                        ";
                }
                // line 95
                yield "                                        
                                        <div class=\"flex items-center mt-3\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                            </svg>
                                            <span class=\"text-gray-700\">
                                                ";
                // line 101
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 101) == "EVENT") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 101))) {
                    // line 102
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 102), "departureDate", [], "any", false, false, false, 102), "d/m/Y à H:i"), "html", null, true);
                    yield "
                                                ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 103
$context["reservation"], "annonce", [], "any", false, false, false, 103)) {
                    // line 104
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 104), "departureDate", [], "any", false, false, false, 104), "d/m/Y à H:i"), "html", null, true);
                    yield "
                                                ";
                } else {
                    // line 106
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 106), "d/m/Y à H:i"), "html", null, true);
                    yield "
                                                ";
                }
                // line 108
                yield "                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class=\"flex flex-col md:items-end\">
                                        <div class=\"flex items-center\">
                                            <div class=\"h-8 w-8 rounded-full bg-gradient-to-r from-primary to-primary-dark flex items-center justify-center text-white text-sm font-bold mr-2\">
                                                C
                                            </div>
                                            <div class=\"text-sm font-medium text-gray-900\">
                                                ";
                // line 118
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 118) == "EVENT") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 118))) {
                    // line 119
                    yield "                                                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "driver", [], "any", false, false, false, 119)) {
                        // line 120
                        yield "                                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "driver", [], "any", false, false, false, 120), "prenom", [], "any", false, false, false, 120), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "driver", [], "any", false, false, false, 120), "nom", [], "any", false, false, false, 120), "html", null, true);
                        yield "
                                                    ";
                    } else {
                        // line 122
                        yield "                                                        Conducteur #";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 122), "driverId", [], "any", false, false, false, 122), "html", null, true);
                        yield "
                                                    ";
                    }
                    // line 124
                    yield "                                                ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 124)) {
                    // line 125
                    yield "                                                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "driver", [], "any", false, false, false, 125)) {
                        // line 126
                        yield "                                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "driver", [], "any", false, false, false, 126), "prenom", [], "any", false, false, false, 126), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "driver", [], "any", false, false, false, 126), "nom", [], "any", false, false, false, 126), "html", null, true);
                        yield "
                                                    ";
                    } else {
                        // line 128
                        yield "                                                        Conducteur #";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 128), "driverId", [], "any", false, false, false, 128), "html", null, true);
                        yield "
                                                    ";
                    }
                    // line 130
                    yield "                                                ";
                } else {
                    // line 131
                    yield "                                                    Conducteur inconnu
                                                ";
                }
                // line 133
                yield "                                            </div>
                                        </div>
                                        
                                        <div class=\"mt-3 text-base font-medium text-gray-900\">
                                            ";
                // line 137
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 137) == "EVENT") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 137))) {
                    // line 138
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 138), "prix", [], "any", false, false, false, 138), 2, ",", " "), "html", null, true);
                    yield " DT
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 139
$context["reservation"], "annonce", [], "any", false, false, false, 139) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 139), "trajet", [], "any", false, false, false, 139))) {
                    // line 140
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 140), "trajet", [], "any", false, false, false, 140), "price", [], "any", false, false, false, 140), "html", null, true);
                    yield " DT
                                            ";
                } else {
                    // line 142
                    yield "                                                - DT
                                            ";
                }
                // line 144
                yield "                                        </div>
                                    </div>
                                </div>
                                
                                ";
                // line 148
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "comment", [], "any", false, false, false, 148)) {
                    // line 149
                    yield "                                    <div class=\"mt-4 p-4 bg-blue-50 rounded-lg border border-blue-100\">
                                        <div class=\"flex items-start\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-blue-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z\" />
                                            </svg>
                                            <div>
                                                <p class=\"text-sm font-medium text-blue-700\">Votre commentaire</p>
                                                <p class=\"text-sm text-gray-700 mt-1\">";
                    // line 156
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "comment", [], "any", false, false, false, 156), "html", null, true);
                    yield "</p>
                                            </div>
                                        </div>
                                    </div>
                                ";
                }
                // line 161
                yield "                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            yield "                </div>
            ";
        }
        // line 166
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
        return "passager/historique_reservations.html.twig";
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
        return array (  396 => 166,  392 => 164,  384 => 161,  376 => 156,  367 => 149,  365 => 148,  359 => 144,  355 => 142,  349 => 140,  347 => 139,  342 => 138,  340 => 137,  334 => 133,  330 => 131,  327 => 130,  321 => 128,  313 => 126,  310 => 125,  307 => 124,  301 => 122,  293 => 120,  290 => 119,  288 => 118,  276 => 108,  270 => 106,  264 => 104,  262 => 103,  257 => 102,  255 => 101,  247 => 95,  241 => 92,  238 => 91,  236 => 90,  228 => 84,  224 => 82,  216 => 80,  214 => 79,  207 => 78,  205 => 77,  197 => 71,  193 => 70,  190 => 69,  181 => 63,  173 => 57,  171 => 56,  165 => 52,  156 => 47,  154 => 46,  141 => 36,  130 => 28,  122 => 23,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Historique des Réservations{% endblock %}

{% block content %}
    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"flex justify-between items-center mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Historique des réservations</h1>
                    <p class=\"text-gray-600\">Consultez vos trajets passés et terminés.</p>
                </div>
                <div class=\"flex space-x-4\">
                    <a href=\"{{ path('app_passager_mes_reservations') }}\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                        <i class=\"fas fa-arrow-left mr-2\"></i>
                        Retour aux réservations
                    </a>
                </div>
            </div>

            <!-- Formulaire de filtrage -->
            <div class=\"bg-gradient-to-r from-gray-50 to-gray-100 rounded-xl p-6 mb-6 shadow-sm\">
                <form action=\"{{ path('app_passager_historique_reservations') }}\" method=\"get\" class=\"flex flex-col md:flex-row items-center gap-6\">
                    <div class=\"flex flex-col md:flex-row md:items-center gap-3 flex-grow\">
                        <label for=\"date\" class=\"text-sm font-medium text-gray-700 whitespace-nowrap\">Date de réservation</label>
                        <div class=\"w-full md:w-64\">
                            <input type=\"date\" id=\"date\" name=\"date\" 
                                value=\"{{ dateFilter }}\" 
                                class=\"block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-primary focus:outline-none focus:ring-primary\">
                        </div>
                    </div>
                    
                    <div class=\"flex flex-col md:flex-row md:items-center gap-3 flex-grow\">
                        <label for=\"trajet\" class=\"text-sm font-medium text-gray-700 whitespace-nowrap\">Lieu</label>
                        <div class=\"w-full\">
                            <input type=\"text\" id=\"trajet\" name=\"trajet\" value=\"{{ trajetFilter }}\" placeholder=\"Ex: tunis, sfax, etc.\" 
                                class=\"block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-primary focus:outline-none focus:ring-primary\">
                        </div>
                    </div>
                    
                    <div class=\"flex gap-2 mt-4 md:mt-0 md:ml-4\">
                        <button type=\"submit\" class=\"inline-flex items-center justify-center px-5 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors\">
                            <i class=\"fas fa-filter mr-2\"></i>
                            Filtrer
                        </button>
                        {% if dateFilter or trajetFilter %}
                            <a href=\"{{ path('app_passager_historique_reservations') }}\" class=\"inline-flex items-center justify-center px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors\">
                                <i class=\"fas fa-times mr-2\"></i>
                                Réinitialiser
                            </a>
                        {% endif %}
                    </div>
                </form>
            </div>

            {% if reservations is empty %}
                <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucun trajet terminé</h3>
                    <p class=\"mt-2 text-gray-600\">Votre historique de réservations est vide pour le moment.</p>
                    <a href=\"{{ path('app_passager_liste_annonce') }}\" class=\"mt-4 inline-flex items-center px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300\">
                        <i class=\"fas fa-search mr-2\"></i>
                        Trouver une annonce
                    </a>
                </div>
            {% else %}
                <div class=\"space-y-6\">
                    {% for reservation in reservations %}
                        <div class=\"bg-white shadow-md rounded-xl overflow-hidden\">
                            <div class=\"p-5\">
                                <div class=\"flex flex-col md:flex-row md:justify-between md:items-start\">
                                    <div class=\"mb-4 md:mb-0\">
                                        <div class=\"flex items-center\">
                                            <div class=\"font-bold text-lg text-gray-900 mr-3\">
                                                {% if reservation.type == 'EVENT' and reservation.annonceEvent %}
                                                    {{ reservation.annonceEvent.departurePoint }} → {{ reservation.annonceEvent.arrivalPoint }}
                                                {% elseif reservation.annonce and reservation.annonce.trajet %}
                                                    {{ reservation.annonce.trajet.getDeparturePoint() }} → {{ reservation.annonce.trajet.getArrivalPoint() }}
                                                {% else %}
                                                    <span class=\"text-gray-500\">Informations non disponibles</span>
                                                {% endif %}
                                            </div>
                                            <span class=\"px-2.5 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">
                                                Terminé
                                            </span>
                                        </div>
                                        
                                        {% if reservation.type == 'EVENT' and reservation.annonceEvent and reservation.annonceEvent.event %}
                                            <div class=\"text-xs text-gray-500 mt-1\">
                                                Pour l'événement: {{ reservation.annonceEvent.event.nom }}
                                            </div>
                                        {% endif %}
                                        
                                        <div class=\"flex items-center mt-3\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                            </svg>
                                            <span class=\"text-gray-700\">
                                                {% if reservation.type == 'EVENT' and reservation.annonceEvent %}
                                                    {{ reservation.annonceEvent.departureDate|date(\"d/m/Y à H:i\") }}
                                                {% elseif reservation.annonce %}
                                                    {{ reservation.annonce.departureDate|date(\"d/m/Y à H:i\") }}
                                                {% else %}
                                                    {{ reservation.dateReservation|date(\"d/m/Y à H:i\") }}
                                                {% endif %}
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class=\"flex flex-col md:items-end\">
                                        <div class=\"flex items-center\">
                                            <div class=\"h-8 w-8 rounded-full bg-gradient-to-r from-primary to-primary-dark flex items-center justify-center text-white text-sm font-bold mr-2\">
                                                C
                                            </div>
                                            <div class=\"text-sm font-medium text-gray-900\">
                                                {% if reservation.type == 'EVENT' and reservation.annonceEvent %}
                                                    {% if reservation.driver %}
                                                        {{ reservation.driver.prenom }} {{ reservation.driver.nom }}
                                                    {% else %}
                                                        Conducteur #{{ reservation.annonceEvent.driverId }}
                                                    {% endif %}
                                                {% elseif reservation.annonce %}
                                                    {% if reservation.driver %}
                                                        {{ reservation.driver.prenom }} {{ reservation.driver.nom }}
                                                    {% else %}
                                                        Conducteur #{{ reservation.annonce.driverId }}
                                                    {% endif %}
                                                {% else %}
                                                    Conducteur inconnu
                                                {% endif %}
                                            </div>
                                        </div>
                                        
                                        <div class=\"mt-3 text-base font-medium text-gray-900\">
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
                                    <div class=\"mt-4 p-4 bg-blue-50 rounded-lg border border-blue-100\">
                                        <div class=\"flex items-start\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-blue-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z\" />
                                            </svg>
                                            <div>
                                                <p class=\"text-sm font-medium text-blue-700\">Votre commentaire</p>
                                                <p class=\"text-sm text-gray-700 mt-1\">{{ reservation.comment }}</p>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %} ", "passager/historique_reservations.html.twig", "D:\\Covoituni_web-master\\templates\\passager\\historique_reservations.html.twig");
    }
}
