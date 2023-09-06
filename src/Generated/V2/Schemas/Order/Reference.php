<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use InvalidArgumentException;

class Reference
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'contractItemId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'offerItemId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'orderItemId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $contractItemId = null;

    /**
     * @var string|null
     */
    private ?string $offerItemId = null;

    /**
     * @var string|null
     */
    private ?string $orderItemId = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getContractItemId(): ?string
    {
        return $this->contractItemId ?? null;
    }

    /**
     * @return string|null
     */
    public function getOfferItemId(): ?string
    {
        return $this->offerItemId ?? null;
    }

    /**
     * @return string|null
     */
    public function getOrderItemId(): ?string
    {
        return $this->orderItemId ?? null;
    }

    /**
     * @param string $contractItemId
     * @return self
     */
    public function withContractItemId(string $contractItemId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($contractItemId, static::$schema['properties']['contractItemId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractItemId = $contractItemId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutContractItemId(): self
    {
        $clone = clone $this;
        unset($clone->contractItemId);

        return $clone;
    }

    /**
     * @param string $offerItemId
     * @return self
     */
    public function withOfferItemId(string $offerItemId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($offerItemId, static::$schema['properties']['offerItemId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->offerItemId = $offerItemId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutOfferItemId(): self
    {
        $clone = clone $this;
        unset($clone->offerItemId);

        return $clone;
    }

    /**
     * @param string $orderItemId
     * @return self
     */
    public function withOrderItemId(string $orderItemId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($orderItemId, static::$schema['properties']['orderItemId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->orderItemId = $orderItemId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutOrderItemId(): self
    {
        $clone = clone $this;
        unset($clone->orderItemId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Reference Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Reference
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contractItemId = null;
        if (isset($input->{'contractItemId'})) {
            $contractItemId = $input->{'contractItemId'};
        }
        $offerItemId = null;
        if (isset($input->{'offerItemId'})) {
            $offerItemId = $input->{'offerItemId'};
        }
        $orderItemId = null;
        if (isset($input->{'orderItemId'})) {
            $orderItemId = $input->{'orderItemId'};
        }

        $obj = new self();
        $obj->contractItemId = $contractItemId;
        $obj->offerItemId = $offerItemId;
        $obj->orderItemId = $orderItemId;
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
        if (isset($this->contractItemId)) {
            $output['contractItemId'] = $this->contractItemId;
        }
        if (isset($this->offerItemId)) {
            $output['offerItemId'] = $this->offerItemId;
        }
        if (isset($this->orderItemId)) {
            $output['orderItemId'] = $this->orderItemId;
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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
