<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * VersionStatus describes the current and desired version of something like the
 * AppVersion of an AppInstallation. If diverging, an internal process is going to
 * assert, the current value will be aligned.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class VersionStatus
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'description' => 'VersionStatus describes the current and desired version of something like the AppVersion of an AppInstallation. If diverging, an internal process is going to assert, the current value will be aligned.',
        'properties' => [
            'current' => [
                'type' => 'string',
            ],
            'desired' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'desired',
        ],
        'type' => 'object',
    ];

    private ?string $current = null;

    private string $desired;

    public function __construct(string $desired)
    {
        $this->desired = $desired;
    }

    public function getCurrent(): ?string
    {
        return $this->current ?? null;
    }

    public function getDesired(): string
    {
        return $this->desired;
    }

    public function withCurrent(string $current): self
    {
        $validator = new Validator();
        $validator->validate($current, self::$schema['properties']['current']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->current = $current;

        return $clone;
    }

    public function withoutCurrent(): self
    {
        $clone = clone $this;
        unset($clone->current);

        return $clone;
    }

    public function withDesired(string $desired): self
    {
        $validator = new Validator();
        $validator->validate($desired, self::$schema['properties']['desired']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->desired = $desired;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return VersionStatus Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): VersionStatus
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $current = null;
        if (isset($input->{'current'})) {
            $current = $input->{'current'};
        }
        $desired = $input->{'desired'};

        $obj = new self($desired);
        $obj->current = $current;
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
        if (isset($this->current)) {
            $output['current'] = $this->current;
        }
        $output['desired'] = $this->desired;

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
        $validator->validate($input, self::$schema);

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
