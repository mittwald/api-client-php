<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use InvalidArgumentException;
use JsonSchema\Validator;

class ProjectHostingTariffChange
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'contractId' => [
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
            'contractId',
            'diskspaceInGiB',
            'spec',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $contractId;

    /**
     * @var int|float
     */
    private int|float $diskspaceInGiB;

    /**
     * @var MachineTypeSpec|HardwareSpec
     */
    private MachineTypeSpec|HardwareSpec $spec;

    /**
     * @param string $contractId
     * @param int|float $diskspaceInGiB
     * @param MachineTypeSpec|HardwareSpec $spec
     */
    public function __construct(string $contractId, int|float $diskspaceInGiB, HardwareSpec|MachineTypeSpec $spec)
    {
        $this->contractId = $contractId;
        $this->diskspaceInGiB = $diskspaceInGiB;
        $this->spec = $spec;
    }

    /**
     * @return string
     */
    public function getContractId(): string
    {
        return $this->contractId;
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
     * @param string $contractId
     * @return self
     */
    public function withContractId(string $contractId): self
    {
        $validator = new Validator();
        $validator->validate($contractId, static::$schema['properties']['contractId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractId = $contractId;

        return $clone;
    }

    /**
     * @param int|float $diskspaceInGiB
     * @return self
     */
    public function withDiskspaceInGiB(int|float $diskspaceInGiB): self
    {
        $validator = new Validator();
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
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ProjectHostingTariffChange Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ProjectHostingTariffChange
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contractId = $input->{'contractId'};
        $diskspaceInGiB = str_contains($input->{'diskspaceInGiB'}, '.') ? (float)($input->{'diskspaceInGiB'}) : (int)($input->{'diskspaceInGiB'});
        $spec = match (true) {
            MachineTypeSpec::validateInput($input->{'spec'}, true) => MachineTypeSpec::buildFromInput($input->{'spec'}, validate: $validate),
            HardwareSpec::validateInput($input->{'spec'}, true) => HardwareSpec::buildFromInput($input->{'spec'}, validate: $validate),
        };

        $obj = new self($contractId, $diskspaceInGiB, $spec);

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
        $output['contractId'] = $this->contractId;
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
        $this->spec = match (true) {
            ($this->spec) instanceof MachineTypeSpec, ($this->spec) instanceof HardwareSpec => $this->spec,
        };
    }
}
