<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGenerateSessionKey;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionGenerateSessionKeyOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'sessionKeyJwt' => [
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ?string $sessionKeyJwt = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getSessionKeyJwt(): ?string
    {
        return $this->sessionKeyJwt ?? null;
    }

    public function withSessionKeyJwt(string $sessionKeyJwt): self
    {
        $validator = new Validator();
        $validator->validate($sessionKeyJwt, self::$schema['properties']['sessionKeyJwt']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->sessionKeyJwt = $sessionKeyJwt;

        return $clone;
    }

    public function withoutSessionKeyJwt(): self
    {
        $clone = clone $this;
        unset($clone->sessionKeyJwt);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionGenerateSessionKeyOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionGenerateSessionKeyOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $sessionKeyJwt = null;
        if (isset($input->{'sessionKeyJwt'})) {
            $sessionKeyJwt = $input->{'sessionKeyJwt'};
        }

        $obj = new self();
        $obj->sessionKeyJwt = $sessionKeyJwt;
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
        if (isset($this->sessionKeyJwt)) {
            $output['sessionKeyJwt'] = $this->sessionKeyJwt;
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
