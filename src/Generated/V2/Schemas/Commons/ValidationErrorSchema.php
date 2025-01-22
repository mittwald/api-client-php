<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Commons;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.commons.ValidationErrorSchema.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ValidationErrorSchema
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'required' => [
            'message',
            'path',
            'type',
        ],
        'properties' => [
            'message' => [
                'type' => 'string',
                'description' => 'The standard error message',
                'example' => 'should be string',
            ],
            'path' => [
                'type' => 'string',
                'description' => 'The path to the part of the data that was validated. JavaScript property access notation (e.g., ".prop[1].subProp") is used.
',
                'example' => '.address.street',
            ],
            'type' => [
                'type' => 'string',
                'description' => 'ajv validation error type (e.g. "format", "required", "type") or own validation error types',
                'example' => 'format',
            ],
            'context' => [
                'type' => 'object',
                'example' => [
                    'format' => 'email',
                ],
                'description' => 'The object with the additional information about the error that can be used to create custom error messages. Keys depend on the
type that failed validation (e.g. "missingProperty" for type "required")
',
                'additionalProperties' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * The standard error message
     */
    private string $message;

    /**
     * The path to the part of the data that was validated. JavaScript property access notation (e.g., ".prop[1].subProp") is used.
     *
     */
    private string $path;

    /**
     * ajv validation error type (e.g. "format", "required", "type") or own validation error types
     */
    private string $type;

    /**
     * The object with the additional information about the error that can be used to create custom error messages. Keys depend on the
     * type that failed validation (e.g. "missingProperty" for type "required")
     *
     *
     * @var string[]|null
     */
    private ?array $context = null;

    public function __construct(string $message, string $path, string $type)
    {
        $this->message = $message;
        $this->path = $path;
        $this->type = $type;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string[]|null
     */
    public function getContext(): ?array
    {
        return $this->context ?? null;
    }

    public function withMessage(string $message): self
    {
        $validator = new Validator();
        $validator->validate($message, self::$schema['properties']['message']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->message = $message;

        return $clone;
    }

    public function withPath(string $path): self
    {
        $validator = new Validator();
        $validator->validate($path, self::$schema['properties']['path']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->path = $path;

        return $clone;
    }

    public function withType(string $type): self
    {
        $validator = new Validator();
        $validator->validate($type, self::$schema['properties']['type']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    /**
     * @param string[] $context
     */
    public function withContext(array $context): self
    {
        $validator = new Validator();
        $validator->validate($context, self::$schema['properties']['context']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->context = $context;

        return $clone;
    }

    public function withoutContext(): self
    {
        $clone = clone $this;
        unset($clone->context);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ValidationErrorSchema Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ValidationErrorSchema
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $message = $input->{'message'};
        $path = $input->{'path'};
        $type = $input->{'type'};
        $context = null;
        if (isset($input->{'context'})) {
            $context = (array)$input->{'context'};
        }

        $obj = new self($message, $path, $type);
        $obj->context = $context;
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
        $output['message'] = $this->message;
        $output['path'] = $this->path;
        $output['type'] = $this->type;
        if (isset($this->context)) {
            $output['context'] = $this->context;
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
        $validator->validate($input, self::$schema);

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
}
