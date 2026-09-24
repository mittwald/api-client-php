<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Validator;

use JsonSchema\Constraints\BaseConstraint;
use JsonSchema\SchemaStorageInterface;
use stdClass;

class SchemaStorage implements SchemaStorageInterface
{
    private array $schemas = [];

    /**
     * @param mixed $schema Schema; may be passed as array, despite the interface docs
     */
    public function addSchema($id, $schema = null): void
    {
        if (is_array($schema)) {
            $schema = BaseConstraint::arrayToObjectRecursive($schema);
        }

        $this->schemas[$id] = $schema;
    }

    public function getSchema($id): object|bool
    {
        return $this->schemas[$id];
    }

    public function resolveRef($ref): object
    {
        return new stdClass();
    }

    public function resolveRefSchema($refSchema)
    {
        return $refSchema;
    }

}
