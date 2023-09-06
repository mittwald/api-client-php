<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\File;

use InvalidArgumentException;

class FileMeta
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'friendlyURL' => [
                'example' => '3fa85f64-5717-4562-b3fc-2c963f66afa6/me.jpeg',
                'type' => 'string',
            ],
            'id' => [
                'example' => '3fa85f64-5717-4562-b3fc-2c963f66afa6',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'name' => [
                'example' => 'me.jpeg',
                'type' => 'string',
            ],
            'sizeInBytes' => [
                'example' => 300,
                'type' => 'integer',
            ],
            'type' => [
                'example' => 'image/jpeg',
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'name',
            'type',
            'friendlyURL',
            'sizeInBytes',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $friendlyURL;

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
    private int $sizeInBytes;

    /**
     * @var string
     */
    private string $type;

    /**
     * @param string $friendlyURL
     * @param string $id
     * @param string $name
     * @param int $sizeInBytes
     * @param string $type
     */
    public function __construct(string $friendlyURL, string $id, string $name, int $sizeInBytes, string $type)
    {
        $this->friendlyURL = $friendlyURL;
        $this->id = $id;
        $this->name = $name;
        $this->sizeInBytes = $sizeInBytes;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getFriendlyURL(): string
    {
        return $this->friendlyURL;
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
    public function getSizeInBytes(): int
    {
        return $this->sizeInBytes;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $friendlyURL
     * @return self
     */
    public function withFriendlyURL(string $friendlyURL): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($friendlyURL, static::$schema['properties']['friendlyURL']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->friendlyURL = $friendlyURL;

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
     * @param int $sizeInBytes
     * @return self
     */
    public function withSizeInBytes(int $sizeInBytes): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($sizeInBytes, static::$schema['properties']['sizeInBytes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->sizeInBytes = $sizeInBytes;

        return $clone;
    }

    /**
     * @param string $type
     * @return self
     */
    public function withType(string $type): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($type, static::$schema['properties']['type']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return FileMeta Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): FileMeta
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $friendlyURL = $input->{'friendlyURL'};
        $id = $input->{'id'};
        $name = $input->{'name'};
        $sizeInBytes = (int)($input->{'sizeInBytes'});
        $type = $input->{'type'};

        $obj = new self($friendlyURL, $id, $name, $sizeInBytes, $type);

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
        $output['friendlyURL'] = $this->friendlyURL;
        $output['id'] = $this->id;
        $output['name'] = $this->name;
        $output['sizeInBytes'] = $this->sizeInBytes;
        $output['type'] = $this->type;

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
