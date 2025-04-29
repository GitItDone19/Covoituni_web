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

/* passager/reclamation/edit.html.twig */
class __TwigTemplate_c5cd8abd7a19cf9e014c201341b3805f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/reclamation/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/reclamation/edit.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "passager/reclamation/edit.html.twig", 1);
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

        yield "Modifier ma réclamation";
        
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
        yield "    <div class=\"mb-10 animate-fade-in\">
        <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0\">
            <div>
                <h1 class=\"text-3xl font-bold bg-gradient-to-r from-primary to-primary-dark bg-clip-text text-transparent\">
                    Modifier ma réclamation
                </h1>
                <p class=\"text-gray-600 mt-2 max-w-2xl\">
                    Vous pouvez mettre à jour les détails de votre réclamation. Nous traiterons votre demande dès que possible.
                </p>
            </div>
            <a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        yield "\" 
               class=\"inline-flex items-center px-4 py-2.5 bg-white text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-50 hover:shadow-md transition-all duration-300 transform hover:-translate-y-0.5\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                </svg>
                Retour aux détails
            </a>
        </div>
    </div>
    
    <div class=\"relative bg-white rounded-2xl shadow-[0_10px_60px_-15px_rgba(0,0,0,0.15)] p-8 md:p-10 animate-slide-up border border-gray-100\">
        <div class=\"absolute inset-0 bg-gradient-to-br from-white to-gray-50 rounded-2xl opacity-80 pointer-events-none\"></div>
        
        ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-8 relative z-10"]]);
        yield "
            <div class=\"mb-8 transition-all duration-300 transform hover:translate-x-1 group\">
                <label for=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "subject", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), "html", null, true);
        yield "\" class=\"block text-sm font-medium text-gray-700 mb-2 group-hover:text-primary transition-colors duration-300\">
                    Sujet de la réclamation
                </label>
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "subject", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-30 transition-all duration-300", "placeholder" => "Sujet de votre réclamation"]]);
        // line 39
        yield "
                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "subject", [], "any", false, false, false, 40), 'errors', ["attr" => ["class" => "text-red-500 text-sm mt-1"]]);
        yield "
            </div>
            
            <div class=\"mb-8 transition-all duration-300 transform hover:translate-x-1 group\">
                <label for=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
        yield "\" class=\"block text-sm font-medium text-gray-700 mb-2 group-hover:text-primary transition-colors duration-300\">
                    Description détaillée
                </label>
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-30 transition-all duration-300", "rows" => 8, "placeholder" => "Décrivez votre problème en détail..."]]);
        // line 53
        yield "
                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "description", [], "any", false, false, false, 54), 'errors', ["attr" => ["class" => "text-red-500 text-sm mt-1"]]);
        yield "
                <p class=\"text-xs text-gray-500 mt-2 italic\">Soyez précis et incluez autant de détails que possible pour nous aider à traiter votre réclamation efficacement.</p>
            </div>
            
            <div class=\"mt-10 flex justify-end\">
                <button type=\"submit\" class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 text-sm font-medium group\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 group-hover:animate-pulse\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                    </svg>
                    Enregistrer les modifications
                </button>
            </div>
        ";
        // line 66
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        yield "
    </div>

    <style>
        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slide-up {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        .animate-fade-in {
            animation: fade-in 0.8s ease-out forwards;
        }
        
        .animate-slide-up {
            animation: slide-up 0.6s ease-out 0.2s forwards;
            opacity: 0;
        }
    </style>
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
        return "passager/reclamation/edit.html.twig";
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
        return array (  177 => 66,  162 => 54,  159 => 53,  157 => 47,  151 => 44,  144 => 40,  141 => 39,  139 => 34,  133 => 31,  128 => 29,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Modifier ma réclamation{% endblock %}

{% block content %}
    <div class=\"mb-10 animate-fade-in\">
        <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0\">
            <div>
                <h1 class=\"text-3xl font-bold bg-gradient-to-r from-primary to-primary-dark bg-clip-text text-transparent\">
                    Modifier ma réclamation
                </h1>
                <p class=\"text-gray-600 mt-2 max-w-2xl\">
                    Vous pouvez mettre à jour les détails de votre réclamation. Nous traiterons votre demande dès que possible.
                </p>
            </div>
            <a href=\"{{ path('app_passager_reclamation_show', {'id': reclamation.id}) }}\" 
               class=\"inline-flex items-center px-4 py-2.5 bg-white text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-50 hover:shadow-md transition-all duration-300 transform hover:-translate-y-0.5\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                </svg>
                Retour aux détails
            </a>
        </div>
    </div>
    
    <div class=\"relative bg-white rounded-2xl shadow-[0_10px_60px_-15px_rgba(0,0,0,0.15)] p-8 md:p-10 animate-slide-up border border-gray-100\">
        <div class=\"absolute inset-0 bg-gradient-to-br from-white to-gray-50 rounded-2xl opacity-80 pointer-events-none\"></div>
        
        {{ form_start(form, {'attr': {'class': 'space-y-8 relative z-10'}}) }}
            <div class=\"mb-8 transition-all duration-300 transform hover:translate-x-1 group\">
                <label for=\"{{ form.subject.vars.id }}\" class=\"block text-sm font-medium text-gray-700 mb-2 group-hover:text-primary transition-colors duration-300\">
                    Sujet de la réclamation
                </label>
                {{ form_widget(form.subject, {
                    'attr': {
                        'class': 'mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-30 transition-all duration-300',
                        'placeholder': 'Sujet de votre réclamation'
                    }
                }) }}
                {{ form_errors(form.subject, {'attr': {'class': 'text-red-500 text-sm mt-1'}}) }}
            </div>
            
            <div class=\"mb-8 transition-all duration-300 transform hover:translate-x-1 group\">
                <label for=\"{{ form.description.vars.id }}\" class=\"block text-sm font-medium text-gray-700 mb-2 group-hover:text-primary transition-colors duration-300\">
                    Description détaillée
                </label>
                {{ form_widget(form.description, {
                    'attr': {
                        'class': 'mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-30 transition-all duration-300',
                        'rows': 8,
                        'placeholder': 'Décrivez votre problème en détail...'
                    }
                }) }}
                {{ form_errors(form.description, {'attr': {'class': 'text-red-500 text-sm mt-1'}}) }}
                <p class=\"text-xs text-gray-500 mt-2 italic\">Soyez précis et incluez autant de détails que possible pour nous aider à traiter votre réclamation efficacement.</p>
            </div>
            
            <div class=\"mt-10 flex justify-end\">
                <button type=\"submit\" class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 text-sm font-medium group\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 group-hover:animate-pulse\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                    </svg>
                    Enregistrer les modifications
                </button>
            </div>
        {{ form_end(form) }}
    </div>

    <style>
        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slide-up {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        .animate-fade-in {
            animation: fade-in 0.8s ease-out forwards;
        }
        
        .animate-slide-up {
            animation: slide-up 0.6s ease-out 0.2s forwards;
            opacity: 0;
        }
    </style>
{% endblock %} ", "passager/reclamation/edit.html.twig", "D:\\Covoituni_web-master\\templates\\passager\\reclamation\\edit.html.twig");
    }
}
