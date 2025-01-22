<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\SupportCodeRequest;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class SupportCodeRequestOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'expiresAt' => [
                'description' => 'Expiration of the support code',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'supportCode' => [
                'description' => 'support code to authenticate yourself against the mittwald support via telephone',
                'example' => '123456',
                'type' => 'string',
            ],
        ],
        'required' => [
            'supportCode',
            'expiresAt',
        ],
        'type' => 'object',
    ];

    /**
     * Expiration of the support code
     */
    private DateTime $expiresAt;

    /**
     * support code to authenticate yourself against the mittwald support via telephone
     */
    private string $supportCode;

    public function __construct(DateTime $expiresAt, string $supportCode)
    {
        $this->expiresAt = $expiresAt;
        $this->supportCode = $supportCode;
    }

    public function getExpiresAt(): DateTime
    {
        return $this->expiresAt;
    }

    public function getSupportCode(): string
    {
        return $this->supportCode;
    }

    public function withExpiresAt(DateTime $expiresAt): self
    {
        $clone = clone $this;
        $clone->expiresAt = $expiresAt;

        return $clone;
    }

    public function withSupportCode(string $supportCode): self
    {
        $validator = new Validator();
        $validator->validate($supportCode, self::$schema['properties']['supportCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->supportCode = $supportCode;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SupportCodeRequestOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SupportCodeRequestOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $expiresAt = new DateTime($input->{'expiresAt'});
        $supportCode = $input->{'supportCode'};

        $obj = new self($expiresAt, $supportCode);

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
        $output['expiresAt'] = ($this->expiresAt)->format(DateTime::ATOM);
        $output['supportCode'] = $this->supportCode;

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
        $this->expiresAt = clone $this->expiresAt;
    }
}
