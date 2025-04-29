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

/* user/edit_roles.html.twig */
class __TwigTemplate_ed7d5ff028f6b9dab6e7c1fe4548ed27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit_roles.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit_roles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/edit_roles.html.twig", 1);
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

        yield "Modifier les Rôles";
        
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
        yield "    <div class=\"container mx-auto px-4 py-8 max-w-4xl\">
        <!-- Header with animation -->
        <div class=\"mb-10 animate-fade-in-down\">
            <h1 class=\"text-4xl font-extrabold text-gray-800 mb-2 bg-gradient-to-r from-primary to-blue-600 bg-clip-text text-transparent\">Modifier les Rôles</h1>
            <p class=\"text-gray-600 text-lg\">Gérer les permissions de <span class=\"font-semibold\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "prenom", [], "any", false, false, false, 10), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), "html", null, true);
        yield "</span></p>
            <div class=\"h-1 w-32 bg-gradient-to-r from-primary to-blue-600 rounded mt-4\"></div>
        </div>
        
        <!-- Alert messages with improved animations -->
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["error"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 16
            yield "            <div class=\"mb-6 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-r-xl shadow-md animate-fade-in transform transition-all duration-300 hover:scale-[1.01]\">
                <div class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-3 text-red-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z\" />
                    </svg>
                    <span class=\"font-medium\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashError"], "html", null, true);
            yield "</span>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashError'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "        
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", ["success"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["flashSuccess"]) {
            // line 27
            yield "            <div class=\"mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded-r-xl shadow-md animate-fade-in transform transition-all duration-300 hover:scale-[1.01]\">
                <div class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-3 text-green-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <span class=\"font-medium\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashSuccess"], "html", null, true);
            yield "</span>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashSuccess'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "        
        <!-- User profile card with enhanced design -->
        <div class=\"max-w-2xl mx-auto animate-fade-in-up\">
            <div class=\"bg-white rounded-xl shadow-lg p-8 transition-all duration-300 hover:shadow-xl border border-gray-100\">
                <div class=\"flex items-center mb-6\">
                    <div class=\"h-20 w-20 flex-shrink-0 rounded-full overflow-hidden shadow-md border-2 border-white transform transition-transform duration-500 hover:scale-110\">
                        ";
        // line 42
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "imagePath", [], "any", false, false, false, 42)) {
            // line 43
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "imagePath", [], "any", false, false, false, 43)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "username", [], "any", false, false, false, 43), "html", null, true);
            yield "\" class=\"h-full w-full object-cover\">
                        ";
        } else {
            // line 45
            yield "                            <div class=\"h-full w-full flex items-center justify-center bg-gradient-to-r from-primary to-blue-600 text-white text-2xl uppercase font-bold\">
                                ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "prenom", [], "any", false, false, false, 46)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "nom", [], "any", false, false, false, 46)), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 49
        yield "                    </div>
                    <div class=\"ml-6\">
                        <h2 class=\"text-2xl font-bold text-gray-800 mb-1 group\">
                            ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "prenom", [], "any", false, false, false, 52), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "nom", [], "any", false, false, false, 52), "html", null, true);
        yield "
                            <span class=\"inline-block transition-all duration-300 group-hover:translate-x-1\">→</span>
                        </h2>
                        <div class=\"text-md text-gray-500 flex items-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\" />
                            </svg>
                            ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "email", [], "any", false, false, false, 59), "html", null, true);
        yield "
                        </div>
                        ";
        // line 61
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "roleCode", [], "any", false, false, false, 61)) {
            // line 62
            yield "                            <div class=\"mt-2\">
                                ";
            // line 63
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "roleCode", [], "any", false, false, false, 63) == "ADMIN")) {
                // line 64
                yield "                                    <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-red-500 to-pink-500 text-white shadow-sm\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z\" />
                                        </svg>
                                        Admin
                                    </span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 70
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "roleCode", [], "any", false, false, false, 70) == "CONDUCTEUR")) {
                // line 71
                yield "                                    <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-sm\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                                        </svg>
                                        Conducteur
                                    </span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 77
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "roleCode", [], "any", false, false, false, 77) == "PASSAGER")) {
                // line 78
                yield "                                    <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-green-500 to-teal-500 text-white shadow-sm\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                                        </svg>
                                        Passager
                                    </span>
                                ";
            }
            // line 85
            yield "                            </div>
                        ";
        }
        // line 87
        yield "                    </div>
                </div>
                
                <form method=\"post\" class=\"mt-8\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("edit-roles" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91))), "html", null, true);
        yield "\">
                    
                    <div class=\"space-y-6 mb-8\">
                        <p class=\"text-lg font-bold text-gray-800 mb-4\">Sélectionner un rôle:</p>
                        
                        <div class=\"grid gap-4\">
                            <label class=\"relative block p-4 border border-gray-200 rounded-xl cursor-pointer hover:border-primary transition-colors duration-300 ";
        // line 97
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "roleCode", [], "any", false, false, false, 97) == "PASSAGER")) {
            yield "ring-2 ring-primary bg-primary/5";
        }
        yield "\">
                                <input type=\"radio\" id=\"role_passager\" name=\"role_code\" value=\"PASSAGER\" 
                                    ";
        // line 99
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "roleCode", [], "any", false, false, false, 99) == "PASSAGER")) {
            yield "checked";
        }
        yield " 
                                    class=\"sr-only peer\">
                                <div class=\"flex items-center\">
                                    <div class=\"w-12 h-12 rounded-full bg-gradient-to-r from-green-400 to-teal-500 flex items-center justify-center text-white shadow-md mr-4\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z\" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class=\"font-semibold text-lg text-gray-700\">Passager</h3>
                                        <p class=\"text-sm text-gray-500\">Autoriser l'utilisateur à réserver des trajets</p>
                                    </div>
                                </div>
                                <div class=\"absolute top-4 right-4 h-6 w-6 text-primary opacity-0 peer-checked:opacity-100 transition-opacity duration-300\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                    </svg>
                                </div>
                            </label>
                            
                            <label class=\"relative block p-4 border border-gray-200 rounded-xl cursor-pointer hover:border-primary transition-colors duration-300 ";
        // line 119
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 119, $this->source); })()), "roleCode", [], "any", false, false, false, 119) == "CONDUCTEUR")) {
            yield "ring-2 ring-primary bg-primary/5";
        }
        yield "\">
                                <input type=\"radio\" id=\"role_conducteur\" name=\"role_code\" value=\"CONDUCTEUR\" 
                                    ";
        // line 121
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 121, $this->source); })()), "roleCode", [], "any", false, false, false, 121) == "CONDUCTEUR")) {
            yield "checked";
        }
        yield " 
                                    class=\"sr-only peer\">
                                <div class=\"flex items-center\">
                                    <div class=\"w-12 h-12 rounded-full bg-gradient-to-r from-blue-400 to-indigo-500 flex items-center justify-center text-white shadow-md mr-4\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4\" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class=\"font-semibold text-lg text-gray-700\">Conducteur</h3>
                                        <p class=\"text-sm text-gray-500\">Autoriser l'utilisateur à créer et gérer des trajets</p>
                                    </div>
                                </div>
                                <div class=\"absolute top-4 right-4 h-6 w-6 text-primary opacity-0 peer-checked:opacity-100 transition-opacity duration-300\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                    </svg>
                                </div>
                            </label>
                            
                            <label class=\"relative block p-4 border border-gray-200 rounded-xl cursor-pointer hover:border-primary transition-colors duration-300 ";
        // line 141
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 141, $this->source); })()), "roleCode", [], "any", false, false, false, 141) == "ADMIN")) {
            yield "ring-2 ring-primary bg-primary/5";
        }
        yield "\">
                                <input type=\"radio\" id=\"role_admin\" name=\"role_code\" value=\"ADMIN\" 
                                    ";
        // line 143
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 143, $this->source); })()), "roleCode", [], "any", false, false, false, 143) == "ADMIN")) {
            yield "checked";
        }
        yield " 
                                    class=\"sr-only peer\">
                                <div class=\"flex items-center\">
                                    <div class=\"w-12 h-12 rounded-full bg-gradient-to-r from-red-400 to-pink-500 flex items-center justify-center text-white shadow-md mr-4\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z\" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class=\"font-semibold text-lg text-gray-700\">Administrateur</h3>
                                        <p class=\"text-sm text-gray-500\">Donner un accès complet au panneau d'administration</p>
                                    </div>
                                </div>
                                <div class=\"absolute top-4 right-4 h-6 w-6 text-primary opacity-0 peer-checked:opacity-100 transition-opacity duration-300\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                    </svg>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class=\"flex justify-between mt-10 pt-6 border-t border-gray-100\">
                        <a href=\"";
        // line 166
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"px-6 py-3 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors duration-300 transform hover:scale-105 flex items-center shadow-sm\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                            </svg>
                            Annuler
                        </a>
                        <button type=\"submit\" class=\"px-6 py-3 bg-gradient-to-r from-primary to-blue-600 text-white rounded-lg hover:opacity-90 transition-all duration-300 transform hover:scale-105 flex items-center shadow-md\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                            </svg>
                            Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 185
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

        // line 186
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
        return "user/edit_roles.html.twig";
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
        return array (  408 => 186,  395 => 185,  366 => 166,  338 => 143,  331 => 141,  306 => 121,  299 => 119,  274 => 99,  267 => 97,  258 => 91,  252 => 87,  248 => 85,  239 => 78,  237 => 77,  229 => 71,  227 => 70,  219 => 64,  217 => 63,  214 => 62,  212 => 61,  207 => 59,  195 => 52,  190 => 49,  183 => 46,  180 => 45,  172 => 43,  170 => 42,  162 => 36,  152 => 32,  145 => 27,  141 => 26,  138 => 25,  128 => 21,  121 => 16,  117 => 15,  107 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier les Rôles{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8 max-w-4xl\">
        <!-- Header with animation -->
        <div class=\"mb-10 animate-fade-in-down\">
            <h1 class=\"text-4xl font-extrabold text-gray-800 mb-2 bg-gradient-to-r from-primary to-blue-600 bg-clip-text text-transparent\">Modifier les Rôles</h1>
            <p class=\"text-gray-600 text-lg\">Gérer les permissions de <span class=\"font-semibold\">{{ user.prenom }} {{ user.nom }}</span></p>
            <div class=\"h-1 w-32 bg-gradient-to-r from-primary to-blue-600 rounded mt-4\"></div>
        </div>
        
        <!-- Alert messages with improved animations -->
        {% for flashError in app.flashes('error') %}
            <div class=\"mb-6 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-r-xl shadow-md animate-fade-in transform transition-all duration-300 hover:scale-[1.01]\">
                <div class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-3 text-red-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z\" />
                    </svg>
                    <span class=\"font-medium\">{{ flashError }}</span>
                </div>
            </div>
        {% endfor %}
        
        {% for flashSuccess in app.flashes('success') %}
            <div class=\"mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded-r-xl shadow-md animate-fade-in transform transition-all duration-300 hover:scale-[1.01]\">
                <div class=\"flex items-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-3 text-green-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <span class=\"font-medium\">{{ flashSuccess }}</span>
                </div>
            </div>
        {% endfor %}
        
        <!-- User profile card with enhanced design -->
        <div class=\"max-w-2xl mx-auto animate-fade-in-up\">
            <div class=\"bg-white rounded-xl shadow-lg p-8 transition-all duration-300 hover:shadow-xl border border-gray-100\">
                <div class=\"flex items-center mb-6\">
                    <div class=\"h-20 w-20 flex-shrink-0 rounded-full overflow-hidden shadow-md border-2 border-white transform transition-transform duration-500 hover:scale-110\">
                        {% if user.imagePath %}
                            <img src=\"{{ asset(user.imagePath) }}\" alt=\"{{ user.username }}\" class=\"h-full w-full object-cover\">
                        {% else %}
                            <div class=\"h-full w-full flex items-center justify-center bg-gradient-to-r from-primary to-blue-600 text-white text-2xl uppercase font-bold\">
                                {{ user.prenom|first }}{{ user.nom|first }}
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"ml-6\">
                        <h2 class=\"text-2xl font-bold text-gray-800 mb-1 group\">
                            {{ user.prenom }} {{ user.nom }}
                            <span class=\"inline-block transition-all duration-300 group-hover:translate-x-1\">→</span>
                        </h2>
                        <div class=\"text-md text-gray-500 flex items-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\" />
                            </svg>
                            {{ user.email }}
                        </div>
                        {% if user.roleCode %}
                            <div class=\"mt-2\">
                                {% if user.roleCode == 'ADMIN' %}
                                    <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-red-500 to-pink-500 text-white shadow-sm\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z\" />
                                        </svg>
                                        Admin
                                    </span>
                                {% elseif user.roleCode == 'CONDUCTEUR' %}
                                    <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-sm\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2\" />
                                        </svg>
                                        Conducteur
                                    </span>
                                {% elseif user.roleCode == 'PASSAGER' %}
                                    <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-green-500 to-teal-500 text-white shadow-sm\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                                        </svg>
                                        Passager
                                    </span>
                                {% endif %}
                            </div>
                        {% endif %}
                    </div>
                </div>
                
                <form method=\"post\" class=\"mt-8\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('edit-roles' ~ user.id) }}\">
                    
                    <div class=\"space-y-6 mb-8\">
                        <p class=\"text-lg font-bold text-gray-800 mb-4\">Sélectionner un rôle:</p>
                        
                        <div class=\"grid gap-4\">
                            <label class=\"relative block p-4 border border-gray-200 rounded-xl cursor-pointer hover:border-primary transition-colors duration-300 {% if user.roleCode == 'PASSAGER' %}ring-2 ring-primary bg-primary/5{% endif %}\">
                                <input type=\"radio\" id=\"role_passager\" name=\"role_code\" value=\"PASSAGER\" 
                                    {% if user.roleCode == 'PASSAGER' %}checked{% endif %} 
                                    class=\"sr-only peer\">
                                <div class=\"flex items-center\">
                                    <div class=\"w-12 h-12 rounded-full bg-gradient-to-r from-green-400 to-teal-500 flex items-center justify-center text-white shadow-md mr-4\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z\" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class=\"font-semibold text-lg text-gray-700\">Passager</h3>
                                        <p class=\"text-sm text-gray-500\">Autoriser l'utilisateur à réserver des trajets</p>
                                    </div>
                                </div>
                                <div class=\"absolute top-4 right-4 h-6 w-6 text-primary opacity-0 peer-checked:opacity-100 transition-opacity duration-300\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                    </svg>
                                </div>
                            </label>
                            
                            <label class=\"relative block p-4 border border-gray-200 rounded-xl cursor-pointer hover:border-primary transition-colors duration-300 {% if user.roleCode == 'CONDUCTEUR' %}ring-2 ring-primary bg-primary/5{% endif %}\">
                                <input type=\"radio\" id=\"role_conducteur\" name=\"role_code\" value=\"CONDUCTEUR\" 
                                    {% if user.roleCode == 'CONDUCTEUR' %}checked{% endif %} 
                                    class=\"sr-only peer\">
                                <div class=\"flex items-center\">
                                    <div class=\"w-12 h-12 rounded-full bg-gradient-to-r from-blue-400 to-indigo-500 flex items-center justify-center text-white shadow-md mr-4\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4\" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class=\"font-semibold text-lg text-gray-700\">Conducteur</h3>
                                        <p class=\"text-sm text-gray-500\">Autoriser l'utilisateur à créer et gérer des trajets</p>
                                    </div>
                                </div>
                                <div class=\"absolute top-4 right-4 h-6 w-6 text-primary opacity-0 peer-checked:opacity-100 transition-opacity duration-300\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                    </svg>
                                </div>
                            </label>
                            
                            <label class=\"relative block p-4 border border-gray-200 rounded-xl cursor-pointer hover:border-primary transition-colors duration-300 {% if user.roleCode == 'ADMIN' %}ring-2 ring-primary bg-primary/5{% endif %}\">
                                <input type=\"radio\" id=\"role_admin\" name=\"role_code\" value=\"ADMIN\" 
                                    {% if user.roleCode == 'ADMIN' %}checked{% endif %} 
                                    class=\"sr-only peer\">
                                <div class=\"flex items-center\">
                                    <div class=\"w-12 h-12 rounded-full bg-gradient-to-r from-red-400 to-pink-500 flex items-center justify-center text-white shadow-md mr-4\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z\" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class=\"font-semibold text-lg text-gray-700\">Administrateur</h3>
                                        <p class=\"text-sm text-gray-500\">Donner un accès complet au panneau d'administration</p>
                                    </div>
                                </div>
                                <div class=\"absolute top-4 right-4 h-6 w-6 text-primary opacity-0 peer-checked:opacity-100 transition-opacity duration-300\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                    </svg>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class=\"flex justify-between mt-10 pt-6 border-t border-gray-100\">
                        <a href=\"{{ path('app_admin_users') }}\" class=\"px-6 py-3 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors duration-300 transform hover:scale-105 flex items-center shadow-sm\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                            </svg>
                            Annuler
                        </a>
                        <button type=\"submit\" class=\"px-6 py-3 bg-gradient-to-r from-primary to-blue-600 text-white rounded-lg hover:opacity-90 transition-all duration-300 transform hover:scale-105 flex items-center shadow-md\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\" />
                            </svg>
                            Enregistrer
                        </button>
                    </div>
                </form>
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
</style>
{% endblock %} ", "user/edit_roles.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\user\\edit_roles.html.twig");
    }
}
