<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcodeV2Deprecated;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeclareProcessChangeAuthcodeV2DeprecatedRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'authCode' => [
                'minLength' => 4,
                'type' => 'string',
            ],
        ],
        'required' => [
            'authCode',
        ],
    ];

    private string $authCode;

    public function __construct(string $authCode)
    {
        $this->authCode = $authCode;
    }

    public function getAuthCode(): string
    {
        return $this->authCode;
    }

    public function withAuthCode(string $authCode): self
    {
        $validator = new Validator();
        $validator->validate($authCode, static::$schema['properties']['authCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->authCode = $authCode;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeclareProcessChangeAuthcodeV2DeprecatedRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeclareProcessChangeAuthcodeV2DeprecatedRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $authCode = $input->{'authCode'};

        $obj = new self($authCode);

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
        $output['authCode'] = $this->authCode;

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
    }
}
