<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateRecommendationSuggestion;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateRecommendationSuggestionRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'suggestion' => [
                'example' => 'a mittwald t-shirt',
                'type' => 'string',
            ],
        ],
        'required' => [
            'suggestion',
        ],
        'type' => 'object',
    ];

    private string $suggestion;

    public function __construct(string $suggestion)
    {
        $this->suggestion = $suggestion;
    }

    public function getSuggestion(): string
    {
        return $this->suggestion;
    }

    public function withSuggestion(string $suggestion): self
    {
        $validator = new Validator();
        $validator->validate($suggestion, self::$internalValidationSchema['properties']['suggestion']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->suggestion = $suggestion;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateRecommendationSuggestionRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateRecommendationSuggestionRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $suggestion = $input->{'suggestion'};

        $obj = new self($suggestion);

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
        $output['suggestion'] = $this->suggestion;

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
        $validator->validate($input, self::$internalValidationSchema);

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
