<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalizedSettingsGet;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedUserServicePersonalizedSettingsGetOKResponseBody
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
        'type' => 'object',
    ];

    private ?string $settingsString = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getSettingsString(): ?string
    {
        return $this->settingsString ?? null;
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

    public function withoutSettingsString(): self
    {
        $clone = clone $this;
        unset($clone->settingsString);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedUserServicePersonalizedSettingsGetOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedUserServicePersonalizedSettingsGetOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $settingsString = null;
        if (isset($input->{'settingsString'})) {
            $settingsString = $input->{'settingsString'};
        }

        $obj = new self();
        $obj->settingsString = $settingsString;
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
        if (isset($this->settingsString)) {
            $output['settingsString'] = $this->settingsString;
        }

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
