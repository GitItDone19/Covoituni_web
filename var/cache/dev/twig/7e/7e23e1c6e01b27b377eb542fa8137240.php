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

/* event/index.html.twig */
class __TwigTemplate_5a5e3d45ee898076c5899c7612e95eeb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/index.html.twig", 1);
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

        yield "Events - CovoitUni";
        
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
        yield "    <div class=\"container mx-auto p-4 max-w-6xl mb-12\">
        <header class=\"mb-10\">
            <h1 class=\"section-title text-3xl md:text-4xl font-bold mb-4\">University Events</h1>
            <p class=\"text-gray-600 max-w-3xl\">Discover and join upcoming events at your university and connect with fellow students.</p>
        </header>
        
        <div class=\"grid grid-cols-1 lg:grid-cols-4 gap-8\">
            <!-- Filter Section -->
            <div class=\"col-span-1\">
                <div class=\"glass-card p-6 sticky top-24\">
                    <h2 class=\"text-lg font-semibold mb-4\">Filter Events</h2>
                    <form action=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\" method=\"get\" class=\"space-y-6\">
                        <div>
                            <label for=\"keyword\" class=\"block text-sm font-medium mb-2\">Keyword</label>
                            <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-input w-full rounded-xl\" placeholder=\"Search events\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "query", [], "any", false, false, false, 20), "get", ["keyword"], "method", false, false, false, 20), "html", null, true);
        yield "\">
                        </div>
                        
                        <div>
                            <label for=\"location\" class=\"block text-sm font-medium mb-2\">Location</label>
                            <input type=\"text\" id=\"location\" name=\"location\" class=\"form-input w-full rounded-xl\" placeholder=\"Event location\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "query", [], "any", false, false, false, 25), "get", ["location"], "method", false, false, false, 25), "html", null, true);
        yield "\">
                        </div>
                        
                        <div>
                            <label for=\"date\" class=\"block text-sm font-medium mb-2\">Date</label>
                            <input type=\"date\" id=\"date\" name=\"date\" class=\"form-input w-full rounded-xl\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "query", [], "any", false, false, false, 30), "get", ["date"], "method", false, false, false, 30), "html", null, true);
        yield "\">
                        </div>
                        
                        <div>
                            <label for=\"type\" class=\"block text-sm font-medium mb-2\">Event Type</label>
                            <select id=\"type\" name=\"type\" class=\"form-select w-full rounded-xl\">
                                <option value=\"\">All Types</option>
                                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["event_types"]) || array_key_exists("event_types", $context) ? $context["event_types"] : (function () { throw new RuntimeError('Variable "event_types" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 38
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "query", [], "any", false, false, false, 38), "get", ["type"], "method", false, false, false, 38) == CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 38))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "nom", [], "any", false, false, false, 38), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                            </select>
                        </div>
                        
                        <button type=\"submit\" class=\"btn btn-primary w-full py-3 rounded-xl font-medium transition-all\">Apply Filters</button>
                        
                        ";
        // line 45
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "query", [], "any", false, false, false, 45), "count", [], "any", false, false, false, 45) > 0)) {
            // line 46
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
            yield "\" class=\"btn btn-outline block text-center border-2 border-primary text-primary hover:bg-primary hover:text-white py-2 rounded-xl font-medium transition-all\">Clear Filters</a>
                        ";
        }
        // line 48
        yield "                    </form>
                </div>
            </div>
            
            <!-- Events List -->
            <div class=\"col-span-1 lg:col-span-3\">
                ";
        // line 54
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 54, $this->source); })())) > 0)) {
            // line 55
            yield "                    <div class=\"card-grid\">
                        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 57
                yield "                            <div class=\"card p-6 hover:shadow-lg transition-all relative\">
                                ";
                // line 58
                if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 58)) {
                    // line 59
                    yield "                                    <div class=\"absolute top-2 right-2 bg-primary text-white text-xs px-2 py-1 rounded-full\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 59), "nom", [], "any", false, false, false, 59), "html", null, true);
                    yield "</div>
                                ";
                }
                // line 61
                yield "                                
                                <h3 class=\"font-semibold text-lg mb-4\">";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 62), "html", null, true);
                yield "</h3>
                                
                                <div class=\"space-y-3 text-sm mb-6\">
                                    <p class=\"flex items-center\">
                                        <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                            </svg>
                                        </span>
                                        ";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 72), "html", null, true);
                yield "
                                    </p>
                                    <p class=\"flex items-center\">
                                        <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                            </svg>
                                        </span>
                                        ";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateEvent", [], "any", false, false, false, 80), "d M Y"), "html", null, true);
                yield "
                                    </p>
                                    <p class=\"flex items-center\">
                                        <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                            </svg>
                                        </span>
                                        ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "heureEvent", [], "any", false, false, false, 88), "H:i"), "html", null, true);
                yield "
                                    </p>
                                    <p class=\"flex items-center\">
                                        <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                                            </svg>
                                        </span>
                                        ";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "participants", [], "any", false, false, false, 96)), "html", null, true);
                yield " participants
                                    </p>
                                </div>
                                
                                <div class=\"flex justify-end\">
                                    <a href=\"";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 101)]), "html", null, true);
                yield "\" class=\"btn btn-primary px-4 py-2 rounded-xl text-sm\">View Event</a>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "                    </div>
                    
                    <div class=\"mt-8 flex justify-center\">
                        ";
            // line 108
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 108, $this->source); })()));
            yield "
                    </div>
                ";
        } else {
            // line 111
            yield "                    <div class=\"glass-card p-8 text-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400 mb-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        <h3 class=\"text-xl font-semibold mb-2\">No events found</h3>
                        <p class=\"text-gray-600 mb-6\">No events match your search criteria. Try adjusting your filters or check back later.</p>
                        <a href=\"";
            // line 117
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
            yield "\" class=\"btn btn-primary inline-block px-6 py-2 rounded-xl\">See All Events</a>
                    </div>
                ";
        }
        // line 120
        yield "            </div>
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
        return "event/index.html.twig";
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
        return array (  297 => 120,  291 => 117,  283 => 111,  277 => 108,  272 => 105,  262 => 101,  254 => 96,  243 => 88,  232 => 80,  221 => 72,  208 => 62,  205 => 61,  199 => 59,  197 => 58,  194 => 57,  190 => 56,  187 => 55,  185 => 54,  177 => 48,  171 => 46,  169 => 45,  162 => 40,  149 => 38,  145 => 37,  135 => 30,  127 => 25,  119 => 20,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Events - CovoitUni{% endblock %}

{% block body %}
    <div class=\"container mx-auto p-4 max-w-6xl mb-12\">
        <header class=\"mb-10\">
            <h1 class=\"section-title text-3xl md:text-4xl font-bold mb-4\">University Events</h1>
            <p class=\"text-gray-600 max-w-3xl\">Discover and join upcoming events at your university and connect with fellow students.</p>
        </header>
        
        <div class=\"grid grid-cols-1 lg:grid-cols-4 gap-8\">
            <!-- Filter Section -->
            <div class=\"col-span-1\">
                <div class=\"glass-card p-6 sticky top-24\">
                    <h2 class=\"text-lg font-semibold mb-4\">Filter Events</h2>
                    <form action=\"{{ path('app_events') }}\" method=\"get\" class=\"space-y-6\">
                        <div>
                            <label for=\"keyword\" class=\"block text-sm font-medium mb-2\">Keyword</label>
                            <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-input w-full rounded-xl\" placeholder=\"Search events\" value=\"{{ app.request.query.get('keyword') }}\">
                        </div>
                        
                        <div>
                            <label for=\"location\" class=\"block text-sm font-medium mb-2\">Location</label>
                            <input type=\"text\" id=\"location\" name=\"location\" class=\"form-input w-full rounded-xl\" placeholder=\"Event location\" value=\"{{ app.request.query.get('location') }}\">
                        </div>
                        
                        <div>
                            <label for=\"date\" class=\"block text-sm font-medium mb-2\">Date</label>
                            <input type=\"date\" id=\"date\" name=\"date\" class=\"form-input w-full rounded-xl\" value=\"{{ app.request.query.get('date') }}\">
                        </div>
                        
                        <div>
                            <label for=\"type\" class=\"block text-sm font-medium mb-2\">Event Type</label>
                            <select id=\"type\" name=\"type\" class=\"form-select w-full rounded-xl\">
                                <option value=\"\">All Types</option>
                                {% for type in event_types %}
                                    <option value=\"{{ type.id }}\" {{ app.request.query.get('type') == type.id ? 'selected' : '' }}>{{ type.nom }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        
                        <button type=\"submit\" class=\"btn btn-primary w-full py-3 rounded-xl font-medium transition-all\">Apply Filters</button>
                        
                        {% if app.request.query.count > 0 %}
                            <a href=\"{{ path('app_events') }}\" class=\"btn btn-outline block text-center border-2 border-primary text-primary hover:bg-primary hover:text-white py-2 rounded-xl font-medium transition-all\">Clear Filters</a>
                        {% endif %}
                    </form>
                </div>
            </div>
            
            <!-- Events List -->
            <div class=\"col-span-1 lg:col-span-3\">
                {% if events|length > 0 %}
                    <div class=\"card-grid\">
                        {% for event in events %}
                            <div class=\"card p-6 hover:shadow-lg transition-all relative\">
                                {% if event.type %}
                                    <div class=\"absolute top-2 right-2 bg-primary text-white text-xs px-2 py-1 rounded-full\">{{ event.type.nom }}</div>
                                {% endif %}
                                
                                <h3 class=\"font-semibold text-lg mb-4\">{{ event.nom }}</h3>
                                
                                <div class=\"space-y-3 text-sm mb-6\">
                                    <p class=\"flex items-center\">
                                        <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                            </svg>
                                        </span>
                                        {{ event.lieu }}
                                    </p>
                                    <p class=\"flex items-center\">
                                        <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                            </svg>
                                        </span>
                                        {{ event.dateEvent|date('d M Y') }}
                                    </p>
                                    <p class=\"flex items-center\">
                                        <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                            </svg>
                                        </span>
                                        {{ event.heureEvent|date('H:i') }}
                                    </p>
                                    <p class=\"flex items-center\">
                                        <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                                            </svg>
                                        </span>
                                        {{ event.participants|length }} participants
                                    </p>
                                </div>
                                
                                <div class=\"flex justify-end\">
                                    <a href=\"{{ path('app_events_show', {'id': event.id}) }}\" class=\"btn btn-primary px-4 py-2 rounded-xl text-sm\">View Event</a>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                    
                    <div class=\"mt-8 flex justify-center\">
                        {{ knp_pagination_render(events) }}
                    </div>
                {% else %}
                    <div class=\"glass-card p-8 text-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400 mb-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        <h3 class=\"text-xl font-semibold mb-2\">No events found</h3>
                        <p class=\"text-gray-600 mb-6\">No events match your search criteria. Try adjusting your filters or check back later.</p>
                        <a href=\"{{ path('app_events') }}\" class=\"btn btn-primary inline-block px-6 py-2 rounded-xl\">See All Events</a>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %} ", "event/index.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\event\\index.html.twig");
    }
}
