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

/* passager/historique_reservations.html.twig */
class __TwigTemplate_9d3e22765a6467fdb9ae3c9330c5f627 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/historique_reservations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passager/historique_reservations.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "passager/historique_reservations.html.twig", 1);
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

        yield "Historique des Réservations";
        
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
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Historique des réservations</h1>
                    <p class=\"text-gray-600\">Consultez vos trajets passés et terminés.</p>
                </div>
                <div class=\"flex space-x-4\">
                    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_mes_reservations");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                        <i class=\"fas fa-arrow-left mr-2\"></i>
                        Retour aux réservations
                    </a>
                </div>
            </div>

            ";
        // line 21
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 21, $this->source); })()))) {
            // line 22
            yield "                <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucun trajet terminé</h3>
                    <p class=\"mt-2 text-gray-600\">Votre historique de réservations est vide pour le moment.</p>
                    <a href=\"";
            // line 28
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_liste_annonce");
            yield "\" class=\"mt-4 inline-flex items-center px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300\">
                        <i class=\"fas fa-search mr-2\"></i>
                        Trouver une annonce
                    </a>
                </div>
            ";
        } else {
            // line 34
            yield "                <div class=\"space-y-6\">
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 36
                yield "                        <div class=\"bg-white shadow-md rounded-xl overflow-hidden\">
                            <div class=\"p-5\">
                                <div class=\"flex flex-col md:flex-row md:justify-between md:items-start\">
                                    <div class=\"mb-4 md:mb-0\">
                                        <div class=\"flex items-center\">
                                            <div class=\"font-bold text-lg text-gray-900 mr-3\">
                                                ";
                // line 42
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 42) == "EVENT") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 42))) {
                    // line 43
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 43), "departurePoint", [], "any", false, false, false, 43), "html", null, true);
                    yield " → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 43), "arrivalPoint", [], "any", false, false, false, 43), "html", null, true);
                    yield "
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 44
$context["reservation"], "annonce", [], "any", false, false, false, 44) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 44), "trajet", [], "any", false, false, false, 44))) {
                    // line 45
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 45), "trajet", [], "any", false, false, false, 45), "getDeparturePoint", [], "method", false, false, false, 45), "html", null, true);
                    yield " → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 45), "trajet", [], "any", false, false, false, 45), "getArrivalPoint", [], "method", false, false, false, 45), "html", null, true);
                    yield "
                                                ";
                } else {
                    // line 47
                    yield "                                                    <span class=\"text-gray-500\">Informations non disponibles</span>
                                                ";
                }
                // line 49
                yield "                                            </div>
                                            <span class=\"px-2.5 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">
                                                Terminé
                                            </span>
                                        </div>
                                        
                                        ";
                // line 55
                if ((((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 55) == "EVENT") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 55)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 55), "event", [], "any", false, false, false, 55))) {
                    // line 56
                    yield "                                            <div class=\"text-xs text-gray-500 mt-1\">
                                                Pour l'événement: ";
                    // line 57
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 57), "event", [], "any", false, false, false, 57), "nom", [], "any", false, false, false, 57), "html", null, true);
                    yield "
                                            </div>
                                        ";
                }
                // line 60
                yield "                                        
                                        <div class=\"flex items-center mt-3\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                            </svg>
                                            <span class=\"text-gray-700\">
                                                ";
                // line 66
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 66) == "EVENT") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 66))) {
                    // line 67
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 67), "departureDate", [], "any", false, false, false, 67), "d/m/Y à H:i"), "html", null, true);
                    yield "
                                                ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 68
