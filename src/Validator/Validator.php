<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Validator;

use JsonSchema\Constraints\Factory;

/**
 * Validator is a specialized subclass of JsonSchema\Validator that disables
 * reference resolution.
 *
 * Reference resolution is not necessary in this context, as validation is
 * delegated to the respective schema classes.
 */
class Validator extends \JsonSchema\Validator
{
    public function __construct()
    {
        $schemaStorage = new SchemaStorage();
        $factory = new Factory($schemaStorage); // @phpstan-ignore argument.type (doc-comments are incorrect)

        parent::__construct($factory);
    }
}
