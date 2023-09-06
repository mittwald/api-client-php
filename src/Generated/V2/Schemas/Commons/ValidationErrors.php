<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Commons;

use InvalidArgumentException;

class ValidationErrors
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'required' => [
            'type',
            'validationErrors',
        ],
        'properties' => [
            'type' => [
                'type' => 'string',
                'enum' => [
                    'ValidationError',
                ],
            ],
            'message' => [
                'type' => 'string',
                'example' => 'Validation failed',
            ],
            'validationErrors' => [
                'type' => 'array',
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.commons.ValidationErrorSchema',
                ],
            ],
        ],
    ];

    /**
     * @var ValidationErrorsType
     */
    private ValidationErrorsType $type;

    /**
     * @var string|null
     */
    private ?string $message = null;

    /**
     * @var ValidationErrorSchema[]
     */
    private array $validationErrors;

    /**
     * @param ValidationErrorsType $type
     * @param ValidationErrorSchema[] $validationErrors
     */
    public function __construct(ValidationErrorsType $type, array $validationErrors)
    {
        $this->type = $type;
        $this->validationErrors = $validationErrors;
    }

    /**
     * @return ValidationErrorsType
     */
    public function getType(): ValidationErrorsType
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message ?? null;
    }

    /**
     * @return ValidationErrorSchema[]
     */
    public function getValidationErrors(): array
    {
        return $this->validationErrors;
    }

    /**
     * @param ValidationErrorsType $type
     * @return self
     */
    public function withType(ValidationErrorsType $type): self
    {
        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    /**
     * @param string $message
     * @return self
     */
    public function withMessage(string $message): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($message, static::$schema['properties']['message']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->message = $message;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMessage(): self
    {
        $clone = clone $this;
        unset($clone->message);

        return $clone;
    }

    /**
     * @param ValidationErrorSchema[] $validationErrors
     * @return self
     */
    public function withValidationErrors(array $validationErrors): self
    {
        $clone = clone $this;
        $clone->validationErrors = $validationErrors;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ValidationErrors Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ValidationErrors
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $type = ValidationErrorsType::from($input->{'type'});
        $message = null;
        if (isset($input->{'message'})) {
            $message = $input->{'message'};
        }
        $validationErrors = array_map(fn (array $i): ValidationErrorSchema => ValidationErrorSchema::buildFromInput($i, validate: $validate), $input->{'validationErrors'});

        $obj = new self($type, $validationErrors);
        $obj->message = $message;
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
        $output['type'] = ($this->type)->value;
        if (isset($this->message)) {
            $output['message'] = $this->message;
        }
        $output['validationErrors'] = array_map(fn (ValidationErrorSchema $i): array => $i->toJson(), $this->validationErrors);

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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
    }
}
