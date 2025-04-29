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

/* conducteur/event_annonce_edit.html.twig */
class __TwigTemplate_dd23602c9997a87ff70715e2690172ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/event_annonce_edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/event_annonce_edit.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/event_annonce_edit.html.twig", 1);
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

        yield "Modifier l'annonce - Conducteur";
        
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
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Modifier l'annonce</h1>
                    <div class=\"text-gray-600 space-y-1\">
                        <p>Type: ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 12, $this->source); })()), "event", [], "any", false, false, false, 12), "typeEvent", [], "any", false, false, false, 12), "nom", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>
                        <p>Date: ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 13, $this->source); })()), "event", [], "any", false, false, false, 13), "dateEvent", [], "any", false, false, false, 13), "d/m/Y"), "html", null, true);
        yield " à ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 13, $this->source); })()), "event", [], "any", false, false, false, 13), "heureEvent", [], "any", false, false, false, 13), "H:i"), "html", null, true);
        yield "</p>
                        <p>Lieu: ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 14, $this->source); })()), "event", [], "any", false, false, false, 14), "lieu", [], "any", false, false, false, 14), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_event_annonces", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 17, $this->source); })()), "event", [], "any", false, false, false, 17), "idEvent", [], "any", false, false, false, 17)]), "html", null, true);
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour aux annonces
                </a>
            </div>

            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", ["success"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            yield "                <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "            
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", ["error"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 32
            yield "                <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "
            <form action=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_event_annonce_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        yield "\" method=\"post\" class=\"space-y-6\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div>
                        <label for=\"titre\" class=\"block text-sm font-medium text-gray-700 mb-1\">Titre de l'annonce</label>
                        <input type=\"text\" id=\"titre\" name=\"titre\" required
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                               value=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 43, $this->source); })()), "titre", [], "any", false, false, false, 43), "html", null, true);
        yield "\">
                    </div>
                    
                    <div>
                        <label for=\"voiture\" class=\"block text-sm font-medium text-gray-700 mb-1\">Voiture</label>
                        <select id=\"voiture\" name=\"voiture\" required
                                class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                            <option value=\"\">Sélectionnez une voiture</option>
                            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["voiture"]) {
            // line 52
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "id", [], "any", false, false, false, 52), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "id", [], "any", false, false, false, 52) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 52, $this->source); })()), "carId", [], "any", false, false, false, 52))) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "marque", [], "any", false, false, false, 52), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "modele", [], "any", false, false, false, 52), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "plaqueImatriculation", [], "any", false, false, false, 52), "html", null, true);
            yield ")</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['voiture'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "                        </select>
                    </div>
                    
                    <div>
                        <label for=\"departurePoint\" class=\"block text-sm font-medium text-gray-700 mb-1\">Point de départ</label>
                        <input type=\"text\" id=\"departurePoint\" name=\"departurePoint\" required
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                               value=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 61, $this->source); })()), "departurePoint", [], "any", false, false, false, 61), "html", null, true);
        yield "\">
                    </div>
                    
                    <div>
                        <label for=\"arrivalPoint\" class=\"block text-sm font-medium text-gray-700 mb-1\">Point d'arrivée</label>
                        <input type=\"text\" id=\"arrivalPoint\" name=\"arrivalPoint\" required
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                               value=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 68, $this->source); })()), "arrivalPoint", [], "any", false, false, false, 68), "html", null, true);
        yield "\">
                    </div>
                    
                    <div>
                        <label for=\"departureDate\" class=\"block text-sm font-medium text-gray-700 mb-1\">Date de départ</label>
                        <input type=\"date\" id=\"departureDate\" name=\"departureDate\" required
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                               min=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 75, $this->source); })()), "departureDate", [], "any", false, false, false, 75), "Y-m-d"), "html", null, true);
        yield "\">
                    </div>
                    
                    <div>
                        <label for=\"departureTime\" class=\"block text-sm font-medium text-gray-700 mb-1\">Heure de départ</label>
                        <input type=\"time\" id=\"departureTime\" name=\"departureTime\" required
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                               value=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 82, $this->source); })()), "departureDate", [], "any", false, false, false, 82), "H:i"), "html", null, true);
        yield "\">
                    </div>
                    
                    <div>
                        <label for=\"availableSeats\" class=\"block text-sm font-medium text-gray-700 mb-1\">Nombre de places disponibles</label>
                        <input type=\"number\" id=\"availableSeats\" name=\"availableSeats\" required
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                               min=\"1\" max=\"10\" value=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 89, $this->source); })()), "availableSeats", [], "any", false, false, false, 89), "html", null, true);
        yield "\">
                    </div>

                    <div>
                        <label for=\"prix\" class=\"block text-sm font-medium text-gray-700 mb-1\">Prix par place (DT)</label>
                        <input type=\"number\" id=\"prix\" name=\"prix\" required
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                               min=\"0\" step=\"0.01\" value=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 96, $this->source); })()), "prix", [], "any", false, false, false, 96), "html", null, true);
        yield "\">
                    </div>
                </div>
                
                <div>
                    <label for=\"description\" class=\"block text-sm font-medium text-gray-700 mb-1\">Description de l'annonce</label>
                    <textarea id=\"description\" name=\"description\" rows=\"4\"
                              class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 103, $this->source); })()), "description", [], "any", false, false, false, 103), "html", null, true);
        yield "</textarea>
                </div>
                
                <div class=\"flex justify-end\">
                    <button type=\"submit\" 
                            class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                        </svg>
                        Enregistrer les modifications
                    </button>
                </div>
            </form>
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
        return "conducteur/event_annonce_edit.html.twig";
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
        return array (  287 => 103,  277 => 96,  267 => 89,  257 => 82,  245 => 75,  235 => 68,  225 => 61,  216 => 54,  197 => 52,  193 => 51,  182 => 43,  173 => 37,  170 => 36,  161 => 33,  158 => 32,  154 => 31,  151 => 30,  142 => 27,  139 => 26,  135 => 25,  124 => 17,  118 => 14,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Modifier l'annonce - Conducteur{% endblock %}

{% block content %}
    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"flex justify-between items-start mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Modifier l'annonce</h1>
                    <div class=\"text-gray-600 space-y-1\">
                        <p>Type: {{ annonce.event.typeEvent.nom }}</p>
                        <p>Date: {{ annonce.event.dateEvent|date('d/m/Y') }} à {{ annonce.event.heureEvent|date('H:i') }}</p>
                        <p>Lieu: {{ annonce.event.lieu }}</p>
                    </div>
                </div>
                <a href=\"{{ path('app_conducteur_event_annonces', {'id': annonce.event.idEvent}) }}\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour aux annonces
                </a>
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

            <form action=\"{{ path('app_conducteur_event_annonce_edit', {'id': annonce.id}) }}\" method=\"post\" class=\"space-y-6\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div>
                        <label for=\"titre\" class=\"block text-sm font-medium text-gray-700 mb-1\">Titre de l'annonce</label>
                        <input type=\"text\" id=\"titre\" name=\"titre\" required
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                               value=\"{{ annonce.titre }}\">
                    </div>
                    
                    <div>
                        <label for=\"voiture\" class=\"block text-sm font-medium text-gray-700 mb-1\">Voiture</label>
                        <select id=\"voiture\" name=\"voiture\" required
                                class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                            <option value=\"\">Sélectionnez une voiture</option>
                            {% for voiture in voitures %}
                                <option value=\"{{ voiture.id }}\" {% if voiture.id == annonce.carId %}selected{% endif %}>{{ voiture.marque }} {{ voiture.modele }} ({{ voiture.plaqueImatriculation }})</option>
                            {% endfor %}
                        </select>
                    </div>
                    
                    <div>
                        <label for=\"departurePoint\" class=\"block text-sm font-medium text-gray-700 mb-1\">Point de départ</label>
                        <input type=\"text\" id=\"departurePoint\" name=\"departurePoint\" required
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                               value=\"{{ annonce.departurePoint }}\">
                    </div>
                    
                    <div>
                        <label for=\"arrivalPoint\" class=\"block text-sm font-medium text-gray-700 mb-1\">Point d'arrivée</label>
                        <input type=\"text\" id=\"arrivalPoint\" name=\"arrivalPoint\" required
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                               value=\"{{ annonce.arrivalPoint }}\">
                    </div>
                    
                    <div>
                        <label for=\"departureDate\" class=\"block text-sm font-medium text-gray-700 mb-1\">Date de départ</label>
                        <input type=\"date\" id=\"departureDate\" name=\"departureDate\" required
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                               min=\"{{ 'now'|date('Y-m-d') }}\" value=\"{{ annonce.departureDate|date('Y-m-d') }}\">
                    </div>
                    
                    <div>
                        <label for=\"departureTime\" class=\"block text-sm font-medium text-gray-700 mb-1\">Heure de départ</label>
                        <input type=\"time\" id=\"departureTime\" name=\"departureTime\" required
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                               value=\"{{ annonce.departureDate|date('H:i') }}\">
                    </div>
                    
                    <div>
                        <label for=\"availableSeats\" class=\"block text-sm font-medium text-gray-700 mb-1\">Nombre de places disponibles</label>
                        <input type=\"number\" id=\"availableSeats\" name=\"availableSeats\" required
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                               min=\"1\" max=\"10\" value=\"{{ annonce.availableSeats }}\">
                    </div>

                    <div>
                        <label for=\"prix\" class=\"block text-sm font-medium text-gray-700 mb-1\">Prix par place (DT)</label>
                        <input type=\"number\" id=\"prix\" name=\"prix\" required
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                               min=\"0\" step=\"0.01\" value=\"{{ annonce.prix }}\">
                    </div>
                </div>
                
                <div>
                    <label for=\"description\" class=\"block text-sm font-medium text-gray-700 mb-1\">Description de l'annonce</label>
                    <textarea id=\"description\" name=\"description\" rows=\"4\"
                              class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">{{ annonce.description }}</textarea>
                </div>
                
                <div class=\"flex justify-end\">
                    <button type=\"submit\" 
                            class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                        </svg>
                        Enregistrer les modifications
                    </button>
                </div>
            </form>
        </div>
    </div>
{% endblock %} ", "conducteur/event_annonce_edit.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\event_annonce_edit.html.twig");
    }
}
