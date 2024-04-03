<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateProjectMailSettingRequestBodyAlternative2
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'whitelist' => [
                'items' => [
                    'format' => 'email',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'whitelist',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]
     */
    private array $whitelist;

    /**
     * @param string[] $whitelist
     */
    public function __construct(array $whitelist)
    {
        $this->whitelist = $whitelist;
    }

    /**
     * @return string[]
     */
    public function getWhitelist(): array
    {
        return $this->whitelist;
    }

    /**
     * @param string[] $whitelist
     */
    public function withWhitelist(array $whitelist): self
    {
        $validator = new Validator();
        $validator->validate($whitelist, static::$schema['properties']['whitelist']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->whitelist = $whitelist;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateProjectMailSettingRequestBodyAlternative2 Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateProjectMailSettingRequestBodyAlternative2
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $whitelist = $input->{'whitelist'};

        $obj = new self($whitelist);

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
        $output['whitelist'] = $this->whitelist;

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
