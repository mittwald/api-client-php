<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateRelocation;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateRelocationRequestBodyPricesPositionsItem
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'name' => [
                'minLength' => 1,
                'type' => 'string',
            ],
            'price' => [
                'minimum' => 0,
                'type' => 'number',
            ],
        ],
        'required' => [
            'name',
            'price',
        ],
        'type' => 'object',
    ];

    private string $name;

    private int|float $price;

    /**
     * @param int|float $price
     */
    public function __construct(string $name, int|float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int|float
    {
        return $this->price;
    }

    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, self::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * @param int|float $price
     */
    public function withPrice(int|float $price): self
    {
        $validator = new Validator();
        $validator->validate($price, self::$schema['properties']['price']);
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
     * @return CreateRelocationRequestBodyPricesPositionsItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateRelocationRequestBodyPricesPositionsItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $name = $input->{'name'};
        $price = str_contains((string)($input->{'price'}), '.') ? (float)($input->{'price'}) : (int)($input->{'price'});

        $obj = new self($name, $price);

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
        $output['name'] = $this->name;
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
