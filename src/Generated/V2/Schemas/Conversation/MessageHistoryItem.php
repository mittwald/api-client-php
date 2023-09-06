<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

use InvalidArgumentException;
use JsonSchema\Validator;

class MessageHistoryItem
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'content' => [
                'type' => 'string',
            ],
            'updatedAt' => [
                'type' => 'string',
            ],
            'updatedBy' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.conversation.User',
            ],
        ],
        'required' => [
            'content',
            'updatedAt',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $content;

    /**
     * @var string
     */
    private string $updatedAt;

    /**
     * @var User|null
     */
    private ?User $updatedBy = null;

    /**
     * @param string $content
     * @param string $updatedAt
     */
    public function __construct(string $content, string $updatedAt)
    {
        $this->content = $content;
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     * @return User|null
     */
    public function getUpdatedBy(): ?User
    {
        return $this->updatedBy ?? null;
    }

    /**
     * @param string $content
     * @return self
     */
    public function withContent(string $content): self
    {
        $validator = new Validator();
        $validator->validate($content, static::$schema['properties']['content']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->content = $content;

        return $clone;
    }

    /**
     * @param string $updatedAt
     * @return self
     */
    public function withUpdatedAt(string $updatedAt): self
    {
        $validator = new Validator();
        $validator->validate($updatedAt, static::$schema['properties']['updatedAt']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->updatedAt = $updatedAt;

        return $clone;
    }

    /**
     * @param User $updatedBy
     * @return self
     */
    public function withUpdatedBy(User $updatedBy): self
    {
        $clone = clone $this;
        $clone->updatedBy = $updatedBy;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutUpdatedBy(): self
    {
        $clone = clone $this;
        unset($clone->updatedBy);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MessageHistoryItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MessageHistoryItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $content = $input->{'content'};
        $updatedAt = $input->{'updatedAt'};
        $updatedBy = null;
        if (isset($input->{'updatedBy'})) {
            $updatedBy = User::buildFromInput($input->{'updatedBy'}, validate: $validate);
        }

        $obj = new self($content, $updatedAt);
        $obj->updatedBy = $updatedBy;
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
        $output['content'] = $this->content;
        $output['updatedAt'] = $this->updatedAt;
        if (isset($this->updatedBy)) {
            $output['updatedBy'] = $this->updatedBy->toJson();
        }

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
    }
}
