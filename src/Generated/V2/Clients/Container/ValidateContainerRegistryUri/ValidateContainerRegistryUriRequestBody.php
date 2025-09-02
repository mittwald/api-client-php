<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateContainerRegistryUri;

use InvalidArgumentException;
use JsonSchema\Validator;

class ValidateContainerRegistryUriRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'description' => 'The Registry URI to validate.',
        'properties' => [
            'registryUri' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'registryUri',
        ],
        'type' => 'object',
    ];

    private string $registryUri;

    public function __construct(string $registryUri)
    {
        $this->registryUri = $registryUri;
    }

    public function getRegistryUri(): string
    {
        return $this->registryUri;
    }

    public function withRegistryUri(string $registryUri): self
    {
        $validator = new Validator();
        $validator->validate($registryUri, self::$internalValidationSchema['properties']['registryUri']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->registryUri = $registryUri;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ValidateContainerRegistryUriRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ValidateContainerRegistryUriRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $registryUri = $input->{'registryUri'};

        $obj = new self($registryUri);

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
        $output['registryUri'] = $this->registryUri;

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
