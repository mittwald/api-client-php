<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

use InvalidArgumentException;

class StatusUpdate
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'conversationId' => [
                'type' => 'string',
            ],
            'createdAt' => [
                'type' => 'string',
            ],
            'internal' => [
                'type' => 'boolean',
            ],
            'messageContent' => [
                'type' => 'string',
            ],
            'meta' => [
                'properties' => [
                    'user' => [
                        '$ref' => '#/components/schemas/de.mittwald.v1.conversation.User',
                    ],
                ],
                'type' => 'object',
            ],
            'type' => [
                'enum' => [
                    'STATUS_UPDATE',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'conversationId',
            'messageContent',
            'createdAt',
            'type',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $conversationId;

    /**
     * @var string
     */
    private string $createdAt;

    /**
     * @var bool|null
     */
    private ?bool $internal = null;

    /**
     * @var string
     */
    private string $messageContent;

    /**
     * @var StatusUpdateMeta|null
     */
    private ?StatusUpdateMeta $meta = null;

    /**
     * @var StatusUpdateType
     */
    private StatusUpdateType $type;

    /**
     * @param string $conversationId
     * @param string $createdAt
     * @param string $messageContent
     * @param StatusUpdateType $type
     */
    public function __construct(string $conversationId, string $createdAt, string $messageContent, StatusUpdateType $type)
    {
        $this->conversationId = $conversationId;
        $this->createdAt = $createdAt;
        $this->messageContent = $messageContent;
        $this->type = $type;
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
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @return bool|null
     */
    public function getInternal(): ?bool
    {
        return $this->internal ?? null;
    }

    /**
     * @return string
     */
    public function getMessageContent(): string
    {
        return $this->messageContent;
    }

    /**
     * @return StatusUpdateMeta|null
     */
    public function getMeta(): ?StatusUpdateMeta
    {
        return $this->meta ?? null;
    }

    /**
     * @return StatusUpdateType
     */
    public function getType(): StatusUpdateType
    {
        return $this->type;
    }

    /**
     * @param string $conversationId
     * @return self
     */
    public function withConversationId(string $conversationId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($conversationId, static::$schema['properties']['conversationId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->conversationId = $conversationId;

        return $clone;
    }

    /**
     * @param string $createdAt
     * @return self
     */
    public function withCreatedAt(string $createdAt): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($createdAt, static::$schema['properties']['createdAt']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

    /**
     * @param bool $internal
     * @return self
     */
    public function withInternal(bool $internal): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($internal, static::$schema['properties']['internal']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->internal = $internal;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutInternal(): self
    {
        $clone = clone $this;
        unset($clone->internal);

        return $clone;
    }

    /**
     * @param string $messageContent
     * @return self
     */
    public function withMessageContent(string $messageContent): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($messageContent, static::$schema['properties']['messageContent']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->messageContent = $messageContent;

        return $clone;
    }

    /**
     * @param StatusUpdateMeta $meta
     * @return self
     */
    public function withMeta(StatusUpdateMeta $meta): self
    {
        $clone = clone $this;
        $clone->meta = $meta;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMeta(): self
    {
        $clone = clone $this;
        unset($clone->meta);

        return $clone;
    }

    /**
     * @param StatusUpdateType $type
     * @return self
     */
    public function withType(StatusUpdateType $type): self
    {
        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return StatusUpdate Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): StatusUpdate
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $conversationId = $input->{'conversationId'};
        $createdAt = $input->{'createdAt'};
        $internal = null;
        if (isset($input->{'internal'})) {
            $internal = (bool)($input->{'internal'});
        }
        $messageContent = $input->{'messageContent'};
        $meta = null;
        if (isset($input->{'meta'})) {
            $meta = StatusUpdateMeta::buildFromInput($input->{'meta'}, validate: $validate);
        }
        $type = StatusUpdateType::from($input->{'type'});

        $obj = new self($conversationId, $createdAt, $messageContent, $type);
        $obj->internal = $internal;
        $obj->meta = $meta;
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
        $output['createdAt'] = $this->createdAt;
        if (isset($this->internal)) {
            $output['internal'] = $this->internal;
        }
        $output['messageContent'] = $this->messageContent;
        if (isset($this->meta)) {
            $output['meta'] = ($this->meta)->toJson();
        }
        $output['type'] = ($this->type)->value;

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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        if (isset($this->meta)) {
            $this->meta = clone $this->meta;
        }
    }
}
