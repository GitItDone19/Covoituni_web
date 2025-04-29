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

/* admin/dashboard.html.twig */
class __TwigTemplate_5bd4eff9829f377051c59a1c63aa60a2 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
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

        yield "Admin Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        /* Background and global styles */
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #e6ffec 0%, #c1f2d1 100%);
            background-attachment: fixed;
        }
        
        /* Offcanvas menu styles */
        .offcanvas-menu {
            position: fixed;
            top: 0;
            left: -300px;
            width: 300px;
            height: 100%;
            background: linear-gradient(180deg, #1e8449 0%, #196f3d 100%);
            z-index: 1050;
            transition: all 0.3s ease;
            box-shadow: 2px 0 10px rgba(0,0,0,0.2);
            overflow-y: auto;
            color: #fff;
        }
        
        .offcanvas-menu.active {
            left: 0;
        }
        
        .offcanvas-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            backdrop-filter: blur(2px);
            z-index: 1040;
            display: none;
        }
        
        .offcanvas-backdrop.active {
            display: block;
        }
        
        body.menu-open {
            overflow: hidden;
        }
        
        /* Menu items */
        .sidebar-link {
            border-left: 3px solid transparent;
            transition: all 0.2s ease;
        }
        
        .sidebar-link.active,
        .sidebar-link:hover {
            border-left-color: #2ecc71;
            background-color: rgba(255, 255, 255, 0.1) !important;
        }
        
        .sidebar-link svg {
            transition: transform 0.2s ease;
        }
        
        .sidebar-link:hover svg {
            transform: translateX(3px);
        }

        /* Animation effects */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideInUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes scaleIn {
            from { transform: scale(0.9); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease forwards;
        }

        .animate-slide-up {
            animation: slideInUp 0.5s ease forwards;
        }

        .animate-scale-in {
            animation: scaleIn 0.5s ease forwards;
        }

        /* Dashboard card styles */
        .stat-card {
            transition: all 0.3s ease;
            overflow: hidden;
            position: relative;
            border-radius: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 8px;
            background: linear-gradient(to right, var(--accent-color-light), var(--accent-color));
        }

        .metric-value {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.25rem;
            background: linear-gradient(to right, var(--accent-color-dark), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .metric-label {
            color: #6b7280;
            font-size: 0.875rem;
        }

        .chart-container {
            position: relative;
            height: 250px;
            width: 100%;
        }
        
        /* Main content container */
        .dashboard-container {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border-radius: 1rem;
            border: 1px solid rgba(46, 204, 113, 0.3);
            box-shadow: 0 10px 30px rgba(46, 204, 113, 0.15);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 159
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 160
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/moment\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chartjs-adapter-moment\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 167
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

        // line 169
        yield "<div class=\"fixed top-4 left-4 z-50\">
    <button id=\"menuToggle\" class=\"flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-r from-green-500 to-green-700 text-white shadow-lg hover:shadow-xl transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\" />
        </svg>
    </button>
</div>

";
        // line 178
        yield "<div class=\"offcanvas-backdrop\"></div>
<div class=\"offcanvas-menu p-0\">
    <div class=\"p-6 bg-gradient-to-b from-green-700 to-green-600\">
        <div class=\"flex justify-between items-center mb-6\">
            <h2 class=\"text-xl font-bold text-white\">Admin Panel</h2>
            <button id=\"closeMenu\" class=\"text-white/80 hover:text-white focus:outline-none\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                </svg>
            </button>
        </div>
        
        <div class=\"mb-6\">
            <div class=\"flex items-center mb-4\">
                ";
        // line 192
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 192, $this->source); })()), "imagePath", [], "any", false, false, false, 192)) {
            // line 193
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 193, $this->source); })()), "imagePath", [], "any", false, false, false, 193)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 193, $this->source); })()), "username", [], "any", false, false, false, 193), "html", null, true);
            yield "\" class=\"w-12 h-12 rounded-full object-cover mr-3 border-2 border-white/30\">
                ";
        } else {
            // line 195
            yield "                    <div class=\"w-12 h-12 rounded-full bg-white/20 flex items-center justify-center text-white text-xl font-bold mr-3 border border-white/30\">
                        ";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 196, $this->source); })()), "prenom", [], "any", false, false, false, 196)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 196, $this->source); })()), "nom", [], "any", false, false, false, 196)), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 199
        yield "                <div>
                    <p class=\"font-medium text-white\">";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 200, $this->source); })()), "prenom", [], "any", false, false, false, 200), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 200, $this->source); })()), "nom", [], "any", false, false, false, 200), "html", null, true);
        yield "</p>
                    <p class=\"text-sm text-white/70\">";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 201, $this->source); })()), "email", [], "any", false, false, false, 201), "html", null, true);
        yield "</p>
                    <p class=\"text-xs text-white/80 flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z\" />
                        </svg>
                        Administrator
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <nav class=\"px-3 py-4\">
        <div class=\"text-xs uppercase text-white/50 font-semibold px-4 mb-2\">Core</div>
        <a href=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 215, $this->source); })()), "request", [], "any", false, false, false, 215), "get", ["_route"], "method", false, false, false, 215) == "app_admin_dashboard")) {
            yield "active bg-white/10 text-white";
        } else {
            yield "text-white/70 hover:text-white";
        }
        yield " transition-all duration-200\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\" />
            </svg>
            Dashboard
        </a>
        
        <div class=\"text-xs uppercase text-white/50 font-semibold px-4 mb-2 mt-6\">Management</div>
        <a href=\"";
        // line 223
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
        if ((((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 223, $this->source); })()), "request", [], "any", false, false, false, 223), "get", ["_route"], "method", false, false, false, 223)) && is_string($_v1 = "app_admin_user") && str_starts_with($_v0, $_v1)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 223, $this->source); })()), "request", [], "any", false, false, false, 223), "get", ["_route"], "method", false, false, false, 223) == "app_admin_users")) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 223, $this->source); })()), "request", [], "any", false, false, false, 223), "get", ["_route"], "method", false, false, false, 223) == "app_user_edit_roles"))) {
            yield "active bg-white/10 text-white";
        } else {
            yield "text-white/70 hover:text-white";
        }
        yield " transition-all duration-200\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
            </svg>
            Utilisateurs
        </a>
        <a href=\"";
        // line 229
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonces");
        yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 229, $this->source); })()), "request", [], "any", false, false, false, 229), "get", ["_route"], "method", false, false, false, 229)) && is_string($_v3 = "app_admin_annonce") && str_starts_with($_v2, $_v3))) {
            yield "active bg-white/10 text-white";
        } else {
            yield "text-white/70 hover:text-white";
        }
        yield " transition-all duration-200\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z\" />
            </svg>
            Annonces
        </a>
        <a href=\"";
        // line 235
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_trajets");
        yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 235, $this->source); })()), "request", [], "any", false, false, false, 235), "get", ["_route"], "method", false, false, false, 235)) && is_string($_v5 = "app_admin_trajet") && str_starts_with($_v4, $_v5))) {
            yield "active bg-white/10 text-white";
        } else {
            yield "text-white/70 hover:text-white";
        }
        yield " transition-all duration-200\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7\" />
            </svg>
            Trajets
        </a>
        <a href=\"";
        // line 241
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservations");
        yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 241, $this->source); })()), "request", [], "any", false, false, false, 241), "get", ["_route"], "method", false, false, false, 241)) && is_string($_v7 = "app_admin_reservation") && str_starts_with($_v6, $_v7))) {
            yield "active bg-white/10 text-white";
        } else {
            yield "text-white/70 hover:text-white";
        }
        yield " transition-all duration-200\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
            </svg>
            Réservations
        </a>
        
        <div class=\"text-xs uppercase text-white/50 font-semibold px-4 mb-2 mt-6\">Support</div>
        <a href=\"";
        // line 249
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_index");
        yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 249, $this->source); })()), "request", [], "any", false, false, false, 249), "get", ["_route"], "method", false, false, false, 249)) && is_string($_v9 = "app_admin_reclamation") && str_starts_with($_v8, $_v9))) {
            yield "active bg-white/10 text-white";
        } else {
            yield "text-white/70 hover:text-white";
        }
        yield " transition-all duration-200\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
            </svg>
            Réclamations
            ";
        // line 254
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 254, $this->source); })()), "reclamations", [], "any", false, false, false, 254), "pending", [], "any", false, false, false, 254) > 0)) {
            // line 255
            yield "                <span class=\"ml-auto bg-red-500 text-white text-xs px-2 py-0.5 rounded-full\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 255, $this->source); })()), "reclamations", [], "any", false, false, false, 255), "pending", [], "any", false, false, false, 255), "html", null, true);
            yield "</span>
            ";
        }
        // line 257
        yield "        </a>
        
        <div class=\"text-xs uppercase text-white/50 font-semibold px-4 mb-2 mt-6\">Config</div>
        <a href=\"";
        // line 260
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 260, $this->source); })()), "request", [], "any", false, false, false, 260), "get", ["_route"], "method", false, false, false, 260)) && is_string($_v11 = "app_admin_category") && str_starts_with($_v10, $_v11))) {
            yield "active bg-white/10 text-white";
        } else {
            yield "text-white/70 hover:text-white";
        }
        yield " transition-all duration-200\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z\" />
            </svg>
            Catégories
            ";
        // line 265
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 265, $this->source); })()), "categories", [], "any", false, false, false, 265), "total", [], "any", false, false, false, 265) - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 265, $this->source); })()), "categories", [], "any", false, false, false, 265), "with_cars", [], "any", false, false, false, 265)) > 0)) {
            // line 266
            yield "                <span class=\"ml-auto bg-blue-500 text-white text-xs px-2 py-0.5 rounded-full\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 266, $this->source); })()), "categories", [], "any", false, false, false, 266), "total", [], "any", false, false, false, 266) - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 266, $this->source); })()), "categories", [], "any", false, false, false, 266), "with_cars", [], "any", false, false, false, 266)), "html", null, true);
            yield "</span>
            ";
        }
        // line 268
        yield "        </a>
    </nav>
    
    <!-- Logout Link -->
    <div class=\"mt-auto p-4 border-t border-white/10\">
        <a href=\"";
        // line 273
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"flex items-center px-4 py-3 text-sm font-medium rounded-lg text-white/70 hover:text-white hover:bg-white/10 transition-all duration-200\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1\" />
            </svg>
            Déconnexion
        </a>
        
        <div class=\"mt-8 text-center\">
            <a href=\"";
        // line 281
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-xs text-white/50 hover:text-white flex items-center justify-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\" />
                </svg>
                Retour au Site
            </a>
        </div>
    </div>
