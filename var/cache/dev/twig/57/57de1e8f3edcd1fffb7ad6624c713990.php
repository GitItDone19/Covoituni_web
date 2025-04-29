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

/* conducteur/liste_trajet.html.twig */
class __TwigTemplate_4c72caf76822fd05f6f805319a4d4857 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/liste_trajet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/liste_trajet.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/liste_trajet.html.twig", 1);
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

        yield "Liste des Trajets - Conducteur";
        
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
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Liste de vos trajets</h1>
                    <p class=\"text-gray-600\">Consultez l'ensemble de vos trajets et gérez-les facilement.</p>
                </div>
                <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_ajouter_trajet");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                    </svg>
                    Ajouter Trajet
                </a>
            </div>
            
            <div class=\"mb-6\">
                <div class=\"flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6\">
                    <div class=\"flex items-center\">
                        <div class=\"relative\">
                            <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher...\" class=\"pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 absolute left-3 top-2.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\" />
                            </svg>
                        </div>
                    </div>
                    <div class=\"flex gap-2\">
                        <select id=\"sortSelect\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50\">
                            <option value=\"\">Trier par</option>
                            <option value=\"recent\">Plus récents</option>
                            <option value=\"ancien\">Plus anciens</option>
                            <option value=\"prix-asc\">Prix croissant</option>
                            <option value=\"prix-desc\">Prix décroissant</option>
                        </select>
                    </div>
                </div>
                
                ";
        // line 42
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 42, $this->source); })()))) {
            // line 43
            yield "                    <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucun trajet trouvé</h3>
                        <p class=\"mt-2 text-gray-600\">Vous n'avez pas encore créé de trajet.</p>
                        <a href=\"";
            // line 49
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_ajouter_trajet");
            yield "\" class=\"mt-4 inline-flex items-center px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300\">
                            <i class=\"fas fa-plus mr-2\"></i>
                            Créer votre premier trajet
                        </a>
                    </div>
                ";
        } else {
            // line 55
            yield "                    <div id=\"trajetsContainer\" class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
                        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
                // line 57
                yield "                            <div class=\"trajet-card bg-white rounded-xl shadow-md overflow-hidden\" 
                                 data-titre=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "titre", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "titre", [], "any", false, false, false, 58), ((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "departurePoint", [], "any", false, false, false, 58) . " → ") . CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "arrivalPoint", [], "any", false, false, false, 58)))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "departurePoint", [], "any", false, false, false, 58) . " → ") . CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "arrivalPoint", [], "any", false, false, false, 58)))), "html", null, true);
                yield "\"
                                 data-depart=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "getDeparturePoint", [], "method", false, false, false, 59), "html", null, true);
                yield "\"
                                 data-arrivee=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "getArrivalPoint", [], "method", false, false, false, 60), "html", null, true);
                yield "\"
                                 data-prix=\"";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "price", [], "any", false, false, false, 61), "html", null, true);
                yield "\"
                                 data-date=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "createdAt", [], "any", false, false, false, 62), "Ymd"), "html", null, true);
                yield "\">
                                <div class=\"p-6\">
                                    <div class=\"flex justify-between items-start\">
                                        <div>
                                            <h3 class=\"font-bold text-xl text-gray-900\">";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "titre", [], "any", true, true, false, 66)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "titre", [], "any", false, false, false, 66), ((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "departurePoint", [], "any", false, false, false, 66) . " → ") . CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "arrivalPoint", [], "any", false, false, false, 66)))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "departurePoint", [], "any", false, false, false, 66) . " → ") . CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "arrivalPoint", [], "any", false, false, false, 66)))), "html", null, true);
                yield "</h3>
                                            <p class=\"text-gray-600\">Créé le ";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "createdAt", [], "any", false, false, false, 67), "d/m/Y à H:i"), "html", null, true);
                yield "</p>
                                        </div>
                                        <div class=\"px-3 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full\">
                                            Disponible
                                        </div>
                                    </div>
                                    
                                    <div class=\"mt-4 space-y-2\">
                                        <div class=\"flex items-start\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                            </svg>
                                            <div>
                                                <span class=\"text-gray-700\">";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "getDeparturePoint", [], "method", false, false, false, 81), "html", null, true);
                yield "</span>
                                                <div class=\"flex items-center\">
                                                    <div class=\"h-4 border-l-2 border-dotted border-gray-400 ml-1.5\"></div>
                                                </div>
                                                <span class=\"text-gray-700\">";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "getArrivalPoint", [], "method", false, false, false, 85), "html", null, true);
                yield "</span>
                                            </div>
                                        </div>
                                        <div class=\"flex items-start\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                            </svg>
                                            <span class=\"text-gray-700 font-medium\">";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "price", [], "any", false, false, false, 92), "html", null, true);
                yield " DT</span>
                                        </div>
                                    </div>
                                    
                                    <div class=\"mt-4 flex justify-end gap-2\">
                                        <a href=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map_trajet", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                yield "\" class=\"inline-flex items-center px-3 py-1.5 bg-blue-100 text-blue-800 text-xs font-medium rounded-lg hover:bg-blue-200 transition-colors duration-300\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7\" />
                                            </svg>
                                            Carte
                                        </a>
                                        <a href=\"";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_modifier_trajet", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 103)]), "html", null, true);
                yield "\" class=\"inline-flex items-center px-3 py-1.5 bg-yellow-100 text-yellow-800 text-xs font-medium rounded-lg hover:bg-yellow-200 transition-colors duration-300\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\" />
                                            </svg>
                                            Modifier
                                        </a>
                                        <a href=\"";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_supprimer_trajet", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 109)]), "html", null, true);
                yield "\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce trajet?')\" class=\"inline-flex items-center px-3 py-1.5 bg-red-100 text-red-800 text-xs font-medium rounded-lg hover:bg-red-200 transition-colors duration-300\">
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
            unset($context['_seq'], $context['_key'], $context['trajet'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield "                    </div>
                    <div id=\"noResultsMessage\" class=\"hidden bg-gray-50 rounded-xl p-8 text-center mt-4\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucun trajet trouvé</h3>
                        <p class=\"mt-2 text-gray-600\">Aucun trajet ne correspond à votre recherche.</p>
                    </div>
                ";
        }
        // line 128
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
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const sortSelect = document.getElementById('sortSelect');
    const trajetCards = document.querySelectorAll('.trajet-card');
    const trajetsContainer = document.getElementById('trajetsContainer');
    const noResultsMessage = document.getElementById('noResultsMessage');
    
    // Search functionality
    function filterTrajets() {
        const searchValue = searchInput.value.toLowerCase();
        let visibleCount = 0;
        
        trajetCards.forEach(card => {
            const titre = card.dataset.titre.toLowerCase();
            const depart = card.dataset.depart.toLowerCase();
            const arrivee = card.dataset.arrivee.toLowerCase();
            
            // Search by title, departure or arrival
            if (
                titre.includes(searchValue) || 
                depart.includes(searchValue) || 
                arrivee.includes(searchValue)
            ) {
                card.classList.remove('hidden');
                visibleCount++;
            } else {
                card.classList.add('hidden');
            }
        });
        
        // Show or hide no results message
        if (visibleCount === 0) {
            noResultsMessage.classList.remove('hidden');
        } else {
            noResultsMessage.classList.add('hidden');
        }
    }
    
    // Sorting functionality
    function sortTrajets() {
        const sortValue = sortSelect.value;
        let cardsArray = Array.from(trajetCards);
        
        // Sort based on selected value
        if (sortValue === 'recent') {
            cardsArray.sort((a, b) => b.dataset.date - a.dataset.date);
        } else if (sortValue === 'ancien') {
            cardsArray.sort((a, b) => a.dataset.date - b.dataset.date);
        } else if (sortValue === 'prix-asc') {
            cardsArray.sort((a, b) => parseFloat(a.dataset.prix) - parseFloat(b.dataset.prix));
        } else if (sortValue === 'prix-desc') {
            cardsArray.sort((a, b) => parseFloat(b.dataset.prix) - parseFloat(a.dataset.prix));
        }
        
        // Reorder DOM elements
        cardsArray.forEach(card => {
            trajetsContainer.appendChild(card);
        });
    }
    
    // Add event listeners
    if (searchInput) {
        searchInput.addEventListener('input', filterTrajets);
    }
    
    if (sortSelect) {
        sortSelect.addEventListener('change', sortTrajets);
    }
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
        return "conducteur/liste_trajet.html.twig";
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
        return array (  338 => 160,  325 => 159,  285 => 128,  274 => 119,  258 => 109,  249 => 103,  240 => 97,  232 => 92,  222 => 85,  215 => 81,  198 => 67,  194 => 66,  187 => 62,  183 => 61,  179 => 60,  175 => 59,  171 => 58,  168 => 57,  164 => 56,  161 => 55,  152 => 49,  144 => 43,  142 => 42,  110 => 13,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Liste des Trajets - Conducteur{% endblock %}

{% block content %}
    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"flex justify-between items-center mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Liste de vos trajets</h1>
                    <p class=\"text-gray-600\">Consultez l'ensemble de vos trajets et gérez-les facilement.</p>
                </div>
                <a href=\"{{ path('app_conducteur_ajouter_trajet') }}\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                    </svg>
                    Ajouter Trajet
                </a>
            </div>
            
            <div class=\"mb-6\">
                <div class=\"flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6\">
                    <div class=\"flex items-center\">
                        <div class=\"relative\">
                            <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher...\" class=\"pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 absolute left-3 top-2.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\" />
                            </svg>
                        </div>
                    </div>
                    <div class=\"flex gap-2\">
                        <select id=\"sortSelect\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50\">
                            <option value=\"\">Trier par</option>
                            <option value=\"recent\">Plus récents</option>
                            <option value=\"ancien\">Plus anciens</option>
                            <option value=\"prix-asc\">Prix croissant</option>
                            <option value=\"prix-desc\">Prix décroissant</option>
                        </select>
                    </div>
                </div>
                
                {% if trajets is empty %}
                    <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucun trajet trouvé</h3>
                        <p class=\"mt-2 text-gray-600\">Vous n'avez pas encore créé de trajet.</p>
                        <a href=\"{{ path('app_conducteur_ajouter_trajet') }}\" class=\"mt-4 inline-flex items-center px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300\">
                            <i class=\"fas fa-plus mr-2\"></i>
                            Créer votre premier trajet
                        </a>
                    </div>
                {% else %}
                    <div id=\"trajetsContainer\" class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
                        {% for trajet in trajets %}
                            <div class=\"trajet-card bg-white rounded-xl shadow-md overflow-hidden\" 
                                 data-titre=\"{{ trajet.titre|default(trajet.departurePoint ~ ' → ' ~ trajet.arrivalPoint) }}\"
                                 data-depart=\"{{ trajet.getDeparturePoint() }}\"
                                 data-arrivee=\"{{ trajet.getArrivalPoint() }}\"
                                 data-prix=\"{{ trajet.price }}\"
                                 data-date=\"{{ trajet.createdAt|date('Ymd') }}\">
                                <div class=\"p-6\">
                                    <div class=\"flex justify-between items-start\">
                                        <div>
                                            <h3 class=\"font-bold text-xl text-gray-900\">{{ trajet.titre|default(trajet.departurePoint ~ ' → ' ~ trajet.arrivalPoint) }}</h3>
                                            <p class=\"text-gray-600\">Créé le {{ trajet.createdAt|date(\"d/m/Y à H:i\") }}</p>
                                        </div>
                                        <div class=\"px-3 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full\">
                                            Disponible
                                        </div>
                                    </div>
                                    
                                    <div class=\"mt-4 space-y-2\">
                                        <div class=\"flex items-start\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                            </svg>
                                            <div>
                                                <span class=\"text-gray-700\">{{ trajet.getDeparturePoint() }}</span>
                                                <div class=\"flex items-center\">
                                                    <div class=\"h-4 border-l-2 border-dotted border-gray-400 ml-1.5\"></div>
                                                </div>
                                                <span class=\"text-gray-700\">{{ trajet.getArrivalPoint() }}</span>
                                            </div>
                                        </div>
                                        <div class=\"flex items-start\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                            </svg>
                                            <span class=\"text-gray-700 font-medium\">{{ trajet.price }} DT</span>
                                        </div>
                                    </div>
                                    
                                    <div class=\"mt-4 flex justify-end gap-2\">
                                        <a href=\"{{ path('app_map_trajet', {'id': trajet.id}) }}\" class=\"inline-flex items-center px-3 py-1.5 bg-blue-100 text-blue-800 text-xs font-medium rounded-lg hover:bg-blue-200 transition-colors duration-300\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7\" />
                                            </svg>
                                            Carte
                                        </a>
                                        <a href=\"{{ path('app_conducteur_modifier_trajet', {'id': trajet.id}) }}\" class=\"inline-flex items-center px-3 py-1.5 bg-yellow-100 text-yellow-800 text-xs font-medium rounded-lg hover:bg-yellow-200 transition-colors duration-300\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\" />
                                            </svg>
                                            Modifier
                                        </a>
                                        <a href=\"{{ path('app_conducteur_supprimer_trajet', {'id': trajet.id}) }}\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce trajet?')\" class=\"inline-flex items-center px-3 py-1.5 bg-red-100 text-red-800 text-xs font-medium rounded-lg hover:bg-red-200 transition-colors duration-300\">
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
                    <div id=\"noResultsMessage\" class=\"hidden bg-gray-50 rounded-xl p-8 text-center mt-4\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucun trajet trouvé</h3>
                        <p class=\"mt-2 text-gray-600\">Aucun trajet ne correspond à votre recherche.</p>
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
{% endblock %}

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const sortSelect = document.getElementById('sortSelect');
    const trajetCards = document.querySelectorAll('.trajet-card');
    const trajetsContainer = document.getElementById('trajetsContainer');
    const noResultsMessage = document.getElementById('noResultsMessage');
    
    // Search functionality
    function filterTrajets() {
        const searchValue = searchInput.value.toLowerCase();
        let visibleCount = 0;
        
        trajetCards.forEach(card => {
            const titre = card.dataset.titre.toLowerCase();
            const depart = card.dataset.depart.toLowerCase();
            const arrivee = card.dataset.arrivee.toLowerCase();
            
            // Search by title, departure or arrival
            if (
                titre.includes(searchValue) || 
                depart.includes(searchValue) || 
                arrivee.includes(searchValue)
            ) {
                card.classList.remove('hidden');
                visibleCount++;
            } else {
                card.classList.add('hidden');
            }
        });
        
        // Show or hide no results message
        if (visibleCount === 0) {
            noResultsMessage.classList.remove('hidden');
        } else {
            noResultsMessage.classList.add('hidden');
        }
    }
    
    // Sorting functionality
    function sortTrajets() {
        const sortValue = sortSelect.value;
        let cardsArray = Array.from(trajetCards);
        
        // Sort based on selected value
        if (sortValue === 'recent') {
            cardsArray.sort((a, b) => b.dataset.date - a.dataset.date);
        } else if (sortValue === 'ancien') {
            cardsArray.sort((a, b) => a.dataset.date - b.dataset.date);
        } else if (sortValue === 'prix-asc') {
            cardsArray.sort((a, b) => parseFloat(a.dataset.prix) - parseFloat(b.dataset.prix));
        } else if (sortValue === 'prix-desc') {
            cardsArray.sort((a, b) => parseFloat(b.dataset.prix) - parseFloat(a.dataset.prix));
        }
        
        // Reorder DOM elements
        cardsArray.forEach(card => {
            trajetsContainer.appendChild(card);
        });
    }
    
    // Add event listeners
    if (searchInput) {
        searchInput.addEventListener('input', filterTrajets);
    }
    
    if (sortSelect) {
        sortSelect.addEventListener('change', sortTrajets);
    }
});
</script>
{% endblock %} ", "conducteur/liste_trajet.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\liste_trajet.html.twig");
    }
}
