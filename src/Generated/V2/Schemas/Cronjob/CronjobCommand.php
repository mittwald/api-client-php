<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Cronjob;

class CronjobCommand
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'interpreter' => [
                'example' => '/usr/bin/bash',
                'type' => 'string',
            ],
            'parameters' => [
                'example' => '--debug',
                'type' => 'string',
            ],
            'path' => [
                'example' => '/html/my-wordpress/script.sh',
                'type' => 'string',
            ],
        ],
        'required' => [
            'interpreter',
            'path',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $interpreter;

    /**
     * @var string|null
     */
    private ?string $parameters = null;

    /**
     * @var string
     */
    private string $path;

    /**
     * @param string $interpreter
     * @param string $path
     */
    public function __construct(string $interpreter, string $path)
    {
        $this->interpreter = $interpreter;
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getInterpreter() : string
    {
        return $this->interpreter;
    }

    /**
     * @return string|null
     */
    public function getParameters() : ?string
    {
        return $this->parameters ?? null;
    }

    /**
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }

    /**
     * @param string $interpreter
     * @return self
     */
    public function withInterpreter(string $interpreter) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($interpreter, static::$schema['properties']['interpreter']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->interpreter = $interpreter;

        return $clone;
    }

    /**
     * @param string $parameters
     * @return self
     */
    public function withParameters(string $parameters) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($parameters, static::$schema['properties']['parameters']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->parameters = $parameters;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutParameters() : self
    {
        $clone = clone $this;
        unset($clone->parameters);

        return $clone;
    }

    /**
     * @param string $path
     * @return self
     */
    public function withPath(string $path) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($path, static::$schema['properties']['path']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->path = $path;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CronjobCommand Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : CronjobCommand
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $interpreter = $input->{'interpreter'};
        $parameters = null;
        if (isset($input->{'parameters'})) {
            $parameters = $input->{'parameters'};
        }
        $path = $input->{'path'};

        $obj = new self($interpreter, $path);
        $obj->parameters = $parameters;
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
        $output['interpreter'] = $this->interpreter;
        if (isset($this->parameters)) {
            $output['parameters'] = $this->parameters;
        }
        $output['path'] = $this->path;

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

