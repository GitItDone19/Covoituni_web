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

/* pdf/annonce.html.twig */
class __TwigTemplate_d95d4c6e652dad601f8910dc759dea38 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/annonce.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/annonce.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Annonce de Covoiturage - ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 5, $this->source); })()), "titre", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #4338ca;
            padding-bottom: 20px;
        }
        h1 {
            color: #4338ca;
            font-size: 24px;
            margin-bottom: 5px;
        }
        .logo {
            max-width: 150px;
            margin-bottom: 15px;
        }
        .details-section {
            margin-bottom: 30px;
        }
        .details-section h2 {
            color: #4338ca;
            font-size: 18px;
            margin-bottom: 15px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }
        .detail-row {
            margin-bottom: 10px;
            display: flex;
        }
        .detail-label {
            font-weight: bold;
            width: 180px;
        }
        .detail-value {
            flex: 1;
        }
        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .status-ouvert {
            background-color: #d1fae5;
            color: #065f46;
        }
        .status-plein {
            background-color: #dbeafe;
            color: #1e40af;
        }
        .status-termine {
            background-color: #f3f4f6;
            color: #4b5563;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #6b7280;
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }
        .qr-section {
            text-align: center;
            margin: 30px 0;
        }
        .qr-code {
            max-width: 150px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Détails de l'annonce de covoiturage</h1>
        <p>";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 91, $this->source); })()), "titre", [], "any", false, false, false, 91), "html", null, true);
        yield "</p>
    </div>
    
    <div class=\"details-section\">
        <h2>Informations générales</h2>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Titre:</div>
            <div class=\"detail-value\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 98, $this->source); })()), "titre", [], "any", false, false, false, 98), "html", null, true);
        yield "</div>
        </div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Statut:</div>
            <div class=\"detail-value\">
                <span class=\"status status-";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 103, $this->source); })()), "status", [], "any", false, false, false, 103), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 103, $this->source); })()), "status", [], "any", false, false, false, 103), "html", null, true);
        yield "</span>
            </div>
        </div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Date de départ:</div>
            <div class=\"detail-value\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 108, $this->source); })()), "departureDate", [], "any", false, false, false, 108), "d/m/Y à H:i"), "html", null, true);
        yield "</div>
        </div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Places disponibles:</div>
            <div class=\"detail-value\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["places_disponibles"]) || array_key_exists("places_disponibles", $context) ? $context["places_disponibles"] : (function () { throw new RuntimeError('Variable "places_disponibles" does not exist.', 112, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 112, $this->source); })()), "availableSeats", [], "any", false, false, false, 112), "html", null, true);
        yield "</div>
        </div>
        ";
        // line 114
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 114, $this->source); })()), "description", [], "any", false, false, false, 114)) {
            // line 115
            yield "        <div class=\"detail-row\">
            <div class=\"detail-label\">Description:</div>
            <div class=\"detail-value\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 117, $this->source); })()), "description", [], "any", false, false, false, 117), "html", null, true);
            yield "</div>
        </div>
        ";
        }
        // line 120
        yield "    </div>
    
    <div class=\"details-section\">
        <h2>Trajet</h2>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Départ:</div>
            <div class=\"detail-value\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 126, $this->source); })()), "trajet", [], "any", false, false, false, 126), "departurePoint", [], "any", false, false, false, 126), "html", null, true);
        yield "</div>
        </div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Arrivée:</div>
            <div class=\"detail-value\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 130, $this->source); })()), "trajet", [], "any", false, false, false, 130), "arrivalPoint", [], "any", false, false, false, 130), "html", null, true);
        yield "</div>
        </div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Prix:</div>
            <div class=\"detail-value\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 134, $this->source); })()), "trajet", [], "any", false, false, false, 134), "price", [], "any", false, false, false, 134), "html", null, true);
        yield " DT</div>
        </div>
    </div>
    
    <div class=\"details-section\">
        <h2>Conducteur</h2>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Nom:</div>
            <div class=\"detail-value\">";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 142, $this->source); })()), "nom", [], "any", false, false, false, 142), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 142, $this->source); })()), "prenom", [], "any", false, false, false, 142), "html", null, true);
        yield "</div>
        </div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Email:</div>
            <div class=\"detail-value\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 146, $this->source); })()), "email", [], "any", false, false, false, 146), "html", null, true);
        yield "</div>
        </div>
        ";
        // line 148
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 148, $this->source); })()), "telephone", [], "any", false, false, false, 148)) {
            // line 149
            yield "        <div class=\"detail-row\">
            <div class=\"detail-label\">Téléphone:</div>
            <div class=\"detail-value\">";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 151, $this->source); })()), "telephone", [], "any", false, false, false, 151), "html", null, true);
            yield "</div>
        </div>
        ";
        }
        // line 154
        yield "    </div>
    
    <div class=\"footer\">
        <p>Ce document a été généré automatiquement par Covoituni.</p>
        <p>Date de génération: ";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "</p>
    </div>
