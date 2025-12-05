<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateLlmLicence;

use InvalidArgumentException;
use JsonSchema\Validator;

class AiHostingCustomerUpdateLlmLicenceRequest
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
            'licenceId' => [
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
            'licenceId',
            'body',
        ],
    ];

    private string $customerId;

    private string $licenceId;

    private AiHostingCustomerUpdateLlmLicenceRequestBody $body;

    private array $headers = [

    ];

    public function __construct(string $customerId, string $licenceId, AiHostingCustomerUpdateLlmLicenceRequestBody $body)
    {
        $this->customerId = $customerId;
        $this->licenceId = $licenceId;
        $this->body = $body;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getLicenceId(): string
    {
        return $this->licenceId;
    }

    public function getBody(): AiHostingCustomerUpdateLlmLicenceRequestBody
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

    public function withLicenceId(string $licenceId): self
    {
        $validator = new Validator();
        $validator->validate($licenceId, self::$internalValidationSchema['properties']['licenceId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->licenceId = $licenceId;

        return $clone;
    }

    public function withBody(AiHostingCustomerUpdateLlmLicenceRequestBody $body): self
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
     * @return AiHostingCustomerUpdateLlmLicenceRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AiHostingCustomerUpdateLlmLicenceRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = $input->{'customerId'};
        $licenceId = $input->{'licenceId'};
        $body = AiHostingCustomerUpdateLlmLicenceRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($customerId, $licenceId, $body);

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
        $output['licenceId'] = $this->licenceId;
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
        $licenceId = urlencode($mapped['licenceId']);
        return '/v2/customers/' . $customerId . '/llm-licences/' . $licenceId;
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
