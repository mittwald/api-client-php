<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\UpdatePersonalizedSettings;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdatePersonalizedSettingsRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'settingsString' => [
                'example' => 'eyJvbmJvYXJkaW5nIjp7ImNvbXBsZXRlZCI6W119LCJyZWNlbnRWaXNpdHMiOnsicmVjZW50VmlzaXRzIjp7fSwicmVjZW50VmlzaXRlZFBhdGhzIjp7fX0sImNoYW5nZWxvZ3MiOnsicmVhZElkcyI6WzIsMSwzLDQsNSw2LDgsNyw5XX19',
                'format' => 'base64',
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
        $validator->validate($settingsString, self::$schema['properties']['settingsString']);
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
     * @return UpdatePersonalizedSettingsRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdatePersonalizedSettingsRequestBody
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
    }
}
