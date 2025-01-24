<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateConversation;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Conversation\RelatedAggregateReferenceAlternative1;
use Mittwald\ApiClient\Generated\V2\Schemas\Conversation\RelatedAggregateReferenceAlternative2;
use Mittwald\ApiClient\Generated\V2\Schemas\Conversation\RelatedAggregateReferenceAlternative3;
use Mittwald\ApiClient\Generated\V2\Schemas\Conversation\RelatedAggregateReferenceAlternative4;
use Mittwald\ApiClient\Generated\V2\Schemas\Conversation\RelatedAggregateReferenceAlternative5;
use Mittwald\ApiClient\Generated\V2\Schemas\Conversation\RelatedAggregateReferenceAlternative6;

class UpdateConversationRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'categoryId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'relatedTo' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.conversation.RelatedAggregateReference',
            ],
            'title' => [
                'type' => 'string',
            ],
        ],
    ];

    private ?string $categoryId = null;

    private RelatedAggregateReferenceAlternative1|RelatedAggregateReferenceAlternative2|RelatedAggregateReferenceAlternative3|RelatedAggregateReferenceAlternative4|RelatedAggregateReferenceAlternative5|RelatedAggregateReferenceAlternative6|null $relatedTo = null;

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

    public function getRelatedTo(): RelatedAggregateReferenceAlternative1|RelatedAggregateReferenceAlternative2|RelatedAggregateReferenceAlternative3|RelatedAggregateReferenceAlternative4|RelatedAggregateReferenceAlternative5|RelatedAggregateReferenceAlternative6|null
    {
        return $this->relatedTo;
    }

    public function getTitle(): ?string
    {
        return $this->title ?? null;
    }

    public function withCategoryId(string $categoryId): self
    {
        $validator = new Validator();
        $validator->validate($categoryId, self::$schema['properties']['categoryId']);
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

    public function withRelatedTo(RelatedAggregateReferenceAlternative1|RelatedAggregateReferenceAlternative2|RelatedAggregateReferenceAlternative3|RelatedAggregateReferenceAlternative4|RelatedAggregateReferenceAlternative5|RelatedAggregateReferenceAlternative6 $relatedTo): self
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

    public function withTitle(string $title): self
    {
        $validator = new Validator();
        $validator->validate($title, self::$schema['properties']['title']);
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
     * @return UpdateConversationRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateConversationRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $categoryId = null;
        if (isset($input->{'categoryId'})) {
            $categoryId = $input->{'categoryId'};
        }
        $relatedTo = null;
        if (isset($input->{'relatedTo'})) {
            $relatedTo = match (true) {
                default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
                RelatedAggregateReferenceAlternative1::validateInput($input->{'relatedTo'}, true) => RelatedAggregateReferenceAlternative1::buildFromInput($input->{'relatedTo'}, validate: $validate),
                RelatedAggregateReferenceAlternative2::validateInput($input->{'relatedTo'}, true) => RelatedAggregateReferenceAlternative2::buildFromInput($input->{'relatedTo'}, validate: $validate),
                RelatedAggregateReferenceAlternative3::validateInput($input->{'relatedTo'}, true) => RelatedAggregateReferenceAlternative3::buildFromInput($input->{'relatedTo'}, validate: $validate),
                RelatedAggregateReferenceAlternative4::validateInput($input->{'relatedTo'}, true) => RelatedAggregateReferenceAlternative4::buildFromInput($input->{'relatedTo'}, validate: $validate),
                RelatedAggregateReferenceAlternative5::validateInput($input->{'relatedTo'}, true) => RelatedAggregateReferenceAlternative5::buildFromInput($input->{'relatedTo'}, validate: $validate),
                RelatedAggregateReferenceAlternative6::validateInput($input->{'relatedTo'}, true) => RelatedAggregateReferenceAlternative6::buildFromInput($input->{'relatedTo'}, validate: $validate),
            };
        }
        $title = null;
        if (isset($input->{'title'})) {
            $title = $input->{'title'};
        }

        $obj = new self();
        $obj->categoryId = $categoryId;
        $obj->relatedTo = $relatedTo;
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
        if (isset($this->relatedTo)) {
            $output['relatedTo'] = match (true) {
                default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
                ($this->relatedTo) instanceof RelatedAggregateReferenceAlternative1, ($this->relatedTo) instanceof RelatedAggregateReferenceAlternative2, ($this->relatedTo) instanceof RelatedAggregateReferenceAlternative3, ($this->relatedTo) instanceof RelatedAggregateReferenceAlternative4, ($this->relatedTo) instanceof RelatedAggregateReferenceAlternative5, ($this->relatedTo) instanceof RelatedAggregateReferenceAlternative6 => $this->relatedTo->toJson(),
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
    }
}
