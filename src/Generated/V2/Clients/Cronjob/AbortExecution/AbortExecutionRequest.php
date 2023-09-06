<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Cronjob\AbortExecution;

use InvalidArgumentException;

class AbortExecutionRequest
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
            'executionId' => [
                'example' => 'cron-bd26li-28027320',
                'type' => 'string',
            ],
            'body' => [

            ],
        ],
        'required' => [
            'cronjobId',
            'executionId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $cronjobId;

    /**
     * @var string
     */
    private string $executionId;

    /**
     * @var mixed
     */
    private $body;

    private array $headers = [

    ];

    /**
     * @param string $cronjobId
     * @param string $executionId
     * @param mixed $body
     */
    public function __construct(string $cronjobId, string $executionId, $body)
    {
        $this->cronjobId = $cronjobId;
        $this->executionId = $executionId;
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
     * @return string
     */
    public function getExecutionId(): string
    {
        return $this->executionId;
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
     * @param string $executionId
     * @return self
     */
    public function withExecutionId(string $executionId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($executionId, static::$schema['properties']['executionId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->executionId = $executionId;

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
     * @return AbortExecutionRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AbortExecutionRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $cronjobId = $input->{'cronjobId'};
        $executionId = $input->{'executionId'};
        $body = $input->{'body'};

        $obj = new self($cronjobId, $executionId, $body);

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
        $output['executionId'] = $this->executionId;
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
        $executionId = urlencode($mapped['executionId']);
        return '/v2/cronjobs/' . $cronjobId . '/executions/' . $executionId . '/actions/abort';
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
