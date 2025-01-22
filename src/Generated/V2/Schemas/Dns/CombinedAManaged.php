<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Dns;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.dns.CombinedAManaged.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class CombinedAManaged
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'managedBy' => [
                'oneOf' => [
                    [
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
                    ],
                ],
            ],
        ],
        'required' => [
            'managedBy',
        ],
        'type' => 'object',
    ];

    private CombinedAManagedManagedByAlternative1 $managedBy;

    public function __construct(CombinedAManagedManagedByAlternative1 $managedBy)
    {
        $this->managedBy = $managedBy;
    }

    public function getManagedBy(): CombinedAManagedManagedByAlternative1
    {
        return $this->managedBy;
    }

    public function withManagedBy(CombinedAManagedManagedByAlternative1 $managedBy): self
    {
        $clone = clone $this;
        $clone->managedBy = $managedBy;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CombinedAManaged Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CombinedAManaged
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $managedBy = match (true) {
            CombinedAManagedManagedByAlternative1::validateInput($input->{'managedBy'}, true) => CombinedAManagedManagedByAlternative1::buildFromInput($input->{'managedBy'}, validate: $validate),
            default => throw new InvalidArgumentException("could not build property 'managedBy' from JSON"),
        };

        $obj = new self($managedBy);

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
        $output['managedBy'] = match (true) {
            $this->managedBy instanceof CombinedAManagedManagedByAlternative1 => ($this->managedBy)->toJson(),
        };

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
        $this->managedBy = match (true) {
            $this->managedBy instanceof CombinedAManagedManagedByAlternative1 => clone $this->managedBy,
        };
    }
}
