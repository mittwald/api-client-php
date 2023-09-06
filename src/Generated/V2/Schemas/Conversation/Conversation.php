<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

use InvalidArgumentException;
use DateTime;

class Conversation
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'category' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.conversation.Category',
            ],
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
            'lastMessageAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'lastMessageBy' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.conversation.User',
            ],
            'relatedTo' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.conversation.AggregateReference',
            ],
            'relations' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.conversation.AggregateReference',
                ],
                'type' => 'array',
            ],
            'sharedWith' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.conversation.AggregateReference',
            ],
            'shortId' => [
                'type' => 'string',
            ],
            'status' => [
                'enum' => [
                    'open',
                    'closed',
                    'answered',
                ],
                'type' => 'string',
            ],
            'title' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'conversationId',
            'shortId',
            'title',
            'createdAt',
            'status',
        ],
        'type' => 'object',
    ];

    /**
     * @var Category|null
     */
    private ?Category $category = null;

    /**
     * @var string
     */
    private string $conversationId;

    /**
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * @var User|null
     */
    private ?User $createdBy = null;

    /**
     * @var DateTime|null
     */
    private ?DateTime $lastMessageAt = null;

    /**
     * @var User|null
     */
    private ?User $lastMessageBy = null;

    /**
     * @var AggregateReference|null
     */
    private ?AggregateReference $relatedTo = null;

    /**
     * @var AggregateReference[]|null
     */
    private ?array $relations = null;

    /**
     * @var AggregateReference|null
     */
    private ?AggregateReference $sharedWith = null;

    /**
     * @var string
     */
    private string $shortId;

    /**
     * @var ConversationStatus
     */
    private ConversationStatus $status;

    /**
     * @var string
     */
    private string $title;

    /**
     * @param string $conversationId
     * @param DateTime $createdAt
     * @param string $shortId
     * @param ConversationStatus $status
     * @param string $title
     */
    public function __construct(string $conversationId, DateTime $createdAt, string $shortId, ConversationStatus $status, string $title)
    {
        $this->conversationId = $conversationId;
        $this->createdAt = $createdAt;
        $this->shortId = $shortId;
        $this->status = $status;
        $this->title = $title;
    }

    /**
     * @return Category|null
     */
    public function getCategory(): ?Category
    {
        return $this->category ?? null;
    }

    /**
     * @return string
     */
    public function getConversationId(): string
    {
        return $this->conversationId;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return User|null
     */
    public function getCreatedBy(): ?User
    {
        return $this->createdBy ?? null;
    }

    /**
     * @return DateTime|null
     */
    public function getLastMessageAt(): ?DateTime
    {
        return $this->lastMessageAt ?? null;
    }

    /**
     * @return User|null
     */
    public function getLastMessageBy(): ?User
    {
        return $this->lastMessageBy ?? null;
    }

    /**
     * @return
     * AggregateReference|null
     */
    public function getRelatedTo(): ?AggregateReference
    {
        return $this->relatedTo ?? null;
    }

    /**
     * @return
     * AggregateReference[]|null
     */
    public function getRelations(): ?array
    {
        return $this->relations ?? null;
    }

    /**
     * @return
     * AggregateReference|null
     */
    public function getSharedWith(): ?AggregateReference
    {
        return $this->sharedWith ?? null;
    }

    /**
     * @return string
     */
    public function getShortId(): string
    {
        return $this->shortId;
    }

    /**
     * @return ConversationStatus
     */
    public function getStatus(): ConversationStatus
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param Category $category
     * @return self
     */
    public function withCategory(Category $category): self
    {
        $clone = clone $this;
        $clone->category = $category;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCategory(): self
    {
        $clone = clone $this;
        unset($clone->category);

        return $clone;
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
     * @param DateTime $createdAt
     * @return self
     */
    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

    /**
     * @param User $createdBy
     * @return self
     */
    public function withCreatedBy(User $createdBy): self
    {
        $clone = clone $this;
        $clone->createdBy = $createdBy;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCreatedBy(): self
    {
        $clone = clone $this;
        unset($clone->createdBy);

        return $clone;
    }

    /**
     * @param DateTime $lastMessageAt
     * @return self
     */
    public function withLastMessageAt(DateTime $lastMessageAt): self
    {
        $clone = clone $this;
        $clone->lastMessageAt = $lastMessageAt;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutLastMessageAt(): self
    {
        $clone = clone $this;
        unset($clone->lastMessageAt);

        return $clone;
    }

    /**
     * @param User $lastMessageBy
     * @return self
     */
    public function withLastMessageBy(User $lastMessageBy): self
    {
        $clone = clone $this;
        $clone->lastMessageBy = $lastMessageBy;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutLastMessageBy(): self
    {
        $clone = clone $this;
        unset($clone->lastMessageBy);

        return $clone;
    }

    /**
     * @param AggregateReference $relatedTo
     * @return self
     */
    public function withRelatedTo(AggregateReference $relatedTo): self
    {
        $clone = clone $this;
        $clone->relatedTo = $relatedTo;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutRelatedTo(): self
    {
        $clone = clone $this;
        unset($clone->relatedTo);

        return $clone;
    }

    /**
     * @param AggregateReference[] $relations
     * @return self
     */
    public function withRelations(array $relations): self
    {
        $clone = clone $this;
        $clone->relations = $relations;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutRelations(): self
    {
        $clone = clone $this;
        unset($clone->relations);

        return $clone;
    }

    /**
     * @param AggregateReference $sharedWith
     * @return self
     */
    public function withSharedWith(AggregateReference $sharedWith): self
    {
        $clone = clone $this;
        $clone->sharedWith = $sharedWith;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutSharedWith(): self
    {
        $clone = clone $this;
        unset($clone->sharedWith);

        return $clone;
    }

    /**
     * @param string $shortId
     * @return self
     */
    public function withShortId(string $shortId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($shortId, static::$schema['properties']['shortId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->shortId = $shortId;

        return $clone;
    }

    /**
     * @param ConversationStatus $status
     * @return self
     */
    public function withStatus(ConversationStatus $status): self
    {
        $clone = clone $this;
        $clone->status = $status;

        return $clone;
    }

    /**
     * @param string $title
     * @return self
     */
    public function withTitle(string $title): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($title, static::$schema['properties']['title']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->title = $title;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Conversation Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Conversation
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $category = null;
        if (isset($input->{'category'})) {
            $category = Category::buildFromInput($input->{'category'}, validate: $validate);
        }
        $conversationId = $input->{'conversationId'};
        $createdAt = new DateTime($input->{'createdAt'});
        $createdBy = null;
        if (isset($input->{'createdBy'})) {
            $createdBy = User::buildFromInput($input->{'createdBy'}, validate: $validate);
        }
        $lastMessageAt = null;
        if (isset($input->{'lastMessageAt'})) {
            $lastMessageAt = new DateTime($input->{'lastMessageAt'});
        }
        $lastMessageBy = null;
        if (isset($input->{'lastMessageBy'})) {
            $lastMessageBy = User::buildFromInput($input->{'lastMessageBy'}, validate: $validate);
        }
        $relatedTo = null;
        if (isset($input->{'relatedTo'})) {
            $relatedTo = AggregateReference::buildFromInput($input->{'relatedTo'}, validate: $validate);
        }
        $relations = null;
        if (isset($input->{'relations'})) {
            $relations = array_map(fn (array $i): AggregateReference => AggregateReference::buildFromInput($i, validate: $validate), $input->{'relations'});
        }
        $sharedWith = null;
        if (isset($input->{'sharedWith'})) {
            $sharedWith = AggregateReference::buildFromInput($input->{'sharedWith'}, validate: $validate);
        }
        $shortId = $input->{'shortId'};
        $status = ConversationStatus::from($input->{'status'});
        $title = $input->{'title'};

        $obj = new self($conversationId, $createdAt, $shortId, $status, $title);
        $obj->category = $category;
        $obj->createdBy = $createdBy;
        $obj->lastMessageAt = $lastMessageAt;
        $obj->lastMessageBy = $lastMessageBy;
        $obj->relatedTo = $relatedTo;
        $obj->relations = $relations;
        $obj->sharedWith = $sharedWith;
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
        if (isset($this->category)) {
            $output['category'] = $this->category->toJson();
        }
        $output['conversationId'] = $this->conversationId;
        $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        if (isset($this->createdBy)) {
            $output['createdBy'] = $this->createdBy->toJson();
        }
        if (isset($this->lastMessageAt)) {
            $output['lastMessageAt'] = ($this->lastMessageAt)->format(DateTime::ATOM);
        }
        if (isset($this->lastMessageBy)) {
            $output['lastMessageBy'] = $this->lastMessageBy->toJson();
        }
        if (isset($this->relatedTo)) {
            $output['relatedTo'] = $this->relatedTo->toJson();
        }
        if (isset($this->relations)) {
            $output['relations'] = array_map(fn (AggregateReference $i): array => $i->toJson(), $this->relations);
        }
        if (isset($this->sharedWith)) {
            $output['sharedWith'] = $this->sharedWith->toJson();
        }
        $output['shortId'] = $this->shortId;
        $output['status'] = ($this->status)->value;
        $output['title'] = $this->title;

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
        $this->createdAt = clone $this->createdAt;
        if (isset($this->lastMessageAt)) {
            $this->lastMessageAt = clone $this->lastMessageAt;
        }
    }
}
