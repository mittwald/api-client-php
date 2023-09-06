<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Cronjob\ListExecutions;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class ListExecutionsRequest
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
            'cronjobId' => [
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
            'since' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'until' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'status' => [
                'example' => 'Complete',
                'type' => 'string',
            ],
        ],
        'required' => [
            'cronjobId',
        ],
    ];

    /**
     * @var string
     */
    private string $cronjobId;

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
     * @var DateTime|null
     */
    private ?DateTime $since = null;

    /**
     * @var DateTime|null
     */
    private ?DateTime $until = null;

    /**
     * @var string|null
     */
    private ?string $status = null;

    private array $headers = [

    ];

    /**
     * @param string $cronjobId
     */
    public function __construct(string $cronjobId)
    {
        $this->cronjobId = $cronjobId;
    }

    /**
     * @return string
     */
    public function getCronjobId(): string
    {
        return $this->cronjobId;
    }

    /**
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->limit ?? null;
    }

    /**
     * @return int|null
     */
    public function getSkip(): ?int
    {
        return $this->skip ?? null;
    }

    /**
     * @return int|null
     */
    public function getPage(): ?int
    {
        return $this->page ?? null;
    }

    /**
     * @return DateTime|null
     */
    public function getSince(): ?DateTime
    {
        return $this->since ?? null;
    }

    /**
     * @return DateTime|null
     */
    public function getUntil(): ?DateTime
    {
        return $this->until ?? null;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status ?? null;
    }

    /**
     * @param string $cronjobId
     * @return self
     */
    public function withCronjobId(string $cronjobId): self
    {
        $validator = new Validator();
        $validator->validate($cronjobId, static::$schema['properties']['cronjobId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->cronjobId = $cronjobId;

        return $clone;
    }

    /**
     * @param int $limit
     * @return self
     */
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

    /**
     * @return self
     */
    public function withoutLimit(): self
    {
        $clone = clone $this;
        unset($clone->limit);

        return $clone;
    }

    /**
     * @param int $skip
     * @return self
     */
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

    /**
     * @return self
     */
    public function withoutSkip(): self
    {
        $clone = clone $this;
        unset($clone->skip);

        return $clone;
    }

    /**
     * @param int $page
     * @return self
     */
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

    /**
     * @return self
     */
    public function withoutPage(): self
    {
        $clone = clone $this;
        unset($clone->page);

        return $clone;
    }

    /**
     * @param DateTime $since
     * @return self
     */
    public function withSince(DateTime $since): self
    {
        $clone = clone $this;
        $clone->since = $since;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutSince(): self
    {
        $clone = clone $this;
        unset($clone->since);

        return $clone;
    }

    /**
     * @param DateTime $until
     * @return self
     */
    public function withUntil(DateTime $until): self
    {
        $clone = clone $this;
        $clone->until = $until;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutUntil(): self
    {
        $clone = clone $this;
        unset($clone->until);

        return $clone;
    }

    /**
     * @param string $status
     * @return self
     */
    public function withStatus(string $status): self
    {
        $validator = new Validator();
        $validator->validate($status, static::$schema['properties']['status']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->status = $status;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutStatus(): self
    {
        $clone = clone $this;
        unset($clone->status);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListExecutionsRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListExecutionsRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $cronjobId = $input->{'cronjobId'};
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
        $since = null;
        if (isset($input->{'since'})) {
            $since = new DateTime($input->{'since'});
        }
        $until = null;
        if (isset($input->{'until'})) {
            $until = new DateTime($input->{'until'});
        }
        $status = null;
        if (isset($input->{'status'})) {
            $status = $input->{'status'};
        }

        $obj = new self($cronjobId);
        $obj->limit = $limit;
        $obj->skip = $skip;
        $obj->page = $page;
        $obj->since = $since;
        $obj->until = $until;
        $obj->status = $status;
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
        $output['cronjobId'] = $this->cronjobId;
        if (isset($this->limit)) {
            $output['limit'] = $this->limit;
        }
        if (isset($this->skip)) {
            $output['skip'] = $this->skip;
        }
        if (isset($this->page)) {
            $output['page'] = $this->page;
        }
        if (isset($this->since)) {
            $output['since'] = ($this->since)->format(DateTime::ATOM);
        }
        if (isset($this->until)) {
            $output['until'] = ($this->until)->format(DateTime::ATOM);
        }
        if (isset($this->status)) {
            $output['status'] = $this->status;
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
        if (isset($this->since)) {
            $this->since = clone $this->since;
        }
        if (isset($this->until)) {
            $this->until = clone $this->until;
        }
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $cronjobId = urlencode($mapped['cronjobId']);
        return '/v2/cronjobs/' . $cronjobId . '/executions';
    }

    public function getQuery(): array
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
        if (isset($mapped['since'])) {
            $query['since'] = $mapped['since'];
        }
        if (isset($mapped['until'])) {
            $query['until'] = $mapped['until'];
        }
        if (isset($mapped['status'])) {
            $query['status'] = $mapped['status'];
        }
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
