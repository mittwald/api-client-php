<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackCreate;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedUserServiceFeedbackCreateRequest
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'body' => [
                'properties' => [
                    'message' => [
                        'maxLength' => 5000,
                        'type' => 'string',
                    ],
                    'origin' => [
                        'maxLength' => 1000,
                        'type' => 'string',
                    ],
                    'subject' => [
                        'maxLength' => 100,
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                    'vote' => [
                        'maximum' => 10,
                        'minimum' => 0,
                        'type' => 'number',
                    ],
                ],
                'required' => [
                    'origin',
                    'subject',
                    'vote',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'body',
        ],
    ];

    /**
     * @var DeprecatedUserServiceFeedbackCreateRequestBody
     */
    private DeprecatedUserServiceFeedbackCreateRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param DeprecatedUserServiceFeedbackCreateRequestBody $body
     */
    public function __construct(DeprecatedUserServiceFeedbackCreateRequestBody $body)
    {
        $this->body = $body;
    }

    /**
     * @return DeprecatedUserServiceFeedbackCreateRequestBody
     */
    public function getBody(): DeprecatedUserServiceFeedbackCreateRequestBody
    {
        return $this->body;
    }

    /**
     * @param DeprecatedUserServiceFeedbackCreateRequestBody $body
     * @return self
     */
    public function withBody(DeprecatedUserServiceFeedbackCreateRequestBody $body): self
    {
        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedUserServiceFeedbackCreateRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedUserServiceFeedbackCreateRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = DeprecatedUserServiceFeedbackCreateRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($body);

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
        $output['body'] = ($this->body)->toJson();

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
        $this->body = clone $this->body;
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
        return '/v2/user/feedback';
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
        return [
            'query' => $query,
            'headers' => $this->headers,
            'json' => $this->getBody()->toJson(),
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
