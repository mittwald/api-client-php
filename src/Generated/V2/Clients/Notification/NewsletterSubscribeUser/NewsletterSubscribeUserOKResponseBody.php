<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterSubscribeUser;

use InvalidArgumentException;
use JsonSchema\Validator;

class NewsletterSubscribeUserOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'active' => [
                'example' => false,
                'type' => 'boolean',
            ],
            'email' => [
                'example' => 'a.lovelace@example.com',
                'type' => 'string',
            ],
            'registered' => [
                'example' => true,
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'email',
            'active',
            'registered',
        ],
        'type' => 'object',
    ];

    private bool $active;

    private string $email;

    private bool $registered;

    public function __construct(bool $active, string $email, bool $registered)
    {
        $this->active = $active;
        $this->email = $email;
        $this->registered = $registered;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getRegistered(): bool
    {
        return $this->registered;
    }

    public function withActive(bool $active): self
    {
        $validator = new Validator();
        $validator->validate($active, self::$schema['properties']['active']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->active = $active;

        return $clone;
    }

    public function withEmail(string $email): self
    {
        $validator = new Validator();
        $validator->validate($email, self::$schema['properties']['email']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->email = $email;

        return $clone;
    }

    public function withRegistered(bool $registered): self
    {
        $validator = new Validator();
        $validator->validate($registered, self::$schema['properties']['registered']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->registered = $registered;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return NewsletterSubscribeUserOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): NewsletterSubscribeUserOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $active = (bool)($input->{'active'});
        $email = $input->{'email'};
        $registered = (bool)($input->{'registered'});

        $obj = new self($active, $email, $registered);

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
        $output['active'] = $this->active;
        $output['email'] = $this->email;
        $output['registered'] = $this->registered;

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
