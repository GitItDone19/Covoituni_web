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

/* conducteur/participations_evenements.html.twig */
class __TwigTemplate_5802f65f107d2d770fede003867e2566 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/participations_evenements.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/participations_evenements.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conducteur/participations_evenements.html.twig", 1);
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

        yield "Mes participations aux événements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8\">
    <h1 class=\"text-3xl font-bold text-gray-900 mb-2\">Mes participations aux événements</h1>
    
    <p class=\"text-lg text-gray-600 mb-6\">
        Cette page affiche la liste des événements auxquels vous participez en tant que passager ou conducteur.
    </p>
    
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["success"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            yield "        <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded\">
            ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "    
    ";
        // line 19
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["participations"]) || array_key_exists("participations", $context) ? $context["participations"] : (function () { throw new RuntimeError('Variable "participations" does not exist.', 19, $this->source); })()))) {
            // line 20
            yield "        <div class=\"bg-white shadow-md rounded-lg p-8 text-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
            </svg>
            <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucune participation</h3>
            <p class=\"mt-2 text-gray-600\">Vous n'êtes inscrit à aucun événement pour le moment.</p>
            <a href=\"";
            // line 26
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_events");
            yield "\" class=\"mt-4 inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition duration-150\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                </svg>
                Voir les événements
            </a>
        </div>
    ";
        } else {
            // line 34
            yield "        <div class=\"bg-white shadow-md rounded-lg overflow-hidden\">
            <table class=\"min-w-full divide-y divide-gray-200\">
                <thead class=\"bg-gray-50\">
                    <tr>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Événement</th>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Date de l'événement</th>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Rôle</th>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Date d'inscription</th>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Commentaire</th>
                        ";
            // line 43
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "roleCode", [], "any", false, false, false, 43) == "CONDUCTEUR")) {
                // line 44
                yield "                        <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                        ";
            }
            // line 46
            yield "                    </tr>
                </thead>
                <tbody class=\"bg-white divide-y divide-gray-200\">
                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participations"]) || array_key_exists("participations", $context) ? $context["participations"] : (function () { throw new RuntimeError('Variable "participations" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 50
                yield "                        <tr class=\"hover:bg-gray-50\">
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                <a href=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "event", [], "any", false, false, false, 52), "idEvent", [], "any", false, false, false, 52)]), "html", null, true);
                yield "\" class=\"text-indigo-600 hover:text-indigo-900 hover:underline font-medium\">
                                    ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "event", [], "any", false, false, false, 53), "nom", [], "any", false, false, false, 53), "html", null, true);
                yield "
                                </a>
                            </td>
                            <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                                <div class=\"flex items-center\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                    </svg>
                                    ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "event", [], "any", false, false, false, 61), "dateEvent", [], "any", false, false, false, 61), "d/m/Y"), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "event", [], "any", false, false, false, 61), "heureEvent", [], "any", false, false, false, 61), "H:i"), "html", null, true);
                yield "
                                </div>
                            </td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                ";
                // line 65
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "role", [], "any", false, false, false, 65) == "conducteur")) {
                    // line 66
                    yield "                                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">Conducteur</span>
                                ";
                } else {
                    // line 68
                    yield "                                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800\">Passager</span>
                                ";
                }
                // line 70
                yield "                            </td>
                            <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                                <div class=\"flex items-center\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                    </svg>
                                    ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "dateInscription", [], "any", false, false, false, 76), "d/m/Y H:i"), "html", null, true);
                yield "
                                </div>
                            </td>
                            <td class=\"px-6 py-4 text-sm text-gray-500\">
                                ";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "auteur", [], "any", false, false, false, 80), "html", null, true);
                yield "
                                ";
                // line 81
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "role", [], "any", false, false, false, 81) == "conducteur") && CoreExtension::getAttribute($this->env, $this->source, $context["p"], "utilisateur", [], "any", false, false, false, 81))) {
                    // line 82
                    yield "                                    <div class=\"mt-1 text-xs text-gray-600\">
                                        <span class=\"font-semibold\">Passager :</span> ";
                    // line 83
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "utilisateur", [], "any", false, false, false, 83), "prenom", [], "any", false, false, false, 83), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "utilisateur", [], "any", false, false, false, 83), "nom", [], "any", false, false, false, 83), "html", null, true);
                    yield "
                                    </div>
                                ";
                }
                // line 86
                yield "                            </td>
                            ";
                // line 87
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "roleCode", [], "any", false, false, false, 87) == "CONDUCTEUR")) {
                    // line 88
                    yield "                            <td class=\"px-6 py-4 whitespace-nowrap text-right text-sm font-medium\">
                                <a href=\"";
                    // line 89
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_event_participants", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "event", [], "any", false, false, false, 89), "idEvent", [], "any", false, false, false, 89)]), "html", null, true);
                    yield "\" class=\"inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded text-white bg-indigo-600 hover:bg-indigo-700\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                                    </svg>
                                    Voir participants
                                </a>
                            </td>
                            ";
                }
                // line 97
                yield "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "                </tbody>
            </table>
        </div>
    ";
        }
        // line 103
        yield "    
    <div class=\"mt-6\">
        <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_dashboard");
        yield "\" class=\"inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
            </svg>
            Retour au tableau de bord
        </a>
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
        return "conducteur/participations_evenements.html.twig";
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
        return array (  281 => 105,  277 => 103,  271 => 99,  264 => 97,  253 => 89,  250 => 88,  248 => 87,  245 => 86,  237 => 83,  234 => 82,  232 => 81,  228 => 80,  221 => 76,  213 => 70,  209 => 68,  205 => 66,  203 => 65,  194 => 61,  183 => 53,  179 => 52,  175 => 50,  171 => 49,  166 => 46,  162 => 44,  160 => 43,  149 => 34,  138 => 26,  130 => 20,  128 => 19,  125 => 18,  116 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes participations aux événements{% endblock %}

{% block body %}
<div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8\">
    <h1 class=\"text-3xl font-bold text-gray-900 mb-2\">Mes participations aux événements</h1>
    
    <p class=\"text-lg text-gray-600 mb-6\">
        Cette page affiche la liste des événements auxquels vous participez en tant que passager ou conducteur.
    </p>
    
    {% for message in app.flashes('success') %}
        <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded\">
            {{ message }}
        </div>
    {% endfor %}
    
    {% if participations is empty %}
        <div class=\"bg-white shadow-md rounded-lg p-8 text-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
            </svg>
            <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucune participation</h3>
            <p class=\"mt-2 text-gray-600\">Vous n'êtes inscrit à aucun événement pour le moment.</p>
            <a href=\"{{ path('app_conducteur_events') }}\" class=\"mt-4 inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition duration-150\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                </svg>
                Voir les événements
            </a>
        </div>
    {% else %}
        <div class=\"bg-white shadow-md rounded-lg overflow-hidden\">
            <table class=\"min-w-full divide-y divide-gray-200\">
                <thead class=\"bg-gray-50\">
                    <tr>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Événement</th>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Date de l'événement</th>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Rôle</th>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Date d'inscription</th>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Commentaire</th>
                        {% if app.user.roleCode == 'CONDUCTEUR' %}
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                        {% endif %}
                    </tr>
                </thead>
                <tbody class=\"bg-white divide-y divide-gray-200\">
                    {% for p in participations %}
                        <tr class=\"hover:bg-gray-50\">
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                <a href=\"{{ path('app_conducteur_event_show', {'id': p.event.idEvent}) }}\" class=\"text-indigo-600 hover:text-indigo-900 hover:underline font-medium\">
                                    {{ p.event.nom }}
                                </a>
                            </td>
                            <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                                <div class=\"flex items-center\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                    </svg>
                                    {{ p.event.dateEvent|date('d/m/Y') }} à {{ p.event.heureEvent|date('H:i') }}
                                </div>
                            </td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                {% if p.role == 'conducteur' %}
                                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">Conducteur</span>
                                {% else %}
                                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800\">Passager</span>
                                {% endif %}
                            </td>
                            <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                                <div class=\"flex items-center\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                    </svg>
                                    {{ p.dateInscription|date('d/m/Y H:i') }}
                                </div>
                            </td>
                            <td class=\"px-6 py-4 text-sm text-gray-500\">
                                {{ p.auteur }}
                                {% if p.role == 'conducteur' and p.utilisateur %}
                                    <div class=\"mt-1 text-xs text-gray-600\">
                                        <span class=\"font-semibold\">Passager :</span> {{ p.utilisateur.prenom }} {{ p.utilisateur.nom }}
                                    </div>
                                {% endif %}
                            </td>
                            {% if app.user.roleCode == 'CONDUCTEUR' %}
                            <td class=\"px-6 py-4 whitespace-nowrap text-right text-sm font-medium\">
                                <a href=\"{{ path('app_conducteur_event_participants', {'id': p.event.idEvent}) }}\" class=\"inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded text-white bg-indigo-600 hover:bg-indigo-700\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                                    </svg>
                                    Voir participants
                                </a>
                            </td>
                            {% endif %}
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    {% endif %}
    
    <div class=\"mt-6\">
        <a href=\"{{ path('app_conducteur_dashboard') }}\" class=\"inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
            </svg>
            Retour au tableau de bord
        </a>
    </div>
</div>
{% endblock %} ", "conducteur/participations_evenements.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\participations_evenements.html.twig");
    }
}
