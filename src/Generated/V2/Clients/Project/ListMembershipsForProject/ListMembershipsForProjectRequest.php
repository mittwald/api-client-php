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
            'limit' => [
                'type' => 'integer',
            ],
            'skip' => [
                'type' => 'integer',
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
        ],
        'required' => [
            'projectId',
        ],
    ];

    private string $projectId;

    private ?int $limit = null;

    private ?int $skip = null;

    private ?bool $hasExpiry = null;

    private ?bool $isInherited = null;

    private ?ProjectRoles $role = null;

    private ?bool $hasMfa = null;

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

    public function withoutSkip(): self
    {
        $clone = clone $this;
        unset($clone->skip);

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
        $limit = null;
        if (isset($input->{'limit'})) {
            $limit = (int)($input->{'limit'});
        }
        $skip = null;
        if (isset($input->{'skip'})) {
            $skip = (int)($input->{'skip'});
        }
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

        $obj = new self($projectId);
        $obj->limit = $limit;
        $obj->skip = $skip;
        $obj->hasExpiry = $hasExpiry;
        $obj->isInherited = $isInherited;
        $obj->role = $role;
        $obj->hasMfa = $hasMfa;
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
        if (isset($mapped['limit'])) {
            $query['limit'] = $mapped['limit'];
        }
        if (isset($mapped['skip'])) {
            $query['skip'] = $mapped['skip'];
        }
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
