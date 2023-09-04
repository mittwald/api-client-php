<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\UpdateAccount;

class UpdateAccountRequestBody
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'person' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.commons.Person',
            ],
        ],
        'required' => [
            'person',
        ],
        'type' => 'object',
    ];

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person
     */
    private \Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person $person;

    private array $headers = [
        
    ];

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person $person
     */
    public function __construct(\Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person $person)
    {
        $this->person = $person;
    }

    /**
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person
     */
    public function getPerson() : \Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person
    {
        return $this->person;
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
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateAccountRequestBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : UpdateAccountRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $person = \Mittwald\ApiClient\Generated\V2\Schemas\Commons\Person::buildFromInput($input->{'person'}, validate: $validate);

        $obj = new self($person);

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
        $output['person'] = $this->person->toJson();

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
    }

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        return '/v2/users/self/personal-information';
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders() : array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value) : self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}

