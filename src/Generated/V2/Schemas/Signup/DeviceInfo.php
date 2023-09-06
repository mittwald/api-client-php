<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Signup;

use InvalidArgumentException;

class DeviceInfo
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'browser' => [
                'example' => 'Safari',
                'type' => 'string',
            ],
            'model' => [
                'example' => 'Apple Macintosh',
                'type' => 'string',
            ],
            'os' => [
                'example' => 'Mac OS',
                'type' => 'string',
            ],
            'type' => [
                'example' => 'Macbook',
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $browser = null;

    /**
     * @var string|null
     */
    private ?string $model = null;

    /**
     * @var string|null
     */
    private ?string $os = null;

    /**
     * @var string|null
     */
    private ?string $type = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getBrowser(): ?string
    {
        return $this->browser ?? null;
    }

    /**
     * @return string|null
     */
    public function getModel(): ?string
    {
        return $this->model ?? null;
    }

    /**
     * @return string|null
     */
    public function getOs(): ?string
    {
        return $this->os ?? null;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type ?? null;
    }

    /**
     * @param string $browser
     * @return self
     */
    public function withBrowser(string $browser): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($browser, static::$schema['properties']['browser']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->browser = $browser;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutBrowser(): self
    {
        $clone = clone $this;
        unset($clone->browser);

        return $clone;
    }

    /**
     * @param string $model
     * @return self
     */
    public function withModel(string $model): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($model, static::$schema['properties']['model']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->model = $model;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutModel(): self
    {
        $clone = clone $this;
        unset($clone->model);

        return $clone;
    }

    /**
     * @param string $os
     * @return self
     */
    public function withOs(string $os): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($os, static::$schema['properties']['os']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->os = $os;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutOs(): self
    {
        $clone = clone $this;
        unset($clone->os);

        return $clone;
    }

    /**
     * @param string $type
     * @return self
     */
    public function withType(string $type): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($type, static::$schema['properties']['type']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutType(): self
    {
        $clone = clone $this;
        unset($clone->type);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeviceInfo Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeviceInfo
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $browser = null;
        if (isset($input->{'browser'})) {
            $browser = $input->{'browser'};
        }
        $model = null;
        if (isset($input->{'model'})) {
            $model = $input->{'model'};
        }
        $os = null;
        if (isset($input->{'os'})) {
            $os = $input->{'os'};
        }
        $type = null;
        if (isset($input->{'type'})) {
            $type = $input->{'type'};
        }

        $obj = new self();
        $obj->browser = $browser;
        $obj->model = $model;
        $obj->os = $os;
        $obj->type = $type;
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
        if (isset($this->browser)) {
            $output['browser'] = $this->browser;
        }
        if (isset($this->model)) {
            $output['model'] = $this->model;
        }
        if (isset($this->os)) {
            $output['os'] = $this->os;
        }
        if (isset($this->type)) {
            $output['type'] = $this->type;
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
