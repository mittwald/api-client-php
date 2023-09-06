<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

use InvalidArgumentException;

class BreakingNote
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
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
        $validator = new \JsonSchema\Validator();
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
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
