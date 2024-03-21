<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\GetNextTerminationDateForItem;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class GetNextTerminationDateForItemOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'contractItemId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'nextTerminationDate' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'contractItemId',
            'nextTerminationDate',
        ],
    ];

    private string $contractItemId;

    private DateTime $nextTerminationDate;

    public function __construct(string $contractItemId, DateTime $nextTerminationDate)
    {
        $this->contractItemId = $contractItemId;
        $this->nextTerminationDate = $nextTerminationDate;
    }

    public function getContractItemId(): string
    {
        return $this->contractItemId;
    }

    public function getNextTerminationDate(): DateTime
    {
        return $this->nextTerminationDate;
    }

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

    public function withNextTerminationDate(DateTime $nextTerminationDate): self
    {
        $clone = clone $this;
        $clone->nextTerminationDate = $nextTerminationDate;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetNextTerminationDateForItemOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetNextTerminationDateForItemOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contractItemId = $input->{'contractItemId'};
        $nextTerminationDate = new DateTime($input->{'nextTerminationDate'});

        $obj = new self($contractItemId, $nextTerminationDate);

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
        $output['nextTerminationDate'] = ($this->nextTerminationDate)->format(DateTime::ATOM);

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
        $this->nextTerminationDate = clone $this->nextTerminationDate;
    }
}
