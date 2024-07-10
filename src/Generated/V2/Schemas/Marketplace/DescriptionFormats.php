<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Marketplace;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Language specific descriptions in various formats.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class DescriptionFormats
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'description' => 'Language specific descriptions in various formats.',
        'properties' => [
            'markdown' => [
                'minLength' => 1,
                'type' => 'string',
            ],
            'plain' => [
                'minLength' => 1,
                'type' => 'string',
            ],
        ],
        'required' => [
            'markdown',
        ],
        'type' => 'object',
    ];

    private string $markdown;

    private ?string $plain = null;

    public function __construct(string $markdown)
    {
        $this->markdown = $markdown;
    }

    public function getMarkdown(): string
    {
        return $this->markdown;
    }

    public function getPlain(): ?string
    {
        return $this->plain ?? null;
    }

    public function withMarkdown(string $markdown): self
    {
        $validator = new Validator();
        $validator->validate($markdown, static::$schema['properties']['markdown']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->markdown = $markdown;

        return $clone;
    }

    public function withPlain(string $plain): self
    {
        $validator = new Validator();
        $validator->validate($plain, static::$schema['properties']['plain']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->plain = $plain;

        return $clone;
    }

    public function withoutPlain(): self
    {
        $clone = clone $this;
        unset($clone->plain);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DescriptionFormats Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DescriptionFormats
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $markdown = $input->{'markdown'};
        $plain = null;
        if (isset($input->{'plain'})) {
            $plain = $input->{'plain'};
        }

        $obj = new self($markdown);
        $obj->plain = $plain;
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
        $output['markdown'] = $this->markdown;
        if (isset($this->plain)) {
            $output['plain'] = $this->plain;
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
        $validator = new \Mittwald\ApiClient\Validator\Validator();
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
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