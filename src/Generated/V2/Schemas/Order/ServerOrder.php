<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use InvalidArgumentException;
use JsonSchema\Validator;

class ServerOrder
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
                'minLength' => 1,
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
            'useFreeTrial' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'customerId',
            'machineType',
            'diskspaceInGiB',
            'description',
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
     * @var string
     */
    private string $machineType;

    /**
     * @var bool|null
     */
    private ?bool $useFreeTrial = null;

    /**
     * @param string $customerId
     * @param string $description
     * @param int|float $diskspaceInGiB
     * @param string $machineType
     */
    public function __construct(string $customerId, string $description, int|float $diskspaceInGiB, string $machineType)
    {
        $this->customerId = $customerId;
        $this->description = $description;
        $this->diskspaceInGiB = $diskspaceInGiB;
        $this->machineType = $machineType;
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
     * @return string
     */
    public function getMachineType(): string
    {
        return $this->machineType;
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
        $validator = new Validator();
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
        $validator = new Validator();
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
     * @param bool $useFreeTrial
     * @return self
     */
    public function withUseFreeTrial(bool $useFreeTrial): self
    {
        $validator = new Validator();
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
     * @return ServerOrder Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ServerOrder
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = $input->{'customerId'};
        $description = $input->{'description'};
        $diskspaceInGiB = str_contains($input->{'diskspaceInGiB'}, '.') ? (float)($input->{'diskspaceInGiB'}) : (int)($input->{'diskspaceInGiB'});
        $machineType = $input->{'machineType'};
        $useFreeTrial = null;
        if (isset($input->{'useFreeTrial'})) {
            $useFreeTrial = (bool)($input->{'useFreeTrial'});
        }

        $obj = new self($customerId, $description, $diskspaceInGiB, $machineType);
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
        $output['machineType'] = $this->machineType;
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
