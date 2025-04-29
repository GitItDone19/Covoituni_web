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

/* passager/event_show.html.twig */
class __TwigTemplate_f74641d8a7a974d69568364536c5fade extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/event_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/event_show.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "passager/event_show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield " - Détails de l'événement";
        
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
            <div class=\"flex justify-between items-start mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>
                    <div class=\"flex items-center\">
                        <span class=\"px-3 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full mr-2\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 12, $this->source); })()), "typeEvent", [], "any", false, false, false, 12), "nom", [], "any", false, false, false, 12), "html", null, true);
        yield "</span>
                        <span class=\"px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 13, $this->source); })()), "status", [], "any", false, false, false, 13), "html", null, true);
        yield "</span>
                    </div>
                </div>
                <div class=\"flex space-x-3\">
                    <a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_event_annonces", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "idEvent", [], "any", false, false, false, 17)]), "html", null, true);
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-primary text-white rounded-xl hover:bg-primary-dark transition duration-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2\" />
                        </svg>
                        Voir les covoiturages
                    </a>
                    <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_events");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                        </svg>
                        Retour aux événements
                    </a>
                </div>
            </div>

            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "flashes", ["success"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            yield "                <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "            
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "flashes", ["error"], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 39
            yield "                <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "            
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", ["info"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 45
            yield "                <div class=\"bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "
            <div class=\"bg-white rounded-xl shadow-md overflow-hidden mb-6\">
                <div class=\"p-6\">
                    <div class=\"flex flex-col md:flex-row md:justify-between md:items-start gap-6\">
                        <div class=\"md:w-2/3 space-y-4\">
                            <div>
                                <h2 class=\"text-xl font-semibold text-gray-800 mb-2\">Informations</h2>
                                <div class=\"space-y-2\">
                                    <div class=\"flex items-start\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                        </svg>
                                        <span class=\"text-gray-700\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 62, $this->source); })()), "lieu", [], "any", false, false, false, 62), "html", null, true);
        yield "</span>
                                    </div>
                                    <div class=\"flex items-start\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                        </svg>
                                        <span class=\"text-gray-700\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 68, $this->source); })()), "dateEvent", [], "any", false, false, false, 68), "d/m/Y"), "html", null, true);
        yield "</span>
                                    </div>
                                    <div class=\"flex items-start\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                        </svg>
                                        <span class=\"text-gray-700\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 74, $this->source); })()), "heureEvent", [], "any", false, false, false, 74), "H:i"), "html", null, true);
        yield "</span>
                                    </div>
                                </div>
                            </div>
                            
                            ";
        // line 79
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 79, $this->source); })()), "description", [], "any", false, false, false, 79)) {
            // line 80
            yield "                                <div>
                                    <h2 class=\"text-xl font-semibold text-gray-800 mb-2\">Description</h2>
                                    <p class=\"text-gray-700\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 82, $this->source); })()), "description", [], "any", false, false, false, 82), "html", null, true);
            yield "</p>
                                </div>
                            ";
        }
        // line 85
        yield "                        </div>
                        
                        <div class=\"md:w-1/3\">
                            <div class=\"bg-gray-50 rounded-xl p-4 text-center\">
                                <h2 class=\"text-xl font-semibold text-gray-800 mb-4\">Participation</h2>
                                
                                ";
        // line 91
        if ((isset($context["isParticipant"]) || array_key_exists("isParticipant", $context) ? $context["isParticipant"] : (function () { throw new RuntimeError('Variable "isParticipant" does not exist.', 91, $this->source); })())) {
            // line 92
            yield "                                    <div class=\"bg-green-100 text-green-800 rounded-xl p-4 mb-4\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-8 w-8 mx-auto mb-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                        </svg>
                                        <p class=\"font-medium\">Vous participez à cet événement</p>
                                    </div>
                                    
                                    <form action=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_event_annuler_participation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 99, $this->source); })()), "idEvent", [], "any", false, false, false, 99)]), "html", null, true);
            yield "\" method=\"POST\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler votre participation?')\">
                                        <button type=\"submit\" class=\"inline-flex items-center justify-center w-full px-4 py-2 bg-red-100 text-red-700 rounded-xl hover:bg-red-200 transition duration-300\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                            </svg>
                                            Annuler ma participation
                                        </button>
                                    </form>
                                ";
        } else {
            // line 108
            yield "                                    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_event_participer", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 108, $this->source); })()), "idEvent", [], "any", false, false, false, 108)]), "html", null, true);
            yield "\" method=\"POST\">
                                        <button type=\"submit\" class=\"inline-flex items-center justify-center w-full px-4 py-2 bg-primary text-white rounded-xl hover:bg-primary-dark transition duration-300\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z\" />
                                            </svg>
                                            Participer à cet événement
                                        </button>
                                    </form>
                                ";
        }
        // line 117
        yield "                            </div>
                        </div>
                    </div>
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
        return "passager/event_show.html.twig";
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
        return array (  295 => 117,  282 => 108,  270 => 99,  261 => 92,  259 => 91,  251 => 85,  245 => 82,  241 => 80,  239 => 79,  231 => 74,  222 => 68,  213 => 62,  198 => 49,  189 => 46,  186 => 45,  182 => 44,  179 => 43,  170 => 40,  167 => 39,  163 => 38,  160 => 37,  151 => 34,  148 => 33,  144 => 32,  132 => 23,  123 => 17,  116 => 13,  112 => 12,  107 => 10,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}{{ event.nom }} - Détails de l'événement{% endblock %}

