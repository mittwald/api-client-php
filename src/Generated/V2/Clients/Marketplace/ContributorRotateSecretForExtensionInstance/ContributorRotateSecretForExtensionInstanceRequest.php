<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRotateSecretForExtensionInstance;

use InvalidArgumentException;
use JsonSchema\Validator;

class ContributorRotateSecretForExtensionInstanceRequest
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'contributorId' => [
                'type' => 'string',
            ],
            'extensionId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'extensionInstanceId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'allowWebhookFailure' => [
                        'type' => 'boolean',
                    ],
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'contributorId',
            'extensionId',
            'extensionInstanceId',
            'body',
        ],
    ];

    private string $contributorId;

    private string $extensionId;

    private string $extensionInstanceId;

    private ContributorRotateSecretForExtensionInstanceRequestBody $body;

    private array $headers = [

    ];

    public function __construct(string $contributorId, string $extensionId, string $extensionInstanceId, ContributorRotateSecretForExtensionInstanceRequestBody $body)
    {
        $this->contributorId = $contributorId;
        $this->extensionId = $extensionId;
        $this->extensionInstanceId = $extensionInstanceId;
        $this->body = $body;
    }

    public function getContributorId(): string
    {
        return $this->contributorId;
    }

    public function getExtensionId(): string
    {
        return $this->extensionId;
    }

    public function getExtensionInstanceId(): string
    {
        return $this->extensionInstanceId;
    }

    public function getBody(): ContributorRotateSecretForExtensionInstanceRequestBody
    {
        return $this->body;
    }

    public function withContributorId(string $contributorId): self
    {
        $validator = new Validator();
        $validator->validate($contributorId, static::$schema['properties']['contributorId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contributorId = $contributorId;

        return $clone;
    }

    public function withExtensionId(string $extensionId): self
    {
        $validator = new Validator();
        $validator->validate($extensionId, static::$schema['properties']['extensionId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->extensionId = $extensionId;

        return $clone;
    }

    public function withExtensionInstanceId(string $extensionInstanceId): self
    {
        $validator = new Validator();
        $validator->validate($extensionInstanceId, static::$schema['properties']['extensionInstanceId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->extensionInstanceId = $extensionInstanceId;

        return $clone;
    }

    public function withBody(ContributorRotateSecretForExtensionInstanceRequestBody $body): self
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
     * @return ContributorRotateSecretForExtensionInstanceRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ContributorRotateSecretForExtensionInstanceRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contributorId = $input->{'contributorId'};
        $extensionId = $input->{'extensionId'};
        $extensionInstanceId = $input->{'extensionInstanceId'};
        $body = ContributorRotateSecretForExtensionInstanceRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($contributorId, $extensionId, $extensionInstanceId, $body);

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
        $output['contributorId'] = $this->contributorId;
        $output['extensionId'] = $this->extensionId;
        $output['extensionInstanceId'] = $this->extensionInstanceId;
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
        $contributorId = urlencode($mapped['contributorId']);
        $extensionId = urlencode($mapped['extensionId']);
        $extensionInstanceId = urlencode($mapped['extensionInstanceId']);
        return '/v2/contributors/' . $contributorId . '/extensions/' . $extensionId . '/extension-instances/' . $extensionInstanceId . '/secret';
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
