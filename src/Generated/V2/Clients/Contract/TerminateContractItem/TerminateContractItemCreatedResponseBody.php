<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContractItem;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class TerminateContractItemCreatedResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'contractId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'contractItemId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'reason' => [
                'example' => 'Server wird nicht mehr benötigt',
                'type' => 'string',
            ],
            'terminationTargetDate' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
    ];

    private ?string $contractId = null;

    private ?string $contractItemId = null;

    private ?string $reason = null;

    private ?DateTime $terminationTargetDate = null;

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

    public function getReason(): ?string
    {
        return $this->reason ?? null;
    }

    public function getTerminationTargetDate(): ?DateTime
    {
        return $this->terminationTargetDate ?? null;
    }

    public function withContractId(string $contractId): self
    {
        $validator = new Validator();
        $validator->validate($contractId, self::$internalValidationSchema['properties']['contractId']);
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
        $validator->validate($contractItemId, self::$internalValidationSchema['properties']['contractItemId']);
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

    public function withReason(string $reason): self
    {
        $validator = new Validator();
        $validator->validate($reason, self::$internalValidationSchema['properties']['reason']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->reason = $reason;

        return $clone;
    }

    public function withoutReason(): self
    {
        $clone = clone $this;
        unset($clone->reason);

        return $clone;
    }

    public function withTerminationTargetDate(DateTime $terminationTargetDate): self
    {
        $clone = clone $this;
        $clone->terminationTargetDate = $terminationTargetDate;

        return $clone;
    }

    public function withoutTerminationTargetDate(): self
    {
        $clone = clone $this;
        unset($clone->terminationTargetDate);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return TerminateContractItemCreatedResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): TerminateContractItemCreatedResponseBody
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
        $reason = null;
        if (isset($input->{'reason'})) {
            $reason = $input->{'reason'};
        }
        $terminationTargetDate = null;
        if (isset($input->{'terminationTargetDate'})) {
            $terminationTargetDate = new DateTime($input->{'terminationTargetDate'});
        }

        $obj = new self();
        $obj->contractId = $contractId;
        $obj->contractItemId = $contractItemId;
        $obj->reason = $reason;
        $obj->terminationTargetDate = $terminationTargetDate;
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
        if (isset($this->reason)) {
            $output['reason'] = $this->reason;
        }
        if (isset($this->terminationTargetDate)) {
            $output['terminationTargetDate'] = ($this->terminationTargetDate)->format(DateTime::ATOM);
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
        $validator->validate($input, self::$internalValidationSchema);

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
        if (isset($this->terminationTargetDate)) {
            $this->terminationTargetDate = clone $this->terminationTargetDate;
        }
    }
}
