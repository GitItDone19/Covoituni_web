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

/* role/setup.html.twig */
class __TwigTemplate_dd9ac9fa0584c8ab707dd554160b3d0d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "role/setup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "role/setup.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "role/setup.html.twig", 1);
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

        yield "Roles Setup";
        
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
        <div class=\"max-w-md mx-auto\">
            <h1 class=\"text-3xl font-bold mb-8 text-center\">Roles Setup</h1>
            
            <div class=\"bg-white shadow-md rounded-lg p-8\">
                ";
        // line 11
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["added_roles"]) || array_key_exists("added_roles", $context) ? $context["added_roles"] : (function () { throw new RuntimeError('Variable "added_roles" does not exist.', 11, $this->source); })())) > 0)) {
            // line 12
            yield "                    <div class=\"mb-6\">
                        <h2 class=\"text-xl font-semibold mb-2 text-green-600\">Roles Added Successfully:</h2>
                        <ul class=\"list-disc pl-5\">
                            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["added_roles"]) || array_key_exists("added_roles", $context) ? $context["added_roles"] : (function () { throw new RuntimeError('Variable "added_roles" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 16
                yield "                                <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                yield "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "                        </ul>
                    </div>
                ";
        }
        // line 21
        yield "                
                ";
        // line 22
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["existing_roles"]) || array_key_exists("existing_roles", $context) ? $context["existing_roles"] : (function () { throw new RuntimeError('Variable "existing_roles" does not exist.', 22, $this->source); })())) > 0)) {
            // line 23
            yield "                    <div class=\"mb-6\">
                        <h2 class=\"text-xl font-semibold mb-2 text-blue-600\">Roles Already Exist:</h2>
                        <ul class=\"list-disc pl-5\">
                            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["existing_roles"]) || array_key_exists("existing_roles", $context) ? $context["existing_roles"] : (function () { throw new RuntimeError('Variable "existing_roles" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 27
                yield "                                <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                yield "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "                        </ul>
                    </div>
                ";
        }
        // line 32
        yield "                
                ";
        // line 33
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["added_roles"]) || array_key_exists("added_roles", $context) ? $context["added_roles"] : (function () { throw new RuntimeError('Variable "added_roles" does not exist.', 33, $this->source); })())) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["existing_roles"]) || array_key_exists("existing_roles", $context) ? $context["existing_roles"] : (function () { throw new RuntimeError('Variable "existing_roles" does not exist.', 33, $this->source); })())) == 0))) {
            // line 34
            yield "                    <div class=\"text-center text-gray-500\">
                        <p>No roles were processed.</p>
                    </div>
                ";
        }
        // line 38
        yield "                
                <div class=\"mt-6 text-center\">
                    <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-primary hover:text-primary-dark\">Back to Login</a>
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
        return "role/setup.html.twig";
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
        return array (  175 => 40,  171 => 38,  165 => 34,  163 => 33,  160 => 32,  155 => 29,  146 => 27,  142 => 26,  137 => 23,  135 => 22,  132 => 21,  127 => 18,  118 => 16,  114 => 15,  109 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Roles Setup{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"max-w-md mx-auto\">
            <h1 class=\"text-3xl font-bold mb-8 text-center\">Roles Setup</h1>
            
            <div class=\"bg-white shadow-md rounded-lg p-8\">
                {% if added_roles|length > 0 %}
                    <div class=\"mb-6\">
                        <h2 class=\"text-xl font-semibold mb-2 text-green-600\">Roles Added Successfully:</h2>
                        <ul class=\"list-disc pl-5\">
                            {% for role in added_roles %}
                                <li>{{ role }}</li>
                            {% endfor %}
                        </ul>
                    </div>
                {% endif %}
                
                {% if existing_roles|length > 0 %}
                    <div class=\"mb-6\">
                        <h2 class=\"text-xl font-semibold mb-2 text-blue-600\">Roles Already Exist:</h2>
                        <ul class=\"list-disc pl-5\">
                            {% for role in existing_roles %}
                                <li>{{ role }}</li>
                            {% endfor %}
                        </ul>
                    </div>
                {% endif %}
                
                {% if added_roles|length == 0 and existing_roles|length == 0 %}
                    <div class=\"text-center text-gray-500\">
                        <p>No roles were processed.</p>
                    </div>
                {% endif %}
                
                <div class=\"mt-6 text-center\">
                    <a href=\"{{ path('app_login') }}\" class=\"text-primary hover:text-primary-dark\">Back to Login</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %} ", "role/setup.html.twig", "D:\\Covoituni_web-master\\templates\\role\\setup.html.twig");
    }
}
