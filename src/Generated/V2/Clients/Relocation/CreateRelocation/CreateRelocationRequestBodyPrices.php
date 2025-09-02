<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateRelocation;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateRelocationRequestBodyPrices
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'positions' => [
                'items' => [
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
                ],
                'type' => 'array',
            ],
            'total' => [
                'minimum' => 0,
                'type' => 'number',
            ],
        ],
        'required' => [
            'positions',
            'total',
        ],
        'type' => 'object',
    ];

    /**
     * @var CreateRelocationRequestBodyPricesPositionsItem[]
     */
    private array $positions;

    private int|float $total;

    /**
     * @param CreateRelocationRequestBodyPricesPositionsItem[] $positions
     */
    public function __construct(array $positions, int|float $total)
    {
        $this->positions = $positions;
        $this->total = $total;
    }

    /**
     * @return CreateRelocationRequestBodyPricesPositionsItem[]
     */
    public function getPositions(): array
    {
        return $this->positions;
    }

    public function getTotal(): int|float
    {
        return $this->total;
    }

    /**
     * @param CreateRelocationRequestBodyPricesPositionsItem[] $positions
     */
    public function withPositions(array $positions): self
    {
        $clone = clone $this;
        $clone->positions = $positions;

        return $clone;
    }

    public function withTotal(int|float $total): self
    {
        $validator = new Validator();
        $validator->validate($total, self::$internalValidationSchema['properties']['total']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->total = $total;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateRelocationRequestBodyPrices Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateRelocationRequestBodyPrices
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $positions = array_map(fn (array|object $i): CreateRelocationRequestBodyPricesPositionsItem => CreateRelocationRequestBodyPricesPositionsItem::buildFromInput($i, validate: $validate), $input->{'positions'});
        $total = str_contains((string)($input->{'total'}), '.') ? (float)($input->{'total'}) : (int)($input->{'total'});

        $obj = new self($positions, $total);

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
        $output['positions'] = array_map(fn (CreateRelocationRequestBodyPricesPositionsItem $i) => $i->toJson(), $this->positions);
        $output['total'] = $this->total;

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
        $this->positions = array_map(fn (CreateRelocationRequestBodyPricesPositionsItem $i) => clone $i, $this->positions);
    }
}
