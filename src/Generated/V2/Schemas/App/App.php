<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

class App
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'description' => 'An `App` is to be understood as a manifest for `AppInstallations`. E.g. "WordPress" only exists inside our ecosystem, because there is an `App`-Manifest for it',
        'properties' => [
            'actionCapabilities' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.ActionCapabilities',
            ],
            'id' => [
                'type' => 'string',
            ],
            'name' => [
                'type' => 'string',
            ],
            'tags' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'id',
            'name',
            'tags',
            'images',
        ],
        'type' => 'object',
    ];

    /**
     * @var Action[]|null
     */
    private ?array $actionCapabilities = null;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string[]
     */
    private array $tags;

    /**
     * @param string $id
     * @param string $name
     * @param string[] $tags
     */
    public function __construct(string $id, string $name, array $tags)
    {
        $this->id = $id;
        $this->name = $name;
        $this->tags = $tags;
    }

    /**
     * @return Action[]|null
     */
    public function getActionCapabilities() : ?array
    {
        return $this->actionCapabilities ?? null;
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return string[]
     */
    public function getTags() : array
    {
        return $this->tags;
    }

    /**
     * @param Action[] $actionCapabilities
     * @return self
     */
    public function withActionCapabilities(array $actionCapabilities) : self
    {
        $clone = clone $this;
        $clone->actionCapabilities = $actionCapabilities;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutActionCapabilities() : self
    {
        $clone = clone $this;
        unset($clone->actionCapabilities);

        return $clone;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param string $name
     * @return self
     */
    public function withName(string $name) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * @param string[] $tags
     * @return self
     */
    public function withTags(array $tags) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($tags, static::$schema['properties']['tags']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->tags = $tags;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return App Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : App
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $actionCapabilities = null;
        if (isset($input->{'actionCapabilities'})) {
            $actionCapabilities = array_map(fn(string $item) : Action => Action::from($item), $input->{'actionCapabilities'});
        }
        $id = $input->{'id'};
        $name = $input->{'name'};
        $tags = $input->{'tags'};

        $obj = new self($id, $name, $tags);
        $obj->actionCapabilities = $actionCapabilities;
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
        if (isset($this->actionCapabilities)) {
            $output['actionCapabilities'] = array_map(fn($item): string => $item->value, $this->actionCapabilities);
        }
        $output['id'] = $this->id;
        $output['name'] = $this->name;
        $output['tags'] = $this->tags;

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
    }
}

