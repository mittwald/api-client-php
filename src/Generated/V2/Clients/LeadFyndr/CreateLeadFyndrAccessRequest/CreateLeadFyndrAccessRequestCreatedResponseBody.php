<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadFyndrAccessRequest;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateLeadFyndrAccessRequestCreatedResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'profileId' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'profileId',
        ],
        'type' => 'object',
    ];

    private string $profileId;

    public function __construct(string $profileId)
    {
        $this->profileId = $profileId;
    }

    public function getProfileId(): string
    {
        return $this->profileId;
    }

    public function withProfileId(string $profileId): self
    {
        $validator = new Validator();
        $validator->validate($profileId, self::$internalValidationSchema['properties']['profileId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->profileId = $profileId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateLeadFyndrAccessRequestCreatedResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateLeadFyndrAccessRequestCreatedResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $profileId = $input->{'profileId'};

        $obj = new self($profileId);

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
        $output['profileId'] = $this->profileId;

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
