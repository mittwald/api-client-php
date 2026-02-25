<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\License\RotateLicenseKey;

use InvalidArgumentException;
use JsonSchema\Validator;

class RotateLicenseKeyRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'description' => 'Optional reference to a file containing the new key if it was not procured via mittwald.',
        'properties' => [
            'externalKey' => [
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ?string $externalKey = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getExternalKey(): ?string
    {
        return $this->externalKey ?? null;
    }

    public function withExternalKey(string $externalKey): self
    {
        $validator = new Validator();
        $validator->validate($externalKey, self::$internalValidationSchema['properties']['externalKey']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->externalKey = $externalKey;

        return $clone;
    }

    public function withoutExternalKey(): self
    {
        $clone = clone $this;
        unset($clone->externalKey);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RotateLicenseKeyRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RotateLicenseKeyRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $externalKey = null;
        if (isset($input->{'externalKey'})) {
            $externalKey = $input->{'externalKey'};
        }

        $obj = new self();
        $obj->externalKey = $externalKey;
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
        if (isset($this->externalKey)) {
            $output['externalKey'] = $this->externalKey;
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
