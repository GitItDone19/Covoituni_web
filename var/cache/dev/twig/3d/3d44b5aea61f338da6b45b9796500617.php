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

/* user/list.html.twig */
class __TwigTemplate_6488735d8e4328052222aad7deb300ee extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/list.html.twig", 1);
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

        yield "Gestion des Utilisateurs";
        
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
        yield "    <div class=\"container mx-auto px-4 py-8 max-w-7xl\">
        <!-- Header with animation -->
        <div class=\"mb-10 animate-fade-in-down\">
            <h1 class=\"text-4xl font-extrabold text-gray-800 mb-2 bg-gradient-to-r from-primary to-blue-600 bg-clip-text text-transparent\">Gestion des Utilisateurs</h1>
            <p class=\"text-gray-600 text-lg\">Gérez tous les utilisateurs de la plateforme avec facilité</p>
            <div class=\"h-1 w-32 bg-gradient-to-r from-primary to-blue-600 rounded mt-4\"></div>
        </div>
        
        <!-- Alert messages with improved animations -->
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["success"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            yield "            <div class=\"mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded-r-xl shadow-md animate-fade-in transform transition-all duration-300 hover:scale-[1.01]\">
                <div class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-3 text-green-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <span class=\"font-medium\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "            
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", ["error"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            yield "            <div class=\"mb-6 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-r-xl shadow-md animate-fade-in transform transition-all duration-300 hover:scale-[1.01]\">
                <div class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-3 text-red-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z\" />
                    </svg>
                    <span class=\"font-medium\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "            
        <!-- Filter buttons with animations and improved styling -->
        <div class=\"mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 animate-fade-in\">
            <div class=\"flex flex-wrap gap-2\">
                <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" 
                   class=\"px-5 py-2.5 rounded-lg font-medium text-sm transform transition-all duration-300 hover:scale-105 shadow-sm ";
        // line 41
        if ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "query", [], "any", false, false, false, 41), "get", ["filter"], "method", false, false, false, 41))) {
            yield "bg-gradient-to-r from-primary to-blue-600 text-white";
        } else {
            yield "bg-white text-gray-700 border border-gray-300 hover:border-primary hover:text-primary";
        }
        yield "\">
                   <span class=\"flex items-center\">
                       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                           <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                       </svg>
                       Tous
                   </span>
                </a>
                <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["filter" => "admin"]);
        yield "\" 
                   class=\"px-5 py-2.5 rounded-lg font-medium text-sm transform transition-all duration-300 hover:scale-105 shadow-sm ";
        // line 50
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "query", [], "any", false, false, false, 50), "get", ["filter"], "method", false, false, false, 50) == "admin")) {
            yield "bg-gradient-to-r from-primary to-blue-600 text-white";
        } else {
            yield "bg-white text-gray-700 border border-gray-300 hover:border-primary hover:text-primary";
        }
        yield "\">
                   <span class=\"flex items-center\">
                       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                           <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z\" />
                       </svg>
                       Administrateurs
                   </span>
                </a>
                <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["filter" => "conducteur"]);
        yield "\" 
                   class=\"px-5 py-2.5 rounded-lg font-medium text-sm transform transition-all duration-300 hover:scale-105 shadow-sm ";
        // line 59
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "query", [], "any", false, false, false, 59), "get", ["filter"], "method", false, false, false, 59) == "conducteur")) {
            yield "bg-gradient-to-r from-primary to-blue-600 text-white";
        } else {
            yield "bg-white text-gray-700 border border-gray-300 hover:border-primary hover:text-primary";
        }
        yield "\">
                   <span class=\"flex items-center\">
                       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                           <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4\" />
                       </svg>
                       Conducteurs
                   </span>
                </a>
                <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["filter" => "passager"]);
        yield "\" 
                   class=\"px-5 py-2.5 rounded-lg font-medium text-sm transform transition-all duration-300 hover:scale-105 shadow-sm ";
        // line 68
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "query", [], "any", false, false, false, 68), "get", ["filter"], "method", false, false, false, 68) == "passager")) {
            yield "bg-gradient-to-r from-primary to-blue-600 text-white";
        } else {
            yield "bg-white text-gray-700 border border-gray-300 hover:border-primary hover:text-primary";
        }
        yield "\">
                   <span class=\"flex items-center\">
                       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                           <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                       </svg>
                       Passagers
                   </span>
                </a>
            </div>
            
            <!-- Enhanced search form -->
            <form method=\"get\" class=\"relative text-gray-600 w-full sm:w-auto group\">
                <div class=\"relative\">
                    <input class=\"border-2 border-gray-300 bg-white h-12 px-5 pl-12 pr-10 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary w-full min-w-[300px] transition-all duration-200 shadow-sm\"
                        type=\"search\" name=\"search\" value=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "request", [], "any", false, false, false, 82), "query", [], "any", false, false, false, 82), "get", ["search"], "method", false, false, false, 82), "html", null, true);
        yield "\" placeholder=\"Rechercher un utilisateur...\">
                    <div class=\"absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 group-focus-within:text-primary transition-colors duration-200\">
                        <svg class=\"h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                            <path fill-rule=\"evenodd\" d=\"M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z\" clip-rule=\"evenodd\" />
                        </svg>
                    </div>
                    <button type=\"submit\" class=\"absolute right-3 top-1/2 transform -translate-y-1/2 bg-primary text-white rounded-md p-1.5 opacity-90 hover:opacity-100 transition-opacity duration-200\">
                        <svg class=\"h-4 w-4\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                            <path fill-rule=\"evenodd\" d=\"M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z\" clip-rule=\"evenodd\" />
                        </svg>
                    </button>
                </div>
                        </form>
                </div>
                
        <!-- User cards with enhanced design and animations -->
        ";
        // line 98
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 98, $this->source); })())) > 0)) {
            // line 99
            yield "            <div class=\"space-y-6 mb-8\">
                            ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 100, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 101
                yield "                    <div class=\"bg-white rounded-xl shadow-lg p-6 transition-all duration-500 hover:shadow-xl border border-gray-100 transform hover:-translate-y-1 animate-fade-in-up\" style=\"animation-delay: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 101) * 0.1), "html", null, true);
                yield "s\">
                        <div class=\"flex flex-col md:flex-row md:items-center md:justify-between gap-6\">
                            <div class=\"flex items-center space-x-5\">
                                <div class=\"h-20 w-20 flex-shrink-0 rounded-full overflow-hidden shadow-md border-2 border-white transform transition-transform duration-500 hover:scale-110\">
                                            ";
                // line 105
                if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "imagePath", [], "any", false, false, false, 105)) {
                    // line 106
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "imagePath", [], "any", false, false, false, 106)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 106), "html", null, true);
                    yield "\" class=\"h-full w-full object-cover\">
                                            ";
                } else {
                    // line 108
                    yield "                                        <div class=\"h-full w-full flex items-center justify-center bg-gradient-to-r from-primary to-blue-600 text-white text-2xl uppercase font-bold\">
                                                    ";
                    // line 109
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 109)), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 109)), "html", null, true);
                    yield "
                                                </div>
                                            ";
                }
                // line 112
                yield "                                </div>
                                <div>
                                    <h3 class=\"text-2xl font-bold text-gray-800 mb-1 group\">
                                        ";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 115), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 115), "html", null, true);
                yield "
                                        <span class=\"inline-block transition-all duration-300 group-hover:translate-x-1\">→</span>
                                    </h3>
                                    <div class=\"text-md text-gray-500 mb-2\">";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 118), "html", null, true);
                yield "</div>
                                    
                                    <div class=\"flex flex-wrap items-center gap-3 mt-2\">
                                        <div class=\"text-sm text-gray-700 flex items-center bg-gray-100 rounded-full px-3 py-1\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-500 mr-1.5\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                                <path fill-rule=\"evenodd\" d=\"M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z\" clip-rule=\"evenodd\" />
                                            </svg>
                                            <span>@";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 125), "html", null, true);
                yield "</span>
                                        </div>
                                        
                                        ";
                // line 128
                if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "tel", [], "any", false, false, false, 128)) {
                    // line 129
                    yield "                                        <div class=\"text-sm text-gray-700 flex items-center bg-gray-100 rounded-full px-3 py-1\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-500 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z\" />
                                            </svg>
                                            <span>";
                    // line 133
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "tel", [], "any", false, false, false, 133), "html", null, true);
                    yield "</span>
                                        </div>
                                        ";
                }
                // line 136
                yield "                                        
                                        <div class=\"text-sm text-gray-700 flex items-center bg-gray-100 rounded-full px-3 py-1\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-500 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                            </svg>
                                            <span>Inscrit le ";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 141), "d/m/Y"), "html", null, true);
                yield "</span>
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                            
                            <div class=\"flex flex-col items-end gap-2\">
                                        ";
                // line 148
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleCode", [], "any", false, false, false, 148) == "ADMIN")) {
                    // line 149
                    yield "                                    <span class=\"inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-gradient-to-r from-red-500 to-pink-500 text-white shadow-sm animate-pulse\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z\" />
                                        </svg>
                                        Admin
                                    </span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 155
