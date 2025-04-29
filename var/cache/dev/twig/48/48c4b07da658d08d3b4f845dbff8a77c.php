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

/* user/change_password.html.twig */
class __TwigTemplate_54b8f00fe1cfd803c70b03b734ca5a43 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/change_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/change_password.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/change_password.html.twig", 1);
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

        yield "Change Password";
        
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
        <div class=\"max-w-md mx-auto\">
            <h1 class=\"text-3xl font-bold mb-8\">Change Your Password</h1>
            
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
                <form method=\"post\" id=\"passwordForm\">
                    <div class=\"mb-6\">
                        <label for=\"current_password\" class=\"block text-gray-700 font-semibold mb-2\">Current Password <span class=\"text-red-500\">*</span></label>
                        <input type=\"password\" id=\"current_password\" name=\"current_password\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\" required>
                        <div class=\"text-red-500 text-sm mt-1 hidden\" id=\"current_password-error\">Le mot de passe actuel est obligatoire</div>
                    </div>
                    
                    <div class=\"mb-6\">
                        <label for=\"new_password\" class=\"block text-gray-700 font-semibold mb-2\">New Password <span class=\"text-red-500\">*</span></label>
                        <input type=\"password\" id=\"new_password\" name=\"new_password\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\" required>
                        <div class=\"text-red-500 text-sm mt-1 hidden\" id=\"new_password-error\">Le nouveau mot de passe est obligatoire</div>
                        <div class=\"text-gray-600 text-xs mt-1\">
                            Le mot de passe doit contenir au moins 8 caractères, incluant lettres, chiffres et caractères spéciaux.
                        </div>
                        <div class=\"mt-2\">
                            <div class=\"flex items-center\">
                                <div id=\"passwordStrengthBar\" class=\"h-2 flex-grow rounded-full bg-gray-200 overflow-hidden\">
                                    <div id=\"passwordStrengthIndicator\" class=\"h-full bg-red-500 transition-all duration-300\" style=\"width: 0%\"></div>
                                </div>
                                <span id=\"passwordStrengthText\" class=\"ml-2 text-xs text-gray-500\">Faible</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mb-6\">
                        <label for=\"confirm_password\" class=\"block text-gray-700 font-semibold mb-2\">Confirm New Password <span class=\"text-red-500\">*</span></label>
                        <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\" required>
                        <div class=\"text-red-500 text-sm mt-1 hidden\" id=\"confirm_password-error\">La confirmation du mot de passe est obligatoire</div>
                    </div>
                    
                    <div class=\"flex justify-between mt-8\">
                        <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\" class=\"px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300\">Cancel</a>
                        <button type=\"submit\" class=\"px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark\">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('passwordForm');
            const currentPasswordField = document.getElementById('current_password');
            const newPasswordField = document.getElementById('new_password');
            const confirmPasswordField = document.getElementById('confirm_password');
            const passwordStrengthIndicator = document.getElementById('passwordStrengthIndicator');
            const passwordStrengthText = document.getElementById('passwordStrengthText');
            
            // Évaluer la force du mot de passe
            newPasswordField.addEventListener('input', function() {
                const password = this.value;
                let strength = 0;
                let feedbackText = 'Faible';
                let color = 'bg-red-500';
                
                // Longueur minimale
                if (password.length >= 8) {
                    strength += 20;
                }
                
                // Lettres majuscules
                if (/[A-Z]/.test(password)) {
                    strength += 20;
                }
                
                // Lettres minuscules
                if (/[a-z]/.test(password)) {
                    strength += 20;
                }
                
                // Chiffres
                if (/\\d/.test(password)) {
                    strength += 20;
                }
                
                // Caractères spéciaux
                if (/[^a-zA-Z0-9]/.test(password)) {
                    strength += 20;
                }
                
                // Déterminer le texte et la couleur en fonction de la force
                if (strength >= 80) {
                    feedbackText = 'Fort';
                    color = 'bg-green-500';
                } else if (strength >= 40) {
                    feedbackText = 'Moyen';
                    color = 'bg-yellow-500';
                }
                
                // Mettre à jour la barre de progression
                passwordStrengthIndicator.style.width = strength + '%';
                passwordStrengthIndicator.className = `h-full transition-all duration-300 \${color}`;
                passwordStrengthText.textContent = feedbackText;
            });
            
            // Validation lors de la soumission du formulaire
            form.addEventListener('submit', function(e) {
                let isValid = true;
                
                // Vérifier le mot de passe actuel
                if (!validateField(currentPasswordField)) {
                    isValid = false;
                }
                
                // Vérifier le nouveau mot de passe
                if (!validateNewPassword(newPasswordField)) {
                    isValid = false;
                }
                
                // Vérifier la confirmation du mot de passe
                if (!validateConfirmPassword(confirmPasswordField, newPasswordField)) {
                    isValid = false;
                }
                
                // Vérifier que le nouveau mot de passe est différent de l'ancien
                if (currentPasswordField.value === newPasswordField.value && currentPasswordField.value !== '') {
                    const errorElement = document.getElementById('new_password-error');
                    errorElement.textContent = \"Le nouveau mot de passe doit être différent de l'ancien\";
                    errorElement.classList.remove('hidden');
                    newPasswordField.classList.add('border-red-500');
                    isValid = false;
                }
                
                if (!isValid) {
                    e.preventDefault();
                    // Faire défiler jusqu'au premier champ invalide
                    const firstInvalid = form.querySelector('input.border-red-500');
                    if (firstInvalid) {
                        firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        firstInvalid.focus();
                    }
                }
            });
            
            // Validation des champs à la perte de focus
            currentPasswordField.addEventListener('blur', function() {
                validateField(this);
            });
            
            newPasswordField.addEventListener('blur', function() {
                validateNewPassword(this);
            });
            
            confirmPasswordField.addEventListener('blur', function() {
                validateConfirmPassword(this, newPasswordField);
            });
            
            // Réinitialiser les erreurs lors de la saisie
            const allFields = [currentPasswordField, newPasswordField, confirmPasswordField];
            allFields.forEach(field => {
                field.addEventListener('input', function() {
                    const errorElement = document.getElementById(this.id + '-error');
                    if (errorElement) {
                        errorElement.classList.add('hidden');
                        this.classList.remove('border-red-500');
                    }
                });
            });
            
            // Fonction de validation de base pour un champ
            function validateField(field) {
                const errorElement = document.getElementById(field.id + '-error');
                
                if (!field.value.trim()) {
                    errorElement.classList.remove('hidden');
                    field.classList.add('border-red-500');
                    return false;
                } else {
                    errorElement.classList.add('hidden');
                    field.classList.remove('border-red-500');
                    return true;
                }
            }
            
            // Fonction de validation pour le nouveau mot de passe
            function validateNewPassword(field) {
                const errorElement = document.getElementById(field.id + '-error');
                
                if (!field.value.trim()) {
                    errorElement.textContent = 'Le nouveau mot de passe est obligatoire';
                    errorElement.classList.remove('hidden');
                    field.classList.add('border-red-500');
                    return false;
                }
                
                // Vérifier la longueur minimale
                if (field.value.length < 8) {
                    errorElement.textContent = 'Le mot de passe doit contenir au moins 8 caractères';
                    errorElement.classList.remove('hidden');
                    field.classList.add('border-red-500');
                    return false;
                }
                
                // Vérifier la complexité
                const hasLetter = /[a-zA-Z]/.test(field.value);
                const hasNumber = /\\d/.test(field.value);
                const hasSpecialChar = /[^a-zA-Z\\d]/.test(field.value);
                
                if (!hasLetter || !hasNumber || !hasSpecialChar) {
                    errorElement.textContent = 'Le mot de passe doit contenir au moins une lettre, un chiffre et un caractère spécial';
                    errorElement.classList.remove('hidden');
                    field.classList.add('border-red-500');
                    return false;
                }
                
                errorElement.classList.add('hidden');
                field.classList.remove('border-red-500');
                return true;
            }
            
            // Fonction de validation pour la confirmation du mot de passe
            function validateConfirmPassword(field, newPasswordField) {
                const errorElement = document.getElementById(field.id + '-error');
                
                if (!field.value.trim()) {
                    errorElement.textContent = 'La confirmation du mot de passe est obligatoire';
                    errorElement.classList.remove('hidden');
                    field.classList.add('border-red-500');
                    return false;
                }
                
                // Vérifier que les mots de passe correspondent
                if (field.value !== newPasswordField.value) {
                    errorElement.textContent = 'Les mots de passe ne correspondent pas';
                    errorElement.classList.remove('hidden');
                    field.classList.add('border-red-500');
                    return false;
                }
                
                errorElement.classList.add('hidden');
                field.classList.remove('border-red-500');
                return true;
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
        return "user/change_password.html.twig";
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
        return array (  176 => 54,  141 => 21,  132 => 18,  129 => 17,  125 => 16,  122 => 15,  113 => 12,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Change Password{% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"max-w-md mx-auto\">
            <h1 class=\"text-3xl font-bold mb-8\">Change Your Password</h1>
            
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
                <form method=\"post\" id=\"passwordForm\">
                    <div class=\"mb-6\">
                        <label for=\"current_password\" class=\"block text-gray-700 font-semibold mb-2\">Current Password <span class=\"text-red-500\">*</span></label>
                        <input type=\"password\" id=\"current_password\" name=\"current_password\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\" required>
                        <div class=\"text-red-500 text-sm mt-1 hidden\" id=\"current_password-error\">Le mot de passe actuel est obligatoire</div>
                    </div>
                    
                    <div class=\"mb-6\">
                        <label for=\"new_password\" class=\"block text-gray-700 font-semibold mb-2\">New Password <span class=\"text-red-500\">*</span></label>
                        <input type=\"password\" id=\"new_password\" name=\"new_password\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\" required>
                        <div class=\"text-red-500 text-sm mt-1 hidden\" id=\"new_password-error\">Le nouveau mot de passe est obligatoire</div>
                        <div class=\"text-gray-600 text-xs mt-1\">
                            Le mot de passe doit contenir au moins 8 caractères, incluant lettres, chiffres et caractères spéciaux.
                        </div>
                        <div class=\"mt-2\">
                            <div class=\"flex items-center\">
                                <div id=\"passwordStrengthBar\" class=\"h-2 flex-grow rounded-full bg-gray-200 overflow-hidden\">
                                    <div id=\"passwordStrengthIndicator\" class=\"h-full bg-red-500 transition-all duration-300\" style=\"width: 0%\"></div>
                                </div>
                                <span id=\"passwordStrengthText\" class=\"ml-2 text-xs text-gray-500\">Faible</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mb-6\">
                        <label for=\"confirm_password\" class=\"block text-gray-700 font-semibold mb-2\">Confirm New Password <span class=\"text-red-500\">*</span></label>
                        <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\" required>
                        <div class=\"text-red-500 text-sm mt-1 hidden\" id=\"confirm_password-error\">La confirmation du mot de passe est obligatoire</div>
                    </div>
                    
                    <div class=\"flex justify-between mt-8\">
                        <a href=\"{{ path('app_user_profile') }}\" class=\"px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300\">Cancel</a>
                        <button type=\"submit\" class=\"px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark\">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('passwordForm');
            const currentPasswordField = document.getElementById('current_password');
            const newPasswordField = document.getElementById('new_password');
            const confirmPasswordField = document.getElementById('confirm_password');
            const passwordStrengthIndicator = document.getElementById('passwordStrengthIndicator');
            const passwordStrengthText = document.getElementById('passwordStrengthText');
            
            // Évaluer la force du mot de passe
            newPasswordField.addEventListener('input', function() {
                const password = this.value;
                let strength = 0;
                let feedbackText = 'Faible';
                let color = 'bg-red-500';
                
                // Longueur minimale
                if (password.length >= 8) {
                    strength += 20;
                }
                
                // Lettres majuscules
                if (/[A-Z]/.test(password)) {
                    strength += 20;
                }
                
                // Lettres minuscules
                if (/[a-z]/.test(password)) {
                    strength += 20;
                }
                
                // Chiffres
                if (/\\d/.test(password)) {
                    strength += 20;
                }
                
                // Caractères spéciaux
                if (/[^a-zA-Z0-9]/.test(password)) {
                    strength += 20;
                }
                
                // Déterminer le texte et la couleur en fonction de la force
                if (strength >= 80) {
                    feedbackText = 'Fort';
                    color = 'bg-green-500';
                } else if (strength >= 40) {
                    feedbackText = 'Moyen';
                    color = 'bg-yellow-500';
                }
                
                // Mettre à jour la barre de progression
                passwordStrengthIndicator.style.width = strength + '%';
                passwordStrengthIndicator.className = `h-full transition-all duration-300 \${color}`;
                passwordStrengthText.textContent = feedbackText;
            });
            
            // Validation lors de la soumission du formulaire
            form.addEventListener('submit', function(e) {
                let isValid = true;
                
                // Vérifier le mot de passe actuel
                if (!validateField(currentPasswordField)) {
                    isValid = false;
                }
                
                // Vérifier le nouveau mot de passe
                if (!validateNewPassword(newPasswordField)) {
                    isValid = false;
                }
                
                // Vérifier la confirmation du mot de passe
                if (!validateConfirmPassword(confirmPasswordField, newPasswordField)) {
                    isValid = false;
                }
                
                // Vérifier que le nouveau mot de passe est différent de l'ancien
                if (currentPasswordField.value === newPasswordField.value && currentPasswordField.value !== '') {
                    const errorElement = document.getElementById('new_password-error');
                    errorElement.textContent = \"Le nouveau mot de passe doit être différent de l'ancien\";
                    errorElement.classList.remove('hidden');
                    newPasswordField.classList.add('border-red-500');
                    isValid = false;
                }
                
                if (!isValid) {
                    e.preventDefault();
                    // Faire défiler jusqu'au premier champ invalide
                    const firstInvalid = form.querySelector('input.border-red-500');
                    if (firstInvalid) {
                        firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        firstInvalid.focus();
                    }
                }
            });
            
            // Validation des champs à la perte de focus
            currentPasswordField.addEventListener('blur', function() {
                validateField(this);
            });
            
            newPasswordField.addEventListener('blur', function() {
                validateNewPassword(this);
            });
            
            confirmPasswordField.addEventListener('blur', function() {
                validateConfirmPassword(this, newPasswordField);
            });
            
            // Réinitialiser les erreurs lors de la saisie
            const allFields = [currentPasswordField, newPasswordField, confirmPasswordField];
            allFields.forEach(field => {
                field.addEventListener('input', function() {
                    const errorElement = document.getElementById(this.id + '-error');
                    if (errorElement) {
                        errorElement.classList.add('hidden');
                        this.classList.remove('border-red-500');
                    }
                });
            });
            
            // Fonction de validation de base pour un champ
            function validateField(field) {
                const errorElement = document.getElementById(field.id + '-error');
                
                if (!field.value.trim()) {
                    errorElement.classList.remove('hidden');
                    field.classList.add('border-red-500');
                    return false;
                } else {
                    errorElement.classList.add('hidden');
                    field.classList.remove('border-red-500');
                    return true;
                }
            }
            
            // Fonction de validation pour le nouveau mot de passe
            function validateNewPassword(field) {
                const errorElement = document.getElementById(field.id + '-error');
                
                if (!field.value.trim()) {
                    errorElement.textContent = 'Le nouveau mot de passe est obligatoire';
                    errorElement.classList.remove('hidden');
                    field.classList.add('border-red-500');
                    return false;
                }
                
                // Vérifier la longueur minimale
                if (field.value.length < 8) {
                    errorElement.textContent = 'Le mot de passe doit contenir au moins 8 caractères';
                    errorElement.classList.remove('hidden');
                    field.classList.add('border-red-500');
                    return false;
                }
                
                // Vérifier la complexité
                const hasLetter = /[a-zA-Z]/.test(field.value);
                const hasNumber = /\\d/.test(field.value);
                const hasSpecialChar = /[^a-zA-Z\\d]/.test(field.value);
                
                if (!hasLetter || !hasNumber || !hasSpecialChar) {
                    errorElement.textContent = 'Le mot de passe doit contenir au moins une lettre, un chiffre et un caractère spécial';
                    errorElement.classList.remove('hidden');
                    field.classList.add('border-red-500');
                    return false;
                }
                
                errorElement.classList.add('hidden');
                field.classList.remove('border-red-500');
                return true;
            }
            
            // Fonction de validation pour la confirmation du mot de passe
            function validateConfirmPassword(field, newPasswordField) {
                const errorElement = document.getElementById(field.id + '-error');
                
                if (!field.value.trim()) {
                    errorElement.textContent = 'La confirmation du mot de passe est obligatoire';
                    errorElement.classList.remove('hidden');
                    field.classList.add('border-red-500');
                    return false;
                }
                
                // Vérifier que les mots de passe correspondent
                if (field.value !== newPasswordField.value) {
                    errorElement.textContent = 'Les mots de passe ne correspondent pas';
                    errorElement.classList.remove('hidden');
                    field.classList.add('border-red-500');
                    return false;
                }
                
                errorElement.classList.add('hidden');
                field.classList.remove('border-red-500');
                return true;
            }
        });
    </script>
{% endblock %} ", "user/change_password.html.twig", "D:\\Covoituni_web-master\\templates\\user\\change_password.html.twig");
    }
}
