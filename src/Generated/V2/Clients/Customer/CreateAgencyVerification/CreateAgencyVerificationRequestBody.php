<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateAgencyVerification;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateAgencyVerificationRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'domain' => [
                'minLength' => 1,
                'type' => 'string',
            ],
            'email' => [
                'minLength' => 1,
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ?string $domain = null;

    private ?string $email = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getDomain(): ?string
    {
        return $this->domain ?? null;
    }

    public function getEmail(): ?string
    {
        return $this->email ?? null;
    }

    public function withDomain(string $domain): self
    {
        $validator = new Validator();
        $validator->validate($domain, self::$schema['properties']['domain']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domain = $domain;

        return $clone;
    }

    public function withoutDomain(): self
    {
        $clone = clone $this;
        unset($clone->domain);

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

    public function withoutEmail(): self
    {
        $clone = clone $this;
        unset($clone->email);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateAgencyVerificationRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateAgencyVerificationRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $domain = null;
        if (isset($input->{'domain'})) {
            $domain = $input->{'domain'};
        }
        $email = null;
        if (isset($input->{'email'})) {
            $email = $input->{'email'};
        }

        $obj = new self();
        $obj->domain = $domain;
        $obj->email = $email;
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
        if (isset($this->domain)) {
            $output['domain'] = $this->domain;
        }
        if (isset($this->email)) {
            $output['email'] = $this->email;
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
