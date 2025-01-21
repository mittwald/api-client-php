<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtectionV2Deprecated;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateMailAddressSpamProtectionV2DeprecatedRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'spamProtection' => [
                'properties' => [
                    'active' => [
                        'type' => 'boolean',
                    ],
                    'autoDeleteSpam' => [
                        'type' => 'boolean',
                    ],
                    'folder' => [
                        'enum' => [
                            'inbox',
                            'spam',
                        ],
                        'type' => 'string',
                    ],
                    'relocationMinSpamScore' => [
                        'maximum' => 10,
                        'type' => 'integer',
                    ],
                ],
                'required' => [
                    'active',
                    'folder',
                    'relocationMinSpamScore',
                    'autoDeleteSpam',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'spamProtection',
        ],
    ];

    private UpdateMailAddressSpamProtectionV2DeprecatedRequestBodySpamProtection $spamProtection;

    public function __construct(UpdateMailAddressSpamProtectionV2DeprecatedRequestBodySpamProtection $spamProtection)
    {
        $this->spamProtection = $spamProtection;
    }

    public function getSpamProtection(): UpdateMailAddressSpamProtectionV2DeprecatedRequestBodySpamProtection
    {
        return $this->spamProtection;
    }

    public function withSpamProtection(UpdateMailAddressSpamProtectionV2DeprecatedRequestBodySpamProtection $spamProtection): self
    {
        $clone = clone $this;
        $clone->spamProtection = $spamProtection;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateMailAddressSpamProtectionV2DeprecatedRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateMailAddressSpamProtectionV2DeprecatedRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $spamProtection = UpdateMailAddressSpamProtectionV2DeprecatedRequestBodySpamProtection::buildFromInput($input->{'spamProtection'}, validate: $validate);

        $obj = new self($spamProtection);

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
        $output['spamProtection'] = ($this->spamProtection)->toJson();

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
        $this->spamProtection = clone $this->spamProtection;
    }
}
