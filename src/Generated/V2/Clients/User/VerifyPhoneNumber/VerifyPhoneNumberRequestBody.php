<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\VerifyPhoneNumber;

use InvalidArgumentException;

class VerifyPhoneNumberRequestBody
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'code' => [
                'example' => '123456',
                'maxLength' => 6,
                'minLength' => 6,
                'type' => 'string',
            ],
            'phoneNumber' => [
                'format' => 'phone',
                'type' => 'string',
            ],
        ],
        'required' => [
            'phoneNumber',
            'code',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $code;

    /**
     * @var string
     */
    private string $phoneNumber;

    private array $headers = [

    ];

    /**
     * @param string $code
     * @param string $phoneNumber
     */
    public function __construct(string $code, string $phoneNumber)
    {
        $this->code = $code;
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $code
     * @return self
     */
    public function withCode(string $code): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($code, static::$schema['properties']['code']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->code = $code;

        return $clone;
    }

    /**
     * @param string $phoneNumber
     * @return self
     */
    public function withPhoneNumber(string $phoneNumber): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($phoneNumber, static::$schema['properties']['phoneNumber']);
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
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $userId = urlencode($mapped['userId']);
        return '/v2/users/' . $userId . '/phone/verify';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
