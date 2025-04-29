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

/* chat/conversation.html.twig */
class __TwigTemplate_a7366d369c88348a2b7f9172ee096756 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/conversation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/conversation.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "chat/conversation.html.twig", 1);
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

        yield "Conversation";
        
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
        .message-container {
            height: 400px;
            overflow-y: auto;
        }
        
        .message-bubble {
            max-width: 80%;
            position: relative;
            margin-bottom: 20px;
            padding: 10px 15px;
            border-radius: 15px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }
        
        .message-bubble.mine {
            background-color: #dcf8c6;
            margin-left: auto;
            border-top-right-radius: 5px;
        }
        
        .message-bubble.other {
            background-color: #ffffff;
            margin-right: auto;
            border-top-left-radius: 5px;
        }
        
        .message-time {
            font-size: 0.75rem;
            color: #999;
            position: absolute;
            bottom: 3px;
            right: 10px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
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

        // line 45
        yield "<div class=\"w-full\">
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
        <div class=\"flex justify-between items-center mb-6\">
            <div>
                <h1 class=\"text-2xl font-bold mb-2 text-gray-800\">
                    Conversation - 
                    ";
        // line 51
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 51, $this->source); })()) == "TRAJET") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 51, $this->source); })()), "annonce", [], "any", false, false, false, 51))) {
            // line 52
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 52, $this->source); })()), "annonce", [], "any", false, false, false, 52), "trajet", [], "any", false, false, false, 52), "getDeparturePoint", [], "method", false, false, false, 52), "html", null, true);
            yield " → ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 52, $this->source); })()), "annonce", [], "any", false, false, false, 52), "trajet", [], "any", false, false, false, 52), "getArrivalPoint", [], "method", false, false, false, 52), "html", null, true);
            yield "
                    ";
        } elseif (((        // line 53
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 53, $this->source); })()) == "EVENT") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 53, $this->source); })()), "annonceEvent", [], "any", false, false, false, 53))) {
            // line 54
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 54, $this->source); })()), "annonceEvent", [], "any", false, false, false, 54), "departurePoint", [], "any", false, false, false, 54), "html", null, true);
            yield " → ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 54, $this->source); })()), "annonceEvent", [], "any", false, false, false, 54), "arrivalPoint", [], "any", false, false, false, 54), "html", null, true);
            yield "
                    ";
        } else {
            // line 56
            yield "                        Réservation #";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "html", null, true);
            yield "
                    ";
        }
        // line 58
        yield "                </h1>
                <p class=\"text-gray-600\">
                    Votre conversation avec 
                    ";
        // line 61
        if ((isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 61, $this->source); })())) {
            // line 62
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 62, $this->source); })()), "prenom", [], "any", false, false, false, 62), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 62, $this->source); })()), "nom", [], "any", false, false, false, 62), "html", null, true);
            yield "
                    ";
        } else {
            // line 64
            yield "                        l'autre utilisateur
                    ";
        }
        // line 66
        yield "                </p>
            </div>
            ";
        // line 68
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "roleCode", [], "any", false, false, false, 68) == "CONDUCTEUR")) {
            // line 69
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_reservations");
            yield "\" class=\"inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour à mes réservations
                </a>
            ";
        } else {
            // line 76
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_passager_mes_reservations");
            yield "\" class=\"inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour à mes réservations
                </a>
            ";
        }
        // line 83
        yield "        </div>

        <div class=\"bg-gray-100 rounded-xl p-4 message-container\" id=\"message-container\">
            ";
        // line 86
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 86, $this->source); })()))) {
            // line 87
            yield "                <div class=\"text-center py-8\" id=\"empty-message\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-10 w-10 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z\" />
                    </svg>
                    <p class=\"mt-3 text-gray-600\">Aucun message dans cette conversation</p>
                    <p class=\"text-gray-500\">Envoyez un message pour commencer à discuter</p>
                </div>
            ";
        } else {
            // line 95
            yield "                <div id=\"messages-list\">
                    ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 96, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 97
                yield "                        <div class=\"message-item\">
                            <div class=\"message-bubble ";
                // line 98
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderId", [], "any", false, false, false, 98) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98))) {
                    yield "mine";
                } else {
                    yield "other";
                }
                yield "\">
                                <div class=\"message-content\">
                                    ";
                // line 100
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 100), "html", null, true));
                yield "
                                </div>
                                <div class=\"message-time\">
                                    ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 103), "H:i"), "html", null, true);
                yield "
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            yield "                </div>
            ";
        }
        // line 110
        yield "        </div>

        <div class=\"mt-4\">
            <form id=\"message-form\" action=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chat_send", ["reservationId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113), "type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 113, $this->source); })())]), "html", null, true);
        yield "\" method=\"post\">
                <div class=\"flex\">
                    <textarea 
                        name=\"message\" 
                        id=\"message-input\"
                        rows=\"3\" 
                        class=\"flex-grow px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-primary resize-none\"
                        placeholder=\"Écrivez votre message...\"></textarea>
                    <button 
                        type=\"submit\" 
                        class=\"px-6 bg-primary text-white rounded-r-lg hover:bg-primary-dark transition-colors duration-300 flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 19l9 2-9-18-9 18 9-2zm0 0v-8\" />
                        </svg>
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

    // line 135
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

        // line 136
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Variables globales
            const container = document.getElementById('message-container');
            let messagesList = document.getElementById('messages-list');
            const emptyMessage = document.getElementById('empty-message');
            const messageForm = document.getElementById('message-form');
            const messageInput = document.getElementById('message-input');
            const reservationId = ";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 145, $this->source); })()), "id", [], "any", false, false, false, 145), "html", null, true);
        yield ";
            const reservationType = \"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 146, $this->source); })()), "html", null, true);
        yield "\";
            const currentUserId = ";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147), "id", [], "any", false, false, false, 147), "html", null, true);
        yield ";
            let lastMessageId = 0;
            
            // Créer le conteneur de messages s'il n'existe pas encore
            if (!messagesList) {
                messagesList = document.createElement('div');
                messagesList.id = 'messages-list';
                container.appendChild(messagesList);
                
                // Si des messages sont déjà affichés, masquer le message \"Aucun message\"
                if (document.querySelectorAll('.message-item').length > 0) {
                    if (emptyMessage) {
                        emptyMessage.style.display = 'none';
                    }
                }
            }
            
            // Initialiser le dernier ID de message
            const allMessages = document.querySelectorAll('.message-item');
            if (allMessages.length > 0) {
                // On suppose que les messages sont affichés par ordre chronologique
                // et que le dernier message affiché a l'ID le plus élevé
                lastMessageId = allMessages.length;
            }
            
            // Auto-scroll to bottom of messages
            container.scrollTop = container.scrollHeight;
            
            // Auto-focus on textarea
            messageInput.focus();
            
            // Envoyer un message via AJAX
            messageForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const message = messageInput.value.trim();
                if (!message) return;
                
                // Ajouter le message visuellement immédiatement
                addMessage({
                    content: message,
                    senderId: currentUserId,
                    createdAt: new Date()
                });
                
                // Vider le champ de saisie
                messageInput.value = '';
                
                // Envoyer le message au serveur
                fetch(messageForm.action, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: 'message=' + encodeURIComponent(message)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log('Message envoyé avec succès');
                    } else {
                        console.error('Erreur lors de l\\'envoi du message');
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                });
            });
            
            // Vérifier les nouveaux messages toutes les 3 secondes
            setInterval(fetchNewMessages, 3000);
            
            function fetchNewMessages() {
                fetch(`/chat/get-new-messages/\${reservationId}/\${reservationType}/\${lastMessageId}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.messages && data.messages.length > 0) {
                        // Masquer le message \"Aucun message\" si nécessaire
                        if (emptyMessage) {
                            emptyMessage.style.display = 'none';
                        }
                        
                        // Ajouter les nouveaux messages
                        data.messages.forEach(message => {
                            addMessage(message);
                            console.log('Nouveau message ajouté:', message);
                        });
                        
                        // Mettre à jour l'ID du dernier message
                        if (data.messages.length > 0) {
                            lastMessageId = data.messages[data.messages.length - 1].id;
                        }
                    }
                })
                .catch(error => {
                    console.error('Erreur lors de la récupération des nouveaux messages:', error);
                });
            }
            
            function addMessage(message) {
                console.log('Ajout du message:', message);
                
                // Masquer le message \"Aucun message\" si nécessaire
                if (emptyMessage) {
                    emptyMessage.style.display = 'none';
                }
                
                // Créer les éléments HTML pour le message
                const messageItem = document.createElement('div');
                messageItem.className = 'message-item';
                
                const messageBubble = document.createElement('div');
                messageBubble.className = `message-bubble \${message.senderId == currentUserId ? 'mine' : 'other'}`;
                
                const messageContent = document.createElement('div');
                messageContent.className = 'message-content';
                messageContent.innerHTML = message.content.replace(/\\n/g, '<br>');
                
                const messageTime = document.createElement('div');
                messageTime.className = 'message-time';
                const time = new Date(message.createdAt);
                messageTime.textContent = `\${time.getHours()}:\${time.getMinutes().toString().padStart(2, '0')}`;
                
                // Assembler les éléments
                messageBubble.appendChild(messageContent);
                messageBubble.appendChild(messageTime);
                messageItem.appendChild(messageBubble);
                
                // Ajouter le message à la liste
                messagesList.appendChild(messageItem);
                
                // Scroller en bas
                container.scrollTop = container.scrollHeight;
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
        return "chat/conversation.html.twig";
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
        return array (  372 => 147,  368 => 146,  364 => 145,  351 => 136,  338 => 135,  306 => 113,  301 => 110,  297 => 108,  286 => 103,  280 => 100,  271 => 98,  268 => 97,  264 => 96,  261 => 95,  251 => 87,  249 => 86,  244 => 83,  233 => 76,  222 => 69,  220 => 68,  216 => 66,  212 => 64,  204 => 62,  202 => 61,  197 => 58,  191 => 56,  183 => 54,  181 => 53,  174 => 52,  172 => 51,  164 => 45,  151 => 44,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Conversation{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .message-container {
            height: 400px;
            overflow-y: auto;
        }
        
        .message-bubble {
            max-width: 80%;
            position: relative;
            margin-bottom: 20px;
            padding: 10px 15px;
            border-radius: 15px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }
        
        .message-bubble.mine {
            background-color: #dcf8c6;
            margin-left: auto;
            border-top-right-radius: 5px;
        }
        
        .message-bubble.other {
            background-color: #ffffff;
            margin-right: auto;
            border-top-left-radius: 5px;
        }
        
        .message-time {
            font-size: 0.75rem;
            color: #999;
            position: absolute;
            bottom: 3px;
            right: 10px;
        }
    </style>
{% endblock %}

{% block content %}
<div class=\"w-full\">
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8 mb-8\">
        <div class=\"flex justify-between items-center mb-6\">
            <div>
                <h1 class=\"text-2xl font-bold mb-2 text-gray-800\">
                    Conversation - 
                    {% if type == 'TRAJET' and reservation.annonce %}
                        {{ reservation.annonce.trajet.getDeparturePoint() }} → {{ reservation.annonce.trajet.getArrivalPoint() }}
                    {% elseif type == 'EVENT' and reservation.annonceEvent %}
                        {{ reservation.annonceEvent.departurePoint }} → {{ reservation.annonceEvent.arrivalPoint }}
                    {% else %}
                        Réservation #{{ reservation.id }}
                    {% endif %}
                </h1>
                <p class=\"text-gray-600\">
                    Votre conversation avec 
                    {% if otherUser %}
                        {{ otherUser.prenom }} {{ otherUser.nom }}
                    {% else %}
                        l'autre utilisateur
                    {% endif %}
                </p>
            </div>
            {% if app.user.roleCode == 'CONDUCTEUR' %}
                <a href=\"{{ path('app_conducteur_reservations') }}\" class=\"inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour à mes réservations
                </a>
            {% else %}
                <a href=\"{{ path('app_passager_mes_reservations') }}\" class=\"inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Retour à mes réservations
                </a>
            {% endif %}
        </div>

        <div class=\"bg-gray-100 rounded-xl p-4 message-container\" id=\"message-container\">
            {% if messages is empty %}
                <div class=\"text-center py-8\" id=\"empty-message\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-10 w-10 mx-auto text-gray-400\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z\" />
                    </svg>
                    <p class=\"mt-3 text-gray-600\">Aucun message dans cette conversation</p>
                    <p class=\"text-gray-500\">Envoyez un message pour commencer à discuter</p>
                </div>
            {% else %}
                <div id=\"messages-list\">
                    {% for message in messages %}
                        <div class=\"message-item\">
                            <div class=\"message-bubble {% if message.senderId == app.user.id %}mine{% else %}other{% endif %}\">
                                <div class=\"message-content\">
                                    {{ message.content|nl2br }}
                                </div>
                                <div class=\"message-time\">
                                    {{ message.createdAt|date('H:i') }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% endif %}
        </div>

        <div class=\"mt-4\">
            <form id=\"message-form\" action=\"{{ path('app_chat_send', {'reservationId': reservation.id, 'type': type}) }}\" method=\"post\">
                <div class=\"flex\">
                    <textarea 
                        name=\"message\" 
                        id=\"message-input\"
                        rows=\"3\" 
                        class=\"flex-grow px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-primary resize-none\"
                        placeholder=\"Écrivez votre message...\"></textarea>
                    <button 
                        type=\"submit\" 
                        class=\"px-6 bg-primary text-white rounded-r-lg hover:bg-primary-dark transition-colors duration-300 flex items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 19l9 2-9-18-9 18 9-2zm0 0v-8\" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Variables globales
            const container = document.getElementById('message-container');
            let messagesList = document.getElementById('messages-list');
            const emptyMessage = document.getElementById('empty-message');
            const messageForm = document.getElementById('message-form');
            const messageInput = document.getElementById('message-input');
            const reservationId = {{ reservation.id }};
            const reservationType = \"{{ type }}\";
            const currentUserId = {{ app.user.id }};
            let lastMessageId = 0;
            
            // Créer le conteneur de messages s'il n'existe pas encore
            if (!messagesList) {
                messagesList = document.createElement('div');
                messagesList.id = 'messages-list';
                container.appendChild(messagesList);
                
                // Si des messages sont déjà affichés, masquer le message \"Aucun message\"
                if (document.querySelectorAll('.message-item').length > 0) {
                    if (emptyMessage) {
                        emptyMessage.style.display = 'none';
                    }
                }
            }
            
            // Initialiser le dernier ID de message
            const allMessages = document.querySelectorAll('.message-item');
            if (allMessages.length > 0) {
                // On suppose que les messages sont affichés par ordre chronologique
                // et que le dernier message affiché a l'ID le plus élevé
                lastMessageId = allMessages.length;
            }
            
            // Auto-scroll to bottom of messages
            container.scrollTop = container.scrollHeight;
            
            // Auto-focus on textarea
            messageInput.focus();
            
            // Envoyer un message via AJAX
            messageForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const message = messageInput.value.trim();
                if (!message) return;
                
                // Ajouter le message visuellement immédiatement
                addMessage({
                    content: message,
                    senderId: currentUserId,
                    createdAt: new Date()
                });
                
                // Vider le champ de saisie
                messageInput.value = '';
                
                // Envoyer le message au serveur
                fetch(messageForm.action, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: 'message=' + encodeURIComponent(message)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log('Message envoyé avec succès');
                    } else {
                        console.error('Erreur lors de l\\'envoi du message');
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                });
            });
            
            // Vérifier les nouveaux messages toutes les 3 secondes
            setInterval(fetchNewMessages, 3000);
            
            function fetchNewMessages() {
                fetch(`/chat/get-new-messages/\${reservationId}/\${reservationType}/\${lastMessageId}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.messages && data.messages.length > 0) {
                        // Masquer le message \"Aucun message\" si nécessaire
                        if (emptyMessage) {
                            emptyMessage.style.display = 'none';
                        }
                        
                        // Ajouter les nouveaux messages
                        data.messages.forEach(message => {
                            addMessage(message);
                            console.log('Nouveau message ajouté:', message);
                        });
                        
                        // Mettre à jour l'ID du dernier message
                        if (data.messages.length > 0) {
                            lastMessageId = data.messages[data.messages.length - 1].id;
                        }
                    }
                })
                .catch(error => {
                    console.error('Erreur lors de la récupération des nouveaux messages:', error);
                });
            }
            
            function addMessage(message) {
                console.log('Ajout du message:', message);
                
                // Masquer le message \"Aucun message\" si nécessaire
                if (emptyMessage) {
                    emptyMessage.style.display = 'none';
                }
                
                // Créer les éléments HTML pour le message
                const messageItem = document.createElement('div');
                messageItem.className = 'message-item';
                
                const messageBubble = document.createElement('div');
                messageBubble.className = `message-bubble \${message.senderId == currentUserId ? 'mine' : 'other'}`;
                
                const messageContent = document.createElement('div');
                messageContent.className = 'message-content';
                messageContent.innerHTML = message.content.replace(/\\n/g, '<br>');
                
                const messageTime = document.createElement('div');
                messageTime.className = 'message-time';
                const time = new Date(message.createdAt);
                messageTime.textContent = `\${time.getHours()}:\${time.getMinutes().toString().padStart(2, '0')}`;
                
                // Assembler les éléments
                messageBubble.appendChild(messageContent);
                messageBubble.appendChild(messageTime);
                messageItem.appendChild(messageBubble);
                
                // Ajouter le message à la liste
                messagesList.appendChild(messageItem);
                
                // Scroller en bas
                container.scrollTop = container.scrollHeight;
            }
        });
    </script>
{% endblock %} ", "chat/conversation.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\chat\\conversation.html.twig");
    }
}
