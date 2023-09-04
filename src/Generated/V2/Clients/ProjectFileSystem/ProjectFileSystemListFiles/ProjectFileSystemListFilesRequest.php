<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemListFiles;

class ProjectFileSystemListFilesRequest
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
                'format' => 'uuid',
                'type' => 'string',
            ],
            'file' => [
                'example' => '/home/example.log',
                'type' => 'string',
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
    private ?string $file = null;

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
    public function getProjectId() : string
    {
        return $this->projectId;
    }

    /**
     * @return string|null
     */
    public function getFile() : ?string
    {
        return $this->file ?? null;
    }

    /**
     * @param string $projectId
     * @return self
     */
    public function withProjectId(string $projectId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * @param string $file
     * @return self
     */
    public function withFile(string $file) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($file, static::$schema['properties']['file']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->file = $file;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutFile() : self
    {
        $clone = clone $this;
        unset($clone->file);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ProjectFileSystemListFilesRequest Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : ProjectFileSystemListFilesRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectId = $input->{'projectId'};
        $file = null;
        if (isset($input->{'file'})) {
            $file = $input->{'file'};
        }

        $obj = new self($projectId);
        $obj->file = $file;
        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson() : array
    {
        $output = [];
        $output['projectId'] = $this->projectId;
        if (isset($this->file)) {
            $output['file'] = $this->file;
        }

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
    }

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        $projectId = urlencode($mapped['projectId']);
        return '/v2/projects/' . $projectId . '/filesystem/files';
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
        if (isset($mapped['file'])) {
            $query['file'] = $mapped['file'];
        }
        return $query;
    }

    public function getHeaders() : array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value) : self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}

