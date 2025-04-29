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

/* conducteur/annonce.html.twig */
class __TwigTemplate_072168d53ac1d6497f832a380c06fa2d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/annonce.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/annonce.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/annonce.html.twig", 1);
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

        yield "Ajouter une annonce";
        
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
        <h1 class=\"text-3xl font-bold text-gray-800\">Ajouter une annonce</h1>
        <p class=\"text-gray-600\">Créez une annonce pour proposer un trajet aux passagers</p>
    </div>
    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800 flex items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
            </svg>
            Détails du trajet
        </h2>
        
        <form action=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_annonce_submit");
        yield "\" method=\"post\" class=\"space-y-6\">
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
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
        yield "\">
                </div>
                
                <div>
                    <label for=\"heure\" class=\"block text-sm font-medium text-gray-700 mb-1\">Heure de départ</label>
                    <input type=\"time\" id=\"heure\" name=\"heure\" required
                           class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                </div>
                
                <div>
                    <label for=\"places\" class=\"block text-sm font-medium text-gray-700 mb-1\">Nombre de places disponibles</label>
                    <select id=\"places\" name=\"places\" required
                            class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 53
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield " ";
            yield ((($context["i"] > 1)) ? ("places") : ("place"));
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "                    </select>
                </div>
                
                <div>
                    <label for=\"prix\" class=\"block text-sm font-medium text-gray-700 mb-1\">Prix par passager (DT)</label>
                    <input type=\"number\" id=\"prix\" name=\"prix\" required min=\"1\" step=\"0.5\"
                           class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                           placeholder=\"15\">
                </div>
            </div>
            
            <div>
                <label for=\"description\" class=\"block text-sm font-medium text-gray-700 mb-1\">Description (facultatif)</label>
                <textarea id=\"description\" name=\"description\" rows=\"4\"
                          class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                          placeholder=\"Ajoutez des détails sur votre trajet (points de rendez-vous, bagages autorisés, etc.)\"></textarea>
                <small class=\"text-gray-500\">Veuillez éviter les mots inappropriés dans la description.</small>
            </div>
            
            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Options</label>
                <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4\">
                    <label class=\"flex items-center space-x-2\">
                        <input type=\"checkbox\" name=\"options[]\" value=\"animaux\" class=\"h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded\">
                        <span class=\"text-sm text-gray-700\">Animaux acceptés</span>
                    </label>
                    
                    <label class=\"flex items-center space-x-2\">
                        <input type=\"checkbox\" name=\"options[]\" value=\"musique\" class=\"h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded\">
                        <span class=\"text-sm text-gray-700\">Musique dans la voiture</span>
                    </label>
                    
                    <label class=\"flex items-center space-x-2\">
                        <input type=\"checkbox\" name=\"options[]\" value=\"fumeur\" class=\"h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded\">
                        <span class=\"text-sm text-gray-700\">Fumeur accepté</span>
                    </label>
                    
                    <label class=\"flex items-center space-x-2\">
                        <input type=\"checkbox\" name=\"options[]\" value=\"climatisation\" class=\"h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded\">
                        <span class=\"text-sm text-gray-700\">Climatisation</span>
                    </label>
                    
                    <label class=\"flex items-center space-x-2\">
                        <input type=\"checkbox\" name=\"options[]\" value=\"bagage\" class=\"h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded\">
                        <span class=\"text-sm text-gray-700\">Bagages volumineux acceptés</span>
                    </label>
                </div>
            </div>
            
            <div class=\"flex justify-end\">
                <button type=\"submit\" 
                        class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                    </svg>
                    Publier l'annonce
                </button>
            </div>
        </form>
    </div>
    
    <div class=\"mt-8\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800\">Mes annonces</h2>
        
        ";
        // line 119
        if ((array_key_exists("annonces", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 119, $this->source); })())) > 0))) {
            // line 120
            yield "            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
                ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 121, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 122
                yield "                    <div class=\"bg-white rounded-xl shadow-md overflow-hidden\">
                        <div class=\"p-6\">
                            <div class=\"flex justify-between items-start\">
                                <div>
                                    <h3 class=\"font-bold text-lg text-gray-900\">";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "departVille", [], "any", false, false, false, 126), "html", null, true);
                yield " → ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "arriveeVille", [], "any", false, false, false, 126), "html", null, true);
                yield "</h3>
                                    <p class=\"text-gray-600\">";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "dateDepart", [], "any", false, false, false, 127), "d M Y"), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "heureDepart", [], "any", false, false, false, 127), "H:i"), "html", null, true);
                yield "</p>
                                </div>
                                <span class=\"px-3 py-1 bg-";
                // line 129
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "statut", [], "any", false, false, false, 129) == "Actif")) {
                    yield "green";
                } else {
                    yield "gray";
                }
                yield "-100 text-";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "statut", [], "any", false, false, false, 129) == "Actif")) {
                    yield "green";
                } else {
                    yield "gray";
                }
                yield "-800 text-xs font-semibold rounded-full\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "statut", [], "any", false, false, false, 129), "html", null, true);
                yield "</span>
                            </div>
                            
                            <div class=\"mt-4 flex justify-between\">
                                <div>
                                    <p class=\"text-sm font-medium text-gray-900\">Prix</p>
                                    <p class=\"text-lg font-bold text-primary\">";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "prix", [], "any", false, false, false, 135), "html", null, true);
                yield " DT</p>
                                </div>
                                <div class=\"text-right\">
                                    <p class=\"text-sm font-medium text-gray-900\">Places</p>
                                    <p class=\"text-lg font-bold text-gray-900\">";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "placesDisponibles", [], "any", false, false, false, 139), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "placesTotal", [], "any", false, false, false, 139), "html", null, true);
                yield "</p>
                                </div>
                            </div>
                            
                            <div class=\"mt-4\">
                                <a href=\"";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 144)]), "html", null, true);
                yield "\" class=\"block w-full text-center px-4 py-2 bg-gray-100 text-gray-800 rounded-lg hover:bg-gray-200 transition-colors duration-300 text-sm font-medium\">
                                    Voir détails
                                </a>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['annonce'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            yield "            </div>
        ";
        } else {
            // line 153
            yield "            <div class=\"bg-white/90 backdrop-blur-sm rounded-xl shadow-md p-8 text-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                </svg>
                <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucune annonce</h3>
                <p class=\"mt-2 text-gray-600\">Vous n'avez pas encore publié d'annonces de trajet.</p>
                <p class=\"mt-2 text-gray-600\">Utilisez le formulaire ci-dessus pour créer votre première annonce.</p>
            </div>
        ";
        }
        // line 162
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
        return "conducteur/annonce.html.twig";
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
        return array (  331 => 162,  320 => 153,  316 => 151,  303 => 144,  293 => 139,  286 => 135,  265 => 129,  258 => 127,  252 => 126,  246 => 122,  242 => 121,  239 => 120,  237 => 119,  171 => 55,  158 => 53,  154 => 52,  138 => 39,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Ajouter une annonce{% endblock %}

{% block content %}
    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-gray-800\">Ajouter une annonce</h1>
        <p class=\"text-gray-600\">Créez une annonce pour proposer un trajet aux passagers</p>
    </div>
    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800 flex items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
            </svg>
            Détails du trajet
        </h2>
        
        <form action=\"{{ path('app_conducteur_annonce_submit') }}\" method=\"post\" class=\"space-y-6\">
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
                    <label for=\"heure\" class=\"block text-sm font-medium text-gray-700 mb-1\">Heure de départ</label>
                    <input type=\"time\" id=\"heure\" name=\"heure\" required
                           class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                </div>
                
                <div>
                    <label for=\"places\" class=\"block text-sm font-medium text-gray-700 mb-1\">Nombre de places disponibles</label>
                    <select id=\"places\" name=\"places\" required
                            class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                        {% for i in 1..4 %}
                            <option value=\"{{ i }}\">{{ i }} {{ i > 1 ? 'places' : 'place' }}</option>
                        {% endfor %}
                    </select>
                </div>
                
                <div>
                    <label for=\"prix\" class=\"block text-sm font-medium text-gray-700 mb-1\">Prix par passager (DT)</label>
                    <input type=\"number\" id=\"prix\" name=\"prix\" required min=\"1\" step=\"0.5\"
                           class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                           placeholder=\"15\">
                </div>
            </div>
            
            <div>
                <label for=\"description\" class=\"block text-sm font-medium text-gray-700 mb-1\">Description (facultatif)</label>
                <textarea id=\"description\" name=\"description\" rows=\"4\"
                          class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                          placeholder=\"Ajoutez des détails sur votre trajet (points de rendez-vous, bagages autorisés, etc.)\"></textarea>
                <small class=\"text-gray-500\">Veuillez éviter les mots inappropriés dans la description.</small>
            </div>
            
            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Options</label>
                <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4\">
                    <label class=\"flex items-center space-x-2\">
                        <input type=\"checkbox\" name=\"options[]\" value=\"animaux\" class=\"h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded\">
                        <span class=\"text-sm text-gray-700\">Animaux acceptés</span>
                    </label>
                    
                    <label class=\"flex items-center space-x-2\">
                        <input type=\"checkbox\" name=\"options[]\" value=\"musique\" class=\"h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded\">
                        <span class=\"text-sm text-gray-700\">Musique dans la voiture</span>
                    </label>
                    
                    <label class=\"flex items-center space-x-2\">
                        <input type=\"checkbox\" name=\"options[]\" value=\"fumeur\" class=\"h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded\">
                        <span class=\"text-sm text-gray-700\">Fumeur accepté</span>
                    </label>
                    
                    <label class=\"flex items-center space-x-2\">
                        <input type=\"checkbox\" name=\"options[]\" value=\"climatisation\" class=\"h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded\">
                        <span class=\"text-sm text-gray-700\">Climatisation</span>
                    </label>
                    
                    <label class=\"flex items-center space-x-2\">
                        <input type=\"checkbox\" name=\"options[]\" value=\"bagage\" class=\"h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded\">
                        <span class=\"text-sm text-gray-700\">Bagages volumineux acceptés</span>
                    </label>
                </div>
            </div>
            
            <div class=\"flex justify-end\">
                <button type=\"submit\" 
                        class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                    </svg>
                    Publier l'annonce
                </button>
            </div>
        </form>
    </div>
    
    <div class=\"mt-8\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800\">Mes annonces</h2>
        
        {% if annonces is defined and annonces|length > 0 %}
            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
                {% for annonce in annonces %}
                    <div class=\"bg-white rounded-xl shadow-md overflow-hidden\">
                        <div class=\"p-6\">
                            <div class=\"flex justify-between items-start\">
                                <div>
                                    <h3 class=\"font-bold text-lg text-gray-900\">{{ annonce.departVille }} → {{ annonce.arriveeVille }}</h3>
                                    <p class=\"text-gray-600\">{{ annonce.dateDepart|date('d M Y') }} à {{ annonce.heureDepart|date('H:i') }}</p>
                                </div>
                                <span class=\"px-3 py-1 bg-{% if annonce.statut == 'Actif' %}green{% else %}gray{% endif %}-100 text-{% if annonce.statut == 'Actif' %}green{% else %}gray{% endif %}-800 text-xs font-semibold rounded-full\">{{ annonce.statut }}</span>
                            </div>
                            
                            <div class=\"mt-4 flex justify-between\">
                                <div>
                                    <p class=\"text-sm font-medium text-gray-900\">Prix</p>
                                    <p class=\"text-lg font-bold text-primary\">{{ annonce.prix }} DT</p>
                                </div>
                                <div class=\"text-right\">
                                    <p class=\"text-sm font-medium text-gray-900\">Places</p>
                                    <p class=\"text-lg font-bold text-gray-900\">{{ annonce.placesDisponibles }}/{{ annonce.placesTotal }}</p>
                                </div>
                            </div>
                            
                            <div class=\"mt-4\">
                                <a href=\"{{ path('app_annonce_detail', {id: annonce.id}) }}\" class=\"block w-full text-center px-4 py-2 bg-gray-100 text-gray-800 rounded-lg hover:bg-gray-200 transition-colors duration-300 text-sm font-medium\">
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
                <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucune annonce</h3>
                <p class=\"mt-2 text-gray-600\">Vous n'avez pas encore publié d'annonces de trajet.</p>
                <p class=\"mt-2 text-gray-600\">Utilisez le formulaire ci-dessus pour créer votre première annonce.</p>
            </div>
        {% endif %}
    </div>
{% endblock %} ", "conducteur/annonce.html.twig", "D:\\Covoituni_web-master\\templates\\conducteur\\annonce.html.twig");
    }
}
