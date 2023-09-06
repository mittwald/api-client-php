<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

use InvalidArgumentException;

class CreateDomainHandleData
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'adminC' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.domain.HandleField',
                ],
                'type' => 'array',
            ],
            'ownerC' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.domain.HandleField',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'ownerC',
        ],
        'type' => 'object',
    ];

    /**
     * @var HandleField[]|null
     */
    private ?array $adminC = null;

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
     * @return HandleField[]|null
     */
    public function getAdminC(): ?array
    {
        return $this->adminC ?? null;
    }

    /**
     * @return HandleField[]
     */
    public function getOwnerC(): array
    {
        return $this->ownerC;
    }

    /**
     * @param HandleField[] $adminC
     * @return self
     */
    public function withAdminC(array $adminC): self
    {
        $clone = clone $this;
        $clone->adminC = $adminC;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutAdminC(): self
    {
        $clone = clone $this;
        unset($clone->adminC);

        return $clone;
    }

    /**
     * @param HandleField[] $ownerC
     * @return self
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
     * @return CreateDomainHandleData Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateDomainHandleData
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $adminC = null;
        if (isset($input->{'adminC'})) {
            $adminC = array_map(fn (array $i): HandleField => HandleField::buildFromInput($i, validate: $validate), $input->{'adminC'});
        }
        $ownerC = array_map(fn (array $i): HandleField => HandleField::buildFromInput($i, validate: $validate), $input->{'ownerC'});

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
            $output['adminC'] = array_map(fn (HandleField $i): array => $i->toJson(), $this->adminC);
        }
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
