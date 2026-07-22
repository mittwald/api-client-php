<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\ListMembershipsForProject;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Membership\ProjectRoles;

class ListMembershipsForProjectRequest
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
            'hasExpiry' => [
                'type' => 'boolean',
            ],
            'isInherited' => [
                'type' => 'boolean',
            ],
            'role' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.membership.ProjectRoles',
            ],
            'hasMfa' => [
                'type' => 'boolean',
            ],
            'searchTerm' => [
                'type' => 'string',
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
                'minimum' => 0,
            ],
        ],
        'required' => [
            'projectId',
        ],
    ];

    private string $projectId;

    private ?bool $hasExpiry = null;

    private ?bool $isInherited = null;

    private ?ProjectRoles $role = null;

    private ?bool $hasMfa = null;

    private ?string $searchTerm = null;

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

    public function getHasExpiry(): ?bool
    {
        return $this->hasExpiry ?? null;
    }

    public function getIsInherited(): ?bool
    {
        return $this->isInherited ?? null;
    }

    public function getRole(): ?ProjectRoles
    {
        return $this->role ?? null;
    }

    public function getHasMfa(): ?bool
    {
        return $this->hasMfa ?? null;
    }

    public function getSearchTerm(): ?string
    {
        return $this->searchTerm ?? null;
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

    public function withHasExpiry(bool $hasExpiry): self
    {
        $validator = new Validator();
        $validator->validate($hasExpiry, self::$internalValidationSchema['properties']['hasExpiry']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->hasExpiry = $hasExpiry;

        return $clone;
    }

    public function withoutHasExpiry(): self
    {
        $clone = clone $this;
        unset($clone->hasExpiry);

        return $clone;
    }

    public function withIsInherited(bool $isInherited): self
    {
        $validator = new Validator();
        $validator->validate($isInherited, self::$internalValidationSchema['properties']['isInherited']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isInherited = $isInherited;

        return $clone;
    }

    public function withoutIsInherited(): self
    {
        $clone = clone $this;
        unset($clone->isInherited);

        return $clone;
    }

    public function withRole(ProjectRoles $role): self
    {
        $clone = clone $this;
        $clone->role = $role;

        return $clone;
    }

    public function withoutRole(): self
    {
        $clone = clone $this;
        unset($clone->role);

        return $clone;
    }

    public function withHasMfa(bool $hasMfa): self
    {
        $validator = new Validator();
        $validator->validate($hasMfa, self::$internalValidationSchema['properties']['hasMfa']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->hasMfa = $hasMfa;

        return $clone;
    }

    public function withoutHasMfa(): self
    {
        $clone = clone $this;
        unset($clone->hasMfa);

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
     * @return ListMembershipsForProjectRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListMembershipsForProjectRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectId = $input->{'projectId'};
        $hasExpiry = null;
        if (isset($input->{'hasExpiry'})) {
            $hasExpiry = (bool)($input->{'hasExpiry'});
        }
        $isInherited = null;
        if (isset($input->{'isInherited'})) {
            $isInherited = (bool)($input->{'isInherited'});
        }
        $role = null;
        if (isset($input->{'role'})) {
            $role = ProjectRoles::from($input->{'role'});
        }
        $hasMfa = null;
        if (isset($input->{'hasMfa'})) {
            $hasMfa = (bool)($input->{'hasMfa'});
        }
        $searchTerm = null;
        if (isset($input->{'searchTerm'})) {
            $searchTerm = $input->{'searchTerm'};
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
        $obj->hasExpiry = $hasExpiry;
        $obj->isInherited = $isInherited;
        $obj->role = $role;
        $obj->hasMfa = $hasMfa;
        $obj->searchTerm = $searchTerm;
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
        if (isset($this->hasExpiry)) {
            $output['hasExpiry'] = $this->hasExpiry;
        }
        if (isset($this->isInherited)) {
            $output['isInherited'] = $this->isInherited;
        }
        if (isset($this->role)) {
            $output['role'] = $this->role->value;
        }
        if (isset($this->hasMfa)) {
            $output['hasMfa'] = $this->hasMfa;
        }
        if (isset($this->searchTerm)) {
            $output['searchTerm'] = $this->searchTerm;
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
        return '/v2/projects/' . $projectId . '/memberships';
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
        if (isset($mapped['hasExpiry'])) {
            $query['hasExpiry'] = $mapped['hasExpiry'];
        }
        if (isset($mapped['isInherited'])) {
            $query['isInherited'] = $mapped['isInherited'];
        }
        if (isset($mapped['role'])) {
            $query['role'] = $mapped['role'];
        }
        if (isset($mapped['hasMfa'])) {
            $query['hasMfa'] = $mapped['hasMfa'];
        }
        if (isset($mapped['searchTerm'])) {
            $query['searchTerm'] = $mapped['searchTerm'];
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
