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

/* conducteur/voiture_add.html.twig */
class __TwigTemplate_b41db8b85e5ac525594a15fb00a2f17e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/voiture_add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/voiture_add.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/voiture_add.html.twig", 1);
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

        yield "Ajouter un véhicule";
        
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
        <h1 class=\"text-3xl font-bold text-primary\">Ajouter un véhicule</h1>
        <p class=\"text-gray-600 mt-2\">Enregistrez les informations de votre véhicule pour pouvoir proposer des trajets</p>
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_voiture_add");
        yield "\" class=\"space-y-6\">
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div>
                    <label for=\"plaqueImatriculation\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Plaque d'immatriculation *
                    </label>
                    <input type=\"text\" id=\"plaqueImatriculation\" name=\"plaqueImatriculation\" 
                           class=\"w-full rounded-lg border-gray-300 shadow-sm\"
                           placeholder=\"AB-123-CD\" required>
                    <p class=\"text-xs text-gray-500 mt-1\">Format: XX-123-XX ou XX123XX</p>
                </div>
                
                <div>
                    <label for=\"dateImatriculation\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Date d'immatriculation *
                    </label>
                    <input type=\"date\" id=\"dateImatriculation\" name=\"dateImatriculation\" 
                           class=\"w-full rounded-lg border-gray-300 shadow-sm\"
                           required>
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
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["make"], "data", [], "any", false, false, false, 53), "attributes", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['make'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "                        ";
        }
        // line 56
        yield "                    </select>
                    <input type=\"hidden\" id=\"marque\" name=\"marque\" required>
                </div>
                
                <div>
                    <label for=\"model-dropdown\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Modèle *
                    </label>
                    <select id=\"model-dropdown\" class=\"w-full rounded-lg border-gray-300 shadow-sm\" required disabled>
                        <option value=\"\">Sélectionnez d'abord une marque</option>
                    </select>
                    <input type=\"hidden\" id=\"modele\" name=\"modele\" required>
                </div>
                
                <div>
                    <label for=\"couleur\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Couleur *
                    </label>
                    <input type=\"text\" id=\"couleur\" name=\"couleur\" 
                           class=\"w-full rounded-lg border-gray-300 shadow-sm\"
                           placeholder=\"Noir, Blanc, Rouge, etc.\" required>
                </div>
                
                ";
        // line 79
        if ((array_key_exists("categories", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 79, $this->source); })())) > 0))) {
            // line 80
            yield "                <div>
                    <label for=\"categorie\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Catégorie *
                    </label>
                    <select id=\"categorie\" name=\"categorie_id\" 
                            class=\"w-full rounded-lg border-gray-300 shadow-sm\"
                            required>
                        ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 87, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 88
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 88), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 88), "html", null, true);
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "                    </select>
                </div>
                ";
        }
        // line 93
        yield "            </div>
            
            <div>
                <label for=\"description\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                    Description (optionnelle)
                </label>
                <textarea id=\"description\" name=\"description\" rows=\"4\" 
                          class=\"w-full rounded-lg border-gray-300 shadow-sm\"
                          placeholder=\"Décrivez votre véhicule (options, particularités, etc.)\"></textarea>
            </div>
            
            <div class=\"flex justify-end mt-6\">
                <button type=\"submit\" class=\"px-6 py-3 bg-primary text-white rounded-lg shadow hover:bg-primary-dark\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 inline mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                    </svg>
                    Enregistrer mon véhicule
                </button>
            </div>
        </form>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 116
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

        // line 117
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const makeDropdown = document.getElementById('make-dropdown');
        const modelDropdown = document.getElementById('model-dropdown');
        const marqueInput = document.getElementById('marque');
        const modeleInput = document.getElementById('modele');

        // Update hidden input when dropdown changes
        makeDropdown.addEventListener('change', function() {
            if (this.value) {
                const selectedOption = this.options[this.selectedIndex];
                marqueInput.value = selectedOption.text;
                
                // Clear model dropdown and enable it
                modelDropdown.innerHTML = '<option value=\"\">Chargement des modèles...</option>';
                modelDropdown.disabled = true;
                
                // Fetch models for the selected make
                fetch(`/conducteur/api/car-models/\${this.value}`)
                    .then(response => response.json())
                    .then(data => {
                        // Clear loading option
                        modelDropdown.innerHTML = '<option value=\"\">Sélectionnez un modèle</option>';
                        
                        // Add model options from API response
                        data.forEach(model => {
                            const option = document.createElement('option');
                            option.value = model.data.id;
                            option.textContent = model.data.attributes.name;
                            modelDropdown.appendChild(option);
                        });
                        
                        // Enable the model dropdown
                        modelDropdown.disabled = false;
                    })
                    .catch(error => {
                        console.error('Error fetching models:', error);
                        modelDropdown.innerHTML = '<option value=\"\">Erreur de chargement</option>';
                    });
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
        return "conducteur/voiture_add.html.twig";
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
        return array (  289 => 117,  276 => 116,  244 => 93,  239 => 90,  228 => 88,  224 => 87,  215 => 80,  213 => 79,  188 => 56,  185 => 55,  174 => 53,  169 => 52,  167 => 51,  137 => 24,  133 => 22,  124 => 19,  121 => 18,  117 => 17,  106 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Ajouter un véhicule{% endblock %}

{% block content %}
    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-primary\">Ajouter un véhicule</h1>
        <p class=\"text-gray-600 mt-2\">Enregistrez les informations de votre véhicule pour pouvoir proposer des trajets</p>
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
        <form method=\"POST\" action=\"{{ path('app_conducteur_voiture_add') }}\" class=\"space-y-6\">
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div>
                    <label for=\"plaqueImatriculation\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Plaque d'immatriculation *
                    </label>
                    <input type=\"text\" id=\"plaqueImatriculation\" name=\"plaqueImatriculation\" 
                           class=\"w-full rounded-lg border-gray-300 shadow-sm\"
                           placeholder=\"AB-123-CD\" required>
                    <p class=\"text-xs text-gray-500 mt-1\">Format: XX-123-XX ou XX123XX</p>
                </div>
                
                <div>
                    <label for=\"dateImatriculation\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Date d'immatriculation *
                    </label>
                    <input type=\"date\" id=\"dateImatriculation\" name=\"dateImatriculation\" 
                           class=\"w-full rounded-lg border-gray-300 shadow-sm\"
                           required>
                </div>
                
                <div>
                    <label for=\"make-dropdown\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Marque *
                    </label>
                    <select id=\"make-dropdown\" class=\"w-full rounded-lg border-gray-300 shadow-sm\" required>
                        <option value=\"\">Sélectionnez une marque</option>
                        {% if carMakes is defined and carMakes|length > 0 %}
                            {% for make in carMakes %}
                                <option value=\"{{ make.data.id }}\">{{ make.data.attributes.name }}</option>
                            {% endfor %}
                        {% endif %}
                    </select>
                    <input type=\"hidden\" id=\"marque\" name=\"marque\" required>
                </div>
                
                <div>
                    <label for=\"model-dropdown\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Modèle *
                    </label>
                    <select id=\"model-dropdown\" class=\"w-full rounded-lg border-gray-300 shadow-sm\" required disabled>
                        <option value=\"\">Sélectionnez d'abord une marque</option>
                    </select>
                    <input type=\"hidden\" id=\"modele\" name=\"modele\" required>
                </div>
                
                <div>
                    <label for=\"couleur\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                        Couleur *
                    </label>
                    <input type=\"text\" id=\"couleur\" name=\"couleur\" 
                           class=\"w-full rounded-lg border-gray-300 shadow-sm\"
                           placeholder=\"Noir, Blanc, Rouge, etc.\" required>
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
                            <option value=\"{{ categorie.id }}\">{{ categorie.nom }}</option>
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
                          placeholder=\"Décrivez votre véhicule (options, particularités, etc.)\"></textarea>
            </div>
            
            <div class=\"flex justify-end mt-6\">
                <button type=\"submit\" class=\"px-6 py-3 bg-primary text-white rounded-lg shadow hover:bg-primary-dark\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 inline mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                    </svg>
                    Enregistrer mon véhicule
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

        // Update hidden input when dropdown changes
        makeDropdown.addEventListener('change', function() {
            if (this.value) {
                const selectedOption = this.options[this.selectedIndex];
                marqueInput.value = selectedOption.text;
                
                // Clear model dropdown and enable it
                modelDropdown.innerHTML = '<option value=\"\">Chargement des modèles...</option>';
                modelDropdown.disabled = true;
                
                // Fetch models for the selected make
                fetch(`/conducteur/api/car-models/\${this.value}`)
                    .then(response => response.json())
                    .then(data => {
                        // Clear loading option
                        modelDropdown.innerHTML = '<option value=\"\">Sélectionnez un modèle</option>';
                        
                        // Add model options from API response
                        data.forEach(model => {
                            const option = document.createElement('option');
                            option.value = model.data.id;
                            option.textContent = model.data.attributes.name;
                            modelDropdown.appendChild(option);
                        });
                        
                        // Enable the model dropdown
                        modelDropdown.disabled = false;
                    })
                    .catch(error => {
                        console.error('Error fetching models:', error);
                        modelDropdown.innerHTML = '<option value=\"\">Erreur de chargement</option>';
                    });
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
    });
</script>
{% endblock %} ", "conducteur/voiture_add.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\voiture_add.html.twig");
    }
}
