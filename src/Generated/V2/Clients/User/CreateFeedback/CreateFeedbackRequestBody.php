<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\CreateFeedback;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateFeedbackRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
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
     */
    private ?string $message = null;

    /**
     * Origin of the feedback.
     */
    private ?string $origin = null;

    /**
     * Descriptive subject.
     */
    private string $subject;

    /**
     * Type of feedback.
     */
    private ?CreateFeedbackRequestBodyType $type = null;

    /**
     * Feedback rating from bad to good. Set to 0 or skip this field to not vote at all.
     */
    private int|float|null $vote = null;

    public function __construct(string $subject)
    {
        $this->subject = $subject;
    }

    public function getMessage(): ?string
    {
        return $this->message ?? null;
    }

    public function getOrigin(): ?string
    {
        return $this->origin ?? null;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getType(): ?CreateFeedbackRequestBodyType
    {
        return $this->type ?? null;
    }

    public function getVote(): int|float|null
    {
        return $this->vote;
    }

    public function withMessage(string $message): self
    {
        $validator = new Validator();
        $validator->validate($message, self::$schema['properties']['message']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->message = $message;

        return $clone;
    }

    public function withoutMessage(): self
    {
        $clone = clone $this;
        unset($clone->message);

        return $clone;
    }

    public function withOrigin(string $origin): self
    {
        $validator = new Validator();
        $validator->validate($origin, self::$schema['properties']['origin']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->origin = $origin;

        return $clone;
    }

    public function withoutOrigin(): self
    {
        $clone = clone $this;
        unset($clone->origin);

        return $clone;
    }

    public function withSubject(string $subject): self
    {
        $validator = new Validator();
        $validator->validate($subject, self::$schema['properties']['subject']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->subject = $subject;

        return $clone;
    }

    public function withType(CreateFeedbackRequestBodyType $type): self
    {
        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    public function withoutType(): self
    {
        $clone = clone $this;
        unset($clone->type);

        return $clone;
    }

    public function withVote(int|float $vote): self
    {
        $validator = new Validator();
        $validator->validate($vote, self::$schema['properties']['vote']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->vote = $vote;

        return $clone;
    }

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
            $vote = str_contains((string)($input->{'vote'}), '.') ? (float)($input->{'vote'}) : (int)($input->{'vote'});
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
        $validator = new \Mittwald\ApiClient\Validator\Validator();
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, self::$schema);

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
