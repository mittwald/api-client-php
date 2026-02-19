<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Container\SetStackUpdateSchedule;

use InvalidArgumentException;
use JsonSchema\Validator;

class SetStackUpdateScheduleRequestBodyUpdateSchedule
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'nullable' => true,
        'properties' => [
            'schedule' => [
                'example' => '* * * * *',
                'type' => 'string',
            ],
            'timezone' => [
                'example' => 'Europe/Berlin',
                'type' => 'string',
            ],
        ],
        'required' => [
            'schedule',
        ],
        'type' => 'object',
    ];

    private string $schedule;

    private ?string $timezone = null;

    public function __construct(string $schedule)
    {
        $this->schedule = $schedule;
    }

    public function getSchedule(): string
    {
        return $this->schedule;
    }

    public function getTimezone(): ?string
    {
        return $this->timezone ?? null;
    }

    public function withSchedule(string $schedule): self
    {
        $validator = new Validator();
        $validator->validate($schedule, self::$internalValidationSchema['properties']['schedule']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->schedule = $schedule;

        return $clone;
    }

    public function withTimezone(string $timezone): self
    {
        $validator = new Validator();
        $validator->validate($timezone, self::$internalValidationSchema['properties']['timezone']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->timezone = $timezone;

        return $clone;
    }

    public function withoutTimezone(): self
    {
        $clone = clone $this;
        unset($clone->timezone);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SetStackUpdateScheduleRequestBodyUpdateSchedule Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SetStackUpdateScheduleRequestBodyUpdateSchedule
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $schedule = $input->{'schedule'};
        $timezone = null;
        if (isset($input->{'timezone'})) {
            $timezone = $input->{'timezone'};
        }

        $obj = new self($schedule);
        $obj->timezone = $timezone;
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
        $output['schedule'] = $this->schedule;
        if (isset($this->timezone)) {
            $output['timezone'] = $this->timezone;
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
    }
}
