<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Contract;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Commons\Address;
use Mittwald\ApiClient\Generated\V2\Schemas\Commons\Salutation;

class Contact
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'address' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.commons.Address',
            ],
            'company' => [
                'example' => 'Musterfirma',
                'type' => 'string',
            ],
            'emailAddress' => [
                'format' => 'email',
                'type' => 'string',
            ],
            'firstName' => [
                'example' => 'Ada',
                'type' => 'string',
            ],
            'lastName' => [
                'example' => 'Lovelace',
                'type' => 'string',
            ],
            'phoneNumbers' => [
                'items' => [
                    'example' => '+49 123 4567890',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'salutation' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.commons.Salutation',
            ],
            'title' => [
                'example' => 'Dr.',
                'type' => 'string',
            ],
            'useFormalTerm' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'address',
            'salutation',
        ],
        'type' => 'object',
    ];

    /**
     * @var Address
     */
    private Address $address;

    /**
     * @var string|null
     */
    private ?string $company = null;

    /**
     * @var string|null
     */
    private ?string $emailAddress = null;

    /**
     * @var string|null
     */
    private ?string $firstName = null;

    /**
     * @var string|null
     */
    private ?string $lastName = null;

    /**
     * @var string[]|null
     */
    private ?array $phoneNumbers = null;

    /**
     * @var Salutation
     */
    private Salutation $salutation;

    /**
     * @var string|null
     */
    private ?string $title = null;

    /**
     * @var bool|null
     */
    private ?bool $useFormalTerm = null;

    /**
     * @param Address $address
     * @param Salutation $salutation
     */
    public function __construct(Address $address, Salutation $salutation)
    {
        $this->address = $address;
        $this->salutation = $salutation;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company ?? null;
    }

    /**
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress ?? null;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName ?? null;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getPhoneNumbers(): ?array
    {
        return $this->phoneNumbers ?? null;
    }

    /**
     * @return Salutation
     */
    public function getSalutation(): Salutation
    {
        return $this->salutation;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title ?? null;
    }

    /**
     * @return bool|null
     */
    public function getUseFormalTerm(): ?bool
    {
        return $this->useFormalTerm ?? null;
    }

    /**
     * @param Address $address
     * @return self
     */
    public function withAddress(Address $address): self
    {
        $clone = clone $this;
        $clone->address = $address;

        return $clone;
    }

    /**
     * @param string $company
     * @return self
     */
    public function withCompany(string $company): self
    {
        $validator = new Validator();
        $validator->validate($company, static::$schema['properties']['company']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->company = $company;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCompany(): self
    {
        $clone = clone $this;
        unset($clone->company);

        return $clone;
    }

    /**
     * @param string $emailAddress
     * @return self
     */
    public function withEmailAddress(string $emailAddress): self
    {
        $validator = new Validator();
        $validator->validate($emailAddress, static::$schema['properties']['emailAddress']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->emailAddress = $emailAddress;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutEmailAddress(): self
    {
        $clone = clone $this;
        unset($clone->emailAddress);

        return $clone;
    }

    /**
     * @param string $firstName
     * @return self
     */
    public function withFirstName(string $firstName): self
    {
        $validator = new Validator();
        $validator->validate($firstName, static::$schema['properties']['firstName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->firstName = $firstName;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutFirstName(): self
    {
        $clone = clone $this;
        unset($clone->firstName);

        return $clone;
    }

    /**
     * @param string $lastName
     * @return self
     */
    public function withLastName(string $lastName): self
    {
        $validator = new Validator();
        $validator->validate($lastName, static::$schema['properties']['lastName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->lastName = $lastName;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutLastName(): self
    {
        $clone = clone $this;
        unset($clone->lastName);

        return $clone;
    }

    /**
     * @param string[] $phoneNumbers
     * @return self
     */
    public function withPhoneNumbers(array $phoneNumbers): self
    {
        $validator = new Validator();
        $validator->validate($phoneNumbers, static::$schema['properties']['phoneNumbers']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->phoneNumbers = $phoneNumbers;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutPhoneNumbers(): self
    {
        $clone = clone $this;
        unset($clone->phoneNumbers);

        return $clone;
    }

    /**
     * @param Salutation $salutation
     * @return self
     */
    public function withSalutation(Salutation $salutation): self
    {
        $clone = clone $this;
        $clone->salutation = $salutation;

        return $clone;
    }

    /**
     * @param string $title
     * @return self
     */
    public function withTitle(string $title): self
    {
        $validator = new Validator();
        $validator->validate($title, static::$schema['properties']['title']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->title = $title;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTitle(): self
    {
        $clone = clone $this;
        unset($clone->title);

        return $clone;
    }

    /**
     * @param bool $useFormalTerm
     * @return self
     */
    public function withUseFormalTerm(bool $useFormalTerm): self
    {
        $validator = new Validator();
        $validator->validate($useFormalTerm, static::$schema['properties']['useFormalTerm']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->useFormalTerm = $useFormalTerm;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutUseFormalTerm(): self
    {
        $clone = clone $this;
        unset($clone->useFormalTerm);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Contact Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Contact
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $address = Address::buildFromInput($input->{'address'}, validate: $validate);
        $company = null;
        if (isset($input->{'company'})) {
            $company = $input->{'company'};
        }
        $emailAddress = null;
        if (isset($input->{'emailAddress'})) {
            $emailAddress = $input->{'emailAddress'};
        }
        $firstName = null;
        if (isset($input->{'firstName'})) {
            $firstName = $input->{'firstName'};
        }
        $lastName = null;
        if (isset($input->{'lastName'})) {
            $lastName = $input->{'lastName'};
        }
        $phoneNumbers = null;
        if (isset($input->{'phoneNumbers'})) {
            $phoneNumbers = $input->{'phoneNumbers'};
        }
        $salutation = Salutation::from($input->{'salutation'});
        $title = null;
        if (isset($input->{'title'})) {
            $title = $input->{'title'};
        }
        $useFormalTerm = null;
        if (isset($input->{'useFormalTerm'})) {
            $useFormalTerm = (bool)($input->{'useFormalTerm'});
        }

        $obj = new self($address, $salutation);
        $obj->company = $company;
        $obj->emailAddress = $emailAddress;
        $obj->firstName = $firstName;
        $obj->lastName = $lastName;
        $obj->phoneNumbers = $phoneNumbers;
        $obj->title = $title;
        $obj->useFormalTerm = $useFormalTerm;
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
        $output['address'] = $this->address->toJson();
        if (isset($this->company)) {
            $output['company'] = $this->company;
        }
        if (isset($this->emailAddress)) {
            $output['emailAddress'] = $this->emailAddress;
        }
        if (isset($this->firstName)) {
            $output['firstName'] = $this->firstName;
        }
        if (isset($this->lastName)) {
            $output['lastName'] = $this->lastName;
        }
        if (isset($this->phoneNumbers)) {
            $output['phoneNumbers'] = $this->phoneNumbers;
        }
        $output['salutation'] = $this->salutation->value;
        if (isset($this->title)) {
            $output['title'] = $this->title;
        }
        if (isset($this->useFormalTerm)) {
            $output['useFormalTerm'] = $this->useFormalTerm;
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
}
