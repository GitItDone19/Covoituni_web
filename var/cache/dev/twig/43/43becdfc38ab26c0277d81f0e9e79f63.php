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

/* admin/reclamation/index.html.twig */
class __TwigTemplate_492048731093d11def3e36afe9846088 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/reclamation/index.html.twig", 1);
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

        yield "Administration des réclamations";
        
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
            <h1 class=\"text-4xl font-extrabold text-gray-800 mb-2 bg-gradient-to-r from-primary to-blue-600 bg-clip-text text-transparent\">Gestion des réclamations</h1>
            <p class=\"text-gray-600 text-lg\">Visualisez et gérez toutes les réclamations des utilisateurs</p>
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_index");
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
                           <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10\" />
                       </svg>
                       Toutes
                   </span>
                </a>
                <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_index", ["filter" => "pending"]);
        yield "\" 
                   class=\"px-5 py-2.5 rounded-lg font-medium text-sm transform transition-all duration-300 hover:scale-105 shadow-sm ";
        // line 50
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "query", [], "any", false, false, false, 50), "get", ["filter"], "method", false, false, false, 50) == "pending")) {
            yield "bg-gradient-to-r from-yellow-400 to-amber-500 text-white";
        } else {
            yield "bg-white text-gray-700 border border-gray-300 hover:border-yellow-400 hover:text-yellow-600";
        }
        yield "\">
                   <span class=\"flex items-center\">
                       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                           <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                       </svg>
                       En attente
                   </span>
                </a>
                <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_index", ["filter" => "in_progress"]);
        yield "\" 
                   class=\"px-5 py-2.5 rounded-lg font-medium text-sm transform transition-all duration-300 hover:scale-105 shadow-sm ";
        // line 59
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "query", [], "any", false, false, false, 59), "get", ["filter"], "method", false, false, false, 59) == "in_progress")) {
            yield "bg-gradient-to-r from-blue-400 to-indigo-500 text-white";
        } else {
            yield "bg-white text-gray-700 border border-gray-300 hover:border-blue-400 hover:text-blue-600";
        }
        yield "\">
                   <span class=\"flex items-center\">
                       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                           <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15\" />
                       </svg>
                       En cours
                   </span>
                </a>
                <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_index", ["filter" => "resolved"]);
        yield "\" 
                   class=\"px-5 py-2.5 rounded-lg font-medium text-sm transform transition-all duration-300 hover:scale-105 shadow-sm ";
        // line 68
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "query", [], "any", false, false, false, 68), "get", ["filter"], "method", false, false, false, 68) == "resolved")) {
            yield "bg-gradient-to-r from-green-400 to-teal-500 text-white";
        } else {
            yield "bg-white text-gray-700 border border-gray-300 hover:border-green-400 hover:text-green-600";
        }
        yield "\">
                   <span class=\"flex items-center\">
                       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                           <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                       </svg>
                       Résolues
                   </span>
                </a>
                <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_index", ["filter" => "rejected"]);
        yield "\" 
                   class=\"px-5 py-2.5 rounded-lg font-medium text-sm transform transition-all duration-300 hover:scale-105 shadow-sm ";
        // line 77
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "request", [], "any", false, false, false, 77), "query", [], "any", false, false, false, 77), "get", ["filter"], "method", false, false, false, 77) == "rejected")) {
            yield "bg-gradient-to-r from-red-400 to-pink-500 text-white";
        } else {
            yield "bg-white text-gray-700 border border-gray-300 hover:border-red-400 hover:text-red-600";
        }
        yield "\">
                   <span class=\"flex items-center\">
                       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                           <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                       </svg>
                       Rejetées
                   </span>
                </a>
            </div>
            
            <!-- Enhanced search form -->
            <form method=\"get\" class=\"relative text-gray-600 w-full sm:w-auto group\">
                <div class=\"relative\">
                    <input class=\"border-2 border-gray-300 bg-white h-11 px-5 pl-12 pr-10 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary w-full min-w-[300px] transition-all duration-200 shadow-sm\"
                        type=\"search\" name=\"search\" placeholder=\"Rechercher...\">
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
        
        <!-- Reclamation cards with enhanced design and animations -->
        ";
        // line 107
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 107, $this->source); })())) > 0)) {
            // line 108
            yield "            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8\">
                ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 109, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
                // line 110
                yield "                    <div class=\"bg-white rounded-xl shadow-lg p-6 transition-all duration-500 hover:shadow-xl border border-gray-100 transform hover:-translate-y-1 animate-fade-in-up\" style=\"animation-delay: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 110) * 0.1), "html", null, true);
                yield "s\">
                        <div class=\"flex justify-between items-start mb-4\">
                            <div class=\"flex items-center\">
                                <div class=\"h-12 w-12 flex-shrink-0 rounded-full overflow-hidden shadow-md border-2 border-white\">
                                    ";
                // line 114
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "user", [], "any", false, false, false, 114), "imagePath", [], "any", false, false, false, 114)) {
                    // line 115
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "user", [], "any", false, false, false, 115), "imagePath", [], "any", false, false, false, 115)), "html", null, true);
                    yield "\" alt=\"Profile\" class=\"h-full w-full object-cover\">
                                    ";
                } else {
                    // line 117
                    yield "                                        <div class=\"h-full w-full flex items-center justify-center bg-gradient-to-r from-primary to-blue-600 text-white text-lg uppercase font-bold\">
                                            ";
                    // line 118
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "user", [], "any", false, false, false, 118), "prenom", [], "any", false, false, false, 118)), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "user", [], "any", false, false, false, 118), "nom", [], "any", false, false, false, 118)), "html", null, true);
                    yield "
                                        </div>
                                    ";
                }
                // line 121
                yield "                                </div>
                                <div class=\"ml-3\">
                                    <div class=\"text-sm font-medium text-gray-900\">";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "user", [], "any", false, false, false, 123), "prenom", [], "any", false, false, false, 123), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "user", [], "any", false, false, false, 123), "nom", [], "any", false, false, false, 123), "html", null, true);
                yield "</div>
                                    <div class=\"text-xs text-gray-500\">";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "user", [], "any", false, false, false, 124), "email", [], "any", false, false, false, 124), "html", null, true);
                yield "</div>
                                </div>
                            </div>
                            
                            ";
                // line 128
                $context["statusClasses"] = ["pending" => "bg-gradient-to-r from-yellow-400 to-amber-500 animate-pulse", "in_progress" => "bg-gradient-to-r from-blue-400 to-indigo-500", "resolved" => "bg-gradient-to-r from-green-400 to-teal-500", "rejected" => "bg-gradient-to-r from-red-400 to-pink-500"];
                // line 134
                yield "                            
                            ";
                // line 135
                $context["statusLabels"] = ["pending" => "En attente", "in_progress" => "En cours", "resolved" => "Résolu", "rejected" => "Rejeté"];
                // line 141
                yield "                            
                            ";
                // line 142
                $context["statusIcons"] = ["pending" => "<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />", "in_progress" => "<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15\" />", "resolved" => "<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />", "rejected" => "<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />"];
                // line 148
                yield "                            
                            <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium ";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusClasses"]) || array_key_exists("statusClasses", $context) ? $context["statusClasses"] : (function () { throw new RuntimeError('Variable "statusClasses" does not exist.', 149, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "state", [], "any", false, false, false, 149), [], "array", false, false, false, 149), "html", null, true);
                yield " text-white shadow-sm\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    ";
                // line 151
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusIcons"]) || array_key_exists("statusIcons", $context) ? $context["statusIcons"] : (function () { throw new RuntimeError('Variable "statusIcons" does not exist.', 151, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "state", [], "any", false, false, false, 151), [], "array", false, false, false, 151);
                yield "
                                </svg>
                                ";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusLabels"]) || array_key_exists("statusLabels", $context) ? $context["statusLabels"] : (function () { throw new RuntimeError('Variable "statusLabels" does not exist.', 153, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "state", [], "any", false, false, false, 153), [], "array", false, false, false, 153), "html", null, true);
                yield "
                            </span>
                        </div>
                        
                        <div class=\"mb-5\">
                            <h3 class=\"text-lg font-bold text-gray-900 mb-2 group\">
                                ";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "subject", [], "any", false, false, false, 159), "html", null, true);
                yield "
                                <span class=\"inline-block transition-all duration-300 group-hover:translate-x-1\">→</span>
                            </h3>
                            <p class=\"text-sm text-gray-600 line-clamp-3 bg-gray-50 p-3 rounded-lg\">";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 162), 0, 120), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 162)) > 120)) {
                    yield "...";
                }
                yield "</p>
                        </div>
                        
                        <div class=\"flex justify-between items-center mb-5\">
                            <div class=\"text-xs text-gray-500\">
                                ";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 167), "d/m/Y H:i"), "html", null, true);
                yield "
                            </div>
                            
                            <div class=\"text-xs font-medium ";
                // line 170
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reponses", [], "any", false, false, false, 170))) {
                    yield "text-green-600";
                } else {
                    yield "text-red-600";
                }
                yield " bg-";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reponses", [], "any", false, false, false, 170))) {
                    yield "green";
                } else {
                    yield "red";
                }
                yield "-50 rounded-full px-3 py-1 flex items-center\">
                                ";
                // line 171
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reponses", [], "any", false, false, false, 171))) {
                    // line 172
                    yield "                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                    </svg>
                                    Répondu
                                ";
                } else {
                    // line 177
                    yield "                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                    </svg>
                                    Sans réponse
                                ";
                }
                // line 182
                yield "                            </div>
                        </div>
                        
                        <div class=\"pt-4 border-t border-gray-100 flex justify-between gap-3\">
                            <a href=\"";
                // line 186
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 186)]), "html", null, true);
                yield "\" 
                               class=\"text-center text-sm font-medium text-indigo-600 hover:text-white bg-indigo-50 hover:bg-indigo-600 transition-colors duration-300 py-2.5 px-4 rounded-lg shadow-sm hover:shadow flex-1 transform hover:scale-105\">
                                <span class=\"flex items-center justify-center\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\" />
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\" />
                                    </svg>
                                    Voir
                                </span>
                            </a>
                            
                            ";
                // line 197
                if ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reponses", [], "any", false, false, false, 197)) || (CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "state", [], "any", false, false, false, 197) == "in_progress"))) {
                    // line 198
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_reply", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 198)]), "html", null, true);
                    yield "\" 
                                   class=\"text-center text-sm font-medium text-orange-600 hover:text-white bg-orange-50 hover:bg-orange-600 transition-colors duration-300 py-2.5 px-4 rounded-lg shadow-sm hover:shadow flex-1 transform hover:scale-105\">
                                    <span class=\"flex items-center justify-center\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6\" />
                                        </svg>
                                        Répondre
                                    </span>
                                </a>
                            ";
                }
                // line 208
                yield "                            
                            <form method=\"post\" action=\"";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 209)]), "html", null, true);
                yield "\" class=\"inline flex-1\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 210))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"w-full text-center text-sm font-medium text-red-600 hover:text-white bg-red-50 hover:bg-red-600 transition-colors duration-300 py-2.5 px-4 rounded-lg shadow-sm hover:shadow transform hover:scale-105\">
                                    <span class=\"flex items-center justify-center\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                                        </svg>
                                        Supprimer
                                    </span>
                                </button>
                            </form>
                        </div>
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
            unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            yield "            </div>
        ";
        } else {
            // line 225
            yield "            <!-- Empty state with animation -->
            <div class=\"bg-white p-10 rounded-xl shadow-xl text-center max-w-2xl mx-auto animate-fade-in-up\">
                <div class=\"w-24 h-24 bg-gray-100 rounded-full mx-auto mb-6 flex items-center justify-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12h.01M12 12h.01M15 12h.01M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2z\" />
                    </svg>
                </div>
                <h3 class=\"text-2xl font-bold text-gray-800 mb-3\">Aucune réclamation trouvée</h3>
                <p class=\"text-gray-600 mb-8 max-w-md mx-auto\">Il n'y a pas de réclamations correspondant à vos critères de recherche.</p>
                <a href=\"";
            // line 234
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_index");
            yield "\" class=\"inline-flex items-center px-5 py-3 bg-primary text-white font-medium rounded-lg shadow-md hover:bg-primary-dark transition-colors duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Voir toutes les réclamations
                </a>
            </div>
        ";
        }
        // line 242
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 245
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

        // line 246
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

    /* Optional: add line clamping for text overflow */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
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
        return "admin/reclamation/index.html.twig";
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
        return array (  553 => 246,  540 => 245,  528 => 242,  517 => 234,  506 => 225,  502 => 223,  475 => 210,  471 => 209,  468 => 208,  454 => 198,  452 => 197,  438 => 186,  432 => 182,  425 => 177,  418 => 172,  416 => 171,  402 => 170,  396 => 167,  385 => 162,  379 => 159,  370 => 153,  365 => 151,  360 => 149,  357 => 148,  355 => 142,  352 => 141,  350 => 135,  347 => 134,  345 => 128,  338 => 124,  332 => 123,  328 => 121,  321 => 118,  318 => 117,  312 => 115,  310 => 114,  302 => 110,  285 => 109,  282 => 108,  280 => 107,  243 => 77,  239 => 76,  224 => 68,  220 => 67,  205 => 59,  201 => 58,  186 => 50,  182 => 49,  167 => 41,  163 => 40,  157 => 36,  147 => 32,  140 => 27,  136 => 26,  133 => 25,  123 => 21,  116 => 16,  112 => 15,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration des réclamations{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8 max-w-7xl\">
        <!-- Header with animation -->
        <div class=\"mb-10 animate-fade-in-down\">
            <h1 class=\"text-4xl font-extrabold text-gray-800 mb-2 bg-gradient-to-r from-primary to-blue-600 bg-clip-text text-transparent\">Gestion des réclamations</h1>
            <p class=\"text-gray-600 text-lg\">Visualisez et gérez toutes les réclamations des utilisateurs</p>
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
                <a href=\"{{ path('app_admin_reclamation_index') }}\" 
                   class=\"px-5 py-2.5 rounded-lg font-medium text-sm transform transition-all duration-300 hover:scale-105 shadow-sm {% if app.request.query.get('filter') is null %}bg-gradient-to-r from-primary to-blue-600 text-white{% else %}bg-white text-gray-700 border border-gray-300 hover:border-primary hover:text-primary{% endif %}\">
                   <span class=\"flex items-center\">
                       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                           <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10\" />
                       </svg>
                       Toutes
                   </span>
                </a>
                <a href=\"{{ path('app_admin_reclamation_index', {'filter': 'pending'}) }}\" 
                   class=\"px-5 py-2.5 rounded-lg font-medium text-sm transform transition-all duration-300 hover:scale-105 shadow-sm {% if app.request.query.get('filter') == 'pending' %}bg-gradient-to-r from-yellow-400 to-amber-500 text-white{% else %}bg-white text-gray-700 border border-gray-300 hover:border-yellow-400 hover:text-yellow-600{% endif %}\">
                   <span class=\"flex items-center\">
                       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                           <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                       </svg>
                       En attente
                   </span>
                </a>
                <a href=\"{{ path('app_admin_reclamation_index', {'filter': 'in_progress'}) }}\" 
                   class=\"px-5 py-2.5 rounded-lg font-medium text-sm transform transition-all duration-300 hover:scale-105 shadow-sm {% if app.request.query.get('filter') == 'in_progress' %}bg-gradient-to-r from-blue-400 to-indigo-500 text-white{% else %}bg-white text-gray-700 border border-gray-300 hover:border-blue-400 hover:text-blue-600{% endif %}\">
                   <span class=\"flex items-center\">
                       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                           <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15\" />
                       </svg>
                       En cours
                   </span>
                </a>
                <a href=\"{{ path('app_admin_reclamation_index', {'filter': 'resolved'}) }}\" 
                   class=\"px-5 py-2.5 rounded-lg font-medium text-sm transform transition-all duration-300 hover:scale-105 shadow-sm {% if app.request.query.get('filter') == 'resolved' %}bg-gradient-to-r from-green-400 to-teal-500 text-white{% else %}bg-white text-gray-700 border border-gray-300 hover:border-green-400 hover:text-green-600{% endif %}\">
                   <span class=\"flex items-center\">
                       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                           <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                       </svg>
                       Résolues
                   </span>
                </a>
                <a href=\"{{ path('app_admin_reclamation_index', {'filter': 'rejected'}) }}\" 
                   class=\"px-5 py-2.5 rounded-lg font-medium text-sm transform transition-all duration-300 hover:scale-105 shadow-sm {% if app.request.query.get('filter') == 'rejected' %}bg-gradient-to-r from-red-400 to-pink-500 text-white{% else %}bg-white text-gray-700 border border-gray-300 hover:border-red-400 hover:text-red-600{% endif %}\">
                   <span class=\"flex items-center\">
                       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                           <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                       </svg>
                       Rejetées
                   </span>
                </a>
            </div>
            
            <!-- Enhanced search form -->
            <form method=\"get\" class=\"relative text-gray-600 w-full sm:w-auto group\">
                <div class=\"relative\">
                    <input class=\"border-2 border-gray-300 bg-white h-11 px-5 pl-12 pr-10 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary w-full min-w-[300px] transition-all duration-200 shadow-sm\"
                        type=\"search\" name=\"search\" placeholder=\"Rechercher...\">
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
        
        <!-- Reclamation cards with enhanced design and animations -->
        {% if reclamations|length > 0 %}
            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8\">
                {% for reclamation in reclamations %}
                    <div class=\"bg-white rounded-xl shadow-lg p-6 transition-all duration-500 hover:shadow-xl border border-gray-100 transform hover:-translate-y-1 animate-fade-in-up\" style=\"animation-delay: {{ loop.index0 * 0.1 }}s\">
                        <div class=\"flex justify-between items-start mb-4\">
                            <div class=\"flex items-center\">
                                <div class=\"h-12 w-12 flex-shrink-0 rounded-full overflow-hidden shadow-md border-2 border-white\">
                                    {% if reclamation.user.imagePath %}
                                        <img src=\"{{ asset(reclamation.user.imagePath) }}\" alt=\"Profile\" class=\"h-full w-full object-cover\">
                                    {% else %}
                                        <div class=\"h-full w-full flex items-center justify-center bg-gradient-to-r from-primary to-blue-600 text-white text-lg uppercase font-bold\">
                                            {{ reclamation.user.prenom|first }}{{ reclamation.user.nom|first }}
                                        </div>
                                    {% endif %}
                                </div>
                                <div class=\"ml-3\">
                                    <div class=\"text-sm font-medium text-gray-900\">{{ reclamation.user.prenom }} {{ reclamation.user.nom }}</div>
                                    <div class=\"text-xs text-gray-500\">{{ reclamation.user.email }}</div>
                                </div>
                            </div>
                            
                            {% set statusClasses = {
                                'pending': 'bg-gradient-to-r from-yellow-400 to-amber-500 animate-pulse',
                                'in_progress': 'bg-gradient-to-r from-blue-400 to-indigo-500',
                                'resolved': 'bg-gradient-to-r from-green-400 to-teal-500',
                                'rejected': 'bg-gradient-to-r from-red-400 to-pink-500'
                            } %}
                            
                            {% set statusLabels = {
                                'pending': 'En attente',
                                'in_progress': 'En cours',
                                'resolved': 'Résolu',
                                'rejected': 'Rejeté'
                            } %}
                            
                            {% set statusIcons = {
                                'pending': '<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />',
                                'in_progress': '<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15\" />',
                                'resolved': '<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />',
                                'rejected': '<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />'
                            } %}
                            
                            <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium {{ statusClasses[reclamation.state] }} text-white shadow-sm\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    {{ statusIcons[reclamation.state]|raw }}
                                </svg>
                                {{ statusLabels[reclamation.state] }}
                            </span>
                        </div>
                        
                        <div class=\"mb-5\">
                            <h3 class=\"text-lg font-bold text-gray-900 mb-2 group\">
                                {{ reclamation.subject }}
                                <span class=\"inline-block transition-all duration-300 group-hover:translate-x-1\">→</span>
                            </h3>
                            <p class=\"text-sm text-gray-600 line-clamp-3 bg-gray-50 p-3 rounded-lg\">{{ reclamation.description|slice(0, 120) }}{% if reclamation.description|length > 120 %}...{% endif %}</p>
                        </div>
                        
                        <div class=\"flex justify-between items-center mb-5\">
                            <div class=\"text-xs text-gray-500\">
                                {{ reclamation.date|date('d/m/Y H:i') }}
                            </div>
                            
                            <div class=\"text-xs font-medium {% if reclamation.reponses is not empty %}text-green-600{% else %}text-red-600{% endif %} bg-{% if reclamation.reponses is not empty %}green{% else %}red{% endif %}-50 rounded-full px-3 py-1 flex items-center\">
                                {% if reclamation.reponses is not empty %}
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                    </svg>
                                    Répondu
                                {% else %}
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                    </svg>
                                    Sans réponse
                                {% endif %}
                            </div>
                        </div>
                        
                        <div class=\"pt-4 border-t border-gray-100 flex justify-between gap-3\">
                            <a href=\"{{ path('app_admin_reclamation_show', {'id': reclamation.id}) }}\" 
                               class=\"text-center text-sm font-medium text-indigo-600 hover:text-white bg-indigo-50 hover:bg-indigo-600 transition-colors duration-300 py-2.5 px-4 rounded-lg shadow-sm hover:shadow flex-1 transform hover:scale-105\">
                                <span class=\"flex items-center justify-center\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\" />
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\" />
                                    </svg>
                                    Voir
                                </span>
                            </a>
                            
                            {% if reclamation.reponses is empty or reclamation.state == 'in_progress' %}
                                <a href=\"{{ path('app_admin_reclamation_reply', {'id': reclamation.id}) }}\" 
                                   class=\"text-center text-sm font-medium text-orange-600 hover:text-white bg-orange-50 hover:bg-orange-600 transition-colors duration-300 py-2.5 px-4 rounded-lg shadow-sm hover:shadow flex-1 transform hover:scale-105\">
                                    <span class=\"flex items-center justify-center\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6\" />
                                        </svg>
                                        Répondre
                                    </span>
                                </a>
                            {% endif %}
                            
                            <form method=\"post\" action=\"{{ path('app_admin_reclamation_delete', {'id': reclamation.id}) }}\" class=\"inline flex-1\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reclamation.id) }}\">
                                <button type=\"submit\" class=\"w-full text-center text-sm font-medium text-red-600 hover:text-white bg-red-50 hover:bg-red-600 transition-colors duration-300 py-2.5 px-4 rounded-lg shadow-sm hover:shadow transform hover:scale-105\">
                                    <span class=\"flex items-center justify-center\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                                        </svg>
                                        Supprimer
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <!-- Empty state with animation -->
            <div class=\"bg-white p-10 rounded-xl shadow-xl text-center max-w-2xl mx-auto animate-fade-in-up\">
                <div class=\"w-24 h-24 bg-gray-100 rounded-full mx-auto mb-6 flex items-center justify-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12h.01M12 12h.01M15 12h.01M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2z\" />
                    </svg>
                </div>
                <h3 class=\"text-2xl font-bold text-gray-800 mb-3\">Aucune réclamation trouvée</h3>
                <p class=\"text-gray-600 mb-8 max-w-md mx-auto\">Il n'y a pas de réclamations correspondant à vos critères de recherche.</p>
                <a href=\"{{ path('app_admin_reclamation_index') }}\" class=\"inline-flex items-center px-5 py-3 bg-primary text-white font-medium rounded-lg shadow-md hover:bg-primary-dark transition-colors duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Voir toutes les réclamations
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

    /* Optional: add line clamping for text overflow */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
{% endblock %} ", "admin/reclamation/index.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\admin\\reclamation\\index.html.twig");
    }
}