</body>
</html> ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pdf/annonce.html.twig";
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
        return array (  262 => 158,  256 => 154,  250 => 151,  246 => 149,  244 => 148,  239 => 146,  230 => 142,  219 => 134,  212 => 130,  205 => 126,  197 => 120,  191 => 117,  187 => 115,  185 => 114,  178 => 112,  171 => 108,  161 => 103,  153 => 98,  143 => 91,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Annonce de Covoiturage - {{ annonce.titre }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #4338ca;
            padding-bottom: 20px;
        }
        h1 {
            color: #4338ca;
            font-size: 24px;
            margin-bottom: 5px;
        }
        .logo {
            max-width: 150px;
            margin-bottom: 15px;
        }
        .details-section {
            margin-bottom: 30px;
        }
        .details-section h2 {
            color: #4338ca;
            font-size: 18px;
            margin-bottom: 15px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }
        .detail-row {
            margin-bottom: 10px;
            display: flex;
        }
        .detail-label {
            font-weight: bold;
            width: 180px;
        }
        .detail-value {
            flex: 1;
        }
        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .status-ouvert {
            background-color: #d1fae5;
            color: #065f46;
        }
        .status-plein {
            background-color: #dbeafe;
            color: #1e40af;
        }
        .status-termine {
            background-color: #f3f4f6;
            color: #4b5563;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #6b7280;
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }
        .qr-section {
            text-align: center;
            margin: 30px 0;
        }
        .qr-code {
            max-width: 150px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Détails de l'annonce de covoiturage</h1>
        <p>{{ annonce.titre }}</p>
    </div>
    
    <div class=\"details-section\">
        <h2>Informations générales</h2>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Titre:</div>
            <div class=\"detail-value\">{{ annonce.titre }}</div>
        </div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Statut:</div>
            <div class=\"detail-value\">
                <span class=\"status status-{{ annonce.status }}\">{{ annonce.status }}</span>
            </div>
        </div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Date de départ:</div>
            <div class=\"detail-value\">{{ annonce.departureDate|date(\"d/m/Y à H:i\") }}</div>
        </div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Places disponibles:</div>
            <div class=\"detail-value\">{{ places_disponibles }}/{{ annonce.availableSeats }}</div>
        </div>
        {% if annonce.description %}
        <div class=\"detail-row\">
            <div class=\"detail-label\">Description:</div>
            <div class=\"detail-value\">{{ annonce.description }}</div>
        </div>
        {% endif %}
    </div>
    
    <div class=\"details-section\">
        <h2>Trajet</h2>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Départ:</div>
            <div class=\"detail-value\">{{ annonce.trajet.departurePoint }}</div>
        </div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Arrivée:</div>
            <div class=\"detail-value\">{{ annonce.trajet.arrivalPoint }}</div>
        </div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Prix:</div>
            <div class=\"detail-value\">{{ annonce.trajet.price }} DT</div>
        </div>
    </div>
    
    <div class=\"details-section\">
        <h2>Conducteur</h2>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Nom:</div>
            <div class=\"detail-value\">{{ driver.nom }} {{ driver.prenom }}</div>
        </div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Email:</div>
            <div class=\"detail-value\">{{ driver.email }}</div>
        </div>
        {% if driver.telephone %}
        <div class=\"detail-row\">
            <div class=\"detail-label\">Téléphone:</div>
            <div class=\"detail-value\">{{ driver.telephone }}</div>
        </div>
        {% endif %}
    </div>
    
    <div class=\"footer\">
        <p>Ce document a été généré automatiquement par Covoituni.</p>
        <p>Date de génération: {{ \"now\"|date(\"d/m/Y à H:i\") }}</p>
    </div>
</body>
</html> ", "pdf/annonce.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\pdf\\annonce.html.twig");
    }
}
