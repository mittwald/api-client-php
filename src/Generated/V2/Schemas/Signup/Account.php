<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Signup;

class Account
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'email' => [
                'example' => 'a.lovelace@example.com',
                'format' => 'email',
                'type' => 'string',
            ],
            'mfaDetails' => [
                'description' => 'The users mfa details.',
                'properties' => [
                    'mfaConfirmed' => [
                        'type' => 'boolean',
                    ],
                    'mfaInitialized' => [
                        'type' => 'boolean',
                    ],
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
            'userId' => [
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $email = null;

    /**
     * The users mfa details.
     *
     * @var AccountMfaDetails|null
     */
    private ?AccountMfaDetails $mfaDetails = null;

    /**
     * @var \DateTime|null
     */
    private ?\DateTime $passwordUpdatedAt = null;

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person|null
     */
    private ?\Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person $person = null;

    /**
     * @var string|null
     */
    private ?string $userId = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email ?? null;
    }

    /**
     * @return AccountMfaDetails|null
     */
    public function getMfaDetails() : ?AccountMfaDetails
    {
        return $this->mfaDetails ?? null;
    }

    /**
     * @return \DateTime|null
     */
    public function getPasswordUpdatedAt() : ?\DateTime
    {
        return $this->passwordUpdatedAt ?? null;
    }

    /**
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person|null
     */
    public function getPerson() : ?\Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person
    {
        return $this->person ?? null;
    }

    /**
     * @return string|null
     */
    public function getUserId() : ?string
    {
        return $this->userId ?? null;
    }

    /**
     * @param string $email
     * @return self
     */
    public function withEmail(string $email) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($email, static::$schema['properties']['email']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->email = $email;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutEmail() : self
    {
        $clone = clone $this;
        unset($clone->email);

        return $clone;
    }

    /**
     * @param AccountMfaDetails $mfaDetails
     * @return self
     */
    public function withMfaDetails(AccountMfaDetails $mfaDetails) : self
    {
        $clone = clone $this;
        $clone->mfaDetails = $mfaDetails;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMfaDetails() : self
    {
        $clone = clone $this;
        unset($clone->mfaDetails);

        return $clone;
    }

    /**
     * @param \DateTime $passwordUpdatedAt
     * @return self
     */
    public function withPasswordUpdatedAt(\DateTime $passwordUpdatedAt) : self
    {
        $clone = clone $this;
        $clone->passwordUpdatedAt = $passwordUpdatedAt;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutPasswordUpdatedAt() : self
    {
        $clone = clone $this;
        unset($clone->passwordUpdatedAt);

        return $clone;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person $person
     * @return self
     */
    public function withPerson(\Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person $person) : self
    {
        $clone = clone $this;
        $clone->person = $person;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutPerson() : self
    {
        $clone = clone $this;
        unset($clone->person);

        return $clone;
    }

    /**
     * @param string $userId
     * @return self
     */
    public function withUserId(string $userId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($userId, static::$schema['properties']['userId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->userId = $userId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutUserId() : self
    {
        $clone = clone $this;
        unset($clone->userId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Account Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : Account
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $email = null;
        if (isset($input->{'email'})) {
            $email = $input->{'email'};
        }
        $mfaDetails = null;
        if (isset($input->{'mfaDetails'})) {
            $mfaDetails = AccountMfaDetails::buildFromInput($input->{'mfaDetails'}, validate: $validate);
        }
        $passwordUpdatedAt = null;
        if (isset($input->{'passwordUpdatedAt'})) {
            $passwordUpdatedAt = new \DateTime($input->{'passwordUpdatedAt'});
        }
        $person = null;
        if (isset($input->{'person'})) {
            $person = \Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person::buildFromInput($input->{'person'}, validate: $validate);
        }
        $userId = null;
        if (isset($input->{'userId'})) {
            $userId = $input->{'userId'};
        }

        $obj = new self();
        $obj->email = $email;
        $obj->mfaDetails = $mfaDetails;
        $obj->passwordUpdatedAt = $passwordUpdatedAt;
        $obj->person = $person;
        $obj->userId = $userId;
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
        if (isset($this->email)) {
            $output['email'] = $this->email;
        }
        if (isset($this->mfaDetails)) {
            $output['mfaDetails'] = ($this->mfaDetails)->toJson();
        }
        if (isset($this->passwordUpdatedAt)) {
            $output['passwordUpdatedAt'] = ($this->passwordUpdatedAt)->format(\DateTime::ATOM);
        }
        if (isset($this->person)) {
            $output['person'] = $this->person->toJson();
        }
        if (isset($this->userId)) {
            $output['userId'] = $this->userId;
        }

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
        if (isset($this->mfaDetails)) {
            $this->mfaDetails = clone $this->mfaDetails;
        }
        if (isset($this->passwordUpdatedAt)) {
            $this->passwordUpdatedAt = clone $this->passwordUpdatedAt;
        }
    }
}

