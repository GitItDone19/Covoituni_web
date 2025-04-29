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

/* admin/category/index.html.twig */
class __TwigTemplate_62fe999f8eb2c8880f60d56063a3da85 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/category/index.html.twig", 1);
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

        yield "Gestion des Catégories";
        
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
        yield "    ";
        yield from $this->loadTemplate("admin/_partials/menu.html.twig", "admin/category/index.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "    
    <div class=\"pt-20 pb-10 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto\">
        <div class=\"sm:flex sm:items-center sm:justify-between mb-8\">
            <div>
                <h1 class=\"text-3xl font-bold text-gray-900\">Catégories</h1>
                <p class=\"mt-2 text-sm text-gray-600\">Liste des catégories disponibles</p>
            </div>
            <div class=\"mt-4 sm:mt-0\">
                <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
        yield "\" class=\"inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
                    <svg class=\"-ml-1 mr-2 h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                    </svg>
                    Ajouter une catégorie
                </a>
            </div>
        </div>

        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", ["success"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            yield "            <div class=\"mb-4 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded\">
                <div class=\"flex\">
                    <div class=\"flex-shrink-0\">
                        <svg class=\"h-5 w-5 text-green-500\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                            <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z\" clip-rule=\"evenodd\" />
                        </svg>
                    </div>
                    <div class=\"ml-3\">
                        <p class=\"text-sm\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", ["error"], "method", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 40
            yield "            <div class=\"mb-4 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded\">
                <div class=\"flex\">
                    <div class=\"flex-shrink-0\">
                        <svg class=\"h-5 w-5 text-red-500\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                            <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\" />
                        </svg>
                    </div>
                    <div class=\"ml-3\">
                        <p class=\"text-sm\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "
        ";
        // line 54
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 54, $this->source); })()))) {
            // line 55
            yield "            <div class=\"bg-white shadow-md rounded-lg p-6 text-center\">
                <p class=\"text-gray-500\">Aucune catégorie disponible.</p>
                <a href=\"";
            // line 57
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
            yield "\" class=\"mt-4 inline-flex items-center text-sm font-medium text-blue-600 hover:text-blue-500\">
                    Créer votre première catégorie
                    <svg class=\"ml-1 h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                        <path fill-rule=\"evenodd\" d=\"M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z\" clip-rule=\"evenodd\" />
                    </svg>
                </a>
            </div>
        ";
        } else {
            // line 65
            yield "            <div class=\"bg-white shadow-md rounded-lg overflow-hidden\">
                <table class=\"min-w-full divide-y divide-gray-200\">
                    <thead class=\"bg-gray-50\">
                        <tr>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Nom</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Description</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"bg-white divide-y divide-gray-200\">
                        ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 75, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 76
                yield "                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"text-sm font-medium text-gray-900\">";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "nom", [], "any", false, false, false, 78), "html", null, true);
                yield "</div>
                                </td>
                                <td class=\"px-6 py-4\">
                                    <div class=\"text-sm text-gray-500\">";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 81), 0, 100) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 81)) > 100)) ? ("...") : (""))), "html", null, true);
                yield "</div>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-right text-sm font-medium\">
                                    <a href=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 84)]), "html", null, true);
                yield "\" class=\"text-blue-600 hover:text-blue-900 mr-4\">Voir</a>
                                    <a href=\"";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                yield "\" class=\"text-blue-600 hover:text-blue-900 mr-4\">Modifier</a>
                                    <form method=\"post\" action=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                yield "\" class=\"inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie?')\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 87))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"text-red-600 hover:text-red-900 bg-transparent border-none cursor-pointer\">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 97
        yield "    </div>
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
        return "admin/category/index.html.twig";
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
        return array (  260 => 97,  254 => 93,  242 => 87,  238 => 86,  234 => 85,  230 => 84,  224 => 81,  218 => 78,  214 => 76,  210 => 75,  198 => 65,  187 => 57,  183 => 55,  181 => 54,  178 => 53,  167 => 48,  157 => 40,  153 => 39,  150 => 38,  139 => 33,  129 => 25,  125 => 24,  113 => 15,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Catégories{% endblock %}

{% block body %}
    {% include 'admin/_partials/menu.html.twig' %}
    
    <div class=\"pt-20 pb-10 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto\">
        <div class=\"sm:flex sm:items-center sm:justify-between mb-8\">
            <div>
                <h1 class=\"text-3xl font-bold text-gray-900\">Catégories</h1>
                <p class=\"mt-2 text-sm text-gray-600\">Liste des catégories disponibles</p>
            </div>
            <div class=\"mt-4 sm:mt-0\">
                <a href=\"{{ path('app_admin_category_new') }}\" class=\"inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
                    <svg class=\"-ml-1 mr-2 h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                    </svg>
                    Ajouter une catégorie
                </a>
            </div>
        </div>

        {% for message in app.flashes('success') %}
            <div class=\"mb-4 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded\">
                <div class=\"flex\">
                    <div class=\"flex-shrink-0\">
                        <svg class=\"h-5 w-5 text-green-500\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                            <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z\" clip-rule=\"evenodd\" />
                        </svg>
                    </div>
                    <div class=\"ml-3\">
                        <p class=\"text-sm\">{{ message }}</p>
                    </div>
                </div>
            </div>
        {% endfor %}

        {% for message in app.flashes('error') %}
            <div class=\"mb-4 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded\">
                <div class=\"flex\">
                    <div class=\"flex-shrink-0\">
                        <svg class=\"h-5 w-5 text-red-500\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                            <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\" />
                        </svg>
                    </div>
                    <div class=\"ml-3\">
                        <p class=\"text-sm\">{{ message }}</p>
                    </div>
                </div>
            </div>
        {% endfor %}

        {% if categories is empty %}
            <div class=\"bg-white shadow-md rounded-lg p-6 text-center\">
                <p class=\"text-gray-500\">Aucune catégorie disponible.</p>
                <a href=\"{{ path('app_admin_category_new') }}\" class=\"mt-4 inline-flex items-center text-sm font-medium text-blue-600 hover:text-blue-500\">
                    Créer votre première catégorie
                    <svg class=\"ml-1 h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                        <path fill-rule=\"evenodd\" d=\"M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z\" clip-rule=\"evenodd\" />
                    </svg>
                </a>
            </div>
        {% else %}
            <div class=\"bg-white shadow-md rounded-lg overflow-hidden\">
                <table class=\"min-w-full divide-y divide-gray-200\">
                    <thead class=\"bg-gray-50\">
                        <tr>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Nom</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Description</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"bg-white divide-y divide-gray-200\">
                        {% for category in categories %}
                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"text-sm font-medium text-gray-900\">{{ category.nom }}</div>
                                </td>
                                <td class=\"px-6 py-4\">
                                    <div class=\"text-sm text-gray-500\">{{ category.description|slice(0, 100) ~ (category.description|length > 100 ? '...' : '') }}</div>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-right text-sm font-medium\">
                                    <a href=\"{{ path('app_admin_category_show', {'id': category.id}) }}\" class=\"text-blue-600 hover:text-blue-900 mr-4\">Voir</a>
                                    <a href=\"{{ path('app_admin_category_edit', {'id': category.id}) }}\" class=\"text-blue-600 hover:text-blue-900 mr-4\">Modifier</a>
                                    <form method=\"post\" action=\"{{ path('app_admin_category_delete', {'id': category.id}) }}\" class=\"inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie?')\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ category.id) }}\">
                                        <button type=\"submit\" class=\"text-red-600 hover:text-red-900 bg-transparent border-none cursor-pointer\">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}
    </div>
{% endblock %} ", "admin/category/index.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\admin\\category\\index.html.twig");
    }
}