</div>

<div class=\"min-h-screen container mx-auto px-4 py-8\">
    <div class=\"max-w-7xl mx-auto\">
        <div class=\"dashboard-container p-6\">
            <!-- Dashboard Header -->
            <div class=\"mb-8 animate-fade-in\">
                <div class=\"flex flex-col md:flex-row justify-between md:items-center gap-4\">
                    <div>
                        <h1 class=\"text-3xl font-bold bg-gradient-to-r from-green-600 to-green-700 bg-clip-text text-transparent\">Admin Dashboard</h1>
                        <p class=\"text-gray-500 mt-1\">Bienvenue, ";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 299, $this->source); })()), "prenom", [], "any", false, false, false, 299), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 299, $this->source); })()), "nom", [], "any", false, false, false, 299), "html", null, true);
        yield "</p>
                        <div class=\"h-1 w-32 bg-gradient-to-r from-green-500 to-green-600 rounded mt-2\"></div>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <span id=\"currentDate\" class=\"text-sm text-gray-500\"></span>
                        <div class=\"flex items-center bg-green-100 text-green-700 rounded-lg px-3 py-1.5 text-sm font-medium\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 10V3L4 14h7v7l9-11h-7z\" />
                            </svg>
                            Stats en temps réel
                        </div>
                    </div>
                </div>

                <!-- Last Update Refresh Button -->
                <div class=\"mt-4 flex justify-end\">
                    <button id=\"refreshStats\" class=\"flex items-center bg-white border border-green-200 hover:bg-green-50 rounded-lg px-3 py-1.5 text-sm text-green-700 transition-all duration-200\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15\" />
                        </svg>
                        <span id=\"lastUpdate\">Mis à jour il y a quelques secondes</span>
                    </button>
                </div>
            </div>
            
            <!-- Stat Cards Grid -->
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 mb-8\">
                <!-- Users Card -->
                <div class=\"stat-card rounded-xl p-6 shadow-md animate-slide-up\" style=\"--accent-color: #3b82f6; --accent-color-light: #93c5fd; --accent-color-dark: #1d4ed8; animation-delay: 0.1s;\">
                    <div class=\"flex items-center justify-between mb-3\">
                        <h2 class=\"font-semibold text-gray-700\">Utilisateurs</h2>
                        <div class=\"p-2 rounded-lg bg-blue-100 text-blue-600\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                            </svg>
                        </div>
                    </div>
                    <div class=\"metric-value\">";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 336, $this->source); })()), "users", [], "any", false, false, false, 336), "total", [], "any", false, false, false, 336), "html", null, true);
        yield "</div>
                    <div class=\"metric-label\">Utilisateurs inscrits</div>
                    <div class=\"flex justify-between items-center mt-4 text-xs text-gray-500\">
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-blue-500 mr-1\"></span>
                            <span>";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 341, $this->source); })()), "users", [], "any", false, false, false, 341), "conducteurs", [], "any", false, false, false, 341), "html", null, true);
        yield " conducteurs</span>
                        </div>
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-green-500 mr-1\"></span>
                            <span>";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 345, $this->source); })()), "users", [], "any", false, false, false, 345), "passagers", [], "any", false, false, false, 345), "html", null, true);
        yield " passagers</span>
                        </div>
                    </div>
                </div>

                <!-- Rides Card -->
                <div class=\"stat-card rounded-xl p-6 shadow-md animate-slide-up\" style=\"--accent-color: #10b981; --accent-color-light: #6ee7b7; --accent-color-dark: #047857; animation-delay: 0.2s;\">
                    <div class=\"flex items-center justify-between mb-3\">
                        <h2 class=\"font-semibold text-gray-700\">Annonces</h2>
                        <div class=\"p-2 rounded-lg bg-green-100 text-green-600\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z\" />
                            </svg>
                        </div>
                    </div>
                    <div class=\"metric-value\">";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 360, $this->source); })()), "annonces", [], "any", false, false, false, 360), "total", [], "any", false, false, false, 360), "html", null, true);
        yield "</div>
                    <div class=\"metric-label\">Annonces actives</div>
                    <div class=\"flex justify-between items-center mt-4 text-xs text-gray-500\">
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-green-500 mr-1\"></span>
                            <span>";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 365, $this->source); })()), "annonces", [], "any", false, false, false, 365), "today", [], "any", false, false, false, 365), "html", null, true);
        yield " aujourd'hui</span>
                        </div>
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-gray-500 mr-1\"></span>
                            <span>";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 369, $this->source); })()), "annonces", [], "any", false, false, false, 369), "pending", [], "any", false, false, false, 369), "html", null, true);
        yield " en attente</span>
                        </div>
                    </div>
                </div>

                <!-- Bookings Card -->
                <div class=\"stat-card rounded-xl p-6 shadow-md animate-slide-up\" style=\"--accent-color: #8b5cf6; --accent-color-light: #c4b5fd; --accent-color-dark: #6d28d9; animation-delay: 0.3s;\">
                    <div class=\"flex items-center justify-between mb-3\">
                        <h2 class=\"font-semibold text-gray-700\">Réservations</h2>
                        <div class=\"p-2 rounded-lg bg-purple-100 text-purple-600\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                            </svg>
                        </div>
                    </div>
                    <div class=\"metric-value\">";
        // line 384
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 384, $this->source); })()), "reservations", [], "any", false, false, false, 384), "total", [], "any", false, false, false, 384), "html", null, true);
        yield "</div>
                    <div class=\"metric-label\">Réservations</div>
                    <div class=\"flex justify-between items-center mt-4 text-xs text-gray-500\">
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-purple-500 mr-1\"></span>
                            <span>";
        // line 389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 389, $this->source); })()), "reservations", [], "any", false, false, false, 389), "confirmed", [], "any", false, false, false, 389), "html", null, true);
        yield " confirmées</span>
                        </div>
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-yellow-500 mr-1\"></span>
                            <span>";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 393, $this->source); })()), "reservations", [], "any", false, false, false, 393), "pending", [], "any", false, false, false, 393), "html", null, true);
        yield " en attente</span>
                        </div>
                    </div>
                </div>

                <!-- Reviews Card -->
                <div class=\"stat-card rounded-xl p-6 shadow-md animate-slide-up\" style=\"--accent-color: #f59e0b; --accent-color-light: #fcd34d; --accent-color-dark: #d97706; animation-delay: 0.4s;\">
                    <div class=\"flex items-center justify-between mb-3\">
                        <h2 class=\"font-semibold text-gray-700\">Avis</h2>
                        <div class=\"p-2 rounded-lg bg-yellow-100 text-yellow-600\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\" />
                            </svg>
                        </div>
                    </div>
                    <div class=\"metric-value\">";
        // line 408
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 408, $this->source); })()), "avis", [], "any", false, false, false, 408), "total", [], "any", false, false, false, 408), "html", null, true);
        yield "</div>
                    <div class=\"metric-label\">Avis clients</div>
                    <div class=\"flex justify-between items-center mt-4 text-xs text-gray-500\">
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-yellow-500 mr-1\"></span>
                            <span>";
        // line 413
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 413, $this->source); })()), "avis", [], "any", false, false, false, 413), "avg_rating", [], "any", false, false, false, 413), 1), "html", null, true);
        yield "/5 moyenne</span>
                        </div>
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-green-500 mr-1\"></span>
                            <span>";
        // line 417
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 417, $this->source); })()), "avis", [], "any", false, false, false, 417), "this_week", [], "any", false, false, false, 417), "html", null, true);
        yield " cette semaine</span>
                        </div>
                    </div>
                </div>
                
                <!-- Complaints Card -->
                <div class=\"stat-card rounded-xl p-6 shadow-md animate-slide-up\" style=\"--accent-color: #ef4444; --accent-color-light: #fca5a5; --accent-color-dark: #b91c1c; animation-delay: 0.5s;\">
                    <div class=\"flex items-center justify-between mb-3\">
                        <h2 class=\"font-semibold text-gray-700\">Réclamations</h2>
                        <div class=\"p-2 rounded-lg bg-red-100 text-red-600\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                            </svg>
                        </div>
                    </div>
                    <div class=\"metric-value\">";
        // line 432
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("reclamations_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["reclamations_count"]) || array_key_exists("reclamations_count", $context) ? $context["reclamations_count"] : (function () { throw new RuntimeError('Variable "reclamations_count" does not exist.', 432, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 432, $this->source); })()), "reclamations", [], "any", false, false, false, 432), "active", [], "any", false, false, false, 432))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 432, $this->source); })()), "reclamations", [], "any", false, false, false, 432), "active", [], "any", false, false, false, 432))), "html", null, true);
        yield "</div>
                    <div class=\"metric-label\">Réclamations actives</div>
                    <div class=\"flex justify-between items-center mt-4 text-xs text-gray-500\">
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-orange-500 mr-1\"></span>
                            <span>";
        // line 437
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 437, $this->source); })()), "reclamations", [], "any", false, false, false, 437), "pending", [], "any", false, false, false, 437), "html", null, true);
        yield " en attente</span>
                        </div>
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-blue-500 mr-1\"></span>
                            <span>";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 441, $this->source); })()), "reclamations", [], "any", false, false, false, 441), "in_progress", [], "any", false, false, false, 441), "html", null, true);
        yield " en cours</span>
                        </div>
                    </div>
                </div>

                <!-- Categories Card -->
                <div class=\"stat-card rounded-xl p-6 shadow-md animate-slide-up\" style=\"--accent-color: #3b82f6; --accent-color-light: #93c5fd; --accent-color-dark: #1d4ed8; animation-delay: 0.6s;\">
                    <div class=\"flex items-center justify-between mb-3\">
                        <h2 class=\"font-semibold text-gray-700\">Catégories</h2>
                        <div class=\"p-2 rounded-lg bg-blue-100 text-blue-600\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z\" />
                            </svg>
                        </div>
                    </div>
                    <a href=\"";
        // line 456
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"block\">
                        <div class=\"grid grid-cols-2 gap-4 mb-4\">
                            <div class=\"text-center py-3 border border-blue-100 rounded-lg bg-blue-50\">
                                <div class=\"metric-value\" style=\"--accent-color: #3b82f6; --accent-color-dark: #1d4ed8;\">
                                    ";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 460, $this->source); })()), "categories", [], "any", false, false, false, 460), "total", [], "any", false, false, false, 460), "html", null, true);
        yield "
                                </div>
                                <div class=\"metric-label\">Total</div>
                            </div>
                            <div class=\"text-center py-3 border border-blue-100 rounded-lg bg-blue-50\">
                                <div class=\"metric-value\" style=\"--accent-color: #3b82f6; --accent-color-dark: #1d4ed8;\">
                                    ";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 466, $this->source); })()), "categories", [], "any", false, false, false, 466), "with_cars", [], "any", false, false, false, 466), "html", null, true);
        yield "
                                </div>
                                <div class=\"metric-label\">Avec voitures</div>
                            </div>
                        </div>
                        <div class=\"text-center py-2\">
                            <div class=\"text-sm text-gray-500 mb-2\">Gestion complète des catégories de véhicules</div>
                        </div>
                        <div class=\"mt-4 text-center\">
                            <span class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16m-7 6h7\" />
                                </svg>
                                Gérer les catégories
                            </span>
                        </div>
                    </a>
                </div>

                <!-- Reclamations Card -->
                <div class=\"stat-card rounded-xl p-6 shadow-md animate-slide-up\" style=\"--accent-color: #ef4444; --accent-color-light: #fca5a5; --accent-color-dark: #b91c1c; animation-delay: 0.7s;\">
                    <div class=\"flex items-center justify-between mb-3\">
                        <h2 class=\"font-semibold text-gray-700\">Réclamations</h2>
                        <div class=\"p-2 rounded-lg bg-red-100 text-red-600\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                            </svg>
                        </div>
                    </div>
                    <a href=\"";
        // line 495
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_index");
        yield "\" class=\"block\">
                        <div class=\"text-center py-3\">
                            <div class=\"font-bold text-red-600 text-xl\">Gérer les réclamations</div>
                            <div class=\"text-sm text-gray-500 mt-1\">Répondre et traiter les réclamations</div>
                        </div>
                        <div class=\"mt-4 text-center\">
                            <span class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6\" />
                                </svg>
                                Accéder
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- Charts Section -->
            <!-- Charts have been removed as requested -->
            
            <!-- Recent Activity Section -->
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 mb-8 animate-scale-in\" style=\"animation-delay: 0.8s;\">
                <!-- Recent Users -->
                <div class=\"bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden\">
                    <div class=\"flex items-center justify-between bg-gradient-to-r from-primary-ultra-light to-blue-50 px-6 py-4\">
                        <h2 class=\"font-bold text-lg text-gray-800\">Utilisateurs récents</h2>
                        <a href=\"";
        // line 521
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"text-primary hover:text-primary-dark text-sm font-medium\">Voir tous →</a>
                    </div>
                    <div class=\"p-4\">
                        ";
        // line 524
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 524, $this->source); })()), "recent_users", [], "any", false, false, false, 524)) > 0)) {
            // line 525
            yield "                            <div class=\"space-y-3\">
                                ";
            // line 526
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 526, $this->source); })()), "recent_users", [], "any", false, false, false, 526));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 527
                yield "                                    <div class=\"flex items-center p-2 hover:bg-gray-50 rounded-lg transition-colors\">
                                        <div class=\"w-10 h-10 rounded-full overflow-hidden mr-3 flex-shrink-0\">
                                            ";
                // line 529
                if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "imagePath", [], "any", false, false, false, 529)) {
                    // line 530
                    yield "                                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "imagePath", [], "any", false, false, false, 530)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 530), "html", null, true);
                    yield "\" class=\"w-full h-full object-cover\">
                                            ";
                } else {
                    // line 532
                    yield "                                                <div class=\"w-full h-full flex items-center justify-center bg-gradient-to-r from-primary to-blue-500 text-white font-bold uppercase\">
                                                    ";
                    // line 533
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 533)), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 533)), "html", null, true);
                    yield "
                                                </div>
                                            ";
                }
                // line 536
                yield "                                        </div>
                                        <div class=\"flex-1 min-w-0\">
                                            <p class=\"text-sm font-medium text-gray-900 truncate\">";
                // line 538
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 538), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 538), "html", null, true);
                yield "</p>
                                            <p class=\"text-xs text-gray-500 truncate\">";
                // line 539
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 539), "html", null, true);
                yield "</p>
                                        </div>
                                        <div class=\"ml-2\">
                                            <span class=\"inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium ";
                // line 542
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleCode", [], "any", false, false, false, 542) == "CONDUCTEUR")) ? ("bg-blue-100 text-blue-800") : ("bg-green-100 text-green-800"));
                yield "\">
                                                ";
                // line 543
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleCode", [], "any", false, false, false, 543) == "ADMIN")) ? ("Admin") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleCode", [], "any", false, false, false, 543) == "CONDUCTEUR")) ? ("Conducteur") : ("Passager"))));
                yield "
                                            </span>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 548
            yield "                            </div>
                        ";
        } else {
            // line 550
            yield "                            <p class=\"text-gray-500 italic text-center py-4\">Aucun utilisateur récent à afficher.</p>
                        ";
        }
        // line 552
        yield "                    </div>
                </div>
                
                <!-- Recent Rides -->
                <div class=\"bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden\">
                    <div class=\"flex items-center justify-between bg-gradient-to-r from-green-50 to-emerald-50 px-6 py-4\">
                        <h2 class=\"font-bold text-lg text-gray-800\">Trajets récents</h2>
                        <a href=\"#\" class=\"text-green-600 hover:text-green-800 text-sm font-medium\">Voir tous →</a>
                    </div>
                    <div class=\"p-4\">
                        ";
        // line 562
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 562, $this->source); })()), "recent_rides", [], "any", false, false, false, 562)) > 0)) {
            // line 563
            yield "                            <div class=\"space-y-3\">
                                ";
            // line 564
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 564, $this->source); })()), "recent_rides", [], "any", false, false, false, 564));
            foreach ($context['_seq'] as $context["_key"] => $context["ride"]) {
                // line 565
                yield "                                    <div class=\"flex items-center p-2 hover:bg-gray-50 rounded-lg transition-colors\">
                                        <div class=\"p-2 rounded-lg bg-green-100 text-green-600 mr-3 flex-shrink-0\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 5l7 7-7 7M5 5l7 7-7 7\" />
                                            </svg>
                                        </div>
                                        <div class=\"flex-1 min-w-0\">
                                            <p class=\"text-sm font-medium text-gray-900 truncate\">";
                // line 572
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ride"], "trajet", [], "any", false, false, false, 572), "departurePoint", [], "any", false, false, false, 572), "html", null, true);
                yield " → ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ride"], "trajet", [], "any", false, false, false, 572), "arrivalPoint", [], "any", false, false, false, 572), "html", null, true);
                yield "</p>
                                            <p class=\"text-xs text-gray-500 truncate\">";
                // line 573
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ride"], "departureDate", [], "any", false, false, false, 573), "d/m/Y H:i"), "html", null, true);
                yield "</p>
                                        </div>
                                        <div class=\"ml-2\">
                                            <span class=\"inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium ";
                // line 576
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["ride"], "availableSeats", [], "any", false, false, false, 576) > 0)) ? ("bg-green-100 text-green-800") : ("bg-red-100 text-red-800"));
                yield "\">
                                                ";
                // line 577
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ride"], "availableSeats", [], "any", false, false, false, 577), "html", null, true);
                yield " place";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["ride"], "availableSeats", [], "any", false, false, false, 577) != 1)) {
                    yield "s";
                }
                // line 578
                yield "                                            </span>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ride'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 582
            yield "                            </div>
                        ";
        } else {
            // line 584
            yield "                            <p class=\"text-gray-500 italic text-center py-4\">Aucun trajet récent à afficher.</p>
                        ";
        }
        // line 586
        yield "                    </div>
                </div>
            </div>
            
            <!-- Recent Categories Section -->
            <div class=\"mb-8 animate-scale-in\" style=\"animation-delay: 0.85s;\">
                <div class=\"bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden\">
                    <div class=\"flex items-center justify-between bg-gradient-to-r from-blue-50 to-indigo-50 px-6 py-4\">
                        <h2 class=\"font-bold text-lg text-gray-800\">Catégories de Véhicules</h2>
                        <a href=\"";
        // line 595
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"text-blue-600 hover:text-blue-800 text-sm font-medium\">Voir toutes →</a>
                    </div>
                    <div class=\"p-4\">
                        ";
        // line 598
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 598, $this->source); })()), "categories", [], "any", false, false, false, 598), "recent", [], "any", false, false, false, 598)) > 0)) {
            // line 599
            yield "                            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4\">
                                ";
            // line 600
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 600, $this->source); })()), "categories", [], "any", false, false, false, 600), "recent", [], "any", false, false, false, 600));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 601
                yield "                                    <div class=\"border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow\">
                                        <div class=\"flex items-center mb-2\">
                                            <div class=\"p-2 rounded-lg bg-blue-100 text-blue-600 mr-3\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z\" />
                                                </svg>
                                            </div>
                                            <h3 class=\"font-semibold\">";
                // line 608
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "nom", [], "any", false, false, false, 608), "html", null, true);
                yield "</h3>
                                        </div>
                                        <p class=\"text-sm text-gray-600 mb-2 line-clamp-2\">";
                // line 610
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 610)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 610), "html", null, true)) : ("Aucune description"));
                yield "</p>
                                        <div class=\"flex justify-between items-center mt-3\">
                                            <span class=\"text-xs text-blue-600 bg-blue-50 px-2 py-1 rounded\">";
                // line 612
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "cars", [], "any", false, false, false, 612)), "html", null, true);
                yield " voiture(s)</span>
                                            <a href=\"";
                // line 613
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 613)]), "html", null, true);
                yield "\" class=\"text-xs text-gray-500 hover:text-blue-600\">Détails →</a>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 617
            yield "                            </div>
                            <div class=\"mt-4 text-center\">
                                <a href=\"";
            // line 619
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
            yield "\" class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\" />
                                    </svg>
                                    Créer une nouvelle catégorie
                                </a>
                            </div>
                        ";
        } else {
            // line 627
            yield "                            <div class=\"text-center py-8\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12 mx-auto text-gray-300 mb-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z\" />
                                </svg>
                                <p class=\"text-gray-500 mb-4\">Aucune catégorie disponible</p>
                                <a href=\"";
            // line 632
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
            yield "\" class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\" />
                                    </svg>
                                    Créer la première catégorie
                                </a>
                            </div>
                        ";
        }
        // line 640
        yield "                    </div>
                </div>
            </div>
            
            <!-- Quick Links and System Alerts -->
            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6 animate-scale-in\" style=\"animation-delay: 0.9s;\">
                <!-- Quick Links -->
                <div class=\"bg-white rounded-xl p-6 shadow-md border border-gray-100\">
                    <h2 class=\"text-lg font-bold mb-4 text-gray-800\">Accès rapides</h2>
                    <div class=\"space-y-2\">
                        <a href=\"";
        // line 650
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"flex items-center p-3 rounded-lg hover:bg-primary-ultra-light text-gray-700 hover:text-primary transition-colors\">
                            <div class=\"p-2 rounded-lg bg-primary-ultra-light text-primary mr-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                                </svg>
                            </div>
                            <span class=\"font-medium\">Gestion des utilisateurs</span>
                        </a>
                        <a href=\"";
        // line 658
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_index");
        yield "\" class=\"flex items-center p-3 rounded-lg hover:bg-red-50 text-gray-700 hover:text-red-600 transition-colors\">
                            <div class=\"p-2 rounded-lg bg-red-100 text-red-600 mr-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                                </svg>
                            </div>
                            <span class=\"font-medium\">Gestion des réclamations</span>
                        </a>
                        <a href=\"";
        // line 666
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonces");
        yield "\" class=\"flex items-center p-3 rounded-lg hover:bg-green-50 text-gray-700 hover:text-green-600 transition-colors\">
                            <div class=\"p-2 rounded-lg bg-green-100 text-green-600 mr-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z\" />
                                </svg>
                            </div>
                            <span class=\"font-medium\">Liste des Annonces</span>
                        </a>
                        <a href=\"";
        // line 674
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_trajets");
        yield "\" class=\"flex items-center p-3 rounded-lg hover:bg-purple-50 text-gray-700 hover:text-purple-600 transition-colors\">
                            <div class=\"p-2 rounded-lg bg-purple-100 text-purple-600 mr-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7\" />
                                </svg>
                            </div>
                            <span class=\"font-medium\">Liste des Trajets</span>
                        </a>
                        <a href=\"";
        // line 682
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservations");
        yield "\" class=\"flex items-center p-3 rounded-lg hover:bg-purple-50 text-gray-700 hover:text-purple-600 transition-colors\">
                            <div class=\"p-2 rounded-lg bg-purple-100 text-purple-600 mr-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                                </svg>
                            </div>
                            <span class=\"font-medium\">Liste des Réservations</span>
                        </a>
                        <a href=\"";
        // line 690
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"flex items-center p-3 rounded-lg hover:bg-blue-50 text-gray-700 hover:text-blue-600 transition-colors\">
                            <div class=\"p-2 rounded-lg bg-blue-100 text-blue-600 mr-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z\" />
                                </svg>
                            </div>
                            <span class=\"font-medium\">Gestion des Catégories</span>
                            ";
        // line 697
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 697, $this->source); })()), "categories", [], "any", false, false, false, 697), "total", [], "any", false, false, false, 697) - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 697, $this->source); })()), "categories", [], "any", false, false, false, 697), "with_cars", [], "any", false, false, false, 697)) > 0)) {
            // line 698
            yield "                                <span class=\"ml-2 inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800\">
                                    ";
            // line 699
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 699, $this->source); })()), "categories", [], "any", false, false, false, 699), "total", [], "any", false, false, false, 699) - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 699, $this->source); })()), "categories", [], "any", false, false, false, 699), "with_cars", [], "any", false, false, false, 699)), "html", null, true);
            yield " sans voiture
                                </span>
                            ";
        }
        // line 702
        yield "                        </a>
                    </div>
                </div>
                
                <!-- System Alerts -->
                <div class=\"md:col-span-2 bg-white rounded-xl p-6 shadow-md border border-gray-100\">
                    <h2 class=\"text-lg font-bold mb-4 text-gray-800\">Alertes système</h2>
                    ";
        // line 709
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 709, $this->source); })()), "alerts", [], "any", false, false, false, 709)) > 0)) {
            // line 710
            yield "                        <div class=\"space-y-3\">
                            ";
            // line 711
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 711, $this->source); })()), "alerts", [], "any", false, false, false, 711));
            foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                // line 712
                yield "                                <div class=\"flex p-3 rounded-lg bg-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "color", [], "any", false, false, false, 712), "html", null, true);
                yield "-50 border border-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "color", [], "any", false, false, false, 712), "html", null, true);
                yield "-200\">
                                    <div class=\"p-2 rounded-full bg-";
                // line 713
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "color", [], "any", false, false, false, 713), "html", null, true);
                yield "-100 text-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "color", [], "any", false, false, false, 713), "html", null, true);
                yield "-600 mr-3\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"";
                // line 715
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "icon", [], "any", false, false, false, 715), "html", null, true);
                yield "\" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class=\"text-sm font-medium text-";
                // line 719
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "color", [], "any", false, false, false, 719), "html", null, true);
                yield "-800\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "title", [], "any", false, false, false, 719), "html", null, true);
                yield "</h4>
                                        <p class=\"text-xs text-";
                // line 720
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "color", [], "any", false, false, false, 720), "html", null, true);
                yield "-600 mt-1\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "message", [], "any", false, false, false, 720), "html", null, true);
                yield "</p>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['alert'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 724
            yield "                        </div>
                    ";
        } else {
            // line 726
            yield "                        <div class=\"flex items-center p-3 rounded-lg bg-green-50 border border-green-200\">
                            <div class=\"p-2 rounded-full bg-green-100 text-green-600 mr-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                                </svg>
                            </div>
                            <div>
                                <h4 class=\"text-sm font-medium text-green-800\">Système opérationnel</h4>
                                <p class=\"text-xs text-green-600 mt-1\">Tous les systèmes fonctionnent normalement.</p>
                            </div>
                        </div>
                    ";
        }
        // line 738
        yield "                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 745
        yield "<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menuToggle');
        const closeMenu = document.getElementById('closeMenu');
        const offcanvasMenu = document.querySelector('.offcanvas-menu');
        const offcanvasBackdrop = document.querySelector('.offcanvas-backdrop');
        const body = document.body;

        menuToggle.addEventListener('click', function() {
            offcanvasMenu.classList.add('active');
            offcanvasBackdrop.classList.add('active');
            body.classList.add('menu-open');
        });

        function closeOffcanvasMenu() {
            offcanvasMenu.classList.remove('active');
            offcanvasBackdrop.classList.remove('active');
            body.classList.remove('menu-open');
        }

        closeMenu.addEventListener('click', closeOffcanvasMenu);
        offcanvasBackdrop.addEventListener('click', closeOffcanvasMenu);
        
        // Set current date
        const currentDateElement = document.getElementById('currentDate');
        const now = new Date();
        currentDateElement.textContent = now.toLocaleDateString('fr-FR', { 
            weekday: 'long', 
            year: 'numeric', 
            month: 'long', 
            day: 'numeric' 
        });
        
        // Refresh button functionality
        document.getElementById('refreshStats').addEventListener('click', function() {
            this.classList.add('animate-pulse');
            setTimeout(() => {
                window.location.reload();
            }, 300);
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
        return "admin/dashboard.html.twig";
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
        return array (  1243 => 745,  1235 => 738,  1221 => 726,  1217 => 724,  1205 => 720,  1199 => 719,  1192 => 715,  1185 => 713,  1178 => 712,  1174 => 711,  1171 => 710,  1169 => 709,  1160 => 702,  1154 => 699,  1151 => 698,  1149 => 697,  1139 => 690,  1128 => 682,  1117 => 674,  1106 => 666,  1095 => 658,  1084 => 650,  1072 => 640,  1061 => 632,  1054 => 627,  1043 => 619,  1039 => 617,  1029 => 613,  1025 => 612,  1020 => 610,  1015 => 608,  1006 => 601,  1002 => 600,  999 => 599,  997 => 598,  991 => 595,  980 => 586,  976 => 584,  972 => 582,  963 => 578,  957 => 577,  953 => 576,  947 => 573,  941 => 572,  932 => 565,  928 => 564,  925 => 563,  923 => 562,  911 => 552,  907 => 550,  903 => 548,  892 => 543,  888 => 542,  882 => 539,  876 => 538,  872 => 536,  865 => 533,  862 => 532,  854 => 530,  852 => 529,  848 => 527,  844 => 526,  841 => 525,  839 => 524,  833 => 521,  804 => 495,  772 => 466,  763 => 460,  756 => 456,  738 => 441,  731 => 437,  723 => 432,  705 => 417,  698 => 413,  690 => 408,  672 => 393,  665 => 389,  657 => 384,  639 => 369,  632 => 365,  624 => 360,  606 => 345,  599 => 341,  591 => 336,  549 => 299,  528 => 281,  517 => 273,  510 => 268,  504 => 266,  502 => 265,  488 => 260,  483 => 257,  477 => 255,  475 => 254,  461 => 249,  444 => 241,  429 => 235,  414 => 229,  399 => 223,  382 => 215,  365 => 201,  359 => 200,  356 => 199,  349 => 196,  346 => 195,  338 => 193,  336 => 192,  320 => 178,  310 => 169,  297 => 167,  279 => 160,  266 => 159,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin Dashboard{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Background and global styles */
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #e6ffec 0%, #c1f2d1 100%);
            background-attachment: fixed;
        }
        
        /* Offcanvas menu styles */
        .offcanvas-menu {
            position: fixed;
            top: 0;
            left: -300px;
            width: 300px;
            height: 100%;
            background: linear-gradient(180deg, #1e8449 0%, #196f3d 100%);
            z-index: 1050;
            transition: all 0.3s ease;
            box-shadow: 2px 0 10px rgba(0,0,0,0.2);
            overflow-y: auto;
            color: #fff;
        }
        
        .offcanvas-menu.active {
            left: 0;
        }
        
        .offcanvas-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            backdrop-filter: blur(2px);
            z-index: 1040;
            display: none;
        }
        
        .offcanvas-backdrop.active {
            display: block;
        }
        
        body.menu-open {
            overflow: hidden;
        }
        
        /* Menu items */
        .sidebar-link {
            border-left: 3px solid transparent;
            transition: all 0.2s ease;
        }
        
        .sidebar-link.active,
        .sidebar-link:hover {
            border-left-color: #2ecc71;
            background-color: rgba(255, 255, 255, 0.1) !important;
        }
        
        .sidebar-link svg {
            transition: transform 0.2s ease;
        }
        
        .sidebar-link:hover svg {
            transform: translateX(3px);
        }

        /* Animation effects */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideInUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes scaleIn {
            from { transform: scale(0.9); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease forwards;
        }

        .animate-slide-up {
            animation: slideInUp 0.5s ease forwards;
        }

        .animate-scale-in {
            animation: scaleIn 0.5s ease forwards;
        }

        /* Dashboard card styles */
        .stat-card {
            transition: all 0.3s ease;
            overflow: hidden;
            position: relative;
            border-radius: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 8px;
            background: linear-gradient(to right, var(--accent-color-light), var(--accent-color));
        }

        .metric-value {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.25rem;
            background: linear-gradient(to right, var(--accent-color-dark), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .metric-label {
            color: #6b7280;
            font-size: 0.875rem;
        }

        .chart-container {
            position: relative;
            height: 250px;
            width: 100%;
        }
        
        /* Main content container */
        .dashboard-container {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border-radius: 1rem;
            border: 1px solid rgba(46, 204, 113, 0.3);
            box-shadow: 0 10px 30px rgba(46, 204, 113, 0.15);
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/moment\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chartjs-adapter-moment\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels\"></script>
{% endblock %}

{% block body %}
{# Navbar Menu Button #}
<div class=\"fixed top-4 left-4 z-50\">
    <button id=\"menuToggle\" class=\"flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-r from-green-500 to-green-700 text-white shadow-lg hover:shadow-xl transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\" />
        </svg>
    </button>
</div>

{# Offcanvas Menu #}
<div class=\"offcanvas-backdrop\"></div>
<div class=\"offcanvas-menu p-0\">
    <div class=\"p-6 bg-gradient-to-b from-green-700 to-green-600\">
        <div class=\"flex justify-between items-center mb-6\">
            <h2 class=\"text-xl font-bold text-white\">Admin Panel</h2>
            <button id=\"closeMenu\" class=\"text-white/80 hover:text-white focus:outline-none\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                </svg>
            </button>
        </div>
        
        <div class=\"mb-6\">
            <div class=\"flex items-center mb-4\">
                {% if user.imagePath %}
                    <img src=\"{{ asset(user.imagePath) }}\" alt=\"{{ user.username }}\" class=\"w-12 h-12 rounded-full object-cover mr-3 border-2 border-white/30\">
                {% else %}
                    <div class=\"w-12 h-12 rounded-full bg-white/20 flex items-center justify-center text-white text-xl font-bold mr-3 border border-white/30\">
                        {{ user.prenom|first }}{{ user.nom|first }}
                    </div>
                {% endif %}
                <div>
                    <p class=\"font-medium text-white\">{{ user.prenom }} {{ user.nom }}</p>
                    <p class=\"text-sm text-white/70\">{{ user.email }}</p>
                    <p class=\"text-xs text-white/80 flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z\" />
                        </svg>
                        Administrator
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <nav class=\"px-3 py-4\">
        <div class=\"text-xs uppercase text-white/50 font-semibold px-4 mb-2\">Core</div>
        <a href=\"{{ path('app_admin_dashboard') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_admin_dashboard' %}active bg-white/10 text-white{% else %}text-white/70 hover:text-white{% endif %} transition-all duration-200\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\" />
            </svg>
            Dashboard
        </a>
        
        <div class=\"text-xs uppercase text-white/50 font-semibold px-4 mb-2 mt-6\">Management</div>
        <a href=\"{{ path('app_admin_users') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') starts with 'app_admin_user' or app.request.get('_route') == 'app_admin_users' or app.request.get('_route') == 'app_user_edit_roles' %}active bg-white/10 text-white{% else %}text-white/70 hover:text-white{% endif %} transition-all duration-200\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
            </svg>
            Utilisateurs
        </a>
        <a href=\"{{ path('app_admin_annonces') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') starts with 'app_admin_annonce' %}active bg-white/10 text-white{% else %}text-white/70 hover:text-white{% endif %} transition-all duration-200\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z\" />
            </svg>
            Annonces
        </a>
        <a href=\"{{ path('app_admin_trajets') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') starts with 'app_admin_trajet' %}active bg-white/10 text-white{% else %}text-white/70 hover:text-white{% endif %} transition-all duration-200\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7\" />
            </svg>
            Trajets
        </a>
        <a href=\"{{ path('app_admin_reservations') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') starts with 'app_admin_reservation' %}active bg-white/10 text-white{% else %}text-white/70 hover:text-white{% endif %} transition-all duration-200\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
            </svg>
            Réservations
        </a>
        
        <div class=\"text-xs uppercase text-white/50 font-semibold px-4 mb-2 mt-6\">Support</div>
        <a href=\"{{ path('app_admin_reclamation_index') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') starts with 'app_admin_reclamation' %}active bg-white/10 text-white{% else %}text-white/70 hover:text-white{% endif %} transition-all duration-200\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
            </svg>
            Réclamations
            {% if stats.reclamations.pending > 0 %}
                <span class=\"ml-auto bg-red-500 text-white text-xs px-2 py-0.5 rounded-full\">{{ stats.reclamations.pending }}</span>
            {% endif %}
        </a>
        
        <div class=\"text-xs uppercase text-white/50 font-semibold px-4 mb-2 mt-6\">Config</div>
        <a href=\"{{ path('app_admin_category_index') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') starts with 'app_admin_category' %}active bg-white/10 text-white{% else %}text-white/70 hover:text-white{% endif %} transition-all duration-200\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z\" />
            </svg>
            Catégories
            {% if stats.categories.total - stats.categories.with_cars > 0 %}
                <span class=\"ml-auto bg-blue-500 text-white text-xs px-2 py-0.5 rounded-full\">{{ stats.categories.total - stats.categories.with_cars }}</span>
            {% endif %}
        </a>
    </nav>
    
    <!-- Logout Link -->
    <div class=\"mt-auto p-4 border-t border-white/10\">
        <a href=\"{{ path('app_logout') }}\" class=\"flex items-center px-4 py-3 text-sm font-medium rounded-lg text-white/70 hover:text-white hover:bg-white/10 transition-all duration-200\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1\" />
            </svg>
            Déconnexion
        </a>
        
        <div class=\"mt-8 text-center\">
            <a href=\"{{ path('app_home') }}\" class=\"text-xs text-white/50 hover:text-white flex items-center justify-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\" />
                </svg>
                Retour au Site
            </a>
        </div>
    </div>
</div>

<div class=\"min-h-screen container mx-auto px-4 py-8\">
    <div class=\"max-w-7xl mx-auto\">
        <div class=\"dashboard-container p-6\">
            <!-- Dashboard Header -->
            <div class=\"mb-8 animate-fade-in\">
                <div class=\"flex flex-col md:flex-row justify-between md:items-center gap-4\">
                    <div>
                        <h1 class=\"text-3xl font-bold bg-gradient-to-r from-green-600 to-green-700 bg-clip-text text-transparent\">Admin Dashboard</h1>
                        <p class=\"text-gray-500 mt-1\">Bienvenue, {{ user.prenom }} {{ user.nom }}</p>
                        <div class=\"h-1 w-32 bg-gradient-to-r from-green-500 to-green-600 rounded mt-2\"></div>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <span id=\"currentDate\" class=\"text-sm text-gray-500\"></span>
                        <div class=\"flex items-center bg-green-100 text-green-700 rounded-lg px-3 py-1.5 text-sm font-medium\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 10V3L4 14h7v7l9-11h-7z\" />
                            </svg>
                            Stats en temps réel
                        </div>
                    </div>
                </div>

                <!-- Last Update Refresh Button -->
                <div class=\"mt-4 flex justify-end\">
                    <button id=\"refreshStats\" class=\"flex items-center bg-white border border-green-200 hover:bg-green-50 rounded-lg px-3 py-1.5 text-sm text-green-700 transition-all duration-200\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15\" />
                        </svg>
                        <span id=\"lastUpdate\">Mis à jour il y a quelques secondes</span>
                    </button>
                </div>
            </div>
            
            <!-- Stat Cards Grid -->
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 mb-8\">
                <!-- Users Card -->
                <div class=\"stat-card rounded-xl p-6 shadow-md animate-slide-up\" style=\"--accent-color: #3b82f6; --accent-color-light: #93c5fd; --accent-color-dark: #1d4ed8; animation-delay: 0.1s;\">
                    <div class=\"flex items-center justify-between mb-3\">
                        <h2 class=\"font-semibold text-gray-700\">Utilisateurs</h2>
                        <div class=\"p-2 rounded-lg bg-blue-100 text-blue-600\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                            </svg>
                        </div>
                    </div>
                    <div class=\"metric-value\">{{ stats.users.total }}</div>
                    <div class=\"metric-label\">Utilisateurs inscrits</div>
                    <div class=\"flex justify-between items-center mt-4 text-xs text-gray-500\">
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-blue-500 mr-1\"></span>
                            <span>{{ stats.users.conducteurs }} conducteurs</span>
                        </div>
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-green-500 mr-1\"></span>
                            <span>{{ stats.users.passagers }} passagers</span>
                        </div>
                    </div>
                </div>

                <!-- Rides Card -->
                <div class=\"stat-card rounded-xl p-6 shadow-md animate-slide-up\" style=\"--accent-color: #10b981; --accent-color-light: #6ee7b7; --accent-color-dark: #047857; animation-delay: 0.2s;\">
                    <div class=\"flex items-center justify-between mb-3\">
                        <h2 class=\"font-semibold text-gray-700\">Annonces</h2>
                        <div class=\"p-2 rounded-lg bg-green-100 text-green-600\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z\" />
                            </svg>
                        </div>
                    </div>
                    <div class=\"metric-value\">{{ stats.annonces.total }}</div>
                    <div class=\"metric-label\">Annonces actives</div>
                    <div class=\"flex justify-between items-center mt-4 text-xs text-gray-500\">
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-green-500 mr-1\"></span>
                            <span>{{ stats.annonces.today }} aujourd'hui</span>
                        </div>
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-gray-500 mr-1\"></span>
                            <span>{{ stats.annonces.pending }} en attente</span>
                        </div>
                    </div>
                </div>

                <!-- Bookings Card -->
                <div class=\"stat-card rounded-xl p-6 shadow-md animate-slide-up\" style=\"--accent-color: #8b5cf6; --accent-color-light: #c4b5fd; --accent-color-dark: #6d28d9; animation-delay: 0.3s;\">
                    <div class=\"flex items-center justify-between mb-3\">
                        <h2 class=\"font-semibold text-gray-700\">Réservations</h2>
                        <div class=\"p-2 rounded-lg bg-purple-100 text-purple-600\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                            </svg>
                        </div>
                    </div>
                    <div class=\"metric-value\">{{ stats.reservations.total }}</div>
                    <div class=\"metric-label\">Réservations</div>
                    <div class=\"flex justify-between items-center mt-4 text-xs text-gray-500\">
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-purple-500 mr-1\"></span>
                            <span>{{ stats.reservations.confirmed }} confirmées</span>
                        </div>
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-yellow-500 mr-1\"></span>
                            <span>{{ stats.reservations.pending }} en attente</span>
                        </div>
                    </div>
                </div>

                <!-- Reviews Card -->
                <div class=\"stat-card rounded-xl p-6 shadow-md animate-slide-up\" style=\"--accent-color: #f59e0b; --accent-color-light: #fcd34d; --accent-color-dark: #d97706; animation-delay: 0.4s;\">
                    <div class=\"flex items-center justify-between mb-3\">
                        <h2 class=\"font-semibold text-gray-700\">Avis</h2>
                        <div class=\"p-2 rounded-lg bg-yellow-100 text-yellow-600\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\" />
                            </svg>
                        </div>
                    </div>
                    <div class=\"metric-value\">{{ stats.avis.total }}</div>
                    <div class=\"metric-label\">Avis clients</div>
                    <div class=\"flex justify-between items-center mt-4 text-xs text-gray-500\">
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-yellow-500 mr-1\"></span>
                            <span>{{ stats.avis.avg_rating|number_format(1) }}/5 moyenne</span>
                        </div>
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-green-500 mr-1\"></span>
                            <span>{{ stats.avis.this_week }} cette semaine</span>
                        </div>
                    </div>
                </div>
                
                <!-- Complaints Card -->
                <div class=\"stat-card rounded-xl p-6 shadow-md animate-slide-up\" style=\"--accent-color: #ef4444; --accent-color-light: #fca5a5; --accent-color-dark: #b91c1c; animation-delay: 0.5s;\">
                    <div class=\"flex items-center justify-between mb-3\">
                        <h2 class=\"font-semibold text-gray-700\">Réclamations</h2>
                        <div class=\"p-2 rounded-lg bg-red-100 text-red-600\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                            </svg>
                        </div>
                    </div>
                    <div class=\"metric-value\">{{ reclamations_count|default(stats.reclamations.active) }}</div>
                    <div class=\"metric-label\">Réclamations actives</div>
                    <div class=\"flex justify-between items-center mt-4 text-xs text-gray-500\">
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-orange-500 mr-1\"></span>
                            <span>{{ stats.reclamations.pending }} en attente</span>
                        </div>
                        <div class=\"flex items-center\">
                            <span class=\"inline-block w-2 h-2 rounded-full bg-blue-500 mr-1\"></span>
                            <span>{{ stats.reclamations.in_progress }} en cours</span>
                        </div>
                    </div>
                </div>

                <!-- Categories Card -->
                <div class=\"stat-card rounded-xl p-6 shadow-md animate-slide-up\" style=\"--accent-color: #3b82f6; --accent-color-light: #93c5fd; --accent-color-dark: #1d4ed8; animation-delay: 0.6s;\">
                    <div class=\"flex items-center justify-between mb-3\">
                        <h2 class=\"font-semibold text-gray-700\">Catégories</h2>
                        <div class=\"p-2 rounded-lg bg-blue-100 text-blue-600\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z\" />
                            </svg>
                        </div>
                    </div>
                    <a href=\"{{ path('app_admin_category_index') }}\" class=\"block\">
                        <div class=\"grid grid-cols-2 gap-4 mb-4\">
                            <div class=\"text-center py-3 border border-blue-100 rounded-lg bg-blue-50\">
                                <div class=\"metric-value\" style=\"--accent-color: #3b82f6; --accent-color-dark: #1d4ed8;\">
                                    {{ stats.categories.total }}
                                </div>
                                <div class=\"metric-label\">Total</div>
                            </div>
                            <div class=\"text-center py-3 border border-blue-100 rounded-lg bg-blue-50\">
                                <div class=\"metric-value\" style=\"--accent-color: #3b82f6; --accent-color-dark: #1d4ed8;\">
                                    {{ stats.categories.with_cars }}
                                </div>
                                <div class=\"metric-label\">Avec voitures</div>
                            </div>
                        </div>
                        <div class=\"text-center py-2\">
                            <div class=\"text-sm text-gray-500 mb-2\">Gestion complète des catégories de véhicules</div>
                        </div>
                        <div class=\"mt-4 text-center\">
                            <span class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16m-7 6h7\" />
                                </svg>
                                Gérer les catégories
                            </span>
                        </div>
                    </a>
                </div>

                <!-- Reclamations Card -->
                <div class=\"stat-card rounded-xl p-6 shadow-md animate-slide-up\" style=\"--accent-color: #ef4444; --accent-color-light: #fca5a5; --accent-color-dark: #b91c1c; animation-delay: 0.7s;\">
                    <div class=\"flex items-center justify-between mb-3\">
                        <h2 class=\"font-semibold text-gray-700\">Réclamations</h2>
                        <div class=\"p-2 rounded-lg bg-red-100 text-red-600\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                            </svg>
                        </div>
                    </div>
                    <a href=\"{{ path('app_admin_reclamation_index') }}\" class=\"block\">
                        <div class=\"text-center py-3\">
                            <div class=\"font-bold text-red-600 text-xl\">Gérer les réclamations</div>
                            <div class=\"text-sm text-gray-500 mt-1\">Répondre et traiter les réclamations</div>
                        </div>
                        <div class=\"mt-4 text-center\">
                            <span class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6\" />
                                </svg>
                                Accéder
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- Charts Section -->
            <!-- Charts have been removed as requested -->
            
            <!-- Recent Activity Section -->
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 mb-8 animate-scale-in\" style=\"animation-delay: 0.8s;\">
                <!-- Recent Users -->
                <div class=\"bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden\">
                    <div class=\"flex items-center justify-between bg-gradient-to-r from-primary-ultra-light to-blue-50 px-6 py-4\">
                        <h2 class=\"font-bold text-lg text-gray-800\">Utilisateurs récents</h2>
                        <a href=\"{{ path('app_admin_users') }}\" class=\"text-primary hover:text-primary-dark text-sm font-medium\">Voir tous →</a>
                    </div>
                    <div class=\"p-4\">
                        {% if stats.recent_users|length > 0 %}
                            <div class=\"space-y-3\">
                                {% for user in stats.recent_users %}
                                    <div class=\"flex items-center p-2 hover:bg-gray-50 rounded-lg transition-colors\">
                                        <div class=\"w-10 h-10 rounded-full overflow-hidden mr-3 flex-shrink-0\">
                                            {% if user.imagePath %}
                                                <img src=\"{{ asset(user.imagePath) }}\" alt=\"{{ user.prenom }}\" class=\"w-full h-full object-cover\">
                                            {% else %}
                                                <div class=\"w-full h-full flex items-center justify-center bg-gradient-to-r from-primary to-blue-500 text-white font-bold uppercase\">
                                                    {{ user.prenom|first }}{{ user.nom|first }}
                                                </div>
                                            {% endif %}
                                        </div>
                                        <div class=\"flex-1 min-w-0\">
                                            <p class=\"text-sm font-medium text-gray-900 truncate\">{{ user.prenom }} {{ user.nom }}</p>
                                            <p class=\"text-xs text-gray-500 truncate\">{{ user.email }}</p>
                                        </div>
                                        <div class=\"ml-2\">
                                            <span class=\"inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium {{ user.roleCode == 'CONDUCTEUR' ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800' }}\">
                                                {{ user.roleCode == 'ADMIN' ? 'Admin' : (user.roleCode == 'CONDUCTEUR' ? 'Conducteur' : 'Passager') }}
                                            </span>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        {% else %}
                            <p class=\"text-gray-500 italic text-center py-4\">Aucun utilisateur récent à afficher.</p>
                        {% endif %}
                    </div>
                </div>
                
                <!-- Recent Rides -->
                <div class=\"bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden\">
                    <div class=\"flex items-center justify-between bg-gradient-to-r from-green-50 to-emerald-50 px-6 py-4\">
                        <h2 class=\"font-bold text-lg text-gray-800\">Trajets récents</h2>
                        <a href=\"#\" class=\"text-green-600 hover:text-green-800 text-sm font-medium\">Voir tous →</a>
                    </div>
                    <div class=\"p-4\">
                        {% if stats.recent_rides|length > 0 %}
                            <div class=\"space-y-3\">
                                {% for ride in stats.recent_rides %}
                                    <div class=\"flex items-center p-2 hover:bg-gray-50 rounded-lg transition-colors\">
                                        <div class=\"p-2 rounded-lg bg-green-100 text-green-600 mr-3 flex-shrink-0\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 5l7 7-7 7M5 5l7 7-7 7\" />
                                            </svg>
                                        </div>
                                        <div class=\"flex-1 min-w-0\">
                                            <p class=\"text-sm font-medium text-gray-900 truncate\">{{ ride.trajet.departurePoint }} → {{ ride.trajet.arrivalPoint }}</p>
                                            <p class=\"text-xs text-gray-500 truncate\">{{ ride.departureDate|date('d/m/Y H:i') }}</p>
                                        </div>
                                        <div class=\"ml-2\">
                                            <span class=\"inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium {{ ride.availableSeats > 0 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}\">
                                                {{ ride.availableSeats }} place{% if ride.availableSeats != 1 %}s{% endif %}
                                            </span>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        {% else %}
                            <p class=\"text-gray-500 italic text-center py-4\">Aucun trajet récent à afficher.</p>
                        {% endif %}
                    </div>
                </div>
            </div>
            
            <!-- Recent Categories Section -->
            <div class=\"mb-8 animate-scale-in\" style=\"animation-delay: 0.85s;\">
                <div class=\"bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden\">
                    <div class=\"flex items-center justify-between bg-gradient-to-r from-blue-50 to-indigo-50 px-6 py-4\">
                        <h2 class=\"font-bold text-lg text-gray-800\">Catégories de Véhicules</h2>
                        <a href=\"{{ path('app_admin_category_index') }}\" class=\"text-blue-600 hover:text-blue-800 text-sm font-medium\">Voir toutes →</a>
                    </div>
                    <div class=\"p-4\">
                        {% if stats.categories.recent|length > 0 %}
                            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4\">
                                {% for category in stats.categories.recent %}
                                    <div class=\"border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow\">
                                        <div class=\"flex items-center mb-2\">
                                            <div class=\"p-2 rounded-lg bg-blue-100 text-blue-600 mr-3\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z\" />
                                                </svg>
                                            </div>
                                            <h3 class=\"font-semibold\">{{ category.nom }}</h3>
                                        </div>
                                        <p class=\"text-sm text-gray-600 mb-2 line-clamp-2\">{{ category.description ?: 'Aucune description' }}</p>
                                        <div class=\"flex justify-between items-center mt-3\">
                                            <span class=\"text-xs text-blue-600 bg-blue-50 px-2 py-1 rounded\">{{ category.cars|length }} voiture(s)</span>
                                            <a href=\"{{ path('app_admin_category_show', {'id': category.id}) }}\" class=\"text-xs text-gray-500 hover:text-blue-600\">Détails →</a>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                            <div class=\"mt-4 text-center\">
                                <a href=\"{{ path('app_admin_category_new') }}\" class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\" />
                                    </svg>
                                    Créer une nouvelle catégorie
                                </a>
                            </div>
                        {% else %}
                            <div class=\"text-center py-8\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12 mx-auto text-gray-300 mb-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z\" />
                                </svg>
                                <p class=\"text-gray-500 mb-4\">Aucune catégorie disponible</p>
                                <a href=\"{{ path('app_admin_category_new') }}\" class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\" />
                                    </svg>
                                    Créer la première catégorie
                                </a>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
            
            <!-- Quick Links and System Alerts -->
            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6 animate-scale-in\" style=\"animation-delay: 0.9s;\">
                <!-- Quick Links -->
                <div class=\"bg-white rounded-xl p-6 shadow-md border border-gray-100\">
                    <h2 class=\"text-lg font-bold mb-4 text-gray-800\">Accès rapides</h2>
                    <div class=\"space-y-2\">
                        <a href=\"{{ path('app_admin_users') }}\" class=\"flex items-center p-3 rounded-lg hover:bg-primary-ultra-light text-gray-700 hover:text-primary transition-colors\">
                            <div class=\"p-2 rounded-lg bg-primary-ultra-light text-primary mr-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                                </svg>
                            </div>
                            <span class=\"font-medium\">Gestion des utilisateurs</span>
                        </a>
                        <a href=\"{{ path('app_admin_reclamation_index') }}\" class=\"flex items-center p-3 rounded-lg hover:bg-red-50 text-gray-700 hover:text-red-600 transition-colors\">
                            <div class=\"p-2 rounded-lg bg-red-100 text-red-600 mr-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                                </svg>
                            </div>
                            <span class=\"font-medium\">Gestion des réclamations</span>
                        </a>
                        <a href=\"{{ path('app_admin_annonces') }}\" class=\"flex items-center p-3 rounded-lg hover:bg-green-50 text-gray-700 hover:text-green-600 transition-colors\">
                            <div class=\"p-2 rounded-lg bg-green-100 text-green-600 mr-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z\" />
                                </svg>
                            </div>
                            <span class=\"font-medium\">Liste des Annonces</span>
                        </a>
                        <a href=\"{{ path('app_admin_trajets') }}\" class=\"flex items-center p-3 rounded-lg hover:bg-purple-50 text-gray-700 hover:text-purple-600 transition-colors\">
                            <div class=\"p-2 rounded-lg bg-purple-100 text-purple-600 mr-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7\" />
                                </svg>
                            </div>
                            <span class=\"font-medium\">Liste des Trajets</span>
                        </a>
                        <a href=\"{{ path('app_admin_reservations') }}\" class=\"flex items-center p-3 rounded-lg hover:bg-purple-50 text-gray-700 hover:text-purple-600 transition-colors\">
                            <div class=\"p-2 rounded-lg bg-purple-100 text-purple-600 mr-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                                </svg>
                            </div>
                            <span class=\"font-medium\">Liste des Réservations</span>
                        </a>
                        <a href=\"{{ path('app_admin_category_index') }}\" class=\"flex items-center p-3 rounded-lg hover:bg-blue-50 text-gray-700 hover:text-blue-600 transition-colors\">
                            <div class=\"p-2 rounded-lg bg-blue-100 text-blue-600 mr-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z\" />
                                </svg>
                            </div>
                            <span class=\"font-medium\">Gestion des Catégories</span>
                            {% if stats.categories.total - stats.categories.with_cars > 0 %}
                                <span class=\"ml-2 inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800\">
                                    {{ stats.categories.total - stats.categories.with_cars }} sans voiture
                                </span>
                            {% endif %}
                        </a>
                    </div>
                </div>
                
                <!-- System Alerts -->
                <div class=\"md:col-span-2 bg-white rounded-xl p-6 shadow-md border border-gray-100\">
                    <h2 class=\"text-lg font-bold mb-4 text-gray-800\">Alertes système</h2>
                    {% if stats.alerts|length > 0 %}
                        <div class=\"space-y-3\">
                            {% for alert in stats.alerts %}
                                <div class=\"flex p-3 rounded-lg bg-{{ alert.color }}-50 border border-{{ alert.color }}-200\">
                                    <div class=\"p-2 rounded-full bg-{{ alert.color }}-100 text-{{ alert.color }}-600 mr-3\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"{{ alert.icon }}\" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class=\"text-sm font-medium text-{{ alert.color }}-800\">{{ alert.title }}</h4>
                                        <p class=\"text-xs text-{{ alert.color }}-600 mt-1\">{{ alert.message }}</p>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    {% else %}
                        <div class=\"flex items-center p-3 rounded-lg bg-green-50 border border-green-200\">
                            <div class=\"p-2 rounded-full bg-green-100 text-green-600 mr-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                                </svg>
                            </div>
                            <div>
                                <h4 class=\"text-sm font-medium text-green-800\">Système opérationnel</h4>
                                <p class=\"text-xs text-green-600 mt-1\">Tous les systèmes fonctionnent normalement.</p>
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>

{# Add JavaScript for the menu functionality #}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menuToggle');
        const closeMenu = document.getElementById('closeMenu');
        const offcanvasMenu = document.querySelector('.offcanvas-menu');
        const offcanvasBackdrop = document.querySelector('.offcanvas-backdrop');
        const body = document.body;

        menuToggle.addEventListener('click', function() {
            offcanvasMenu.classList.add('active');
            offcanvasBackdrop.classList.add('active');
            body.classList.add('menu-open');
        });

        function closeOffcanvasMenu() {
            offcanvasMenu.classList.remove('active');
            offcanvasBackdrop.classList.remove('active');
            body.classList.remove('menu-open');
        }

        closeMenu.addEventListener('click', closeOffcanvasMenu);
        offcanvasBackdrop.addEventListener('click', closeOffcanvasMenu);
        
        // Set current date
        const currentDateElement = document.getElementById('currentDate');
        const now = new Date();
        currentDateElement.textContent = now.toLocaleDateString('fr-FR', { 
            weekday: 'long', 
            year: 'numeric', 
            month: 'long', 
            day: 'numeric' 
        });
        
        // Refresh button functionality
        document.getElementById('refreshStats').addEventListener('click', function() {
            this.classList.add('animate-pulse');
            setTimeout(() => {
                window.location.reload();
            }, 300);
        });
    });
</script>
{% endblock %} ", "admin/dashboard.html.twig", "D:\\Covoituni_web-master\\templates\\admin\\dashboard.html.twig");
    }
}
