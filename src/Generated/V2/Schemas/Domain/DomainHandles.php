<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

use InvalidArgumentException;

class DomainHandles
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'adminC' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.domain.HandleReadable',
            ],
            'ownerC' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.domain.HandleReadable',
            ],
        ],
        'required' => [
            'ownerC',
        ],
        'type' => 'object',
    ];

    /**
     * @var HandleReadable|null
     */
    private ?HandleReadable $adminC = null;

    /**
     * @var HandleReadable
     */
    private HandleReadable $ownerC;

    /**
     * @param HandleReadable $ownerC
     */
    public function __construct(HandleReadable $ownerC)
    {
        $this->ownerC = $ownerC;
    }

    /**
     * @return HandleReadable|null
     */
    public function getAdminC(): ?HandleReadable
    {
        return $this->adminC ?? null;
    }

    /**
     * @return HandleReadable
     */
    public function getOwnerC(): HandleReadable
    {
        return $this->ownerC;
    }

    /**
     * @param HandleReadable $adminC
     * @return self
     */
    public function withAdminC(HandleReadable $adminC): self
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
     * @param HandleReadable $ownerC
     * @return self
     */
    public function withOwnerC(HandleReadable $ownerC): self
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
     * @return DomainHandles Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DomainHandles
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $adminC = null;
        if (isset($input->{'adminC'})) {
            $adminC = HandleReadable::buildFromInput($input->{'adminC'}, validate: $validate);
        }
        $ownerC = HandleReadable::buildFromInput($input->{'ownerC'}, validate: $validate);

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
            $output['adminC'] = $this->adminC->toJson();
        }
        $output['ownerC'] = $this->ownerC->toJson();

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
