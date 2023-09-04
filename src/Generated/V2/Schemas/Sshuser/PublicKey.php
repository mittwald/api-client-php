<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Sshuser;

class PublicKey
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'description' => 'A representation of an ssh-public-key.',
        'properties' => [
            'comment' => [
                'type' => 'string',
            ],
            'key' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'comment',
            'key',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $comment;

    /**
     * @var string
     */
    private string $key;

    /**
     * @param string $comment
     * @param string $key
     */
    public function __construct(string $comment, string $key)
    {
        $this->comment = $comment;
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getComment() : string
    {
        return $this->comment;
    }

    /**
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }

    /**
     * @param string $comment
     * @return self
     */
    public function withComment(string $comment) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($comment, static::$schema['properties']['comment']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->comment = $comment;

        return $clone;
    }

    /**
     * @param string $key
     * @return self
     */
    public function withKey(string $key) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($key, static::$schema['properties']['key']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->key = $key;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return PublicKey Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : PublicKey
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $comment = $input->{'comment'};
        $key = $input->{'key'};

        $obj = new self($comment, $key);

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
        $output['comment'] = $this->comment;
        $output['key'] = $this->key;

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

