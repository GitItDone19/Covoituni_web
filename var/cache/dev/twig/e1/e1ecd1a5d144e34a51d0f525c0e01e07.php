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

/* admin/_partials/menu.html.twig */
class __TwigTemplate_3a030444cd16d09643cbafeb21315daa extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_partials/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_partials/menu.html.twig"));

        // line 2
        yield "<nav class=\"fixed top-0 z-50 w-full bg-white border-b border-gray-200\">
    <div class=\"px-3 py-3 lg:px-5 lg:pl-3\">
        <div class=\"flex items-center justify-between\">
            <div class=\"flex items-center justify-start\">
                <button id=\"toggleSidebarMobile\" aria-expanded=\"true\" aria-controls=\"sidebar\" class=\"p-2 text-gray-600 rounded lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100\">
                    <svg class=\"w-6 h-6\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z\" clip-rule=\"evenodd\"></path></svg>
                    <svg class=\"hidden w-6 h-6\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path></svg>
                </button>
                <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"flex ml-2 md:mr-24\">
                    <span class=\"self-center text-xl font-bold text-green-700 sm:text-2xl whitespace-nowrap\">Covoit'Uni Admin</span>
                </a>
            </div>
            <div class=\"flex items-center\">
                <div class=\"flex items-center ml-3\">
                    <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"flex items-center px-4 py-2 text-sm text-red-600 bg-red-50 rounded-lg hover:bg-red-100 focus:ring-4 focus:ring-red-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1\" />
                        </svg>
                        Déconnexion
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

";
        // line 29
        yield "<aside id=\"sidebar\" class=\"fixed top-0 left-0 z-40 w-64 h-screen pt-20 bg-white border-r border-gray-200 transition-transform -translate-x-full sm:translate-x-0\" aria-label=\"Sidebar\">
    <div class=\"h-full px-3 pb-4 overflow-y-auto bg-white\">
        <ul class=\"space-y-2\">
            <li>
                <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "get", ["_route"], "method", false, false, false, 33) == "app_admin_dashboard")) ? ("bg-gray-100") : (""));
        yield "\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\" />
                    </svg>
                    <span class=\"ml-3\">Dashboard</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 ";
        yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "get", ["_route"], "method", false, false, false, 41)) && is_string($_v1 = "app_admin_user") && str_starts_with($_v0, $_v1))) ? ("bg-gray-100") : (""));
        yield "\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                    </svg>
                    <span class=\"ml-3\">Gestion Utilisateurs</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonces");
        yield "\" class=\"flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 ";
        yield (((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "get", ["_route"], "method", false, false, false, 49)) && is_string($_v3 = "app_admin_annonce") && str_starts_with($_v2, $_v3))) ? ("bg-gray-100") : (""));
        yield "\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z\" />
                    </svg>
                    <span class=\"ml-3\">Liste des Annonces</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_trajets");
        yield "\" class=\"flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 ";
        yield (((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "get", ["_route"], "method", false, false, false, 57)) && is_string($_v5 = "app_admin_trajet") && str_starts_with($_v4, $_v5))) ? ("bg-gray-100") : (""));
        yield "\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7\" />
                    </svg>
                    <span class=\"ml-3\">Liste des Trajets</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservations");
        yield "\" class=\"flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 ";
        yield (((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "get", ["_route"], "method", false, false, false, 65)) && is_string($_v7 = "app_admin_reservation") && str_starts_with($_v6, $_v7))) ? ("bg-gray-100") : (""));
        yield "\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                    </svg>
                    <span class=\"ml-3\">Liste des Réservations</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_index");
        yield "\" class=\"flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 ";
        yield (((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "get", ["_route"], "method", false, false, false, 73)) && is_string($_v9 = "app_admin_reclamation") && str_starts_with($_v8, $_v9))) ? ("bg-gray-100") : (""));
        yield "\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                    </svg>
                    <span class=\"ml-3\">Gestion Réclamations</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 ";
        yield (((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "request", [], "any", false, false, false, 81), "get", ["_route"], "method", false, false, false, 81)) && is_string($_v11 = "app_admin_category") && str_starts_with($_v10, $_v11))) ? ("bg-gray-100") : (""));
        yield "\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z\" />
                    </svg>
                    <span class=\"ml-3\">Gestion des Catégories</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<script>
    // Script pour la navigation mobile
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('toggleSidebarMobile');
        const sidebar = document.getElementById('sidebar');
        
        if (toggleButton && sidebar) {
            toggleButton.addEventListener('click', function() {
                sidebar.classList.toggle('-translate-x-full');
            });
        }
    });
