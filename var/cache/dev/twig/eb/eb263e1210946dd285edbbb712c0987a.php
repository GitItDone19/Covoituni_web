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

/* security/login.html.twig */
class __TwigTemplate_c0a7e9d8a155cf74383f136804e22f68 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        yield "Login - CovoitUni";
        
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
        yield "    <div class=\"relative min-h-[80vh] flex items-center justify-center overflow-hidden py-12\">
        ";
        // line 8
        yield "        <div class=\"absolute top-0 left-0 w-full h-full bg-gradient-to-b from-white to-primary-ultra-light/20 -z-10\"></div>
        <div class=\"floating-blob animation-delay-2000\"></div>
        <div class=\"floating-blob animation-delay-4000\"></div>
        <div class=\"floating-blob\"></div>
        
        <div class=\"container mx-auto px-4\">
            <div class=\"max-w-md mx-auto glass-card relative z-10 backdrop-blur-md bg-white/70 rounded-2xl shadow-xl p-10 border border-white/20 transform transition-all duration-500\">
                <div class=\"absolute -top-10 -right-10 w-40 h-40 bg-primary-light/10 rounded-full filter blur-3xl\"></div>
                <div class=\"absolute -bottom-10 -left-10 w-40 h-40 bg-primary/10 rounded-full filter blur-3xl\"></div>
                
                <h1 class=\"hero-title text-3xl font-extrabold mb-2 text-center bg-gradient-to-r from-primary to-primary-dark bg-clip-text text-transparent\">Welcome Back</h1>
                
                <div class=\"mb-8\">
                    <p class=\"text-center text-gray-600\">Log in to your CovoitUni account</p>
                </div>
                
                ";
        // line 24
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })())) {
            // line 25
            yield "                    <div class=\"bg-red-100/80 backdrop-blur-sm border border-red-400 text-red-700 px-4 py-3 rounded-xl mb-6\" role=\"alert\">
                        ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()), "messageKey", [], "any", false, false, false, 26), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()), "messageData", [], "any", false, false, false, 26), "security"), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 29
        yield "                
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "flashes", ["error"], "method", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 31
            yield "                    <div class=\"bg-red-100/80 backdrop-blur-sm border border-red-400 text-red-700 px-4 py-3 rounded-xl mb-6\" role=\"alert\">
                        ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashError"], "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashError'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "                
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "flashes", ["success"], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["flashSuccess"]) {
            // line 37
            yield "                    <div class=\"bg-green-100/80 backdrop-blur-sm border border-green-400 text-green-700 px-4 py-3 rounded-xl mb-6\" role=\"alert\">
                        ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashSuccess"], "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashSuccess'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                
                <form method=\"post\">
                    <div class=\"space-y-5\">
                        <div class=\"relative\">
                            <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-primary z-10\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\" style=\"filter: none;\">
                                    <path d=\"M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z\" />
                                    <path d=\"M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z\" />
                                </svg>
                            </div>
                            <input type=\"email\" id=\"email\" name=\"email\" value=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("last_username", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 51, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Email address\" class=\"bg-white/80 w-full p-4 pl-10 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl shadow-sm transition-all duration-300\" required autofocus>
                        </div>
                        
                        <div class=\"relative\">
                            <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-primary z-10\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\" style=\"filter: none;\">
                                    <path fill-rule=\"evenodd\" d=\"M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z\" clip-rule=\"evenodd\" />
                                </svg>
                            </div>
                            <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"Password\" class=\"bg-white/80 w-full p-4 pl-10 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl shadow-sm transition-all duration-300\" required>
                        </div>
                        
                        <div class=\"flex items-center justify-between mt-2\">
                            <div class=\"flex items-center\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" class=\"w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary\">
                                <label for=\"remember_me\" class=\"ml-2 text-sm text-gray-600\">Remember me</label>
                            </div>
                            <div>
                                <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password");
        yield "\" class=\"text-sm text-primary hover:text-primary-dark transition-colors duration-300\">Forgot password?</a>
                            </div>
                        </div>
                        
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                        
                        <div class=\"pt-2\">
                            <button type=\"submit\" class=\"w-full action-btn text-white font-medium p-4 rounded-xl bg-gradient-to-r from-primary to-primary-dark shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5\">
                                Sign In
                            </button>
                        </div>
                    </div>
                </form>
                
                <div class=\"mt-8 text-center\">
                    <p class=\"text-gray-600\">Don't have an account? <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-primary hover:text-primary-dark font-medium transition-colors duration-300 border-flow\">Create Account</a></p>
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
        return "security/login.html.twig";
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
        return array (  224 => 84,  210 => 73,  203 => 69,  182 => 51,  170 => 41,  161 => 38,  158 => 37,  154 => 36,  151 => 35,  142 => 32,  139 => 31,  135 => 30,  132 => 29,  126 => 26,  123 => 25,  121 => 24,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Login - CovoitUni{% endblock %}

{% block body %}
    <div class=\"relative min-h-[80vh] flex items-center justify-center overflow-hidden py-12\">
        {# Background design elements #}
        <div class=\"absolute top-0 left-0 w-full h-full bg-gradient-to-b from-white to-primary-ultra-light/20 -z-10\"></div>
        <div class=\"floating-blob animation-delay-2000\"></div>
        <div class=\"floating-blob animation-delay-4000\"></div>
        <div class=\"floating-blob\"></div>
        
        <div class=\"container mx-auto px-4\">
            <div class=\"max-w-md mx-auto glass-card relative z-10 backdrop-blur-md bg-white/70 rounded-2xl shadow-xl p-10 border border-white/20 transform transition-all duration-500\">
                <div class=\"absolute -top-10 -right-10 w-40 h-40 bg-primary-light/10 rounded-full filter blur-3xl\"></div>
                <div class=\"absolute -bottom-10 -left-10 w-40 h-40 bg-primary/10 rounded-full filter blur-3xl\"></div>
                
                <h1 class=\"hero-title text-3xl font-extrabold mb-2 text-center bg-gradient-to-r from-primary to-primary-dark bg-clip-text text-transparent\">Welcome Back</h1>
                
                <div class=\"mb-8\">
                    <p class=\"text-center text-gray-600\">Log in to your CovoitUni account</p>
                </div>
                
                {% if error %}
                    <div class=\"bg-red-100/80 backdrop-blur-sm border border-red-400 text-red-700 px-4 py-3 rounded-xl mb-6\" role=\"alert\">
                        {{ error.messageKey|trans(error.messageData, 'security') }}
                    </div>
                {% endif %}
                
                {% for flashError in app.flashes('error') %}
                    <div class=\"bg-red-100/80 backdrop-blur-sm border border-red-400 text-red-700 px-4 py-3 rounded-xl mb-6\" role=\"alert\">
                        {{ flashError }}
                    </div>
                {% endfor %}
                
                {% for flashSuccess in app.flashes('success') %}
                    <div class=\"bg-green-100/80 backdrop-blur-sm border border-green-400 text-green-700 px-4 py-3 rounded-xl mb-6\" role=\"alert\">
                        {{ flashSuccess }}
                    </div>
                {% endfor %}
                
                <form method=\"post\">
                    <div class=\"space-y-5\">
                        <div class=\"relative\">
                            <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-primary z-10\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\" style=\"filter: none;\">
                                    <path d=\"M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z\" />
                                    <path d=\"M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z\" />
                                </svg>
                            </div>
                            <input type=\"email\" id=\"email\" name=\"email\" value=\"{{ last_username|default('') }}\" placeholder=\"Email address\" class=\"bg-white/80 w-full p-4 pl-10 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl shadow-sm transition-all duration-300\" required autofocus>
                        </div>
                        
                        <div class=\"relative\">
                            <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-primary z-10\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\" style=\"filter: none;\">
                                    <path fill-rule=\"evenodd\" d=\"M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z\" clip-rule=\"evenodd\" />
                                </svg>
                            </div>
                            <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"Password\" class=\"bg-white/80 w-full p-4 pl-10 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl shadow-sm transition-all duration-300\" required>
                        </div>
                        
                        <div class=\"flex items-center justify-between mt-2\">
                            <div class=\"flex items-center\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" class=\"w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary\">
                                <label for=\"remember_me\" class=\"ml-2 text-sm text-gray-600\">Remember me</label>
                            </div>
                            <div>
                                <a href=\"{{ path('app_forgot_password') }}\" class=\"text-sm text-primary hover:text-primary-dark transition-colors duration-300\">Forgot password?</a>
                            </div>
                        </div>
                        
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                        
                        <div class=\"pt-2\">
                            <button type=\"submit\" class=\"w-full action-btn text-white font-medium p-4 rounded-xl bg-gradient-to-r from-primary to-primary-dark shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5\">
                                Sign In
                            </button>
                        </div>
                    </div>
                </form>
                
                <div class=\"mt-8 text-center\">
                    <p class=\"text-gray-600\">Don't have an account? <a href=\"{{ path('app_register') }}\" class=\"text-primary hover:text-primary-dark font-medium transition-colors duration-300 border-flow\">Create Account</a></p>
                </div>
            </div>
        </div>
    </div>
{% endblock %} ", "security/login.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\security\\login.html.twig");
    }
}
