<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotifications;

class NotificationsReadAllNotifications200ResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
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

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Messaging\NotificationStatus
     */
    private \Mittwald\ApiClient\Generated\V2\Schemas\Messaging\NotificationStatus $status;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Messaging\NotificationStatus $status
     */
    public function __construct(\Mittwald\ApiClient\Generated\V2\Schemas\Messaging\NotificationStatus $status)
    {
        $this->status = $status;
    }

    /**
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\Messaging\NotificationStatus
     */
    public function getStatus() : \Mittwald\ApiClient\Generated\V2\Schemas\Messaging\NotificationStatus
    {
        return $this->status;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Messaging\NotificationStatus $status
     * @return self
     */
    public function withStatus(\Mittwald\ApiClient\Generated\V2\Schemas\Messaging\NotificationStatus $status) : self
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
     * @return NotificationsReadAllNotifications200ResponseBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : NotificationsReadAllNotifications200ResponseBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $status = \Mittwald\ApiClient\Generated\V2\Schemas\Messaging\NotificationStatus::from($input->{'status'});

        $obj = new self($status);

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
        $output['status'] = $this->status->value;

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

    public static function fromResponse(\Psr\Http\Message\ResponseInterface $httpResponse) : self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}

