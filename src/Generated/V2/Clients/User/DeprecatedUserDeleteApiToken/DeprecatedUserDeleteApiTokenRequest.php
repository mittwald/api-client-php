<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDeleteApiToken;

class DeprecatedUserDeleteApiTokenRequest
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
            'apiTokenId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'apiTokenId',
        ],
    ];

    /**
     * @var string
     */
    private string $apiTokenId;

    private array $headers = [
        
    ];

    /**
     * @param string $apiTokenId
     */
    public function __construct(string $apiTokenId)
    {
        $this->apiTokenId = $apiTokenId;
    }

    /**
     * @return string
     */
    public function getApiTokenId() : string
    {
        return $this->apiTokenId;
    }

    /**
     * @param string $apiTokenId
     * @return self
     */
    public function withApiTokenId(string $apiTokenId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($apiTokenId, static::$schema['properties']['apiTokenId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->apiTokenId = $apiTokenId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedUserDeleteApiTokenRequest Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : DeprecatedUserDeleteApiTokenRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $apiTokenId = $input->{'apiTokenId'};

        $obj = new self($apiTokenId);

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
        $output['apiTokenId'] = $this->apiTokenId;

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

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        $apiTokenId = urlencode($mapped['apiTokenId']);
        return '/v2/signup/token/api/' . $apiTokenId;
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

