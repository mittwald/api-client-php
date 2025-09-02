<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionScheduleExtensionTermination;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionScheduleExtensionTerminationRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'instantTermination' => [
                'description' => 'If set, the Extension Instance will be removed as fast as possible. No credit will be given.',
                'type' => 'boolean',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * If set, the Extension Instance will be removed as fast as possible. No credit will be given.
     */
    private ?bool $instantTermination = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getInstantTermination(): ?bool
    {
        return $this->instantTermination ?? null;
    }

    public function withInstantTermination(bool $instantTermination): self
    {
        $validator = new Validator();
        $validator->validate($instantTermination, self::$internalValidationSchema['properties']['instantTermination']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->instantTermination = $instantTermination;

        return $clone;
    }

    public function withoutInstantTermination(): self
    {
        $clone = clone $this;
        unset($clone->instantTermination);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionScheduleExtensionTerminationRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionScheduleExtensionTerminationRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $instantTermination = null;
        if (isset($input->{'instantTermination'})) {
            $instantTermination = (bool)($input->{'instantTermination'});
        }

        $obj = new self();
        $obj->instantTermination = $instantTermination;
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
        if (isset($this->instantTermination)) {
            $output['instantTermination'] = $this->instantTermination;
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
