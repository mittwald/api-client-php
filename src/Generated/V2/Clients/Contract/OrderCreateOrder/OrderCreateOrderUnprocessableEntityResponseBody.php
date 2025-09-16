<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateOrder;

use InvalidArgumentException;
use JsonSchema\Validator;

class OrderCreateOrderUnprocessableEntityResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'error' => [
                'type' => 'object',
            ],
        ],
    ];

    private ?OrderCreateOrderUnprocessableEntityResponseBodyError $error = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getError(): ?OrderCreateOrderUnprocessableEntityResponseBodyError
    {
        return $this->error ?? null;
    }

    public function withError(OrderCreateOrderUnprocessableEntityResponseBodyError $error): self
    {
        $clone = clone $this;
        $clone->error = $error;

        return $clone;
    }

    public function withoutError(): self
    {
        $clone = clone $this;
        unset($clone->error);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return OrderCreateOrderUnprocessableEntityResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): OrderCreateOrderUnprocessableEntityResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $error = null;
        if (isset($input->{'error'})) {
            $error = OrderCreateOrderUnprocessableEntityResponseBodyError::buildFromInput($input->{'error'}, validate: $validate);
        }

        $obj = new self();
        $obj->error = $error;
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
        if (isset($this->error)) {
            $output['error'] = ($this->error)->toJson();
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
        if (isset($this->error)) {
            $this->error = clone $this->error;
        }
    }
}
