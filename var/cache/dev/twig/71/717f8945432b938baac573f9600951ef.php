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

/* admin/reservation/edit.html.twig */
class __TwigTemplate_9b2075a7622bc16a4056502032097016 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/reservation/edit.html.twig", 1);
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

        yield "Modifier la Réservation";
        
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
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        .btn-blue {
            background-color: rgba(37, 99, 235, 0.1);
            color: rgb(37, 99, 235);
            border: none;
        }
        .btn-blue:hover {
            background-color: rgba(37, 99, 235, 0.2);
        }
        .btn-yellow {
            background-color: rgba(245, 158, 11, 0.1);
            color: rgb(245, 158, 11);
            border: none;
        }
        .btn-yellow:hover {
            background-color: rgba(245, 158, 11, 0.2);
        }
        .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            line-height: 1.5;
        }
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #374151;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 55
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

        // line 56
        yield "<div class=\"min-h-screen bg-gray-50 py-8\">
    <div class=\"container mx-auto px-4\">
        <div class=\"flex justify-between items-center mb-8\">
            <h1 class=\"text-2xl font-bold text-gray-800\">Modifier la Réservation #";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59), "html", null, true);
        yield "</h1>
            <div class=\"flex space-x-2\">
                <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservations");
        yield "\" class=\"flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour à la liste
                </a>
            </div>
        </div>

        <div class=\"bg-white shadow-md rounded-lg overflow-hidden\">
            <div class=\"p-6 border-b border-gray-200\">
                <h2 class=\"text-xl font-semibold text-gray-800\">Modifier les informations</h2>
            </div>

            <form method=\"post\" class=\"p-6\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div>
                        <div class=\"form-group\">
                            <label for=\"status\" class=\"form-label\">Statut</label>
                            <select id=\"status\" name=\"status\" class=\"form-control\">
                                <option value=\"PENDING\" ";
        // line 81
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 81, $this->source); })()), "status", [], "any", false, false, false, 81) == "PENDING")) {
            yield "selected";
        }
        yield ">En attente</option>
                                <option value=\"ACCEPTED\" ";
        // line 82
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 82, $this->source); })()), "status", [], "any", false, false, false, 82) == "ACCEPTED")) {
            yield "selected";
        }
        yield ">Acceptée</option>
                                <option value=\"REJECTED\" ";
        // line 83
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 83, $this->source); })()), "status", [], "any", false, false, false, 83) == "REJECTED")) {
            yield "selected";
        }
        yield ">Refusée</option>
                                <option value=\"COMPLETED\" ";
        // line 84
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 84, $this->source); })()), "status", [], "any", false, false, false, 84) == "COMPLETED")) {
            yield "selected";
        }
        yield ">Terminée</option>
                                <option value=\"CANCELLED_BY_DRIVER\" ";
        // line 85
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 85, $this->source); })()), "status", [], "any", false, false, false, 85) == "CANCELLED_BY_DRIVER")) {
            yield "selected";
        }
        yield ">Annulée par le conducteur</option>
                                <option value=\"CANCELLED_BY_PASSENGER\" ";
        // line 86
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 86, $this->source); })()), "status", [], "any", false, false, false, 86) == "CANCELLED_BY_PASSENGER")) {
            yield "selected";
        }
        yield ">Annulée par le passager</option>
                            </select>
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"comment\" class=\"form-label\">Commentaire</label>
                            <textarea id=\"comment\" name=\"comment\" rows=\"4\" class=\"form-control\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 92, $this->source); })()), "comment", [], "any", false, false, false, 92), "html", null, true);
        yield "</textarea>
                        </div>
                    </div>
                    
                    <div>
                        <div class=\"form-group\">
                            <label for=\"user_id\" class=\"form-label\">ID Utilisateur</label>
                            <select id=\"user_id\" name=\"user_id\" class=\"form-control\">
                                <option value=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 100, $this->source); })()), "userId", [], "any", false, false, false, 100), "html", null, true);
        yield "\" selected>Utilisateur #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 100, $this->source); })()), "userId", [], "any", false, false, false, 100), "html", null, true);
        yield "</option>
                                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 102
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 102) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 102, $this->source); })()), "userId", [], "any", false, false, false, 102))) {
                // line 103
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 103), "html", null, true);
                yield "\">
                                            ";
                // line 104
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", true, true, false, 104) && CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", true, true, false, 104))) {
                    // line 105
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 105), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 105), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 107
                    yield "                                                Utilisateur #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 107), "html", null, true);
                    yield "
                                            ";
                }
                // line 109
                yield "                                        </option>
                                    ";
            }
            // line 111
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "                            </select>
                        </div>
                        
                        <div class=\"form-group\">
                            ";
        // line 116
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 116, $this->source); })()), "type", [], "any", false, false, false, 116) == "TRAJET")) {
            // line 117
            yield "                                <label for=\"annonce_id\" class=\"form-label\">Annonce</label>
                                <select id=\"annonce_id\" name=\"annonce_id\" class=\"form-control\">
                                    <option value=\"\">-- Sélectionner une annonce --</option>
                                    ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 120, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 121
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 121), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 121, $this->source); })()), "annonce", [], "any", false, false, false, 121) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 121, $this->source); })()), "annonce", [], "any", false, false, false, 121), "id", [], "any", false, false, false, 121) == CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 121)))) {
                    yield "selected";
                }
                yield ">
                                            ";
                // line 122
                if (CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "titre", [], "any", true, true, false, 122)) {
                    // line 123
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 123), "html", null, true);
                    yield "
                                            ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 124
