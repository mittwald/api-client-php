<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.order.DomainOrder.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class DomainOrderHandleData
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'adminC' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.order.DomainHandleField',
                ],
                'type' => 'array',
            ],
            'ownerC' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.order.DomainHandleField',
                ],
                'minItems' => 1,
                'type' => 'array',
            ],
        ],
        'required' => [
            'ownerC',
        ],
        'type' => 'object',
    ];

    /**
     * @var DomainHandleField[]|null
     */
    private ?array $adminC = null;

    /**
     * @var DomainHandleField[]
     */
    private array $ownerC;

    /**
     * @param DomainHandleField[] $ownerC
     */
    public function __construct(array $ownerC)
    {
        $this->ownerC = $ownerC;
    }

    /**
     * @return DomainHandleField[]|null
     */
    public function getAdminC(): ?array
    {
        return $this->adminC ?? null;
    }

    /**
     * @return DomainHandleField[]
     */
    public function getOwnerC(): array
    {
        return $this->ownerC;
    }

    /**
     * @param DomainHandleField[] $adminC
     */
    public function withAdminC(array $adminC): self
    {
        $clone = clone $this;
        $clone->adminC = $adminC;

        return $clone;
    }

    public function withoutAdminC(): self
    {
        $clone = clone $this;
        unset($clone->adminC);

        return $clone;
    }

    /**
     * @param DomainHandleField[] $ownerC
     */
    public function withOwnerC(array $ownerC): self
    {
        $clone = clone $this;
        $clone->ownerC = $ownerC;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DomainOrderHandleData Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DomainOrderHandleData
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $adminC = null;
        if (isset($input->{'adminC'})) {
            $adminC = array_map(fn (array|object $i): DomainHandleField => DomainHandleField::buildFromInput($i, validate: $validate), $input->{'adminC'});
        }
        $ownerC = array_map(fn (array|object $i): DomainHandleField => DomainHandleField::buildFromInput($i, validate: $validate), $input->{'ownerC'});

        $obj = new self($ownerC);
        $obj->adminC = $adminC;
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
        if (isset($this->adminC)) {
            $output['adminC'] = array_map(fn (DomainHandleField $i): array => $i->toJson(), $this->adminC);
        }
        $output['ownerC'] = array_map(fn (DomainHandleField $i): array => $i->toJson(), $this->ownerC);

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
