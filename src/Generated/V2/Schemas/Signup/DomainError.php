<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Signup;

class DomainError
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'info' => [
                'description' => 'A json object, given further information about the error',
                'type' => 'object',
            ],
            'message' => [
                'description' => 'Some more detailed information about the error',
                'type' => 'string',
            ],
            'name' => [
                'description' => 'Unique key for the error type',
                'type' => 'string',
            ],
        ],
        'required' => [
            'name',
            'message',
        ],
        'type' => 'object',
    ];

    /**
     * A json object, given further information about the error
     *
     * @var DomainErrorInfo|null
     */
    private ?DomainErrorInfo $info = null;

    /**
     * Some more detailed information about the error
     *
     * @var string
     */
    private string $message;

    /**
     * Unique key for the error type
     *
     * @var string
     */
    private string $name;

    /**
     * @param string $message
     * @param string $name
     */
    public function __construct(string $message, string $name)
    {
        $this->message = $message;
        $this->name = $name;
    }

    /**
     * @return DomainErrorInfo|null
     */
    public function getInfo() : ?DomainErrorInfo
    {
        return $this->info ?? null;
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
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param DomainErrorInfo $info
     * @return self
     */
    public function withInfo(DomainErrorInfo $info) : self
    {
        $clone = clone $this;
        $clone->info = $info;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutInfo() : self
    {
        $clone = clone $this;
        unset($clone->info);

        return $clone;
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
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DomainError Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : DomainError
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $info = null;
        if (isset($input->{'info'})) {
            $info = DomainErrorInfo::buildFromInput($input->{'info'}, validate: $validate);
        }
        $message = $input->{'message'};
        $name = $input->{'name'};

        $obj = new self($message, $name);
        $obj->info = $info;
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
        if (isset($this->info)) {
            $output['info'] = ($this->info)->toJson();
        }
        $output['message'] = $this->message;
        $output['name'] = $this->name;

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
        if (isset($this->info)) {
            $this->info = clone $this->info;
        }
    }
}

