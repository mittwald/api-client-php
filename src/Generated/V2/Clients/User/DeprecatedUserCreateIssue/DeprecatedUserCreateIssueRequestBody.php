<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserCreateIssue;

use InvalidArgumentException;

class DeprecatedUserCreateIssueRequestBody
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'message' => [
                'description' => 'Detailed report of the issue.',
                'maxLength' => 5000,
                'type' => 'string',
            ],
            'origin' => [
                'description' => 'Origin of the issue.',
                'type' => 'string',
            ],
            'subject' => [
                'description' => 'Descriptive subject of the report.',
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
                'description' => 'Feedback rating from bad to good.',
                'maximum' => 10,
                'minimum' => 0,
                'type' => 'number',
            ],
        ],
        'required' => [
            'type',
            'message',
        ],
        'type' => 'object',
    ];

    /**
     * Detailed report of the issue.
     *
     * @var string
     */
    private string $message;

    /**
     * Origin of the issue.
     *
     * @var string|null
     */
    private ?string $origin = null;

    /**
     * Descriptive subject of the report.
     *
     * @var string|null
     */
    private ?string $subject = null;

    /**
     * Type of feedback.
     *
     * @var DeprecatedUserCreateIssueRequestBodyType
     */
    private DeprecatedUserCreateIssueRequestBodyType $type;

    /**
     * Feedback rating from bad to good.
     *
     * @var int|float|null
     */
    private int|float|null $vote = null;

    private array $headers = [

    ];

    /**
     * @param string $message
     * @param DeprecatedUserCreateIssueRequestBodyType $type
     */
    public function __construct(string $message, DeprecatedUserCreateIssueRequestBodyType $type)
    {
        $this->message = $message;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->origin ?? null;
    }

    /**
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject ?? null;
    }

    /**
     * @return DeprecatedUserCreateIssueRequestBodyType
     */
    public function getType(): DeprecatedUserCreateIssueRequestBodyType
    {
        return $this->type;
    }

    /**
     * @return int|float|null
     */
    public function getVote(): int|float|null
    {
        return $this->vote;
    }

    /**
     * @param string $message
     * @return self
     */
    public function withMessage(string $message): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($message, static::$schema['properties']['message']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->message = $message;

        return $clone;
    }

    /**
     * @param string $origin
     * @return self
     */
    public function withOrigin(string $origin): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($origin, static::$schema['properties']['origin']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->origin = $origin;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutOrigin(): self
    {
        $clone = clone $this;
        unset($clone->origin);

        return $clone;
    }

    /**
     * @param string $subject
     * @return self
     */
    public function withSubject(string $subject): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($subject, static::$schema['properties']['subject']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->subject = $subject;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutSubject(): self
    {
        $clone = clone $this;
        unset($clone->subject);

        return $clone;
    }

    /**
     * @param DeprecatedUserCreateIssueRequestBodyType $type
     * @return self
     */
    public function withType(DeprecatedUserCreateIssueRequestBodyType $type): self
    {
        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    /**
     * @param int|float $vote
     * @return self
     */
    public function withVote(int|float $vote): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($vote, static::$schema['properties']['vote']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->vote = $vote;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutVote(): self
    {
        $clone = clone $this;
        unset($clone->vote);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedUserCreateIssueRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedUserCreateIssueRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $message = $input->{'message'};
        $origin = null;
        if (isset($input->{'origin'})) {
            $origin = $input->{'origin'};
        }
        $subject = null;
        if (isset($input->{'subject'})) {
            $subject = $input->{'subject'};
        }
        $type = DeprecatedUserCreateIssueRequestBodyType::from($input->{'type'});
        $vote = null;
        if (isset($input->{'vote'})) {
            $vote = str_contains($input->{'vote'}, '.') ? (float)($input->{'vote'}) : (int)($input->{'vote'});
        }

        $obj = new self($message, $type);
        $obj->origin = $origin;
        $obj->subject = $subject;
        $obj->vote = $vote;
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
        $output['message'] = $this->message;
        if (isset($this->origin)) {
            $output['origin'] = $this->origin;
        }
        if (isset($this->subject)) {
            $output['subject'] = $this->subject;
        }
        $output['type'] = ($this->type)->value;
        if (isset($this->vote)) {
            $output['vote'] = $this->vote;
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

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        return '/v2/users/self/issues';
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
