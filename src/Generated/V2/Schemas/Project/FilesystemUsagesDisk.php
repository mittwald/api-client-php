<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Project;

use InvalidArgumentException;

class FilesystemUsagesDisk
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'path' => [
                'type' => 'string',
            ],
            'totalBytes' => [
                'type' => 'integer',
            ],
            'usedBytes' => [
                'type' => 'integer',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $path = null;

    /**
     * @var int|null
     */
    private ?int $totalBytes = null;

    /**
     * @var int|null
     */
    private ?int $usedBytes = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path ?? null;
    }

    /**
     * @return int|null
     */
    public function getTotalBytes(): ?int
    {
        return $this->totalBytes ?? null;
    }

    /**
     * @return int|null
     */
    public function getUsedBytes(): ?int
    {
        return $this->usedBytes ?? null;
    }

    /**
     * @param string $path
     * @return self
     */
    public function withPath(string $path): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($path, static::$schema['properties']['path']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->path = $path;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutPath(): self
    {
        $clone = clone $this;
        unset($clone->path);

        return $clone;
    }

    /**
     * @param int $totalBytes
     * @return self
     */
    public function withTotalBytes(int $totalBytes): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($totalBytes, static::$schema['properties']['totalBytes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->totalBytes = $totalBytes;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTotalBytes(): self
    {
        $clone = clone $this;
        unset($clone->totalBytes);

        return $clone;
    }

    /**
     * @param int $usedBytes
     * @return self
     */
    public function withUsedBytes(int $usedBytes): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($usedBytes, static::$schema['properties']['usedBytes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->usedBytes = $usedBytes;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutUsedBytes(): self
    {
        $clone = clone $this;
        unset($clone->usedBytes);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return FilesystemUsagesDisk Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): FilesystemUsagesDisk
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $path = null;
        if (isset($input->{'path'})) {
            $path = $input->{'path'};
        }
        $totalBytes = null;
        if (isset($input->{'totalBytes'})) {
            $totalBytes = (int)($input->{'totalBytes'});
        }
        $usedBytes = null;
        if (isset($input->{'usedBytes'})) {
            $usedBytes = (int)($input->{'usedBytes'});
        }

        $obj = new self();
        $obj->path = $path;
        $obj->totalBytes = $totalBytes;
        $obj->usedBytes = $usedBytes;
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
        if (isset($this->path)) {
            $output['path'] = $this->path;
        }
        if (isset($this->totalBytes)) {
            $output['totalBytes'] = $this->totalBytes;
        }
        if (isset($this->usedBytes)) {
            $output['usedBytes'] = $this->usedBytes;
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
    }
}
