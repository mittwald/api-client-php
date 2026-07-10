<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\RequestMailAddressRateLimitChange;

use InvalidArgumentException;
use JsonSchema\Validator;

class RequestMailAddressRateLimitChangeRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'rateLimitId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'rateLimitId',
        ],
    ];

    private string $rateLimitId;

    public function __construct(string $rateLimitId)
    {
        $this->rateLimitId = $rateLimitId;
    }

    public function getRateLimitId(): string
    {
        return $this->rateLimitId;
    }

    public function withRateLimitId(string $rateLimitId): self
    {
        $validator = new Validator();
        $validator->validate($rateLimitId, self::$internalValidationSchema['properties']['rateLimitId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->rateLimitId = $rateLimitId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RequestMailAddressRateLimitChangeRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RequestMailAddressRateLimitChangeRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $rateLimitId = $input->{'rateLimitId'};

        $obj = new self($rateLimitId);

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
        $output['rateLimitId'] = $this->rateLimitId;

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
