<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Article;

use InvalidArgumentException;

class ReadableArticleMachineType
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'cpu' => [
                'example' => 1,
                'type' => 'string',
            ],
            'memory' => [
                'example' => 10,
                'type' => 'string',
            ],
            'name' => [
                'example' => 'psplus-shared',
                'type' => 'string',
            ],
        ],
        'required' => [
            'name',
            'cpu',
            'memory',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $cpu;

    /**
     * @var string
     */
    private string $memory;

    /**
     * @var string
     */
    private string $name;

    /**
     * @param string $cpu
     * @param string $memory
     * @param string $name
     */
    public function __construct(string $cpu, string $memory, string $name)
    {
        $this->cpu = $cpu;
        $this->memory = $memory;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCpu(): string
    {
        return $this->cpu;
    }

    /**
     * @return string
     */
    public function getMemory(): string
    {
        return $this->memory;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $cpu
     * @return self
     */
    public function withCpu(string $cpu): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($cpu, static::$schema['properties']['cpu']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->cpu = $cpu;

        return $clone;
    }

    /**
     * @param string $memory
     * @return self
     */
    public function withMemory(string $memory): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($memory, static::$schema['properties']['memory']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->memory = $memory;

        return $clone;
    }

    /**
     * @param string $name
     * @return self
     */
    public function withName(string $name): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ReadableArticleMachineType Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ReadableArticleMachineType
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $cpu = $input->{'cpu'};
        $memory = $input->{'memory'};
        $name = $input->{'name'};

        $obj = new self($cpu, $memory, $name);

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
        $output['cpu'] = $this->cpu;
        $output['memory'] = $this->memory;
        $output['name'] = $this->name;

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
