<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Fee;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * A Fee of a Resource
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ResourceFee
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'description' => 'A Fee of a Resource',
        'properties' => [
            'feeStrategy' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.fee.FeeStrategy',
            ],
            'id' => [
                'description' => 'The id of the given Resource',
                'example' => '1241a1de-b633-4e6e-9aa5-7e878ccd6864',
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
        ],
        'type' => 'object',
    ];

    private OneTimePaymentFeeStrategy|PeriodBasedFeeStrategy|null $feeStrategy = null;

    /**
     * The id of the given Resource
     */
    private string $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getFeeStrategy(): OneTimePaymentFeeStrategy|PeriodBasedFeeStrategy|null
    {
        return $this->feeStrategy;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function withFeeStrategy(OneTimePaymentFeeStrategy|PeriodBasedFeeStrategy $feeStrategy): self
    {
        $clone = clone $this;
        $clone->feeStrategy = $feeStrategy;

        return $clone;
    }

    public function withoutFeeStrategy(): self
    {
        $clone = clone $this;
        unset($clone->feeStrategy);

        return $clone;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, self::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ResourceFee Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ResourceFee
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $feeStrategy = null;
        if (isset($input->{'feeStrategy'})) {
            $feeStrategy = match (true) {
                default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
                OneTimePaymentFeeStrategy::validateInput($input->{'feeStrategy'}, true) => OneTimePaymentFeeStrategy::buildFromInput($input->{'feeStrategy'}, validate: $validate),
                PeriodBasedFeeStrategy::validateInput($input->{'feeStrategy'}, true) => PeriodBasedFeeStrategy::buildFromInput($input->{'feeStrategy'}, validate: $validate),
            };
        }
        $id = $input->{'id'};

        $obj = new self($id);
        $obj->feeStrategy = $feeStrategy;
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
        if (isset($this->feeStrategy)) {
            $output['feeStrategy'] = match (true) {
                default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
                ($this->feeStrategy) instanceof OneTimePaymentFeeStrategy, ($this->feeStrategy) instanceof PeriodBasedFeeStrategy => $this->feeStrategy->toJson(),
            };
        }
        $output['id'] = $this->id;

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
