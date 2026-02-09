<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Misc\VerificationVerifyAddress;

use InvalidArgumentException;
use JsonSchema\Validator;

class VerificationVerifyAddressOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'confidence' => [
                'type' => 'string',
            ],
            'exists' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'exists',
            'confidence',
        ],
        'type' => 'object',
    ];

    private string $confidence;

    private bool $exists;

    public function __construct(string $confidence, bool $exists)
    {
        $this->confidence = $confidence;
        $this->exists = $exists;
    }

    public function getConfidence(): string
    {
        return $this->confidence;
    }

    public function getExists(): bool
    {
        return $this->exists;
    }

    public function withConfidence(string $confidence): self
    {
        $validator = new Validator();
        $validator->validate($confidence, self::$internalValidationSchema['properties']['confidence']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->confidence = $confidence;

        return $clone;
    }

    public function withExists(bool $exists): self
    {
        $validator = new Validator();
        $validator->validate($exists, self::$internalValidationSchema['properties']['exists']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->exists = $exists;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return VerificationVerifyAddressOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): VerificationVerifyAddressOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $confidence = $input->{'confidence'};
        $exists = (bool)($input->{'exists'});

        $obj = new self($confidence, $exists);

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
        $output['confidence'] = $this->confidence;
        $output['exists'] = $this->exists;

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
