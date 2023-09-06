<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Dns;

use InvalidArgumentException;
use JsonSchema\Validator;

class CombinedAManagedManagedByAlternative1
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'ingressId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'ingressId',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $ingressId;

    /**
     * @param string $ingressId
     */
    public function __construct(string $ingressId)
    {
        $this->ingressId = $ingressId;
    }

    /**
     * @return string
     */
    public function getIngressId(): string
    {
        return $this->ingressId;
    }

    /**
     * @param string $ingressId
     * @return self
     */
    public function withIngressId(string $ingressId): self
    {
        $validator = new Validator();
        $validator->validate($ingressId, static::$schema['properties']['ingressId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->ingressId = $ingressId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CombinedAManagedManagedByAlternative1 Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CombinedAManagedManagedByAlternative1
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $ingressId = $input->{'ingressId'};

        $obj = new self($ingressId);

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
        $output['ingressId'] = $this->ingressId;

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
