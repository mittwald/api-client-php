<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\ListAppinstallationsForUser;

use InvalidArgumentException;
use JsonSchema\Validator;

class ListAppinstallationsForUserRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'appIds' => [
                'items' => [
                    'format' => 'uuid',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'searchTerm' => [
                'type' => 'string',
            ],
            'phpVersions' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
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

    /**
     * @var string[]|null
     */
    private ?array $appIds = null;

    private ?string $searchTerm = null;

    /**
     * @var string[]|null
     */
    private ?array $phpVersions = null;

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

    /**
     * @return string[]|null
     */
    public function getAppIds(): ?array
    {
        return $this->appIds ?? null;
    }

    public function getSearchTerm(): ?string
    {
        return $this->searchTerm ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getPhpVersions(): ?array
    {
        return $this->phpVersions ?? null;
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
     * @param string[] $appIds
     */
    public function withAppIds(array $appIds): self
    {
        $validator = new Validator();
        $validator->validate($appIds, self::$schema['properties']['appIds']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->appIds = $appIds;

        return $clone;
    }

    public function withoutAppIds(): self
    {
        $clone = clone $this;
        unset($clone->appIds);

        return $clone;
    }

    public function withSearchTerm(string $searchTerm): self
    {
        $validator = new Validator();
        $validator->validate($searchTerm, self::$schema['properties']['searchTerm']);
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

    /**
     * @param string[] $phpVersions
     */
    public function withPhpVersions(array $phpVersions): self
    {
        $validator = new Validator();
        $validator->validate($phpVersions, self::$schema['properties']['phpVersions']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->phpVersions = $phpVersions;

        return $clone;
    }

    public function withoutPhpVersions(): self
    {
        $clone = clone $this;
        unset($clone->phpVersions);

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
     * @return ListAppinstallationsForUserRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListAppinstallationsForUserRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $appIds = null;
        if (isset($input->{'appIds'})) {
            $appIds = $input->{'appIds'};
        }
        $searchTerm = null;
        if (isset($input->{'searchTerm'})) {
            $searchTerm = $input->{'searchTerm'};
        }
        $phpVersions = null;
        if (isset($input->{'phpVersions'})) {
            $phpVersions = $input->{'phpVersions'};
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
        $obj->appIds = $appIds;
        $obj->searchTerm = $searchTerm;
        $obj->phpVersions = $phpVersions;
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
        if (isset($this->appIds)) {
            $output['appIds'] = $this->appIds;
        }
        if (isset($this->searchTerm)) {
            $output['searchTerm'] = $this->searchTerm;
        }
        if (isset($this->phpVersions)) {
            $output['phpVersions'] = $this->phpVersions;
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
        return '/v2/app-installations';
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
        if (isset($mapped['appIds'])) {
            $query['appIds'] = $mapped['appIds'];
        }
        if (isset($mapped['searchTerm'])) {
            $query['searchTerm'] = $mapped['searchTerm'];
        }
        if (isset($mapped['phpVersions'])) {
            $query['phpVersions'] = $mapped['phpVersions'];
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
