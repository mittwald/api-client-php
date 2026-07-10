<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectActivities;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class ListProjectActivitiesRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'projectId' => [
                'type' => 'string',
            ],
            'aggregateName' => [
                'type' => 'string',
            ],
            'aggregateDomain' => [
                'type' => 'string',
            ],
            'aggregateId' => [
                'type' => 'string',
            ],
            'startTime' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'endTime' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'fulltextSearch' => [
                'type' => 'string',
            ],
            'limit' => [
                'type' => 'integer',
                'default' => 30,
                'minimum' => 0,
            ],
            'skip' => [
                'type' => 'integer',
                'default' => 0,
            ],
            'page' => [
                'type' => 'integer',
                'minimum' => 0,
            ],
            'sort' => [
                'type' => 'string',
                'enum' => [
                    'dateTime',
                ],
                'default' => 'dateTime',
            ],
            'order' => [
                'type' => 'string',
                'enum' => [
                    'asc',
                    'desc',
                ],
                'default' => 'desc',
            ],
        ],
        'required' => [
            'projectId',
        ],
    ];

    private string $projectId;

    private ?string $aggregateName = null;

    private ?string $aggregateDomain = null;

    private ?string $aggregateId = null;

    private ?DateTime $startTime = null;

    private ?DateTime $endTime = null;

    private ?string $fulltextSearch = null;

    private int $limit = 30;

    private int $skip = 0;

    private ?int $page = null;

    private ListProjectActivitiesRequestSort $sort = ListProjectActivitiesRequestSort::dateTime;

    private ListProjectActivitiesRequestOrder $order = ListProjectActivitiesRequestOrder::desc;

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

    public function getAggregateName(): ?string
    {
        return $this->aggregateName ?? null;
    }

    public function getAggregateDomain(): ?string
    {
        return $this->aggregateDomain ?? null;
    }

    public function getAggregateId(): ?string
    {
        return $this->aggregateId ?? null;
    }

    public function getStartTime(): ?DateTime
    {
        return $this->startTime ?? null;
    }

    public function getEndTime(): ?DateTime
    {
        return $this->endTime ?? null;
    }

    public function getFulltextSearch(): ?string
    {
        return $this->fulltextSearch ?? null;
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

    public function getSort(): ListProjectActivitiesRequestSort
    {
        return $this->sort;
    }

    public function getOrder(): ListProjectActivitiesRequestOrder
    {
        return $this->order;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, self::$internalValidationSchema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    public function withAggregateName(string $aggregateName): self
    {
        $validator = new Validator();
        $validator->validate($aggregateName, self::$internalValidationSchema['properties']['aggregateName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->aggregateName = $aggregateName;

        return $clone;
    }

    public function withoutAggregateName(): self
    {
        $clone = clone $this;
        unset($clone->aggregateName);

        return $clone;
    }

    public function withAggregateDomain(string $aggregateDomain): self
    {
        $validator = new Validator();
        $validator->validate($aggregateDomain, self::$internalValidationSchema['properties']['aggregateDomain']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->aggregateDomain = $aggregateDomain;

        return $clone;
    }

    public function withoutAggregateDomain(): self
    {
        $clone = clone $this;
        unset($clone->aggregateDomain);

        return $clone;
    }

    public function withAggregateId(string $aggregateId): self
    {
        $validator = new Validator();
        $validator->validate($aggregateId, self::$internalValidationSchema['properties']['aggregateId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->aggregateId = $aggregateId;

        return $clone;
    }

    public function withoutAggregateId(): self
    {
        $clone = clone $this;
        unset($clone->aggregateId);

        return $clone;
    }

    public function withStartTime(DateTime $startTime): self
    {
        $clone = clone $this;
        $clone->startTime = $startTime;

        return $clone;
    }

    public function withoutStartTime(): self
    {
        $clone = clone $this;
        unset($clone->startTime);

        return $clone;
    }

    public function withEndTime(DateTime $endTime): self
    {
        $clone = clone $this;
        $clone->endTime = $endTime;

        return $clone;
    }

    public function withoutEndTime(): self
    {
        $clone = clone $this;
        unset($clone->endTime);

        return $clone;
    }

    public function withFulltextSearch(string $fulltextSearch): self
    {
        $validator = new Validator();
        $validator->validate($fulltextSearch, self::$internalValidationSchema['properties']['fulltextSearch']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->fulltextSearch = $fulltextSearch;

        return $clone;
    }

    public function withoutFulltextSearch(): self
    {
        $clone = clone $this;
        unset($clone->fulltextSearch);

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

    public function withSort(ListProjectActivitiesRequestSort $sort): self
    {
        $clone = clone $this;
        $clone->sort = $sort;

        return $clone;
    }

    public function withOrder(ListProjectActivitiesRequestOrder $order): self
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
     * @return ListProjectActivitiesRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListProjectActivitiesRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectId = $input->{'projectId'};
        $aggregateName = null;
        if (isset($input->{'aggregateName'})) {
            $aggregateName = $input->{'aggregateName'};
        }
        $aggregateDomain = null;
        if (isset($input->{'aggregateDomain'})) {
            $aggregateDomain = $input->{'aggregateDomain'};
        }
        $aggregateId = null;
        if (isset($input->{'aggregateId'})) {
            $aggregateId = $input->{'aggregateId'};
        }
        $startTime = null;
        if (isset($input->{'startTime'})) {
            $startTime = new DateTime($input->{'startTime'});
        }
        $endTime = null;
        if (isset($input->{'endTime'})) {
            $endTime = new DateTime($input->{'endTime'});
        }
        $fulltextSearch = null;
        if (isset($input->{'fulltextSearch'})) {
            $fulltextSearch = $input->{'fulltextSearch'};
        }
        $limit = 30;
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
        $sort = ListProjectActivitiesRequestSort::dateTime;
        if (isset($input->{'sort'})) {
            $sort = ListProjectActivitiesRequestSort::from($input->{'sort'});
        }
        $order = ListProjectActivitiesRequestOrder::desc;
        if (isset($input->{'order'})) {
            $order = ListProjectActivitiesRequestOrder::from($input->{'order'});
        }

        $obj = new self($projectId);
        $obj->aggregateName = $aggregateName;
        $obj->aggregateDomain = $aggregateDomain;
        $obj->aggregateId = $aggregateId;
        $obj->startTime = $startTime;
        $obj->endTime = $endTime;
        $obj->fulltextSearch = $fulltextSearch;
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
        $output['projectId'] = $this->projectId;
        if (isset($this->aggregateName)) {
            $output['aggregateName'] = $this->aggregateName;
        }
        if (isset($this->aggregateDomain)) {
            $output['aggregateDomain'] = $this->aggregateDomain;
        }
        if (isset($this->aggregateId)) {
            $output['aggregateId'] = $this->aggregateId;
        }
        if (isset($this->startTime)) {
            $output['startTime'] = ($this->startTime)->format(DateTime::ATOM);
        }
        if (isset($this->endTime)) {
            $output['endTime'] = ($this->endTime)->format(DateTime::ATOM);
        }
        if (isset($this->fulltextSearch)) {
            $output['fulltextSearch'] = $this->fulltextSearch;
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
        if (isset($this->startTime)) {
            $this->startTime = clone $this->startTime;
        }
        if (isset($this->endTime)) {
            $this->endTime = clone $this->endTime;
        }
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
        return '/v2/projects/' . $projectId . '/activities';
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
        if (isset($mapped['aggregateName'])) {
            $query['aggregateName'] = $mapped['aggregateName'];
        }
        if (isset($mapped['aggregateDomain'])) {
            $query['aggregateDomain'] = $mapped['aggregateDomain'];
        }
        if (isset($mapped['aggregateId'])) {
            $query['aggregateId'] = $mapped['aggregateId'];
        }
        if (isset($mapped['startTime'])) {
            $query['startTime'] = $mapped['startTime'];
        }
        if (isset($mapped['endTime'])) {
            $query['endTime'] = $mapped['endTime'];
        }
        if (isset($mapped['fulltextSearch'])) {
            $query['fulltextSearch'] = $mapped['fulltextSearch'];
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
