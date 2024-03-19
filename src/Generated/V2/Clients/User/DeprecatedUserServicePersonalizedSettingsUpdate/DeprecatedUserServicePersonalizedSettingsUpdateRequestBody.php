<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalizedSettingsUpdate;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedUserServicePersonalizedSettingsUpdateRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'settingsString' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'settingsString',
        ],
        'type' => 'object',
    ];

    private string $settingsString;

    public function __construct(string $settingsString)
    {
        $this->settingsString = $settingsString;
    }

    public function getSettingsString(): string
    {
        return $this->settingsString;
    }

    public function withSettingsString(string $settingsString): self
    {
        $validator = new Validator();
        $validator->validate($settingsString, static::$schema['properties']['settingsString']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->settingsString = $settingsString;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedUserServicePersonalizedSettingsUpdateRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedUserServicePersonalizedSettingsUpdateRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $settingsString = $input->{'settingsString'};

        $obj = new self($settingsString);

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
        $output['settingsString'] = $this->settingsString;

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
        $validator = new Validator();
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
