<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomerMembership;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Membership\CustomerRoles;

class UpdateCustomerMembershipRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
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
     */
    private ?DateTime $expiresAt = null;

    private CustomerRoles $role;

    public function __construct(CustomerRoles $role)
    {
        $this->role = $role;
    }

    public function getExpiresAt(): ?DateTime
    {
        return $this->expiresAt ?? null;
    }

    public function getRole(): CustomerRoles
    {
        return $this->role;
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
     * @return UpdateCustomerMembershipRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateCustomerMembershipRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = new DateTime($input->{'expiresAt'});
        }
        $role = CustomerRoles::from($input->{'role'});

        $obj = new self($role);
        $obj->expiresAt = $expiresAt;
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
        if (isset($this->expiresAt)) {
            $this->expiresAt = clone $this->expiresAt;
        }
    }
}
