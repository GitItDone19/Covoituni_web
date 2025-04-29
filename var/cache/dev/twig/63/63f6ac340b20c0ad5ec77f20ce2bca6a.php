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

/* conducteur/ajouter_trajet.html.twig */
class __TwigTemplate_3830307a240e35f3f38c3c17fea9ad5b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/ajouter_trajet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conducteur/ajouter_trajet.html.twig"));

        $this->parent = $this->loadTemplate("layouts/user_layout.html.twig", "conducteur/ajouter_trajet.html.twig", 1);
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

        yield "Ajouter un trajet";
        
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
        yield "    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-gray-800\">Ajouter un trajet</h1>
        <p class=\"text-gray-600\">Créez un nouveau trajet sans annonce</p>
    </div>
    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800 flex items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7\" />
            </svg>
            Détails du trajet
        </h2>
        
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 20
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
                yield "                <div class=\"mb-4 rounded-xl p-4 ";
                if (($context["label"] == "success")) {
                    yield "bg-primary text-white";
                } else {
                    yield "bg-error text-white";
                }
                yield "\">
                    ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "        
        <form action=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conducteur_ajouter_trajet_submit");
        yield "\" method=\"post\" class=\"space-y-6\" id=\"trajetForm\">
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div>
                    <label for=\"titre\" class=\"block text-sm font-medium text-gray-700 mb-1\">Titre du trajet</label>
                    <input type=\"text\" id=\"titre\" name=\"titre\" required maxlength=\"25\"
                           class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                           placeholder=\"Titre descriptif du trajet\">
                    <small class=\"text-gray-500\">Max. 25 caractères, alphabétique et \"-->\" uniquement</small>
                </div>
                
                <div>
                    <label for=\"departure_point\" class=\"block text-sm font-medium text-gray-700 mb-1\">Lieu de départ</label>
                    <select id=\"departure_point\" name=\"departure_point\" required
                            class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                        <option value=\"\">Sélectionnez une ville</option>
                        <option value=\"tunis\">Tunis</option>
                        <option value=\"sfax\">Sfax</option>
                        <option value=\"sousse\">Sousse</option>
                        <option value=\"kairouan\">Kairouan</option>
                        <option value=\"bizerte\">Bizerte</option>
                        <option value=\"gabes\">Gabes</option>
                        <option value=\"ariana\">Ariana</option>
                        <option value=\"gafsa\">Gafsa</option>
                        <option value=\"monastir\">Monastir</option>
                        <option value=\"ben arous\">Ben Arous</option>
                        <option value=\"kasserine\">Kasserine</option>
                        <option value=\"médenine\">Médenine</option>
                        <option value=\"nabeul\">Nabeul</option>
                        <option value=\"tataouine\">Tataouine</option>
                        <option value=\"mahdia\">Mahdia</option>
                        <option value=\"béja\">Béja</option>
                        <option value=\"jendouba\">Jendouba</option>
                        <option value=\"el kef\">El Kef</option>
                        <option value=\"siliana\">Siliana</option>
                        <option value=\"zaghouan\">Zaghouan</option>
                        <option value=\"kebili\">Kebili</option>
                        <option value=\"tozeur\">Tozeur</option>
                        <option value=\"manouba\">Manouba</option>
                        <option value=\"sidi bouzid\">Sidi Bouzid</option>
                        <option value=\"carthage\">Carthage</option>
                        <option value=\"la marsa\">La Marsa</option>
                        <option value=\"hammamet\">Hammamet</option>
                        <option value=\"zarzis\">Zarzis</option>
                        <option value=\"djerba\">Djerba</option>
                        <option value=\"tabarka\">Tabarka</option>
                        <option value=\"rades\">Rades</option>
                        <option value=\"mégrine\">Mégrine</option>
                        <option value=\"la goulette\">La Goulette</option>
                        <option value=\"douar hicher\">Douar Hicher</option>
                        <option value=\"msaken\">Msaken</option>
                        <option value=\"korba\">Korba</option>
                        <option value=\"menzel temime\">Menzel Temime</option>
                    </select>
                    <small class=\"text-gray-500\">Choisissez une ville en Tunisie</small>
                </div>
                
                <div>
                    <label for=\"arrival_point\" class=\"block text-sm font-medium text-gray-700 mb-1\">Destination</label>
                    <select id=\"arrival_point\" name=\"arrival_point\" required
                           class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                        <option value=\"\">Sélectionnez une ville</option>
                        <option value=\"tunis\">Tunis</option>
                        <option value=\"sfax\">Sfax</option>
                        <option value=\"sousse\">Sousse</option>
                        <option value=\"kairouan\">Kairouan</option>
                        <option value=\"bizerte\">Bizerte</option>
                        <option value=\"gabes\">Gabes</option>
                        <option value=\"ariana\">Ariana</option>
                        <option value=\"gafsa\">Gafsa</option>
                        <option value=\"monastir\">Monastir</option>
                        <option value=\"ben arous\">Ben Arous</option>
                        <option value=\"kasserine\">Kasserine</option>
                        <option value=\"médenine\">Médenine</option>
                        <option value=\"nabeul\">Nabeul</option>
                        <option value=\"tataouine\">Tataouine</option>
                        <option value=\"mahdia\">Mahdia</option>
                        <option value=\"béja\">Béja</option>
                        <option value=\"jendouba\">Jendouba</option>
                        <option value=\"el kef\">El Kef</option>
                        <option value=\"siliana\">Siliana</option>
                        <option value=\"zaghouan\">Zaghouan</option>
                        <option value=\"kebili\">Kebili</option>
                        <option value=\"tozeur\">Tozeur</option>
                        <option value=\"manouba\">Manouba</option>
                        <option value=\"sidi bouzid\">Sidi Bouzid</option>
                        <option value=\"carthage\">Carthage</option>
                        <option value=\"la marsa\">La Marsa</option>
                        <option value=\"hammamet\">Hammamet</option>
                        <option value=\"zarzis\">Zarzis</option>
                        <option value=\"djerba\">Djerba</option>
                        <option value=\"tabarka\">Tabarka</option>
                        <option value=\"rades\">Rades</option>
                        <option value=\"mégrine\">Mégrine</option>
                        <option value=\"la goulette\">La Goulette</option>
                        <option value=\"douar hicher\">Douar Hicher</option>
                        <option value=\"msaken\">Msaken</option>
                        <option value=\"korba\">Korba</option>
                        <option value=\"menzel temime\">Menzel Temime</option>
                    </select>
                    <small class=\"text-gray-500\">Choisissez une ville en Tunisie</small>
                </div>
                
                <div>
                    <label for=\"price\" class=\"block text-sm font-medium text-gray-700 mb-1\">Prix par passager (DT)</label>
                    <div class=\"relative\">
                        <input type=\"number\" id=\"price\" name=\"price\" required min=\"0\" step=\"0.5\"
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                               placeholder=\"15\">
                        <button type=\"button\" id=\"suggestPriceBtn\" class=\"absolute right-3 top-2 text-green-600 hover:text-green-800 text-sm font-medium\">
                            Suggestion IA
                        </button>
                    </div>
                    <div id=\"priceRecommendation\" class=\"mt-2 text-sm text-green-700 hidden\">
                        <div class=\"flex items-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z\" />
                            </svg>
                            <span id=\"recommendationText\">Prix suggéré: <strong>7 DT</strong> (<span id=\"distanceText\">66.7 km</span>)</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"flex justify-end\">
                <button type=\"submit\" id=\"submitButton\"
                        class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                    </svg>
                    Enregistrer le trajet
                </button>
            </div>
        </form>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 163
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

        // line 164
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const departurePoint = document.getElementById('departure_point');
    const arrivalPoint = document.getElementById('arrival_point');
    const trajetForm = document.getElementById('trajetForm');
    const submitButton = document.getElementById('submitButton');
    const titreInput = document.getElementById('titre');
    const priceInput = document.getElementById('price');
    const suggestPriceBtn = document.getElementById('suggestPriceBtn');
    const priceRecommendation = document.getElementById('priceRecommendation');
    const recommendationText = document.getElementById('recommendationText');
    const distanceText = document.getElementById('distanceText');
    
    // Générer automatiquement le titre du trajet au format \"Départ-->Destination\"
    function updateTrajetTitle() {
        const departureValue = departurePoint.value;
        const arrivalValue = arrivalPoint.value;
        
        if (departureValue && arrivalValue) {
            // Capitaliser la première lettre de chaque ville
            const formattedDeparture = departureValue.charAt(0).toUpperCase() + departureValue.slice(1);
            const formattedArrival = arrivalValue.charAt(0).toUpperCase() + arrivalValue.slice(1);
            titreInput.value = `\${formattedDeparture}-->\${formattedArrival}`;
        }
    }
    
    // Vérifier que le point de départ et d'arrivée ne sont pas identiques
    function validateDifferentLocations() {
        const departureValue = departurePoint.value;
        const arrivalValue = arrivalPoint.value;
        
        if (departureValue && arrivalValue && departureValue === arrivalValue) {
            alert(\"Le lieu de départ et la destination ne peuvent pas être identiques\");
            return false;
        }
        
        return true;
    }
    
    // Activer le bouton de soumission si les deux sélections sont valides
    function updateSubmitButtonState() {
        const departureValue = departurePoint.value;
        const arrivalValue = arrivalPoint.value;
        
        if (departureValue && arrivalValue && departureValue !== arrivalValue) {
            submitButton.disabled = false;
            submitButton.classList.remove('opacity-50', 'cursor-not-allowed');
        } else {
            submitButton.disabled = true;
            submitButton.classList.add('opacity-50', 'cursor-not-allowed');
        }
    }
    
    // Récupérer la suggestion de prix depuis l'API
    function getPriceRecommendation() {
        const departureValue = departurePoint.value;
        const arrivalValue = arrivalPoint.value;
        
        if (!departureValue || !arrivalValue || departureValue === arrivalValue) {
            return;
        }
        
        // Afficher un indicateur de chargement
        suggestPriceBtn.innerHTML = '<svg class=\"animate-spin h-4 w-4\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\"><circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle><path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z\"></path></svg>';
        
        // Données prédéfinies pour certaines routes
        const knownRoutes = {
            \"tunis_nabeul\": { price: 7.0, distance: 66.7 },
            \"tunis_sousse\": { price: 15.0, distance: 143.0 },
            \"tunis_sfax\": { price: 25.0, distance: 270.0 },
            \"tunis_kairouan\": { price: 16.0, distance: 156.0 },
            \"tunis_bizerte\": { price: 7.0, distance: 65.0 },
            \"sousse_sfax\": { price: 12.0, distance: 133.0 },
            \"sousse_monastir\": { price: 3.0, distance: 23.0 },
            \"tunis_hammamet\": { price: 6.5, distance: 65.0 },
            \"tunis_djerba\": { price: 50.0, distance: 532.7 }
        };
        
        // Créer une clé de route standardisée
        const from = departureValue.toLowerCase();
        const to = arrivalValue.toLowerCase();
        const routeKey = `\${from}_\${to}`;
        const reverseRouteKey = `\${to}_\${from}`;
        
        // Vérifier d'abord dans notre base de données de routes connues
        if (knownRoutes[routeKey]) {
            useKnownRoute(knownRoutes[routeKey]);
            return;
        } else if (knownRoutes[reverseRouteKey]) {
            useKnownRoute(knownRoutes[reverseRouteKey]);
            return;
        }
        
        // Si la route n'est pas connue, utiliser l'API OpenStreetMap pour calculer la distance
        getDistanceFromOpenStreetMap(from, to);
        
        // Fonction pour utiliser une route connue
        function useKnownRoute(routeData) {
            const recommendedPrice = routeData.price;
            const distance = routeData.distance;
            
            // Afficher la recommandation
            priceRecommendation.classList.remove('hidden');
            recommendationText.innerHTML = `Prix suggéré: <strong>\${recommendedPrice} DT</strong> (<span id=\"distanceText\">\${distance} km</span>)`;
            
            // Mettre à jour automatiquement le prix
            priceInput.value = recommendedPrice;
            
            // Restaurer le bouton
            suggestPriceBtn.textContent = 'Suggestion IA';
        }
        
        // Fonction pour obtenir la distance depuis OpenStreetMap
        function getDistanceFromOpenStreetMap(fromCity, toCity) {
            // Récupérer les coordonnées des villes
            getCoordinates(fromCity)
                .then(fromCoords => {
                    return getCoordinates(toCity)
                        .then(toCoords => {
                            return calculateRoute(fromCoords, toCoords);
                        });
                })
                .then(routeData => {
                    if (routeData) {
                        const distance = routeData.distance;
                        
                        // Calculer le prix recommandé basé sur la distance
                        // Prix par km moyen en Tunisie (0.09-0.1 DT/km)
                        const pricePerKm = 0.09;
                        const basePrice = 2.0; // Prix de base
                        let recommendedPrice = distance * pricePerKm + basePrice;
                        
                        // Réduction de prix pour les longues distances
                        if (distance > 200) {
                            recommendedPrice *= 0.95; // 5% de réduction pour les longues distances
                        }
                        
                        // Arrondir à 0.5 DT près
                        recommendedPrice = Math.round(recommendedPrice * 2) / 2;
                        
                        // S'assurer que le prix n'est pas trop bas
                        if (recommendedPrice < 3) {
                            recommendedPrice = 3;
                        }
                        
                        // Afficher la recommandation
                        priceRecommendation.classList.remove('hidden');
                        recommendationText.innerHTML = `Prix suggéré: <strong>\${recommendedPrice} DT</strong> (<span id=\"distanceText\">\${Math.round(distance * 10) / 10} km</span>)`;
                        
                        // Mettre à jour automatiquement le prix
                        priceInput.value = recommendedPrice;
                    } else {
                        // Fallback en cas d'échec
                        useFallbackPricing();
                    }
                    
                    // Restaurer le bouton
                    suggestPriceBtn.textContent = 'Suggestion IA';
                })
                .catch(error => {
                    console.error('Erreur lors du calcul de la distance:', error);
                    useFallbackPricing();
                    suggestPriceBtn.textContent = 'Suggestion IA';
                });
        }
        
        // Obtenir les coordonnées d'une ville depuis Nominatim (OSM)
        function getCoordinates(city) {
            const query = encodeURIComponent(city + ', Tunisia');
            return fetch(`https://nominatim.openstreetmap.org/search?q=\${query}&format=json&limit=1&countrycodes=tn`)
                .then(response => response.json())
                .then(data => {
                    if (data && data.length > 0) {
                        return { lat: data[0].lat, lon: data[0].lon };
                    }
                    throw new Error('Ville non trouvée');
                });
        }
        
        // Calculer l'itinéraire entre deux points avec OSRM
        function calculateRoute(from, to) {
            const url = `https://router.project-osrm.org/route/v1/driving/\${from.lon},\${from.lat};\${to.lon},\${to.lat}?overview=false`;
            
            return fetch(url)
                .then(response => response.json())
                .then(data => {
                    if (data && data.routes && data.routes.length > 0) {
                        // Distance en mètres, conversion en km
                        const distanceKm = data.routes[0].distance / 1000;
                        return { distance: distanceKm };
                    }
                    throw new Error('Impossible de calculer l\\'itinéraire');
                });
        }
        
        // Prix de secours en cas d'échec de l'API
        function useFallbackPricing() {
            // Estimer une distance approximative en fonction des villes tunisiennes
            const approxDistance = Math.random() * 150 + 50; // Entre 50 et 200 km
            const pricePerKm = 0.09;
            const basePrice = 2.0;
            let recommendedPrice = Math.round((approxDistance * pricePerKm + basePrice) * 2) / 2;
            
            // Afficher la recommandation
            priceRecommendation.classList.remove('hidden');
            recommendationText.innerHTML = `Prix suggéré: <strong>\${recommendedPrice} DT</strong> (<span id=\"distanceText\">~\${Math.round(approxDistance)} km (estimation)</span>)`;
            
            // Mettre à jour automatiquement le prix
            priceInput.value = recommendedPrice;
        }
    }
    
    // Ajouter des écouteurs d'événements
    departurePoint.addEventListener('change', function() {
        updateSubmitButtonState();
        updateTrajetTitle();
        priceRecommendation.classList.add('hidden');
    });
    
    arrivalPoint.addEventListener('change', function() {
        updateSubmitButtonState();
        updateTrajetTitle();
        priceRecommendation.classList.add('hidden');
    });
    
    // Écouter le clic sur le bouton de suggestion de prix
    suggestPriceBtn.addEventListener('click', getPriceRecommendation);
    
    // Empêcher la soumission du formulaire si les lieux sont identiques
    trajetForm.addEventListener('submit', function(event) {
        if (!validateDifferentLocations()) {
            event.preventDefault();
        }
    });
    
    // Initialiser l'état du bouton de soumission
    updateSubmitButtonState();
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
        return "conducteur/ajouter_trajet.html.twig";
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
        return array (  311 => 164,  298 => 163,  152 => 27,  149 => 26,  143 => 25,  134 => 22,  125 => 21,  120 => 20,  116 => 19,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/user_layout.html.twig' %}

{% block title %}Ajouter un trajet{% endblock %}

{% block content %}
    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-gray-800\">Ajouter un trajet</h1>
        <p class=\"text-gray-600\">Créez un nouveau trajet sans annonce</p>
    </div>
    
    <div class=\"glass-card bg-white/90 backdrop-blur-sm border border-white/30 rounded-xl shadow-xl p-8\">
        <h2 class=\"text-2xl font-bold mb-6 text-gray-800 flex items-center\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 mr-2 text-primary\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7\" />
            </svg>
            Détails du trajet
        </h2>
        
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"mb-4 rounded-xl p-4 {% if label == 'success' %}bg-primary text-white{% else %}bg-error text-white{% endif %}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
        
        <form action=\"{{ path('app_conducteur_ajouter_trajet_submit') }}\" method=\"post\" class=\"space-y-6\" id=\"trajetForm\">
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div>
                    <label for=\"titre\" class=\"block text-sm font-medium text-gray-700 mb-1\">Titre du trajet</label>
                    <input type=\"text\" id=\"titre\" name=\"titre\" required maxlength=\"25\"
                           class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                           placeholder=\"Titre descriptif du trajet\">
                    <small class=\"text-gray-500\">Max. 25 caractères, alphabétique et \"-->\" uniquement</small>
                </div>
                
                <div>
                    <label for=\"departure_point\" class=\"block text-sm font-medium text-gray-700 mb-1\">Lieu de départ</label>
                    <select id=\"departure_point\" name=\"departure_point\" required
                            class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                        <option value=\"\">Sélectionnez une ville</option>
                        <option value=\"tunis\">Tunis</option>
                        <option value=\"sfax\">Sfax</option>
                        <option value=\"sousse\">Sousse</option>
                        <option value=\"kairouan\">Kairouan</option>
                        <option value=\"bizerte\">Bizerte</option>
                        <option value=\"gabes\">Gabes</option>
                        <option value=\"ariana\">Ariana</option>
                        <option value=\"gafsa\">Gafsa</option>
                        <option value=\"monastir\">Monastir</option>
                        <option value=\"ben arous\">Ben Arous</option>
                        <option value=\"kasserine\">Kasserine</option>
                        <option value=\"médenine\">Médenine</option>
                        <option value=\"nabeul\">Nabeul</option>
                        <option value=\"tataouine\">Tataouine</option>
                        <option value=\"mahdia\">Mahdia</option>
                        <option value=\"béja\">Béja</option>
                        <option value=\"jendouba\">Jendouba</option>
                        <option value=\"el kef\">El Kef</option>
                        <option value=\"siliana\">Siliana</option>
                        <option value=\"zaghouan\">Zaghouan</option>
                        <option value=\"kebili\">Kebili</option>
                        <option value=\"tozeur\">Tozeur</option>
                        <option value=\"manouba\">Manouba</option>
                        <option value=\"sidi bouzid\">Sidi Bouzid</option>
                        <option value=\"carthage\">Carthage</option>
                        <option value=\"la marsa\">La Marsa</option>
                        <option value=\"hammamet\">Hammamet</option>
                        <option value=\"zarzis\">Zarzis</option>
                        <option value=\"djerba\">Djerba</option>
                        <option value=\"tabarka\">Tabarka</option>
                        <option value=\"rades\">Rades</option>
                        <option value=\"mégrine\">Mégrine</option>
                        <option value=\"la goulette\">La Goulette</option>
                        <option value=\"douar hicher\">Douar Hicher</option>
                        <option value=\"msaken\">Msaken</option>
                        <option value=\"korba\">Korba</option>
                        <option value=\"menzel temime\">Menzel Temime</option>
                    </select>
                    <small class=\"text-gray-500\">Choisissez une ville en Tunisie</small>
                </div>
                
                <div>
                    <label for=\"arrival_point\" class=\"block text-sm font-medium text-gray-700 mb-1\">Destination</label>
                    <select id=\"arrival_point\" name=\"arrival_point\" required
                           class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\">
                        <option value=\"\">Sélectionnez une ville</option>
                        <option value=\"tunis\">Tunis</option>
                        <option value=\"sfax\">Sfax</option>
                        <option value=\"sousse\">Sousse</option>
                        <option value=\"kairouan\">Kairouan</option>
                        <option value=\"bizerte\">Bizerte</option>
                        <option value=\"gabes\">Gabes</option>
                        <option value=\"ariana\">Ariana</option>
                        <option value=\"gafsa\">Gafsa</option>
                        <option value=\"monastir\">Monastir</option>
                        <option value=\"ben arous\">Ben Arous</option>
                        <option value=\"kasserine\">Kasserine</option>
                        <option value=\"médenine\">Médenine</option>
                        <option value=\"nabeul\">Nabeul</option>
                        <option value=\"tataouine\">Tataouine</option>
                        <option value=\"mahdia\">Mahdia</option>
                        <option value=\"béja\">Béja</option>
                        <option value=\"jendouba\">Jendouba</option>
                        <option value=\"el kef\">El Kef</option>
                        <option value=\"siliana\">Siliana</option>
                        <option value=\"zaghouan\">Zaghouan</option>
                        <option value=\"kebili\">Kebili</option>
                        <option value=\"tozeur\">Tozeur</option>
                        <option value=\"manouba\">Manouba</option>
                        <option value=\"sidi bouzid\">Sidi Bouzid</option>
                        <option value=\"carthage\">Carthage</option>
                        <option value=\"la marsa\">La Marsa</option>
                        <option value=\"hammamet\">Hammamet</option>
                        <option value=\"zarzis\">Zarzis</option>
                        <option value=\"djerba\">Djerba</option>
                        <option value=\"tabarka\">Tabarka</option>
                        <option value=\"rades\">Rades</option>
                        <option value=\"mégrine\">Mégrine</option>
                        <option value=\"la goulette\">La Goulette</option>
                        <option value=\"douar hicher\">Douar Hicher</option>
                        <option value=\"msaken\">Msaken</option>
                        <option value=\"korba\">Korba</option>
                        <option value=\"menzel temime\">Menzel Temime</option>
                    </select>
                    <small class=\"text-gray-500\">Choisissez une ville en Tunisie</small>
                </div>
                
                <div>
                    <label for=\"price\" class=\"block text-sm font-medium text-gray-700 mb-1\">Prix par passager (DT)</label>
                    <div class=\"relative\">
                        <input type=\"number\" id=\"price\" name=\"price\" required min=\"0\" step=\"0.5\"
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-primary focus:border-primary transition-colors duration-300\"
                               placeholder=\"15\">
                        <button type=\"button\" id=\"suggestPriceBtn\" class=\"absolute right-3 top-2 text-green-600 hover:text-green-800 text-sm font-medium\">
                            Suggestion IA
                        </button>
                    </div>
                    <div id=\"priceRecommendation\" class=\"mt-2 text-sm text-green-700 hidden\">
                        <div class=\"flex items-center\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4 mr-1\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z\" />
                            </svg>
                            <span id=\"recommendationText\">Prix suggéré: <strong>7 DT</strong> (<span id=\"distanceText\">66.7 km</span>)</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"flex justify-end\">
                <button type=\"submit\" id=\"submitButton\"
                        class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5 text-sm font-medium\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                    </svg>
                    Enregistrer le trajet
                </button>
            </div>
        </form>
    </div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const departurePoint = document.getElementById('departure_point');
    const arrivalPoint = document.getElementById('arrival_point');
    const trajetForm = document.getElementById('trajetForm');
    const submitButton = document.getElementById('submitButton');
    const titreInput = document.getElementById('titre');
    const priceInput = document.getElementById('price');
    const suggestPriceBtn = document.getElementById('suggestPriceBtn');
    const priceRecommendation = document.getElementById('priceRecommendation');
    const recommendationText = document.getElementById('recommendationText');
    const distanceText = document.getElementById('distanceText');
    
    // Générer automatiquement le titre du trajet au format \"Départ-->Destination\"
    function updateTrajetTitle() {
        const departureValue = departurePoint.value;
        const arrivalValue = arrivalPoint.value;
        
        if (departureValue && arrivalValue) {
            // Capitaliser la première lettre de chaque ville
            const formattedDeparture = departureValue.charAt(0).toUpperCase() + departureValue.slice(1);
            const formattedArrival = arrivalValue.charAt(0).toUpperCase() + arrivalValue.slice(1);
            titreInput.value = `\${formattedDeparture}-->\${formattedArrival}`;
        }
    }
    
    // Vérifier que le point de départ et d'arrivée ne sont pas identiques
    function validateDifferentLocations() {
        const departureValue = departurePoint.value;
        const arrivalValue = arrivalPoint.value;
        
        if (departureValue && arrivalValue && departureValue === arrivalValue) {
            alert(\"Le lieu de départ et la destination ne peuvent pas être identiques\");
            return false;
        }
        
        return true;
    }
    
    // Activer le bouton de soumission si les deux sélections sont valides
    function updateSubmitButtonState() {
        const departureValue = departurePoint.value;
        const arrivalValue = arrivalPoint.value;
        
        if (departureValue && arrivalValue && departureValue !== arrivalValue) {
            submitButton.disabled = false;
            submitButton.classList.remove('opacity-50', 'cursor-not-allowed');
        } else {
            submitButton.disabled = true;
            submitButton.classList.add('opacity-50', 'cursor-not-allowed');
        }
    }
    
    // Récupérer la suggestion de prix depuis l'API
    function getPriceRecommendation() {
        const departureValue = departurePoint.value;
        const arrivalValue = arrivalPoint.value;
        
        if (!departureValue || !arrivalValue || departureValue === arrivalValue) {
            return;
        }
        
        // Afficher un indicateur de chargement
        suggestPriceBtn.innerHTML = '<svg class=\"animate-spin h-4 w-4\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\"><circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle><path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z\"></path></svg>';
        
        // Données prédéfinies pour certaines routes
        const knownRoutes = {
            \"tunis_nabeul\": { price: 7.0, distance: 66.7 },
            \"tunis_sousse\": { price: 15.0, distance: 143.0 },
            \"tunis_sfax\": { price: 25.0, distance: 270.0 },
            \"tunis_kairouan\": { price: 16.0, distance: 156.0 },
            \"tunis_bizerte\": { price: 7.0, distance: 65.0 },
            \"sousse_sfax\": { price: 12.0, distance: 133.0 },
            \"sousse_monastir\": { price: 3.0, distance: 23.0 },
            \"tunis_hammamet\": { price: 6.5, distance: 65.0 },
            \"tunis_djerba\": { price: 50.0, distance: 532.7 }
        };
        
        // Créer une clé de route standardisée
        const from = departureValue.toLowerCase();
        const to = arrivalValue.toLowerCase();
        const routeKey = `\${from}_\${to}`;
        const reverseRouteKey = `\${to}_\${from}`;
        
        // Vérifier d'abord dans notre base de données de routes connues
        if (knownRoutes[routeKey]) {
            useKnownRoute(knownRoutes[routeKey]);
            return;
        } else if (knownRoutes[reverseRouteKey]) {
            useKnownRoute(knownRoutes[reverseRouteKey]);
            return;
        }
        
        // Si la route n'est pas connue, utiliser l'API OpenStreetMap pour calculer la distance
        getDistanceFromOpenStreetMap(from, to);
        
        // Fonction pour utiliser une route connue
        function useKnownRoute(routeData) {
            const recommendedPrice = routeData.price;
            const distance = routeData.distance;
            
            // Afficher la recommandation
            priceRecommendation.classList.remove('hidden');
            recommendationText.innerHTML = `Prix suggéré: <strong>\${recommendedPrice} DT</strong> (<span id=\"distanceText\">\${distance} km</span>)`;
            
            // Mettre à jour automatiquement le prix
            priceInput.value = recommendedPrice;
            
            // Restaurer le bouton
            suggestPriceBtn.textContent = 'Suggestion IA';
        }
        
        // Fonction pour obtenir la distance depuis OpenStreetMap
        function getDistanceFromOpenStreetMap(fromCity, toCity) {
            // Récupérer les coordonnées des villes
            getCoordinates(fromCity)
                .then(fromCoords => {
                    return getCoordinates(toCity)
                        .then(toCoords => {
                            return calculateRoute(fromCoords, toCoords);
                        });
                })
                .then(routeData => {
                    if (routeData) {
                        const distance = routeData.distance;
                        
                        // Calculer le prix recommandé basé sur la distance
                        // Prix par km moyen en Tunisie (0.09-0.1 DT/km)
                        const pricePerKm = 0.09;
                        const basePrice = 2.0; // Prix de base
                        let recommendedPrice = distance * pricePerKm + basePrice;
                        
                        // Réduction de prix pour les longues distances
                        if (distance > 200) {
                            recommendedPrice *= 0.95; // 5% de réduction pour les longues distances
                        }
                        
                        // Arrondir à 0.5 DT près
                        recommendedPrice = Math.round(recommendedPrice * 2) / 2;
                        
                        // S'assurer que le prix n'est pas trop bas
                        if (recommendedPrice < 3) {
                            recommendedPrice = 3;
                        }
                        
                        // Afficher la recommandation
                        priceRecommendation.classList.remove('hidden');
                        recommendationText.innerHTML = `Prix suggéré: <strong>\${recommendedPrice} DT</strong> (<span id=\"distanceText\">\${Math.round(distance * 10) / 10} km</span>)`;
                        
                        // Mettre à jour automatiquement le prix
                        priceInput.value = recommendedPrice;
                    } else {
                        // Fallback en cas d'échec
                        useFallbackPricing();
                    }
                    
                    // Restaurer le bouton
                    suggestPriceBtn.textContent = 'Suggestion IA';
                })
                .catch(error => {
                    console.error('Erreur lors du calcul de la distance:', error);
                    useFallbackPricing();
                    suggestPriceBtn.textContent = 'Suggestion IA';
                });
        }
        
        // Obtenir les coordonnées d'une ville depuis Nominatim (OSM)
        function getCoordinates(city) {
            const query = encodeURIComponent(city + ', Tunisia');
            return fetch(`https://nominatim.openstreetmap.org/search?q=\${query}&format=json&limit=1&countrycodes=tn`)
                .then(response => response.json())
                .then(data => {
                    if (data && data.length > 0) {
                        return { lat: data[0].lat, lon: data[0].lon };
                    }
                    throw new Error('Ville non trouvée');
                });
        }
        
        // Calculer l'itinéraire entre deux points avec OSRM
        function calculateRoute(from, to) {
            const url = `https://router.project-osrm.org/route/v1/driving/\${from.lon},\${from.lat};\${to.lon},\${to.lat}?overview=false`;
            
            return fetch(url)
                .then(response => response.json())
                .then(data => {
                    if (data && data.routes && data.routes.length > 0) {
                        // Distance en mètres, conversion en km
                        const distanceKm = data.routes[0].distance / 1000;
                        return { distance: distanceKm };
                    }
                    throw new Error('Impossible de calculer l\\'itinéraire');
                });
        }
        
        // Prix de secours en cas d'échec de l'API
        function useFallbackPricing() {
            // Estimer une distance approximative en fonction des villes tunisiennes
            const approxDistance = Math.random() * 150 + 50; // Entre 50 et 200 km
            const pricePerKm = 0.09;
            const basePrice = 2.0;
            let recommendedPrice = Math.round((approxDistance * pricePerKm + basePrice) * 2) / 2;
            
            // Afficher la recommandation
            priceRecommendation.classList.remove('hidden');
            recommendationText.innerHTML = `Prix suggéré: <strong>\${recommendedPrice} DT</strong> (<span id=\"distanceText\">~\${Math.round(approxDistance)} km (estimation)</span>)`;
            
            // Mettre à jour automatiquement le prix
            priceInput.value = recommendedPrice;
        }
    }
    
    // Ajouter des écouteurs d'événements
    departurePoint.addEventListener('change', function() {
        updateSubmitButtonState();
        updateTrajetTitle();
        priceRecommendation.classList.add('hidden');
    });
    
    arrivalPoint.addEventListener('change', function() {
        updateSubmitButtonState();
        updateTrajetTitle();
        priceRecommendation.classList.add('hidden');
    });
    
    // Écouter le clic sur le bouton de suggestion de prix
    suggestPriceBtn.addEventListener('click', getPriceRecommendation);
    
    // Empêcher la soumission du formulaire si les lieux sont identiques
    trajetForm.addEventListener('submit', function(event) {
        if (!validateDifferentLocations()) {
            event.preventDefault();
        }
    });
    
    // Initialiser l'état du bouton de soumission
    updateSubmitButtonState();
});
</script>
{% endblock %}", "conducteur/ajouter_trajet.html.twig", "D:\\Covoituni_web-master\\templates\\conducteur\\ajouter_trajet.html.twig");
    }
}
