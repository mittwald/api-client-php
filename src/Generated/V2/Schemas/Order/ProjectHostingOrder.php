<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use InvalidArgumentException;

class ProjectHostingOrder
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
            'useFreeTrial' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'customerId',
            'diskspaceInGiB',
            'description',
            'spec',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $customerId;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var int|float
     */
    private int|float $diskspaceInGiB;

    /**
     * @var MachineTypeSpec|HardwareSpec
     */
    private MachineTypeSpec|HardwareSpec $spec;

    /**
     * @var bool|null
     */
    private ?bool $useFreeTrial = null;

    /**
     * @param string $customerId
     * @param string $description
     * @param int|float $diskspaceInGiB
     * @param MachineTypeSpec|HardwareSpec $spec
     */
    public function __construct(string $customerId, string $description, int|float $diskspaceInGiB, HardwareSpec|MachineTypeSpec $spec)
    {
        $this->customerId = $customerId;
        $this->description = $description;
        $this->diskspaceInGiB = $diskspaceInGiB;
        $this->spec = $spec;
    }

    /**
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int|float
     */
    public function getDiskspaceInGiB(): int|float
    {
        return $this->diskspaceInGiB;
    }

    /**
     * @return
     * MachineTypeSpec|HardwareSpec
     */
    public function getSpec(): HardwareSpec|MachineTypeSpec
    {
        return $this->spec;
    }

    /**
     * @return bool|null
     */
    public function getUseFreeTrial(): ?bool
    {
        return $this->useFreeTrial ?? null;
    }

    /**
     * @param string $customerId
     * @return self
     */
    public function withCustomerId(string $customerId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($customerId, static::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    /**
     * @param string $description
     * @return self
     */
    public function withDescription(string $description): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @param int|float $diskspaceInGiB
     * @return self
     */
    public function withDiskspaceInGiB(int|float $diskspaceInGiB): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($diskspaceInGiB, static::$schema['properties']['diskspaceInGiB']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->diskspaceInGiB = $diskspaceInGiB;

        return $clone;
    }

    /**
     * @param MachineTypeSpec|HardwareSpec $spec
     * @return self
     */
    public function withSpec(HardwareSpec|MachineTypeSpec $spec): self
    {
        $clone = clone $this;
        $clone->spec = $spec;

        return $clone;
    }

    /**
     * @param bool $useFreeTrial
     * @return self
     */
    public function withUseFreeTrial(bool $useFreeTrial): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($useFreeTrial, static::$schema['properties']['useFreeTrial']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->useFreeTrial = $useFreeTrial;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutUseFreeTrial(): self
    {
        $clone = clone $this;
        unset($clone->useFreeTrial);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ProjectHostingOrder Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ProjectHostingOrder
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = $input->{'customerId'};
        $description = $input->{'description'};
        $diskspaceInGiB = str_contains($input->{'diskspaceInGiB'}, '.') ? (float)($input->{'diskspaceInGiB'}) : (int)($input->{'diskspaceInGiB'});
        $spec = match (true) {
            MachineTypeSpec::validateInput($input->{'spec'}, true) => MachineTypeSpec::buildFromInput($input->{'spec'}, validate: $validate),
            HardwareSpec::validateInput($input->{'spec'}, true) => HardwareSpec::buildFromInput($input->{'spec'}, validate: $validate),
        };
        $useFreeTrial = null;
        if (isset($input->{'useFreeTrial'})) {
            $useFreeTrial = (bool)($input->{'useFreeTrial'});
        }

        $obj = new self($customerId, $description, $diskspaceInGiB, $spec);
        $obj->useFreeTrial = $useFreeTrial;
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
        $output['customerId'] = $this->customerId;
        $output['description'] = $this->description;
        $output['diskspaceInGiB'] = $this->diskspaceInGiB;
        $output['spec'] = match (true) {
            ($this->spec) instanceof MachineTypeSpec, ($this->spec) instanceof HardwareSpec => $this->spec->toJson(),
        };
        if (isset($this->useFreeTrial)) {
            $output['useFreeTrial'] = $this->useFreeTrial;
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
        $this->spec = match (true) {
            ($this->spec) instanceof MachineTypeSpec, ($this->spec) instanceof HardwareSpec => $this->spec,
        };
    }
}
