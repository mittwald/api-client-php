<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.conversation.Message.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class Message
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'conversationId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'createdAt' => [
                'format' => 'date-time',
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
            'type',
        ],
        'type' => 'object',
    ];

    private string $conversationId;

    private DateTime $createdAt;

    private ?User $createdBy = null;

    /**
     * @var (RequestedFile|UploadedFile)[]|null
     */
    private ?array $files = null;

    private ?bool $internal = null;

    private ?string $messageContent = null;

    private string $messageId;

    private MessageType $type;

    public function __construct(string $conversationId, DateTime $createdAt, string $messageId, MessageType $type)
    {
        $this->conversationId = $conversationId;
        $this->createdAt = $createdAt;
        $this->messageId = $messageId;
        $this->type = $type;
    }

    public function getConversationId(): string
    {
        return $this->conversationId;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getCreatedBy(): ?User
    {
        return $this->createdBy ?? null;
    }

    /**
     * @return
     * (RequestedFile|UploadedFile)[]|null
     */
    public function getFiles(): ?array
    {
        return $this->files ?? null;
    }

    public function getInternal(): ?bool
    {
        return $this->internal ?? null;
    }

    public function getMessageContent(): ?string
    {
        return $this->messageContent ?? null;
    }

    public function getMessageId(): string
    {
        return $this->messageId;
    }

    public function getType(): MessageType
    {
        return $this->type;
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

    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

    public function withCreatedBy(User $createdBy): self
    {
        $clone = clone $this;
        $clone->createdBy = $createdBy;

        return $clone;
    }

    public function withoutCreatedBy(): self
    {
        $clone = clone $this;
        unset($clone->createdBy);

        return $clone;
    }

    /**
     * @param (RequestedFile|UploadedFile)[] $files
     */
    public function withFiles(array $files): self
    {
        $clone = clone $this;
        $clone->files = $files;

        return $clone;
    }

    public function withoutFiles(): self
    {
        $clone = clone $this;
        unset($clone->files);

        return $clone;
    }

    public function withInternal(bool $internal): self
    {
        $validator = new Validator();
        $validator->validate($internal, static::$schema['properties']['internal']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->internal = $internal;

        return $clone;
    }

    public function withoutInternal(): self
    {
        $clone = clone $this;
        unset($clone->internal);

        return $clone;
    }

    public function withMessageContent(string $messageContent): self
    {
        $validator = new Validator();
        $validator->validate($messageContent, static::$schema['properties']['messageContent']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->messageContent = $messageContent;

        return $clone;
    }

    public function withoutMessageContent(): self
    {
        $clone = clone $this;
        unset($clone->messageContent);

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

    public function withType(MessageType $type): self
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
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Message
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $conversationId = $input->{'conversationId'};
        $createdAt = new DateTime($input->{'createdAt'});
        $createdBy = null;
        if (isset($input->{'createdBy'})) {
            $createdBy = User::buildFromInput($input->{'createdBy'}, validate: $validate);
        }
        $files = null;
        if (isset($input->{'files'})) {
            $files = array_map(fn (array|object $i): RequestedFile|UploadedFile => match (true) {
                default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
                RequestedFile::validateInput($i, true) => RequestedFile::buildFromInput($i, validate: $validate),
                UploadedFile::validateInput($i, true) => UploadedFile::buildFromInput($i, validate: $validate),
            }, $input->{'files'});
        }
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

        $obj = new self($conversationId, $createdAt, $messageId, $type);
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
    public function toJson(): array
    {
        $output = [];
        $output['conversationId'] = $this->conversationId;
        $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        if (isset($this->createdBy)) {
            $output['createdBy'] = $this->createdBy->toJson();
        }
        if (isset($this->files)) {
            $output['files'] = array_map(fn (RequestedFile|UploadedFile $i): array => match (true) {
                default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
                ($i) instanceof RequestedFile, ($i) instanceof UploadedFile => $i->toJson(),
            }, $this->files);
        }
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
        $this->createdAt = clone $this->createdAt;
    }
}
