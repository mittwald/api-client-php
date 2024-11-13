<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\GetExtensionshealth;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\ExtensionHealth;

class GetExtensionshealthOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'extensionsHealth' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.ExtensionHealth',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'extensionsHealth',
        ],
        'type' => 'object',
    ];

    /**
     * @var ExtensionHealth[]
     */
    private array $extensionsHealth;

    /**
     * @param ExtensionHealth[] $extensionsHealth
     */
    public function __construct(array $extensionsHealth)
    {
        $this->extensionsHealth = $extensionsHealth;
    }

    /**
     * @return ExtensionHealth[]
     */
    public function getExtensionsHealth(): array
    {
        return $this->extensionsHealth;
    }

    /**
     * @param ExtensionHealth[] $extensionsHealth
     */
    public function withExtensionsHealth(array $extensionsHealth): self
    {
        $clone = clone $this;
        $clone->extensionsHealth = $extensionsHealth;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetExtensionshealthOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetExtensionshealthOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $extensionsHealth = array_map(fn (array|object $i): ExtensionHealth => ExtensionHealth::buildFromInput($i, validate: $validate), $input->{'extensionsHealth'});

        $obj = new self($extensionsHealth);

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
        $output['extensionsHealth'] = array_map(fn (ExtensionHealth $i): array => $i->toJson(), $this->extensionsHealth);

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
        $validator->validate($input, static::$schema);

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
