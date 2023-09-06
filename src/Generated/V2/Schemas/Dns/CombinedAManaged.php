<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Dns;

use InvalidArgumentException;
use JsonSchema\Validator;

class CombinedAManaged
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
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
        'type' => 'object',
    ];

    /**
     * @var CombinedAManagedManagedByAlternative1|null
     */
    private ?CombinedAManagedManagedByAlternative1 $managedBy = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return CombinedAManagedManagedByAlternative1|null
     */
    public function getManagedBy(): ?CombinedAManagedManagedByAlternative1
    {
        return $this->managedBy ?? null;
    }

    /**
     * @param CombinedAManagedManagedByAlternative1 $managedBy
     * @return self
     */
    public function withManagedBy(CombinedAManagedManagedByAlternative1 $managedBy): self
    {
        $clone = clone $this;
        $clone->managedBy = $managedBy;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutManagedBy(): self
    {
        $clone = clone $this;
        unset($clone->managedBy);

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

        $managedBy = null;
        if (isset($input->{'managedBy'})) {
            $managedBy = match (true) {
                CombinedAManagedManagedByAlternative1::validateInput($input->{'managedBy'}, true) => CombinedAManagedManagedByAlternative1::buildFromInput($input->{'managedBy'}, validate: $validate),
            };
        }

        $obj = new self();
        $obj->managedBy = $managedBy;
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
        if (isset($this->managedBy)) {
            $output['managedBy'] = match (true) {
                $this->managedBy instanceof CombinedAManagedManagedByAlternative1 => ($this->managedBy)->toJson(),
            };
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
        if (isset($this->managedBy)) {
            $this->managedBy = match (true) {
                $this->managedBy instanceof CombinedAManagedManagedByAlternative1 => clone $this->managedBy,
            };
        }
    }
}
