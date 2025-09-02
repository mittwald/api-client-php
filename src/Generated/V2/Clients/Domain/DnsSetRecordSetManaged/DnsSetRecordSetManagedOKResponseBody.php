<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSetRecordSetManaged;

use InvalidArgumentException;
use JsonSchema\Validator;

class DnsSetRecordSetManagedOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'ingressId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ?string $ingressId = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getIngressId(): ?string
    {
        return $this->ingressId ?? null;
    }

    public function withIngressId(string $ingressId): self
    {
        $validator = new Validator();
        $validator->validate($ingressId, self::$internalValidationSchema['properties']['ingressId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->ingressId = $ingressId;

        return $clone;
    }

    public function withoutIngressId(): self
    {
        $clone = clone $this;
        unset($clone->ingressId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DnsSetRecordSetManagedOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DnsSetRecordSetManagedOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $ingressId = null;
        if (isset($input->{'ingressId'})) {
            $ingressId = $input->{'ingressId'};
        }

        $obj = new self();
        $obj->ingressId = $ingressId;
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
        if (isset($this->ingressId)) {
            $output['ingressId'] = $this->ingressId;
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
    }
}
