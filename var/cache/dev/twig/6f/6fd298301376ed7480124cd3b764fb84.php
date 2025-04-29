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

/* admin/reclamation/show.html.twig */
class __TwigTemplate_e7ced29c8d2dbdaedcd54bb028912cdb extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/reclamation/show.html.twig", 1);
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

        yield "Détail de la réclamation";
        
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
        yield "    <div class=\"container mx-auto px-4 py-8 max-w-7xl\">
        <!-- Header with animation -->
        <div class=\"mb-8 animate-fade-in-down\">
            <div class=\"flex flex-col md:flex-row justify-between md:items-center gap-4\">
                <div>
                    <h1 class=\"text-4xl font-extrabold text-gray-800 mb-2 bg-gradient-to-r from-primary to-blue-600 bg-clip-text text-transparent\">Réclamation #";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        yield "</h1>
                    <div class=\"h-1 w-32 bg-gradient-to-r from-primary to-blue-600 rounded mt-2\"></div>
                </div>
                <div class=\"flex flex-wrap gap-3\">
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_index");
        yield "\" 
                       class=\"inline-flex items-center px-4 py-2.5 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-all duration-300 shadow-sm transform hover:scale-105\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                        </svg>
                        Retour à la liste
                    </a>
                    
                    <a href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_reply", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        yield "\" 
                       class=\"inline-flex items-center px-4 py-2.5 bg-gradient-to-r from-orange-500 to-amber-600 text-white rounded-lg hover:opacity-90 transition-all duration-300 shadow-md transform hover:scale-105\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6\" />
                        </svg>
                        ";
        // line 28
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 28, $this->source); })()), "reponses", [], "any", false, false, false, 28))) {
            yield "Répondre";
        } else {
            yield "Ajouter une réponse";
        }
        // line 29
        yield "                    </a>
                    
                    <form method=\"post\" action=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        yield "\" class=\"inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32))), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"inline-flex items-center px-4 py-2.5 bg-gradient-to-r from-red-500 to-pink-600 text-white rounded-lg hover:opacity-90 transition-all duration-300 shadow-md transform hover:scale-105\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                            </svg>
                            Supprimer
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Alert messages with improved animations -->
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", ["success"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 45
            yield "                <div class=\"my-4 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded-r-xl shadow-md animate-fade-in transform transition-all duration-300 hover:scale-[1.01]\">
                    <div class=\"flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-3 text-green-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        <span class=\"font-medium\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "            
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "flashes", ["error"], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 56
            yield "                <div class=\"my-4 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-r-xl shadow-md animate-fade-in transform transition-all duration-300 hover:scale-[1.01]\">
                    <div class=\"flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-3 text-red-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z\" />
                        </svg>
                        <span class=\"font-medium\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "            
            <!-- Status information with improved styling -->
            <div class=\"mt-6 flex flex-wrap items-center gap-4 p-4 bg-gray-50 rounded-xl shadow-sm border border-gray-100 animate-fade-in\" style=\"animation-delay: 0.3s\">
                ";
        // line 68
        $context["statusClasses"] = ["pending" => "bg-gradient-to-r from-yellow-400 to-amber-500 animate-pulse", "in_progress" => "bg-gradient-to-r from-blue-400 to-indigo-500", "resolved" => "bg-gradient-to-r from-green-400 to-teal-500", "rejected" => "bg-gradient-to-r from-red-400 to-pink-500"];
        // line 74
        yield "                
                ";
        // line 75
        $context["statusLabels"] = ["pending" => "En attente", "in_progress" => "En cours", "resolved" => "Résolu", "rejected" => "Rejeté"];
        // line 81
        yield "                
                ";
        // line 82
        $context["statusIcons"] = ["pending" => "<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />", "in_progress" => "<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15\" />", "resolved" => "<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />", "rejected" => "<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />"];
        // line 88
        yield "                
                <form method=\"post\" action=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reclamation_change_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89)]), "html", null, true);
        yield "\" class=\"flex items-center\">
                    <label for=\"status\" class=\"mr-2 text-sm font-medium text-gray-700\">Statut:</label>
                    <select id=\"status\" name=\"status\" class=\"text-sm border border-gray-300 rounded-lg py-2 px-3 focus:ring-primary focus:border-primary shadow-sm\" onchange=\"this.form.submit()\">
                        <option value=\"pending\" ";
        // line 92
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 92, $this->source); })()), "state", [], "any", false, false, false, 92) == "pending")) {
            yield "selected";
        }
        yield ">En attente</option>
                        <option value=\"in_progress\" ";
        // line 93
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 93, $this->source); })()), "state", [], "any", false, false, false, 93) == "in_progress")) {
            yield "selected";
        }
        yield ">En cours</option>
                        <option value=\"resolved\" ";
        // line 94
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 94, $this->source); })()), "state", [], "any", false, false, false, 94) == "resolved")) {
            yield "selected";
        }
        yield ">Résolu</option>
                        <option value=\"rejected\" ";
        // line 95
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 95, $this->source); })()), "state", [], "any", false, false, false, 95) == "rejected")) {
            yield "selected";
        }
        yield ">Rejeté</option>
                    </select>
                </form>
                
                <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium ";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusClasses"]) || array_key_exists("statusClasses", $context) ? $context["statusClasses"] : (function () { throw new RuntimeError('Variable "statusClasses" does not exist.', 99, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 99, $this->source); })()), "state", [], "any", false, false, false, 99), [], "array", false, false, false, 99), "html", null, true);
        yield " text-white shadow-sm\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        ";
        // line 101
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusIcons"]) || array_key_exists("statusIcons", $context) ? $context["statusIcons"] : (function () { throw new RuntimeError('Variable "statusIcons" does not exist.', 101, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 101, $this->source); })()), "state", [], "any", false, false, false, 101), [], "array", false, false, false, 101);
        yield "
                    </svg>
                    ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusLabels"]) || array_key_exists("statusLabels", $context) ? $context["statusLabels"] : (function () { throw new RuntimeError('Variable "statusLabels" does not exist.', 103, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 103, $this->source); })()), "state", [], "any", false, false, false, 103), [], "array", false, false, false, 103), "html", null, true);
        yield "
                </span>
                
                <span class=\"text-gray-500 text-sm flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                    </svg>
                    Soumis le ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 110, $this->source); })()), "date", [], "any", false, false, false, 110), "d/m/Y à H:i"), "html", null, true);
        yield "
                </span>
            </div>
        </div>
        
        <!-- Reclamation content with improved styling -->
        <div class=\"mb-8 grid grid-cols-1 md:grid-cols-3 gap-6\">
            <div class=\"bg-white rounded-xl shadow-lg p-6 md:col-span-2 transition-all duration-300 hover:shadow-xl border border-gray-100 animate-fade-in-up\" style=\"animation-delay: 0.2s\">
                <h2 class=\"text-2xl font-bold mb-4 text-gray-800 flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12h.01M12 12h.01M15 12h.01M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2z\" />
                    </svg>
                    ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 122, $this->source); })()), "subject", [], "any", false, false, false, 122), "html", null, true);
        yield "
                </h2>
                
                <div class=\"mt-6\">
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-3 flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-gray-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 10h16M4 14h16M4 18h16\" />
                        </svg>
                        Description
                    </h3>
                    <div class=\"bg-gray-50 p-6 rounded-lg border border-gray-100 shadow-inner\">
                        <p class=\"text-gray-700 whitespace-pre-line\">";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 133, $this->source); })()), "description", [], "any", false, false, false, 133), "html", null, true);
        yield "</p>
                    </div>
                </div>
                
                ";
        // line 137
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 137, $this->source); })()), "reponses", [], "any", false, false, false, 137))) {
            // line 138
            yield "                    <div class=\"mt-8\">
                        <h3 class=\"text-lg font-semibold text-gray-700 mb-3 flex items-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6\" />
                            </svg>
                            Réponses de l'administration
                        </h3>
                        ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 145, $this->source); })()), "reponses", [], "any", false, false, false, 145));
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 146
                yield "                            <div class=\"bg-primary/5 p-6 rounded-lg border border-primary/20 shadow-inner mb-4\">
                                <div class=\"flex justify-between items-center mb-2\">
                                    <span class=\"text-sm font-medium text-gray-600\">";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "adminUsername", [], "any", false, false, false, 148), "html", null, true);
                yield "</span>
                                    <span class=\"text-xs text-gray-500\">";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "date", [], "any", false, false, false, 149), "d/m/Y à H:i"), "html", null, true);
                yield "</span>
                                </div>
                                <p class=\"text-gray-700 whitespace-pre-line\">";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "content", [], "any", false, false, false, 151), "html", null, true);
                yield "</p>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            yield "                    </div>
                ";
        }
        // line 156
        yield "            </div>
            
            <!-- User info card with improved styling -->
            <div class=\"bg-white rounded-xl shadow-lg p-6 transition-all duration-300 hover:shadow-xl border border-gray-100 animate-fade-in-up\" style=\"animation-delay: 0.4s\">
                <h3 class=\"text-xl font-bold mb-6 text-gray-800 flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                    </svg>
                    Informations utilisateur
                </h3>
                
                <div class=\"flex items-center mb-6\">
                    <div class=\"h-16 w-16 flex-shrink-0 rounded-full overflow-hidden shadow-md border-2 border-white transform transition-transform duration-500 hover:scale-110\">
                        ";
        // line 169
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 169, $this->source); })()), "user", [], "any", false, false, false, 169), "imagePath", [], "any", false, false, false, 169)) {
            // line 170
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 170, $this->source); })()), "user", [], "any", false, false, false, 170), "imagePath", [], "any", false, false, false, 170)), "html", null, true);
            yield "\" alt=\"Profile\" class=\"h-full w-full object-cover\">
                        ";
        } else {
            // line 172
            yield "                            <div class=\"h-full w-full flex items-center justify-center bg-gradient-to-r from-primary to-blue-600 text-white text-2xl uppercase font-bold\">
                                ";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 173, $this->source); })()), "user", [], "any", false, false, false, 173), "prenom", [], "any", false, false, false, 173)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 173, $this->source); })()), "user", [], "any", false, false, false, 173), "nom", [], "any", false, false, false, 173)), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 176
        yield "                    </div>
                    <div class=\"ml-4\">
                        <div class=\"text-lg font-medium text-gray-900\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 178, $this->source); })()), "user", [], "any", false, false, false, 178), "prenom", [], "any", false, false, false, 178), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 178, $this->source); })()), "user", [], "any", false, false, false, 178), "nom", [], "any", false, false, false, 178), "html", null, true);
        yield "</div>
                        <div class=\"text-sm text-gray-500\">";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 179, $this->source); })()), "user", [], "any", false, false, false, 179), "email", [], "any", false, false, false, 179), "html", null, true);
        yield "</div>
                    </div>
                </div>
                
                <ul class=\"space-y-4 text-gray-700\">
                    <li class=\"flex items-start px-4 py-3 bg-gray-50 rounded-lg\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-3 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\" />
                        </svg>
                        <span>";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 188, $this->source); })()), "user", [], "any", false, false, false, 188), "email", [], "any", false, false, false, 188), "html", null, true);
        yield "</span>
                    </li>
                    <li class=\"flex items-start px-4 py-3 bg-gray-50 rounded-lg\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-3 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z\" />
                        </svg>
                        <span>";
        // line 194
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 194, $this->source); })()), "user", [], "any", false, false, false, 194), "tel", [], "any", false, false, false, 194)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 194, $this->source); })()), "user", [], "any", false, false, false, 194), "tel", [], "any", false, false, false, 194), "html", null, true)) : ("Non renseigné"));
        yield "</span>
                    </li>
                    <li class=\"flex items-start px-4 py-3 bg-gray-50 rounded-lg\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-3 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                        </svg>
                        <span>
                            ";
        // line 201
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 201, $this->source); })()), "user", [], "any", false, false, false, 201), "roleCode", [], "any", false, false, false, 201) == "ADMIN")) {
            // line 202
            yield "                                <span class=\"px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs\">Admin</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 203
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 203, $this->source); })()), "user", [], "any", false, false, false, 203), "roleCode", [], "any", false, false, false, 203) == "CONDUCTEUR")) {
            // line 204
            yield "                                <span class=\"px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs\">Conducteur</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 205
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 205, $this->source); })()), "user", [], "any", false, false, false, 205), "roleCode", [], "any", false, false, false, 205) == "PASSAGER")) {
            // line 206
            yield "                                <span class=\"px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs\">Passager</span>
                            ";
        } else {
            // line 208
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 208, $this->source); })()), "user", [], "any", false, false, false, 208), "roleCode", [], "any", false, false, false, 208)), "html", null, true);
            yield "
                            ";
        }
        // line 210
        yield "                        </span>
                    </li>
                </ul>
                
                <div class=\"mt-6\">
                    <h4 class=\"text-sm font-medium text-gray-700 mb-2 flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1 text-gray-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                        </svg>
                        Autres réclamations
                    </h4>
                    
                    <div class=\"bg-gradient-to-r from-primary/10 to-blue-500/10 p-4 rounded-lg shadow-inner\">
                        <p class=\"text-sm text-gray-600 flex items-center justify-center\">
                            <span class=\"font-semibold text-lg text-primary\">";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 224, $this->source); })()), "user", [], "any", false, false, false, 224), "reclamations", [], "any", false, false, false, 224)), "html", null, true);
        yield "</span>
                            <span class=\"ml-2\">réclamation";
        // line 225
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 225, $this->source); })()), "user", [], "any", false, false, false, 225), "reclamations", [], "any", false, false, false, 225)) > 1)) {
            yield "s";
        }
        yield " au total</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 234
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

        // line 235
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translate3d(0, -30px, 0);
        }
        to {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translate3d(0, 30px, 0);
        }
        to {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .animate-fade-in-down {
        animation: fadeInDown 0.5s ease-out forwards;
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.5s ease-out forwards;
    }

    .animate-fade-in {
        animation: fadeIn 0.5s ease-out forwards;
    }

    /* Optional: add pulse animation for pending status */
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.8;
        }
    }

    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
