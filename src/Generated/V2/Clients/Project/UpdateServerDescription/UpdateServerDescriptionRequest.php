<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateServerDescription;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateServerDescriptionRequest
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
            'serverId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'description' => [
                        'example' => 'My first Server!',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'description',
                ],
            ],
        ],
        'required' => [
            'serverId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $serverId;

    /**
     * @var UpdateServerDescriptionRequestBody
     */
    private UpdateServerDescriptionRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $serverId
     * @param UpdateServerDescriptionRequestBody $body
     */
    public function __construct(string $serverId, UpdateServerDescriptionRequestBody $body)
    {
        $this->serverId = $serverId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getServerId(): string
    {
        return $this->serverId;
    }

    /**
     * @return UpdateServerDescriptionRequestBody
     */
    public function getBody(): UpdateServerDescriptionRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $serverId
     * @return self
     */
    public function withServerId(string $serverId): self
    {
        $validator = new Validator();
        $validator->validate($serverId, static::$schema['properties']['serverId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->serverId = $serverId;

        return $clone;
    }

    /**
     * @param UpdateServerDescriptionRequestBody $body
     * @return self
     */
    public function withBody(UpdateServerDescriptionRequestBody $body): self
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
     * @return UpdateServerDescriptionRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateServerDescriptionRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $serverId = $input->{'serverId'};
        $body = UpdateServerDescriptionRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($serverId, $body);

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
        $output['serverId'] = $this->serverId;
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
        $serverId = urlencode($mapped['serverId']);
        return '/v2/servers/' . $serverId . '/description';
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
