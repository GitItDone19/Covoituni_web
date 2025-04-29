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

/* conducteur/ajouter_annonce_success.html.twig */
class __TwigTemplate_d4d6c127df62c978d10f1ef9ccd7ed4b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/ajouter_annonce_success.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/ajouter_annonce_success.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/ajouter_annonce_success.html.twig", 1);
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

        yield "Annonce ajoutée avec succès";
        
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
        <h1 class=\"text-3xl font-bold text-gray-800\">Annonce ajoutée avec succès</h1>
        <p class=\"text-gray-600\">Votre annonce a été créée et tous les passagers potentiels ont été notifiés.</p>
    </div>
    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8\">
        <div class=\"flex items-center justify-center mb-6\">
            <div class=\"bg-green-100 rounded-full p-3\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12 text-green-600\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                </svg>
            </div>
        </div>
        
        <div class=\"text-center mb-8\">
            <h2 class=\"text-2xl font-bold text-gray-800 mb-2\">Annonce publiée!</h2>
            <p class=\"text-gray-600\">Votre annonce \"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 22, $this->source); })()), "titre", [], "any", false, false, false, 22), "html", null, true);
        yield "\" a été publiée avec succès.</p>
            <p class=\"text-sm text-gray-500 mt-2\">Les passagers potentiels recevront un email les informant de cette nouvelle opportunité.</p>
        </div>
        
        <div class=\"flex justify-center space-x-4\">
            <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_liste_annonce");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-xl hover:bg-gray-300 transition-colors duration-300\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 10h16M4 14h16M4 18h16\" />
                </svg>
                Voir mes annonces
            </a>
            
            <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_ajouter_annonce");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                </svg>
                Ajouter une autre annonce
            </a>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
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

        // line 45
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    
    ";
        // line 47
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "session", [], "any", false, false, false, 47), "get", ["email_notification"], "method", false, false, false, 47) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "session", [], "any", false, false, false, 47), "get", ["email_notification"], "method", false, false, false, 47), "type", [], "any", false, false, false, 47) == "annonce"))) {
            // line 48
            yield "        <script type=\"text/javascript\">
            document.addEventListener('DOMContentLoaded', function() {
                // Récupérer les données de notification de la session
                const notificationData = ";
            // line 51
            yield json_encode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "session", [], "any", false, false, false, 51), "get", ["email_notification"], "method", false, false, false, 51), "data", [], "any", false, false, false, 51));
            yield ";
                
                // Envoyer la notification par email
                emailjs.send(
                    notificationData.service_id,
                    notificationData.template_id,
                    notificationData.template_params
                ).then(function(response) {
                    console.log('Email envoyé!', response.status, response.text);
                }, function(error) {
                    console.error('Erreur lors de l\\'envoi de l\\'email', error);
                });
                
                // Supprimer les données de notification de la session après utilisation
                fetch('";
            // line 65
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_clear_notification");
            yield "');
            });
        </script>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "conducteur/ajouter_annonce_success.html.twig";
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
        return array (  200 => 65,  183 => 51,  178 => 48,  176 => 47,  170 => 45,  157 => 44,  137 => 34,  127 => 27,  119 => 22,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Annonce ajoutée avec succès{% endblock %}

{% block content %}
    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-gray-800\">Annonce ajoutée avec succès</h1>
        <p class=\"text-gray-600\">Votre annonce a été créée et tous les passagers potentiels ont été notifiés.</p>
    </div>
    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8\">
        <div class=\"flex items-center justify-center mb-6\">
            <div class=\"bg-green-100 rounded-full p-3\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12 text-green-600\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                </svg>
            </div>
        </div>
        
        <div class=\"text-center mb-8\">
            <h2 class=\"text-2xl font-bold text-gray-800 mb-2\">Annonce publiée!</h2>
            <p class=\"text-gray-600\">Votre annonce \"{{ annonce.titre }}\" a été publiée avec succès.</p>
            <p class=\"text-sm text-gray-500 mt-2\">Les passagers potentiels recevront un email les informant de cette nouvelle opportunité.</p>
        </div>
        
        <div class=\"flex justify-center space-x-4\">
            <a href=\"{{ path('app_conducteur_liste_annonce') }}\" class=\"inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-xl hover:bg-gray-300 transition-colors duration-300\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 10h16M4 14h16M4 18h16\" />
                </svg>
                Voir mes annonces
            </a>
            
            <a href=\"{{ path('app_conducteur_ajouter_annonce') }}\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                </svg>
                Ajouter une autre annonce
            </a>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    {% if app.session.get('email_notification') and app.session.get('email_notification').type == 'annonce' %}
        <script type=\"text/javascript\">
            document.addEventListener('DOMContentLoaded', function() {
                // Récupérer les données de notification de la session
                const notificationData = {{ app.session.get('email_notification').data|json_encode|raw }};
                
                // Envoyer la notification par email
                emailjs.send(
                    notificationData.service_id,
                    notificationData.template_id,
                    notificationData.template_params
                ).then(function(response) {
                    console.log('Email envoyé!', response.status, response.text);
                }, function(error) {
                    console.error('Erreur lors de l\\'envoi de l\\'email', error);
                });
                
                // Supprimer les données de notification de la session après utilisation
                fetch('{{ path('app_clear_notification') }}');
            });
        </script>
    {% endif %}
{% endblock %} ", "conducteur/ajouter_annonce_success.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\ajouter_annonce_success.html.twig");
    }
}
