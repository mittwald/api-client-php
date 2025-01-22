<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\GetAppversion;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetAppversionRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'appId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'appVersionId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'appId',
            'appVersionId',
        ],
    ];

    private string $appId;

    private string $appVersionId;

    private array $headers = [

    ];

    public function __construct(string $appId, string $appVersionId)
    {
        $this->appId = $appId;
        $this->appVersionId = $appVersionId;
    }

    public function getAppId(): string
    {
        return $this->appId;
    }

    public function getAppVersionId(): string
    {
        return $this->appVersionId;
    }

    public function withAppId(string $appId): self
    {
        $validator = new Validator();
        $validator->validate($appId, self::$schema['properties']['appId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->appId = $appId;

        return $clone;
    }

    public function withAppVersionId(string $appVersionId): self
    {
        $validator = new Validator();
        $validator->validate($appVersionId, self::$schema['properties']['appVersionId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->appVersionId = $appVersionId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetAppversionRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetAppversionRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $appId = $input->{'appId'};
        $appVersionId = $input->{'appVersionId'};

        $obj = new self($appId, $appVersionId);

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
        $output['appId'] = $this->appId;
        $output['appVersionId'] = $this->appVersionId;

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
        $appId = urlencode($mapped['appId']);
        $appVersionId = urlencode($mapped['appVersionId']);
        return '/v2/apps/' . $appId . '/versions/' . $appVersionId;
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
