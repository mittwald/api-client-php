<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

class ServerOrderPreview
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'customerId' => [
                'example' => 'f3435305-fd26-470e-9f21-43d9be7e67e7',
                'type' => 'string',
            ],
            'description' => [
                'example' => 'My first project',
                'type' => 'string',
            ],
            'diskspaceInGiB' => [
                'example' => 100,
                'type' => 'number',
            ],
            'machineType' => [
                'example' => 'shared.xlarge',
                'type' => 'string',
            ],
        ],
        'required' => [
            'machineType',
            'diskspaceInGiB',
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $customerId = null;

    /**
     * @var string|null
     */
    private ?string $description = null;

    /**
     * @var int|float
     */
    private int|float $diskspaceInGiB;

    /**
     * @var string
     */
    private string $machineType;

    /**
     * @param int|float $diskspaceInGiB
     * @param string $machineType
     */
    public function __construct(int|float $diskspaceInGiB, string $machineType)
    {
        $this->diskspaceInGiB = $diskspaceInGiB;
        $this->machineType = $machineType;
    }

    /**
     * @return string|null
     */
    public function getCustomerId() : ?string
    {
        return $this->customerId ?? null;
    }

    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description ?? null;
    }

    /**
     * @return int|float
     */
    public function getDiskspaceInGiB() : int|float
    {
        return $this->diskspaceInGiB;
    }

    /**
     * @return string
     */
    public function getMachineType() : string
    {
        return $this->machineType;
    }

    /**
     * @param string $customerId
     * @return self
     */
    public function withCustomerId(string $customerId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($customerId, static::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCustomerId() : self
    {
        $clone = clone $this;
        unset($clone->customerId);

        return $clone;
    }

    /**
     * @param string $description
     * @return self
     */
    public function withDescription(string $description) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDescription() : self
    {
        $clone = clone $this;
        unset($clone->description);

        return $clone;
    }

    /**
     * @param int|float $diskspaceInGiB
     * @return self
     */
    public function withDiskspaceInGiB(int|float $diskspaceInGiB) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($diskspaceInGiB, static::$schema['properties']['diskspaceInGiB']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->diskspaceInGiB = $diskspaceInGiB;

        return $clone;
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
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ServerOrderPreview Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : ServerOrderPreview
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = null;
        if (isset($input->{'customerId'})) {
            $customerId = $input->{'customerId'};
        }
        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $diskspaceInGiB = str_contains($input->{'diskspaceInGiB'}, '.') ? (float)($input->{'diskspaceInGiB'}) : (int)($input->{'diskspaceInGiB'});
        $machineType = $input->{'machineType'};

        $obj = new self($diskspaceInGiB, $machineType);
        $obj->customerId = $customerId;
        $obj->description = $description;
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
        if (isset($this->customerId)) {
            $output['customerId'] = $this->customerId;
        }
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        $output['diskspaceInGiB'] = $this->diskspaceInGiB;
        $output['machineType'] = $this->machineType;

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

