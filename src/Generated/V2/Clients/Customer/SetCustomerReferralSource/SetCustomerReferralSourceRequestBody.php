<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\SetCustomerReferralSource;

use InvalidArgumentException;
use JsonSchema\Validator;

class SetCustomerReferralSourceRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'referralSource' => [
                'description' => 'free answer on how the customer became aware of mittwald.',
                'maxLength' => 500,
                'minLength' => 1,
                'type' => 'string',
            ],
        ],
        'required' => [
            'referralSource',
        ],
        'type' => 'object',
    ];

    /**
     * free answer on how the customer became aware of mittwald.
     */
    private string $referralSource;

    public function __construct(string $referralSource)
    {
        $this->referralSource = $referralSource;
    }

    public function getReferralSource(): string
    {
        return $this->referralSource;
    }

    public function withReferralSource(string $referralSource): self
    {
        $validator = new Validator();
        $validator->validate($referralSource, self::$internalValidationSchema['properties']['referralSource']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->referralSource = $referralSource;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SetCustomerReferralSourceRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SetCustomerReferralSourceRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $referralSource = $input->{'referralSource'};

        $obj = new self($referralSource);

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
        $output['referralSource'] = $this->referralSource;

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
