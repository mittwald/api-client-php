<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Client;

use Psr\Http\Message\ResponseInterface;

/**
 * String models an HTTP response with a raw string body
 */
readonly class StringResponse implements ResponseContainer
{
    use ResponseTrait;

    /**
     * $body contains the response body; in this case, this is a raw string
     */
    private string $body;

    public function __construct(string $body, ResponseInterface $response)
    {
        $this->response = $response;
        $this->body = $body;
    }

    /**
     * Returns the response body.
     */
    public function getBody(): string
    {
        return $this->body;
    }

    public static function fromResponse(ResponseInterface $response): self
    {
        return new self($response->getBody()->getContents(), $response);
    }
}
