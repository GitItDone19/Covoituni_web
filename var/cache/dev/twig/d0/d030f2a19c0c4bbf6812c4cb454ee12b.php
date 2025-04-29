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

/* event/show.html.twig */
class __TwigTemplate_553cb308c822db602cd4ac8b91e6be44 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield " - CovoitUni";
        
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
        yield "    <div class=\"container mx-auto p-4 max-w-5xl mb-12\">
        <div class=\"mb-6 flex items-center\">
            <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\" class=\"text-primary hover:text-primary-dark transition-all flex items-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                </svg>
                Back to Events
            </a>
        </div>

        <div class=\"card glass-card p-6 md:p-8 relative overflow-hidden mb-10\">
            <!-- Decorative elements -->
            <div class=\"hidden md:block absolute top-0 right-0 w-32 h-32 bg-primary-light rounded-full blur-xl opacity-10 animate-float\"></div>
            
            <div class=\"relative z-10\">
                <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center mb-6\">
                    <h1 class=\"section-title text-2xl md:text-3xl font-bold mb-2 md:mb-0\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), "html", null, true);
        yield "</h1>
                    ";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "type", [], "any", false, false, false, 23)) {
            // line 24
            yield "                        <span class=\"bg-primary text-white text-sm px-3 py-1 rounded-full\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 24, $this->source); })()), "type", [], "any", false, false, false, 24), "nom", [], "any", false, false, false, 24), "html", null, true);
            yield "</span>
                    ";
        }
        // line 26
        yield "                </div>
                
                <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8 mb-8\">
                    <div class=\"col-span-2\">
                        <div class=\"space-y-6\">
                            <div class=\"space-y-4\">
                                <h2 class=\"text-lg font-semibold\">Event Details</h2>
                                <div class=\"space-y-3\">
                                    <div class=\"flex items-center\">
                                        <span class=\"w-10 h-10 flex items-center justify-center bg-primary-ultra-light rounded-full mr-4 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                            </svg>
                                        </span>
                                        <div>
                                            <p class=\"text-sm text-gray-500\">Location</p>
                                            <p class=\"font-medium\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 43, $this->source); })()), "lieu", [], "any", false, false, false, 43), "html", null, true);
        yield "</p>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center\">
                                        <span class=\"w-10 h-10 flex items-center justify-center bg-primary-ultra-light rounded-full mr-4 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                            </svg>
                                        </span>
                                        <div>
                                            <p class=\"text-sm text-gray-500\">Date</p>
                                            <p class=\"font-medium\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 54, $this->source); })()), "dateEvent", [], "any", false, false, false, 54), "d M Y"), "html", null, true);
        yield "</p>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center\">
                                        <span class=\"w-10 h-10 flex items-center justify-center bg-primary-ultra-light rounded-full mr-4 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                            </svg>
                                        </span>
                                        <div>
                                            <p class=\"text-sm text-gray-500\">Time</p>
                                            <p class=\"font-medium\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 65, $this->source); })()), "heureEvent", [], "any", false, false, false, 65), "H:i"), "html", null, true);
        yield "</p>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center\">
                                        <span class=\"w-10 h-10 flex items-center justify-center bg-primary-ultra-light rounded-full mr-4 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                                            </svg>
                                        </span>
                                        <div>
                                            <p class=\"text-sm text-gray-500\">Organizer</p>
                                            <p class=\"font-medium\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 76, $this->source); })()), "organisateur", [], "any", false, false, false, 76), "prenom", [], "any", false, false, false, 76), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 76, $this->source); })()), "organisateur", [], "any", false, false, false, 76), "nom", [], "any", false, false, false, 76), "html", null, true);
        yield "</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <h2 class=\"text-lg font-semibold mb-4\">Description</h2>
                                <p class=\"text-gray-700\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 84, $this->source); })()), "description", [], "any", false, false, false, 84), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-span-1\">
                        <div class=\"glass-card p-6 relative\">
                            <h2 class=\"text-lg font-semibold mb-4\">Participants</h2>
                            <div class=\"mb-4\">
                                <p class=\"flex items-center mb-2\">
                                    <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                                        </svg>
                                    </span>
                                    <span class=\"font-medium\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 99, $this->source); })()), "participants", [], "any", false, false, false, 99)), "html", null, true);
        yield " people attending</span>
                                </p>
                                
                                ";
        // line 102
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 102, $this->source); })()), "participants", [], "any", false, false, false, 102)) > 0)) {
            // line 103
            yield "                                    <div class=\"mt-4 max-h-60 overflow-y-auto space-y-2 px-2\">
                                        ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 104, $this->source); })()), "participants", [], "any", false, false, false, 104));
            foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
                // line 105
                yield "                                            <div class=\"flex items-center p-2 rounded-lg hover:bg-gray-50\">
                                                <div class=\"w-8 h-8 bg-primary-ultra-light rounded-full flex items-center justify-center text-primary mr-3\">
                                                    ";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 107), "prenom", [], "any", false, false, false, 107)), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 107), "nom", [], "any", false, false, false, 107)), "html", null, true);
                yield "
                                                </div>
                                                <span>";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 109), "prenom", [], "any", false, false, false, 109), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "utilisateur", [], "any", false, false, false, 109), "nom", [], "any", false, false, false, 109), "html", null, true);
                yield "</span>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['participation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            yield "                                    </div>
                                ";
        } else {
            // line 114
            yield "                                    <p class=\"text-gray-500 text-sm italic mt-2\">No participants yet. Be the first to join!</p>
                                ";
        }
        // line 116
        yield "                            </div>
                            
                            <div class=\"mt-6\">
                                ";
        // line 119
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 120
            yield "                                    ";
            if ((isset($context["is_already_participating"]) || array_key_exists("is_already_participating", $context) ? $context["is_already_participating"] : (function () { throw new RuntimeError('Variable "is_already_participating" does not exist.', 120, $this->source); })())) {
                // line 121
                yield "                                        <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events_leave", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 121, $this->source); })()), "id", [], "any", false, false, false, 121)]), "html", null, true);
                yield "\" method=\"post\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("leave_event_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 122, $this->source); })()), "id", [], "any", false, false, false, 122))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" class=\"btn btn-outline block w-full text-center border-2 border-red-500 text-red-500 hover:bg-red-500 hover:text-white py-3 rounded-xl font-medium transition-all\">
                                                Leave Event
                                            </button>
                                        </form>
                                    ";
            } else {
                // line 128
                yield "                                        <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events_join", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 128, $this->source); })()), "id", [], "any", false, false, false, 128)]), "html", null, true);
                yield "\" method=\"post\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("join_event_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 129, $this->source); })()), "id", [], "any", false, false, false, 129))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" class=\"btn btn-primary block w-full text-center py-3 rounded-xl font-medium transition-all\">
                                                Join Event
                                            </button>
                                        </form>
                                    ";
            }
            // line 135
            yield "                                ";
        } else {
            // line 136
            yield "                                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-primary block text-center py-3 rounded-xl font-medium transition-all\">
                                        Log in to Join
                                    </a>
                                ";
        }
        // line 140
        yield "                            </div>
                        </div>
                        
                        ";
        // line 143
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 143, $this->source); })()), "dateEvent", [], "any", false, false, false, 143) >= $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
            // line 144
            yield "                            <div class=\"mt-6 glass-card p-6\">
                                <h2 class=\"text-lg font-semibold mb-4\">Need a Ride?</h2>
                                <p class=\"text-sm text-gray-600 mb-4\">Looking for transportation to this event? Find or offer rides.</p>
                                <a href=\"";
            // line 147
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rides");
            yield "\" class=\"btn btn-outline block text-center border-2 border-primary text-primary hover:bg-primary hover:text-white py-2 rounded-xl font-medium transition-all\">
                                    Find Rides
                                </a>
                            </div>
                        ";
        }
        // line 152
        yield "                    </div>
                </div>
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
        return "event/show.html.twig";
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
        return array (  339 => 152,  331 => 147,  326 => 144,  324 => 143,  319 => 140,  311 => 136,  308 => 135,  299 => 129,  294 => 128,  285 => 122,  280 => 121,  277 => 120,  275 => 119,  270 => 116,  266 => 114,  262 => 112,  251 => 109,  245 => 107,  241 => 105,  237 => 104,  234 => 103,  232 => 102,  226 => 99,  208 => 84,  195 => 76,  181 => 65,  167 => 54,  153 => 43,  134 => 26,  128 => 24,  126 => 23,  122 => 22,  105 => 8,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ event.nom }} - CovoitUni{% endblock %}

