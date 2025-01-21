<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponderV2Deprecated;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateMailAddressAutoresponderV2DeprecatedRequestBodyAutoResponder
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'nullable' => true,
        'properties' => [
            'active' => [
                'type' => 'boolean',
            ],
            'expiresAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'message' => [
                'type' => 'string',
            ],
            'startsAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'message',
            'active',
        ],
        'type' => 'object',
    ];

    private bool $active;

    private ?DateTime $expiresAt = null;

    private string $message;

    private ?DateTime $startsAt = null;

    public function __construct(bool $active, string $message)
    {
        $this->active = $active;
        $this->message = $message;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function getExpiresAt(): ?DateTime
    {
        return $this->expiresAt ?? null;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getStartsAt(): ?DateTime
    {
        return $this->startsAt ?? null;
    }

    public function withActive(bool $active): self
    {
        $validator = new Validator();
        $validator->validate($active, static::$schema['properties']['active']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->active = $active;

        return $clone;
    }

    public function withExpiresAt(DateTime $expiresAt): self
    {
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
        $validator->validate($message, static::$schema['properties']['message']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->message = $message;

        return $clone;
    }

    public function withStartsAt(DateTime $startsAt): self
    {
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
     * @return UpdateMailAddressAutoresponderV2DeprecatedRequestBodyAutoResponder Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateMailAddressAutoresponderV2DeprecatedRequestBodyAutoResponder
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $active = (bool)($input->{'active'});
        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = new DateTime($input->{'expiresAt'});
        }
        $message = $input->{'message'};
        $startsAt = null;
        if (isset($input->{'startsAt'})) {
            $startsAt = new DateTime($input->{'startsAt'});
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
            $output['expiresAt'] = ($this->expiresAt)->format(DateTime::ATOM);
        }
        $output['message'] = $this->message;
        if (isset($this->startsAt)) {
            $output['startsAt'] = ($this->startsAt)->format(DateTime::ATOM);
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
        if (isset($this->expiresAt)) {
            $this->expiresAt = clone $this->expiresAt;
        }
        if (isset($this->startsAt)) {
            $this->startsAt = clone $this->startsAt;
        }
    }
}
