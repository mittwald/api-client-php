<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackup;

class GetProjectBackupRequest
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
            'projectBackupId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'projectBackupId',
        ],
    ];

    /**
     * @var string
     */
    private string $projectBackupId;

    private array $headers = [
        
    ];

    /**
     * @param string $projectBackupId
     */
    public function __construct(string $projectBackupId)
    {
        $this->projectBackupId = $projectBackupId;
    }

    /**
     * @return string
     */
    public function getProjectBackupId() : string
    {
        return $this->projectBackupId;
    }

    /**
     * @param string $projectBackupId
     * @return self
     */
    public function withProjectBackupId(string $projectBackupId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($projectBackupId, static::$schema['properties']['projectBackupId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectBackupId = $projectBackupId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetProjectBackupRequest Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : GetProjectBackupRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectBackupId = $input->{'projectBackupId'};

        $obj = new self($projectBackupId);

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
        $output['projectBackupId'] = $this->projectBackupId;

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
        $projectBackupId = urlencode($mapped['projectBackupId']);
        return '/v2/project-backups/' . $projectBackupId;
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
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

