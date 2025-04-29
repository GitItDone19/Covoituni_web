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

/* admin/trajet/edit.html.twig */
class __TwigTemplate_908bd8114b941a407bdf34a5330389cd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trajet/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trajet/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/trajet/edit.html.twig", 1);
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

        yield "Modifier le Trajet";
        
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
        .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            line-height: 1.5;
        }
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #374151;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-help {
            display: block;
            margin-top: 0.25rem;
            font-size: 0.75rem;
            color: #6b7280;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
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

        // line 62
        yield "<div class=\"min-h-screen bg-gray-50 py-8\">
    <div class=\"container mx-auto px-4\">
        <div class=\"flex justify-between items-center mb-8\">
            <h1 class=\"text-2xl font-bold text-gray-800\">Modifier le Trajet #";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65), "html", null, true);
        yield "</h1>
            <div class=\"flex space-x-2\">
                <a href=\"";
        // line 67
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
                <h2 class=\"text-xl font-semibold text-gray-800\">Modifier les informations</h2>
            </div>
            
            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "flashes", [], "any", false, false, false, 81));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 82
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 83
                yield "                    <div class=\"p-4 mb-4 ";
                if (($context["label"] == "success")) {
                    yield "bg-primary text-white";
                } else {
                    yield "bg-error text-white";
                }
                yield "\">
                        ";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "
            <form method=\"post\" class=\"p-6\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div>
                        <div class=\"form-group\">
                            <label for=\"departure_point\" class=\"form-label\">Point de départ</label>
                            <input type=\"text\" id=\"departure_point\" name=\"departure_point\" value=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 94, $this->source); })()), "departurePoint", [], "any", false, false, false, 94), "html", null, true);
        yield "\" 
                                maxlength=\"25\" class=\"form-control\">
                            <span class=\"form-help\">Max. 25 caractères, alphabétique uniquement</span>
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"arrival_point\" class=\"form-label\">Point d'arrivée</label>
                            <input type=\"text\" id=\"arrival_point\" name=\"arrival_point\" value=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 101, $this->source); })()), "arrivalPoint", [], "any", false, false, false, 101), "html", null, true);
        yield "\" 
                                maxlength=\"25\" class=\"form-control\">
                            <span class=\"form-help\">Max. 25 caractères, alphabétique uniquement</span>
                        </div>
                    </div>
                    
                    <div>
                        <div class=\"form-group\">
                            <label for=\"price\" class=\"form-label\">Prix par passager (DT)</label>
                            <input type=\"number\" id=\"price\" name=\"price\" value=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 110, $this->source); })()), "price", [], "any", false, false, false, 110), "html", null, true);
        yield "\" 
                                min=\"0\" step=\"0.01\" class=\"form-control\">
                        </div>
                        
                        ";
        // line 114
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["trajet"] ?? null), "titre", [], "any", true, true, false, 114)) {
            // line 115
            yield "                        <div class=\"form-group\">
                            <label for=\"titre\" class=\"form-label\">Titre (optionnel)</label>
                            <input type=\"text\" id=\"titre\" name=\"titre\" value=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 117, $this->source); })()), "titre", [], "any", false, false, false, 117), "html", null, true);
            yield "\" 
                                maxlength=\"25\" class=\"form-control\">
                            <span class=\"form-help\">Max. 25 caractères, alphabétique et \"-->\" uniquement</span>
                        </div>
                        ";
        }
        // line 122
        yield "                    </div>
                </div>
                
                <div class=\"mt-6 flex justify-end space-x-3\">
                    <a href=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_trajet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 126, $this->source); })()), "id", [], "any", false, false, false, 126)]), "html", null, true);
        yield "\" class=\"btn btn-blue\">
                        Annuler
                    </a>
                    <button type=\"submit\" class=\"btn btn-yellow\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                        </svg>
                        Enregistrer
                    </button>
                </div>
            </form>
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
        return "admin/trajet/edit.html.twig";
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
        return array (  297 => 126,  291 => 122,  283 => 117,  279 => 115,  277 => 114,  270 => 110,  258 => 101,  248 => 94,  240 => 88,  234 => 87,  225 => 84,  216 => 83,  211 => 82,  207 => 81,  190 => 67,  185 => 65,  180 => 62,  167 => 61,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier le Trajet{% endblock %}

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
        .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            line-height: 1.5;
        }
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #374151;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-help {
            display: block;
            margin-top: 0.25rem;
            font-size: 0.75rem;
            color: #6b7280;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-50 py-8\">
    <div class=\"container mx-auto px-4\">
        <div class=\"flex justify-between items-center mb-8\">
            <h1 class=\"text-2xl font-bold text-gray-800\">Modifier le Trajet #{{ trajet.id }}</h1>
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
                <h2 class=\"text-xl font-semibold text-gray-800\">Modifier les informations</h2>
            </div>
            
            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"p-4 mb-4 {% if label == 'success' %}bg-primary text-white{% else %}bg-error text-white{% endif %}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}

            <form method=\"post\" class=\"p-6\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div>
                        <div class=\"form-group\">
                            <label for=\"departure_point\" class=\"form-label\">Point de départ</label>
                            <input type=\"text\" id=\"departure_point\" name=\"departure_point\" value=\"{{ trajet.departurePoint }}\" 
                                maxlength=\"25\" class=\"form-control\">
                            <span class=\"form-help\">Max. 25 caractères, alphabétique uniquement</span>
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"arrival_point\" class=\"form-label\">Point d'arrivée</label>
                            <input type=\"text\" id=\"arrival_point\" name=\"arrival_point\" value=\"{{ trajet.arrivalPoint }}\" 
                                maxlength=\"25\" class=\"form-control\">
                            <span class=\"form-help\">Max. 25 caractères, alphabétique uniquement</span>
                        </div>
                    </div>
                    
                    <div>
                        <div class=\"form-group\">
                            <label for=\"price\" class=\"form-label\">Prix par passager (DT)</label>
                            <input type=\"number\" id=\"price\" name=\"price\" value=\"{{ trajet.price }}\" 
                                min=\"0\" step=\"0.01\" class=\"form-control\">
                        </div>
                        
                        {% if trajet.titre is defined %}
                        <div class=\"form-group\">
                            <label for=\"titre\" class=\"form-label\">Titre (optionnel)</label>
                            <input type=\"text\" id=\"titre\" name=\"titre\" value=\"{{ trajet.titre }}\" 
                                maxlength=\"25\" class=\"form-control\">
                            <span class=\"form-help\">Max. 25 caractères, alphabétique et \"-->\" uniquement</span>
                        </div>
                        {% endif %}
                    </div>
                </div>
                
                <div class=\"mt-6 flex justify-end space-x-3\">
                    <a href=\"{{ path('app_admin_trajet_show', {'id': trajet.id}) }}\" class=\"btn btn-blue\">
                        Annuler
                    </a>
                    <button type=\"submit\" class=\"btn btn-yellow\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                        </svg>
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %} ", "admin/trajet/edit.html.twig", "D:\\Covoituni_web-master\\templates\\admin\\trajet\\edit.html.twig");
    }
}
