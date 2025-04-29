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

/* passager/events.html.twig */
class __TwigTemplate_f6b52eeca601667945a8fc416b8a651b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/events.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "passager/events.html.twig", 1);
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

        yield "Liste des événements - Passager";
        
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
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Liste des événements</h1>
                    <p class=\"text-gray-600\">Découvrez les événements universitaires et trouvez un covoiturage.</p>
                </div>
            </div>

            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["success"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            yield "                <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "            
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", ["error"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            yield "                <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "
            ";
        // line 27
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 27, $this->source); })())) > 0)) {
            // line 28
            yield "                <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
                    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 30
                yield "                        <div class=\"bg-white rounded-xl shadow-md overflow-hidden\">
                            <div class=\"p-6\">
                                <div class=\"flex justify-between items-start\">
                                    <div>
                                        <h3 class=\"font-bold text-xl text-gray-900\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 34), "html", null, true);
                yield "</h3>
                                        <p class=\"text-gray-600\">";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "typeEvent", [], "any", false, false, false, 35), "nom", [], "any", false, false, false, 35), "html", null, true);
                yield "</p>
                                    </div>
                                    <span class=\"px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 37), "html", null, true);
                yield "</span>
                                </div>
                                
                                <div class=\"mt-4 space-y-2\">
                                    <div class=\"flex items-start\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                        </svg>
                                        <span class=\"text-gray-700\">";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 46), "html", null, true);
                yield "</span>
                                    </div>
                                    <div class=\"flex items-start\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                        </svg>
                                        <span class=\"text-gray-700\">";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateEvent", [], "any", false, false, false, 52), "d/m/Y"), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "heureEvent", [], "any", false, false, false, 52), "H:i"), "html", null, true);
                yield "</span>
                                    </div>
                                </div>
                                
                                ";
                // line 56
                if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 56)) {
                    // line 57
                    yield "                                    <div class=\"mt-4\">
                                        <p class=\"text-sm text-gray-600\">";
                    // line 58
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 58)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 58), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 58), "html", null, true)));
                    yield "</p>
                                    </div>
                                ";
                }
                // line 61
                yield "                                
                                <div class=\"mt-4 flex flex-wrap justify-end space-x-2\">
                                    ";
                // line 63
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["userParticipations"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "idEvent", [], "any", false, false, false, 63), [], "array", true, true, false, 63) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["userParticipations"]) || array_key_exists("userParticipations", $context) ? $context["userParticipations"] : (function () { throw new RuntimeError('Variable "userParticipations" does not exist.', 63, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "idEvent", [], "any", false, false, false, 63), [], "array", false, false, false, 63))) {
                    // line 64
                    yield "                                        <span class=\"inline-flex items-center px-3 py-1.5 bg-gray-100 text-gray-800 text-xs font-medium rounded-lg\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                                            </svg>
                                            Déjà participé
                                        </span>
                                    ";
                } else {
                    // line 71
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "idEvent", [], "any", false, false, false, 71)]), "html", null, true);
                    yield "\" class=\"inline-flex items-center px-3 py-1.5 bg-blue-100 text-blue-800 text-xs font-medium rounded-lg hover:bg-blue-200 transition-colors duration-300\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z\" />
                                            </svg>
                                            Réserver
                                        </a>
                                    ";
                }
                // line 78
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_event_annonces", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "idEvent", [], "any", false, false, false, 78)]), "html", null, true);
                yield "\" class=\"inline-flex items-center px-3 py-1.5 bg-green-100 text-green-800 text-xs font-medium rounded-lg hover:bg-green-200 transition-colors duration-300\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                                        </svg>
                                        Voir covoiturages
                                    </a>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "                </div>
            ";
        } else {
            // line 90
            yield "                <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucun événement trouvé</h3>
                    <p class=\"mt-2 text-gray-600\">Il n'y a actuellement aucun événement disponible.</p>
                </div>
            ";
        }
        // line 98
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
        return "passager/events.html.twig";
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
        return array (  271 => 98,  261 => 90,  257 => 88,  240 => 78,  229 => 71,  220 => 64,  218 => 63,  214 => 61,  208 => 58,  205 => 57,  203 => 56,  194 => 52,  185 => 46,  173 => 37,  168 => 35,  164 => 34,  158 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 23,  134 => 22,  130 => 21,  127 => 20,  118 => 17,  115 => 16,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Liste des événements - Passager{% endblock %}

{% block content %}
    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"flex justify-between items-center mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Liste des événements</h1>
                    <p class=\"text-gray-600\">Découvrez les événements universitaires et trouvez un covoiturage.</p>
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

            {% if events|length > 0 %}
                <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
                    {% for event in events %}
                        <div class=\"bg-white rounded-xl shadow-md overflow-hidden\">
                            <div class=\"p-6\">
                                <div class=\"flex justify-between items-start\">
                                    <div>
                                        <h3 class=\"font-bold text-xl text-gray-900\">{{ event.nom }}</h3>
                                        <p class=\"text-gray-600\">{{ event.typeEvent.nom }}</p>
                                    </div>
                                    <span class=\"px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">{{ event.status }}</span>
                                </div>
                                
                                <div class=\"mt-4 space-y-2\">
                                    <div class=\"flex items-start\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                        </svg>
                                        <span class=\"text-gray-700\">{{ event.lieu }}</span>
                                    </div>
                                    <div class=\"flex items-start\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                        </svg>
                                        <span class=\"text-gray-700\">{{ event.dateEvent|date('d/m/Y') }} à {{ event.heureEvent|date('H:i') }}</span>
                                    </div>
                                </div>
                                
                                {% if event.description %}
                                    <div class=\"mt-4\">
                                        <p class=\"text-sm text-gray-600\">{{ event.description|length > 100 ? event.description|slice(0, 100) ~ '...' : event.description }}</p>
                                    </div>
                                {% endif %}
                                
                                <div class=\"mt-4 flex flex-wrap justify-end space-x-2\">
                                    {% if userParticipations[event.idEvent] is defined and userParticipations[event.idEvent] %}
                                        <span class=\"inline-flex items-center px-3 py-1.5 bg-gray-100 text-gray-800 text-xs font-medium rounded-lg\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                                            </svg>
                                            Déjà participé
                                        </span>
                                    {% else %}
                                        <a href=\"{{ path('app_passager_event_show', {'id': event.idEvent}) }}\" class=\"inline-flex items-center px-3 py-1.5 bg-blue-100 text-blue-800 text-xs font-medium rounded-lg hover:bg-blue-200 transition-colors duration-300\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z\" />
                                            </svg>
                                            Réserver
                                        </a>
                                    {% endif %}
                                    <a href=\"{{ path('app_passager_event_annonces', {'id': event.idEvent}) }}\" class=\"inline-flex items-center px-3 py-1.5 bg-green-100 text-green-800 text-xs font-medium rounded-lg hover:bg-green-200 transition-colors duration-300\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                                        </svg>
                                        Voir covoiturages
                                    </a>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% else %}
                <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucun événement trouvé</h3>
                    <p class=\"mt-2 text-gray-600\">Il n'y a actuellement aucun événement disponible.</p>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %} ", "passager/events.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\passager\\events.html.twig");
    }
}
