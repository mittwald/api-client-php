<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

use InvalidArgumentException;
use JsonSchema\Validator;

class CorrectionDefinition
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
            'creditPeriod' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.invoice.DatePeriod',
            ],
        ],
        'required' => [
            'contractItemId',
            'creditPeriod',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $contractItemId;

    /**
     * @var DatePeriod
     */
    private DatePeriod $creditPeriod;

    /**
     * @param string $contractItemId
     * @param DatePeriod $creditPeriod
     */
    public function __construct(string $contractItemId, DatePeriod $creditPeriod)
    {
        $this->contractItemId = $contractItemId;
        $this->creditPeriod = $creditPeriod;
    }

    /**
     * @return string
     */
    public function getContractItemId(): string
    {
        return $this->contractItemId;
    }

    /**
     * @return DatePeriod
     */
    public function getCreditPeriod(): DatePeriod
    {
        return $this->creditPeriod;
    }

    /**
     * @param string $contractItemId
     * @return self
     */
    public function withContractItemId(string $contractItemId): self
    {
        $validator = new Validator();
        $validator->validate($contractItemId, static::$schema['properties']['contractItemId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractItemId = $contractItemId;

        return $clone;
    }

    /**
     * @param DatePeriod $creditPeriod
     * @return self
     */
    public function withCreditPeriod(DatePeriod $creditPeriod): self
    {
        $clone = clone $this;
        $clone->creditPeriod = $creditPeriod;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CorrectionDefinition Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CorrectionDefinition
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contractItemId = $input->{'contractItemId'};
        $creditPeriod = DatePeriod::buildFromInput($input->{'creditPeriod'}, validate: $validate);

        $obj = new self($contractItemId, $creditPeriod);

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
        $output['contractItemId'] = $this->contractItemId;
        $output['creditPeriod'] = $this->creditPeriod->toJson();

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
