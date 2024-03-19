<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Validator;

use stdClass;
use JsonSchema\SchemaStorageInterface;

class SchemaStorage implements SchemaStorageInterface
{
    private array $schemas = [];

    public function addSchema($id, $schema = null): void
    {
        $this->schemas[$id] = $schema;
    }

    public function getSchema($id): object
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
