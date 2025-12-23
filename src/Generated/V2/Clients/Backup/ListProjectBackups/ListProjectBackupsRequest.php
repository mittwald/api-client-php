<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackups;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Backup\BackupSortOrder;

class ListProjectBackupsRequest
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
            'searchTerm' => [
                'type' => 'string',
            ],
            'withExportsOnly' => [
                'type' => 'boolean',
            ],
            'sortOrder' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.backup.BackupSortOrder',
            ],
            'runningRestoresOnly' => [
                'type' => 'boolean',
            ],
            'limit' => [
                'type' => 'integer',
                'default' => 1000,
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
            'projectId',
        ],
    ];

    private string $projectId;

    private ?string $searchTerm = null;

    private ?bool $withExportsOnly = null;

    private ?BackupSortOrder $sortOrder = null;

    private ?bool $runningRestoresOnly = null;

    private int $limit = 1000;

    private int $skip = 0;

    private ?int $page = null;

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

    public function getSearchTerm(): ?string
    {
        return $this->searchTerm ?? null;
    }

    public function getWithExportsOnly(): ?bool
    {
        return $this->withExportsOnly ?? null;
    }

    public function getSortOrder(): ?BackupSortOrder
    {
        return $this->sortOrder ?? null;
    }

    public function getRunningRestoresOnly(): ?bool
    {
        return $this->runningRestoresOnly ?? null;
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

    public function withWithExportsOnly(bool $withExportsOnly): self
    {
        $validator = new Validator();
        $validator->validate($withExportsOnly, self::$internalValidationSchema['properties']['withExportsOnly']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->withExportsOnly = $withExportsOnly;

        return $clone;
    }

    public function withoutWithExportsOnly(): self
    {
        $clone = clone $this;
        unset($clone->withExportsOnly);

        return $clone;
    }

    public function withSortOrder(BackupSortOrder $sortOrder): self
    {
        $clone = clone $this;
        $clone->sortOrder = $sortOrder;

        return $clone;
    }

    public function withoutSortOrder(): self
    {
        $clone = clone $this;
        unset($clone->sortOrder);

        return $clone;
    }

    public function withRunningRestoresOnly(bool $runningRestoresOnly): self
    {
        $validator = new Validator();
        $validator->validate($runningRestoresOnly, self::$internalValidationSchema['properties']['runningRestoresOnly']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->runningRestoresOnly = $runningRestoresOnly;

        return $clone;
    }

    public function withoutRunningRestoresOnly(): self
    {
        $clone = clone $this;
        unset($clone->runningRestoresOnly);

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

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListProjectBackupsRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListProjectBackupsRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectId = $input->{'projectId'};
        $searchTerm = null;
        if (isset($input->{'searchTerm'})) {
            $searchTerm = $input->{'searchTerm'};
        }
        $withExportsOnly = null;
        if (isset($input->{'withExportsOnly'})) {
            $withExportsOnly = (bool)($input->{'withExportsOnly'});
        }
        $sortOrder = null;
        if (isset($input->{'sortOrder'})) {
            $sortOrder = BackupSortOrder::from($input->{'sortOrder'});
        }
        $runningRestoresOnly = null;
        if (isset($input->{'runningRestoresOnly'})) {
            $runningRestoresOnly = (bool)($input->{'runningRestoresOnly'});
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

        $obj = new self($projectId);
        $obj->searchTerm = $searchTerm;
        $obj->withExportsOnly = $withExportsOnly;
        $obj->sortOrder = $sortOrder;
        $obj->runningRestoresOnly = $runningRestoresOnly;
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
        $output['projectId'] = $this->projectId;
        if (isset($this->searchTerm)) {
            $output['searchTerm'] = $this->searchTerm;
        }
        if (isset($this->withExportsOnly)) {
            $output['withExportsOnly'] = $this->withExportsOnly;
        }
        if (isset($this->sortOrder)) {
            $output['sortOrder'] = $this->sortOrder->value;
        }
        if (isset($this->runningRestoresOnly)) {
            $output['runningRestoresOnly'] = $this->runningRestoresOnly;
        }
        $output['limit'] = $this->limit;
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
        $projectId = urlencode($mapped['projectId']);
        return '/v2/projects/' . $projectId . '/backups';
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
        if (isset($mapped['searchTerm'])) {
            $query['searchTerm'] = $mapped['searchTerm'];
        }
        if (isset($mapped['withExportsOnly'])) {
            $query['withExportsOnly'] = $mapped['withExportsOnly'];
        }
        if (isset($mapped['sortOrder'])) {
            $query['sortOrder'] = $mapped['sortOrder'];
        }
        if (isset($mapped['runningRestoresOnly'])) {
            $query['runningRestoresOnly'] = $mapped['runningRestoresOnly'];
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
