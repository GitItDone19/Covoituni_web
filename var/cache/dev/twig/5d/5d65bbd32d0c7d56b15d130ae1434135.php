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

/* base.html.twig */
class __TwigTemplate_fb3cbb9f4b936b609ef15d2dbf11fa8c extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        
        ";
        // line 9
        yield "        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
        
        ";
        // line 12
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        yield "\">
        
        ";
        // line 15
        yield "        <script src=\"https://cdn.tailwindcss.com\"></script>
        
        ";
        // line 18
        yield "        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: '#00B140',
                            'primary-dark': '#008F34',
                            'primary-light': '#70e8a8',
                            'primary-ultra-light': '#e6fff0',
                            'text-dark': '#1A1A1A',
                            'bg-secondary': '#F5F5F5',
                            'error': '#FF3333'
                        },
                        fontFamily: {
                            montserrat: ['Montserrat', 'sans-serif']
                        },
                        backdropBlur: {
                            'xs': '2px',
                        }
                    }
                }
            }
        </script>
        
        <style>
            body {
                font-family: 'Montserrat', sans-serif;
            }
            .nav-blur {
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
            }
        </style>
        
        ";
        // line 52
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 53
        yield "    </head>
    <body class=\"bg-white text-[#1A1A1A] font-montserrat\">
        ";
        // line 56
        yield "        <nav class=\"fixed w-full top-0 z-50 transition-all duration-300\">
            <div class=\"nav-blur bg-white/70 border-b border-gray-200/20 shadow-lg\">
                <div class=\"container mx-auto px-4 lg:px-8\">
                    <div class=\"flex justify-between h-20\">
                        <div class=\"flex items-center\">
                        <div class=\"flex-shrink-0 flex items-center\">
                                <a href=\"";
        // line 62
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62)) {
            // line 63
            yield "                                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 64
                yield "                                            ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
                yield "
                                        ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONDUCTEUR")) {
                // line 66
                yield "                                            ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_dashboard");
                yield "
                                        ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PASSAGER")) {
                // line 68
                yield "                                            ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_dashboard");
                yield "
                                        ";
            } else {
                // line 70
                yield "                                            ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
                yield "
                                        ";
            }
            // line 72
            yield "                                    ";
        } else {
            // line 73
            yield "                                        ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "
                                    ";
        }
        // line 74
        yield "\" class=\"navbar-logo text-2xl font-extrabold bg-gradient-to-r from-primary to-primary-dark bg-clip-text text-transparent hover:scale-105 transition-transform\">
                                    CovoitUni
                                </a>
                        </div>
                            <div class=\"hidden sm:ml-10 sm:flex sm:space-x-8\">
                                ";
        // line 79
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79)) {
            // line 80
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\" class=\"nav-link inline-flex items-center px-4 py-2 text-sm font-medium transition-all duration-300\">Home</a>
                                ";
        }
        // line 82
        yield "                                ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82)) {
            // line 83
            yield "                                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 84
                yield "                                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
                yield "\" class=\"nav-link inline-flex items-center px-4 py-2 text-sm font-medium transition-all duration-300\">
                                            <span class=\"mr-2\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                                    <path d=\"M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z\" />
                                                    <path d=\"M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z\" />
                                                </svg>
                                            </span>
                                            Dashboard
                                        </a>
                                    ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONDUCTEUR")) {
                // line 94
                yield "                                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_dashboard");
                yield "\" class=\"nav-link inline-flex items-center px-4 py-2 text-sm font-medium transition-all duration-300\">
                                            <span class=\"mr-2\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                                    <path d=\"M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z\" />
                                                    <path d=\"M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z\" />
                                                </svg>
                                            </span>
                                            Dashboard
                                        </a>
                                    ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PASSAGER")) {
                // line 104
                yield "                                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_dashboard");
                yield "\" class=\"nav-link inline-flex items-center px-4 py-2 text-sm font-medium transition-all duration-300\">
                                            <span class=\"mr-2\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                                    <path fill-rule=\"evenodd\" d=\"M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z\" clip-rule=\"evenodd\" />
                                                </svg>
                                            </span>
                                            Dashboard
                                        </a>
                                    ";
            }
            // line 113
            yield "                                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
            yield "\" class=\"nav-link inline-flex items-center px-4 py-2 text-sm font-medium transition-all duration-300\">
                                        <span class=\"mr-2\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                                <path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z\" clip-rule=\"evenodd\" />
                                            </svg>
                                        </span>
                                        Profile
                                    </a>
                                ";
        }
        // line 122
        yield "                        </div>
                    </div>
                    <div class=\"hidden sm:ml-6 sm:flex sm:items-center sm:space-x-4\">
                        ";
        // line 125
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "user", [], "any", false, false, false, 125)) {
            // line 126
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"action-btn inline-flex items-center px-6 py-3 text-sm font-medium text-white bg-gradient-to-r from-primary to-primary-dark rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5\">
                                    <span class=\"mr-2\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                            <path fill-rule=\"evenodd\" d=\"M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z\" clip-rule=\"evenodd\" />
                                        </svg>
                                    </span>
                                    Logout
                                </a>
                        ";
        } else {
            // line 135
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"nav-link inline-flex items-center px-4 py-2 text-sm font-medium transition-all duration-300\">Login</a>
                                <a href=\"";
            // line 136
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"action-btn inline-flex items-center px-6 py-3 text-sm font-medium text-white bg-gradient-to-r from-primary to-primary-dark rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5\">Register</a>
                        ";
        }
        // line 138
        yield "                        </div>
                    </div>
                </div>
            </div>
        </nav>

        ";
        // line 145
        yield "        <div class=\"h-20\"></div>

        ";
        // line 148
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "flashes", [], "any", false, false, false, 148));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 149
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 150
                yield "                <div class=\"container mx-auto px-4 lg:px-8 mt-4\">
                    <div class=\"rounded-xl p-4 ";
                // line 151
                if (($context["label"] == "success")) {
                    yield "bg-primary text-white";
                } else {
                    yield "bg-error text-white";
                }
                yield "\">
                        ";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        yield "
        ";
        // line 159
        yield "        <main class=\"w-full\">
            ";
        // line 160
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 161
        yield "        </main>

        ";
        // line 164
        yield "        <footer class=\"relative mt-12 pt-16 pb-8 overflow-hidden\">
            ";
        // line 166
        yield "            <div class=\"absolute inset-0 bg-gradient-to-b from-white via-primary-ultra-light/10 to-gray-100/50 -z-10\"></div>
            <div class=\"absolute top-0 right-0 w-72 h-72 bg-primary-light/5 rounded-full filter blur-3xl -z-10\"></div>
            <div class=\"absolute bottom-0 left-0 w-72 h-72 bg-primary/5 rounded-full filter blur-3xl -z-10\"></div>
            
            <div class=\"px-4 sm:px-6 relative z-10\">
                <div class=\"glass-card bg-white/40 backdrop-blur-sm border border-white/30 shadow-xl p-8 rounded-xl\">
                    <div class=\"container mx-auto\">
                        <div class=\"grid grid-cols-1 md:grid-cols-12 gap-y-8 gap-x-8\">
                            ";
        // line 175
        yield "                            <div class=\"md:col-span-4\">
                                <a href=\"";
        // line 176
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176)) {
            // line 177
            yield "                                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 178
                yield "                                            ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
                yield "
                                        ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONDUCTEUR")) {
                // line 180
                yield "                                            ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_dashboard");
                yield "
                                        ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PASSAGER")) {
                // line 182
                yield "                                            ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_dashboard");
                yield "
                                        ";
            } else {
                // line 184
                yield "                                            ";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
                yield "
                                        ";
            }
            // line 186
            yield "                                    ";
        } else {
            // line 187
            yield "                                        ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "
                                    ";
        }
        // line 188
        yield "\" class=\"footer-logo text-2xl font-bold bg-gradient-to-r from-primary to-primary-dark bg-clip-text text-transparent inline-block mb-3\">CovoitUni</a>
                                <p class=\"text-gray-600 mb-5 text-sm\">A carpooling platform designed for university students and staff, helping you find safe and affordable rides while reducing your carbon footprint.</p>
                                <div class=\"flex space-x-3\">
                                    <a href=\"#\" class=\"w-10 h-10 rounded-xl bg-white flex items-center justify-center shadow-md hover:shadow-xl transition-all duration-300 hover:bg-primary hover:text-white transform hover:-translate-y-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                            <path d=\"M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z\"/>
                                        </svg>
                                    </a>
                                    <a href=\"#\" class=\"w-10 h-10 rounded-xl bg-white flex items-center justify-center shadow-md hover:shadow-xl transition-all duration-300 hover:bg-primary hover:text-white transform hover:-translate-y-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                            <path d=\"M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.066 9.645c.183 4.04-2.83 8.544-8.164 8.544-1.622 0-3.131-.476-4.402-1.291 1.524.18 3.045-.244 4.252-1.189-1.256-.023-2.317-.854-2.684-1.995.451.086.895.061 1.298-.049-1.381-.278-2.335-1.522-2.304-2.853.388.215.83.344 1.301.359-1.279-.855-1.641-2.544-.889-3.835 1.416 1.738 3.533 2.881 5.92 3.001-.419-1.796.944-3.527 2.799-3.527.825 0 1.572.349 2.096.907.654-.128 1.27-.368 1.824-.697-.215.671-.67 1.233-1.263 1.589.581-.07 1.135-.224 1.649-.453-.384.578-.87 1.084-1.433 1.489z\"/>
                                        </svg>
                                    </a>
                                    <a href=\"#\" class=\"w-10 h-10 rounded-xl bg-white flex items-center justify-center shadow-md hover:shadow-xl transition-all duration-300 hover:bg-primary hover:text-white transform hover:-translate-y-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                            <path d=\"M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z\"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            
                            ";
        // line 210
        yield "                            <div class=\"md:col-span-2\">
                                <h3 class=\"text-base font-semibold mb-4 text-gray-800\">About</h3>
                                <ul class=\"space-y-2.5\">
                                    <li><a href=\"#\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">Our Story</a></li>
                                    <li><a href=\"#\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">How It Works</a></li>
                                    <li><a href=\"#\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">Testimonials</a></li>
                                    <li><a href=\"#\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">Partners</a></li>
                                </ul>
                            </div>
                            
                            ";
        // line 221
        yield "                            <div class=\"md:col-span-2\">
                                <h3 class=\"text-base font-semibold mb-4 text-gray-800\">Navigation</h3>
                                <ul class=\"space-y-2.5\">
                                    <li>
                                        ";
        // line 225
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 225, $this->source); })()), "user", [], "any", false, false, false, 225)) {
            // line 226
            yield "                                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 227
                yield "                                                <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
                yield "\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">Dashboard</a>
                                            ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONDUCTEUR")) {
                // line 229
                yield "                                                <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_dashboard");
                yield "\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">Dashboard</a>
                                            ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PASSAGER")) {
                // line 231
                yield "                                                <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_dashboard");
                yield "\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">Dashboard</a>
                                            ";
            }
            // line 233
            yield "                                        ";
        } else {
            // line 234
            yield "                                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">Home</a>
                                        ";
        }
        // line 236
        yield "                                    </li>
                                    <li><a href=\"";
        // line 237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rides");
        yield "\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">Find Rides</a></li>
                                    <li><a href=\"";
        // line 238
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">Events</a></li>
                                    <li><a href=\"#\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">FAQ</a></li>
                                </ul>
                            </div>
                            
                            ";
        // line 244
        yield "                            <div class=\"md:col-span-4\">
                                <h3 class=\"text-base font-semibold mb-4 text-gray-800\">Contact Us</h3>
                                <ul class=\"space-y-4\">
                                    <li class=\"flex items-start\">
                                        <div class=\"p-2 bg-primary-ultra-light rounded-lg mr-3 flex-shrink-0\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\" />
                                            </svg>
                                        </div>
                                        <span class=\"text-sm text-gray-600\">support@covoituni.com</span>
                                    </li>
                                    <li class=\"flex items-start\">
                                        <div class=\"p-2 bg-primary-ultra-light rounded-lg mr-3 flex-shrink-0\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z\" />
                                            </svg>
                                        </div>
                                        <span class=\"text-sm text-gray-600\">+1 (123) 456-7890</span>
                                    </li>
                                    <li class=\"flex items-start\">
                                        <div class=\"p-2 bg-primary-ultra-light rounded-lg mr-3 flex-shrink-0\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                            </svg>
                    </div>
                                        <span class=\"text-sm text-gray-600\">123 University Ave, Campus Building</span>
                                    </li>
                        </ul>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        ";
        // line 281
        yield "        <script>
            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 10) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            });
        </script>
        ";
        // line 292
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 293
        yield "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "CovoitUni";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 52
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 160
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 292
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  607 => 292,  585 => 160,  563 => 52,  540 => 6,  527 => 293,  525 => 292,  512 => 281,  474 => 244,  466 => 238,  462 => 237,  459 => 236,  453 => 234,  450 => 233,  444 => 231,  438 => 229,  432 => 227,  429 => 226,  427 => 225,  421 => 221,  409 => 210,  386 => 188,  380 => 187,  377 => 186,  371 => 184,  365 => 182,  359 => 180,  353 => 178,  350 => 177,  348 => 176,  345 => 175,  335 => 166,  332 => 164,  328 => 161,  326 => 160,  323 => 159,  320 => 157,  314 => 156,  304 => 152,  296 => 151,  293 => 150,  288 => 149,  283 => 148,  279 => 145,  271 => 138,  266 => 136,  261 => 135,  248 => 126,  246 => 125,  241 => 122,  228 => 113,  215 => 104,  201 => 94,  187 => 84,  184 => 83,  181 => 82,  175 => 80,  173 => 79,  166 => 74,  160 => 73,  157 => 72,  151 => 70,  145 => 68,  139 => 66,  133 => 64,  130 => 63,  128 => 62,  120 => 56,  116 => 53,  114 => 52,  78 => 18,  74 => 15,  68 => 12,  64 => 9,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}CovoitUni{% endblock %}</title>
        
        {# Google Fonts - Montserrat #}
        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
        
        {# Our CSS file #}
        <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
        
        {# Tailwind CSS CDN #}
        <script src=\"https://cdn.tailwindcss.com\"></script>
        
        {# Custom Tailwind Configuration #}
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: '#00B140',
                            'primary-dark': '#008F34',
                            'primary-light': '#70e8a8',
                            'primary-ultra-light': '#e6fff0',
                            'text-dark': '#1A1A1A',
                            'bg-secondary': '#F5F5F5',
                            'error': '#FF3333'
                        },
                        fontFamily: {
                            montserrat: ['Montserrat', 'sans-serif']
                        },
                        backdropBlur: {
                            'xs': '2px',
                        }
                    }
                }
            }
        </script>
        
        <style>
            body {
                font-family: 'Montserrat', sans-serif;
            }
            .nav-blur {
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
            }
        </style>
        
        {% block stylesheets %}{% endblock %}
    </head>
    <body class=\"bg-white text-[#1A1A1A] font-montserrat\">
        {# Navigation Bar #}
        <nav class=\"fixed w-full top-0 z-50 transition-all duration-300\">
            <div class=\"nav-blur bg-white/70 border-b border-gray-200/20 shadow-lg\">
                <div class=\"container mx-auto px-4 lg:px-8\">
                    <div class=\"flex justify-between h-20\">
                        <div class=\"flex items-center\">
                        <div class=\"flex-shrink-0 flex items-center\">
                                <a href=\"{% if app.user %}
                                        {% if is_granted('ROLE_ADMIN') %}
                                            {{ path('app_admin_dashboard') }}
                                        {% elseif is_granted('ROLE_CONDUCTEUR') %}
                                            {{ path('app_conducteur_dashboard') }}
                                        {% elseif is_granted('ROLE_PASSAGER') %}
                                            {{ path('app_passager_dashboard') }}
                                        {% else %}
                                            {{ path('app_home') }}
                                        {% endif %}
                                    {% else %}
                                        {{ path('app_home') }}
                                    {% endif %}\" class=\"navbar-logo text-2xl font-extrabold bg-gradient-to-r from-primary to-primary-dark bg-clip-text text-transparent hover:scale-105 transition-transform\">
                                    CovoitUni
                                </a>
                        </div>
                            <div class=\"hidden sm:ml-10 sm:flex sm:space-x-8\">
                                {% if not app.user %}
                                <a href=\"{{ path('app_home') }}\" class=\"nav-link inline-flex items-center px-4 py-2 text-sm font-medium transition-all duration-300\">Home</a>
                                {% endif %}
                                {% if app.user %}
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <a href=\"{{ path('app_admin_dashboard') }}\" class=\"nav-link inline-flex items-center px-4 py-2 text-sm font-medium transition-all duration-300\">
                                            <span class=\"mr-2\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                                    <path d=\"M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z\" />
                                                    <path d=\"M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z\" />
                                                </svg>
                                            </span>
                                            Dashboard
                                        </a>
                                    {% elseif is_granted('ROLE_CONDUCTEUR') %}
                                        <a href=\"{{ path('app_conducteur_dashboard') }}\" class=\"nav-link inline-flex items-center px-4 py-2 text-sm font-medium transition-all duration-300\">
                                            <span class=\"mr-2\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                                    <path d=\"M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z\" />
                                                    <path d=\"M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z\" />
                                                </svg>
                                            </span>
                                            Dashboard
                                        </a>
                                    {% elseif is_granted('ROLE_PASSAGER') %}
                                        <a href=\"{{ path('app_passager_dashboard') }}\" class=\"nav-link inline-flex items-center px-4 py-2 text-sm font-medium transition-all duration-300\">
                                            <span class=\"mr-2\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                                    <path fill-rule=\"evenodd\" d=\"M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z\" clip-rule=\"evenodd\" />
                                                </svg>
                                            </span>
                                            Dashboard
                                        </a>
                                    {% endif %}
                                    <a href=\"{{ path('app_user_profile') }}\" class=\"nav-link inline-flex items-center px-4 py-2 text-sm font-medium transition-all duration-300\">
                                        <span class=\"mr-2\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                                <path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z\" clip-rule=\"evenodd\" />
                                            </svg>
                                        </span>
                                        Profile
                                    </a>
                                {% endif %}
                        </div>
                    </div>
                    <div class=\"hidden sm:ml-6 sm:flex sm:items-center sm:space-x-4\">
                        {% if app.user %}
                                <a href=\"{{ path('app_logout') }}\" class=\"action-btn inline-flex items-center px-6 py-3 text-sm font-medium text-white bg-gradient-to-r from-primary to-primary-dark rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5\">
                                    <span class=\"mr-2\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                            <path fill-rule=\"evenodd\" d=\"M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z\" clip-rule=\"evenodd\" />
                                        </svg>
                                    </span>
                                    Logout
                                </a>
                        {% else %}
                                <a href=\"{{ path('app_login') }}\" class=\"nav-link inline-flex items-center px-4 py-2 text-sm font-medium transition-all duration-300\">Login</a>
                                <a href=\"{{ path('app_register') }}\" class=\"action-btn inline-flex items-center px-6 py-3 text-sm font-medium text-white bg-gradient-to-r from-primary to-primary-dark rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5\">Register</a>
                        {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        {# Spacer for fixed navbar #}
        <div class=\"h-20\"></div>

        {# Flash Messages #}
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"container mx-auto px-4 lg:px-8 mt-4\">
                    <div class=\"rounded-xl p-4 {% if label == 'success' %}bg-primary text-white{% else %}bg-error text-white{% endif %}\">
                        {{ message }}
                    </div>
                </div>
            {% endfor %}
        {% endfor %}

        {# Main Content #}
        <main class=\"w-full\">
            {% block body %}{% endblock %}
        </main>

        {# Modern Footer without the green line - with small margins #}
        <footer class=\"relative mt-12 pt-16 pb-8 overflow-hidden\">
            {# Background elements #}
            <div class=\"absolute inset-0 bg-gradient-to-b from-white via-primary-ultra-light/10 to-gray-100/50 -z-10\"></div>
            <div class=\"absolute top-0 right-0 w-72 h-72 bg-primary-light/5 rounded-full filter blur-3xl -z-10\"></div>
            <div class=\"absolute bottom-0 left-0 w-72 h-72 bg-primary/5 rounded-full filter blur-3xl -z-10\"></div>
            
            <div class=\"px-4 sm:px-6 relative z-10\">
                <div class=\"glass-card bg-white/40 backdrop-blur-sm border border-white/30 shadow-xl p-8 rounded-xl\">
                    <div class=\"container mx-auto\">
                        <div class=\"grid grid-cols-1 md:grid-cols-12 gap-y-8 gap-x-8\">
                            {# Logo and description #}
                            <div class=\"md:col-span-4\">
                                <a href=\"{% if app.user %}
                                        {% if is_granted('ROLE_ADMIN') %}
                                            {{ path('app_admin_dashboard') }}
                                        {% elseif is_granted('ROLE_CONDUCTEUR') %}
                                            {{ path('app_conducteur_dashboard') }}
                                        {% elseif is_granted('ROLE_PASSAGER') %}
                                            {{ path('app_passager_dashboard') }}
                                        {% else %}
                                            {{ path('app_home') }}
                                        {% endif %}
                                    {% else %}
                                        {{ path('app_home') }}
                                    {% endif %}\" class=\"footer-logo text-2xl font-bold bg-gradient-to-r from-primary to-primary-dark bg-clip-text text-transparent inline-block mb-3\">CovoitUni</a>
                                <p class=\"text-gray-600 mb-5 text-sm\">A carpooling platform designed for university students and staff, helping you find safe and affordable rides while reducing your carbon footprint.</p>
                                <div class=\"flex space-x-3\">
                                    <a href=\"#\" class=\"w-10 h-10 rounded-xl bg-white flex items-center justify-center shadow-md hover:shadow-xl transition-all duration-300 hover:bg-primary hover:text-white transform hover:-translate-y-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                            <path d=\"M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z\"/>
                                        </svg>
                                    </a>
                                    <a href=\"#\" class=\"w-10 h-10 rounded-xl bg-white flex items-center justify-center shadow-md hover:shadow-xl transition-all duration-300 hover:bg-primary hover:text-white transform hover:-translate-y-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                            <path d=\"M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.066 9.645c.183 4.04-2.83 8.544-8.164 8.544-1.622 0-3.131-.476-4.402-1.291 1.524.18 3.045-.244 4.252-1.189-1.256-.023-2.317-.854-2.684-1.995.451.086.895.061 1.298-.049-1.381-.278-2.335-1.522-2.304-2.853.388.215.83.344 1.301.359-1.279-.855-1.641-2.544-.889-3.835 1.416 1.738 3.533 2.881 5.92 3.001-.419-1.796.944-3.527 2.799-3.527.825 0 1.572.349 2.096.907.654-.128 1.27-.368 1.824-.697-.215.671-.67 1.233-1.263 1.589.581-.07 1.135-.224 1.649-.453-.384.578-.87 1.084-1.433 1.489z\"/>
                                        </svg>
                                    </a>
                                    <a href=\"#\" class=\"w-10 h-10 rounded-xl bg-white flex items-center justify-center shadow-md hover:shadow-xl transition-all duration-300 hover:bg-primary hover:text-white transform hover:-translate-y-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 24 24\">
                                            <path d=\"M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z\"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            
                            {# Quick links section #}
                            <div class=\"md:col-span-2\">
                                <h3 class=\"text-base font-semibold mb-4 text-gray-800\">About</h3>
                                <ul class=\"space-y-2.5\">
                                    <li><a href=\"#\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">Our Story</a></li>
                                    <li><a href=\"#\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">How It Works</a></li>
                                    <li><a href=\"#\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">Testimonials</a></li>
                                    <li><a href=\"#\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">Partners</a></li>
                                </ul>
                            </div>
                            
                            {# Navigation section #}
                            <div class=\"md:col-span-2\">
                                <h3 class=\"text-base font-semibold mb-4 text-gray-800\">Navigation</h3>
                                <ul class=\"space-y-2.5\">
                                    <li>
                                        {% if app.user %}
                                            {% if is_granted('ROLE_ADMIN') %}
                                                <a href=\"{{ path('app_admin_dashboard') }}\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">Dashboard</a>
                                            {% elseif is_granted('ROLE_CONDUCTEUR') %}
                                                <a href=\"{{ path('app_conducteur_dashboard') }}\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">Dashboard</a>
                                            {% elseif is_granted('ROLE_PASSAGER') %}
                                                <a href=\"{{ path('app_passager_dashboard') }}\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">Dashboard</a>
                                            {% endif %}
                                        {% else %}
                                            <a href=\"{{ path('app_home') }}\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">Home</a>
                                        {% endif %}
                                    </li>
                                    <li><a href=\"{{ path('app_rides') }}\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">Find Rides</a></li>
                                    <li><a href=\"{{ path('app_events') }}\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">Events</a></li>
                                    <li><a href=\"#\" class=\"text-sm text-gray-600 hover:text-primary transition-all duration-300 hover:pl-1\">FAQ</a></li>
                                </ul>
                            </div>
                            
                            {# Contact section #}
                            <div class=\"md:col-span-4\">
                                <h3 class=\"text-base font-semibold mb-4 text-gray-800\">Contact Us</h3>
                                <ul class=\"space-y-4\">
                                    <li class=\"flex items-start\">
                                        <div class=\"p-2 bg-primary-ultra-light rounded-lg mr-3 flex-shrink-0\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\" />
                                            </svg>
                                        </div>
                                        <span class=\"text-sm text-gray-600\">support@covoituni.com</span>
                                    </li>
                                    <li class=\"flex items-start\">
                                        <div class=\"p-2 bg-primary-ultra-light rounded-lg mr-3 flex-shrink-0\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z\" />
                                            </svg>
                                        </div>
                                        <span class=\"text-sm text-gray-600\">+1 (123) 456-7890</span>
                                    </li>
                                    <li class=\"flex items-start\">
                                        <div class=\"p-2 bg-primary-ultra-light rounded-lg mr-3 flex-shrink-0\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                            </svg>
                    </div>
                                        <span class=\"text-sm text-gray-600\">123 University Ave, Campus Building</span>
                                    </li>
                        </ul>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        {# JavaScript #}
        <script>
            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 10) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            });
        </script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\base.html.twig");
    }
}
