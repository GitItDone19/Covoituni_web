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

/* passager/avis/new.html.twig */
class __TwigTemplate_88422f202d64aca67f37cf238e30403c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/avis/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/avis/new.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "passager/avis/new.html.twig", 1);
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

        yield "Ajouter un avis";
        
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
        yield "    <div class=\"mb-8 flex justify-between items-center\">
        <div>
            <h1 class=\"text-3xl font-bold text-gray-800\">Ajouter un avis</h1>
            <p class=\"text-gray-600\">Partagez votre expérience avec un conducteur</p>
        </div>
        
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_avis_list");
        yield "\" 
           class=\"inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-xl hover:bg-gray-300 transition-colors duration-300\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 10h16M4 14h16M4 18h16\" />
            </svg>
            Voir tous les avis
        </a>
    </div>
    
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 22
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 23
                yield "            <div class=\"";
                if (($context["label"] == "success")) {
                    yield "bg-green-100 border-green-500 text-green-700";
                } else {
                    yield "bg-red-100 border-red-500 text-red-700";
                }
                yield " p-4 mb-6 rounded-md border-l-4\">
                <div class=\"flex items-center\">
                    ";
                // line 25
                if (($context["label"] == "success")) {
                    // line 26
                    yield "                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                        </svg>
                    ";
                } else {
                    // line 30
                    yield "                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                        </svg>
                    ";
                }
                // line 34
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800 flex items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\" />
            </svg>
            Formulaire d'avis
        </h2>
        
        <form action=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_avis_submit");
        yield "\" method=\"post\" class=\"space-y-6\">
            <div>
                <label for=\"driver\" class=\"block text-sm font-medium text-gray-700 mb-1\">Conducteur</label>
                <select id=\"driver\" name=\"driver\" required
                        class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                    <option value=\"\">Sélectionnez un conducteur</option>
                    ";
        // line 54
        if ((array_key_exists("conducteurs", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["conducteurs"]) || array_key_exists("conducteurs", $context) ? $context["conducteurs"] : (function () { throw new RuntimeError('Variable "conducteurs" does not exist.', 54, $this->source); })())) > 0))) {
            // line 55
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["conducteurs"]) || array_key_exists("conducteurs", $context) ? $context["conducteurs"] : (function () { throw new RuntimeError('Variable "conducteurs" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["conducteur"]) {
                // line 56
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["conducteur"], "id", [], "any", false, false, false, 56) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56))) {
                    // line 57
                    yield "                                <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conducteur"], "id", [], "any", false, false, false, 57), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conducteur"], "prenom", [], "any", false, false, false, 57), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conducteur"], "nom", [], "any", false, false, false, 57), "html", null, true);
                    yield "</option>
                            ";
                }
                // line 59
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['conducteur'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "                    ";
        }
        // line 61
        yield "                </select>
            </div>
            
            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Note</label>
                <div class=\"flex items-center space-x-2\">
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 68
            yield "                        <label for=\"star-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" class=\"cursor-pointer\">
                            <input type=\"radio\" id=\"star-";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" name=\"rating\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" class=\"sr-only star-input\" required>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-8 w-8 text-gray-300 hover:text-yellow-400 transition-colors duration-200 star-rating\" fill=\"currentColor\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"1\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\" />
                            </svg>
                        </label>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "                </div>
            </div>
            
            <div>
                <label for=\"comment\" class=\"block text-sm font-medium text-gray-700 mb-1\">Commentaire</label>
                <textarea id=\"comment\" name=\"comment\" rows=\"4\" required
                          class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                          placeholder=\"Partagez votre expérience avec ce conducteur...\"></textarea>
            </div>
            
            <div class=\"flex justify-end\">
                <button type=\"submit\" 
                        class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                    </svg>
                    Soumettre l'avis
                </button>
            </div>
        </form>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.star-rating');
            const inputs = document.querySelectorAll('.star-input');
            
            stars.forEach((star, index) => {
                star.addEventListener('click', () => {
                    // Set the radio input as checked
                    inputs[index].checked = true;
                    
                    // Fill in all stars up to and including the clicked star
                    stars.forEach((s, i) => {
                        if (i <= index) {
                            s.classList.add('text-yellow-400');
                            s.classList.remove('text-gray-300');
                        } else {
                            s.classList.remove('text-yellow-400');
                            s.classList.add('text-gray-300');
                        }
                    });
                });
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
        return "passager/avis/new.html.twig";
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
        return array (  250 => 75,  236 => 69,  231 => 68,  227 => 67,  219 => 61,  216 => 60,  210 => 59,  200 => 57,  197 => 56,  192 => 55,  190 => 54,  181 => 48,  170 => 39,  164 => 38,  153 => 34,  147 => 30,  141 => 26,  139 => 25,  129 => 23,  124 => 22,  120 => 21,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Ajouter un avis{% endblock %}

{% block content %}
    <div class=\"mb-8 flex justify-between items-center\">
        <div>
            <h1 class=\"text-3xl font-bold text-gray-800\">Ajouter un avis</h1>
            <p class=\"text-gray-600\">Partagez votre expérience avec un conducteur</p>
        </div>
        
        <a href=\"{{ path('app_passager_avis_list') }}\" 
           class=\"inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-xl hover:bg-gray-300 transition-colors duration-300\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 10h16M4 14h16M4 18h16\" />
            </svg>
            Voir tous les avis
        </a>
    </div>
    
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"{% if label == 'success' %}bg-green-100 border-green-500 text-green-700{% else %}bg-red-100 border-red-500 text-red-700{% endif %} p-4 mb-6 rounded-md border-l-4\">
                <div class=\"flex items-center\">
                    {% if label == 'success' %}
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                        </svg>
                    {% else %}
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                        </svg>
                    {% endif %}
                    {{ message }}
                </div>
            </div>
        {% endfor %}
    {% endfor %}
    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800 flex items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\" />
            </svg>
            Formulaire d'avis
        </h2>
        
        <form action=\"{{ path('app_passager_avis_submit') }}\" method=\"post\" class=\"space-y-6\">
            <div>
                <label for=\"driver\" class=\"block text-sm font-medium text-gray-700 mb-1\">Conducteur</label>
                <select id=\"driver\" name=\"driver\" required
                        class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                    <option value=\"\">Sélectionnez un conducteur</option>
                    {% if conducteurs is defined and conducteurs|length > 0 %}
                        {% for conducteur in conducteurs %}
                            {% if conducteur.id != app.user.id %}
                                <option value=\"{{ conducteur.id }}\">{{ conducteur.prenom }} {{ conducteur.nom }}</option>
                            {% endif %}
                        {% endfor %}
                    {% endif %}
                </select>
            </div>
            
            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Note</label>
                <div class=\"flex items-center space-x-2\">
                    {% for i in 1..5 %}
                        <label for=\"star-{{ i }}\" class=\"cursor-pointer\">
                            <input type=\"radio\" id=\"star-{{ i }}\" name=\"rating\" value=\"{{ i }}\" class=\"sr-only star-input\" required>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-8 w-8 text-gray-300 hover:text-yellow-400 transition-colors duration-200 star-rating\" fill=\"currentColor\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"1\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\" />
                            </svg>
                        </label>
                    {% endfor %}
                </div>
            </div>
            
            <div>
                <label for=\"comment\" class=\"block text-sm font-medium text-gray-700 mb-1\">Commentaire</label>
                <textarea id=\"comment\" name=\"comment\" rows=\"4\" required
                          class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                          placeholder=\"Partagez votre expérience avec ce conducteur...\"></textarea>
            </div>
            
            <div class=\"flex justify-end\">
                <button type=\"submit\" 
                        class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                    </svg>
                    Soumettre l'avis
                </button>
            </div>
        </form>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.star-rating');
            const inputs = document.querySelectorAll('.star-input');
            
            stars.forEach((star, index) => {
                star.addEventListener('click', () => {
                    // Set the radio input as checked
                    inputs[index].checked = true;
                    
                    // Fill in all stars up to and including the clicked star
                    stars.forEach((s, i) => {
                        if (i <= index) {
                            s.classList.add('text-yellow-400');
                            s.classList.remove('text-gray-300');
                        } else {
                            s.classList.remove('text-yellow-400');
                            s.classList.add('text-gray-300');
                        }
                    });
                });
            });
        });
    </script>
{% endblock %} ", "passager/avis/new.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\passager\\avis\\new.html.twig");
    }
}
