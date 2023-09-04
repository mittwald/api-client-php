<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

class ProjectHostingOrderPreview
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'customerId' => [
                'type' => 'string',
            ],
            'description' => [
                'example' => 'My first project',
                'type' => 'string',
            ],
            'diskspaceInGiB' => [
                'example' => 10,
                'type' => 'number',
            ],
            'spec' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.MachineTypeSpec',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.HardwareSpec',
                    ],
                ],
            ],
        ],
        'required' => [
            'diskspaceInGiB',
            'spec',
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
     * @var MachineTypeSpec|HardwareSpec
     */
    private MachineTypeSpec|HardwareSpec $spec;

    /**
     * @param int|float $diskspaceInGiB
     * @param MachineTypeSpec|HardwareSpec $spec
     */
    public function __construct(int|float $diskspaceInGiB, HardwareSpec|MachineTypeSpec $spec)
    {
        $this->diskspaceInGiB = $diskspaceInGiB;
        $this->spec = $spec;
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
     * @return
     * MachineTypeSpec|HardwareSpec
     */
    public function getSpec() : HardwareSpec|MachineTypeSpec
    {
        return $this->spec;
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
     * @param MachineTypeSpec|HardwareSpec $spec
     * @return self
     */
    public function withSpec(HardwareSpec|MachineTypeSpec $spec) : self
    {
        $clone = clone $this;
        $clone->spec = $spec;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ProjectHostingOrderPreview Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : ProjectHostingOrderPreview
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
        $spec = match (true) {
            MachineTypeSpec::validateInput($input->{'spec'}, true) => MachineTypeSpec::buildFromInput($input->{'spec'}, validate: $validate),
            HardwareSpec::validateInput($input->{'spec'}, true) => HardwareSpec::buildFromInput($input->{'spec'}, validate: $validate),
        };

        $obj = new self($diskspaceInGiB, $spec);
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
        $output['spec'] = match (true) {
            ($this->spec) instanceof MachineTypeSpec, ($this->spec) instanceof HardwareSpec => $this->spec->toJson(),
        };

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
        $this->spec = match (true) {
            ($this->spec) instanceof MachineTypeSpec, ($this->spec) instanceof HardwareSpec => $this->spec,
        };
    }
}

