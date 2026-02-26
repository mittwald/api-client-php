<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Container\SetStackUpdateSchedule;

use InvalidArgumentException;
use JsonSchema\Validator;

class SetStackUpdateScheduleRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'updateSchedule' => [
                'nullable' => true,
                'properties' => [
                    'cron' => [
                        'example' => '* * * * *',
                        'type' => 'string',
                    ],
                    'timezone' => [
                        'description' => 'Valid timezones can be retrieved via GET /v2/time-zones',
                        'example' => 'Europe/Berlin',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'cron',
                ],
                'type' => 'object',
            ],
        ],
    ];

    private ?SetStackUpdateScheduleRequestBodyUpdateSchedule $updateSchedule = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getUpdateSchedule(): ?SetStackUpdateScheduleRequestBodyUpdateSchedule
    {
        return $this->updateSchedule ?? null;
    }

    public function withUpdateSchedule(SetStackUpdateScheduleRequestBodyUpdateSchedule $updateSchedule): self
    {
        $clone = clone $this;
        $clone->updateSchedule = $updateSchedule;

        return $clone;
    }

    public function withoutUpdateSchedule(): self
    {
        $clone = clone $this;
        unset($clone->updateSchedule);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SetStackUpdateScheduleRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SetStackUpdateScheduleRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $updateSchedule = null;
        if (isset($input->{'updateSchedule'})) {
            $updateSchedule = SetStackUpdateScheduleRequestBodyUpdateSchedule::buildFromInput($input->{'updateSchedule'}, validate: $validate);
        }

        $obj = new self();
        $obj->updateSchedule = $updateSchedule;
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
        if (isset($this->updateSchedule)) {
            $output['updateSchedule'] = ($this->updateSchedule)->toJson();
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
        if (isset($this->updateSchedule)) {
            $this->updateSchedule = clone $this->updateSchedule;
        }
    }
}
