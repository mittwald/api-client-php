<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Project;

use InvalidArgumentException;

class VisitorSpec
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'storage' => [
                'type' => 'string',
            ],
            'visitors' => [
                'type' => 'number',
            ],
        ],
        'required' => [
            'visitors',
            'storage',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $storage;

    /**
     * @var int|float
     */
    private int|float $visitors;

    /**
     * @param string $storage
     * @param int|float $visitors
     */
    public function __construct(string $storage, int|float $visitors)
    {
        $this->storage = $storage;
        $this->visitors = $visitors;
    }

    /**
     * @return string
     */
    public function getStorage(): string
    {
        return $this->storage;
    }

    /**
     * @return int|float
     */
    public function getVisitors(): int|float
    {
        return $this->visitors;
    }

    /**
     * @param string $storage
     * @return self
     */
    public function withStorage(string $storage): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($storage, static::$schema['properties']['storage']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->storage = $storage;

        return $clone;
    }

    /**
     * @param int|float $visitors
     * @return self
     */
    public function withVisitors(int|float $visitors): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($visitors, static::$schema['properties']['visitors']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->visitors = $visitors;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return VisitorSpec Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): VisitorSpec
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $storage = $input->{'storage'};
        $visitors = str_contains($input->{'visitors'}, '.') ? (float)($input->{'visitors'}) : (int)($input->{'visitors'});

        $obj = new self($storage, $visitors);

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
        $output['storage'] = $this->storage;
        $output['visitors'] = $this->visitors;

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
