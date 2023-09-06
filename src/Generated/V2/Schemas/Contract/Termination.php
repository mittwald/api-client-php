<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Contract;

use InvalidArgumentException;
use JsonSchema\Validator;

class Termination
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'reason' => [
                'example' => 'Not needed anymore',
                'type' => 'string',
            ],
            'scheduledAtDate' => [
                'format' => 'date',
                'type' => 'string',
            ],
            'scheduledByUserId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'targetDate' => [
                'format' => 'date',
                'type' => 'string',
            ],
        ],
        'required' => [
            'scheduledAtDate',
            'targetDate',
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $reason = null;

    /**
     * @var string
     */
    private string $scheduledAtDate;

    /**
     * @var string|null
     */
    private ?string $scheduledByUserId = null;

    /**
     * @var string
     */
    private string $targetDate;

    /**
     * @param string $scheduledAtDate
     * @param string $targetDate
     */
    public function __construct(string $scheduledAtDate, string $targetDate)
    {
        $this->scheduledAtDate = $scheduledAtDate;
        $this->targetDate = $targetDate;
    }

    /**
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason ?? null;
    }

    /**
     * @return string
     */
    public function getScheduledAtDate(): string
    {
        return $this->scheduledAtDate;
    }

    /**
     * @return string|null
     */
    public function getScheduledByUserId(): ?string
    {
        return $this->scheduledByUserId ?? null;
    }

    /**
     * @return string
     */
    public function getTargetDate(): string
    {
        return $this->targetDate;
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
     * @param string $scheduledAtDate
     * @return self
     */
    public function withScheduledAtDate(string $scheduledAtDate): self
    {
        $validator = new Validator();
        $validator->validate($scheduledAtDate, static::$schema['properties']['scheduledAtDate']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->scheduledAtDate = $scheduledAtDate;

        return $clone;
    }

    /**
     * @param string $scheduledByUserId
     * @return self
     */
    public function withScheduledByUserId(string $scheduledByUserId): self
    {
        $validator = new Validator();
        $validator->validate($scheduledByUserId, static::$schema['properties']['scheduledByUserId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->scheduledByUserId = $scheduledByUserId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutScheduledByUserId(): self
    {
        $clone = clone $this;
        unset($clone->scheduledByUserId);

        return $clone;
    }

    /**
     * @param string $targetDate
     * @return self
     */
    public function withTargetDate(string $targetDate): self
    {
        $validator = new Validator();
        $validator->validate($targetDate, static::$schema['properties']['targetDate']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->targetDate = $targetDate;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Termination Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Termination
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $reason = null;
        if (isset($input->{'reason'})) {
            $reason = $input->{'reason'};
        }
        $scheduledAtDate = $input->{'scheduledAtDate'};
        $scheduledByUserId = null;
        if (isset($input->{'scheduledByUserId'})) {
            $scheduledByUserId = $input->{'scheduledByUserId'};
        }
        $targetDate = $input->{'targetDate'};

        $obj = new self($scheduledAtDate, $targetDate);
        $obj->reason = $reason;
        $obj->scheduledByUserId = $scheduledByUserId;
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
        if (isset($this->reason)) {
            $output['reason'] = $this->reason;
        }
        $output['scheduledAtDate'] = $this->scheduledAtDate;
        if (isset($this->scheduledByUserId)) {
            $output['scheduledByUserId'] = $this->scheduledByUserId;
        }
        $output['targetDate'] = $this->targetDate;

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
