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

/* ride/show.html.twig */
class __TwigTemplate_a7aef50a176a93cbfbf471f0dc898347 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ride/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ride/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ride/show.html.twig", 1);
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

        yield "Ride Details - CovoitUni";
        
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
        yield "    <div class=\"container mx-auto p-4 max-w-5xl mb-12\">
        <div class=\"mb-6 flex items-center\">
            <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rides");
        yield "\" class=\"text-primary hover:text-primary-dark transition-all flex items-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                </svg>
                Back to Rides
            </a>
        </div>

        <div class=\"card glass-card p-6 md:p-8 relative overflow-hidden mb-10\">
            <!-- Decorative elements -->
            <div class=\"hidden md:block absolute top-0 right-0 w-32 h-32 bg-primary-light rounded-full blur-xl opacity-10 animate-float\"></div>
            
            <div class=\"relative z-10\">
                <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center mb-6\">
                    <h1 class=\"section-title text-2xl md:text-3xl font-bold mb-2 md:mb-0\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ride"]) || array_key_exists("ride", $context) ? $context["ride"] : (function () { throw new RuntimeError('Variable "ride" does not exist.', 22, $this->source); })()), "titre", [], "any", false, false, false, 22), "html", null, true);
        yield "</h1>
                    <span class=\"font-bold text-primary text-xl md:text-2xl\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ride"]) || array_key_exists("ride", $context) ? $context["ride"] : (function () { throw new RuntimeError('Variable "ride" does not exist.', 23, $this->source); })()), "trajet", [], "any", false, false, false, 23), "price", [], "any", false, false, false, 23), "html", null, true);
        yield " DT</span>
                </div>
                
                <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8 mb-8\">
                    <div class=\"col-span-2\">
                        <div class=\"space-y-6\">
                            <div class=\"space-y-4\">
                                <h2 class=\"text-lg font-semibold\">Journey Details</h2>
                                <div class=\"space-y-3\">
                                    <div class=\"flex items-center\">
                                        <span class=\"w-10 h-10 flex items-center justify-center bg-primary-ultra-light rounded-full mr-4 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                            </svg>
                                        </span>
                                        <div>
                                            <p class=\"text-sm text-gray-500\">From</p>
                                            <p class=\"font-medium\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ride"]) || array_key_exists("ride", $context) ? $context["ride"] : (function () { throw new RuntimeError('Variable "ride" does not exist.', 41, $this->source); })()), "trajet", [], "any", false, false, false, 41), "getDeparturePoint", [], "method", false, false, false, 41), "html", null, true);
        yield "</p>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center\">
                                        <span class=\"w-10 h-10 flex items-center justify-center bg-primary-ultra-light rounded-full mr-4 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                            </svg>
                                        </span>
                                        <div>
                                            <p class=\"text-sm text-gray-500\">To</p>
                                            <p class=\"font-medium\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ride"]) || array_key_exists("ride", $context) ? $context["ride"] : (function () { throw new RuntimeError('Variable "ride" does not exist.', 53, $this->source); })()), "trajet", [], "any", false, false, false, 53), "arrivalPoint", [], "any", false, false, false, 53), "html", null, true);
        yield "</p>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center\">
                                        <span class=\"w-10 h-10 flex items-center justify-center bg-primary-ultra-light rounded-full mr-4 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                            </svg>
                                        </span>
                                        <div>
                                            <p class=\"text-sm text-gray-500\">Date & Time</p>
                                            <p class=\"font-medium\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ride"]) || array_key_exists("ride", $context) ? $context["ride"] : (function () { throw new RuntimeError('Variable "ride" does not exist.', 64, $this->source); })()), "departureDate", [], "any", false, false, false, 64), "d M Y H:i"), "html", null, true);
        yield "</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <h2 class=\"text-lg font-semibold mb-4\">Description</h2>
                                <p class=\"text-gray-700\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ride"]) || array_key_exists("ride", $context) ? $context["ride"] : (function () { throw new RuntimeError('Variable "ride" does not exist.', 72, $this->source); })()), "description", [], "any", false, false, false, 72), "html", null, true);
        yield "</p>
                            </div>
                            
                            ";
        // line 75
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ride"]) || array_key_exists("ride", $context) ? $context["ride"] : (function () { throw new RuntimeError('Variable "ride" does not exist.', 75, $this->source); })()), "preferences", [], "any", false, false, false, 75)) {
            // line 76
            yield "                                <div>
                                    <h2 class=\"text-lg font-semibold mb-4\">Preferences</h2>
                                    <p class=\"text-gray-700\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ride"]) || array_key_exists("ride", $context) ? $context["ride"] : (function () { throw new RuntimeError('Variable "ride" does not exist.', 78, $this->source); })()), "preferences", [], "any", false, false, false, 78), "html", null, true);
            yield "</p>
                                </div>
                            ";
        }
        // line 81
        yield "                        </div>
                    </div>
                    
                    <div class=\"col-span-1\">
                        <div class=\"glass-card p-6 relative\">
                            <h2 class=\"text-lg font-semibold mb-4\">Booking Information</h2>
                            <div class=\"space-y-3 text-sm mb-6\">
                                <p class=\"flex items-center\">
                                    <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                                        </svg>
                                    </span>
                                    ";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ride"]) || array_key_exists("ride", $context) ? $context["ride"] : (function () { throw new RuntimeError('Variable "ride" does not exist.', 94, $this->source); })()), "availableSeats", [], "any", false, false, false, 94), "html", null, true);
        yield " seats available
                                </p>
                                <p class=\"flex items-center\">
                                    <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2z\" />
                                        </svg>
                                    </span>
                                    Driver: ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ride"]) || array_key_exists("ride", $context) ? $context["ride"] : (function () { throw new RuntimeError('Variable "ride" does not exist.', 102, $this->source); })()), "utilisateur", [], "any", false, false, false, 102), "prenom", [], "any", false, false, false, 102), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ride"]) || array_key_exists("ride", $context) ? $context["ride"] : (function () { throw new RuntimeError('Variable "ride" does not exist.', 102, $this->source); })()), "utilisateur", [], "any", false, false, false, 102), "nom", [], "any", false, false, false, 102), "html", null, true);
        yield "
                                </p>
                            </div>
                            
                            <a href=\"#\" class=\"btn btn-primary block text-center py-3 rounded-xl font-medium transition-all ";
        // line 106
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ride"]) || array_key_exists("ride", $context) ? $context["ride"] : (function () { throw new RuntimeError('Variable "ride" does not exist.', 106, $this->source); })()), "availableSeats", [], "any", false, false, false, 106) > 0)) ? ("") : ("opacity-50 cursor-not-allowed"));
        yield "\" ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ride"]) || array_key_exists("ride", $context) ? $context["ride"] : (function () { throw new RuntimeError('Variable "ride" does not exist.', 106, $this->source); })()), "availableSeats", [], "any", false, false, false, 106) > 0)) ? ("") : ("disabled"));
        yield ">
                                ";
        // line 107
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ride"]) || array_key_exists("ride", $context) ? $context["ride"] : (function () { throw new RuntimeError('Variable "ride" does not exist.', 107, $this->source); })()), "availableSeats", [], "any", false, false, false, 107) > 0)) ? ("Reserve a Seat") : ("No Seats Available"));
        yield "
                            </a>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h2 class=\"text-lg font-semibold mb-4\">Vehicle Information</h2>
                    <div class=\"glass-card p-6\">
                        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
                            <div>
                                <p class=\"text-sm text-gray-500 mb-1\">Car Model</p>
                                <p class=\"font-medium\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ride"]) || array_key_exists("ride", $context) ? $context["ride"] : (function () { throw new RuntimeError('Variable "ride" does not exist.', 119, $this->source); })()), "vehiculeModel", [], "any", false, false, false, 119), "html", null, true);
        yield "</p>
                            </div>
                            <div>
                                <p class=\"text-sm text-gray-500 mb-1\">Car Color</p>
                                <p class=\"font-medium\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ride"]) || array_key_exists("ride", $context) ? $context["ride"] : (function () { throw new RuntimeError('Variable "ride" does not exist.', 123, $this->source); })()), "vehiculeColor", [], "any", false, false, false, 123), "html", null, true);
        yield "</p>
                            </div>
                            <div>
                                <p class=\"text-sm text-gray-500 mb-1\">License Plate</p>
                                <p class=\"font-medium\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ride"]) || array_key_exists("ride", $context) ? $context["ride"] : (function () { throw new RuntimeError('Variable "ride" does not exist.', 127, $this->source); })()), "licencePlate", [], "any", false, false, false, 127), "html", null, true);
        yield "</p>
                            </div>
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
        return "ride/show.html.twig";
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
        return array (  274 => 127,  267 => 123,  260 => 119,  245 => 107,  239 => 106,  230 => 102,  219 => 94,  204 => 81,  198 => 78,  194 => 76,  192 => 75,  186 => 72,  175 => 64,  161 => 53,  146 => 41,  125 => 23,  121 => 22,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ride Details - CovoitUni{% endblock %}

{% block body %}
    <div class=\"container mx-auto p-4 max-w-5xl mb-12\">
        <div class=\"mb-6 flex items-center\">
            <a href=\"{{ path('app_rides') }}\" class=\"text-primary hover:text-primary-dark transition-all flex items-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                </svg>
                Back to Rides
            </a>
        </div>

        <div class=\"card glass-card p-6 md:p-8 relative overflow-hidden mb-10\">
            <!-- Decorative elements -->
            <div class=\"hidden md:block absolute top-0 right-0 w-32 h-32 bg-primary-light rounded-full blur-xl opacity-10 animate-float\"></div>
            
            <div class=\"relative z-10\">
                <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center mb-6\">
                    <h1 class=\"section-title text-2xl md:text-3xl font-bold mb-2 md:mb-0\">{{ ride.titre }}</h1>
                    <span class=\"font-bold text-primary text-xl md:text-2xl\">{{ ride.trajet.price }} DT</span>
                </div>
                
                <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8 mb-8\">
                    <div class=\"col-span-2\">
                        <div class=\"space-y-6\">
                            <div class=\"space-y-4\">
                                <h2 class=\"text-lg font-semibold\">Journey Details</h2>
                                <div class=\"space-y-3\">
                                    <div class=\"flex items-center\">
                                        <span class=\"w-10 h-10 flex items-center justify-center bg-primary-ultra-light rounded-full mr-4 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                            </svg>
                                        </span>
                                        <div>
                                            <p class=\"text-sm text-gray-500\">From</p>
                                            <p class=\"font-medium\">{{ ride.trajet.getDeparturePoint() }}</p>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center\">
                                        <span class=\"w-10 h-10 flex items-center justify-center bg-primary-ultra-light rounded-full mr-4 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                            </svg>
                                        </span>
                                        <div>
                                            <p class=\"text-sm text-gray-500\">To</p>
                                            <p class=\"font-medium\">{{ ride.trajet.arrivalPoint }}</p>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center\">
                                        <span class=\"w-10 h-10 flex items-center justify-center bg-primary-ultra-light rounded-full mr-4 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                            </svg>
                                        </span>
                                        <div>
                                            <p class=\"text-sm text-gray-500\">Date & Time</p>
                                            <p class=\"font-medium\">{{ ride.departureDate|date('d M Y H:i') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <h2 class=\"text-lg font-semibold mb-4\">Description</h2>
                                <p class=\"text-gray-700\">{{ ride.description }}</p>
                            </div>
                            
                            {% if ride.preferences %}
                                <div>
                                    <h2 class=\"text-lg font-semibold mb-4\">Preferences</h2>
                                    <p class=\"text-gray-700\">{{ ride.preferences }}</p>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                    
                    <div class=\"col-span-1\">
                        <div class=\"glass-card p-6 relative\">
                            <h2 class=\"text-lg font-semibold mb-4\">Booking Information</h2>
                            <div class=\"space-y-3 text-sm mb-6\">
                                <p class=\"flex items-center\">
                                    <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                                        </svg>
                                    </span>
                                    {{ ride.availableSeats }} seats available
                                </p>
                                <p class=\"flex items-center\">
                                    <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2z\" />
                                        </svg>
                                    </span>
                                    Driver: {{ ride.utilisateur.prenom }} {{ ride.utilisateur.nom }}
                                </p>
                            </div>
                            
                            <a href=\"#\" class=\"btn btn-primary block text-center py-3 rounded-xl font-medium transition-all {{ ride.availableSeats > 0 ? '' : 'opacity-50 cursor-not-allowed' }}\" {{ ride.availableSeats > 0 ? '' : 'disabled' }}>
                                {{ ride.availableSeats > 0 ? 'Reserve a Seat' : 'No Seats Available' }}
                            </a>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h2 class=\"text-lg font-semibold mb-4\">Vehicle Information</h2>
                    <div class=\"glass-card p-6\">
                        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
                            <div>
                                <p class=\"text-sm text-gray-500 mb-1\">Car Model</p>
                                <p class=\"font-medium\">{{ ride.vehiculeModel }}</p>
                            </div>
                            <div>
                                <p class=\"text-sm text-gray-500 mb-1\">Car Color</p>
                                <p class=\"font-medium\">{{ ride.vehiculeColor }}</p>
                            </div>
                            <div>
                                <p class=\"text-sm text-gray-500 mb-1\">License Plate</p>
                                <p class=\"font-medium\">{{ ride.licencePlate }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %} ", "ride/show.html.twig", "D:\\Covoituni_web-master\\templates\\ride\\show.html.twig");
    }
}
