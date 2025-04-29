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

/* admin/reservation/index.html.twig */
class __TwigTemplate_eeef0236f089bf6235be02031b434fd3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/reservation/index.html.twig", 1);
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

        yield "Administration - Liste des Réservations";
        
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
        .card {
            transition: all 0.3s ease;
            border-radius: 0.75rem;
            overflow: hidden;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
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
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        .search-container {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }
        @media (max-width: 768px) {
            .search-container {
                flex-direction: column;
            }
        }
        .action-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .text-darker {
            color: #374151;
        }
        .card-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 1.5rem;
        }
        @media (min-width: 640px) {
            .card-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (min-width: 1024px) {
            .card-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        .reservation-card {
            background-color: white;
            border: 1px solid #e5e7eb;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            padding: 1rem;
            border-bottom: 1px solid #e5e7eb;
            background-color: #f9fafb;
        }
        .card-body {
            padding: 1rem;
        }
        .card-footer {
            padding: 1rem;
            border-top: 1px solid #e5e7eb;
            background-color: #f9fafb;
        }
        .card-info {
            margin-bottom: 0.75rem;
        }
        .card-label {
            font-weight: 500;
            margin-right: 0.5rem;
            color: #6b7280;
        }
        .card-value {
            color: #111827;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 148
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

        // line 149
        yield "<div class=\"min-h-screen bg-gray-50 py-8\">
    <div class=\"container mx-auto px-4\">
        <div class=\"header-container\">
            <h1 class=\"text-2xl font-bold text-gray-800\">Liste des Réservations</h1>
            <a href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"bg-gray-200 text-gray-700 rounded-lg px-4 py-2 flex items-center hover:bg-gray-300 transition duration-300\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\" />
                </svg>
                Dashboard
            </a>
        </div>

        ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 161, $this->source); })()), "flashes", ["success"], "method", false, false, false, 161));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 162
            yield "            <div class=\"mb-4 p-4 rounded-md bg-green-50 border border-green-200\">
                <div class=\"flex\">
                    <div class=\"flex-shrink-0\">
                        <svg class=\"h-5 w-5 text-green-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\"></path>
                        </svg>
                    </div>
                    <div class=\"ml-3\">
                        <p class=\"text-sm font-medium text-green-800\">";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        yield "
        <div class=\"search-container\">
            <input type=\"text\" id=\"search\" placeholder=\"Rechercher une réservation...\" class=\"w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500\">
            <select id=\"status-filter\" class=\"px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500\">
                <option value=\"\">Tous les statuts</option>
                <option value=\"PENDING\">En attente</option>
                <option value=\"ACCEPTED\">Acceptée</option>
                <option value=\"REJECTED\">Refusée</option>
                <option value=\"COMPLETED\">Terminée</option>
                <option value=\"CANCELLED\">Annulée</option>
            </select>
            <select id=\"type-filter\" class=\"px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500\">
                <option value=\"\">Tous les types</option>
                <option value=\"TRAJET\">Annonce standard</option>
                <option value=\"EVENT\">Annonce événement</option>
            </select>
        </div>

        ";
        // line 193
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 193, $this->source); })()))) {
            // line 194
            yield "            <div class=\"bg-white p-8 rounded-lg shadow text-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12 mx-auto text-gray-400 mb-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                </svg>
                <h3 class=\"text-lg font-medium text-gray-900 mb-2\">Aucune réservation trouvée</h3>
                <p class=\"text-gray-500\">Il n'y a actuellement aucune réservation disponible dans le système.</p>
            </div>
        ";
        } else {
            // line 202
            yield "            <div class=\"card-grid\">
                ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 203, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 204
                yield "                    <div class=\"reservation-card card\" data-status=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 204), "html", null, true);
                yield "\" data-type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 204), "html", null, true);
                yield "\">
                        <div class=\"card-header flex justify-between items-center\">
                            <div class=\"flex items-center\">
                                <span class=\"font-bold text-gray-700\">Réservation #";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 207), "html", null, true);
                yield "</span>
                            </div>
                            <span class=\"badge ";
                // line 209
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 209) == "PENDING")) {
                    yield "badge-pending";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 209) == "ACCEPTED")) {
                    yield "badge-accepted";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 209) == "REJECTED")) {
                    yield "badge-rejected";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 209) == "COMPLETED")) {
                    yield "badge-completed";
                } else {
                    yield "badge-canceled";
                }
                yield "\">
                                ";
                // line 210
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 210) == "PENDING")) {
                    // line 211
                    yield "                                    En attente
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 212
$context["reservation"], "status", [], "any", false, false, false, 212) == "ACCEPTED")) {
                    // line 213
                    yield "                                    Acceptée
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 214
$context["reservation"], "status", [], "any", false, false, false, 214) == "REJECTED")) {
                    // line 215
                    yield "                                    Refusée
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 216
$context["reservation"], "status", [], "any", false, false, false, 216) == "COMPLETED")) {
                    // line 217
                    yield "                                    Terminée
                                ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 218
$context["reservation"], "status", [], "any", false, false, false, 218) == "CANCELLED_BY_PASSENGER") || (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 218) == "CANCELLED_BY_DRIVER"))) {
                    // line 219
                    yield "                                    Annulée
                                ";
                } else {
                    // line 221
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 221), "html", null, true);
                    yield "
                                ";
                }
                // line 223
                yield "                            </span>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-info\">
                                <span class=\"card-label\">Utilisateur:</span>
                                <span class=\"card-value\">Utilisateur #";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "userId", [], "any", false, false, false, 228), "html", null, true);
                yield "</span>
                            </div>
                            <div class=\"card-info\">
                                <span class=\"card-label\">Type:</span>
                                <span class=\"card-value\">
                                    ";
                // line 233
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 233) == "TRAJET")) {
                    // line 234
                    yield "                                        Annonce standard
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 235
$context["reservation"], "type", [], "any", false, false, false, 235) == "EVENT")) {
                    // line 236
                    yield "                                        Annonce événement
                                    ";
                } else {
                    // line 238
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 238), "html", null, true);
                    yield "
                                    ";
                }
                // line 240
                yield "                                </span>
                            </div>
                            <div class=\"card-info\">
                                <span class=\"card-label\">Annonce:</span>
                                <span class=\"card-value\">
                                    ";
                // line 245
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 245) == "TRAJET") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 245))) {
                    // line 246
                    yield "                                        Annonce #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 246), "id", [], "any", false, false, false, 246), "html", null, true);
                    yield "
                                    ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 247
$context["reservation"], "type", [], "any", false, false, false, 247) == "EVENT") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 247))) {
                    // line 248
                    yield "                                        Événement #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 248), "id", [], "any", false, false, false, 248), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 250
                    yield "                                        -
                                    ";
                }
                // line 252
                yield "                                </span>
                            </div>
                            <div class=\"card-info\">
                                <span class=\"card-label\">Date:</span>
                                <span class=\"card-value\">";
                // line 256
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 256), "d/m/Y H:i"), "html", null, true);
                yield "</span>
                            </div>
                        </div>
                        <div class=\"card-footer\">
                            <div class=\"action-buttons\">
                                <a href=\"";
                // line 261
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 261)]), "html", null, true);
                yield "\" class=\"btn btn-blue\">Voir</a>
                                <a href=\"";
                // line 262
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 262)]), "html", null, true);
                yield "\" class=\"btn btn-yellow\">Modifier</a>
                                <form action=\"";
                // line 263
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 263)]), "html", null, true);
                yield "\" method=\"post\" class=\"inline-block\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ? Cette action libérera la place associée dans l\\'annonce.')\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 264
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 264))), "html", null, true);
                yield "\">
                                    <button type=\"submit\" class=\"btn btn-red\">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            yield "            </div>
        ";
        }
        // line 273
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 277
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

        // line 278
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search');
            const statusFilter = document.getElementById('status-filter');
            const typeFilter = document.getElementById('type-filter');
            const reservationCards = document.querySelectorAll('.reservation-card');
            
            function filterReservations() {
                const searchTerm = searchInput.value.toLowerCase();
                const statusValue = statusFilter.value.toLowerCase();
                const typeValue = typeFilter.value.toLowerCase();
                
                reservationCards.forEach(card => {
                    const textContent = card.textContent.toLowerCase();
                    const cardStatus = card.dataset.status.toLowerCase();
                    const cardType = card.dataset.type.toLowerCase();
                    
                    const statusMatch = !statusValue || cardStatus.includes(statusValue);
                    const typeMatch = !typeValue || cardType.includes(typeValue);
                    
                    const isVisible = textContent.includes(searchTerm) && statusMatch && typeMatch;
                    card.style.display = isVisible ? '' : 'none';
                });
            }
            
            searchInput.addEventListener('input', filterReservations);
            statusFilter.addEventListener('change', filterReservations);
            typeFilter.addEventListener('change', filterReservations);
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
        return "admin/reservation/index.html.twig";
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
        return array (  536 => 278,  523 => 277,  510 => 273,  506 => 271,  493 => 264,  489 => 263,  485 => 262,  481 => 261,  473 => 256,  467 => 252,  463 => 250,  457 => 248,  455 => 247,  450 => 246,  448 => 245,  441 => 240,  435 => 238,  431 => 236,  429 => 235,  426 => 234,  424 => 233,  416 => 228,  409 => 223,  403 => 221,  399 => 219,  397 => 218,  394 => 217,  392 => 216,  389 => 215,  387 => 214,  384 => 213,  382 => 212,  379 => 211,  377 => 210,  363 => 209,  358 => 207,  349 => 204,  345 => 203,  342 => 202,  332 => 194,  330 => 193,  310 => 175,  299 => 170,  289 => 162,  285 => 161,  274 => 153,  268 => 149,  255 => 148,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration - Liste des Réservations{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .card {
            transition: all 0.3s ease;
            border-radius: 0.75rem;
            overflow: hidden;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
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
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        .search-container {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }
        @media (max-width: 768px) {
            .search-container {
                flex-direction: column;
            }
        }
        .action-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .text-darker {
            color: #374151;
        }
        .card-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 1.5rem;
        }
        @media (min-width: 640px) {
            .card-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (min-width: 1024px) {
            .card-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        .reservation-card {
            background-color: white;
            border: 1px solid #e5e7eb;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            padding: 1rem;
            border-bottom: 1px solid #e5e7eb;
            background-color: #f9fafb;
        }
        .card-body {
            padding: 1rem;
        }
        .card-footer {
            padding: 1rem;
            border-top: 1px solid #e5e7eb;
            background-color: #f9fafb;
        }
        .card-info {
            margin-bottom: 0.75rem;
        }
        .card-label {
            font-weight: 500;
            margin-right: 0.5rem;
            color: #6b7280;
        }
        .card-value {
            color: #111827;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-50 py-8\">
    <div class=\"container mx-auto px-4\">
        <div class=\"header-container\">
            <h1 class=\"text-2xl font-bold text-gray-800\">Liste des Réservations</h1>
            <a href=\"{{ path('app_admin_dashboard') }}\" class=\"bg-gray-200 text-gray-700 rounded-lg px-4 py-2 flex items-center hover:bg-gray-300 transition duration-300\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\" />
                </svg>
                Dashboard
            </a>
        </div>

        {% for message in app.flashes('success') %}
            <div class=\"mb-4 p-4 rounded-md bg-green-50 border border-green-200\">
                <div class=\"flex\">
                    <div class=\"flex-shrink-0\">
                        <svg class=\"h-5 w-5 text-green-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\"></path>
                        </svg>
                    </div>
                    <div class=\"ml-3\">
                        <p class=\"text-sm font-medium text-green-800\">{{ message }}</p>
                    </div>
                </div>
            </div>
        {% endfor %}

        <div class=\"search-container\">
            <input type=\"text\" id=\"search\" placeholder=\"Rechercher une réservation...\" class=\"w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500\">
            <select id=\"status-filter\" class=\"px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500\">
                <option value=\"\">Tous les statuts</option>
                <option value=\"PENDING\">En attente</option>
                <option value=\"ACCEPTED\">Acceptée</option>
                <option value=\"REJECTED\">Refusée</option>
                <option value=\"COMPLETED\">Terminée</option>
                <option value=\"CANCELLED\">Annulée</option>
            </select>
            <select id=\"type-filter\" class=\"px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500\">
                <option value=\"\">Tous les types</option>
                <option value=\"TRAJET\">Annonce standard</option>
                <option value=\"EVENT\">Annonce événement</option>
            </select>
        </div>

        {% if reservations is empty %}
            <div class=\"bg-white p-8 rounded-lg shadow text-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12 mx-auto text-gray-400 mb-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                </svg>
                <h3 class=\"text-lg font-medium text-gray-900 mb-2\">Aucune réservation trouvée</h3>
                <p class=\"text-gray-500\">Il n'y a actuellement aucune réservation disponible dans le système.</p>
            </div>
        {% else %}
            <div class=\"card-grid\">
                {% for reservation in reservations %}
                    <div class=\"reservation-card card\" data-status=\"{{ reservation.status }}\" data-type=\"{{ reservation.type }}\">
                        <div class=\"card-header flex justify-between items-center\">
                            <div class=\"flex items-center\">
                                <span class=\"font-bold text-gray-700\">Réservation #{{ reservation.id }}</span>
                            </div>
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
                        <div class=\"card-body\">
                            <div class=\"card-info\">
                                <span class=\"card-label\">Utilisateur:</span>
                                <span class=\"card-value\">Utilisateur #{{ reservation.userId }}</span>
                            </div>
                            <div class=\"card-info\">
                                <span class=\"card-label\">Type:</span>
                                <span class=\"card-value\">
                                    {% if reservation.type == 'TRAJET' %}
                                        Annonce standard
                                    {% elseif reservation.type == 'EVENT' %}
                                        Annonce événement
                                    {% else %}
                                        {{ reservation.type }}
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"card-info\">
                                <span class=\"card-label\">Annonce:</span>
                                <span class=\"card-value\">
                                    {% if reservation.type == 'TRAJET' and reservation.annonce %}
                                        Annonce #{{ reservation.annonce.id }}
                                    {% elseif reservation.type == 'EVENT' and reservation.annonceEvent %}
                                        Événement #{{ reservation.annonceEvent.id }}
                                    {% else %}
                                        -
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"card-info\">
                                <span class=\"card-label\">Date:</span>
                                <span class=\"card-value\">{{ reservation.dateReservation|date('d/m/Y H:i') }}</span>
                            </div>
                        </div>
                        <div class=\"card-footer\">
                            <div class=\"action-buttons\">
                                <a href=\"{{ path('app_admin_reservation_show', {'id': reservation.id}) }}\" class=\"btn btn-blue\">Voir</a>
                                <a href=\"{{ path('app_admin_reservation_edit', {'id': reservation.id}) }}\" class=\"btn btn-yellow\">Modifier</a>
                                <form action=\"{{ path('app_admin_reservation_delete', {'id': reservation.id}) }}\" method=\"post\" class=\"inline-block\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ? Cette action libérera la place associée dans l\\'annonce.')\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reservation.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-red\">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% endif %}
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search');
            const statusFilter = document.getElementById('status-filter');
            const typeFilter = document.getElementById('type-filter');
            const reservationCards = document.querySelectorAll('.reservation-card');
            
            function filterReservations() {
                const searchTerm = searchInput.value.toLowerCase();
                const statusValue = statusFilter.value.toLowerCase();
                const typeValue = typeFilter.value.toLowerCase();
                
                reservationCards.forEach(card => {
                    const textContent = card.textContent.toLowerCase();
                    const cardStatus = card.dataset.status.toLowerCase();
                    const cardType = card.dataset.type.toLowerCase();
                    
                    const statusMatch = !statusValue || cardStatus.includes(statusValue);
                    const typeMatch = !typeValue || cardType.includes(typeValue);
                    
                    const isVisible = textContent.includes(searchTerm) && statusMatch && typeMatch;
                    card.style.display = isVisible ? '' : 'none';
                });
            }
            
            searchInput.addEventListener('input', filterReservations);
            statusFilter.addEventListener('change', filterReservations);
            typeFilter.addEventListener('change', filterReservations);
        });
    </script>
{% endblock %} ", "admin/reservation/index.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\admin\\reservation\\index.html.twig");
    }
}
