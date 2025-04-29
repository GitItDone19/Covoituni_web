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

/* conducteur/voiture.html.twig */
class __TwigTemplate_1033c29f4e02e2d40d0353db0aba7d43 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/voiture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/voiture.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/voiture.html.twig", 1);
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

        yield "Ma voiture";
        
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
        yield "    <div class=\"mb-8 animate-fade-in\">
        <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0\">
            <div>
                <h1 class=\"text-3xl font-bold bg-gradient-to-r from-primary to-primary-dark bg-clip-text text-transparent\">
                    Ma voiture
                </h1>
                <p class=\"text-gray-600 mt-2 max-w-2xl\">
                    Gérez les informations de votre véhicule pour proposer des trajets
                </p>
            </div>
        </div>
    </div>
    
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["success"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            yield "        <div class=\"mb-6 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg shadow-md animate-slide-up\" role=\"alert\">
            <div class=\"flex items-center\">
                <svg class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\"></path>
                </svg>
                <span class=\"font-medium\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "flashes", ["error"], "method", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 31
            yield "        <div class=\"mb-6 bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg shadow-md animate-slide-up\" role=\"alert\">
            <div class=\"flex items-center\">
                <svg class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\"></path>
                </svg>
                <span class=\"font-medium\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "
    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "flashes", ["info"], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 42
            yield "        <div class=\"mb-6 bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 rounded-lg shadow-md animate-slide-up\" role=\"alert\">
            <div class=\"flex items-center\">
                <svg class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\"></path>
                </svg>
                <span class=\"font-medium\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "    
    <div class=\"relative bg-white rounded-2xl shadow-[0_10px_60px_-15px_rgba(0,0,0,0.15)] p-8 md:p-10 animate-slide-up border border-gray-100\">
        <div class=\"absolute inset-0 bg-gradient-to-br from-white to-gray-50 rounded-2xl opacity-80 pointer-events-none\"></div>
        
        ";
        // line 55
        if ((array_key_exists("voiture", $context) &&  !(null === (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 55, $this->source); })())))) {
            // line 56
            yield "            <div class=\"flex flex-col md:flex-row gap-8 relative z-10\">
                <div class=\"w-full md:w-1/3\">
                    <div class=\"relative group\">
                        ";
            // line 59
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["voiture"] ?? null), "imagePath", [], "any", true, true, false, 59) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 59, $this->source); })()), "imagePath", [], "any", false, false, false, 59))) {
                // line 60
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 60, $this->source); })()), "imagePath", [], "any", false, false, false, 60)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 60, $this->source); })()), "marque", [], "any", false, false, false, 60), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 60, $this->source); })()), "modele", [], "any", false, false, false, 60), "html", null, true);
                yield "\" class=\"w-full h-64 object-cover rounded-xl shadow-md transition-all duration-300 group-hover:shadow-lg\">
                        ";
            } else {
                // line 62
                yield "                            <div class=\"w-full h-64 bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl flex items-center justify-center overflow-hidden transition-all duration-300 group-hover:shadow-lg relative\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-24 w-24 text-gray-400 transition-all duration-500 transform group-hover:scale-110\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z\" />
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M19 14l-2-2H7L5 14m14-4.5v9.5a1 1 0 01-1 1H6a1 1 0 01-1-1V9.5m14 0a1.5 1.5 0 00-1.5-1.5H6.5a1.5 1.5 0 00-1.5 1.5m15 0v4.5a1.5 1.5 0 01-1.5 1.5H6.5a1.5 1.5 0 01-1.5-1.5V9.5\" />
                                </svg>
                                <div class=\"absolute inset-0 bg-gradient-to-tr from-primary-ultra-light/0 to-primary-ultra-light/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300\"></div>
                            </div>
                        ";
            }
            // line 70
            yield "                    </div>

                    <div class=\"mt-6\">
                        <a href=\"";
            // line 73
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_voiture_edit");
            yield "\" class=\"inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg group\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 group-hover:animate-pulse\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z\" />
                            </svg>
                            Modifier les informations
                        </a>
                        
                        <button type=\"button\" class=\"mt-3 inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium bg-red-600 hover:bg-red-700 text-white rounded-xl shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg group\" 
                                onclick=\"openDeleteModal()\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 group-hover:animate-pulse\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                            </svg>
                            Supprimer
                        </button>
                    </div>
                    
                    <!-- Delete Confirmation Modal -->
                    <div id=\"deleteModal\" class=\"fixed inset-0 flex items-center justify-center z-50 hidden\">
                        <div class=\"fixed inset-0 bg-black bg-opacity-50\"></div>
                        <div class=\"relative bg-white rounded-lg shadow-xl max-w-md w-full p-6 animate-fade-in\">
                            <div class=\"flex flex-col items-center text-center\">
                                <div class=\"bg-red-100 p-3 rounded-full mb-4\">
                                    <svg class=\"h-10 w-10 text-red-600\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                                    </svg>
                                </div>
                                <h3 class=\"text-xl font-bold text-gray-900 mb-2\">Confirmer la suppression</h3>
                                <p class=\"text-gray-600 mb-6\">Êtes-vous sûr de vouloir supprimer cette voiture ? Cette action est irréversible.</p>
                                
                                <form action=\"";
            // line 102
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_voiture_delete");
            yield "\" method=\"POST\" class=\"w-full flex space-x-4\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-car"), "html", null, true);
            yield "\">
                                    <button type=\"button\" onclick=\"closeDeleteModal()\" 
                                            class=\"flex-1 py-2 px-4 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2\">
                                        Non, annuler
                                    </button>
                                    <button type=\"submit\" 
                                            class=\"flex-1 py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2\">
                                        Oui, supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"w-full md:w-2/3\">
                    <h2 class=\"text-2xl font-bold mb-6 flex items-center text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-dark\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-7 mr-3 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 10V3L4 14h7v7l9-11h-7z\" />
                        </svg>
                        ";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 123, $this->source); })()), "marque", [], "any", false, false, false, 123), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 123, $this->source); })()), "modele", [], "any", false, false, false, 123), "html", null, true);
            yield "
                    </h2>
                    
                    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                        <div class=\"bg-white rounded-xl p-4 border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-primary-ultra-light transform hover:-translate-y-1\">
                            <p class=\"text-sm text-gray-500 mb-1\">Marque</p>
                            <p class=\"font-medium text-gray-800\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 129, $this->source); })()), "marque", [], "any", false, false, false, 129), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"bg-white rounded-xl p-4 border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-primary-ultra-light transform hover:-translate-y-1\">
                            <p class=\"text-sm text-gray-500 mb-1\">Modèle</p>
                            <p class=\"font-medium text-gray-800\">";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 133, $this->source); })()), "modele", [], "any", false, false, false, 133), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"bg-white rounded-xl p-4 border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-primary-ultra-light transform hover:-translate-y-1\">
                            <p class=\"text-sm text-gray-500 mb-1\">Année</p>
                            <p class=\"font-medium text-gray-800\">";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 137, $this->source); })()), "dateImatriculation", [], "any", false, false, false, 137), "Y"), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"bg-white rounded-xl p-4 border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-primary-ultra-light transform hover:-translate-y-1\">
                            <p class=\"text-sm text-gray-500 mb-1\">Couleur</p>
                            <p class=\"font-medium text-gray-800\">";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 141, $this->source); })()), "couleur", [], "any", false, false, false, 141), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"bg-white rounded-xl p-4 border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-primary-ultra-light transform hover:-translate-y-1\">
                            <p class=\"text-sm text-gray-500 mb-1\">Immatriculation</p>
                            <p class=\"font-medium text-gray-800\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 145, $this->source); })()), "plaqueImatriculation", [], "any", false, false, false, 145), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"bg-white rounded-xl p-4 border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-primary-ultra-light transform hover:-translate-y-1\">
                            <p class=\"text-sm text-gray-500 mb-1\">Date d'immatriculation</p>
                            <p class=\"font-medium text-gray-800\">";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 149, $this->source); })()), "dateImatriculation", [], "any", false, false, false, 149), "d/m/Y"), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"bg-white rounded-xl p-4 border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-primary-ultra-light transform hover:-translate-y-1\">
                            <p class=\"text-sm text-gray-500 mb-1\">Catégorie</p>
                            <p class=\"font-medium text-gray-800\">
                                ";
            // line 154
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 154, $this->source); })()), "categorie", [], "any", false, false, false, 154)) {
                // line 155
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 155, $this->source); })()), "categorie", [], "any", false, false, false, 155), "nom", [], "any", false, false, false, 155), "html", null, true);
                yield "
                                ";
            } else {
                // line 157
                yield "                                    Non spécifiée
                                ";
            }
            // line 159
            yield "                            </p>
                        </div>
                    </div>
                    
                    <div class=\"mt-8 bg-white rounded-xl p-5 border border-gray-100 shadow-sm\">
                        <h3 class=\"text-lg font-bold mb-4 text-gray-800\">Description du véhicule</h3>
                        <p class=\"text-gray-700\">
                            ";
            // line 166
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 166, $this->source); })()), "description", [], "any", false, false, false, 166)) {
                // line 167
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 167, $this->source); })()), "description", [], "any", false, false, false, 167), "html", null, true);
                yield "
                            ";
            } else {
                // line 169
                yield "                                Aucune description disponible.
                            ";
            }
            // line 171
            yield "                        </p>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 176
            yield "            <div class=\"text-center relative z-10 py-12\">
                <div class=\"inline-block p-6 bg-primary-ultra-light rounded-full mb-6 text-primary\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z\" />
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M19 14l-2-2H7L5 14m14-4.5v9.5a1 1 0 01-1 1H6a1 1 0 01-1-1V9.5m14 0a1.5 1.5 0 00-1.5-1.5H6.5a1.5 1.5 0 00-1.5 1.5m15 0v4.5a1.5 1.5 0 01-1.5 1.5H6.5a1.5 1.5 0 01-1.5-1.5V9.5\" />
                    </svg>
                </div>
                <h3 class=\"text-2xl font-bold text-gray-900 mb-4\">Aucun véhicule enregistré</h3>
                <p class=\"text-gray-600 mb-2 max-w-md mx-auto\">Vous n'avez pas encore ajouté de véhicule à votre profil.</p>
                <p class=\"text-gray-600 mb-8 max-w-md mx-auto\">Pour proposer des trajets ou participer à des événements en tant que conducteur, vous devez enregistrer votre véhicule.</p>
                
                <a href=\"";
            // line 187
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_voiture_add");
            yield "\" class=\"inline-flex items-center px-6 py-3 text-base font-medium bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg group\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3 group-hover:animate-pulse\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                    </svg>
                    Ajouter mon véhicule
                </a>
            </div>
        ";
        }
        // line 195
        yield "    </div>

    <style>
        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slide-up {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        .animate-fade-in {
            animation: fade-in 0.8s ease-out forwards;
        }
        
        .animate-slide-up {
            animation: slide-up 0.6s ease-out 0.2s forwards;
            opacity: 0;
        }
    </style>
    
    <script>
        function openDeleteModal() {
            document.getElementById('deleteModal').classList.remove('hidden');
            document.body.classList.add('overflow-hidden'); // Prevent scrolling when modal is open
        }
        
        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.add('hidden');
            document.body.classList.remove('overflow-hidden'); // Re-enable scrolling
        }
        
        // Close the modal if user clicks outside of it
        document.addEventListener('click', function(event) {
            const modal = document.getElementById('deleteModal');
            const modalContent = modal.querySelector('.relative');
            
            if (modal && !modal.classList.contains('hidden') && !modalContent.contains(event.target) && !event.target.closest('button[onclick=\"openDeleteModal()\"]')) {
                closeDeleteModal();
            }
        });
        
        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && !document.getElementById('deleteModal').classList.contains('hidden')) {
                closeDeleteModal();
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
        return "conducteur/voiture.html.twig";
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
        return array (  401 => 195,  390 => 187,  377 => 176,  370 => 171,  366 => 169,  360 => 167,  358 => 166,  349 => 159,  345 => 157,  339 => 155,  337 => 154,  329 => 149,  322 => 145,  315 => 141,  308 => 137,  301 => 133,  294 => 129,  283 => 123,  260 => 103,  256 => 102,  224 => 73,  219 => 70,  209 => 62,  199 => 60,  197 => 59,  192 => 56,  190 => 55,  184 => 51,  174 => 47,  167 => 42,  163 => 41,  160 => 40,  150 => 36,  143 => 31,  139 => 30,  136 => 29,  126 => 25,  119 => 20,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Ma voiture{% endblock %}

{% block content %}
    <div class=\"mb-8 animate-fade-in\">
        <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0\">
            <div>
                <h1 class=\"text-3xl font-bold bg-gradient-to-r from-primary to-primary-dark bg-clip-text text-transparent\">
                    Ma voiture
                </h1>
                <p class=\"text-gray-600 mt-2 max-w-2xl\">
                    Gérez les informations de votre véhicule pour proposer des trajets
                </p>
            </div>
        </div>
    </div>
    
    {% for message in app.flashes('success') %}
        <div class=\"mb-6 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg shadow-md animate-slide-up\" role=\"alert\">
            <div class=\"flex items-center\">
                <svg class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\"></path>
                </svg>
                <span class=\"font-medium\">{{ message }}</span>
            </div>
        </div>
    {% endfor %}

    {% for message in app.flashes('error') %}
        <div class=\"mb-6 bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg shadow-md animate-slide-up\" role=\"alert\">
            <div class=\"flex items-center\">
                <svg class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\"></path>
                </svg>
                <span class=\"font-medium\">{{ message }}</span>
            </div>
        </div>
    {% endfor %}

    {% for message in app.flashes('info') %}
        <div class=\"mb-6 bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 rounded-lg shadow-md animate-slide-up\" role=\"alert\">
            <div class=\"flex items-center\">
                <svg class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\"></path>
                </svg>
                <span class=\"font-medium\">{{ message }}</span>
            </div>
        </div>
    {% endfor %}
    
    <div class=\"relative bg-white rounded-2xl shadow-[0_10px_60px_-15px_rgba(0,0,0,0.15)] p-8 md:p-10 animate-slide-up border border-gray-100\">
        <div class=\"absolute inset-0 bg-gradient-to-br from-white to-gray-50 rounded-2xl opacity-80 pointer-events-none\"></div>
        
        {% if voiture is defined and voiture is not null %}
            <div class=\"flex flex-col md:flex-row gap-8 relative z-10\">
                <div class=\"w-full md:w-1/3\">
                    <div class=\"relative group\">
                        {% if voiture.imagePath is defined and voiture.imagePath %}
                            <img src=\"{{ asset(voiture.imagePath) }}\" alt=\"{{ voiture.marque }} {{ voiture.modele }}\" class=\"w-full h-64 object-cover rounded-xl shadow-md transition-all duration-300 group-hover:shadow-lg\">
                        {% else %}
                            <div class=\"w-full h-64 bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl flex items-center justify-center overflow-hidden transition-all duration-300 group-hover:shadow-lg relative\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-24 w-24 text-gray-400 transition-all duration-500 transform group-hover:scale-110\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z\" />
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M19 14l-2-2H7L5 14m14-4.5v9.5a1 1 0 01-1 1H6a1 1 0 01-1-1V9.5m14 0a1.5 1.5 0 00-1.5-1.5H6.5a1.5 1.5 0 00-1.5 1.5m15 0v4.5a1.5 1.5 0 01-1.5 1.5H6.5a1.5 1.5 0 01-1.5-1.5V9.5\" />
                                </svg>
                                <div class=\"absolute inset-0 bg-gradient-to-tr from-primary-ultra-light/0 to-primary-ultra-light/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300\"></div>
                            </div>
                        {% endif %}
                    </div>

                    <div class=\"mt-6\">
                        <a href=\"{{ path('app_conducteur_voiture_edit') }}\" class=\"inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg group\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 group-hover:animate-pulse\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z\" />
                            </svg>
                            Modifier les informations
                        </a>
                        
                        <button type=\"button\" class=\"mt-3 inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium bg-red-600 hover:bg-red-700 text-white rounded-xl shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg group\" 
                                onclick=\"openDeleteModal()\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2 group-hover:animate-pulse\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                            </svg>
                            Supprimer
                        </button>
                    </div>
                    
                    <!-- Delete Confirmation Modal -->
                    <div id=\"deleteModal\" class=\"fixed inset-0 flex items-center justify-center z-50 hidden\">
                        <div class=\"fixed inset-0 bg-black bg-opacity-50\"></div>
                        <div class=\"relative bg-white rounded-lg shadow-xl max-w-md w-full p-6 animate-fade-in\">
                            <div class=\"flex flex-col items-center text-center\">
                                <div class=\"bg-red-100 p-3 rounded-full mb-4\">
                                    <svg class=\"h-10 w-10 text-red-600\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
                                    </svg>
                                </div>
                                <h3 class=\"text-xl font-bold text-gray-900 mb-2\">Confirmer la suppression</h3>
                                <p class=\"text-gray-600 mb-6\">Êtes-vous sûr de vouloir supprimer cette voiture ? Cette action est irréversible.</p>
                                
                                <form action=\"{{ path('app_conducteur_voiture_delete') }}\" method=\"POST\" class=\"w-full flex space-x-4\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-car') }}\">
                                    <button type=\"button\" onclick=\"closeDeleteModal()\" 
                                            class=\"flex-1 py-2 px-4 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2\">
                                        Non, annuler
                                    </button>
                                    <button type=\"submit\" 
                                            class=\"flex-1 py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2\">
                                        Oui, supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"w-full md:w-2/3\">
                    <h2 class=\"text-2xl font-bold mb-6 flex items-center text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-dark\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-7 mr-3 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 10V3L4 14h7v7l9-11h-7z\" />
                        </svg>
                        {{ voiture.marque }} {{ voiture.modele }}
                    </h2>
                    
                    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                        <div class=\"bg-white rounded-xl p-4 border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-primary-ultra-light transform hover:-translate-y-1\">
                            <p class=\"text-sm text-gray-500 mb-1\">Marque</p>
                            <p class=\"font-medium text-gray-800\">{{ voiture.marque }}</p>
                        </div>
                        <div class=\"bg-white rounded-xl p-4 border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-primary-ultra-light transform hover:-translate-y-1\">
                            <p class=\"text-sm text-gray-500 mb-1\">Modèle</p>
                            <p class=\"font-medium text-gray-800\">{{ voiture.modele }}</p>
                        </div>
                        <div class=\"bg-white rounded-xl p-4 border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-primary-ultra-light transform hover:-translate-y-1\">
                            <p class=\"text-sm text-gray-500 mb-1\">Année</p>
                            <p class=\"font-medium text-gray-800\">{{ voiture.dateImatriculation|date('Y') }}</p>
                        </div>
                        <div class=\"bg-white rounded-xl p-4 border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-primary-ultra-light transform hover:-translate-y-1\">
                            <p class=\"text-sm text-gray-500 mb-1\">Couleur</p>
                            <p class=\"font-medium text-gray-800\">{{ voiture.couleur }}</p>
                        </div>
                        <div class=\"bg-white rounded-xl p-4 border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-primary-ultra-light transform hover:-translate-y-1\">
                            <p class=\"text-sm text-gray-500 mb-1\">Immatriculation</p>
                            <p class=\"font-medium text-gray-800\">{{ voiture.plaqueImatriculation }}</p>
                        </div>
                        <div class=\"bg-white rounded-xl p-4 border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-primary-ultra-light transform hover:-translate-y-1\">
                            <p class=\"text-sm text-gray-500 mb-1\">Date d'immatriculation</p>
                            <p class=\"font-medium text-gray-800\">{{ voiture.dateImatriculation|date('d/m/Y') }}</p>
                        </div>
                        <div class=\"bg-white rounded-xl p-4 border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-md hover:border-primary-ultra-light transform hover:-translate-y-1\">
                            <p class=\"text-sm text-gray-500 mb-1\">Catégorie</p>
                            <p class=\"font-medium text-gray-800\">
                                {% if voiture.categorie %}
                                    {{ voiture.categorie.nom }}
                                {% else %}
                                    Non spécifiée
                                {% endif %}
                            </p>
                        </div>
                    </div>
                    
                    <div class=\"mt-8 bg-white rounded-xl p-5 border border-gray-100 shadow-sm\">
                        <h3 class=\"text-lg font-bold mb-4 text-gray-800\">Description du véhicule</h3>
                        <p class=\"text-gray-700\">
                            {% if voiture.description %}
                                {{ voiture.description }}
                            {% else %}
                                Aucune description disponible.
                            {% endif %}
                        </p>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"text-center relative z-10 py-12\">
                <div class=\"inline-block p-6 bg-primary-ultra-light rounded-full mb-6 text-primary\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z\" />
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M19 14l-2-2H7L5 14m14-4.5v9.5a1 1 0 01-1 1H6a1 1 0 01-1-1V9.5m14 0a1.5 1.5 0 00-1.5-1.5H6.5a1.5 1.5 0 00-1.5 1.5m15 0v4.5a1.5 1.5 0 01-1.5 1.5H6.5a1.5 1.5 0 01-1.5-1.5V9.5\" />
                    </svg>
                </div>
                <h3 class=\"text-2xl font-bold text-gray-900 mb-4\">Aucun véhicule enregistré</h3>
                <p class=\"text-gray-600 mb-2 max-w-md mx-auto\">Vous n'avez pas encore ajouté de véhicule à votre profil.</p>
                <p class=\"text-gray-600 mb-8 max-w-md mx-auto\">Pour proposer des trajets ou participer à des événements en tant que conducteur, vous devez enregistrer votre véhicule.</p>
                
                <a href=\"{{ path('app_conducteur_voiture_add') }}\" class=\"inline-flex items-center px-6 py-3 text-base font-medium bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg group\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-3 group-hover:animate-pulse\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                    </svg>
                    Ajouter mon véhicule
                </a>
            </div>
        {% endif %}
    </div>

    <style>
        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slide-up {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        .animate-fade-in {
            animation: fade-in 0.8s ease-out forwards;
        }
        
        .animate-slide-up {
            animation: slide-up 0.6s ease-out 0.2s forwards;
            opacity: 0;
        }
    </style>
    
    <script>
        function openDeleteModal() {
            document.getElementById('deleteModal').classList.remove('hidden');
            document.body.classList.add('overflow-hidden'); // Prevent scrolling when modal is open
        }
        
        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.add('hidden');
            document.body.classList.remove('overflow-hidden'); // Re-enable scrolling
        }
        
        // Close the modal if user clicks outside of it
        document.addEventListener('click', function(event) {
            const modal = document.getElementById('deleteModal');
            const modalContent = modal.querySelector('.relative');
            
            if (modal && !modal.classList.contains('hidden') && !modalContent.contains(event.target) && !event.target.closest('button[onclick=\"openDeleteModal()\"]')) {
                closeDeleteModal();
            }
        });
        
        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && !document.getElementById('deleteModal').classList.contains('hidden')) {
                closeDeleteModal();
            }
        });
    </script>
{% endblock %} ", "conducteur/voiture.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\voiture.html.twig");
    }
}
