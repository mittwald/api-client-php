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

    private string $cronjobId;

    private ?int $limit = null;

    private ?int $skip = null;

    private ?int $page = null;

    private ?DateTime $since = null;

    private ?DateTime $until = null;

    private ?string $status = null;

    private array $headers = [

    ];

    public function __construct(string $cronjobId)
    {
        $this->cronjobId = $cronjobId;
    }

    public function getCronjobId(): string
    {
        return $this->cronjobId;
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

    public function getSince(): ?DateTime
    {
        return $this->since ?? null;
    }

    public function getUntil(): ?DateTime
    {
        return $this->until ?? null;
    }

    public function getStatus(): ?string
    {
        return $this->status ?? null;
    }

    public function withCronjobId(string $cronjobId): self
    {
        $validator = new Validator();
        $validator->validate($cronjobId, self::$schema['properties']['cronjobId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->cronjobId = $cronjobId;

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

    public function withoutSkip(): self
    {
        $clone = clone $this;
        unset($clone->skip);

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

    public function withSince(DateTime $since): self
    {
        $clone = clone $this;
        $clone->since = $since;

        return $clone;
    }

    public function withoutSince(): self
    {
        $clone = clone $this;
        unset($clone->since);

        return $clone;
    }

    public function withUntil(DateTime $until): self
    {
        $clone = clone $this;
        $clone->until = $until;

        return $clone;
    }

    public function withoutUntil(): self
    {
        $clone = clone $this;
        unset($clone->until);

        return $clone;
    }

    public function withStatus(string $status): self
    {
        $validator = new Validator();
        $validator->validate($status, self::$schema['properties']['status']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->status = $status;

        return $clone;
    }

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
        if (isset($this->since)) {
            $this->since = clone $this->since;
        }
        if (isset($this->until)) {
            $this->until = clone $this->until;
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
        $cronjobId = urlencode($mapped['cronjobId']);
        return '/v2/cronjobs/' . $cronjobId . '/executions';
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
        if (isset($mapped['since'])) {
            $query['since'] = $mapped['since'];
        }
        if (isset($mapped['until'])) {
            $query['until'] = $mapped['until'];
        }
        if (isset($mapped['status'])) {
            $query['status'] = $mapped['status'];
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
