<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Membership;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class ProjectInvite
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'id' => [
                'description' => 'ID of the ProjectInvite.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'information' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.membership.InviteInformation',
            ],
            'mailAddress' => [
                'description' => 'Mail-address of the user the ProjectInvite is for.',
                'format' => 'email',
                'type' => 'string',
            ],
            'membershipExpiresAt' => [
                'description' => 'Time the ProjectMembership should expire at.',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'message' => [
                'description' => 'Message contained in the ProjectInvite.',
                'type' => 'string',
            ],
            'projectDescription' => [
                'description' => 'Description of the Project the invite is created for.',
                'type' => 'string',
            ],
            'projectId' => [
                'description' => 'ID of the Project the invitation is for.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'role' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.membership.ProjectRoles',
            ],
        ],
        'required' => [
            'id',
            'projectId',
            'mailAddress',
            'role',
            'accepted',
            'information',
            'projectDescription',
        ],
        'type' => 'object',
    ];

    /**
     * ID of the ProjectInvite.
     *
     * @var string
     */
    private string $id;

    /**
     * @var InviteInformation
     */
    private InviteInformation $information;

    /**
     * Mail-address of the user the ProjectInvite is for.
     *
     * @var string
     */
    private string $mailAddress;

    /**
     * Time the ProjectMembership should expire at.
     *
     * @var DateTime|null
     */
    private ?DateTime $membershipExpiresAt = null;

    /**
     * Message contained in the ProjectInvite.
     *
     * @var string|null
     */
    private ?string $message = null;

    /**
     * Description of the Project the invite is created for.
     *
     * @var string
     */
    private string $projectDescription;

    /**
     * ID of the Project the invitation is for.
     *
     * @var string
     */
    private string $projectId;

    /**
     * @var ProjectRoles
     */
    private ProjectRoles $role;

    /**
     * @param string $id
     * @param InviteInformation $information
     * @param string $mailAddress
     * @param string $projectDescription
     * @param string $projectId
     * @param ProjectRoles $role
     */
    public function __construct(string $id, InviteInformation $information, string $mailAddress, string $projectDescription, string $projectId, ProjectRoles $role)
    {
        $this->id = $id;
        $this->information = $information;
        $this->mailAddress = $mailAddress;
        $this->projectDescription = $projectDescription;
        $this->projectId = $projectId;
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return InviteInformation
     */
    public function getInformation(): InviteInformation
    {
        return $this->information;
    }

    /**
     * @return string
     */
    public function getMailAddress(): string
    {
        return $this->mailAddress;
    }

    /**
     * @return DateTime|null
     */
    public function getMembershipExpiresAt(): ?DateTime
    {
        return $this->membershipExpiresAt ?? null;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message ?? null;
    }

    /**
     * @return string
     */
    public function getProjectDescription(): string
    {
        return $this->projectDescription;
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
     * @param string $id
     * @return self
     */
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

    /**
     * @param InviteInformation $information
     * @return self
     */
    public function withInformation(InviteInformation $information): self
    {
        $clone = clone $this;
        $clone->information = $information;

        return $clone;
    }

    /**
     * @param string $mailAddress
     * @return self
     */
    public function withMailAddress(string $mailAddress): self
    {
        $validator = new Validator();
        $validator->validate($mailAddress, static::$schema['properties']['mailAddress']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mailAddress = $mailAddress;

        return $clone;
    }

    /**
     * @param DateTime $membershipExpiresAt
     * @return self
     */
    public function withMembershipExpiresAt(DateTime $membershipExpiresAt): self
    {
        $clone = clone $this;
        $clone->membershipExpiresAt = $membershipExpiresAt;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMembershipExpiresAt(): self
    {
        $clone = clone $this;
        unset($clone->membershipExpiresAt);

        return $clone;
    }

    /**
     * @param string $message
     * @return self
     */
    public function withMessage(string $message): self
    {
        $validator = new Validator();
        $validator->validate($message, static::$schema['properties']['message']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->message = $message;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMessage(): self
    {
        $clone = clone $this;
        unset($clone->message);

        return $clone;
    }

    /**
     * @param string $projectDescription
     * @return self
     */
    public function withProjectDescription(string $projectDescription): self
    {
        $validator = new Validator();
        $validator->validate($projectDescription, static::$schema['properties']['projectDescription']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectDescription = $projectDescription;

        return $clone;
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
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ProjectInvite Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ProjectInvite
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $id = $input->{'id'};
        $information = InviteInformation::buildFromInput($input->{'information'}, validate: $validate);
        $mailAddress = $input->{'mailAddress'};
        $membershipExpiresAt = null;
        if (isset($input->{'membershipExpiresAt'})) {
            $membershipExpiresAt = new DateTime($input->{'membershipExpiresAt'});
        }
        $message = null;
        if (isset($input->{'message'})) {
            $message = $input->{'message'};
        }
        $projectDescription = $input->{'projectDescription'};
        $projectId = $input->{'projectId'};
        $role = ProjectRoles::from($input->{'role'});

        $obj = new self($id, $information, $mailAddress, $projectDescription, $projectId, $role);
        $obj->membershipExpiresAt = $membershipExpiresAt;
        $obj->message = $message;
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
        $output['id'] = $this->id;
        $output['information'] = $this->information->toJson();
        $output['mailAddress'] = $this->mailAddress;
        if (isset($this->membershipExpiresAt)) {
            $output['membershipExpiresAt'] = ($this->membershipExpiresAt)->format(DateTime::ATOM);
        }
        if (isset($this->message)) {
            $output['message'] = $this->message;
        }
        $output['projectDescription'] = $this->projectDescription;
        $output['projectId'] = $this->projectId;
        $output['role'] = $this->role->value;

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
        if (isset($this->membershipExpiresAt)) {
            $this->membershipExpiresAt = clone $this->membershipExpiresAt;
        }
    }
}
