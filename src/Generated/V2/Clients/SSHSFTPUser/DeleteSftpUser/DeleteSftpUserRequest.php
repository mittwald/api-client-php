<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\DeleteSftpUser;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeleteSftpUserRequest
{
    public const method = 'delete';

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
        ],
        'required' => [
            'sftpUserId',
        ],
    ];

    /**
     * @var string
     */
    private string $sftpUserId;

    private array $headers = [

    ];

    /**
     * @param string $sftpUserId
     */
    public function __construct(string $sftpUserId)
    {
        $this->sftpUserId = $sftpUserId;
    }

    /**
     * @return string
     */
    public function getSftpUserId(): string
    {
        return $this->sftpUserId;
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
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeleteSftpUserRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeleteSftpUserRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $sftpUserId = $input->{'sftpUserId'};

        $obj = new self($sftpUserId);

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
