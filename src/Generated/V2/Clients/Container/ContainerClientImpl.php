<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Container;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

/**
 * Client for Container API
 *
 * The container API allows you to manage your stacks, containers, volumes and
 * registries.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ContainerClientImpl implements ContainerClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
