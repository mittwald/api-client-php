<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateMailAddressAutoresponderRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'autoResponder' => [
                'nullable' => true,
                'properties' => [
                    'active' => [
                        'type' => 'boolean',
                    ],
                    'expiresAt' => [
                        'format' => 'date-time',
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'startsAt' => [
                        'format' => 'date-time',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'message',
                    'active',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'autoResponder',
        ],
    ];

    private UpdateMailAddressAutoresponderRequestBodyAutoResponder $autoResponder;

    public function __construct(UpdateMailAddressAutoresponderRequestBodyAutoResponder $autoResponder)
    {
        $this->autoResponder = $autoResponder;
    }

    public function getAutoResponder(): UpdateMailAddressAutoresponderRequestBodyAutoResponder
    {
        return $this->autoResponder;
    }

    public function withAutoResponder(UpdateMailAddressAutoresponderRequestBodyAutoResponder $autoResponder): self
    {
        $clone = clone $this;
        $clone->autoResponder = $autoResponder;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateMailAddressAutoresponderRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateMailAddressAutoresponderRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $autoResponder = UpdateMailAddressAutoresponderRequestBodyAutoResponder::buildFromInput($input->{'autoResponder'}, validate: $validate);

        $obj = new self($autoResponder);

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
        $output['autoResponder'] = ($this->autoResponder)->toJson();

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
        $this->autoResponder = clone $this->autoResponder;
    }
}
