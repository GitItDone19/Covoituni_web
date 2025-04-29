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

/* conducteur/modifier_trajet.html.twig */
class __TwigTemplate_abdaf110962a90d43a2b7d9da1fab33d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/modifier_trajet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/modifier_trajet.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/modifier_trajet.html.twig", 1);
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

        yield "Modifier un Trajet";
        
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
        yield "    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"flex justify-between items-center mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Modifier le trajet</h1>
                    <p class=\"text-gray-600\">Modifiez les informations du trajet.</p>
                </div>
            </div>
            
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 16
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 17
                yield "                    <div class=\"mb-4 rounded-xl p-4 ";
                if (($context["label"] == "success")) {
                    yield "bg-primary text-white";
                } else {
                    yield "bg-error text-white";
                }
                yield "\">
                        ";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
            <form action=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_modifier_trajet_submit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        yield "\" method=\"POST\" class=\"space-y-6\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div>
                        <label for=\"titre\" class=\"block text-sm font-medium text-gray-700 mb-1\">Titre du trajet</label>
                        <input type=\"text\" id=\"titre\" name=\"titre\" required maxlength=\"25\" value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 27, $this->source); })()), "titre", [], "any", false, false, false, 27), "html", null, true);
        yield "\"
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary\">
                        <small class=\"text-gray-500\">Max. 25 caractères, alphabétique et \"-->\" uniquement</small>
                    </div>

                    <div>
                        <label for=\"departure_point\" class=\"block text-sm font-medium text-gray-700 mb-1\">Point de départ</label>
                        <input type=\"text\" id=\"departure_point\" name=\"departure_point\" required maxlength=\"25\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 34, $this->source); })()), "departurePoint", [], "any", false, false, false, 34), "html", null, true);
        yield "\"
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary\">
                        <small class=\"text-gray-500\">Max. 25 caractères, alphabétique uniquement</small>
                    </div>

                    <div>
                        <label for=\"arrival_point\" class=\"block text-sm font-medium text-gray-700 mb-1\">Point d'arrivée</label>
                        <input type=\"text\" id=\"arrival_point\" name=\"arrival_point\" required maxlength=\"25\" value=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 41, $this->source); })()), "arrivalPoint", [], "any", false, false, false, 41), "html", null, true);
        yield "\"
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary\">
                        <small class=\"text-gray-500\">Max. 25 caractères, alphabétique uniquement</small>
                    </div>

                    <div>
                        <label for=\"price\" class=\"block text-sm font-medium text-gray-700 mb-1\">Prix par passager (DT)</label>
                        <input type=\"number\" id=\"price\" name=\"price\" step=\"0.01\" required min=\"0\" value=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 48, $this->source); })()), "price", [], "any", false, false, false, 48), "html", null, true);
        yield "\"
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary\">
                    </div>
                </div>

                <div class=\"flex justify-end space-x-4 mt-6\">
                    <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_liste_trajet");
        yield "\" 
                       class=\"px-6 py-2 border border-gray-300 rounded-xl text-gray-700 hover:bg-gray-50\">
                        Annuler
                    </a>
                    <button type=\"submit\" 
                            class=\"px-6 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl hover:shadow-lg transition-all duration-300\">
                        Enregistrer les modifications
                    </button>
                </div>
            </form>
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
        return "conducteur/modifier_trajet.html.twig";
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
        return array (  193 => 54,  184 => 48,  174 => 41,  164 => 34,  154 => 27,  147 => 23,  144 => 22,  138 => 21,  129 => 18,  120 => 17,  115 => 16,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Modifier un Trajet{% endblock %}

{% block content %}
    <div class=\"w-full\">
        <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
            <div class=\"flex justify-between items-center mb-6\">
                <div>
                    <h1 class=\"text-3xl font-bold mb-2 text-gray-800\">Modifier le trajet</h1>
                    <p class=\"text-gray-600\">Modifiez les informations du trajet.</p>
                </div>
            </div>
            
            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"mb-4 rounded-xl p-4 {% if label == 'success' %}bg-primary text-white{% else %}bg-error text-white{% endif %}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}

            <form action=\"{{ path('app_conducteur_modifier_trajet_submit', {'id': trajet.id}) }}\" method=\"POST\" class=\"space-y-6\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div>
                        <label for=\"titre\" class=\"block text-sm font-medium text-gray-700 mb-1\">Titre du trajet</label>
                        <input type=\"text\" id=\"titre\" name=\"titre\" required maxlength=\"25\" value=\"{{ trajet.titre }}\"
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary\">
                        <small class=\"text-gray-500\">Max. 25 caractères, alphabétique et \"-->\" uniquement</small>
                    </div>

                    <div>
                        <label for=\"departure_point\" class=\"block text-sm font-medium text-gray-700 mb-1\">Point de départ</label>
                        <input type=\"text\" id=\"departure_point\" name=\"departure_point\" required maxlength=\"25\" value=\"{{ trajet.departurePoint }}\"
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary\">
                        <small class=\"text-gray-500\">Max. 25 caractères, alphabétique uniquement</small>
                    </div>

                    <div>
                        <label for=\"arrival_point\" class=\"block text-sm font-medium text-gray-700 mb-1\">Point d'arrivée</label>
                        <input type=\"text\" id=\"arrival_point\" name=\"arrival_point\" required maxlength=\"25\" value=\"{{ trajet.arrivalPoint }}\"
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary\">
                        <small class=\"text-gray-500\">Max. 25 caractères, alphabétique uniquement</small>
                    </div>

                    <div>
                        <label for=\"price\" class=\"block text-sm font-medium text-gray-700 mb-1\">Prix par passager (DT)</label>
                        <input type=\"number\" id=\"price\" name=\"price\" step=\"0.01\" required min=\"0\" value=\"{{ trajet.price }}\"
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary\">
                    </div>
                </div>

                <div class=\"flex justify-end space-x-4 mt-6\">
                    <a href=\"{{ path('app_conducteur_liste_trajet') }}\" 
                       class=\"px-6 py-2 border border-gray-300 rounded-xl text-gray-700 hover:bg-gray-50\">
                        Annuler
                    </a>
                    <button type=\"submit\" 
                            class=\"px-6 py-2 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl hover:shadow-lg transition-all duration-300\">
                        Enregistrer les modifications
                    </button>
                </div>
            </form>
        </div>
    </div>
{% endblock %} ", "conducteur/modifier_trajet.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\conducteur\\modifier_trajet.html.twig");
    }
}
