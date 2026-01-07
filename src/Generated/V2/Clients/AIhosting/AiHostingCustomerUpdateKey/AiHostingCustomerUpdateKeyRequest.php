<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateKey;

use InvalidArgumentException;
use JsonSchema\Validator;

class AiHostingCustomerUpdateKeyRequest
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'customerId' => [
                'type' => 'string',
            ],
            'keyId' => [
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'createWebuiContainer' => [
                        'type' => 'boolean',
                    ],
                    'name' => [
                        'minLength' => 5,
                        'type' => 'string',
                    ],
                    'projectId' => [
                        'type' => 'string',
                    ],
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'customerId',
            'keyId',
            'body',
        ],
    ];

    private string $customerId;

    private string $keyId;

    private AiHostingCustomerUpdateKeyRequestBody $body;

    private array $headers = [

    ];

    public function __construct(string $customerId, string $keyId, AiHostingCustomerUpdateKeyRequestBody $body)
    {
        $this->customerId = $customerId;
        $this->keyId = $keyId;
        $this->body = $body;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getKeyId(): string
    {
        return $this->keyId;
    }

    public function getBody(): AiHostingCustomerUpdateKeyRequestBody
    {
        return $this->body;
    }

    public function withCustomerId(string $customerId): self
    {
        $validator = new Validator();
        $validator->validate($customerId, self::$internalValidationSchema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    public function withKeyId(string $keyId): self
    {
        $validator = new Validator();
        $validator->validate($keyId, self::$internalValidationSchema['properties']['keyId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->keyId = $keyId;

        return $clone;
    }

    public function withBody(AiHostingCustomerUpdateKeyRequestBody $body): self
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
     * @return AiHostingCustomerUpdateKeyRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AiHostingCustomerUpdateKeyRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = $input->{'customerId'};
        $keyId = $input->{'keyId'};
        $body = AiHostingCustomerUpdateKeyRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($customerId, $keyId, $body);

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
        $output['customerId'] = $this->customerId;
        $output['keyId'] = $this->keyId;
        $output['body'] = ($this->body)->toJson();

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
        $validator->validate($input, self::$internalValidationSchema);

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
        $this->body = clone $this->body;
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
        $customerId = urlencode($mapped['customerId']);
        $keyId = urlencode($mapped['keyId']);
        return '/v2/customers/' . $customerId . '/ai-hosting-keys/' . $keyId;
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
