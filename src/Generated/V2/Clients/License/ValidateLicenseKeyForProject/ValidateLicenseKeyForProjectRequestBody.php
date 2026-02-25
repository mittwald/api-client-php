<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\License\ValidateLicenseKeyForProject;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\License\Kind;

class ValidateLicenseKeyForProjectRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'description' => 'The License key to validate.',
        'properties' => [
            'key' => [
                'type' => 'string',
            ],
            'kind' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.license.Kind',
            ],
        ],
        'required' => [
            'key',
            'kind',
        ],
        'type' => 'object',
    ];

    private string $key;

    private Kind $kind;

    public function __construct(string $key, Kind $kind)
    {
        $this->key = $key;
        $this->kind = $kind;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getKind(): Kind
    {
        return $this->kind;
    }

    public function withKey(string $key): self
    {
        $validator = new Validator();
        $validator->validate($key, self::$internalValidationSchema['properties']['key']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->key = $key;

        return $clone;
    }

    public function withKind(Kind $kind): self
    {
        $clone = clone $this;
        $clone->kind = $kind;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ValidateLicenseKeyForProjectRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ValidateLicenseKeyForProjectRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $key = $input->{'key'};
        $kind = Kind::from($input->{'kind'});

        $obj = new self($key, $kind);

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
        $output['key'] = $this->key;
        $output['kind'] = $this->kind->value;

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
