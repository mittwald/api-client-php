<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCheckExtensionIsChargable;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionCheckExtensionIsChargableRequest
{
    public const method = 'get';

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
            'contextId' => [
                'type' => 'string',
            ],
            'variantKey' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'extensionId',
            'contextId',
        ],
    ];

    private string $extensionId;

    private string $contextId;

    private ?string $variantKey = null;

    private array $headers = [

    ];

    public function __construct(string $extensionId, string $contextId)
    {
        $this->extensionId = $extensionId;
        $this->contextId = $contextId;
    }

    public function getExtensionId(): string
    {
        return $this->extensionId;
    }

    public function getContextId(): string
    {
        return $this->contextId;
    }

    public function getVariantKey(): ?string
    {
        return $this->variantKey ?? null;
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

    public function withContextId(string $contextId): self
    {
        $validator = new Validator();
        $validator->validate($contextId, self::$internalValidationSchema['properties']['contextId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contextId = $contextId;

        return $clone;
    }

    public function withVariantKey(string $variantKey): self
    {
        $validator = new Validator();
        $validator->validate($variantKey, self::$internalValidationSchema['properties']['variantKey']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->variantKey = $variantKey;

        return $clone;
    }

    public function withoutVariantKey(): self
    {
        $clone = clone $this;
        unset($clone->variantKey);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionCheckExtensionIsChargableRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionCheckExtensionIsChargableRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $extensionId = $input->{'extensionId'};
        $contextId = $input->{'contextId'};
        $variantKey = null;
        if (isset($input->{'variantKey'})) {
            $variantKey = $input->{'variantKey'};
        }

        $obj = new self($extensionId, $contextId);
        $obj->variantKey = $variantKey;
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
        $output['contextId'] = $this->contextId;
        if (isset($this->variantKey)) {
            $output['variantKey'] = $this->variantKey;
        }

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
        $contextId = urlencode($mapped['contextId']);
        return '/v2/extensions/' . $extensionId . '/contexts/' . $contextId . '/chargability';
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
        if (isset($mapped['variantKey'])) {
            $query['variantKey'] = $mapped['variantKey'];
        }
        return [
            'query' => $query,
            'headers' => $this->headers,
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
