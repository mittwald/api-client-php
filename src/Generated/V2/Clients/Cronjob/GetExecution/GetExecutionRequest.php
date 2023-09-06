<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecution;

use InvalidArgumentException;

class GetExecutionRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'executionId' => [
                'type' => 'string',
            ],
            'cronjobId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'executionId',
            'cronjobId',
        ],
    ];

    /**
     * @var string
     */
    private string $executionId;

    /**
     * @var string
     */
    private string $cronjobId;

    private array $headers = [

    ];

    /**
     * @param string $executionId
     * @param string $cronjobId
     */
    public function __construct(string $executionId, string $cronjobId)
    {
        $this->executionId = $executionId;
        $this->cronjobId = $cronjobId;
    }

    /**
     * @return string
     */
    public function getExecutionId(): string
    {
        return $this->executionId;
    }

    /**
     * @return string
     */
    public function getCronjobId(): string
    {
        return $this->cronjobId;
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
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetExecutionRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetExecutionRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $executionId = $input->{'executionId'};
        $cronjobId = $input->{'cronjobId'};

        $obj = new self($executionId, $cronjobId);

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
        $output['executionId'] = $this->executionId;
        $output['cronjobId'] = $this->cronjobId;

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
        $executionId = urlencode($mapped['executionId']);
        $cronjobId = urlencode($mapped['cronjobId']);
        return '/v2/cronjobs/' . $cronjobId . '/executions/' . $executionId;
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
