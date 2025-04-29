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

/* passager/create_reservation.html.twig */
class __TwigTemplate_621933b351292c873aea4dc569a1a9c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/create_reservation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/create_reservation.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "passager/create_reservation.html.twig", 1);
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

        yield "Réserver un trajet";
        
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
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Réserver un trajet</h1>
                    <p class=\"text-gray-600\">Complétez votre réservation pour le trajet de ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 11, $this->source); })()), "trajet", [], "any", false, false, false, 11), "getDeparturePoint", [], "method", false, false, false, 11), "html", null, true);
        yield " à ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 11, $this->source); })()), "trajet", [], "any", false, false, false, 11), "getArrivalPoint", [], "method", false, false, false, 11), "html", null, true);
        yield "</p>
                </div>
                <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_liste_annonce");
        yield "\" class=\"text-primary hover:text-primary-dark\">
                    <i class=\"fas fa-arrow-left mr-2\"></i> Retour aux annonces
                </a>
            </div>

            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["error"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            yield "                <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
            <div class=\"bg-gray-50 p-6 rounded-xl mb-6\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div>
                        <h2 class=\"text-lg font-semibold text-gray-800 mb-4\">Détails du trajet</h2>
                        <div class=\"space-y-3\">
                            <div>
                                <p class=\"text-sm text-gray-500\">Trajet</p>
                                <p class=\"font-medium\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 31, $this->source); })()), "trajet", [], "any", false, false, false, 31), "getDeparturePoint", [], "method", false, false, false, 31), "html", null, true);
        yield " → ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 31, $this->source); })()), "trajet", [], "any", false, false, false, 31), "getArrivalPoint", [], "method", false, false, false, 31), "html", null, true);
        yield "</p>
                            </div>
                            <div>
                                <p class=\"text-sm text-gray-500\">Date et heure</p>
                                <p class=\"font-medium\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 35, $this->source); })()), "departureDate", [], "any", false, false, false, 35), "d/m/Y à H:i"), "html", null, true);
        yield "</p>
                            </div>
                            <div>
                                <p class=\"text-sm text-gray-500\">Prix</p>
                                <div class=\"flex items-start\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                    </svg>
                                    <span class=\"text-gray-700 font-medium\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 43, $this->source); })()), "trajet", [], "any", false, false, false, 43), "price", [], "any", false, false, false, 43), "html", null, true);
        yield "DT</span>
                                </div>
                            </div>
                            <div>
                                <p class=\"text-sm text-gray-500\">Places disponibles</p>
                                <p class=\"font-medium\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 48, $this->source); })()), "getAvailableSeats", [], "method", false, false, false, 48), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h2 class=\"text-lg font-semibold text-gray-800 mb-4\">Conducteur</h2>
                        <div class=\"flex items-center mb-4\">
                            <div class=\"h-12 w-12 rounded-full bg-gradient-to-r from-primary to-primary-dark flex items-center justify-center text-white text-lg font-bold\">
                                C
                            </div>
                            <div class=\"ml-4\">
                                <p class=\"font-medium\">Conducteur #";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 60, $this->source); })()), "driverId", [], "any", false, false, false, 60), "html", null, true);
        yield "</p>
                                <div class=\"flex items-center\">
                                    <span class=\"text-yellow-400 mr-1\">★</span>
                                    <span class=\"text-sm text-gray-600\">4.8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <form action=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_reservation_create", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71)]), "html", null, true);
        yield "\" method=\"POST\" class=\"space-y-6\">
                <div>
                    <label for=\"comment\" class=\"block text-sm font-medium text-gray-700 mb-1\">Commentaire (optionnel)</label>
                    <textarea id=\"comment\" name=\"comment\" rows=\"4\" 
                              class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                              placeholder=\"Ajoutez un message pour le conducteur (bagages, préférences, etc.)\"></textarea>
                    <p class=\"mt-1 text-sm text-red-600\">Veuillez éviter les mots inappropriés ou offensants dans votre commentaire.</p>
                </div>

                <div class=\"pt-4 border-t border-gray-200\">
                    <h3 class=\"text-lg font-medium text-gray-800 mb-4\">Confirmation</h3>
                    <div class=\"bg-yellow-50 p-4 rounded-lg border border-yellow-100 mb-4\">
                        <p class=\"flex items-center text-yellow-800\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                <path fill-rule=\"evenodd\" d=\"M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z\" clip-rule=\"evenodd\" />
                            </svg>
                            Votre réservation sera soumise à l'approbation du conducteur.
                        </p>
                    </div>
                    <div class=\"flex justify-end\">
                        <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_liste_annonce");
        yield "\" class=\"px-4 py-2 border border-gray-300 rounded-lg text-gray-700 mr-4 hover:bg-gray-50\">
                            Annuler
                        </a>
                        <button type=\"submit\" class=\"px-6 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-lg hover:shadow-md transition-all duration-300\">
                            Confirmer la réservation
                        </button>
                    </div>
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
        return "passager/create_reservation.html.twig";
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
        return array (  228 => 91,  205 => 71,  191 => 60,  176 => 48,  168 => 43,  157 => 35,  148 => 31,  138 => 23,  129 => 20,  126 => 19,  122 => 18,  114 => 13,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Réserver un trajet{% endblock %}

{% block content %}
    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"flex justify-between items-center mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Réserver un trajet</h1>
                    <p class=\"text-gray-600\">Complétez votre réservation pour le trajet de {{ annonce.trajet.getDeparturePoint() }} à {{ annonce.trajet.getArrivalPoint() }}</p>
                </div>
                <a href=\"{{ path('app_passager_liste_annonce') }}\" class=\"text-primary hover:text-primary-dark\">
                    <i class=\"fas fa-arrow-left mr-2\"></i> Retour aux annonces
                </a>
            </div>

            {% for message in app.flashes('error') %}
                <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>{{ message }}</p>
                </div>
            {% endfor %}

            <div class=\"bg-gray-50 p-6 rounded-xl mb-6\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div>
                        <h2 class=\"text-lg font-semibold text-gray-800 mb-4\">Détails du trajet</h2>
                        <div class=\"space-y-3\">
                            <div>
                                <p class=\"text-sm text-gray-500\">Trajet</p>
                                <p class=\"font-medium\">{{ annonce.trajet.getDeparturePoint() }} → {{ annonce.trajet.getArrivalPoint() }}</p>
                            </div>
                            <div>
                                <p class=\"text-sm text-gray-500\">Date et heure</p>
                                <p class=\"font-medium\">{{ annonce.departureDate|date('d/m/Y à H:i') }}</p>
                            </div>
                            <div>
                                <p class=\"text-sm text-gray-500\">Prix</p>
                                <div class=\"flex items-start\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                    </svg>
                                    <span class=\"text-gray-700 font-medium\">{{ annonce.trajet.price }}DT</span>
                                </div>
                            </div>
                            <div>
                                <p class=\"text-sm text-gray-500\">Places disponibles</p>
                                <p class=\"font-medium\">{{ annonce.getAvailableSeats() }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h2 class=\"text-lg font-semibold text-gray-800 mb-4\">Conducteur</h2>
                        <div class=\"flex items-center mb-4\">
                            <div class=\"h-12 w-12 rounded-full bg-gradient-to-r from-primary to-primary-dark flex items-center justify-center text-white text-lg font-bold\">
                                C
                            </div>
                            <div class=\"ml-4\">
                                <p class=\"font-medium\">Conducteur #{{ annonce.driverId }}</p>
                                <div class=\"flex items-center\">
                                    <span class=\"text-yellow-400 mr-1\">★</span>
                                    <span class=\"text-sm text-gray-600\">4.8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <form action=\"{{ path('app_passager_reservation_create', {'id': annonce.id}) }}\" method=\"POST\" class=\"space-y-6\">
                <div>
                    <label for=\"comment\" class=\"block text-sm font-medium text-gray-700 mb-1\">Commentaire (optionnel)</label>
                    <textarea id=\"comment\" name=\"comment\" rows=\"4\" 
                              class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                              placeholder=\"Ajoutez un message pour le conducteur (bagages, préférences, etc.)\"></textarea>
                    <p class=\"mt-1 text-sm text-red-600\">Veuillez éviter les mots inappropriés ou offensants dans votre commentaire.</p>
                </div>

                <div class=\"pt-4 border-t border-gray-200\">
                    <h3 class=\"text-lg font-medium text-gray-800 mb-4\">Confirmation</h3>
                    <div class=\"bg-yellow-50 p-4 rounded-lg border border-yellow-100 mb-4\">
                        <p class=\"flex items-center text-yellow-800\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                <path fill-rule=\"evenodd\" d=\"M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z\" clip-rule=\"evenodd\" />
                            </svg>
                            Votre réservation sera soumise à l'approbation du conducteur.
                        </p>
                    </div>
                    <div class=\"flex justify-end\">
                        <a href=\"{{ path('app_passager_liste_annonce') }}\" class=\"px-4 py-2 border border-gray-300 rounded-lg text-gray-700 mr-4 hover:bg-gray-50\">
                            Annuler
                        </a>
                        <button type=\"submit\" class=\"px-6 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-lg hover:shadow-md transition-all duration-300\">
                            Confirmer la réservation
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
{% endblock %} ", "passager/create_reservation.html.twig", "D:\\Covoituni_web-master\\templates\\passager\\create_reservation.html.twig");
    }
}
