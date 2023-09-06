<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProject;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateProjectRequest
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
            'serverId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'description' => [
                        'description' => 'Name of the Project as it is displayed in the mStudio.',
                        'example' => 'My first Project!',
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
            'serverId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $serverId;

    /**
     * @var CreateProjectRequestBody
     */
    private CreateProjectRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $serverId
     * @param CreateProjectRequestBody $body
     */
    public function __construct(string $serverId, CreateProjectRequestBody $body)
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
     * @return CreateProjectRequestBody
     */
    public function getBody(): CreateProjectRequestBody
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
     * @param CreateProjectRequestBody $body
     * @return self
     */
    public function withBody(CreateProjectRequestBody $body): self
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
     * @return CreateProjectRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateProjectRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $serverId = $input->{'serverId'};
        $body = CreateProjectRequestBody::buildFromInput($input->{'body'}, validate: $validate);

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
        return '/v2/servers/' . $serverId . '/projects';
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
