<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Signup;

use InvalidArgumentException;
use JsonSchema\Validator;

class AccountMfaDetails
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
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
    ];

    /**
     * @var bool|null
     */
    private ?bool $mfaConfirmed = null;

    /**
     * @var bool|null
     */
    private ?bool $mfaInitialized = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return bool|null
     */
    public function getMfaConfirmed(): ?bool
    {
        return $this->mfaConfirmed ?? null;
    }

    /**
     * @return bool|null
     */
    public function getMfaInitialized(): ?bool
    {
        return $this->mfaInitialized ?? null;
    }

    /**
     * @param bool $mfaConfirmed
     * @return self
     */
    public function withMfaConfirmed(bool $mfaConfirmed): self
    {
        $validator = new Validator();
        $validator->validate($mfaConfirmed, static::$schema['properties']['mfaConfirmed']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mfaConfirmed = $mfaConfirmed;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMfaConfirmed(): self
    {
        $clone = clone $this;
        unset($clone->mfaConfirmed);

        return $clone;
    }

    /**
     * @param bool $mfaInitialized
     * @return self
     */
    public function withMfaInitialized(bool $mfaInitialized): self
    {
        $validator = new Validator();
        $validator->validate($mfaInitialized, static::$schema['properties']['mfaInitialized']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mfaInitialized = $mfaInitialized;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMfaInitialized(): self
    {
        $clone = clone $this;
        unset($clone->mfaInitialized);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AccountMfaDetails Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AccountMfaDetails
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $mfaConfirmed = null;
        if (isset($input->{'mfaConfirmed'})) {
            $mfaConfirmed = (bool)($input->{'mfaConfirmed'});
        }
        $mfaInitialized = null;
        if (isset($input->{'mfaInitialized'})) {
            $mfaInitialized = (bool)($input->{'mfaInitialized'});
        }

        $obj = new self();
        $obj->mfaConfirmed = $mfaConfirmed;
        $obj->mfaInitialized = $mfaInitialized;
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
        if (isset($this->mfaConfirmed)) {
            $output['mfaConfirmed'] = $this->mfaConfirmed;
        }
        if (isset($this->mfaInitialized)) {
            $output['mfaInitialized'] = $this->mfaInitialized;
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
