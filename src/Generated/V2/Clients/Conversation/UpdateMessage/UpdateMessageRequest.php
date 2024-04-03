<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateMessage;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateMessageRequest
{
    public const method = 'patch';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'conversationId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'messageId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'messageContent' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'required' => [
            'conversationId',
            'messageId',
            'body',
        ],
    ];

    private string $conversationId;

    private string $messageId;

    private UpdateMessageRequestBody $body;

    private array $headers = [

    ];

    public function __construct(string $conversationId, string $messageId, UpdateMessageRequestBody $body)
    {
        $this->conversationId = $conversationId;
        $this->messageId = $messageId;
        $this->body = $body;
    }

    public function getConversationId(): string
    {
        return $this->conversationId;
    }

    public function getMessageId(): string
    {
        return $this->messageId;
    }

    public function getBody(): UpdateMessageRequestBody
    {
        return $this->body;
    }

    public function withConversationId(string $conversationId): self
    {
        $validator = new Validator();
        $validator->validate($conversationId, static::$schema['properties']['conversationId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->conversationId = $conversationId;

        return $clone;
    }

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

    public function withBody(UpdateMessageRequestBody $body): self
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
     * @return UpdateMessageRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateMessageRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $conversationId = $input->{'conversationId'};
        $messageId = $input->{'messageId'};
        $body = UpdateMessageRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($conversationId, $messageId, $body);

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
        $output['conversationId'] = $this->conversationId;
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
        $conversationId = urlencode($mapped['conversationId']);
        $messageId = urlencode($mapped['messageId']);
        return '/v2/conversations/' . $conversationId . '/messages/' . $messageId;
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
