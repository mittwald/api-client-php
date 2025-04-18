<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotificationsDeprecated;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Messaging\NotificationStatus;

class NotificationsReadAllNotificationsDeprecatedOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'status' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.messaging.NotificationStatus',
            ],
        ],
        'required' => [
            'status',
        ],
        'type' => 'object',
    ];

    private NotificationStatus $status;

    public function __construct(NotificationStatus $status)
    {
        $this->status = $status;
    }

    public function getStatus(): NotificationStatus
    {
        return $this->status;
    }

    public function withStatus(NotificationStatus $status): self
    {
        $clone = clone $this;
        $clone->status = $status;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return NotificationsReadAllNotificationsDeprecatedOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): NotificationsReadAllNotificationsDeprecatedOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $status = NotificationStatus::from($input->{'status'});

        $obj = new self($status);

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
