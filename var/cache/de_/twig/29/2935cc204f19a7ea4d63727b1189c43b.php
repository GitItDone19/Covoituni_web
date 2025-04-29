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

/* conducteur/event_annonces.html.twig */
class __TwigTemplate_4ab312874657ddc650439acf13003a03 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/event_annonces.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/event_annonces.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/event_annonces.html.twig", 1);
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

        yield "Annonces pour l'événement ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield " - Conducteur";
        
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
            <div class=\"flex justify-between items-start mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Annonces pour ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>
                    <div class=\"text-gray-600 space-y-1\">
                        <p>Type: ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 12, $this->source); })()), "typeEvent", [], "any", false, false, false, 12), "nom", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>
                        <p>Date: ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 13, $this->source); })()), "dateEvent", [], "any", false, false, false, 13), "d/m/Y"), "html", null, true);
        yield " à ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 13, $this->source); })()), "heureEvent", [], "any", false, false, false, 13), "H:i"), "html", null, true);
        yield "</p>
                        <p>Lieu: ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 14, $this->source); })()), "lieu", [], "any", false, false, false, 14), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div class=\"flex space-x-3\">
                    <a href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_event_annonce_create", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 18, $this->source); })()), "idEvent", [], "any", false, false, false, 18)]), "html", null, true);
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-primary text-white rounded-xl hover:bg-primary-dark transition duration-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                        </svg>
                        Ajouter une annonce
                    </a>
                    <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_events");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                        </svg>
                        Retour aux événements
                    </a>
                </div>
            </div>

            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "flashes", ["success"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 34
            yield "                <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "            
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", ["error"], "method", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 40
            yield "                <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "
            ";
        // line 45
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 45, $this->source); })())) > 0)) {
            // line 46
            yield "                <div class=\"overflow-hidden overflow-x-auto\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead class=\"bg-gray-50\">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Trajet</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Date de départ</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Places</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Prix</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Statut</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200\">
                            ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 59, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 60
                yield "                                <tr>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">
                                        <div class=\"text-sm font-medium text-gray-900\">";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 62), "html", null, true);
                yield "</div>
                                        <div class=\"text-sm text-gray-500\">
                                            ";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "departurePoint", [], "any", false, false, false, 64), "html", null, true);
                yield " → ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "arrivalPoint", [], "any", false, false, false, 64), "html", null, true);
                yield "
                                        </div>
                                    </td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">
                                        <div class=\"text-sm text-gray-900\">";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "departureDate", [], "any", false, false, false, 68), "d/m/Y"), "html", null, true);
                yield "</div>
                                        <div class=\"text-sm text-gray-500\">";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "departureDate", [], "any", false, false, false, 69), "H:i"), "html", null, true);
                yield "</div>
                                    </td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">
                                        <div class=\"text-sm text-gray-900\">";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "availableSeats", [], "any", false, false, false, 72), "html", null, true);
                yield "</div>
                                    </td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">
                                        <div class=\"text-sm text-gray-900\">";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "prix", [], "any", false, false, false, 75), 2, ".", " "), "html", null, true);
                yield " DT</div>
                                    </td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">
                                        ";
                // line 78
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "status", [], "any", false, false, false, 78) == "ouvert")) {
                    // line 79
                    yield "                                            <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">
                                                Ouvert
                                            </span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 82
$context["annonce"], "status", [], "any", false, false, false, 82) == "plein")) {
                    // line 83
                    yield "                                            <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800\">
                                                Plein
                                            </span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 86
$context["annonce"], "status", [], "any", false, false, false, 86) == "termine")) {
                    // line 87
                    yield "                                            <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800\">
                                                Terminé
                                            </span>
                                        ";
                }
                // line 91
                yield "                                    </td>
                                    <td class=\"px-6 py-4 whitespace-nowrap text-right text-sm font-medium\">
                                        <div class=\"flex justify-end space-x-2\">
                                            ";
                // line 94
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "driverId", [], "any", false, false, false, 94) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94))) {
                    // line 95
                    yield "                                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "status", [], "any", false, false, false, 95) != "termine")) {
                        // line 96
                        yield "                                                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_event_annonce_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 96)]), "html", null, true);
                        yield "\" class=\"text-yellow-600 hover:text-yellow-900\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\" />
                                                        </svg>
                                                    </a>
                                                    <form action=\"";
                        // line 101
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_event_annonce_terminer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 101)]), "html", null, true);
                        yield "\" method=\"POST\" class=\"inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir terminer cette annonce?')\">
                                                        <button type=\"submit\" class=\"text-blue-600 hover:text-blue-900\">
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                                                            </svg>
                                                        </button>
                                                    </form>
                                                ";
                    }
                    // line 109
                    yield "                                                <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_event_annonce_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 109)]), "html", null, true);
                    yield "\" method=\"POST\" class=\"inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce?')\">
                                                    <button type=\"submit\" class=\"text-red-600 hover:text-red-900\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            ";
                } else {
                    // line 117
                    yield "                                                <span class=\"text-gray-400\">Aucune action</span>
                                            ";
                }
                // line 119
                yield "                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['annonce'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 127
            yield "                <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucune annonce trouvée</h3>
                    <p class=\"mt-2 text-gray-600\">Il n'y a actuellement aucune annonce pour cet événement.</p>
                    <a href=\"";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_event_annonce_create", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 133, $this->source); })()), "idEvent", [], "any", false, false, false, 133)]), "html", null, true);
            yield "\" class=\"mt-4 inline-flex items-center px-4 py-2 bg-primary text-white rounded-xl hover:bg-primary-dark transition duration-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                        </svg>
                        Créer une annonce
                    </a>
                </div>
            ";
        }
        // line 141
        yield "        </div>
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
        return "conducteur/event_annonces.html.twig";
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
        return array (  352 => 141,  341 => 133,  333 => 127,  327 => 123,  318 => 119,  314 => 117,  302 => 109,  291 => 101,  282 => 96,  279 => 95,  277 => 94,  272 => 91,  266 => 87,  264 => 86,  259 => 83,  257 => 82,  252 => 79,  250 => 78,  244 => 75,  238 => 72,  232 => 69,  228 => 68,  219 => 64,  214 => 62,  210 => 60,  206 => 59,  191 => 46,  189 => 45,  186 => 44,  177 => 41,  174 => 40,  170 => 39,  167 => 38,  158 => 35,  155 => 34,  151 => 33,  139 => 24,  130 => 18,  123 => 14,  117 => 13,  113 => 12,  108 => 10,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Annonces pour l'événement {{ event.nom }} - Conducteur{% endblock %}

{% block content %}
    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"flex justify-between items-start mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Annonces pour {{ event.nom }}</h1>
                    <div class=\"text-gray-600 space-y-1\">
                        <p>Type: {{ event.typeEvent.nom }}</p>
                        <p>Date: {{ event.dateEvent|date('d/m/Y') }} à {{ event.heureEvent|date('H:i') }}</p>
                        <p>Lieu: {{ event.lieu }}</p>
                    </div>
                </div>
                <div class=\"flex space-x-3\">
                    <a href=\"{{ path('app_conducteur_event_annonce_create', {'id': event.idEvent}) }}\" class=\"inline-flex items-center px-4 py-2 bg-primary text-white rounded-xl hover:bg-primary-dark transition duration-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                        </svg>
                        Ajouter une annonce
                    </a>
                    <a href=\"{{ path('app_conducteur_events') }}\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                        </svg>
                        Retour aux événements
                    </a>
                </div>
            </div>

            {% for message in app.flashes('success') %}
                <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>{{ message }}</p>
                </div>
            {% endfor %}
            
            {% for message in app.flashes('error') %}
                <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded\" role=\"alert\">
                    <p>{{ message }}</p>
                </div>
            {% endfor %}

            {% if annonces|length > 0 %}
                <div class=\"overflow-hidden overflow-x-auto\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead class=\"bg-gray-50\">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Trajet</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Date de départ</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Places</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Prix</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Statut</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200\">
                            {% for annonce in annonces %}
                                <tr>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">
                                        <div class=\"text-sm font-medium text-gray-900\">{{ annonce.titre }}</div>
                                        <div class=\"text-sm text-gray-500\">
                                            {{ annonce.departurePoint }} → {{ annonce.arrivalPoint }}
                                        </div>
                                    </td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">
                                        <div class=\"text-sm text-gray-900\">{{ annonce.departureDate|date('d/m/Y') }}</div>
                                        <div class=\"text-sm text-gray-500\">{{ annonce.departureDate|date('H:i') }}</div>
                                    </td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">
                                        <div class=\"text-sm text-gray-900\">{{ annonce.availableSeats }}</div>
                                    </td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">
                                        <div class=\"text-sm text-gray-900\">{{ annonce.prix|number_format(2, '.', ' ') }} DT</div>
                                    </td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">
                                        {% if annonce.status == 'ouvert' %}
                                            <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">
                                                Ouvert
                                            </span>
                                        {% elseif annonce.status == 'plein' %}
                                            <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800\">
                                                Plein
                                            </span>
                                        {% elseif annonce.status == 'termine' %}
                                            <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800\">
                                                Terminé
                                            </span>
                                        {% endif %}
                                    </td>
                                    <td class=\"px-6 py-4 whitespace-nowrap text-right text-sm font-medium\">
                                        <div class=\"flex justify-end space-x-2\">
                                            {% if annonce.driverId == app.user.id %}
                                                {% if annonce.status != 'termine' %}
                                                    <a href=\"{{ path('app_conducteur_event_annonce_edit', {'id': annonce.id}) }}\" class=\"text-yellow-600 hover:text-yellow-900\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\" />
                                                        </svg>
                                                    </a>
                                                    <form action=\"{{ path('app_conducteur_event_annonce_terminer', {'id': annonce.id}) }}\" method=\"POST\" class=\"inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir terminer cette annonce?')\">
                                                        <button type=\"submit\" class=\"text-blue-600 hover:text-blue-900\">
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                                                            </svg>
                                                        </button>
                                                    </form>
                                                {% endif %}
                                                <form action=\"{{ path('app_conducteur_event_annonce_delete', {'id': annonce.id}) }}\" method=\"POST\" class=\"inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce?')\">
                                                    <button type=\"submit\" class=\"text-red-600 hover:text-red-900\">
                                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            {% else %}
                                                <span class=\"text-gray-400\">Aucune action</span>
                                            {% endif %}
                                        </div>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            {% else %}
                <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucune annonce trouvée</h3>
                    <p class=\"mt-2 text-gray-600\">Il n'y a actuellement aucune annonce pour cet événement.</p>
                    <a href=\"{{ path('app_conducteur_event_annonce_create', {'id': event.idEvent}) }}\" class=\"mt-4 inline-flex items-center px-4 py-2 bg-primary text-white rounded-xl hover:bg-primary-dark transition duration-300\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                        </svg>
                        Créer une annonce
                    </a>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %} ", "conducteur/event_annonces.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\event_annonces.html.twig");
    }
}
