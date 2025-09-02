<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Membership\CustomerRoles;

class ListMembershipsForCustomerRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'customerId' => [
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
            'role' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.membership.CustomerRoles',
            ],
        ],
        'required' => [
            'customerId',
        ],
    ];

    private string $customerId;

    private ?int $limit = null;

    private ?int $skip = null;

    private ?bool $hasExpiry = null;

    private ?CustomerRoles $role = null;

    private array $headers = [

    ];

    public function __construct(string $customerId)
    {
        $this->customerId = $customerId;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
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

    public function getRole(): ?CustomerRoles
    {
        return $this->role ?? null;
    }

    public function withCustomerId(string $customerId): self
    {
        $validator = new Validator();
        $validator->validate($customerId, self::$internalValidationSchema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

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

    public function withRole(CustomerRoles $role): self
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

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListMembershipsForCustomerRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListMembershipsForCustomerRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = $input->{'customerId'};
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
        $role = null;
        if (isset($input->{'role'})) {
            $role = CustomerRoles::from($input->{'role'});
        }

        $obj = new self($customerId);
        $obj->limit = $limit;
        $obj->skip = $skip;
        $obj->hasExpiry = $hasExpiry;
        $obj->role = $role;
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
        $output['customerId'] = $this->customerId;
        if (isset($this->limit)) {
            $output['limit'] = $this->limit;
        }
        if (isset($this->skip)) {
            $output['skip'] = $this->skip;
        }
        if (isset($this->hasExpiry)) {
            $output['hasExpiry'] = $this->hasExpiry;
        }
        if (isset($this->role)) {
            $output['role'] = $this->role->value;
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
        $customerId = urlencode($mapped['customerId']);
        return '/v2/customers/' . $customerId . '/memberships';
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
        if (isset($mapped['role'])) {
            $query['role'] = $mapped['role'];
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
