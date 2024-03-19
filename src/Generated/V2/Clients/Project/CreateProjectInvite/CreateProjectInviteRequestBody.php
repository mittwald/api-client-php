<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProjectInvite;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Membership\ProjectRoles;

class CreateProjectInviteRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'mailAddress' => [
                'description' => 'Mail-address of the person to be invited.',
                'format' => 'email',
                'type' => 'string',
            ],
            'membershipExpiresAt' => [
                'description' => 'Time the resulting ProjectMembership should expire at.',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'message' => [
                'description' => 'Message contained in the ProjectInvite.',
                'type' => 'string',
            ],
            'role' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.membership.ProjectRoles',
            ],
        ],
        'required' => [
            'mailAddress',
            'role',
        ],
        'type' => 'object',
    ];

    /**
     * Mail-address of the person to be invited.
     */
    private string $mailAddress;

    /**
     * Time the resulting ProjectMembership should expire at.
     */
    private ?DateTime $membershipExpiresAt = null;

    /**
     * Message contained in the ProjectInvite.
     */
    private ?string $message = null;

    private ProjectRoles $role;

    public function __construct(string $mailAddress, ProjectRoles $role)
    {
        $this->mailAddress = $mailAddress;
        $this->role = $role;
    }

    public function getMailAddress(): string
    {
        return $this->mailAddress;
    }

    public function getMembershipExpiresAt(): ?DateTime
    {
        return $this->membershipExpiresAt ?? null;
    }

    public function getMessage(): ?string
    {
        return $this->message ?? null;
    }

    public function getRole(): ProjectRoles
    {
        return $this->role;
    }

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

    public function withMembershipExpiresAt(DateTime $membershipExpiresAt): self
    {
        $clone = clone $this;
        $clone->membershipExpiresAt = $membershipExpiresAt;

        return $clone;
    }

    public function withoutMembershipExpiresAt(): self
    {
        $clone = clone $this;
        unset($clone->membershipExpiresAt);

        return $clone;
    }

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

    public function withoutMessage(): self
    {
        $clone = clone $this;
        unset($clone->message);

        return $clone;
    }

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
     * @return CreateProjectInviteRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateProjectInviteRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $mailAddress = $input->{'mailAddress'};
        $membershipExpiresAt = null;
        if (isset($input->{'membershipExpiresAt'})) {
            $membershipExpiresAt = new DateTime($input->{'membershipExpiresAt'});
        }
        $message = null;
        if (isset($input->{'message'})) {
            $message = $input->{'message'};
        }
        $role = ProjectRoles::from($input->{'role'});

        $obj = new self($mailAddress, $role);
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
        $output['mailAddress'] = $this->mailAddress;
        if (isset($this->membershipExpiresAt)) {
            $output['membershipExpiresAt'] = ($this->membershipExpiresAt)->format(DateTime::ATOM);
        }
        if (isset($this->message)) {
            $output['message'] = $this->message;
        }
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
