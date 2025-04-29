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

/* user/profile.html.twig */
class __TwigTemplate_7172b53f5916b2d82c0c735fc3b2baac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
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

        yield "Your Profile";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"max-w-4xl mx-auto\">
            <h1 class=\"text-3xl font-bold mb-8\">Your Profile</h1>
            
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["error"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 11
            yield "                <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4\" role=\"alert\">
                    ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashError"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashError'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "            
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["flashSuccess"]) {
            // line 17
            yield "                <div class=\"bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4\" role=\"alert\">
                    ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashSuccess"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashSuccess'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "            
            <div class=\"bg-white shadow-md rounded-xl overflow-hidden\">
                <div class=\"md:flex\">
                    <div class=\"p-8 md:w-1/3 bg-gray-50\">
                        <div class=\"text-center\">
                            ";
        // line 26
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "imagePath", [], "any", false, false, false, 26)) {
            // line 27
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "imagePath", [], "any", false, false, false, 27)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "username", [], "any", false, false, false, 27), "html", null, true);
            yield "\" class=\"w-40 h-40 rounded-full mx-auto object-cover border-4 border-white shadow-lg\">
                            ";
        } else {
            // line 29
            yield "                                <div class=\"w-40 h-40 rounded-full mx-auto bg-primary flex items-center justify-center text-white text-4xl font-bold\">
                                    ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "prenom", [], "any", false, false, false, 30)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30)), "html", null, true);
            yield "
                                </div>
                            ";
        }
        // line 33
        yield "                            
                            <h2 class=\"text-2xl font-bold mt-4\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "prenom", [], "any", false, false, false, 34), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), "html", null, true);
        yield "</h2>
                            <p class=\"text-gray-600\">@";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "username", [], "any", false, false, false, 35), "html", null, true);
        yield "</p>
                            
                            <div class=\"mt-6 flex items-center justify-center\">
                                <div class=\"flex items-center\">
                                    <span class=\"text-yellow-500\">★</span>
                                    <span class=\"ml-1 font-medium\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "rating", [], "any", false, false, false, 40), "html", null, true);
        yield "</span>
                                </div>
                                <span class=\"mx-2 text-gray-300\">|</span>
                                <div>
                                    <span class=\"font-medium\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "tripsCount", [], "any", false, false, false, 44), "html", null, true);
        yield "</span>
                                    <span class=\"text-gray-600 ml-1\">trips</span>
                                </div>
                            </div>
                            
                            <div class=\"mt-6\">
                                <span class=\"text-gray-600 text-sm\">Member since ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "createdAt", [], "any", false, false, false, 50), "M Y"), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"p-8 md:w-2/3\">
                        <div class=\"flex justify-end mb-6\">
                            <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit_profile");
        yield "\" class=\"text-primary hover:text-primary-dark\">Edit Profile</a>
                        </div>
                        
                        <div class=\"space-y-6\">
                            <div>
                                <h3 class=\"text-lg font-semibold mb-2\">Contact Information</h3>
                                <div class=\"space-y-2\">
                                    <div class=\"flex\">
                                        <span class=\"w-24 text-gray-600\">Email:</span>
                                        <span>";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), "html", null, true);
        yield "</span>
                                    </div>
                                    <div class=\"flex\">
                                        <span class=\"w-24 text-gray-600\">Phone:</span>
                                        <span>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "tel", [], "any", false, false, false, 70), "html", null, true);
        yield "</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <h3 class=\"text-lg font-semibold mb-2\">Account Settings</h3>
                                <div class=\"space-y-2\">
                                    <div>
                                        <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_change_password");
        yield "\" class=\"text-primary hover:text-primary-dark\">Change Password</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        return "user/profile.html.twig";
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
        return array (  242 => 79,  230 => 70,  223 => 66,  211 => 57,  201 => 50,  192 => 44,  185 => 40,  177 => 35,  171 => 34,  168 => 33,  161 => 30,  158 => 29,  150 => 27,  148 => 26,  141 => 21,  132 => 18,  129 => 17,  125 => 16,  122 => 15,  113 => 12,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Your Profile{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"max-w-4xl mx-auto\">
            <h1 class=\"text-3xl font-bold mb-8\">Your Profile</h1>
            
            {% for flashError in app.flashes('error') %}
                <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4\" role=\"alert\">
                    {{ flashError }}
                </div>
            {% endfor %}
            
            {% for flashSuccess in app.flashes('success') %}
                <div class=\"bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4\" role=\"alert\">
                    {{ flashSuccess }}
                </div>
            {% endfor %}
            
            <div class=\"bg-white shadow-md rounded-xl overflow-hidden\">
                <div class=\"md:flex\">
                    <div class=\"p-8 md:w-1/3 bg-gray-50\">
                        <div class=\"text-center\">
                            {% if user.imagePath %}
                                <img src=\"{{ asset(user.imagePath) }}\" alt=\"{{ user.username }}\" class=\"w-40 h-40 rounded-full mx-auto object-cover border-4 border-white shadow-lg\">
                            {% else %}
                                <div class=\"w-40 h-40 rounded-full mx-auto bg-primary flex items-center justify-center text-white text-4xl font-bold\">
                                    {{ user.prenom|first }}{{ user.nom|first }}
                                </div>
                            {% endif %}
                            
                            <h2 class=\"text-2xl font-bold mt-4\">{{ user.prenom }} {{ user.nom }}</h2>
                            <p class=\"text-gray-600\">@{{ user.username }}</p>
                            
                            <div class=\"mt-6 flex items-center justify-center\">
                                <div class=\"flex items-center\">
                                    <span class=\"text-yellow-500\">★</span>
                                    <span class=\"ml-1 font-medium\">{{ user.rating }}</span>
                                </div>
                                <span class=\"mx-2 text-gray-300\">|</span>
                                <div>
                                    <span class=\"font-medium\">{{ user.tripsCount }}</span>
                                    <span class=\"text-gray-600 ml-1\">trips</span>
                                </div>
                            </div>
                            
                            <div class=\"mt-6\">
                                <span class=\"text-gray-600 text-sm\">Member since {{ user.createdAt|date('M Y') }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"p-8 md:w-2/3\">
                        <div class=\"flex justify-end mb-6\">
                            <a href=\"{{ path('app_user_edit_profile') }}\" class=\"text-primary hover:text-primary-dark\">Edit Profile</a>
                        </div>
                        
                        <div class=\"space-y-6\">
                            <div>
                                <h3 class=\"text-lg font-semibold mb-2\">Contact Information</h3>
                                <div class=\"space-y-2\">
                                    <div class=\"flex\">
                                        <span class=\"w-24 text-gray-600\">Email:</span>
                                        <span>{{ user.email }}</span>
                                    </div>
                                    <div class=\"flex\">
                                        <span class=\"w-24 text-gray-600\">Phone:</span>
                                        <span>{{ user.tel }}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <h3 class=\"text-lg font-semibold mb-2\">Account Settings</h3>
                                <div class=\"space-y-2\">
                                    <div>
                                        <a href=\"{{ path('app_user_change_password') }}\" class=\"text-primary hover:text-primary-dark\">Change Password</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %} ", "user/profile.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\user\\profile.html.twig");
    }
}
