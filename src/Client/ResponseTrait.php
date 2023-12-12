<?php

namespace Mittwald\ApiClient\Client;

use Psr\Http\Message\ResponseInterface;

trait ResponseTrait
{
    private readonly ResponseInterface $response;

    /**
     * Returns the underlying PSR-7 HTTP response object.
     */
    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
