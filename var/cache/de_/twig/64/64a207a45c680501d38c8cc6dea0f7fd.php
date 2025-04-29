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

/* admin/annonce/index.html.twig */
class __TwigTemplate_0bde10b2917ee6fec8deb7015ea8630e extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/annonce/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/annonce/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/annonce/index.html.twig", 1);
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

        yield "Administration - Liste des Annonces";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .card {
            transition: all 0.3s ease;
            border-radius: 0.75rem;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .badge {
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .badge-active {
            background-color: rgba(16, 185, 129, 0.1);
            color: rgb(16, 185, 129);
        }
        .badge-expired {
            background-color: rgba(107, 114, 128, 0.1);
            color: rgb(107, 114, 128);
        }
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        .btn-blue {
            background-color: rgba(37, 99, 235, 0.1);
            color: rgb(37, 99, 235);
            border: none;
        }
        .btn-blue:hover {
            background-color: rgba(37, 99, 235, 0.2);
        }
        .btn-green {
            background-color: rgba(5, 150, 105, 0.1);
            color: rgb(5, 150, 105);
            border: none;
        }
        .btn-green:hover {
            background-color: rgba(5, 150, 105, 0.2);
        }
        .btn-yellow {
            background-color: rgba(245, 158, 11, 0.1);
            color: rgb(245, 158, 11);
            border: none;
        }
        .btn-yellow:hover {
            background-color: rgba(245, 158, 11, 0.2);
        }
        .btn-red {
            background-color: rgba(239, 68, 68, 0.1);
            color: rgb(239, 68, 68);
            border: none;
        }
        .btn-red:hover {
            background-color: rgba(239, 68, 68, 0.2);
        }
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        .search-container {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }
        @media (max-width: 768px) {
            .search-container {
                flex-direction: column;
            }
        }
        .action-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .text-darker {
            color: #374151;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 99
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

        // line 100
        yield "<div class=\"min-h-screen bg-gray-50 py-8\">
    <div class=\"container mx-auto px-4\">
        <div class=\"header-container\">
            <h1 class=\"text-2xl font-bold text-gray-800\">Liste des Annonces</h1>
            <a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"bg-gray-200 text-gray-700 rounded-lg px-4 py-2 flex items-center hover:bg-gray-300 transition duration-300\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\" />
                </svg>
                Dashboard
            </a>
        </div>

        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "flashes", ["success"], "method", false, false, false, 112));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 113
            yield "            <div class=\"mb-4 p-4 rounded-md bg-green-50 border border-green-200\">
                <div class=\"flex\">
                    <div class=\"flex-shrink-0\">
                        <svg class=\"h-5 w-5 text-green-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\"></path>
                        </svg>
                    </div>
                    <div class=\"ml-3\">
                        <p class=\"text-sm font-medium text-green-800\">";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "
        <div class=\"search-container\">
            <input type=\"text\" id=\"search\" placeholder=\"Rechercher une annonce...\" class=\"w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500\">
            <select id=\"status-filter\" class=\"px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500\">
                <option value=\"\">Tous les statuts</option>
                <option value=\"active\">Actives</option>
                <option value=\"expired\">Expirées</option>
            </select>
        </div>

        ";
        // line 136
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 136, $this->source); })()))) {
            // line 137
            yield "            <div class=\"bg-white p-8 rounded-lg shadow text-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12 mx-auto text-gray-400 mb-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4\" />
                </svg>
                <h3 class=\"text-lg font-medium text-gray-900 mb-2\">Aucune annonce trouvée</h3>
                <p class=\"text-gray-500\">Il n'y a actuellement aucune annonce disponible dans le système.</p>
            </div>
        ";
        } else {
            // line 145
            yield "            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 annonce-container\">
                ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 146, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 147
                yield "                    <div class=\"card bg-white shadow-md overflow-hidden\">
                        <div class=\"p-6\">
                            <div class=\"flex justify-between items-start mb-4\">
                                <h3 class=\"text-lg font-bold text-gray-900\">
                                    ";
                // line 151
                if (CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "trajet", [], "any", false, false, false, 151)) {
                    // line 152
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "trajet", [], "any", false, false, false, 152), "departurePoint", [], "any", false, false, false, 152), "html", null, true);
                    yield " → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "trajet", [], "any", false, false, false, 152), "arrivalPoint", [], "any", false, false, false, 152), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 154
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 154), "html", null, true);
                    yield "
                                    ";
                }
                // line 156
                yield "                                </h3>
                                <span class=\"badge ";
                // line 157
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "departureDate", [], "any", false, false, false, 157) > $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
                    yield "badge-active";
                } else {
                    yield "badge-expired";
                }
                yield "\">
                                    ";
                // line 158
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "departureDate", [], "any", false, false, false, 158) > $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
                    yield "Active";
                } else {
                    yield "Expirée";
                }
                // line 159
                yield "                                </span>
                            </div>
                            
                            <div class=\"flex items-center mb-3 text-gray-600\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                                </svg>
                                Conducteur #";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "driverId", [], "any", false, false, false, 166), "html", null, true);
                yield "
                            </div>
                            
                            <div class=\"flex items-center mb-3 text-gray-600\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                </svg>
                                ";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "departureDate", [], "any", false, false, false, 173), "d/m/Y à H:i"), "html", null, true);
                yield "
                            </div>
                            
                            <div class=\"flex items-center mb-4 text-gray-600\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                                </svg>
                                ";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "availableSeats", [], "any", false, false, false, 180), "html", null, true);
                yield " place";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "availableSeats", [], "any", false, false, false, 180) > 1)) {
                    yield "s";
                }
                yield " disponible";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "availableSeats", [], "any", false, false, false, 180) > 1)) {
                    yield "s";
                }
                // line 181
                yield "                            </div>
                            
                            <div class=\"pt-4 border-t border-gray-100 action-buttons\">
                                <a href=\"";
                // line 184
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonce_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 184)]), "html", null, true);
                yield "\" class=\"btn btn-blue\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\" />
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\" />
                                    </svg>
                                    Voir les annonces
                                </a>
                                <a href=\"";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonce_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 191)]), "html", null, true);
                yield "\" class=\"btn btn-yellow\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\" />
                                    </svg>
                                    Modifier
                                </a>
                                <a href=\"";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonce_terminate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 197)]), "html", null, true);
                yield "\" class=\"btn btn-green\" onclick=\"return confirm('Êtes-vous sûr de vouloir terminer cette annonce?')\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                                    </svg>
                                    Terminer tout
                                </a>
                                <form action=\"";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonce_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 203)]), "html", null, true);
                yield "\" method=\"post\" class=\"inline-block\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce?')\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 204
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 204))), "html", null, true);
                yield "\">
                                    <button type=\"submit\" class=\"btn btn-red\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                                        </svg>
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['annonce'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            yield "            </div>
        ";
        }
        // line 218
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 222
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

        // line 223
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search');
            const statusFilter = document.getElementById('status-filter');
            const annonceCards = document.querySelectorAll('.card');
            
            function filterAnnonces() {
                const searchTerm = searchInput.value.toLowerCase();
                const statusValue = statusFilter.value;
                
                annonceCards.forEach(card => {
                    const textContent = card.textContent.toLowerCase();
                    const hasActiveStatus = card.querySelector('.badge-active') !== null;
                    const hasStatusMatch = statusValue === '' || 
                        (statusValue === 'active' && hasActiveStatus) || 
                        (statusValue === 'expired' && !hasActiveStatus);
                    
                    const isVisible = textContent.includes(searchTerm) && hasStatusMatch;
                    card.style.display = isVisible ? '' : 'none';
                });
            }
            
            searchInput.addEventListener('input', filterAnnonces);
            statusFilter.addEventListener('change', filterAnnonces);
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
        return "admin/annonce/index.html.twig";
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
        return array (  455 => 223,  442 => 222,  429 => 218,  425 => 216,  407 => 204,  403 => 203,  394 => 197,  385 => 191,  375 => 184,  370 => 181,  360 => 180,  350 => 173,  340 => 166,  331 => 159,  325 => 158,  317 => 157,  314 => 156,  308 => 154,  300 => 152,  298 => 151,  292 => 147,  288 => 146,  285 => 145,  275 => 137,  273 => 136,  261 => 126,  250 => 121,  240 => 113,  236 => 112,  225 => 104,  219 => 100,  206 => 99,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration - Liste des Annonces{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .card {
            transition: all 0.3s ease;
            border-radius: 0.75rem;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .badge {
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .badge-active {
            background-color: rgba(16, 185, 129, 0.1);
            color: rgb(16, 185, 129);
        }
        .badge-expired {
            background-color: rgba(107, 114, 128, 0.1);
            color: rgb(107, 114, 128);
        }
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        .btn-blue {
            background-color: rgba(37, 99, 235, 0.1);
            color: rgb(37, 99, 235);
            border: none;
        }
        .btn-blue:hover {
            background-color: rgba(37, 99, 235, 0.2);
        }
        .btn-green {
            background-color: rgba(5, 150, 105, 0.1);
            color: rgb(5, 150, 105);
            border: none;
        }
        .btn-green:hover {
            background-color: rgba(5, 150, 105, 0.2);
        }
        .btn-yellow {
            background-color: rgba(245, 158, 11, 0.1);
            color: rgb(245, 158, 11);
            border: none;
        }
        .btn-yellow:hover {
            background-color: rgba(245, 158, 11, 0.2);
        }
        .btn-red {
            background-color: rgba(239, 68, 68, 0.1);
            color: rgb(239, 68, 68);
            border: none;
        }
        .btn-red:hover {
            background-color: rgba(239, 68, 68, 0.2);
        }
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        .search-container {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }
        @media (max-width: 768px) {
            .search-container {
                flex-direction: column;
            }
        }
        .action-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .text-darker {
            color: #374151;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-50 py-8\">
    <div class=\"container mx-auto px-4\">
        <div class=\"header-container\">
            <h1 class=\"text-2xl font-bold text-gray-800\">Liste des Annonces</h1>
            <a href=\"{{ path('app_admin_dashboard') }}\" class=\"bg-gray-200 text-gray-700 rounded-lg px-4 py-2 flex items-center hover:bg-gray-300 transition duration-300\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\" />
                </svg>
                Dashboard
            </a>
        </div>

        {% for message in app.flashes('success') %}
            <div class=\"mb-4 p-4 rounded-md bg-green-50 border border-green-200\">
                <div class=\"flex\">
                    <div class=\"flex-shrink-0\">
                        <svg class=\"h-5 w-5 text-green-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\"></path>
                        </svg>
                    </div>
                    <div class=\"ml-3\">
                        <p class=\"text-sm font-medium text-green-800\">{{ message }}</p>
                    </div>
                </div>
            </div>
        {% endfor %}

        <div class=\"search-container\">
            <input type=\"text\" id=\"search\" placeholder=\"Rechercher une annonce...\" class=\"w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500\">
            <select id=\"status-filter\" class=\"px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500\">
                <option value=\"\">Tous les statuts</option>
                <option value=\"active\">Actives</option>
                <option value=\"expired\">Expirées</option>
            </select>
        </div>

        {% if annonces is empty %}
            <div class=\"bg-white p-8 rounded-lg shadow text-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12 mx-auto text-gray-400 mb-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4\" />
                </svg>
                <h3 class=\"text-lg font-medium text-gray-900 mb-2\">Aucune annonce trouvée</h3>
                <p class=\"text-gray-500\">Il n'y a actuellement aucune annonce disponible dans le système.</p>
            </div>
        {% else %}
            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 annonce-container\">
                {% for annonce in annonces %}
                    <div class=\"card bg-white shadow-md overflow-hidden\">
                        <div class=\"p-6\">
                            <div class=\"flex justify-between items-start mb-4\">
                                <h3 class=\"text-lg font-bold text-gray-900\">
                                    {% if annonce.trajet %}
                                        {{ annonce.trajet.departurePoint }} → {{ annonce.trajet.arrivalPoint }}
                                    {% else %}
                                        {{ annonce.titre }}
                                    {% endif %}
                                </h3>
                                <span class=\"badge {% if annonce.departureDate > date() %}badge-active{% else %}badge-expired{% endif %}\">
                                    {% if annonce.departureDate > date() %}Active{% else %}Expirée{% endif %}
                                </span>
                            </div>
                            
                            <div class=\"flex items-center mb-3 text-gray-600\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                                </svg>
                                Conducteur #{{ annonce.driverId }}
                            </div>
                            
                            <div class=\"flex items-center mb-3 text-gray-600\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                </svg>
                                {{ annonce.departureDate|date('d/m/Y à H:i') }}
                            </div>
                            
                            <div class=\"flex items-center mb-4 text-gray-600\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                                </svg>
                                {{ annonce.availableSeats }} place{% if annonce.availableSeats > 1 %}s{% endif %} disponible{% if annonce.availableSeats > 1 %}s{% endif %}
                            </div>
                            
                            <div class=\"pt-4 border-t border-gray-100 action-buttons\">
                                <a href=\"{{ path('app_admin_annonce_show', {'id': annonce.id}) }}\" class=\"btn btn-blue\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\" />
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\" />
                                    </svg>
                                    Voir les annonces
                                </a>
                                <a href=\"{{ path('app_admin_annonce_edit', {'id': annonce.id}) }}\" class=\"btn btn-yellow\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\" />
                                    </svg>
                                    Modifier
                                </a>
                                <a href=\"{{ path('app_admin_annonce_terminate', {'id': annonce.id}) }}\" class=\"btn btn-green\" onclick=\"return confirm('Êtes-vous sûr de vouloir terminer cette annonce?')\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                                    </svg>
                                    Terminer tout
                                </a>
                                <form action=\"{{ path('app_admin_annonce_delete', {'id': annonce.id}) }}\" method=\"post\" class=\"inline-block\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce?')\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ annonce.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-red\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                                        </svg>
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% endif %}
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search');
            const statusFilter = document.getElementById('status-filter');
            const annonceCards = document.querySelectorAll('.card');
            
            function filterAnnonces() {
                const searchTerm = searchInput.value.toLowerCase();
                const statusValue = statusFilter.value;
                
                annonceCards.forEach(card => {
                    const textContent = card.textContent.toLowerCase();
                    const hasActiveStatus = card.querySelector('.badge-active') !== null;
                    const hasStatusMatch = statusValue === '' || 
                        (statusValue === 'active' && hasActiveStatus) || 
                        (statusValue === 'expired' && !hasActiveStatus);
                    
                    const isVisible = textContent.includes(searchTerm) && hasStatusMatch;
                    card.style.display = isVisible ? '' : 'none';
                });
            }
            
            searchInput.addEventListener('input', filterAnnonces);
            statusFilter.addEventListener('change', filterAnnonces);
        });
    </script>
{% endblock %} ", "admin/annonce/index.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\admin\\annonce\\index.html.twig");
    }
}
