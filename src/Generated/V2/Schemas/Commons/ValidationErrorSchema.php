<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Commons;

class ValidationErrorSchema
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'required' => [
            'message',
            'path',
            'type',
        ],
        'properties' => [
            'message' => [
                'type' => 'string',
                'description' => 'The standard error message',
                'example' => 'should be string',
            ],
            'path' => [
                'type' => 'string',
                'description' => 'The path to the part of the data that was validated. JavaScript property access notation (e.g., ".prop[1].subProp") is used.
',
                'example' => '.address.street',
            ],
            'type' => [
                'type' => 'string',
                'description' => 'ajv validation error type (e.g. "format", "required", "type") or own validation error types',
                'example' => 'format',
            ],
            'context' => [
                'type' => 'object',
                'example' => [
                    'format' => 'email',
                ],
                'description' => 'The object with the additional information about the error that can be used to create custom error messages. Keys depend on the
type that failed validation (e.g. "missingProperty" for type "required")
',
                'additionalProperties' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * The standard error message
     *
     * @var string
     */
    private string $message;

    /**
     * The path to the part of the data that was validated. JavaScript property access notation (e.g., ".prop[1].subProp") is used.
     *
     *
     * @var string
     */
    private string $path;

    /**
     * ajv validation error type (e.g. "format", "required", "type") or own validation error types
     *
     * @var string
     */
    private string $type;

    /**
     * The object with the additional information about the error that can be used to create custom error messages. Keys depend on the
     * type that failed validation (e.g. "missingProperty" for type "required")
     *
     *
     * @var string[]|null
     */
    private ?array $context = null;

    /**
     * @param string $message
     * @param string $path
     * @param string $type
     */
    public function __construct(string $message, string $path, string $type)
    {
        $this->message = $message;
        $this->path = $path;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @return string[]|null
     */
    public function getContext() : ?array
    {
        return $this->context ?? null;
    }

    /**
     * @param string $message
     * @return self
     */
    public function withMessage(string $message) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($message, static::$schema['properties']['message']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->message = $message;

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
     * @param string $type
     * @return self
     */
    public function withType(string $type) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($type, static::$schema['properties']['type']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    /**
     * @param string[] $context
     * @return self
     */
    public function withContext(array $context) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($context, static::$schema['properties']['context']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->context = $context;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutContext() : self
    {
        $clone = clone $this;
        unset($clone->context);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ValidationErrorSchema Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : ValidationErrorSchema
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $message = $input->{'message'};
        $path = $input->{'path'};
        $type = $input->{'type'};
        $context = null;
        if (isset($input->{'context'})) {
            $context = $input->{'context'};
        }

        $obj = new self($message, $path, $type);
        $obj->context = $context;
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
        $output['message'] = $this->message;
        $output['path'] = $this->path;
        $output['type'] = $this->type;
        if (isset($this->context)) {
            $output['context'] = $this->context;
        }

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

