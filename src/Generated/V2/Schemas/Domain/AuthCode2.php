<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

class AuthCode2
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
        ],
        'required' => [
            'expires',
        ],
        'type' => 'object',
    ];

    /**
     * @var \DateTime
     */
    private \DateTime $expires;

    /**
     * @param \DateTime $expires
     */
    public function __construct(\DateTime $expires)
    {
        $this->expires = $expires;
    }

    /**
     * @return \DateTime
     */
    public function getExpires() : \DateTime
    {
        return $this->expires;
    }

    /**
     * @param \DateTime $expires
     * @return self
     */
    public function withExpires(\DateTime $expires) : self
    {
        $clone = clone $this;
        $clone->expires = $expires;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AuthCode2 Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : AuthCode2
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $expires = new \DateTime($input->{'expires'});

        $obj = new self($expires);

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
        $output['expires'] = ($this->expires)->format(\DateTime::ATOM);

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
        $this->expires = clone $this->expires;
    }
}

