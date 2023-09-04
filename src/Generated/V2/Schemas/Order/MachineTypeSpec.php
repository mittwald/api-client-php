<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

class MachineTypeSpec
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'machineType' => [
                'example' => 'prospace.2cpu.4gb',
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $machineType = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getMachineType() : ?string
    {
        return $this->machineType ?? null;
    }

    /**
     * @param string $machineType
     * @return self
     */
    public function withMachineType(string $machineType) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($machineType, static::$schema['properties']['machineType']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->machineType = $machineType;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMachineType() : self
    {
        $clone = clone $this;
        unset($clone->machineType);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MachineTypeSpec Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : MachineTypeSpec
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $machineType = null;
        if (isset($input->{'machineType'})) {
            $machineType = $input->{'machineType'};
        }

        $obj = new self();
        $obj->machineType = $machineType;
        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson() : array
    {
        $output = [];
        if (isset($this->machineType)) {
            $output['machineType'] = $this->machineType;
        }

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
    }
}

