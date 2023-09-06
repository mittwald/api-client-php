<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use InvalidArgumentException;
use JsonSchema\Validator;

class ServerTariffChange
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'contractId' => [
                'format' => 'uuid',
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
            'contractId',
            'machineType',
            'diskspaceInGiB',
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
     * @var string
     */
    private string $machineType;

    /**
     * @param string $contractId
     * @param int|float $diskspaceInGiB
     * @param string $machineType
     */
    public function __construct(string $contractId, int|float $diskspaceInGiB, string $machineType)
    {
        $this->contractId = $contractId;
        $this->diskspaceInGiB = $diskspaceInGiB;
        $this->machineType = $machineType;
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
     * @return string
     */
    public function getMachineType(): string
    {
        return $this->machineType;
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
     * @param string $machineType
     * @return self
     */
    public function withMachineType(string $machineType): self
    {
        $validator = new Validator();
        $validator->validate($machineType, static::$schema['properties']['machineType']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
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
     * @return ServerTariffChange Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ServerTariffChange
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contractId = $input->{'contractId'};
        $diskspaceInGiB = str_contains($input->{'diskspaceInGiB'}, '.') ? (float)($input->{'diskspaceInGiB'}) : (int)($input->{'diskspaceInGiB'});
        $machineType = $input->{'machineType'};

        $obj = new self($contractId, $diskspaceInGiB, $machineType);

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
        $output['machineType'] = $this->machineType;

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
