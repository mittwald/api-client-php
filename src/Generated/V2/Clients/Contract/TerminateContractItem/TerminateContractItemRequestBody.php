<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContractItem;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class TerminateContractItemRequestBody
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'reason' => [
                'description' => 'A reason for the Termination can be given as plain text.',
                'example' => 'Server wird nicht mehr benötigt',
                'type' => 'string',
            ],
            'terminationTargetDate' => [
                'description' => 'The termination date has to be a valid date according to activation and contract period of the ContractItem. If none given, the next possible termination date will be used.',
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
    ];

    /**
     * A reason for the Termination can be given as plain text.
     *
     * @var string|null
     */
    private ?string $reason = null;

    /**
     * The termination date has to be a valid date according to activation and contract period of the ContractItem. If none given, the next possible termination date will be used.
     *
     * @var DateTime|null
     */
    private ?DateTime $terminationTargetDate = null;

    private array $headers = [

    ];

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason ?? null;
    }

    /**
     * @return DateTime|null
     */
    public function getTerminationTargetDate(): ?DateTime
    {
        return $this->terminationTargetDate ?? null;
    }

    /**
     * @param string $reason
     * @return self
     */
    public function withReason(string $reason): self
    {
        $validator = new Validator();
        $validator->validate($reason, static::$schema['properties']['reason']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->reason = $reason;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutReason(): self
    {
        $clone = clone $this;
        unset($clone->reason);

        return $clone;
    }

    /**
     * @param DateTime $terminationTargetDate
     * @return self
     */
    public function withTerminationTargetDate(DateTime $terminationTargetDate): self
    {
        $clone = clone $this;
        $clone->terminationTargetDate = $terminationTargetDate;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTerminationTargetDate(): self
    {
        $clone = clone $this;
        unset($clone->terminationTargetDate);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return TerminateContractItemRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): TerminateContractItemRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $reason = null;
        if (isset($input->{'reason'})) {
            $reason = $input->{'reason'};
        }
        $terminationTargetDate = null;
        if (isset($input->{'terminationTargetDate'})) {
            $terminationTargetDate = new DateTime($input->{'terminationTargetDate'});
        }

        $obj = new self();
        $obj->reason = $reason;
        $obj->terminationTargetDate = $terminationTargetDate;
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
        if (isset($this->reason)) {
            $output['reason'] = $this->reason;
        }
        if (isset($this->terminationTargetDate)) {
            $output['terminationTargetDate'] = ($this->terminationTargetDate)->format(DateTime::ATOM);
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
        if (isset($this->terminationTargetDate)) {
            $this->terminationTargetDate = clone $this->terminationTargetDate;
        }
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $contractId = urlencode($mapped['contractId']);
        $contractItemId = urlencode($mapped['contractItemId']);
        return '/v2/contracts/' . $contractId . '/items/' . $contractItemId . '/termination';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
