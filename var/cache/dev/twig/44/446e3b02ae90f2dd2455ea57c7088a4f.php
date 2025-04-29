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

/* conducteur/reservations_event.html.twig */
class __TwigTemplate_77b6e9778d9939d98a8261a68b874cf9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/reservations_event.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/reservations_event.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/reservations_event.html.twig", 1);
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

        yield "Gérer les Réservations d'Événements - Conducteur";
        
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
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Gestion des réservations d'événements</h1>
                    <p class=\"text-gray-600\">Consultez et gérez les réservations pour vos annonces d'événements.</p>
                </div>
                <div class=\"flex space-x-3\">
                    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_events");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                        </svg>
                        Voir les événements
                    </a>
                    <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_reservations");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                        </svg>
                        Réservations de trajets
                    </a>
                </div>
            </div>

            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", ["success"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            yield "                <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "            
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "flashes", ["error"], "method", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 36
            yield "                <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "
            <div class=\"bg-blue-50 border-l-4 border-blue-500 text-blue-700 p-4 mb-6 rounded\" role=\"alert\">
                <p><i class=\"fas fa-info-circle mr-2\"></i> Lorsque vous acceptez une réservation, le passager sera automatiquement ajouté à la liste des participants de l'événement correspondant.</p>
            </div>

            ";
        // line 45
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservationsByAnnonce"]) || array_key_exists("reservationsByAnnonce", $context) ? $context["reservationsByAnnonce"] : (function () { throw new RuntimeError('Variable "reservationsByAnnonce" does not exist.', 45, $this->source); })()))) {
            // line 46
            yield "                <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucune réservation</h3>
                    <p class=\"mt-2 text-gray-600\">Vous n'avez pas encore de réservations pour vos annonces d'événements.</p>
                </div>
            ";
        } else {
            // line 54
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationsByAnnonce"]) || array_key_exists("reservationsByAnnonce", $context) ? $context["reservationsByAnnonce"] : (function () { throw new RuntimeError('Variable "reservationsByAnnonce" does not exist.', 54, $this->source); })()));
            foreach ($context['_seq'] as $context["annonceId"] => $context["data"]) {
                // line 55
                yield "                    <div class=\"bg-gray-50 rounded-xl p-6 mb-8\">
                        <div class=\"flex justify-between items-start mb-4\">
                            <div>
                                <h2 class=\"text-xl font-semibold text-gray-800\">";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 58), "titre", [], "any", false, false, false, 58), "html", null, true);
                yield "</h2>
                                <p class=\"text-gray-600\">";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 59), "departurePoint", [], "any", false, false, false, 59), "html", null, true);
                yield " → ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 59), "arrivalPoint", [], "any", false, false, false, 59), "html", null, true);
                yield "</p>
                                <div class=\"flex items-center mt-1\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-500 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                    </svg>
                                    <span class=\"text-sm text-gray-500\">";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 64), "departureDate", [], "any", false, false, false, 64), "d/m/Y à H:i"), "html", null, true);
                yield "</span>
                                </div>
                                <div class=\"text-sm text-gray-500 mt-1\">
                                    <span class=\"font-medium\">Événement:</span> ";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 67), "event", [], "any", false, false, false, 67), "nom", [], "any", false, false, false, 67), "html", null, true);
                yield "
                                </div>
                                <div class=\"text-sm text-gray-500 mt-1\">
                                    <span class=\"font-medium\">Prix:</span> ";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 70), "prix", [], "any", false, false, false, 70), "html", null, true);
                yield " DT
                                </div>
                            </div>
                            <div class=\"text-right\">
                                <p class=\"text-sm text-gray-500\">Statut</p>
                                ";
                // line 75
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "annonce", [], "any", false, false, false, 75), "status", [], "any", false, false, false, 75) == "ouvert")) {
                    // line 76
                    yield "                                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">
                                        Ouvert
                                    </span>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 79
$context["data"], "annonce", [], "any", false, false, false, 79), "status", [], "any", false, false, false, 79) == "plein")) {
                    // line 80
                    yield "                                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800\">
                                        Plein
                                    </span>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 83
$context["data"], "annonce", [], "any", false, false, false, 83), "status", [], "any", false, false, false, 83) == "termine")) {
                    // line 84
                    yield "                                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800\">
                                        Terminé
                                    </span>
                                ";
                }
                // line 88
                yield "                            </div>
                        </div>
                        
                        ";
                // line 91
                if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "reservations", [], "any", false, false, false, 91))) {
                    // line 92
                    yield "                            <div class=\"text-center py-4 text-gray-500\">
                                Aucune réservation pour cette annonce.
                            </div>
                        ";
                } else {
                    // line 96
                    yield "                            <div class=\"overflow-x-auto\">
                                <table class=\"min-w-full divide-y divide-gray-200\">
                                    <thead class=\"bg-gray-100\">
                                        <tr>
                                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Passager</th>
                                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Date de réservation</th>
                                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Statut</th>
                                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class=\"bg-white divide-y divide-gray-200\">
                                        ";
                    // line 107
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "reservations", [], "any", false, false, false, 107));
                    foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                        // line 108
                        yield "                                            <tr>
                                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                                    <div class=\"flex items-center\">
                                                        <div class=\"h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 text-sm font-bold\">
                                                            ";
                        // line 112
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "passager", [], "any", true, true, false, 112)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "passager", [], "any", false, false, false, 112), "prenom", [], "any", false, false, false, 112))), "html", null, true)) : ("P"));
                        yield "
                                                        </div>
                                                        <div class=\"ml-3\">
                                                            <div class=\"text-sm font-medium text-gray-900\">
                                                                ";
                        // line 116
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "passager", [], "any", true, true, false, 116)) {
                            // line 117
                            yield "                                                                    ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "passager", [], "any", false, false, false, 117), "prenom", [], "any", false, false, false, 117), "html", null, true);
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "passager", [], "any", false, false, false, 117), "nom", [], "any", false, false, false, 117), "html", null, true);
                            yield "
                                                                ";
                        } else {
                            // line 119
                            yield "                                                                    Passager #";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "userId", [], "any", false, false, false, 119), "html", null, true);
                            yield "
                                                                ";
                        }
                        // line 121
                        yield "                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                                    <div class=\"text-sm text-gray-900\">
                                                        ";
                        // line 127
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 127), "d/m/Y"), "html", null, true);
                        yield "
                                                    </div>
                                                    <div class=\"text-xs text-gray-500\">
                                                        ";
                        // line 130
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 130), "H:i"), "html", null, true);
                        yield "
                                                    </div>
                                                </td>
                                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                                    ";
                        // line 134
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 134) == "PENDING")) {
                            // line 135
                            yield "                                                        <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800\">
                                                            En attente
                                                        </span>
                                                    ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 138
$context["reservation"], "status", [], "any", false, false, false, 138) == "ACCEPTED")) {
                            // line 139
                            yield "                                                        <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">
                                                            Acceptée
                                                        </span>
                                                    ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 142
$context["reservation"], "status", [], "any", false, false, false, 142) == "REJECTED")) {
                            // line 143
                            yield "                                                        <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800\">
                                                            Refusée
                                                        </span>
                                                    ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 146
$context["reservation"], "status", [], "any", false, false, false, 146) == "CANCELLED_BY_PASSENGER")) {
                            // line 147
                            yield "                                                        <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800\">
                                                            Annulée par passager
                                                        </span>
                                                    ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 150
$context["reservation"], "status", [], "any", false, false, false, 150) == "COMPLETED")) {
                            // line 151
                            yield "                                                        <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800\">
                                                            Terminée
                                                        </span>
                                                    ";
                        } else {
                            // line 155
                            yield "                                                        <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800\">
                                                            ";
                            // line 156
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 156), "html", null, true);
                            yield "
                                                        </span>
                                                    ";
                        }
                        // line 159
                        yield "                                                </td>
                                                <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium\">
                                                    ";
                        // line 161
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 161) == "PENDING")) {
                            // line 162
                            yield "                                                        <div class=\"flex space-x-2\">
                                                            <form action=\"";
                            // line 163
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_accepter_reservation_event", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 163)]), "html", null, true);
                            yield "\" method=\"POST\" class=\"inline\">
                                                                <button type=\"submit\" class=\"text-green-500 hover:text-green-700\"
                                                                        onclick=\"return confirm('Êtes-vous sûr de vouloir accepter cette réservation?')\">
                                                                    <i class=\"fas fa-check-circle mr-1\"></i> Accepter
                                                                </button>
                                                            </form>
                                                            <form action=\"";
                            // line 169
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_refuser_reservation_event", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 169)]), "html", null, true);
                            yield "\" method=\"POST\" class=\"inline\">
                                                                <button type=\"submit\" class=\"text-red-500 hover:text-red-700\"
                                                                        onclick=\"return confirm('Êtes-vous sûr de vouloir refuser cette réservation?')\">
                                                                    <i class=\"fas fa-times-circle mr-1\"></i> Refuser
                                                                </button>
                                                            </form>
                                                        </div>
                                                    ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 176
$context["reservation"], "status", [], "any", false, false, false, 176) == "ACCEPTED")) {
                            // line 177
                            yield "                                                        <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chat_conversation", ["reservationId" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 177), "type" => "EVENT"]), "html", null, true);
                            yield "\" class=\"inline-flex items-center text-primary hover:text-primary-dark\">
                                                            <i class=\"fas fa-comments mr-1\"></i> Discuter
                                                        </a>
                                                    ";
                        } else {
                            // line 181
                            yield "                                                        <span class=\"text-gray-400\">Aucune action disponible</span>
                                                    ";
                        }
                        // line 183
                        yield "                                                </td>
                                            </tr>
                                            ";
                        // line 185
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "comment", [], "any", false, false, false, 185)) {
                            // line 186
                            yield "                                                <tr class=\"bg-gray-50\">
                                                    <td colspan=\"4\" class=\"px-6 py-2 text-xs text-gray-600\">
                                                        <div class=\"flex items-start\">
                                                            <i class=\"fas fa-comment-alt mt-1 mr-2\"></i>
                                                            <div>
                                                                <span class=\"font-semibold\">Commentaire:</span> ";
                            // line 191
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "comment", [], "any", false, false, false, 191), "html", null, true);
                            yield "
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ";
                        }
                        // line 197
                        yield "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 198
                    yield "                                    </tbody>
                                </table>
                            </div>
                        ";
                }
                // line 202
                yield "                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['annonceId'], $context['data'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            yield "            ";
        }
        // line 205
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
        return "conducteur/reservations_event.html.twig";
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
        return array (  462 => 205,  459 => 204,  452 => 202,  446 => 198,  440 => 197,  431 => 191,  424 => 186,  422 => 185,  418 => 183,  414 => 181,  406 => 177,  404 => 176,  394 => 169,  385 => 163,  382 => 162,  380 => 161,  376 => 159,  370 => 156,  367 => 155,  361 => 151,  359 => 150,  354 => 147,  352 => 146,  347 => 143,  345 => 142,  340 => 139,  338 => 138,  333 => 135,  331 => 134,  324 => 130,  318 => 127,  310 => 121,  304 => 119,  296 => 117,  294 => 116,  287 => 112,  281 => 108,  277 => 107,  264 => 96,  258 => 92,  256 => 91,  251 => 88,  245 => 84,  243 => 83,  238 => 80,  236 => 79,  231 => 76,  229 => 75,  221 => 70,  215 => 67,  209 => 64,  199 => 59,  195 => 58,  190 => 55,  185 => 54,  175 => 46,  173 => 45,  166 => 40,  157 => 37,  154 => 36,  150 => 35,  147 => 34,  138 => 31,  135 => 30,  131 => 29,  119 => 20,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Gérer les Réservations d'Événements - Conducteur{% endblock %}

{% block content %}
    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"flex justify-between items-center mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Gestion des réservations d'événements</h1>
                    <p class=\"text-gray-600\">Consultez et gérez les réservations pour vos annonces d'événements.</p>
                </div>
                <div class=\"flex space-x-3\">
                    <a href=\"{{ path('app_conducteur_events') }}\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                        </svg>
                        Voir les événements
                    </a>
                    <a href=\"{{ path('app_conducteur_reservations') }}\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                        </svg>
                        Réservations de trajets
                    </a>
                </div>
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

            <div class=\"bg-blue-50 border-l-4 border-blue-500 text-blue-700 p-4 mb-6 rounded\" role=\"alert\">
                <p><i class=\"fas fa-info-circle mr-2\"></i> Lorsque vous acceptez une réservation, le passager sera automatiquement ajouté à la liste des participants de l'événement correspondant.</p>
            </div>

            {% if reservationsByAnnonce is empty %}
                <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucune réservation</h3>
                    <p class=\"mt-2 text-gray-600\">Vous n'avez pas encore de réservations pour vos annonces d'événements.</p>
                </div>
            {% else %}
                {% for annonceId, data in reservationsByAnnonce %}
                    <div class=\"bg-gray-50 rounded-xl p-6 mb-8\">
                        <div class=\"flex justify-between items-start mb-4\">
                            <div>
                                <h2 class=\"text-xl font-semibold text-gray-800\">{{ data.annonce.titre }}</h2>
                                <p class=\"text-gray-600\">{{ data.annonce.departurePoint }} → {{ data.annonce.arrivalPoint }}</p>
                                <div class=\"flex items-center mt-1\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-500 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                    </svg>
                                    <span class=\"text-sm text-gray-500\">{{ data.annonce.departureDate|date('d/m/Y à H:i') }}</span>
                                </div>
                                <div class=\"text-sm text-gray-500 mt-1\">
                                    <span class=\"font-medium\">Événement:</span> {{ data.annonce.event.nom }}
                                </div>
                                <div class=\"text-sm text-gray-500 mt-1\">
                                    <span class=\"font-medium\">Prix:</span> {{ data.annonce.prix }} DT
                                </div>
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
                            <div class=\"overflow-x-auto\">
                                <table class=\"min-w-full divide-y divide-gray-200\">
                                    <thead class=\"bg-gray-100\">
                                        <tr>
                                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Passager</th>
                                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Date de réservation</th>
                                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Statut</th>
                                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class=\"bg-white divide-y divide-gray-200\">
                                        {% for reservation in data.reservations %}
                                            <tr>
                                                <td class=\"px-6 py-4 whitespace-nowrap\">
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
                                                </td>
                                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                                    <div class=\"text-sm text-gray-900\">
                                                        {{ reservation.dateReservation|date(\"d/m/Y\") }}
                                                    </div>
                                                    <div class=\"text-xs text-gray-500\">
                                                        {{ reservation.dateReservation|date(\"H:i\") }}
                                                    </div>
                                                </td>
                                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                                    {% if reservation.status == 'PENDING' %}
                                                        <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800\">
                                                            En attente
                                                        </span>
                                                    {% elseif reservation.status == 'ACCEPTED' %}
                                                        <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">
                                                            Acceptée
                                                        </span>
                                                    {% elseif reservation.status == 'REJECTED' %}
                                                        <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800\">
                                                            Refusée
                                                        </span>
                                                    {% elseif reservation.status == 'CANCELLED_BY_PASSENGER' %}
                                                        <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800\">
                                                            Annulée par passager
                                                        </span>
                                                    {% elseif reservation.status == 'COMPLETED' %}
                                                        <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800\">
                                                            Terminée
                                                        </span>
                                                    {% else %}
                                                        <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800\">
                                                            {{ reservation.status }}
                                                        </span>
                                                    {% endif %}
                                                </td>
                                                <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium\">
                                                    {% if reservation.status == 'PENDING' %}
                                                        <div class=\"flex space-x-2\">
                                                            <form action=\"{{ path('app_conducteur_accepter_reservation_event', {'id': reservation.id}) }}\" method=\"POST\" class=\"inline\">
                                                                <button type=\"submit\" class=\"text-green-500 hover:text-green-700\"
                                                                        onclick=\"return confirm('Êtes-vous sûr de vouloir accepter cette réservation?')\">
                                                                    <i class=\"fas fa-check-circle mr-1\"></i> Accepter
                                                                </button>
                                                            </form>
                                                            <form action=\"{{ path('app_conducteur_refuser_reservation_event', {'id': reservation.id}) }}\" method=\"POST\" class=\"inline\">
                                                                <button type=\"submit\" class=\"text-red-500 hover:text-red-700\"
                                                                        onclick=\"return confirm('Êtes-vous sûr de vouloir refuser cette réservation?')\">
                                                                    <i class=\"fas fa-times-circle mr-1\"></i> Refuser
                                                                </button>
                                                            </form>
                                                        </div>
                                                    {% elseif reservation.status == 'ACCEPTED' %}
                                                        <a href=\"{{ path('app_chat_conversation', {'reservationId': reservation.id, 'type': 'EVENT'}) }}\" class=\"inline-flex items-center text-primary hover:text-primary-dark\">
                                                            <i class=\"fas fa-comments mr-1\"></i> Discuter
                                                        </a>
                                                    {% else %}
                                                        <span class=\"text-gray-400\">Aucune action disponible</span>
                                                    {% endif %}
                                                </td>
                                            </tr>
                                            {% if reservation.comment %}
                                                <tr class=\"bg-gray-50\">
                                                    <td colspan=\"4\" class=\"px-6 py-2 text-xs text-gray-600\">
                                                        <div class=\"flex items-start\">
                                                            <i class=\"fas fa-comment-alt mt-1 mr-2\"></i>
                                                            <div>
                                                                <span class=\"font-semibold\">Commentaire:</span> {{ reservation.comment }}
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        {% endif %}
                    </div>
                {% endfor %}
            {% endif %}
        </div>
    </div>
{% endblock %} ", "conducteur/reservations_event.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\reservations_event.html.twig");
    }
}
