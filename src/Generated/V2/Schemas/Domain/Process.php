<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class Process
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'error' => [
                'type' => 'string',
            ],
            'lastUpdate' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'processType' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.domain.ProcessType',
            ],
            'state' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.domain.ProcessState',
            ],
            'status' => [
                'type' => 'string',
            ],
            'statusCode' => [
                'type' => 'string',
            ],
            'transactionId' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'transactionId',
            'processType',
            'state',
            'lastUpdate',
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $error = null;

    /**
     * @var DateTime
     */
    private DateTime $lastUpdate;

    /**
     * @var ProcessType
     */
    private ProcessType $processType;

    /**
     * @var ProcessState
     */
    private ProcessState $state;

    /**
     * @var string|null
     */
    private ?string $status = null;

    /**
     * @var string|null
     */
    private ?string $statusCode = null;

    /**
     * @var string
     */
    private string $transactionId;

    /**
     * @param DateTime $lastUpdate
     * @param ProcessType $processType
     * @param ProcessState $state
     * @param string $transactionId
     */
    public function __construct(DateTime $lastUpdate, ProcessType $processType, ProcessState $state, string $transactionId)
    {
        $this->lastUpdate = $lastUpdate;
        $this->processType = $processType;
        $this->state = $state;
        $this->transactionId = $transactionId;
    }

    /**
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error ?? null;
    }

    /**
     * @return DateTime
     */
    public function getLastUpdate(): DateTime
    {
        return $this->lastUpdate;
    }

    /**
     * @return ProcessType
     */
    public function getProcessType(): ProcessType
    {
        return $this->processType;
    }

    /**
     * @return ProcessState
     */
    public function getState(): ProcessState
    {
        return $this->state;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status ?? null;
    }

    /**
     * @return string|null
     */
    public function getStatusCode(): ?string
    {
        return $this->statusCode ?? null;
    }

    /**
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * @param string $error
     * @return self
     */
    public function withError(string $error): self
    {
        $validator = new Validator();
        $validator->validate($error, static::$schema['properties']['error']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->error = $error;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutError(): self
    {
        $clone = clone $this;
        unset($clone->error);

        return $clone;
    }

    /**
     * @param DateTime $lastUpdate
     * @return self
     */
    public function withLastUpdate(DateTime $lastUpdate): self
    {
        $clone = clone $this;
        $clone->lastUpdate = $lastUpdate;

        return $clone;
    }

    /**
     * @param ProcessType $processType
     * @return self
     */
    public function withProcessType(ProcessType $processType): self
    {
        $clone = clone $this;
        $clone->processType = $processType;

        return $clone;
    }

    /**
     * @param ProcessState $state
     * @return self
     */
    public function withState(ProcessState $state): self
    {
        $clone = clone $this;
        $clone->state = $state;

        return $clone;
    }

    /**
     * @param string $status
     * @return self
     */
    public function withStatus(string $status): self
    {
        $validator = new Validator();
        $validator->validate($status, static::$schema['properties']['status']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->status = $status;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutStatus(): self
    {
        $clone = clone $this;
        unset($clone->status);

        return $clone;
    }

    /**
     * @param string $statusCode
     * @return self
     */
    public function withStatusCode(string $statusCode): self
    {
        $validator = new Validator();
        $validator->validate($statusCode, static::$schema['properties']['statusCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->statusCode = $statusCode;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutStatusCode(): self
    {
        $clone = clone $this;
        unset($clone->statusCode);

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
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Process Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Process
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $error = null;
        if (isset($input->{'error'})) {
            $error = $input->{'error'};
        }
        $lastUpdate = new DateTime($input->{'lastUpdate'});
        $processType = ProcessType::from($input->{'processType'});
        $state = ProcessState::from($input->{'state'});
        $status = null;
        if (isset($input->{'status'})) {
            $status = $input->{'status'};
        }
        $statusCode = null;
        if (isset($input->{'statusCode'})) {
            $statusCode = $input->{'statusCode'};
        }
        $transactionId = $input->{'transactionId'};

        $obj = new self($lastUpdate, $processType, $state, $transactionId);
        $obj->error = $error;
        $obj->status = $status;
        $obj->statusCode = $statusCode;
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
            $output['error'] = $this->error;
        }
        $output['lastUpdate'] = ($this->lastUpdate)->format(DateTime::ATOM);
        $output['processType'] = $this->processType->value;
        $output['state'] = $this->state->value;
        if (isset($this->status)) {
            $output['status'] = $this->status;
        }
        if (isset($this->statusCode)) {
            $output['statusCode'] = $this->statusCode;
        }
        $output['transactionId'] = $this->transactionId;

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
        $this->lastUpdate = clone $this->lastUpdate;
    }
}
