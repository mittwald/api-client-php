<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

class HandleReadable
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'current' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.domain.HandleData',
            ],
            'desired' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.domain.HandleData',
            ],
        ],
        'required' => [
            'current',
        ],
        'type' => 'object',
    ];

    /**
     * @var HandleData
     */
    private HandleData $current;

    /**
     * @var HandleData|null
     */
    private ?HandleData $desired = null;

    /**
     * @param HandleData $current
     */
    public function __construct(HandleData $current)
    {
        $this->current = $current;
    }

    /**
     * @return HandleData
     */
    public function getCurrent() : HandleData
    {
        return $this->current;
    }

    /**
     * @return HandleData|null
     */
    public function getDesired() : ?HandleData
    {
        return $this->desired ?? null;
    }

    /**
     * @param HandleData $current
     * @return self
     */
    public function withCurrent(HandleData $current) : self
    {
        $clone = clone $this;
        $clone->current = $current;

        return $clone;
    }

    /**
     * @param HandleData $desired
     * @return self
     */
    public function withDesired(HandleData $desired) : self
    {
        $clone = clone $this;
        $clone->desired = $desired;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDesired() : self
    {
        $clone = clone $this;
        unset($clone->desired);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return HandleReadable Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : HandleReadable
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $current = HandleData::buildFromInput($input->{'current'}, validate: $validate);
        $desired = null;
        if (isset($input->{'desired'})) {
            $desired = HandleData::buildFromInput($input->{'desired'}, validate: $validate);
        }

        $obj = new self($current);
        $obj->desired = $desired;
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
        $output['current'] = $this->current->toJson();
        if (isset($this->desired)) {
            $output['desired'] = $this->desired->toJson();
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

