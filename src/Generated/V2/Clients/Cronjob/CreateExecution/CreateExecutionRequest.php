<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateExecution;

use InvalidArgumentException;

class CreateExecutionRequest
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
            'cronjobId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [

            ],
        ],
        'required' => [
            'cronjobId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $cronjobId;

    /**
     * @var mixed
     */
    private $body;

    private array $headers = [

    ];

    /**
     * @param string $cronjobId
     * @param mixed $body
     */
    public function __construct(string $cronjobId, $body)
    {
        $this->cronjobId = $cronjobId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getCronjobId(): string
    {
        return $this->cronjobId;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $cronjobId
     * @return self
     */
    public function withCronjobId(string $cronjobId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($cronjobId, static::$schema['properties']['cronjobId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->cronjobId = $cronjobId;

        return $clone;
    }

    /**
     * @param mixed $body
     * @return self
     */
    public function withBody($body): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($body, static::$schema['properties']['body']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateExecutionRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateExecutionRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $cronjobId = $input->{'cronjobId'};
        $body = $input->{'body'};

        $obj = new self($cronjobId, $body);

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
        $output['cronjobId'] = $this->cronjobId;
        $output['body'] = $this->body;

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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        $cronjobId = urlencode($mapped['cronjobId']);
        return '/v2/cronjobs/' . $cronjobId . '/executions';
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