$context["reservation"], "annonce", [], "any", false, false, false, 68)) {
                    // line 69
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 69), "departureDate", [], "any", false, false, false, 69), "d/m/Y à H:i"), "html", null, true);
                    yield "
                                                ";
                } else {
                    // line 71
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 71), "d/m/Y à H:i"), "html", null, true);
                    yield "
                                                ";
                }
                // line 73
                yield "                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class=\"flex flex-col md:items-end\">
                                        <div class=\"flex items-center\">
                                            <div class=\"h-8 w-8 rounded-full bg-gradient-to-r from-primary to-primary-dark flex items-center justify-center text-white text-sm font-bold mr-2\">
                                                C
                                            </div>
                                            <div class=\"text-sm font-medium text-gray-900\">
                                                ";
                // line 83
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 83) == "EVENT") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 83))) {
                    // line 84
                    yield "                                                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "driver", [], "any", false, false, false, 84)) {
                        // line 85
                        yield "                                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "driver", [], "any", false, false, false, 85), "prenom", [], "any", false, false, false, 85), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "driver", [], "any", false, false, false, 85), "nom", [], "any", false, false, false, 85), "html", null, true);
                        yield "
                                                    ";
                    } else {
                        // line 87
                        yield "                                                        Conducteur #";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 87), "driverId", [], "any", false, false, false, 87), "html", null, true);
                        yield "
                                                    ";
                    }
                    // line 89
                    yield "                                                ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 89)) {
                    // line 90
                    yield "                                                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "driver", [], "any", false, false, false, 90)) {
                        // line 91
                        yield "                                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "driver", [], "any", false, false, false, 91), "prenom", [], "any", false, false, false, 91), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "driver", [], "any", false, false, false, 91), "nom", [], "any", false, false, false, 91), "html", null, true);
                        yield "
                                                    ";
                    } else {
                        // line 93
                        yield "                                                        Conducteur #";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 93), "driverId", [], "any", false, false, false, 93), "html", null, true);
                        yield "
                                                    ";
                    }
                    // line 95
                    yield "                                                ";
                } else {
                    // line 96
                    yield "                                                    Conducteur inconnu
                                                ";
                }
                // line 98
                yield "                                            </div>
                                        </div>
                                        
                                        <div class=\"mt-3 text-base font-medium text-gray-900\">
                                            ";
                // line 102
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "type", [], "any", false, false, false, 102) == "EVENT") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 102))) {
                    // line 103
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonceEvent", [], "any", false, false, false, 103), "prix", [], "any", false, false, false, 103), 2, ",", " "), "html", null, true);
                    yield " DT
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 104
$context["reservation"], "annonce", [], "any", false, false, false, 104) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 104), "trajet", [], "any", false, false, false, 104))) {
                    // line 105
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "annonce", [], "any", false, false, false, 105), "trajet", [], "any", false, false, false, 105), "price", [], "any", false, false, false, 105), "html", null, true);
                    yield " DT
                                            ";
                } else {
                    // line 107
                    yield "                                                - DT
                                            ";
                }
                // line 109
                yield "                                        </div>
                                    </div>
                                </div>
                                
                                ";
                // line 113
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "comment", [], "any", false, false, false, 113)) {
                    // line 114
                    yield "                                    <div class=\"mt-4 p-4 bg-blue-50 rounded-lg border border-blue-100\">
                                        <div class=\"flex items-start\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-blue-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z\" />
                                            </svg>
                                            <div>
                                                <p class=\"text-sm font-medium text-blue-700\">Votre commentaire</p>
                                                <p class=\"text-sm text-gray-700 mt-1\">";
                    // line 121
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "comment", [], "any", false, false, false, 121), "html", null, true);
                    yield "</p>
                                            </div>
                                        </div>
                                    </div>
                                ";
                }
                // line 126
                yield "                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            yield "                </div>
            ";
        }
        // line 131
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
        return "passager/historique_reservations.html.twig";
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
        return array (  345 => 131,  341 => 129,  333 => 126,  325 => 121,  316 => 114,  314 => 113,  308 => 109,  304 => 107,  298 => 105,  296 => 104,  291 => 103,  289 => 102,  283 => 98,  279 => 96,  276 => 95,  270 => 93,  262 => 91,  259 => 90,  256 => 89,  250 => 87,  242 => 85,  239 => 84,  237 => 83,  225 => 73,  219 => 71,  213 => 69,  211 => 68,  206 => 67,  204 => 66,  196 => 60,  190 => 57,  187 => 56,  185 => 55,  177 => 49,  173 => 47,  165 => 45,  163 => 44,  156 => 43,  154 => 42,  146 => 36,  142 => 35,  139 => 34,  130 => 28,  122 => 22,  120 => 21,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Historique des Réservations{% endblock %}

{% block content %}
    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"flex justify-between items-center mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Historique des réservations</h1>
                    <p class=\"text-gray-600\">Consultez vos trajets passés et terminés.</p>
                </div>
                <div class=\"flex space-x-4\">
                    <a href=\"{{ path('app_passager_mes_reservations') }}\" class=\"inline-flex items-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl border border-gray-200 hover:bg-gray-100 transition duration-300\">
                        <i class=\"fas fa-arrow-left mr-2\"></i>
                        Retour aux réservations
                    </a>
                </div>
            </div>

            {% if reservations is empty %}
                <div class=\"bg-gray-50 rounded-xl p-8 text-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucun trajet terminé</h3>
                    <p class=\"mt-2 text-gray-600\">Votre historique de réservations est vide pour le moment.</p>
                    <a href=\"{{ path('app_passager_liste_annonce') }}\" class=\"mt-4 inline-flex items-center px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300\">
                        <i class=\"fas fa-search mr-2\"></i>
                        Trouver une annonce
                    </a>
                </div>
            {% else %}
                <div class=\"space-y-6\">
                    {% for reservation in reservations %}
                        <div class=\"bg-white shadow-md rounded-xl overflow-hidden\">
                            <div class=\"p-5\">
                                <div class=\"flex flex-col md:flex-row md:justify-between md:items-start\">
                                    <div class=\"mb-4 md:mb-0\">
                                        <div class=\"flex items-center\">
                                            <div class=\"font-bold text-lg text-gray-900 mr-3\">
                                                {% if reservation.type == 'EVENT' and reservation.annonceEvent %}
                                                    {{ reservation.annonceEvent.departurePoint }} → {{ reservation.annonceEvent.arrivalPoint }}
                                                {% elseif reservation.annonce and reservation.annonce.trajet %}
                                                    {{ reservation.annonce.trajet.getDeparturePoint() }} → {{ reservation.annonce.trajet.getArrivalPoint() }}
                                                {% else %}
                                                    <span class=\"text-gray-500\">Informations non disponibles</span>
                                                {% endif %}
                                            </div>
                                            <span class=\"px-2.5 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full\">
                                                Terminé
                                            </span>
                                        </div>
                                        
                                        {% if reservation.type == 'EVENT' and reservation.annonceEvent and reservation.annonceEvent.event %}
                                            <div class=\"text-xs text-gray-500 mt-1\">
                                                Pour l'événement: {{ reservation.annonceEvent.event.nom }}
                                            </div>
                                        {% endif %}
                                        
                                        <div class=\"flex items-center mt-3\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                            </svg>
                                            <span class=\"text-gray-700\">
                                                {% if reservation.type == 'EVENT' and reservation.annonceEvent %}
                                                    {{ reservation.annonceEvent.departureDate|date(\"d/m/Y à H:i\") }}
                                                {% elseif reservation.annonce %}
                                                    {{ reservation.annonce.departureDate|date(\"d/m/Y à H:i\") }}
                                                {% else %}
                                                    {{ reservation.dateReservation|date(\"d/m/Y à H:i\") }}
                                                {% endif %}
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class=\"flex flex-col md:items-end\">
                                        <div class=\"flex items-center\">
                                            <div class=\"h-8 w-8 rounded-full bg-gradient-to-r from-primary to-primary-dark flex items-center justify-center text-white text-sm font-bold mr-2\">
                                                C
                                            </div>
                                            <div class=\"text-sm font-medium text-gray-900\">
                                                {% if reservation.type == 'EVENT' and reservation.annonceEvent %}
                                                    {% if reservation.driver %}
                                                        {{ reservation.driver.prenom }} {{ reservation.driver.nom }}
                                                    {% else %}
                                                        Conducteur #{{ reservation.annonceEvent.driverId }}
                                                    {% endif %}
                                                {% elseif reservation.annonce %}
                                                    {% if reservation.driver %}
                                                        {{ reservation.driver.prenom }} {{ reservation.driver.nom }}
                                                    {% else %}
                                                        Conducteur #{{ reservation.annonce.driverId }}
                                                    {% endif %}
                                                {% else %}
                                                    Conducteur inconnu
                                                {% endif %}
                                            </div>
                                        </div>
                                        
                                        <div class=\"mt-3 text-base font-medium text-gray-900\">
                                            {% if reservation.type == 'EVENT' and reservation.annonceEvent %}
                                                {{ reservation.annonceEvent.prix|number_format(2, ',', ' ') }} DT
                                            {% elseif reservation.annonce and reservation.annonce.trajet %}
                                                {{ reservation.annonce.trajet.price }} DT
                                            {% else %}
                                                - DT
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                                
                                {% if reservation.comment %}
                                    <div class=\"mt-4 p-4 bg-blue-50 rounded-lg border border-blue-100\">
                                        <div class=\"flex items-start\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-blue-500 mr-2 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z\" />
                                            </svg>
                                            <div>
                                                <p class=\"text-sm font-medium text-blue-700\">Votre commentaire</p>
                                                <p class=\"text-sm text-gray-700 mt-1\">{{ reservation.comment }}</p>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %} ", "passager/historique_reservations.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\passager\\historique_reservations.html.twig");
    }
}
