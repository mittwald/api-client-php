<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Article\ListArticles;

use InvalidArgumentException;
use JsonSchema\Validator;

class ListArticlesRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'customerId' => [
                'type' => 'string',
            ],
            'tags' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'templateNames' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'articleIds' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'orderable' => [
                'items' => [
                    'enum' => [
                        'forbidden',
                        'internal',
                        'beta_testing',
                        'full',
                        'deprecated',
                    ],
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'name' => [
                'type' => 'string',
            ],
            'limit' => [
                'type' => 'integer',
                'minimum' => 1,
            ],
            'skip' => [
                'type' => 'integer',
                'default' => 0,
            ],
            'page' => [
                'type' => 'integer',
                'minimum' => 1,
            ],
        ],
        'required' => [

        ],
    ];

    private ?string $customerId = null;

    /**
     * @var string[]|null
     */
    private ?array $tags = null;

    /**
     * @var string[]|null
     */
    private ?array $templateNames = null;

    /**
     * @var string[]|null
     */
    private ?array $articleIds = null;

    /**
     * @var string[]|null
     */
    private ?array $orderable = null;

    private ?string $name = null;

    private ?int $limit = null;

    private int $skip = 0;

    private ?int $page = null;

    private array $headers = [

    ];

    /**
     *
     */
    public function __construct()
    {
    }

    public function getCustomerId(): ?string
    {
        return $this->customerId ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getTemplateNames(): ?array
    {
        return $this->templateNames ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getArticleIds(): ?array
    {
        return $this->articleIds ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getOrderable(): ?array
    {
        return $this->orderable ?? null;
    }

    public function getName(): ?string
    {
        return $this->name ?? null;
    }

    public function getLimit(): ?int
    {
        return $this->limit ?? null;
    }

    public function getSkip(): int
    {
        return $this->skip;
    }

    public function getPage(): ?int
    {
        return $this->page ?? null;
    }

    public function withCustomerId(string $customerId): self
    {
        $validator = new Validator();
        $validator->validate($customerId, self::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    public function withoutCustomerId(): self
    {
        $clone = clone $this;
        unset($clone->customerId);

        return $clone;
    }

    /**
     * @param string[] $tags
     */
    public function withTags(array $tags): self
    {
        $validator = new Validator();
        $validator->validate($tags, self::$schema['properties']['tags']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->tags = $tags;

        return $clone;
    }

    public function withoutTags(): self
    {
        $clone = clone $this;
        unset($clone->tags);

        return $clone;
    }

    /**
     * @param string[] $templateNames
     */
    public function withTemplateNames(array $templateNames): self
    {
        $validator = new Validator();
        $validator->validate($templateNames, self::$schema['properties']['templateNames']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->templateNames = $templateNames;

        return $clone;
    }

    public function withoutTemplateNames(): self
    {
        $clone = clone $this;
        unset($clone->templateNames);

        return $clone;
    }

    /**
     * @param string[] $articleIds
     */
    public function withArticleIds(array $articleIds): self
    {
        $validator = new Validator();
        $validator->validate($articleIds, self::$schema['properties']['articleIds']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->articleIds = $articleIds;

        return $clone;
    }

    public function withoutArticleIds(): self
    {
        $clone = clone $this;
        unset($clone->articleIds);

        return $clone;
    }

    /**
     * @param string[] $orderable
     */
    public function withOrderable(array $orderable): self
    {
        $validator = new Validator();
        $validator->validate($orderable, self::$schema['properties']['orderable']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->orderable = $orderable;

        return $clone;
    }

    public function withoutOrderable(): self
    {
        $clone = clone $this;
        unset($clone->orderable);

        return $clone;
    }

    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, self::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    public function withoutName(): self
    {
        $clone = clone $this;
        unset($clone->name);

        return $clone;
    }

    public function withLimit(int $limit): self
    {
        $validator = new Validator();
        $validator->validate($limit, self::$schema['properties']['limit']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->limit = $limit;

        return $clone;
    }

    public function withoutLimit(): self
    {
        $clone = clone $this;
        unset($clone->limit);

        return $clone;
    }

    public function withSkip(int $skip): self
    {
        $validator = new Validator();
        $validator->validate($skip, self::$schema['properties']['skip']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->skip = $skip;

        return $clone;
    }

    public function withPage(int $page): self
    {
        $validator = new Validator();
        $validator->validate($page, self::$schema['properties']['page']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->page = $page;

        return $clone;
    }

    public function withoutPage(): self
    {
        $clone = clone $this;
        unset($clone->page);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListArticlesRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListArticlesRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = null;
        if (isset($input->{'customerId'})) {
            $customerId = $input->{'customerId'};
        }
        $tags = null;
        if (isset($input->{'tags'})) {
            $tags = $input->{'tags'};
        }
        $templateNames = null;
        if (isset($input->{'templateNames'})) {
            $templateNames = $input->{'templateNames'};
        }
        $articleIds = null;
        if (isset($input->{'articleIds'})) {
            $articleIds = $input->{'articleIds'};
        }
        $orderable = null;
        if (isset($input->{'orderable'})) {
            $orderable = $input->{'orderable'};
        }
        $name = null;
        if (isset($input->{'name'})) {
            $name = $input->{'name'};
        }
        $limit = null;
        if (isset($input->{'limit'})) {
            $limit = (int)($input->{'limit'});
        }
        $skip = 0;
        if (isset($input->{'skip'})) {
            $skip = (int)($input->{'skip'});
        }
        $page = null;
        if (isset($input->{'page'})) {
            $page = (int)($input->{'page'});
        }

        $obj = new self();
        $obj->customerId = $customerId;
        $obj->tags = $tags;
        $obj->templateNames = $templateNames;
        $obj->articleIds = $articleIds;
        $obj->orderable = $orderable;
        $obj->name = $name;
        $obj->limit = $limit;
        $obj->skip = $skip;
        $obj->page = $page;
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
        if (isset($this->customerId)) {
            $output['customerId'] = $this->customerId;
        }
        if (isset($this->tags)) {
            $output['tags'] = $this->tags;
        }
        if (isset($this->templateNames)) {
            $output['templateNames'] = $this->templateNames;
        }
        if (isset($this->articleIds)) {
            $output['articleIds'] = $this->articleIds;
        }
        if (isset($this->orderable)) {
            $output['orderable'] = $this->orderable;
        }
        if (isset($this->name)) {
            $output['name'] = $this->name;
        }
        if (isset($this->limit)) {
            $output['limit'] = $this->limit;
        }
        $output['skip'] = $this->skip;
        if (isset($this->page)) {
            $output['page'] = $this->page;
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

    /**
     * Builds the URL for this request
     *
     * This method is used internally by the client to build the URL for this request.
     * You should not need to call this method directly.
     *
     * @internal
     * @return string The URL for this request
     */
    public function buildUrl(): string
    {
        $mapped = $this->toJson();
        return '/v2/articles';
    }

    /**
     * Builds the request options for this request
     *
     * This method is used internally by the client to build the Guzzle request options
     * for this request. You should not need to call this method directly.
     *
     * @internal
     * @return array The Guzzle request options for this request
     */
    public function buildRequestOptions(): array
    {
        $mapped = $this->toJson();
        $query = [];
        if (isset($mapped['customerId'])) {
            $query['customerId'] = $mapped['customerId'];
        }
        if (isset($mapped['tags'])) {
            $query['tags'] = $mapped['tags'];
        }
        if (isset($mapped['templateNames'])) {
            $query['templateNames'] = $mapped['templateNames'];
        }
        if (isset($mapped['articleIds'])) {
            $query['articleIds'] = $mapped['articleIds'];
        }
        if (isset($mapped['orderable'])) {
            $query['orderable'] = $mapped['orderable'];
        }
        if (isset($mapped['name'])) {
            $query['name'] = $mapped['name'];
        }
        if (isset($mapped['limit'])) {
            $query['limit'] = $mapped['limit'];
        }
        if (isset($mapped['skip'])) {
            $query['skip'] = $mapped['skip'];
        }
        if (isset($mapped['page'])) {
            $query['page'] = $mapped['page'];
        }
        return [
            'query' => $query,
            'headers' => $this->headers,
        ];
    }

    /**
     * Adds a header to this request
     *
     * You can use this method to add custom HTTP headers to the request.
     *
     * @param string $name The name of the header to add
     * @param string|array $value The value of the header to add
     * @return self A clone of this request with the header added
     */
    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
