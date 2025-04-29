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

/* security/reset_password.html.twig */
class __TwigTemplate_be4b55512a0707271801eb9b233877d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/reset_password.html.twig", 1);
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

        yield "Reset Password";
        
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
        <div class=\"max-w-md mx-auto bg-white rounded-xl shadow-md p-8\">
            <h1 class=\"text-2xl font-bold mb-6 text-center\">Reset Your Password</h1>
            
            <div class=\"mb-6\">
                <p class=\"text-center text-gray-600\">Please create a new password</p>
            </div>
            
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["error"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 15
            yield "                <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4\" role=\"alert\">
                    ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashError"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashError'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "            
            <form method=\"post\">
                <div class=\"space-y-4\">
                    <div>
                        <label for=\"password\" class=\"block text-sm font-medium mb-1\">New Password</label>
                        <input type=\"password\" id=\"password\" name=\"password\" class=\"w-full p-3 border border-gray-300 rounded-lg\" required>
                    </div>
                    
                    <div>
                        <label for=\"password_confirm\" class=\"block text-sm font-medium mb-1\">Confirm New Password</label>
                        <input type=\"password\" id=\"password_confirm\" name=\"password_confirm\" class=\"w-full p-3 border border-gray-300 rounded-lg\" required>
                    </div>
                    
                    <div class=\"pt-2\">
                        <button type=\"submit\" class=\"w-full bg-primary hover:bg-primary-dark text-white font-medium py-3 rounded-lg\">Reset Password</button>
                    </div>
                </div>
            </form>
            
            <div class=\"mt-6 text-center\">
                <p>Remember your password? <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-primary hover:text-primary-dark\">Login</a></p>
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
        return "security/reset_password.html.twig";
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
        return array (  148 => 39,  126 => 19,  117 => 16,  114 => 15,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reset Password{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"max-w-md mx-auto bg-white rounded-xl shadow-md p-8\">
            <h1 class=\"text-2xl font-bold mb-6 text-center\">Reset Your Password</h1>
            
            <div class=\"mb-6\">
                <p class=\"text-center text-gray-600\">Please create a new password</p>
            </div>
            
            {% for flashError in app.flashes('error') %}
                <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4\" role=\"alert\">
                    {{ flashError }}
                </div>
            {% endfor %}
            
            <form method=\"post\">
                <div class=\"space-y-4\">
                    <div>
                        <label for=\"password\" class=\"block text-sm font-medium mb-1\">New Password</label>
                        <input type=\"password\" id=\"password\" name=\"password\" class=\"w-full p-3 border border-gray-300 rounded-lg\" required>
                    </div>
                    
                    <div>
                        <label for=\"password_confirm\" class=\"block text-sm font-medium mb-1\">Confirm New Password</label>
                        <input type=\"password\" id=\"password_confirm\" name=\"password_confirm\" class=\"w-full p-3 border border-gray-300 rounded-lg\" required>
                    </div>
                    
                    <div class=\"pt-2\">
                        <button type=\"submit\" class=\"w-full bg-primary hover:bg-primary-dark text-white font-medium py-3 rounded-lg\">Reset Password</button>
                    </div>
                </div>
            </form>
            
            <div class=\"mt-6 text-center\">
                <p>Remember your password? <a href=\"{{ path('app_login') }}\" class=\"text-primary hover:text-primary-dark\">Login</a></p>
            </div>
        </div>
    </div>
{% endblock %} ", "security/reset_password.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\security\\reset_password.html.twig");
    }
}
