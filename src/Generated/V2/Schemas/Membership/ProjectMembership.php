<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Membership;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.membership.ProjectMembership.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ProjectMembership
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'email' => [
                'description' => 'Email used by the invited user.',
                'format' => 'email',
                'type' => 'string',
            ],
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
            'mfa' => [
                'description' => 'MFA activated by the user.',
                'type' => 'boolean',
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
            'inherited',
            'email',
            'mfa',
        ],
        'type' => 'object',
    ];

    /**
     * Email used by the invited user.
     */
    private string $email;

    /**
     * Time the ProjectMembership should expire at.
     */
    private ?DateTime $expiresAt = null;

    /**
     * ID of the ProjectMembership.
     */
    private string $id;

    /**
     * Whether the ProjectMembership was inherited from a CustomerMembership.
     */
    private bool $inherited;

    /**
     * ID of the ProjectInvite the membership was created from.
     */
    private ?string $inviteId = null;

    /**
     * Date the projectMembership was created at.
     */
    private ?DateTime $memberSince = null;

    /**
     * MFA activated by the user.
     */
    private bool $mfa;

    /**
     * ID of the Project the membership is for.
     */
    private string $projectId;

    private ProjectRoles $role;

    /**
     * ID of the user the ProjectMembership is for.
     */
    private string $userId;

    public function __construct(string $email, string $id, bool $inherited, bool $mfa, string $projectId, ProjectRoles $role, string $userId)
    {
        $this->email = $email;
        $this->id = $id;
        $this->inherited = $inherited;
        $this->mfa = $mfa;
        $this->projectId = $projectId;
        $this->role = $role;
        $this->userId = $userId;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getExpiresAt(): ?DateTime
    {
        return $this->expiresAt ?? null;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getInherited(): bool
    {
        return $this->inherited;
    }

    public function getInviteId(): ?string
    {
        return $this->inviteId ?? null;
    }

    public function getMemberSince(): ?DateTime
    {
        return $this->memberSince ?? null;
    }

    public function getMfa(): bool
    {
        return $this->mfa;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    public function getRole(): ProjectRoles
    {
        return $this->role;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function withEmail(string $email): self
    {
        $validator = new Validator();
        $validator->validate($email, static::$schema['properties']['email']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->email = $email;

        return $clone;
    }

    public function withExpiresAt(DateTime $expiresAt): self
    {
        $clone = clone $this;
        $clone->expiresAt = $expiresAt;

        return $clone;
    }

    public function withoutExpiresAt(): self
    {
        $clone = clone $this;
        unset($clone->expiresAt);

        return $clone;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    public function withInherited(bool $inherited): self
    {
        $validator = new Validator();
        $validator->validate($inherited, static::$schema['properties']['inherited']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->inherited = $inherited;

        return $clone;
    }

    public function withInviteId(string $inviteId): self
    {
        $validator = new Validator();
        $validator->validate($inviteId, static::$schema['properties']['inviteId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->inviteId = $inviteId;

        return $clone;
    }

    public function withoutInviteId(): self
    {
        $clone = clone $this;
        unset($clone->inviteId);

        return $clone;
    }

    public function withMemberSince(DateTime $memberSince): self
    {
        $clone = clone $this;
        $clone->memberSince = $memberSince;

        return $clone;
    }

    public function withoutMemberSince(): self
    {
        $clone = clone $this;
        unset($clone->memberSince);

        return $clone;
    }

    public function withMfa(bool $mfa): self
    {
        $validator = new Validator();
        $validator->validate($mfa, static::$schema['properties']['mfa']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mfa = $mfa;

        return $clone;
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

    public function withRole(ProjectRoles $role): self
    {
        $clone = clone $this;
        $clone->role = $role;

        return $clone;
    }

    public function withUserId(string $userId): self
    {
        $validator = new Validator();
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
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $email = $input->{'email'};
        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = new DateTime($input->{'expiresAt'});
        }
        $id = $input->{'id'};
        $inherited = (bool)($input->{'inherited'});
        $inviteId = null;
        if (isset($input->{'inviteId'})) {
            $inviteId = $input->{'inviteId'};
        }
        $memberSince = null;
        if (isset($input->{'memberSince'})) {
            $memberSince = new DateTime($input->{'memberSince'});
        }
        $mfa = (bool)($input->{'mfa'});
        $projectId = $input->{'projectId'};
        $role = ProjectRoles::from($input->{'role'});
        $userId = $input->{'userId'};

        $obj = new self($email, $id, $inherited, $mfa, $projectId, $role, $userId);
        $obj->expiresAt = $expiresAt;
        $obj->inviteId = $inviteId;
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
        $output['email'] = $this->email;
        if (isset($this->expiresAt)) {
            $output['expiresAt'] = ($this->expiresAt)->format(DateTime::ATOM);
        }
        $output['id'] = $this->id;
        $output['inherited'] = $this->inherited;
        if (isset($this->inviteId)) {
            $output['inviteId'] = $this->inviteId;
        }
        if (isset($this->memberSince)) {
            $output['memberSince'] = ($this->memberSince)->format(DateTime::ATOM);
        }
        $output['mfa'] = $this->mfa;
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
        if (isset($this->expiresAt)) {
            $this->expiresAt = clone $this->expiresAt;
        }
        if (isset($this->memberSince)) {
            $this->memberSince = clone $this->memberSince;
        }
    }
}
