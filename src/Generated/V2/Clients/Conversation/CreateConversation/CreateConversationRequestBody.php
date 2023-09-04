<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateConversation;

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
            'title' => [
                'minLength' => 1,
                'type' => 'string',
            ],
        ],
        'required' => [
            'title',
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $categoryId = null;

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Conversation\AggregateReference|null
     */
    private ?\Mittwald\ApiClient\Generated\V2\Schemas\Conversation\AggregateReference $relatedTo = null;

    /**
     * @var string
     */
    private string $title;

    private array $headers = [
        
    ];

    /**
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getCategoryId() : ?string
    {
        return $this->categoryId ?? null;
    }

    /**
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\Conversation\AggregateReference|null
     */
    public function getRelatedTo() : ?\Mittwald\ApiClient\Generated\V2\Schemas\Conversation\AggregateReference
    {
        return $this->relatedTo ?? null;
    }

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param string $categoryId
     * @return self
     */
    public function withCategoryId(string $categoryId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($categoryId, static::$schema['properties']['categoryId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->categoryId = $categoryId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCategoryId() : self
    {
        $clone = clone $this;
        unset($clone->categoryId);

        return $clone;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Conversation\AggregateReference $relatedTo
     * @return self
     */
    public function withRelatedTo(\Mittwald\ApiClient\Generated\V2\Schemas\Conversation\AggregateReference $relatedTo) : self
    {
        $clone = clone $this;
        $clone->relatedTo = $relatedTo;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutRelatedTo() : self
    {
        $clone = clone $this;
        unset($clone->relatedTo);

        return $clone;
    }

    /**
     * @param string $title
     * @return self
     */
    public function withTitle(string $title) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($title, static::$schema['properties']['title']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
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
     * @return CreateConversationRequestBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : CreateConversationRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $categoryId = null;
        if (isset($input->{'categoryId'})) {
            $categoryId = $input->{'categoryId'};
        }
        $relatedTo = null;
        if (isset($input->{'relatedTo'})) {
            $relatedTo = \Mittwald\ApiClient\Generated\V2\Schemas\Conversation\AggregateReference::buildFromInput($input->{'relatedTo'}, validate: $validate);
        }
        $title = $input->{'title'};

        $obj = new self($title);
        $obj->categoryId = $categoryId;
        $obj->relatedTo = $relatedTo;
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
        if (isset($this->categoryId)) {
            $output['categoryId'] = $this->categoryId;
        }
        if (isset($this->relatedTo)) {
            $output['relatedTo'] = $this->relatedTo->toJson();
        }
        $output['title'] = $this->title;

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

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        return '/v2/conversations';
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders() : array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value) : self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}

