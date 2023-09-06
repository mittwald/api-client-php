<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Project;

use InvalidArgumentException;
use JsonSchema\Validator;

class HardwareSpec
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'cpu' => [
                'example' => '2',
                'type' => 'string',
            ],
            'mem' => [
                'example' => '4Gi',
                'type' => 'string',
            ],
            'storage' => [
                'example' => '50Gi',
                'type' => 'string',
            ],
        ],
        'required' => [
            'cpu',
            'mem',
            'storage',
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
    private string $mem;

    /**
     * @var string
     */
    private string $storage;

    /**
     * @param string $cpu
     * @param string $mem
     * @param string $storage
     */
    public function __construct(string $cpu, string $mem, string $storage)
    {
        $this->cpu = $cpu;
        $this->mem = $mem;
        $this->storage = $storage;
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
    public function getMem(): string
    {
        return $this->mem;
    }

    /**
     * @return string
     */
    public function getStorage(): string
    {
        return $this->storage;
    }

    /**
     * @param string $cpu
     * @return self
     */
    public function withCpu(string $cpu): self
    {
        $validator = new Validator();
        $validator->validate($cpu, static::$schema['properties']['cpu']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->cpu = $cpu;

        return $clone;
    }

    /**
     * @param string $mem
     * @return self
     */
    public function withMem(string $mem): self
    {
        $validator = new Validator();
        $validator->validate($mem, static::$schema['properties']['mem']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mem = $mem;

        return $clone;
    }

    /**
     * @param string $storage
     * @return self
     */
    public function withStorage(string $storage): self
    {
        $validator = new Validator();
        $validator->validate($storage, static::$schema['properties']['storage']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->storage = $storage;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return HardwareSpec Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): HardwareSpec
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $cpu = $input->{'cpu'};
        $mem = $input->{'mem'};
        $storage = $input->{'storage'};

        $obj = new self($cpu, $mem, $storage);

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
        $output['mem'] = $this->mem;
        $output['storage'] = $this->storage;

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
        $validator = new Validator();
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
