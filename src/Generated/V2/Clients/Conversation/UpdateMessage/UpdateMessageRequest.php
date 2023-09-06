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
     *
     * @var array
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

    /**
     * @var string
     */
    private string $conversationId;

    /**
     * @var string
     */
    private string $messageId;

    /**
     * @var UpdateMessageRequestBody
     */
    private UpdateMessageRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $conversationId
     * @param string $messageId
     * @param UpdateMessageRequestBody $body
     */
    public function __construct(string $conversationId, string $messageId, UpdateMessageRequestBody $body)
    {
        $this->conversationId = $conversationId;
        $this->messageId = $messageId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getConversationId(): string
    {
        return $this->conversationId;
    }

    /**
     * @return string
     */
    public function getMessageId(): string
    {
        return $this->messageId;
    }

    /**
     * @return UpdateMessageRequestBody
     */
    public function getBody(): UpdateMessageRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $conversationId
     * @return self
     */
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
     * @param UpdateMessageRequestBody $body
     * @return self
     */
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
        $conversationId = urlencode($mapped['conversationId']);
        $messageId = urlencode($mapped['messageId']);
        return '/v2/conversations/' . $conversationId . '/messages/' . $messageId;
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
