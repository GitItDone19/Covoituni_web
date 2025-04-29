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

/* conducteur/reclamation/show.html.twig */
class __TwigTemplate_369fb8a9ef04edc293fca265ef9cd460 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/reclamation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/reclamation/show.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/reclamation/show.html.twig", 1);
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

        yield "Détail de ma réclamation";
        
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
        <div class=\"flex justify-between items-center\">
            <h1 class=\"text-3xl font-bold text-gray-800\">Détail de ma réclamation</h1>
            <div class=\"flex space-x-3\">
                <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_mes_reclamations");
        yield "\" 
                   class=\"inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-xl hover:bg-gray-300 transition-colors duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour à la liste
                </a>
                
                ";
        // line 18
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 18, $this->source); })()), "state", [], "any", false, false, false, 18) == "pending")) {
            // line 19
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_reclamation");
            yield "\" 
                       class=\"inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition-colors duration-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\" />
                        </svg>
                        Nouvelle réclamation
                    </a>
                    
                    <form action=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\" method=\"post\" class=\"inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28))), "html", null, true);
            yield "\">
                        <button type=\"submit\" class=\"inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-xl hover:bg-red-700 transition-colors duration-300\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                            </svg>
                            Supprimer
                        </button>
                    </form>
                ";
        }
        // line 37
        yield "            </div>
        </div>
        
        <p class=\"text-gray-600 mt-2\">Consultez les informations de votre demande</p>
        
        <div class=\"mt-4\">
            <span class=\"inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
                ";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 44, $this->source); })()), "state", [], "any", false, false, false, 44) == "pending")) {
            // line 45
            yield "                    bg-yellow-100 text-yellow-800
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 46
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 46, $this->source); })()), "state", [], "any", false, false, false, 46) == "in_progress")) {
            // line 47
            yield "                    bg-blue-100 text-blue-800
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 48
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 48, $this->source); })()), "state", [], "any", false, false, false, 48) == "resolved")) {
            // line 49
            yield "                    bg-green-100 text-green-800
                ";
        } else {
            // line 51
            yield "                    bg-red-100 text-red-800
                ";
        }
        // line 53
        yield "            \">
                ";
        // line 54
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 54, $this->source); })()), "state", [], "any", false, false, false, 54) == "pending")) {
            // line 55
            yield "                    En attente
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 56
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 56, $this->source); })()), "state", [], "any", false, false, false, 56) == "in_progress")) {
            // line 57
            yield "                    En cours
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 58
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 58, $this->source); })()), "state", [], "any", false, false, false, 58) == "resolved")) {
            // line 59
            yield "                    Résolu
                ";
        } else {
            // line 61
            yield "                    Rejeté
                ";
        }
        // line 63
        yield "            </span>
            <span class=\"text-gray-500 text-sm ml-4\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 inline mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                </svg>
                Soumis le ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 68, $this->source); })()), "date", [], "any", false, false, false, 68), "d/m/Y à H:i"), "html", null, true);
        yield "
            </span>
        </div>
    </div>
    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-6\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 74, $this->source); })()), "subject", [], "any", false, false, false, 74), "html", null, true);
        yield "</h2>
        
        <div class=\"mt-4\">
            <h3 class=\"text-lg font-semibold text-gray-700 mb-2\">Description</h3>
            <div class=\"bg-gray-50 p-6 rounded-lg border border-gray-100\">
                <p class=\"text-gray-700 whitespace-pre-line\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 79, $this->source); })()), "description", [], "any", false, false, false, 79), "html", null, true);
        yield "</p>
            </div>
        </div>
    </div>
    
    ";
        // line 84
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 84, $this->source); })()), "reponses", [], "any", false, false, false, 84))) {
            // line 85
            yield "        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8\">
            <h2 class=\"text-xl font-bold mb-6 text-gray-800 flex items-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6\" />
                </svg>
                Réponses de l'administration
            </h2>
            
            ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 93, $this->source); })()), "reponses", [], "any", false, false, false, 93));
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 94
                yield "                <div class=\"bg-blue-50 p-6 rounded-lg border border-blue-100 mb-4\">
                    <div class=\"flex justify-between items-center mb-2\">
                        <span class=\"text-sm font-medium text-gray-600\">Administrateur: ";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "adminUsername", [], "any", false, false, false, 96), "html", null, true);
                yield "</span>
                        <span class=\"text-xs text-gray-500\">";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "date", [], "any", false, false, false, 97), "d/m/Y à H:i"), "html", null, true);
                yield "</span>
                    </div>
                    <p class=\"text-gray-700 whitespace-pre-line\">";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "content", [], "any", false, false, false, 99), "html", null, true);
                yield "</p>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            yield "        </div>
    ";
        }
        // line 104
        yield "    
    <div class=\"mt-6 text-gray-500 text-sm\">
        ID de réclamation: #";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106), "html", null, true);
        yield "
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
        return "conducteur/reclamation/show.html.twig";
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
        return array (  277 => 106,  273 => 104,  269 => 102,  260 => 99,  255 => 97,  251 => 96,  247 => 94,  243 => 93,  233 => 85,  231 => 84,  223 => 79,  215 => 74,  206 => 68,  199 => 63,  195 => 61,  191 => 59,  189 => 58,  186 => 57,  184 => 56,  181 => 55,  179 => 54,  176 => 53,  172 => 51,  168 => 49,  166 => 48,  163 => 47,  161 => 46,  158 => 45,  156 => 44,  147 => 37,  135 => 28,  131 => 27,  119 => 19,  117 => 18,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Détail de ma réclamation{% endblock %}

{% block content %}
    <div class=\"mb-8\">
        <div class=\"flex justify-between items-center\">
            <h1 class=\"text-3xl font-bold text-gray-800\">Détail de ma réclamation</h1>
            <div class=\"flex space-x-3\">
                <a href=\"{{ path('app_conducteur_mes_reclamations') }}\" 
                   class=\"inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-xl hover:bg-gray-300 transition-colors duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour à la liste
                </a>
                
                {% if reclamation.state == 'pending' %}
                    <a href=\"{{ path('app_conducteur_reclamation') }}\" 
                       class=\"inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition-colors duration-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\" />
                        </svg>
                        Nouvelle réclamation
                    </a>
                    
                    <form action=\"{{ path('app_reclamation_delete', {'id': reclamation.id}) }}\" method=\"post\" class=\"inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reclamation.id) }}\">
                        <button type=\"submit\" class=\"inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-xl hover:bg-red-700 transition-colors duration-300\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                            </svg>
                            Supprimer
                        </button>
                    </form>
                {% endif %}
            </div>
        </div>
        
        <p class=\"text-gray-600 mt-2\">Consultez les informations de votre demande</p>
        
        <div class=\"mt-4\">
            <span class=\"inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
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
            <span class=\"text-gray-500 text-sm ml-4\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 inline mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                </svg>
                Soumis le {{ reclamation.date|date('d/m/Y à H:i') }}
            </span>
        </div>
    </div>
    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-6\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800\">{{ reclamation.subject }}</h2>
        
        <div class=\"mt-4\">
            <h3 class=\"text-lg font-semibold text-gray-700 mb-2\">Description</h3>
            <div class=\"bg-gray-50 p-6 rounded-lg border border-gray-100\">
                <p class=\"text-gray-700 whitespace-pre-line\">{{ reclamation.description }}</p>
            </div>
        </div>
    </div>
    
    {% if reclamation.reponses is not empty %}
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8\">
            <h2 class=\"text-xl font-bold mb-6 text-gray-800 flex items-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6\" />
                </svg>
                Réponses de l'administration
            </h2>
            
            {% for reponse in reclamation.reponses %}
                <div class=\"bg-blue-50 p-6 rounded-lg border border-blue-100 mb-4\">
                    <div class=\"flex justify-between items-center mb-2\">
                        <span class=\"text-sm font-medium text-gray-600\">Administrateur: {{ reponse.adminUsername }}</span>
                        <span class=\"text-xs text-gray-500\">{{ reponse.date|date('d/m/Y à H:i') }}</span>
                    </div>
                    <p class=\"text-gray-700 whitespace-pre-line\">{{ reponse.content }}</p>
                </div>
            {% endfor %}
        </div>
    {% endif %}
    
    <div class=\"mt-6 text-gray-500 text-sm\">
        ID de réclamation: #{{ reclamation.id }}
    </div>
{% endblock %} ", "conducteur/reclamation/show.html.twig", "D:\\Covoituni_web-master\\templates\\conducteur\\reclamation\\show.html.twig");
    }
}
