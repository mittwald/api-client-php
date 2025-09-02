<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionConsentToExtensionScopes;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionConsentToExtensionScopesRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'consentedScopes' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'consentedScopes',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]
     */
    private array $consentedScopes;

    /**
     * @param string[] $consentedScopes
     */
    public function __construct(array $consentedScopes)
    {
        $this->consentedScopes = $consentedScopes;
    }

    /**
     * @return string[]
     */
    public function getConsentedScopes(): array
    {
        return $this->consentedScopes;
    }

    /**
     * @param string[] $consentedScopes
     */
    public function withConsentedScopes(array $consentedScopes): self
    {
        $validator = new Validator();
        $validator->validate($consentedScopes, self::$internalValidationSchema['properties']['consentedScopes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->consentedScopes = $consentedScopes;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionConsentToExtensionScopesRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionConsentToExtensionScopesRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $consentedScopes = $input->{'consentedScopes'};

        $obj = new self($consentedScopes);

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
        $output['consentedScopes'] = $this->consentedScopes;

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
