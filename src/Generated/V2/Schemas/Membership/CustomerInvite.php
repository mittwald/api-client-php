<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Membership;

use InvalidArgumentException;
use DateTime;

class CustomerInvite
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'avatarRefId' => [
                'description' => 'Reference to the Customer\'s avatar.',
                'type' => 'string',
            ],
            'customerId' => [
                'description' => 'ID of the Customer the invite is for.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'customerName' => [
                'description' => 'Name of the Customer the user is invited to.',
                'type' => 'string',
            ],
            'id' => [
                'description' => 'ID of the CustomerInvite.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'information' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.membership.InviteInformation',
            ],
            'mailAddress' => [
                'description' => 'Mail-address of the user the invite is for.',
                'format' => 'email',
                'type' => 'string',
            ],
            'membershipExpiresAt' => [
                'description' => 'Time the CustomerMembership should expire at.',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'message' => [
                'description' => 'Message contained in the CustomerInvite.',
                'type' => 'string',
            ],
            'role' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.membership.CustomerRoles',
            ],
        ],
        'required' => [
            'id',
            'customerId',
            'mailAddress',
            'role',
            'accepted',
            'information',
            'customerName',
            'avatarRefId',
        ],
        'type' => 'object',
    ];

    /**
     * Reference to the Customer's avatar.
     *
     * @var string
     */
    private string $avatarRefId;

    /**
     * ID of the Customer the invite is for.
     *
     * @var string
     */
    private string $customerId;

    /**
     * Name of the Customer the user is invited to.
     *
     * @var string
     */
    private string $customerName;

    /**
     * ID of the CustomerInvite.
     *
     * @var string
     */
    private string $id;

    /**
     * @var InviteInformation
     */
    private InviteInformation $information;

    /**
     * Mail-address of the user the invite is for.
     *
     * @var string
     */
    private string $mailAddress;

    /**
     * Time the CustomerMembership should expire at.
     *
     * @var DateTime|null
     */
    private ?DateTime $membershipExpiresAt = null;

    /**
     * Message contained in the CustomerInvite.
     *
     * @var string|null
     */
    private ?string $message = null;

    /**
     * @var CustomerRoles
     */
    private CustomerRoles $role;

    /**
     * @param string $avatarRefId
     * @param string $customerId
     * @param string $customerName
     * @param string $id
     * @param InviteInformation $information
     * @param string $mailAddress
     * @param CustomerRoles $role
     */
    public function __construct(string $avatarRefId, string $customerId, string $customerName, string $id, InviteInformation $information, string $mailAddress, CustomerRoles $role)
    {
        $this->avatarRefId = $avatarRefId;
        $this->customerId = $customerId;
        $this->customerName = $customerName;
        $this->id = $id;
        $this->information = $information;
        $this->mailAddress = $mailAddress;
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getAvatarRefId(): string
    {
        return $this->avatarRefId;
    }

    /**
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    /**
     * @return string
     */
    public function getCustomerName(): string
    {
        return $this->customerName;
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
     * @return CustomerRoles
     */
    public function getRole(): CustomerRoles
    {
        return $this->role;
    }

    /**
     * @param string $avatarRefId
     * @return self
     */
    public function withAvatarRefId(string $avatarRefId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($avatarRefId, static::$schema['properties']['avatarRefId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->avatarRefId = $avatarRefId;

        return $clone;
    }

    /**
     * @param string $customerId
     * @return self
     */
    public function withCustomerId(string $customerId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($customerId, static::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    /**
     * @param string $customerName
     * @return self
     */
    public function withCustomerName(string $customerName): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($customerName, static::$schema['properties']['customerName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerName = $customerName;

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
        $validator = new \JsonSchema\Validator();
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
        $validator = new \JsonSchema\Validator();
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
     * @param CustomerRoles $role
     * @return self
     */
    public function withRole(CustomerRoles $role): self
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
     * @return CustomerInvite Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CustomerInvite
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $avatarRefId = $input->{'avatarRefId'};
        $customerId = $input->{'customerId'};
        $customerName = $input->{'customerName'};
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
        $role = CustomerRoles::from($input->{'role'});

        $obj = new self($avatarRefId, $customerId, $customerName, $id, $information, $mailAddress, $role);
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
        $output['avatarRefId'] = $this->avatarRefId;
        $output['customerId'] = $this->customerId;
        $output['customerName'] = $this->customerName;
        $output['id'] = $this->id;
        $output['information'] = $this->information->toJson();
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
        if (isset($this->membershipExpiresAt)) {
            $this->membershipExpiresAt = clone $this->membershipExpiresAt;
        }
    }
}
