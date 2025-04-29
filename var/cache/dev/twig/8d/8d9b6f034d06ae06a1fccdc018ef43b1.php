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

/* admin/annonce/edit.html.twig */
class __TwigTemplate_3604434ecff77f791deee54a62f582d7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/annonce/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/annonce/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/annonce/edit.html.twig", 1);
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

        yield "Modifier l'Annonce";
        
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
            <h1 class=\"text-2xl font-bold text-gray-800\">Modifier l'Annonce #";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59), "html", null, true);
        yield "</h1>
            <div class=\"flex space-x-2\">
                <a href=\"";
        // line 61
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
                <h2 class=\"text-xl font-semibold text-gray-800\">Modifier les informations</h2>
            </div>

            <form method=\"post\" class=\"p-6\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div>
                        <div class=\"form-group\">
                            <label for=\"titre\" class=\"form-label\">Titre</label>
                            <input type=\"text\" id=\"titre\" name=\"titre\" value=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 80, $this->source); })()), "titre", [], "any", false, false, false, 80), "html", null, true);
        yield "\" class=\"form-control\">
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"description\" class=\"form-label\">Description</label>
                            <textarea id=\"description\" name=\"description\" rows=\"4\" class=\"form-control\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 85, $this->source); })()), "description", [], "any", false, false, false, 85), "html", null, true);
        yield "</textarea>
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"departure_date\" class=\"form-label\">Date de départ</label>
                            <input type=\"datetime-local\" id=\"departure_date\" name=\"departure_date\" 
                                value=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 91, $this->source); })()), "departureDate", [], "any", false, false, false, 91), "Y-m-d\\TH:i"), "html", null, true);
        yield "\" class=\"form-control\">
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"available_seats\" class=\"form-label\">Places disponibles</label>
                            <input type=\"number\" id=\"available_seats\" name=\"seats\" value=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 96, $this->source); })()), "availableSeats", [], "any", false, false, false, 96), "html", null, true);
        yield "\" 
                                min=\"1\" max=\"10\" class=\"form-control\">
                        </div>
                    </div>
                    
                    <div>
                        <div class=\"form-group\">
                            <label for=\"trajet_id\" class=\"form-label\">Trajet</label>
                            <select id=\"trajet_id\" name=\"trajet_id\" class=\"form-control\">
                                <option value=\"\">-- Sélectionner un trajet --</option>
                                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
            // line 107
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 107), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 107, $this->source); })()), "trajet", [], "any", false, false, false, 107) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 107, $this->source); })()), "trajet", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107) == CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 107)))) {
                yield "selected";
            }
            yield ">
                                        ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "departurePoint", [], "any", false, false, false, 108), "html", null, true);
            yield " → ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "arrivalPoint", [], "any", false, false, false, 108), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "price", [], "any", false, false, false, 108), "html", null, true);
            yield " DT)
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trajet'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        yield "                            </select>
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"conducteur_id\" class=\"form-label\">Conducteur</label>
                            <select id=\"conducteur_id\" name=\"conducteur_id\" class=\"form-control\">
                                <option value=\"\">-- Sélectionner un conducteur --</option>
                                ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["conducteurs"]) || array_key_exists("conducteurs", $context) ? $context["conducteurs"] : (function () { throw new RuntimeError('Variable "conducteurs" does not exist.', 118, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["conducteur"]) {
            // line 119
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conducteur"], "id", [], "any", false, false, false, 119), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 119, $this->source); })()), "driverId", [], "any", false, false, false, 119) == CoreExtension::getAttribute($this->env, $this->source, $context["conducteur"], "id", [], "any", false, false, false, 119))) {
                yield "selected";
            }
            yield ">
                                        ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conducteur"], "prenom", [], "any", false, false, false, 120), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conducteur"], "nom", [], "any", false, false, false, 120), "html", null, true);
            yield "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['conducteur'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "                            </select>
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"status\" class=\"form-label\">Statut</label>
                            <select id=\"status\" name=\"status\" class=\"form-control\">
                                <option value=\"ouvert\" ";
        // line 129
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 129, $this->source); })()), "status", [], "any", false, false, false, 129) == "ouvert")) {
            yield "selected";
        }
        yield ">Ouvert</option>
                                <option value=\"fermé\" ";
        // line 130
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 130, $this->source); })()), "status", [], "any", false, false, false, 130) == "fermé")) {
            yield "selected";
        }
        yield ">Fermé</option>
                                <option value=\"annulé\" ";
        // line 131
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 131, $this->source); })()), "status", [], "any", false, false, false, 131) == "annulé")) {
            yield "selected";
        }
        yield ">Annulé</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class=\"mt-6 flex justify-end space-x-3\">
                    <a href=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonce_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138)]), "html", null, true);
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
        return "admin/annonce/edit.html.twig";
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
        return array (  335 => 138,  323 => 131,  317 => 130,  311 => 129,  303 => 123,  292 => 120,  283 => 119,  279 => 118,  270 => 111,  257 => 108,  248 => 107,  244 => 106,  231 => 96,  223 => 91,  214 => 85,  206 => 80,  184 => 61,  179 => 59,  174 => 56,  161 => 55,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier l'Annonce{% endblock %}

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
            <h1 class=\"text-2xl font-bold text-gray-800\">Modifier l'Annonce #{{ annonce.id }}</h1>
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
                <h2 class=\"text-xl font-semibold text-gray-800\">Modifier les informations</h2>
            </div>

            <form method=\"post\" class=\"p-6\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div>
                        <div class=\"form-group\">
                            <label for=\"titre\" class=\"form-label\">Titre</label>
                            <input type=\"text\" id=\"titre\" name=\"titre\" value=\"{{ annonce.titre }}\" class=\"form-control\">
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"description\" class=\"form-label\">Description</label>
                            <textarea id=\"description\" name=\"description\" rows=\"4\" class=\"form-control\">{{ annonce.description }}</textarea>
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"departure_date\" class=\"form-label\">Date de départ</label>
                            <input type=\"datetime-local\" id=\"departure_date\" name=\"departure_date\" 
                                value=\"{{ annonce.departureDate|date('Y-m-d\\\\TH:i') }}\" class=\"form-control\">
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"available_seats\" class=\"form-label\">Places disponibles</label>
                            <input type=\"number\" id=\"available_seats\" name=\"seats\" value=\"{{ annonce.availableSeats }}\" 
                                min=\"1\" max=\"10\" class=\"form-control\">
                        </div>
                    </div>
                    
                    <div>
                        <div class=\"form-group\">
                            <label for=\"trajet_id\" class=\"form-label\">Trajet</label>
                            <select id=\"trajet_id\" name=\"trajet_id\" class=\"form-control\">
                                <option value=\"\">-- Sélectionner un trajet --</option>
                                {% for trajet in trajets %}
                                    <option value=\"{{ trajet.id }}\" {% if annonce.trajet and annonce.trajet.id == trajet.id %}selected{% endif %}>
                                        {{ trajet.departurePoint }} → {{ trajet.arrivalPoint }} ({{ trajet.price }} DT)
                                    </option>
                                {% endfor %}
                            </select>
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"conducteur_id\" class=\"form-label\">Conducteur</label>
                            <select id=\"conducteur_id\" name=\"conducteur_id\" class=\"form-control\">
                                <option value=\"\">-- Sélectionner un conducteur --</option>
                                {% for conducteur in conducteurs %}
                                    <option value=\"{{ conducteur.id }}\" {% if annonce.driverId == conducteur.id %}selected{% endif %}>
                                        {{ conducteur.prenom }} {{ conducteur.nom }}
                                    </option>
                                {% endfor %}
                            </select>
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"status\" class=\"form-label\">Statut</label>
                            <select id=\"status\" name=\"status\" class=\"form-control\">
                                <option value=\"ouvert\" {% if annonce.status == 'ouvert' %}selected{% endif %}>Ouvert</option>
                                <option value=\"fermé\" {% if annonce.status == 'fermé' %}selected{% endif %}>Fermé</option>
                                <option value=\"annulé\" {% if annonce.status == 'annulé' %}selected{% endif %}>Annulé</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class=\"mt-6 flex justify-end space-x-3\">
                    <a href=\"{{ path('app_admin_annonce_show', {'id': annonce.id}) }}\" class=\"btn btn-blue\">
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
{% endblock %} ", "admin/annonce/edit.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\admin\\annonce\\edit.html.twig");
    }
}
