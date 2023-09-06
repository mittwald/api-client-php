<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class AuthCode
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'expires' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'value' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'value',
        ],
        'type' => 'object',
    ];

    /**
     * @var DateTime|null
     */
    private ?DateTime $expires = null;

    /**
     * @var string
     */
    private string $value;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @return DateTime|null
     */
    public function getExpires(): ?DateTime
    {
        return $this->expires ?? null;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param DateTime $expires
     * @return self
     */
    public function withExpires(DateTime $expires): self
    {
        $clone = clone $this;
        $clone->expires = $expires;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExpires(): self
    {
        $clone = clone $this;
        unset($clone->expires);

        return $clone;
    }

    /**
     * @param string $value
     * @return self
     */
    public function withValue(string $value): self
    {
        $validator = new Validator();
        $validator->validate($value, static::$schema['properties']['value']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->value = $value;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AuthCode Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AuthCode
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $expires = null;
        if (isset($input->{'expires'})) {
            $expires = new DateTime($input->{'expires'});
        }
        $value = $input->{'value'};

        $obj = new self($value);
        $obj->expires = $expires;
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
        if (isset($this->expires)) {
            $output['expires'] = ($this->expires)->format(DateTime::ATOM);
        }
        $output['value'] = $this->value;

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
        $validator = new Validator();
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
        if (isset($this->expires)) {
            $this->expires = clone $this->expires;
        }
    }
}
