<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateRedisDatabaseConfiguration;

class UpdateRedisDatabaseConfigurationRequestBody
{
    public const method = 'patch';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'configuration' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.database.RedisDatabaseConfiguration',
            ],
        ],
    ];

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Database\RedisDatabaseConfiguration|null
     */
    private ?\Mittwald\ApiClient\Generated\V2\Schemas\Database\RedisDatabaseConfiguration $configuration = null;

    private array $headers = [
        
    ];

    /**
     *
     */
    public function __construct()
    {
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
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateRedisDatabaseConfigurationRequestBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : UpdateRedisDatabaseConfigurationRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $configuration = null;
        if (isset($input->{'configuration'})) {
            $configuration = \Mittwald\ApiClient\Generated\V2\Schemas\Database\RedisDatabaseConfiguration::buildFromInput($input->{'configuration'}, validate: $validate);
        }

        $obj = new self();
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
        $id = urlencode($mapped['id']);
        return '/v2/redis-databases/' . $id . '/configuration';
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

