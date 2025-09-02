<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotifications;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Messaging\NotificationStatus;

class NotificationsReadAllNotificationsOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'status' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.messaging.NotificationStatus',
            ],
            'updatedCount' => [
                'description' => 'The number of notifications that have been updated.',
                'format' => 'int32',
                'type' => 'integer',
            ],
        ],
        'required' => [
            'status',
            'updatedCount',
        ],
        'type' => 'object',
    ];

    private NotificationStatus $status;

    /**
     * The number of notifications that have been updated.
     */
    private int $updatedCount;

    public function __construct(NotificationStatus $status, int $updatedCount)
    {
        $this->status = $status;
        $this->updatedCount = $updatedCount;
    }

    public function getStatus(): NotificationStatus
    {
        return $this->status;
    }

    public function getUpdatedCount(): int
    {
        return $this->updatedCount;
    }

    public function withStatus(NotificationStatus $status): self
    {
        $clone = clone $this;
        $clone->status = $status;

        return $clone;
    }

    public function withUpdatedCount(int $updatedCount): self
    {
        $validator = new Validator();
        $validator->validate($updatedCount, self::$internalValidationSchema['properties']['updatedCount']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->updatedCount = $updatedCount;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return NotificationsReadAllNotificationsOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): NotificationsReadAllNotificationsOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $status = NotificationStatus::from($input->{'status'});
        $updatedCount = (int)($input->{'updatedCount'});

        $obj = new self($status, $updatedCount);

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
        $output['status'] = $this->status->value;
        $output['updatedCount'] = $this->updatedCount;

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
