<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandles;

use InvalidArgumentException;

class DeclareProcessChangeHandlesRequestBody
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
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
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Domain\HandleField[]
     */
    private array $ownerC;

    private array $headers = [

    ];

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Domain\HandleField[] $ownerC
     */
    public function __construct(array $ownerC)
    {
        $this->ownerC = $ownerC;
    }

    /**
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\Domain\HandleField[]
     */
    public function getOwnerC(): array
    {
        return $this->ownerC;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Domain\HandleField[] $ownerC
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
     * @return DeclareProcessChangeHandlesRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeclareProcessChangeHandlesRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $ownerC = array_map(fn (array $i): \Mittwald\ApiClient\Generated\V2\Schemas\Domain\HandleField => \Mittwald\ApiClient\Generated\V2\Schemas\Domain\HandleField::buildFromInput($i, validate: $validate), $input->{'ownerC'});

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
        $output['ownerC'] = array_map(fn (\Mittwald\ApiClient\Generated\V2\Schemas\Domain\HandleField $i): array => $i->toJson(), $this->ownerC);

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

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $domainId = urlencode($mapped['domainId']);
        return '/v2/domains/' . $domainId . '/declarations/handles';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
