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

/* admin/reclamation/reply.html.twig */
class __TwigTemplate_3e27aefe3f460720ea410df5bdcbfdea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation/reply.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation/reply.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/reclamation/reply.html.twig", 1);
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
        yield "    <div class=\"mb-8\">
        <div class=\"flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4\">
            <h1 class=\"text-3xl font-bold text-gray-800\">Répondre à la réclamation #";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        yield "</h1>
            <a href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        yield "\" 
               class=\"inline-flex items-center px-4 py-2 bg-gray-100 text-gray-700 rounded-xl hover:bg-gray-200 transition-colors duration-300 shadow-sm\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                </svg>
                Retour aux détails
            </a>
        </div>
        
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["success"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            yield "            <div class=\"my-4 p-4 bg-green-100 border border-green-200 text-green-700 rounded-xl\">
                ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "        
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", ["error"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            yield "            <div class=\"my-4 p-4 bg-red-100 border border-red-200 text-red-700 rounded-xl\">
                ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "    </div>
    
    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6 mb-8\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-6 md:col-span-2 h-fit\">
            <h2 class=\"text-xl font-bold mb-4 text-gray-800 flex items-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12h.01M12 12h.01M15 12h.01M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2z\" />
                </svg>
                Détails de la réclamation
            </h2>
            
            <div class=\"flex justify-between items-center mb-4\">
                <div>
                    <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                        ";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 43, $this->source); })()), "state", [], "any", false, false, false, 43) == "pending")) {
            // line 44
            yield "                            bg-yellow-100 text-yellow-800
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 45
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 45, $this->source); })()), "state", [], "any", false, false, false, 45) == "in_progress")) {
            // line 46
            yield "                            bg-blue-100 text-blue-800
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 47
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 47, $this->source); })()), "state", [], "any", false, false, false, 47) == "resolved")) {
            // line 48
            yield "                            bg-green-100 text-green-800
                        ";
        } else {
            // line 50
            yield "                            bg-red-100 text-red-800
                        ";
        }
        // line 52
        yield "                    \">
                        ";
        // line 53
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 53, $this->source); })()), "state", [], "any", false, false, false, 53) == "pending")) {
            // line 54
            yield "                            En attente
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 55
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 55, $this->source); })()), "state", [], "any", false, false, false, 55) == "in_progress")) {
            // line 56
            yield "                            En cours
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 57
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 57, $this->source); })()), "state", [], "any", false, false, false, 57) == "resolved")) {
            // line 58
            yield "                            Résolu
                        ";
        } else {
            // line 60
            yield "                            Rejeté
                        ";
        }
        // line 62
        yield "                    </span>
                </div>
                <div class=\"text-xs text-gray-500\">
                    Soumis le ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 65, $this->source); })()), "date", [], "any", false, false, false, 65), "d/m/Y à H:i"), "html", null, true);
        yield "
                </div>
            </div>
            
            <div class=\"mb-6\">
                <h3 class=\"text-lg font-semibold text-gray-800 mb-2\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 70, $this->source); })()), "subject", [], "any", false, false, false, 70), "html", null, true);
        yield "</h3>
                <div class=\"mt-3 bg-gray-50 p-4 rounded-lg border border-gray-100\">
                    <p class=\"text-gray-700 whitespace-pre-line\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 72, $this->source); })()), "description", [], "any", false, false, false, 72), "html", null, true);
        yield "</p>
                </div>
            </div>
            
            ";
        // line 76
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 76, $this->source); })()), "reponses", [], "any", false, false, false, 76))) {
            // line 77
            yield "                <div class=\"mt-6\">
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-2 flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6\" />
                        </svg>
                        Réponses précédentes
                    </h3>
                    ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 84, $this->source); })()), "reponses", [], "any", false, false, false, 84));
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 85
                yield "                        <div class=\"bg-blue-50 p-4 rounded-lg border border-blue-100 mb-4\">
                            <div class=\"flex justify-between items-center mb-2\">
                                <span class=\"text-sm font-medium text-gray-600\">";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "adminUsername", [], "any", false, false, false, 87), "html", null, true);
                yield "</span>
                                <span class=\"text-xs text-gray-500\">";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "date", [], "any", false, false, false, 88), "d/m/Y à H:i"), "html", null, true);
                yield "</span>
                            </div>
                            <p class=\"text-gray-700 whitespace-pre-line\">";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "content", [], "any", false, false, false, 90), "html", null, true);
                yield "</p>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "                </div>
            ";
        }
        // line 95
        yield "        </div>
        
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-6 h-fit\">
            <h3 class=\"text-xl font-bold mb-4 text-gray-800 flex items-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                </svg>
                Informations utilisateur
            </h3>
            
            <div class=\"flex items-center mb-6\">
                <div class=\"h-12 w-12 flex-shrink-0 bg-gray-200 rounded-full overflow-hidden\">
                    ";
        // line 107
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "imagePath", [], "any", false, false, false, 107)) {
            // line 108
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "imagePath", [], "any", false, false, false, 108)), "html", null, true);
            yield "\" alt=\"Profile\" class=\"h-full w-full object-cover\">
                    ";
        } else {
            // line 110
            yield "                        <div class=\"h-full w-full flex items-center justify-center bg-primary text-white text-lg uppercase font-bold\">
                            ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "nom", [], "any", false, false, false, 111)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "prenom", [], "any", false, false, false, 111)), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 114
        yield "                </div>
                <div class=\"ml-4\">
                    <div class=\"text-lg font-medium text-gray-900\">";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "nom", [], "any", false, false, false, 116), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "prenom", [], "any", false, false, false, 116), "html", null, true);
        yield "</div>
                    <div class=\"text-sm text-gray-500\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "email", [], "any", false, false, false, 117), "html", null, true);
        yield "</div>
                </div>
            </div>
            
            <ul class=\"space-y-3 text-sm text-gray-700 mb-4\">
                <li class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\" />
                    </svg>
                    <span>";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 126, $this->source); })()), "user", [], "any", false, false, false, 126), "email", [], "any", false, false, false, 126), "html", null, true);
        yield "</span>
                </li>
                <li class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z\" />
                    </svg>
                    <span>";
        // line 132
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "tel", [], "any", false, false, false, 132)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "tel", [], "any", false, false, false, 132), "html", null, true)) : ("Non renseigné"));
        yield "</span>
                </li>
                <li class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                    </svg>
                    <span>";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "roleCode", [], "any", false, false, false, 138)), "html", null, true);
        yield "</span>
                </li>
            </ul>
            
            <div class=\"pt-3 border-t border-gray-200\">
                <p class=\"text-sm text-gray-600 mb-2\">
                    Nombre de réclamations: <span class=\"font-semibold\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 144, $this->source); })()), "user", [], "any", false, false, false, 144), "reclamations", [], "any", false, false, false, 144)), "html", null, true);
        yield "</span>
                </p>
            </div>
        </div>
    </div>
    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-6 mb-8\">
        <h2 class=\"text-xl font-bold mb-6 text-gray-800 flex items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6\" />
            </svg>
            Répondre à la réclamation
        </h2>
        
        ";
        // line 158
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "
            <div class=\"bg-gray-50 rounded-lg p-5 border border-gray-100\">
                <label for=\"status\" class=\"block text-sm font-medium text-gray-700 mb-2\">Statut de la réclamation</label>
                <select id=\"status\" name=\"status\" class=\"w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary bg-white\">
                    <option value=\"in_progress\" ";
        // line 162
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 162, $this->source); })()), "state", [], "any", false, false, false, 162) == "in_progress")) {
            yield "selected";
        }
        yield ">En cours</option>
                    <option value=\"resolved\" ";
        // line 163
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 163, $this->source); })()), "state", [], "any", false, false, false, 163) == "resolved")) {
            yield "selected";
        }
        yield ">Résolu</option>
                    <option value=\"rejected\" ";
        // line 164
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 164, $this->source); })()), "state", [], "any", false, false, false, 164) == "rejected")) {
            yield "selected";
        }
        yield ">Rejeté</option>
                </select>
                <p class=\"mt-2 text-sm text-gray-500\">Le statut de la réclamation sera mis à jour en fonction de votre réponse.</p>
            </div>
            
            <div>
                ";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "content", [], "any", false, false, false, 170), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-2"], "label" => "Votre réponse"]);
        yield "
                ";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "content", [], "any", false, false, false, 171), 'widget', ["attr" => ["rows" => 8, "class" => "w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary", "placeholder" => "Rédigez votre réponse détaillée à cette réclamation..."]]);
        // line 177
        yield "
                ";
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "content", [], "any", false, false, false, 178), 'errors', ["attr" => ["class" => "text-red-500 text-sm mt-1"]]);
        yield "
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
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 192, $this->source); })()), "id", [], "any", false, false, false, 192)]), "html", null, true);
        yield "\" 
                       class=\"inline-flex items-center justify-center px-4 py-2 bg-gray-100 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-200 transition-colors duration-300 text-sm w-full sm:w-auto\">
                        Annuler
                    </a>
                    
                    <button type=\"submit\" 
                            class=\"inline-flex items-center justify-center px-6 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium w-full sm:w-auto\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 19l9 2-9-18-9 18 9-2zm0 0v-8\" />
                        </svg>
                        Envoyer la réponse
                    </button>
                </div>
            </div>
        ";
        // line 206
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), 'form_end');
        yield "
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
        return "admin/reclamation/reply.html.twig";
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
        return array (  451 => 206,  434 => 192,  417 => 178,  414 => 177,  412 => 171,  408 => 170,  397 => 164,  391 => 163,  385 => 162,  378 => 158,  361 => 144,  352 => 138,  343 => 132,  334 => 126,  322 => 117,  316 => 116,  312 => 114,  305 => 111,  302 => 110,  296 => 108,  294 => 107,  280 => 95,  276 => 93,  267 => 90,  262 => 88,  258 => 87,  254 => 85,  250 => 84,  241 => 77,  239 => 76,  232 => 72,  227 => 70,  219 => 65,  214 => 62,  210 => 60,  206 => 58,  204 => 57,  201 => 56,  199 => 55,  196 => 54,  194 => 53,  191 => 52,  187 => 50,  183 => 48,  181 => 47,  178 => 46,  176 => 45,  173 => 44,  171 => 43,  155 => 29,  146 => 26,  143 => 25,  139 => 24,  136 => 23,  127 => 20,  124 => 19,  120 => 18,  108 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Répondre à la réclamation{% endblock %}

{% block body %}
    <div class=\"mb-8\">
        <div class=\"flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4\">
            <h1 class=\"text-3xl font-bold text-gray-800\">Répondre à la réclamation #{{ reclamation.id }}</h1>
            <a href=\"{{ path('app_admin_reclamation_show', {'id': reclamation.id}) }}\" 
               class=\"inline-flex items-center px-4 py-2 bg-gray-100 text-gray-700 rounded-xl hover:bg-gray-200 transition-colors duration-300 shadow-sm\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                </svg>
                Retour aux détails
            </a>
        </div>
        
        {% for message in app.flashes('success') %}
            <div class=\"my-4 p-4 bg-green-100 border border-green-200 text-green-700 rounded-xl\">
                {{ message }}
            </div>
        {% endfor %}
        
        {% for message in app.flashes('error') %}
            <div class=\"my-4 p-4 bg-red-100 border border-red-200 text-red-700 rounded-xl\">
                {{ message }}
            </div>
        {% endfor %}
    </div>
    
    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6 mb-8\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-6 md:col-span-2 h-fit\">
            <h2 class=\"text-xl font-bold mb-4 text-gray-800 flex items-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12h.01M12 12h.01M15 12h.01M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2z\" />
                </svg>
                Détails de la réclamation
            </h2>
            
            <div class=\"flex justify-between items-center mb-4\">
                <div>
                    <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                        {% if reclamation.state == 'pending' %}
                            bg-yellow-100 text-yellow-800
                        {% elseif reclamation.state == 'in_progress' %}
                            bg-blue-100 text-blue-800
                        {% elseif reclamation.state == 'resolved' %}
                            bg-green-100 text-green-800
                        {% else %}
                            bg-red-100 text-red-800
                        {% endif %}
                    \">
                        {% if reclamation.state == 'pending' %}
                            En attente
                        {% elseif reclamation.state == 'in_progress' %}
                            En cours
                        {% elseif reclamation.state == 'resolved' %}
                            Résolu
                        {% else %}
                            Rejeté
                        {% endif %}
                    </span>
                </div>
                <div class=\"text-xs text-gray-500\">
                    Soumis le {{ reclamation.date|date('d/m/Y à H:i') }}
                </div>
            </div>
            
            <div class=\"mb-6\">
                <h3 class=\"text-lg font-semibold text-gray-800 mb-2\">{{ reclamation.subject }}</h3>
                <div class=\"mt-3 bg-gray-50 p-4 rounded-lg border border-gray-100\">
                    <p class=\"text-gray-700 whitespace-pre-line\">{{ reclamation.description }}</p>
                </div>
            </div>
            
            {% if reclamation.reponses is not empty %}
                <div class=\"mt-6\">
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-2 flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6\" />
                        </svg>
                        Réponses précédentes
                    </h3>
                    {% for reponse in reclamation.reponses %}
                        <div class=\"bg-blue-50 p-4 rounded-lg border border-blue-100 mb-4\">
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
        
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-6 h-fit\">
            <h3 class=\"text-xl font-bold mb-4 text-gray-800 flex items-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                </svg>
                Informations utilisateur
            </h3>
            
            <div class=\"flex items-center mb-6\">
                <div class=\"h-12 w-12 flex-shrink-0 bg-gray-200 rounded-full overflow-hidden\">
                    {% if reclamation.user.imagePath %}
                        <img src=\"{{ asset(reclamation.user.imagePath) }}\" alt=\"Profile\" class=\"h-full w-full object-cover\">
                    {% else %}
                        <div class=\"h-full w-full flex items-center justify-center bg-primary text-white text-lg uppercase font-bold\">
                            {{ reclamation.user.nom|first }}{{ reclamation.user.prenom|first }}
                        </div>
                    {% endif %}
                </div>
                <div class=\"ml-4\">
                    <div class=\"text-lg font-medium text-gray-900\">{{ reclamation.user.nom }} {{ reclamation.user.prenom }}</div>
                    <div class=\"text-sm text-gray-500\">{{ reclamation.user.email }}</div>
                </div>
            </div>
            
            <ul class=\"space-y-3 text-sm text-gray-700 mb-4\">
                <li class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\" />
                    </svg>
                    <span>{{ reclamation.user.email }}</span>
                </li>
                <li class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z\" />
                    </svg>
                    <span>{{ reclamation.user.tel ? reclamation.user.tel : 'Non renseigné' }}</span>
                </li>
                <li class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                    </svg>
                    <span>{{ reclamation.user.roleCode|capitalize }}</span>
                </li>
            </ul>
            
            <div class=\"pt-3 border-t border-gray-200\">
                <p class=\"text-sm text-gray-600 mb-2\">
                    Nombre de réclamations: <span class=\"font-semibold\">{{ reclamation.user.reclamations|length }}</span>
                </p>
            </div>
        </div>
    </div>
    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-6 mb-8\">
        <h2 class=\"text-xl font-bold mb-6 text-gray-800 flex items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6\" />
            </svg>
            Répondre à la réclamation
        </h2>
        
        {{ form_start(form, {'attr': {'class': 'space-y-6'}}) }}
            <div class=\"bg-gray-50 rounded-lg p-5 border border-gray-100\">
                <label for=\"status\" class=\"block text-sm font-medium text-gray-700 mb-2\">Statut de la réclamation</label>
                <select id=\"status\" name=\"status\" class=\"w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary bg-white\">
                    <option value=\"in_progress\" {% if reclamation.state == 'in_progress' %}selected{% endif %}>En cours</option>
                    <option value=\"resolved\" {% if reclamation.state == 'resolved' %}selected{% endif %}>Résolu</option>
                    <option value=\"rejected\" {% if reclamation.state == 'rejected' %}selected{% endif %}>Rejeté</option>
                </select>
                <p class=\"mt-2 text-sm text-gray-500\">Le statut de la réclamation sera mis à jour en fonction de votre réponse.</p>
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
                            class=\"inline-flex items-center justify-center px-6 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium w-full sm:w-auto\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 19l9 2-9-18-9 18 9-2zm0 0v-8\" />
                        </svg>
                        Envoyer la réponse
                    </button>
                </div>
            </div>
        {{ form_end(form) }}
    </div>
{% endblock %} ", "admin/reclamation/reply.html.twig", "D:\\Covoituni_web-master\\templates\\admin\\reclamation\\reply.html.twig");
    }
}
