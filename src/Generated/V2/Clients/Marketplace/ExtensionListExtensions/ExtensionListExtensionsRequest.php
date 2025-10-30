<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensions;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\Context;

class ExtensionListExtensionsRequest
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
            'searchTerm' => [
                'type' => 'string',
            ],
            'includeDeprecated' => [
                'type' => 'boolean',
            ],
            'limit' => [
                'type' => 'integer',
                'default' => 1000,
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
                    'name',
                ],
                'default' => 'name',
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

    private ?Context $context = null;

    private ?string $searchTerm = null;

    private ?bool $includeDeprecated = null;

    private int $limit = 1000;

    private int $skip = 0;

    private ?int $page = null;

    private ExtensionListExtensionsRequestSort $sort = ExtensionListExtensionsRequestSort::name;

    private ExtensionListExtensionsRequestOrder $order = ExtensionListExtensionsRequestOrder::asc;

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

    public function getSearchTerm(): ?string
    {
        return $this->searchTerm ?? null;
    }

    public function getIncludeDeprecated(): ?bool
    {
        return $this->includeDeprecated ?? null;
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

    public function getSort(): ExtensionListExtensionsRequestSort
    {
        return $this->sort;
    }

    public function getOrder(): ExtensionListExtensionsRequestOrder
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

    public function withIncludeDeprecated(bool $includeDeprecated): self
    {
        $validator = new Validator();
        $validator->validate($includeDeprecated, self::$internalValidationSchema['properties']['includeDeprecated']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->includeDeprecated = $includeDeprecated;

        return $clone;
    }

    public function withoutIncludeDeprecated(): self
    {
        $clone = clone $this;
        unset($clone->includeDeprecated);

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

    public function withSort(ExtensionListExtensionsRequestSort $sort): self
    {
        $clone = clone $this;
        $clone->sort = $sort;

        return $clone;
    }

    public function withOrder(ExtensionListExtensionsRequestOrder $order): self
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
     * @return ExtensionListExtensionsRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionListExtensionsRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $context = null;
        if (isset($input->{'context'})) {
            $context = Context::from($input->{'context'});
        }
        $searchTerm = null;
        if (isset($input->{'searchTerm'})) {
            $searchTerm = $input->{'searchTerm'};
        }
        $includeDeprecated = null;
        if (isset($input->{'includeDeprecated'})) {
            $includeDeprecated = (bool)($input->{'includeDeprecated'});
        }
        $limit = 1000;
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
        $sort = ExtensionListExtensionsRequestSort::name;
        if (isset($input->{'sort'})) {
            $sort = ExtensionListExtensionsRequestSort::from($input->{'sort'});
        }
        $order = ExtensionListExtensionsRequestOrder::asc;
        if (isset($input->{'order'})) {
            $order = ExtensionListExtensionsRequestOrder::from($input->{'order'});
        }

        $obj = new self();
        $obj->context = $context;
        $obj->searchTerm = $searchTerm;
        $obj->includeDeprecated = $includeDeprecated;
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
        if (isset($this->searchTerm)) {
            $output['searchTerm'] = $this->searchTerm;
        }
        if (isset($this->includeDeprecated)) {
            $output['includeDeprecated'] = $this->includeDeprecated;
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
        return '/v2/extensions';
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
        if (isset($mapped['searchTerm'])) {
            $query['searchTerm'] = $mapped['searchTerm'];
        }
        if (isset($mapped['includeDeprecated'])) {
            $query['includeDeprecated'] = $mapped['includeDeprecated'];
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
