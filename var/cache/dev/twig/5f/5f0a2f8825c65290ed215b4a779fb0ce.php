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

/* admin/annonce_event/new.html.twig */
class __TwigTemplate_b2c7c9b4fa1bf1415825623c04b2b44c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/annonce_event/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/annonce_event/new.html.twig"));

        $this->parent = $this->loadTemplate("layouts/admin_layout.html.twig", "admin/annonce_event/new.html.twig", 1);
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

        yield "Nouvelle Annonce d'Événement";
        
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
        <div class=\"mb-6 flex justify-between items-center\">
            <h2 class=\"text-2xl font-semibold text-gray-800\">Créer une nouvelle Annonce d'Événement</h2>
            <div>
                <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonce_event_index");
        yield "\" class=\"px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200\">
                    <i class=\"fas fa-arrow-left mr-1\"></i> Retour à la liste
                </a>
            </div>
        </div>

        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["error"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 18
            yield "            <div class=\"mb-4 bg-red-100 border-l-4 border-red-500 text-red-700 p-4\" role=\"alert\">
                ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", ["success"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_success"]) {
            // line 24
            yield "            <div class=\"mb-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4\" role=\"alert\">
                ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_success"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_success'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
        <div class=\"bg-white shadow-md rounded-lg overflow-hidden\">
            ";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start', ["attr" => ["class" => "p-6 space-y-6"]]);
        yield "
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div>
                        <h3 class=\"text-lg font-semibold text-gray-700 mb-4\">Informations générales</h3>
                        
                        <div class=\"mb-4\">
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "titre", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Titre"]);
        yield "
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "titre", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"]]);
        yield "
                            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "titre", [], "any", false, false, false, 38), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Description"]);
        yield "
                            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500", "rows" => 4]]);
        yield "
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "status", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Statut"]);
        yield "
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "status", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"]]);
        yield "
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "status", [], "any", false, false, false, 50), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "event", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Événement associé"]);
        yield "
                            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "event", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"]]);
        yield "
                            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "event", [], "any", false, false, false, 56), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
                        </div>
                    </div>

                    <div>
                        <h3 class=\"text-lg font-semibold text-gray-700 mb-4\">Détails du trajet</h3>

                        <div class=\"mb-4\">
                            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "departurePoint", [], "any", false, false, false, 64), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Point de départ"]);
        yield "
                            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "departurePoint", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"]]);
        yield "
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "departurePoint", [], "any", false, false, false, 66), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "arrivalPoint", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Point d'arrivée"]);
        yield "
                            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "arrivalPoint", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"]]);
        yield "
                            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "arrivalPoint", [], "any", false, false, false, 72), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "departureDate", [], "any", false, false, false, 76), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Date de départ"]);
        yield "
                            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "departureDate", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"]]);
        yield "
                            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "departureDate", [], "any", false, false, false, 78), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "price", [], "any", false, false, false, 82), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Prix"]);
        yield "
                            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "price", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"]]);
        yield "
                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "price", [], "any", false, false, false, 84), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "availableSeats", [], "any", false, false, false, 88), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Places disponibles"]);
        yield "
                            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "availableSeats", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"]]);
        yield "
                            ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "availableSeats", [], "any", false, false, false, 90), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
                        </div>
                    </div>
                </div>

                <div class=\"pt-5 border-t border-gray-200\">
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-4\">Conducteur et Véhicule</h3>
                    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                        <div class=\"mb-4\">
                            ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "driver", [], "any", false, false, false, 99), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Conducteur"]);
        yield "
                            ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "driver", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"]]);
        yield "
                            ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "driver", [], "any", false, false, false, 101), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "car", [], "any", false, false, false, 105), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Véhicule"]);
        yield "
                            ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "car", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"]]);
        yield "
                            ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "car", [], "any", false, false, false, 107), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
                        </div>
                    </div>
                </div>

                <div class=\"flex justify-between pt-6 border-t border-gray-200\">
                    <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_annonce_event_index");
        yield "\" class=\"px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200\">
                        Annuler
                    </a>
                    <button type=\"submit\" class=\"px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600\">
                        <i class=\"fas fa-plus-circle mr-1\"></i> Créer l'annonce
                    </button>
                </div>
            ";
        // line 120
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), 'form_end');
        yield "
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
        return "admin/annonce_event/new.html.twig";
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
        return array (  350 => 120,  340 => 113,  331 => 107,  327 => 106,  323 => 105,  316 => 101,  312 => 100,  308 => 99,  296 => 90,  292 => 89,  288 => 88,  281 => 84,  277 => 83,  273 => 82,  266 => 78,  262 => 77,  258 => 76,  251 => 72,  247 => 71,  243 => 70,  236 => 66,  232 => 65,  228 => 64,  217 => 56,  213 => 55,  209 => 54,  202 => 50,  198 => 49,  194 => 48,  187 => 44,  183 => 43,  179 => 42,  172 => 38,  168 => 37,  164 => 36,  155 => 30,  151 => 28,  142 => 25,  139 => 24,  135 => 23,  132 => 22,  123 => 19,  120 => 18,  116 => 17,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/admin_layout.html.twig' %}

{% block title %}Nouvelle Annonce d'Événement{% endblock %}

{% block content %}
<div class=\"container mx-auto px-4 sm:px-8\">
    <div class=\"py-8\">
        <div class=\"mb-6 flex justify-between items-center\">
            <h2 class=\"text-2xl font-semibold text-gray-800\">Créer une nouvelle Annonce d'Événement</h2>
            <div>
                <a href=\"{{ path('app_admin_annonce_event_index') }}\" class=\"px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200\">
                    <i class=\"fas fa-arrow-left mr-1\"></i> Retour à la liste
                </a>
            </div>
        </div>

        {% for flash_error in app.flashes('error') %}
            <div class=\"mb-4 bg-red-100 border-l-4 border-red-500 text-red-700 p-4\" role=\"alert\">
                {{ flash_error }}
            </div>
        {% endfor %}

        {% for flash_success in app.flashes('success') %}
            <div class=\"mb-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4\" role=\"alert\">
                {{ flash_success }}
            </div>
        {% endfor %}

        <div class=\"bg-white shadow-md rounded-lg overflow-hidden\">
            {{ form_start(form, {'attr': {'class': 'p-6 space-y-6'}}) }}
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div>
                        <h3 class=\"text-lg font-semibold text-gray-700 mb-4\">Informations générales</h3>
                        
                        <div class=\"mb-4\">
                            {{ form_label(form.titre, 'Titre', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                            {{ form_widget(form.titre, {'attr': {'class': 'block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500'}}) }}
                            {{ form_errors(form.titre, {'attr': {'class': 'text-red-500 text-xs mt-1'}}) }}
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(form.description, 'Description', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                            {{ form_widget(form.description, {'attr': {'class': 'block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500', 'rows': 4}}) }}
                            {{ form_errors(form.description, {'attr': {'class': 'text-red-500 text-xs mt-1'}}) }}
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(form.status, 'Statut', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                            {{ form_widget(form.status, {'attr': {'class': 'block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500'}}) }}
                            {{ form_errors(form.status, {'attr': {'class': 'text-red-500 text-xs mt-1'}}) }}
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(form.event, 'Événement associé', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                            {{ form_widget(form.event, {'attr': {'class': 'block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500'}}) }}
                            {{ form_errors(form.event, {'attr': {'class': 'text-red-500 text-xs mt-1'}}) }}
                        </div>
                    </div>

                    <div>
                        <h3 class=\"text-lg font-semibold text-gray-700 mb-4\">Détails du trajet</h3>

                        <div class=\"mb-4\">
                            {{ form_label(form.departurePoint, 'Point de départ', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                            {{ form_widget(form.departurePoint, {'attr': {'class': 'block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500'}}) }}
                            {{ form_errors(form.departurePoint, {'attr': {'class': 'text-red-500 text-xs mt-1'}}) }}
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(form.arrivalPoint, 'Point d\\'arrivée', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                            {{ form_widget(form.arrivalPoint, {'attr': {'class': 'block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500'}}) }}
                            {{ form_errors(form.arrivalPoint, {'attr': {'class': 'text-red-500 text-xs mt-1'}}) }}
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(form.departureDate, 'Date de départ', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                            {{ form_widget(form.departureDate, {'attr': {'class': 'block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500'}}) }}
                            {{ form_errors(form.departureDate, {'attr': {'class': 'text-red-500 text-xs mt-1'}}) }}
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(form.price, 'Prix', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                            {{ form_widget(form.price, {'attr': {'class': 'block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500'}}) }}
                            {{ form_errors(form.price, {'attr': {'class': 'text-red-500 text-xs mt-1'}}) }}
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(form.availableSeats, 'Places disponibles', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                            {{ form_widget(form.availableSeats, {'attr': {'class': 'block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500'}}) }}
                            {{ form_errors(form.availableSeats, {'attr': {'class': 'text-red-500 text-xs mt-1'}}) }}
                        </div>
                    </div>
                </div>

                <div class=\"pt-5 border-t border-gray-200\">
                    <h3 class=\"text-lg font-semibold text-gray-700 mb-4\">Conducteur et Véhicule</h3>
                    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                        <div class=\"mb-4\">
                            {{ form_label(form.driver, 'Conducteur', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                            {{ form_widget(form.driver, {'attr': {'class': 'block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500'}}) }}
                            {{ form_errors(form.driver, {'attr': {'class': 'text-red-500 text-xs mt-1'}}) }}
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(form.car, 'Véhicule', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                            {{ form_widget(form.car, {'attr': {'class': 'block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500'}}) }}
                            {{ form_errors(form.car, {'attr': {'class': 'text-red-500 text-xs mt-1'}}) }}
                        </div>
                    </div>
                </div>

                <div class=\"flex justify-between pt-6 border-t border-gray-200\">
                    <a href=\"{{ path('app_admin_annonce_event_index') }}\" class=\"px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200\">
                        Annuler
                    </a>
                    <button type=\"submit\" class=\"px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600\">
                        <i class=\"fas fa-plus-circle mr-1\"></i> Créer l'annonce
                    </button>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>
{% endblock %} ", "admin/annonce_event/new.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\admin\\annonce_event\\new.html.twig");
    }
}
