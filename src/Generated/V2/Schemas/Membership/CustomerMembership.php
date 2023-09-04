<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Membership;

class CustomerMembership
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'customerId' => [
                'description' => 'ID of the Customer the CustomerMembership is for.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'expiresAt' => [
                'description' => 'Time the CustomerMembership should expire at.',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'id' => [
                'description' => 'ID of the CustomerMembership.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'inviteId' => [
                'description' => 'ID of the CustomerInvite the membership was created from.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'memberSince' => [
                'description' => 'Date the CustomerMembership was created at.',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'role' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.membership.CustomerRoles',
            ],
            'userId' => [
                'description' => 'ID of the user the CustomerMembership is for.',
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'customerId',
            'userId',
            'role',
            'inviteId',
        ],
        'type' => 'object',
    ];

    /**
     * ID of the Customer the CustomerMembership is for.
     *
     * @var string
     */
    private string $customerId;

    /**
     * Time the CustomerMembership should expire at.
     *
     * @var \DateTime|null
     */
    private ?\DateTime $expiresAt = null;

    /**
     * ID of the CustomerMembership.
     *
     * @var string
     */
    private string $id;

    /**
     * ID of the CustomerInvite the membership was created from.
     *
     * @var string
     */
    private string $inviteId;

    /**
     * Date the CustomerMembership was created at.
     *
     * @var \DateTime|null
     */
    private ?\DateTime $memberSince = null;

    /**
     * @var CustomerRoles
     */
    private CustomerRoles $role;

    /**
     * ID of the user the CustomerMembership is for.
     *
     * @var string
     */
    private string $userId;

    /**
     * @param string $customerId
     * @param string $id
     * @param string $inviteId
     * @param CustomerRoles $role
     * @param string $userId
     */
    public function __construct(string $customerId, string $id, string $inviteId, CustomerRoles $role, string $userId)
    {
        $this->customerId = $customerId;
        $this->id = $id;
        $this->inviteId = $inviteId;
        $this->role = $role;
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getCustomerId() : string
    {
        return $this->customerId;
    }

    /**
     * @return \DateTime|null
     */
    public function getExpiresAt() : ?\DateTime
    {
        return $this->expiresAt ?? null;
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getInviteId() : string
    {
        return $this->inviteId;
    }

    /**
     * @return \DateTime|null
     */
    public function getMemberSince() : ?\DateTime
    {
        return $this->memberSince ?? null;
    }

    /**
     * @return CustomerRoles
     */
    public function getRole() : CustomerRoles
    {
        return $this->role;
    }

    /**
     * @return string
     */
    public function getUserId() : string
    {
        return $this->userId;
    }

    /**
     * @param string $customerId
     * @return self
     */
    public function withCustomerId(string $customerId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($customerId, static::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    /**
     * @param \DateTime $expiresAt
     * @return self
     */
    public function withExpiresAt(\DateTime $expiresAt) : self
    {
        $clone = clone $this;
        $clone->expiresAt = $expiresAt;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExpiresAt() : self
    {
        $clone = clone $this;
        unset($clone->expiresAt);

        return $clone;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param string $inviteId
     * @return self
     */
    public function withInviteId(string $inviteId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($inviteId, static::$schema['properties']['inviteId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->inviteId = $inviteId;

        return $clone;
    }

    /**
     * @param \DateTime $memberSince
     * @return self
     */
    public function withMemberSince(\DateTime $memberSince) : self
    {
        $clone = clone $this;
        $clone->memberSince = $memberSince;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMemberSince() : self
    {
        $clone = clone $this;
        unset($clone->memberSince);

        return $clone;
    }

    /**
     * @param CustomerRoles $role
     * @return self
     */
    public function withRole(CustomerRoles $role) : self
    {
        $clone = clone $this;
        $clone->role = $role;

        return $clone;
    }

    /**
     * @param string $userId
     * @return self
     */
    public function withUserId(string $userId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($userId, static::$schema['properties']['userId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
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
     * @return CustomerMembership Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : CustomerMembership
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = $input->{'customerId'};
        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = new \DateTime($input->{'expiresAt'});
        }
        $id = $input->{'id'};
        $inviteId = $input->{'inviteId'};
        $memberSince = null;
        if (isset($input->{'memberSince'})) {
            $memberSince = new \DateTime($input->{'memberSince'});
        }
        $role = CustomerRoles::from($input->{'role'});
        $userId = $input->{'userId'};

        $obj = new self($customerId, $id, $inviteId, $role, $userId);
        $obj->expiresAt = $expiresAt;
        $obj->memberSince = $memberSince;
        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson() : array
    {
        $output = [];
        $output['customerId'] = $this->customerId;
        if (isset($this->expiresAt)) {
            $output['expiresAt'] = ($this->expiresAt)->format(\DateTime::ATOM);
        }
        $output['id'] = $this->id;
        $output['inviteId'] = $this->inviteId;
        if (isset($this->memberSince)) {
            $output['memberSince'] = ($this->memberSince)->format(\DateTime::ATOM);
        }
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
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
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

