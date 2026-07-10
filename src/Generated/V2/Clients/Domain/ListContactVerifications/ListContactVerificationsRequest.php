<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\ListContactVerifications;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Domain\ContactVerificationType;

class ListContactVerificationsRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'value' => [
                'type' => 'string',
            ],
            'type' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.domain.ContactVerificationType',
            ],
        ],
        'required' => [

        ],
    ];

    private ?string $value = null;

    private ?ContactVerificationType $type = null;

    private array $headers = [

    ];

    /**
     *
     */
    public function __construct()
    {
    }

    public function getValue(): ?string
    {
        return $this->value ?? null;
    }

    public function getType(): ?ContactVerificationType
    {
        return $this->type ?? null;
    }

    public function withValue(string $value): self
    {
        $validator = new Validator();
        $validator->validate($value, self::$internalValidationSchema['properties']['value']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->value = $value;

        return $clone;
    }

    public function withoutValue(): self
    {
        $clone = clone $this;
        unset($clone->value);

        return $clone;
    }

    public function withType(ContactVerificationType $type): self
    {
        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    public function withoutType(): self
    {
        $clone = clone $this;
        unset($clone->type);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListContactVerificationsRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListContactVerificationsRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $value = null;
        if (isset($input->{'value'})) {
            $value = $input->{'value'};
        }
        $type = null;
        if (isset($input->{'type'})) {
            $type = ContactVerificationType::from($input->{'type'});
        }

        $obj = new self();
        $obj->value = $value;
        $obj->type = $type;
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
        if (isset($this->value)) {
            $output['value'] = $this->value;
        }
        if (isset($this->type)) {
            $output['type'] = $this->type->value;
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
        return '/v2/contact-verifications';
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
        if (isset($mapped['value'])) {
            $query['value'] = $mapped['value'];
        }
        if (isset($mapped['type'])) {
            $query['type'] = $mapped['type'];
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
