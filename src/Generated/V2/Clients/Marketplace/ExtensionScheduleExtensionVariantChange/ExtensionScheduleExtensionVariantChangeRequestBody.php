<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionScheduleExtensionVariantChange;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionScheduleExtensionVariantChangeRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'targetVariantKey' => [
                'description' => 'The target variant key to change to.',
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * The target variant key to change to.
     */
    private ?string $targetVariantKey = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getTargetVariantKey(): ?string
    {
        return $this->targetVariantKey ?? null;
    }

    public function withTargetVariantKey(string $targetVariantKey): self
    {
        $validator = new Validator();
        $validator->validate($targetVariantKey, self::$internalValidationSchema['properties']['targetVariantKey']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->targetVariantKey = $targetVariantKey;

        return $clone;
    }

    public function withoutTargetVariantKey(): self
    {
        $clone = clone $this;
        unset($clone->targetVariantKey);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionScheduleExtensionVariantChangeRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionScheduleExtensionVariantChangeRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $targetVariantKey = null;
        if (isset($input->{'targetVariantKey'})) {
            $targetVariantKey = $input->{'targetVariantKey'};
        }

        $obj = new self();
        $obj->targetVariantKey = $targetVariantKey;
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
        if (isset($this->targetVariantKey)) {
            $output['targetVariantKey'] = $this->targetVariantKey;
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
