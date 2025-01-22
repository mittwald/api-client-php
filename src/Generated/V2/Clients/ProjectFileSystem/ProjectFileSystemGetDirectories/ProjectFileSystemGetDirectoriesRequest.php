<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDirectories;

use InvalidArgumentException;
use JsonSchema\Validator;

class ProjectFileSystemGetDirectoriesRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'projectId' => [
                'type' => 'string',
            ],
            'directory' => [
                'type' => 'string',
            ],
            'name' => [
                'type' => 'string',
            ],
            'max_depth' => [
                'type' => 'integer',
            ],
            'type' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'executable' => [
                'type' => 'boolean',
            ],
            'hidden' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'projectId',
        ],
    ];

    private string $projectId;

    private ?string $directory = null;

    private ?string $name = null;

    private ?int $maxDepth = null;

    /**
     * @var string[]|null
     */
    private ?array $type = null;

    private ?bool $executable = null;

    private ?bool $hidden = null;

    private array $headers = [

    ];

    public function __construct(string $projectId)
    {
        $this->projectId = $projectId;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    public function getDirectory(): ?string
    {
        return $this->directory ?? null;
    }

    public function getName(): ?string
    {
        return $this->name ?? null;
    }

    public function getMaxDepth(): ?int
    {
        return $this->maxDepth ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getType(): ?array
    {
        return $this->type ?? null;
    }

    public function getExecutable(): ?bool
    {
        return $this->executable ?? null;
    }

    public function getHidden(): ?bool
    {
        return $this->hidden ?? null;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, self::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    public function withDirectory(string $directory): self
    {
        $validator = new Validator();
        $validator->validate($directory, self::$schema['properties']['directory']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->directory = $directory;

        return $clone;
    }

    public function withoutDirectory(): self
    {
        $clone = clone $this;
        unset($clone->directory);

        return $clone;
    }

    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, self::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    public function withoutName(): self
    {
        $clone = clone $this;
        unset($clone->name);

        return $clone;
    }

    public function withMaxDepth(int $maxDepth): self
    {
        $validator = new Validator();
        $validator->validate($maxDepth, self::$schema['properties']['max_depth']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->maxDepth = $maxDepth;

        return $clone;
    }

    public function withoutMaxDepth(): self
    {
        $clone = clone $this;
        unset($clone->maxDepth);

        return $clone;
    }

    /**
     * @param string[] $type
     */
    public function withType(array $type): self
    {
        $validator = new Validator();
        $validator->validate($type, self::$schema['properties']['type']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    public function withoutType(): self
    {
        $clone = clone $this;
        unset($clone->type);

        return $clone;
    }

    public function withExecutable(bool $executable): self
    {
        $validator = new Validator();
        $validator->validate($executable, self::$schema['properties']['executable']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->executable = $executable;

        return $clone;
    }

    public function withoutExecutable(): self
    {
        $clone = clone $this;
        unset($clone->executable);

        return $clone;
    }

    public function withHidden(bool $hidden): self
    {
        $validator = new Validator();
        $validator->validate($hidden, self::$schema['properties']['hidden']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->hidden = $hidden;

        return $clone;
    }

    public function withoutHidden(): self
    {
        $clone = clone $this;
        unset($clone->hidden);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ProjectFileSystemGetDirectoriesRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ProjectFileSystemGetDirectoriesRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectId = $input->{'projectId'};
        $directory = null;
        if (isset($input->{'directory'})) {
            $directory = $input->{'directory'};
        }
        $name = null;
        if (isset($input->{'name'})) {
            $name = $input->{'name'};
        }
        $maxDepth = null;
        if (isset($input->{'max_depth'})) {
            $maxDepth = (int)($input->{'max_depth'});
        }
        $type = null;
        if (isset($input->{'type'})) {
            $type = $input->{'type'};
        }
        $executable = null;
        if (isset($input->{'executable'})) {
            $executable = (bool)($input->{'executable'});
        }
        $hidden = null;
        if (isset($input->{'hidden'})) {
            $hidden = (bool)($input->{'hidden'});
        }

        $obj = new self($projectId);
        $obj->directory = $directory;
        $obj->name = $name;
        $obj->maxDepth = $maxDepth;
        $obj->type = $type;
        $obj->executable = $executable;
        $obj->hidden = $hidden;
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
        $output['projectId'] = $this->projectId;
        if (isset($this->directory)) {
            $output['directory'] = $this->directory;
        }
        if (isset($this->name)) {
            $output['name'] = $this->name;
        }
        if (isset($this->maxDepth)) {
            $output['max_depth'] = $this->maxDepth;
        }
        if (isset($this->type)) {
            $output['type'] = $this->type;
        }
        if (isset($this->executable)) {
            $output['executable'] = $this->executable;
        }
        if (isset($this->hidden)) {
            $output['hidden'] = $this->hidden;
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
        $projectId = urlencode($mapped['projectId']);
        return '/v2/projects/' . $projectId . '/filesystem-directories';
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
        if (isset($mapped['directory'])) {
            $query['directory'] = $mapped['directory'];
        }
        if (isset($mapped['name'])) {
            $query['name'] = $mapped['name'];
        }
        if (isset($mapped['max_depth'])) {
            $query['max_depth'] = $mapped['max_depth'];
        }
        if (isset($mapped['type'])) {
            $query['type'] = $mapped['type'];
        }
        if (isset($mapped['executable'])) {
            $query['executable'] = $mapped['executable'];
        }
        if (isset($mapped['hidden'])) {
            $query['hidden'] = $mapped['hidden'];
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
