<?php
namespace Mittwald\ApiClient\Client;

use Psr\Http\Message\ResponseInterface;

/**
 * EmptyResponse models an empty HTTP response (typically accompanying a
 * "204 No Content" response).
 */
readonly class EmptyResponse
{
    use ResponseTrait;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }
}