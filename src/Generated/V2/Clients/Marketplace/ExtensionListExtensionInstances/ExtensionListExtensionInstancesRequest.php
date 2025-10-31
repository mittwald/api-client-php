<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensionInstances;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\Context;

class ExtensionListExtensionInstancesRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'context' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.Context',
            ],
            'contextId' => [
                'type' => 'string',
            ],
            'extensionId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'searchTerm' => [
                'type' => 'string',
            ],
            'anchor' => [
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
            'sort' => [
                'type' => 'array',
                'items' => [
                    'type' => 'string',
                    'enum' => [
                        'createdAt',
                        'extensionId',
                        'extensionName',
                    ],
                ],
                'default' => [
                    'createdAt',
                ],
            ],
            'order' => [
                'type' => 'array',
                'items' => [
                    'type' => 'string',
                    'enum' => [
                        'asc',
                        'desc',
                    ],
                ],
                'default' => [
                    'asc',
                ],
            ],
        ],
        'required' => [

        ],
    ];

    private ?Context $context = null;

    private ?string $contextId = null;

    private ?string $extensionId = null;

    private ?string $searchTerm = null;

    private ?string $anchor = null;

    private ?int $limit = null;

    private int $skip = 0;

    private ?int $page = null;

    /**
     * @var string[]
     */
    private array $sort = [
        'createdAt',
    ];

    /**
     * @var string[]
     */
    private array $order = [
        'asc',
    ];

    private array $headers = [

    ];

    /**
     *
     */
    public function __construct()
    {
    }

    public function getContext(): ?Context
    {
        return $this->context ?? null;
    }

    public function getContextId(): ?string
    {
        return $this->contextId ?? null;
    }

    public function getExtensionId(): ?string
    {
        return $this->extensionId ?? null;
    }

    public function getSearchTerm(): ?string
    {
        return $this->searchTerm ?? null;
    }

    public function getAnchor(): ?string
    {
        return $this->anchor ?? null;
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

    /**
     * @return string[]
     */
    public function getSort(): array
    {
        return $this->sort;
    }

    /**
     * @return string[]
     */
    public function getOrder(): array
    {
        return $this->order;
    }

    public function withContext(Context $context): self
    {
        $clone = clone $this;
        $clone->context = $context;

        return $clone;
    }

    public function withoutContext(): self
    {
        $clone = clone $this;
        unset($clone->context);

        return $clone;
    }

    public function withContextId(string $contextId): self
    {
        $validator = new Validator();
        $validator->validate($contextId, self::$internalValidationSchema['properties']['contextId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contextId = $contextId;

        return $clone;
    }

    public function withoutContextId(): self
    {
        $clone = clone $this;
        unset($clone->contextId);

        return $clone;
    }

    public function withExtensionId(string $extensionId): self
    {
        $validator = new Validator();
        $validator->validate($extensionId, self::$internalValidationSchema['properties']['extensionId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->extensionId = $extensionId;

        return $clone;
    }

    public function withoutExtensionId(): self
    {
        $clone = clone $this;
        unset($clone->extensionId);

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

    public function withAnchor(string $anchor): self
    {
        $validator = new Validator();
        $validator->validate($anchor, self::$internalValidationSchema['properties']['anchor']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->anchor = $anchor;

        return $clone;
    }

    public function withoutAnchor(): self
    {
        $clone = clone $this;
        unset($clone->anchor);

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

    public function withoutLimit(): self
    {
        $clone = clone $this;
        unset($clone->limit);

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

    /**
     * @param string[] $sort
     */
    public function withSort(array $sort): self
    {
        $validator = new Validator();
        $validator->validate($sort, self::$internalValidationSchema['properties']['sort']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->sort = $sort;

        return $clone;
    }

    /**
     * @param string[] $order
     */
    public function withOrder(array $order): self
    {
        $validator = new Validator();
        $validator->validate($order, self::$internalValidationSchema['properties']['order']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->order = $order;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionListExtensionInstancesRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionListExtensionInstancesRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $context = null;
        if (isset($input->{'context'})) {
            $context = Context::from($input->{'context'});
        }
        $contextId = null;
        if (isset($input->{'contextId'})) {
            $contextId = $input->{'contextId'};
        }
        $extensionId = null;
        if (isset($input->{'extensionId'})) {
            $extensionId = $input->{'extensionId'};
        }
        $searchTerm = null;
        if (isset($input->{'searchTerm'})) {
            $searchTerm = $input->{'searchTerm'};
        }
        $anchor = null;
        if (isset($input->{'anchor'})) {
            $anchor = $input->{'anchor'};
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
        $sort = [
                'createdAt',
            ];
        if (isset($input->{'sort'})) {
            $sort = $input->{'sort'};
        }
        $order = [
                'asc',
            ];
        if (isset($input->{'order'})) {
            $order = $input->{'order'};
        }

        $obj = new self();
        $obj->context = $context;
        $obj->contextId = $contextId;
        $obj->extensionId = $extensionId;
        $obj->searchTerm = $searchTerm;
        $obj->anchor = $anchor;
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
        if (isset($this->context)) {
            $output['context'] = $this->context->value;
        }
        if (isset($this->contextId)) {
            $output['contextId'] = $this->contextId;
        }
        if (isset($this->extensionId)) {
            $output['extensionId'] = $this->extensionId;
        }
        if (isset($this->searchTerm)) {
            $output['searchTerm'] = $this->searchTerm;
        }
        if (isset($this->anchor)) {
            $output['anchor'] = $this->anchor;
        }
        if (isset($this->limit)) {
            $output['limit'] = $this->limit;
        }
        $output['skip'] = $this->skip;
        if (isset($this->page)) {
            $output['page'] = $this->page;
        }
        $output['sort'] = $this->sort;
        $output['order'] = $this->order;

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
        return '/v2/extension-instances';
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
        if (isset($mapped['context'])) {
            $query['context'] = $mapped['context'];
        }
        if (isset($mapped['contextId'])) {
            $query['contextId'] = $mapped['contextId'];
        }
        if (isset($mapped['extensionId'])) {
            $query['extensionId'] = $mapped['extensionId'];
        }
        if (isset($mapped['searchTerm'])) {
            $query['searchTerm'] = $mapped['searchTerm'];
        }
        if (isset($mapped['anchor'])) {
            $query['anchor'] = $mapped['anchor'];
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
