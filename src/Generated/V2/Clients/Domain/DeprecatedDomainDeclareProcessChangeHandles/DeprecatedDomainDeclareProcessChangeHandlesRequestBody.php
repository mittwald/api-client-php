<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareProcessChangeHandles;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Domain\HandleField;

class DeprecatedDomainDeclareProcessChangeHandlesRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'ownerC' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.domain.HandleField',
                ],
                'minItems' => 1,
                'type' => 'array',
            ],
        ],
        'required' => [
            'ownerC',
        ],
    ];

    /**
     * @var HandleField[]
     */
    private array $ownerC;

    /**
     * @param HandleField[] $ownerC
     */
    public function __construct(array $ownerC)
    {
        $this->ownerC = $ownerC;
    }

    /**
     * @return HandleField[]
     */
    public function getOwnerC(): array
    {
        return $this->ownerC;
    }

    /**
     * @param HandleField[] $ownerC
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
     * @return DeprecatedDomainDeclareProcessChangeHandlesRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedDomainDeclareProcessChangeHandlesRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $ownerC = array_map(fn (array|object $i): HandleField => HandleField::buildFromInput($i, validate: $validate), $input->{'ownerC'});

        $obj = new self($ownerC);

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
        $output['ownerC'] = array_map(fn (HandleField $i): array => $i->toJson(), $this->ownerC);

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
