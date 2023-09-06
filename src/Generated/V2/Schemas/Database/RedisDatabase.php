<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Database;

use InvalidArgumentException;
use DateTime;

class RedisDatabase
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'example' => [
            'configuration' => [
                'additionalFlags' => [
                    '--tcp-keepalive',
                    '300',
                ],
                'maxMemory' => '16Mi',
                'maxMemoryPolicy' => 'allkeys-lru',
                'persistent' => 'true',
            ],
            'createdAt' => '2023-03-28T13:15:00.000Z',
            'description' => 'My first RedisDatabase!',
            'finalizers' => [
                'app:appinstallation:28471edf-d266-4d79-8ca8-169e330746db',
            ],
            'hostname' => 'redis-xxxxxx.pg-example.db.example.com',
            'id' => 'fcfe9aea-84d5-46eb-ac6f-a0ccffa908b1',
            'name' => 'redis_xxxxxx',
            'port' => 6379,
            'projectId' => '9f2bddf1-dea6-4441-b4fe-a22ff39caff8',
            'updatedAt' => '2023-03-29T15:50:10.000Z',
            'version' => '7.0',
        ],
        'properties' => [
            'configuration' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.database.RedisDatabaseConfiguration',
            ],
            'createdAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'description' => [
                'type' => 'string',
            ],
            'finalizers' => [
                'items' => [
                    'minLength' => 1,
                    'type' => 'string',
                ],
                'type' => 'array',
                'uniqueItems' => true,
            ],
            'hostname' => [
                'type' => 'string',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'name' => [
                'type' => 'string',
            ],
            'port' => [
                'type' => 'integer',
            ],
            'projectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'updatedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'version' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'projectId',
            'version',
            'hostname',
            'port',
            'description',
            'finalizers',
            'createdAt',
            'updatedAt',
            'name',
        ],
        'type' => 'object',
    ];

    /**
     * @var RedisDatabaseConfiguration|null
     */
    private ?RedisDatabaseConfiguration $configuration = null;

    /**
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var string[]
     */
    private array $finalizers;

    /**
     * @var string
     */
    private string $hostname;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var int
     */
    private int $port;

    /**
     * @var string
     */
    private string $projectId;

    /**
     * @var DateTime
     */
    private DateTime $updatedAt;

    /**
     * @var string
     */
    private string $version;

    /**
     * @param DateTime $createdAt
     * @param string $description
     * @param string[] $finalizers
     * @param string $hostname
     * @param string $id
     * @param string $name
     * @param int $port
     * @param string $projectId
     * @param DateTime $updatedAt
     * @param string $version
     */
    public function __construct(DateTime $createdAt, string $description, array $finalizers, string $hostname, string $id, string $name, int $port, string $projectId, DateTime $updatedAt, string $version)
    {
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->finalizers = $finalizers;
        $this->hostname = $hostname;
        $this->id = $id;
        $this->name = $name;
        $this->port = $port;
        $this->projectId = $projectId;
        $this->updatedAt = $updatedAt;
        $this->version = $version;
    }

    /**
     * @return
     * RedisDatabaseConfiguration|null
     */
    public function getConfiguration(): ?RedisDatabaseConfiguration
    {
        return $this->configuration ?? null;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string[]
     */
    public function getFinalizers(): array
    {
        return $this->finalizers;
    }

    /**
     * @return string
     */
    public function getHostname(): string
    {
        return $this->hostname;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param RedisDatabaseConfiguration $configuration
     * @return self
     */
    public function withConfiguration(RedisDatabaseConfiguration $configuration): self
    {
        $clone = clone $this;
        $clone->configuration = $configuration;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutConfiguration(): self
    {
        $clone = clone $this;
        unset($clone->configuration);

        return $clone;
    }

    /**
     * @param DateTime $createdAt
     * @return self
     */
    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

    /**
     * @param string $description
     * @return self
     */
    public function withDescription(string $description): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @param string[] $finalizers
     * @return self
     */
    public function withFinalizers(array $finalizers): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($finalizers, static::$schema['properties']['finalizers']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->finalizers = $finalizers;

        return $clone;
    }

    /**
     * @param string $hostname
     * @return self
     */
    public function withHostname(string $hostname): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($hostname, static::$schema['properties']['hostname']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->hostname = $hostname;

        return $clone;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

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
     * @param int $port
     * @return self
     */
    public function withPort(int $port): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($port, static::$schema['properties']['port']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->port = $port;

        return $clone;
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
     * @param DateTime $updatedAt
     * @return self
     */
    public function withUpdatedAt(DateTime $updatedAt): self
    {
        $clone = clone $this;
        $clone->updatedAt = $updatedAt;

        return $clone;
    }

    /**
     * @param string $version
     * @return self
     */
    public function withVersion(string $version): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($version, static::$schema['properties']['version']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
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
     * @return RedisDatabase Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RedisDatabase
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $configuration = null;
        if (isset($input->{'configuration'})) {
            $configuration = RedisDatabaseConfiguration::buildFromInput($input->{'configuration'}, validate: $validate);
        }
        $createdAt = new DateTime($input->{'createdAt'});
        $description = $input->{'description'};
        $finalizers = $input->{'finalizers'};
        $hostname = $input->{'hostname'};
        $id = $input->{'id'};
        $name = $input->{'name'};
        $port = (int)($input->{'port'});
        $projectId = $input->{'projectId'};
        $updatedAt = new DateTime($input->{'updatedAt'});
        $version = $input->{'version'};

        $obj = new self($createdAt, $description, $finalizers, $hostname, $id, $name, $port, $projectId, $updatedAt, $version);
        $obj->configuration = $configuration;
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
        if (isset($this->configuration)) {
            $output['configuration'] = $this->configuration->toJson();
        }
        $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        $output['description'] = $this->description;
        $output['finalizers'] = $this->finalizers;
        $output['hostname'] = $this->hostname;
        $output['id'] = $this->id;
        $output['name'] = $this->name;
        $output['port'] = $this->port;
        $output['projectId'] = $this->projectId;
        $output['updatedAt'] = ($this->updatedAt)->format(DateTime::ATOM);
        $output['version'] = $this->version;

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
        $this->createdAt = clone $this->createdAt;
        $this->updatedAt = clone $this->updatedAt;
    }
}
