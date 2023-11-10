<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * A `BreakingNote` is a hint that something serious has changed in the
 * `AppVersion` containing it, so an automatic update is not possible.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class BreakingNote
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'description' => 'A `BreakingNote` is a hint that something serious has changed in the `AppVersion` containing it, so an automatic update is not possible.',
        'properties' => [
            'faqLink' => [
                'format' => 'uri',
                'type' => 'string',
            ],
        ],
        'required' => [
            'faqLink',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $faqLink;

    /**
     * @param string $faqLink
     */
    public function __construct(string $faqLink)
    {
        $this->faqLink = $faqLink;
    }

    /**
     * @return string
     */
    public function getFaqLink(): string
    {
        return $this->faqLink;
    }

    /**
     * @param string $faqLink
     * @return self
     */
    public function withFaqLink(string $faqLink): self
    {
        $validator = new Validator();
        $validator->validate($faqLink, static::$schema['properties']['faqLink']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->faqLink = $faqLink;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return BreakingNote Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): BreakingNote
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $faqLink = $input->{'faqLink'};

        $obj = new self($faqLink);

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
        $output['faqLink'] = $this->faqLink;

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
        $validator = new Validator();
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
