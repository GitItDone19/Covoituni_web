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

/* conducteur/voiture_edit.html.twig */
class __TwigTemplate_054ef821ede17fa2be605a1046a6d148 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/voiture_edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/voiture_edit.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/voiture_edit.html.twig", 1);
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

        yield "Modifier mon véhicule";
        
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
        <h1 class=\"text-3xl font-bold text-primary\">Modifier mon véhicule</h1>
        <p class=\"text-gray-600 mt-2\">Mettre à jour les informations de votre véhicule</p>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_voiture");
        yield "\" class=\"inline-flex items-center mt-4 px-4 py-2 bg-white text-gray-700 rounded-lg border border-gray-200 hover:bg-gray-50\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
            </svg>
            Retour
        </a>
    </div>
    
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["error"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "        <div class=\"mb-6 bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg\" role=\"alert\">
            ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "    
    <div class=\"bg-white rounded-lg shadow p-6 border border-gray-100\">
        <form method=\"POST\" action=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_voiture_edit");
        yield "\" class=\"space-y-6\">
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div>
                    <label for=\"plaqueImatriculation\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Plaque d'immatriculation *
                    </label>
                    <input type=\"text\" id=\"plaqueImatriculation\" name=\"plaqueImatriculation\" 
                           class=\"w-full rounded-lg border-gray-300 shadow-sm\"
                           placeholder=\"AB-123-CD\" value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 32, $this->source); })()), "plaqueImatriculation", [], "any", false, false, false, 32), "html", null, true);
        yield "\" required>
                    <p class=\"text-xs text-gray-500 mt-1\">Format: XX-123-XX ou XX123XX</p>
                </div>
                
                <div>
                    <label for=\"dateImatriculation\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Date d'immatriculation *
                    </label>
                    <input type=\"date\" id=\"dateImatriculation\" name=\"dateImatriculation\" 
                           class=\"w-full rounded-lg border-gray-300 shadow-sm\"
                           value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 42, $this->source); })()), "dateImatriculation", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true);
        yield "\" required>
                </div>
                
                <div>
                    <label for=\"make-dropdown\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Marque *
                    </label>
                    <select id=\"make-dropdown\" class=\"w-full rounded-lg border-gray-300 shadow-sm\" required>
                        <option value=\"\">Sélectionnez une marque</option>
                        ";
        // line 51
        if ((array_key_exists("carMakes", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["carMakes"]) || array_key_exists("carMakes", $context) ? $context["carMakes"] : (function () { throw new RuntimeError('Variable "carMakes" does not exist.', 51, $this->source); })())) > 0))) {
            // line 52
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["carMakes"]) || array_key_exists("carMakes", $context) ? $context["carMakes"] : (function () { throw new RuntimeError('Variable "carMakes" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["make"]) {
                // line 53
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["make"], "data", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["make"], "data", [], "any", false, false, false, 53), "attributes", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 53, $this->source); })()), "marque", [], "any", false, false, false, 53))) {
                    yield "selected";
                }
                yield ">
                                    ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["make"], "data", [], "any", false, false, false, 54), "attributes", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
                yield "
                                </option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['make'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "                        ";
        }
        // line 58
        yield "                    </select>
                    <input type=\"hidden\" id=\"marque\" name=\"marque\" value=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 59, $this->source); })()), "marque", [], "any", false, false, false, 59), "html", null, true);
        yield "\" required>
                </div>
                
                <div>
                    <label for=\"model-dropdown\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Modèle *
                    </label>
                    <select id=\"model-dropdown\" class=\"w-full rounded-lg border-gray-300 shadow-sm\" required>
                        <option value=\"\">Chargement des modèles...</option>
                    </select>
                    <input type=\"hidden\" id=\"modele\" name=\"modele\" value=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 69, $this->source); })()), "modele", [], "any", false, false, false, 69), "html", null, true);
        yield "\" required>
                </div>
                
                <div>
                    <label for=\"couleur\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Couleur *
                    </label>
                    <input type=\"text\" id=\"couleur\" name=\"couleur\" 
                           class=\"w-full rounded-lg border-gray-300 shadow-sm\"
                           placeholder=\"Noir, Blanc, Rouge, etc.\" value=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 78, $this->source); })()), "couleur", [], "any", false, false, false, 78), "html", null, true);
        yield "\" required>
                </div>
                
                ";
        // line 81
        if ((array_key_exists("categories", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 81, $this->source); })())) > 0))) {
            // line 82
            yield "                <div>
                    <label for=\"categorie\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Catégorie *
                    </label>
                    <select id=\"categorie\" name=\"categorie_id\" 
                            class=\"w-full rounded-lg border-gray-300 shadow-sm\"
                            required>
                        ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 89, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 90
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 90), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 90, $this->source); })()), "categorie", [], "any", false, false, false, 90) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 90, $this->source); })()), "categorie", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90) == CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 90)))) {
                    yield "selected";
                }
                yield ">
                                ";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 91), "html", null, true);
                yield "
                            </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            yield "                    </select>
                </div>
                ";
        }
        // line 97
        yield "            </div>
            
            <div>
                <label for=\"description\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                    Description (optionnelle)
                </label>
                <textarea id=\"description\" name=\"description\" rows=\"4\" 
                          class=\"w-full rounded-lg border-gray-300 shadow-sm\"
                          placeholder=\"Décrivez votre véhicule (options, particularités, etc.)\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 105, $this->source); })()), "description", [], "any", false, false, false, 105), "html", null, true);
        yield "</textarea>
            </div>
            
            <div class=\"flex justify-end mt-6\">
                <button type=\"submit\" class=\"px-6 py-3 bg-primary text-white rounded-lg shadow hover:bg-primary-dark\">
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

    // line 117
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const makeDropdown = document.getElementById('make-dropdown');
        const modelDropdown = document.getElementById('model-dropdown');
        const marqueInput = document.getElementById('marque');
        const modeleInput = document.getElementById('modele');
        const currentModele = \"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 125, $this->source); })()), "modele", [], "any", false, false, false, 125), "html", null, true);
        yield "\";
        
        // Load models for the selected make on page load
        if (makeDropdown.value) {
            loadModels(makeDropdown.value, currentModele);
        }

        // Update hidden input when dropdown changes
        makeDropdown.addEventListener('change', function() {
            if (this.value) {
                const selectedOption = this.options[this.selectedIndex];
                marqueInput.value = selectedOption.text;
                
                // Load models for this make
                loadModels(this.value);
            } else {
                // Reset model dropdown when no make is selected
                modelDropdown.innerHTML = '<option value=\"\">Sélectionnez d\\'abord une marque</option>';
                modelDropdown.disabled = true;
                marqueInput.value = '';
                modeleInput.value = '';
            }
        });

        // Update hidden input when model dropdown changes
        modelDropdown.addEventListener('change', function() {
            if (this.value) {
                const selectedOption = this.options[this.selectedIndex];
                modeleInput.value = selectedOption.text;
            } else {
                modeleInput.value = '';
            }
        });
        
        // Function to load models from API
        function loadModels(makeId, preselectedModel = null) {
            // Clear model dropdown and show loading
            modelDropdown.innerHTML = '<option value=\"\">Chargement des modèles...</option>';
            modelDropdown.disabled = true;
            
            // Fetch models for the selected make
            fetch(`/conducteur/api/car-models/\${makeId}`)
                .then(response => response.json())
                .then(data => {
                    // Clear loading option
                    modelDropdown.innerHTML = '<option value=\"\">Sélectionnez un modèle</option>';
                    
                    // Add model options from API response
                    data.forEach(model => {
                        const option = document.createElement('option');
                        option.value = model.data.id;
                        option.textContent = model.data.attributes.name;
                        
                        // Preselect the current model if it matches
                        if (preselectedModel && model.data.attributes.name === preselectedModel) {
                            option.selected = true;
                        }
                        
                        modelDropdown.appendChild(option);
                    });
                    
                    // Enable the model dropdown
                    modelDropdown.disabled = false;
                })
                .catch(error => {
                    console.error('Error fetching models:', error);
                    modelDropdown.innerHTML = '<option value=\"\">Erreur de chargement</option>';
                });
        }
    });
