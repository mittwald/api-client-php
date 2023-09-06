<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Backup;

use InvalidArgumentException;
use DateTime;

class BackupTemplate
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'expirationTime' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'ignoredSources' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.backup.IgnoredSources',
            ],
        ],
        'required' => [
            'expirationTime',
        ],
        'type' => 'object',
    ];

    /**
     * @var DateTime
     */
    private DateTime $expirationTime;

    /**
     * @var IgnoredSources|null
     */
    private ?IgnoredSources $ignoredSources = null;

    /**
     * @param DateTime $expirationTime
     */
    public function __construct(DateTime $expirationTime)
    {
        $this->expirationTime = $expirationTime;
    }

    /**
     * @return DateTime
     */
    public function getExpirationTime(): DateTime
    {
        return $this->expirationTime;
    }

    /**
     * @return IgnoredSources|null
     */
    public function getIgnoredSources(): ?IgnoredSources
    {
        return $this->ignoredSources ?? null;
    }

    /**
     * @param DateTime $expirationTime
     * @return self
     */
    public function withExpirationTime(DateTime $expirationTime): self
    {
        $clone = clone $this;
        $clone->expirationTime = $expirationTime;

        return $clone;
    }

    /**
     * @param IgnoredSources $ignoredSources
     * @return self
     */
    public function withIgnoredSources(IgnoredSources $ignoredSources): self
    {
        $clone = clone $this;
        $clone->ignoredSources = $ignoredSources;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutIgnoredSources(): self
    {
        $clone = clone $this;
        unset($clone->ignoredSources);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return BackupTemplate Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): BackupTemplate
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $expirationTime = new DateTime($input->{'expirationTime'});
        $ignoredSources = null;
        if (isset($input->{'ignoredSources'})) {
            $ignoredSources = IgnoredSources::buildFromInput($input->{'ignoredSources'}, validate: $validate);
        }

        $obj = new self($expirationTime);
        $obj->ignoredSources = $ignoredSources;
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
        $output['expirationTime'] = ($this->expirationTime)->format(DateTime::ATOM);
        if (isset($this->ignoredSources)) {
            $output['ignoredSources'] = $this->ignoredSources->toJson();
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
        $this->expirationTime = clone $this->expirationTime;
    }
}
