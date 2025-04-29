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

/* admin/annonce_event/index.html.twig */
class __TwigTemplate_33ec845dd83068f34444c3eb2d6c7b6a extends Template
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
        return "layouts/admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/annonce_event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/annonce_event/index.html.twig"));

        $this->parent = $this->loadTemplate("layouts/admin_layout.html.twig", "admin/annonce_event/index.html.twig", 1);
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

        yield "Administration des Annonces d'Événements";
        
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
        yield "<div class=\"container mx-auto px-4 sm:px-8\">
    <div class=\"py-8\">
        <div class=\"flex justify-between items-center mb-6\">
            <h2 class=\"text-2xl font-semibold text-gray-800\">Liste des Annonces d'Événements</h2>
            <div class=\"text-right\">
                <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonces");
        yield "\" class=\"px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 mr-2\">
                    <i class=\"fas fa-car mr-1\"></i> Voir les Annonces Normales
                </a>
            </div>
        </div>

        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "            <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4\" role=\"alert\">
                <p>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
        <div class=\"bg-white overflow-hidden shadow-md rounded-lg\">
            <table class=\"min-w-full leading-normal\">
                <thead>
                    <tr>
                        <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                            ID
                        </th>
                        <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                            Titre
                        </th>
                        <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                            Événement
                        </th>
                        <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                            Trajet
                        </th>
                        <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                            Date de départ
                        </th>
                        <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                            Places
                        </th>
                        <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                            Statut
                        </th>
                        <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 54, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 55
            yield "                    <tr>
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 57), "html", null, true);
            yield "
                        </td>
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 60), "html", null, true);
            yield "
                        </td>
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            ";
            // line 63
            if (CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "event", [], "any", false, false, false, 63)) {
                // line 64
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "event", [], "any", false, false, false, 64), "nom", [], "any", false, false, false, 64), "html", null, true);
                yield "
                            ";
            } else {
                // line 66
                yield "                                <span class=\"text-gray-400\">Non défini</span>
                            ";
            }
            // line 68
            yield "                        </td>
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "departurePoint", [], "any", false, false, false, 70), "html", null, true);
            yield " → ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "arrivalPoint", [], "any", false, false, false, 70), "html", null, true);
            yield "
                        </td>
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            ";
            // line 73
            if (CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "departureDate", [], "any", false, false, false, 73)) {
                // line 74
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "departureDate", [], "any", false, false, false, 74), "d/m/Y H:i"), "html", null, true);
                yield "
                            ";
            } else {
                // line 76
                yield "                                <span class=\"text-gray-400\">Non définie</span>
                            ";
            }
            // line 78
            yield "                        </td>
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "availableSeats", [], "any", false, false, false, 80), "html", null, true);
            yield "
                        </td>
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            ";
            // line 83
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "status", [], "any", false, false, false, 83) == "ouvert")) {
                // line 84
                yield "                                <span class=\"px-2 py-1 bg-green-100 text-green-800 rounded-full\">Ouvert</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 85
$context["annonce"], "status", [], "any", false, false, false, 85) == "plein")) {
                // line 86
                yield "                                <span class=\"px-2 py-1 bg-blue-100 text-blue-800 rounded-full\">Plein</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 87
$context["annonce"], "status", [], "any", false, false, false, 87) == "termine")) {
                // line 88
                yield "                                <span class=\"px-2 py-1 bg-gray-100 text-gray-800 rounded-full\">Terminé</span>
                            ";
            } else {
                // line 90
                yield "                                <span class=\"px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "status", [], "any", false, false, false, 90), "html", null, true);
                yield "</span>
                            ";
            }
            // line 92
            yield "                        </td>
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            <div class=\"flex space-x-2\">
                                <a href=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonce_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 95)]), "html", null, true);
            yield "\" class=\"text-blue-600 hover:text-blue-900\">
                                    <i class=\"fas fa-eye\"></i>
                                </a>
                                <a href=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonce_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            yield "\" class=\"text-green-600 hover:text-green-900\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                <form method=\"post\" action=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonce_event_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce?');\" class=\"inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 102))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"text-red-600 hover:text-red-900 bg-transparent border-0 p-0\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 110
        if (!$context['_iterated']) {
            // line 111
            yield "                    <tr>
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\" colspan=\"8\">
                            <div class=\"text-center py-4 text-gray-500\">
                                <p>Aucune annonce d'événement trouvée</p>
                            </div>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['annonce'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "                </tbody>
            </table>
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
        return "admin/annonce_event/index.html.twig";
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
        return array (  304 => 119,  291 => 111,  289 => 110,  276 => 102,  272 => 101,  266 => 98,  260 => 95,  255 => 92,  249 => 90,  245 => 88,  243 => 87,  240 => 86,  238 => 85,  235 => 84,  233 => 83,  227 => 80,  223 => 78,  219 => 76,  213 => 74,  211 => 73,  203 => 70,  199 => 68,  195 => 66,  189 => 64,  187 => 63,  181 => 60,  175 => 57,  171 => 55,  166 => 54,  132 => 22,  123 => 19,  120 => 18,  116 => 17,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/admin_layout.html.twig' %}

{% block title %}Administration des Annonces d'Événements{% endblock %}

{% block content %}
<div class=\"container mx-auto px-4 sm:px-8\">
    <div class=\"py-8\">
        <div class=\"flex justify-between items-center mb-6\">
            <h2 class=\"text-2xl font-semibold text-gray-800\">Liste des Annonces d'Événements</h2>
            <div class=\"text-right\">
                <a href=\"{{ path('app_admin_annonces') }}\" class=\"px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 mr-2\">
                    <i class=\"fas fa-car mr-1\"></i> Voir les Annonces Normales
                </a>
            </div>
        </div>

        {% for message in app.flashes('success') %}
            <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4\" role=\"alert\">
                <p>{{ message }}</p>
            </div>
        {% endfor %}

        <div class=\"bg-white overflow-hidden shadow-md rounded-lg\">
            <table class=\"min-w-full leading-normal\">
                <thead>
                    <tr>
                        <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                            ID
                        </th>
                        <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                            Titre
                        </th>
                        <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                            Événement
                        </th>
                        <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                            Trajet
                        </th>
                        <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                            Date de départ
                        </th>
                        <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                            Places
                        </th>
                        <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                            Statut
                        </th>
                        <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {% for annonce in annonces %}
                    <tr>
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            {{ annonce.id }}
                        </td>
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            {{ annonce.titre }}
                        </td>
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            {% if annonce.event %}
                                {{ annonce.event.nom }}
                            {% else %}
                                <span class=\"text-gray-400\">Non défini</span>
                            {% endif %}
                        </td>
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            {{ annonce.departurePoint }} → {{ annonce.arrivalPoint }}
                        </td>
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            {% if annonce.departureDate %}
                                {{ annonce.departureDate|date('d/m/Y H:i') }}
                            {% else %}
                                <span class=\"text-gray-400\">Non définie</span>
                            {% endif %}
                        </td>
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            {{ annonce.availableSeats }}
                        </td>
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            {% if annonce.status == 'ouvert' %}
                                <span class=\"px-2 py-1 bg-green-100 text-green-800 rounded-full\">Ouvert</span>
                            {% elseif annonce.status == 'plein' %}
                                <span class=\"px-2 py-1 bg-blue-100 text-blue-800 rounded-full\">Plein</span>
                            {% elseif annonce.status == 'termine' %}
                                <span class=\"px-2 py-1 bg-gray-100 text-gray-800 rounded-full\">Terminé</span>
                            {% else %}
                                <span class=\"px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full\">{{ annonce.status }}</span>
                            {% endif %}
                        </td>
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                            <div class=\"flex space-x-2\">
                                <a href=\"{{ path('app_admin_annonce_event_show', {'id': annonce.id}) }}\" class=\"text-blue-600 hover:text-blue-900\">
                                    <i class=\"fas fa-eye\"></i>
                                </a>
                                <a href=\"{{ path('app_admin_annonce_event_edit', {'id': annonce.id}) }}\" class=\"text-green-600 hover:text-green-900\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                <form method=\"post\" action=\"{{ path('app_admin_annonce_event_delete', {'id': annonce.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce?');\" class=\"inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ annonce.id) }}\">
                                    <button type=\"submit\" class=\"text-red-600 hover:text-red-900 bg-transparent border-0 p-0\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    {% else %}
                    <tr>
                        <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\" colspan=\"8\">
                            <div class=\"text-center py-4 text-gray-500\">
                                <p>Aucune annonce d'événement trouvée</p>
                            </div>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %} ", "admin/annonce_event/index.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\admin\\annonce_event\\index.html.twig");
    }
}
