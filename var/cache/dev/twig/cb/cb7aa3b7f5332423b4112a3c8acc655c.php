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

/* passager/dashboard.html.twig */
class __TwigTemplate_69861f84a62808d3ee6d04bf505aa923 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "passager/dashboard.html.twig", 1);
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

        yield "Dashboard Passager";
        
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
        yield "    <div class=\"max-w-screen-2xl w-full mx-auto px-6 py-8\">
        <div class=\"w-full\">
            ";
        // line 9
        yield "            <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
                <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center mb-8\">
                    <div>
                        <h1 class=\"text-3xl font-bold mb-2 text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-dark\">Bienvenue, ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "prenom", [], "any", false, false, false, 12), "html", null, true);
        yield "</h1>
                        <p class=\"text-gray-600\">Voici un résumé de vos activités et statistiques</p>
                    </div>
                    <div class=\"mt-4 md:mt-0\">
                        <div class=\"flex items-center bg-blue-50 rounded-lg px-4 py-2 text-blue-800\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                            </svg>
                            <span class=\"text-sm\">Dernière connexion: ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "</span>
                        </div>
                    </div>
                </div>
                
                ";
        // line 26
        yield "                <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8\">
                    ";
        // line 28
        yield "                    <div class=\"bg-gradient-to-br from-primary/10 to-primary-light/10 rounded-xl p-6 shadow-sm border border-primary/10 transform transition-all duration-300 hover:scale-105\">
                        <div class=\"flex justify-between items-start\">
                            <div>
                                <p class=\"text-gray-500 text-sm mb-1\">Réservations</p>
                                <h3 class=\"text-3xl font-bold text-primary\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationsCount"]) || array_key_exists("reservationsCount", $context) ? $context["reservationsCount"] : (function () { throw new RuntimeError('Variable "reservationsCount" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "</h3>
                                <div class=\"mt-1 flex items-center text-xs\">
                                    <span class=\"text-green-600 flex items-center\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 7h8m0 0v8m0-8l-8 8-4-4-6 6\" />
                                        </svg>
                                        ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeReservationsCount"]) || array_key_exists("activeReservationsCount", $context) ? $context["activeReservationsCount"] : (function () { throw new RuntimeError('Variable "activeReservationsCount" does not exist.', 38, $this->source); })()), "html", null, true);
        yield " active";
        yield ((((isset($context["activeReservationsCount"]) || array_key_exists("activeReservationsCount", $context) ? $context["activeReservationsCount"] : (function () { throw new RuntimeError('Variable "activeReservationsCount" does not exist.', 38, $this->source); })()) > 1)) ? ("s") : (""));
        yield "
                                    </span>
                                </div>
                            </div>
                            <div class=\"bg-white/60 rounded-lg p-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-8 w-8 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 51
        yield "                    <div class=\"bg-gradient-to-br from-purple-50 to-purple-100/50 rounded-xl p-6 shadow-sm border border-purple-200/50 transform transition-all duration-300 hover:scale-105\">
                        <div class=\"flex justify-between items-start\">
                            <div>
                                <p class=\"text-gray-500 text-sm mb-1\">Événements</p>
                                <h3 class=\"text-3xl font-bold text-purple-600\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eventParticipationsCount"]) || array_key_exists("eventParticipationsCount", $context) ? $context["eventParticipationsCount"] : (function () { throw new RuntimeError('Variable "eventParticipationsCount" does not exist.', 55, $this->source); })()), "html", null, true);
        yield "</h3>
                                <div class=\"mt-1 flex items-center text-xs\">
                                    <span class=\"text-gray-500\">Participations aux événements</span>
                                </div>
                            </div>
                            <div class=\"bg-white/60 rounded-lg p-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-8 w-8 text-purple-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 69
        yield "                    <div class=\"bg-gradient-to-br from-orange-50 to-orange-100/50 rounded-xl p-6 shadow-sm border border-orange-200/50 transform transition-all duration-300 hover:scale-105\">
                        <div class=\"flex justify-between items-start\">
                            <div>
                                <p class=\"text-gray-500 text-sm mb-1\">Réclamations</p>
                                <h3 class=\"text-3xl font-bold text-orange-600\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reclamationsCount"]) || array_key_exists("reclamationsCount", $context) ? $context["reclamationsCount"] : (function () { throw new RuntimeError('Variable "reclamationsCount" does not exist.', 73, $this->source); })()), "html", null, true);
        yield "</h3>
                                <div class=\"mt-1 flex items-center text-xs\">
                                    <span class=\"text-gray-500\">Total des réclamations</span>
                                </div>
                            </div>
                            <div class=\"bg-white/60 rounded-lg p-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-8 w-8 text-orange-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                
                ";
        // line 88
        yield "                <div class=\"flex flex-wrap gap-4\">
                    <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_reservation");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        Réserver un trajet
                    </a>
                    <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_events");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-purple-600 to-purple-700 text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                        </svg>
                        Voir les événements
                    </a>
                    <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_mes_reservations");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-white text-gray-700 border border-gray-300 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                        </svg>
                        Mes réservations
                    </a>
                    <a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_avis");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-white text-gray-700 border border-gray-300 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\" />
                        </svg>
                        Ajouter un avis
                    </a>
                    <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_reclamation");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-white text-gray-700 border border-gray-300 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                        </svg>
                        Faire réclamation
                    </a>
                </div>
            </div>
            
            ";
        // line 123
        yield "            <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-6 mb-8\">
                <div class=\"flex justify-between items-center mb-6\">
                    <h2 class=\"text-xl font-bold text-gray-800 flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z\" />
                        </svg>
                        Activité mensuelle
                    </h2>
                    <div class=\"text-xs bg-blue-50 text-blue-600 px-2 py-1 rounded-full\">
                        Derniers 6 mois
                    </div>
                </div>
                <div class=\"h-64 chart-container\">
                    <canvas id=\"monthlyChart\"></canvas>
                </div>
            </div>
            
            ";
        // line 141
        yield "            <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-8\">
                ";
        // line 143
        yield "                <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-6\">
                    <h2 class=\"text-xl font-bold text-gray-800 flex items-center mb-6\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        Activité récente
                    </h2>
                    
                    ";
        // line 151
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["recentActivities"]) || array_key_exists("recentActivities", $context) ? $context["recentActivities"] : (function () { throw new RuntimeError('Variable "recentActivities" does not exist.', 151, $this->source); })()))) {
            // line 152
            yield "                        <div class=\"bg-gray-50 rounded-lg p-6 text-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 text-gray-400 mx-auto mb-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4\" />
                            </svg>
                            <p class=\"text-gray-500\">Aucune activité récente à afficher.</p>
                        </div>
                    ";
        } else {
            // line 159
            yield "                        <div class=\"space-y-4\">
                            ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentActivities"]) || array_key_exists("recentActivities", $context) ? $context["recentActivities"] : (function () { throw new RuntimeError('Variable "recentActivities" does not exist.', 160, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 161
                yield "                                <div class=\"flex items-start p-4 rounded-lg ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 161) % 2 == 0)) {
                    yield "bg-gray-50";
                } else {
                    yield "bg-white";
                }
                yield " hover:bg-blue-50 transition-colors duration-200\">
                                    ";
                // line 162
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 162) == "reservation")) {
                    // line 163
                    yield "                                        <div class=\"bg-blue-100 rounded-lg p-2 mr-4 flex-shrink-0\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-blue-600\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                                            </svg>
                                        </div>
                                        <div class=\"flex-1\">
                                            <div class=\"flex justify-between\">
                                                <h3 class=\"text-sm font-semibold text-gray-800\">Réservation ";
                    // line 170
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "data", [], "any", false, false, false, 170), "type", [], "any", false, false, false, 170), "html", null, true);
                    yield "</h3>
                                                <span class=\"text-xs text-gray-500\">";
                    // line 171
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 171), "d/m/Y"), "html", null, true);
                    yield "</span>
                                            </div>
                                            <p class=\"text-xs text-gray-600 mt-1\">
                                                Status: <span class=\"font-medium 
                                                    ";
                    // line 175
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "data", [], "any", false, false, false, 175), "status", [], "any", false, false, false, 175) == "PENDING")) {
                        yield "text-yellow-600
                                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 176
$context["activity"], "data", [], "any", false, false, false, 176), "status", [], "any", false, false, false, 176) == "ACCEPTED")) {
                        yield "text-green-600
                                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 177
$context["activity"], "data", [], "any", false, false, false, 177), "status", [], "any", false, false, false, 177) == "COMPLETED")) {
                        yield "text-blue-600
                                                    ";
                    } else {
                        // line 178
                        yield "text-red-600";
                    }
                    yield "\">
                                                    ";
                    // line 179
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "data", [], "any", false, false, false, 179), "status", [], "any", false, false, false, 179), "html", null, true);
                    yield "
                                                </span>
                                            </p>
                                        </div>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 183
