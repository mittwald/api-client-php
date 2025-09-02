<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\VerifyPhoneNumber;

use InvalidArgumentException;
use JsonSchema\Validator;

class VerifyPhoneNumberRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'code' => [
                'example' => '123456',
                'maxLength' => 6,
                'minLength' => 6,
                'type' => 'string',
            ],
            'phoneNumber' => [
                'example' => '+491701234567',
                'type' => 'string',
            ],
        ],
        'required' => [
            'phoneNumber',
            'code',
        ],
        'type' => 'object',
    ];

    private string $code;

    private string $phoneNumber;

    public function __construct(string $code, string $phoneNumber)
    {
        $this->code = $code;
        $this->phoneNumber = $phoneNumber;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function withCode(string $code): self
    {
        $validator = new Validator();
        $validator->validate($code, self::$internalValidationSchema['properties']['code']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->code = $code;

        return $clone;
    }

    public function withPhoneNumber(string $phoneNumber): self
    {
        $validator = new Validator();
        $validator->validate($phoneNumber, self::$internalValidationSchema['properties']['phoneNumber']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->phoneNumber = $phoneNumber;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return VerifyPhoneNumberRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): VerifyPhoneNumberRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $code = $input->{'code'};
        $phoneNumber = $input->{'phoneNumber'};

        $obj = new self($code, $phoneNumber);

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
        $output['code'] = $this->code;
        $output['phoneNumber'] = $this->phoneNumber;

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