{% block body %}
    <div class=\"container mx-auto p-4 max-w-5xl mb-12\">
        <div class=\"mb-6 flex items-center\">
            <a href=\"{{ path('app_events') }}\" class=\"text-primary hover:text-primary-dark transition-all flex items-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                </svg>
                Back to Events
            </a>
        </div>

        <div class=\"card glass-card p-6 md:p-8 relative overflow-hidden mb-10\">
            <!-- Decorative elements -->
            <div class=\"hidden md:block absolute top-0 right-0 w-32 h-32 bg-primary-light rounded-full blur-xl opacity-10 animate-float\"></div>
            
            <div class=\"relative z-10\">
                <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center mb-6\">
                    <h1 class=\"section-title text-2xl md:text-3xl font-bold mb-2 md:mb-0\">{{ event.nom }}</h1>
                    {% if event.type %}
                        <span class=\"bg-primary text-white text-sm px-3 py-1 rounded-full\">{{ event.type.nom }}</span>
                    {% endif %}
                </div>
                
                <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8 mb-8\">
                    <div class=\"col-span-2\">
                        <div class=\"space-y-6\">
                            <div class=\"space-y-4\">
                                <h2 class=\"text-lg font-semibold\">Event Details</h2>
                                <div class=\"space-y-3\">
                                    <div class=\"flex items-center\">
                                        <span class=\"w-10 h-10 flex items-center justify-center bg-primary-ultra-light rounded-full mr-4 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\" />
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\" />
                                            </svg>
                                        </span>
                                        <div>
                                            <p class=\"text-sm text-gray-500\">Location</p>
                                            <p class=\"font-medium\">{{ event.lieu }}</p>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center\">
                                        <span class=\"w-10 h-10 flex items-center justify-center bg-primary-ultra-light rounded-full mr-4 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
                                            </svg>
                                        </span>
                                        <div>
                                            <p class=\"text-sm text-gray-500\">Date</p>
                                            <p class=\"font-medium\">{{ event.dateEvent|date('d M Y') }}</p>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center\">
                                        <span class=\"w-10 h-10 flex items-center justify-center bg-primary-ultra-light rounded-full mr-4 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\" />
                                            </svg>
                                        </span>
                                        <div>
                                            <p class=\"text-sm text-gray-500\">Time</p>
                                            <p class=\"font-medium\">{{ event.heureEvent|date('H:i') }}</p>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center\">
                                        <span class=\"w-10 h-10 flex items-center justify-center bg-primary-ultra-light rounded-full mr-4 text-primary\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                                            </svg>
                                        </span>
                                        <div>
                                            <p class=\"text-sm text-gray-500\">Organizer</p>
                                            <p class=\"font-medium\">{{ event.organisateur.prenom }} {{ event.organisateur.nom }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <h2 class=\"text-lg font-semibold mb-4\">Description</h2>
                                <p class=\"text-gray-700\">{{ event.description }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-span-1\">
                        <div class=\"glass-card p-6 relative\">
                            <h2 class=\"text-lg font-semibold mb-4\">Participants</h2>
                            <div class=\"mb-4\">
                                <p class=\"flex items-center mb-2\">
                                    <span class=\"w-8 h-8 flex items-center justify-center bg-primary-ultra-light rounded-full mr-3 text-primary\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\" />
                                        </svg>
                                    </span>
                                    <span class=\"font-medium\">{{ event.participants|length }} people attending</span>
                                </p>
                                
                                {% if event.participants|length > 0 %}
                                    <div class=\"mt-4 max-h-60 overflow-y-auto space-y-2 px-2\">
                                        {% for participation in event.participants %}
                                            <div class=\"flex items-center p-2 rounded-lg hover:bg-gray-50\">
                                                <div class=\"w-8 h-8 bg-primary-ultra-light rounded-full flex items-center justify-center text-primary mr-3\">
                                                    {{ participation.utilisateur.prenom|first }}{{ participation.utilisateur.nom|first }}
                                                </div>
                                                <span>{{ participation.utilisateur.prenom }} {{ participation.utilisateur.nom }}</span>
                                            </div>
                                        {% endfor %}
                                    </div>
                                {% else %}
                                    <p class=\"text-gray-500 text-sm italic mt-2\">No participants yet. Be the first to join!</p>
                                {% endif %}
                            </div>
                            
                            <div class=\"mt-6\">
                                {% if is_granted('ROLE_USER') %}
                                    {% if is_already_participating %}
                                        <form action=\"{{ path('app_events_leave', {'id': event.id}) }}\" method=\"post\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('leave_event_' ~ event.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-outline block w-full text-center border-2 border-red-500 text-red-500 hover:bg-red-500 hover:text-white py-3 rounded-xl font-medium transition-all\">
                                                Leave Event
                                            </button>
                                        </form>
                                    {% else %}
                                        <form action=\"{{ path('app_events_join', {'id': event.id}) }}\" method=\"post\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('join_event_' ~ event.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-primary block w-full text-center py-3 rounded-xl font-medium transition-all\">
                                                Join Event
                                            </button>
                                        </form>
                                    {% endif %}
                                {% else %}
                                    <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary block text-center py-3 rounded-xl font-medium transition-all\">
                                        Log in to Join
                                    </a>
                                {% endif %}
                            </div>
                        </div>
                        
                        {% if event.dateEvent >= date() %}
                            <div class=\"mt-6 glass-card p-6\">
                                <h2 class=\"text-lg font-semibold mb-4\">Need a Ride?</h2>
                                <p class=\"text-sm text-gray-600 mb-4\">Looking for transportation to this event? Find or offer rides.</p>
                                <a href=\"{{ path('app_rides') }}\" class=\"btn btn-outline block text-center border-2 border-primary text-primary hover:bg-primary hover:text-white py-2 rounded-xl font-medium transition-all\">
                                    Find Rides
                                </a>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %} ", "event/show.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\event\\show.html.twig");
    }
}
