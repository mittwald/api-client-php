<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetCities;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetCitiesRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'input' => [
                'minLength' => 3,
                'type' => 'string',
            ],
        ],
        'required' => [
            'input',
        ],
    ];

    private string $input;

    private array $headers = [

    ];

    public function __construct(string $input)
    {
        $this->input = $input;
    }

    public function getInput(): string
    {
        return $this->input;
    }

    public function withInput(string $input): self
    {
        $validator = new Validator();
        $validator->validate($input, self::$internalValidationSchema['properties']['input']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->input = $input;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input2 Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetCitiesRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input2, bool $validate = true): GetCitiesRequest
    {
        $input2 = is_array($input2) ? Validator::arrayToObjectRecursive($input2) : $input2;
        if ($validate) {
            static::validateInput($input2);
        }

        $input = $input2->{'input'};

        $obj = new self($input);

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
        $output['input'] = $this->input;

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

    /**
     * Builds the URL for this request
     *
     * This method is used internally by the client to build the URL for this request.
     * You should not need to call this method directly.
     *
     * @internal
     * @return string The URL for this request
     */
    public function buildUrl(): string
    {
        $mapped = $this->toJson();
        return '/v2/cities';
    }

    /**
     * Builds the request options for this request
     *
     * This method is used internally by the client to build the Guzzle request options
     * for this request. You should not need to call this method directly.
     *
     * @internal
     * @return array The Guzzle request options for this request
     */
    public function buildRequestOptions(): array
    {
        $mapped = $this->toJson();
        $query = [];
        if (isset($mapped['input'])) {
            $query['input'] = $mapped['input'];
        }
        return [
            'query' => $query,
            'headers' => $this->headers,
        ];
    }

    /**
     * Adds a header to this request
     *
     * You can use this method to add custom HTTP headers to the request.
     *
     * @param string $name The name of the header to add
     * @param string|array $value The value of the header to add
     * @return self A clone of this request with the header added
     */
    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
