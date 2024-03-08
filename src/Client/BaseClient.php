<?php

namespace Mittwald\ApiClient\Client;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleRetry\GuzzleRetryMiddleware;

abstract class BaseClient
{
    protected Client $client;

    protected function __construct(string $baseUri, string|null $apiKey = null)
    {
        $stack = HandlerStack::create();
        $stack->push(GuzzleRetryMiddleware::factory([
            // 403 needs to be included here, as the API's ACL layer is eventually consistent
            // and might return 403 for a short period of time after a resource has been created
            'retry_on_status'          => [403, 429, 503, 500],
            'max_retry_attempts'       => 10,
            'retry_on_methods'         => ['GET', 'HEAD'],

            // Exponential backoff, base 2 starting at 100ms, capped at 4 seconds
            'default_retry_multiplier' => fn(int $retries): float => min(4, 2 ** ($retries - 1) * .1),
        ]));

        $opts = [
            'handler'     => $stack,
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
