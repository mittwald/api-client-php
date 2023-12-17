<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetCustomerMembershipRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'customerMembershipId' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'customerMembershipId',
        ],
    ];

    /**
     * @var string
     */
    private string $customerMembershipId;

    private array $headers = [

    ];

    /**
     * @param string $customerMembershipId
     */
    public function __construct(string $customerMembershipId)
    {
        $this->customerMembershipId = $customerMembershipId;
    }

    /**
     * @return string
     */
    public function getCustomerMembershipId(): string
    {
        return $this->customerMembershipId;
    }

    /**
     * @param string $customerMembershipId
     * @return self
     */
    public function withCustomerMembershipId(string $customerMembershipId): self
    {
        $validator = new Validator();
        $validator->validate($customerMembershipId, static::$schema['properties']['customerMembershipId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerMembershipId = $customerMembershipId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetCustomerMembershipRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetCustomerMembershipRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerMembershipId = $input->{'customerMembershipId'};

        $obj = new self($customerMembershipId);

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
        $output['customerMembershipId'] = $this->customerMembershipId;

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
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $customerMembershipId = urlencode($mapped['customerMembershipId']);
        return '/v2/customer-memberships/' . $customerMembershipId;
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
