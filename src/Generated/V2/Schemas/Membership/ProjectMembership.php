<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Membership;

use InvalidArgumentException;
use DateTime;

class ProjectMembership
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'expiresAt' => [
                'description' => 'Time the ProjectMembership should expire at.',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'id' => [
                'description' => 'ID of the ProjectMembership.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'inherited' => [
                'description' => 'Whether the ProjectMembership was inherited from a CustomerMembership.',
                'type' => 'boolean',
            ],
            'inviteId' => [
                'description' => 'ID of the ProjectInvite the membership was created from.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'memberSince' => [
                'description' => 'Date the projectMembership was created at.',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'projectId' => [
                'description' => 'ID of the Project the membership is for.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'role' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.membership.ProjectRoles',
            ],
            'userId' => [
                'description' => 'ID of the user the ProjectMembership is for.',
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'projectId',
            'userId',
            'role',
            'inviteId',
            'inherited',
        ],
        'type' => 'object',
    ];

    /**
     * Time the ProjectMembership should expire at.
     *
     * @var DateTime|null
     */
    private ?DateTime $expiresAt = null;

    /**
     * ID of the ProjectMembership.
     *
     * @var string
     */
    private string $id;

    /**
     * Whether the ProjectMembership was inherited from a CustomerMembership.
     *
     * @var bool
     */
    private bool $inherited;

    /**
     * ID of the ProjectInvite the membership was created from.
     *
     * @var string
     */
    private string $inviteId;

    /**
     * Date the projectMembership was created at.
     *
     * @var DateTime|null
     */
    private ?DateTime $memberSince = null;

    /**
     * ID of the Project the membership is for.
     *
     * @var string
     */
    private string $projectId;

    /**
     * @var ProjectRoles
     */
    private ProjectRoles $role;

    /**
     * ID of the user the ProjectMembership is for.
     *
     * @var string
     */
    private string $userId;

    /**
     * @param string $id
     * @param bool $inherited
     * @param string $inviteId
     * @param string $projectId
     * @param ProjectRoles $role
     * @param string $userId
     */
    public function __construct(string $id, bool $inherited, string $inviteId, string $projectId, ProjectRoles $role, string $userId)
    {
        $this->id = $id;
        $this->inherited = $inherited;
        $this->inviteId = $inviteId;
        $this->projectId = $projectId;
        $this->role = $role;
        $this->userId = $userId;
    }

    /**
     * @return DateTime|null
     */
    public function getExpiresAt(): ?DateTime
    {
        return $this->expiresAt ?? null;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function getInherited(): bool
    {
        return $this->inherited;
    }

    /**
     * @return string
     */
    public function getInviteId(): string
    {
        return $this->inviteId;
    }

    /**
     * @return DateTime|null
     */
    public function getMemberSince(): ?DateTime
    {
        return $this->memberSince ?? null;
    }

    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @return ProjectRoles
     */
    public function getRole(): ProjectRoles
    {
        return $this->role;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param DateTime $expiresAt
     * @return self
     */
    public function withExpiresAt(DateTime $expiresAt): self
    {
        $clone = clone $this;
        $clone->expiresAt = $expiresAt;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExpiresAt(): self
    {
        $clone = clone $this;
        unset($clone->expiresAt);

        return $clone;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param bool $inherited
     * @return self
     */
    public function withInherited(bool $inherited): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($inherited, static::$schema['properties']['inherited']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->inherited = $inherited;

        return $clone;
    }

    /**
     * @param string $inviteId
     * @return self
     */
    public function withInviteId(string $inviteId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($inviteId, static::$schema['properties']['inviteId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->inviteId = $inviteId;

        return $clone;
    }

    /**
     * @param DateTime $memberSince
     * @return self
     */
    public function withMemberSince(DateTime $memberSince): self
    {
        $clone = clone $this;
        $clone->memberSince = $memberSince;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMemberSince(): self
    {
        $clone = clone $this;
        unset($clone->memberSince);

        return $clone;
    }

    /**
     * @param string $projectId
     * @return self
     */
    public function withProjectId(string $projectId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * @param ProjectRoles $role
     * @return self
     */
    public function withRole(ProjectRoles $role): self
    {
        $clone = clone $this;
        $clone->role = $role;

        return $clone;
    }

    /**
     * @param string $userId
     * @return self
     */
    public function withUserId(string $userId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($userId, static::$schema['properties']['userId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->userId = $userId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ProjectMembership Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ProjectMembership
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = new DateTime($input->{'expiresAt'});
        }
        $id = $input->{'id'};
        $inherited = (bool)($input->{'inherited'});
        $inviteId = $input->{'inviteId'};
        $memberSince = null;
        if (isset($input->{'memberSince'})) {
            $memberSince = new DateTime($input->{'memberSince'});
        }
        $projectId = $input->{'projectId'};
        $role = ProjectRoles::from($input->{'role'});
        $userId = $input->{'userId'};

        $obj = new self($id, $inherited, $inviteId, $projectId, $role, $userId);
        $obj->expiresAt = $expiresAt;
        $obj->memberSince = $memberSince;
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
        if (isset($this->expiresAt)) {
            $output['expiresAt'] = ($this->expiresAt)->format(DateTime::ATOM);
        }
        $output['id'] = $this->id;
        $output['inherited'] = $this->inherited;
        $output['inviteId'] = $this->inviteId;
        if (isset($this->memberSince)) {
            $output['memberSince'] = ($this->memberSince)->format(DateTime::ATOM);
        }
        $output['projectId'] = $this->projectId;
        $output['role'] = $this->role->value;
        $output['userId'] = $this->userId;

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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        if (isset($this->expiresAt)) {
            $this->expiresAt = clone $this->expiresAt;
        }
        if (isset($this->memberSince)) {
            $this->memberSince = clone $this->memberSince;
        }
    }
}