$context["annonce"], "trajet", [], "any", true, true, false, 124)) {
                    // line 125
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "trajet", [], "any", false, false, false, 125), "departurePoint", [], "any", false, false, false, 125), "html", null, true);
                    yield " → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "trajet", [], "any", false, false, false, 125), "arrivalPoint", [], "any", false, false, false, 125), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 127
                    yield "                                                Annonce #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 127), "html", null, true);
                    yield "
                                            ";
                }
                // line 129
                yield "                                        </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['annonce'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            yield "                                </select>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 132
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 132, $this->source); })()), "type", [], "any", false, false, false, 132) == "EVENT")) {
            // line 133
            yield "                                <label for=\"annonce_event_id\" class=\"form-label\">Annonce Événement</label>
                                <select id=\"annonce_event_id\" name=\"annonce_event_id\" class=\"form-control\">
                                    <option value=\"\">-- Sélectionner un événement --</option>
                                    ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annonceEvents"]) || array_key_exists("annonceEvents", $context) ? $context["annonceEvents"] : (function () { throw new RuntimeError('Variable "annonceEvents" does not exist.', 136, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["annonceEvent"]) {
                // line 137
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonceEvent"], "id", [], "any", false, false, false, 137), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 137, $this->source); })()), "annonceEvent", [], "any", false, false, false, 137) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 137, $this->source); })()), "annonceEvent", [], "any", false, false, false, 137), "id", [], "any", false, false, false, 137) == CoreExtension::getAttribute($this->env, $this->source, $context["annonceEvent"], "id", [], "any", false, false, false, 137)))) {
                    yield "selected";
                }
                yield ">
                                            ";
                // line 138
                if (CoreExtension::getAttribute($this->env, $this->source, $context["annonceEvent"], "titre", [], "any", true, true, false, 138)) {
                    // line 139
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonceEvent"], "titre", [], "any", false, false, false, 139), "html", null, true);
                    yield "
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 140
$context["annonceEvent"], "event", [], "any", true, true, false, 140) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["annonceEvent"], "event", [], "any", false, true, false, 140), "title", [], "any", true, true, false, 140))) {
                    // line 141
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["annonceEvent"], "event", [], "any", false, false, false, 141), "title", [], "any", false, false, false, 141), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 143
                    yield "                                                Événement #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonceEvent"], "id", [], "any", false, false, false, 143), "html", null, true);
                    yield "
                                            ";
                }
                // line 145
                yield "                                        </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['annonceEvent'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            yield "                                </select>
                            ";
        }
        // line 149
        yield "                        </div>
                    </div>
                </div>
                
                <div class=\"mt-6 flex justify-end space-x-3\">
                    <a href=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 154, $this->source); })()), "id", [], "any", false, false, false, 154)]), "html", null, true);
        yield "\" class=\"btn btn-blue\">
                        Annuler
                    </a>
                    <button type=\"submit\" class=\"btn btn-yellow\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                        </svg>
                        Enregistrer
                    </button>
                </div>
            </form>
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
        return "admin/reservation/edit.html.twig";
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
        return array (  421 => 154,  414 => 149,  410 => 147,  403 => 145,  397 => 143,  391 => 141,  389 => 140,  384 => 139,  382 => 138,  373 => 137,  369 => 136,  364 => 133,  362 => 132,  359 => 131,  352 => 129,  346 => 127,  338 => 125,  336 => 124,  331 => 123,  329 => 122,  320 => 121,  316 => 120,  311 => 117,  309 => 116,  303 => 112,  297 => 111,  293 => 109,  287 => 107,  279 => 105,  277 => 104,  272 => 103,  269 => 102,  265 => 101,  259 => 100,  248 => 92,  237 => 86,  231 => 85,  225 => 84,  219 => 83,  213 => 82,  207 => 81,  184 => 61,  179 => 59,  174 => 56,  161 => 55,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier la Réservation{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        .btn-blue {
            background-color: rgba(37, 99, 235, 0.1);
            color: rgb(37, 99, 235);
            border: none;
        }
        .btn-blue:hover {
            background-color: rgba(37, 99, 235, 0.2);
        }
        .btn-yellow {
            background-color: rgba(245, 158, 11, 0.1);
            color: rgb(245, 158, 11);
            border: none;
        }
        .btn-yellow:hover {
            background-color: rgba(245, 158, 11, 0.2);
        }
        .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            line-height: 1.5;
        }
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #374151;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-50 py-8\">
    <div class=\"container mx-auto px-4\">
        <div class=\"flex justify-between items-center mb-8\">
            <h1 class=\"text-2xl font-bold text-gray-800\">Modifier la Réservation #{{ reservation.id }}</h1>
            <div class=\"flex space-x-2\">
                <a href=\"{{ path('app_admin_reservations') }}\" class=\"flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour à la liste
                </a>
            </div>
        </div>

        <div class=\"bg-white shadow-md rounded-lg overflow-hidden\">
            <div class=\"p-6 border-b border-gray-200\">
                <h2 class=\"text-xl font-semibold text-gray-800\">Modifier les informations</h2>
            </div>

            <form method=\"post\" class=\"p-6\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div>
                        <div class=\"form-group\">
                            <label for=\"status\" class=\"form-label\">Statut</label>
                            <select id=\"status\" name=\"status\" class=\"form-control\">
                                <option value=\"PENDING\" {% if reservation.status == 'PENDING' %}selected{% endif %}>En attente</option>
                                <option value=\"ACCEPTED\" {% if reservation.status == 'ACCEPTED' %}selected{% endif %}>Acceptée</option>
                                <option value=\"REJECTED\" {% if reservation.status == 'REJECTED' %}selected{% endif %}>Refusée</option>
                                <option value=\"COMPLETED\" {% if reservation.status == 'COMPLETED' %}selected{% endif %}>Terminée</option>
                                <option value=\"CANCELLED_BY_DRIVER\" {% if reservation.status == 'CANCELLED_BY_DRIVER' %}selected{% endif %}>Annulée par le conducteur</option>
                                <option value=\"CANCELLED_BY_PASSENGER\" {% if reservation.status == 'CANCELLED_BY_PASSENGER' %}selected{% endif %}>Annulée par le passager</option>
                            </select>
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"comment\" class=\"form-label\">Commentaire</label>
                            <textarea id=\"comment\" name=\"comment\" rows=\"4\" class=\"form-control\">{{ reservation.comment }}</textarea>
                        </div>
                    </div>
                    
                    <div>
                        <div class=\"form-group\">
                            <label for=\"user_id\" class=\"form-label\">ID Utilisateur</label>
                            <select id=\"user_id\" name=\"user_id\" class=\"form-control\">
                                <option value=\"{{ reservation.userId }}\" selected>Utilisateur #{{ reservation.userId }}</option>
                                {% for user in users %}
                                    {% if user.id != reservation.userId %}
                                        <option value=\"{{ user.id }}\">
                                            {% if user.prenom is defined and user.nom is defined %}
                                                {{ user.prenom }} {{ user.nom }}
                                            {% else %}
                                                Utilisateur #{{ user.id }}
                                            {% endif %}
                                        </option>
                                    {% endif %}
                                {% endfor %}
                            </select>
                        </div>
                        
                        <div class=\"form-group\">
                            {% if reservation.type == 'TRAJET' %}
                                <label for=\"annonce_id\" class=\"form-label\">Annonce</label>
                                <select id=\"annonce_id\" name=\"annonce_id\" class=\"form-control\">
                                    <option value=\"\">-- Sélectionner une annonce --</option>
                                    {% for annonce in annonces %}
                                        <option value=\"{{ annonce.id }}\" {% if reservation.annonce and reservation.annonce.id == annonce.id %}selected{% endif %}>
                                            {% if annonce.titre is defined %}
                                                {{ annonce.titre }}
                                            {% elseif annonce.trajet is defined %}
                                                {{ annonce.trajet.departurePoint }} → {{ annonce.trajet.arrivalPoint }}
                                            {% else %}
                                                Annonce #{{ annonce.id }}
                                            {% endif %}
                                        </option>
                                    {% endfor %}
                                </select>
                            {% elseif reservation.type == 'EVENT' %}
                                <label for=\"annonce_event_id\" class=\"form-label\">Annonce Événement</label>
                                <select id=\"annonce_event_id\" name=\"annonce_event_id\" class=\"form-control\">
                                    <option value=\"\">-- Sélectionner un événement --</option>
                                    {% for annonceEvent in annonceEvents %}
                                        <option value=\"{{ annonceEvent.id }}\" {% if reservation.annonceEvent and reservation.annonceEvent.id == annonceEvent.id %}selected{% endif %}>
                                            {% if annonceEvent.titre is defined %}
                                                {{ annonceEvent.titre }}
                                            {% elseif annonceEvent.event is defined and annonceEvent.event.title is defined %}
                                                {{ annonceEvent.event.title }}
                                            {% else %}
                                                Événement #{{ annonceEvent.id }}
                                            {% endif %}
                                        </option>
                                    {% endfor %}
                                </select>
                            {% endif %}
                        </div>
                    </div>
                </div>
                
                <div class=\"mt-6 flex justify-end space-x-3\">
                    <a href=\"{{ path('app_admin_reservation_show', {'id': reservation.id}) }}\" class=\"btn btn-blue\">
                        Annuler
                    </a>
                    <button type=\"submit\" class=\"btn btn-yellow\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                        </svg>
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %} ", "admin/reservation/edit.html.twig", "D:\\Covoituni_web-master\\templates\\admin\\reservation\\edit.html.twig");
    }
}
