<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterSubscribeUser;

use InvalidArgumentException;
use JsonSchema\Validator;

class NewsletterSubscribeUserRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'firstName' => [
                'example' => 'Ada',
                'type' => 'string',
            ],
            'lastName' => [
                'example' => 'Lovelace',
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ?string $firstName = null;

    private ?string $lastName = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getFirstName(): ?string
    {
        return $this->firstName ?? null;
    }

    public function getLastName(): ?string
    {
        return $this->lastName ?? null;
    }

    public function withFirstName(string $firstName): self
    {
        $validator = new Validator();
        $validator->validate($firstName, self::$schema['properties']['firstName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->firstName = $firstName;

        return $clone;
    }

    public function withoutFirstName(): self
    {
        $clone = clone $this;
        unset($clone->firstName);

        return $clone;
    }

    public function withLastName(string $lastName): self
    {
        $validator = new Validator();
        $validator->validate($lastName, self::$schema['properties']['lastName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->lastName = $lastName;

        return $clone;
    }

    public function withoutLastName(): self
    {
        $clone = clone $this;
        unset($clone->lastName);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return NewsletterSubscribeUserRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): NewsletterSubscribeUserRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $firstName = null;
        if (isset($input->{'firstName'})) {
            $firstName = $input->{'firstName'};
        }
        $lastName = null;
        if (isset($input->{'lastName'})) {
            $lastName = $input->{'lastName'};
        }

        $obj = new self();
        $obj->firstName = $firstName;
        $obj->lastName = $lastName;
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
        if (isset($this->firstName)) {
            $output['firstName'] = $this->firstName;
        }
        if (isset($this->lastName)) {
            $output['lastName'] = $this->lastName;
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
        $validator->validate($input, self::$schema);

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
