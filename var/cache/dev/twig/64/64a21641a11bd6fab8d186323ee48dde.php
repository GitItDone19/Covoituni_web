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

/* admin/category/show.html.twig */
class __TwigTemplate_fd107bb8a12385fbe7ffb515ee6f1611 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/category/show.html.twig", 1);
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

        yield "Détails de la catégorie";
        
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
        yield "    <div class=\"px-4 py-5 sm:px-6\">
        <div class=\"flex justify-between items-center\">
            <h1 class=\"text-2xl font-semibold text-gray-900\">Détails de la catégorie \"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), "html", null, true);
        yield "\"</h1>
            <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500\">
                <svg class=\"-ml-1 mr-2 h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                    <path fill-rule=\"evenodd\" d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\" clip-rule=\"evenodd\" />
                </svg>
                Retour à la liste
            </a>
        </div>
    </div>

    ";
        // line 18
        yield from $this->loadTemplate("admin/_partials/menu.html.twig", "admin/category/show.html.twig", 18)->unwrap()->yield($context);
        // line 19
        yield "
    <div class=\"mt-6 max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8\">
        <div class=\"bg-white overflow-hidden shadow rounded-lg\">
            <div class=\"px-4 py-5 sm:p-6\">
                <dl class=\"grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2\">
                    <div class=\"sm:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">ID</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "html", null, true);
        yield "</dd>
                    </div>
                    <div class=\"sm:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">Nom</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), "html", null, true);
        yield "</dd>
                    </div>
                    <div class=\"sm:col-span-2\">
                        <dt class=\"text-sm font-medium text-gray-500\">Description</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 34
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), "html", null, true));
        yield "</dd>
                    </div>
                    <div class=\"sm:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">Nombre de voitures</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 38, $this->source); })()), "cars", [], "any", false, false, false, 38)), "html", null, true);
        yield "</dd>
                    </div>
                    <div class=\"sm:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">Date de création</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 42, $this->source); })()), "createdAt", [], "any", false, false, false, 42), "d/m/Y H:i"), "html", null, true);
        yield "</dd>
                    </div>
                </dl>
            </div>
            <div class=\"px-4 py-4 sm:px-6 bg-gray-50 flex justify-end space-x-3\">
                <a href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        yield "\" class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500\">
                    <svg class=\"-ml-1 mr-2 h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                        <path d=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\" />
                    </svg>
                    Modifier
                </a>
                ";
        // line 53
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/category/_delete_form.html.twig");
        yield "
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
        return "admin/category/show.html.twig";
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
        return array (  176 => 53,  167 => 47,  159 => 42,  152 => 38,  145 => 34,  138 => 30,  131 => 26,  122 => 19,  120 => 18,  108 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la catégorie{% endblock %}

{% block body %}
    <div class=\"px-4 py-5 sm:px-6\">
        <div class=\"flex justify-between items-center\">
            <h1 class=\"text-2xl font-semibold text-gray-900\">Détails de la catégorie \"{{ category.nom }}\"</h1>
            <a href=\"{{ path('app_admin_category_index') }}\" class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500\">
                <svg class=\"-ml-1 mr-2 h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                    <path fill-rule=\"evenodd\" d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\" clip-rule=\"evenodd\" />
                </svg>
                Retour à la liste
            </a>
        </div>
    </div>

    {% include 'admin/_partials/menu.html.twig' %}

    <div class=\"mt-6 max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8\">
        <div class=\"bg-white overflow-hidden shadow rounded-lg\">
            <div class=\"px-4 py-5 sm:p-6\">
                <dl class=\"grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2\">
                    <div class=\"sm:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">ID</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ category.id }}</dd>
                    </div>
                    <div class=\"sm:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">Nom</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ category.nom }}</dd>
                    </div>
                    <div class=\"sm:col-span-2\">
                        <dt class=\"text-sm font-medium text-gray-500\">Description</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ category.description|nl2br }}</dd>
                    </div>
                    <div class=\"sm:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">Nombre de voitures</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ category.cars|length }}</dd>
                    </div>
                    <div class=\"sm:col-span-1\">
                        <dt class=\"text-sm font-medium text-gray-500\">Date de création</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ category.createdAt|date('d/m/Y H:i') }}</dd>
                    </div>
                </dl>
            </div>
            <div class=\"px-4 py-4 sm:px-6 bg-gray-50 flex justify-end space-x-3\">
                <a href=\"{{ path('app_admin_category_edit', {'id': category.id}) }}\" class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500\">
                    <svg class=\"-ml-1 mr-2 h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                        <path d=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\" />
                    </svg>
                    Modifier
                </a>
                {{ include('admin/category/_delete_form.html.twig') }}
            </div>
        </div>
    </div>
{% endblock %} ", "admin/category/show.html.twig", "D:\\Covoituni_web-master\\templates\\admin\\category\\show.html.twig");
    }
}
