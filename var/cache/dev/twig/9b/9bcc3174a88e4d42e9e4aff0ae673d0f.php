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

/* admin/reservation/show.html.twig */
class __TwigTemplate_31990039e0f47a5aa69942cc896ad36c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/reservation/show.html.twig", 1);
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

        yield "Détails de la Réservation";
        
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
        .badge {
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .badge-pending {
            background-color: rgba(245, 158, 11, 0.1);
            color: rgb(245, 158, 11);
        }
        .badge-accepted {
            background-color: rgba(16, 185, 129, 0.1);
            color: rgb(16, 185, 129);
        }
        .badge-rejected {
            background-color: rgba(239, 68, 68, 0.1);
            color: rgb(239, 68, 68);
        }
        .badge-completed {
            background-color: rgba(37, 99, 235, 0.1);
            color: rgb(37, 99, 235);
        }
        .badge-canceled {
            background-color: rgba(107, 114, 128, 0.1);
            color: rgb(107, 114, 128);
        }
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
        .btn-red {
            background-color: rgba(239, 68, 68, 0.1);
            color: rgb(239, 68, 68);
            border: none;
        }
        .btn-red:hover {
            background-color: rgba(239, 68, 68, 0.2);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 71
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

        // line 72
        yield "<div class=\"min-h-screen bg-gray-50 py-8\">
    <div class=\"container mx-auto px-4\">
        <div class=\"flex justify-between items-center mb-8\">
            <h1 class=\"text-2xl font-bold text-gray-800\">Détails de la Réservation #";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75), "html", null, true);
        yield "</h1>
            <div class=\"flex space-x-2\">
                <a href=\"";
        // line 77
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
                <h2 class=\"text-xl font-semibold text-gray-800\">Réservation #";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88), "html", null, true);
        yield "</h2>
                <div class=\"mt-2 flex items-center text-sm text-gray-600\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                    </svg>
                    Réservée le ";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 93, $this->source); })()), "dateReservation", [], "any", false, false, false, 93), "d/m/Y H:i"), "html", null, true);
        yield "
                </div>
            </div>

            <div class=\"p-6 grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div>
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-4\">Informations sur la réservation</h3>
                    <div class=\"space-y-3\">
                        <div>
                            <span class=\"font-medium\">Statut:</span> 
                            <span class=\"badge ";
        // line 103
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 103, $this->source); })()), "status", [], "any", false, false, false, 103) == "PENDING")) {
            yield "badge-pending";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 103, $this->source); })()), "status", [], "any", false, false, false, 103) == "ACCEPTED")) {
            yield "badge-accepted";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 103, $this->source); })()), "status", [], "any", false, false, false, 103) == "REJECTED")) {
            yield "badge-rejected";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 103, $this->source); })()), "status", [], "any", false, false, false, 103) == "COMPLETED")) {
            yield "badge-completed";
        } else {
            yield "badge-canceled";
        }
        yield "\">
                                ";
        // line 104
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 104, $this->source); })()), "status", [], "any", false, false, false, 104) == "PENDING")) {
            // line 105
            yield "                                    En attente
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 106
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 106, $this->source); })()), "status", [], "any", false, false, false, 106) == "ACCEPTED")) {
            // line 107
            yield "                                    Acceptée
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 108
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 108, $this->source); })()), "status", [], "any", false, false, false, 108) == "REJECTED")) {
            // line 109
            yield "                                    Refusée
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 110
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 110, $this->source); })()), "status", [], "any", false, false, false, 110) == "COMPLETED")) {
            // line 111
            yield "                                    Terminée
                                ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 112
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 112, $this->source); })()), "status", [], "any", false, false, false, 112) == "CANCELLED_BY_PASSENGER") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 112, $this->source); })()), "status", [], "any", false, false, false, 112) == "CANCELLED_BY_DRIVER"))) {
            // line 113
            yield "                                    Annulée
                                ";
        } else {
            // line 115
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 115, $this->source); })()), "status", [], "any", false, false, false, 115), "html", null, true);
            yield "
                                ";
        }
        // line 117
        yield "                            </span>
                        </div>
                        <div>
                            <span class=\"font-medium\">Type:</span> 
                            ";
        // line 121
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 121, $this->source); })()), "type", [], "any", false, false, false, 121) == "TRAJET")) {
            // line 122
            yield "                                Annonce standard
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 123
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 123, $this->source); })()), "type", [], "any", false, false, false, 123) == "EVENT")) {
            // line 124
            yield "                                Annonce événement
                            ";
        } else {
            // line 126
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 126, $this->source); })()), "type", [], "any", false, false, false, 126), "html", null, true);
            yield "
                            ";
        }
        // line 128
        yield "                        </div>
                        ";
        // line 129
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 129, $this->source); })()), "type", [], "any", false, false, false, 129) == "TRAJET") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 129, $this->source); })()), "annonce", [], "any", false, false, false, 129))) {
            // line 130
            yield "                        <div>
                            <span class=\"font-medium\">Annonce associée:</span> 
                            <p>ID: ";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 132, $this->source); })()), "annonce", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132), "html", null, true);
            yield "</p>
                            ";
            // line 133
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "annonce", [], "any", false, true, false, 133), "titre", [], "any", true, true, false, 133)) {
                // line 134
                yield "                            <p>Titre: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 134, $this->source); })()), "annonce", [], "any", false, false, false, 134), "titre", [], "any", false, false, false, 134), "html", null, true);
                yield "</p>
                            ";
            }
            // line 136
            yield "                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "annonce", [], "any", false, true, false, 136), "trajet", [], "any", true, true, false, 136)) {
                // line 137
                yield "                            <p>Trajet: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 137, $this->source); })()), "annonce", [], "any", false, false, false, 137), "trajet", [], "any", false, false, false, 137), "departurePoint", [], "any", false, false, false, 137), "html", null, true);
                yield " → ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 137, $this->source); })()), "annonce", [], "any", false, false, false, 137), "trajet", [], "any", false, false, false, 137), "arrivalPoint", [], "any", false, false, false, 137), "html", null, true);
                yield "</p>
                            ";
            }
            // line 139
            yield "                        </div>
                        ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 140
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 140, $this->source); })()), "type", [], "any", false, false, false, 140) == "EVENT") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 140, $this->source); })()), "annonceEvent", [], "any", false, false, false, 140))) {
            // line 141
            yield "                        <div>
                            <span class=\"font-medium\">Événement associé:</span> 
                            <p>ID: ";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 143, $this->source); })()), "annonceEvent", [], "any", false, false, false, 143), "id", [], "any", false, false, false, 143), "html", null, true);
            yield "</p>
                            ";
            // line 144
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "annonceEvent", [], "any", false, true, false, 144), "titre", [], "any", true, true, false, 144)) {
                // line 145
                yield "                            <p>Titre: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 145, $this->source); })()), "annonceEvent", [], "any", false, false, false, 145), "titre", [], "any", false, false, false, 145), "html", null, true);
                yield "</p>
                            ";
            }
            // line 147
            yield "                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "annonceEvent", [], "any", false, true, false, 147), "event", [], "any", true, true, false, 147)) {
                // line 148
                yield "                            <p>Événement: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 148, $this->source); })()), "annonceEvent", [], "any", false, false, false, 148), "event", [], "any", false, false, false, 148), "title", [], "any", false, false, false, 148), "html", null, true);
                yield "</p>
                            ";
            }
            // line 150
            yield "                        </div>
                        ";
        }
        // line 152
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 152, $this->source); })()), "comment", [], "any", false, false, false, 152)) {
            // line 153
            yield "                        <div>
                            <span class=\"font-medium\">Commentaire:</span> 
                            <p class=\"text-gray-700 mt-1\">";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 155, $this->source); })()), "comment", [], "any", false, false, false, 155), "html", null, true);
            yield "</p>
                        </div>
                        ";
        }
        // line 158
        yield "                    </div>
                </div>

                <div>
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-4\">Informations utilisateur</h3>
                    <div class=\"space-y-3\">
                        <div>
                            <span class=\"font-medium\">ID Utilisateur:</span> ";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 165, $this->source); })()), "userId", [], "any", false, false, false, 165), "html", null, true);
        yield "
                        </div>
                        <div>
                            <span class=\"font-medium\">Date de mise à jour:</span> ";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 168, $this->source); })()), "updatedAt", [], "any", false, false, false, 168), "d/m/Y H:i"), "html", null, true);
        yield "
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"p-6 border-t border-gray-200 flex space-x-3\">
                <a href=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 175, $this->source); })()), "id", [], "any", false, false, false, 175)]), "html", null, true);
        yield "\" class=\"btn btn-yellow\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\" />
                    </svg>
                    Modifier
                </a>
                <form action=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 181, $this->source); })()), "id", [], "any", false, false, false, 181)]), "html", null, true);
        yield "\" method=\"post\" class=\"inline-block\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ? Cette action libérera la place associée dans l\\'annonce.')\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 182, $this->source); })()), "id", [], "any", false, false, false, 182))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-red\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                        </svg>
                        Supprimer
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
        return "admin/reservation/show.html.twig";
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
        return array (  421 => 182,  417 => 181,  408 => 175,  398 => 168,  392 => 165,  383 => 158,  377 => 155,  373 => 153,  370 => 152,  366 => 150,  360 => 148,  357 => 147,  351 => 145,  349 => 144,  345 => 143,  341 => 141,  339 => 140,  336 => 139,  328 => 137,  325 => 136,  319 => 134,  317 => 133,  313 => 132,  309 => 130,  307 => 129,  304 => 128,  298 => 126,  294 => 124,  292 => 123,  289 => 122,  287 => 121,  281 => 117,  275 => 115,  271 => 113,  269 => 112,  266 => 111,  264 => 110,  261 => 109,  259 => 108,  256 => 107,  254 => 106,  251 => 105,  249 => 104,  235 => 103,  222 => 93,  214 => 88,  200 => 77,  195 => 75,  190 => 72,  177 => 71,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la Réservation{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .badge {
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .badge-pending {
            background-color: rgba(245, 158, 11, 0.1);
            color: rgb(245, 158, 11);
        }
        .badge-accepted {
            background-color: rgba(16, 185, 129, 0.1);
            color: rgb(16, 185, 129);
        }
        .badge-rejected {
            background-color: rgba(239, 68, 68, 0.1);
            color: rgb(239, 68, 68);
        }
        .badge-completed {
            background-color: rgba(37, 99, 235, 0.1);
            color: rgb(37, 99, 235);
        }
        .badge-canceled {
            background-color: rgba(107, 114, 128, 0.1);
            color: rgb(107, 114, 128);
        }
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
        .btn-red {
            background-color: rgba(239, 68, 68, 0.1);
            color: rgb(239, 68, 68);
            border: none;
        }
        .btn-red:hover {
            background-color: rgba(239, 68, 68, 0.2);
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-50 py-8\">
    <div class=\"container mx-auto px-4\">
        <div class=\"flex justify-between items-center mb-8\">
            <h1 class=\"text-2xl font-bold text-gray-800\">Détails de la Réservation #{{ reservation.id }}</h1>
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
                <h2 class=\"text-xl font-semibold text-gray-800\">Réservation #{{ reservation.id }}</h2>
                <div class=\"mt-2 flex items-center text-sm text-gray-600\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                    </svg>
                    Réservée le {{ reservation.dateReservation|date('d/m/Y H:i') }}
                </div>
            </div>

            <div class=\"p-6 grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div>
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-4\">Informations sur la réservation</h3>
                    <div class=\"space-y-3\">
                        <div>
                            <span class=\"font-medium\">Statut:</span> 
                            <span class=\"badge {% if reservation.status == 'PENDING' %}badge-pending{% elseif reservation.status == 'ACCEPTED' %}badge-accepted{% elseif reservation.status == 'REJECTED' %}badge-rejected{% elseif reservation.status == 'COMPLETED' %}badge-completed{% else %}badge-canceled{% endif %}\">
                                {% if reservation.status == 'PENDING' %}
                                    En attente
                                {% elseif reservation.status == 'ACCEPTED' %}
                                    Acceptée
                                {% elseif reservation.status == 'REJECTED' %}
                                    Refusée
                                {% elseif reservation.status == 'COMPLETED' %}
                                    Terminée
                                {% elseif reservation.status == 'CANCELLED_BY_PASSENGER' or reservation.status == 'CANCELLED_BY_DRIVER' %}
                                    Annulée
                                {% else %}
                                    {{ reservation.status }}
                                {% endif %}
                            </span>
                        </div>
                        <div>
                            <span class=\"font-medium\">Type:</span> 
                            {% if reservation.type == 'TRAJET' %}
                                Annonce standard
                            {% elseif reservation.type == 'EVENT' %}
                                Annonce événement
                            {% else %}
                                {{ reservation.type }}
                            {% endif %}
                        </div>
                        {% if reservation.type == 'TRAJET' and reservation.annonce %}
                        <div>
                            <span class=\"font-medium\">Annonce associée:</span> 
                            <p>ID: {{ reservation.annonce.id }}</p>
                            {% if reservation.annonce.titre is defined %}
                            <p>Titre: {{ reservation.annonce.titre }}</p>
                            {% endif %}
                            {% if reservation.annonce.trajet is defined %}
                            <p>Trajet: {{ reservation.annonce.trajet.departurePoint }} → {{ reservation.annonce.trajet.arrivalPoint }}</p>
                            {% endif %}
                        </div>
                        {% elseif reservation.type == 'EVENT' and reservation.annonceEvent %}
                        <div>
                            <span class=\"font-medium\">Événement associé:</span> 
                            <p>ID: {{ reservation.annonceEvent.id }}</p>
                            {% if reservation.annonceEvent.titre is defined %}
                            <p>Titre: {{ reservation.annonceEvent.titre }}</p>
                            {% endif %}
                            {% if reservation.annonceEvent.event is defined %}
                            <p>Événement: {{ reservation.annonceEvent.event.title }}</p>
                            {% endif %}
                        </div>
                        {% endif %}
                        {% if reservation.comment %}
                        <div>
                            <span class=\"font-medium\">Commentaire:</span> 
                            <p class=\"text-gray-700 mt-1\">{{ reservation.comment }}</p>
                        </div>
                        {% endif %}
                    </div>
                </div>

                <div>
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-4\">Informations utilisateur</h3>
                    <div class=\"space-y-3\">
                        <div>
                            <span class=\"font-medium\">ID Utilisateur:</span> {{ reservation.userId }}
                        </div>
                        <div>
                            <span class=\"font-medium\">Date de mise à jour:</span> {{ reservation.updatedAt|date('d/m/Y H:i') }}
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"p-6 border-t border-gray-200 flex space-x-3\">
                <a href=\"{{ path('app_admin_reservation_edit', {'id': reservation.id}) }}\" class=\"btn btn-yellow\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\" />
                    </svg>
                    Modifier
                </a>
                <form action=\"{{ path('app_admin_reservation_delete', {'id': reservation.id}) }}\" method=\"post\" class=\"inline-block\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ? Cette action libérera la place associée dans l\\'annonce.')\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reservation.id) }}\">
                    <button type=\"submit\" class=\"btn btn-red\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                        </svg>
                        Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "admin/reservation/show.html.twig", "D:\\Covoituni_web-master\\templates\\admin\\reservation\\show.html.twig");
    }
}
