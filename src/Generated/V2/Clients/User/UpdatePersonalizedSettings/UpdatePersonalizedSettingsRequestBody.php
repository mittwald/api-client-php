<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\UpdatePersonalizedSettings;

class UpdatePersonalizedSettingsRequestBody
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
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

    /**
     * @var string
     */
    private string $settingsString;

    private array $headers = [
        
    ];

    /**
     * @param string $settingsString
     */
    public function __construct(string $settingsString)
    {
        $this->settingsString = $settingsString;
    }

    /**
     * @return string
     */
    public function getSettingsString() : string
    {
        return $this->settingsString;
    }

    /**
     * @param string $settingsString
     * @return self
     */
    public function withSettingsString(string $settingsString) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($settingsString, static::$schema['properties']['settingsString']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
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
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : UpdatePersonalizedSettingsRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
    public function toJson() : array
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
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
    }

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        $userId = urlencode($mapped['userId']);
        return '/v2/users/' . $userId . '/settings';
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders() : array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value) : self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}

