<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListAllExtensionInstanceWebhookExecutions;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionListAllExtensionInstanceWebhookExecutionsRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'contributorId' => [
                'type' => 'string',
            ],
            'extensionId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'extensionInstanceId' => [
                'format' => 'uuid',
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
                        'attempts',
                        'nextScheduledExecution',
                    ],
                ],
                'default' => [
                    'nextScheduledExecution',
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
                    'desc',
                ],
            ],
        ],
        'required' => [
            'contributorId',
        ],
    ];

    private string $contributorId;

    private ?string $extensionId = null;

    private ?string $extensionInstanceId = null;

    private ?int $limit = null;

    private int $skip = 0;

    private ?int $page = null;

    /**
     * @var string[]
     */
    private array $sort = [
        'nextScheduledExecution',
    ];

    /**
     * @var string[]
     */
    private array $order = [
        'desc',
    ];

    private array $headers = [

    ];

    public function __construct(string $contributorId)
    {
        $this->contributorId = $contributorId;
    }

    public function getContributorId(): string
    {
        return $this->contributorId;
    }

    public function getExtensionId(): ?string
    {
        return $this->extensionId ?? null;
    }

    public function getExtensionInstanceId(): ?string
    {
        return $this->extensionInstanceId ?? null;
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

    public function withContributorId(string $contributorId): self
    {
        $validator = new Validator();
        $validator->validate($contributorId, self::$internalValidationSchema['properties']['contributorId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contributorId = $contributorId;

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

    public function withExtensionInstanceId(string $extensionInstanceId): self
    {
        $validator = new Validator();
        $validator->validate($extensionInstanceId, self::$internalValidationSchema['properties']['extensionInstanceId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->extensionInstanceId = $extensionInstanceId;

        return $clone;
    }

    public function withoutExtensionInstanceId(): self
    {
        $clone = clone $this;
        unset($clone->extensionInstanceId);

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
     * @return ExtensionListAllExtensionInstanceWebhookExecutionsRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionListAllExtensionInstanceWebhookExecutionsRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contributorId = $input->{'contributorId'};
        $extensionId = null;
        if (isset($input->{'extensionId'})) {
            $extensionId = $input->{'extensionId'};
        }
        $extensionInstanceId = null;
        if (isset($input->{'extensionInstanceId'})) {
            $extensionInstanceId = $input->{'extensionInstanceId'};
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
                'nextScheduledExecution',
            ];
        if (isset($input->{'sort'})) {
            $sort = $input->{'sort'};
        }
        $order = [
                'desc',
            ];
        if (isset($input->{'order'})) {
            $order = $input->{'order'};
        }

        $obj = new self($contributorId);
        $obj->extensionId = $extensionId;
        $obj->extensionInstanceId = $extensionInstanceId;
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
        $output['contributorId'] = $this->contributorId;
        if (isset($this->extensionId)) {
            $output['extensionId'] = $this->extensionId;
        }
        if (isset($this->extensionInstanceId)) {
            $output['extensionInstanceId'] = $this->extensionInstanceId;
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
        $contributorId = urlencode($mapped['contributorId']);
        return '/v2/contributors/' . $contributorId . '/webhook-executions';
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
        if (isset($mapped['extensionId'])) {
            $query['extensionId'] = $mapped['extensionId'];
        }
        if (isset($mapped['extensionInstanceId'])) {
            $query['extensionInstanceId'] = $mapped['extensionInstanceId'];
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
