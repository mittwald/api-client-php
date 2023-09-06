<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Commons;

use InvalidArgumentException;

class Person
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'description' => 'The users personal information, e.g. first name.',
        'properties' => [
            'firstName' => [
                'type' => 'string',
                'description' => 'The users first name',
                'example' => 'Ada',
            ],
            'lastName' => [
                'type' => 'string',
                'description' => 'The users last name',
                'example' => 'Lovelace',
            ],
            'title' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.commons.Salutation',
            ],
        ],
        'required' => [
            'lastName',
            'firstName',
        ],
    ];

    /**
     * The users first name
     *
     * @var string
     */
    private string $firstName;

    /**
     * The users last name
     *
     * @var string
     */
    private string $lastName;

    /**
     * @var Salutation|null
     */
    private ?Salutation $title = null;

    /**
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return Salutation|null
     */
    public function getTitle(): ?Salutation
    {
        return $this->title ?? null;
    }

    /**
     * @param string $firstName
     * @return self
     */
    public function withFirstName(string $firstName): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($firstName, static::$schema['properties']['firstName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->firstName = $firstName;

        return $clone;
    }

    /**
     * @param string $lastName
     * @return self
     */
    public function withLastName(string $lastName): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($lastName, static::$schema['properties']['lastName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->lastName = $lastName;

        return $clone;
    }

    /**
     * @param Salutation $title
     * @return self
     */
    public function withTitle(Salutation $title): self
    {
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
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Person Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Person
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $firstName = $input->{'firstName'};
        $lastName = $input->{'lastName'};
        $title = null;
        if (isset($input->{'title'})) {
            $title = Salutation::from($input->{'title'});
        }

        $obj = new self($firstName, $lastName);
        $obj->title = $title;
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
        $output['firstName'] = $this->firstName;
        $output['lastName'] = $this->lastName;
        if (isset($this->title)) {
            $output['title'] = $this->title->value;
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
}
