<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

class RequestHandlerRequirement
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'exampleValues' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.app.SavedUserInput',
                ],
                'type' => 'array',
            ],
            'name' => [
                'type' => 'string',
            ],
            'namespace' => [
                'type' => 'string',
            ],
            'parametersTemplate' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'name',
            'namespace',
            'parametersTemplate',
        ],
        'type' => 'object',
    ];

    /**
     * @var SavedUserInput[]|null
     */
    private ?array $exampleValues = null;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $namespace;

    /**
     * @var string
     */
    private string $parametersTemplate;

    /**
     * @param string $name
     * @param string $namespace
     * @param string $parametersTemplate
     */
    public function __construct(string $name, string $namespace, string $parametersTemplate)
    {
        $this->name = $name;
        $this->namespace = $namespace;
        $this->parametersTemplate = $parametersTemplate;
    }

    /**
     * @return SavedUserInput[]|null
     */
    public function getExampleValues() : ?array
    {
        return $this->exampleValues ?? null;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getNamespace() : string
    {
        return $this->namespace;
    }

    /**
     * @return string
     */
    public function getParametersTemplate() : string
    {
        return $this->parametersTemplate;
    }

    /**
     * @param SavedUserInput[] $exampleValues
     * @return self
     */
    public function withExampleValues(array $exampleValues) : self
    {
        $clone = clone $this;
        $clone->exampleValues = $exampleValues;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExampleValues() : self
    {
        $clone = clone $this;
        unset($clone->exampleValues);

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
     * @param string $namespace
     * @return self
     */
    public function withNamespace(string $namespace) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($namespace, static::$schema['properties']['namespace']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->namespace = $namespace;

        return $clone;
    }

    /**
     * @param string $parametersTemplate
     * @return self
     */
    public function withParametersTemplate(string $parametersTemplate) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($parametersTemplate, static::$schema['properties']['parametersTemplate']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->parametersTemplate = $parametersTemplate;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RequestHandlerRequirement Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : RequestHandlerRequirement
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $exampleValues = null;
        if (isset($input->{'exampleValues'})) {
            $exampleValues = array_map(fn(array $i): SavedUserInput => SavedUserInput::buildFromInput($i, validate: $validate), $input->{'exampleValues'});
        }
        $name = $input->{'name'};
        $namespace = $input->{'namespace'};
        $parametersTemplate = $input->{'parametersTemplate'};

        $obj = new self($name, $namespace, $parametersTemplate);
        $obj->exampleValues = $exampleValues;
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
        if (isset($this->exampleValues)) {
            $output['exampleValues'] = array_map(fn(SavedUserInput $i): array => $i->toJson(), $this->exampleValues);
        }
        $output['name'] = $this->name;
        $output['namespace'] = $this->namespace;
        $output['parametersTemplate'] = $this->parametersTemplate;

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

