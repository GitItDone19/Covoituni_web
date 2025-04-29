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

/* conducteur/reservations.html.twig */
class __TwigTemplate_ef9fd8d6ea463fb3862528e953b1c137 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/reservations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/reservations.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/reservations.html.twig", 1);
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

        yield "Gérer les Réservations - Conducteur";
        
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
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Gestion des réservations</h1>
                    <p class=\"text-gray-600\">Consultez et gérez les réservations pour vos annonces de covoiturage.</p>
                </div>
                <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_liste_annonce");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                    <i class=\"fas fa-arrow-left mr-2\"></i>
                    Retour aux annonces
                </a>
            </div>

            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["success"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            yield "                <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 21
            yield $context["message"];
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "            
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", ["error"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            yield "                <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
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
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservationsByAnnonce"]) || array_key_exists("reservationsByAnnonce", $context) ? $context["reservationsByAnnonce"] : (function () { throw new RuntimeError('Variable "reservationsByAnnonce" does not exist.', 31, $this->source); })()))) {
            // line 32
            yield "                <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucune réservation</h3>
                    <p class=\"mt-2 text-gray-600\">Vous n'avez pas encore de réservations pour vos annonces.</p>
                </div>
            ";
        } else {
            // line 40
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationsByAnnonce"]) || array_key_exists("reservationsByAnnonce", $context) ? $context["reservationsByAnnonce"] : (function () { throw new RuntimeError('Variable "reservationsByAnnonce" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["annonceId"] => $context["data"]) {
                // line 41
                yield "                    <div class=\"bg-gray-50 rounded-xl p-6 mb-8\">
                        <div class=\"flex justify-between items-start mb-6\">
                            <div>
                                ";
                // line 44
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "type", [], "any", true, true, false, 44) && (CoreExtension::getAttribute($this->env, $this->source, $context["data"], "type", [], "any", false, false, false, 44) == "EVENT"))) {
                    // line 45
                    yield "                                    ";
                    // line 46
                    yield "                                    <h2 class=\"text-xl font-semibold text-gray-800\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 46), "titre", [], "any", false, false, false, 46), "html", null, true);
                    yield "</h2>
                                    <p class=\"text-gray-600\">";
                    // line 47
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 47), "departurePoint", [], "any", false, false, false, 47), "html", null, true);
                    yield " → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 47), "arrivalPoint", [], "any", false, false, false, 47), "html", null, true);
                    yield "</p>
                                    <p class=\"text-sm text-gray-500\">";
                    // line 48
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 48), "departureDate", [], "any", false, false, false, 48), "d/m/Y à H:i"), "html", null, true);
                    yield "</p>
                                    <div class=\"text-xs text-primary font-medium mt-1\">
                                        <span class=\"bg-primary/10 rounded-md px-2 py-0.5\">Événement</span>
                                    </div>
                                ";
                } else {
                    // line 53
                    yield "                                    ";
                    // line 54
                    yield "                                    <h2 class=\"text-xl font-semibold text-gray-800\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 54), "titre", [], "any", false, false, false, 54), "html", null, true);
                    yield "</h2>
                                    <p class=\"text-gray-600\">";
                    // line 55
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 55), "trajet", [], "any", false, false, false, 55), "getDeparturePoint", [], "method", false, false, false, 55), "html", null, true);
                    yield " → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 55), "trajet", [], "any", false, false, false, 55), "getArrivalPoint", [], "method", false, false, false, 55), "html", null, true);
                    yield "</p>
                                    <p class=\"text-sm text-gray-500\">";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 56), "departureDate", [], "any", false, false, false, 56), "d/m/Y à H:i"), "html", null, true);
                    yield "</p>
                                ";
                }
                // line 58
                yield "                            </div>
                            <div class=\"text-right\">
                                <p class=\"text-sm text-gray-500\">Statut</p>
                                ";
                // line 61
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 61), "status", [], "any", false, false, false, 61) == "ouvert")) {
                    // line 62
                    yield "                                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">
                                        Ouvert
                                    </span>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 65
$context["data"], "annonce", [], "any", false, false, false, 65), "status", [], "any", false, false, false, 65) == "plein")) {
                    // line 66
                    yield "                                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800\">
                                        Plein
                                    </span>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 69
$context["data"], "annonce", [], "any", false, false, false, 69), "status", [], "any", false, false, false, 69) == "termine")) {
                    // line 70
                    yield "                                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800\">
                                        Terminé
                                    </span>
                                ";
                }
                // line 74
                yield "                            </div>
                        </div>
                        
                        ";
                // line 77
                if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "reservations", [], "any", false, false, false, 77))) {
                    // line 78
                    yield "                            <div class=\"text-center py-4 text-gray-500\">
                                Aucune réservation pour cette annonce.
                            </div>
                        ";
                } else {
                    // line 82
                    yield "                            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4\">
                                ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "reservations", [], "any", false, false, false, 83));
                    foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                        // line 84
                        yield "                                    <div class=\"bg-white rounded-xl shadow-sm p-4\">
                                        <div class=\"flex items-center justify-between mb-3\">
                                            <div class=\"flex items-center\">
                                                <div class=\"h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 text-sm font-bold\">
                                                    ";
                        // line 88
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "passager", [], "any", true, true, false, 88)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "passager", [], "any", false, false, false, 88), "prenom", [], "any", false, false, false, 88))), "html", null, true)) : ("P"));
                        yield "
                                                </div>
                                                <div class=\"ml-3\">
                                                    <div class=\"text-sm font-medium text-gray-900\">
                                                        ";
                        // line 92
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "passager", [], "any", true, true, false, 92)) {
                            // line 93
                            yield "                                                            ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "passager", [], "any", false, false, false, 93), "prenom", [], "any", false, false, false, 93), "html", null, true);
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "passager", [], "any", false, false, false, 93), "nom", [], "any", false, false, false, 93), "html", null, true);
                            yield "
                                                        ";
                        } else {
                            // line 95
                            yield "                                                            Passager #";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "userId", [], "any", false, false, false, 95), "html", null, true);
                            yield "
                                                        ";
                        }
                        // line 97
                        yield "                                                    </div>
                                                </div>
                                            </div>
                                            
                                            ";
                        // line 101
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 101) == "PENDING")) {
                            // line 102
                            yield "                                                <span class=\"px-2 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full\">
                                                    En attente
                                                </span>
                                            ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 105
$context["reservation"], "status", [], "any", false, false, false, 105) == "ACCEPTED")) {
                            // line 106
                            yield "                                                <span class=\"px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">
                                                    Acceptée
                                                </span>
                                            ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 109
$context["reservation"], "status", [], "any", false, false, false, 109) == "REJECTED")) {
                            // line 110
                            yield "                                                <span class=\"px-2 py-1 bg-red-100 text-red-800 text-xs font-semibold rounded-full\">
                                                    Refusée
                                                </span>
                                            ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 113
$context["reservation"], "status", [], "any", false, false, false, 113) == "CANCELLED_BY_PASSENGER")) {
                            // line 114
                            yield "                                                <span class=\"px-2 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full\">
                                                    Annulée
                                                </span>
                                            ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 117
$context["reservation"], "status", [], "any", false, false, false, 117) == "COMPLETED")) {
                            // line 118
                            yield "                                                <span class=\"px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full\">
                                                    Terminée
                                                </span>
                                            ";
                        } else {
                            // line 122
                            yield "                                                <span class=\"px-2 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full\">
                                                    ";
                            // line 123
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 123), "html", null, true);
                            yield "
                                                </span>
                                            ";
                        }
                        // line 126
                        yield "                                        </div>
                                        
                                        <div class=\"space-y-2 mb-3\">
                                            <div class=\"flex items-start\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                                </svg>
                                                <span class=\"text-gray-700 text-xs\">";
                        // line 133
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 133), "d/m/Y à H:i"), "html", null, true);
                        yield "</span>
                                            </div>
                                            
                                            ";
                        // line 136
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "comment", [], "any", false, false, false, 136)) {
                            // line 137
                            yield "                                                <div class=\"flex items-start\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z\" />
                                                    </svg>
                                                    <div class=\"text-gray-700 text-xs\">
                                                        <span class=\"font-semibold\">Commentaire:</span> ";
                            // line 142
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "comment", [], "any", false, false, false, 142), "html", null, true);
                            yield "
                                                    </div>
                                                </div>
                                            ";
                        }
                        // line 146
                        yield "                                        </div>
                                        
                                        ";
                        // line 148
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 148) == "PENDING")) {
                            // line 149
                            yield "                                            <div class=\"flex gap-2\">
                                                ";
                            // line 150
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", true, true, false, 150) && (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 150) == "EVENT"))) {
                                // line 151
                                yield "                                                    <form action=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_accepter_reservation_event", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 151)]), "html", null, true);
                                yield "\" method=\"post\" class=\"flex-1\">
                                                        <button type=\"submit\" class=\"inline-flex items-center justify-center w-full px-3 py-1.5 bg-green-100 text-green-800 text-xs font-medium rounded-lg hover:bg-green-200 transition-colors duration-300\">
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                                                            </svg>
                                                            Accepter
                                                        </button>
                                                    </form>
                                                    <form action=\"";
                                // line 159
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_refuser_reservation_event", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 159)]), "html", null, true);
                                yield "\" method=\"post\" class=\"flex-1\">
                                                        <button type=\"submit\" class=\"inline-flex items-center justify-center w-full px-3 py-1.5 bg-red-100 text-red-800 text-xs font-medium rounded-lg hover:bg-red-200 transition-colors duration-300\">
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                                                            </svg>
                                                            Refuser
                                                        </button>
                                                    </form>
                                                ";
                            } else {
                                // line 168
                                yield "                                                    <form action=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_accepter_reservation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 168)]), "html", null, true);
                                yield "\" method=\"post\" class=\"flex-1\">
                                                        <button type=\"submit\" class=\"inline-flex items-center justify-center w-full px-3 py-1.5 bg-green-100 text-green-800 text-xs font-medium rounded-lg hover:bg-green-200 transition-colors duration-300\">
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                                                            </svg>
                                                            Accepter
                                                        </button>
                                                    </form>
                                                    <form action=\"";
                                // line 176
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_refuser_reservation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 176)]), "html", null, true);
                                yield "\" method=\"post\" class=\"flex-1\">
                                                        <button type=\"submit\" class=\"inline-flex items-center justify-center w-full px-3 py-1.5 bg-red-100 text-red-800 text-xs font-medium rounded-lg hover:bg-red-200 transition-colors duration-300\">
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                                                            </svg>
                                                            Refuser
                                                        </button>
                                                    </form>
                                                ";
                            }
                            // line 185
                            yield "                                            </div>
                                        ";
                        } else {
                            // line 187
                            yield "                                            <div class=\"flex flex-col gap-2\">
                                                ";
                            // line 188
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 188) == "ACCEPTED")) {
                                // line 189
                                yield "                                                    <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chat_conversation", ["reservationId" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 189), "type" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 189)]), "html", null, true);
                                yield "\" class=\"inline-flex items-center justify-center w-full px-3 py-1.5 bg-primary text-white text-xs font-medium rounded-lg hover:bg-primary-dark transition-colors duration-300\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z\" />
                                                        </svg>
                                                        Discuter
                                                    </a>
                                                ";
                            }
                            // line 196
                            yield "                                                <p class=\"text-xs text-gray-400 text-center\">Aucune autre action disponible</p>
                                            </div>
                                        ";
                        }
                        // line 199
                        yield "                                    </div>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 201
                    yield "                            </div>
                        ";
                }
                // line 203
                yield "                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['annonceId'], $context['data'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            yield "            ";
        }
        // line 206
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
        return "conducteur/reservations.html.twig";
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
        return array (  482 => 206,  479 => 205,  472 => 203,  468 => 201,  461 => 199,  456 => 196,  445 => 189,  443 => 188,  440 => 187,  436 => 185,  424 => 176,  412 => 168,  400 => 159,  388 => 151,  386 => 150,  383 => 149,  381 => 148,  377 => 146,  370 => 142,  363 => 137,  361 => 136,  355 => 133,  346 => 126,  340 => 123,  337 => 122,  331 => 118,  329 => 117,  324 => 114,  322 => 113,  317 => 110,  315 => 109,  310 => 106,  308 => 105,  303 => 102,  301 => 101,  295 => 97,  289 => 95,  281 => 93,  279 => 92,  272 => 88,  266 => 84,  262 => 83,  259 => 82,  253 => 78,  251 => 77,  246 => 74,  240 => 70,  238 => 69,  233 => 66,  231 => 65,  226 => 62,  224 => 61,  219 => 58,  214 => 56,  208 => 55,  203 => 54,  201 => 53,  193 => 48,  187 => 47,  182 => 46,  180 => 45,  178 => 44,  173 => 41,  168 => 40,  158 => 32,  156 => 31,  153 => 30,  144 => 27,  141 => 26,  137 => 25,  134 => 24,  125 => 21,  122 => 20,  118 => 19,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Gérer les Réservations - Conducteur{% endblock %}

{% block content %}
    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"flex justify-between items-center mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Gestion des réservations</h1>
                    <p class=\"text-gray-600\">Consultez et gérez les réservations pour vos annonces de covoiturage.</p>
                </div>
                <a href=\"{{ path('app_conducteur_liste_annonce') }}\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                    <i class=\"fas fa-arrow-left mr-2\"></i>
                    Retour aux annonces
                </a>
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

            {% if reservationsByAnnonce is empty %}
                <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucune réservation</h3>
                    <p class=\"mt-2 text-gray-600\">Vous n'avez pas encore de réservations pour vos annonces.</p>
                </div>
            {% else %}
                {% for annonceId, data in reservationsByAnnonce %}
                    <div class=\"bg-gray-50 rounded-xl p-6 mb-8\">
                        <div class=\"flex justify-between items-start mb-6\">
                            <div>
                                {% if data.type is defined and data.type == 'EVENT' %}
                                    {# Annonce d'événement #}
                                    <h2 class=\"text-xl font-semibold text-gray-800\">{{ data.annonce.titre }}</h2>
                                    <p class=\"text-gray-600\">{{ data.annonce.departurePoint }} → {{ data.annonce.arrivalPoint }}</p>
                                    <p class=\"text-sm text-gray-500\">{{ data.annonce.departureDate|date('d/m/Y à H:i') }}</p>
                                    <div class=\"text-xs text-primary font-medium mt-1\">
                                        <span class=\"bg-primary/10 rounded-md px-2 py-0.5\">Événement</span>
                                    </div>
                                {% else %}
                                    {# Annonce normale #}
                                    <h2 class=\"text-xl font-semibold text-gray-800\">{{ data.annonce.titre }}</h2>
                                    <p class=\"text-gray-600\">{{ data.annonce.trajet.getDeparturePoint() }} → {{ data.annonce.trajet.getArrivalPoint() }}</p>
                                    <p class=\"text-sm text-gray-500\">{{ data.annonce.departureDate|date('d/m/Y à H:i') }}</p>
                                {% endif %}
                            </div>
                            <div class=\"text-right\">
                                <p class=\"text-sm text-gray-500\">Statut</p>
                                {% if data.annonce.status == 'ouvert' %}
                                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">
                                        Ouvert
                                    </span>
                                {% elseif data.annonce.status == 'plein' %}
                                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800\">
                                        Plein
                                    </span>
                                {% elseif data.annonce.status == 'termine' %}
                                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800\">
                                        Terminé
                                    </span>
                                {% endif %}
                            </div>
                        </div>
                        
                        {% if data.reservations is empty %}
                            <div class=\"text-center py-4 text-gray-500\">
                                Aucune réservation pour cette annonce.
                            </div>
                        {% else %}
                            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4\">
                                {% for reservation in data.reservations %}
                                    <div class=\"bg-white rounded-xl shadow-sm p-4\">
                                        <div class=\"flex items-center justify-between mb-3\">
                                            <div class=\"flex items-center\">
                                                <div class=\"h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 text-sm font-bold\">
                                                    {{ reservation.passager is defined ? reservation.passager.prenom|first|upper : 'P' }}
                                                </div>
                                                <div class=\"ml-3\">
                                                    <div class=\"text-sm font-medium text-gray-900\">
                                                        {% if reservation.passager is defined %}
                                                            {{ reservation.passager.prenom }} {{ reservation.passager.nom }}
                                                        {% else %}
                                                            Passager #{{ reservation.userId }}
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            {% if reservation.status == 'PENDING' %}
                                                <span class=\"px-2 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full\">
                                                    En attente
                                                </span>
                                            {% elseif reservation.status == 'ACCEPTED' %}
                                                <span class=\"px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">
                                                    Acceptée
                                                </span>
                                            {% elseif reservation.status == 'REJECTED' %}
                                                <span class=\"px-2 py-1 bg-red-100 text-red-800 text-xs font-semibold rounded-full\">
                                                    Refusée
                                                </span>
                                            {% elseif reservation.status == 'CANCELLED_BY_PASSENGER' %}
                                                <span class=\"px-2 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full\">
                                                    Annulée
                                                </span>
                                            {% elseif reservation.status == 'COMPLETED' %}
                                                <span class=\"px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full\">
                                                    Terminée
                                                </span>
                                            {% else %}
                                                <span class=\"px-2 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full\">
                                                    {{ reservation.status }}
                                                </span>
                                            {% endif %}
                                        </div>
                                        
                                        <div class=\"space-y-2 mb-3\">
                                            <div class=\"flex items-start\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                                </svg>
                                                <span class=\"text-gray-700 text-xs\">{{ reservation.dateReservation|date(\"d/m/Y à H:i\") }}</span>
                                            </div>
                                            
                                            {% if reservation.comment %}
                                                <div class=\"flex items-start\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z\" />
                                                    </svg>
                                                    <div class=\"text-gray-700 text-xs\">
                                                        <span class=\"font-semibold\">Commentaire:</span> {{ reservation.comment }}
                                                    </div>
                                                </div>
                                            {% endif %}
                                        </div>
                                        
                                        {% if reservation.status == 'PENDING' %}
                                            <div class=\"flex gap-2\">
                                                {% if reservation.type is defined and reservation.type == 'EVENT' %}
                                                    <form action=\"{{ path('app_conducteur_accepter_reservation_event', {'id': reservation.id}) }}\" method=\"post\" class=\"flex-1\">
                                                        <button type=\"submit\" class=\"inline-flex items-center justify-center w-full px-3 py-1.5 bg-green-100 text-green-800 text-xs font-medium rounded-lg hover:bg-green-200 transition-colors duration-300\">
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                                                            </svg>
                                                            Accepter
                                                        </button>
                                                    </form>
                                                    <form action=\"{{ path('app_conducteur_refuser_reservation_event', {'id': reservation.id}) }}\" method=\"post\" class=\"flex-1\">
                                                        <button type=\"submit\" class=\"inline-flex items-center justify-center w-full px-3 py-1.5 bg-red-100 text-red-800 text-xs font-medium rounded-lg hover:bg-red-200 transition-colors duration-300\">
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                                                            </svg>
                                                            Refuser
                                                        </button>
                                                    </form>
                                                {% else %}
                                                    <form action=\"{{ path('app_conducteur_accepter_reservation', {'id': reservation.id}) }}\" method=\"post\" class=\"flex-1\">
                                                        <button type=\"submit\" class=\"inline-flex items-center justify-center w-full px-3 py-1.5 bg-green-100 text-green-800 text-xs font-medium rounded-lg hover:bg-green-200 transition-colors duration-300\">
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                                                            </svg>
                                                            Accepter
                                                        </button>
                                                    </form>
                                                    <form action=\"{{ path('app_conducteur_refuser_reservation', {'id': reservation.id}) }}\" method=\"post\" class=\"flex-1\">
                                                        <button type=\"submit\" class=\"inline-flex items-center justify-center w-full px-3 py-1.5 bg-red-100 text-red-800 text-xs font-medium rounded-lg hover:bg-red-200 transition-colors duration-300\">
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                                                            </svg>
                                                            Refuser
                                                        </button>
                                                    </form>
                                                {% endif %}
                                            </div>
                                        {% else %}
                                            <div class=\"flex flex-col gap-2\">
                                                {% if reservation.status == 'ACCEPTED' %}
                                                    <a href=\"{{ path('app_chat_conversation', {'reservationId': reservation.id, 'type': reservation.type}) }}\" class=\"inline-flex items-center justify-center w-full px-3 py-1.5 bg-primary text-white text-xs font-medium rounded-lg hover:bg-primary-dark transition-colors duration-300\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z\" />
                                                        </svg>
                                                        Discuter
                                                    </a>
                                                {% endif %}
                                                <p class=\"text-xs text-gray-400 text-center\">Aucune autre action disponible</p>
                                            </div>
                                        {% endif %}
                                    </div>
                                {% endfor %}
                            </div>
                        {% endif %}
                    </div>
                {% endfor %}
            {% endif %}
        </div>
    </div>
{% endblock %} ", "conducteur/reservations.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\reservations.html.twig");
    }
}
