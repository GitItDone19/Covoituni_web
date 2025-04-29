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

/* admin/trajet/show.html.twig */
class __TwigTemplate_0d73a9ff75f6340d2ec86b8f54fc54df extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trajet/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trajet/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/trajet/show.html.twig", 1);
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

        yield "Détails du Trajet";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        .btn-blue {
            background-color: rgba(37, 99, 235, 0.1);
            color: rgb(37, 99, 235);
            border: none;
        }
        .btn-blue:hover {
            background-color: rgba(37, 99, 235, 0.2);
        }
        .btn-yellow {
            background-color: rgba(245, 158, 11, 0.1);
            color: rgb(245, 158, 11);
            border: none;
        }
        .btn-yellow:hover {
            background-color: rgba(245, 158, 11, 0.2);
        }
        .btn-red {
            background-color: rgba(239, 68, 68, 0.1);
            color: rgb(239, 68, 68);
            border: none;
        }
        .btn-red:hover {
            background-color: rgba(239, 68, 68, 0.2);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 46
        yield "<div class=\"min-h-screen bg-gray-50 py-8\">
    <div class=\"container mx-auto px-4\">
        <div class=\"flex justify-between items-center mb-8\">
            <h1 class=\"text-2xl font-bold text-gray-800\">Détails du Trajet #";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49), "html", null, true);
        yield "</h1>
            <div class=\"flex space-x-2\">
                <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_trajets");
        yield "\" class=\"flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour à la liste
                </a>
            </div>
        </div>

        <div class=\"bg-white shadow-md rounded-lg overflow-hidden\">
            <div class=\"p-6 border-b border-gray-200\">
                <h2 class=\"text-xl font-semibold text-gray-800\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 62, $this->source); })()), "departurePoint", [], "any", false, false, false, 62), "html", null, true);
        yield " → ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 62, $this->source); })()), "arrivalPoint", [], "any", false, false, false, 62), "html", null, true);
        yield "</h2>
            </div>

            <div class=\"p-6 grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div>
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-4\">Informations du trajet</h3>
                    <div class=\"space-y-3\">
                        <div>
                            <span class=\"font-medium\">Point de départ:</span> 
                            <p class=\"text-gray-700 mt-1\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 71, $this->source); })()), "departurePoint", [], "any", false, false, false, 71), "html", null, true);
        yield "</p>
                        </div>
                        <div>
                            <span class=\"font-medium\">Point d'arrivée:</span> 
                            <p class=\"text-gray-700 mt-1\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 75, $this->source); })()), "arrivalPoint", [], "any", false, false, false, 75), "html", null, true);
        yield "</p>
                        </div>
                        <div>
                            <span class=\"font-medium\">Prix:</span> ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 78, $this->source); })()), "price", [], "any", false, false, false, 78), "html", null, true);
        yield " DT
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-4\">Informations supplémentaires</h3>
                    <div class=\"space-y-3\">
                        ";
        // line 86
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["trajet"] ?? null), "titre", [], "any", true, true, false, 86)) {
            // line 87
            yield "                        <div>
                            <span class=\"font-medium\">Titre:</span> ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 88, $this->source); })()), "titre", [], "any", false, false, false, 88), "html", null, true);
            yield "
                        </div>
                        ";
        }
        // line 91
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["trajet"] ?? null), "createdAt", [], "any", true, true, false, 91)) {
            // line 92
            yield "                        <div>
                            <span class=\"font-medium\">Date de création:</span> ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 93, $this->source); })()), "createdAt", [], "any", false, false, false, 93), "d/m/Y H:i"), "html", null, true);
            yield "
                        </div>
                        ";
        }
        // line 96
        yield "                    </div>
                </div>
            </div>

            <div class=\"p-6 border-t border-gray-200 flex space-x-3\">
                <a href=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_trajet_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
        yield "\" class=\"btn btn-yellow\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\" />
                    </svg>
                    Modifier
                </a>
                <form action=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_trajet_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 107, $this->source); })()), "id", [], "any", false, false, false, 107)]), "html", null, true);
        yield "\" method=\"post\" class=\"inline-block\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce trajet?')\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-red\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                        </svg>
                        Supprimer
                    </button>
                </form>
            </div>
        </div>
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
        return "admin/trajet/show.html.twig";
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
        return array (  269 => 108,  265 => 107,  256 => 101,  249 => 96,  243 => 93,  240 => 92,  237 => 91,  231 => 88,  228 => 87,  226 => 86,  215 => 78,  209 => 75,  202 => 71,  188 => 62,  174 => 51,  169 => 49,  164 => 46,  151 => 45,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du Trajet{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        .btn-blue {
            background-color: rgba(37, 99, 235, 0.1);
            color: rgb(37, 99, 235);
            border: none;
        }
        .btn-blue:hover {
            background-color: rgba(37, 99, 235, 0.2);
        }
        .btn-yellow {
            background-color: rgba(245, 158, 11, 0.1);
            color: rgb(245, 158, 11);
            border: none;
        }
        .btn-yellow:hover {
            background-color: rgba(245, 158, 11, 0.2);
        }
        .btn-red {
            background-color: rgba(239, 68, 68, 0.1);
            color: rgb(239, 68, 68);
            border: none;
        }
        .btn-red:hover {
            background-color: rgba(239, 68, 68, 0.2);
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-50 py-8\">
    <div class=\"container mx-auto px-4\">
        <div class=\"flex justify-between items-center mb-8\">
            <h1 class=\"text-2xl font-bold text-gray-800\">Détails du Trajet #{{ trajet.id }}</h1>
            <div class=\"flex space-x-2\">
                <a href=\"{{ path('app_admin_trajets') }}\" class=\"flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour à la liste
                </a>
            </div>
        </div>

        <div class=\"bg-white shadow-md rounded-lg overflow-hidden\">
            <div class=\"p-6 border-b border-gray-200\">
                <h2 class=\"text-xl font-semibold text-gray-800\">{{ trajet.departurePoint }} → {{ trajet.arrivalPoint }}</h2>
            </div>

            <div class=\"p-6 grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div>
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-4\">Informations du trajet</h3>
                    <div class=\"space-y-3\">
                        <div>
                            <span class=\"font-medium\">Point de départ:</span> 
                            <p class=\"text-gray-700 mt-1\">{{ trajet.departurePoint }}</p>
                        </div>
                        <div>
                            <span class=\"font-medium\">Point d'arrivée:</span> 
                            <p class=\"text-gray-700 mt-1\">{{ trajet.arrivalPoint }}</p>
                        </div>
                        <div>
                            <span class=\"font-medium\">Prix:</span> {{ trajet.price }} DT
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-4\">Informations supplémentaires</h3>
                    <div class=\"space-y-3\">
                        {% if trajet.titre is defined %}
                        <div>
                            <span class=\"font-medium\">Titre:</span> {{ trajet.titre }}
                        </div>
                        {% endif %}
                        {% if trajet.createdAt is defined %}
                        <div>
                            <span class=\"font-medium\">Date de création:</span> {{ trajet.createdAt|date('d/m/Y H:i') }}
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>

            <div class=\"p-6 border-t border-gray-200 flex space-x-3\">
                <a href=\"{{ path('app_admin_trajet_edit', {'id': trajet.id}) }}\" class=\"btn btn-yellow\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\" />
                    </svg>
                    Modifier
                </a>
                <form action=\"{{ path('app_admin_trajet_delete', {'id': trajet.id}) }}\" method=\"post\" class=\"inline-block\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce trajet?')\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ trajet.id) }}\">
                    <button type=\"submit\" class=\"btn btn-red\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                        </svg>
                        Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "admin/trajet/show.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\admin\\trajet\\show.html.twig");
    }
}
