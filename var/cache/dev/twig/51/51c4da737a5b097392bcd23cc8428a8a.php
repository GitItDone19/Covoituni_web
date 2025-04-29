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

/* conducteur/participations_parraines.html.twig */
class __TwigTemplate_15fed152b179dbca408dfd5c4b8268b0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/participations_parraines.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/participations_parraines.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conducteur/participations_parraines.html.twig", 1);
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

        yield "Participations à des événements que vous avez parrainées";
        
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
        yield "<div class=\"container mt-4\">
    <h1>Participations à des événements que vous avez parrainées</h1>
    
    <p class=\"lead\">
        Cette page affiche la liste des utilisateurs dont vous avez approuvé la participation à un événement via une réservation de covoiturage.
    </p>
    
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["success"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            yield "        <div class=\"alert alert-success\">
            ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "    
    ";
        // line 19
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["participations"]) || array_key_exists("participations", $context) ? $context["participations"] : (function () { throw new RuntimeError('Variable "participations" does not exist.', 19, $this->source); })()))) {
            // line 20
            yield "        <div class=\"alert alert-info\">
            Vous n'avez parrainé aucune participation à un événement pour le moment.
        </div>
    ";
        } else {
            // line 24
            yield "        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Événement</th>
                        <th>Date de l'événement</th>
                        <th>Passager</th>
                        <th>Date d'inscription</th>
                        <th>Commentaire</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participations"]) || array_key_exists("participations", $context) ? $context["participations"] : (function () { throw new RuntimeError('Variable "participations" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 37
                yield "                        <tr>
                            <td>
                                <a href=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "event", [], "any", false, false, false, 39), "idEvent", [], "any", false, false, false, 39)]), "html", null, true);
                yield "\">
                                    ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "event", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true);
                yield "
                                </a>
                            </td>
                            <td>";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "event", [], "any", false, false, false, 43), "dateEvent", [], "any", false, false, false, 43), "d/m/Y"), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "event", [], "any", false, false, false, 43), "heureEvent", [], "any", false, false, false, 43), "H:i"), "html", null, true);
                yield "</td>
                            <td>
                                ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "passager", [], "any", false, false, false, 45), "prenom", [], "any", false, false, false, 45), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "passager", [], "any", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true);
                yield "
                                <br>
                                <small>";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "passager", [], "any", false, false, false, 47), "email", [], "any", false, false, false, 47), "html", null, true);
                yield "</small>
                            </td>
                            <td>";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "dateInscription", [], "any", false, false, false, 49), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                            <td>";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "auteur", [], "any", false, false, false, 50), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "                </tbody>
            </table>
        </div>
    ";
        }
        // line 57
        yield "    
    <div class=\"mt-3\">
        <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_dashboard");
        yield "\" class=\"btn btn-primary\">
            <i class=\"fas fa-arrow-left\"></i> Retour au tableau de bord
        </a>
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
        return "conducteur/participations_parraines.html.twig";
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
        return array (  210 => 59,  206 => 57,  200 => 53,  191 => 50,  187 => 49,  182 => 47,  175 => 45,  168 => 43,  162 => 40,  158 => 39,  154 => 37,  150 => 36,  136 => 24,  130 => 20,  128 => 19,  125 => 18,  116 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Participations à des événements que vous avez parrainées{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <h1>Participations à des événements que vous avez parrainées</h1>
    
    <p class=\"lead\">
        Cette page affiche la liste des utilisateurs dont vous avez approuvé la participation à un événement via une réservation de covoiturage.
    </p>
    
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}
    
    {% if participations is empty %}
        <div class=\"alert alert-info\">
            Vous n'avez parrainé aucune participation à un événement pour le moment.
        </div>
    {% else %}
        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Événement</th>
                        <th>Date de l'événement</th>
                        <th>Passager</th>
                        <th>Date d'inscription</th>
                        <th>Commentaire</th>
                    </tr>
                </thead>
                <tbody>
                    {% for p in participations %}
                        <tr>
                            <td>
                                <a href=\"{{ path('app_conducteur_event_show', {'id': p.event.idEvent}) }}\">
                                    {{ p.event.nom }}
                                </a>
                            </td>
                            <td>{{ p.event.dateEvent|date('d/m/Y') }} à {{ p.event.heureEvent|date('H:i') }}</td>
                            <td>
                                {{ p.passager.prenom }} {{ p.passager.nom }}
                                <br>
                                <small>{{ p.passager.email }}</small>
                            </td>
                            <td>{{ p.dateInscription|date('d/m/Y H:i') }}</td>
                            <td>{{ p.auteur }}</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    {% endif %}
    
    <div class=\"mt-3\">
        <a href=\"{{ path('app_conducteur_dashboard') }}\" class=\"btn btn-primary\">
            <i class=\"fas fa-arrow-left\"></i> Retour au tableau de bord
        </a>
    </div>
</div>
{% endblock %} ", "conducteur/participations_parraines.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\participations_parraines.html.twig");
    }
}
