<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListProjectOrders;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\OrderStatus;

class OrderListProjectOrdersRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'projectId' => [
                'format' => 'uuid',
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
            'includesStatus' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.order.OrderStatus',
                ],
                'type' => 'array',
            ],
            'excludesStatus' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.order.OrderStatus',
                ],
                'type' => 'array',
            ],
            'templateNames' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'projectId',
        ],
    ];

    private string $projectId;

    private ?int $limit = null;

    private ?int $skip = null;

    private ?int $page = null;

    /**
     * @var OrderStatus[]|null
     */
    private ?array $includesStatus = null;

    /**
     * @var OrderStatus[]|null
     */
    private ?array $excludesStatus = null;

    /**
     * @var string[]|null
     */
    private ?array $templateNames = null;

    private array $headers = [

    ];

    public function __construct(string $projectId)
    {
        $this->projectId = $projectId;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    public function getLimit(): ?int
    {
        return $this->limit ?? null;
    }

    public function getSkip(): ?int
    {
        return $this->skip ?? null;
    }

    public function getPage(): ?int
    {
        return $this->page ?? null;
    }

    /**
     * @return OrderStatus[]|null
     */
    public function getIncludesStatus(): ?array
    {
        return $this->includesStatus ?? null;
    }

    /**
     * @return OrderStatus[]|null
     */
    public function getExcludesStatus(): ?array
    {
        return $this->excludesStatus ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getTemplateNames(): ?array
    {
        return $this->templateNames ?? null;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    public function withLimit(int $limit): self
    {
        $validator = new Validator();
        $validator->validate($limit, static::$schema['properties']['limit']);
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
        $validator->validate($skip, static::$schema['properties']['skip']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->skip = $skip;

        return $clone;
    }

    public function withoutSkip(): self
    {
        $clone = clone $this;
        unset($clone->skip);

        return $clone;
    }

    public function withPage(int $page): self
    {
        $validator = new Validator();
        $validator->validate($page, static::$schema['properties']['page']);
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
     * @param OrderStatus[] $includesStatus
     */
    public function withIncludesStatus(array $includesStatus): self
    {
        $clone = clone $this;
        $clone->includesStatus = $includesStatus;

        return $clone;
    }

    public function withoutIncludesStatus(): self
    {
        $clone = clone $this;
        unset($clone->includesStatus);

        return $clone;
    }

    /**
     * @param OrderStatus[] $excludesStatus
     */
    public function withExcludesStatus(array $excludesStatus): self
    {
        $clone = clone $this;
        $clone->excludesStatus = $excludesStatus;

        return $clone;
    }

    public function withoutExcludesStatus(): self
    {
        $clone = clone $this;
        unset($clone->excludesStatus);

        return $clone;
    }

    /**
     * @param string[] $templateNames
     */
    public function withTemplateNames(array $templateNames): self
    {
        $validator = new Validator();
        $validator->validate($templateNames, static::$schema['properties']['templateNames']);
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
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return OrderListProjectOrdersRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): OrderListProjectOrdersRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectId = $input->{'projectId'};
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
        $includesStatus = null;
        if (isset($input->{'includesStatus'})) {
            $includesStatus = array_map(fn (string $i): OrderStatus => OrderStatus::from($i), $input->{'includesStatus'});
        }
        $excludesStatus = null;
        if (isset($input->{'excludesStatus'})) {
            $excludesStatus = array_map(fn (string $i): OrderStatus => OrderStatus::from($i), $input->{'excludesStatus'});
        }
        $templateNames = null;
        if (isset($input->{'templateNames'})) {
            $templateNames = $input->{'templateNames'};
        }

        $obj = new self($projectId);
        $obj->limit = $limit;
        $obj->skip = $skip;
        $obj->page = $page;
        $obj->includesStatus = $includesStatus;
        $obj->excludesStatus = $excludesStatus;
        $obj->templateNames = $templateNames;
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
        $output['projectId'] = $this->projectId;
        if (isset($this->limit)) {
            $output['limit'] = $this->limit;
        }
        if (isset($this->skip)) {
            $output['skip'] = $this->skip;
        }
        if (isset($this->page)) {
            $output['page'] = $this->page;
        }
        if (isset($this->includesStatus)) {
            $output['includesStatus'] = array_map(fn (OrderStatus $i): string => $i->value, $this->includesStatus);
        }
        if (isset($this->excludesStatus)) {
            $output['excludesStatus'] = array_map(fn (OrderStatus $i): string => $i->value, $this->excludesStatus);
        }
        if (isset($this->templateNames)) {
            $output['templateNames'] = $this->templateNames;
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
        $projectId = urlencode($mapped['projectId']);
        return '/v2/projects/' . $projectId . '/orders';
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
        if (isset($mapped['limit'])) {
            $query['limit'] = $mapped['limit'];
        }
        if (isset($mapped['skip'])) {
            $query['skip'] = $mapped['skip'];
        }
        if (isset($mapped['page'])) {
            $query['page'] = $mapped['page'];
        }
        if (isset($mapped['includesStatus'])) {
            $query['includesStatus'] = $mapped['includesStatus'];
        }
        if (isset($mapped['excludesStatus'])) {
            $query['excludesStatus'] = $mapped['excludesStatus'];
        }
        if (isset($mapped['templateNames'])) {
            $query['templateNames'] = $mapped['templateNames'];
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
