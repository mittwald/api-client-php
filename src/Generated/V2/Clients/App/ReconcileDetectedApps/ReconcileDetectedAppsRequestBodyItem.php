<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\ReconcileDetectedApps;

use InvalidArgumentException;
use JsonSchema\Validator;

class ReconcileDetectedAppsRequestBodyItem
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'appName' => [
                'type' => 'string',
            ],
            'appVersionClusterVersion' => [
                'type' => 'string',
            ],
            'databaseHost' => [
                'type' => 'string',
            ],
            'databaseUserName' => [
                'type' => 'string',
            ],
            'installationDirectory' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'installationDirectory',
            'appName',
            'appVersionClusterVersion',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $appName;

    /**
     * @var string
     */
    private string $appVersionClusterVersion;

    /**
     * @var string|null
     */
    private ?string $databaseHost = null;

    /**
     * @var string|null
     */
    private ?string $databaseUserName = null;

    /**
     * @var string
     */
    private string $installationDirectory;

    private array $headers = [

    ];

    /**
     * @param string $appName
     * @param string $appVersionClusterVersion
     * @param string $installationDirectory
     */
    public function __construct(string $appName, string $appVersionClusterVersion, string $installationDirectory)
    {
        $this->appName = $appName;
        $this->appVersionClusterVersion = $appVersionClusterVersion;
        $this->installationDirectory = $installationDirectory;
    }

    /**
     * @return string
     */
    public function getAppName(): string
    {
        return $this->appName;
    }

    /**
     * @return string
     */
    public function getAppVersionClusterVersion(): string
    {
        return $this->appVersionClusterVersion;
    }

    /**
     * @return string|null
     */
    public function getDatabaseHost(): ?string
    {
        return $this->databaseHost ?? null;
    }

    /**
     * @return string|null
     */
    public function getDatabaseUserName(): ?string
    {
        return $this->databaseUserName ?? null;
    }

    /**
     * @return string
     */
    public function getInstallationDirectory(): string
    {
        return $this->installationDirectory;
    }

    /**
     * @param string $appName
     * @return self
     */
    public function withAppName(string $appName): self
    {
        $validator = new Validator();
        $validator->validate($appName, static::$schema['properties']['appName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->appName = $appName;

        return $clone;
    }

    /**
     * @param string $appVersionClusterVersion
     * @return self
     */
    public function withAppVersionClusterVersion(string $appVersionClusterVersion): self
    {
        $validator = new Validator();
        $validator->validate($appVersionClusterVersion, static::$schema['properties']['appVersionClusterVersion']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->appVersionClusterVersion = $appVersionClusterVersion;

        return $clone;
    }

    /**
     * @param string $databaseHost
     * @return self
     */
    public function withDatabaseHost(string $databaseHost): self
    {
        $validator = new Validator();
        $validator->validate($databaseHost, static::$schema['properties']['databaseHost']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->databaseHost = $databaseHost;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDatabaseHost(): self
    {
        $clone = clone $this;
        unset($clone->databaseHost);

        return $clone;
    }

    /**
     * @param string $databaseUserName
     * @return self
     */
    public function withDatabaseUserName(string $databaseUserName): self
    {
        $validator = new Validator();
        $validator->validate($databaseUserName, static::$schema['properties']['databaseUserName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->databaseUserName = $databaseUserName;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDatabaseUserName(): self
    {
        $clone = clone $this;
        unset($clone->databaseUserName);

        return $clone;
    }

    /**
     * @param string $installationDirectory
     * @return self
     */
    public function withInstallationDirectory(string $installationDirectory): self
    {
        $validator = new Validator();
        $validator->validate($installationDirectory, static::$schema['properties']['installationDirectory']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->installationDirectory = $installationDirectory;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ReconcileDetectedAppsRequestBodyItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ReconcileDetectedAppsRequestBodyItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $appName = $input->{'appName'};
        $appVersionClusterVersion = $input->{'appVersionClusterVersion'};
        $databaseHost = null;
        if (isset($input->{'databaseHost'})) {
            $databaseHost = $input->{'databaseHost'};
        }
        $databaseUserName = null;
        if (isset($input->{'databaseUserName'})) {
            $databaseUserName = $input->{'databaseUserName'};
        }
        $installationDirectory = $input->{'installationDirectory'};

        $obj = new self($appName, $appVersionClusterVersion, $installationDirectory);
        $obj->databaseHost = $databaseHost;
        $obj->databaseUserName = $databaseUserName;
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
        $output['appName'] = $this->appName;
        $output['appVersionClusterVersion'] = $this->appVersionClusterVersion;
        if (isset($this->databaseHost)) {
            $output['databaseHost'] = $this->databaseHost;
        }
        if (isset($this->databaseUserName)) {
            $output['databaseUserName'] = $this->databaseUserName;
        }
        $output['installationDirectory'] = $this->installationDirectory;

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
        $projectShortId = urlencode($mapped['projectShortId']);
        return '/v2/projects/' . $projectShortId . '/appinstallations';
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
