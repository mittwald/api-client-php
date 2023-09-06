<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use InvalidArgumentException;

class HardwareSpec
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'ram' => [
                'example' => 2,
                'type' => 'number',
            ],
            'vcpu' => [
                'example' => 1,
                'type' => 'number',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var int|float|null
     */
    private int|float|null $ram = null;

    /**
     * @var int|float|null
     */
    private int|float|null $vcpu = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return int|float|null
     */
    public function getRam(): int|float|null
    {
        return $this->ram;
    }

    /**
     * @return int|float|null
     */
    public function getVcpu(): int|float|null
    {
        return $this->vcpu;
    }

    /**
     * @param int|float $ram
     * @return self
     */
    public function withRam(int|float $ram): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($ram, static::$schema['properties']['ram']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->ram = $ram;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutRam(): self
    {
        $clone = clone $this;
        unset($clone->ram);

        return $clone;
    }

    /**
     * @param int|float $vcpu
     * @return self
     */
    public function withVcpu(int|float $vcpu): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($vcpu, static::$schema['properties']['vcpu']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->vcpu = $vcpu;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutVcpu(): self
    {
        $clone = clone $this;
        unset($clone->vcpu);

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
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $ram = null;
        if (isset($input->{'ram'})) {
            $ram = str_contains($input->{'ram'}, '.') ? (float)($input->{'ram'}) : (int)($input->{'ram'});
        }
        $vcpu = null;
        if (isset($input->{'vcpu'})) {
            $vcpu = str_contains($input->{'vcpu'}, '.') ? (float)($input->{'vcpu'}) : (int)($input->{'vcpu'});
        }

        $obj = new self();
        $obj->ram = $ram;
        $obj->vcpu = $vcpu;
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
        if (isset($this->ram)) {
            $output['ram'] = $this->ram;
        }
        if (isset($this->vcpu)) {
            $output['vcpu'] = $this->vcpu;
        }

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
