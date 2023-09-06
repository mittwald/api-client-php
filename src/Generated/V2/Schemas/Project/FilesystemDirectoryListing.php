<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Project;

use InvalidArgumentException;

class FilesystemDirectoryListing
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'absolutePath' => [
                'type' => 'string',
            ],
            'isDirectory' => [
                'type' => 'boolean',
            ],
            'isExecutable' => [
                'type' => 'boolean',
            ],
            'isFile' => [
                'type' => 'boolean',
            ],
            'isSymlink' => [
                'type' => 'boolean',
            ],
            'items' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.project.FilesystemDirectoryListing',
                ],
                'type' => 'array',
            ],
            'name' => [
                'type' => 'string',
            ],
            'size' => [
                'type' => 'integer',
            ],
            'target' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'absolutePath',
            'name',
            'size',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $absolutePath;

    /**
     * @var bool|null
     */
    private ?bool $isDirectory = null;

    /**
     * @var bool|null
     */
    private ?bool $isExecutable = null;

    /**
     * @var bool|null
     */
    private ?bool $isFile = null;

    /**
     * @var bool|null
     */
    private ?bool $isSymlink = null;

    /**
     * @var FilesystemDirectoryListing[]|null
     */
    private ?array $items = null;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var int
     */
    private int $size;

    /**
     * @var string|null
     */
    private ?string $target = null;

    /**
     * @param string $absolutePath
     * @param string $name
     * @param int $size
     */
    public function __construct(string $absolutePath, string $name, int $size)
    {
        $this->absolutePath = $absolutePath;
        $this->name = $name;
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getAbsolutePath(): string
    {
        return $this->absolutePath;
    }

    /**
     * @return bool|null
     */
    public function getIsDirectory(): ?bool
    {
        return $this->isDirectory ?? null;
    }

    /**
     * @return bool|null
     */
    public function getIsExecutable(): ?bool
    {
        return $this->isExecutable ?? null;
    }

    /**
     * @return bool|null
     */
    public function getIsFile(): ?bool
    {
        return $this->isFile ?? null;
    }

    /**
     * @return bool|null
     */
    public function getIsSymlink(): ?bool
    {
        return $this->isSymlink ?? null;
    }

    /**
     * @return
     * FilesystemDirectoryListing[]|null
     */
    public function getItems(): ?array
    {
        return $this->items ?? null;
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
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @return string|null
     */
    public function getTarget(): ?string
    {
        return $this->target ?? null;
    }

    /**
     * @param string $absolutePath
     * @return self
     */
    public function withAbsolutePath(string $absolutePath): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($absolutePath, static::$schema['properties']['absolutePath']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->absolutePath = $absolutePath;

        return $clone;
    }

    /**
     * @param bool $isDirectory
     * @return self
     */
    public function withIsDirectory(bool $isDirectory): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($isDirectory, static::$schema['properties']['isDirectory']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isDirectory = $isDirectory;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutIsDirectory(): self
    {
        $clone = clone $this;
        unset($clone->isDirectory);

        return $clone;
    }

    /**
     * @param bool $isExecutable
     * @return self
     */
    public function withIsExecutable(bool $isExecutable): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($isExecutable, static::$schema['properties']['isExecutable']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isExecutable = $isExecutable;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutIsExecutable(): self
    {
        $clone = clone $this;
        unset($clone->isExecutable);

        return $clone;
    }

    /**
     * @param bool $isFile
     * @return self
     */
    public function withIsFile(bool $isFile): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($isFile, static::$schema['properties']['isFile']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isFile = $isFile;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutIsFile(): self
    {
        $clone = clone $this;
        unset($clone->isFile);

        return $clone;
    }

    /**
     * @param bool $isSymlink
     * @return self
     */
    public function withIsSymlink(bool $isSymlink): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($isSymlink, static::$schema['properties']['isSymlink']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isSymlink = $isSymlink;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutIsSymlink(): self
    {
        $clone = clone $this;
        unset($clone->isSymlink);

        return $clone;
    }

    /**
     * @param FilesystemDirectoryListing[] $items
     * @return self
     */
    public function withItems(array $items): self
    {
        $clone = clone $this;
        $clone->items = $items;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutItems(): self
    {
        $clone = clone $this;
        unset($clone->items);

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
     * @param int $size
     * @return self
     */
    public function withSize(int $size): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($size, static::$schema['properties']['size']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->size = $size;

        return $clone;
    }

    /**
     * @param string $target
     * @return self
     */
    public function withTarget(string $target): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($target, static::$schema['properties']['target']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->target = $target;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTarget(): self
    {
        $clone = clone $this;
        unset($clone->target);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return FilesystemDirectoryListing Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): FilesystemDirectoryListing
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $absolutePath = $input->{'absolutePath'};
        $isDirectory = null;
        if (isset($input->{'isDirectory'})) {
            $isDirectory = (bool)($input->{'isDirectory'});
        }
        $isExecutable = null;
        if (isset($input->{'isExecutable'})) {
            $isExecutable = (bool)($input->{'isExecutable'});
        }
        $isFile = null;
        if (isset($input->{'isFile'})) {
            $isFile = (bool)($input->{'isFile'});
        }
        $isSymlink = null;
        if (isset($input->{'isSymlink'})) {
            $isSymlink = (bool)($input->{'isSymlink'});
        }
        $items = null;
        if (isset($input->{'items'})) {
            $items = array_map(fn (array $i): FilesystemDirectoryListing => FilesystemDirectoryListing::buildFromInput($i, validate: $validate), $input->{'items'});
        }
        $name = $input->{'name'};
        $size = (int)($input->{'size'});
        $target = null;
        if (isset($input->{'target'})) {
            $target = $input->{'target'};
        }

        $obj = new self($absolutePath, $name, $size);
        $obj->isDirectory = $isDirectory;
        $obj->isExecutable = $isExecutable;
        $obj->isFile = $isFile;
        $obj->isSymlink = $isSymlink;
        $obj->items = $items;
        $obj->target = $target;
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
        $output['absolutePath'] = $this->absolutePath;
        if (isset($this->isDirectory)) {
            $output['isDirectory'] = $this->isDirectory;
        }
        if (isset($this->isExecutable)) {
            $output['isExecutable'] = $this->isExecutable;
        }
        if (isset($this->isFile)) {
            $output['isFile'] = $this->isFile;
        }
        if (isset($this->isSymlink)) {
            $output['isSymlink'] = $this->isSymlink;
        }
        if (isset($this->items)) {
            $output['items'] = array_map(fn (FilesystemDirectoryListing $i): array => $i->toJson(), $this->items);
        }
        $output['name'] = $this->name;
        $output['size'] = $this->size;
        if (isset($this->target)) {
            $output['target'] = $this->target;
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
