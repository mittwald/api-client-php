<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use InvalidArgumentException;

class OrderSummary
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'nonRecurring' => [
                'example' => 1000,
                'type' => 'number',
            ],
            'recurring' => [
                'example' => 9000,
                'type' => 'number',
            ],
            'summary' => [
                'description' => 'The total price of the order',
                'example' => 10000,
                'type' => 'number',
            ],
        ],
        'required' => [
            'summary',
            'recurring',
            'nonRecurring',
        ],
        'type' => 'object',
    ];

    /**
     * @var int|float
     */
    private int|float $nonRecurring;

    /**
     * @var int|float
     */
    private int|float $recurring;

    /**
     * The total price of the order
     *
     * @var int|float
     */
    private int|float $summary;

    /**
     * @param int|float $nonRecurring
     * @param int|float $recurring
     * @param int|float $summary
     */
    public function __construct(int|float $nonRecurring, int|float $recurring, int|float $summary)
    {
        $this->nonRecurring = $nonRecurring;
        $this->recurring = $recurring;
        $this->summary = $summary;
    }

    /**
     * @return int|float
     */
    public function getNonRecurring(): int|float
    {
        return $this->nonRecurring;
    }

    /**
     * @return int|float
     */
    public function getRecurring(): int|float
    {
        return $this->recurring;
    }

    /**
     * @return int|float
     */
    public function getSummary(): int|float
    {
        return $this->summary;
    }

    /**
     * @param int|float $nonRecurring
     * @return self
     */
    public function withNonRecurring(int|float $nonRecurring): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($nonRecurring, static::$schema['properties']['nonRecurring']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->nonRecurring = $nonRecurring;

        return $clone;
    }

    /**
     * @param int|float $recurring
     * @return self
     */
    public function withRecurring(int|float $recurring): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($recurring, static::$schema['properties']['recurring']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->recurring = $recurring;

        return $clone;
    }

    /**
     * @param int|float $summary
     * @return self
     */
    public function withSummary(int|float $summary): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($summary, static::$schema['properties']['summary']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->summary = $summary;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return OrderSummary Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): OrderSummary
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $nonRecurring = str_contains($input->{'nonRecurring'}, '.') ? (float)($input->{'nonRecurring'}) : (int)($input->{'nonRecurring'});
        $recurring = str_contains($input->{'recurring'}, '.') ? (float)($input->{'recurring'}) : (int)($input->{'recurring'});
        $summary = str_contains($input->{'summary'}, '.') ? (float)($input->{'summary'}) : (int)($input->{'summary'});

        $obj = new self($nonRecurring, $recurring, $summary);

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
        $output['nonRecurring'] = $this->nonRecurring;
        $output['recurring'] = $this->recurring;
        $output['summary'] = $this->summary;

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
