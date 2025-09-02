<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateRelocation;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateRelocationRequestBodyAdditionalServices
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'dataCompare' => [
                'enum' => [
                    'default',
                    'additionalCompare',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'dataCompare',
        ],
        'type' => 'object',
    ];

    private CreateRelocationRequestBodyAdditionalServicesDataCompare $dataCompare;

    public function __construct(CreateRelocationRequestBodyAdditionalServicesDataCompare $dataCompare)
    {
        $this->dataCompare = $dataCompare;
    }

    public function getDataCompare(): CreateRelocationRequestBodyAdditionalServicesDataCompare
    {
        return $this->dataCompare;
    }

    public function withDataCompare(CreateRelocationRequestBodyAdditionalServicesDataCompare $dataCompare): self
    {
        $clone = clone $this;
        $clone->dataCompare = $dataCompare;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateRelocationRequestBodyAdditionalServices Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateRelocationRequestBodyAdditionalServices
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $dataCompare = CreateRelocationRequestBodyAdditionalServicesDataCompare::from($input->{'dataCompare'});

        $obj = new self($dataCompare);

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
        $output['dataCompare'] = ($this->dataCompare)->value;

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
