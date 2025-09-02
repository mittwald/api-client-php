<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateWithSessionToken;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionAuthenticateWithSessionTokenRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'extensionSecret' => [
                'description' => 'The secret you you generated for your extension.',
                'type' => 'string',
            ],
            'sessionToken' => [
                'description' => 'The session token you received from the mStudio.',
                'type' => 'string',
            ],
        ],
        'required' => [
            'sessionToken',
        ],
        'type' => 'object',
    ];

    /**
     * The secret you you generated for your extension.
     */
    private ?string $extensionSecret = null;

    /**
     * The session token you received from the mStudio.
     */
    private string $sessionToken;

    public function __construct(string $sessionToken)
    {
        $this->sessionToken = $sessionToken;
    }

    public function getExtensionSecret(): ?string
    {
        return $this->extensionSecret ?? null;
    }

    public function getSessionToken(): string
    {
        return $this->sessionToken;
    }

    public function withExtensionSecret(string $extensionSecret): self
    {
        $validator = new Validator();
        $validator->validate($extensionSecret, self::$internalValidationSchema['properties']['extensionSecret']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->extensionSecret = $extensionSecret;

        return $clone;
    }

    public function withoutExtensionSecret(): self
    {
        $clone = clone $this;
        unset($clone->extensionSecret);

        return $clone;
    }

    public function withSessionToken(string $sessionToken): self
    {
        $validator = new Validator();
        $validator->validate($sessionToken, self::$internalValidationSchema['properties']['sessionToken']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->sessionToken = $sessionToken;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionAuthenticateWithSessionTokenRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionAuthenticateWithSessionTokenRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $extensionSecret = null;
        if (isset($input->{'extensionSecret'})) {
            $extensionSecret = $input->{'extensionSecret'};
        }
        $sessionToken = $input->{'sessionToken'};

        $obj = new self($sessionToken);
        $obj->extensionSecret = $extensionSecret;
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
        if (isset($this->extensionSecret)) {
            $output['extensionSecret'] = $this->extensionSecret;
        }
        $output['sessionToken'] = $this->sessionToken;

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
        $validator->validate($input, self::$internalValidationSchema);

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
