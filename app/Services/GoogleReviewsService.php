<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GoogleReviewsService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('GOOGLE_PLACES_API_KEY');
    }

    public function getReviews($placeId)
    {
        $url = 'https://maps.googleapis.com/maps/api/place/details/json';
        $response = Http::get($url, [
            'place_id' => $placeId,
            'key' => $this->apiKey,
            'fields' => 'reviews'
        ]);

        $data = $response->json();

        return $data['result']['reviews'] ?? [];
    }
}
