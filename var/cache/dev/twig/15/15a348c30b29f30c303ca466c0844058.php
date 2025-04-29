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

/* passager/liste_annonce.html.twig */
class __TwigTemplate_85bf82200b1a74adb8a783343d9a5324 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layouts/user_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/liste_annonce.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/liste_annonce.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "passager/liste_annonce.html.twig", 1);
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

        yield "Liste des Annonces - Passager";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"flex justify-between items-center mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Liste des annonces disponibles</h1>
                    <p class=\"text-gray-600\">Consultez les annonces de covoiturage et trouvez votre prochain déplacement.</p>
                </div>
            </div>

            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["success"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            yield "                <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
            <form action=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_liste_annonce");
        yield "\" method=\"GET\" class=\"mb-6\">
                <div class=\"flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6\">
                    <div class=\"flex items-center\">
                        <div class=\"relative\">
                            <input type=\"text\" name=\"search\" placeholder=\"Rechercher par titre, départ ou arrivée...\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "query", [], "any", false, false, false, 25), "get", ["search"], "method", false, false, false, 25), "html", null, true);
        yield "\" class=\"pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 absolute left-3 top-2.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\" />
                            </svg>
                        </div>
                        <button type=\"submit\" class=\"ml-2 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors duration-300\">
                            Rechercher
                        </button>
                        <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_rechercher_position");
        yield "\" class=\"ml-2 px-4 py-2 flex items-center bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors duration-300\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                            </svg>
                            Position actuelle
                        </a>
                        ";
        // line 40
        if ((isset($context["currentLocation"]) || array_key_exists("currentLocation", $context) ? $context["currentLocation"] : (function () { throw new RuntimeError('Variable "currentLocation" does not exist.', 40, $this->source); })())) {
            // line 41
            yield "                            <div class=\"ml-3 flex items-center text-gray-700\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                </svg>
                                <span>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentLocation"]) || array_key_exists("currentLocation", $context) ? $context["currentLocation"] : (function () { throw new RuntimeError('Variable "currentLocation" does not exist.', 45, $this->source); })()), "html", null, true);
            yield "</span>
                            </div>
                        ";
        }
        // line 48
        yield "                    </div>
                    <div class=\"flex gap-2\">
                        <select name=\"status\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50\" onchange=\"this.form.submit()\">
                            <option value=\"\" ";
        // line 51
        if (((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "query", [], "any", false, false, false, 51), "get", ["status"], "method", false, false, false, 51)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "query", [], "any", false, false, false, 51), "get", ["status"], "method", false, false, false, 51) == ""))) {
            yield "selected";
        }
        yield ">Tous les statuts</option>
                            <option value=\"ouvert\" ";
        // line 52
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "request", [], "any", false, false, false, 52), "query", [], "any", false, false, false, 52), "get", ["status"], "method", false, false, false, 52) == "ouvert")) {
            yield "selected";
        }
        yield ">Ouvert</option>
                            <option value=\"plein\" ";
        // line 53
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "request", [], "any", false, false, false, 53), "query", [], "any", false, false, false, 53), "get", ["status"], "method", false, false, false, 53) == "plein")) {
            yield "selected";
        }
        yield ">Complet</option>
                        </select>
                        <select name=\"sort\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50\" onchange=\"this.form.submit()\">
                            <option value=\"\" ";
        // line 56
        if (((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "query", [], "any", false, false, false, 56), "get", ["sort"], "method", false, false, false, 56)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "query", [], "any", false, false, false, 56), "get", ["sort"], "method", false, false, false, 56) == ""))) {
            yield "selected";
        }
        yield ">Trier par</option>
                            <option value=\"recent\" ";
        // line 57
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "query", [], "any", false, false, false, 57), "get", ["sort"], "method", false, false, false, 57) == "recent")) {
            yield "selected";
        }
        yield ">Plus récents</option>
                            <option value=\"ancien\" ";
        // line 58
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "query", [], "any", false, false, false, 58), "get", ["sort"], "method", false, false, false, 58) == "ancien")) {
            yield "selected";
        }
        yield ">Plus anciens</option>
                            <option value=\"prix-asc\" ";
        // line 59
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "query", [], "any", false, false, false, 59), "get", ["sort"], "method", false, false, false, 59) == "prix-asc")) {
            yield "selected";
        }
        yield ">Prix croissant</option>
                            <option value=\"prix-desc\" ";
        // line 60
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "query", [], "any", false, false, false, 60), "get", ["sort"], "method", false, false, false, 60) == "prix-desc")) {
            yield "selected";
        }
        yield ">Prix décroissant</option>
                        </select>
                    </div>
                </div>
            </form>

            ";
        // line 66
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 66, $this->source); })()))) {
            // line 67
            yield "                <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucune annonce trouvée</h3>
                    <p class=\"mt-2 text-gray-600\">Réessayez plus tard ou modifiez vos critères de recherche.</p>
                </div>
            ";
        } else {
            // line 75
            yield "                <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
                    ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 76, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 77
                yield "                        <div class=\"bg-white rounded-xl shadow-md overflow-hidden\">
                            <div class=\"p-6\">
                                <div class=\"flex justify-between items-start\">
                                    <div>
                                        <h3 class=\"font-bold text-xl text-gray-900\">";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 81), "html", null, true);
                yield "</h3>
                                        <p class=\"text-gray-600\">Départ le ";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "departureDate", [], "any", false, false, false, 82), "d/m/Y à H:i"), "html", null, true);
                yield "</p>
                                    </div>
                                    ";
                // line 84
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "status", [], "any", false, false, false, 84) == "ouvert")) {
                    // line 85
                    yield "                                        <span class=\"px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">
                                            Ouvert
                                        </span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 88
$context["annonce"], "status", [], "any", false, false, false, 88) == "plein")) {
                    // line 89
                    yield "                                        <span class=\"px-3 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full\">
                                            Plein
                                        </span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 92
$context["annonce"], "status", [], "any", false, false, false, 92) == "termine")) {
                    // line 93
                    yield "                                        <span class=\"px-3 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full\">
                                            Terminé
                                        </span>
                                    ";
                } else {
                    // line 97
                    yield "                                        <span class=\"px-3 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full\">
                                            ";
                    // line 98
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "status", [], "any", false, false, false, 98), "html", null, true);
                    yield "
                                        </span>
                                    ";
                }
                // line 101
                yield "                                </div>
                                
                                <div class=\"mt-4 space-y-2\">
                                    <div class=\"flex items-start\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                        </svg>
                                        <div>
                                            <span class=\"text-gray-700\">";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "trajet", [], "any", false, false, false, 110), "getDeparturePoint", [], "method", false, false, false, 110), "html", null, true);
                yield "</span>
                                            <div class=\"flex items-center\">
                                                <div class=\"h-4 border-l-2 border-dotted border-gray-400 ml-1.5\"></div>
                                            </div>
                                            <span class=\"text-gray-700\">";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "trajet", [], "any", false, false, false, 114), "getArrivalPoint", [], "method", false, false, false, 114), "html", null, true);
                yield "</span>
                                        </div>
                                    </div>
                                    <div class=\"flex items-start\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                        </svg>
                                        <span class=\"text-gray-700 font-medium\">";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "trajet", [], "any", false, false, false, 121), "price", [], "any", false, false, false, 121), "html", null, true);
                yield "DT</span>
                                    </div>
                                    <div class=\"flex items-start\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                                        </svg>
                                        <span class=\"text-gray-700\">";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "getAvailableSeats", [], "method", false, false, false, 127), "html", null, true);
                yield " places disponibles</span>
                                    </div>
                                </div>
                                
                                ";
                // line 131
                if (CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 131)) {
                    // line 132
                    yield "                                    <div class=\"mt-4\">
                                        <p class=\"text-sm text-gray-600\">";
                    // line 133
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 133)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 133), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 133), "html", null, true)));
                    yield "</p>
                                    </div>
                                ";
                }
                // line 136
                yield "                                
                                <div class=\"mt-4 flex justify-end\">
                                    ";
                // line 138
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "status", [], "any", false, false, false, 138) != "plein") && (CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "status", [], "any", false, false, false, 138) != "termine"))) {
                    // line 139
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_reservation_create", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 139)]), "html", null, true);
                    yield "\" 
                                           class=\"inline-flex items-center px-3 py-1.5 bg-green-100 text-green-800 text-xs font-medium rounded-lg hover:bg-green-200 transition-colors duration-300\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z\" />
                                            </svg>
                                            Réserver
                                        </a>
                                    ";
                } else {
                    // line 147
                    yield "                                        <span class=\"inline-flex items-center px-3 py-1.5 bg-gray-100 text-gray-500 text-xs font-medium rounded-lg\">
                                            Non disponible
                                        </span>
                                    ";
                }
                // line 151
                yield "                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['annonce'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            yield "                </div>
            ";
        }
        // line 157
        yield "
            <div class=\"mt-6 flex justify-center\">
                <nav class=\"flex items-center space-x-2\">
                    <a href=\"#\" class=\"px-3 py-1 rounded border border-gray-300 text-gray-700 hover:bg-gray-50\">
                        <i class=\"fas fa-chevron-left\"></i>
                    </a>
                    <a href=\"#\" class=\"px-3 py-1 rounded border border-primary bg-primary text-white\">1</a>
                    <a href=\"#\" class=\"px-3 py-1 rounded border border-gray-300 text-gray-700 hover:bg-gray-50\">2</a>
                    <a href=\"#\" class=\"px-3 py-1 rounded border border-gray-300 text-gray-700 hover:bg-gray-50\">3</a>
                    <a href=\"#\" class=\"px-3 py-1 rounded border border-gray-300 text-gray-700 hover:bg-gray-50\">
                        <i class=\"fas fa-chevron-right\"></i>
                    </a>
                </nav>
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
        return "passager/liste_annonce.html.twig";
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
        return array (  389 => 157,  385 => 155,  376 => 151,  370 => 147,  358 => 139,  356 => 138,  352 => 136,  346 => 133,  343 => 132,  341 => 131,  334 => 127,  325 => 121,  315 => 114,  308 => 110,  297 => 101,  291 => 98,  288 => 97,  282 => 93,  280 => 92,  275 => 89,  273 => 88,  268 => 85,  266 => 84,  261 => 82,  257 => 81,  251 => 77,  247 => 76,  244 => 75,  234 => 67,  232 => 66,  221 => 60,  215 => 59,  209 => 58,  203 => 57,  197 => 56,  189 => 53,  183 => 52,  177 => 51,  172 => 48,  166 => 45,  160 => 41,  158 => 40,  148 => 33,  137 => 25,  130 => 21,  127 => 20,  118 => 17,  115 => 16,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Liste des Annonces - Passager{% endblock %}

{% block content %}
    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"flex justify-between items-center mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Liste des annonces disponibles</h1>
                    <p class=\"text-gray-600\">Consultez les annonces de covoiturage et trouvez votre prochain déplacement.</p>
                </div>
            </div>

            {% for message in app.flashes('success') %}
                <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>{{ message }}</p>
                </div>
            {% endfor %}

            <form action=\"{{ path('app_passager_liste_annonce') }}\" method=\"GET\" class=\"mb-6\">
                <div class=\"flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6\">
                    <div class=\"flex items-center\">
                        <div class=\"relative\">
                            <input type=\"text\" name=\"search\" placeholder=\"Rechercher par titre, départ ou arrivée...\" value=\"{{ app.request.query.get('search') }}\" class=\"pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 absolute left-3 top-2.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\" />
                            </svg>
                        </div>
                        <button type=\"submit\" class=\"ml-2 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors duration-300\">
                            Rechercher
                        </button>
                        <a href=\"{{ path('app_passager_rechercher_position') }}\" class=\"ml-2 px-4 py-2 flex items-center bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors duration-300\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                            </svg>
                            Position actuelle
                        </a>
                        {% if currentLocation %}
                            <div class=\"ml-3 flex items-center text-gray-700\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                </svg>
                                <span>{{ currentLocation }}</span>
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"flex gap-2\">
                        <select name=\"status\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50\" onchange=\"this.form.submit()\">
                            <option value=\"\" {% if app.request.query.get('status') is null or app.request.query.get('status') == '' %}selected{% endif %}>Tous les statuts</option>
                            <option value=\"ouvert\" {% if app.request.query.get('status') == 'ouvert' %}selected{% endif %}>Ouvert</option>
                            <option value=\"plein\" {% if app.request.query.get('status') == 'plein' %}selected{% endif %}>Complet</option>
                        </select>
                        <select name=\"sort\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50\" onchange=\"this.form.submit()\">
                            <option value=\"\" {% if app.request.query.get('sort') is null or app.request.query.get('sort') == '' %}selected{% endif %}>Trier par</option>
                            <option value=\"recent\" {% if app.request.query.get('sort') == 'recent' %}selected{% endif %}>Plus récents</option>
                            <option value=\"ancien\" {% if app.request.query.get('sort') == 'ancien' %}selected{% endif %}>Plus anciens</option>
                            <option value=\"prix-asc\" {% if app.request.query.get('sort') == 'prix-asc' %}selected{% endif %}>Prix croissant</option>
                            <option value=\"prix-desc\" {% if app.request.query.get('sort') == 'prix-desc' %}selected{% endif %}>Prix décroissant</option>
                        </select>
                    </div>
                </div>
            </form>

            {% if annonces is empty %}
                <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucune annonce trouvée</h3>
                    <p class=\"mt-2 text-gray-600\">Réessayez plus tard ou modifiez vos critères de recherche.</p>
                </div>
            {% else %}
                <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
                    {% for annonce in annonces %}
                        <div class=\"bg-white rounded-xl shadow-md overflow-hidden\">
                            <div class=\"p-6\">
                                <div class=\"flex justify-between items-start\">
                                    <div>
                                        <h3 class=\"font-bold text-xl text-gray-900\">{{ annonce.titre }}</h3>
                                        <p class=\"text-gray-600\">Départ le {{ annonce.departureDate|date(\"d/m/Y à H:i\") }}</p>
                                    </div>
                                    {% if annonce.status == 'ouvert' %}
                                        <span class=\"px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">
                                            Ouvert
                                        </span>
                                    {% elseif annonce.status == 'plein' %}
                                        <span class=\"px-3 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full\">
                                            Plein
                                        </span>
                                    {% elseif annonce.status == 'termine' %}
                                        <span class=\"px-3 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full\">
                                            Terminé
                                        </span>
                                    {% else %}
                                        <span class=\"px-3 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full\">
                                            {{ annonce.status }}
                                        </span>
                                    {% endif %}
                                </div>
                                
                                <div class=\"mt-4 space-y-2\">
                                    <div class=\"flex items-start\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                        </svg>
                                        <div>
                                            <span class=\"text-gray-700\">{{ annonce.trajet.getDeparturePoint() }}</span>
                                            <div class=\"flex items-center\">
                                                <div class=\"h-4 border-l-2 border-dotted border-gray-400 ml-1.5\"></div>
                                            </div>
                                            <span class=\"text-gray-700\">{{ annonce.trajet.getArrivalPoint() }}</span>
                                        </div>
                                    </div>
                                    <div class=\"flex items-start\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                        </svg>
                                        <span class=\"text-gray-700 font-medium\">{{ annonce.trajet.price }}DT</span>
                                    </div>
                                    <div class=\"flex items-start\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                                        </svg>
                                        <span class=\"text-gray-700\">{{ annonce.getAvailableSeats() }} places disponibles</span>
                                    </div>
                                </div>
                                
                                {% if annonce.description %}
                                    <div class=\"mt-4\">
                                        <p class=\"text-sm text-gray-600\">{{ annonce.description|length > 100 ? annonce.description|slice(0, 100) ~ '...' : annonce.description }}</p>
                                    </div>
                                {% endif %}
                                
                                <div class=\"mt-4 flex justify-end\">
                                    {% if annonce.status != 'plein' and annonce.status != 'termine' %}
                                        <a href=\"{{ path('app_passager_reservation_create', {'id': annonce.id}) }}\" 
                                           class=\"inline-flex items-center px-3 py-1.5 bg-green-100 text-green-800 text-xs font-medium rounded-lg hover:bg-green-200 transition-colors duration-300\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z\" />
                                            </svg>
                                            Réserver
                                        </a>
                                    {% else %}
                                        <span class=\"inline-flex items-center px-3 py-1.5 bg-gray-100 text-gray-500 text-xs font-medium rounded-lg\">
                                            Non disponible
                                        </span>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% endif %}

            <div class=\"mt-6 flex justify-center\">
                <nav class=\"flex items-center space-x-2\">
                    <a href=\"#\" class=\"px-3 py-1 rounded border border-gray-300 text-gray-700 hover:bg-gray-50\">
                        <i class=\"fas fa-chevron-left\"></i>
                    </a>
                    <a href=\"#\" class=\"px-3 py-1 rounded border border-primary bg-primary text-white\">1</a>
                    <a href=\"#\" class=\"px-3 py-1 rounded border border-gray-300 text-gray-700 hover:bg-gray-50\">2</a>
                    <a href=\"#\" class=\"px-3 py-1 rounded border border-gray-300 text-gray-700 hover:bg-gray-50\">3</a>
                    <a href=\"#\" class=\"px-3 py-1 rounded border border-gray-300 text-gray-700 hover:bg-gray-50\">
                        <i class=\"fas fa-chevron-right\"></i>
                    </a>
                </nav>
            </div>
        </div>
    </div>
{% endblock %} ", "passager/liste_annonce.html.twig", "D:\\Covoituni_web-master\\templates\\passager\\liste_annonce.html.twig");
    }
}
