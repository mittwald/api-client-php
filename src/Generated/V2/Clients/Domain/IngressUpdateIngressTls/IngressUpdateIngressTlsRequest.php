<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls;

use InvalidArgumentException;
use JsonSchema\Validator;

class IngressUpdateIngressTlsRequest
{
    public const method = 'patch';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'ingressId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'oneOf' => [
                    [
                        'additionalProperties' => false,
                        'properties' => [
                            'acme' => [
                                'description' => 'Has to be `true`, as ssl cannot be deactivated.',
                                'type' => 'boolean',
                            ],
                            'isCreated' => [
                                'deprecated' => true,
                                'description' => 'Was added by mistake. Never did anything.',
                                'type' => 'boolean',
                            ],
                            'requestDeadline' => [
                                'deprecated' => true,
                                'description' => 'Was added by mistake. Never did anything.',
                                'format' => 'date-time',
                                'type' => 'string',
                            ],
                        ],
                        'required' => [
                            'acme',
                        ],
                        'type' => 'object',
                    ],
                    [
                        'additionalProperties' => false,
                        'properties' => [
                            'certificateId' => [
                                'format' => 'uuid',
                                'type' => 'string',
                            ],
                        ],
                        'required' => [
                            'certificateId',
                        ],
                        'type' => 'object',
                    ],
                ],
            ],
        ],
        'required' => [
            'ingressId',
            'body',
        ],
    ];

    private string $ingressId;

    private IngressUpdateIngressTlsRequestBodyAlternative1|IngressUpdateIngressTlsRequestBodyAlternative2 $body;

    private array $headers = [

    ];

    /**
     * @param IngressUpdateIngressTlsRequestBodyAlternative1|IngressUpdateIngressTlsRequestBodyAlternative2 $body
     */
    public function __construct(string $ingressId, IngressUpdateIngressTlsRequestBodyAlternative1|IngressUpdateIngressTlsRequestBodyAlternative2 $body)
    {
        $this->ingressId = $ingressId;
        $this->body = $body;
    }

    public function getIngressId(): string
    {
        return $this->ingressId;
    }

    /**
     * @return
     * IngressUpdateIngressTlsRequestBodyAlternative1|IngressUpdateIngressTlsRequestBodyAlternative2
     */
    public function getBody(): IngressUpdateIngressTlsRequestBodyAlternative1|IngressUpdateIngressTlsRequestBodyAlternative2
    {
        return $this->body;
    }

    public function withIngressId(string $ingressId): self
    {
        $validator = new Validator();
        $validator->validate($ingressId, static::$schema['properties']['ingressId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->ingressId = $ingressId;

        return $clone;
    }

    /**
     * @param IngressUpdateIngressTlsRequestBodyAlternative1|IngressUpdateIngressTlsRequestBodyAlternative2 $body
     */
    public function withBody(IngressUpdateIngressTlsRequestBodyAlternative1|IngressUpdateIngressTlsRequestBodyAlternative2 $body): self
    {
        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return IngressUpdateIngressTlsRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): IngressUpdateIngressTlsRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $ingressId = $input->{'ingressId'};
        $body = match (true) {
            IngressUpdateIngressTlsRequestBodyAlternative1::validateInput($input->{'body'}, true) => IngressUpdateIngressTlsRequestBodyAlternative1::buildFromInput($input->{'body'}, validate: $validate),
            IngressUpdateIngressTlsRequestBodyAlternative2::validateInput($input->{'body'}, true) => IngressUpdateIngressTlsRequestBodyAlternative2::buildFromInput($input->{'body'}, validate: $validate),
        };

        $obj = new self($ingressId, $body);

        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson(): array
    {
        $output = [];
        $output['ingressId'] = $this->ingressId;
        $output['body'] = match (true) {
            $this->body instanceof IngressUpdateIngressTlsRequestBodyAlternative1, $this->body instanceof IngressUpdateIngressTlsRequestBodyAlternative2 => ($this->body)->toJson(),
        };

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false): bool
    {
        $validator = new \Mittwald\ApiClient\Validator\Validator();
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function (array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
        $this->body = match (true) {
            $this->body instanceof IngressUpdateIngressTlsRequestBodyAlternative1, $this->body instanceof IngressUpdateIngressTlsRequestBodyAlternative2 => clone $this->body,
        };
    }

    /**
     * Builds the URL for this request
     *
     * This method is used internally by the client to build the URL for this request.
     * You should not need to call this method directly.
     *
     * @internal
     * @return string The URL for this request
     */
    public function buildUrl(): string
    {
        $mapped = $this->toJson();
        $ingressId = urlencode($mapped['ingressId']);
        return '/v2/ingresses/' . $ingressId . '/tls';
    }

    /**
     * Builds the request options for this request
     *
     * This method is used internally by the client to build the Guzzle request options
     * for this request. You should not need to call this method directly.
     *
     * @internal
     * @return array The Guzzle request options for this request
     */
    public function buildRequestOptions(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return [
            'query' => $query,
            'headers' => $this->headers,
            'json' => $this->getBody()->toJson(),
        ];
    }

    /**
     * Adds a header to this request
     *
     * You can use this method to add custom HTTP headers to the request.
     *
     * @param string $name The name of the header to add
     * @param string|array $value The value of the header to add
     * @return self A clone of this request with the header added
     */
    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
