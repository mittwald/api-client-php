<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\Register;

use InvalidArgumentException;

class RegisterRequestBody
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'email' => [
                'description' => 'The users email address',
                'format' => 'email',
                'type' => 'string',
            ],
            'password' => [
                'description' => 'The users password.',
                'type' => 'string',
            ],
            'person' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.commons.Person',
            ],
        ],
        'required' => [
            'email',
            'password',
            'person',
        ],
        'type' => 'object',
    ];

    /**
     * The users email address
     *
     * @var string
     */
    private string $email;

    /**
     * The users password.
     *
     * @var string
     */
    private string $password;

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person
     */
    private \Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person $person;

    private array $headers = [

    ];

    /**
     * @param string $email
     * @param string $password
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person $person
     */
    public function __construct(string $email, string $password, \Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person $person)
    {
        $this->email = $email;
        $this->password = $password;
        $this->person = $person;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person
     */
    public function getPerson(): \Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person
    {
        return $this->person;
    }

    /**
     * @param string $email
     * @return self
     */
    public function withEmail(string $email): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($email, static::$schema['properties']['email']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->email = $email;

        return $clone;
    }

    /**
     * @param string $password
     * @return self
     */
    public function withPassword(string $password): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($password, static::$schema['properties']['password']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->password = $password;

        return $clone;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person $person
     * @return self
     */
    public function withPerson(\Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person $person): self
    {
        $clone = clone $this;
        $clone->person = $person;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RegisterRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RegisterRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $email = $input->{'email'};
        $password = $input->{'password'};
        $person = \Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person::buildFromInput($input->{'person'}, validate: $validate);

        $obj = new self($email, $password, $person);

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
        $output['password'] = $this->password;
        $output['person'] = $this->person->toJson();

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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        return '/v2/register';
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
