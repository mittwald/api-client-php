<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\User;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person;

class User
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'avatarRef' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'email' => [
                'format' => 'email',
                'type' => 'string',
            ],
            'person' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.commons.Person',
            ],
            'phoneNumber' => [
                'format' => 'phone',
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

    /**
     * @var string|null
     */
    private ?string $avatarRef = null;

    /**
     * @var string|null
     */
    private ?string $email = null;

    /**
     * @var Person
     */
    private Person $person;

    /**
     * @var string|null
     */
    private ?string $phoneNumber = null;

    /**
     * @var DateTime|null
     */
    private ?DateTime $registeredAt = null;

    /**
     * @var string
     */
    private string $userId;

    /**
     * @param Person $person
     * @param string $userId
     */
    public function __construct(Person $person, string $userId)
    {
        $this->person = $person;
        $this->userId = $userId;
    }

    /**
     * @return string|null
     */
    public function getAvatarRef(): ?string
    {
        return $this->avatarRef ?? null;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email ?? null;
    }

    /**
     * @return Person
     */
    public function getPerson(): Person
    {
        return $this->person;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber ?? null;
    }

    /**
     * @return DateTime|null
     */
    public function getRegisteredAt(): ?DateTime
    {
        return $this->registeredAt ?? null;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $avatarRef
     * @return self
     */
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

    /**
     * @return self
     */
    public function withoutAvatarRef(): self
    {
        $clone = clone $this;
        unset($clone->avatarRef);

        return $clone;
    }

    /**
     * @param string $email
     * @return self
     */
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

    /**
     * @return self
     */
    public function withoutEmail(): self
    {
        $clone = clone $this;
        unset($clone->email);

        return $clone;
    }

    /**
     * @param Person $person
     * @return self
     */
    public function withPerson(Person $person): self
    {
        $clone = clone $this;
        $clone->person = $person;

        return $clone;
    }

    /**
     * @param string $phoneNumber
     * @return self
     */
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

    /**
     * @return self
     */
    public function withoutPhoneNumber(): self
    {
        $clone = clone $this;
        unset($clone->phoneNumber);

        return $clone;
    }

    /**
     * @param DateTime $registeredAt
     * @return self
     */
    public function withRegisteredAt(DateTime $registeredAt): self
    {
        $clone = clone $this;
        $clone->registeredAt = $registeredAt;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutRegisteredAt(): self
    {
        $clone = clone $this;
        unset($clone->registeredAt);

        return $clone;
    }

    /**
     * @param string $userId
     * @return self
     */
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
     * @return User Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): User
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $avatarRef = null;
        if (isset($input->{'avatarRef'})) {
            $avatarRef = $input->{'avatarRef'};
        }
        $email = null;
        if (isset($input->{'email'})) {
            $email = $input->{'email'};
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
        $obj->email = $email;
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
        if (isset($this->email)) {
            $output['email'] = $this->email;
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
        if (isset($this->registeredAt)) {
            $this->registeredAt = clone $this->registeredAt;
        }
    }
}
