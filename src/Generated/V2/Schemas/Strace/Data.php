<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Strace;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.strace.Data.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class Data
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'actualUrl' => [
                'example' => 'https://www.mittwald.de/~b',
                'type' => 'string',
            ],
            'dbQueries' => [
                'items' => [
                    'properties' => [
                        'query' => [
                            'description' => 'The whole DB query.',
                            'example' => 'SELECT * FROM my_table;',
                            'type' => 'string',
                        ],
                        'stats' => [
                            '$ref' => '#/components/schemas/de.mittwald.v1.strace.Statistics',
                        ],
                        'warnLevel' => [
                            'description' => 'Alerts when the time, syscall count or occurrence count of this group are abnormal.',
                            'enum' => [
                                'NO',
                                'WARN',
                                'SEVERE',
                            ],
                            'type' => 'string',
                        ],
                    ],
                    'required' => [
                        'query',
                        'stats',
                        'warnLevel',
                    ],
                    'type' => 'object',
                ],
                'type' => 'array',
            ],
            'dbStats' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.strace.Statistics',
            ],
            'fileOps' => [
                'items' => [
                    'properties' => [
                        'filename' => [
                            'example' => 'my_file.php',
                            'type' => 'string',
                        ],
                        'filepath' => [
                            'example' => '/html/my-project',
                            'type' => 'string',
                        ],
                        'stats' => [
                            '$ref' => '#/components/schemas/de.mittwald.v1.strace.Statistics',
                        ],
                        'warnLevel' => [
                            'description' => 'Alerts when the time, syscall count or occurrence count of this group are abnormal.',
                            'enum' => [
                                'NO',
                                'WARN',
                                'SEVERE',
                            ],
                            'type' => 'string',
                        ],
                    ],
                    'required' => [
                        'stats',
                        'warnLevel',
                    ],
                    'type' => 'object',
                ],
                'type' => 'array',
            ],
            'fileOpsStats' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.strace.Statistics',
            ],
            'miscStats' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.strace.Statistics',
            ],
            'networkingOps' => [
                'items' => [
                    'properties' => [
                        'connectionType' => [
                            'enum' => [
                                'UNKNOWN',
                                'PRIVATE',
                                'EXTERNAL',
                            ],
                            'type' => 'string',
                        ],
                        'description' => [
                            'description' => 'A short description of the network connection to provide additional context.',
                            'type' => 'string',
                        ],
                        'ip' => [
                            'description' => 'IP address to which a connection was established.',
                            'type' => 'string',
                        ],
                        'port' => [
                            'description' => 'Port to which a connection was established.',
                            'type' => 'integer',
                        ],
                        'stats' => [
                            '$ref' => '#/components/schemas/de.mittwald.v1.strace.Statistics',
                        ],
                        'warnLevel' => [
                            'description' => 'Alerts when the time, syscall count or occurrence count of this group are abnormal.',
                            'enum' => [
                                'NO',
                                'WARN',
                                'SEVERE',
                            ],
                            'type' => 'string',
                        ],
                    ],
                    'required' => [
                        'ip',
                        'port',
                        'description',
                        'connectionType',
                        'stats',
                        'warnLevel',
                    ],
                    'type' => 'object',
                ],
                'type' => 'array',
            ],
            'networkingStats' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.strace.Statistics',
            ],
            'slowdownFactor' => [
                'description' => 'Shows how much slower the websites TTFB was when it got traced (1.0 = 100% = same TTFB).',
                'example' => 1.5,
                'type' => 'number',
            ],
            'ttfbMs' => [
                'description' => 'Time to first byte in milliseconds while tracing the website.',
                'example' => 1532,
                'type' => 'integer',
            ],
        ],
        'required' => [
            'actualUrl',
            'ttfbMs',
            'slowdownFactor',
            'fileOpsStats',
            'networkingStats',
            'dbStats',
            'miscStats',
            'fileOps',
            'networkingOps',
            'dbQueries',
        ],
        'type' => 'object',
    ];

    private string $actualUrl;

    /**
     * @var DataDbQueriesItem[]
     */
    private array $dbQueries;

    private Statistics $dbStats;

    /**
     * @var DataFileOpsItem[]
     */
    private array $fileOps;

    private Statistics $fileOpsStats;

    private Statistics $miscStats;

    /**
     * @var DataNetworkingOpsItem[]
     */
    private array $networkingOps;

    private Statistics $networkingStats;

    /**
     * Shows how much slower the websites TTFB was when it got traced (1.0 = 100% = same TTFB).
     */
    private int|float $slowdownFactor;

    /**
     * Time to first byte in milliseconds while tracing the website.
     */
    private int $ttfbMs;

    /**
     * @param DataDbQueriesItem[] $dbQueries
     * @param DataFileOpsItem[] $fileOps
     * @param DataNetworkingOpsItem[] $networkingOps
     * @param int|float $slowdownFactor
     */
    public function __construct(string $actualUrl, array $dbQueries, Statistics $dbStats, array $fileOps, Statistics $fileOpsStats, Statistics $miscStats, array $networkingOps, Statistics $networkingStats, int|float $slowdownFactor, int $ttfbMs)
    {
        $this->actualUrl = $actualUrl;
        $this->dbQueries = $dbQueries;
        $this->dbStats = $dbStats;
        $this->fileOps = $fileOps;
        $this->fileOpsStats = $fileOpsStats;
        $this->miscStats = $miscStats;
        $this->networkingOps = $networkingOps;
        $this->networkingStats = $networkingStats;
        $this->slowdownFactor = $slowdownFactor;
        $this->ttfbMs = $ttfbMs;
    }

    public function getActualUrl(): string
    {
        return $this->actualUrl;
    }

    /**
     * @return DataDbQueriesItem[]
     */
    public function getDbQueries(): array
    {
        return $this->dbQueries;
    }

    public function getDbStats(): Statistics
    {
        return $this->dbStats;
    }

    /**
     * @return DataFileOpsItem[]
     */
    public function getFileOps(): array
    {
        return $this->fileOps;
    }

    public function getFileOpsStats(): Statistics
    {
        return $this->fileOpsStats;
    }

    public function getMiscStats(): Statistics
    {
        return $this->miscStats;
    }

    /**
     * @return DataNetworkingOpsItem[]
     */
    public function getNetworkingOps(): array
    {
        return $this->networkingOps;
    }

    public function getNetworkingStats(): Statistics
    {
        return $this->networkingStats;
    }

    public function getSlowdownFactor(): int|float
    {
        return $this->slowdownFactor;
    }

    public function getTtfbMs(): int
    {
        return $this->ttfbMs;
    }

    public function withActualUrl(string $actualUrl): self
    {
        $validator = new Validator();
        $validator->validate($actualUrl, static::$schema['properties']['actualUrl']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->actualUrl = $actualUrl;

        return $clone;
    }

    /**
     * @param DataDbQueriesItem[] $dbQueries
     */
    public function withDbQueries(array $dbQueries): self
    {
        $clone = clone $this;
        $clone->dbQueries = $dbQueries;

        return $clone;
    }

    public function withDbStats(Statistics $dbStats): self
    {
        $clone = clone $this;
        $clone->dbStats = $dbStats;

        return $clone;
    }

    /**
     * @param DataFileOpsItem[] $fileOps
     */
    public function withFileOps(array $fileOps): self
    {
        $clone = clone $this;
        $clone->fileOps = $fileOps;

        return $clone;
    }

    public function withFileOpsStats(Statistics $fileOpsStats): self
    {
        $clone = clone $this;
        $clone->fileOpsStats = $fileOpsStats;

        return $clone;
    }

    public function withMiscStats(Statistics $miscStats): self
    {
        $clone = clone $this;
        $clone->miscStats = $miscStats;

        return $clone;
    }

    /**
     * @param DataNetworkingOpsItem[] $networkingOps
     */
    public function withNetworkingOps(array $networkingOps): self
    {
        $clone = clone $this;
        $clone->networkingOps = $networkingOps;

        return $clone;
    }

    public function withNetworkingStats(Statistics $networkingStats): self
    {
        $clone = clone $this;
        $clone->networkingStats = $networkingStats;

        return $clone;
    }

    /**
     * @param int|float $slowdownFactor
     */
    public function withSlowdownFactor(int|float $slowdownFactor): self
    {
        $validator = new Validator();
        $validator->validate($slowdownFactor, static::$schema['properties']['slowdownFactor']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->slowdownFactor = $slowdownFactor;

        return $clone;
    }

    public function withTtfbMs(int $ttfbMs): self
    {
        $validator = new Validator();
        $validator->validate($ttfbMs, static::$schema['properties']['ttfbMs']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->ttfbMs = $ttfbMs;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Data Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Data
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $actualUrl = $input->{'actualUrl'};
        $dbQueries = array_map(fn (array|object $i): DataDbQueriesItem => DataDbQueriesItem::buildFromInput($i, validate: $validate), $input->{'dbQueries'});
        $dbStats = Statistics::buildFromInput($input->{'dbStats'}, validate: $validate);
        $fileOps = array_map(fn (array|object $i): DataFileOpsItem => DataFileOpsItem::buildFromInput($i, validate: $validate), $input->{'fileOps'});
        $fileOpsStats = Statistics::buildFromInput($input->{'fileOpsStats'}, validate: $validate);
        $miscStats = Statistics::buildFromInput($input->{'miscStats'}, validate: $validate);
        $networkingOps = array_map(fn (array|object $i): DataNetworkingOpsItem => DataNetworkingOpsItem::buildFromInput($i, validate: $validate), $input->{'networkingOps'});
        $networkingStats = Statistics::buildFromInput($input->{'networkingStats'}, validate: $validate);
        $slowdownFactor = str_contains($input->{'slowdownFactor'}, '.') ? (float)($input->{'slowdownFactor'}) : (int)($input->{'slowdownFactor'});
        $ttfbMs = (int)($input->{'ttfbMs'});

        $obj = new self($actualUrl, $dbQueries, $dbStats, $fileOps, $fileOpsStats, $miscStats, $networkingOps, $networkingStats, $slowdownFactor, $ttfbMs);

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
        $output['actualUrl'] = $this->actualUrl;
        $output['dbQueries'] = array_map(fn (DataDbQueriesItem $i) => $i->toJson(), $this->dbQueries);
        $output['dbStats'] = $this->dbStats->toJson();
        $output['fileOps'] = array_map(fn (DataFileOpsItem $i) => $i->toJson(), $this->fileOps);
        $output['fileOpsStats'] = $this->fileOpsStats->toJson();
        $output['miscStats'] = $this->miscStats->toJson();
        $output['networkingOps'] = array_map(fn (DataNetworkingOpsItem $i) => $i->toJson(), $this->networkingOps);
        $output['networkingStats'] = $this->networkingStats->toJson();
        $output['slowdownFactor'] = $this->slowdownFactor;
        $output['ttfbMs'] = $this->ttfbMs;

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
        $this->dbQueries = array_map(fn (DataDbQueriesItem $i) => clone $i, $this->dbQueries);
        $this->fileOps = array_map(fn (DataFileOpsItem $i) => clone $i, $this->fileOps);
        $this->networkingOps = array_map(fn (DataNetworkingOpsItem $i) => clone $i, $this->networkingOps);
    }
}
