<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageinsightsGetStraceData;

use InvalidArgumentException;
use JsonSchema\Validator;

class PageinsightsGetStraceDataRequest
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
            'straceId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'projectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'straceId',
            'projectId',
        ],
    ];

    /**
     * @var string
     */
    private string $straceId;

    /**
     * @var string
     */
    private string $projectId;

    private array $headers = [

    ];

    /**
     * @param string $straceId
     * @param string $projectId
     */
    public function __construct(string $straceId, string $projectId)
    {
        $this->straceId = $straceId;
        $this->projectId = $projectId;
    }

    /**
     * @return string
     */
    public function getStraceId(): string
    {
        return $this->straceId;
    }

    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @param string $straceId
     * @return self
     */
    public function withStraceId(string $straceId): self
    {
        $validator = new Validator();
        $validator->validate($straceId, static::$schema['properties']['straceId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->straceId = $straceId;

        return $clone;
    }

    /**
     * @param string $projectId
     * @return self
     */
    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return PageinsightsGetStraceDataRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): PageinsightsGetStraceDataRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $straceId = $input->{'straceId'};
        $projectId = $input->{'projectId'};

        $obj = new self($straceId, $projectId);

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
        $output['straceId'] = $this->straceId;
        $output['projectId'] = $this->projectId;

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
        $straceId = urlencode($mapped['straceId']);
        $projectId = urlencode($mapped['projectId']);
        return '/v2/projects/' . $projectId . '/straces/' . $straceId;
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