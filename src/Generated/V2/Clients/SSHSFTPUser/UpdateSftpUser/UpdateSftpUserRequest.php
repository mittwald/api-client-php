<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSftpUser;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateSftpUserRequest
{
    public const method = 'patch';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'sftpUserId' => [
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'accessLevel' => [
                        'enum' => [
                            'read',
                            'full',
                        ],
                        'type' => 'string',
                    ],
                    'active' => [
                        'type' => 'boolean',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'directories' => [
                        'items' => [
                            'type' => 'string',
                        ],
                        'minItems' => 1,
                        'type' => 'array',
                    ],
                    'expiresAt' => [
                        'format' => 'date-time',
                        'type' => 'string',
                    ],
                    'password' => [
                        'type' => 'string',
                    ],
                    'publicKeys' => [
                        'items' => [
                            '$ref' => '#/components/schemas/de.mittwald.v1.sshuser.PublicKey',
                        ],
                        'type' => 'array',
                    ],
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'sftpUserId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $sftpUserId;

    /**
     * @var UpdateSftpUserRequestBody
     */
    private UpdateSftpUserRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $sftpUserId
     * @param UpdateSftpUserRequestBody $body
     */
    public function __construct(string $sftpUserId, UpdateSftpUserRequestBody $body)
    {
        $this->sftpUserId = $sftpUserId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getSftpUserId(): string
    {
        return $this->sftpUserId;
    }

    /**
     * @return UpdateSftpUserRequestBody
     */
    public function getBody(): UpdateSftpUserRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $sftpUserId
     * @return self
     */
    public function withSftpUserId(string $sftpUserId): self
    {
        $validator = new Validator();
        $validator->validate($sftpUserId, static::$schema['properties']['sftpUserId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->sftpUserId = $sftpUserId;

        return $clone;
    }

    /**
     * @param UpdateSftpUserRequestBody $body
     * @return self
     */
    public function withBody(UpdateSftpUserRequestBody $body): self
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
     * @return UpdateSftpUserRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateSftpUserRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $sftpUserId = $input->{'sftpUserId'};
        $body = UpdateSftpUserRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($sftpUserId, $body);

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
        $output['sftpUserId'] = $this->sftpUserId;
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
        $this->body = clone $this->body;
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $sftpUserId = urlencode($mapped['sftpUserId']);
        return '/v2/sftp-users/' . $sftpUserId;
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
