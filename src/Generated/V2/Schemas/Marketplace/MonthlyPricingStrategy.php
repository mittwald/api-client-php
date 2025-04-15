<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Marketplace;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * A strategy for pricing that occurs monthly.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class MonthlyPricingStrategy
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'description' => 'A strategy for pricing that occurs monthly.',
        'properties' => [
            'netPrice' => [
                'description' => 'The monthly price in Euro Cents before tax.',
                'example' => 500,
                'format' => 'int32',
                'type' => 'integer',
            ],
        ],
        'required' => [
            'netPrice',
        ],
        'type' => 'object',
    ];

    /**
     * The monthly price in Euro Cents before tax.
     */
    private int $netPrice;

    public function __construct(int $netPrice)
    {
        $this->netPrice = $netPrice;
    }

    public function getNetPrice(): int
    {
        return $this->netPrice;
    }

    public function withNetPrice(int $netPrice): self
    {
        $validator = new Validator();
        $validator->validate($netPrice, self::$schema['properties']['netPrice']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->netPrice = $netPrice;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MonthlyPricingStrategy Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MonthlyPricingStrategy
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $netPrice = (int)($input->{'netPrice'});

        $obj = new self($netPrice);

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
        $output['netPrice'] = $this->netPrice;

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
