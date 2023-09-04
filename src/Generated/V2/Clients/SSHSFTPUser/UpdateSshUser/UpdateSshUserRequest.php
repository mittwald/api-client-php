<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSshUser;

class UpdateSshUserRequest
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
            'sshUserId' => [
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'active' => [
                        'type' => 'boolean',
                    ],
                    'description' => [
                        'type' => 'string',
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
            'sshUserId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $sshUserId;

    /**
     * @var UpdateSshUserRequestBody
     */
    private UpdateSshUserRequestBody $body;

    private array $headers = [
        
    ];

    /**
     * @param string $sshUserId
     * @param UpdateSshUserRequestBody $body
     */
    public function __construct(string $sshUserId, UpdateSshUserRequestBody $body)
    {
        $this->sshUserId = $sshUserId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getSshUserId() : string
    {
        return $this->sshUserId;
    }

    /**
     * @return UpdateSshUserRequestBody
     */
    public function getBody() : UpdateSshUserRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $sshUserId
     * @return self
     */
    public function withSshUserId(string $sshUserId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($sshUserId, static::$schema['properties']['sshUserId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->sshUserId = $sshUserId;

        return $clone;
    }

    /**
     * @param UpdateSshUserRequestBody $body
     * @return self
     */
    public function withBody(UpdateSshUserRequestBody $body) : self
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
     * @return UpdateSshUserRequest Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : UpdateSshUserRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $sshUserId = $input->{'sshUserId'};
        $body = UpdateSshUserRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($sshUserId, $body);

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
        $output['sshUserId'] = $this->sshUserId;
        $output['body'] = ($this->body)->toJson();

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
        $this->body = clone $this->body;
    }

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        $sshUserId = urlencode($mapped['sshUserId']);
        return '/v2/sshusers/' . $sshUserId;
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders() : array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value) : self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}

