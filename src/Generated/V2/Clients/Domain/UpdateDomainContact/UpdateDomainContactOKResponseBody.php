<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateDomainContactOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'isAsync' => [
                'type' => 'boolean',
            ],
            'transactionId' => [
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var bool|null
     */
    private ?bool $isAsync = null;

    /**
     * @var string|null
     */
    private ?string $transactionId = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return bool|null
     */
    public function getIsAsync(): ?bool
    {
        return $this->isAsync ?? null;
    }

    /**
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId ?? null;
    }

    /**
     * @param bool $isAsync
     * @return self
     */
    public function withIsAsync(bool $isAsync): self
    {
        $validator = new Validator();
        $validator->validate($isAsync, static::$schema['properties']['isAsync']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isAsync = $isAsync;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutIsAsync(): self
    {
        $clone = clone $this;
        unset($clone->isAsync);

        return $clone;
    }

    /**
     * @param string $transactionId
     * @return self
     */
    public function withTransactionId(string $transactionId): self
    {
        $validator = new Validator();
        $validator->validate($transactionId, static::$schema['properties']['transactionId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->transactionId = $transactionId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTransactionId(): self
    {
        $clone = clone $this;
        unset($clone->transactionId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateDomainContactOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateDomainContactOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $isAsync = null;
        if (isset($input->{'isAsync'})) {
            $isAsync = (bool)($input->{'isAsync'});
        }
        $transactionId = null;
        if (isset($input->{'transactionId'})) {
            $transactionId = $input->{'transactionId'};
        }

        $obj = new self();
        $obj->isAsync = $isAsync;
        $obj->transactionId = $transactionId;
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
        if (isset($this->isAsync)) {
            $output['isAsync'] = $this->isAsync;
        }
        if (isset($this->transactionId)) {
            $output['transactionId'] = $this->transactionId;
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
}
