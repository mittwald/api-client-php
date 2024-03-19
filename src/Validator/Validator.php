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
        /**
         * Psalm needs an override here, because JsonSchema's doc-comments are... incorrect.
         * @psalm-var \JsonSchema\SchemaStorage $schemaStorage
         */
        $schemaStorage = new SchemaStorage();
        $factory = new Factory($schemaStorage);

        parent::__construct($factory);
    }
}
