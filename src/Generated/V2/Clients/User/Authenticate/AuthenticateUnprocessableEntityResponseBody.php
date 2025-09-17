<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate;

use InvalidArgumentException;
use JsonSchema\Validator;

class AuthenticateUnprocessableEntityResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'errors' => [
                'items' => [
                    'type' => 'object',
                ],
                'type' => 'array',
            ],
            'message' => [
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var AuthenticateUnprocessableEntityResponseBodyErrorsItem[]|null
     */
    private ?array $errors = null;

    private ?string $message = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return AuthenticateUnprocessableEntityResponseBodyErrorsItem[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors ?? null;
    }

    public function getMessage(): ?string
    {
        return $this->message ?? null;
    }

    /**
     * @param AuthenticateUnprocessableEntityResponseBodyErrorsItem[] $errors
     */
    public function withErrors(array $errors): self
    {
        $clone = clone $this;
        $clone->errors = $errors;

        return $clone;
    }

    public function withoutErrors(): self
    {
        $clone = clone $this;
        unset($clone->errors);

        return $clone;
    }

    public function withMessage(string $message): self
    {
        $validator = new Validator();
        $validator->validate($message, self::$internalValidationSchema['properties']['message']);
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

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AuthenticateUnprocessableEntityResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AuthenticateUnprocessableEntityResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $errors = null;
        if (isset($input->{'errors'})) {
            $errors = array_map(fn (array|object $i): AuthenticateUnprocessableEntityResponseBodyErrorsItem => AuthenticateUnprocessableEntityResponseBodyErrorsItem::buildFromInput($i, validate: $validate), $input->{'errors'});
        }
        $message = null;
        if (isset($input->{'message'})) {
            $message = $input->{'message'};
        }

        $obj = new self();
        $obj->errors = $errors;
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
        if (isset($this->errors)) {
            $output['errors'] = array_map(fn (AuthenticateUnprocessableEntityResponseBodyErrorsItem $i) => $i->toJson(), $this->errors);
        }
        if (isset($this->message)) {
            $output['message'] = $this->message;
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
        $validator->validate($input, self::$internalValidationSchema);

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
        if (isset($this->errors)) {
            $this->errors = array_map(fn (AuthenticateUnprocessableEntityResponseBodyErrorsItem $i) => clone $i, $this->errors);
        }
    }
}
