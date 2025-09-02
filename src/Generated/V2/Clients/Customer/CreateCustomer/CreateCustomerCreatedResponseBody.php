<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateCustomerCreatedResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'customerId' => [
                'type' => 'string',
            ],
            'customerNumber' => [
                'type' => 'string',
            ],
            'name' => [
                'maxLength' => 80,
                'type' => 'string',
            ],
        ],
        'required' => [
            'customerId',
            'name',
            'customerNumber',
        ],
        'type' => 'object',
    ];

    private string $customerId;

    private string $customerNumber;

    private string $name;

    public function __construct(string $customerId, string $customerNumber, string $name)
    {
        $this->customerId = $customerId;
        $this->customerNumber = $customerNumber;
        $this->name = $name;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getCustomerNumber(): string
    {
        return $this->customerNumber;
    }

    public function getName(): string
    {
        return $this->name;
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

    public function withCustomerNumber(string $customerNumber): self
    {
        $validator = new Validator();
        $validator->validate($customerNumber, self::$internalValidationSchema['properties']['customerNumber']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerNumber = $customerNumber;

        return $clone;
    }

    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, self::$internalValidationSchema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateCustomerCreatedResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateCustomerCreatedResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = $input->{'customerId'};
        $customerNumber = $input->{'customerNumber'};
        $name = $input->{'name'};

        $obj = new self($customerId, $customerNumber, $name);

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
        $output['customerNumber'] = $this->customerNumber;
        $output['name'] = $this->name;

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
}
