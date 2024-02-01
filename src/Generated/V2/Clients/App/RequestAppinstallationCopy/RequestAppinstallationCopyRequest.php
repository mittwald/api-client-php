<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallationCopy;

use InvalidArgumentException;
use JsonSchema\Validator;

class RequestAppinstallationCopyRequest
{
    public const method = 'post';

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
            'body' => [
                'properties' => [
                    'description' => [
                        'type' => 'string',
                    ],
                    'targetProjectId' => [
                        'format' => 'uuid',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'description',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'appInstallationId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $appInstallationId;

    /**
     * @var RequestAppinstallationCopyRequestBody
     */
    private RequestAppinstallationCopyRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $appInstallationId
     * @param RequestAppinstallationCopyRequestBody $body
     */
    public function __construct(string $appInstallationId, RequestAppinstallationCopyRequestBody $body)
    {
        $this->appInstallationId = $appInstallationId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getAppInstallationId(): string
    {
        return $this->appInstallationId;
    }

    /**
     * @return RequestAppinstallationCopyRequestBody
     */
    public function getBody(): RequestAppinstallationCopyRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $appInstallationId
     * @return self
     */
    public function withAppInstallationId(string $appInstallationId): self
    {
        $validator = new Validator();
        $validator->validate($appInstallationId, static::$schema['properties']['appInstallationId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->appInstallationId = $appInstallationId;

        return $clone;
    }

    /**
     * @param RequestAppinstallationCopyRequestBody $body
     * @return self
     */
    public function withBody(RequestAppinstallationCopyRequestBody $body): self
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
     * @return RequestAppinstallationCopyRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RequestAppinstallationCopyRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $appInstallationId = $input->{'appInstallationId'};
        $body = RequestAppinstallationCopyRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($appInstallationId, $body);

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
        $output['appInstallationId'] = $this->appInstallationId;
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
        $appInstallationId = urlencode($mapped['appInstallationId']);
        return '/v2/app-installations/' . $appInstallationId . '/actions/copy';
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
