<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite;

class CreateCustomerInviteRequestBody
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'mailAddress' => [
                'description' => 'Mail-address of the person to be invited.',
                'format' => 'email',
                'type' => 'string',
            ],
            'membershipExpiresAt' => [
                'description' => 'Time the resulting CustomerMembership should expire at.',
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
            'mailAddress',
            'role',
        ],
        'type' => 'object',
    ];

    /**
     * Mail-address of the person to be invited.
     *
     * @var string
     */
    private string $mailAddress;

    /**
     * Time the resulting CustomerMembership should expire at.
     *
     * @var \DateTime|null
     */
    private ?\DateTime $membershipExpiresAt = null;

    /**
     * Message contained in the CustomerInvite.
     *
     * @var string|null
     */
    private ?string $message = null;

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Membership\CustomerRoles
     */
    private \Mittwald\ApiClient\Generated\V2\Schemas\Membership\CustomerRoles $role;

    private array $headers = [
        
    ];

    /**
     * @param string $mailAddress
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Membership\CustomerRoles $role
     */
    public function __construct(string $mailAddress, \Mittwald\ApiClient\Generated\V2\Schemas\Membership\CustomerRoles $role)
    {
        $this->mailAddress = $mailAddress;
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getMailAddress() : string
    {
        return $this->mailAddress;
    }

    /**
     * @return \DateTime|null
     */
    public function getMembershipExpiresAt() : ?\DateTime
    {
        return $this->membershipExpiresAt ?? null;
    }

    /**
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message ?? null;
    }

    /**
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\Membership\CustomerRoles
     */
    public function getRole() : \Mittwald\ApiClient\Generated\V2\Schemas\Membership\CustomerRoles
    {
        return $this->role;
    }

    /**
     * @param string $mailAddress
     * @return self
     */
    public function withMailAddress(string $mailAddress) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($mailAddress, static::$schema['properties']['mailAddress']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mailAddress = $mailAddress;

        return $clone;
    }

    /**
     * @param \DateTime $membershipExpiresAt
     * @return self
     */
    public function withMembershipExpiresAt(\DateTime $membershipExpiresAt) : self
    {
        $clone = clone $this;
        $clone->membershipExpiresAt = $membershipExpiresAt;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMembershipExpiresAt() : self
    {
        $clone = clone $this;
        unset($clone->membershipExpiresAt);

        return $clone;
    }

    /**
     * @param string $message
     * @return self
     */
    public function withMessage(string $message) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($message, static::$schema['properties']['message']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->message = $message;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMessage() : self
    {
        $clone = clone $this;
        unset($clone->message);

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
     * @return CreateCustomerInviteRequestBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : CreateCustomerInviteRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $mailAddress = $input->{'mailAddress'};
        $membershipExpiresAt = null;
        if (isset($input->{'membershipExpiresAt'})) {
            $membershipExpiresAt = new \DateTime($input->{'membershipExpiresAt'});
        }
        $message = null;
        if (isset($input->{'message'})) {
            $message = $input->{'message'};
        }
        $role = \Mittwald\ApiClient\Generated\V2\Schemas\Membership\CustomerRoles::from($input->{'role'});

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
    public function toJson() : array
    {
        $output = [];
        $output['mailAddress'] = $this->mailAddress;
        if (isset($this->membershipExpiresAt)) {
            $output['membershipExpiresAt'] = ($this->membershipExpiresAt)->format(\DateTime::ATOM);
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
        if (isset($this->membershipExpiresAt)) {
            $this->membershipExpiresAt = clone $this->membershipExpiresAt;
        }
    }

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        $customerId = urlencode($mapped['customerId']);
        return '/v2/customer/' . $customerId . '/invites';
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

