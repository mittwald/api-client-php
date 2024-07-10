<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Fee;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * A strategy for fees that occur once.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class OneTimePaymentFeeStrategy
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'description' => 'A strategy for fees that occur once.',
        'properties' => [
            'price' => [
                'description' => 'The one-time price in Euro Cents.',
                'type' => 'number',
            ],
        ],
        'required' => [
            'price',
        ],
        'type' => 'object',
    ];

    /**
     * The one-time price in Euro Cents.
     */
    private int|float $price;

    /**
     * @param int|float $price
     */
    public function __construct(int|float $price)
    {
        $this->price = $price;
    }

    public function getPrice(): int|float
    {
        return $this->price;
    }

    /**
     * @param int|float $price
     */
    public function withPrice(int|float $price): self
    {
        $validator = new Validator();
        $validator->validate($price, static::$schema['properties']['price']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->price = $price;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return OneTimePaymentFeeStrategy Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): OneTimePaymentFeeStrategy
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $price = str_contains((string)($input->{'price'}), '.') ? (float)($input->{'price'}) : (int)($input->{'price'});

        $obj = new self($price);

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
        $output['price'] = $this->price;

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