<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedDomainGetScreenshotForDomainOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'references' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]|null
     */
    private ?array $references = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string[]|null
     */
    public function getReferences(): ?array
    {
        return $this->references ?? null;
    }

    /**
     * @param string[] $references
     */
    public function withReferences(array $references): self
    {
        $validator = new Validator();
        $validator->validate($references, self::$internalValidationSchema['properties']['references']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->references = $references;

        return $clone;
    }

    public function withoutReferences(): self
    {
        $clone = clone $this;
        unset($clone->references);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedDomainGetScreenshotForDomainOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedDomainGetScreenshotForDomainOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $references = null;
        if (isset($input->{'references'})) {
            $references = $input->{'references'};
        }

        $obj = new self();
        $obj->references = $references;
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
        if (isset($this->references)) {
            $output['references'] = $this->references;
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
        $validator = new \Mittwald\ApiClient\Validator\Validator();
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, self::$internalValidationSchema);

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
