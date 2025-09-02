<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditSshKey;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedUserEditSshKeyRequest
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'sshKeyId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'comment' => [
                        'example' => 'a.lovelace@example.com',
                        'type' => 'string',
                    ],
                    'expiresAt' => [
                        'format' => 'date-time',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'comment',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'sshKeyId',
            'body',
        ],
    ];

    private string $sshKeyId;

    private DeprecatedUserEditSshKeyRequestBody $body;

    private array $headers = [

    ];

    public function __construct(string $sshKeyId, DeprecatedUserEditSshKeyRequestBody $body)
    {
        $this->sshKeyId = $sshKeyId;
        $this->body = $body;
    }

    public function getSshKeyId(): string
    {
        return $this->sshKeyId;
    }

    public function getBody(): DeprecatedUserEditSshKeyRequestBody
    {
        return $this->body;
    }

    public function withSshKeyId(string $sshKeyId): self
    {
        $validator = new Validator();
        $validator->validate($sshKeyId, self::$internalValidationSchema['properties']['sshKeyId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->sshKeyId = $sshKeyId;

        return $clone;
    }

    public function withBody(DeprecatedUserEditSshKeyRequestBody $body): self
    {
        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedUserEditSshKeyRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedUserEditSshKeyRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $sshKeyId = $input->{'sshKeyId'};
        $body = DeprecatedUserEditSshKeyRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($sshKeyId, $body);

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
        $output['sshKeyId'] = $this->sshKeyId;
        $output['body'] = ($this->body)->toJson();

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
        $validator->validate($input, self::$internalValidationSchema);

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
        $this->body = clone $this->body;
    }

    /**
     * Builds the URL for this request
     *
     * This method is used internally by the client to build the URL for this request.
     * You should not need to call this method directly.
     *
     * @internal
     * @return string The URL for this request
     */
    public function buildUrl(): string
    {
        $mapped = $this->toJson();
        $sshKeyId = urlencode($mapped['sshKeyId']);
        return '/v2/signup/ssh/' . $sshKeyId;
    }

    /**
     * Builds the request options for this request
     *
     * This method is used internally by the client to build the Guzzle request options
     * for this request. You should not need to call this method directly.
     *
     * @internal
     * @return array The Guzzle request options for this request
     */
    public function buildRequestOptions(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return [
            'query' => $query,
            'headers' => $this->headers,
            'json' => $this->getBody()->toJson(),
        ];
    }

    /**
     * Adds a header to this request
     *
     * You can use this method to add custom HTTP headers to the request.
     *
     * @param string $name The name of the header to add
     * @param string|array $value The value of the header to add
     * @return self A clone of this request with the header added
     */
    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
