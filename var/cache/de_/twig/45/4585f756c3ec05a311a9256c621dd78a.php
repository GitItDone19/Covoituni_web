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

/* conducteur/reclamation.html.twig */
class __TwigTemplate_16a20fb62d9e1757ee132f119ff760a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/reclamation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/reclamation.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/reclamation.html.twig", 1);
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

        yield "Driver Reclamation";
        
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
        <h1 class=\"text-3xl font-bold text-gray-800\">Faire une réclamation</h1>
        <p class=\"text-gray-600\">Signalez un problème ou faites une demande à l'administration</p>
        
        <div class=\"mt-4\">
            <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_mes_reclamations");
        yield "\" 
               class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                </svg>
                Voir mes réclamations
            </a>
        </div>
    </div>
    
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", ["error"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            yield "        <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4 rounded-md\">
            <div class=\"flex items-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-red-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z\" />
                </svg>
                <span>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "flashes", ["success"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            yield "        <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded-md\">
            <div class=\"flex items-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-green-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                </svg>
                <span>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800 flex items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
            </svg>
            Formulaire de réclamation
        </h2>
        
        <form action=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_reclamation_submit");
        yield "\" method=\"post\" class=\"space-y-6\" id=\"reclamationForm\">
            <div>
                <label for=\"subject\" class=\"block text-sm font-medium text-gray-700 mb-1\">Sujet <span class=\"text-red-500\">*</span></label>
                <input type=\"text\" id=\"subject\" name=\"subject\" required
                       class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                       placeholder=\"Entrez le sujet de votre réclamation\"
                       minlength=\"5\" maxlength=\"255\"
                       pattern=\"\\S(.*\\S)?\" title=\"Le sujet ne peut pas contenir uniquement des espaces\">
                <p class=\"text-xs text-gray-500 mt-1\">Le sujet doit contenir au moins 5 caractères et ne peut pas être composé uniquement d'espaces</p>
            </div>
            
            <div>
                <label for=\"description\" class=\"block text-sm font-medium text-gray-700 mb-1\">Description <span class=\"text-red-500\">*</span></label>
                <textarea id=\"description\" name=\"description\" rows=\"6\" required
                          class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                          placeholder=\"Décrivez votre problème en détail...\"
                          minlength=\"10\"></textarea>
                <p class=\"text-xs text-gray-500 mt-1\">La description doit contenir au moins 10 caractères et ne peut pas être composée uniquement d'espaces</p>
                <div id=\"descriptionError\" class=\"text-red-500 text-xs mt-1 hidden\">La description ne peut pas contenir uniquement des espaces</div>
            </div>
            
            <div class=\"flex justify-end\">
                <button type=\"submit\" 
                        class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 19l9 2-9-18-9 18 9-2zm0 0v-8\" />
                    </svg>
                    Envoyer la réclamation
                </button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('reclamationForm');
            const descriptionField = document.getElementById('description');
            const descriptionError = document.getElementById('descriptionError');

            form.addEventListener('submit', function(event) {
                // Check if description contains only whitespace
                if (descriptionField.value.trim() === '') {
                    event.preventDefault();
                    descriptionError.classList.remove('hidden');
                    descriptionField.classList.add('border-red-500');
                    descriptionField.focus();
                } else {
                    descriptionError.classList.add('hidden');
                    descriptionField.classList.remove('border-red-500');
                }
            });

            // Reset error state when user starts typing
            descriptionField.addEventListener('input', function() {
                if (descriptionField.value.trim() !== '') {
                    descriptionError.classList.add('hidden');
                    descriptionField.classList.remove('border-red-500');
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
        return "conducteur/reclamation.html.twig";
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
        return array (  176 => 51,  165 => 42,  155 => 38,  148 => 33,  144 => 32,  141 => 31,  131 => 27,  124 => 22,  120 => 21,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Driver Reclamation{% endblock %}

{% block content %}
    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-gray-800\">Faire une réclamation</h1>
        <p class=\"text-gray-600\">Signalez un problème ou faites une demande à l'administration</p>
        
        <div class=\"mt-4\">
            <a href=\"{{ path('app_conducteur_mes_reclamations') }}\" 
               class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                </svg>
                Voir mes réclamations
            </a>
        </div>
    </div>
    
    {% for message in app.flashes('error') %}
        <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4 rounded-md\">
            <div class=\"flex items-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-red-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z\" />
                </svg>
                <span>{{ message }}</span>
            </div>
        </div>
    {% endfor %}

    {% for message in app.flashes('success') %}
        <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded-md\">
            <div class=\"flex items-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-green-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                </svg>
                <span>{{ message }}</span>
            </div>
        </div>
    {% endfor %}
    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800 flex items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
            </svg>
            Formulaire de réclamation
        </h2>
        
        <form action=\"{{ path('app_conducteur_reclamation_submit') }}\" method=\"post\" class=\"space-y-6\" id=\"reclamationForm\">
            <div>
                <label for=\"subject\" class=\"block text-sm font-medium text-gray-700 mb-1\">Sujet <span class=\"text-red-500\">*</span></label>
                <input type=\"text\" id=\"subject\" name=\"subject\" required
                       class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                       placeholder=\"Entrez le sujet de votre réclamation\"
                       minlength=\"5\" maxlength=\"255\"
                       pattern=\"\\S(.*\\S)?\" title=\"Le sujet ne peut pas contenir uniquement des espaces\">
                <p class=\"text-xs text-gray-500 mt-1\">Le sujet doit contenir au moins 5 caractères et ne peut pas être composé uniquement d'espaces</p>
            </div>
            
            <div>
                <label for=\"description\" class=\"block text-sm font-medium text-gray-700 mb-1\">Description <span class=\"text-red-500\">*</span></label>
                <textarea id=\"description\" name=\"description\" rows=\"6\" required
                          class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                          placeholder=\"Décrivez votre problème en détail...\"
                          minlength=\"10\"></textarea>
                <p class=\"text-xs text-gray-500 mt-1\">La description doit contenir au moins 10 caractères et ne peut pas être composée uniquement d'espaces</p>
                <div id=\"descriptionError\" class=\"text-red-500 text-xs mt-1 hidden\">La description ne peut pas contenir uniquement des espaces</div>
            </div>
            
            <div class=\"flex justify-end\">
                <button type=\"submit\" 
                        class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 19l9 2-9-18-9 18 9-2zm0 0v-8\" />
                    </svg>
                    Envoyer la réclamation
                </button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('reclamationForm');
            const descriptionField = document.getElementById('description');
            const descriptionError = document.getElementById('descriptionError');

            form.addEventListener('submit', function(event) {
                // Check if description contains only whitespace
                if (descriptionField.value.trim() === '') {
                    event.preventDefault();
                    descriptionError.classList.remove('hidden');
                    descriptionField.classList.add('border-red-500');
                    descriptionField.focus();
                } else {
                    descriptionError.classList.add('hidden');
                    descriptionField.classList.remove('border-red-500');
                }
            });

            // Reset error state when user starts typing
            descriptionField.addEventListener('input', function() {
                if (descriptionField.value.trim() !== '') {
                    descriptionError.classList.add('hidden');
                    descriptionField.classList.remove('border-red-500');
                }
            });
        });
    </script>
{% endblock %} ", "conducteur/reclamation.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\reclamation.html.twig");
    }
}
