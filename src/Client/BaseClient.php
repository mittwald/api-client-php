<?php

namespace Mittwald\ApiClient\Client;

use GuzzleHttp\Client;

abstract class BaseClient
{
    protected Client $client;

    protected function __construct(string $baseUri, string|null $apiKey = null)
    {
        $opts = [
            'base_uri'    => $baseUri,
            'http_errors' => false,
            'headers'     => [
                'Accept' => 'application/json',
            ],
        ];

        if ($apiKey !== null) {
            $opts['headers']['Authorization'] = "Bearer {$apiKey}";
        }

        $this->client = new Client($opts);
    }
}