{% block content %}
    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"flex justify-between items-start mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">{{ event.nom }}</h1>
                    <div class=\"flex items-center\">
                        <span class=\"px-3 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full mr-2\">{{ event.typeEvent.nom }}</span>
                        <span class=\"px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">{{ event.status }}</span>
                    </div>
                </div>
                <div class=\"flex space-x-3\">
                    <a href=\"{{ path('app_passager_event_annonces', {'id': event.idEvent}) }}\" class=\"inline-flex items-center px-4 py-2 bg-primary text-white rounded-xl hover:bg-primary-dark transition duration-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2\" />
                        </svg>
                        Voir les covoiturages
                    </a>
                    <a href=\"{{ path('app_passager_events') }}\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                        </svg>
                        Retour aux événements
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
            
            {% for message in app.flashes('info') %}
                <div class=\"bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>{{ message }}</p>
                </div>
            {% endfor %}

            <div class=\"bg-white rounded-xl shadow-md overflow-hidden mb-6\">
                <div class=\"p-6\">
                    <div class=\"flex flex-col md:flex-row md:justify-between md:items-start gap-6\">
                        <div class=\"md:w-2/3 space-y-4\">
                            <div>
                                <h2 class=\"text-xl font-semibold text-gray-800 mb-2\">Informations</h2>
                                <div class=\"space-y-2\">
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
                                        <span class=\"text-gray-700\">{{ event.dateEvent|date('d/m/Y') }}</span>
                                    </div>
                                    <div class=\"flex items-start\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                        </svg>
                                        <span class=\"text-gray-700\">{{ event.heureEvent|date('H:i') }}</span>
                                    </div>
                                </div>
                            </div>
                            
                            {% if event.description %}
                                <div>
                                    <h2 class=\"text-xl font-semibold text-gray-800 mb-2\">Description</h2>
                                    <p class=\"text-gray-700\">{{ event.description }}</p>
                                </div>
                            {% endif %}
                        </div>
                        
                        <div class=\"md:w-1/3\">
                            <div class=\"bg-gray-50 rounded-xl p-4 text-center\">
                                <h2 class=\"text-xl font-semibold text-gray-800 mb-4\">Participation</h2>
                                
                                {% if isParticipant %}
                                    <div class=\"bg-green-100 text-green-800 rounded-xl p-4 mb-4\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-8 w-8 mx-auto mb-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                        </svg>
                                        <p class=\"font-medium\">Vous participez à cet événement</p>
                                    </div>
                                    
                                    <form action=\"{{ path('app_passager_event_annuler_participation', {'id': event.idEvent}) }}\" method=\"POST\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler votre participation?')\">
                                        <button type=\"submit\" class=\"inline-flex items-center justify-center w-full px-4 py-2 bg-red-100 text-red-700 rounded-xl hover:bg-red-200 transition duration-300\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                            </svg>
                                            Annuler ma participation
                                        </button>
                                    </form>
                                {% else %}
                                    <form action=\"{{ path('app_passager_event_participer', {'id': event.idEvent}) }}\" method=\"POST\">
                                        <button type=\"submit\" class=\"inline-flex items-center justify-center w-full px-4 py-2 bg-primary text-white rounded-xl hover:bg-primary-dark transition duration-300\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z\" />
                                            </svg>
                                            Participer à cet événement
                                        </button>
                                    </form>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %} ", "passager/event_show.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\passager\\event_show.html.twig");
    }
}
