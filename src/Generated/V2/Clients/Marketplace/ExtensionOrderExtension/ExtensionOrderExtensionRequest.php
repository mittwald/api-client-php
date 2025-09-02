<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionOrderExtension;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionOrderExtensionRequest
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'extensionId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'oneOf' => [
                    [
                        'properties' => [
                            'consentedScopes' => [
                                'items' => [
                                    'type' => 'string',
                                ],
                                'type' => 'array',
                            ],
                            'customerId' => [
                                'description' => 'The customer the extension should be booked for. Either customerId or projectId is required.',
                                'format' => 'uuid',
                                'type' => 'string',
                            ],
                        ],
                        'required' => [
                            'consentedScopes',
                            'customerId',
                        ],
                        'type' => 'object',
                    ],
                    [
                        'properties' => [
                            'consentedScopes' => [
                                'items' => [
                                    'type' => 'string',
                                ],
                                'type' => 'array',
                            ],
                            'projectId' => [
                                'description' => 'The project the extension should be installed in. Either customerId or projectId is required.',
                                'format' => 'uuid',
                                'type' => 'string',
                            ],
                        ],
                        'required' => [
                            'consentedScopes',
                            'projectId',
                        ],
                        'type' => 'object',
                    ],
                ],
            ],
        ],
        'required' => [
            'extensionId',
            'body',
        ],
    ];

    private string $extensionId;

    private ExtensionOrderExtensionRequestBodyAlternative1|ExtensionOrderExtensionRequestBodyAlternative2 $body;

    private array $headers = [

    ];

    public function __construct(string $extensionId, ExtensionOrderExtensionRequestBodyAlternative1|ExtensionOrderExtensionRequestBodyAlternative2 $body)
    {
        $this->extensionId = $extensionId;
        $this->body = $body;
    }

    public function getExtensionId(): string
    {
        return $this->extensionId;
    }

    public function getBody(): ExtensionOrderExtensionRequestBodyAlternative1|ExtensionOrderExtensionRequestBodyAlternative2
    {
        return $this->body;
    }

    public function withExtensionId(string $extensionId): self
    {
        $validator = new Validator();
        $validator->validate($extensionId, self::$internalValidationSchema['properties']['extensionId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->extensionId = $extensionId;

        return $clone;
    }

    public function withBody(ExtensionOrderExtensionRequestBodyAlternative1|ExtensionOrderExtensionRequestBodyAlternative2 $body): self
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
     * @return ExtensionOrderExtensionRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionOrderExtensionRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $extensionId = $input->{'extensionId'};
        $body = match (true) {
            ExtensionOrderExtensionRequestBodyAlternative1::validateInput($input->{'body'}, true) => ExtensionOrderExtensionRequestBodyAlternative1::buildFromInput($input->{'body'}, validate: $validate),
            ExtensionOrderExtensionRequestBodyAlternative2::validateInput($input->{'body'}, true) => ExtensionOrderExtensionRequestBodyAlternative2::buildFromInput($input->{'body'}, validate: $validate),
            default => throw new InvalidArgumentException("could not build property 'body' from JSON"),
        };

        $obj = new self($extensionId, $body);

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
        $output['extensionId'] = $this->extensionId;
        $output['body'] = match (true) {
            $this->body instanceof ExtensionOrderExtensionRequestBodyAlternative1, $this->body instanceof ExtensionOrderExtensionRequestBodyAlternative2 => ($this->body)->toJson(),
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
        $this->body = match (true) {
            $this->body instanceof ExtensionOrderExtensionRequestBodyAlternative1, $this->body instanceof ExtensionOrderExtensionRequestBodyAlternative2 => clone $this->body,
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
        $extensionId = urlencode($mapped['extensionId']);
        return '/v2/extensions/' . $extensionId . '/order';
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
