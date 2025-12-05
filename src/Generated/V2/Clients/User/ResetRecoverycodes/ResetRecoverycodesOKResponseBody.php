<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\ResetRecoverycodes;

use InvalidArgumentException;
use JsonSchema\Validator;

class ResetRecoverycodesOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'recoveryCodesList' => [
                'items' => [
                    'example' => '1234123412341234',
                    'maxLength' => 16,
                    'minLength' => 16,
                    'type' => 'string',
                ],
                'maxItems' => 20,
                'minItems' => 20,
                'type' => 'array',
            ],
        ],
        'required' => [
            'recoveryCodesList',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]
     */
    private array $recoveryCodesList;

    /**
     * @param string[] $recoveryCodesList
     */
    public function __construct(array $recoveryCodesList)
    {
        $this->recoveryCodesList = $recoveryCodesList;
    }

    /**
     * @return string[]
     */
    public function getRecoveryCodesList(): array
    {
        return $this->recoveryCodesList;
    }

    /**
     * @param string[] $recoveryCodesList
     */
    public function withRecoveryCodesList(array $recoveryCodesList): self
    {
        $validator = new Validator();
        $validator->validate($recoveryCodesList, self::$internalValidationSchema['properties']['recoveryCodesList']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->recoveryCodesList = $recoveryCodesList;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ResetRecoverycodesOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ResetRecoverycodesOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $recoveryCodesList = $input->{'recoveryCodesList'};

        $obj = new self($recoveryCodesList);

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
        $output['recoveryCodesList'] = $this->recoveryCodesList;

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
