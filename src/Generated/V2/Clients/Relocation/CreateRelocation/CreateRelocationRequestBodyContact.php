<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateRelocation;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateRelocationRequestBodyContact
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'email' => [
                'format' => 'email',
                'minLength' => 1,
                'type' => 'string',
            ],
            'firstName' => [
                'minLength' => 1,
                'type' => 'string',
            ],
            'lastName' => [
                'minLength' => 1,
                'type' => 'string',
            ],
            'phoneNumber' => [
                'pattern' => '|^\\+([0-9]{2,3}|1)-[0-9]{2,5}-[0-9]+$',
                'type' => 'string',
            ],
        ],
        'required' => [
            'firstName',
            'lastName',
            'email',
        ],
        'type' => 'object',
    ];

    private string $email;

    private string $firstName;

    private string $lastName;

    private ?string $phoneNumber = null;

    public function __construct(string $email, string $firstName, string $lastName)
    {
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber ?? null;
    }

    public function withEmail(string $email): self
    {
        $validator = new Validator();
        $validator->validate($email, self::$internalValidationSchema['properties']['email']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->email = $email;

        return $clone;
    }

    public function withFirstName(string $firstName): self
    {
        $validator = new Validator();
        $validator->validate($firstName, self::$internalValidationSchema['properties']['firstName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->firstName = $firstName;

        return $clone;
    }

    public function withLastName(string $lastName): self
    {
        $validator = new Validator();
        $validator->validate($lastName, self::$internalValidationSchema['properties']['lastName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->lastName = $lastName;

        return $clone;
    }

    public function withPhoneNumber(string $phoneNumber): self
    {
        $validator = new Validator();
        $validator->validate($phoneNumber, self::$internalValidationSchema['properties']['phoneNumber']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->phoneNumber = $phoneNumber;

        return $clone;
    }

    public function withoutPhoneNumber(): self
    {
        $clone = clone $this;
        unset($clone->phoneNumber);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateRelocationRequestBodyContact Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateRelocationRequestBodyContact
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $email = $input->{'email'};
        $firstName = $input->{'firstName'};
        $lastName = $input->{'lastName'};
        $phoneNumber = null;
        if (isset($input->{'phoneNumber'})) {
            $phoneNumber = $input->{'phoneNumber'};
        }

        $obj = new self($email, $firstName, $lastName);
        $obj->phoneNumber = $phoneNumber;
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
        $output['email'] = $this->email;
        $output['firstName'] = $this->firstName;
        $output['lastName'] = $this->lastName;
        if (isset($this->phoneNumber)) {
            $output['phoneNumber'] = $this->phoneNumber;
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
}
