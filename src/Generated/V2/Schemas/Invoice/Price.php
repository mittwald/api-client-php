<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

use InvalidArgumentException;
use JsonSchema\Validator;

class Price
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'currency' => [
                'enum' => [
                    'EUR',
                ],
                'type' => 'string',
            ],
            'value' => [
                'example' => 1000,
                'type' => 'integer',
            ],
        ],
        'required' => [
            'value',
            'currency',
        ],
        'type' => 'object',
    ];

    /**
     * @var PriceCurrency
     */
    private PriceCurrency $currency;

    /**
     * @var int
     */
    private int $value;

    /**
     * @param PriceCurrency $currency
     * @param int $value
     */
    public function __construct(PriceCurrency $currency, int $value)
    {
        $this->currency = $currency;
        $this->value = $value;
    }

    /**
     * @return PriceCurrency
     */
    public function getCurrency(): PriceCurrency
    {
        return $this->currency;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param PriceCurrency $currency
     * @return self
     */
    public function withCurrency(PriceCurrency $currency): self
    {
        $clone = clone $this;
        $clone->currency = $currency;

        return $clone;
    }

    /**
     * @param int $value
     * @return self
     */
    public function withValue(int $value): self
    {
        $validator = new Validator();
        $validator->validate($value, static::$schema['properties']['value']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->value = $value;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Price Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Price
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $currency = PriceCurrency::from($input->{'currency'});
        $value = (int)($input->{'value'});

        $obj = new self($currency, $value);

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
        $output['currency'] = ($this->currency)->value;
        $output['value'] = $this->value;

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
        $validator = new Validator();
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
