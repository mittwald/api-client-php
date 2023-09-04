<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

class AppJobImage
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'imageTemplate' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'imageTemplate',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $imageTemplate;

    /**
     * @param string $imageTemplate
     */
    public function __construct(string $imageTemplate)
    {
        $this->imageTemplate = $imageTemplate;
    }

    /**
     * @return string
     */
    public function getImageTemplate() : string
    {
        return $this->imageTemplate;
    }

    /**
     * @param string $imageTemplate
     * @return self
     */
    public function withImageTemplate(string $imageTemplate) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($imageTemplate, static::$schema['properties']['imageTemplate']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->imageTemplate = $imageTemplate;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AppJobImage Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : AppJobImage
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $imageTemplate = $input->{'imageTemplate'};

        $obj = new self($imageTemplate);

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
        $output['imageTemplate'] = $this->imageTemplate;

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

