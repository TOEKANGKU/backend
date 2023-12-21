<?php

namespace App\Services;

use GuzzleHttp\Client;

class ModelService
{ 
    public static function getWorkerClassify($text = '')
    {
        $baseUrl = config('custom.model_api_url');
        $client = new Client([
            'base_uri' => $baseUrl,
        ]);
        $body = [
            'text' => $text
        ];
        $response = $client->post('classify-worker', [
            'headers' => ['Content-Type' => 'application/json'],
            'body' => json_encode([
                'text' => $text,
            ])
        ]); 
        $data = json_decode($response->getBody(), true);
        return $data['predicted_class'];
    }

    public static function getUserClassify($text = '')
    {
        $baseUrl = config('custom.model_api_url');
        $client = new Client([
            'base_uri' => $baseUrl,
        ]);
        $body = [
            'text' => $text
        ];
        $response = $client->post('classify-user', [
            'headers' => ['Content-Type' => 'application/json'],
            'body' => json_encode([
                'text' => $text,
            ])
        ]); 
        $data = json_decode($response->getBody(), true);
        return $data['predicted_class'];
    }
}