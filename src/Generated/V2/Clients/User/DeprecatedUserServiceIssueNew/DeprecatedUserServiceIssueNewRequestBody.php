<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceIssueNew;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedUserServiceIssueNewRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'message' => [
                'maxLength' => 1000000,
                'type' => 'string',
            ],
            'origin' => [
                'type' => 'string',
            ],
            'subject' => [
                'type' => 'string',
            ],
            'type' => [
                'enum' => [
                    'feedback',
                    'bug',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'type',
            'message',
        ],
        'type' => 'object',
    ];

    private string $message;

    private ?string $origin = null;

    private ?string $subject = null;

    private DeprecatedUserServiceIssueNewRequestBodyType $type;

    public function __construct(string $message, DeprecatedUserServiceIssueNewRequestBodyType $type)
    {
        $this->message = $message;
        $this->type = $type;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getOrigin(): ?string
    {
        return $this->origin ?? null;
    }

    public function getSubject(): ?string
    {
        return $this->subject ?? null;
    }

    public function getType(): DeprecatedUserServiceIssueNewRequestBodyType
    {
        return $this->type;
    }

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

    public function withoutOrigin(): self
    {
        $clone = clone $this;
        unset($clone->origin);

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

    public function withType(DeprecatedUserServiceIssueNewRequestBodyType $type): self
    {
        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedUserServiceIssueNewRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedUserServiceIssueNewRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
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
        $type = DeprecatedUserServiceIssueNewRequestBodyType::from($input->{'type'});

        $obj = new self($message, $type);
        $obj->origin = $origin;
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
        $output['message'] = $this->message;
        if (isset($this->origin)) {
            $output['origin'] = $this->origin;
        }
        if (isset($this->subject)) {
            $output['subject'] = $this->subject;
        }
        $output['type'] = ($this->type)->value;

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
