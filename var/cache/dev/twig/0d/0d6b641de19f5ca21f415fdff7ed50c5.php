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

/* conducteur/profile.html.twig */
class __TwigTemplate_7f4da3b77c27dafc1f3e5b867edb53eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/profile.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/profile.html.twig", 1);
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

        yield "Driver Profile";
        
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
        <h1 class=\"text-3xl font-bold text-gray-800\">Driver Profile</h1>
        <p class=\"text-gray-600\">View and manage your profile information</p>
    </div>
    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800 flex items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
            </svg>
            My Profile
        </h2>
        <div class=\"flex flex-col md:flex-row items-start gap-8\">
            <div class=\"w-full md:w-1/3\">
                ";
        // line 20
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "imagePath", [], "any", false, false, false, 20)) {
            // line 21
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "imagePath", [], "any", false, false, false, 21)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "username", [], "any", false, false, false, 21), "html", null, true);
            yield "\" class=\"w-32 h-32 rounded-full object-cover mx-auto border-4 border-primary-ultra-light\">
                ";
        } else {
            // line 23
            yield "                    <div class=\"w-32 h-32 rounded-full bg-gradient-to-r from-primary to-primary-dark flex items-center justify-center text-white text-3xl font-bold mx-auto shadow-lg\">
                        ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24)), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 27
        yield "                <div class=\"text-center mt-4\">
                    <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit_profile");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z\" />
                        </svg>
                        Edit Profile
                    </a>
                </div>
            </div>
            <div class=\"w-full md:w-2/3\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div class=\"bg-gray-50 rounded-xl p-4 shadow-sm\">
                        <p class=\"text-sm text-gray-500 mb-1\">Full Name</p>
                        <p class=\"font-medium text-gray-800\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "prenom", [], "any", false, false, false, 40), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "nom", [], "any", false, false, false, 40), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"bg-gray-50 rounded-xl p-4 shadow-sm\">
                        <p class=\"text-sm text-gray-500 mb-1\">Username</p>
                        <p class=\"font-medium text-gray-800\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "username", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"bg-gray-50 rounded-xl p-4 shadow-sm\">
                        <p class=\"text-sm text-gray-500 mb-1\">Email Address</p>
                        <p class=\"font-medium text-gray-800\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"bg-gray-50 rounded-xl p-4 shadow-sm\">
                        <p class=\"text-sm text-gray-500 mb-1\">Phone Number</p>
                        <p class=\"font-medium text-gray-800\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "tel", [], "any", false, false, false, 52), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"bg-gray-50 rounded-xl p-4 shadow-sm\">
                        <p class=\"text-sm text-gray-500 mb-1\">Rating</p>
                        <p class=\"font-medium text-gray-800\">
                            <span class=\"text-yellow-500\">★</span> ";
        // line 57
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "rating", [], "any", true, true, false, 57) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "rating", [], "any", false, false, false, 57)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "rating", [], "any", false, false, false, 57), "html", null, true)) : ("N/A"));
        yield "
                        </p>
                    </div>
                    <div class=\"bg-gray-50 rounded-xl p-4 shadow-sm\">
                        <p class=\"text-sm text-gray-500 mb-1\">Completed Trips</p>
                        <p class=\"font-medium text-gray-800\">";
        // line 62
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "tripsCount", [], "any", true, true, false, 62) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "tripsCount", [], "any", false, false, false, 62)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "tripsCount", [], "any", false, false, false, 62), "html", null, true)) : ("0"));
        yield "</p>
                    </div>
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
        return "conducteur/profile.html.twig";
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
        return array (  193 => 62,  185 => 57,  177 => 52,  170 => 48,  163 => 44,  154 => 40,  139 => 28,  136 => 27,  129 => 24,  126 => 23,  118 => 21,  116 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Driver Profile{% endblock %}

{% block content %}
    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-gray-800\">Driver Profile</h1>
        <p class=\"text-gray-600\">View and manage your profile information</p>
    </div>
    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800 flex items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
            </svg>
            My Profile
        </h2>
        <div class=\"flex flex-col md:flex-row items-start gap-8\">
            <div class=\"w-full md:w-1/3\">
                {% if user.imagePath %}
                    <img src=\"{{ asset(user.imagePath) }}\" alt=\"{{ user.username }}\" class=\"w-32 h-32 rounded-full object-cover mx-auto border-4 border-primary-ultra-light\">
                {% else %}
                    <div class=\"w-32 h-32 rounded-full bg-gradient-to-r from-primary to-primary-dark flex items-center justify-center text-white text-3xl font-bold mx-auto shadow-lg\">
                        {{ user.prenom|first }}{{ user.nom|first }}
                    </div>
                {% endif %}
                <div class=\"text-center mt-4\">
                    <a href=\"{{ path('app_user_edit_profile') }}\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z\" />
                        </svg>
                        Edit Profile
                    </a>
                </div>
            </div>
            <div class=\"w-full md:w-2/3\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div class=\"bg-gray-50 rounded-xl p-4 shadow-sm\">
                        <p class=\"text-sm text-gray-500 mb-1\">Full Name</p>
                        <p class=\"font-medium text-gray-800\">{{ user.prenom }} {{ user.nom }}</p>
                    </div>
                    <div class=\"bg-gray-50 rounded-xl p-4 shadow-sm\">
                        <p class=\"text-sm text-gray-500 mb-1\">Username</p>
                        <p class=\"font-medium text-gray-800\">{{ user.username }}</p>
                    </div>
                    <div class=\"bg-gray-50 rounded-xl p-4 shadow-sm\">
                        <p class=\"text-sm text-gray-500 mb-1\">Email Address</p>
                        <p class=\"font-medium text-gray-800\">{{ user.email }}</p>
                    </div>
                    <div class=\"bg-gray-50 rounded-xl p-4 shadow-sm\">
                        <p class=\"text-sm text-gray-500 mb-1\">Phone Number</p>
                        <p class=\"font-medium text-gray-800\">{{ user.tel }}</p>
                    </div>
                    <div class=\"bg-gray-50 rounded-xl p-4 shadow-sm\">
                        <p class=\"text-sm text-gray-500 mb-1\">Rating</p>
                        <p class=\"font-medium text-gray-800\">
                            <span class=\"text-yellow-500\">★</span> {{ user.rating ?? 'N/A' }}
                        </p>
                    </div>
                    <div class=\"bg-gray-50 rounded-xl p-4 shadow-sm\">
                        <p class=\"text-sm text-gray-500 mb-1\">Completed Trips</p>
                        <p class=\"font-medium text-gray-800\">{{ user.tripsCount ?? '0' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %} ", "conducteur/profile.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\profile.html.twig");
    }
}
