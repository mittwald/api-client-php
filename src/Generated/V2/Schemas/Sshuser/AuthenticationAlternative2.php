<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Sshuser;

class AuthenticationAlternative2
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'publicKeys' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.sshuser.PublicKey',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'publicKeys',
        ],
        'type' => 'object',
    ];

    /**
     * @var PublicKey[]
     */
    private array $publicKeys;

    /**
     * @param PublicKey[] $publicKeys
     */
    public function __construct(array $publicKeys)
    {
        $this->publicKeys = $publicKeys;
    }

    /**
     * @return PublicKey[]
     */
    public function getPublicKeys() : array
    {
        return $this->publicKeys;
    }

    /**
     * @param PublicKey[] $publicKeys
     * @return self
     */
    public function withPublicKeys(array $publicKeys) : self
    {
        $clone = clone $this;
        $clone->publicKeys = $publicKeys;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AuthenticationAlternative2 Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : AuthenticationAlternative2
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $publicKeys = array_map(fn(array $i): PublicKey => PublicKey::buildFromInput($i, validate: $validate), $input->{'publicKeys'});

        $obj = new self($publicKeys);

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
        $output['publicKeys'] = array_map(fn(PublicKey $i): array => $i->toJson(), $this->publicKeys);

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

