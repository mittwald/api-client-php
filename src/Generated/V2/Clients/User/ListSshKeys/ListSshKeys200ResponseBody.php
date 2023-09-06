<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\ListSshKeys;

use InvalidArgumentException;

class ListSshKeys200ResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
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
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Signup\SshKey[]|null
     */
    private ?array $sshKeys = null;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\Signup\SshKey[]|null
     */
    public function getSshKeys(): ?array
    {
        return $this->sshKeys ?? null;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Signup\SshKey[] $sshKeys
     * @return self
     */
    public function withSshKeys(array $sshKeys): self
    {
        $clone = clone $this;
        $clone->sshKeys = $sshKeys;

        return $clone;
    }

    /**
     * @return self
     */
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
     * @return ListSshKeys200ResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListSshKeys200ResponseBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $sshKeys = null;
        if (isset($input->{'sshKeys'})) {
            $sshKeys = array_map(fn (array $i): \Mittwald\ApiClient\Generated\V2\Schemas\Signup\SshKey => \Mittwald\ApiClient\Generated\V2\Schemas\Signup\SshKey::buildFromInput($i, validate: $validate), $input->{'sshKeys'});
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
            $output['sshKeys'] = array_map(fn (\Mittwald\ApiClient\Generated\V2\Schemas\Signup\SshKey $i): array => $i->toJson(), $this->sshKeys);
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

    public static function fromResponse(\Psr\Http\Message\ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}