$context["user"], "roleCode", [], "any", false, false, false, 155) == "CONDUCTEUR")) {
                    // line 156
                    yield "                                    <span class=\"inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-sm\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                                        </svg>
                                        Conducteur
                                    </span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 162
$context["user"], "roleCode", [], "any", false, false, false, 162) == "PASSAGER")) {
                    // line 163
                    yield "                                    <span class=\"inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-gradient-to-r from-green-500 to-teal-500 text-white shadow-sm\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                                        </svg>
                                        Passager
                                    </span>
                                        ";
                } else {
                    // line 170
                    yield "                                    <span class=\"inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-gradient-to-r from-gray-500 to-gray-700 text-white shadow-sm\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                                        </svg>
                                        Utilisateur
                                    </span>
                                ";
                }
                // line 177
                yield "                                
                                ";
                // line 178
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["bannedStatuses"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 178), [], "array", true, true, false, 178) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["bannedStatuses"]) || array_key_exists("bannedStatuses", $context) ? $context["bannedStatuses"] : (function () { throw new RuntimeError('Variable "bannedStatuses" does not exist.', 178, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 178), [], "array", false, false, false, 178))) {
                    // line 179
                    yield "                                    <span class=\"inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-red-100 text-red-800 shadow-sm animate-pulse\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z\" />
                                        </svg>
                                        Compte banni
                                    </span>
                                        ";
                }
                // line 186
                yield "                                        </div>
                </div>
                
                        <div class=\"flex justify-end mt-6 pt-4 border-t border-gray-100 gap-3\">
                            ";
                // line 190
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleCode", [], "any", false, false, false, 190) != "ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN"))) {
                    // line 191
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit_roles", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 191)]), "html", null, true);
                    yield "\" class=\"text-center text-sm font-medium text-indigo-600 hover:text-white bg-indigo-50 hover:bg-indigo-600 py-2.5 px-5 rounded-lg transition-colors duration-300 shadow-sm hover:shadow\">
                                    <span class=\"flex items-center justify-center\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z\" />
                                        </svg>
                                        Modifier rôle
                                    </span>
                                </a>
                                
                                <form method=\"post\" action=\"";
                    // line 200
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_ban", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 200)]), "html", null, true);
                    yield "\" class=\"inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 201
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("ban-user-" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 201))), "html", null, true);
                    yield "\">
                                    <button type=\"submit\" class=\"text-center text-sm font-medium transition-all duration-300 shadow-sm hover:shadow py-2.5 px-5 rounded-lg transform hover:scale-105 ";
                    // line 202
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["bannedStatuses"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 202), [], "array", true, true, false, 202) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["bannedStatuses"]) || array_key_exists("bannedStatuses", $context) ? $context["bannedStatuses"] : (function () { throw new RuntimeError('Variable "bannedStatuses" does not exist.', 202, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 202), [], "array", false, false, false, 202))) {
                        yield "text-green-600 hover:text-white bg-green-50 hover:bg-green-600";
                    } else {
                        yield "text-amber-600 hover:text-white bg-amber-50 hover:bg-amber-600";
                    }
                    yield "\">
                                        <span class=\"flex items-center justify-center\">
                                            ";
                    // line 204
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["bannedStatuses"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 204), [], "array", true, true, false, 204) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["bannedStatuses"]) || array_key_exists("bannedStatuses", $context) ? $context["bannedStatuses"] : (function () { throw new RuntimeError('Variable "bannedStatuses" does not exist.', 204, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 204), [], "array", false, false, false, 204))) {
                        // line 205
                        yield "                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                                </svg>
                                                Débloquer
                                            ";
                    } else {
                        // line 210
                        yield "                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636\" />
                                                </svg>
                                                Bannir
                                            ";
                    }
                    // line 215
                    yield "                                        </span>
                                    </button>
                                </form>
                                
                                <form method=\"post\" action=\"";
                    // line 219
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 219)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur? Cette action est irréversible.');\" class=\"inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 220
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-user-" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 220))), "html", null, true);
                    yield "\">
                                    <button type=\"submit\" class=\"text-center text-sm font-medium text-red-600 hover:text-white bg-red-50 hover:bg-red-600 py-2.5 px-5 rounded-lg transition-colors duration-300 shadow-sm hover:shadow transform hover:scale-105\">
                                        <span class=\"flex items-center justify-center\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                                            </svg>
                                            Supprimer
                                        </span>
                                    </button>
                                </form>
                            ";
                } else {
                    // line 231
                    yield "                                <div class=\"text-center text-sm text-gray-500 bg-gray-50 py-2.5 px-5 rounded-lg shadow-sm\">
                                    <span class=\"flex items-center justify-center\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z\" />
                                        </svg>
                                        Administrateur protégé
                                    </span>
                                </div>
                            ";
                }
                // line 240
                yield "                        </div>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            yield "                        </div>
                        
            <!-- Enhanced pagination -->
            <div class=\"flex justify-center mt-10\">
                <nav class=\"relative z-0 inline-flex rounded-md shadow-sm -space-x-px\" aria-label=\"Pagination\">
                    ";
            // line 248
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 248, $this->source); })()) > 1)) {
                // line 249
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 249, $this->source); })()) - 1), "search" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 249, $this->source); })()), "request", [], "any", false, false, false, 249), "query", [], "any", false, false, false, 249), "get", ["search"], "method", false, false, false, 249), "filter" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 249, $this->source); })()), "request", [], "any", false, false, false, 249), "query", [], "any", false, false, false, 249), "get", ["filter"], "method", false, false, false, 249)]), "html", null, true);
                yield "\" 
                           class=\"relative inline-flex items-center px-4 py-2.5 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-colors duration-200\">
                                        <span class=\"sr-only\">Previous</span>
                                        <svg class=\"h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                                            <path fill-rule=\"evenodd\" d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\" clip-rule=\"evenodd\" />
                                        </svg>
                                    </a>
                                ";
            }
            // line 257
            yield "                                
                                ";
            // line 258
            if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 258, $this->source); })()) > 0)) {
                // line 259
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(max(1, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 259, $this->source); })()) - 2)), min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 259, $this->source); })()), ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 259, $this->source); })()) + 2))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 260
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["page" => $context["i"], "search" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 260, $this->source); })()), "request", [], "any", false, false, false, 260), "query", [], "any", false, false, false, 260), "get", ["search"], "method", false, false, false, 260), "filter" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 260, $this->source); })()), "request", [], "any", false, false, false, 260), "query", [], "any", false, false, false, 260), "get", ["filter"], "method", false, false, false, 260)]), "html", null, true);
                    yield "\" 
                               class=\"relative inline-flex items-center px-5 py-2.5 border border-gray-300 text-sm font-medium transition-all duration-200 ";
                    // line 261
                    if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 261, $this->source); })()) == $context["i"])) {
                        yield "z-10 bg-primary-100 border-primary-300 text-primary-700 hover:bg-primary-200";
                    } else {
                        yield "bg-white text-gray-700 hover:bg-gray-50";
                    }
                    yield "\">
                                            ";
                    // line 262
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "
                                        </a>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 265
                yield "                                ";
            }
            // line 266
            yield "                                
                    ";
            // line 267
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 267, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 267, $this->source); })()))) {
                // line 268
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 268, $this->source); })()) + 1), "search" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 268, $this->source); })()), "request", [], "any", false, false, false, 268), "query", [], "any", false, false, false, 268), "get", ["search"], "method", false, false, false, 268), "filter" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 268, $this->source); })()), "request", [], "any", false, false, false, 268), "query", [], "any", false, false, false, 268), "get", ["filter"], "method", false, false, false, 268)]), "html", null, true);
                yield "\" 
                           class=\"relative inline-flex items-center px-4 py-2.5 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-colors duration-200\">
                                        <span class=\"sr-only\">Next</span>
                                        <svg class=\"h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                                            <path fill-rule=\"evenodd\" d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\" clip-rule=\"evenodd\" />
                                        </svg>
                                    </a>
                                ";
            }
            // line 276
            yield "                            </nav>
                        </div>
        ";
        } else {
            // line 279
            yield "            <!-- Empty state with animation -->
            <div class=\"bg-white p-10 rounded-xl shadow-xl text-center max-w-2xl mx-auto animate-fade-in-up\">
                <div class=\"w-24 h-24 bg-gray-100 rounded-full mx-auto mb-6 flex items-center justify-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                    </svg>
                    </div>
                <h3 class=\"text-2xl font-bold text-gray-800 mb-3\">Aucun utilisateur trouvé</h3>
                <p class=\"text-gray-600 mb-8 max-w-md mx-auto\">Il n'y a pas d'utilisateurs correspondant à vos critères de recherche.</p>
                <a href=\"";
            // line 288
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\" class=\"inline-flex items-center px-5 py-3 bg-primary text-white font-medium rounded-lg shadow-md hover:bg-primary-dark transition-colors duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour à tous les utilisateurs
                </a>
                </div>
        ";
        }
        // line 296
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 299
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

        // line 300
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translate3d(0, -30px, 0);
        }
        to {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translate3d(0, 30px, 0);
        }
        to {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .animate-fade-in-down {
        animation: fadeInDown 0.5s ease-out forwards;
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.5s ease-out forwards;
    }

    .animate-fade-in {
        animation: fadeIn 0.5s ease-out forwards;
    }
</style>
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
        return "user/list.html.twig";
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
        return array (  658 => 300,  645 => 299,  633 => 296,  622 => 288,  611 => 279,  606 => 276,  594 => 268,  592 => 267,  589 => 266,  586 => 265,  577 => 262,  569 => 261,  564 => 260,  559 => 259,  557 => 258,  554 => 257,  542 => 249,  540 => 248,  533 => 243,  517 => 240,  506 => 231,  492 => 220,  488 => 219,  482 => 215,  475 => 210,  468 => 205,  466 => 204,  457 => 202,  453 => 201,  449 => 200,  436 => 191,  434 => 190,  428 => 186,  419 => 179,  417 => 178,  414 => 177,  405 => 170,  396 => 163,  394 => 162,  386 => 156,  384 => 155,  376 => 149,  374 => 148,  364 => 141,  357 => 136,  351 => 133,  345 => 129,  343 => 128,  337 => 125,  327 => 118,  319 => 115,  314 => 112,  307 => 109,  304 => 108,  296 => 106,  294 => 105,  286 => 101,  269 => 100,  266 => 99,  264 => 98,  245 => 82,  224 => 68,  220 => 67,  205 => 59,  201 => 58,  186 => 50,  182 => 49,  167 => 41,  163 => 40,  157 => 36,  147 => 32,  140 => 27,  136 => 26,  133 => 25,  123 => 21,  116 => 16,  112 => 15,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Utilisateurs{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8 max-w-7xl\">
        <!-- Header with animation -->
        <div class=\"mb-10 animate-fade-in-down\">
            <h1 class=\"text-4xl font-extrabold text-gray-800 mb-2 bg-gradient-to-r from-primary to-blue-600 bg-clip-text text-transparent\">Gestion des Utilisateurs</h1>
            <p class=\"text-gray-600 text-lg\">Gérez tous les utilisateurs de la plateforme avec facilité</p>
            <div class=\"h-1 w-32 bg-gradient-to-r from-primary to-blue-600 rounded mt-4\"></div>
        </div>
        
        <!-- Alert messages with improved animations -->
        {% for message in app.flashes('success') %}
            <div class=\"mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded-r-xl shadow-md animate-fade-in transform transition-all duration-300 hover:scale-[1.01]\">
                <div class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-3 text-green-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <span class=\"font-medium\">{{ message }}</span>
                </div>
                </div>
            {% endfor %}
            
        {% for message in app.flashes('error') %}
            <div class=\"mb-6 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-r-xl shadow-md animate-fade-in transform transition-all duration-300 hover:scale-[1.01]\">
                <div class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-3 text-red-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z\" />
                    </svg>
                    <span class=\"font-medium\">{{ message }}</span>
                </div>
                </div>
            {% endfor %}
            
        <!-- Filter buttons with animations and improved styling -->
        <div class=\"mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 animate-fade-in\">
            <div class=\"flex flex-wrap gap-2\">
                <a href=\"{{ path('app_admin_users') }}\" 
                   class=\"px-5 py-2.5 rounded-lg font-medium text-sm transform transition-all duration-300 hover:scale-105 shadow-sm {% if app.request.query.get('filter') is null %}bg-gradient-to-r from-primary to-blue-600 text-white{% else %}bg-white text-gray-700 border border-gray-300 hover:border-primary hover:text-primary{% endif %}\">
                   <span class=\"flex items-center\">
                       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                           <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                       </svg>
                       Tous
                   </span>
                </a>
                <a href=\"{{ path('app_admin_users', {'filter': 'admin'}) }}\" 
                   class=\"px-5 py-2.5 rounded-lg font-medium text-sm transform transition-all duration-300 hover:scale-105 shadow-sm {% if app.request.query.get('filter') == 'admin' %}bg-gradient-to-r from-primary to-blue-600 text-white{% else %}bg-white text-gray-700 border border-gray-300 hover:border-primary hover:text-primary{% endif %}\">
                   <span class=\"flex items-center\">
                       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                           <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z\" />
                       </svg>
                       Administrateurs
                   </span>
                </a>
                <a href=\"{{ path('app_admin_users', {'filter': 'conducteur'}) }}\" 
                   class=\"px-5 py-2.5 rounded-lg font-medium text-sm transform transition-all duration-300 hover:scale-105 shadow-sm {% if app.request.query.get('filter') == 'conducteur' %}bg-gradient-to-r from-primary to-blue-600 text-white{% else %}bg-white text-gray-700 border border-gray-300 hover:border-primary hover:text-primary{% endif %}\">
                   <span class=\"flex items-center\">
                       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                           <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4\" />
                       </svg>
                       Conducteurs
                   </span>
                </a>
                <a href=\"{{ path('app_admin_users', {'filter': 'passager'}) }}\" 
                   class=\"px-5 py-2.5 rounded-lg font-medium text-sm transform transition-all duration-300 hover:scale-105 shadow-sm {% if app.request.query.get('filter') == 'passager' %}bg-gradient-to-r from-primary to-blue-600 text-white{% else %}bg-white text-gray-700 border border-gray-300 hover:border-primary hover:text-primary{% endif %}\">
                   <span class=\"flex items-center\">
                       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                           <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                       </svg>
                       Passagers
                   </span>
                </a>
            </div>
            
            <!-- Enhanced search form -->
            <form method=\"get\" class=\"relative text-gray-600 w-full sm:w-auto group\">
                <div class=\"relative\">
                    <input class=\"border-2 border-gray-300 bg-white h-12 px-5 pl-12 pr-10 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary w-full min-w-[300px] transition-all duration-200 shadow-sm\"
                        type=\"search\" name=\"search\" value=\"{{ app.request.query.get('search') }}\" placeholder=\"Rechercher un utilisateur...\">
                    <div class=\"absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 group-focus-within:text-primary transition-colors duration-200\">
                        <svg class=\"h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                            <path fill-rule=\"evenodd\" d=\"M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z\" clip-rule=\"evenodd\" />
                        </svg>
                    </div>
                    <button type=\"submit\" class=\"absolute right-3 top-1/2 transform -translate-y-1/2 bg-primary text-white rounded-md p-1.5 opacity-90 hover:opacity-100 transition-opacity duration-200\">
                        <svg class=\"h-4 w-4\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                            <path fill-rule=\"evenodd\" d=\"M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z\" clip-rule=\"evenodd\" />
                        </svg>
                    </button>
                </div>
                        </form>
                </div>
                
        <!-- User cards with enhanced design and animations -->
        {% if users|length > 0 %}
            <div class=\"space-y-6 mb-8\">
                            {% for user in users %}
                    <div class=\"bg-white rounded-xl shadow-lg p-6 transition-all duration-500 hover:shadow-xl border border-gray-100 transform hover:-translate-y-1 animate-fade-in-up\" style=\"animation-delay: {{ loop.index0 * 0.1 }}s\">
                        <div class=\"flex flex-col md:flex-row md:items-center md:justify-between gap-6\">
                            <div class=\"flex items-center space-x-5\">
                                <div class=\"h-20 w-20 flex-shrink-0 rounded-full overflow-hidden shadow-md border-2 border-white transform transition-transform duration-500 hover:scale-110\">
                                            {% if user.imagePath %}
                                        <img src=\"{{ asset(user.imagePath) }}\" alt=\"{{ user.username }}\" class=\"h-full w-full object-cover\">
                                            {% else %}
                                        <div class=\"h-full w-full flex items-center justify-center bg-gradient-to-r from-primary to-blue-600 text-white text-2xl uppercase font-bold\">
                                                    {{ user.prenom|first }}{{ user.nom|first }}
                                                </div>
                                            {% endif %}
                                </div>
                                <div>
                                    <h3 class=\"text-2xl font-bold text-gray-800 mb-1 group\">
                                        {{ user.prenom }} {{ user.nom }}
                                        <span class=\"inline-block transition-all duration-300 group-hover:translate-x-1\">→</span>
                                    </h3>
                                    <div class=\"text-md text-gray-500 mb-2\">{{ user.email }}</div>
                                    
                                    <div class=\"flex flex-wrap items-center gap-3 mt-2\">
                                        <div class=\"text-sm text-gray-700 flex items-center bg-gray-100 rounded-full px-3 py-1\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-500 mr-1.5\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                                <path fill-rule=\"evenodd\" d=\"M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z\" clip-rule=\"evenodd\" />
                                            </svg>
                                            <span>@{{ user.username }}</span>
                                        </div>
                                        
                                        {% if user.tel %}
                                        <div class=\"text-sm text-gray-700 flex items-center bg-gray-100 rounded-full px-3 py-1\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-500 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z\" />
                                            </svg>
                                            <span>{{ user.tel }}</span>
                                        </div>
                                        {% endif %}
                                        
                                        <div class=\"text-sm text-gray-700 flex items-center bg-gray-100 rounded-full px-3 py-1\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-gray-500 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                            </svg>
                                            <span>Inscrit le {{ user.createdAt|date('d/m/Y') }}</span>
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                            
                            <div class=\"flex flex-col items-end gap-2\">
                                        {% if user.roleCode == 'ADMIN' %}
                                    <span class=\"inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-gradient-to-r from-red-500 to-pink-500 text-white shadow-sm animate-pulse\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z\" />
                                        </svg>
                                        Admin
                                    </span>
                                        {% elseif user.roleCode == 'CONDUCTEUR' %}
                                    <span class=\"inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-sm\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                                        </svg>
                                        Conducteur
                                    </span>
                                        {% elseif user.roleCode == 'PASSAGER' %}
                                    <span class=\"inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-gradient-to-r from-green-500 to-teal-500 text-white shadow-sm\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                                        </svg>
                                        Passager
                                    </span>
                                        {% else %}
                                    <span class=\"inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-gradient-to-r from-gray-500 to-gray-700 text-white shadow-sm\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                                        </svg>
                                        Utilisateur
                                    </span>
                                {% endif %}
                                
                                {% if bannedStatuses[user.id] is defined and bannedStatuses[user.id] %}
                                    <span class=\"inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-red-100 text-red-800 shadow-sm animate-pulse\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z\" />
                                        </svg>
                                        Compte banni
                                    </span>
                                        {% endif %}
                                        </div>
                </div>
                
                        <div class=\"flex justify-end mt-6 pt-4 border-t border-gray-100 gap-3\">
                            {% if user.roleCode != 'ADMIN' or is_granted('ROLE_SUPER_ADMIN') %}
                                <a href=\"{{ path('app_user_edit_roles', {'id': user.id}) }}\" class=\"text-center text-sm font-medium text-indigo-600 hover:text-white bg-indigo-50 hover:bg-indigo-600 py-2.5 px-5 rounded-lg transition-colors duration-300 shadow-sm hover:shadow\">
                                    <span class=\"flex items-center justify-center\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z\" />
                                        </svg>
                                        Modifier rôle
                                    </span>
                                </a>
                                
                                <form method=\"post\" action=\"{{ path('app_admin_user_ban', {'id': user.id}) }}\" class=\"inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('ban-user-' ~ user.id) }}\">
                                    <button type=\"submit\" class=\"text-center text-sm font-medium transition-all duration-300 shadow-sm hover:shadow py-2.5 px-5 rounded-lg transform hover:scale-105 {% if bannedStatuses[user.id] is defined and bannedStatuses[user.id] %}text-green-600 hover:text-white bg-green-50 hover:bg-green-600{% else %}text-amber-600 hover:text-white bg-amber-50 hover:bg-amber-600{% endif %}\">
                                        <span class=\"flex items-center justify-center\">
                                            {% if bannedStatuses[user.id] is defined and bannedStatuses[user.id] %}
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                                </svg>
                                                Débloquer
                                            {% else %}
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636\" />
                                                </svg>
                                                Bannir
                                            {% endif %}
                                        </span>
                                    </button>
                                </form>
                                
                                <form method=\"post\" action=\"{{ path('app_admin_user_delete', {'id': user.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur? Cette action est irréversible.');\" class=\"inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-user-' ~ user.id) }}\">
                                    <button type=\"submit\" class=\"text-center text-sm font-medium text-red-600 hover:text-white bg-red-50 hover:bg-red-600 py-2.5 px-5 rounded-lg transition-colors duration-300 shadow-sm hover:shadow transform hover:scale-105\">
                                        <span class=\"flex items-center justify-center\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                                            </svg>
                                            Supprimer
                                        </span>
                                    </button>
                                </form>
                            {% else %}
                                <div class=\"text-center text-sm text-gray-500 bg-gray-50 py-2.5 px-5 rounded-lg shadow-sm\">
                                    <span class=\"flex items-center justify-center\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z\" />
                                        </svg>
                                        Administrateur protégé
                                    </span>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                {% endfor %}
                        </div>
                        
            <!-- Enhanced pagination -->
            <div class=\"flex justify-center mt-10\">
                <nav class=\"relative z-0 inline-flex rounded-md shadow-sm -space-x-px\" aria-label=\"Pagination\">
                    {% if page > 1 %}
                        <a href=\"{{ path('app_admin_users', {'page': page - 1, 'search': app.request.query.get('search'), 'filter': app.request.query.get('filter')}) }}\" 
                           class=\"relative inline-flex items-center px-4 py-2.5 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-colors duration-200\">
                                        <span class=\"sr-only\">Previous</span>
                                        <svg class=\"h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                                            <path fill-rule=\"evenodd\" d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\" clip-rule=\"evenodd\" />
                                        </svg>
                                    </a>
                                {% endif %}
                                
                                {% if totalPages > 0 %}
                        {% for i in max(1, page - 2)..min(totalPages, page + 2) %}
                            <a href=\"{{ path('app_admin_users', {'page': i, 'search': app.request.query.get('search'), 'filter': app.request.query.get('filter')}) }}\" 
                               class=\"relative inline-flex items-center px-5 py-2.5 border border-gray-300 text-sm font-medium transition-all duration-200 {% if page == i %}z-10 bg-primary-100 border-primary-300 text-primary-700 hover:bg-primary-200{% else %}bg-white text-gray-700 hover:bg-gray-50{% endif %}\">
                                            {{ i }}
                                        </a>
                                    {% endfor %}
                                {% endif %}
                                
                    {% if page < totalPages %}
                        <a href=\"{{ path('app_admin_users', {'page': page + 1, 'search': app.request.query.get('search'), 'filter': app.request.query.get('filter')}) }}\" 
                           class=\"relative inline-flex items-center px-4 py-2.5 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-colors duration-200\">
                                        <span class=\"sr-only\">Next</span>
                                        <svg class=\"h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                                            <path fill-rule=\"evenodd\" d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\" clip-rule=\"evenodd\" />
                                        </svg>
                                    </a>
                                {% endif %}
                            </nav>
                        </div>
        {% else %}
            <!-- Empty state with animation -->
            <div class=\"bg-white p-10 rounded-xl shadow-xl text-center max-w-2xl mx-auto animate-fade-in-up\">
                <div class=\"w-24 h-24 bg-gray-100 rounded-full mx-auto mb-6 flex items-center justify-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                    </svg>
                    </div>
                <h3 class=\"text-2xl font-bold text-gray-800 mb-3\">Aucun utilisateur trouvé</h3>
                <p class=\"text-gray-600 mb-8 max-w-md mx-auto\">Il n'y a pas d'utilisateurs correspondant à vos critères de recherche.</p>
                <a href=\"{{ path('app_admin_users') }}\" class=\"inline-flex items-center px-5 py-3 bg-primary text-white font-medium rounded-lg shadow-md hover:bg-primary-dark transition-colors duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour à tous les utilisateurs
                </a>
                </div>
        {% endif %}
    </div>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translate3d(0, -30px, 0);
        }
        to {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translate3d(0, 30px, 0);
        }
        to {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .animate-fade-in-down {
        animation: fadeInDown 0.5s ease-out forwards;
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.5s ease-out forwards;
    }

    .animate-fade-in {
        animation: fadeIn 0.5s ease-out forwards;
    }
</style>
{% endblock %} ", "user/list.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\user\\list.html.twig");
    }
}
