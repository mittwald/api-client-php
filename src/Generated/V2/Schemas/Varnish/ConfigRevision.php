<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Varnish;

class ConfigRevision
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'expire' => [
                'type' => 'integer',
            ],
            'files' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.varnish.ConfigFileRef',
                ],
                'type' => 'array',
            ],
            'note' => [
                'type' => 'string',
            ],
            'revision' => [
                'minimum' => 1,
                'type' => 'integer',
            ],
            'updated' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'revision',
            'updated',
            'files',
        ],
        'type' => 'object',
    ];

    /**
     * @var int|null
     */
    private ?int $expire = null;

    /**
     * @var ConfigFileRef[]
     */
    private array $files;

    /**
     * @var string|null
     */
    private ?string $note = null;

    /**
     * @var int
     */
    private int $revision;

    /**
     * @var \DateTime
     */
    private \DateTime $updated;

    /**
     * @param ConfigFileRef[] $files
     * @param int $revision
     * @param \DateTime $updated
     */
    public function __construct(array $files, int $revision, \DateTime $updated)
    {
        $this->files = $files;
        $this->revision = $revision;
        $this->updated = $updated;
    }

    /**
     * @return int|null
     */
    public function getExpire() : ?int
    {
        return $this->expire ?? null;
    }

    /**
     * @return ConfigFileRef[]
     */
    public function getFiles() : array
    {
        return $this->files;
    }

    /**
     * @return string|null
     */
    public function getNote() : ?string
    {
        return $this->note ?? null;
    }

    /**
     * @return int
     */
    public function getRevision() : int
    {
        return $this->revision;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated() : \DateTime
    {
        return $this->updated;
    }

    /**
     * @param int $expire
     * @return self
     */
    public function withExpire(int $expire) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($expire, static::$schema['properties']['expire']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->expire = $expire;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExpire() : self
    {
        $clone = clone $this;
        unset($clone->expire);

        return $clone;
    }

    /**
     * @param ConfigFileRef[] $files
     * @return self
     */
    public function withFiles(array $files) : self
    {
        $clone = clone $this;
        $clone->files = $files;

        return $clone;
    }

    /**
     * @param string $note
     * @return self
     */
    public function withNote(string $note) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($note, static::$schema['properties']['note']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->note = $note;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutNote() : self
    {
        $clone = clone $this;
        unset($clone->note);

        return $clone;
    }

    /**
     * @param int $revision
     * @return self
     */
    public function withRevision(int $revision) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($revision, static::$schema['properties']['revision']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->revision = $revision;

        return $clone;
    }

    /**
     * @param \DateTime $updated
     * @return self
     */
    public function withUpdated(\DateTime $updated) : self
    {
        $clone = clone $this;
        $clone->updated = $updated;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ConfigRevision Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : ConfigRevision
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $expire = null;
        if (isset($input->{'expire'})) {
            $expire = (int)($input->{'expire'});
        }
        $files = array_map(fn(array $i): ConfigFileRef => ConfigFileRef::buildFromInput($i, validate: $validate), $input->{'files'});
        $note = null;
        if (isset($input->{'note'})) {
            $note = $input->{'note'};
        }
        $revision = (int)($input->{'revision'});
        $updated = new \DateTime($input->{'updated'});

        $obj = new self($files, $revision, $updated);
        $obj->expire = $expire;
        $obj->note = $note;
        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson() : array
    {
        $output = [];
        if (isset($this->expire)) {
            $output['expire'] = $this->expire;
        }
        $output['files'] = array_map(fn(ConfigFileRef $i): array => $i->toJson(), $this->files);
        if (isset($this->note)) {
            $output['note'] = $this->note;
        }
        $output['revision'] = $this->revision;
        $output['updated'] = ($this->updated)->format(\DateTime::ATOM);

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
        $this->updated = clone $this->updated;
    }
}

