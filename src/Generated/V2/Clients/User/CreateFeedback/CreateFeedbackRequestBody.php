<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\CreateFeedback;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateFeedbackRequestBody
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
    ];

    /**
     * Personal feedback message.
     *
     * @var string|null
     */
    private ?string $message = null;

    /**
     * Origin of the feedback.
     *
     * @var string|null
     */
    private ?string $origin = null;

    /**
     * Descriptive subject.
     *
     * @var string
     */
    private string $subject;

    /**
     * Type of feedback.
     *
     * @var CreateFeedbackRequestBodyType|null
     */
    private ?CreateFeedbackRequestBodyType $type = null;

    /**
     * Feedback rating from bad to good. Set to 0 or skip this field to not vote at all.
     *
     * @var int|float|null
     */
    private int|float|null $vote = null;

    private array $headers = [

    ];

    /**
     * @param string $subject
     */
    public function __construct(string $subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message ?? null;
    }

    /**
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->origin ?? null;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @return CreateFeedbackRequestBodyType|null
     */
    public function getType(): ?CreateFeedbackRequestBodyType
    {
        return $this->type ?? null;
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
        $validator = new Validator();
        $validator->validate($message, static::$schema['properties']['message']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->message = $message;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMessage(): self
    {
        $clone = clone $this;
        unset($clone->message);

        return $clone;
    }

    /**
     * @param string $origin
     * @return self
     */
    public function withOrigin(string $origin): self
    {
        $validator = new Validator();
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
        $validator = new Validator();
        $validator->validate($subject, static::$schema['properties']['subject']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->subject = $subject;

        return $clone;
    }

    /**
     * @param CreateFeedbackRequestBodyType $type
     * @return self
     */
    public function withType(CreateFeedbackRequestBodyType $type): self
    {
        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutType(): self
    {
        $clone = clone $this;
        unset($clone->type);

        return $clone;
    }

    /**
     * @param int|float $vote
     * @return self
     */
    public function withVote(int|float $vote): self
    {
        $validator = new Validator();
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
     * @return CreateFeedbackRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateFeedbackRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $message = null;
        if (isset($input->{'message'})) {
            $message = $input->{'message'};
        }
        $origin = null;
        if (isset($input->{'origin'})) {
            $origin = $input->{'origin'};
        }
        $subject = $input->{'subject'};
        $type = null;
        if (isset($input->{'type'})) {
            $type = CreateFeedbackRequestBodyType::from($input->{'type'});
        }
        $vote = null;
        if (isset($input->{'vote'})) {
            $vote = str_contains($input->{'vote'}, '.') ? (float)($input->{'vote'}) : (int)($input->{'vote'});
        }

        $obj = new self($subject);
        $obj->message = $message;
        $obj->origin = $origin;
        $obj->type = $type;
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
        if (isset($this->message)) {
            $output['message'] = $this->message;
        }
        if (isset($this->origin)) {
            $output['origin'] = $this->origin;
        }
        $output['subject'] = $this->subject;
        if (isset($this->type)) {
            $output['type'] = ($this->type)->value;
        }
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
