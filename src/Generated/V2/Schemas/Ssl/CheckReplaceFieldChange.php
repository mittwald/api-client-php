<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Ssl;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.ssl.CheckReplaceFieldChange.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class CheckReplaceFieldChange
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'newValue' => [
                'type' => 'string',
            ],
            'oldValue' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'oldValue',
            'newValue',
        ],
        'type' => 'object',
    ];

    private string $newValue;

    private string $oldValue;

    public function __construct(string $newValue, string $oldValue)
    {
        $this->newValue = $newValue;
        $this->oldValue = $oldValue;
    }

    public function getNewValue(): string
    {
        return $this->newValue;
    }

    public function getOldValue(): string
    {
        return $this->oldValue;
    }

    public function withNewValue(string $newValue): self
    {
        $validator = new Validator();
        $validator->validate($newValue, static::$schema['properties']['newValue']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->newValue = $newValue;

        return $clone;
    }

    public function withOldValue(string $oldValue): self
    {
        $validator = new Validator();
        $validator->validate($oldValue, static::$schema['properties']['oldValue']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->oldValue = $oldValue;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CheckReplaceFieldChange Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CheckReplaceFieldChange
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $newValue = $input->{'newValue'};
        $oldValue = $input->{'oldValue'};

        $obj = new self($newValue, $oldValue);

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
        $output['newValue'] = $this->newValue;
        $output['oldValue'] = $this->oldValue;

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
    }
}