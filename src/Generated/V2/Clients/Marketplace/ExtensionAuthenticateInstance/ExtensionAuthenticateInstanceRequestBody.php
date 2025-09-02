<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateInstance;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionAuthenticateInstanceRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'extensionInstanceSecret' => [
                'description' => 'The latest secret an external application received via lifecycle webhooks.
Namely ExtensionAddedToContext and ExtensionInstanceSecretRotated.
',
                'type' => 'string',
            ],
        ],
        'required' => [
            'extensionInstanceSecret',
        ],
        'type' => 'object',
    ];

    /**
     * The latest secret an external application received via lifecycle webhooks.
     * Namely ExtensionAddedToContext and ExtensionInstanceSecretRotated.
     *
     */
    private string $extensionInstanceSecret;

    public function __construct(string $extensionInstanceSecret)
    {
        $this->extensionInstanceSecret = $extensionInstanceSecret;
    }

    public function getExtensionInstanceSecret(): string
    {
        return $this->extensionInstanceSecret;
    }

    public function withExtensionInstanceSecret(string $extensionInstanceSecret): self
    {
        $validator = new Validator();
        $validator->validate($extensionInstanceSecret, self::$internalValidationSchema['properties']['extensionInstanceSecret']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->extensionInstanceSecret = $extensionInstanceSecret;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionAuthenticateInstanceRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionAuthenticateInstanceRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $extensionInstanceSecret = $input->{'extensionInstanceSecret'};

        $obj = new self($extensionInstanceSecret);

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
        $output['extensionInstanceSecret'] = $this->extensionInstanceSecret;

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
