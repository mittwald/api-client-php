<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContract;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class TerminateContractCreatedResponseBody
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
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
    ];

    private ?string $contractId = null;

    /**
     * @var string[]|null
     */
    private ?array $itemsScheduledForTermination = null;

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

    /**
     * @return string[]|null
     */
    public function getItemsScheduledForTermination(): ?array
    {
        return $this->itemsScheduledForTermination ?? null;
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

    /**
     * @param string[] $itemsScheduledForTermination
     */
    public function withItemsScheduledForTermination(array $itemsScheduledForTermination): self
    {
        $validator = new Validator();
        $validator->validate($itemsScheduledForTermination, self::$schema['properties']['itemsScheduledForTermination']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->itemsScheduledForTermination = $itemsScheduledForTermination;

        return $clone;
    }

    public function withoutItemsScheduledForTermination(): self
    {
        $clone = clone $this;
        unset($clone->itemsScheduledForTermination);

        return $clone;
    }

    public function withReason(string $reason): self
    {
        $validator = new Validator();
        $validator->validate($reason, self::$schema['properties']['reason']);
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
            $terminationTargetDate = new DateTime($input->{'terminationTargetDate'});
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
        if (isset($this->terminationTargetDate)) {
            $this->terminationTargetDate = clone $this->terminationTargetDate;
        }
    }
}
