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

/* ride/index.html.twig */
class __TwigTemplate_5f682c1b4ca2c811db9dd868209315df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ride/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ride/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ride/index.html.twig", 1);
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

        yield "Rides - CovoitUni";
        
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
            <h1 class=\"section-title text-3xl md:text-4xl font-bold mb-4\">Available Rides</h1>
            <p class=\"text-gray-600 max-w-3xl\">Find and book rides to and from your university. Filter by your preferences to find the perfect match for your journey.</p>
        </header>
        
        <div class=\"grid grid-cols-1 lg:grid-cols-4 gap-8\">
            <!-- Filter Section -->
            <div class=\"col-span-1\">
                <div class=\"glass-card p-6 sticky top-24\">
                    <h2 class=\"text-lg font-semibold mb-4\">Filter Rides</h2>
                    <form action=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rides");
        yield "\" method=\"get\" class=\"space-y-6\">
                        <div>
                            <label for=\"departure\" class=\"block text-sm font-medium mb-2\">Departure</label>
                            <input type=\"text\" id=\"departure\" name=\"departure\" class=\"form-input w-full rounded-xl\" placeholder=\"City or location\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "query", [], "any", false, false, false, 20), "get", ["departure"], "method", false, false, false, 20), "html", null, true);
        yield "\">
                        </div>
                        
                        <div>
                            <label for=\"arrival\" class=\"block text-sm font-medium mb-2\">Arrival</label>
                            <input type=\"text\" id=\"arrival\" name=\"arrival\" class=\"form-input w-full rounded-xl\" placeholder=\"City or location\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "query", [], "any", false, false, false, 25), "get", ["arrival"], "method", false, false, false, 25), "html", null, true);
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
                            <label for=\"seats\" class=\"block text-sm font-medium mb-2\">Seats Needed</label>
                            <select id=\"seats\" name=\"seats\" class=\"form-select w-full rounded-xl\">
                                <option value=\"\">Any</option>
                                <option value=\"1\" ";
        // line 37
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "query", [], "any", false, false, false, 37), "get", ["seats"], "method", false, false, false, 37) == "1")) ? ("selected") : (""));
        yield ">1</option>
                                <option value=\"2\" ";
        // line 38
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "query", [], "any", false, false, false, 38), "get", ["seats"], "method", false, false, false, 38) == "2")) ? ("selected") : (""));
        yield ">2</option>
                                <option value=\"3\" ";
        // line 39
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "query", [], "any", false, false, false, 39), "get", ["seats"], "method", false, false, false, 39) == "3")) ? ("selected") : (""));
        yield ">3</option>
                                <option value=\"4\" ";
        // line 40
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "query", [], "any", false, false, false, 40), "get", ["seats"], "method", false, false, false, 40) == "4")) ? ("selected") : (""));
        yield ">4+</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for=\"price\" class=\"block text-sm font-medium mb-2\">Max Price</label>
                            <input type=\"number\" id=\"price\" name=\"price\" class=\"form-input w-full rounded-xl\" placeholder=\"DT\" value=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "request", [], "any", false, false, false, 46), "query", [], "any", false, false, false, 46), "get", ["price"], "method", false, false, false, 46), "html", null, true);
        yield "\">
                        </div>
                        
                        <button type=\"submit\" class=\"btn btn-primary w-full py-3 rounded-xl font-medium transition-all\">Apply Filters</button>
                        
                        ";
        // line 51
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "query", [], "any", false, false, false, 51), "count", [], "any", false, false, false, 51) > 0)) {
            // line 52
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rides");
            yield "\" class=\"btn btn-outline block text-center border-2 border-primary text-primary hover:bg-primary hover:text-white py-2 rounded-xl font-medium transition-all\">Clear Filters</a>
                        ";
        }
        // line 54
        yield "                    </form>
                </div>
            </div>
            
            <!-- Rides List -->
            <div class=\"col-span-1 lg:col-span-3\">
                ";
        // line 60
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["rides"]) || array_key_exists("rides", $context) ? $context["rides"] : (function () { throw new RuntimeError('Variable "rides" does not exist.', 60, $this->source); })())) > 0)) {
            // line 61
            yield "                    <div class=\"card-grid\">
                        ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rides"]) || array_key_exists("rides", $context) ? $context["rides"] : (function () { throw new RuntimeError('Variable "rides" does not exist.', 62, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ride"]) {
                // line 63
                yield "                            <div class=\"card p-6 hover:shadow-lg transition-all relative\">
                                <div class=\"flex justify-between items-start mb-4\">
                                    <h3 class=\"font-semibold text-lg\">";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ride"], "titre", [], "any", false, false, false, 65), "html", null, true);
                yield "</h3>
                                    <span class=\"font-bold text-primary text-xl\">";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ride"], "trajet", [], "any", false, false, false, 66), "price", [], "any", false, false, false, 66), "html", null, true);
                yield " DT</span>
                                </div>
                                
                                <div class=\"space-y-3 text-sm mb-6\">
                                    <p class=\"flex items-center\">
                                        <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                            </svg>
                                        </span>
                                        From: ";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ride"], "trajet", [], "any", false, false, false, 77), "departurePoint", [], "any", false, false, false, 77), "html", null, true);
                yield "
                                    </p>
                                    <p class=\"flex items-center\">
                                        <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                            </svg>
                                        </span>
                                        To: ";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ride"], "trajet", [], "any", false, false, false, 86), "arrivalPoint", [], "any", false, false, false, 86), "html", null, true);
                yield "
                                    </p>
                                    <p class=\"flex items-center\">
                                        <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                            </svg>
                                        </span>
                                        ";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ride"], "departureDate", [], "any", false, false, false, 94), "d M Y H:i"), "html", null, true);
                yield "
                                    </p>
                                    <p class=\"flex items-center\">
                                        <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                                            </svg>
                                        </span>
                                        ";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ride"], "availableSeats", [], "any", false, false, false, 102), "html", null, true);
                yield " seats available
                                    </p>
                                </div>
                                
                                <div class=\"flex justify-end\">
                                    <a href=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rides_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ride"], "id", [], "any", false, false, false, 107)]), "html", null, true);
                yield "\" class=\"btn btn-primary px-4 py-2 rounded-xl text-sm\">View Details</a>
                                </div>
                                
                                ";
                // line 110
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["ride"], "availableSeats", [], "any", false, false, false, 110) <= 1)) {
                    // line 111
                    yield "                                    <div class=\"absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full\">Limited seats!</div>
                                ";
                }
                // line 113
                yield "                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ride'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            yield "                    </div>
                    
                    <div class=\"mt-8 flex justify-center\">
                        ";
            // line 118
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["rides"]) || array_key_exists("rides", $context) ? $context["rides"] : (function () { throw new RuntimeError('Variable "rides" does not exist.', 118, $this->source); })()));
            yield "
                    </div>
                ";
        } else {
            // line 121
            yield "                    <div class=\"glass-card p-8 text-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400 mb-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        <h3 class=\"text-xl font-semibold mb-2\">No rides found</h3>
                        <p class=\"text-gray-600 mb-6\">No rides match your search criteria. Try adjusting your filters or check back later.</p>
                        <a href=\"";
            // line 127
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rides");
            yield "\" class=\"btn btn-primary inline-block px-6 py-2 rounded-xl\">See All Rides</a>
                    </div>
                ";
        }
        // line 130
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
        return "ride/index.html.twig";
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
        return array (  307 => 130,  301 => 127,  293 => 121,  287 => 118,  282 => 115,  275 => 113,  271 => 111,  269 => 110,  263 => 107,  255 => 102,  244 => 94,  233 => 86,  221 => 77,  207 => 66,  203 => 65,  199 => 63,  195 => 62,  192 => 61,  190 => 60,  182 => 54,  176 => 52,  174 => 51,  166 => 46,  157 => 40,  153 => 39,  149 => 38,  145 => 37,  135 => 30,  127 => 25,  119 => 20,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Rides - CovoitUni{% endblock %}

{% block body %}
    <div class=\"container mx-auto p-4 max-w-6xl mb-12\">
        <header class=\"mb-10\">
            <h1 class=\"section-title text-3xl md:text-4xl font-bold mb-4\">Available Rides</h1>
            <p class=\"text-gray-600 max-w-3xl\">Find and book rides to and from your university. Filter by your preferences to find the perfect match for your journey.</p>
        </header>
        
        <div class=\"grid grid-cols-1 lg:grid-cols-4 gap-8\">
            <!-- Filter Section -->
            <div class=\"col-span-1\">
                <div class=\"glass-card p-6 sticky top-24\">
                    <h2 class=\"text-lg font-semibold mb-4\">Filter Rides</h2>
                    <form action=\"{{ path('app_rides') }}\" method=\"get\" class=\"space-y-6\">
                        <div>
                            <label for=\"departure\" class=\"block text-sm font-medium mb-2\">Departure</label>
                            <input type=\"text\" id=\"departure\" name=\"departure\" class=\"form-input w-full rounded-xl\" placeholder=\"City or location\" value=\"{{ app.request.query.get('departure') }}\">
                        </div>
                        
                        <div>
                            <label for=\"arrival\" class=\"block text-sm font-medium mb-2\">Arrival</label>
                            <input type=\"text\" id=\"arrival\" name=\"arrival\" class=\"form-input w-full rounded-xl\" placeholder=\"City or location\" value=\"{{ app.request.query.get('arrival') }}\">
                        </div>
                        
                        <div>
                            <label for=\"date\" class=\"block text-sm font-medium mb-2\">Date</label>
                            <input type=\"date\" id=\"date\" name=\"date\" class=\"form-input w-full rounded-xl\" value=\"{{ app.request.query.get('date') }}\">
                        </div>
                        
                        <div>
                            <label for=\"seats\" class=\"block text-sm font-medium mb-2\">Seats Needed</label>
                            <select id=\"seats\" name=\"seats\" class=\"form-select w-full rounded-xl\">
                                <option value=\"\">Any</option>
                                <option value=\"1\" {{ app.request.query.get('seats') == '1' ? 'selected' : '' }}>1</option>
                                <option value=\"2\" {{ app.request.query.get('seats') == '2' ? 'selected' : '' }}>2</option>
                                <option value=\"3\" {{ app.request.query.get('seats') == '3' ? 'selected' : '' }}>3</option>
                                <option value=\"4\" {{ app.request.query.get('seats') == '4' ? 'selected' : '' }}>4+</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for=\"price\" class=\"block text-sm font-medium mb-2\">Max Price</label>
                            <input type=\"number\" id=\"price\" name=\"price\" class=\"form-input w-full rounded-xl\" placeholder=\"DT\" value=\"{{ app.request.query.get('price') }}\">
                        </div>
                        
                        <button type=\"submit\" class=\"btn btn-primary w-full py-3 rounded-xl font-medium transition-all\">Apply Filters</button>
                        
                        {% if app.request.query.count > 0 %}
                            <a href=\"{{ path('app_rides') }}\" class=\"btn btn-outline block text-center border-2 border-primary text-primary hover:bg-primary hover:text-white py-2 rounded-xl font-medium transition-all\">Clear Filters</a>
                        {% endif %}
                    </form>
                </div>
            </div>
            
            <!-- Rides List -->
            <div class=\"col-span-1 lg:col-span-3\">
                {% if rides|length > 0 %}
                    <div class=\"card-grid\">
                        {% for ride in rides %}
                            <div class=\"card p-6 hover:shadow-lg transition-all relative\">
                                <div class=\"flex justify-between items-start mb-4\">
                                    <h3 class=\"font-semibold text-lg\">{{ ride.titre }}</h3>
                                    <span class=\"font-bold text-primary text-xl\">{{ ride.trajet.price }} DT</span>
                                </div>
                                
                                <div class=\"space-y-3 text-sm mb-6\">
                                    <p class=\"flex items-center\">
                                        <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                            </svg>
                                        </span>
                                        From: {{ ride.trajet.departurePoint }}
                                    </p>
                                    <p class=\"flex items-center\">
                                        <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                            </svg>
                                        </span>
                                        To: {{ ride.trajet.arrivalPoint }}
                                    </p>
                                    <p class=\"flex items-center\">
                                        <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                            </svg>
                                        </span>
                                        {{ ride.departureDate|date('d M Y H:i') }}
                                    </p>
                                    <p class=\"flex items-center\">
                                        <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                                            </svg>
                                        </span>
                                        {{ ride.availableSeats }} seats available
                                    </p>
                                </div>
                                
                                <div class=\"flex justify-end\">
                                    <a href=\"{{ path('app_rides_show', {'id': ride.id}) }}\" class=\"btn btn-primary px-4 py-2 rounded-xl text-sm\">View Details</a>
                                </div>
                                
                                {% if ride.availableSeats <= 1 %}
                                    <div class=\"absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full\">Limited seats!</div>
                                {% endif %}
                            </div>
                        {% endfor %}
                    </div>
                    
                    <div class=\"mt-8 flex justify-center\">
                        {{ knp_pagination_render(rides) }}
                    </div>
                {% else %}
                    <div class=\"glass-card p-8 text-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400 mb-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        <h3 class=\"text-xl font-semibold mb-2\">No rides found</h3>
                        <p class=\"text-gray-600 mb-6\">No rides match your search criteria. Try adjusting your filters or check back later.</p>
                        <a href=\"{{ path('app_rides') }}\" class=\"btn btn-primary inline-block px-6 py-2 rounded-xl\">See All Rides</a>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %} ", "ride/index.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\ride\\index.html.twig");
    }
}
