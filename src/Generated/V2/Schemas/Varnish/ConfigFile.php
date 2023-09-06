<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Varnish;

use InvalidArgumentException;

class ConfigFile
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'content' => [
                'format' => 'bytes',
                'type' => 'string',
            ],
            'meta' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.varnish.ConfigFileMetadata',
            ],
        ],
        'required' => [
            'content',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $content;

    /**
     * @var ConfigFileMetadata|null
     */
    private ?ConfigFileMetadata $meta = null;

    /**
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return ConfigFileMetadata|null
     */
    public function getMeta(): ?ConfigFileMetadata
    {
        return $this->meta ?? null;
    }

    /**
     * @param string $content
     * @return self
     */
    public function withContent(string $content): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($content, static::$schema['properties']['content']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->content = $content;

        return $clone;
    }

    /**
     * @param ConfigFileMetadata $meta
     * @return self
     */
    public function withMeta(ConfigFileMetadata $meta): self
    {
        $clone = clone $this;
        $clone->meta = $meta;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMeta(): self
    {
        $clone = clone $this;
        unset($clone->meta);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ConfigFile Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ConfigFile
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $content = $input->{'content'};
        $meta = null;
        if (isset($input->{'meta'})) {
            $meta = ConfigFileMetadata::buildFromInput($input->{'meta'}, validate: $validate);
        }

        $obj = new self($content);
        $obj->meta = $meta;
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
        $output['content'] = $this->content;
        if (isset($this->meta)) {
            $output['meta'] = $this->meta->toJson();
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
