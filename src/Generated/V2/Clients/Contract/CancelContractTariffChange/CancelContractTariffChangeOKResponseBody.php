<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTariffChange;

use InvalidArgumentException;
use JsonSchema\Validator;

class CancelContractTariffChangeOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'contractId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'contractItemId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'isCancelled' => [
                'type' => 'boolean',
            ],
        ],
    ];

    private ?string $contractId = null;

    private ?string $contractItemId = null;

    private ?bool $isCancelled = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getContractId(): ?string
    {
        return $this->contractId ?? null;
    }

    public function getContractItemId(): ?string
    {
        return $this->contractItemId ?? null;
    }

    public function getIsCancelled(): ?bool
    {
        return $this->isCancelled ?? null;
    }

    public function withContractId(string $contractId): self
    {
        $validator = new Validator();
        $validator->validate($contractId, self::$schema['properties']['contractId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractId = $contractId;

        return $clone;
    }

    public function withoutContractId(): self
    {
        $clone = clone $this;
        unset($clone->contractId);

        return $clone;
    }

    public function withContractItemId(string $contractItemId): self
    {
        $validator = new Validator();
        $validator->validate($contractItemId, self::$schema['properties']['contractItemId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractItemId = $contractItemId;

        return $clone;
    }

    public function withoutContractItemId(): self
    {
        $clone = clone $this;
        unset($clone->contractItemId);

        return $clone;
    }

    public function withIsCancelled(bool $isCancelled): self
    {
        $validator = new Validator();
        $validator->validate($isCancelled, self::$schema['properties']['isCancelled']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isCancelled = $isCancelled;

        return $clone;
    }

    public function withoutIsCancelled(): self
    {
        $clone = clone $this;
        unset($clone->isCancelled);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CancelContractTariffChangeOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CancelContractTariffChangeOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contractId = null;
        if (isset($input->{'contractId'})) {
            $contractId = $input->{'contractId'};
        }
        $contractItemId = null;
        if (isset($input->{'contractItemId'})) {
            $contractItemId = $input->{'contractItemId'};
        }
        $isCancelled = null;
        if (isset($input->{'isCancelled'})) {
            $isCancelled = (bool)($input->{'isCancelled'});
        }

        $obj = new self();
        $obj->contractId = $contractId;
        $obj->contractItemId = $contractItemId;
        $obj->isCancelled = $isCancelled;
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
        if (isset($this->contractId)) {
            $output['contractId'] = $this->contractId;
        }
        if (isset($this->contractItemId)) {
            $output['contractItemId'] = $this->contractItemId;
        }
        if (isset($this->isCancelled)) {
            $output['isCancelled'] = $this->isCancelled;
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
        $validator = new \Mittwald\ApiClient\Validator\Validator();
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, self::$schema);

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
