<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\ListUpdateCandidatesForAppversion;

use InvalidArgumentException;
use JsonSchema\Validator;

class ListUpdateCandidatesForAppversionRequest
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
            'appId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'baseAppVersionId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'appId',
            'baseAppVersionId',
        ],
    ];

    /**
     * @var string
     */
    private string $appId;

    /**
     * @var string
     */
    private string $baseAppVersionId;

    private array $headers = [

    ];

    /**
     * @param string $appId
     * @param string $baseAppVersionId
     */
    public function __construct(string $appId, string $baseAppVersionId)
    {
        $this->appId = $appId;
        $this->baseAppVersionId = $baseAppVersionId;
    }

    /**
     * @return string
     */
    public function getAppId(): string
    {
        return $this->appId;
    }

    /**
     * @return string
     */
    public function getBaseAppVersionId(): string
    {
        return $this->baseAppVersionId;
    }

    /**
     * @param string $appId
     * @return self
     */
    public function withAppId(string $appId): self
    {
        $validator = new Validator();
        $validator->validate($appId, static::$schema['properties']['appId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->appId = $appId;

        return $clone;
    }

    /**
     * @param string $baseAppVersionId
     * @return self
     */
    public function withBaseAppVersionId(string $baseAppVersionId): self
    {
        $validator = new Validator();
        $validator->validate($baseAppVersionId, static::$schema['properties']['baseAppVersionId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->baseAppVersionId = $baseAppVersionId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListUpdateCandidatesForAppversionRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListUpdateCandidatesForAppversionRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $appId = $input->{'appId'};
        $baseAppVersionId = $input->{'baseAppVersionId'};

        $obj = new self($appId, $baseAppVersionId);

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
        $output['baseAppVersionId'] = $this->baseAppVersionId;

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
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $appId = urlencode($mapped['appId']);
        $baseAppVersionId = urlencode($mapped['baseAppVersionId']);
        return '/v2/apps/' . $appId . '/versions/' . $baseAppVersionId . '/update-candidates';
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
