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

/* user/edit_profile.html.twig */
class __TwigTemplate_f58c3a9158ded526570ed37dba8b9122 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit_profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit_profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/edit_profile.html.twig", 1);
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

        yield "Edit Profile";
        
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
        yield "    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"max-w-2xl mx-auto\">
            <h1 class=\"text-3xl font-bold mb-8\">Edit Your Profile</h1>
            
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["error"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 11
            yield "                <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4\" role=\"alert\">
                    ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashError"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashError'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "            
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["flashSuccess"]) {
            // line 17
            yield "                <div class=\"bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4\" role=\"alert\">
                    ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashSuccess"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashSuccess'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "            
            <div class=\"bg-white shadow-md rounded-lg p-8\">
                <form method=\"post\" enctype=\"multipart/form-data\" id=\"profileForm\">
                    <div class=\"mb-6\">
                        <label for=\"username\" class=\"block text-gray-700 font-semibold mb-2\">Username <span class=\"text-red-500\">*</span></label>
                        <input type=\"text\" id=\"username\" name=\"username\" value=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "username", [], "any", false, false, false, 26), "html", null, true);
        yield "\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\" required>
                        <div class=\"text-red-500 text-sm mt-1 hidden\" id=\"username-error\">Le nom d'utilisateur ne peut pas être vide</div>
                    </div>
                    
                    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 mb-6\">
                        <div>
                            <label for=\"prenom\" class=\"block text-gray-700 font-semibold mb-2\">First Name <span class=\"text-red-500\">*</span></label>
                            <input type=\"text\" id=\"prenom\" name=\"prenom\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), "html", null, true);
        yield "\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\" required>
                            <div class=\"text-red-500 text-sm mt-1 hidden\" id=\"prenom-error\">Le prénom ne peut pas être vide</div>
                        </div>
                        
                        <div>
                            <label for=\"nom\" class=\"block text-gray-700 font-semibold mb-2\">Last Name <span class=\"text-red-500\">*</span></label>
                            <input type=\"text\" id=\"nom\" name=\"nom\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), "html", null, true);
        yield "\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\" required>
                            <div class=\"text-red-500 text-sm mt-1 hidden\" id=\"nom-error\">Le nom ne peut pas être vide</div>
                        </div>
                    </div>
                    
                    <div class=\"mb-6\">
                        <label for=\"email\" class=\"block text-gray-700 font-semibold mb-2\">Email <span class=\"text-red-500\">*</span></label>
                        <input type=\"email\" id=\"email\" name=\"email\" value=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), "html", null, true);
        yield "\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\" required>
                        <div class=\"text-red-500 text-sm mt-1 hidden\" id=\"email-error\">L'email ne peut pas être vide</div>
                    </div>
                    
                    <div class=\"mb-6\">
                        <label for=\"tel\" class=\"block text-gray-700 font-semibold mb-2\">Phone Number <span class=\"text-red-500\">*</span></label>
                        <input type=\"tel\" id=\"tel\" name=\"tel\" value=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "tel", [], "any", false, false, false, 52), "html", null, true);
        yield "\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\" required>
                        <div class=\"text-red-500 text-sm mt-1 hidden\" id=\"tel-error\">Le numéro de téléphone ne peut pas être vide</div>
                    </div>
                    
                    <div class=\"mb-6\">
                        <label for=\"profileImage\" class=\"block text-gray-700 font-semibold mb-2\">Profile Picture</label>
                        <div class=\"flex items-center\">
                            ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "imagePath", [], "any", false, false, false, 59)) {
            // line 60
            yield "                                <div class=\"mr-4\">
                                    <img src=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "imagePath", [], "any", false, false, false, 61)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "username", [], "any", false, false, false, 61), "html", null, true);
            yield "\" class=\"w-16 h-16 rounded-full object-cover\">
                                </div>
                            ";
        }
        // line 64
        yield "                            <input type=\"file\" id=\"profileImage\" name=\"profileImage\" class=\"w-full\" accept=\"image/jpeg, image/png, image/gif, image/webp\">
                            <div class=\"text-red-500 text-sm mt-1 hidden\" id=\"profileImage-error\">Format d'image non valide. Utiliser JPG, PNG, GIF ou WEBP (max 2Mo)</div>
                        </div>
                    </div>
                    
                    <div class=\"flex justify-between mt-8\">
                        <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\" class=\"px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300\">Cancel</a>
                        <button type=\"submit\" class=\"px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark\">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('profileForm');
            const requiredFields = form.querySelectorAll('input[required]');
            
            // Vérifier les champs lors de la perte de focus
            requiredFields.forEach(function(field) {
                field.addEventListener('blur', function() {
                    validateField(this);
                });
                
                // Réinitialiser le message d'erreur lors de la saisie
                field.addEventListener('input', function() {
                    const errorElement = document.getElementById(this.id + '-error');
                    if (errorElement) {
                        errorElement.classList.add('hidden');
                        this.classList.remove('border-red-500');
                    }
                });
            });
            
            // Validation lors de la soumission du formulaire
            form.addEventListener('submit', function(e) {
                let isValid = true;
                
                requiredFields.forEach(function(field) {
                    if (!validateField(field)) {
                        isValid = false;
                    }
                });
                
                // Valider l'image de profil si une est sélectionnée
                const profileImage = document.getElementById('profileImage');
                if (profileImage.files.length > 0 && !validateProfileImage(profileImage)) {
                    isValid = false;
                }
                
                if (!isValid) {
                    e.preventDefault(); // Empêcher la soumission si des champs sont invalides
                    
                    // Faire défiler jusqu'au premier champ invalide
                    const firstInvalid = form.querySelector('input.border-red-500');
                    if (firstInvalid) {
                        firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        firstInvalid.focus();
                    }
                }
            });
            
            // Fonction de validation des champs
            function validateField(field) {
                const errorElement = document.getElementById(field.id + '-error');
                
                // Vérifier que le champ n'est pas vide
                if (!field.value.trim()) {
                    if (errorElement) {
                        errorElement.classList.remove('hidden');
                        errorElement.textContent = field.id === 'email' ? \"L'email ne peut pas être vide\" : 
                                                  field.id === 'username' ? \"Le nom d'utilisateur ne peut pas être vide\" : 
                                                  field.id === 'tel' ? \"Le numéro de téléphone ne peut pas être vide\" :
                                                  field.id === 'nom' ? \"Le nom ne peut pas être vide\" :
                                                  field.id === 'prenom' ? \"Le prénom ne peut pas être vide\" : 
                                                  \"Ce champ ne peut pas être vide\";
                    }
                    field.classList.add('border-red-500');
                    return false;
                } 
                
                // Vérifier les limites de longueur
                if (field.id === 'username') {
                    if (field.value.length < 3) {
                        errorElement.textContent = \"Le nom d'utilisateur doit contenir au moins 3 caractères\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                    if (field.value.length > 50) {
                        errorElement.textContent = \"Le nom d'utilisateur ne peut pas dépasser 50 caractères\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                    // Valider le format du nom d'utilisateur
                    if (!/^[a-zA-Z0-9_.-]+\$/.test(field.value)) {
                        errorElement.textContent = \"Le nom d'utilisateur ne peut contenir que des lettres, des chiffres, des points, des tirets et des underscores\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                }
                
                // Vérifier format pour nom et prénom
                if ((field.id === 'nom' || field.id === 'prenom')) {
                    // Vérifier longueur minimale
                    if (field.value.length < 2) {
                        errorElement.textContent = field.id === 'nom' ? 
                            \"Le nom doit contenir au moins 2 caractères\" : 
                            \"Le prénom doit contenir au moins 2 caractères\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                    
                    // Vérifier longueur maximale
                    if (field.value.length > 50) {
                        errorElement.textContent = field.id === 'nom' ? 
                            \"Le nom ne peut pas dépasser 50 caractères\" : 
                            \"Le prénom ne peut pas dépasser 50 caractères\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                    
                    // Vérifier qu'il n'y a pas de chiffres
                    if (/[0-9]/.test(field.value)) {
                        errorElement.textContent = field.id === 'nom' ? 
                            \"Le nom ne peut pas contenir des chiffres\" : 
                            \"Le prénom ne peut pas contenir des chiffres\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                    
                    // Vérifier format complet avec regex
                    if (!/^[a-zA-ZÀ-ÿ\\s'-]+\$/.test(field.value)) {
                        errorElement.textContent = field.id === 'nom' ? 
                            \"Le nom ne peut contenir que des lettres, des espaces, des apostrophes et des tirets\" : 
                            \"Le prénom ne peut contenir que des lettres, des espaces, des apostrophes et des tirets\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                }
                
                // Validation spécifique pour le téléphone
                if (field.id === 'tel') {
                    const phonePattern = /^[2-9]\\d{7}\$/;
                    if (!phonePattern.test(field.value)) {
                        errorElement.textContent = \"Le numéro de téléphone doit être au format tunisien (8 chiffres commençant par 2-9)\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                }
                
                // Validation spécifique pour l'email
                if (field.id === 'email') {
                    const emailPattern = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
                    if (!emailPattern.test(field.value)) {
                        errorElement.textContent = \"Veuillez entrer une adresse email valide\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                    
                    if (field.value.length > 100) {
                        errorElement.textContent = \"L'email ne peut pas dépasser 100 caractères\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                }
                
                // Validation réussie
                if (errorElement) {
                    errorElement.classList.add('hidden');
                }
                field.classList.remove('border-red-500');
                return true;
            }
            
            // Valider le fichier image
            function validateProfileImage(fileInput) {
                if (fileInput.files.length === 0) return true; // Pas de fichier sélectionné, c'est valide (champ facultatif)
                
                const file = fileInput.files[0];
                const errorElement = document.getElementById('profileImage-error');
                
                // Vérifier le type de fichier
                const allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                if (!allowedTypes.includes(file.type)) {
                    errorElement.textContent = \"Format d'image non valide. Formats acceptés: JPG, PNG, GIF, WEBP\";
                    errorElement.classList.remove('hidden');
                    fileInput.classList.add('border-red-500');
                    return false;
                }
                
                // Vérifier la taille du fichier (max 2MB)
                if (file.size > 2 * 1024 * 1024) {
                    errorElement.textContent = \"L'image ne doit pas dépasser 2MB\";
                    errorElement.classList.remove('hidden');
                    fileInput.classList.add('border-red-500');
                    return false;
                }
                
                errorElement.classList.add('hidden');
                fileInput.classList.remove('border-red-500');
                return true;
            }
            
            // Ajouter validation pour l'image au changement
            const profileImageInput = document.getElementById('profileImage');
            if (profileImageInput) {
                profileImageInput.addEventListener('change', function() {
                    validateProfileImage(this);
                });
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
        return "user/edit_profile.html.twig";
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
        return array (  217 => 70,  209 => 64,  201 => 61,  198 => 60,  196 => 59,  186 => 52,  177 => 46,  167 => 39,  158 => 33,  148 => 26,  141 => 21,  132 => 18,  129 => 17,  125 => 16,  122 => 15,  113 => 12,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Profile{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"max-w-2xl mx-auto\">
            <h1 class=\"text-3xl font-bold mb-8\">Edit Your Profile</h1>
            
            {% for flashError in app.flashes('error') %}
                <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4\" role=\"alert\">
                    {{ flashError }}
                </div>
            {% endfor %}
            
            {% for flashSuccess in app.flashes('success') %}
                <div class=\"bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4\" role=\"alert\">
                    {{ flashSuccess }}
                </div>
            {% endfor %}
            
            <div class=\"bg-white shadow-md rounded-lg p-8\">
                <form method=\"post\" enctype=\"multipart/form-data\" id=\"profileForm\">
                    <div class=\"mb-6\">
                        <label for=\"username\" class=\"block text-gray-700 font-semibold mb-2\">Username <span class=\"text-red-500\">*</span></label>
                        <input type=\"text\" id=\"username\" name=\"username\" value=\"{{ user.username }}\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\" required>
                        <div class=\"text-red-500 text-sm mt-1 hidden\" id=\"username-error\">Le nom d'utilisateur ne peut pas être vide</div>
                    </div>
                    
                    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 mb-6\">
                        <div>
                            <label for=\"prenom\" class=\"block text-gray-700 font-semibold mb-2\">First Name <span class=\"text-red-500\">*</span></label>
                            <input type=\"text\" id=\"prenom\" name=\"prenom\" value=\"{{ user.prenom }}\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\" required>
                            <div class=\"text-red-500 text-sm mt-1 hidden\" id=\"prenom-error\">Le prénom ne peut pas être vide</div>
                        </div>
                        
                        <div>
                            <label for=\"nom\" class=\"block text-gray-700 font-semibold mb-2\">Last Name <span class=\"text-red-500\">*</span></label>
                            <input type=\"text\" id=\"nom\" name=\"nom\" value=\"{{ user.nom }}\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\" required>
                            <div class=\"text-red-500 text-sm mt-1 hidden\" id=\"nom-error\">Le nom ne peut pas être vide</div>
                        </div>
                    </div>
                    
                    <div class=\"mb-6\">
                        <label for=\"email\" class=\"block text-gray-700 font-semibold mb-2\">Email <span class=\"text-red-500\">*</span></label>
                        <input type=\"email\" id=\"email\" name=\"email\" value=\"{{ user.email }}\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\" required>
                        <div class=\"text-red-500 text-sm mt-1 hidden\" id=\"email-error\">L'email ne peut pas être vide</div>
                    </div>
                    
                    <div class=\"mb-6\">
                        <label for=\"tel\" class=\"block text-gray-700 font-semibold mb-2\">Phone Number <span class=\"text-red-500\">*</span></label>
                        <input type=\"tel\" id=\"tel\" name=\"tel\" value=\"{{ user.tel }}\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\" required>
                        <div class=\"text-red-500 text-sm mt-1 hidden\" id=\"tel-error\">Le numéro de téléphone ne peut pas être vide</div>
                    </div>
                    
                    <div class=\"mb-6\">
                        <label for=\"profileImage\" class=\"block text-gray-700 font-semibold mb-2\">Profile Picture</label>
                        <div class=\"flex items-center\">
                            {% if user.imagePath %}
                                <div class=\"mr-4\">
                                    <img src=\"{{ asset(user.imagePath) }}\" alt=\"{{ user.username }}\" class=\"w-16 h-16 rounded-full object-cover\">
                                </div>
                            {% endif %}
                            <input type=\"file\" id=\"profileImage\" name=\"profileImage\" class=\"w-full\" accept=\"image/jpeg, image/png, image/gif, image/webp\">
                            <div class=\"text-red-500 text-sm mt-1 hidden\" id=\"profileImage-error\">Format d'image non valide. Utiliser JPG, PNG, GIF ou WEBP (max 2Mo)</div>
                        </div>
                    </div>
                    
                    <div class=\"flex justify-between mt-8\">
                        <a href=\"{{ path('app_user_profile') }}\" class=\"px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300\">Cancel</a>
                        <button type=\"submit\" class=\"px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark\">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('profileForm');
            const requiredFields = form.querySelectorAll('input[required]');
            
            // Vérifier les champs lors de la perte de focus
            requiredFields.forEach(function(field) {
                field.addEventListener('blur', function() {
                    validateField(this);
                });
                
                // Réinitialiser le message d'erreur lors de la saisie
                field.addEventListener('input', function() {
                    const errorElement = document.getElementById(this.id + '-error');
                    if (errorElement) {
                        errorElement.classList.add('hidden');
                        this.classList.remove('border-red-500');
                    }
                });
            });
            
            // Validation lors de la soumission du formulaire
            form.addEventListener('submit', function(e) {
                let isValid = true;
                
                requiredFields.forEach(function(field) {
                    if (!validateField(field)) {
                        isValid = false;
                    }
                });
                
                // Valider l'image de profil si une est sélectionnée
                const profileImage = document.getElementById('profileImage');
                if (profileImage.files.length > 0 && !validateProfileImage(profileImage)) {
                    isValid = false;
                }
                
                if (!isValid) {
                    e.preventDefault(); // Empêcher la soumission si des champs sont invalides
                    
                    // Faire défiler jusqu'au premier champ invalide
                    const firstInvalid = form.querySelector('input.border-red-500');
                    if (firstInvalid) {
                        firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        firstInvalid.focus();
                    }
                }
            });
            
            // Fonction de validation des champs
            function validateField(field) {
                const errorElement = document.getElementById(field.id + '-error');
                
                // Vérifier que le champ n'est pas vide
                if (!field.value.trim()) {
                    if (errorElement) {
                        errorElement.classList.remove('hidden');
                        errorElement.textContent = field.id === 'email' ? \"L'email ne peut pas être vide\" : 
                                                  field.id === 'username' ? \"Le nom d'utilisateur ne peut pas être vide\" : 
                                                  field.id === 'tel' ? \"Le numéro de téléphone ne peut pas être vide\" :
                                                  field.id === 'nom' ? \"Le nom ne peut pas être vide\" :
                                                  field.id === 'prenom' ? \"Le prénom ne peut pas être vide\" : 
                                                  \"Ce champ ne peut pas être vide\";
                    }
                    field.classList.add('border-red-500');
                    return false;
                } 
                
                // Vérifier les limites de longueur
                if (field.id === 'username') {
                    if (field.value.length < 3) {
                        errorElement.textContent = \"Le nom d'utilisateur doit contenir au moins 3 caractères\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                    if (field.value.length > 50) {
                        errorElement.textContent = \"Le nom d'utilisateur ne peut pas dépasser 50 caractères\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                    // Valider le format du nom d'utilisateur
                    if (!/^[a-zA-Z0-9_.-]+\$/.test(field.value)) {
                        errorElement.textContent = \"Le nom d'utilisateur ne peut contenir que des lettres, des chiffres, des points, des tirets et des underscores\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                }
                
                // Vérifier format pour nom et prénom
                if ((field.id === 'nom' || field.id === 'prenom')) {
                    // Vérifier longueur minimale
                    if (field.value.length < 2) {
                        errorElement.textContent = field.id === 'nom' ? 
                            \"Le nom doit contenir au moins 2 caractères\" : 
                            \"Le prénom doit contenir au moins 2 caractères\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                    
                    // Vérifier longueur maximale
                    if (field.value.length > 50) {
                        errorElement.textContent = field.id === 'nom' ? 
                            \"Le nom ne peut pas dépasser 50 caractères\" : 
                            \"Le prénom ne peut pas dépasser 50 caractères\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                    
                    // Vérifier qu'il n'y a pas de chiffres
                    if (/[0-9]/.test(field.value)) {
                        errorElement.textContent = field.id === 'nom' ? 
                            \"Le nom ne peut pas contenir des chiffres\" : 
                            \"Le prénom ne peut pas contenir des chiffres\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                    
                    // Vérifier format complet avec regex
                    if (!/^[a-zA-ZÀ-ÿ\\s'-]+\$/.test(field.value)) {
                        errorElement.textContent = field.id === 'nom' ? 
                            \"Le nom ne peut contenir que des lettres, des espaces, des apostrophes et des tirets\" : 
                            \"Le prénom ne peut contenir que des lettres, des espaces, des apostrophes et des tirets\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                }
                
                // Validation spécifique pour le téléphone
                if (field.id === 'tel') {
                    const phonePattern = /^[2-9]\\d{7}\$/;
                    if (!phonePattern.test(field.value)) {
                        errorElement.textContent = \"Le numéro de téléphone doit être au format tunisien (8 chiffres commençant par 2-9)\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                }
                
                // Validation spécifique pour l'email
                if (field.id === 'email') {
                    const emailPattern = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
                    if (!emailPattern.test(field.value)) {
                        errorElement.textContent = \"Veuillez entrer une adresse email valide\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                    
                    if (field.value.length > 100) {
                        errorElement.textContent = \"L'email ne peut pas dépasser 100 caractères\";
                        errorElement.classList.remove('hidden');
                        field.classList.add('border-red-500');
                        return false;
                    }
                }
                
                // Validation réussie
                if (errorElement) {
                    errorElement.classList.add('hidden');
                }
                field.classList.remove('border-red-500');
                return true;
            }
            
            // Valider le fichier image
            function validateProfileImage(fileInput) {
                if (fileInput.files.length === 0) return true; // Pas de fichier sélectionné, c'est valide (champ facultatif)
                
                const file = fileInput.files[0];
                const errorElement = document.getElementById('profileImage-error');
                
                // Vérifier le type de fichier
                const allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                if (!allowedTypes.includes(file.type)) {
                    errorElement.textContent = \"Format d'image non valide. Formats acceptés: JPG, PNG, GIF, WEBP\";
                    errorElement.classList.remove('hidden');
                    fileInput.classList.add('border-red-500');
                    return false;
                }
                
                // Vérifier la taille du fichier (max 2MB)
                if (file.size > 2 * 1024 * 1024) {
                    errorElement.textContent = \"L'image ne doit pas dépasser 2MB\";
                    errorElement.classList.remove('hidden');
                    fileInput.classList.add('border-red-500');
                    return false;
                }
                
                errorElement.classList.add('hidden');
                fileInput.classList.remove('border-red-500');
                return true;
            }
            
            // Ajouter validation pour l'image au changement
            const profileImageInput = document.getElementById('profileImage');
            if (profileImageInput) {
                profileImageInput.addEventListener('change', function() {
                    validateProfileImage(this);
                });
            }
        });
    </script>
{% endblock %} ", "user/edit_profile.html.twig", "C:\\Users\\Negza\\Desktop\\Project-PI-SYNFONY\\COPIES-1\\Covoituni_web-main2\\templates\\user\\edit_profile.html.twig");
    }
}
