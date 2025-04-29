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

/* admin/dashboard/index.html.twig */
class __TwigTemplate_578faf1c7e0a0daed3a1f115cc6e78a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard/index.html.twig", 1);
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

        yield "Tableau de bord";
        
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
        yield "    <div class=\"container mx-auto px-4 py-6\">
        ";
        // line 7
        yield from $this->loadTemplate("partials/menu.html.twig", "admin/dashboard/index.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "        
        <div class=\"mb-6 flex justify-between items-center\">
            <h1 class=\"text-2xl font-bold mb-0\">Tableau de bord administrateur</h1>
        </div>
        
        <!-- Flash Messages -->
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 15
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " bg-";
                yield ((($context["label"] == "success")) ? ("green-100 text-green-700") : ("red-100 text-red-700"));
                yield " p-4 mb-4 rounded-md\">
                    <div class=\"flex items-center\">
                        ";
                // line 18
                if (($context["label"] == "success")) {
                    // line 19
                    yield "                            <svg class=\"w-5 h-5 mr-2\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z\" clip-rule=\"evenodd\"></path>
                            </svg>
                        ";
                } else {
                    // line 23
                    yield "                            <svg class=\"w-5 h-5 mr-2\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                <path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z\" clip-rule=\"evenodd\"></path>
                            </svg>
                        ";
                }
                // line 27
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "
        <!-- Statistics Cards -->
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8\">
            <div class=\"bg-white rounded-lg shadow p-6\">
                <div class=\"flex items-center\">
                    <div class=\"rounded-full bg-blue-100 p-3 mr-4\">
                        <svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\"></path>
                        </svg>
                    </div>
                    <div>
                        <p class=\"text-gray-500 text-sm\">Utilisateurs</p>
                        <h2 class=\"text-2xl font-bold\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 44, $this->source); })()), "usersCount", [], "any", false, false, false, 44), "html", null, true);
        yield "</h2>
                    </div>
                </div>
            </div>
            
            <div class=\"bg-white rounded-lg shadow p-6\">
                <div class=\"flex items-center\">
                    <div class=\"rounded-full bg-green-100 p-3 mr-4\">
                        <svg class=\"w-6 h-6 text-green-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10\"></path>
                        </svg>
                    </div>
                    <div>
                        <p class=\"text-gray-500 text-sm\">Voitures</p>
                        <h2 class=\"text-2xl font-bold\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 58, $this->source); })()), "carsCount", [], "any", false, false, false, 58), "html", null, true);
        yield "</h2>
                    </div>
                </div>
            </div>
            
            <div class=\"bg-white rounded-lg shadow p-6\">
                <div class=\"flex items-center\">
                    <div class=\"rounded-full bg-yellow-100 p-3 mr-4\">
                        <svg class=\"w-6 h-6 text-yellow-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z\"></path>
                        </svg>
                    </div>
                    <div>
                        <p class=\"text-gray-500 text-sm\">Catégories</p>
                        <h2 class=\"text-2xl font-bold\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 72, $this->source); })()), "categoriesCount", [], "any", false, false, false, 72), "html", null, true);
        yield "</h2>
                    </div>
                </div>
            </div>
            
            <div class=\"bg-white rounded-lg shadow p-6\">
                <div class=\"flex items-center\">
                    <div class=\"rounded-full bg-red-100 p-3 mr-4\">
                        <svg class=\"w-6 h-6 text-red-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\"></path>
                        </svg>
                    </div>
                    <div>
                        <p class=\"text-gray-500 text-sm\">Réclamations</p>
                        <h2 class=\"text-2xl font-bold\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 86, $this->source); })()), "reclamationsCount", [], "any", false, false, false, 86), "html", null, true);
        yield "</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recent Data Sections -->
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            <!-- Recent Users -->
            <div class=\"bg-white rounded-lg shadow overflow-hidden\">
                <div class=\"border-b px-6 py-4\">
                    <h3 class=\"text-lg font-medium\">Utilisateurs récents</h3>
                </div>
                <div class=\"overflow-x-auto\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead class=\"bg-gray-50\">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">ID</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Nom</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Email</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Date</th>
                            </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200\">
                            ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentUsers"]) || array_key_exists("recentUsers", $context) ? $context["recentUsers"] : (function () { throw new RuntimeError('Variable "recentUsers" does not exist.', 110, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 111
            yield "                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 112), "html", null, true);
            yield "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-900\">";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 113), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 113), "html", null, true);
            yield "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 114), "html", null, true);
            yield "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 115), "d/m/Y"), "html", null, true);
            yield "</td>
                            </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 117
        if (!$context['_iterated']) {
            // line 118
            yield "                            <tr>
                                <td colspan=\"4\" class=\"px-6 py-4 text-center text-sm text-gray-500\">Aucun utilisateur récent</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "                        </tbody>
                    </table>
                </div>
                <div class=\"bg-gray-50 px-6 py-3 border-t\">
                    <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_index");
        yield "\" class=\"text-sm text-blue-600 hover:text-blue-800\">Voir tous les utilisateurs &rarr;</a>
                </div>
            </div>
            
            <!-- Recent Reclamations -->
            <div class=\"bg-white rounded-lg shadow overflow-hidden\">
                <div class=\"border-b px-6 py-4\">
                    <h3 class=\"text-lg font-medium\">Réclamations récentes</h3>
                </div>
                <div class=\"overflow-x-auto\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead class=\"bg-gray-50\">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">ID</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Sujet</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Utilisateur</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Date</th>
                            </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200\">
                            ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentReclamations"]) || array_key_exists("recentReclamations", $context) ? $context["recentReclamations"] : (function () { throw new RuntimeError('Variable "recentReclamations" does not exist.', 146, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 147
            yield "                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 148), "html", null, true);
            yield "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-900\">";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "subject", [], "any", false, false, false, 149), "html", null, true);
            yield "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "user", [], "any", false, false, false, 150), "email", [], "any", false, false, false, 150), "html", null, true);
            yield "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 151), "d/m/Y"), "html", null, true);
            yield "</td>
                            </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 153
        if (!$context['_iterated']) {
            // line 154
            yield "                            <tr>
                                <td colspan=\"4\" class=\"px-6 py-4 text-center text-sm text-gray-500\">Aucune réclamation récente</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        yield "                        </tbody>
                    </table>
                </div>
                <div class=\"bg-gray-50 px-6 py-3 border-t\">
                    <a href=\"";
        // line 162
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_index");
        yield "\" class=\"text-sm text-blue-600 hover:text-blue-800\">Voir toutes les réclamations &rarr;</a>
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
        return "admin/dashboard/index.html.twig";
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
        return array (  366 => 162,  360 => 158,  351 => 154,  349 => 153,  342 => 151,  338 => 150,  334 => 149,  330 => 148,  327 => 147,  322 => 146,  299 => 126,  293 => 122,  284 => 118,  282 => 117,  275 => 115,  271 => 114,  265 => 113,  261 => 112,  258 => 111,  253 => 110,  226 => 86,  209 => 72,  192 => 58,  175 => 44,  161 => 32,  155 => 31,  144 => 27,  138 => 23,  132 => 19,  130 => 18,  122 => 16,  117 => 15,  113 => 14,  105 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de bord{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-6\">
        {% include 'partials/menu.html.twig' %}
        
        <div class=\"mb-6 flex justify-between items-center\">
            <h1 class=\"text-2xl font-bold mb-0\">Tableau de bord administrateur</h1>
        </div>
        
        <!-- Flash Messages -->
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }} bg-{{ label == 'success' ? 'green-100 text-green-700' : 'red-100 text-red-700' }} p-4 mb-4 rounded-md\">
                    <div class=\"flex items-center\">
                        {% if label == 'success' %}
                            <svg class=\"w-5 h-5 mr-2\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z\" clip-rule=\"evenodd\"></path>
                            </svg>
                        {% else %}
                            <svg class=\"w-5 h-5 mr-2\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                <path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z\" clip-rule=\"evenodd\"></path>
                            </svg>
                        {% endif %}
                        {{ message }}
                    </div>
                </div>
            {% endfor %}
        {% endfor %}

        <!-- Statistics Cards -->
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8\">
            <div class=\"bg-white rounded-lg shadow p-6\">
                <div class=\"flex items-center\">
                    <div class=\"rounded-full bg-blue-100 p-3 mr-4\">
                        <svg class=\"w-6 h-6 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\"></path>
                        </svg>
                    </div>
                    <div>
                        <p class=\"text-gray-500 text-sm\">Utilisateurs</p>
                        <h2 class=\"text-2xl font-bold\">{{ stats.usersCount }}</h2>
                    </div>
                </div>
            </div>
            
            <div class=\"bg-white rounded-lg shadow p-6\">
                <div class=\"flex items-center\">
                    <div class=\"rounded-full bg-green-100 p-3 mr-4\">
                        <svg class=\"w-6 h-6 text-green-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10\"></path>
                        </svg>
                    </div>
                    <div>
                        <p class=\"text-gray-500 text-sm\">Voitures</p>
                        <h2 class=\"text-2xl font-bold\">{{ stats.carsCount }}</h2>
                    </div>
                </div>
            </div>
            
            <div class=\"bg-white rounded-lg shadow p-6\">
                <div class=\"flex items-center\">
                    <div class=\"rounded-full bg-yellow-100 p-3 mr-4\">
                        <svg class=\"w-6 h-6 text-yellow-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z\"></path>
                        </svg>
                    </div>
                    <div>
                        <p class=\"text-gray-500 text-sm\">Catégories</p>
                        <h2 class=\"text-2xl font-bold\">{{ stats.categoriesCount }}</h2>
                    </div>
                </div>
            </div>
            
            <div class=\"bg-white rounded-lg shadow p-6\">
                <div class=\"flex items-center\">
                    <div class=\"rounded-full bg-red-100 p-3 mr-4\">
                        <svg class=\"w-6 h-6 text-red-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\"></path>
                        </svg>
                    </div>
                    <div>
                        <p class=\"text-gray-500 text-sm\">Réclamations</p>
                        <h2 class=\"text-2xl font-bold\">{{ stats.reclamationsCount }}</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recent Data Sections -->
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            <!-- Recent Users -->
            <div class=\"bg-white rounded-lg shadow overflow-hidden\">
                <div class=\"border-b px-6 py-4\">
                    <h3 class=\"text-lg font-medium\">Utilisateurs récents</h3>
                </div>
                <div class=\"overflow-x-auto\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead class=\"bg-gray-50\">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">ID</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Nom</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Email</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Date</th>
                            </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200\">
                            {% for user in recentUsers %}
                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">{{ user.id }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-900\">{{ user.firstName }} {{ user.lastName }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">{{ user.email }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">{{ user.createdAt|date('d/m/Y') }}</td>
                            </tr>
                            {% else %}
                            <tr>
                                <td colspan=\"4\" class=\"px-6 py-4 text-center text-sm text-gray-500\">Aucun utilisateur récent</td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
                <div class=\"bg-gray-50 px-6 py-3 border-t\">
                    <a href=\"{{ path('app_admin_user_index') }}\" class=\"text-sm text-blue-600 hover:text-blue-800\">Voir tous les utilisateurs &rarr;</a>
                </div>
            </div>
            
            <!-- Recent Reclamations -->
            <div class=\"bg-white rounded-lg shadow overflow-hidden\">
                <div class=\"border-b px-6 py-4\">
                    <h3 class=\"text-lg font-medium\">Réclamations récentes</h3>
                </div>
                <div class=\"overflow-x-auto\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead class=\"bg-gray-50\">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">ID</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Sujet</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Utilisateur</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Date</th>
                            </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200\">
                            {% for reclamation in recentReclamations %}
                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">{{ reclamation.id }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-900\">{{ reclamation.subject }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">{{ reclamation.user.email }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">{{ reclamation.createdAt|date('d/m/Y') }}</td>
                            </tr>
                            {% else %}
                            <tr>
                                <td colspan=\"4\" class=\"px-6 py-4 text-center text-sm text-gray-500\">Aucune réclamation récente</td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
                <div class=\"bg-gray-50 px-6 py-3 border-t\">
                    <a href=\"{{ path('app_admin_reclamation_index') }}\" class=\"text-sm text-blue-600 hover:text-blue-800\">Voir toutes les réclamations &rarr;</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %} ", "admin/dashboard/index.html.twig", "D:\\Covoituni_web-master\\templates\\admin\\dashboard\\index.html.twig");
    }
}