$context["activity"], "type", [], "any", false, false, false, 183) == "event")) {
                    // line 184
                    yield "                                        <div class=\"bg-purple-100 rounded-lg p-2 mr-4 flex-shrink-0\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-purple-600\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                            </svg>
                                        </div>
                                        <div class=\"flex-1\">
                                            <div class=\"flex justify-between\">
                                                <h3 class=\"text-sm font-semibold text-gray-800\">Participation à l'événement</h3>
                                                <span class=\"text-xs text-gray-500\">";
                    // line 192
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 192), "d/m/Y"), "html", null, true);
                    yield "</span>
                                            </div>
                                            <p class=\"text-xs text-gray-600 mt-1\">
                                                ";
                    // line 195
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "data", [], "any", false, false, false, 195), "event", [], "any", false, false, false, 195), "nom", [], "any", false, false, false, 195), "html", null, true);
                    yield "
                                            </p>
                                        </div>
                                    ";
                }
                // line 199
                yield "                                </div>
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
            unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            yield "                        </div>
                    ";
        }
        // line 203
        yield "                </div>
            </div>
        </div>
    </div>

    ";
        // line 209
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('monthlyChart').getContext('2d');
        
        const data = {
            labels: ";
        // line 215
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyStats"]) || array_key_exists("monthlyStats", $context) ? $context["monthlyStats"] : (function () { throw new RuntimeError('Variable "monthlyStats" does not exist.', 215, $this->source); })()), "labels", [], "any", false, false, false, 215));
        yield ",
            datasets: [{
                label: 'Réservations',
                data: ";
        // line 218
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyStats"]) || array_key_exists("monthlyStats", $context) ? $context["monthlyStats"] : (function () { throw new RuntimeError('Variable "monthlyStats" does not exist.', 218, $this->source); })()), "data", [], "any", false, false, false, 218));
        yield ",
                backgroundColor: 'rgba(79, 70, 229, 0.2)',
                borderColor: 'rgba(79, 70, 229, 1)',
                borderWidth: 2,
                borderRadius: 4,
                tension: 0.3
            }]
        };
        
        const config = {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true,
                            drawBorder: false,
                        },
                        ticks: {
                            precision: 0
                        }
                    },
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: 'rgba(255, 255, 255, 0.9)',
                        titleColor: '#334155',
                        bodyColor: '#334155',
                        titleFont: {
                            weight: 'bold'
                        },
                        borderWidth: 1,
                        borderColor: '#e2e8f0',
                        displayColors: false,
                        callbacks: {
                            title: function(context) {
                                return context[0].label;
                            },
                            label: function(context) {
                                return context.parsed.y + ' réservation(s)';
                            }
                        }
                    }
                }
            }
        };
        
        new Chart(ctx, config);
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
        return "passager/dashboard.html.twig";
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
        return array (  443 => 218,  437 => 215,  429 => 209,  422 => 203,  418 => 201,  403 => 199,  396 => 195,  390 => 192,  380 => 184,  378 => 183,  371 => 179,  366 => 178,  361 => 177,  357 => 176,  353 => 175,  346 => 171,  342 => 170,  333 => 163,  331 => 162,  322 => 161,  305 => 160,  302 => 159,  293 => 152,  291 => 151,  281 => 143,  278 => 141,  259 => 123,  247 => 113,  238 => 107,  229 => 101,  220 => 95,  211 => 89,  208 => 88,  191 => 73,  185 => 69,  169 => 55,  163 => 51,  146 => 38,  137 => 32,  131 => 28,  128 => 26,  120 => 20,  109 => 12,  104 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Dashboard Passager{% endblock %}

{% block content %}
    <div class=\"max-w-screen-2xl w-full mx-auto px-6 py-8\">
        <div class=\"w-full\">
            {# Welcome Card with Quick Stats #}
            <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
                <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center mb-8\">
                    <div>
                        <h1 class=\"text-3xl font-bold mb-2 text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-dark\">Bienvenue, {{ user.prenom }}</h1>
                        <p class=\"text-gray-600\">Voici un résumé de vos activités et statistiques</p>
                    </div>
                    <div class=\"mt-4 md:mt-0\">
                        <div class=\"flex items-center bg-blue-50 rounded-lg px-4 py-2 text-blue-800\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                            </svg>
                            <span class=\"text-sm\">Dernière connexion: {{ \"now\"|date(\"d/m/Y H:i\") }}</span>
                        </div>
                    </div>
                </div>
                
                {# Quick Stats Cards #}
                <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8\">
                    {# Reservations Card #}
                    <div class=\"bg-gradient-to-br from-primary/10 to-primary-light/10 rounded-xl p-6 shadow-sm border border-primary/10 transform transition-all duration-300 hover:scale-105\">
                        <div class=\"flex justify-between items-start\">
                            <div>
                                <p class=\"text-gray-500 text-sm mb-1\">Réservations</p>
                                <h3 class=\"text-3xl font-bold text-primary\">{{ reservationsCount }}</h3>
                                <div class=\"mt-1 flex items-center text-xs\">
                                    <span class=\"text-green-600 flex items-center\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 7h8m0 0v8m0-8l-8 8-4-4-6 6\" />
                                        </svg>
                                        {{ activeReservationsCount }} active{{ activeReservationsCount > 1 ? 's' : '' }}
                                    </span>
                                </div>
                            </div>
                            <div class=\"bg-white/60 rounded-lg p-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-8 w-8 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    {# Events Card #}
                    <div class=\"bg-gradient-to-br from-purple-50 to-purple-100/50 rounded-xl p-6 shadow-sm border border-purple-200/50 transform transition-all duration-300 hover:scale-105\">
                        <div class=\"flex justify-between items-start\">
                            <div>
                                <p class=\"text-gray-500 text-sm mb-1\">Événements</p>
                                <h3 class=\"text-3xl font-bold text-purple-600\">{{ eventParticipationsCount }}</h3>
                                <div class=\"mt-1 flex items-center text-xs\">
                                    <span class=\"text-gray-500\">Participations aux événements</span>
                                </div>
                            </div>
                            <div class=\"bg-white/60 rounded-lg p-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-8 w-8 text-purple-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    {# Reclamations Card #}
                    <div class=\"bg-gradient-to-br from-orange-50 to-orange-100/50 rounded-xl p-6 shadow-sm border border-orange-200/50 transform transition-all duration-300 hover:scale-105\">
                        <div class=\"flex justify-between items-start\">
                            <div>
                                <p class=\"text-gray-500 text-sm mb-1\">Réclamations</p>
                                <h3 class=\"text-3xl font-bold text-orange-600\">{{ reclamationsCount }}</h3>
                                <div class=\"mt-1 flex items-center text-xs\">
                                    <span class=\"text-gray-500\">Total des réclamations</span>
                                </div>
                            </div>
                            <div class=\"bg-white/60 rounded-lg p-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-8 w-8 text-orange-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                
                {# Quick Action Buttons #}
                <div class=\"flex flex-wrap gap-4\">
                    <a href=\"{{ path('app_passager_reservation') }}\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        Réserver un trajet
                    </a>
                    <a href=\"{{ path('app_passager_events') }}\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-purple-600 to-purple-700 text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                        </svg>
                        Voir les événements
                    </a>
                    <a href=\"{{ path('app_passager_mes_reservations') }}\" class=\"inline-flex items-center px-4 py-2 bg-white text-gray-700 border border-gray-300 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                        </svg>
                        Mes réservations
                    </a>
                    <a href=\"{{ path('app_passager_avis') }}\" class=\"inline-flex items-center px-4 py-2 bg-white text-gray-700 border border-gray-300 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\" />
                        </svg>
                        Ajouter un avis
                    </a>
                    <a href=\"{{ path('app_passager_reclamation') }}\" class=\"inline-flex items-center px-4 py-2 bg-white text-gray-700 border border-gray-300 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                        </svg>
                        Faire réclamation
                    </a>
                </div>
            </div>
            
            {# Analytics and Charts Section #}
            <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-6 mb-8\">
                <div class=\"flex justify-between items-center mb-6\">
                    <h2 class=\"text-xl font-bold text-gray-800 flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z\" />
                        </svg>
                        Activité mensuelle
                    </h2>
                    <div class=\"text-xs bg-blue-50 text-blue-600 px-2 py-1 rounded-full\">
                        Derniers 6 mois
                    </div>
                </div>
                <div class=\"h-64 chart-container\">
                    <canvas id=\"monthlyChart\"></canvas>
                </div>
            </div>
            
            {# Activity and Upcoming Trips Sections #}
            <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-8\">
                {# Recent Activity Section #}
                <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-6\">
                    <h2 class=\"text-xl font-bold text-gray-800 flex items-center mb-6\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        Activité récente
                    </h2>
                    
                    {% if recentActivities is empty %}
                        <div class=\"bg-gray-50 rounded-lg p-6 text-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 text-gray-400 mx-auto mb-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4\" />
                            </svg>
                            <p class=\"text-gray-500\">Aucune activité récente à afficher.</p>
                        </div>
                    {% else %}
                        <div class=\"space-y-4\">
                            {% for activity in recentActivities %}
                                <div class=\"flex items-start p-4 rounded-lg {% if loop.index0 is even %}bg-gray-50{% else %}bg-white{% endif %} hover:bg-blue-50 transition-colors duration-200\">
                                    {% if activity.type == 'reservation' %}
                                        <div class=\"bg-blue-100 rounded-lg p-2 mr-4 flex-shrink-0\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-blue-600\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                                            </svg>
                                        </div>
                                        <div class=\"flex-1\">
                                            <div class=\"flex justify-between\">
                                                <h3 class=\"text-sm font-semibold text-gray-800\">Réservation {{ activity.data.type }}</h3>
                                                <span class=\"text-xs text-gray-500\">{{ activity.date|date('d/m/Y') }}</span>
                                            </div>
                                            <p class=\"text-xs text-gray-600 mt-1\">
                                                Status: <span class=\"font-medium 
                                                    {% if activity.data.status == 'PENDING' %}text-yellow-600
                                                    {% elseif activity.data.status == 'ACCEPTED' %}text-green-600
                                                    {% elseif activity.data.status == 'COMPLETED' %}text-blue-600
                                                    {% else %}text-red-600{% endif %}\">
                                                    {{ activity.data.status }}
                                                </span>
                                            </p>
                                        </div>
                                    {% elseif activity.type == 'event' %}
                                        <div class=\"bg-purple-100 rounded-lg p-2 mr-4 flex-shrink-0\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-purple-600\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                            </svg>
                                        </div>
                                        <div class=\"flex-1\">
                                            <div class=\"flex justify-between\">
                                                <h3 class=\"text-sm font-semibold text-gray-800\">Participation à l'événement</h3>
                                                <span class=\"text-xs text-gray-500\">{{ activity.date|date('d/m/Y') }}</span>
                                            </div>
                                            <p class=\"text-xs text-gray-600 mt-1\">
                                                {{ activity.data.event.nom }}
                                            </p>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    {# Chart.js Script for Monthly Stats #}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('monthlyChart').getContext('2d');
        
        const data = {
            labels: {{ monthlyStats.labels|json_encode|raw }},
            datasets: [{
                label: 'Réservations',
                data: {{ monthlyStats.data|json_encode|raw }},
                backgroundColor: 'rgba(79, 70, 229, 0.2)',
                borderColor: 'rgba(79, 70, 229, 1)',
                borderWidth: 2,
                borderRadius: 4,
                tension: 0.3
            }]
        };
        
        const config = {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true,
                            drawBorder: false,
                        },
                        ticks: {
                            precision: 0
                        }
                    },
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: 'rgba(255, 255, 255, 0.9)',
                        titleColor: '#334155',
                        bodyColor: '#334155',
                        titleFont: {
                            weight: 'bold'
                        },
                        borderWidth: 1,
                        borderColor: '#e2e8f0',
                        displayColors: false,
                        callbacks: {
                            title: function(context) {
                                return context[0].label;
                            },
                            label: function(context) {
                                return context.parsed.y + ' réservation(s)';
                            }
                        }
                    }
                }
            }
        };
        
        new Chart(ctx, config);
    });
    </script>
{% endblock %} ", "passager/dashboard.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\passager\\dashboard.html.twig");
    }
}
