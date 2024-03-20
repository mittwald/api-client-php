<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mailmigration;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for
 * de.mittwald.v1.mailmigration.CheckMigrationIsPossibleErrorResponse.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class CheckMigrationIsPossibleErrorResponse
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'errors' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.mailmigration.PossibleCheckErrors',
            ],
        ],
        'type' => 'object',
    ];

    private ?PossibleCheckErrors $errors = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return
     * PossibleCheckErrors|null
     */
    public function getErrors(): ?PossibleCheckErrors
    {
        return $this->errors ?? null;
    }

    public function withErrors(PossibleCheckErrors $errors): self
    {
        $clone = clone $this;
        $clone->errors = $errors;

        return $clone;
    }

    public function withoutErrors(): self
    {
        $clone = clone $this;
        unset($clone->errors);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CheckMigrationIsPossibleErrorResponse Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CheckMigrationIsPossibleErrorResponse
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $errors = null;
        if (isset($input->{'errors'})) {
            $errors = PossibleCheckErrors::buildFromInput($input->{'errors'}, validate: $validate);
        }

        $obj = new self();
        $obj->errors = $errors;
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
        if (isset($this->errors)) {
            $output['errors'] = $this->errors->toJson();
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
