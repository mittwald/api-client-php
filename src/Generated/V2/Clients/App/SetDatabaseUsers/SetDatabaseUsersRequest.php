<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\SetDatabaseUsers;

class SetDatabaseUsersRequest
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'appInstallationId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'databaseId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'databaseUserIds' => [
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                        'type' => 'object',
                    ],
                ],
                'required' => [
                    'databaseUserIds',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'appInstallationId',
            'databaseId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $appInstallationId;

    /**
     * @var string
     */
    private string $databaseId;

    /**
     * @var SetDatabaseUsersRequestBody
     */
    private SetDatabaseUsersRequestBody $body;

    private array $headers = [
        
    ];

    /**
     * @param string $appInstallationId
     * @param string $databaseId
     * @param SetDatabaseUsersRequestBody $body
     */
    public function __construct(string $appInstallationId, string $databaseId, SetDatabaseUsersRequestBody $body)
    {
        $this->appInstallationId = $appInstallationId;
        $this->databaseId = $databaseId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getAppInstallationId() : string
    {
        return $this->appInstallationId;
    }

    /**
     * @return string
     */
    public function getDatabaseId() : string
    {
        return $this->databaseId;
    }

    /**
     * @return SetDatabaseUsersRequestBody
     */
    public function getBody() : SetDatabaseUsersRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $appInstallationId
     * @return self
     */
    public function withAppInstallationId(string $appInstallationId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($appInstallationId, static::$schema['properties']['appInstallationId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->appInstallationId = $appInstallationId;

        return $clone;
    }

    /**
     * @param string $databaseId
     * @return self
     */
    public function withDatabaseId(string $databaseId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($databaseId, static::$schema['properties']['databaseId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->databaseId = $databaseId;

        return $clone;
    }

    /**
     * @param SetDatabaseUsersRequestBody $body
     * @return self
     */
    public function withBody(SetDatabaseUsersRequestBody $body) : self
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
     * @return SetDatabaseUsersRequest Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : SetDatabaseUsersRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $appInstallationId = $input->{'appInstallationId'};
        $databaseId = $input->{'databaseId'};
        $body = SetDatabaseUsersRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($appInstallationId, $databaseId, $body);

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
        $output['appInstallationId'] = $this->appInstallationId;
        $output['databaseId'] = $this->databaseId;
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
        $appInstallationId = urlencode($mapped['appInstallationId']);
        $databaseId = urlencode($mapped['databaseId']);
        return '/v2/appinstallations/' . $appInstallationId . '/databases/' . $databaseId;
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

