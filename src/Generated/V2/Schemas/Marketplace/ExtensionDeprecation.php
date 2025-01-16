<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Marketplace;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * The Extension is deprecated by the contributor and will expire at the given
 * date.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ExtensionDeprecation
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'description' => 'The Extension is deprecated by the contributor and will expire at the given date.',
        'properties' => [
            'deprecatedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'deprecatedAt',
        ],
        'type' => 'object',
    ];

    private DateTime $deprecatedAt;

    public function __construct(DateTime $deprecatedAt)
    {
        $this->deprecatedAt = $deprecatedAt;
    }

    public function getDeprecatedAt(): DateTime
    {
        return $this->deprecatedAt;
    }

    public function withDeprecatedAt(DateTime $deprecatedAt): self
    {
        $clone = clone $this;
        $clone->deprecatedAt = $deprecatedAt;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionDeprecation Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionDeprecation
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $deprecatedAt = new DateTime($input->{'deprecatedAt'});

        $obj = new self($deprecatedAt);

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
        $output['deprecatedAt'] = ($this->deprecatedAt)->format(DateTime::ATOM);

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
        $this->deprecatedAt = clone $this->deprecatedAt;
    }
}
