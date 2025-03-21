<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\StoragespaceReplaceProjectNotificationThreshold;

use InvalidArgumentException;
use JsonSchema\Validator;

class StoragespaceReplaceProjectNotificationThresholdRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'notificationThresholdInBytes' => [
                'example' => 10000,
                'nullable' => true,
                'type' => 'integer',
            ],
        ],
    ];

    private ?int $notificationThresholdInBytes = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getNotificationThresholdInBytes(): ?int
    {
        return $this->notificationThresholdInBytes ?? null;
    }

    public function withNotificationThresholdInBytes(int $notificationThresholdInBytes): self
    {
        $validator = new Validator();
        $validator->validate($notificationThresholdInBytes, self::$schema['properties']['notificationThresholdInBytes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->notificationThresholdInBytes = $notificationThresholdInBytes;

        return $clone;
    }

    public function withoutNotificationThresholdInBytes(): self
    {
        $clone = clone $this;
        unset($clone->notificationThresholdInBytes);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return StoragespaceReplaceProjectNotificationThresholdRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): StoragespaceReplaceProjectNotificationThresholdRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $notificationThresholdInBytes = null;
        if (isset($input->{'notificationThresholdInBytes'})) {
            $notificationThresholdInBytes = (int)($input->{'notificationThresholdInBytes'});
        }

        $obj = new self();
        $obj->notificationThresholdInBytes = $notificationThresholdInBytes;
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
        if (isset($this->notificationThresholdInBytes)) {
            $output['notificationThresholdInBytes'] = $this->notificationThresholdInBytes;
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
