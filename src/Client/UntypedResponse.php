<?php

namespace Mittwald\ApiClient\Client;

use Psr\Http\Message\ResponseInterface;

/**
 * UntypedResponse models an HTTP response with an arbitrary body.
 */
readonly class UntypedResponse implements ResponseContainer
{
    use ResponseTrait;

    /**
     * $body contains the response body; since this is an untyped response, this
     * can be anything. Users of this class should make their own type
     * assertions on this value.
     */
    private mixed $body;

    public function __construct(mixed $body, ResponseInterface $response)
    {
        $this->response = $response;
        $this->body = $body;
    }

    /**
     * Returns the response body.
     */
    public function getBody(): mixed
    {
        return $this->body;
    }

    public static function fromResponse(ResponseInterface $response): self
    {
        return new self(json_decode($response->getBody()->getContents(), associative: true), $response);
    }
}
