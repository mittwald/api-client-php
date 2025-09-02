<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGenerateExtensionSecret;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionGenerateExtensionSecretOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'secret' => [
                'type' => 'string',
            ],
            'secretId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'secretId',
            'secret',
        ],
        'type' => 'object',
    ];

    private string $secret;

    private string $secretId;

    public function __construct(string $secret, string $secretId)
    {
        $this->secret = $secret;
        $this->secretId = $secretId;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }

    public function getSecretId(): string
    {
        return $this->secretId;
    }

    public function withSecret(string $secret): self
    {
        $validator = new Validator();
        $validator->validate($secret, self::$internalValidationSchema['properties']['secret']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->secret = $secret;

        return $clone;
    }

    public function withSecretId(string $secretId): self
    {
        $validator = new Validator();
        $validator->validate($secretId, self::$internalValidationSchema['properties']['secretId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->secretId = $secretId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionGenerateExtensionSecretOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionGenerateExtensionSecretOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $secret = $input->{'secret'};
        $secretId = $input->{'secretId'};

        $obj = new self($secret, $secretId);

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
        $output['secret'] = $this->secret;
        $output['secretId'] = $this->secretId;

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
