<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Database\CreateRedisDatabase;

class CreateRedisDatabaseRequestBody
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'example' => [
            'description' => 'My first RedisDatabase!',
            'version' => '7.0',
        ],
        'properties' => [
            'configuration' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.database.RedisDatabaseConfiguration',
            ],
            'description' => [
                'description' => 'A description for the database.',
                'type' => 'string',
            ],
            'version' => [
                'description' => 'The version the database should use.',
                'type' => 'string',
            ],
        ],
        'required' => [
            'description',
            'version',
        ],
        'type' => 'object',
    ];

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Database\RedisDatabaseConfiguration|null
     */
    private ?\Mittwald\ApiClient\Generated\V2\Schemas\Database\RedisDatabaseConfiguration $configuration = null;

    /**
     * A description for the database.
     *
     * @var string
     */
    private string $description;

    /**
     * The version the database should use.
     *
     * @var string
     */
    private string $version;

    private array $headers = [
        
    ];

    /**
     * @param string $description
     * @param string $version
     */
    public function __construct(string $description, string $version)
    {
        $this->description = $description;
        $this->version = $version;
    }

    /**
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\Database\RedisDatabaseConfiguration|null
     */
    public function getConfiguration() : ?\Mittwald\ApiClient\Generated\V2\Schemas\Database\RedisDatabaseConfiguration
    {
        return $this->configuration ?? null;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Database\RedisDatabaseConfiguration $configuration
     * @return self
     */
    public function withConfiguration(\Mittwald\ApiClient\Generated\V2\Schemas\Database\RedisDatabaseConfiguration $configuration) : self
    {
        $clone = clone $this;
        $clone->configuration = $configuration;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutConfiguration() : self
    {
        $clone = clone $this;
        unset($clone->configuration);

        return $clone;
    }

    /**
     * @param string $description
     * @return self
     */
    public function withDescription(string $description) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @param string $version
     * @return self
     */
    public function withVersion(string $version) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($version, static::$schema['properties']['version']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->version = $version;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateRedisDatabaseRequestBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : CreateRedisDatabaseRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $configuration = null;
        if (isset($input->{'configuration'})) {
            $configuration = \Mittwald\ApiClient\Generated\V2\Schemas\Database\RedisDatabaseConfiguration::buildFromInput($input->{'configuration'}, validate: $validate);
        }
        $description = $input->{'description'};
        $version = $input->{'version'};

        $obj = new self($description, $version);
        $obj->configuration = $configuration;
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
        if (isset($this->configuration)) {
            $output['configuration'] = $this->configuration->toJson();
        }
        $output['description'] = $this->description;
        $output['version'] = $this->version;

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
        return '/v2/projects/' . $projectId . '/redis-databases';
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

