<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

use InvalidArgumentException;

class VersionStatus
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
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

    /**
     * @var string|null
     */
    private ?string $current = null;

    /**
     * @var string
     */
    private string $desired;

    /**
     * @param string $desired
     */
    public function __construct(string $desired)
    {
        $this->desired = $desired;
    }

    /**
     * @return string|null
     */
    public function getCurrent(): ?string
    {
        return $this->current ?? null;
    }

    /**
     * @return string
     */
    public function getDesired(): string
    {
        return $this->desired;
    }

    /**
     * @param string $current
     * @return self
     */
    public function withCurrent(string $current): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($current, static::$schema['properties']['current']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->current = $current;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCurrent(): self
    {
        $clone = clone $this;
        unset($clone->current);

        return $clone;
    }

    /**
     * @param string $desired
     * @return self
     */
    public function withDesired(string $desired): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($desired, static::$schema['properties']['desired']);
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
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
