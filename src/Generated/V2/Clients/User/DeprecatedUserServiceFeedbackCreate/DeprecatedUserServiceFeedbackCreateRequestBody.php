<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackCreate;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedUserServiceFeedbackCreateRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
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
    ];

    private ?string $message = null;

    private string $origin;

    private string $subject;

    private int|float $vote;

    /**
     * @param int|float $vote
     */
    public function __construct(string $origin, string $subject, int|float $vote)
    {
        $this->origin = $origin;
        $this->subject = $subject;
        $this->vote = $vote;
    }

    public function getMessage(): ?string
    {
        return $this->message ?? null;
    }

    public function getOrigin(): string
    {
        return $this->origin;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getVote(): int|float
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

    /**
     * @param int|float $vote
     */
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

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedUserServiceFeedbackCreateRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedUserServiceFeedbackCreateRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $message = null;
        if (isset($input->{'message'})) {
            $message = $input->{'message'};
        }
        $origin = $input->{'origin'};
        $subject = $input->{'subject'};
        $vote = str_contains((string)($input->{'vote'}), '.') ? (float)($input->{'vote'}) : (int)($input->{'vote'});

        $obj = new self($origin, $subject, $vote);
        $obj->message = $message;
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
        $output['origin'] = $this->origin;
        $output['subject'] = $this->subject;
        $output['vote'] = $this->vote;

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
