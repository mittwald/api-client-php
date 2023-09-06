<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Ingress;

use InvalidArgumentException;
use JsonSchema\Validator;

class IngressIps
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'v4' => [
                'items' => [
                    'format' => 'ipv4',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'v4',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]
     */
    private array $v4;

    /**
     * @param string[] $v4
     */
    public function __construct(array $v4)
    {
        $this->v4 = $v4;
    }

    /**
     * @return string[]
     */
    public function getV4(): array
    {
        return $this->v4;
    }

    /**
     * @param string[] $v4
     * @return self
     */
    public function withV4(array $v4): self
    {
        $validator = new Validator();
        $validator->validate($v4, static::$schema['properties']['v4']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->v4 = $v4;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return IngressIps Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): IngressIps
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $v4 = $input->{'v4'};

        $obj = new self($v4);

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
        $output['v4'] = $this->v4;

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
