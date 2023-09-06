<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mail;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateMailAddressMailbox
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'enableSpamProtection' => [
                'type' => 'boolean',
            ],
            'password' => [
                'type' => 'string',
            ],
            'quotaInBytes' => [
                'minimum' => -1,
                'type' => 'number',
            ],
        ],
        'required' => [
            'password',
            'quotaInBytes',
            'enableSpamProtection',
        ],
        'type' => 'object',
    ];

    /**
     * @var bool
     */
    private bool $enableSpamProtection;

    /**
     * @var string
     */
    private string $password;

    /**
     * @var int|float
     */
    private int|float $quotaInBytes;

    /**
     * @param bool $enableSpamProtection
     * @param string $password
     * @param int|float $quotaInBytes
     */
    public function __construct(bool $enableSpamProtection, string $password, int|float $quotaInBytes)
    {
        $this->enableSpamProtection = $enableSpamProtection;
        $this->password = $password;
        $this->quotaInBytes = $quotaInBytes;
    }

    /**
     * @return bool
     */
    public function getEnableSpamProtection(): bool
    {
        return $this->enableSpamProtection;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return int|float
     */
    public function getQuotaInBytes(): int|float
    {
        return $this->quotaInBytes;
    }

    /**
     * @param bool $enableSpamProtection
     * @return self
     */
    public function withEnableSpamProtection(bool $enableSpamProtection): self
    {
        $validator = new Validator();
        $validator->validate($enableSpamProtection, static::$schema['properties']['enableSpamProtection']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->enableSpamProtection = $enableSpamProtection;

        return $clone;
    }

    /**
     * @param string $password
     * @return self
     */
    public function withPassword(string $password): self
    {
        $validator = new Validator();
        $validator->validate($password, static::$schema['properties']['password']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->password = $password;

        return $clone;
    }

    /**
     * @param int|float $quotaInBytes
     * @return self
     */
    public function withQuotaInBytes(int|float $quotaInBytes): self
    {
        $validator = new Validator();
        $validator->validate($quotaInBytes, static::$schema['properties']['quotaInBytes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->quotaInBytes = $quotaInBytes;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateMailAddressMailbox Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateMailAddressMailbox
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $enableSpamProtection = (bool)($input->{'enableSpamProtection'});
        $password = $input->{'password'};
        $quotaInBytes = str_contains($input->{'quotaInBytes'}, '.') ? (float)($input->{'quotaInBytes'}) : (int)($input->{'quotaInBytes'});

        $obj = new self($enableSpamProtection, $password, $quotaInBytes);

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
        $output['enableSpamProtection'] = $this->enableSpamProtection;
        $output['password'] = $this->password;
        $output['quotaInBytes'] = $this->quotaInBytes;

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
