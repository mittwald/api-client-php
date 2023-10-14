<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateConversation;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Conversation\AggregateReference;

class CreateConversationRequestBody
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'categoryId' => [
                'type' => 'string',
            ],
            'relatedTo' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.conversation.AggregateReference',
            ],
            'sharedWith' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.conversation.AggregateReference',
            ],
            'title' => [
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $categoryId = null;

    /**
     * @var AggregateReference|null
     */
    private ?AggregateReference $relatedTo = null;

    /**
     * @var AggregateReference|null
     */
    private ?AggregateReference $sharedWith = null;

    /**
     * @var string|null
     */
    private ?string $title = null;

    private array $headers = [

    ];

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getCategoryId(): ?string
    {
        return $this->categoryId ?? null;
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
     * \Mittwald\ApiClient\Generated\V2\Schemas\Conversation\AggregateReference|null
     */
    public function getSharedWith(): ?AggregateReference
    {
        return $this->sharedWith ?? null;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title ?? null;
    }

    /**
     * @param string $categoryId
     * @return self
     */
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

    /**
     * @return self
     */
    public function withoutCategoryId(): self
    {
        $clone = clone $this;
        unset($clone->categoryId);

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
     * @param string $title
     * @return self
     */
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

    /**
     * @return self
     */
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
        $relatedTo = null;
        if (isset($input->{'relatedTo'})) {
            $relatedTo = AggregateReference::buildFromInput($input->{'relatedTo'}, validate: $validate);
        }
        $sharedWith = null;
        if (isset($input->{'sharedWith'})) {
            $sharedWith = AggregateReference::buildFromInput($input->{'sharedWith'}, validate: $validate);
        }
        $title = null;
        if (isset($input->{'title'})) {
            $title = $input->{'title'};
        }

        $obj = new self();
        $obj->categoryId = $categoryId;
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
        if (isset($this->relatedTo)) {
            $output['relatedTo'] = $this->relatedTo->toJson();
        }
        if (isset($this->sharedWith)) {
            $output['sharedWith'] = $this->sharedWith->toJson();
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

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        return '/v2/conversations';
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
