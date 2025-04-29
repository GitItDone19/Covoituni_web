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

/* conducteur/liste_annonce.html.twig */
class __TwigTemplate_c5d89c0bc70ea61f1b2a440d5d8f7fb6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/liste_annonce.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/liste_annonce.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/liste_annonce.html.twig", 1);
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

        yield "Liste des Annonces - Conducteur";
        
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
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Liste de vos annonces</h1>
                    <p class=\"text-gray-600\">Consultez et gérez l'ensemble de vos annonces de covoiturage.</p>
                </div>
                <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_ajouter_annonce");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                    </svg>
                    Ajouter Annonce
                </a>
            </div>
            
            <div class=\"mb-6\">
                <form action=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_liste_annonce");
        yield "\" method=\"GET\" class=\"mb-6\">
                    <div class=\"flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6\">
                        <div class=\"flex items-center\">
                            <div class=\"relative\">
                                <input type=\"text\" name=\"search\" placeholder=\"Rechercher par titre...\" value=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "query", [], "any", false, false, false, 26), "get", ["search"], "method", false, false, false, 26), "html", null, true);
        yield "\" class=\"pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 absolute left-3 top-2.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\" />
                                </svg>
                            </div>
                            <button type=\"submit\" class=\"ml-2 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors duration-300\">
                                Rechercher
                            </button>
                        </div>
                        <div class=\"flex gap-2\">
                            <select name=\"status\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50\" onchange=\"this.form.submit()\">
                                <option value=\"\" ";
        // line 37
        if (((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "query", [], "any", false, false, false, 37), "get", ["status"], "method", false, false, false, 37)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "query", [], "any", false, false, false, 37), "get", ["status"], "method", false, false, false, 37) == ""))) {
            yield "selected";
        }
        yield ">Tous les statuts</option>
                                <option value=\"ouvert\" ";
        // line 38
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "query", [], "any", false, false, false, 38), "get", ["status"], "method", false, false, false, 38) == "ouvert")) {
            yield "selected";
        }
        yield ">Actif</option>
                                <option value=\"plein\" ";
        // line 39
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "query", [], "any", false, false, false, 39), "get", ["status"], "method", false, false, false, 39) == "plein")) {
            yield "selected";
        }
        yield ">Complet</option>
                                <option value=\"termine\" ";
        // line 40
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "query", [], "any", false, false, false, 40), "get", ["status"], "method", false, false, false, 40) == "termine")) {
            yield "selected";
        }
        yield ">Terminé</option>
                                <option value=\"annule\" ";
        // line 41
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "query", [], "any", false, false, false, 41), "get", ["status"], "method", false, false, false, 41) == "annule")) {
            yield "selected";
        }
        yield ">Annulé</option>
                            </select>
                            <select name=\"sort\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50\" onchange=\"this.form.submit()\">
                                <option value=\"\" ";
        // line 44
        if (((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "query", [], "any", false, false, false, 44), "get", ["sort"], "method", false, false, false, 44)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "query", [], "any", false, false, false, 44), "get", ["sort"], "method", false, false, false, 44) == ""))) {
            yield "selected";
        }
        yield ">Trier par</option>
                                <option value=\"recent\" ";
        // line 45
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "query", [], "any", false, false, false, 45), "get", ["sort"], "method", false, false, false, 45) == "recent")) {
            yield "selected";
        }
        yield ">Plus récents</option>
                                <option value=\"ancien\" ";
        // line 46
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "request", [], "any", false, false, false, 46), "query", [], "any", false, false, false, 46), "get", ["sort"], "method", false, false, false, 46) == "ancien")) {
            yield "selected";
        }
        yield ">Plus anciens</option>
                                <option value=\"prix-asc\" ";
        // line 47
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "query", [], "any", false, false, false, 47), "get", ["sort"], "method", false, false, false, 47) == "prix-asc")) {
            yield "selected";
        }
        yield ">Prix croissant</option>
                                <option value=\"prix-desc\" ";
        // line 48
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "query", [], "any", false, false, false, 48), "get", ["sort"], "method", false, false, false, 48) == "prix-desc")) {
            yield "selected";
        }
        yield ">Prix décroissant</option>
                            </select>
                        </div>
                    </div>
                </form>
                
                ";
        // line 54
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 54, $this->source); })()))) {
            // line 55
            yield "                    <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucune annonce trouvée</h3>
                        <p class=\"mt-2 text-gray-600\">Vous n'avez pas encore créé d'annonce de covoiturage.</p>
                        <a href=\"";
            // line 61
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_ajouter_annonce");
            yield "\" class=\"mt-4 inline-flex items-center px-4 py-2 bg-primary text-white rounded-xl hover:bg-primary-dark transition duration-300\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                            </svg>
                            Créer votre première annonce
                        </a>
                    </div>
                ";
        } else {
            // line 69
            yield "                    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
                        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 70, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 71
                yield "                            <div class=\"bg-white rounded-xl shadow-md overflow-hidden\">
                                <div class=\"p-6\">
                                    <div class=\"flex justify-between items-start\">
                                        <div>
                                            <h3 class=\"font-bold text-xl text-gray-900\">";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 75), "html", null, true);
                yield "</h3>
                                            <p class=\"text-gray-600\">Départ le ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "departureDate", [], "any", false, false, false, 76), "d/m/Y à H:i"), "html", null, true);
                yield "</p>
                                        </div>
                                        ";
                // line 78
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "status", [], "any", false, false, false, 78) == "ouvert")) {
                    // line 79
                    yield "                                            <span class=\"px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">
                                                Ouvert
                                            </span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 82
$context["annonce"], "status", [], "any", false, false, false, 82) == "plein")) {
                    // line 83
                    yield "                                            <span class=\"px-3 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full\">
                                                Plein
                                            </span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 86
$context["annonce"], "status", [], "any", false, false, false, 86) == "termine")) {
                    // line 87
                    yield "                                            <span class=\"px-3 py-1 bg-gray-100 text-gray-800 text-xs font-semibold rounded-full\">
                                                Terminé
                                            </span>
                                        ";
                } else {
                    // line 91
                    yield "                                            <span class=\"px-3 py-1 bg-red-100 text-red-800 text-xs font-semibold rounded-full\">
                                                ";
                    // line 92
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "status", [], "any", false, false, false, 92), "html", null, true);
                    yield "
                                            </span>
                                        ";
                }
                // line 95
                yield "                                    </div>
                                    
                                    <div class=\"mt-4 space-y-2\">
                                        <div class=\"flex items-start\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                            </svg>
                                            <div>
                                                <span class=\"text-gray-700\">";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "trajet", [], "any", false, false, false, 104), "departurePoint", [], "any", false, false, false, 104), "html", null, true);
                yield "</span>
                                                <div class=\"flex items-center\">
                                                    <div class=\"h-4 border-l-2 border-dotted border-gray-400 ml-1.5\"></div>
                                                </div>
                                                <span class=\"text-gray-700\">";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "trajet", [], "any", false, false, false, 108), "arrivalPoint", [], "any", false, false, false, 108), "html", null, true);
                yield "</span>
                                            </div>
                                        </div>
                                        <div class=\"flex items-start\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                            </svg>
                                            <div class=\"text-sm font-medium\">
                                                ";
                // line 116
                if (CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "trajet", [], "any", false, false, false, 116)) {
                    // line 117
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "trajet", [], "any", false, false, false, 117), "price", [], "any", false, false, false, 117), "html", null, true);
                    yield " DT
                                                ";
                } else {
                    // line 119
                    yield "                                                    - DT
                                                ";
                }
                // line 121
                yield "                                            </div>
                                        </div>
                                        <div class=\"flex items-start\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                                            </svg>
                                            <span class=\"text-gray-700\">
                                                ";
                // line 128
                if (CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "reservations", [], "any", true, true, false, 128)) {
                    // line 129
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "getAvailableSeats", [], "any", false, false, false, 129) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "reservations", [], "any", false, false, false, 129))), "html", null, true);
                    yield "/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "getAvailableSeats", [], "any", false, false, false, 129), "html", null, true);
                    yield " places disponibles
                                                ";
                } else {
                    // line 131
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "getAvailableSeats", [], "any", false, false, false, 131), "html", null, true);
                    yield "/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "getAvailableSeats", [], "any", false, false, false, 131), "html", null, true);
                    yield " places disponibles
                                                ";
                }
                // line 133
                yield "                                            </span>
                                        </div>
                                    </div>
                                    
                                    ";
                // line 137
                if (CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 137)) {
                    // line 138
                    yield "                                        <div class=\"mt-4\">
                                            <p class=\"text-sm text-gray-600\">";
                    // line 139
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 139)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 139), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 139), "html", null, true)));
                    yield "</p>
                                        </div>
                                    ";
                }
                // line 142
                yield "                                    
                                    <div class=\"mt-4 flex flex-wrap gap-2 justify-end\">
                                        <a href=\"";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_reservations", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 144)]), "html", null, true);
                yield "\" class=\"inline-flex items-center px-3 py-1.5 bg-blue-100 text-blue-800 text-xs font-medium rounded-lg hover:bg-blue-200 transition-colors duration-300\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 002 2h3a2 2 0 002-2V7a2 2 0 00-2-2H5zM5 16a2 2 0 00-2 2v3a2 2 0 002 2h3a2 2 0 002-2v-3a2 2 0 00-2-2H5z\" />
                                            </svg>
                                            Réservations
                                        </a>
                                        <a href=\"";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_modifier_annonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 150)]), "html", null, true);
                yield "\" class=\"inline-flex items-center px-3 py-1.5 bg-yellow-100 text-yellow-800 text-xs font-medium rounded-lg hover:bg-yellow-200 transition-colors duration-300\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\" />
                                            </svg>
                                            Modifier
                                        </a>
                                        <form action=\"";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_terminer_annonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 156)]), "html", null, true);
                yield "\" method=\"POST\" class=\"inline\">
                                            <button type=\"submit\" class=\"inline-flex items-center px-3 py-1.5 bg-green-100 text-green-800 text-xs font-medium rounded-lg hover:bg-green-200 transition-colors duration-300\" 
                                                    onclick=\"return confirm('Êtes-vous sûr de vouloir terminer cette annonce ?')\"
                                                    ";
                // line 159
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "status", [], "any", false, false, false, 159) == "termine")) {
                    yield "disabled";
                }
                yield ">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                                </svg>
                                                Terminer
                                            </button>
                                        </form>
                                        <a href=\"";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_supprimer_annonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 166)]), "html", null, true);
                yield "\" 
                                           class=\"inline-flex items-center px-3 py-1.5 bg-red-100 text-red-800 text-xs font-medium rounded-lg hover:bg-red-200 transition-colors duration-300\" 
                                           onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ? Cette action ne peut pas être annulée.')\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                                            </svg>
                                            Supprimer
                                        </a>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['annonce'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            yield "                    </div>
                ";
        }
        // line 180
        yield "                
                <div class=\"mt-4 flex justify-center\">
                    <nav class=\"relative z-0 inline-flex rounded-md shadow-sm -space-x-px\" aria-label=\"Pagination\">
                        <a href=\"#\" class=\"relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                            <span class=\"sr-only\">Précédent</span>
                            <svg class=\"h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                                <path fill-rule=\"evenodd\" d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\" clip-rule=\"evenodd\" />
                            </svg>
                        </a>
                        <a href=\"#\" aria-current=\"page\" class=\"z-10 bg-primary-ultra-light border-primary text-primary relative inline-flex items-center px-4 py-2 border text-sm font-medium\">
                            1
                        </a>
                        <a href=\"#\" class=\"bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium\">
                            2
                        </a>
                        <a href=\"#\" class=\"bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium\">
                            3
                        </a>
                        <a href=\"#\" class=\"relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                            <span class=\"sr-only\">Suivant</span>
                            <svg class=\"h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                                <path fill-rule=\"evenodd\" d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\" clip-rule=\"evenodd\" />
                            </svg>
                        </a>
                    </nav>
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
        return "conducteur/liste_annonce.html.twig";
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
        return array (  430 => 180,  426 => 178,  408 => 166,  396 => 159,  390 => 156,  381 => 150,  372 => 144,  368 => 142,  362 => 139,  359 => 138,  357 => 137,  351 => 133,  343 => 131,  335 => 129,  333 => 128,  324 => 121,  320 => 119,  314 => 117,  312 => 116,  301 => 108,  294 => 104,  283 => 95,  277 => 92,  274 => 91,  268 => 87,  266 => 86,  261 => 83,  259 => 82,  254 => 79,  252 => 78,  247 => 76,  243 => 75,  237 => 71,  233 => 70,  230 => 69,  219 => 61,  211 => 55,  209 => 54,  198 => 48,  192 => 47,  186 => 46,  180 => 45,  174 => 44,  166 => 41,  160 => 40,  154 => 39,  148 => 38,  142 => 37,  128 => 26,  121 => 22,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Liste des Annonces - Conducteur{% endblock %}

{% block content %}
    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"flex justify-between items-center mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Liste de vos annonces</h1>
                    <p class=\"text-gray-600\">Consultez et gérez l'ensemble de vos annonces de covoiturage.</p>
                </div>
                <a href=\"{{ path('app_conducteur_ajouter_annonce') }}\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                    </svg>
                    Ajouter Annonce
                </a>
            </div>
            
            <div class=\"mb-6\">
                <form action=\"{{ path('app_conducteur_liste_annonce') }}\" method=\"GET\" class=\"mb-6\">
                    <div class=\"flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6\">
                        <div class=\"flex items-center\">
                            <div class=\"relative\">
                                <input type=\"text\" name=\"search\" placeholder=\"Rechercher par titre...\" value=\"{{ app.request.query.get('search') }}\" class=\"pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 absolute left-3 top-2.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\" />
                                </svg>
                            </div>
                            <button type=\"submit\" class=\"ml-2 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors duration-300\">
                                Rechercher
                            </button>
                        </div>
                        <div class=\"flex gap-2\">
                            <select name=\"status\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50\" onchange=\"this.form.submit()\">
                                <option value=\"\" {% if app.request.query.get('status') is null or app.request.query.get('status') == '' %}selected{% endif %}>Tous les statuts</option>
                                <option value=\"ouvert\" {% if app.request.query.get('status') == 'ouvert' %}selected{% endif %}>Actif</option>
                                <option value=\"plein\" {% if app.request.query.get('status') == 'plein' %}selected{% endif %}>Complet</option>
                                <option value=\"termine\" {% if app.request.query.get('status') == 'termine' %}selected{% endif %}>Terminé</option>
                                <option value=\"annule\" {% if app.request.query.get('status') == 'annule' %}selected{% endif %}>Annulé</option>
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
                        <p class=\"mt-2 text-gray-600\">Vous n'avez pas encore créé d'annonce de covoiturage.</p>
                        <a href=\"{{ path('app_conducteur_ajouter_annonce') }}\" class=\"mt-4 inline-flex items-center px-4 py-2 bg-primary text-white rounded-xl hover:bg-primary-dark transition duration-300\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                            </svg>
                            Créer votre première annonce
                        </a>
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
                                            <span class=\"px-3 py-1 bg-red-100 text-red-800 text-xs font-semibold rounded-full\">
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
                                                <span class=\"text-gray-700\">{{ annonce.trajet.departurePoint }}</span>
                                                <div class=\"flex items-center\">
                                                    <div class=\"h-4 border-l-2 border-dotted border-gray-400 ml-1.5\"></div>
                                                </div>
                                                <span class=\"text-gray-700\">{{ annonce.trajet.arrivalPoint }}</span>
                                            </div>
                                        </div>
                                        <div class=\"flex items-start\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                            </svg>
                                            <div class=\"text-sm font-medium\">
                                                {% if annonce.trajet %}
                                                    {{ annonce.trajet.price }} DT
                                                {% else %}
                                                    - DT
                                                {% endif %}
                                            </div>
                                        </div>
                                        <div class=\"flex items-start\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                                            </svg>
                                            <span class=\"text-gray-700\">
                                                {% if annonce.reservations is defined %}
                                                    {{ annonce.getAvailableSeats - annonce.reservations|length }}/{{ annonce.getAvailableSeats }} places disponibles
                                                {% else %}
                                                    {{ annonce.getAvailableSeats }}/{{ annonce.getAvailableSeats }} places disponibles
                                                {% endif %}
                                            </span>
                                        </div>
                                    </div>
                                    
                                    {% if annonce.description %}
                                        <div class=\"mt-4\">
                                            <p class=\"text-sm text-gray-600\">{{ annonce.description|length > 100 ? annonce.description|slice(0, 100) ~ '...' : annonce.description }}</p>
                                        </div>
                                    {% endif %}
                                    
                                    <div class=\"mt-4 flex flex-wrap gap-2 justify-end\">
                                        <a href=\"{{ path('app_conducteur_reservations', {'id': annonce.id}) }}\" class=\"inline-flex items-center px-3 py-1.5 bg-blue-100 text-blue-800 text-xs font-medium rounded-lg hover:bg-blue-200 transition-colors duration-300\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 002 2h3a2 2 0 002-2V7a2 2 0 00-2-2H5zM5 16a2 2 0 00-2 2v3a2 2 0 002 2h3a2 2 0 002-2v-3a2 2 0 00-2-2H5z\" />
                                            </svg>
                                            Réservations
                                        </a>
                                        <a href=\"{{ path('app_conducteur_modifier_annonce', {'id': annonce.id}) }}\" class=\"inline-flex items-center px-3 py-1.5 bg-yellow-100 text-yellow-800 text-xs font-medium rounded-lg hover:bg-yellow-200 transition-colors duration-300\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\" />
                                            </svg>
                                            Modifier
                                        </a>
                                        <form action=\"{{ path('app_conducteur_terminer_annonce', {'id': annonce.id}) }}\" method=\"POST\" class=\"inline\">
                                            <button type=\"submit\" class=\"inline-flex items-center px-3 py-1.5 bg-green-100 text-green-800 text-xs font-medium rounded-lg hover:bg-green-200 transition-colors duration-300\" 
                                                    onclick=\"return confirm('Êtes-vous sûr de vouloir terminer cette annonce ?')\"
                                                    {% if annonce.status == 'termine' %}disabled{% endif %}>
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                                </svg>
                                                Terminer
                                            </button>
                                        </form>
                                        <a href=\"{{ path('app_conducteur_supprimer_annonce', {'id': annonce.id}) }}\" 
                                           class=\"inline-flex items-center px-3 py-1.5 bg-red-100 text-red-800 text-xs font-medium rounded-lg hover:bg-red-200 transition-colors duration-300\" 
                                           onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ? Cette action ne peut pas être annulée.')\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                                            </svg>
                                            Supprimer
                                        </a>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                {% endif %}
                
                <div class=\"mt-4 flex justify-center\">
                    <nav class=\"relative z-0 inline-flex rounded-md shadow-sm -space-x-px\" aria-label=\"Pagination\">
                        <a href=\"#\" class=\"relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                            <span class=\"sr-only\">Précédent</span>
                            <svg class=\"h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                                <path fill-rule=\"evenodd\" d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\" clip-rule=\"evenodd\" />
                            </svg>
                        </a>
                        <a href=\"#\" aria-current=\"page\" class=\"z-10 bg-primary-ultra-light border-primary text-primary relative inline-flex items-center px-4 py-2 border text-sm font-medium\">
                            1
                        </a>
                        <a href=\"#\" class=\"bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium\">
                            2
                        </a>
                        <a href=\"#\" class=\"bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium\">
                            3
                        </a>
                        <a href=\"#\" class=\"relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50\">
                            <span class=\"sr-only\">Suivant</span>
                            <svg class=\"h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                                <path fill-rule=\"evenodd\" d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\" clip-rule=\"evenodd\" />
                            </svg>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
{% endblock %} ", "conducteur/liste_annonce.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\liste_annonce.html.twig");
    }
}
