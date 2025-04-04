<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDisableMfa;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedUserDisableMfaRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'multiFactorCode' => [
                'description' => 'Multi Factor Code to confirm MFA.',
                'maxLength' => 16,
                'minLength' => 6,
                'type' => 'string',
            ],
        ],
        'required' => [
            'multiFactorCode',
        ],
        'type' => 'object',
    ];

    /**
     * Multi Factor Code to confirm MFA.
     */
    private string $multiFactorCode;

    public function __construct(string $multiFactorCode)
    {
        $this->multiFactorCode = $multiFactorCode;
    }

    public function getMultiFactorCode(): string
    {
        return $this->multiFactorCode;
    }

    public function withMultiFactorCode(string $multiFactorCode): self
    {
        $validator = new Validator();
        $validator->validate($multiFactorCode, self::$schema['properties']['multiFactorCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->multiFactorCode = $multiFactorCode;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedUserDisableMfaRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedUserDisableMfaRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $multiFactorCode = $input->{'multiFactorCode'};

        $obj = new self($multiFactorCode);

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
        $output['multiFactorCode'] = $this->multiFactorCode;

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
