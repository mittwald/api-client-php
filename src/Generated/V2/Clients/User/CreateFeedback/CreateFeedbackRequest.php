<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\CreateFeedback;

use InvalidArgumentException;

class CreateFeedbackRequest
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
                        'description' => 'Personal feedback message.',
                        'maxLength' => 5000,
                        'type' => 'string',
                    ],
                    'origin' => [
                        'description' => 'Origin of the feedback.',
                        'example' => 'https://studio.mittwald.de/app/dashboard',
                        'maxLength' => 1000,
                        'type' => 'string',
                    ],
                    'subject' => [
                        'description' => 'Descriptive subject.',
                        'maxLength' => 100,
                        'type' => 'string',
                    ],
                    'type' => [
                        'description' => 'Type of feedback.',
                        'enum' => [
                            'feedback',
                            'bug',
                        ],
                        'type' => 'string',
                    ],
                    'vote' => [
                        'description' => 'Feedback rating from bad to good. Set to 0 or skip this field to not vote at all.',
                        'maximum' => 10,
                        'minimum' => 0,
                        'type' => 'number',
                    ],
                ],
                'required' => [
                    'subject',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'body',
        ],
    ];

    /**
     * @var CreateFeedbackRequestBody
     */
    private CreateFeedbackRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param CreateFeedbackRequestBody $body
     */
    public function __construct(CreateFeedbackRequestBody $body)
    {
        $this->body = $body;
    }

    /**
     * @return CreateFeedbackRequestBody
     */
    public function getBody(): CreateFeedbackRequestBody
    {
        return $this->body;
    }

    /**
     * @param CreateFeedbackRequestBody $body
     * @return self
     */
    public function withBody(CreateFeedbackRequestBody $body): self
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
     * @return CreateFeedbackRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateFeedbackRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = CreateFeedbackRequestBody::buildFromInput($input->{'body'}, validate: $validate);

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
        $this->body = clone $this->body;
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        return '/v2/users/self/feedback';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
