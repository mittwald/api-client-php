<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomerMembership;

class UpdateCustomerMembershipRequestBody
{
    public const method = 'patch';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'expiresAt' => [
                'description' => 'Time the CustomerMembership should expire at.',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'role' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.membership.CustomerRoles',
            ],
        ],
        'required' => [
            'role',
        ],
        'type' => 'object',
    ];

    /**
     * Time the CustomerMembership should expire at.
     *
     * @var \DateTime|null
     */
    private ?\DateTime $expiresAt = null;

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Membership\CustomerRoles
     */
    private \Mittwald\ApiClient\Generated\V2\Schemas\Membership\CustomerRoles $role;

    private array $headers = [
        
    ];

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Membership\CustomerRoles $role
     */
    public function __construct(\Mittwald\ApiClient\Generated\V2\Schemas\Membership\CustomerRoles $role)
    {
        $this->role = $role;
    }

    /**
     * @return \DateTime|null
     */
    public function getExpiresAt() : ?\DateTime
    {
        return $this->expiresAt ?? null;
    }

    /**
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\Membership\CustomerRoles
     */
    public function getRole() : \Mittwald\ApiClient\Generated\V2\Schemas\Membership\CustomerRoles
    {
        return $this->role;
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
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Membership\CustomerRoles $role
     * @return self
     */
    public function withRole(\Mittwald\ApiClient\Generated\V2\Schemas\Membership\CustomerRoles $role) : self
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
     * @return UpdateCustomerMembershipRequestBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : UpdateCustomerMembershipRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = new \DateTime($input->{'expiresAt'});
        }
        $role = \Mittwald\ApiClient\Generated\V2\Schemas\Membership\CustomerRoles::from($input->{'role'});

        $obj = new self($role);
        $obj->expiresAt = $expiresAt;
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
        if (isset($this->expiresAt)) {
            $output['expiresAt'] = ($this->expiresAt)->format(\DateTime::ATOM);
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
    }

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        $membershipId = urlencode($mapped['membershipId']);
        return '/v2/customer-memberships/' . $membershipId;
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders() : array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value) : self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}

