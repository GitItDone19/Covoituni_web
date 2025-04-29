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

/* admin/annonce/show.html.twig */
class __TwigTemplate_30439f8b5b997134e1945f6e4b1298b4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/annonce/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/annonce/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/annonce/show.html.twig", 1);
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

        yield "Détails de l'Annonce";
        
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
        .badge-active {
            background-color: rgba(16, 185, 129, 0.1);
            color: rgb(16, 185, 129);
        }
        .badge-expired {
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
        .btn-green {
            background-color: rgba(5, 150, 105, 0.1);
            color: rgb(5, 150, 105);
            border: none;
        }
        .btn-green:hover {
            background-color: rgba(5, 150, 105, 0.2);
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

    // line 67
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

        // line 68
        yield "<div class=\"min-h-screen bg-gray-50 py-8\">
    <div class=\"container mx-auto px-4\">
        <div class=\"flex justify-between items-center mb-8\">
            <h1 class=\"text-2xl font-bold text-gray-800\">Détails de l'Annonce #";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71), "html", null, true);
        yield "</h1>
            <div class=\"flex space-x-2\">
                <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonces");
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
                <h2 class=\"text-xl font-semibold text-gray-800\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 84, $this->source); })()), "titre", [], "any", false, false, false, 84), "html", null, true);
        yield "</h2>
                <div class=\"mt-2 flex items-center text-sm text-gray-600\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                    </svg>
                    Publiée le ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 89, $this->source); })()), "datePublication", [], "any", false, false, false, 89), "d/m/Y H:i"), "html", null, true);
        yield "
                </div>
            </div>

            <div class=\"p-6 grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div>
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-4\">Informations générales</h3>
                    <div class=\"space-y-3\">
                        <div>
                            <span class=\"font-medium\">Description:</span> 
                            <p class=\"text-gray-700 mt-1\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 99, $this->source); })()), "description", [], "any", false, false, false, 99), "html", null, true);
        yield "</p>
                        </div>
                        <div>
                            <span class=\"font-medium\">Statut:</span> 
                            <span class=\"badge ";
        // line 103
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 103, $this->source); })()), "departureDate", [], "any", false, false, false, 103) > $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
            yield "badge-active";
        } else {
            yield "badge-expired";
        }
        yield "\">
                                ";
        // line 104
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 104, $this->source); })()), "departureDate", [], "any", false, false, false, 104) > $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
            yield "Active";
        } else {
            yield "Expirée";
        }
        // line 105
        yield "                            </span>
                        </div>
                        <div>
                            <span class=\"font-medium\">Places disponibles:</span> ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 108, $this->source); })()), "availableSeats", [], "any", false, false, false, 108), "html", null, true);
        yield "
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-4\">Détails du trajet</h3>
                    <div class=\"space-y-3\">
                        ";
        // line 116
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 116, $this->source); })()), "trajet", [], "any", false, false, false, 116)) {
            // line 117
            yield "                            <div>
                                <span class=\"font-medium\">Trajet:</span> ";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 118, $this->source); })()), "trajet", [], "any", false, false, false, 118), "departurePoint", [], "any", false, false, false, 118), "html", null, true);
            yield " → ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 118, $this->source); })()), "trajet", [], "any", false, false, false, 118), "arrivalPoint", [], "any", false, false, false, 118), "html", null, true);
            yield "
                            </div>
                            <div>
                                <span class=\"font-medium\">Prix:</span> ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 121, $this->source); })()), "trajet", [], "any", false, false, false, 121), "price", [], "any", false, false, false, 121), "html", null, true);
            yield " DT
                            </div>
                        ";
        } else {
            // line 124
            yield "                            <div class=\"text-gray-500\">Aucun trajet associé</div>
                        ";
        }
        // line 126
        yield "                        <div>
                            <span class=\"font-medium\">Date de départ:</span> ";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 127, $this->source); })()), "departureDate", [], "any", false, false, false, 127), "d/m/Y à H:i"), "html", null, true);
        yield "
                        </div>
                        <div>
                            <span class=\"font-medium\">Conducteur ID:</span> ";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 130, $this->source); })()), "driverId", [], "any", false, false, false, 130), "html", null, true);
        yield "
                        </div>
                        <div>
                            <span class=\"font-medium\">Véhicule ID:</span> ";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 133, $this->source); })()), "carId", [], "any", false, false, false, 133), "html", null, true);
        yield "
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"p-6 border-t border-gray-200 flex space-x-3\">
                <a href=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonce_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 140, $this->source); })()), "id", [], "any", false, false, false, 140)]), "html", null, true);
        yield "\" class=\"btn btn-yellow\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\" />
                    </svg>
                    Modifier
                </a>
                <form action=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonce_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 146, $this->source); })()), "id", [], "any", false, false, false, 146)]), "html", null, true);
        yield "\" method=\"post\" class=\"inline-block\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce?')\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 147, $this->source); })()), "id", [], "any", false, false, false, 147))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-red\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                        </svg>
                        Supprimer
                    </button>
                </form>
                <a href=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonce_terminate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 155, $this->source); })()), "id", [], "any", false, false, false, 155)]), "html", null, true);
        yield "\" class=\"btn btn-green\" onclick=\"return confirm('Êtes-vous sûr de vouloir terminer cette annonce?')\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                    </svg>
                    Terminer
                </a>
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
        return "admin/annonce/show.html.twig";
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
        return array (  340 => 155,  329 => 147,  325 => 146,  316 => 140,  306 => 133,  300 => 130,  294 => 127,  291 => 126,  287 => 124,  281 => 121,  273 => 118,  270 => 117,  268 => 116,  257 => 108,  252 => 105,  246 => 104,  238 => 103,  231 => 99,  218 => 89,  210 => 84,  196 => 73,  191 => 71,  186 => 68,  173 => 67,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'Annonce{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .badge {
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .badge-active {
            background-color: rgba(16, 185, 129, 0.1);
            color: rgb(16, 185, 129);
        }
        .badge-expired {
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
        .btn-green {
            background-color: rgba(5, 150, 105, 0.1);
            color: rgb(5, 150, 105);
            border: none;
        }
        .btn-green:hover {
            background-color: rgba(5, 150, 105, 0.2);
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
            <h1 class=\"text-2xl font-bold text-gray-800\">Détails de l'Annonce #{{ annonce.id }}</h1>
            <div class=\"flex space-x-2\">
                <a href=\"{{ path('app_admin_annonces') }}\" class=\"flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour à la liste
                </a>
            </div>
        </div>

        <div class=\"bg-white shadow-md rounded-lg overflow-hidden\">
            <div class=\"p-6 border-b border-gray-200\">
                <h2 class=\"text-xl font-semibold text-gray-800\">{{ annonce.titre }}</h2>
                <div class=\"mt-2 flex items-center text-sm text-gray-600\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                    </svg>
                    Publiée le {{ annonce.datePublication|date('d/m/Y H:i') }}
                </div>
            </div>

            <div class=\"p-6 grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div>
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-4\">Informations générales</h3>
                    <div class=\"space-y-3\">
                        <div>
                            <span class=\"font-medium\">Description:</span> 
                            <p class=\"text-gray-700 mt-1\">{{ annonce.description }}</p>
                        </div>
                        <div>
                            <span class=\"font-medium\">Statut:</span> 
                            <span class=\"badge {% if annonce.departureDate > date() %}badge-active{% else %}badge-expired{% endif %}\">
                                {% if annonce.departureDate > date() %}Active{% else %}Expirée{% endif %}
                            </span>
                        </div>
                        <div>
                            <span class=\"font-medium\">Places disponibles:</span> {{ annonce.availableSeats }}
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-4\">Détails du trajet</h3>
                    <div class=\"space-y-3\">
                        {% if annonce.trajet %}
                            <div>
                                <span class=\"font-medium\">Trajet:</span> {{ annonce.trajet.departurePoint }} → {{ annonce.trajet.arrivalPoint }}
                            </div>
                            <div>
                                <span class=\"font-medium\">Prix:</span> {{ annonce.trajet.price }} DT
                            </div>
                        {% else %}
                            <div class=\"text-gray-500\">Aucun trajet associé</div>
                        {% endif %}
                        <div>
                            <span class=\"font-medium\">Date de départ:</span> {{ annonce.departureDate|date('d/m/Y à H:i') }}
                        </div>
                        <div>
                            <span class=\"font-medium\">Conducteur ID:</span> {{ annonce.driverId }}
                        </div>
                        <div>
                            <span class=\"font-medium\">Véhicule ID:</span> {{ annonce.carId }}
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"p-6 border-t border-gray-200 flex space-x-3\">
                <a href=\"{{ path('app_admin_annonce_edit', {'id': annonce.id}) }}\" class=\"btn btn-yellow\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\" />
                    </svg>
                    Modifier
                </a>
                <form action=\"{{ path('app_admin_annonce_delete', {'id': annonce.id}) }}\" method=\"post\" class=\"inline-block\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce?')\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ annonce.id) }}\">
                    <button type=\"submit\" class=\"btn btn-red\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                        </svg>
                        Supprimer
                    </button>
                </form>
                <a href=\"{{ path('app_admin_annonce_terminate', {'id': annonce.id}) }}\" class=\"btn btn-green\" onclick=\"return confirm('Êtes-vous sûr de vouloir terminer cette annonce?')\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                    </svg>
                    Terminer
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "admin/annonce/show.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\admin\\annonce\\show.html.twig");
    }
}
