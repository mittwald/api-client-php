<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\User;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person;

/**
 * Auto-generated class for de.mittwald.v1.user.UserInternal.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class UserInternal
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'avatarRef' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'disabled' => [
                'description' => 'Truth value, whether the user has been disabled.',
                'type' => 'boolean',
            ],
            'disabledAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'disabledBy' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'email' => [
                'format' => 'email',
                'type' => 'string',
            ],
            'employeeInformation' => [
                'description' => 'Additional information about mittwald employees.',
                'properties' => [
                    'department' => [
                        'example' => 'Kundenservice',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'department',
                ],
                'type' => 'object',
            ],
            'isEmployee' => [
                'description' => 'Truth value, whether the user is a mittwald employee',
                'type' => 'boolean',
            ],
            'mfa' => [
                'properties' => [
                    'active' => [
                        'default' => false,
                        'type' => 'boolean',
                    ],
                    'setup' => [
                        'default' => false,
                        'type' => 'boolean',
                    ],
                ],
                'required' => [
                    'active',
                    'setup',
                ],
                'type' => 'object',
            ],
            'passwordUpdatedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'person' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.commons.Person',
            ],
            'phoneNumber' => [
                'example' => '+491701234567',
                'type' => 'string',
            ],
            'registeredAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'userId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'userId',
            'person',
        ],
        'type' => 'object',
    ];

    private ?string $avatarRef = null;

    /**
     * Truth value, whether the user has been disabled.
     */
    private ?bool $disabled = null;

    private ?DateTime $disabledAt = null;

    private ?string $disabledBy = null;

    private ?string $email = null;

    /**
     * Additional information about mittwald employees.
     */
    private ?UserInternalEmployeeInformation $employeeInformation = null;

    /**
     * Truth value, whether the user is a mittwald employee
     */
    private ?bool $isEmployee = null;

    private ?UserInternalMfa $mfa = null;

    private ?DateTime $passwordUpdatedAt = null;

    private Person $person;

    private ?string $phoneNumber = null;

    private ?DateTime $registeredAt = null;

    private string $userId;

    public function __construct(Person $person, string $userId)
    {
        $this->person = $person;
        $this->userId = $userId;
    }

    public function getAvatarRef(): ?string
    {
        return $this->avatarRef ?? null;
    }

    public function getDisabled(): ?bool
    {
        return $this->disabled ?? null;
    }

    public function getDisabledAt(): ?DateTime
    {
        return $this->disabledAt ?? null;
    }

    public function getDisabledBy(): ?string
    {
        return $this->disabledBy ?? null;
    }

    public function getEmail(): ?string
    {
        return $this->email ?? null;
    }

    public function getEmployeeInformation(): ?UserInternalEmployeeInformation
    {
        return $this->employeeInformation ?? null;
    }

    public function getIsEmployee(): ?bool
    {
        return $this->isEmployee ?? null;
    }

    public function getMfa(): ?UserInternalMfa
    {
        return $this->mfa ?? null;
    }

    public function getPasswordUpdatedAt(): ?DateTime
    {
        return $this->passwordUpdatedAt ?? null;
    }

    public function getPerson(): Person
    {
        return $this->person;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber ?? null;
    }

    public function getRegisteredAt(): ?DateTime
    {
        return $this->registeredAt ?? null;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function withAvatarRef(string $avatarRef): self
    {
        $validator = new Validator();
        $validator->validate($avatarRef, static::$schema['properties']['avatarRef']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->avatarRef = $avatarRef;

        return $clone;
    }

    public function withoutAvatarRef(): self
    {
        $clone = clone $this;
        unset($clone->avatarRef);

        return $clone;
    }

    public function withDisabled(bool $disabled): self
    {
        $validator = new Validator();
        $validator->validate($disabled, static::$schema['properties']['disabled']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->disabled = $disabled;

        return $clone;
    }

    public function withoutDisabled(): self
    {
        $clone = clone $this;
        unset($clone->disabled);

        return $clone;
    }

    public function withDisabledAt(DateTime $disabledAt): self
    {
        $clone = clone $this;
        $clone->disabledAt = $disabledAt;

        return $clone;
    }

    public function withoutDisabledAt(): self
    {
        $clone = clone $this;
        unset($clone->disabledAt);

        return $clone;
    }

    public function withDisabledBy(string $disabledBy): self
    {
        $validator = new Validator();
        $validator->validate($disabledBy, static::$schema['properties']['disabledBy']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->disabledBy = $disabledBy;

        return $clone;
    }

    public function withoutDisabledBy(): self
    {
        $clone = clone $this;
        unset($clone->disabledBy);

        return $clone;
    }

    public function withEmail(string $email): self
    {
        $validator = new Validator();
        $validator->validate($email, static::$schema['properties']['email']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->email = $email;

        return $clone;
    }

    public function withoutEmail(): self
    {
        $clone = clone $this;
        unset($clone->email);

        return $clone;
    }

    public function withEmployeeInformation(UserInternalEmployeeInformation $employeeInformation): self
    {
        $clone = clone $this;
        $clone->employeeInformation = $employeeInformation;

        return $clone;
    }

    public function withoutEmployeeInformation(): self
    {
        $clone = clone $this;
        unset($clone->employeeInformation);

        return $clone;
    }

    public function withIsEmployee(bool $isEmployee): self
    {
        $validator = new Validator();
        $validator->validate($isEmployee, static::$schema['properties']['isEmployee']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isEmployee = $isEmployee;

        return $clone;
    }

    public function withoutIsEmployee(): self
    {
        $clone = clone $this;
        unset($clone->isEmployee);

        return $clone;
    }

    public function withMfa(UserInternalMfa $mfa): self
    {
        $clone = clone $this;
        $clone->mfa = $mfa;

        return $clone;
    }

    public function withoutMfa(): self
    {
        $clone = clone $this;
        unset($clone->mfa);

        return $clone;
    }

    public function withPasswordUpdatedAt(DateTime $passwordUpdatedAt): self
    {
        $clone = clone $this;
        $clone->passwordUpdatedAt = $passwordUpdatedAt;

        return $clone;
    }

    public function withoutPasswordUpdatedAt(): self
    {
        $clone = clone $this;
        unset($clone->passwordUpdatedAt);

        return $clone;
    }

    public function withPerson(Person $person): self
    {
        $clone = clone $this;
        $clone->person = $person;

        return $clone;
    }

    public function withPhoneNumber(string $phoneNumber): self
    {
        $validator = new Validator();
        $validator->validate($phoneNumber, static::$schema['properties']['phoneNumber']);
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

    public function withRegisteredAt(DateTime $registeredAt): self
    {
        $clone = clone $this;
        $clone->registeredAt = $registeredAt;

        return $clone;
    }

    public function withoutRegisteredAt(): self
    {
        $clone = clone $this;
        unset($clone->registeredAt);

        return $clone;
    }

    public function withUserId(string $userId): self
    {
        $validator = new Validator();
        $validator->validate($userId, static::$schema['properties']['userId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
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
     * @return UserInternal Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UserInternal
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $avatarRef = null;
        if (isset($input->{'avatarRef'})) {
            $avatarRef = $input->{'avatarRef'};
        }
        $disabled = null;
        if (isset($input->{'disabled'})) {
            $disabled = (bool)($input->{'disabled'});
        }
        $disabledAt = null;
        if (isset($input->{'disabledAt'})) {
            $disabledAt = new DateTime($input->{'disabledAt'});
        }
        $disabledBy = null;
        if (isset($input->{'disabledBy'})) {
            $disabledBy = $input->{'disabledBy'};
        }
        $email = null;
        if (isset($input->{'email'})) {
            $email = $input->{'email'};
        }
        $employeeInformation = null;
        if (isset($input->{'employeeInformation'})) {
            $employeeInformation = UserInternalEmployeeInformation::buildFromInput($input->{'employeeInformation'}, validate: $validate);
        }
        $isEmployee = null;
        if (isset($input->{'isEmployee'})) {
            $isEmployee = (bool)($input->{'isEmployee'});
        }
        $mfa = null;
        if (isset($input->{'mfa'})) {
            $mfa = UserInternalMfa::buildFromInput($input->{'mfa'}, validate: $validate);
        }
        $passwordUpdatedAt = null;
        if (isset($input->{'passwordUpdatedAt'})) {
            $passwordUpdatedAt = new DateTime($input->{'passwordUpdatedAt'});
        }
        $person = Person::buildFromInput($input->{'person'}, validate: $validate);
        $phoneNumber = null;
        if (isset($input->{'phoneNumber'})) {
            $phoneNumber = $input->{'phoneNumber'};
        }
        $registeredAt = null;
        if (isset($input->{'registeredAt'})) {
            $registeredAt = new DateTime($input->{'registeredAt'});
        }
        $userId = $input->{'userId'};

        $obj = new self($person, $userId);
        $obj->avatarRef = $avatarRef;
        $obj->disabled = $disabled;
        $obj->disabledAt = $disabledAt;
        $obj->disabledBy = $disabledBy;
        $obj->email = $email;
        $obj->employeeInformation = $employeeInformation;
        $obj->isEmployee = $isEmployee;
        $obj->mfa = $mfa;
        $obj->passwordUpdatedAt = $passwordUpdatedAt;
        $obj->phoneNumber = $phoneNumber;
        $obj->registeredAt = $registeredAt;
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
        if (isset($this->avatarRef)) {
            $output['avatarRef'] = $this->avatarRef;
        }
        if (isset($this->disabled)) {
            $output['disabled'] = $this->disabled;
        }
        if (isset($this->disabledAt)) {
            $output['disabledAt'] = ($this->disabledAt)->format(DateTime::ATOM);
        }
        if (isset($this->disabledBy)) {
            $output['disabledBy'] = $this->disabledBy;
        }
        if (isset($this->email)) {
            $output['email'] = $this->email;
        }
        if (isset($this->employeeInformation)) {
            $output['employeeInformation'] = ($this->employeeInformation)->toJson();
        }
        if (isset($this->isEmployee)) {
            $output['isEmployee'] = $this->isEmployee;
        }
        if (isset($this->mfa)) {
            $output['mfa'] = ($this->mfa)->toJson();
        }
        if (isset($this->passwordUpdatedAt)) {
            $output['passwordUpdatedAt'] = ($this->passwordUpdatedAt)->format(DateTime::ATOM);
        }
        $output['person'] = $this->person->toJson();
        if (isset($this->phoneNumber)) {
            $output['phoneNumber'] = $this->phoneNumber;
        }
        if (isset($this->registeredAt)) {
            $output['registeredAt'] = ($this->registeredAt)->format(DateTime::ATOM);
        }
        $output['userId'] = $this->userId;

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
        if (isset($this->disabledAt)) {
            $this->disabledAt = clone $this->disabledAt;
        }
        if (isset($this->employeeInformation)) {
            $this->employeeInformation = clone $this->employeeInformation;
        }
        if (isset($this->mfa)) {
            $this->mfa = clone $this->mfa;
        }
        if (isset($this->passwordUpdatedAt)) {
            $this->passwordUpdatedAt = clone $this->passwordUpdatedAt;
        }
        if (isset($this->registeredAt)) {
            $this->registeredAt = clone $this->registeredAt;
        }
    }
}
