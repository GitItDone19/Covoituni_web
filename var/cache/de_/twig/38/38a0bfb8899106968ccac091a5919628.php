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

/* conducteur/reclamation/index.html.twig */
class __TwigTemplate_6decf11181a69cc032850f6fab806685 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/reclamation/index.html.twig", 1);
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

        yield "Mes réclamations";
        
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
        <h1 class=\"text-3xl font-bold text-gray-800\">Mes réclamations</h1>
        <p class=\"text-gray-600\">Historique de vos demandes et signalements</p>
        
        <div class=\"mt-4 mb-6\">
            <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_reclamation");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                </svg>
                Nouvelle réclamation
            </a>
        </div>
    </div>
    
    ";
        // line 20
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 20, $this->source); })())) > 0)) {
            // line 21
            yield "        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
                // line 23
                yield "                <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-6\">
                    <div class=\"flex justify-between items-start mb-4\">
                        <div>
                            <h3 class=\"text-lg font-semibold text-gray-800\">";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "subject", [], "any", false, false, false, 26), "html", null, true);
                yield "</h3>
                            <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                ";
                // line 28
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "state", [], "any", false, false, false, 28) == "pending")) {
                    // line 29
                    yield "                                    bg-yellow-100 text-yellow-800
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 30
$context["reclamation"], "state", [], "any", false, false, false, 30) == "in_progress")) {
                    // line 31
                    yield "                                    bg-blue-100 text-blue-800
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 32
$context["reclamation"], "state", [], "any", false, false, false, 32) == "resolved")) {
                    // line 33
                    yield "                                    bg-green-100 text-green-800
                                ";
                } else {
                    // line 35
                    yield "                                    bg-red-100 text-red-800
                                ";
                }
                // line 37
                yield "                            \">
                                ";
                // line 38
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "state", [], "any", false, false, false, 38) == "pending")) {
                    // line 39
                    yield "                                    En attente
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 40
$context["reclamation"], "state", [], "any", false, false, false, 40) == "in_progress")) {
                    // line 41
                    yield "                                    En cours
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 42
$context["reclamation"], "state", [], "any", false, false, false, 42) == "resolved")) {
                    // line 43
                    yield "                                    Résolu
                                ";
                } else {
                    // line 45
                    yield "                                    Rejeté
                                ";
                }
                // line 47
                yield "                            </span>
                        </div>
                        <div class=\"text-xs text-gray-500\">
                            ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 50), "d/m/Y"), "html", null, true);
                yield "
                        </div>
                    </div>
                    
                    <div class=\"bg-gray-50 p-4 rounded-lg mb-3\">
                        <p class=\"text-gray-700\">";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 55), 0, 150), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 55)) > 150)) {
                    yield "...";
                }
                yield "</p>
                    </div>
                    
                    <div class=\"flex justify-end gap-2\">
                        <a href=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                yield "\" class=\"inline-flex items-center px-3 py-1.5 bg-blue-50 text-blue-700 rounded-lg hover:bg-blue-100 transition-colors duration-200 text-xs font-medium\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\" />
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\" />
                            </svg>
                            Voir détails
                        </a>
                        ";
                // line 66
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "state", [], "any", false, false, false, 66) == "pending")) {
                    // line 67
                    yield "                            <a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_reclamation");
                    yield "\" class=\"inline-flex items-center px-3 py-1.5 bg-amber-50 text-amber-700 rounded-lg hover:bg-amber-100 transition-colors duration-200 text-xs font-medium\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\" />
                                </svg>
                                Nouvelle réclamation
                            </a>
                            
                            <form action=\"";
                    // line 74
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                    yield "\" method=\"post\" class=\"inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 75
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 75))), "html", null, true);
                    yield "\">
                                <button type=\"submit\" class=\"inline-flex items-center px-3 py-1.5 bg-red-50 text-red-700 rounded-lg hover:bg-red-100 transition-colors duration-200 text-xs font-medium\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?');\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                                    </svg>
                                    Supprimer
                                </button>
                            </form>
                        ";
                }
                // line 84
                yield "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            yield "        </div>
    ";
        } else {
            // line 89
            yield "        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 text-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 text-gray-400 mx-auto mb-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12h.01M12 12h.01M15 12h.01M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2z\" />
            </svg>
            <p class=\"text-gray-500\">Vous n'avez pas encore soumis de réclamation.</p>
            
            <div class=\"mt-4\">
                <a href=\"";
            // line 96
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_reclamation");
            yield "\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                    </svg>
                    Créer une réclamation
                </a>
            </div>
        </div>
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
        return "conducteur/reclamation/index.html.twig";
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
        return array (  264 => 96,  255 => 89,  251 => 87,  243 => 84,  231 => 75,  227 => 74,  216 => 67,  214 => 66,  204 => 59,  194 => 55,  186 => 50,  181 => 47,  177 => 45,  173 => 43,  171 => 42,  168 => 41,  166 => 40,  163 => 39,  161 => 38,  158 => 37,  154 => 35,  150 => 33,  148 => 32,  145 => 31,  143 => 30,  140 => 29,  138 => 28,  133 => 26,  128 => 23,  124 => 22,  121 => 21,  119 => 20,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Mes réclamations{% endblock %}

{% block content %}
    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-gray-800\">Mes réclamations</h1>
        <p class=\"text-gray-600\">Historique de vos demandes et signalements</p>
        
        <div class=\"mt-4 mb-6\">
            <a href=\"{{ path('app_conducteur_reclamation') }}\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                </svg>
                Nouvelle réclamation
            </a>
        </div>
    </div>
    
    {% if reclamations|length > 0 %}
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            {% for reclamation in reclamations %}
                <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-6\">
                    <div class=\"flex justify-between items-start mb-4\">
                        <div>
                            <h3 class=\"text-lg font-semibold text-gray-800\">{{ reclamation.subject }}</h3>
                            <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                {% if reclamation.state == 'pending' %}
                                    bg-yellow-100 text-yellow-800
                                {% elseif reclamation.state == 'in_progress' %}
                                    bg-blue-100 text-blue-800
                                {% elseif reclamation.state == 'resolved' %}
                                    bg-green-100 text-green-800
                                {% else %}
                                    bg-red-100 text-red-800
                                {% endif %}
                            \">
                                {% if reclamation.state == 'pending' %}
                                    En attente
                                {% elseif reclamation.state == 'in_progress' %}
                                    En cours
                                {% elseif reclamation.state == 'resolved' %}
                                    Résolu
                                {% else %}
                                    Rejeté
                                {% endif %}
                            </span>
                        </div>
                        <div class=\"text-xs text-gray-500\">
                            {{ reclamation.date|date('d/m/Y') }}
                        </div>
                    </div>
                    
                    <div class=\"bg-gray-50 p-4 rounded-lg mb-3\">
                        <p class=\"text-gray-700\">{{ reclamation.description|slice(0, 150) }}{% if reclamation.description|length > 150 %}...{% endif %}</p>
                    </div>
                    
                    <div class=\"flex justify-end gap-2\">
                        <a href=\"{{ path('app_conducteur_reclamation_show', {'id': reclamation.id}) }}\" class=\"inline-flex items-center px-3 py-1.5 bg-blue-50 text-blue-700 rounded-lg hover:bg-blue-100 transition-colors duration-200 text-xs font-medium\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\" />
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\" />
                            </svg>
                            Voir détails
                        </a>
                        {% if reclamation.state == 'pending' %}
                            <a href=\"{{ path('app_conducteur_reclamation') }}\" class=\"inline-flex items-center px-3 py-1.5 bg-amber-50 text-amber-700 rounded-lg hover:bg-amber-100 transition-colors duration-200 text-xs font-medium\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\" />
                                </svg>
                                Nouvelle réclamation
                            </a>
                            
                            <form action=\"{{ path('app_reclamation_delete', {'id': reclamation.id}) }}\" method=\"post\" class=\"inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reclamation.id) }}\">
                                <button type=\"submit\" class=\"inline-flex items-center px-3 py-1.5 bg-red-50 text-red-700 rounded-lg hover:bg-red-100 transition-colors duration-200 text-xs font-medium\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?');\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                                    </svg>
                                    Supprimer
                                </button>
                            </form>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 text-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 text-gray-400 mx-auto mb-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12h.01M12 12h.01M15 12h.01M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2z\" />
            </svg>
            <p class=\"text-gray-500\">Vous n'avez pas encore soumis de réclamation.</p>
            
            <div class=\"mt-4\">
                <a href=\"{{ path('app_conducteur_reclamation') }}\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                    </svg>
                    Créer une réclamation
                </a>
            </div>
        </div>
    {% endif %}
{% endblock %} ", "conducteur/reclamation/index.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\reclamation\\index.html.twig");
    }
}
