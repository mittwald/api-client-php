<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTermination;

use InvalidArgumentException;
use JsonSchema\Validator;

class CancelContractTerminationOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'contractId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'isCancelled' => [
                'type' => 'boolean',
            ],
        ],
    ];

    private ?string $contractId = null;

    private ?bool $isCancelled = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getContractId(): ?string
    {
        return $this->contractId ?? null;
    }

    public function getIsCancelled(): ?bool
    {
        return $this->isCancelled ?? null;
    }

    public function withContractId(string $contractId): self
    {
        $validator = new Validator();
        $validator->validate($contractId, self::$internalValidationSchema['properties']['contractId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractId = $contractId;

        return $clone;
    }

    public function withoutContractId(): self
    {
        $clone = clone $this;
        unset($clone->contractId);

        return $clone;
    }

    public function withIsCancelled(bool $isCancelled): self
    {
        $validator = new Validator();
        $validator->validate($isCancelled, self::$internalValidationSchema['properties']['isCancelled']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isCancelled = $isCancelled;

        return $clone;
    }

    public function withoutIsCancelled(): self
    {
        $clone = clone $this;
        unset($clone->isCancelled);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CancelContractTerminationOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CancelContractTerminationOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contractId = null;
        if (isset($input->{'contractId'})) {
            $contractId = $input->{'contractId'};
        }
        $isCancelled = null;
        if (isset($input->{'isCancelled'})) {
            $isCancelled = (bool)($input->{'isCancelled'});
        }

        $obj = new self();
        $obj->contractId = $contractId;
        $obj->isCancelled = $isCancelled;
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
        if (isset($this->contractId)) {
            $output['contractId'] = $this->contractId;
        }
        if (isset($this->isCancelled)) {
            $output['isCancelled'] = $this->isCancelled;
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
