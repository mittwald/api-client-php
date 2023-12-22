<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContract;

use InvalidArgumentException;
use JsonSchema\Validator;

class TerminateContractCreatedResponseBody
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
            'itemsScheduledForTermination' => [
                'items' => [
                    'format' => 'uuid',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'reason' => [
                'example' => 'Projekt wird nicht mehr benötigt',
                'type' => 'string',
            ],
            'terminationTargetDate' => [
                'format' => 'date',
                'type' => 'string',
            ],
        ],
    ];

    /**
     * @var string|null
     */
    private ?string $contractId = null;

    /**
     * @var string[]|null
     */
    private ?array $itemsScheduledForTermination = null;

    /**
     * @var string|null
     */
    private ?string $reason = null;

    /**
     * @var string|null
     */
    private ?string $terminationTargetDate = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getContractId(): ?string
    {
        return $this->contractId ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getItemsScheduledForTermination(): ?array
    {
        return $this->itemsScheduledForTermination ?? null;
    }

    /**
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason ?? null;
    }

    /**
     * @return string|null
     */
    public function getTerminationTargetDate(): ?string
    {
        return $this->terminationTargetDate ?? null;
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
     * @return self
     */
    public function withoutContractId(): self
    {
        $clone = clone $this;
        unset($clone->contractId);

        return $clone;
    }

    /**
     * @param string[] $itemsScheduledForTermination
     * @return self
     */
    public function withItemsScheduledForTermination(array $itemsScheduledForTermination): self
    {
        $validator = new Validator();
        $validator->validate($itemsScheduledForTermination, static::$schema['properties']['itemsScheduledForTermination']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->itemsScheduledForTermination = $itemsScheduledForTermination;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutItemsScheduledForTermination(): self
    {
        $clone = clone $this;
        unset($clone->itemsScheduledForTermination);

        return $clone;
    }

    /**
     * @param string $reason
     * @return self
     */
    public function withReason(string $reason): self
    {
        $validator = new Validator();
        $validator->validate($reason, static::$schema['properties']['reason']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->reason = $reason;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutReason(): self
    {
        $clone = clone $this;
        unset($clone->reason);

        return $clone;
    }

    /**
     * @param string $terminationTargetDate
     * @return self
     */
    public function withTerminationTargetDate(string $terminationTargetDate): self
    {
        $validator = new Validator();
        $validator->validate($terminationTargetDate, static::$schema['properties']['terminationTargetDate']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->terminationTargetDate = $terminationTargetDate;

        return $clone;
    }

    /**
     * @return self
     */
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
     * @return TerminateContractCreatedResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): TerminateContractCreatedResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contractId = null;
        if (isset($input->{'contractId'})) {
            $contractId = $input->{'contractId'};
        }
        $itemsScheduledForTermination = null;
        if (isset($input->{'itemsScheduledForTermination'})) {
            $itemsScheduledForTermination = $input->{'itemsScheduledForTermination'};
        }
        $reason = null;
        if (isset($input->{'reason'})) {
            $reason = $input->{'reason'};
        }
        $terminationTargetDate = null;
        if (isset($input->{'terminationTargetDate'})) {
            $terminationTargetDate = $input->{'terminationTargetDate'};
        }

        $obj = new self();
        $obj->contractId = $contractId;
        $obj->itemsScheduledForTermination = $itemsScheduledForTermination;
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
        if (isset($this->itemsScheduledForTermination)) {
            $output['itemsScheduledForTermination'] = $this->itemsScheduledForTermination;
        }
        if (isset($this->reason)) {
            $output['reason'] = $this->reason;
        }
        if (isset($this->terminationTargetDate)) {
            $output['terminationTargetDate'] = $this->terminationTargetDate;
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
