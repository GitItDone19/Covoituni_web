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

/* conducteur/dashboard.html.twig */
class __TwigTemplate_027eeae89fc83e2925a59f65963bfd80 extends Template
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
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/dashboard.html.twig", 1);
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

        yield "Tableau de bord conducteur";
        
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
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "    <div class=\"max-w-screen-2xl w-full mx-auto px-4 py-8\">
        <div class=\"w-full\">
            <!-- Header Section -->
            <div class=\"bg-gradient-to-r from-primary/5 to-primary-light/10 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-6 mb-8\">
                <div class=\"flex flex-col lg:flex-row justify-between items-start lg:items-center gap-6\">
                    <div>
                        <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">
                            <span class=\"bg-clip-text text-transparent bg-gradient-to-r from-primary to-primary-dark\">
                                Bienvenue, ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "prenom", [], "any", false, false, false, 19), "html", null, true);
        yield "
                            </span>
                        </h1>
                        <p class=\"text-gray-600\">Voici un aperçu de votre activité en tant que conducteur</p>
                    </div>
                    <div class=\"flex gap-3\">
                        <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_annonce");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 text-sm font-medium\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                            </svg>
                            Ajouter une annonce
                        </a>
                        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_voiture");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-white text-gray-700 border border-gray-200 rounded-lg shadow-sm hover:bg-gray-50 transition-all duration-300 text-sm font-medium\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z\" />
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 14l-2-2H7L5 14m14-4.5v9.5a1 1 0 01-1 1H6a1 1 0 01-1-1V9.5m14 0a1.5 1.5 0 00-1.5-1.5H6.5a1.5 1.5 0 00-1.5 1.5m15 0v4.5a1.5 1.5 0 01-1.5 1.5H6.5a1.5 1.5 0 01-1.5-1.5V9.5\" />
                            </svg>
                            Gérer ma voiture
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Stats Cards -->
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8\">
                <div class=\"bg-white rounded-xl p-6 shadow-md border border-gray-100 transition-all duration-300 hover:shadow-lg\">
                    <div class=\"flex items-center justify-between\">
                        <div>
                            <p class=\"text-sm font-medium text-gray-500 mb-1\">Trajets réalisés</p>
                            <h3 class=\"text-2xl font-bold text-gray-800\">";
        // line 48
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "tripsCount", [], "any", true, true, false, 48) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "tripsCount", [], "any", false, false, false, 48)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "tripsCount", [], "any", false, false, false, 48), "html", null, true)) : ("0"));
        yield "</h3>
                            <p class=\"text-xs text-green-500 mt-1 flex items-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 10l7-7m0 0l7 7m-7-7v18\" />
                                </svg>
                                +";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 3), "html", null, true);
        yield " ce mois
                            </p>
                        </div>
                        <div class=\"w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class=\"bg-white rounded-xl p-6 shadow-md border border-gray-100 transition-all duration-300 hover:shadow-lg\">
                    <div class=\"flex items-center justify-between\">
                        <div>
                            <p class=\"text-sm font-medium text-gray-500 mb-1\">Note moyenne</p>
                            <h3 class=\"text-2xl font-bold text-gray-800\">";
        // line 68
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "rating", [], "any", true, true, false, 68) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "rating", [], "any", false, false, false, 68)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "rating", [], "any", false, false, false, 68), "html", null, true)) : ("0"));
        yield "<span class=\"text-sm text-yellow-500\">/5</span></h3>
                            <div class=\"flex items-center mt-1\">
                                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 71
            yield "                                    ";
            if (($context["i"] <= (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "rating", [], "any", true, true, false, 71) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "rating", [], "any", false, false, false, 71)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "rating", [], "any", false, false, false, 71)) : (0)))) {
                // line 72
                yield "                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 text-yellow-500\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                            <path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\" />
                                        </svg>
                                    ";
            } else {
                // line 76
                yield "                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 text-gray-300\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                            <path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\" />
                                        </svg>
                                    ";
            }
            // line 80
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                            </div>
                        </div>
                        <div class=\"w-12 h-12 rounded-full bg-yellow-50 flex items-center justify-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-yellow-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class=\"bg-white rounded-xl p-6 shadow-md border border-gray-100 transition-all duration-300 hover:shadow-lg\">
                    <div class=\"flex items-center justify-between\">
                        <div>
                            <p class=\"text-sm font-medium text-gray-500 mb-1\">Revenus totaux</p>
                            <h3 class=\"text-2xl font-bold text-gray-800\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((Twig\Extension\CoreExtension::random($this->env->getCharset(), 200) + 50), 2), "html", null, true);
        yield "€</h3>
                            <p class=\"text-xs text-green-500 mt-1 flex items-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 10l7-7m0 0l7 7m-7-7v18\" />
                                </svg>
                                +";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 30) + 5), "html", null, true);
        yield "€ ce mois
                            </p>
                        </div>
                        <div class=\"w-12 h-12 rounded-full bg-green-50 flex items-center justify-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-green-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class=\"bg-white rounded-xl p-6 shadow-md border border-gray-100 transition-all duration-300 hover:shadow-lg\">
                    <div class=\"flex items-center justify-between\">
                        <div>
                            <p class=\"text-sm font-medium text-gray-500 mb-1\">Passagers transportés</p>
                            <h3 class=\"text-2xl font-bold text-gray-800\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 20) + 5), "html", null, true);
        yield "</h3>
                            <p class=\"text-xs text-green-500 mt-1 flex items-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 10l7-7m0 0l7 7m-7-7v18\" />
                                </svg>
                                +";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 3) + 1), "html", null, true);
        yield " cette semaine
                            </p>
                        </div>
                        <div class=\"w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-blue-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Charts Section -->
            <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8\">
                <!-- Trips Performance Chart -->
                <div class=\"bg-white rounded-xl shadow-md border border-gray-100 p-6\">
                    <div class=\"flex justify-between items-center mb-6\">
                        <h3 class=\"text-lg font-semibold text-gray-800\">Performance des trajets</h3>
                        <div class=\"flex space-x-2\">
                            <button class=\"px-3 py-1 text-xs bg-primary/10 text-primary rounded-md\">Mois</button>
                            <button class=\"px-3 py-1 text-xs bg-gray-100 text-gray-500 rounded-md\">Année</button>
                        </div>
                    </div>
                    <div id=\"tripsChart\" class=\"h-72\"></div>
                </div>
                
                <!-- Revenue Chart -->
                <div class=\"bg-white rounded-xl shadow-md border border-gray-100 p-6\">
                    <div class=\"flex justify-between items-center mb-6\">
                        <h3 class=\"text-lg font-semibold text-gray-800\">Revenus</h3>
                        <div class=\"flex space-x-2\">
                            <button class=\"px-3 py-1 text-xs bg-primary/10 text-primary rounded-md\">Mois</button>
                            <button class=\"px-3 py-1 text-xs bg-gray-100 text-gray-500 rounded-md\">Année</button>
                        </div>
                    </div>
                    <div id=\"revenueChart\" class=\"h-72\"></div>
                </div>
            </div>
            
            <!-- Upcoming Trips Section -->
            <div class=\"bg-white rounded-xl shadow-md border border-gray-100 p-6 mb-8\">
                <div class=\"flex justify-between items-center mb-6\">
                    <h3 class=\"text-lg font-semibold text-gray-800\">Trajets à venir</h3>
                    <a href=\"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_annonce");
        yield "\" class=\"text-sm text-primary hover:underline\">Voir tout</a>
                </div>
                
                ";
        // line 166
        $context["hasUpcomingTrips"] = Twig\Extension\CoreExtension::random($this->env->getCharset(), 1);
        // line 167
        yield "                
                ";
        // line 168
        if ((isset($context["hasUpcomingTrips"]) || array_key_exists("hasUpcomingTrips", $context) ? $context["hasUpcomingTrips"] : (function () { throw new RuntimeError('Variable "hasUpcomingTrips" does not exist.', 168, $this->source); })())) {
            // line 169
            yield "                    <div class=\"overflow-x-auto\">
                        <table class=\"min-w-full\">
                            <thead>
                                <tr>
                                    <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Date</th>
                                    <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Départ</th>
                                    <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Arrivée</th>
                                    <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Prix</th>
                                    <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Places</th>
                                    <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Statut</th>
                                </tr>
                            </thead>
                            <tbody class=\"divide-y divide-gray-200\">
                                ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 183
                yield "                                    <tr class=\"hover:bg-gray-50\">
                                        <td class=\"px-4 py-4 whitespace-nowrap text-sm text-gray-700\">";
                // line 184
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate("now", (("+" . (Twig\Extension\CoreExtension::random($this->env->getCharset(), 6) + 1)) . " days")), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                                        <td class=\"px-4 py-4 whitespace-nowrap text-sm text-gray-700\">
                                            <div class=\"flex items-center\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                                </svg>
                                                ";
                // line 191
                $context["cities"] = ["Paris", "Lyon", "Marseille", "Bordeaux", "Lille", "Nantes", "Rennes", "Strasbourg", "Montpellier", "Toulouse"];
                // line 192
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cities"]) || array_key_exists("cities", $context) ? $context["cities"] : (function () { throw new RuntimeError('Variable "cities" does not exist.', 192, $this->source); })()), Twig\Extension\CoreExtension::random($this->env->getCharset(), 9), [], "array", false, false, false, 192), "html", null, true);
                yield "
                                            </div>
                                        </td>
                                        <td class=\"px-4 py-4 whitespace-nowrap text-sm text-gray-700\">
                                            <div class=\"flex items-center\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-primary mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                                </svg>
                                                ";
                // line 201
                $context["cities"] = ["Paris", "Lyon", "Marseille", "Bordeaux", "Lille", "Nantes", "Rennes", "Strasbourg", "Montpellier", "Toulouse"];
                // line 202
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cities"]) || array_key_exists("cities", $context) ? $context["cities"] : (function () { throw new RuntimeError('Variable "cities" does not exist.', 202, $this->source); })()), Twig\Extension\CoreExtension::random($this->env->getCharset(), 9), [], "array", false, false, false, 202), "html", null, true);
                yield "
                                            </div>
                                        </td>
                                        <td class=\"px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-700\">";
                // line 205
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((Twig\Extension\CoreExtension::random($this->env->getCharset(), 30) + 5), 2), "html", null, true);
                yield "€</td>
                                        <td class=\"px-4 py-4 whitespace-nowrap text-sm text-gray-700\">
                                            ";
                // line 207
                $context["reservedSeats"] = Twig\Extension\CoreExtension::random($this->env->getCharset(), 3);
                // line 208
                yield "                                            ";
                $context["totalSeats"] = (((isset($context["reservedSeats"]) || array_key_exists("reservedSeats", $context) ? $context["reservedSeats"] : (function () { throw new RuntimeError('Variable "reservedSeats" does not exist.', 208, $this->source); })()) + Twig\Extension\CoreExtension::random($this->env->getCharset(), 2)) + 1);
                // line 209
                yield "                                            <span class=\"font-medium\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservedSeats"]) || array_key_exists("reservedSeats", $context) ? $context["reservedSeats"] : (function () { throw new RuntimeError('Variable "reservedSeats" does not exist.', 209, $this->source); })()), "html", null, true);
                yield "</span>/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSeats"]) || array_key_exists("totalSeats", $context) ? $context["totalSeats"] : (function () { throw new RuntimeError('Variable "totalSeats" does not exist.', 209, $this->source); })()), "html", null, true);
                yield "
                                        </td>
                                        <td class=\"px-4 py-4 whitespace-nowrap\">
                                            <span class=\"px-2 py-1 text-xs rounded-full ";
                // line 212
                yield ((Twig\Extension\CoreExtension::random($this->env->getCharset(), 1)) ? ("bg-green-100 text-green-800") : ("bg-yellow-100 text-yellow-800"));
                yield "\">
                                                ";
                // line 213
                yield ((Twig\Extension\CoreExtension::random($this->env->getCharset(), 1)) ? ("Confirmé") : ("En attente"));
                yield "
                                            </span>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            yield "                            </tbody>
                        </table>
                    </div>
                ";
        } else {
            // line 222
            yield "                    <div class=\"bg-gray-50 rounded-lg p-8 text-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 text-gray-400 mx-auto mb-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4\" />
                        </svg>
                        <p class=\"text-gray-500 mb-4\">Vous n'avez aucun trajet à venir.</p>
                        <a href=\"";
            // line 227
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_annonce");
            yield "\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 text-sm font-medium\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                            </svg>
                            Créer une annonce
                        </a>
                    </div>
                ";
        }
        // line 235
        yield "            </div>
            
            <!-- Bottom Row: Vehicle Summary and Event Management -->
            <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8\">
                <!-- Vehicle Summary -->
                <div class=\"bg-white rounded-xl shadow-md border border-gray-100 p-6\">
                    <div class=\"flex justify-between items-center mb-6\">
                        <h3 class=\"text-lg font-semibold text-gray-800\">Mon véhicule</h3>
                        <a href=\"";
        // line 243
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_voiture");
        yield "\" class=\"text-sm text-primary hover:underline\">Gérer</a>
                    </div>
                    
                    ";
        // line 246
        if ((array_key_exists("voiture", $context) && (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 246, $this->source); })()))) {
            // line 247
            yield "                        <div class=\"flex items-start space-x-4\">
                            <div class=\"w-1/3 aspect-video bg-gray-100 rounded-lg flex items-center justify-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z\" />
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 14l-2-2H7L5 14m14-4.5v9.5a1 1 0 01-1 1H6a1 1 0 01-1-1V9.5m14 0a1.5 1.5 0 00-1.5-1.5H6.5a1.5 1.5 0 00-1.5 1.5m15 0v4.5a1.5 1.5 0 01-1.5 1.5H6.5a1.5 1.5 0 01-1.5-1.5V9.5\" />
                                </svg>
                            </div>
                            <div class=\"w-2/3\">
                                <h4 class=\"text-xl font-semibold text-gray-800\">";
            // line 255
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["voiture"] ?? null), "marque", [], "any", true, true, false, 255) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 255, $this->source); })()), "marque", [], "any", false, false, false, 255)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 255, $this->source); })()), "marque", [], "any", false, false, false, 255), "html", null, true)) : ("Marque"));
            yield " ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["voiture"] ?? null), "modele", [], "any", true, true, false, 255) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 255, $this->source); })()), "modele", [], "any", false, false, false, 255)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 255, $this->source); })()), "modele", [], "any", false, false, false, 255), "html", null, true)) : ("Modèle"));
            yield "</h4>
                                <div class=\"mt-2 space-y-1\">
                                    <p class=\"text-sm text-gray-600\">
                                        <span class=\"font-medium\">Couleur:</span> ";
            // line 258
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["voiture"] ?? null), "couleur", [], "any", true, true, false, 258) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 258, $this->source); })()), "couleur", [], "any", false, false, false, 258)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 258, $this->source); })()), "couleur", [], "any", false, false, false, 258), "html", null, true)) : ("Non spécifiée"));
            yield "
                                    </p>
                                    <p class=\"text-sm text-gray-600\">
                                        <span class=\"font-medium\">Immatriculation:</span> ";
            // line 261
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["voiture"] ?? null), "plaqueImatriculation", [], "any", true, true, false, 261) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 261, $this->source); })()), "plaqueImatriculation", [], "any", false, false, false, 261)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 261, $this->source); })()), "plaqueImatriculation", [], "any", false, false, false, 261), "html", null, true)) : ("Non spécifiée"));
            yield "
                                    </p>
                                    ";
            // line 263
            if ((array_key_exists("voiture", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 263, $this->source); })()), "categorie", [], "any", false, false, false, 263))) {
                // line 264
                yield "                                        <p class=\"text-sm text-gray-600\">
                                            <span class=\"font-medium\">Catégorie:</span> ";
                // line 265
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 265, $this->source); })()), "categorie", [], "any", false, false, false, 265), "nom", [], "any", false, false, false, 265), "html", null, true);
                yield "
                                        </p>
                                    ";
            }
            // line 268
            yield "                                </div>
                                <div class=\"mt-4\">
                                    <a href=\"";
            // line 270
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_voiture_edit");
            yield "\" class=\"inline-flex items-center px-3 py-1.5 bg-white text-primary border border-primary/30 rounded-lg text-xs font-medium hover:bg-primary/5\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3.5 w-3.5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z\" />
                                        </svg>
                                        Modifier
                                    </a>
                                </div>
                            </div>
                        </div>
                    ";
        } else {
            // line 280
            yield "                        <div class=\"bg-gray-50 rounded-lg p-6 text-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-10 w-10 text-gray-400 mx-auto mb-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z\" />
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 14l-2-2H7L5 14m14-4.5v9.5a1 1 0 01-1 1H6a1 1 0 01-1-1V9.5m14 0a1.5 1.5 0 00-1.5-1.5H6.5a1.5 1.5 0 00-1.5 1.5m15 0v4.5a1.5 1.5 0 01-1.5 1.5H6.5a1.5 1.5 0 01-1.5-1.5V9.5\" />
                            </svg>
                            <p class=\"text-gray-500 mb-3\">Vous n'avez pas encore enregistré de véhicule</p>
                            <a href=\"";
            // line 286
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_voiture_add");
            yield "\" class=\"inline-flex items-center px-3 py-1.5 bg-primary text-white rounded-lg text-xs font-medium hover:bg-primary-dark\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3.5 w-3.5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                                </svg>
                                Ajouter un véhicule
                            </a>
                        </div>
                    ";
        }
        // line 294
        yield "                </div>
                
                <!-- Event Management -->
                <div class=\"bg-white rounded-xl shadow-md border border-gray-100 p-6\">
                    <div class=\"flex justify-between items-center mb-6\">
                        <h3 class=\"text-lg font-semibold text-gray-800\">Gestion des événements</h3>
                        <div class=\"flex space-x-2\">
                            <a href=\"";
        // line 301
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_participations_evenements");
        yield "\" class=\"text-sm text-primary hover:underline\">Tous les événements</a>
                        </div>
                    </div>
                    
                    <div class=\"space-y-4\">
                        <div class=\"flex flex-col lg:flex-row lg:items-center gap-4 p-4 border border-gray-100 rounded-lg hover:bg-gray-50\">
                            <div class=\"flex-shrink-0 w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-purple-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                </svg>
                            </div>
                            <div class=\"flex-grow\">
                                <h4 class=\"font-medium text-gray-800\">Forum des associations étudiantes</h4>
                                <p class=\"text-sm text-gray-600\">";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate("now", (("+" . (Twig\Extension\CoreExtension::random($this->env->getCharset(), 9) + 1)) . " days")), "d/m/Y"), "html", null, true);
        yield " - Campus universitaire</p>
                            </div>
                            <div class=\"flex-shrink-0\">
                                <span class=\"inline-flex px-2 py-1 text-xs rounded-full bg-green-100 text-green-800\">Inscrit</span>
                            </div>
                        </div>
                        
                        <div class=\"flex flex-col lg:flex-row lg:items-center gap-4 p-4 border border-gray-100 rounded-lg hover:bg-gray-50\">
                            <div class=\"flex-shrink-0 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-blue-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                </svg>
                            </div>
                            <div class=\"flex-grow\">
                                <h4 class=\"font-medium text-gray-800\">Soirée covoiturage solidaire</h4>
                                <p class=\"text-sm text-gray-600\">";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate("now", (("+" . (Twig\Extension\CoreExtension::random($this->env->getCharset(), 20) + 10)) . " days")), "d/m/Y"), "html", null, true);
        yield " - Salle des fêtes</p>
                            </div>
                            <div class=\"flex-shrink-0\">
                                <a href=\"";
        // line 332
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_participations_evenements");
        yield "\" class=\"inline-flex px-3 py-1.5 bg-primary text-white rounded-lg text-xs font-medium hover:bg-primary-dark\">
                                    S'inscrire
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mt-6\">
                        <a href=\"";
        // line 340
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_participations_parraines");
        yield "\" class=\"inline-flex items-center px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                            </svg>
                            Participations parrainées
                        </a>
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

    // line 353
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

        // line 354
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Trips Chart
            var tripsOptions = {
                series: [{
                    name: 'Trajets effectués',
                    data: [";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 1), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 2), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 3), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 2), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 3), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 4), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 3), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 2), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 4), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 3), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 2), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 3), "html", null, true);
        yield "]
                }, {
                    name: 'Réservations',
                    data: [";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 2) + 1), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 3) + 1), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 4) + 1), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 3) + 1), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 4) + 1), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 5) + 1), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 4) + 1), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 3) + 1), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 5) + 1), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 4) + 1), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 3) + 1), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 4) + 1), "html", null, true);
        yield "]
                }],
                chart: {
                    height: 288,
                    type: 'area',
                    toolbar: {
                        show: false
                    },
                    fontFamily: 'Poppins, sans-serif',
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 2,
                },
                colors: ['#4F46E5', '#C7D2FE'],
                fill: {
                    type: 'gradient',
                    gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.7,
                        opacityTo: 0.3,
                    }
                },
                xaxis: {
                    categories: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'],
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                }
            };

            var tripsChart = new ApexCharts(document.querySelector(\"#tripsChart\"), tripsOptions);
            tripsChart.render();
            
            // Revenue Chart
            var revenueOptions = {
                series: [{
                    name: 'Revenus',
                    data: [";
        // line 408
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 10) + 5), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 15) + 10), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 20) + 15), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 18) + 12), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 25) + 10), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 30) + 15), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 25) + 10), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 20) + 15), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 30) + 20), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 25) + 15), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 20) + 10), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::random($this->env->getCharset(), 25) + 15), "html", null, true);
        yield "]
                }],
                chart: {
                    height: 288,
                    type: 'bar',
                    toolbar: {
                        show: false
                    },
                    fontFamily: 'Poppins, sans-serif',
                },
                plotOptions: {
                    bar: {
                        borderRadius: 5,
                        columnWidth: '60%',
                    },
                },
                dataLabels: {
                    enabled: false
                },
                colors: ['#10B981'],
                xaxis: {
                    categories: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'],
                },
                yaxis: {
                    title: {
                        text: '€ (euros)'
                    }
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return val + \" €\"
                        }
                    }
                }
            };

            var revenueChart = new ApexCharts(document.querySelector(\"#revenueChart\"), revenueOptions);
            revenueChart.render();
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
        return "conducteur/dashboard.html.twig";
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
        return array (  755 => 408,  687 => 365,  659 => 362,  647 => 354,  634 => 353,  611 => 340,  600 => 332,  594 => 329,  576 => 314,  560 => 301,  551 => 294,  540 => 286,  532 => 280,  519 => 270,  515 => 268,  509 => 265,  506 => 264,  504 => 263,  499 => 261,  493 => 258,  485 => 255,  475 => 247,  473 => 246,  467 => 243,  457 => 235,  446 => 227,  439 => 222,  433 => 218,  422 => 213,  418 => 212,  409 => 209,  406 => 208,  404 => 207,  399 => 205,  392 => 202,  390 => 201,  377 => 192,  375 => 191,  365 => 184,  362 => 183,  358 => 182,  343 => 169,  341 => 168,  338 => 167,  336 => 166,  330 => 163,  284 => 120,  276 => 115,  258 => 100,  250 => 95,  234 => 81,  228 => 80,  222 => 76,  216 => 72,  213 => 71,  209 => 70,  204 => 68,  186 => 53,  178 => 48,  158 => 31,  149 => 25,  140 => 19,  130 => 11,  117 => 10,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Tableau de bord conducteur{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css\">
{% endblock %}

{% block content %}
    <div class=\"max-w-screen-2xl w-full mx-auto px-4 py-8\">
        <div class=\"w-full\">
            <!-- Header Section -->
            <div class=\"bg-gradient-to-r from-primary/5 to-primary-light/10 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-6 mb-8\">
                <div class=\"flex flex-col lg:flex-row justify-between items-start lg:items-center gap-6\">
                    <div>
                        <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">
                            <span class=\"bg-clip-text text-transparent bg-gradient-to-r from-primary to-primary-dark\">
                                Bienvenue, {{ user.prenom }}
                            </span>
                        </h1>
                        <p class=\"text-gray-600\">Voici un aperçu de votre activité en tant que conducteur</p>
                    </div>
                    <div class=\"flex gap-3\">
                        <a href=\"{{ path('app_conducteur_annonce') }}\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 text-sm font-medium\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                            </svg>
                            Ajouter une annonce
                        </a>
                        <a href=\"{{ path('app_conducteur_voiture') }}\" class=\"inline-flex items-center px-4 py-2 bg-white text-gray-700 border border-gray-200 rounded-lg shadow-sm hover:bg-gray-50 transition-all duration-300 text-sm font-medium\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z\" />
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 14l-2-2H7L5 14m14-4.5v9.5a1 1 0 01-1 1H6a1 1 0 01-1-1V9.5m14 0a1.5 1.5 0 00-1.5-1.5H6.5a1.5 1.5 0 00-1.5 1.5m15 0v4.5a1.5 1.5 0 01-1.5 1.5H6.5a1.5 1.5 0 01-1.5-1.5V9.5\" />
                            </svg>
                            Gérer ma voiture
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Stats Cards -->
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8\">
                <div class=\"bg-white rounded-xl p-6 shadow-md border border-gray-100 transition-all duration-300 hover:shadow-lg\">
                    <div class=\"flex items-center justify-between\">
                        <div>
                            <p class=\"text-sm font-medium text-gray-500 mb-1\">Trajets réalisés</p>
                            <h3 class=\"text-2xl font-bold text-gray-800\">{{ user.tripsCount ?? '0' }}</h3>
                            <p class=\"text-xs text-green-500 mt-1 flex items-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 10l7-7m0 0l7 7m-7-7v18\" />
                                </svg>
                                +{{ random(3) }} ce mois
                            </p>
                        </div>
                        <div class=\"w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class=\"bg-white rounded-xl p-6 shadow-md border border-gray-100 transition-all duration-300 hover:shadow-lg\">
                    <div class=\"flex items-center justify-between\">
                        <div>
                            <p class=\"text-sm font-medium text-gray-500 mb-1\">Note moyenne</p>
                            <h3 class=\"text-2xl font-bold text-gray-800\">{{ user.rating ?? '0' }}<span class=\"text-sm text-yellow-500\">/5</span></h3>
                            <div class=\"flex items-center mt-1\">
                                {% for i in 1..5 %}
                                    {% if i <= (user.rating ?? 0) %}
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 text-yellow-500\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                            <path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\" />
                                        </svg>
                                    {% else %}
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 text-gray-300\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                            <path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\" />
                                        </svg>
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                        <div class=\"w-12 h-12 rounded-full bg-yellow-50 flex items-center justify-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-yellow-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class=\"bg-white rounded-xl p-6 shadow-md border border-gray-100 transition-all duration-300 hover:shadow-lg\">
                    <div class=\"flex items-center justify-between\">
                        <div>
                            <p class=\"text-sm font-medium text-gray-500 mb-1\">Revenus totaux</p>
                            <h3 class=\"text-2xl font-bold text-gray-800\">{{ (random(200) + 50)|round(2) }}€</h3>
                            <p class=\"text-xs text-green-500 mt-1 flex items-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 10l7-7m0 0l7 7m-7-7v18\" />
                                </svg>
                                +{{ random(30) + 5 }}€ ce mois
                            </p>
                        </div>
                        <div class=\"w-12 h-12 rounded-full bg-green-50 flex items-center justify-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-green-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class=\"bg-white rounded-xl p-6 shadow-md border border-gray-100 transition-all duration-300 hover:shadow-lg\">
                    <div class=\"flex items-center justify-between\">
                        <div>
                            <p class=\"text-sm font-medium text-gray-500 mb-1\">Passagers transportés</p>
                            <h3 class=\"text-2xl font-bold text-gray-800\">{{ random(20) + 5 }}</h3>
                            <p class=\"text-xs text-green-500 mt-1 flex items-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3 w-3 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 10l7-7m0 0l7 7m-7-7v18\" />
                                </svg>
                                +{{ random(3) + 1 }} cette semaine
                            </p>
                        </div>
                        <div class=\"w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-blue-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Charts Section -->
            <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8\">
                <!-- Trips Performance Chart -->
                <div class=\"bg-white rounded-xl shadow-md border border-gray-100 p-6\">
                    <div class=\"flex justify-between items-center mb-6\">
                        <h3 class=\"text-lg font-semibold text-gray-800\">Performance des trajets</h3>
                        <div class=\"flex space-x-2\">
                            <button class=\"px-3 py-1 text-xs bg-primary/10 text-primary rounded-md\">Mois</button>
                            <button class=\"px-3 py-1 text-xs bg-gray-100 text-gray-500 rounded-md\">Année</button>
                        </div>
                    </div>
                    <div id=\"tripsChart\" class=\"h-72\"></div>
                </div>
                
                <!-- Revenue Chart -->
                <div class=\"bg-white rounded-xl shadow-md border border-gray-100 p-6\">
                    <div class=\"flex justify-between items-center mb-6\">
                        <h3 class=\"text-lg font-semibold text-gray-800\">Revenus</h3>
                        <div class=\"flex space-x-2\">
                            <button class=\"px-3 py-1 text-xs bg-primary/10 text-primary rounded-md\">Mois</button>
                            <button class=\"px-3 py-1 text-xs bg-gray-100 text-gray-500 rounded-md\">Année</button>
                        </div>
                    </div>
                    <div id=\"revenueChart\" class=\"h-72\"></div>
                </div>
            </div>
            
            <!-- Upcoming Trips Section -->
            <div class=\"bg-white rounded-xl shadow-md border border-gray-100 p-6 mb-8\">
                <div class=\"flex justify-between items-center mb-6\">
                    <h3 class=\"text-lg font-semibold text-gray-800\">Trajets à venir</h3>
                    <a href=\"{{ path('app_conducteur_annonce') }}\" class=\"text-sm text-primary hover:underline\">Voir tout</a>
                </div>
                
                {% set hasUpcomingTrips = random(1) %}
                
                {% if hasUpcomingTrips %}
                    <div class=\"overflow-x-auto\">
                        <table class=\"min-w-full\">
                            <thead>
                                <tr>
                                    <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Date</th>
                                    <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Départ</th>
                                    <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Arrivée</th>
                                    <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Prix</th>
                                    <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Places</th>
                                    <th class=\"px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Statut</th>
                                </tr>
                            </thead>
                            <tbody class=\"divide-y divide-gray-200\">
                                {% for i in 1..3 %}
                                    <tr class=\"hover:bg-gray-50\">
                                        <td class=\"px-4 py-4 whitespace-nowrap text-sm text-gray-700\">{{ \"now\"|date_modify(\"+\" ~ (random(6) + 1) ~ \" days\")|date(\"d/m/Y H:i\") }}</td>
                                        <td class=\"px-4 py-4 whitespace-nowrap text-sm text-gray-700\">
                                            <div class=\"flex items-center\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-400 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                                </svg>
                                                {% set cities = [\"Paris\", \"Lyon\", \"Marseille\", \"Bordeaux\", \"Lille\", \"Nantes\", \"Rennes\", \"Strasbourg\", \"Montpellier\", \"Toulouse\"] %}
                                                {{ cities[random(9)] }}
                                            </div>
                                        </td>
                                        <td class=\"px-4 py-4 whitespace-nowrap text-sm text-gray-700\">
                                            <div class=\"flex items-center\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-primary mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                                </svg>
                                                {% set cities = [\"Paris\", \"Lyon\", \"Marseille\", \"Bordeaux\", \"Lille\", \"Nantes\", \"Rennes\", \"Strasbourg\", \"Montpellier\", \"Toulouse\"] %}
                                                {{ cities[random(9)] }}
                                            </div>
                                        </td>
                                        <td class=\"px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-700\">{{ (random(30) + 5)|round(2) }}€</td>
                                        <td class=\"px-4 py-4 whitespace-nowrap text-sm text-gray-700\">
                                            {% set reservedSeats = random(3) %}
                                            {% set totalSeats = reservedSeats + random(2) + 1 %}
                                            <span class=\"font-medium\">{{ reservedSeats }}</span>/{{ totalSeats }}
                                        </td>
                                        <td class=\"px-4 py-4 whitespace-nowrap\">
                                            <span class=\"px-2 py-1 text-xs rounded-full {{ random(1) ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}\">
                                                {{ random(1) ? 'Confirmé' : 'En attente' }}
                                            </span>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% else %}
                    <div class=\"bg-gray-50 rounded-lg p-8 text-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 text-gray-400 mx-auto mb-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4\" />
                        </svg>
                        <p class=\"text-gray-500 mb-4\">Vous n'avez aucun trajet à venir.</p>
                        <a href=\"{{ path('app_conducteur_annonce') }}\" class=\"inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 text-sm font-medium\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                            </svg>
                            Créer une annonce
                        </a>
                    </div>
                {% endif %}
            </div>
            
            <!-- Bottom Row: Vehicle Summary and Event Management -->
            <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8\">
                <!-- Vehicle Summary -->
                <div class=\"bg-white rounded-xl shadow-md border border-gray-100 p-6\">
                    <div class=\"flex justify-between items-center mb-6\">
                        <h3 class=\"text-lg font-semibold text-gray-800\">Mon véhicule</h3>
                        <a href=\"{{ path('app_conducteur_voiture') }}\" class=\"text-sm text-primary hover:underline\">Gérer</a>
                    </div>
                    
                    {% if voiture is defined and voiture %}
                        <div class=\"flex items-start space-x-4\">
                            <div class=\"w-1/3 aspect-video bg-gray-100 rounded-lg flex items-center justify-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12 text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z\" />
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 14l-2-2H7L5 14m14-4.5v9.5a1 1 0 01-1 1H6a1 1 0 01-1-1V9.5m14 0a1.5 1.5 0 00-1.5-1.5H6.5a1.5 1.5 0 00-1.5 1.5m15 0v4.5a1.5 1.5 0 01-1.5 1.5H6.5a1.5 1.5 0 01-1.5-1.5V9.5\" />
                                </svg>
                            </div>
                            <div class=\"w-2/3\">
                                <h4 class=\"text-xl font-semibold text-gray-800\">{{ voiture.marque ?? 'Marque' }} {{ voiture.modele ?? 'Modèle' }}</h4>
                                <div class=\"mt-2 space-y-1\">
                                    <p class=\"text-sm text-gray-600\">
                                        <span class=\"font-medium\">Couleur:</span> {{ voiture.couleur ?? 'Non spécifiée' }}
                                    </p>
                                    <p class=\"text-sm text-gray-600\">
                                        <span class=\"font-medium\">Immatriculation:</span> {{ voiture.plaqueImatriculation ?? 'Non spécifiée' }}
                                    </p>
                                    {% if voiture is defined and voiture.categorie %}
                                        <p class=\"text-sm text-gray-600\">
                                            <span class=\"font-medium\">Catégorie:</span> {{ voiture.categorie.nom }}
                                        </p>
                                    {% endif %}
                                </div>
                                <div class=\"mt-4\">
                                    <a href=\"{{ path('app_conducteur_voiture_edit') }}\" class=\"inline-flex items-center px-3 py-1.5 bg-white text-primary border border-primary/30 rounded-lg text-xs font-medium hover:bg-primary/5\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3.5 w-3.5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z\" />
                                        </svg>
                                        Modifier
                                    </a>
                                </div>
                            </div>
                        </div>
                    {% else %}
                        <div class=\"bg-gray-50 rounded-lg p-6 text-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-10 w-10 text-gray-400 mx-auto mb-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z\" />
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 14l-2-2H7L5 14m14-4.5v9.5a1 1 0 01-1 1H6a1 1 0 01-1-1V9.5m14 0a1.5 1.5 0 00-1.5-1.5H6.5a1.5 1.5 0 00-1.5 1.5m15 0v4.5a1.5 1.5 0 01-1.5 1.5H6.5a1.5 1.5 0 01-1.5-1.5V9.5\" />
                            </svg>
                            <p class=\"text-gray-500 mb-3\">Vous n'avez pas encore enregistré de véhicule</p>
                            <a href=\"{{ path('app_conducteur_voiture_add') }}\" class=\"inline-flex items-center px-3 py-1.5 bg-primary text-white rounded-lg text-xs font-medium hover:bg-primary-dark\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-3.5 w-3.5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                                </svg>
                                Ajouter un véhicule
                            </a>
                        </div>
                    {% endif %}
                </div>
                
                <!-- Event Management -->
                <div class=\"bg-white rounded-xl shadow-md border border-gray-100 p-6\">
                    <div class=\"flex justify-between items-center mb-6\">
                        <h3 class=\"text-lg font-semibold text-gray-800\">Gestion des événements</h3>
                        <div class=\"flex space-x-2\">
                            <a href=\"{{ path('app_conducteur_participations_evenements') }}\" class=\"text-sm text-primary hover:underline\">Tous les événements</a>
                        </div>
                    </div>
                    
                    <div class=\"space-y-4\">
                        <div class=\"flex flex-col lg:flex-row lg:items-center gap-4 p-4 border border-gray-100 rounded-lg hover:bg-gray-50\">
                            <div class=\"flex-shrink-0 w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-purple-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                </svg>
                            </div>
                            <div class=\"flex-grow\">
                                <h4 class=\"font-medium text-gray-800\">Forum des associations étudiantes</h4>
                                <p class=\"text-sm text-gray-600\">{{ \"now\"|date_modify(\"+\" ~ (random(9) + 1) ~ \" days\")|date(\"d/m/Y\") }} - Campus universitaire</p>
                            </div>
                            <div class=\"flex-shrink-0\">
                                <span class=\"inline-flex px-2 py-1 text-xs rounded-full bg-green-100 text-green-800\">Inscrit</span>
                            </div>
                        </div>
                        
                        <div class=\"flex flex-col lg:flex-row lg:items-center gap-4 p-4 border border-gray-100 rounded-lg hover:bg-gray-50\">
                            <div class=\"flex-shrink-0 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-blue-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                </svg>
                            </div>
                            <div class=\"flex-grow\">
                                <h4 class=\"font-medium text-gray-800\">Soirée covoiturage solidaire</h4>
                                <p class=\"text-sm text-gray-600\">{{ \"now\"|date_modify(\"+\" ~ (random(20) + 10) ~ \" days\")|date(\"d/m/Y\") }} - Salle des fêtes</p>
                            </div>
                            <div class=\"flex-shrink-0\">
                                <a href=\"{{ path('app_conducteur_participations_evenements') }}\" class=\"inline-flex px-3 py-1.5 bg-primary text-white rounded-lg text-xs font-medium hover:bg-primary-dark\">
                                    S'inscrire
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mt-6\">
                        <a href=\"{{ path('app_conducteur_participations_parraines') }}\" class=\"inline-flex items-center px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\" />
                            </svg>
                            Participations parrainées
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Trips Chart
            var tripsOptions = {
                series: [{
                    name: 'Trajets effectués',
                    data: [{{ random(1) }}, {{ random(2) }}, {{ random(3) }}, {{ random(2) }}, {{ random(3) }}, {{ random(4) }}, {{ random(3) }}, {{ random(2) }}, {{ random(4) }}, {{ random(3) }}, {{ random(2) }}, {{ random(3) }}]
                }, {
                    name: 'Réservations',
                    data: [{{ random(2) + 1 }}, {{ random(3) + 1 }}, {{ random(4) + 1 }}, {{ random(3) + 1 }}, {{ random(4) + 1 }}, {{ random(5) + 1 }}, {{ random(4) + 1 }}, {{ random(3) + 1 }}, {{ random(5) + 1 }}, {{ random(4) + 1 }}, {{ random(3) + 1 }}, {{ random(4) + 1 }}]
                }],
                chart: {
                    height: 288,
                    type: 'area',
                    toolbar: {
                        show: false
                    },
                    fontFamily: 'Poppins, sans-serif',
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 2,
                },
                colors: ['#4F46E5', '#C7D2FE'],
                fill: {
                    type: 'gradient',
                    gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.7,
                        opacityTo: 0.3,
                    }
                },
                xaxis: {
                    categories: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'],
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                }
            };

            var tripsChart = new ApexCharts(document.querySelector(\"#tripsChart\"), tripsOptions);
            tripsChart.render();
            
            // Revenue Chart
            var revenueOptions = {
                series: [{
                    name: 'Revenus',
                    data: [{{ random(10) + 5 }}, {{ random(15) + 10 }}, {{ random(20) + 15 }}, {{ random(18) + 12 }}, {{ random(25) + 10 }}, {{ random(30) + 15 }}, {{ random(25) + 10 }}, {{ random(20) + 15 }}, {{ random(30) + 20 }}, {{ random(25) + 15 }}, {{ random(20) + 10 }}, {{ random(25) + 15 }}]
                }],
                chart: {
                    height: 288,
                    type: 'bar',
                    toolbar: {
                        show: false
                    },
                    fontFamily: 'Poppins, sans-serif',
                },
                plotOptions: {
                    bar: {
                        borderRadius: 5,
                        columnWidth: '60%',
                    },
                },
                dataLabels: {
                    enabled: false
                },
                colors: ['#10B981'],
                xaxis: {
                    categories: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'],
                },
                yaxis: {
                    title: {
                        text: '€ (euros)'
                    }
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return val + \" €\"
                        }
                    }
                }
            };

            var revenueChart = new ApexCharts(document.querySelector(\"#revenueChart\"), revenueOptions);
            revenueChart.render();
        });
    </script>
{% endblock %} ", "conducteur/dashboard.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\dashboard.html.twig");
    }
}