</script> ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/_partials/menu.html.twig";
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
        return array (  166 => 81,  153 => 73,  140 => 65,  127 => 57,  114 => 49,  101 => 41,  88 => 33,  82 => 29,  67 => 16,  58 => 10,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Navbar #}
<nav class=\"fixed top-0 z-50 w-full bg-white border-b border-gray-200\">
    <div class=\"px-3 py-3 lg:px-5 lg:pl-3\">
        <div class=\"flex items-center justify-between\">
            <div class=\"flex items-center justify-start\">
                <button id=\"toggleSidebarMobile\" aria-expanded=\"true\" aria-controls=\"sidebar\" class=\"p-2 text-gray-600 rounded lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100\">
                    <svg class=\"w-6 h-6\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z\" clip-rule=\"evenodd\"></path></svg>
                    <svg class=\"hidden w-6 h-6\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path></svg>
                </button>
                <a href=\"{{ path('app_admin_dashboard') }}\" class=\"flex ml-2 md:mr-24\">
                    <span class=\"self-center text-xl font-bold text-green-700 sm:text-2xl whitespace-nowrap\">Covoit'Uni Admin</span>
                </a>
            </div>
            <div class=\"flex items-center\">
                <div class=\"flex items-center ml-3\">
                    <a href=\"{{ path('app_logout') }}\" class=\"flex items-center px-4 py-2 text-sm text-red-600 bg-red-50 rounded-lg hover:bg-red-100 focus:ring-4 focus:ring-red-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1\" />
                        </svg>
                        Déconnexion
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

{# Sidebar #}
<aside id=\"sidebar\" class=\"fixed top-0 left-0 z-40 w-64 h-screen pt-20 bg-white border-r border-gray-200 transition-transform -translate-x-full sm:translate-x-0\" aria-label=\"Sidebar\">
    <div class=\"h-full px-3 pb-4 overflow-y-auto bg-white\">
        <ul class=\"space-y-2\">
            <li>
                <a href=\"{{ path('app_admin_dashboard') }}\" class=\"flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 {{ app.request.get('_route') == 'app_admin_dashboard' ? 'bg-gray-100' : '' }}\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\" />
                    </svg>
                    <span class=\"ml-3\">Dashboard</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('app_admin_users') }}\" class=\"flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 {{ app.request.get('_route') starts with 'app_admin_user' ? 'bg-gray-100' : '' }}\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                    </svg>
                    <span class=\"ml-3\">Gestion Utilisateurs</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('app_admin_annonces') }}\" class=\"flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 {{ app.request.get('_route') starts with 'app_admin_annonce' ? 'bg-gray-100' : '' }}\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z\" />
                    </svg>
                    <span class=\"ml-3\">Liste des Annonces</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('app_admin_trajets') }}\" class=\"flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 {{ app.request.get('_route') starts with 'app_admin_trajet' ? 'bg-gray-100' : '' }}\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7\" />
                    </svg>
                    <span class=\"ml-3\">Liste des Trajets</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('app_admin_reservations') }}\" class=\"flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 {{ app.request.get('_route') starts with 'app_admin_reservation' ? 'bg-gray-100' : '' }}\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                    </svg>
                    <span class=\"ml-3\">Liste des Réservations</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('app_admin_reclamation_index') }}\" class=\"flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 {{ app.request.get('_route') starts with 'app_admin_reclamation' ? 'bg-gray-100' : '' }}\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                    </svg>
                    <span class=\"ml-3\">Gestion Réclamations</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('app_admin_category_index') }}\" class=\"flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 {{ app.request.get('_route') starts with 'app_admin_category' ? 'bg-gray-100' : '' }}\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z\" />
                    </svg>
                    <span class=\"ml-3\">Gestion des Catégories</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<script>
    // Script pour la navigation mobile
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('toggleSidebarMobile');
        const sidebar = document.getElementById('sidebar');
        
        if (toggleButton && sidebar) {
            toggleButton.addEventListener('click', function() {
                sidebar.classList.toggle('-translate-x-full');
            });
        }
    });
</script> ", "admin/_partials/menu.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\admin\\_partials\\menu.html.twig");
    }
}