</script>
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
        return "conducteur/voiture_edit.html.twig";
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
        return array (  328 => 125,  318 => 118,  305 => 117,  283 => 105,  273 => 97,  268 => 94,  259 => 91,  250 => 90,  246 => 89,  237 => 82,  235 => 81,  229 => 78,  217 => 69,  204 => 59,  201 => 58,  198 => 57,  189 => 54,  180 => 53,  175 => 52,  173 => 51,  161 => 42,  148 => 32,  137 => 24,  133 => 22,  124 => 19,  121 => 18,  117 => 17,  106 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Modifier mon véhicule{% endblock %}

{% block content %}
    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-primary\">Modifier mon véhicule</h1>
        <p class=\"text-gray-600 mt-2\">Mettre à jour les informations de votre véhicule</p>
        <a href=\"{{ path('app_conducteur_voiture') }}\" class=\"inline-flex items-center mt-4 px-4 py-2 bg-white text-gray-700 rounded-lg border border-gray-200 hover:bg-gray-50\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
            </svg>
            Retour
        </a>
    </div>
    
    {% for message in app.flashes('error') %}
        <div class=\"mb-6 bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg\" role=\"alert\">
            {{ message }}
        </div>
    {% endfor %}
    
    <div class=\"bg-white rounded-lg shadow p-6 border border-gray-100\">
        <form method=\"POST\" action=\"{{ path('app_conducteur_voiture_edit') }}\" class=\"space-y-6\">
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div>
                    <label for=\"plaqueImatriculation\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Plaque d'immatriculation *
                    </label>
                    <input type=\"text\" id=\"plaqueImatriculation\" name=\"plaqueImatriculation\" 
                           class=\"w-full rounded-lg border-gray-300 shadow-sm\"
                           placeholder=\"AB-123-CD\" value=\"{{ voiture.plaqueImatriculation }}\" required>
                    <p class=\"text-xs text-gray-500 mt-1\">Format: XX-123-XX ou XX123XX</p>
                </div>
                
                <div>
                    <label for=\"dateImatriculation\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Date d'immatriculation *
                    </label>
                    <input type=\"date\" id=\"dateImatriculation\" name=\"dateImatriculation\" 
                           class=\"w-full rounded-lg border-gray-300 shadow-sm\"
                           value=\"{{ voiture.dateImatriculation|date('Y-m-d') }}\" required>
                </div>
                
                <div>
                    <label for=\"make-dropdown\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Marque *
                    </label>
                    <select id=\"make-dropdown\" class=\"w-full rounded-lg border-gray-300 shadow-sm\" required>
                        <option value=\"\">Sélectionnez une marque</option>
                        {% if carMakes is defined and carMakes|length > 0 %}
                            {% for make in carMakes %}
                                <option value=\"{{ make.data.id }}\" {% if make.data.attributes.name == voiture.marque %}selected{% endif %}>
                                    {{ make.data.attributes.name }}
                                </option>
                            {% endfor %}
                        {% endif %}
                    </select>
                    <input type=\"hidden\" id=\"marque\" name=\"marque\" value=\"{{ voiture.marque }}\" required>
                </div>
                
                <div>
                    <label for=\"model-dropdown\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Modèle *
                    </label>
                    <select id=\"model-dropdown\" class=\"w-full rounded-lg border-gray-300 shadow-sm\" required>
                        <option value=\"\">Chargement des modèles...</option>
                    </select>
                    <input type=\"hidden\" id=\"modele\" name=\"modele\" value=\"{{ voiture.modele }}\" required>
                </div>
                
                <div>
                    <label for=\"couleur\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Couleur *
                    </label>
                    <input type=\"text\" id=\"couleur\" name=\"couleur\" 
                           class=\"w-full rounded-lg border-gray-300 shadow-sm\"
                           placeholder=\"Noir, Blanc, Rouge, etc.\" value=\"{{ voiture.couleur }}\" required>
                </div>
                
                {% if categories is defined and categories|length > 0 %}
                <div>
                    <label for=\"categorie\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Catégorie *
                    </label>
                    <select id=\"categorie\" name=\"categorie_id\" 
                            class=\"w-full rounded-lg border-gray-300 shadow-sm\"
                            required>
                        {% for categorie in categories %}
                            <option value=\"{{ categorie.id }}\" {% if voiture.categorie and voiture.categorie.id == categorie.id %}selected{% endif %}>
                                {{ categorie.nom }}
                            </option>
                        {% endfor %}
                    </select>
                </div>
                {% endif %}
            </div>
            
            <div>
                <label for=\"description\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                    Description (optionnelle)
                </label>
                <textarea id=\"description\" name=\"description\" rows=\"4\" 
                          class=\"w-full rounded-lg border-gray-300 shadow-sm\"
                          placeholder=\"Décrivez votre véhicule (options, particularités, etc.)\">{{ voiture.description }}</textarea>
            </div>
            
            <div class=\"flex justify-end mt-6\">
                <button type=\"submit\" class=\"px-6 py-3 bg-primary text-white rounded-lg shadow hover:bg-primary-dark\">
                    Enregistrer les modifications
                </button>
            </div>
        </form>
    </div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const makeDropdown = document.getElementById('make-dropdown');
        const modelDropdown = document.getElementById('model-dropdown');
        const marqueInput = document.getElementById('marque');
        const modeleInput = document.getElementById('modele');
        const currentModele = \"{{ voiture.modele }}\";
        
        // Load models for the selected make on page load
        if (makeDropdown.value) {
            loadModels(makeDropdown.value, currentModele);
        }

        // Update hidden input when dropdown changes
        makeDropdown.addEventListener('change', function() {
            if (this.value) {
                const selectedOption = this.options[this.selectedIndex];
                marqueInput.value = selectedOption.text;
                
                // Load models for this make
                loadModels(this.value);
            } else {
                // Reset model dropdown when no make is selected
                modelDropdown.innerHTML = '<option value=\"\">Sélectionnez d\\'abord une marque</option>';
                modelDropdown.disabled = true;
                marqueInput.value = '';
                modeleInput.value = '';
            }
        });

        // Update hidden input when model dropdown changes
        modelDropdown.addEventListener('change', function() {
            if (this.value) {
                const selectedOption = this.options[this.selectedIndex];
                modeleInput.value = selectedOption.text;
            } else {
                modeleInput.value = '';
            }
        });
        
        // Function to load models from API
        function loadModels(makeId, preselectedModel = null) {
            // Clear model dropdown and show loading
            modelDropdown.innerHTML = '<option value=\"\">Chargement des modèles...</option>';
            modelDropdown.disabled = true;
            
            // Fetch models for the selected make
            fetch(`/conducteur/api/car-models/\${makeId}`)
                .then(response => response.json())
                .then(data => {
                    // Clear loading option
                    modelDropdown.innerHTML = '<option value=\"\">Sélectionnez un modèle</option>';
                    
                    // Add model options from API response
                    data.forEach(model => {
                        const option = document.createElement('option');
                        option.value = model.data.id;
                        option.textContent = model.data.attributes.name;
                        
                        // Preselect the current model if it matches
                        if (preselectedModel && model.data.attributes.name === preselectedModel) {
                            option.selected = true;
                        }
                        
                        modelDropdown.appendChild(option);
                    });
                    
                    // Enable the model dropdown
                    modelDropdown.disabled = false;
                })
                .catch(error => {
                    console.error('Error fetching models:', error);
                    modelDropdown.innerHTML = '<option value=\"\">Erreur de chargement</option>';
                });
        }
    });
</script>
{% endblock %} ", "conducteur/voiture_edit.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\voiture_edit.html.twig");
    }
}
