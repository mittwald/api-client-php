<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Article\ListArticles;

class ListArticlesRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'customerId' => [
                'type' => 'string',
            ],
            'limit' => [
                'minimum' => 0,
                'type' => 'integer',
            ],
            'skip' => [
                'minimum' => 0,
                'type' => 'integer',
            ],
            'page' => [
                'minimum' => 0,
                'type' => 'integer',
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
        ],
        'required' => [
            
        ],
    ];

    /**
     * @var string|null
     */
    private ?string $customerId = null;

    /**
     * @var int|null
     */
    private ?int $limit = null;

    /**
     * @var int|null
     */
    private ?int $skip = null;

    /**
     * @var int|null
     */
    private ?int $page = null;

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

    /**
     * @var string|null
     */
    private ?string $name = null;

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
    public function getCustomerId() : ?string
    {
        return $this->customerId ?? null;
    }

    /**
     * @return int|null
     */
    public function getLimit() : ?int
    {
        return $this->limit ?? null;
    }

    /**
     * @return int|null
     */
    public function getSkip() : ?int
    {
        return $this->skip ?? null;
    }

    /**
     * @return int|null
     */
    public function getPage() : ?int
    {
        return $this->page ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getTags() : ?array
    {
        return $this->tags ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getTemplateNames() : ?array
    {
        return $this->templateNames ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getArticleIds() : ?array
    {
        return $this->articleIds ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getOrderable() : ?array
    {
        return $this->orderable ?? null;
    }

    /**
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name ?? null;
    }

    /**
     * @param string $customerId
     * @return self
     */
    public function withCustomerId(string $customerId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($customerId, static::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCustomerId() : self
    {
        $clone = clone $this;
        unset($clone->customerId);

        return $clone;
    }

    /**
     * @param int $limit
     * @return self
     */
    public function withLimit(int $limit) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($limit, static::$schema['properties']['limit']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->limit = $limit;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutLimit() : self
    {
        $clone = clone $this;
        unset($clone->limit);

        return $clone;
    }

    /**
     * @param int $skip
     * @return self
     */
    public function withSkip(int $skip) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($skip, static::$schema['properties']['skip']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->skip = $skip;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutSkip() : self
    {
        $clone = clone $this;
        unset($clone->skip);

        return $clone;
    }

    /**
     * @param int $page
     * @return self
     */
    public function withPage(int $page) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($page, static::$schema['properties']['page']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->page = $page;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutPage() : self
    {
        $clone = clone $this;
        unset($clone->page);

        return $clone;
    }

    /**
     * @param string[] $tags
     * @return self
     */
    public function withTags(array $tags) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($tags, static::$schema['properties']['tags']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->tags = $tags;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTags() : self
    {
        $clone = clone $this;
        unset($clone->tags);

        return $clone;
    }

    /**
     * @param string[] $templateNames
     * @return self
     */
    public function withTemplateNames(array $templateNames) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($templateNames, static::$schema['properties']['templateNames']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->templateNames = $templateNames;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTemplateNames() : self
    {
        $clone = clone $this;
        unset($clone->templateNames);

        return $clone;
    }

    /**
     * @param string[] $articleIds
     * @return self
     */
    public function withArticleIds(array $articleIds) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($articleIds, static::$schema['properties']['articleIds']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->articleIds = $articleIds;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutArticleIds() : self
    {
        $clone = clone $this;
        unset($clone->articleIds);

        return $clone;
    }

    /**
     * @param string[] $orderable
     * @return self
     */
    public function withOrderable(array $orderable) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($orderable, static::$schema['properties']['orderable']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->orderable = $orderable;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutOrderable() : self
    {
        $clone = clone $this;
        unset($clone->orderable);

        return $clone;
    }

    /**
     * @param string $name
     * @return self
     */
    public function withName(string $name) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutName() : self
    {
        $clone = clone $this;
        unset($clone->name);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListArticlesRequest Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : ListArticlesRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = null;
        if (isset($input->{'customerId'})) {
            $customerId = $input->{'customerId'};
        }
        $limit = null;
        if (isset($input->{'limit'})) {
            $limit = (int)($input->{'limit'});
        }
        $skip = null;
        if (isset($input->{'skip'})) {
            $skip = (int)($input->{'skip'});
        }
        $page = null;
        if (isset($input->{'page'})) {
            $page = (int)($input->{'page'});
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

        $obj = new self();
        $obj->customerId = $customerId;
        $obj->limit = $limit;
        $obj->skip = $skip;
        $obj->page = $page;
        $obj->tags = $tags;
        $obj->templateNames = $templateNames;
        $obj->articleIds = $articleIds;
        $obj->orderable = $orderable;
        $obj->name = $name;
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
        if (isset($this->customerId)) {
            $output['customerId'] = $this->customerId;
        }
        if (isset($this->limit)) {
            $output['limit'] = $this->limit;
        }
        if (isset($this->skip)) {
            $output['skip'] = $this->skip;
        }
        if (isset($this->page)) {
            $output['page'] = $this->page;
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
        return '/v2/articles';
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
        if (isset($mapped['customerId'])) {
            $query['customerId'] = $mapped['customerId'];
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

