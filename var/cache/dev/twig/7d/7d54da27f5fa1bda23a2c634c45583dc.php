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
class __TwigTemplate_41873977403523760d4e09fc9ddc7742 extends Template
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
            <!-- Filtres -->
            <div class=\"flex items-center mb-6 bg-gray-50 rounded-xl p-4\">
                <span class=\"font-medium text-gray-700 mr-3\">Filtrer par statut :</span>
                <div class=\"flex space-x-2\">
                    <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_reservations", ["status" => "all"]);
        yield "\" 
                       class=\"px-3 py-1 rounded-full text-sm ";
        // line 36
        if (((isset($context["statusFilter"]) || array_key_exists("statusFilter", $context) ? $context["statusFilter"] : (function () { throw new RuntimeError('Variable "statusFilter" does not exist.', 36, $this->source); })()) == "all")) {
            yield "bg-primary text-white";
        } else {
            yield "bg-gray-200 text-gray-700 hover:bg-gray-300";
        }
        yield "\">
                        Tous
                    </a>
                    <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_reservations", ["status" => "PENDING"]);
        yield "\" 
                       class=\"px-3 py-1 rounded-full text-sm ";
        // line 40
        if (((isset($context["statusFilter"]) || array_key_exists("statusFilter", $context) ? $context["statusFilter"] : (function () { throw new RuntimeError('Variable "statusFilter" does not exist.', 40, $this->source); })()) == "PENDING")) {
            yield "bg-yellow-500 text-white";
        } else {
            yield "bg-yellow-100 text-yellow-800 hover:bg-yellow-200";
        }
        yield "\">
                        En attente
                    </a>
                    <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_reservations", ["status" => "ACCEPTED"]);
        yield "\" 
                       class=\"px-3 py-1 rounded-full text-sm ";
        // line 44
        if (((isset($context["statusFilter"]) || array_key_exists("statusFilter", $context) ? $context["statusFilter"] : (function () { throw new RuntimeError('Variable "statusFilter" does not exist.', 44, $this->source); })()) == "ACCEPTED")) {
            yield "bg-green-500 text-white";
        } else {
            yield "bg-green-100 text-green-800 hover:bg-green-200";
        }
        yield "\">
                        Acceptées
                    </a>
                    <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_reservations", ["status" => "REJECTED"]);
        yield "\" 
                       class=\"px-3 py-1 rounded-full text-sm ";
        // line 48
        if (((isset($context["statusFilter"]) || array_key_exists("statusFilter", $context) ? $context["statusFilter"] : (function () { throw new RuntimeError('Variable "statusFilter" does not exist.', 48, $this->source); })()) == "REJECTED")) {
            yield "bg-red-500 text-white";
        } else {
            yield "bg-red-100 text-red-800 hover:bg-red-200";
        }
        yield "\">
                        Refusées
                    </a>
                    <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_reservations", ["status" => "COMPLETED"]);
        yield "\" 
                       class=\"px-3 py-1 rounded-full text-sm ";
        // line 52
        if (((isset($context["statusFilter"]) || array_key_exists("statusFilter", $context) ? $context["statusFilter"] : (function () { throw new RuntimeError('Variable "statusFilter" does not exist.', 52, $this->source); })()) == "COMPLETED")) {
            yield "bg-blue-500 text-white";
        } else {
            yield "bg-blue-100 text-blue-800 hover:bg-blue-200";
        }
        yield "\">
                        Terminées
                    </a>
                </div>
            </div>

            ";
        // line 58
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservationsByAnnonce"]) || array_key_exists("reservationsByAnnonce", $context) ? $context["reservationsByAnnonce"] : (function () { throw new RuntimeError('Variable "reservationsByAnnonce" does not exist.', 58, $this->source); })()))) {
            // line 59
            yield "                <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucune réservation</h3>
                    <p class=\"mt-2 text-gray-600\">Vous n'avez pas encore de réservations pour vos annonces.</p>
                </div>
            ";
        } else {
            // line 67
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationsByAnnonce"]) || array_key_exists("reservationsByAnnonce", $context) ? $context["reservationsByAnnonce"] : (function () { throw new RuntimeError('Variable "reservationsByAnnonce" does not exist.', 67, $this->source); })()));
            foreach ($context['_seq'] as $context["annonceId"] => $context["data"]) {
                // line 68
                yield "                    <div class=\"bg-gray-50 rounded-xl p-6 mb-8\">
                        <div class=\"flex justify-between items-start mb-6\">
                            <div>
                                ";
                // line 71
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "type", [], "any", true, true, false, 71) && (CoreExtension::getAttribute($this->env, $this->source, $context["data"], "type", [], "any", false, false, false, 71) == "EVENT"))) {
                    // line 72
                    yield "                                    ";
                    // line 73
                    yield "                                    <h2 class=\"text-xl font-semibold text-gray-800\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 73), "titre", [], "any", false, false, false, 73), "html", null, true);
                    yield "</h2>
                                    <p class=\"text-gray-600\">";
                    // line 74
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 74), "departurePoint", [], "any", false, false, false, 74), "html", null, true);
                    yield " → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 74), "arrivalPoint", [], "any", false, false, false, 74), "html", null, true);
                    yield "</p>
                                    <p class=\"text-sm text-gray-500\">";
                    // line 75
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 75), "departureDate", [], "any", false, false, false, 75), "d/m/Y à H:i"), "html", null, true);
                    yield "</p>
                                    <div class=\"text-xs text-primary font-medium mt-1\">
                                        <span class=\"bg-primary/10 rounded-md px-2 py-0.5\">Événement</span>
                                    </div>
                                ";
                } else {
                    // line 80
                    yield "                                    ";
                    // line 81
                    yield "                                    <h2 class=\"text-xl font-semibold text-gray-800\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 81), "titre", [], "any", false, false, false, 81), "html", null, true);
                    yield "</h2>
                                    <p class=\"text-gray-600\">";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 82), "trajet", [], "any", false, false, false, 82), "getDeparturePoint", [], "method", false, false, false, 82), "html", null, true);
                    yield " → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 82), "trajet", [], "any", false, false, false, 82), "getArrivalPoint", [], "method", false, false, false, 82), "html", null, true);
                    yield "</p>
                                    <p class=\"text-sm text-gray-500\">";
                    // line 83
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 83), "departureDate", [], "any", false, false, false, 83), "d/m/Y à H:i"), "html", null, true);
                    yield "</p>
                                ";
                }
                // line 85
                yield "                            </div>
                            <div class=\"text-right\">
                                <p class=\"text-sm text-gray-500\">Statut</p>
                                ";
                // line 88
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 88), "status", [], "any", false, false, false, 88) == "ouvert")) {
                    // line 89
                    yield "                                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">
                                        Ouvert
                                    </span>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 92
$context["data"], "annonce", [], "any", false, false, false, 92), "status", [], "any", false, false, false, 92) == "plein")) {
                    // line 93
                    yield "                                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800\">
                                        Plein
                                    </span>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 96
$context["data"], "annonce", [], "any", false, false, false, 96), "status", [], "any", false, false, false, 96) == "termine")) {
                    // line 97
                    yield "                                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800\">
                                        Terminé
                                    </span>
                                ";
                }
                // line 101
                yield "                            </div>
                        </div>
                        
                        ";
                // line 104
                if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "reservations", [], "any", false, false, false, 104))) {
                    // line 105
                    yield "                            <div class=\"text-center py-4 text-gray-500\">
                                Aucune réservation pour cette annonce.
                            </div>
                        ";
                } else {
                    // line 109
                    yield "                            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4\">
                                ";
                    // line 110
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "reservations", [], "any", false, false, false, 110));
                    foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                        // line 111
                        yield "                                    <div class=\"bg-white rounded-xl shadow-sm p-4\">
                                        <div class=\"flex items-center justify-between mb-3\">
                                            <div class=\"flex items-center\">
                                                <div class=\"h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 text-sm font-bold\">
                                                    ";
                        // line 115
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "passager", [], "any", true, true, false, 115)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "passager", [], "any", false, false, false, 115), "prenom", [], "any", false, false, false, 115))), "html", null, true)) : ("P"));
                        yield "
                                                </div>
                                                <div class=\"ml-3\">
                                                    <div class=\"text-sm font-medium text-gray-900\">
                                                        ";
                        // line 119
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "passager", [], "any", true, true, false, 119)) {
                            // line 120
                            yield "                                                            ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "passager", [], "any", false, false, false, 120), "prenom", [], "any", false, false, false, 120), "html", null, true);
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "passager", [], "any", false, false, false, 120), "nom", [], "any", false, false, false, 120), "html", null, true);
                            yield "
                                                        ";
                        } else {
                            // line 122
                            yield "                                                            Passager #";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "userId", [], "any", false, false, false, 122), "html", null, true);
                            yield "
                                                        ";
                        }
                        // line 124
                        yield "                                                    </div>
                                                </div>
                                            </div>
                                            
                                            ";
                        // line 128
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 128) == "PENDING")) {
                            // line 129
                            yield "                                                <span class=\"px-2 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full\">
                                                    En attente
                                                </span>
                                            ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 132
$context["reservation"], "status", [], "any", false, false, false, 132) == "ACCEPTED")) {
                            // line 133
                            yield "                                                <span class=\"px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">
                                                    Acceptée
                                                </span>
                                            ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 136
$context["reservation"], "status", [], "any", false, false, false, 136) == "REJECTED")) {
                            // line 137
                            yield "                                                <span class=\"px-2 py-1 bg-red-100 text-red-800 text-xs font-semibold rounded-full\">
                                                    Refusée
                                                </span>
                                            ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 140
$context["reservation"], "status", [], "any", false, false, false, 140) == "CANCELLED_BY_PASSENGER")) {
                            // line 141
                            yield "                                                <span class=\"px-2 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full\">
                                                    Annulée
                                                </span>
                                            ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 144
$context["reservation"], "status", [], "any", false, false, false, 144) == "COMPLETED")) {
                            // line 145
                            yield "                                                <span class=\"px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full\">
                                                    Terminée
                                                </span>
                                            ";
                        } else {
                            // line 149
                            yield "                                                <span class=\"px-2 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full\">
                                                    ";
                            // line 150
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 150), "html", null, true);
                            yield "
                                                </span>
                                            ";
                        }
                        // line 153
                        yield "                                        </div>
                                        
                                        <div class=\"space-y-2 mb-3\">
                                            <div class=\"flex items-start\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                                </svg>
                                                <span class=\"text-gray-700 text-xs\">";
                        // line 160
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 160), "d/m/Y à H:i"), "html", null, true);
                        yield "</span>
                                            </div>
                                            
                                            ";
                        // line 163
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "comment", [], "any", false, false, false, 163)) {
                            // line 164
                            yield "                                                <div class=\"flex items-start\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z\" />
                                                    </svg>
                                                    <div class=\"text-gray-700 text-xs\">
                                                        <span class=\"font-semibold\">Commentaire:</span> ";
                            // line 169
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "comment", [], "any", false, false, false, 169), "html", null, true);
                            yield "
                                                    </div>
                                                </div>
                                            ";
                        }
                        // line 173
                        yield "                                        </div>
                                        
                                        ";
                        // line 175
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 175) == "PENDING")) {
                            // line 176
                            yield "                                            <div class=\"flex gap-2\">
                                                ";
                            // line 177
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", true, true, false, 177) && (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 177) == "EVENT"))) {
                                // line 178
                                yield "                                                    <form action=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_accepter_reservation_event", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 178)]), "html", null, true);
                                yield "\" method=\"post\" class=\"flex-1\">
                                                        <button type=\"submit\" class=\"inline-flex items-center justify-center w-full px-3 py-1.5 bg-green-100 text-green-800 text-xs font-medium rounded-lg hover:bg-green-200 transition-colors duration-300\">
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                                                            </svg>
                                                            Accepter
                                                        </button>
                                                    </form>
                                                    <form action=\"";
                                // line 186
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_refuser_reservation_event", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 186)]), "html", null, true);
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
                                // line 195
                                yield "                                                    <form action=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_accepter_reservation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 195)]), "html", null, true);
                                yield "\" method=\"post\" class=\"flex-1\">
                                                        <button type=\"submit\" class=\"inline-flex items-center justify-center w-full px-3 py-1.5 bg-green-100 text-green-800 text-xs font-medium rounded-lg hover:bg-green-200 transition-colors duration-300\">
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                                                            </svg>
                                                            Accepter
                                                        </button>
                                                    </form>
                                                    <form action=\"";
                                // line 203
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_refuser_reservation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 203)]), "html", null, true);
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
                            // line 212
                            yield "                                            </div>
                                        ";
                        } else {
                            // line 214
                            yield "                                            <div class=\"flex flex-col gap-2\">
                                                ";
                            // line 215
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 215) == "ACCEPTED")) {
                                // line 216
                                yield "                                                    <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chat_conversation", ["reservationId" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 216), "type" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 216)]), "html", null, true);
                                yield "\" class=\"inline-flex items-center justify-center w-full px-3 py-1.5 bg-primary text-white text-xs font-medium rounded-lg hover:bg-primary-dark transition-colors duration-300\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z\" />
                                                        </svg>
                                                        Discuter
                                                    </a>
                                                ";
                            }
                            // line 223
                            yield "                                                <p class=\"text-xs text-gray-400 text-center\">Aucune autre action disponible</p>
                                            </div>
                                        ";
                        }
                        // line 226
                        yield "                                    </div>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 228
                    yield "                            </div>
                        ";
                }
                // line 230
                yield "                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['annonceId'], $context['data'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            yield "            ";
        }
        // line 233
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
        return array (  559 => 233,  556 => 232,  549 => 230,  545 => 228,  538 => 226,  533 => 223,  522 => 216,  520 => 215,  517 => 214,  513 => 212,  501 => 203,  489 => 195,  477 => 186,  465 => 178,  463 => 177,  460 => 176,  458 => 175,  454 => 173,  447 => 169,  440 => 164,  438 => 163,  432 => 160,  423 => 153,  417 => 150,  414 => 149,  408 => 145,  406 => 144,  401 => 141,  399 => 140,  394 => 137,  392 => 136,  387 => 133,  385 => 132,  380 => 129,  378 => 128,  372 => 124,  366 => 122,  358 => 120,  356 => 119,  349 => 115,  343 => 111,  339 => 110,  336 => 109,  330 => 105,  328 => 104,  323 => 101,  317 => 97,  315 => 96,  310 => 93,  308 => 92,  303 => 89,  301 => 88,  296 => 85,  291 => 83,  285 => 82,  280 => 81,  278 => 80,  270 => 75,  264 => 74,  259 => 73,  257 => 72,  255 => 71,  250 => 68,  245 => 67,  235 => 59,  233 => 58,  220 => 52,  216 => 51,  206 => 48,  202 => 47,  192 => 44,  188 => 43,  178 => 40,  174 => 39,  164 => 36,  160 => 35,  153 => 30,  144 => 27,  141 => 26,  137 => 25,  134 => 24,  125 => 21,  122 => 20,  118 => 19,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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

            <!-- Filtres -->
            <div class=\"flex items-center mb-6 bg-gray-50 rounded-xl p-4\">
                <span class=\"font-medium text-gray-700 mr-3\">Filtrer par statut :</span>
                <div class=\"flex space-x-2\">
                    <a href=\"{{ path('app_conducteur_reservations', {'status': 'all'}) }}\" 
                       class=\"px-3 py-1 rounded-full text-sm {% if statusFilter == 'all' %}bg-primary text-white{% else %}bg-gray-200 text-gray-700 hover:bg-gray-300{% endif %}\">
                        Tous
                    </a>
                    <a href=\"{{ path('app_conducteur_reservations', {'status': 'PENDING'}) }}\" 
                       class=\"px-3 py-1 rounded-full text-sm {% if statusFilter == 'PENDING' %}bg-yellow-500 text-white{% else %}bg-yellow-100 text-yellow-800 hover:bg-yellow-200{% endif %}\">
                        En attente
                    </a>
                    <a href=\"{{ path('app_conducteur_reservations', {'status': 'ACCEPTED'}) }}\" 
                       class=\"px-3 py-1 rounded-full text-sm {% if statusFilter == 'ACCEPTED' %}bg-green-500 text-white{% else %}bg-green-100 text-green-800 hover:bg-green-200{% endif %}\">
                        Acceptées
                    </a>
                    <a href=\"{{ path('app_conducteur_reservations', {'status': 'REJECTED'}) }}\" 
                       class=\"px-3 py-1 rounded-full text-sm {% if statusFilter == 'REJECTED' %}bg-red-500 text-white{% else %}bg-red-100 text-red-800 hover:bg-red-200{% endif %}\">
                        Refusées
                    </a>
                    <a href=\"{{ path('app_conducteur_reservations', {'status': 'COMPLETED'}) }}\" 
                       class=\"px-3 py-1 rounded-full text-sm {% if statusFilter == 'COMPLETED' %}bg-blue-500 text-white{% else %}bg-blue-100 text-blue-800 hover:bg-blue-200{% endif %}\">
                        Terminées
                    </a>
                </div>
            </div>

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
{% endblock %} ", "conducteur/reservations.html.twig", "D:\\Covoituni_web-master\\templates\\conducteur\\reservations.html.twig");
    }
}
