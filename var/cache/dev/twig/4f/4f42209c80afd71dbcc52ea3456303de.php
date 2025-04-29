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

/* conducteur/event_participants.html.twig */
class __TwigTemplate_cf3b7faeb6ac2c560c6eace06c001526 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/event_participants.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/event_participants.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/event_participants.html.twig", 1);
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

        yield "Participants à l'événement ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<div class=\"w-full\">
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
        <div class=\"flex justify-between items-center mb-6\">
            <div>
                <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Participants à l'événement</h1>
                <p class=\"text-gray-600\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 11, $this->source); })()), "dateEvent", [], "any", false, false, false, 11), "d/m/Y"), "html", null, true);
        yield " à ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 11, $this->source); })()), "heureEvent", [], "any", false, false, false, 11), "H:i"), "html", null, true);
        yield "</p>
            </div>
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_participations_evenements");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-300\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                </svg>
                Retour
            </a>
        </div>

        <div class=\"bg-gray-50 rounded-xl p-4 mb-6\">
            <div class=\"flex flex-wrap gap-4\">
                <div class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                    </svg>
                    <span class=\"text-gray-700\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 28, $this->source); })()), "lieu", [], "any", false, false, false, 28), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                    </svg>
                    <span class=\"text-gray-700\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 34, $this->source); })())), "html", null, true);
        yield " participant(s)</span>
                </div>
                <div class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                    </svg>
                    <span class=\"text-gray-700\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 40, $this->source); })()), "typeEvent", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>

        ";
        // line 45
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 45, $this->source); })()))) {
            // line 46
            yield "            <div class=\"bg-yellow-50 rounded-xl p-8 text-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-yellow-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                </svg>
                <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucun participant</h3>
                <p class=\"mt-2 text-gray-600\">Personne n'est inscrit à cet événement pour le moment.</p>
            </div>
        ";
        } else {
            // line 54
            yield "            <div class=\"overflow-x-auto\">
                <table class=\"min-w-full bg-white rounded-lg overflow-hidden\">
                    <thead class=\"bg-gray-100\">
                        <tr>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Participant</th>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Date d'inscription</th>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Référent</th>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Commentaire</th>
                        </tr>
                    </thead>
                    <tbody class=\"divide-y divide-gray-200\">
                        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 65, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                // line 66
                yield "                            <tr class=\"hover:bg-gray-50\">
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"flex items-center\">
                                        <div class=\"h-10 w-10 rounded-full bg-primary-light flex items-center justify-center text-white font-bold\">
                                            ";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "utilisateur", [], "any", false, false, false, 70), "prenom", [], "any", false, false, false, 70)), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "utilisateur", [], "any", false, false, false, 70), "nom", [], "any", false, false, false, 70)), "html", null, true);
                yield "
                                        </div>
                                        <div class=\"ml-4\">
                                            <div class=\"text-sm font-medium text-gray-900\">";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "utilisateur", [], "any", false, false, false, 73), "prenom", [], "any", false, false, false, 73), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "utilisateur", [], "any", false, false, false, 73), "nom", [], "any", false, false, false, 73), "html", null, true);
                yield "</div>
                                            <div class=\"text-sm text-gray-500\">";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "utilisateur", [], "any", false, false, false, 74), "email", [], "any", false, false, false, 74), "html", null, true);
                yield "</div>
                                        </div>
                                    </div>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                                    ";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "dateInscription", [], "any", false, false, false, 79), "d/m/Y H:i"), "html", null, true);
                yield "
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    ";
                // line 82
                if (CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "conducteur", [], "any", false, false, false, 82)) {
                    // line 83
                    yield "                                        <div class=\"flex items-center\">
                                            <span class=\"px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full mr-2\">Conducteur</span>
                                            <span class=\"text-sm text-gray-700\">";
                    // line 85
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "conducteur", [], "any", false, false, false, 85), "prenom", [], "any", false, false, false, 85), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "conducteur", [], "any", false, false, false, 85), "nom", [], "any", false, false, false, 85), "html", null, true);
                    yield "</span>
                                        </div>
                                    ";
                } else {
                    // line 88
                    yield "                                        <span class=\"px-3 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full\">Direct</span>
                                    ";
                }
                // line 90
                yield "                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                                    ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "auteur", [], "any", true, true, false, 92)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "auteur", [], "any", false, false, false, 92), "Inscription directe")) : ("Inscription directe")), "html", null, true);
                yield "
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['participant'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 100
        yield "    </div>
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
        return "conducteur/event_participants.html.twig";
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
        return array (  261 => 100,  255 => 96,  245 => 92,  241 => 90,  237 => 88,  229 => 85,  225 => 83,  223 => 82,  217 => 79,  209 => 74,  203 => 73,  196 => 70,  190 => 66,  186 => 65,  173 => 54,  163 => 46,  161 => 45,  153 => 40,  144 => 34,  135 => 28,  117 => 13,  108 => 11,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Participants à l'événement {{ event.nom }}{% endblock %}

{% block content %}
<div class=\"w-full\">
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
        <div class=\"flex justify-between items-center mb-6\">
            <div>
                <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Participants à l'événement</h1>
                <p class=\"text-gray-600\">{{ event.nom }} - {{ event.dateEvent|date('d/m/Y') }} à {{ event.heureEvent|date('H:i') }}</p>
            </div>
            <a href=\"{{ path('app_conducteur_participations_evenements') }}\" class=\"inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-300\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                </svg>
                Retour
            </a>
        </div>

        <div class=\"bg-gray-50 rounded-xl p-4 mb-6\">
            <div class=\"flex flex-wrap gap-4\">
                <div class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                    </svg>
                    <span class=\"text-gray-700\">{{ event.lieu }}</span>
                </div>
                <div class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                    </svg>
                    <span class=\"text-gray-700\">{{ participants|length }} participant(s)</span>
                </div>
                <div class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                    </svg>
                    <span class=\"text-gray-700\">{{ event.typeEvent.nom }}</span>
                </div>
            </div>
        </div>

        {% if participants is empty %}
            <div class=\"bg-yellow-50 rounded-xl p-8 text-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto text-yellow-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                </svg>
                <h3 class=\"mt-4 text-xl font-medium text-gray-900\">Aucun participant</h3>
                <p class=\"mt-2 text-gray-600\">Personne n'est inscrit à cet événement pour le moment.</p>
            </div>
        {% else %}
            <div class=\"overflow-x-auto\">
                <table class=\"min-w-full bg-white rounded-lg overflow-hidden\">
                    <thead class=\"bg-gray-100\">
                        <tr>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Participant</th>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Date d'inscription</th>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Référent</th>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Commentaire</th>
                        </tr>
                    </thead>
                    <tbody class=\"divide-y divide-gray-200\">
                        {% for participant in participants %}
                            <tr class=\"hover:bg-gray-50\">
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"flex items-center\">
                                        <div class=\"h-10 w-10 rounded-full bg-primary-light flex items-center justify-center text-white font-bold\">
                                            {{ participant.utilisateur.prenom|first }}{{ participant.utilisateur.nom|first }}
                                        </div>
                                        <div class=\"ml-4\">
                                            <div class=\"text-sm font-medium text-gray-900\">{{ participant.utilisateur.prenom }} {{ participant.utilisateur.nom }}</div>
                                            <div class=\"text-sm text-gray-500\">{{ participant.utilisateur.email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                                    {{ participant.dateInscription|date('d/m/Y H:i') }}
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    {% if participant.conducteur %}
                                        <div class=\"flex items-center\">
                                            <span class=\"px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full mr-2\">Conducteur</span>
                                            <span class=\"text-sm text-gray-700\">{{ participant.conducteur.prenom }} {{ participant.conducteur.nom }}</span>
                                        </div>
                                    {% else %}
                                        <span class=\"px-3 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full\">Direct</span>
                                    {% endif %}
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                                    {{ participant.auteur|default('Inscription directe') }}
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}
    </div>
</div>
{% endblock %} ", "conducteur/event_participants.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\event_participants.html.twig");
    }
}
