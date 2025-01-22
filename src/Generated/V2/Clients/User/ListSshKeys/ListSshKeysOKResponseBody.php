<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\ListSshKeys;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Signup\SshKey;

class ListSshKeysOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'sshKeys' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.signup.SshKey',
                ],
                'type' => 'array',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var SshKey[]|null
     */
    private ?array $sshKeys = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return SshKey[]|null
     */
    public function getSshKeys(): ?array
    {
        return $this->sshKeys ?? null;
    }

    /**
     * @param SshKey[] $sshKeys
     */
    public function withSshKeys(array $sshKeys): self
    {
        $clone = clone $this;
        $clone->sshKeys = $sshKeys;

        return $clone;
    }

    public function withoutSshKeys(): self
    {
        $clone = clone $this;
        unset($clone->sshKeys);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListSshKeysOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListSshKeysOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $sshKeys = null;
        if (isset($input->{'sshKeys'})) {
            $sshKeys = array_map(fn (array|object $i): SshKey => SshKey::buildFromInput($i, validate: $validate), $input->{'sshKeys'});
        }

        $obj = new self();
        $obj->sshKeys = $sshKeys;
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
        if (isset($this->sshKeys)) {
            $output['sshKeys'] = array_map(fn (SshKey $i): array => $i->toJson(), $this->sshKeys);
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
