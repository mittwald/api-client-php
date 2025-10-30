<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects;

use InvalidArgumentException;
use JsonSchema\Validator;

class ListProjectsRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'customerId' => [
                'example' => '15b8a787-8d46-43b0-907e-01af35032c0a',
                'type' => 'string',
            ],
            'serverId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'searchTerm' => [
                'type' => 'string',
            ],
            'limit' => [
                'type' => 'integer',
                'default' => 10000,
                'minimum' => 0,
            ],
            'skip' => [
                'type' => 'integer',
                'default' => 0,
            ],
            'page' => [
                'type' => 'integer',
                'minimum' => 1,
            ],
            'sort' => [
                'type' => 'string',
                'enum' => [
                    'createdAt',
                    'description',
                ],
                'default' => 'createdAt',
            ],
            'order' => [
                'type' => 'string',
                'enum' => [
                    'asc',
                    'desc',
                ],
                'default' => 'asc',
            ],
        ],
        'required' => [

        ],
    ];

    private ?string $customerId = null;

    private ?string $serverId = null;

    private ?string $searchTerm = null;

    private int $limit = 10000;

    private int $skip = 0;

    private ?int $page = null;

    private ListProjectsRequestSort $sort = ListProjectsRequestSort::createdAt;

    private ListProjectsRequestOrder $order = ListProjectsRequestOrder::asc;

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

    public function getServerId(): ?string
    {
        return $this->serverId ?? null;
    }

    public function getSearchTerm(): ?string
    {
        return $this->searchTerm ?? null;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getSkip(): int
    {
        return $this->skip;
    }

    public function getPage(): ?int
    {
        return $this->page ?? null;
    }

    public function getSort(): ListProjectsRequestSort
    {
        return $this->sort;
    }

    public function getOrder(): ListProjectsRequestOrder
    {
        return $this->order;
    }

    public function withCustomerId(string $customerId): self
    {
        $validator = new Validator();
        $validator->validate($customerId, self::$internalValidationSchema['properties']['customerId']);
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

    public function withServerId(string $serverId): self
    {
        $validator = new Validator();
        $validator->validate($serverId, self::$internalValidationSchema['properties']['serverId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->serverId = $serverId;

        return $clone;
    }

    public function withoutServerId(): self
    {
        $clone = clone $this;
        unset($clone->serverId);

        return $clone;
    }

    public function withSearchTerm(string $searchTerm): self
    {
        $validator = new Validator();
        $validator->validate($searchTerm, self::$internalValidationSchema['properties']['searchTerm']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->searchTerm = $searchTerm;

        return $clone;
    }

    public function withoutSearchTerm(): self
    {
        $clone = clone $this;
        unset($clone->searchTerm);

        return $clone;
    }

    public function withLimit(int $limit): self
    {
        $validator = new Validator();
        $validator->validate($limit, self::$internalValidationSchema['properties']['limit']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->limit = $limit;

        return $clone;
    }

    public function withSkip(int $skip): self
    {
        $validator = new Validator();
        $validator->validate($skip, self::$internalValidationSchema['properties']['skip']);
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
        $validator->validate($page, self::$internalValidationSchema['properties']['page']);
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

    public function withSort(ListProjectsRequestSort $sort): self
    {
        $clone = clone $this;
        $clone->sort = $sort;

        return $clone;
    }

    public function withOrder(ListProjectsRequestOrder $order): self
    {
        $clone = clone $this;
        $clone->order = $order;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListProjectsRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListProjectsRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = null;
        if (isset($input->{'customerId'})) {
            $customerId = $input->{'customerId'};
        }
        $serverId = null;
        if (isset($input->{'serverId'})) {
            $serverId = $input->{'serverId'};
        }
        $searchTerm = null;
        if (isset($input->{'searchTerm'})) {
            $searchTerm = $input->{'searchTerm'};
        }
        $limit = 10000;
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
        $sort = ListProjectsRequestSort::createdAt;
        if (isset($input->{'sort'})) {
            $sort = ListProjectsRequestSort::from($input->{'sort'});
        }
        $order = ListProjectsRequestOrder::asc;
        if (isset($input->{'order'})) {
            $order = ListProjectsRequestOrder::from($input->{'order'});
        }

        $obj = new self();
        $obj->customerId = $customerId;
        $obj->serverId = $serverId;
        $obj->searchTerm = $searchTerm;
        $obj->limit = $limit;
        $obj->skip = $skip;
        $obj->page = $page;
        $obj->sort = $sort;
        $obj->order = $order;
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
        if (isset($this->serverId)) {
            $output['serverId'] = $this->serverId;
        }
        if (isset($this->searchTerm)) {
            $output['searchTerm'] = $this->searchTerm;
        }
        $output['limit'] = $this->limit;
        $output['skip'] = $this->skip;
        if (isset($this->page)) {
            $output['page'] = $this->page;
        }
        $output['sort'] = ($this->sort)->value;
        $output['order'] = ($this->order)->value;

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
        $validator->validate($input, self::$internalValidationSchema);

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
        return '/v2/projects';
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
        if (isset($mapped['serverId'])) {
            $query['serverId'] = $mapped['serverId'];
        }
        if (isset($mapped['searchTerm'])) {
            $query['searchTerm'] = $mapped['searchTerm'];
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
        if (isset($mapped['sort'])) {
            $query['sort'] = $mapped['sort'];
        }
        if (isset($mapped['order'])) {
            $query['order'] = $mapped['order'];
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
