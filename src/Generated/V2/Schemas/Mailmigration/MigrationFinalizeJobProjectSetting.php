<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mailmigration;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for
 * de.mittwald.v1.mailmigration.MigrationFinalizeJobProjectSetting.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class MigrationFinalizeJobProjectSetting
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'blacklistEntries' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'whitelistEntries' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'blacklistEntries',
            'whitelistEntries',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]
     */
    private array $blacklistEntries;

    /**
     * @var string[]
     */
    private array $whitelistEntries;

    /**
     * @param string[] $blacklistEntries
     * @param string[] $whitelistEntries
     */
    public function __construct(array $blacklistEntries, array $whitelistEntries)
    {
        $this->blacklistEntries = $blacklistEntries;
        $this->whitelistEntries = $whitelistEntries;
    }

    /**
     * @return string[]
     */
    public function getBlacklistEntries(): array
    {
        return $this->blacklistEntries;
    }

    /**
     * @return string[]
     */
    public function getWhitelistEntries(): array
    {
        return $this->whitelistEntries;
    }

    /**
     * @param string[] $blacklistEntries
     * @return self
     */
    public function withBlacklistEntries(array $blacklistEntries): self
    {
        $validator = new Validator();
        $validator->validate($blacklistEntries, static::$schema['properties']['blacklistEntries']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->blacklistEntries = $blacklistEntries;

        return $clone;
    }

    /**
     * @param string[] $whitelistEntries
     * @return self
     */
    public function withWhitelistEntries(array $whitelistEntries): self
    {
        $validator = new Validator();
        $validator->validate($whitelistEntries, static::$schema['properties']['whitelistEntries']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->whitelistEntries = $whitelistEntries;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MigrationFinalizeJobProjectSetting Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MigrationFinalizeJobProjectSetting
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $blacklistEntries = $input->{'blacklistEntries'};
        $whitelistEntries = $input->{'whitelistEntries'};

        $obj = new self($blacklistEntries, $whitelistEntries);

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
        $output['blacklistEntries'] = $this->blacklistEntries;
        $output['whitelistEntries'] = $this->whitelistEntries;

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
}