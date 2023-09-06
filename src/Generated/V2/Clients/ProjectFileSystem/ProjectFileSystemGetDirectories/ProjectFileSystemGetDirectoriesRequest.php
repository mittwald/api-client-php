<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDirectories;

use InvalidArgumentException;

class ProjectFileSystemGetDirectoriesRequest
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

    /**
     * @var string
     */
    private string $projectId;

    /**
     * @var string|null
     */
    private ?string $directory = null;

    /**
     * @var string|null
     */
    private ?string $name = null;

    /**
     * @var int|null
     */
    private ?int $max_depth = null;

    /**
     * @var string[]|null
     */
    private ?array $type = null;

    /**
     * @var bool|null
     */
    private ?bool $executable = null;

    /**
     * @var bool|null
     */
    private ?bool $hidden = null;

    private array $headers = [

    ];

    /**
     * @param string $projectId
     */
    public function __construct(string $projectId)
    {
        $this->projectId = $projectId;
    }

    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @return string|null
     */
    public function getDirectory(): ?string
    {
        return $this->directory ?? null;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name ?? null;
    }

    /**
     * @return int|null
     */
    public function getMaxDepth(): ?int
    {
        return $this->max_depth ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getType(): ?array
    {
        return $this->type ?? null;
    }

    /**
     * @return bool|null
     */
    public function getExecutable(): ?bool
    {
        return $this->executable ?? null;
    }

    /**
     * @return bool|null
     */
    public function getHidden(): ?bool
    {
        return $this->hidden ?? null;
    }

    /**
     * @param string $projectId
     * @return self
     */
    public function withProjectId(string $projectId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * @param string $directory
     * @return self
     */
    public function withDirectory(string $directory): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($directory, static::$schema['properties']['directory']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->directory = $directory;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDirectory(): self
    {
        $clone = clone $this;
        unset($clone->directory);

        return $clone;
    }

    /**
     * @param string $name
     * @return self
     */
    public function withName(string $name): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutName(): self
    {
        $clone = clone $this;
        unset($clone->name);

        return $clone;
    }

    /**
     * @param int $max_depth
     * @return self
     */
    public function withMaxDepth(int $max_depth): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($max_depth, static::$schema['properties']['max_depth']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->max_depth = $max_depth;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMaxDepth(): self
    {
        $clone = clone $this;
        unset($clone->max_depth);

        return $clone;
    }

    /**
     * @param string[] $type
     * @return self
     */
    public function withType(array $type): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($type, static::$schema['properties']['type']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutType(): self
    {
        $clone = clone $this;
        unset($clone->type);

        return $clone;
    }

    /**
     * @param bool $executable
     * @return self
     */
    public function withExecutable(bool $executable): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($executable, static::$schema['properties']['executable']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->executable = $executable;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExecutable(): self
    {
        $clone = clone $this;
        unset($clone->executable);

        return $clone;
    }

    /**
     * @param bool $hidden
     * @return self
     */
    public function withHidden(bool $hidden): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($hidden, static::$schema['properties']['hidden']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->hidden = $hidden;

        return $clone;
    }

    /**
     * @return self
     */
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
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        $max_depth = null;
        if (isset($input->{'max_depth'})) {
            $max_depth = (int)($input->{'max_depth'});
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
        $obj->max_depth = $max_depth;
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
        if (isset($this->max_depth)) {
            $output['max_depth'] = $this->max_depth;
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
        $projectId = urlencode($mapped['projectId']);
        return '/v2/projects/' . $projectId . '/filesystem/directories';
    }

    public function getQuery(): array
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
