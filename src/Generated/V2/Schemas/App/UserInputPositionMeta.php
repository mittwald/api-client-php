<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

class UserInputPositionMeta
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'index' => [
                'type' => 'number',
            ],
            'section' => [
                'type' => 'string',
            ],
            'step' => [
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var int|float|null
     */
    private int|float|null $index = null;

    /**
     * @var string|null
     */
    private ?string $section = null;

    /**
     * @var string|null
     */
    private ?string $step = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return int|float|null
     */
    public function getIndex() : int|float|null
    {
        return $this->index;
    }

    /**
     * @return string|null
     */
    public function getSection() : ?string
    {
        return $this->section ?? null;
    }

    /**
     * @return string|null
     */
    public function getStep() : ?string
    {
        return $this->step ?? null;
    }

    /**
     * @param int|float $index
     * @return self
     */
    public function withIndex(int|float $index) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($index, static::$schema['properties']['index']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->index = $index;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutIndex() : self
    {
        $clone = clone $this;
        unset($clone->index);

        return $clone;
    }

    /**
     * @param string $section
     * @return self
     */
    public function withSection(string $section) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($section, static::$schema['properties']['section']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->section = $section;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutSection() : self
    {
        $clone = clone $this;
        unset($clone->section);

        return $clone;
    }

    /**
     * @param string $step
     * @return self
     */
    public function withStep(string $step) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($step, static::$schema['properties']['step']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->step = $step;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutStep() : self
    {
        $clone = clone $this;
        unset($clone->step);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UserInputPositionMeta Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : UserInputPositionMeta
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $index = null;
        if (isset($input->{'index'})) {
            $index = str_contains($input->{'index'}, '.') ? (float)($input->{'index'}) : (int)($input->{'index'});
        }
        $section = null;
        if (isset($input->{'section'})) {
            $section = $input->{'section'};
        }
        $step = null;
        if (isset($input->{'step'})) {
            $step = $input->{'step'};
        }

        $obj = new self();
        $obj->index = $index;
        $obj->section = $section;
        $obj->step = $step;
        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson() : array
    {
        $output = [];
        if (isset($this->index)) {
            $output['index'] = $this->index;
        }
        if (isset($this->section)) {
            $output['section'] = $this->section;
        }
        if (isset($this->step)) {
            $output['step'] = $this->step;
        }

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
    }
}

