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
class DataDbQueriesItem
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
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
    ];

    /**
     * The whole DB query.
     */
    private string $query;

    private Statistics $stats;

    /**
     * Alerts when the time, syscall count or occurrence count of this group are abnormal.
     */
    private DataDbQueriesItemWarnLevel $warnLevel;

    public function __construct(string $query, Statistics $stats, DataDbQueriesItemWarnLevel $warnLevel)
    {
        $this->query = $query;
        $this->stats = $stats;
        $this->warnLevel = $warnLevel;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getStats(): Statistics
    {
        return $this->stats;
    }

    public function getWarnLevel(): DataDbQueriesItemWarnLevel
    {
        return $this->warnLevel;
    }

    public function withQuery(string $query): self
    {
        $validator = new Validator();
        $validator->validate($query, static::$schema['properties']['query']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->query = $query;

        return $clone;
    }

    public function withStats(Statistics $stats): self
    {
        $clone = clone $this;
        $clone->stats = $stats;

        return $clone;
    }

    public function withWarnLevel(DataDbQueriesItemWarnLevel $warnLevel): self
    {
        $clone = clone $this;
        $clone->warnLevel = $warnLevel;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DataDbQueriesItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DataDbQueriesItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $query = $input->{'query'};
        $stats = Statistics::buildFromInput($input->{'stats'}, validate: $validate);
        $warnLevel = DataDbQueriesItemWarnLevel::from($input->{'warnLevel'});

        $obj = new self($query, $stats, $warnLevel);

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
        $output['query'] = $this->query;
        $output['stats'] = $this->stats->toJson();
        $output['warnLevel'] = ($this->warnLevel)->value;

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
}
