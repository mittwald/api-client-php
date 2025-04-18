<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mailmigration;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.mailmigration.AutoResponder.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class AutoResponder
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'active' => [
                'type' => 'boolean',
            ],
            'expiresAt' => [
                'format' => 'date-time',
            ],
            'message' => [
                'type' => 'string',
            ],
            'startsAt' => [
                'format' => 'date-time',
            ],
        ],
        'required' => [
            'active',
            'message',
        ],
        'type' => 'object',
    ];

    private bool $active;

    /**
     * @var mixed|null
     */
    private $expiresAt = null;

    private string $message;

    /**
     * @var mixed|null
     */
    private $startsAt = null;

    public function __construct(bool $active, string $message)
    {
        $this->active = $active;
        $this->message = $message;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * @return mixed|null
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return mixed|null
     */
    public function getStartsAt()
    {
        return $this->startsAt;
    }

    public function withActive(bool $active): self
    {
        $validator = new Validator();
        $validator->validate($active, self::$schema['properties']['active']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->active = $active;

        return $clone;
    }

    /**
     * @param mixed $expiresAt
     */
    public function withExpiresAt($expiresAt): self
    {
        $validator = new Validator();
        $validator->validate($expiresAt, self::$schema['properties']['expiresAt']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->expiresAt = $expiresAt;

        return $clone;
    }

    public function withoutExpiresAt(): self
    {
        $clone = clone $this;
        unset($clone->expiresAt);

        return $clone;
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

    /**
     * @param mixed $startsAt
     */
    public function withStartsAt($startsAt): self
    {
        $validator = new Validator();
        $validator->validate($startsAt, self::$schema['properties']['startsAt']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->startsAt = $startsAt;

        return $clone;
    }

    public function withoutStartsAt(): self
    {
        $clone = clone $this;
        unset($clone->startsAt);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AutoResponder Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AutoResponder
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $active = (bool)($input->{'active'});
        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = $input->{'expiresAt'};
        }
        $message = $input->{'message'};
        $startsAt = null;
        if (isset($input->{'startsAt'})) {
            $startsAt = $input->{'startsAt'};
        }

        $obj = new self($active, $message);
        $obj->expiresAt = $expiresAt;
        $obj->startsAt = $startsAt;
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
        $output['active'] = $this->active;
        if (isset($this->expiresAt)) {
            $output['expiresAt'] = $this->expiresAt;
        }
        $output['message'] = $this->message;
        if (isset($this->startsAt)) {
            $output['startsAt'] = $this->startsAt;
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
