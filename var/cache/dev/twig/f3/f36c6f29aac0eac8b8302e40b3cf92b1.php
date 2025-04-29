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

/* admin/annonce_event/show.html.twig */
class __TwigTemplate_0f9a3d75fe105a21851e47a9dc999cf6 extends Template
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
        return "layouts/admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/annonce_event/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/annonce_event/show.html.twig"));

        $this->parent = $this->loadTemplate("layouts/admin_layout.html.twig", "admin/annonce_event/show.html.twig", 1);
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

        yield "Détails de l'Annonce d'Événement";
        
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
        yield "<div class=\"container mx-auto px-4 sm:px-8\">
    <div class=\"py-8\">
        <div class=\"mb-6 flex justify-between items-center\">
            <h2 class=\"text-2xl font-semibold text-gray-800\">Détails de l'Annonce #";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        yield "</h2>
            <div>
                <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonce_event_index");
        yield "\" class=\"px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200\">
                    <i class=\"fas fa-arrow-left mr-1\"></i> Retour à la liste
                </a>
                <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonce_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\" class=\"px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 ml-2\">
                    <i class=\"fas fa-edit mr-1\"></i> Modifier
                </a>
            </div>
        </div>

        <div class=\"bg-white shadow-md rounded-lg overflow-hidden\">
            <div class=\"px-6 py-4 border-b border-gray-200\">
                <h3 class=\"text-xl font-semibold text-gray-800\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 22, $this->source); })()), "titre", [], "any", false, false, false, 22), "html", null, true);
        yield "</h3>
                <div class=\"mt-2 flex items-center text-sm text-gray-600\">
                    <span class=\"mr-2\">
                        <i class=\"fas fa-calendar-alt\"></i> Créée le ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 25, $this->source); })()), "createdAt", [], "any", false, false, false, 25), "d/m/Y H:i"), "html", null, true);
        yield "
                    </span>
                    ";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 27, $this->source); })()), "updatedAt", [], "any", false, false, false, 27)) {
            // line 28
            yield "                        <span>
                            <i class=\"fas fa-edit\"></i> Mise à jour le ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 29, $this->source); })()), "updatedAt", [], "any", false, false, false, 29), "d/m/Y H:i"), "html", null, true);
            yield "
                        </span>
                    ";
        }
        // line 32
        yield "                </div>
            </div>

            <div class=\"px-6 py-4 grid grid-cols-1 md:grid-cols-2 gap-4\">
                <div>
                    <h4 class=\"text-lg font-semibold text-gray-700 mb-3\">Informations générales</h4>
                    <div class=\"space-y-2\">
                        <div>
                            <span class=\"font-medium\">Événement associé:</span> 
                            ";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 41, $this->source); })()), "event", [], "any", false, false, false, 41)) {
            // line 42
            yield "                                <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 42, $this->source); })()), "event", [], "any", false, false, false, 42), "nom", [], "any", false, false, false, 42), "html", null, true);
            yield "</span>
                            ";
        } else {
            // line 44
            yield "                                <span class=\"text-gray-400\">Non défini</span>
                            ";
        }
        // line 46
        yield "                        </div>
                        <div>
                            <span class=\"font-medium\">Description:</span> 
                            <p class=\"text-gray-700 mt-1\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), "html", null, true);
        yield "</p>
                        </div>
                        <div>
                            <span class=\"font-medium\">Statut:</span> 
                            ";
        // line 53
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 53, $this->source); })()), "status", [], "any", false, false, false, 53) == "ouvert")) {
            // line 54
            yield "                                <span class=\"px-2 py-1 bg-green-100 text-green-800 rounded-full\">Ouvert</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 55
(isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 55, $this->source); })()), "status", [], "any", false, false, false, 55) == "plein")) {
            // line 56
            yield "                                <span class=\"px-2 py-1 bg-blue-100 text-blue-800 rounded-full\">Plein</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 57
(isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 57, $this->source); })()), "status", [], "any", false, false, false, 57) == "termine")) {
            // line 58
            yield "                                <span class=\"px-2 py-1 bg-gray-100 text-gray-800 rounded-full\">Terminé</span>
                            ";
        } else {
            // line 60
            yield "                                <span class=\"px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 60, $this->source); })()), "status", [], "any", false, false, false, 60), "html", null, true);
            yield "</span>
                            ";
        }
        // line 62
        yield "                        </div>
                    </div>
                </div>

                <div>
                    <h4 class=\"text-lg font-semibold text-gray-700 mb-3\">Détails du trajet</h4>
                    <div class=\"space-y-2\">
                        <div>
                            <span class=\"font-medium\">Départ:</span> ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 70, $this->source); })()), "departurePoint", [], "any", false, false, false, 70), "html", null, true);
        yield "
                        </div>
                        <div>
                            <span class=\"font-medium\">Arrivée:</span> ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 73, $this->source); })()), "arrivalPoint", [], "any", false, false, false, 73), "html", null, true);
        yield "
                        </div>
                        <div>
                            <span class=\"font-medium\">Date de départ:</span> 
                            ";
        // line 77
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 77, $this->source); })()), "departureDate", [], "any", false, false, false, 77)) {
            // line 78
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 78, $this->source); })()), "departureDate", [], "any", false, false, false, 78), "d/m/Y H:i"), "html", null, true);
            yield "
                            ";
        } else {
            // line 80
            yield "                                <span class=\"text-gray-400\">Non définie</span>
                            ";
        }
        // line 82
        yield "                        </div>
                        <div>
                            <span class=\"font-medium\">Prix:</span> ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 84, $this->source); })()), "price", [], "any", false, false, false, 84), "html", null, true);
        yield " €
                        </div>
                        <div>
                            <span class=\"font-medium\">Places disponibles:</span> ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 87, $this->source); })()), "availableSeats", [], "any", false, false, false, 87), "html", null, true);
        yield "
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"px-6 py-4 border-t border-gray-200\">
                <h4 class=\"text-lg font-semibold text-gray-700 mb-3\">Conducteur et Véhicule</h4>
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
                    <div>
                        <span class=\"font-medium\">Conducteur:</span> 
                        ";
        // line 98
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 98, $this->source); })()), "driver", [], "any", false, false, false, 98)) {
            // line 99
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 99, $this->source); })()), "driver", [], "any", false, false, false, 99), "firstname", [], "any", false, false, false, 99), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 99, $this->source); })()), "driver", [], "any", false, false, false, 99), "lastname", [], "any", false, false, false, 99), "html", null, true);
            yield "
                            <span class=\"text-gray-500\">(";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 100, $this->source); })()), "driver", [], "any", false, false, false, 100), "email", [], "any", false, false, false, 100), "html", null, true);
            yield ")</span>
                        ";
        } else {
            // line 102
            yield "                            <span class=\"text-gray-400\">Non défini</span>
                        ";
        }
        // line 104
        yield "                    </div>
                    <div>
                        <span class=\"font-medium\">Véhicule:</span> 
                        ";
        // line 107
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 107, $this->source); })()), "car", [], "any", false, false, false, 107)) {
            // line 108
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 108, $this->source); })()), "car", [], "any", false, false, false, 108), "marque", [], "any", false, false, false, 108), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 108, $this->source); })()), "car", [], "any", false, false, false, 108), "modele", [], "any", false, false, false, 108), "html", null, true);
            yield "
                        ";
        } else {
            // line 110
            yield "                            <span class=\"text-gray-400\">Non défini</span>
                        ";
        }
        // line 112
        yield "                    </div>
                </div>
            </div>

            ";
        // line 116
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["annonce"] ?? null), "reservations", [], "any", true, true, false, 116) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 116, $this->source); })()), "reservations", [], "any", false, false, false, 116)) > 0))) {
            // line 117
            yield "            <div class=\"px-6 py-4 border-t border-gray-200\">
                <h4 class=\"text-lg font-semibold text-gray-700 mb-3\">Réservations (";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 118, $this->source); })()), "reservations", [], "any", false, false, false, 118)), "html", null, true);
            yield ")</h4>
                <div class=\"overflow-x-auto\">
                    <table class=\"min-w-full leading-normal\">
                        <thead>
                            <tr>
                                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                    ID
                                </th>
                                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                    Passager
                                </th>
                                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                    Date de réservation
                                </th>
                                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                    Statut
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 138, $this->source); })()), "reservations", [], "any", false, false, false, 138));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 139
                yield "                            <tr>
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    ";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 141), "html", null, true);
                yield "
                                </td>
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    ";
                // line 144
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 144)) {
                    // line 145
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 145), "firstname", [], "any", false, false, false, 145), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 145), "lastname", [], "any", false, false, false, 145), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 147
                    yield "                                        <span class=\"text-gray-400\">Utilisateur inconnu</span>
                                    ";
                }
                // line 149
                yield "                                </td>
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    ";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 151), "d/m/Y H:i"), "html", null, true);
                yield "
                                </td>
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    ";
                // line 154
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 154) == "PENDING")) {
                    // line 155
                    yield "                                        <span class=\"px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full\">En attente</span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 156
$context["reservation"], "status", [], "any", false, false, false, 156) == "ACCEPTED")) {
                    // line 157
                    yield "                                        <span class=\"px-2 py-1 bg-green-100 text-green-800 rounded-full\">Acceptée</span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 158
$context["reservation"], "status", [], "any", false, false, false, 158) == "REJECTED")) {
                    // line 159
                    yield "                                        <span class=\"px-2 py-1 bg-red-100 text-red-800 rounded-full\">Refusée</span>
                                    ";
                } else {
                    // line 161
                    yield "                                        <span class=\"px-2 py-1 bg-gray-100 text-gray-800 rounded-full\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 161), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 163
                yield "                                </td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            yield "                        </tbody>
                    </table>
                </div>
            </div>
            ";
        }
        // line 171
        yield "            
            <div class=\"px-6 py-4 border-t border-gray-200 bg-gray-50\">
                <form method=\"post\" action=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonce_event_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 173, $this->source); })()), "id", [], "any", false, false, false, 173)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 174, $this->source); })()), "id", [], "any", false, false, false, 174))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600\">
                        <i class=\"fas fa-trash mr-1\"></i> Supprimer cette annonce
                    </button>
                </form>
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
        return "admin/annonce_event/show.html.twig";
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
        return array (  419 => 174,  415 => 173,  411 => 171,  404 => 166,  396 => 163,  390 => 161,  386 => 159,  384 => 158,  381 => 157,  379 => 156,  376 => 155,  374 => 154,  368 => 151,  364 => 149,  360 => 147,  352 => 145,  350 => 144,  344 => 141,  340 => 139,  336 => 138,  313 => 118,  310 => 117,  308 => 116,  302 => 112,  298 => 110,  290 => 108,  288 => 107,  283 => 104,  279 => 102,  274 => 100,  267 => 99,  265 => 98,  251 => 87,  245 => 84,  241 => 82,  237 => 80,  231 => 78,  229 => 77,  222 => 73,  216 => 70,  206 => 62,  200 => 60,  196 => 58,  194 => 57,  191 => 56,  189 => 55,  186 => 54,  184 => 53,  177 => 49,  172 => 46,  168 => 44,  162 => 42,  160 => 41,  149 => 32,  143 => 29,  140 => 28,  138 => 27,  133 => 25,  127 => 22,  116 => 14,  110 => 11,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/admin_layout.html.twig' %}

{% block title %}Détails de l'Annonce d'Événement{% endblock %}

{% block content %}
<div class=\"container mx-auto px-4 sm:px-8\">
    <div class=\"py-8\">
        <div class=\"mb-6 flex justify-between items-center\">
            <h2 class=\"text-2xl font-semibold text-gray-800\">Détails de l'Annonce #{{ annonce.id }}</h2>
            <div>
                <a href=\"{{ path('app_admin_annonce_event_index') }}\" class=\"px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200\">
                    <i class=\"fas fa-arrow-left mr-1\"></i> Retour à la liste
                </a>
                <a href=\"{{ path('app_admin_annonce_event_edit', {'id': annonce.id}) }}\" class=\"px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 ml-2\">
                    <i class=\"fas fa-edit mr-1\"></i> Modifier
                </a>
            </div>
        </div>

        <div class=\"bg-white shadow-md rounded-lg overflow-hidden\">
            <div class=\"px-6 py-4 border-b border-gray-200\">
                <h3 class=\"text-xl font-semibold text-gray-800\">{{ annonce.titre }}</h3>
                <div class=\"mt-2 flex items-center text-sm text-gray-600\">
                    <span class=\"mr-2\">
                        <i class=\"fas fa-calendar-alt\"></i> Créée le {{ annonce.createdAt|date('d/m/Y H:i') }}
                    </span>
                    {% if annonce.updatedAt %}
                        <span>
                            <i class=\"fas fa-edit\"></i> Mise à jour le {{ annonce.updatedAt|date('d/m/Y H:i') }}
                        </span>
                    {% endif %}
                </div>
            </div>

            <div class=\"px-6 py-4 grid grid-cols-1 md:grid-cols-2 gap-4\">
                <div>
                    <h4 class=\"text-lg font-semibold text-gray-700 mb-3\">Informations générales</h4>
                    <div class=\"space-y-2\">
                        <div>
                            <span class=\"font-medium\">Événement associé:</span> 
                            {% if annonce.event %}
                                <span>{{ annonce.event.nom }}</span>
                            {% else %}
                                <span class=\"text-gray-400\">Non défini</span>
                            {% endif %}
                        </div>
                        <div>
                            <span class=\"font-medium\">Description:</span> 
                            <p class=\"text-gray-700 mt-1\">{{ annonce.description }}</p>
                        </div>
                        <div>
                            <span class=\"font-medium\">Statut:</span> 
                            {% if annonce.status == 'ouvert' %}
                                <span class=\"px-2 py-1 bg-green-100 text-green-800 rounded-full\">Ouvert</span>
                            {% elseif annonce.status == 'plein' %}
                                <span class=\"px-2 py-1 bg-blue-100 text-blue-800 rounded-full\">Plein</span>
                            {% elseif annonce.status == 'termine' %}
                                <span class=\"px-2 py-1 bg-gray-100 text-gray-800 rounded-full\">Terminé</span>
                            {% else %}
                                <span class=\"px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full\">{{ annonce.status }}</span>
                            {% endif %}
                        </div>
                    </div>
                </div>

                <div>
                    <h4 class=\"text-lg font-semibold text-gray-700 mb-3\">Détails du trajet</h4>
                    <div class=\"space-y-2\">
                        <div>
                            <span class=\"font-medium\">Départ:</span> {{ annonce.departurePoint }}
                        </div>
                        <div>
                            <span class=\"font-medium\">Arrivée:</span> {{ annonce.arrivalPoint }}
                        </div>
                        <div>
                            <span class=\"font-medium\">Date de départ:</span> 
                            {% if annonce.departureDate %}
                                {{ annonce.departureDate|date('d/m/Y H:i') }}
                            {% else %}
                                <span class=\"text-gray-400\">Non définie</span>
                            {% endif %}
                        </div>
                        <div>
                            <span class=\"font-medium\">Prix:</span> {{ annonce.price }} €
                        </div>
                        <div>
                            <span class=\"font-medium\">Places disponibles:</span> {{ annonce.availableSeats }}
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"px-6 py-4 border-t border-gray-200\">
                <h4 class=\"text-lg font-semibold text-gray-700 mb-3\">Conducteur et Véhicule</h4>
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
                    <div>
                        <span class=\"font-medium\">Conducteur:</span> 
                        {% if annonce.driver %}
                            {{ annonce.driver.firstname }} {{ annonce.driver.lastname }}
                            <span class=\"text-gray-500\">({{ annonce.driver.email }})</span>
                        {% else %}
                            <span class=\"text-gray-400\">Non défini</span>
                        {% endif %}
                    </div>
                    <div>
                        <span class=\"font-medium\">Véhicule:</span> 
                        {% if annonce.car %}
                            {{ annonce.car.marque }} {{ annonce.car.modele }}
                        {% else %}
                            <span class=\"text-gray-400\">Non défini</span>
                        {% endif %}
                    </div>
                </div>
            </div>

            {% if annonce.reservations is defined and annonce.reservations|length > 0 %}
            <div class=\"px-6 py-4 border-t border-gray-200\">
                <h4 class=\"text-lg font-semibold text-gray-700 mb-3\">Réservations ({{ annonce.reservations|length }})</h4>
                <div class=\"overflow-x-auto\">
                    <table class=\"min-w-full leading-normal\">
                        <thead>
                            <tr>
                                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                    ID
                                </th>
                                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                    Passager
                                </th>
                                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                    Date de réservation
                                </th>
                                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                                    Statut
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for reservation in annonce.reservations %}
                            <tr>
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    {{ reservation.id }}
                                </td>
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    {% if reservation.user %}
                                        {{ reservation.user.firstname }} {{ reservation.user.lastname }}
                                    {% else %}
                                        <span class=\"text-gray-400\">Utilisateur inconnu</span>
                                    {% endif %}
                                </td>
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    {{ reservation.dateReservation|date('d/m/Y H:i') }}
                                </td>
                                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                                    {% if reservation.status == 'PENDING' %}
                                        <span class=\"px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full\">En attente</span>
                                    {% elseif reservation.status == 'ACCEPTED' %}
                                        <span class=\"px-2 py-1 bg-green-100 text-green-800 rounded-full\">Acceptée</span>
                                    {% elseif reservation.status == 'REJECTED' %}
                                        <span class=\"px-2 py-1 bg-red-100 text-red-800 rounded-full\">Refusée</span>
                                    {% else %}
                                        <span class=\"px-2 py-1 bg-gray-100 text-gray-800 rounded-full\">{{ reservation.status }}</span>
                                    {% endif %}
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
            {% endif %}
            
            <div class=\"px-6 py-4 border-t border-gray-200 bg-gray-50\">
                <form method=\"post\" action=\"{{ path('app_admin_annonce_event_delete', {'id': annonce.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ annonce.id) }}\">
                    <button type=\"submit\" class=\"px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600\">
                        <i class=\"fas fa-trash mr-1\"></i> Supprimer cette annonce
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "admin/annonce_event/show.html.twig", "D:\\Covoituni_web-master\\templates\\admin\\annonce_event\\show.html.twig");
    }
}
