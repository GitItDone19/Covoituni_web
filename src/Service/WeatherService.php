<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class WeatherService
{
    private HttpClientInterface $httpClient;
    private string $apiKey;
    private string $apiBaseUrl = 'https://api.openweathermap.org/data/2.5';

    public function __construct(
        HttpClientInterface $httpClient,
        string $weatherApiKey
    ) {
        $this->httpClient = $httpClient;
        $this->apiKey = $weatherApiKey;
    }

    /**
     * Get current weather for a location
     * 
     * @param string $location The location/city name
     * @param string $units Units of measurement (metric, imperial, standard)
     * @return array Weather data
     */
    public function getCurrentWeather(string $location, string $units = 'metric'): array
    {
        try {
            if (empty($this->apiKey)) {
                return ['error' => 'Clé API météo non configurée.'];
            }

            if (empty($location)) {
                return ['error' => 'Le nom de la ville est requis.'];
            }

            $response = $this->httpClient->request('GET', "{$this->apiBaseUrl}/weather", [
                'query' => [
                    'q' => $location,
                    'appid' => $this->apiKey,
                    'units' => $units,
                    'lang' => 'fr'
                ],
                'timeout' => 5, // Timeout de 5 secondes
            ]);

            $data = $response->toArray();

            if (isset($data['cod']) && (int)$data['cod'] !== 200) {
                return ['error' => $data['message'] ?? 'Données météo indisponibles.'];
            }

            return $data;
        } catch (\Exception $e) {
            return ['error' => 'Service météo temporairement indisponible.'];
        }
    }

    /**
     * Get weather forecast for a location
     * 
     * @param string $location The location/city name
     * @param int $days Number of days (1-5)
     * @param string $units Units of measurement (metric, imperial, standard)
     * @return array Forecast data
     */
    public function getForecast(string $location, int $days = 5, string $units = 'metric'): array
    {
        try {
            if (empty($this->apiKey)) {
                return ['error' => 'Clé API météo non configurée.'];
            }

            if (empty($location)) {
                return ['error' => 'Le nom de la ville est requis.'];
            }

            $response = $this->httpClient->request('GET', "{$this->apiBaseUrl}/forecast", [
                'query' => [
                    'q' => $location,
                    'appid' => $this->apiKey,
                    'units' => $units,
                    'lang' => 'fr',
                    'cnt' => min(40, $days * 8) // 8 prévisions par jour (toutes les 3h)
                ],
                'timeout' => 5,
            ]);

            $data = $response->toArray();

            if (isset($data['cod']) && (string)$data['cod'] !== '200') {
                return ['error' => $data['message'] ?? 'Données de prévision indisponibles.'];
            }

            return $data;
        } catch (\Exception $e) {
            return ['error' => 'Service météo temporairement indisponible.'];
        }
    }

    /**
     * Format weather data for display
     * 
     * @param array $weatherData Raw weather data
     * @return array Formatted weather data
     */
    public function formatWeatherData(array $weatherData): array
    {
        if (isset($weatherData['error'])) {
            return $weatherData;
        }

        try {
            if (!isset(
                $weatherData['main']['temp'],
                $weatherData['weather'][0]['description'],
                $weatherData['weather'][0]['icon'],
                $weatherData['main']['humidity'],
                $weatherData['wind']['speed'],
                $weatherData['name'],
                $weatherData['sys']['country']
            )) {
                return ['error' => 'Données météo incomplètes.'];
            }

            return [
                'temperature' => round($weatherData['main']['temp']) . '°C',
                'description' => ucfirst($weatherData['weather'][0]['description']),
                'icon' => $weatherData['weather'][0]['icon'],
                'humidity' => $weatherData['main']['humidity'] . '%',
                'wind' => round($weatherData['wind']['speed']) . ' m/s',
                'location' => $weatherData['name'],
                'country' => $weatherData['sys']['country'],
                'iconUrl' => "https://openweathermap.org/img/wn/{$weatherData['weather'][0]['icon']}@2x.png"
            ];
        } catch (\Exception $e) {
            return ['error' => 'Erreur lors du formatage des données météo.'];
        }
    }
}
