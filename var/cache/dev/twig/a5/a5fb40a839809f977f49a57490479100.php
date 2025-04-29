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

/* conducteur/modifier_annonce.html.twig */
class __TwigTemplate_44d1befba63d4272800204ebd12026bf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/modifier_annonce.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/modifier_annonce.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/modifier_annonce.html.twig", 1);
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

        yield "Modifier une annonce";
        
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
        <h1 class=\"text-3xl font-bold text-gray-800\">Modifier une annonce</h1>
        <p class=\"text-gray-600\">Mettez à jour les informations de votre annonce</p>
    </div>
    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800 flex items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
            </svg>
            Détails de l'annonce
        </h2>
        
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 20
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
                yield "                <div class=\"mb-4 rounded-xl p-4 ";
                if (($context["label"] == "success")) {
                    yield "bg-primary text-white";
                } else {
                    yield "bg-error text-white";
                }
                yield "\">
                    ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "        
        <form action=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_modifier_annonce_submit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        yield "\" method=\"post\" class=\"space-y-6\">
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div>
                    <label for=\"trajet_id\" class=\"block text-sm font-medium text-gray-700 mb-1\">Trajet associé</label>
                    <select id=\"trajet_id\" name=\"trajet_id\" required
                            class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                        <option value=\"\">Sélectionnez un trajet</option>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
            // line 35
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 35) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 35, $this->source); })()), "trajet", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35))) {
                yield "selected";
            }
            yield ">
                                ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "titre", [], "any", false, false, false, 36), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "getDeparturePoint", [], "method", false, false, false, 36), "html", null, true);
            yield " → ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "getArrivalPoint", [], "method", false, false, false, 36), "html", null, true);
            yield ")
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trajet'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "                    </select>
                </div>
                
                <div>
                    <label for=\"titre\" class=\"block text-sm font-medium text-gray-700 mb-1\">Titre de l'annonce</label>
                    <input type=\"text\" id=\"titre\" name=\"titre\" required maxlength=\"25\" value=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 44, $this->source); })()), "titre", [], "any", false, false, false, 44), "html", null, true);
        yield "\"
                           class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                           placeholder=\"Titre descriptif de l'annonce\">
                    <small class=\"text-gray-500\">Max. 25 caractères, alphabétique et \"-->\" uniquement</small>
                </div>

                <div>
                    <label for=\"departure_date\" class=\"block text-sm font-medium text-gray-700 mb-1\">Date et heure de départ</label>
                    <input type=\"datetime-local\" id=\"departure_date\" name=\"departure_date\" required 
                           value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 53, $this->source); })()), "departureDate", [], "any", false, false, false, 53), "Y-m-d\\TH:i"), "html", null, true);
        yield "\"
                           min=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d\\TH:i"), "html", null, true);
        yield "\"
                           class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                    <small class=\"text-gray-500\">La date et l'heure doivent être dans le futur</small>
                </div>
                
                <div>
                    <label for=\"available_seats\" class=\"block text-sm font-medium text-gray-700 mb-1\">Nombre de places disponibles</label>
                    <select id=\"available_seats\" name=\"available_seats\" required
                            class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 64
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" ";
            if (($context["i"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 64, $this->source); })()), "availableSeats", [], "any", false, false, false, 64))) {
                yield "selected";
            }
            yield ">
                                ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield " ";
            yield ((($context["i"] > 1)) ? ("places") : ("place"));
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "                    </select>
                </div>
            </div>
            
            <div>
                <label for=\"description\" class=\"block text-sm font-medium text-gray-700 mb-1\">Description (facultatif)</label>
                <textarea id=\"description\" name=\"description\" rows=\"4\"
                          class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                          placeholder=\"Ajoutez des détails sur votre annonce (points de rendez-vous, bagages autorisés, etc.)\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 76, $this->source); })()), "description", [], "any", false, false, false, 76), "html", null, true);
        yield "</textarea>
            </div>
            
            <div class=\"flex justify-end space-x-3\">
                <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_liste_annonce");
        yield "\" 
                   class=\"inline-flex items-center px-6 py-3 border border-gray-300 text-gray-700 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                    Annuler
                </a>
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
        return "conducteur/modifier_annonce.html.twig";
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
        return array (  263 => 80,  256 => 76,  246 => 68,  235 => 65,  226 => 64,  222 => 63,  210 => 54,  206 => 53,  194 => 44,  187 => 39,  174 => 36,  165 => 35,  161 => 34,  151 => 27,  148 => 26,  142 => 25,  133 => 22,  124 => 21,  119 => 20,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Modifier une annonce{% endblock %}

{% block content %}
    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-gray-800\">Modifier une annonce</h1>
        <p class=\"text-gray-600\">Mettez à jour les informations de votre annonce</p>
    </div>
    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800 flex items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
            </svg>
            Détails de l'annonce
        </h2>
        
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"mb-4 rounded-xl p-4 {% if label == 'success' %}bg-primary text-white{% else %}bg-error text-white{% endif %}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
        
        <form action=\"{{ path('app_conducteur_modifier_annonce_submit', {'id': annonce.id}) }}\" method=\"post\" class=\"space-y-6\">
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div>
                    <label for=\"trajet_id\" class=\"block text-sm font-medium text-gray-700 mb-1\">Trajet associé</label>
                    <select id=\"trajet_id\" name=\"trajet_id\" required
                            class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                        <option value=\"\">Sélectionnez un trajet</option>
                        {% for trajet in trajets %}
                            <option value=\"{{ trajet.id }}\" {% if trajet.id == annonce.trajet.id %}selected{% endif %}>
                                {{ trajet.titre }} ({{ trajet.getDeparturePoint() }} → {{ trajet.getArrivalPoint() }})
                            </option>
                        {% endfor %}
                    </select>
                </div>
                
                <div>
                    <label for=\"titre\" class=\"block text-sm font-medium text-gray-700 mb-1\">Titre de l'annonce</label>
                    <input type=\"text\" id=\"titre\" name=\"titre\" required maxlength=\"25\" value=\"{{ annonce.titre }}\"
                           class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                           placeholder=\"Titre descriptif de l'annonce\">
                    <small class=\"text-gray-500\">Max. 25 caractères, alphabétique et \"-->\" uniquement</small>
                </div>

                <div>
                    <label for=\"departure_date\" class=\"block text-sm font-medium text-gray-700 mb-1\">Date et heure de départ</label>
                    <input type=\"datetime-local\" id=\"departure_date\" name=\"departure_date\" required 
                           value=\"{{ annonce.departureDate|date('Y-m-d\\\\TH:i') }}\"
                           min=\"{{ 'now'|date('Y-m-d\\\\TH:i') }}\"
                           class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                    <small class=\"text-gray-500\">La date et l'heure doivent être dans le futur</small>
                </div>
                
                <div>
                    <label for=\"available_seats\" class=\"block text-sm font-medium text-gray-700 mb-1\">Nombre de places disponibles</label>
                    <select id=\"available_seats\" name=\"available_seats\" required
                            class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                        {% for i in 1..4 %}
                            <option value=\"{{ i }}\" {% if i == annonce.availableSeats %}selected{% endif %}>
                                {{ i }} {{ i > 1 ? 'places' : 'place' }}
                            </option>
                        {% endfor %}
                    </select>
                </div>
            </div>
            
            <div>
                <label for=\"description\" class=\"block text-sm font-medium text-gray-700 mb-1\">Description (facultatif)</label>
                <textarea id=\"description\" name=\"description\" rows=\"4\"
                          class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                          placeholder=\"Ajoutez des détails sur votre annonce (points de rendez-vous, bagages autorisés, etc.)\">{{ annonce.description }}</textarea>
            </div>
            
            <div class=\"flex justify-end space-x-3\">
                <a href=\"{{ path('app_conducteur_liste_annonce') }}\" 
                   class=\"inline-flex items-center px-6 py-3 border border-gray-300 text-gray-700 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                    Annuler
                </a>
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
{% endblock %} ", "conducteur/modifier_annonce.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\modifier_annonce.html.twig");
    }
}
