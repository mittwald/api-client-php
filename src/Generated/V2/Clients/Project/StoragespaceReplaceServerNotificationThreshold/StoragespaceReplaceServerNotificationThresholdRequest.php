<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\StoragespaceReplaceServerNotificationThreshold;

use InvalidArgumentException;
use JsonSchema\Validator;

class StoragespaceReplaceServerNotificationThresholdRequest
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'serverId' => [
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'notificationThresholdInBytes' => [
                        'example' => 10000,
                        'minimum' => 0,
                        'nullable' => true,
                        'type' => 'integer',
                    ],
                ],
            ],
        ],
        'required' => [
            'serverId',
            'body',
        ],
    ];

    private string $serverId;

    private StoragespaceReplaceServerNotificationThresholdRequestBody $body;

    private array $headers = [

    ];

    public function __construct(string $serverId, StoragespaceReplaceServerNotificationThresholdRequestBody $body)
    {
        $this->serverId = $serverId;
        $this->body = $body;
    }

    public function getServerId(): string
    {
        return $this->serverId;
    }

    public function getBody(): StoragespaceReplaceServerNotificationThresholdRequestBody
    {
        return $this->body;
    }

    public function withServerId(string $serverId): self
    {
        $validator = new Validator();
        $validator->validate($serverId, static::$schema['properties']['serverId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->serverId = $serverId;

        return $clone;
    }

    public function withBody(StoragespaceReplaceServerNotificationThresholdRequestBody $body): self
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
     * @return StoragespaceReplaceServerNotificationThresholdRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): StoragespaceReplaceServerNotificationThresholdRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $serverId = $input->{'serverId'};
        $body = StoragespaceReplaceServerNotificationThresholdRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($serverId, $body);

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
        $output['serverId'] = $this->serverId;
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
        $validator = new \Mittwald\ApiClient\Validator\Validator();
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

    /**
     * Builds the URL for this request
     *
     * This method is used internally by the client to build the URL for this request.
     * You should not need to call this method directly.
     *
     * @internal
     * @return string The URL for this request
     */
    public function buildUrl(): string
    {
        $mapped = $this->toJson();
        $serverId = urlencode($mapped['serverId']);
        return '/v2/servers/' . $serverId . '/storage-space-notification-threshold';
    }

    /**
     * Builds the request options for this request
     *
     * This method is used internally by the client to build the Guzzle request options
     * for this request. You should not need to call this method directly.
     *
     * @internal
     * @return array The Guzzle request options for this request
     */
    public function buildRequestOptions(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return [
            'query' => $query,
            'headers' => $this->headers,
            'json' => $this->getBody()->toJson(),
        ];
    }

    /**
     * Adds a header to this request
     *
     * You can use this method to add custom HTTP headers to the request.
     *
     * @param string $name The name of the header to add
     * @param string|array $value The value of the header to add
     * @return self A clone of this request with the header added
     */
    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
