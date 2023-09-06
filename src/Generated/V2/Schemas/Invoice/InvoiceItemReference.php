<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

use InvalidArgumentException;

class InvoiceItemReference
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'sourceInvoiceId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'sourceInvoiceItemId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'sourceInvoiceId',
            'sourceInvoiceItemId',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $sourceInvoiceId;

    /**
     * @var string
     */
    private string $sourceInvoiceItemId;

    /**
     * @param string $sourceInvoiceId
     * @param string $sourceInvoiceItemId
     */
    public function __construct(string $sourceInvoiceId, string $sourceInvoiceItemId)
    {
        $this->sourceInvoiceId = $sourceInvoiceId;
        $this->sourceInvoiceItemId = $sourceInvoiceItemId;
    }

    /**
     * @return string
     */
    public function getSourceInvoiceId(): string
    {
        return $this->sourceInvoiceId;
    }

    /**
     * @return string
     */
    public function getSourceInvoiceItemId(): string
    {
        return $this->sourceInvoiceItemId;
    }

    /**
     * @param string $sourceInvoiceId
     * @return self
     */
    public function withSourceInvoiceId(string $sourceInvoiceId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($sourceInvoiceId, static::$schema['properties']['sourceInvoiceId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->sourceInvoiceId = $sourceInvoiceId;

        return $clone;
    }

    /**
     * @param string $sourceInvoiceItemId
     * @return self
     */
    public function withSourceInvoiceItemId(string $sourceInvoiceItemId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($sourceInvoiceItemId, static::$schema['properties']['sourceInvoiceItemId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->sourceInvoiceItemId = $sourceInvoiceItemId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return InvoiceItemReference Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): InvoiceItemReference
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $sourceInvoiceId = $input->{'sourceInvoiceId'};
        $sourceInvoiceItemId = $input->{'sourceInvoiceItemId'};

        $obj = new self($sourceInvoiceId, $sourceInvoiceItemId);

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
        $output['sourceInvoiceId'] = $this->sourceInvoiceId;
        $output['sourceInvoiceItemId'] = $this->sourceInvoiceItemId;

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
