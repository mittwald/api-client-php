<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Container\GetContainerImageConfig;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetContainerImageConfigRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'imageReference' => [
                'example' => 'mysql',
                'type' => 'string',
            ],
            'useCredentialsForProjectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'useCredentialsForRegistryId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'generateAiData' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'imageReference',
        ],
    ];

    private string $imageReference;

    private ?string $useCredentialsForProjectId = null;

    private ?string $useCredentialsForRegistryId = null;

    private ?bool $generateAiData = null;

    private array $headers = [

    ];

    public function __construct(string $imageReference)
    {
        $this->imageReference = $imageReference;
    }

    public function getImageReference(): string
    {
        return $this->imageReference;
    }

    public function getUseCredentialsForProjectId(): ?string
    {
        return $this->useCredentialsForProjectId ?? null;
    }

    public function getUseCredentialsForRegistryId(): ?string
    {
        return $this->useCredentialsForRegistryId ?? null;
    }

    public function getGenerateAiData(): ?bool
    {
        return $this->generateAiData ?? null;
    }

    public function withImageReference(string $imageReference): self
    {
        $validator = new Validator();
        $validator->validate($imageReference, static::$schema['properties']['imageReference']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->imageReference = $imageReference;

        return $clone;
    }

    public function withUseCredentialsForProjectId(string $useCredentialsForProjectId): self
    {
        $validator = new Validator();
        $validator->validate($useCredentialsForProjectId, static::$schema['properties']['useCredentialsForProjectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->useCredentialsForProjectId = $useCredentialsForProjectId;

        return $clone;
    }

    public function withoutUseCredentialsForProjectId(): self
    {
        $clone = clone $this;
        unset($clone->useCredentialsForProjectId);

        return $clone;
    }

    public function withUseCredentialsForRegistryId(string $useCredentialsForRegistryId): self
    {
        $validator = new Validator();
        $validator->validate($useCredentialsForRegistryId, static::$schema['properties']['useCredentialsForRegistryId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->useCredentialsForRegistryId = $useCredentialsForRegistryId;

        return $clone;
    }

    public function withoutUseCredentialsForRegistryId(): self
    {
        $clone = clone $this;
        unset($clone->useCredentialsForRegistryId);

        return $clone;
    }

    public function withGenerateAiData(bool $generateAiData): self
    {
        $validator = new Validator();
        $validator->validate($generateAiData, static::$schema['properties']['generateAiData']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->generateAiData = $generateAiData;

        return $clone;
    }

    public function withoutGenerateAiData(): self
    {
        $clone = clone $this;
        unset($clone->generateAiData);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetContainerImageConfigRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetContainerImageConfigRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $imageReference = $input->{'imageReference'};
        $useCredentialsForProjectId = null;
        if (isset($input->{'useCredentialsForProjectId'})) {
            $useCredentialsForProjectId = $input->{'useCredentialsForProjectId'};
        }
        $useCredentialsForRegistryId = null;
        if (isset($input->{'useCredentialsForRegistryId'})) {
            $useCredentialsForRegistryId = $input->{'useCredentialsForRegistryId'};
        }
        $generateAiData = null;
        if (isset($input->{'generateAiData'})) {
            $generateAiData = (bool)($input->{'generateAiData'});
        }

        $obj = new self($imageReference);
        $obj->useCredentialsForProjectId = $useCredentialsForProjectId;
        $obj->useCredentialsForRegistryId = $useCredentialsForRegistryId;
        $obj->generateAiData = $generateAiData;
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
        $output['imageReference'] = $this->imageReference;
        if (isset($this->useCredentialsForProjectId)) {
            $output['useCredentialsForProjectId'] = $this->useCredentialsForProjectId;
        }
        if (isset($this->useCredentialsForRegistryId)) {
            $output['useCredentialsForRegistryId'] = $this->useCredentialsForRegistryId;
        }
        if (isset($this->generateAiData)) {
            $output['generateAiData'] = $this->generateAiData;
        }

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
        return '/v2/container-image-config';
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
        if (isset($mapped['imageReference'])) {
            $query['imageReference'] = $mapped['imageReference'];
        }
        if (isset($mapped['useCredentialsForProjectId'])) {
            $query['useCredentialsForProjectId'] = $mapped['useCredentialsForProjectId'];
        }
        if (isset($mapped['useCredentialsForRegistryId'])) {
            $query['useCredentialsForRegistryId'] = $mapped['useCredentialsForRegistryId'];
        }
        if (isset($mapped['generateAiData'])) {
            $query['generateAiData'] = $mapped['generateAiData'];
        }
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
