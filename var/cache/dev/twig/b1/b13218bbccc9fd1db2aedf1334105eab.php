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

/* layouts/user_layout.html.twig */
class __TwigTemplate_c269adc5ebe7aca483867cdff16f5842 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/user_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/user_layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layouts/user_layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        /* Offcanvas menu styles */
        .offcanvas-menu {
            position: fixed;
            top: 0;
            left: -350px;
            width: 350px;
            height: 100%;
            background: white;
            z-index: 1050;
            transition: all 0.3s ease;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            overflow-y: auto;
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
            z-index: 1040;
            display: none;
        }
        
        .offcanvas-backdrop.active {
            display: block;
        }
        
        body.menu-open {
            overflow: hidden;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
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

        // line 46
        yield "    ";
        // line 47
        yield "    <div class=\"fixed top-4 left-4 z-50\">
        <button id=\"menuToggle\" class=\"flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-r from-primary to-primary-dark text-white shadow-lg hover:shadow-xl transition-all duration-300\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\" />
            </svg>
        </button>
    </div>

    ";
        // line 56
        yield "    <div class=\"offcanvas-backdrop\"></div>
    <div class=\"offcanvas-menu glass-card bg-white/90 backdrop-blur-sm border border-white/30 p-6\">
        <div class=\"flex justify-between items-center mb-6\">
            <h2 class=\"text-xl font-bold text-gray-800\">Menu</h2>
            <button id=\"closeMenu\" class=\"text-gray-500 hover:text-gray-700\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                </svg>
            </button>
        </div>
        
        <div class=\"mb-6\">
            <div class=\"flex items-center mb-4\">
                ";
        // line 69
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "imagePath", [], "any", false, false, false, 69)) {
            // line 70
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "imagePath", [], "any", false, false, false, 70)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "username", [], "any", false, false, false, 70), "html", null, true);
            yield "\" class=\"w-12 h-12 rounded-full object-cover mr-3 border-2 border-primary-ultra-light\">
                ";
        } else {
            // line 72
            yield "                    <div class=\"w-12 h-12 rounded-full bg-gradient-to-r from-primary to-primary-dark flex items-center justify-center text-white text-xl font-bold mr-3\">
                        ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "prenom", [], "any", false, false, false, 73)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "nom", [], "any", false, false, false, 73)), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 76
        yield "                <div>
                    <p class=\"font-medium text-gray-900\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "prenom", [], "any", false, false, false, 77), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "nom", [], "any", false, false, false, 77), "html", null, true);
        yield "</p>
                    <p class=\"text-sm text-gray-500\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 78, $this->source); })()), "email", [], "any", false, false, false, 78), "html", null, true);
        yield "</p>
                    ";
        // line 79
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 80
            yield "                        <p class=\"text-xs font-medium text-indigo-600\">Administrateur</p>
                    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONDUCTEUR")) {
            // line 82
            yield "                        <p class=\"text-xs font-medium text-primary\">Conducteur</p>
                        <p class=\"text-xs text-yellow-500 flex items-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                            </svg>
                            ";
            // line 87
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "rating", [], "any", true, true, false, 87) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "rating", [], "any", false, false, false, 87)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "rating", [], "any", false, false, false, 87), "html", null, true)) : ("N/A"));
            yield " (";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "tripsCount", [], "any", true, true, false, 87) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "tripsCount", [], "any", false, false, false, 87)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "tripsCount", [], "any", false, false, false, 87), "html", null, true)) : ("0"));
            yield " trips)
                        </p>
                    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PASSAGER")) {
            // line 90
            yield "                        <p class=\"text-xs font-medium text-blue-600\">Passager</p>
                    ";
        }
        // line 92
        yield "                </div>
            </div>
        </div>
        
        ";
        // line 96
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONDUCTEUR")) {
            // line 97
            yield "            <nav class=\"space-y-1 mb-6\">
                <a href=\"";
            // line 98
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_dashboard");
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "request", [], "any", false, false, false, 98), "get", ["_route"], "method", false, false, false, 98) == "app_conducteur_dashboard")) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\" />
                    </svg>
                    Dashboard
                </a>
                <a href=\"";
            // line 104
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_profile");
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "request", [], "any", false, false, false, 104), "get", ["_route"], "method", false, false, false, 104) == "app_conducteur_profile")) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                    </svg>
                    Profile
                </a>
                <a href=\"";
            // line 110
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_reclamation");
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "request", [], "any", false, false, false, 110), "get", ["_route"], "method", false, false, false, 110) == "app_conducteur_reclamation")) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                    </svg>
                    Faire réclamation
                </a>
                <a href=\"";
            // line 116
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_liste_annonce");
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "request", [], "any", false, false, false, 116), "get", ["_route"], "method", false, false, false, 116) == "app_conducteur_liste_annonce")) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                    </svg>
                    Liste annonce
                </a>
                <a href=\"";
            // line 122
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_liste_trajet");
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "request", [], "any", false, false, false, 122), "get", ["_route"], "method", false, false, false, 122) == "app_conducteur_liste_trajet")) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7\" />
                    </svg>
                    Liste de trajet
                </a>
                <a href=\"";
            // line 128
            if ((array_key_exists("car", $context) &&  !(null === (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 128, $this->source); })())))) {
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_voiture");
            } else {
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_voiture_add");
            }
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "request", [], "any", false, false, false, 128), "get", ["_route"], "method", false, false, false, 128), ["app_conducteur_voiture", "app_conducteur_voiture_add", "app_conducteur_voiture_edit"])) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z\" />
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 14l-2-2H7L5 14m14-4.5v9.5a1 1 0 01-1 1H6a1 1 0 01-1-1V9.5m14 0a1.5 1.5 0 00-1.5-1.5H6.5a1.5 1.5 0 00-1.5 1.5m15 0v4.5a1.5 1.5 0 01-1.5 1.5H6.5a1.5 1.5 0 01-1.5-1.5V9.5\" />
                    </svg>
                    Ma voiture
                </a>
                <a href=\"";
            // line 135
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_events");
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "request", [], "any", false, false, false, 135), "get", ["_route"], "method", false, false, false, 135) == "app_conducteur_events")) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                    </svg>
                    Événements
                </a>
                <a href=\"";
            // line 141
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_participations_evenements");
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "request", [], "any", false, false, false, 141), "get", ["_route"], "method", false, false, false, 141) == "app_conducteur_participations_evenements")) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                    </svg>
                    Mes participations
                </a>
                <a href=\"";
            // line 147
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_participations_parraines");
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "request", [], "any", false, false, false, 147), "get", ["_route"], "method", false, false, false, 147) == "app_conducteur_participations_parraines")) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                    </svg>
                    Participations parrainées
                </a>
                <a href=\"";
            // line 153
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_reservations");
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "request", [], "any", false, false, false, 153), "get", ["_route"], "method", false, false, false, 153) == "app_conducteur_reservations")) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                    </svg>
                    Liste réservations
                </a>
            </nav>
            
            <div class=\"border-t border-gray-200 pt-4\">
                <h3 class=\"text-sm font-semibold text-gray-800 mb-3\">Statistiques</h3>
                <div class=\"space-y-3\">
                    <div class=\"flex justify-between items-center\">
                        <p class=\"text-xs text-gray-600\">Trajets réalisés</p>
                        <p class=\"text-xs font-medium\">";
            // line 166
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "tripsCount", [], "any", true, true, false, 166) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 166, $this->source); })()), "tripsCount", [], "any", false, false, false, 166)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 166, $this->source); })()), "tripsCount", [], "any", false, false, false, 166), "html", null, true)) : ("0"));
            yield "</p>
                    </div>
                    <div class=\"flex justify-between items-center\">
                        <p class=\"text-xs text-gray-600\">Note moyenne</p>
                        <p class=\"text-xs font-medium flex items-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1 text-yellow-500\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                            </svg>
                            ";
            // line 174
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "rating", [], "any", true, true, false, 174) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 174, $this->source); })()), "rating", [], "any", false, false, false, 174)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 174, $this->source); })()), "rating", [], "any", false, false, false, 174), "html", null, true)) : ("N/A"));
            yield "
                        </p>
                    </div>
                    <div class=\"flex justify-between items-center\">
                        <p class=\"text-xs text-gray-600\">Revenue estimé</p>
                        <p class=\"text-xs font-medium\">€0.00</p>
                    </div>
                </div>
            </div>
        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PASSAGER")) {
            // line 184
            yield "            <nav class=\"space-y-1 mb-6\">
                <a href=\"";
            // line 185
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_dashboard");
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "request", [], "any", false, false, false, 185), "get", ["_route"], "method", false, false, false, 185) == "app_passager_dashboard")) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\" />
                    </svg>
                    Dashboard
                </a>
                <a href=\"";
            // line 191
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_profile");
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "request", [], "any", false, false, false, 191), "get", ["_route"], "method", false, false, false, 191) == "app_passager_profile")) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                    </svg>
                    Profile
                </a>
                <a href=\"";
            // line 197
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_reclamation");
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 197, $this->source); })()), "request", [], "any", false, false, false, 197), "get", ["_route"], "method", false, false, false, 197) == "app_passager_reclamation")) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                    </svg>
                    Faire réclamation
                </a>
                <a href=\"";
            // line 203
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_avis");
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 203, $this->source); })()), "request", [], "any", false, false, false, 203), "get", ["_route"], "method", false, false, false, 203) == "app_passager_avis")) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\" />
                    </svg>
                    Ajouter avis
                </a>
                <a href=\"";
            // line 209
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_liste_annonce");
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 209, $this->source); })()), "request", [], "any", false, false, false, 209), "get", ["_route"], "method", false, false, false, 209) == "app_passager_liste_annonce")) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                    </svg>
                    Liste annonce
                </a>
                <a href=\"";
            // line 215
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_liste_trajet");
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 215, $this->source); })()), "request", [], "any", false, false, false, 215), "get", ["_route"], "method", false, false, false, 215) == "app_passager_liste_trajet")) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7\" />
                    </svg>
                    Liste de trajet
                </a>
                <a href=\"";
            // line 221
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_events");
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 221, $this->source); })()), "request", [], "any", false, false, false, 221), "get", ["_route"], "method", false, false, false, 221) == "app_passager_events")) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                    </svg>
                    Événements
                </a>
                <a href=\"";
            // line 227
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_mes_reservations");
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 227, $this->source); })()), "request", [], "any", false, false, false, 227), "get", ["_route"], "method", false, false, false, 227) == "app_passager_mes_reservations")) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                    </svg>
                    Mes réservations
                </a>
                <a href=\"";
            // line 233
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_historique_reservations");
            yield "\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 233, $this->source); })()), "request", [], "any", false, false, false, 233), "get", ["_route"], "method", false, false, false, 233) == "app_passager_historique_reservations")) {
                yield "bg-primary-ultra-light text-primary";
            } else {
                yield "text-gray-700 hover:bg-primary-ultra-light hover:text-primary";
            }
            yield " transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    Historique réservations
                </a>
            </nav>
            
            <div class=\"border-t border-gray-200 pt-4\">
                <h3 class=\"text-sm font-semibold text-gray-800 mb-3\">Aide</h3>
                <div class=\"space-y-3\">
                    <a href=\"#\" class=\"flex items-center text-xs text-gray-600 hover:text-primary\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        Centre d'aide
                    </a>
                    <a href=\"#\" class=\"flex items-center text-xs text-gray-600 hover:text-primary\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\" />
                        </svg>
                        Contacter le support
                    </a>
                    <a href=\"#\" class=\"flex items-center text-xs text-gray-600 hover:text-primary\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z\" />
                        </svg>
                        FAQs
                    </a>
                </div>
            </div>
        ";
        }
        // line 265
        yield "    </div>

    ";
        // line 268
        yield "    <div class=\"max-w-screen-2xl w-full mx-auto px-6 py-8\">
        ";
        // line 269
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 270
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 269
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 273
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

        // line 274
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menuToggle');
            const closeMenu = document.getElementById('closeMenu');
            const offcanvasMenu = document.querySelector('.offcanvas-menu');
            const offcanvasBackdrop = document.querySelector('.offcanvas-backdrop');
            const body = document.body;
            
            // Open menu
            menuToggle.addEventListener('click', function() {
                offcanvasMenu.classList.add('active');
                offcanvasBackdrop.classList.add('active');
                body.classList.add('menu-open');
            });
            
            // Close menu
            function closeOffcanvas() {
                offcanvasMenu.classList.remove('active');
                offcanvasBackdrop.classList.remove('active');
                body.classList.remove('menu-open');
            }
            
            closeMenu.addEventListener('click', closeOffcanvas);
            offcanvasBackdrop.addEventListener('click', closeOffcanvas);
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
        return "layouts/user_layout.html.twig";
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
        return array (  646 => 274,  633 => 273,  611 => 269,  599 => 270,  597 => 269,  594 => 268,  590 => 265,  549 => 233,  534 => 227,  519 => 221,  504 => 215,  489 => 209,  474 => 203,  459 => 197,  444 => 191,  429 => 185,  426 => 184,  413 => 174,  402 => 166,  380 => 153,  365 => 147,  350 => 141,  335 => 135,  315 => 128,  300 => 122,  285 => 116,  270 => 110,  255 => 104,  240 => 98,  237 => 97,  235 => 96,  229 => 92,  225 => 90,  217 => 87,  210 => 82,  206 => 80,  204 => 79,  200 => 78,  194 => 77,  191 => 76,  184 => 73,  181 => 72,  173 => 70,  171 => 69,  156 => 56,  146 => 47,  144 => 46,  131 => 45,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Offcanvas menu styles */
        .offcanvas-menu {
            position: fixed;
            top: 0;
            left: -350px;
            width: 350px;
            height: 100%;
            background: white;
            z-index: 1050;
            transition: all 0.3s ease;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            overflow-y: auto;
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
            z-index: 1040;
            display: none;
        }
        
        .offcanvas-backdrop.active {
            display: block;
        }
        
        body.menu-open {
            overflow: hidden;
        }
    </style>
{% endblock %}

{% block body %}
    {# Navbar Menu Button #}
    <div class=\"fixed top-4 left-4 z-50\">
        <button id=\"menuToggle\" class=\"flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-r from-primary to-primary-dark text-white shadow-lg hover:shadow-xl transition-all duration-300\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\" />
            </svg>
        </button>
    </div>

    {# Offcanvas Menu #}
    <div class=\"offcanvas-backdrop\"></div>
    <div class=\"offcanvas-menu glass-card bg-white/90 backdrop-blur-sm border border-white/30 p-6\">
        <div class=\"flex justify-between items-center mb-6\">
            <h2 class=\"text-xl font-bold text-gray-800\">Menu</h2>
            <button id=\"closeMenu\" class=\"text-gray-500 hover:text-gray-700\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                </svg>
            </button>
        </div>
        
        <div class=\"mb-6\">
            <div class=\"flex items-center mb-4\">
                {% if user.imagePath %}
                    <img src=\"{{ asset(user.imagePath) }}\" alt=\"{{ user.username }}\" class=\"w-12 h-12 rounded-full object-cover mr-3 border-2 border-primary-ultra-light\">
                {% else %}
                    <div class=\"w-12 h-12 rounded-full bg-gradient-to-r from-primary to-primary-dark flex items-center justify-center text-white text-xl font-bold mr-3\">
                        {{ user.prenom|first }}{{ user.nom|first }}
                    </div>
                {% endif %}
                <div>
                    <p class=\"font-medium text-gray-900\">{{ user.prenom }} {{ user.nom }}</p>
                    <p class=\"text-sm text-gray-500\">{{ user.email }}</p>
                    {% if is_granted('ROLE_ADMIN') %}
                        <p class=\"text-xs font-medium text-indigo-600\">Administrateur</p>
                    {% elseif is_granted('ROLE_CONDUCTEUR') %}
                        <p class=\"text-xs font-medium text-primary\">Conducteur</p>
                        <p class=\"text-xs text-yellow-500 flex items-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                            </svg>
                            {{ user.rating ?? 'N/A' }} ({{ user.tripsCount ?? '0' }} trips)
                        </p>
                    {% elseif is_granted('ROLE_PASSAGER') %}
                        <p class=\"text-xs font-medium text-blue-600\">Passager</p>
                    {% endif %}
                </div>
            </div>
        </div>
        
        {% if is_granted('ROLE_CONDUCTEUR') %}
            <nav class=\"space-y-1 mb-6\">
                <a href=\"{{ path('app_conducteur_dashboard') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_conducteur_dashboard' %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\" />
                    </svg>
                    Dashboard
                </a>
                <a href=\"{{ path('app_conducteur_profile') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_conducteur_profile' %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                    </svg>
                    Profile
                </a>
                <a href=\"{{ path('app_conducteur_reclamation') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_conducteur_reclamation' %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                    </svg>
                    Faire réclamation
                </a>
                <a href=\"{{ path('app_conducteur_liste_annonce') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_conducteur_liste_annonce' %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                    </svg>
                    Liste annonce
                </a>
                <a href=\"{{ path('app_conducteur_liste_trajet') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_conducteur_liste_trajet' %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7\" />
                    </svg>
                    Liste de trajet
                </a>
                <a href=\"{% if car is defined and car is not null %}{{ path('app_conducteur_voiture') }}{% else %}{{ path('app_conducteur_voiture_add') }}{% endif %}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') in ['app_conducteur_voiture', 'app_conducteur_voiture_add', 'app_conducteur_voiture_edit'] %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z\" />
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 14l-2-2H7L5 14m14-4.5v9.5a1 1 0 01-1 1H6a1 1 0 01-1-1V9.5m14 0a1.5 1.5 0 00-1.5-1.5H6.5a1.5 1.5 0 00-1.5 1.5m15 0v4.5a1.5 1.5 0 01-1.5 1.5H6.5a1.5 1.5 0 01-1.5-1.5V9.5\" />
                    </svg>
                    Ma voiture
                </a>
                <a href=\"{{ path('app_conducteur_events') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_conducteur_events' %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                    </svg>
                    Événements
                </a>
                <a href=\"{{ path('app_conducteur_participations_evenements') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_conducteur_participations_evenements' %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                    </svg>
                    Mes participations
                </a>
                <a href=\"{{ path('app_conducteur_participations_parraines') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_conducteur_participations_parraines' %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                    </svg>
                    Participations parrainées
                </a>
                <a href=\"{{ path('app_conducteur_reservations') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_conducteur_reservations' %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                    </svg>
                    Liste réservations
                </a>
            </nav>
            
            <div class=\"border-t border-gray-200 pt-4\">
                <h3 class=\"text-sm font-semibold text-gray-800 mb-3\">Statistiques</h3>
                <div class=\"space-y-3\">
                    <div class=\"flex justify-between items-center\">
                        <p class=\"text-xs text-gray-600\">Trajets réalisés</p>
                        <p class=\"text-xs font-medium\">{{ user.tripsCount ?? '0' }}</p>
                    </div>
                    <div class=\"flex justify-between items-center\">
                        <p class=\"text-xs text-gray-600\">Note moyenne</p>
                        <p class=\"text-xs font-medium flex items-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1 text-yellow-500\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                            </svg>
                            {{ user.rating ?? 'N/A' }}
                        </p>
                    </div>
                    <div class=\"flex justify-between items-center\">
                        <p class=\"text-xs text-gray-600\">Revenue estimé</p>
                        <p class=\"text-xs font-medium\">€0.00</p>
                    </div>
                </div>
            </div>
        {% elseif is_granted('ROLE_PASSAGER') %}
            <nav class=\"space-y-1 mb-6\">
                <a href=\"{{ path('app_passager_dashboard') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_passager_dashboard' %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\" />
                    </svg>
                    Dashboard
                </a>
                <a href=\"{{ path('app_passager_profile') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_passager_profile' %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                    </svg>
                    Profile
                </a>
                <a href=\"{{ path('app_passager_reclamation') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_passager_reclamation' %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                    </svg>
                    Faire réclamation
                </a>
                <a href=\"{{ path('app_passager_avis') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_passager_avis' %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\" />
                    </svg>
                    Ajouter avis
                </a>
                <a href=\"{{ path('app_passager_liste_annonce') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_passager_liste_annonce' %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                    </svg>
                    Liste annonce
                </a>
                <a href=\"{{ path('app_passager_liste_trajet') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_passager_liste_trajet' %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7\" />
                    </svg>
                    Liste de trajet
                </a>
                <a href=\"{{ path('app_passager_events') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_passager_events' %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                    </svg>
                    Événements
                </a>
                <a href=\"{{ path('app_passager_mes_reservations') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_passager_mes_reservations' %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                    </svg>
                    Mes réservations
                </a>
                <a href=\"{{ path('app_passager_historique_reservations') }}\" class=\"sidebar-link flex items-center px-4 py-3 text-sm font-medium rounded-lg {% if app.request.get('_route') == 'app_passager_historique_reservations' %}bg-primary-ultra-light text-primary{% else %}text-gray-700 hover:bg-primary-ultra-light hover:text-primary{% endif %} transition-all duration-200\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    Historique réservations
                </a>
            </nav>
            
            <div class=\"border-t border-gray-200 pt-4\">
                <h3 class=\"text-sm font-semibold text-gray-800 mb-3\">Aide</h3>
                <div class=\"space-y-3\">
                    <a href=\"#\" class=\"flex items-center text-xs text-gray-600 hover:text-primary\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        Centre d'aide
                    </a>
                    <a href=\"#\" class=\"flex items-center text-xs text-gray-600 hover:text-primary\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\" />
                        </svg>
                        Contacter le support
                    </a>
                    <a href=\"#\" class=\"flex items-center text-xs text-gray-600 hover:text-primary\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z\" />
                        </svg>
                        FAQs
                    </a>
                </div>
            </div>
        {% endif %}
    </div>

    {# Page Content #}
    <div class=\"max-w-screen-2xl w-full mx-auto px-6 py-8\">
        {% block content %}{% endblock %}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menuToggle');
            const closeMenu = document.getElementById('closeMenu');
            const offcanvasMenu = document.querySelector('.offcanvas-menu');
            const offcanvasBackdrop = document.querySelector('.offcanvas-backdrop');
            const body = document.body;
            
            // Open menu
            menuToggle.addEventListener('click', function() {
                offcanvasMenu.classList.add('active');
                offcanvasBackdrop.classList.add('active');
                body.classList.add('menu-open');
            });
            
            // Close menu
            function closeOffcanvas() {
                offcanvasMenu.classList.remove('active');
                offcanvasBackdrop.classList.remove('active');
                body.classList.remove('menu-open');
            }
            
            closeMenu.addEventListener('click', closeOffcanvas);
            offcanvasBackdrop.addEventListener('click', closeOffcanvas);
        });
    </script>
{% endblock %} 
", "layouts/user_layout.html.twig", "D:\\Covoituni_web-master\\templates\\layouts\\user_layout.html.twig");
    }
}
