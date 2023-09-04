<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

class EmptyResponse
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'error_props' => [
                'type' => 'object',
            ],
            'error_reason' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'error_reason',
            'error_props',
        ],
        'type' => 'object',
    ];

    /**
     * @var EmptyResponseError_props
     */
    private EmptyResponseError_props $error_props;

    /**
     * @var string
     */
    private string $error_reason;

    /**
     * @param EmptyResponseError_props $errorProps
     * @param string $errorReason
     */
    public function __construct(EmptyResponseError_props $errorProps, string $errorReason)
    {
        $this->error_props = $errorProps;
        $this->error_reason = $errorReason;
    }

    /**
     * @return EmptyResponseError_props
     */
    public function getErrorProps() : EmptyResponseError_props
    {
        return $this->error_props;
    }

    /**
     * @return string
     */
    public function getErrorReason() : string
    {
        return $this->error_reason;
    }

    /**
     * @param EmptyResponseError_props $error_props
     * @return self
     */
    public function withErrorProps(EmptyResponseError_props $error_props) : self
    {
        $clone = clone $this;
        $clone->error_props = $error_props;

        return $clone;
    }

    /**
     * @param string $error_reason
     * @return self
     */
    public function withErrorReason(string $error_reason) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($error_reason, static::$schema['properties']['error_reason']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->error_reason = $error_reason;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return EmptyResponse Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : EmptyResponse
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $error_props = EmptyResponseError_props::buildFromInput($input->{'error_props'}, validate: $validate);
        $error_reason = $input->{'error_reason'};

        $obj = new self($error_props, $error_reason);

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
        $output['error_props'] = ($this->error_props)->toJson();
        $output['error_reason'] = $this->error_reason;

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
        $this->error_props = clone $this->error_props;
    }
}

