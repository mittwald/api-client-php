<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\User;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.user.UserFeedback.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class UserFeedback
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'message' => [
                'maxLength' => 1000,
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
            'id',
            'subject',
            'vote',
            'origin',
            'message',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $message;

    /**
     * @var string
     */
    private string $origin;

    /**
     * @var string
     */
    private string $subject;

    /**
     * @var int|float
     */
    private int|float $vote;

    /**
     * @param string $id
     * @param string $message
     * @param string $origin
     * @param string $subject
     * @param int|float $vote
     */
    public function __construct(string $id, string $message, string $origin, string $subject, int|float $vote)
    {
        $this->id = $id;
        $this->message = $message;
        $this->origin = $origin;
        $this->subject = $subject;
        $this->vote = $vote;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->origin;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @return int|float
     */
    public function getVote(): int|float
    {
        return $this->vote;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
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
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UserFeedback Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UserFeedback
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $id = $input->{'id'};
        $message = $input->{'message'};
        $origin = $input->{'origin'};
        $subject = $input->{'subject'};
        $vote = str_contains($input->{'vote'}, '.') ? (float)($input->{'vote'}) : (int)($input->{'vote'});

        $obj = new self($id, $message, $origin, $subject, $vote);

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
        $output['id'] = $this->id;
        $output['message'] = $this->message;
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
}
