<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.conversation.ServiceRequest.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ServiceRequest
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
            'files' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.conversation.File',
                ],
                'maxItems' => 0,
                'type' => 'array',
            ],
            'internal' => [
                'type' => 'boolean',
            ],
            'messageContent' => [
                'enum' => [
                    'relocation',
                    'call',
                ],
                'type' => 'string',
            ],
            'messageId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'meta' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.conversation.ServiceRequestRelocationPayload',
                    ],
                ],
            ],
            'type' => [
                'enum' => [
                    'SERVICE_REQUEST',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'conversationId',
            'messageId',
            'messageContent',
            'createdAt',
            'type',
            'internal',
            'meta',
        ],
        'type' => 'object',
    ];

    private string $conversationId;

    private DateTime $createdAt;

    /**
     * @var (RequestedFile|UploadedFile)[]|null
     */
    private ?array $files = null;

    private bool $internal;

    private ServiceRequestMessageContent $messageContent;

    private string $messageId;

    private ServiceRequestRelocationPayload $meta;

    private ServiceRequestType $type;

    public function __construct(string $conversationId, DateTime $createdAt, bool $internal, ServiceRequestMessageContent $messageContent, string $messageId, ServiceRequestRelocationPayload $meta, ServiceRequestType $type)
    {
        $this->conversationId = $conversationId;
        $this->createdAt = $createdAt;
        $this->internal = $internal;
        $this->messageContent = $messageContent;
        $this->messageId = $messageId;
        $this->meta = $meta;
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

    /**
     * @return (RequestedFile|UploadedFile)[]|null
     */
    public function getFiles(): ?array
    {
        return $this->files ?? null;
    }

    public function getInternal(): bool
    {
        return $this->internal;
    }

    public function getMessageContent(): ServiceRequestMessageContent
    {
        return $this->messageContent;
    }

    public function getMessageId(): string
    {
        return $this->messageId;
    }

    public function getMeta(): ServiceRequestRelocationPayload
    {
        return $this->meta;
    }

    public function getType(): ServiceRequestType
    {
        return $this->type;
    }

    public function withConversationId(string $conversationId): self
    {
        $validator = new Validator();
        $validator->validate($conversationId, self::$schema['properties']['conversationId']);
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
        $validator->validate($internal, self::$schema['properties']['internal']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->internal = $internal;

        return $clone;
    }

    public function withMessageContent(ServiceRequestMessageContent $messageContent): self
    {
        $clone = clone $this;
        $clone->messageContent = $messageContent;

        return $clone;
    }

    public function withMessageId(string $messageId): self
    {
        $validator = new Validator();
        $validator->validate($messageId, self::$schema['properties']['messageId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->messageId = $messageId;

        return $clone;
    }

    public function withMeta(ServiceRequestRelocationPayload $meta): self
    {
        $clone = clone $this;
        $clone->meta = $meta;

        return $clone;
    }

    public function withType(ServiceRequestType $type): self
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
     * @return ServiceRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ServiceRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $conversationId = $input->{'conversationId'};
        $createdAt = new DateTime($input->{'createdAt'});
        $files = null;
        if (isset($input->{'files'})) {
            $files = array_map(fn (array|object $i): RequestedFile|UploadedFile => match (true) {
                default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
                RequestedFile::validateInput($i, true) => RequestedFile::buildFromInput($i, validate: $validate),
                UploadedFile::validateInput($i, true) => UploadedFile::buildFromInput($i, validate: $validate),
            }, $input->{'files'});
        }
        $internal = (bool)($input->{'internal'});
        $messageContent = ServiceRequestMessageContent::from($input->{'messageContent'});
        $messageId = $input->{'messageId'};
        $meta = match (true) {
            ServiceRequestRelocationPayload::validateInput($input->{'meta'}, true) => ServiceRequestRelocationPayload::buildFromInput($input->{'meta'}, validate: $validate),
            default => throw new InvalidArgumentException("could not build property 'meta' from JSON"),
        };
        $type = ServiceRequestType::from($input->{'type'});

        $obj = new self($conversationId, $createdAt, $internal, $messageContent, $messageId, $meta, $type);
        $obj->files = $files;
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
        if (isset($this->files)) {
            $output['files'] = array_map(fn (RequestedFile|UploadedFile $i): array => match (true) {
                default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
                ($i) instanceof RequestedFile, ($i) instanceof UploadedFile => $i->toJson(),
            }, $this->files);
        }
        $output['internal'] = $this->internal;
        $output['messageContent'] = ($this->messageContent)->value;
        $output['messageId'] = $this->messageId;
        $output['meta'] = match (true) {
            ($this->meta) instanceof ServiceRequestRelocationPayload => $this->meta->toJson(),
        };
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
        $this->createdAt = clone $this->createdAt;
        $this->meta = match (true) {
            ($this->meta) instanceof ServiceRequestRelocationPayload => $this->meta,
        };
    }
}
