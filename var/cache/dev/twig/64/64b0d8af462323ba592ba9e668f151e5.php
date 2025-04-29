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

/* admin/reclamation/respond.html.twig */
class __TwigTemplate_da75aa3defcf7ecc6ee42fa28d166197 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation/respond.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation/respond.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/reclamation/respond.html.twig", 1);
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

        yield "Répondre à la réclamation";
        
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
        <div class=\"mb-8 animate-fade-in-down\">
            <div class=\"flex flex-col md:flex-row justify-between md:items-center gap-4\">
                <div>
                    <h1 class=\"text-4xl font-extrabold text-gray-800 mb-2 bg-gradient-to-r from-primary to-blue-600 bg-clip-text text-transparent\">Répondre à la réclamation #";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        yield "</h1>
                    <div class=\"h-1 w-32 bg-gradient-to-r from-primary to-blue-600 rounded mt-2\"></div>
                </div>
                <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\" 
                   class=\"inline-flex items-center px-4 py-2.5 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-all duration-300 shadow-sm transform hover:scale-105\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour aux détails
                </a>
            </div>
            
            <!-- Alert messages with improved animations -->
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", ["success"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            yield "                <div class=\"my-4 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded-r-xl shadow-md animate-fade-in transform transition-all duration-300 hover:scale-[1.01]\">
                    <div class=\"flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-3 text-green-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        <span class=\"font-medium\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "            
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "flashes", ["error"], "method", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 36
            yield "                <div class=\"my-4 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-r-xl shadow-md animate-fade-in transform transition-all duration-300 hover:scale-[1.01]\">
                    <div class=\"flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-3 text-red-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z\" />
                        </svg>
                        <span class=\"font-medium\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "        </div>
        
        <!-- Main content grid -->
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6 mb-8\">
            <!-- Reclamation details -->
            <div class=\"bg-white rounded-xl shadow-lg p-6 md:col-span-2 transition-all duration-300 hover:shadow-xl border border-gray-100 animate-fade-in-up\" style=\"animation-delay: 0.2s\">
                <h2 class=\"text-2xl font-bold mb-4 text-gray-800 flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12h.01M12 12h.01M15 12h.01M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2z\" />
                    </svg>
                    ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 55, $this->source); })()), "subject", [], "any", false, false, false, 55), "html", null, true);
        yield "
                </h2>
                
                <div class=\"flex justify-between items-center mb-4\">
                    <div>
                        ";
        // line 60
        $context["statusClasses"] = ["pending" => "bg-gradient-to-r from-yellow-400 to-amber-500 animate-pulse", "in_progress" => "bg-gradient-to-r from-blue-400 to-indigo-500", "resolved" => "bg-gradient-to-r from-green-400 to-teal-500", "rejected" => "bg-gradient-to-r from-red-400 to-pink-500"];
        // line 66
        yield "                        
                        ";
        // line 67
        $context["statusLabels"] = ["pending" => "En attente", "in_progress" => "En cours", "resolved" => "Résolu", "rejected" => "Rejeté"];
        // line 73
        yield "                        
                        ";
        // line 74
        $context["statusIcons"] = ["pending" => "<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />", "in_progress" => "<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15\" />", "resolved" => "<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />", "rejected" => "<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />"];
        // line 80
        yield "                        
                        <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusClasses"]) || array_key_exists("statusClasses", $context) ? $context["statusClasses"] : (function () { throw new RuntimeError('Variable "statusClasses" does not exist.', 81, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 81, $this->source); })()), "status", [], "any", false, false, false, 81), [], "array", false, false, false, 81), "html", null, true);
        yield " text-white shadow-sm\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                ";
        // line 83
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusIcons"]) || array_key_exists("statusIcons", $context) ? $context["statusIcons"] : (function () { throw new RuntimeError('Variable "statusIcons" does not exist.', 83, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 83, $this->source); })()), "status", [], "any", false, false, false, 83), [], "array", false, false, false, 83);
        yield "
                            </svg>
                            ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusLabels"]) || array_key_exists("statusLabels", $context) ? $context["statusLabels"] : (function () { throw new RuntimeError('Variable "statusLabels" does not exist.', 85, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 85, $this->source); })()), "status", [], "any", false, false, false, 85), [], "array", false, false, false, 85), "html", null, true);
        yield "
                        </span>
                    </div>
                    <div class=\"text-xs text-gray-500\">
                        Soumis le ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 89, $this->source); })()), "date", [], "any", false, false, false, 89), "d/m/Y à H:i"), "html", null, true);
        yield "
                    </div>
                </div>
                
                <div class=\"mt-6\">
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-3 flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-gray-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 10h16M4 14h16M4 18h16\" />
                        </svg>
                        Description
                    </h3>
                    <div class=\"bg-gray-50 p-6 rounded-lg border border-gray-100 shadow-inner\">
                        <p class=\"text-gray-700 whitespace-pre-line\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 101, $this->source); })()), "description", [], "any", false, false, false, 101), "html", null, true);
        yield "</p>
                    </div>
                </div>
                
                ";
        // line 105
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 105, $this->source); })()), "reponses", [], "any", false, false, false, 105))) {
            // line 106
            yield "                    <div class=\"mt-8\">
                        <h3 class=\"text-lg font-semibold text-gray-700 mb-3 flex items-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6\" />
                            </svg>
                            Réponses précédentes
                        </h3>
                        ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 113, $this->source); })()), "reponses", [], "any", false, false, false, 113));
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 114
                yield "                            <div class=\"bg-primary/5 p-6 rounded-lg border border-primary/20 shadow-inner mb-4\">
                                <div class=\"flex justify-between items-center mb-2\">
                                    <span class=\"text-sm font-medium text-gray-600\">";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "adminUsername", [], "any", false, false, false, 116), "html", null, true);
                yield "</span>
                                    <span class=\"text-xs text-gray-500\">";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "date", [], "any", false, false, false, 117), "d/m/Y à H:i"), "html", null, true);
                yield "</span>
                                </div>
                                <p class=\"text-gray-700 whitespace-pre-line\">";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "content", [], "any", false, false, false, 119), "html", null, true);
                yield "</p>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            yield "                    </div>
                ";
        }
        // line 124
        yield "            </div>
            
            <!-- User info card -->
            <div class=\"bg-white rounded-xl shadow-lg p-6 transition-all duration-300 hover:shadow-xl border border-gray-100 animate-fade-in-up\" style=\"animation-delay: 0.4s\">
                <h3 class=\"text-xl font-bold mb-6 text-gray-800 flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                    </svg>
                    Informations utilisateur
                </h3>
                
                <div class=\"flex items-center mb-6\">
                    <div class=\"h-16 w-16 flex-shrink-0 rounded-full overflow-hidden shadow-md border-2 border-white transform transition-transform duration-500 hover:scale-110\">
                        ";
        // line 137
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137), "imagePath", [], "any", false, false, false, 137)) {
            // line 138
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "imagePath", [], "any", false, false, false, 138)), "html", null, true);
            yield "\" alt=\"Profile\" class=\"h-full w-full object-cover\">
                        ";
        } else {
            // line 140
            yield "                            <div class=\"h-full w-full flex items-center justify-center bg-gradient-to-r from-primary to-blue-600 text-white text-2xl uppercase font-bold\">
                                ";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141), "prenom", [], "any", false, false, false, 141)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141), "nom", [], "any", false, false, false, 141)), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 144
        yield "                    </div>
                    <div class=\"ml-4\">
                        <div class=\"text-lg font-medium text-gray-900\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146), "prenom", [], "any", false, false, false, 146), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146), "nom", [], "any", false, false, false, 146), "html", null, true);
        yield "</div>
                        <div class=\"text-sm text-gray-500\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147), "email", [], "any", false, false, false, 147), "html", null, true);
        yield "</div>
                    </div>
                </div>
                
                <ul class=\"space-y-4 text-gray-700\">
                    <li class=\"flex items-start px-4 py-3 bg-gray-50 rounded-lg\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-3 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\" />
                        </svg>
                        <span>";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 156, $this->source); })()), "user", [], "any", false, false, false, 156), "email", [], "any", false, false, false, 156), "html", null, true);
        yield "</span>
                    </li>
                    <li class=\"flex items-start px-4 py-3 bg-gray-50 rounded-lg\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-3 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z\" />
                        </svg>
                        <span>";
        // line 162
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 162, $this->source); })()), "user", [], "any", false, false, false, 162), "tel", [], "any", false, false, false, 162)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 162, $this->source); })()), "user", [], "any", false, false, false, 162), "tel", [], "any", false, false, false, 162), "html", null, true)) : ("Non renseigné"));
        yield "</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Response form section -->
        <div class=\"bg-white rounded-xl shadow-lg p-6 mb-8 transition-all duration-300 hover:shadow-xl border border-gray-100 animate-fade-in-up\" style=\"animation-delay: 0.6s\">
            <h2 class=\"text-2xl font-bold mb-6 text-gray-800 flex items-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6\" />
                </svg>
                Répondre à la réclamation
            </h2>
            
            ";
        // line 177
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "
                <div class=\"bg-gray-50 rounded-lg p-5 border border-gray-100\">
                    ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "status", [], "any", false, false, false, 179), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-2"], "label" => "Statut de la réclamation"]);
        yield "
                    ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "status", [], "any", false, false, false, 180), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary bg-white"]]);
        // line 184
        yield "
                    ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "status", [], "any", false, false, false, 185), 'errors', ["attr" => ["class" => "text-red-500 text-sm mt-1"]]);
        yield "
                    <p class=\"mt-2 text-sm text-gray-500\">Le statut de la réclamation sera mis à jour.</p>
                </div>
                
                <div>
                    ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "content", [], "any", false, false, false, 190), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-2"], "label" => "Votre réponse"]);
        yield "
                    ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "content", [], "any", false, false, false, 191), 'widget', ["attr" => ["rows" => 8, "class" => "w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary", "placeholder" => "Rédigez votre réponse détaillée à cette réclamation..."]]);
        // line 197
        yield "
                    ";
        // line 198
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "content", [], "any", false, false, false, 198), 'errors', ["attr" => ["class" => "text-red-500 text-sm mt-1"]]);
        yield "
                    <p class=\"text-xs text-gray-500 mt-1\">";
        // line 199
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "content", [], "any", false, false, false, 199), 'help');
        yield "</p>
                </div>
                
                <div class=\"flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4\">
                    <div class=\"text-sm text-gray-500 bg-blue-50 p-3 rounded-lg border border-blue-100 w-full sm:w-auto\">
                        <p class=\"flex items-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-blue-500 mr-2 flex-shrink-0\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                            </svg>
                            Cette réponse sera visible par l'utilisateur dans son espace personnel.
                        </p>
                    </div>
                    
                    <div class=\"flex space-x-3 w-full sm:w-auto justify-end\">
                        <a href=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 213, $this->source); })()), "id", [], "any", false, false, false, 213)]), "html", null, true);
        yield "\" 
                           class=\"inline-flex items-center justify-center px-4 py-2 bg-gray-100 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-200 transition-colors duration-300 text-sm w-full sm:w-auto\">
                            Annuler
                        </a>
                        
                        <button type=\"submit\" 
                                class=\"inline-flex items-center justify-center px-6 py-2 bg-gradient-to-r from-primary to-blue-600 text-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium w-full sm:w-auto\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 19l9 2-9-18-9 18 9-2zm0 0v-8\" />
                            </svg>
                            Envoyer la réponse
                        </button>
                    </div>
                </div>
            ";
        // line 227
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), 'form_end');
        yield "
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
        return "admin/reclamation/respond.html.twig";
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
        return array (  437 => 227,  420 => 213,  403 => 199,  399 => 198,  396 => 197,  394 => 191,  390 => 190,  382 => 185,  379 => 184,  377 => 180,  373 => 179,  368 => 177,  350 => 162,  341 => 156,  329 => 147,  323 => 146,  319 => 144,  312 => 141,  309 => 140,  303 => 138,  301 => 137,  286 => 124,  282 => 122,  273 => 119,  268 => 117,  264 => 116,  260 => 114,  256 => 113,  247 => 106,  245 => 105,  238 => 101,  223 => 89,  216 => 85,  211 => 83,  206 => 81,  203 => 80,  201 => 74,  198 => 73,  196 => 67,  193 => 66,  191 => 60,  183 => 55,  171 => 45,  161 => 41,  154 => 36,  150 => 35,  147 => 34,  137 => 30,  130 => 25,  126 => 24,  113 => 14,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Répondre à la réclamation{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8 max-w-7xl\">
        <!-- Header with animation -->
        <div class=\"mb-8 animate-fade-in-down\">
            <div class=\"flex flex-col md:flex-row justify-between md:items-center gap-4\">
                <div>
                    <h1 class=\"text-4xl font-extrabold text-gray-800 mb-2 bg-gradient-to-r from-primary to-blue-600 bg-clip-text text-transparent\">Répondre à la réclamation #{{ reclamation.id }}</h1>
                    <div class=\"h-1 w-32 bg-gradient-to-r from-primary to-blue-600 rounded mt-2\"></div>
                </div>
                <a href=\"{{ path('app_admin_reclamation_show', {'id': reclamation.id}) }}\" 
                   class=\"inline-flex items-center px-4 py-2.5 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-all duration-300 shadow-sm transform hover:scale-105\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour aux détails
                </a>
            </div>
            
            <!-- Alert messages with improved animations -->
            {% for message in app.flashes('success') %}
                <div class=\"my-4 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded-r-xl shadow-md animate-fade-in transform transition-all duration-300 hover:scale-[1.01]\">
                    <div class=\"flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-3 text-green-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        <span class=\"font-medium\">{{ message }}</span>
                    </div>
                </div>
            {% endfor %}
            
            {% for message in app.flashes('error') %}
                <div class=\"my-4 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-r-xl shadow-md animate-fade-in transform transition-all duration-300 hover:scale-[1.01]\">
                    <div class=\"flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-3 text-red-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z\" />
                        </svg>
                        <span class=\"font-medium\">{{ message }}</span>
                    </div>
                </div>
            {% endfor %}
        </div>
        
        <!-- Main content grid -->
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6 mb-8\">
            <!-- Reclamation details -->
            <div class=\"bg-white rounded-xl shadow-lg p-6 md:col-span-2 transition-all duration-300 hover:shadow-xl border border-gray-100 animate-fade-in-up\" style=\"animation-delay: 0.2s\">
                <h2 class=\"text-2xl font-bold mb-4 text-gray-800 flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12h.01M12 12h.01M15 12h.01M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2z\" />
                    </svg>
                    {{ reclamation.subject }}
                </h2>
                
                <div class=\"flex justify-between items-center mb-4\">
                    <div>
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
                        
                        <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium {{ statusClasses[reclamation.status] }} text-white shadow-sm\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                {{ statusIcons[reclamation.status]|raw }}
                            </svg>
                            {{ statusLabels[reclamation.status] }}
                        </span>
                    </div>
                    <div class=\"text-xs text-gray-500\">
                        Soumis le {{ reclamation.date|date('d/m/Y à H:i') }}
                    </div>
                </div>
                
                <div class=\"mt-6\">
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-3 flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-gray-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 10h16M4 14h16M4 18h16\" />
                        </svg>
                        Description
                    </h3>
                    <div class=\"bg-gray-50 p-6 rounded-lg border border-gray-100 shadow-inner\">
                        <p class=\"text-gray-700 whitespace-pre-line\">{{ reclamation.description }}</p>
                    </div>
                </div>
                
                {% if reclamation.reponses is not empty %}
                    <div class=\"mt-8\">
                        <h3 class=\"text-lg font-semibold text-gray-700 mb-3 flex items-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6\" />
                            </svg>
                            Réponses précédentes
                        </h3>
                        {% for reponse in reclamation.reponses %}
                            <div class=\"bg-primary/5 p-6 rounded-lg border border-primary/20 shadow-inner mb-4\">
                                <div class=\"flex justify-between items-center mb-2\">
                                    <span class=\"text-sm font-medium text-gray-600\">{{ reponse.adminUsername }}</span>
                                    <span class=\"text-xs text-gray-500\">{{ reponse.date|date('d/m/Y à H:i') }}</span>
                                </div>
                                <p class=\"text-gray-700 whitespace-pre-line\">{{ reponse.content }}</p>
                            </div>
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
            
            <!-- User info card -->
            <div class=\"bg-white rounded-xl shadow-lg p-6 transition-all duration-300 hover:shadow-xl border border-gray-100 animate-fade-in-up\" style=\"animation-delay: 0.4s\">
                <h3 class=\"text-xl font-bold mb-6 text-gray-800 flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                    </svg>
                    Informations utilisateur
                </h3>
                
                <div class=\"flex items-center mb-6\">
                    <div class=\"h-16 w-16 flex-shrink-0 rounded-full overflow-hidden shadow-md border-2 border-white transform transition-transform duration-500 hover:scale-110\">
                        {% if reclamation.user.imagePath %}
                            <img src=\"{{ asset(reclamation.user.imagePath) }}\" alt=\"Profile\" class=\"h-full w-full object-cover\">
                        {% else %}
                            <div class=\"h-full w-full flex items-center justify-center bg-gradient-to-r from-primary to-blue-600 text-white text-2xl uppercase font-bold\">
                                {{ reclamation.user.prenom|first }}{{ reclamation.user.nom|first }}
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"ml-4\">
                        <div class=\"text-lg font-medium text-gray-900\">{{ reclamation.user.prenom }} {{ reclamation.user.nom }}</div>
                        <div class=\"text-sm text-gray-500\">{{ reclamation.user.email }}</div>
                    </div>
                </div>
                
                <ul class=\"space-y-4 text-gray-700\">
                    <li class=\"flex items-start px-4 py-3 bg-gray-50 rounded-lg\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-3 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\" />
                        </svg>
                        <span>{{ reclamation.user.email }}</span>
                    </li>
                    <li class=\"flex items-start px-4 py-3 bg-gray-50 rounded-lg\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-3 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z\" />
                        </svg>
                        <span>{{ reclamation.user.tel ? reclamation.user.tel : 'Non renseigné' }}</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Response form section -->
        <div class=\"bg-white rounded-xl shadow-lg p-6 mb-8 transition-all duration-300 hover:shadow-xl border border-gray-100 animate-fade-in-up\" style=\"animation-delay: 0.6s\">
            <h2 class=\"text-2xl font-bold mb-6 text-gray-800 flex items-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6\" />
                </svg>
                Répondre à la réclamation
            </h2>
            
            {{ form_start(form, {'attr': {'class': 'space-y-6'}}) }}
                <div class=\"bg-gray-50 rounded-lg p-5 border border-gray-100\">
                    {{ form_label(form.status, 'Statut de la réclamation', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2'}}) }}
                    {{ form_widget(form.status, {
                        'attr': {
                            'class': 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary bg-white'
                        }
                    }) }}
                    {{ form_errors(form.status, {'attr': {'class': 'text-red-500 text-sm mt-1'}}) }}
                    <p class=\"mt-2 text-sm text-gray-500\">Le statut de la réclamation sera mis à jour.</p>
                </div>
                
                <div>
                    {{ form_label(form.content, 'Votre réponse', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2'}}) }}
                    {{ form_widget(form.content, {
                        'attr': {
                            'rows': 8,
                            'class': 'w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary',
                            'placeholder': 'Rédigez votre réponse détaillée à cette réclamation...'
                        }
                    }) }}
                    {{ form_errors(form.content, {'attr': {'class': 'text-red-500 text-sm mt-1'}}) }}
                    <p class=\"text-xs text-gray-500 mt-1\">{{ form_help(form.content) }}</p>
                </div>
                
                <div class=\"flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4\">
                    <div class=\"text-sm text-gray-500 bg-blue-50 p-3 rounded-lg border border-blue-100 w-full sm:w-auto\">
                        <p class=\"flex items-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-blue-500 mr-2 flex-shrink-0\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                            </svg>
                            Cette réponse sera visible par l'utilisateur dans son espace personnel.
                        </p>
                    </div>
                    
                    <div class=\"flex space-x-3 w-full sm:w-auto justify-end\">
                        <a href=\"{{ path('app_admin_reclamation_show', {'id': reclamation.id}) }}\" 
                           class=\"inline-flex items-center justify-center px-4 py-2 bg-gray-100 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-200 transition-colors duration-300 text-sm w-full sm:w-auto\">
                            Annuler
                        </a>
                        
                        <button type=\"submit\" 
                                class=\"inline-flex items-center justify-center px-6 py-2 bg-gradient-to-r from-primary to-blue-600 text-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium w-full sm:w-auto\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 19l9 2-9-18-9 18 9-2zm0 0v-8\" />
                            </svg>
                            Envoyer la réponse
                        </button>
                    </div>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %} ", "admin/reclamation/respond.html.twig", "D:\\Covoituni_web-master\\templates\\admin\\reclamation\\respond.html.twig");
    }
}
