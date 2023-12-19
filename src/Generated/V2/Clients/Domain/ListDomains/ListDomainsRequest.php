<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomains;

use InvalidArgumentException;
use JsonSchema\Validator;

class ListDomainsRequest
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
            'projectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'page' => [
                'minimum' => 1,
                'type' => 'integer',
            ],
            'limit' => [
                'minimum' => 1,
                'type' => 'integer',
            ],
            'domainSearchName' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'projectId',
        ],
    ];

    /**
     * @var string
     */
    private string $projectId;

    /**
     * @var int|null
     */
    private ?int $page = null;

    /**
     * @var int|null
     */
    private ?int $limit = null;

    /**
     * @var string|null
     */
    private ?string $domainSearchName = null;

    private array $headers = [

    ];

    /**
     * @param string $projectId
     */
    public function __construct(string $projectId)
    {
        $this->projectId = $projectId;
    }

    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @return int|null
     */
    public function getPage(): ?int
    {
        return $this->page ?? null;
    }

    /**
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->limit ?? null;
    }

    /**
     * @return string|null
     */
    public function getDomainSearchName(): ?string
    {
        return $this->domainSearchName ?? null;
    }

    /**
     * @param string $projectId
     * @return self
     */
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
     * @param string $domainSearchName
     * @return self
     */
    public function withDomainSearchName(string $domainSearchName): self
    {
        $validator = new Validator();
        $validator->validate($domainSearchName, static::$schema['properties']['domainSearchName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domainSearchName = $domainSearchName;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDomainSearchName(): self
    {
        $clone = clone $this;
        unset($clone->domainSearchName);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListDomainsRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListDomainsRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectId = $input->{'projectId'};
        $page = null;
        if (isset($input->{'page'})) {
            $page = (int)($input->{'page'});
        }
        $limit = null;
        if (isset($input->{'limit'})) {
            $limit = (int)($input->{'limit'});
        }
        $domainSearchName = null;
        if (isset($input->{'domainSearchName'})) {
            $domainSearchName = $input->{'domainSearchName'};
        }

        $obj = new self($projectId);
        $obj->page = $page;
        $obj->limit = $limit;
        $obj->domainSearchName = $domainSearchName;
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
        if (isset($this->page)) {
            $output['page'] = $this->page;
        }
        if (isset($this->limit)) {
            $output['limit'] = $this->limit;
        }
        if (isset($this->domainSearchName)) {
            $output['domainSearchName'] = $this->domainSearchName;
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
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $projectId = urlencode($mapped['projectId']);
        return '/v2/projects/' . $projectId . '/domains';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        if (isset($mapped['page'])) {
            $query['page'] = $mapped['page'];
        }
        if (isset($mapped['limit'])) {
            $query['limit'] = $mapped['limit'];
        }
        if (isset($mapped['domainSearchName'])) {
            $query['domainSearchName'] = $mapped['domainSearchName'];
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
