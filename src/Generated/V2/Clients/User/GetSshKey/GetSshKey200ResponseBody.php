<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\GetSshKey;

use InvalidArgumentException;

class GetSshKey200ResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'sshKey' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.signup.SshKey',
            ],
        ],
        'required' => [
            'sshKey',
        ],
        'type' => 'object',
    ];

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Signup\SshKey
     */
    private \Mittwald\ApiClient\Generated\V2\Schemas\Signup\SshKey $sshKey;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Signup\SshKey $sshKey
     */
    public function __construct(\Mittwald\ApiClient\Generated\V2\Schemas\Signup\SshKey $sshKey)
    {
        $this->sshKey = $sshKey;
    }

    /**
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\Signup\SshKey
     */
    public function getSshKey(): \Mittwald\ApiClient\Generated\V2\Schemas\Signup\SshKey
    {
        return $this->sshKey;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Signup\SshKey $sshKey
     * @return self
     */
    public function withSshKey(\Mittwald\ApiClient\Generated\V2\Schemas\Signup\SshKey $sshKey): self
    {
        $clone = clone $this;
        $clone->sshKey = $sshKey;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetSshKey200ResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetSshKey200ResponseBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $sshKey = \Mittwald\ApiClient\Generated\V2\Schemas\Signup\SshKey::buildFromInput($input->{'sshKey'}, validate: $validate);

        $obj = new self($sshKey);

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
        $output['sshKey'] = $this->sshKey->toJson();

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
