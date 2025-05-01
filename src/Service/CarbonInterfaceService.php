<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CarbonInterfaceService
{
    private $httpClient;
    private $apiKey;

    public function __construct(
        HttpClientInterface $httpClient,
        string $carbonInterfaceApiKey
    ) {
        $this->httpClient = $httpClient;
        $this->apiKey = $carbonInterfaceApiKey;
    }

    public function calculateEmissions(string $make, string $model, int $kilometrage, int $year): float
    {
        if (!$this->apiKey) {
            throw new \RuntimeException('Carbon Interface API key is not configured');
        }

        try {
            // Convert kilometers to miles for the API
            $distanceInMiles = $kilometrage * 0.621371;

            $response = $this->httpClient->request('POST', 'https://www.carboninterface.com/api/v1/estimates', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json'
                ],
                'json' => [
                    'type' => 'vehicle',
                    'distance_unit' => 'mi',
                    'distance_value' => $distanceInMiles,
                    'vehicle_model_id' => $this->getVehicleModelId($make, $model, $year)
                ]
            ]);

            $data = $response->toArray();
            
            // The API returns CO2 in kilograms
            return $data['data']['attributes']['carbon_kg'] ?? 0.0;
        } catch (\Exception $e) {
            // Log the error here
            throw new \RuntimeException('Error calculating emissions: ' . $e->getMessage());
        }
    }

    private function getVehicleModelId(string $make, string $model, int $year): string
    {
        try {
            $response = $this->httpClient->request('GET', 'https://www.carboninterface.com/api/v1/vehicle_makes', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json'
                ]
            ]);

            $makes = $response->toArray();
            
            // Find the make ID
            $makeId = null;
            foreach ($makes['data'] as $makeData) {
                if (strtolower($makeData['attributes']['name']) === strtolower($make)) {
                    $makeId = $makeData['id'];
                    break;
                }
            }

            if (!$makeId) {
                throw new \RuntimeException('Vehicle make not found');
            }

            // Get models for this make
            $response = $this->httpClient->request('GET', "https://www.carboninterface.com/api/v1/vehicle_makes/{$makeId}/vehicle_models", [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json'
                ]
            ]);

            $models = $response->toArray();

            // Find the matching model for the given year
            foreach ($models['data'] as $modelData) {
                if (strtolower($modelData['attributes']['name']) === strtolower($model) &&
                    $modelData['attributes']['year'] == $year) {
                    return $modelData['id'];
                }
            }

            throw new \RuntimeException('Vehicle model not found for the specified year');
        } catch (\Exception $e) {
            throw new \RuntimeException('Error getting vehicle model ID: ' . $e->getMessage());
        }
    }
} 