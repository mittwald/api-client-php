<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

class Message
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
            'createdBy' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.conversation.User',
            ],
            'files' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.conversation.File',
                ],
                'type' => 'array',
            ],
            'history' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.conversation.MessageHistoryItem',
                ],
                'type' => 'array',
            ],
            'internal' => [
                'type' => 'boolean',
            ],
            'messageContent' => [
                'type' => 'string',
            ],
            'messageId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'type' => [
                'enum' => [
                    'MESSAGE',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'messageId',
            'conversationId',
            'createdAt',
            'history',
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
     * @var User|null
     */
    private ?User $createdBy = null;

    /**
     * @var (RequestedFile|UploadedFile)[]|null
     */
    private ?array $files = null;

    /**
     * @var MessageHistoryItem[]
     */
    private array $history;

    /**
     * @var bool|null
     */
    private ?bool $internal = null;

    /**
     * @var string|null
     */
    private ?string $messageContent = null;

    /**
     * @var string
     */
    private string $messageId;

    /**
     * @var MessageType
     */
    private MessageType $type;

    /**
     * @param string $conversationId
     * @param string $createdAt
     * @param MessageHistoryItem[] $history
     * @param string $messageId
     * @param MessageType $type
     */
    public function __construct(string $conversationId, string $createdAt, array $history, string $messageId, MessageType $type)
    {
        $this->conversationId = $conversationId;
        $this->createdAt = $createdAt;
        $this->history = $history;
        $this->messageId = $messageId;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getConversationId() : string
    {
        return $this->conversationId;
    }

    /**
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }

    /**
     * @return User|null
     */
    public function getCreatedBy() : ?User
    {
        return $this->createdBy ?? null;
    }

    /**
     * @return
     * (RequestedFile|UploadedFile)[]|null
     */
    public function getFiles() : ?array
    {
        return $this->files ?? null;
    }

    /**
     * @return
     * MessageHistoryItem[]
     */
    public function getHistory() : array
    {
        return $this->history;
    }

    /**
     * @return bool|null
     */
    public function getInternal() : ?bool
    {
        return $this->internal ?? null;
    }

    /**
     * @return string|null
     */
    public function getMessageContent() : ?string
    {
        return $this->messageContent ?? null;
    }

    /**
     * @return string
     */
    public function getMessageId() : string
    {
        return $this->messageId;
    }

    /**
     * @return MessageType
     */
    public function getType() : MessageType
    {
        return $this->type;
    }

    /**
     * @param string $conversationId
     * @return self
     */
    public function withConversationId(string $conversationId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($conversationId, static::$schema['properties']['conversationId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->conversationId = $conversationId;

        return $clone;
    }

    /**
     * @param string $createdAt
     * @return self
     */
    public function withCreatedAt(string $createdAt) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($createdAt, static::$schema['properties']['createdAt']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

    /**
     * @param User $createdBy
     * @return self
     */
    public function withCreatedBy(User $createdBy) : self
    {
        $clone = clone $this;
        $clone->createdBy = $createdBy;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCreatedBy() : self
    {
        $clone = clone $this;
        unset($clone->createdBy);

        return $clone;
    }

    /**
     * @param (RequestedFile|UploadedFile)[] $files
     * @return self
     */
    public function withFiles(array $files) : self
    {
        $clone = clone $this;
        $clone->files = $files;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutFiles() : self
    {
        $clone = clone $this;
        unset($clone->files);

        return $clone;
    }

    /**
     * @param MessageHistoryItem[] $history
     * @return self
     */
    public function withHistory(array $history) : self
    {
        $clone = clone $this;
        $clone->history = $history;

        return $clone;
    }

    /**
     * @param bool $internal
     * @return self
     */
    public function withInternal(bool $internal) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($internal, static::$schema['properties']['internal']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->internal = $internal;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutInternal() : self
    {
        $clone = clone $this;
        unset($clone->internal);

        return $clone;
    }

    /**
     * @param string $messageContent
     * @return self
     */
    public function withMessageContent(string $messageContent) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($messageContent, static::$schema['properties']['messageContent']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->messageContent = $messageContent;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMessageContent() : self
    {
        $clone = clone $this;
        unset($clone->messageContent);

        return $clone;
    }

    /**
     * @param string $messageId
     * @return self
     */
    public function withMessageId(string $messageId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($messageId, static::$schema['properties']['messageId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->messageId = $messageId;

        return $clone;
    }

    /**
     * @param MessageType $type
     * @return self
     */
    public function withType(MessageType $type) : self
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
     * @return Message Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : Message
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $conversationId = $input->{'conversationId'};
        $createdAt = $input->{'createdAt'};
        $createdBy = null;
        if (isset($input->{'createdBy'})) {
            $createdBy = User::buildFromInput($input->{'createdBy'}, validate: $validate);
        }
        $files = null;
        if (isset($input->{'files'})) {
            $files = array_map(fn(array $i): RequestedFile|UploadedFile => match (true) {
                default => throw new \InvalidArgumentException("input cannot be mapped to any valid type"),
                RequestedFile::validateInput($i, true) => RequestedFile::buildFromInput($i, validate: $validate),
                UploadedFile::validateInput($i, true) => UploadedFile::buildFromInput($i, validate: $validate),
            }, $input->{'files'});
        }
        $history = array_map(fn(array $i): MessageHistoryItem => MessageHistoryItem::buildFromInput($i, validate: $validate), $input->{'history'});
        $internal = null;
        if (isset($input->{'internal'})) {
            $internal = (bool)($input->{'internal'});
        }
        $messageContent = null;
        if (isset($input->{'messageContent'})) {
            $messageContent = $input->{'messageContent'};
        }
        $messageId = $input->{'messageId'};
        $type = MessageType::from($input->{'type'});

        $obj = new self($conversationId, $createdAt, $history, $messageId, $type);
        $obj->createdBy = $createdBy;
        $obj->files = $files;
        $obj->internal = $internal;
        $obj->messageContent = $messageContent;
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
        $output['conversationId'] = $this->conversationId;
        $output['createdAt'] = $this->createdAt;
        if (isset($this->createdBy)) {
            $output['createdBy'] = $this->createdBy->toJson();
        }
        if (isset($this->files)) {
            $output['files'] = array_map(fn(RequestedFile|UploadedFile $i): array => match (true) {
                default => throw new \InvalidArgumentException("input cannot be mapped to any valid type"),
                ($i) instanceof RequestedFile, ($i) instanceof UploadedFile => $i->toJson(),
            }, $this->files);
        }
        $output['history'] = array_map(fn(MessageHistoryItem $i): array => $i->toJson(), $this->history);
        if (isset($this->internal)) {
            $output['internal'] = $this->internal;
        }
        if (isset($this->messageContent)) {
            $output['messageContent'] = $this->messageContent;
        }
        $output['messageId'] = $this->messageId;
        $output['type'] = ($this->type)->value;

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
}

