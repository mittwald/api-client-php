<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsListNotifications;

class NotificationsListNotificationsRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'status' => [
                'enum' => [
                    'unread',
                    'read',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            
        ],
    ];

    /**
     * @var NotificationsListNotificationsRequestStatus|null
     */
    private ?NotificationsListNotificationsRequestStatus $status = null;

    private array $headers = [
        
    ];

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return NotificationsListNotificationsRequestStatus|null
     */
    public function getStatus() : ?NotificationsListNotificationsRequestStatus
    {
        return $this->status ?? null;
    }

    /**
     * @param NotificationsListNotificationsRequestStatus $status
     * @return self
     */
    public function withStatus(NotificationsListNotificationsRequestStatus $status) : self
    {
        $clone = clone $this;
        $clone->status = $status;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutStatus() : self
    {
        $clone = clone $this;
        unset($clone->status);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return NotificationsListNotificationsRequest Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : NotificationsListNotificationsRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $status = null;
        if (isset($input->{'status'})) {
            $status = NotificationsListNotificationsRequestStatus::from($input->{'status'});
        }

        $obj = new self();
        $obj->status = $status;
        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson() : array
    {
        $output = [];
        if (isset($this->status)) {
            $output['status'] = ($this->status)->value;
        }

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
    }

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        return '/v2/notifications';
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
        if (isset($mapped['status'])) {
            $query['status'] = $mapped['status'];
        }
        return $query;
    }

    public function getHeaders() : array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value) : self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}

