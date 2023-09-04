<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

class Cancellation
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'cancellationId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'cancelledAt' => [
                'format' => 'date',
                'type' => 'string',
            ],
            'correctionNumber' => [
                'example' => 'RG1234567',
                'type' => 'string',
            ],
            'pdfId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'reason' => [
                'example' => 'Kulanz',
                'type' => 'string',
            ],
        ],
        'required' => [
            'pdfId',
            'correctionNumber',
            'cancelledAt',
            'cancellationId',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $cancellationId;

    /**
     * @var string
     */
    private string $cancelledAt;

    /**
     * @var string
     */
    private string $correctionNumber;

    /**
     * @var string
     */
    private string $pdfId;

    /**
     * @var string|null
     */
    private ?string $reason = null;

    /**
     * @param string $cancellationId
     * @param string $cancelledAt
     * @param string $correctionNumber
     * @param string $pdfId
     */
    public function __construct(string $cancellationId, string $cancelledAt, string $correctionNumber, string $pdfId)
    {
        $this->cancellationId = $cancellationId;
        $this->cancelledAt = $cancelledAt;
        $this->correctionNumber = $correctionNumber;
        $this->pdfId = $pdfId;
    }

    /**
     * @return string
     */
    public function getCancellationId() : string
    {
        return $this->cancellationId;
    }

    /**
     * @return string
     */
    public function getCancelledAt() : string
    {
        return $this->cancelledAt;
    }

    /**
     * @return string
     */
    public function getCorrectionNumber() : string
    {
        return $this->correctionNumber;
    }

    /**
     * @return string
     */
    public function getPdfId() : string
    {
        return $this->pdfId;
    }

    /**
     * @return string|null
     */
    public function getReason() : ?string
    {
        return $this->reason ?? null;
    }

    /**
     * @param string $cancellationId
     * @return self
     */
    public function withCancellationId(string $cancellationId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($cancellationId, static::$schema['properties']['cancellationId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->cancellationId = $cancellationId;

        return $clone;
    }

    /**
     * @param string $cancelledAt
     * @return self
     */
    public function withCancelledAt(string $cancelledAt) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($cancelledAt, static::$schema['properties']['cancelledAt']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->cancelledAt = $cancelledAt;

        return $clone;
    }

    /**
     * @param string $correctionNumber
     * @return self
     */
    public function withCorrectionNumber(string $correctionNumber) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($correctionNumber, static::$schema['properties']['correctionNumber']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->correctionNumber = $correctionNumber;

        return $clone;
    }

    /**
     * @param string $pdfId
     * @return self
     */
    public function withPdfId(string $pdfId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($pdfId, static::$schema['properties']['pdfId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->pdfId = $pdfId;

        return $clone;
    }

    /**
     * @param string $reason
     * @return self
     */
    public function withReason(string $reason) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($reason, static::$schema['properties']['reason']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->reason = $reason;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutReason() : self
    {
        $clone = clone $this;
        unset($clone->reason);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Cancellation Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : Cancellation
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $cancellationId = $input->{'cancellationId'};
        $cancelledAt = $input->{'cancelledAt'};
        $correctionNumber = $input->{'correctionNumber'};
        $pdfId = $input->{'pdfId'};
        $reason = null;
        if (isset($input->{'reason'})) {
            $reason = $input->{'reason'};
        }

        $obj = new self($cancellationId, $cancelledAt, $correctionNumber, $pdfId);
        $obj->reason = $reason;
        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson() : array
    {
        $output = [];
        $output['cancellationId'] = $this->cancellationId;
        $output['cancelledAt'] = $this->cancelledAt;
        $output['correctionNumber'] = $this->correctionNumber;
        $output['pdfId'] = $this->pdfId;
        if (isset($this->reason)) {
            $output['reason'] = $this->reason;
        }

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
    }
}