</style>
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
        return "admin/reclamation/show.html.twig";
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
        return array (  508 => 235,  495 => 234,  474 => 225,  470 => 224,  454 => 210,  448 => 208,  444 => 206,  442 => 205,  439 => 204,  437 => 203,  434 => 202,  432 => 201,  422 => 194,  413 => 188,  401 => 179,  395 => 178,  391 => 176,  384 => 173,  381 => 172,  375 => 170,  373 => 169,  358 => 156,  354 => 154,  345 => 151,  340 => 149,  336 => 148,  332 => 146,  328 => 145,  319 => 138,  317 => 137,  310 => 133,  296 => 122,  281 => 110,  271 => 103,  266 => 101,  261 => 99,  252 => 95,  246 => 94,  240 => 93,  234 => 92,  228 => 89,  225 => 88,  223 => 82,  220 => 81,  218 => 75,  215 => 74,  213 => 68,  208 => 65,  198 => 61,  191 => 56,  187 => 55,  184 => 54,  174 => 50,  167 => 45,  163 => 44,  148 => 32,  144 => 31,  140 => 29,  134 => 28,  126 => 23,  115 => 15,  108 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détail de la réclamation{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8 max-w-7xl\">
        <!-- Header with animation -->
        <div class=\"mb-8 animate-fade-in-down\">
            <div class=\"flex flex-col md:flex-row justify-between md:items-center gap-4\">
                <div>
                    <h1 class=\"text-4xl font-extrabold text-gray-800 mb-2 bg-gradient-to-r from-primary to-blue-600 bg-clip-text text-transparent\">Réclamation #{{ reclamation.id }}</h1>
                    <div class=\"h-1 w-32 bg-gradient-to-r from-primary to-blue-600 rounded mt-2\"></div>
                </div>
                <div class=\"flex flex-wrap gap-3\">
                    <a href=\"{{ path('app_admin_reclamation_index') }}\" 
                       class=\"inline-flex items-center px-4 py-2.5 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-all duration-300 shadow-sm transform hover:scale-105\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                        </svg>
                        Retour à la liste
                    </a>
                    
                    <a href=\"{{ path('app_admin_reclamation_reply', {'id': reclamation.id}) }}\" 
                       class=\"inline-flex items-center px-4 py-2.5 bg-gradient-to-r from-orange-500 to-amber-600 text-white rounded-lg hover:opacity-90 transition-all duration-300 shadow-md transform hover:scale-105\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6\" />
                        </svg>
                        {% if reclamation.reponses is empty %}Répondre{% else %}Ajouter une réponse{% endif %}
                    </a>
                    
                    <form method=\"post\" action=\"{{ path('app_admin_reclamation_delete', {'id': reclamation.id}) }}\" class=\"inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reclamation.id) }}\">
                        <button type=\"submit\" class=\"inline-flex items-center px-4 py-2.5 bg-gradient-to-r from-red-500 to-pink-600 text-white rounded-lg hover:opacity-90 transition-all duration-300 shadow-md transform hover:scale-105\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                            </svg>
                            Supprimer
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Alert messages with improved animations -->
            {% for message in app.flashes('success') %}
                <div class=\"my-4 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded-r-xl shadow-md animate-fade-in transform transition-all duration-300 hover:scale-[1.01]\">
                    <div class=\"flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-3 text-green-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                        </svg>
                        <span class=\"font-medium\">{{ message }}</span>
                    </div>
                </div>
            {% endfor %}
            
            {% for message in app.flashes('error') %}
                <div class=\"my-4 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-r-xl shadow-md animate-fade-in transform transition-all duration-300 hover:scale-[1.01]\">
                    <div class=\"flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-3 text-red-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z\" />
                        </svg>
                        <span class=\"font-medium\">{{ message }}</span>
                    </div>
                </div>
            {% endfor %}
            
            <!-- Status information with improved styling -->
            <div class=\"mt-6 flex flex-wrap items-center gap-4 p-4 bg-gray-50 rounded-xl shadow-sm border border-gray-100 animate-fade-in\" style=\"animation-delay: 0.3s\">
                {% set statusClasses = {
                    'pending': 'bg-gradient-to-r from-yellow-400 to-amber-500 animate-pulse',
                    'in_progress': 'bg-gradient-to-r from-blue-400 to-indigo-500',
                    'resolved': 'bg-gradient-to-r from-green-400 to-teal-500',
                    'rejected': 'bg-gradient-to-r from-red-400 to-pink-500'
                } %}
                
                {% set statusLabels = {
                    'pending': 'En attente',
                    'in_progress': 'En cours',
                    'resolved': 'Résolu',
                    'rejected': 'Rejeté'
                } %}
                
                {% set statusIcons = {
                    'pending': '<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />',
                    'in_progress': '<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15\" />',
                    'resolved': '<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />',
                    'rejected': '<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />'
                } %}
                
                <form method=\"post\" action=\"{{ path('app_admin_reclamation_change_status', {'id': reclamation.id}) }}\" class=\"flex items-center\">
                    <label for=\"status\" class=\"mr-2 text-sm font-medium text-gray-700\">Statut:</label>
                    <select id=\"status\" name=\"status\" class=\"text-sm border border-gray-300 rounded-lg py-2 px-3 focus:ring-primary focus:border-primary shadow-sm\" onchange=\"this.form.submit()\">
                        <option value=\"pending\" {% if reclamation.state == 'pending' %}selected{% endif %}>En attente</option>
                        <option value=\"in_progress\" {% if reclamation.state == 'in_progress' %}selected{% endif %}>En cours</option>
                        <option value=\"resolved\" {% if reclamation.state == 'resolved' %}selected{% endif %}>Résolu</option>
                        <option value=\"rejected\" {% if reclamation.state == 'rejected' %}selected{% endif %}>Rejeté</option>
                    </select>
                </form>
                
                <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium {{ statusClasses[reclamation.state] }} text-white shadow-sm\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        {{ statusIcons[reclamation.state]|raw }}
                    </svg>
                    {{ statusLabels[reclamation.state] }}
                </span>
                
                <span class=\"text-gray-500 text-sm flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1.5 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                    </svg>
                    Soumis le {{ reclamation.date|date('d/m/Y à H:i') }}
                </span>
            </div>
        </div>
        
        <!-- Reclamation content with improved styling -->
        <div class=\"mb-8 grid grid-cols-1 md:grid-cols-3 gap-6\">
            <div class=\"bg-white rounded-xl shadow-lg p-6 md:col-span-2 transition-all duration-300 hover:shadow-xl border border-gray-100 animate-fade-in-up\" style=\"animation-delay: 0.2s\">
                <h2 class=\"text-2xl font-bold mb-4 text-gray-800 flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12h.01M12 12h.01M15 12h.01M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2z\" />
                    </svg>
                    {{ reclamation.subject }}
                </h2>
                
                <div class=\"mt-6\">
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-3 flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-gray-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 10h16M4 14h16M4 18h16\" />
                        </svg>
                        Description
                    </h3>
                    <div class=\"bg-gray-50 p-6 rounded-lg border border-gray-100 shadow-inner\">
                        <p class=\"text-gray-700 whitespace-pre-line\">{{ reclamation.description }}</p>
                    </div>
                </div>
                
                {% if reclamation.reponses is not empty %}
                    <div class=\"mt-8\">
                        <h3 class=\"text-lg font-semibold text-gray-700 mb-3 flex items-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6\" />
                            </svg>
                            Réponses de l'administration
                        </h3>
                        {% for reponse in reclamation.reponses %}
                            <div class=\"bg-primary/5 p-6 rounded-lg border border-primary/20 shadow-inner mb-4\">
                                <div class=\"flex justify-between items-center mb-2\">
                                    <span class=\"text-sm font-medium text-gray-600\">{{ reponse.adminUsername }}</span>
                                    <span class=\"text-xs text-gray-500\">{{ reponse.date|date('d/m/Y à H:i') }}</span>
                                </div>
                                <p class=\"text-gray-700 whitespace-pre-line\">{{ reponse.content }}</p>
                            </div>
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
            
            <!-- User info card with improved styling -->
            <div class=\"bg-white rounded-xl shadow-lg p-6 transition-all duration-300 hover:shadow-xl border border-gray-100 animate-fade-in-up\" style=\"animation-delay: 0.4s\">
                <h3 class=\"text-xl font-bold mb-6 text-gray-800 flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                    </svg>
                    Informations utilisateur
                </h3>
                
                <div class=\"flex items-center mb-6\">
                    <div class=\"h-16 w-16 flex-shrink-0 rounded-full overflow-hidden shadow-md border-2 border-white transform transition-transform duration-500 hover:scale-110\">
                        {% if reclamation.user.imagePath %}
                            <img src=\"{{ asset(reclamation.user.imagePath) }}\" alt=\"Profile\" class=\"h-full w-full object-cover\">
                        {% else %}
                            <div class=\"h-full w-full flex items-center justify-center bg-gradient-to-r from-primary to-blue-600 text-white text-2xl uppercase font-bold\">
                                {{ reclamation.user.prenom|first }}{{ reclamation.user.nom|first }}
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"ml-4\">
                        <div class=\"text-lg font-medium text-gray-900\">{{ reclamation.user.prenom }} {{ reclamation.user.nom }}</div>
                        <div class=\"text-sm text-gray-500\">{{ reclamation.user.email }}</div>
                    </div>
                </div>
                
                <ul class=\"space-y-4 text-gray-700\">
                    <li class=\"flex items-start px-4 py-3 bg-gray-50 rounded-lg\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-3 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\" />
                        </svg>
                        <span>{{ reclamation.user.email }}</span>
                    </li>
                    <li class=\"flex items-start px-4 py-3 bg-gray-50 rounded-lg\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-3 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z\" />
                        </svg>
                        <span>{{ reclamation.user.tel ? reclamation.user.tel : 'Non renseigné' }}</span>
                    </li>
                    <li class=\"flex items-start px-4 py-3 bg-gray-50 rounded-lg\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-3 mt-0.5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                        </svg>
                        <span>
                            {% if reclamation.user.roleCode == 'ADMIN' %}
                                <span class=\"px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs\">Admin</span>
                            {% elseif reclamation.user.roleCode == 'CONDUCTEUR' %}
                                <span class=\"px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs\">Conducteur</span>
                            {% elseif reclamation.user.roleCode == 'PASSAGER' %}
                                <span class=\"px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs\">Passager</span>
                            {% else %}
                                {{ reclamation.user.roleCode|capitalize }}
                            {% endif %}
                        </span>
                    </li>
                </ul>
                
                <div class=\"mt-6\">
                    <h4 class=\"text-sm font-medium text-gray-700 mb-2 flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1 text-gray-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                        </svg>
                        Autres réclamations
                    </h4>
                    
                    <div class=\"bg-gradient-to-r from-primary/10 to-blue-500/10 p-4 rounded-lg shadow-inner\">
                        <p class=\"text-sm text-gray-600 flex items-center justify-center\">
                            <span class=\"font-semibold text-lg text-primary\">{{ reclamation.user.reclamations|length }}</span>
                            <span class=\"ml-2\">réclamation{% if reclamation.user.reclamations|length > 1 %}s{% endif %} au total</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translate3d(0, -30px, 0);
        }
        to {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translate3d(0, 30px, 0);
        }
        to {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .animate-fade-in-down {
        animation: fadeInDown 0.5s ease-out forwards;
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.5s ease-out forwards;
    }

    .animate-fade-in {
        animation: fadeIn 0.5s ease-out forwards;
    }

    /* Optional: add pulse animation for pending status */
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.8;
        }
    }

    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
</style>
{% endblock %} ", "admin/reclamation/show.html.twig", "D:\\Covoituni_web-master\\templates\\admin\\reclamation\\show.html.twig");
    }
}
