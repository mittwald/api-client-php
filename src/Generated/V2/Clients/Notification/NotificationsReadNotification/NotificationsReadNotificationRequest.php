<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadNotification;

use InvalidArgumentException;
use JsonSchema\Validator;

class NotificationsReadNotificationRequest
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'messageId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'status' => [
                        '$ref' => '#/components/schemas/de.mittwald.v1.messaging.NotificationStatus',
                    ],
                ],
                'required' => [
                    'status',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'messageId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $messageId;

    /**
     * @var NotificationsReadNotificationRequestBody
     */
    private NotificationsReadNotificationRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $messageId
     * @param NotificationsReadNotificationRequestBody $body
     */
    public function __construct(string $messageId, NotificationsReadNotificationRequestBody $body)
    {
        $this->messageId = $messageId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getMessageId(): string
    {
        return $this->messageId;
    }

    /**
     * @return NotificationsReadNotificationRequestBody
     */
    public function getBody(): NotificationsReadNotificationRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $messageId
     * @return self
     */
    public function withMessageId(string $messageId): self
    {
        $validator = new Validator();
        $validator->validate($messageId, static::$schema['properties']['messageId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->messageId = $messageId;

        return $clone;
    }

    /**
     * @param NotificationsReadNotificationRequestBody $body
     * @return self
     */
    public function withBody(NotificationsReadNotificationRequestBody $body): self
    {
        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return NotificationsReadNotificationRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): NotificationsReadNotificationRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $messageId = $input->{'messageId'};
        $body = NotificationsReadNotificationRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($messageId, $body);

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
        $output['messageId'] = $this->messageId;
        $output['body'] = ($this->body)->toJson();

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
        $this->body = clone $this->body;
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $messageId = urlencode($mapped['messageId']);
        return '/v2/notifications/' . $messageId . '/status';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
