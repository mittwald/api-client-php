<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateConversation;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Conversation\AggregateReference;
use Mittwald\ApiClient\Generated\V2\Schemas\Conversation\ShareableAggregateReferenceAlternative1;
use Mittwald\ApiClient\Generated\V2\Schemas\Conversation\ShareableAggregateReferenceAlternative2;
use Mittwald\ApiClient\Generated\V2\Schemas\Conversation\ShareableAggregateReferenceAlternative3;
use Mittwald\ApiClient\Generated\V2\Schemas\Conversation\ShareableAggregateReferenceAlternative4;

class CreateConversationRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'categoryId' => [
                'type' => 'string',
            ],
            'mainUserId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'relatedTo' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.conversation.AggregateReference',
            ],
            'sharedWith' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.conversation.ShareableAggregateReference',
            ],
            'title' => [
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ?string $categoryId = null;

    private ?string $mainUserId = null;

    private ?AggregateReference $relatedTo = null;

    private ShareableAggregateReferenceAlternative1|ShareableAggregateReferenceAlternative2|ShareableAggregateReferenceAlternative3|ShareableAggregateReferenceAlternative4|null $sharedWith = null;

    private ?string $title = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getCategoryId(): ?string
    {
        return $this->categoryId ?? null;
    }

    public function getMainUserId(): ?string
    {
        return $this->mainUserId ?? null;
    }

    /**
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\Conversation\AggregateReference|null
     */
    public function getRelatedTo(): ?AggregateReference
    {
        return $this->relatedTo ?? null;
    }

    /**
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\Conversation\ShareableAggregateReferenceAlternative1|\Mittwald\ApiClient\Generated\V2\Schemas\Conversation\ShareableAggregateReferenceAlternative2|\Mittwald\ApiClient\Generated\V2\Schemas\Conversation\ShareableAggregateReferenceAlternative3|\Mittwald\ApiClient\Generated\V2\Schemas\Conversation\ShareableAggregateReferenceAlternative4|null
     */
    public function getSharedWith(): ShareableAggregateReferenceAlternative1|ShareableAggregateReferenceAlternative2|ShareableAggregateReferenceAlternative3|ShareableAggregateReferenceAlternative4|null
    {
        return $this->sharedWith;
    }

    public function getTitle(): ?string
    {
        return $this->title ?? null;
    }

    public function withCategoryId(string $categoryId): self
    {
        $validator = new Validator();
        $validator->validate($categoryId, static::$schema['properties']['categoryId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->categoryId = $categoryId;

        return $clone;
    }

    public function withoutCategoryId(): self
    {
        $clone = clone $this;
        unset($clone->categoryId);

        return $clone;
    }

    public function withMainUserId(string $mainUserId): self
    {
        $validator = new Validator();
        $validator->validate($mainUserId, static::$schema['properties']['mainUserId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mainUserId = $mainUserId;

        return $clone;
    }

    public function withoutMainUserId(): self
    {
        $clone = clone $this;
        unset($clone->mainUserId);

        return $clone;
    }

    public function withRelatedTo(AggregateReference $relatedTo): self
    {
        $clone = clone $this;
        $clone->relatedTo = $relatedTo;

        return $clone;
    }

    public function withoutRelatedTo(): self
    {
        $clone = clone $this;
        unset($clone->relatedTo);

        return $clone;
    }

    /**
     * @param ShareableAggregateReferenceAlternative1|ShareableAggregateReferenceAlternative2|ShareableAggregateReferenceAlternative3|ShareableAggregateReferenceAlternative4 $sharedWith
     */
    public function withSharedWith(ShareableAggregateReferenceAlternative1|ShareableAggregateReferenceAlternative2|ShareableAggregateReferenceAlternative3|ShareableAggregateReferenceAlternative4 $sharedWith): self
    {
        $clone = clone $this;
        $clone->sharedWith = $sharedWith;

        return $clone;
    }

    public function withoutSharedWith(): self
    {
        $clone = clone $this;
        unset($clone->sharedWith);

        return $clone;
    }

    public function withTitle(string $title): self
    {
        $validator = new Validator();
        $validator->validate($title, static::$schema['properties']['title']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->title = $title;

        return $clone;
    }

    public function withoutTitle(): self
    {
        $clone = clone $this;
        unset($clone->title);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateConversationRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateConversationRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $categoryId = null;
        if (isset($input->{'categoryId'})) {
            $categoryId = $input->{'categoryId'};
        }
        $mainUserId = null;
        if (isset($input->{'mainUserId'})) {
            $mainUserId = $input->{'mainUserId'};
        }
        $relatedTo = null;
        if (isset($input->{'relatedTo'})) {
            $relatedTo = AggregateReference::buildFromInput($input->{'relatedTo'}, validate: $validate);
        }
        $sharedWith = null;
        if (isset($input->{'sharedWith'})) {
            $sharedWith = match (true) {
                default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
                ShareableAggregateReferenceAlternative1::validateInput($input->{'sharedWith'}, true) => ShareableAggregateReferenceAlternative1::buildFromInput($input->{'sharedWith'}, validate: $validate),
                ShareableAggregateReferenceAlternative2::validateInput($input->{'sharedWith'}, true) => ShareableAggregateReferenceAlternative2::buildFromInput($input->{'sharedWith'}, validate: $validate),
                ShareableAggregateReferenceAlternative3::validateInput($input->{'sharedWith'}, true) => ShareableAggregateReferenceAlternative3::buildFromInput($input->{'sharedWith'}, validate: $validate),
                ShareableAggregateReferenceAlternative4::validateInput($input->{'sharedWith'}, true) => ShareableAggregateReferenceAlternative4::buildFromInput($input->{'sharedWith'}, validate: $validate),
            };
        }
        $title = null;
        if (isset($input->{'title'})) {
            $title = $input->{'title'};
        }

        $obj = new self();
        $obj->categoryId = $categoryId;
        $obj->mainUserId = $mainUserId;
        $obj->relatedTo = $relatedTo;
        $obj->sharedWith = $sharedWith;
        $obj->title = $title;
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
        if (isset($this->categoryId)) {
            $output['categoryId'] = $this->categoryId;
        }
        if (isset($this->mainUserId)) {
            $output['mainUserId'] = $this->mainUserId;
        }
        if (isset($this->relatedTo)) {
            $output['relatedTo'] = $this->relatedTo->toJson();
        }
        if (isset($this->sharedWith)) {
            $output['sharedWith'] = match (true) {
                default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
                ($this->sharedWith) instanceof ShareableAggregateReferenceAlternative1, ($this->sharedWith) instanceof ShareableAggregateReferenceAlternative2, ($this->sharedWith) instanceof ShareableAggregateReferenceAlternative3, ($this->sharedWith) instanceof ShareableAggregateReferenceAlternative4 => $this->sharedWith->toJson(),
            };
        }
        if (isset($this->title)) {
            $output['title'] = $this->title;
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
