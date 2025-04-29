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

/* passager/reservation.html.twig */
class __TwigTemplate_2cebe45f08ecdb3c66986d84eaaa093a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/reservation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/reservation.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "passager/reservation.html.twig", 1);
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

        yield "Faire une réservation";
        
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
        yield "    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-gray-800\">Réserver un trajet</h1>
        <p class=\"text-gray-600\">Trouvez et réservez votre prochain trajet en covoiturage</p>
    </div>
    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800 flex items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
            </svg>
            Rechercher un trajet
        </h2>
        
        <form action=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rides");
        yield "\" method=\"get\" class=\"space-y-6\">
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div>
                    <label for=\"depart\" class=\"block text-sm font-medium text-gray-700 mb-1\">Lieu de départ</label>
                    <input type=\"text\" id=\"depart\" name=\"depart\" required
                           class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                           placeholder=\"Entrez votre ville de départ\">
                </div>
                
                <div>
                    <label for=\"destination\" class=\"block text-sm font-medium text-gray-700 mb-1\">Destination</label>
                    <input type=\"text\" id=\"destination\" name=\"destination\" required
                           class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                           placeholder=\"Entrez votre ville de destination\">
                </div>
                
                <div>
                    <label for=\"date\" class=\"block text-sm font-medium text-gray-700 mb-1\">Date du trajet</label>
                    <input type=\"date\" id=\"date\" name=\"date\" required
                           class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                           min=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
        yield "\">
                </div>
                
                <div>
                    <label for=\"passengers\" class=\"block text-sm font-medium text-gray-700 mb-1\">Nombre de passagers</label>
                    <select id=\"passengers\" name=\"passengers\" required
                            class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 48
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield " ";
            yield ((($context["i"] > 1)) ? ("passagers") : ("passager"));
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "                    </select>
                </div>
            </div>
            
            <div class=\"flex justify-end\">
                <button type=\"submit\" 
                        class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\" />
                    </svg>
                    Rechercher
                </button>
            </div>
        </form>
    </div>
    
    <div class=\"mt-8\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800\">Mes réservations</h2>
        
        ";
        // line 69
        if ((array_key_exists("reservations", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 69, $this->source); })())) > 0))) {
            // line 70
            yield "            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
                ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 71, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 72
                yield "                    <div class=\"bg-white rounded-xl shadow-md overflow-hidden\">
                        <div class=\"p-6\">
                            <div class=\"flex justify-between items-start\">
                                <div>
                                    <h3 class=\"font-bold text-lg text-gray-900\">";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 76), "departVille", [], "any", false, false, false, 76), "html", null, true);
                yield " → ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 76), "arriveeVille", [], "any", false, false, false, 76), "html", null, true);
                yield "</h3>
                                    <p class=\"text-gray-600\">";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 77), "dateDepart", [], "any", false, false, false, 77), "d M Y"), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 77), "heureDepart", [], "any", false, false, false, 77), "H:i"), "html", null, true);
                yield "</p>
                                </div>
                                <span class=\"px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 79), "html", null, true);
                yield "</span>
                            </div>
                            
                            <div class=\"mt-4 flex items-center\">
                                <div class=\"flex-shrink-0\">
                                    ";
                // line 84
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 84), "conducteur", [], "any", false, false, false, 84), "imagePath", [], "any", false, false, false, 84)) {
                    // line 85
                    yield "                                        <img class=\"h-12 w-12 rounded-full\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 85), "conducteur", [], "any", false, false, false, 85), "imagePath", [], "any", false, false, false, 85)), "html", null, true);
                    yield "\" alt=\"\">
                                    ";
                } else {
                    // line 87
                    yield "                                        <div class=\"h-12 w-12 rounded-full bg-gradient-to-r from-primary to-primary-dark flex items-center justify-center text-white text-lg font-bold\">
                                            ";
                    // line 88
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 88), "conducteur", [], "any", false, false, false, 88), "prenom", [], "any", false, false, false, 88)), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 88), "conducteur", [], "any", false, false, false, 88), "nom", [], "any", false, false, false, 88)), "html", null, true);
                    yield "
                                        </div>
                                    ";
                }
                // line 91
                yield "                                </div>
                                <div class=\"ml-3\">
                                    <p class=\"text-sm font-medium text-gray-900\">";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 93), "conducteur", [], "any", false, false, false, 93), "prenom", [], "any", false, false, false, 93), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 93), "conducteur", [], "any", false, false, false, 93), "nom", [], "any", false, false, false, 93), "html", null, true);
                yield "</p>
                                    <div class=\"flex items-center\">
                                        <span class=\"text-yellow-500\">★</span>
                                        <span class=\"text-xs text-gray-600 ml-1\">";
                // line 96
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, true, false, 96), "conducteur", [], "any", false, true, false, 96), "rating", [], "any", true, true, false, 96) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 96), "conducteur", [], "any", false, false, false, 96), "rating", [], "any", false, false, false, 96)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 96), "conducteur", [], "any", false, false, false, 96), "rating", [], "any", false, false, false, 96), "html", null, true)) : ("4.8"));
                yield "</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"mt-4 flex justify-between\">
                                <div>
                                    <p class=\"text-sm font-medium text-gray-900\">Prix</p>
                                    <p class=\"text-lg font-bold text-primary\">";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 104), "prix", [], "any", false, false, false, 104), "html", null, true);
                yield " €</p>
                                </div>
                                <div class=\"text-right\">
                                    <p class=\"text-sm font-medium text-gray-900\">Places</p>
                                    <p class=\"text-lg font-bold text-gray-900\">";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nombrePassagers", [], "any", false, false, false, 108), "html", null, true);
                yield "</p>
                                </div>
                            </div>
                            
                            <div class=\"mt-4\">
                                <a href=\"";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 113)]), "html", null, true);
                yield "\" class=\"block w-full text-center px-4 py-2 bg-gray-100 text-gray-800 rounded-lg hover:bg-gray-200 transition-colors duration-300 text-sm font-medium\">
                                    Voir détails
                                </a>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            yield "            </div>
        ";
        } else {
            // line 122
            yield "            <div class=\"bg-white/90 backdrop-blur-sm rounded-xl shadow-md p-8 text-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                </svg>
                <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucune réservation</h3>
                <p class=\"mt-2 text-gray-600\">Vous n'avez pas encore de réservations de trajet en cours.</p>
                <p class=\"mt-2 text-gray-600\">Utilisez le formulaire ci-dessus pour rechercher et réserver votre premier trajet.</p>
            </div>
        ";
        }
        // line 131
        yield "    </div>
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
        return "passager/reservation.html.twig";
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
        return array (  307 => 131,  296 => 122,  292 => 120,  279 => 113,  271 => 108,  264 => 104,  253 => 96,  245 => 93,  241 => 91,  234 => 88,  231 => 87,  225 => 85,  223 => 84,  215 => 79,  208 => 77,  202 => 76,  196 => 72,  192 => 71,  189 => 70,  187 => 69,  166 => 50,  153 => 48,  149 => 47,  139 => 40,  116 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Faire une réservation{% endblock %}

{% block content %}
    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-gray-800\">Réserver un trajet</h1>
        <p class=\"text-gray-600\">Trouvez et réservez votre prochain trajet en covoiturage</p>
    </div>
    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800 flex items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
            </svg>
            Rechercher un trajet
        </h2>
        
        <form action=\"{{ path('app_rides') }}\" method=\"get\" class=\"space-y-6\">
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div>
                    <label for=\"depart\" class=\"block text-sm font-medium text-gray-700 mb-1\">Lieu de départ</label>
                    <input type=\"text\" id=\"depart\" name=\"depart\" required
                           class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                           placeholder=\"Entrez votre ville de départ\">
                </div>
                
                <div>
                    <label for=\"destination\" class=\"block text-sm font-medium text-gray-700 mb-1\">Destination</label>
                    <input type=\"text\" id=\"destination\" name=\"destination\" required
                           class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                           placeholder=\"Entrez votre ville de destination\">
                </div>
                
                <div>
                    <label for=\"date\" class=\"block text-sm font-medium text-gray-700 mb-1\">Date du trajet</label>
                    <input type=\"date\" id=\"date\" name=\"date\" required
                           class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                           min=\"{{ 'now'|date('Y-m-d') }}\">
                </div>
                
                <div>
                    <label for=\"passengers\" class=\"block text-sm font-medium text-gray-700 mb-1\">Nombre de passagers</label>
                    <select id=\"passengers\" name=\"passengers\" required
                            class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                        {% for i in 1..4 %}
                            <option value=\"{{ i }}\">{{ i }} {{ i > 1 ? 'passagers' : 'passager' }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
            
            <div class=\"flex justify-end\">
                <button type=\"submit\" 
                        class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\" />
                    </svg>
                    Rechercher
                </button>
            </div>
        </form>
    </div>
    
    <div class=\"mt-8\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800\">Mes réservations</h2>
        
        {% if reservations is defined and reservations|length > 0 %}
            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
                {% for reservation in reservations %}
                    <div class=\"bg-white rounded-xl shadow-md overflow-hidden\">
                        <div class=\"p-6\">
                            <div class=\"flex justify-between items-start\">
                                <div>
                                    <h3 class=\"font-bold text-lg text-gray-900\">{{ reservation.trajet.departVille }} → {{ reservation.trajet.arriveeVille }}</h3>
                                    <p class=\"text-gray-600\">{{ reservation.trajet.dateDepart|date('d M Y') }} à {{ reservation.trajet.heureDepart|date('H:i') }}</p>
                                </div>
                                <span class=\"px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">{{ reservation.statut }}</span>
                            </div>
                            
                            <div class=\"mt-4 flex items-center\">
                                <div class=\"flex-shrink-0\">
                                    {% if reservation.trajet.conducteur.imagePath %}
                                        <img class=\"h-12 w-12 rounded-full\" src=\"{{ asset(reservation.trajet.conducteur.imagePath) }}\" alt=\"\">
                                    {% else %}
                                        <div class=\"h-12 w-12 rounded-full bg-gradient-to-r from-primary to-primary-dark flex items-center justify-center text-white text-lg font-bold\">
                                            {{ reservation.trajet.conducteur.prenom|first }}{{ reservation.trajet.conducteur.nom|first }}
                                        </div>
                                    {% endif %}
                                </div>
                                <div class=\"ml-3\">
                                    <p class=\"text-sm font-medium text-gray-900\">{{ reservation.trajet.conducteur.prenom }} {{ reservation.trajet.conducteur.nom }}</p>
                                    <div class=\"flex items-center\">
                                        <span class=\"text-yellow-500\">★</span>
                                        <span class=\"text-xs text-gray-600 ml-1\">{{ reservation.trajet.conducteur.rating ?? '4.8' }}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"mt-4 flex justify-between\">
                                <div>
                                    <p class=\"text-sm font-medium text-gray-900\">Prix</p>
                                    <p class=\"text-lg font-bold text-primary\">{{ reservation.trajet.prix }} €</p>
                                </div>
                                <div class=\"text-right\">
                                    <p class=\"text-sm font-medium text-gray-900\">Places</p>
                                    <p class=\"text-lg font-bold text-gray-900\">{{ reservation.nombrePassagers }}</p>
                                </div>
                            </div>
                            
                            <div class=\"mt-4\">
                                <a href=\"{{ path('app_reservation_detail', {id: reservation.id}) }}\" class=\"block w-full text-center px-4 py-2 bg-gray-100 text-gray-800 rounded-lg hover:bg-gray-200 transition-colors duration-300 text-sm font-medium\">
                                    Voir détails
                                </a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <div class=\"bg-white/90 backdrop-blur-sm rounded-xl shadow-md p-8 text-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                </svg>
                <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucune réservation</h3>
                <p class=\"mt-2 text-gray-600\">Vous n'avez pas encore de réservations de trajet en cours.</p>
                <p class=\"mt-2 text-gray-600\">Utilisez le formulaire ci-dessus pour rechercher et réserver votre premier trajet.</p>
            </div>
        {% endif %}
    </div>
{% endblock %} ", "passager/reservation.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\passager\\reservation.html.twig");
    }
}
