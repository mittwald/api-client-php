<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\ListFeedback;

use InvalidArgumentException;
use JsonSchema\Validator;

class ListFeedbackRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'userId' => [
                'oneOf' => [
                    [
                        'enum' => [
                            'self',
                        ],
                        'type' => 'string',
                    ],
                    [
                        'format' => 'uuid',
                        'type' => 'string',
                    ],
                ],
            ],
            'subject' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'userId',
        ],
    ];

    private ListFeedbackRequestUserIdAlternative1|string $userId;

    private ?string $subject = null;

    private array $headers = [

    ];

    /**
     * @param ListFeedbackRequestUserIdAlternative1|string $userId
     */
    public function __construct(ListFeedbackRequestUserIdAlternative1|string $userId)
    {
        $this->userId = $userId;
    }

    public function getUserId(): ListFeedbackRequestUserIdAlternative1|string
    {
        return $this->userId;
    }

    public function getSubject(): ?string
    {
        return $this->subject ?? null;
    }

    /**
     * @param ListFeedbackRequestUserIdAlternative1|string $userId
     */
    public function withUserId(ListFeedbackRequestUserIdAlternative1|string $userId): self
    {
        $clone = clone $this;
        $clone->userId = $userId;

        return $clone;
    }

    public function withSubject(string $subject): self
    {
        $validator = new Validator();
        $validator->validate($subject, static::$schema['properties']['subject']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->subject = $subject;

        return $clone;
    }

    public function withoutSubject(): self
    {
        $clone = clone $this;
        unset($clone->subject);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListFeedbackRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListFeedbackRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $userId = match (true) {
            ListFeedbackRequestUserIdAlternative1::tryFrom($input->{'userId'}) !== null => ListFeedbackRequestUserIdAlternative1::from($input->{'userId'}),
            is_string($input->{'userId'}) => $input->{'userId'},
        };
        $subject = null;
        if (isset($input->{'subject'})) {
            $subject = $input->{'subject'};
        }

        $obj = new self($userId);
        $obj->subject = $subject;
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
        $output['userId'] = match (true) {
            $this->userId instanceof ListFeedbackRequestUserIdAlternative1 => ($this->userId)->value,
            is_string($this->userId) => $this->userId,
        };
        if (isset($this->subject)) {
            $output['subject'] = $this->subject;
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
        $this->userId = match (true) {
            $this->userId instanceof ListFeedbackRequestUserIdAlternative1, is_string($this->userId) => $this->userId,
        };
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
        $userId = urlencode($mapped['userId']);
        return '/v2/users/' . $userId . '/feedback';
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
        if (isset($mapped['subject'])) {
            $query['subject'] = $mapped['subject'];
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
