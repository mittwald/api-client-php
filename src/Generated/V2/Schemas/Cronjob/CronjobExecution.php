<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Cronjob;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.cronjob.CronjobExecution.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class CronjobExecution
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'abortedBy' => [
                'properties' => [
                    'id' => [
                        'format' => 'uuid',
                        'type' => 'string',
                    ],
                ],
                'type' => 'object',
            ],
            'durationInMilliseconds' => [
                'example' => 12374,
                'format' => 'int64',
                'type' => 'integer',
            ],
            'end' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'executionEnd' => [
                'deprecated' => true,
                'format' => 'date-time',
                'type' => 'string',
            ],
            'executionStart' => [
                'deprecated' => true,
                'format' => 'date-time',
                'type' => 'string',
            ],
            'id' => [
                'example' => 'cron-bd26li-28027320',
                'type' => 'string',
            ],
            'logPath' => [
                'example' => '/var/log/cronjobs/cron-bd26li-28027320.log',
                'type' => 'string',
            ],
            'start' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'status' => [
                'enum' => [
                    'Complete',
                    'Failed',
                    'AbortedBySystem',
                    'Pending',
                    'Running',
                    'AbortedByUser',
                    'TimedOut',
                ],
                'type' => 'string',
            ],
            'successful' => [
                'type' => 'boolean',
            ],
            'triggeredBy' => [
                'properties' => [
                    'id' => [
                        'format' => 'uuid',
                        'type' => 'string',
                    ],
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'id',
            'status',
            'successful',
        ],
        'type' => 'object',
    ];

    private ?CronjobExecutionAbortedBy $abortedBy = null;

    private ?int $durationInMilliseconds = null;

    private ?DateTime $end = null;

    private ?DateTime $executionEnd = null;

    private ?DateTime $executionStart = null;

    private string $id;

    private ?string $logPath = null;

    private ?DateTime $start = null;

    private CronjobExecutionStatus $status;

    private bool $successful;

    private ?CronjobExecutionTriggeredBy $triggeredBy = null;

    public function __construct(string $id, CronjobExecutionStatus $status, bool $successful)
    {
        $this->id = $id;
        $this->status = $status;
        $this->successful = $successful;
    }

    public function getAbortedBy(): ?CronjobExecutionAbortedBy
    {
        return $this->abortedBy ?? null;
    }

    public function getDurationInMilliseconds(): ?int
    {
        return $this->durationInMilliseconds ?? null;
    }

    public function getEnd(): ?DateTime
    {
        return $this->end ?? null;
    }

    public function getExecutionEnd(): ?DateTime
    {
        return $this->executionEnd ?? null;
    }

    public function getExecutionStart(): ?DateTime
    {
        return $this->executionStart ?? null;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getLogPath(): ?string
    {
        return $this->logPath ?? null;
    }

    public function getStart(): ?DateTime
    {
        return $this->start ?? null;
    }

    public function getStatus(): CronjobExecutionStatus
    {
        return $this->status;
    }

    public function getSuccessful(): bool
    {
        return $this->successful;
    }

    public function getTriggeredBy(): ?CronjobExecutionTriggeredBy
    {
        return $this->triggeredBy ?? null;
    }

    public function withAbortedBy(CronjobExecutionAbortedBy $abortedBy): self
    {
        $clone = clone $this;
        $clone->abortedBy = $abortedBy;

        return $clone;
    }

    public function withoutAbortedBy(): self
    {
        $clone = clone $this;
        unset($clone->abortedBy);

        return $clone;
    }

    public function withDurationInMilliseconds(int $durationInMilliseconds): self
    {
        $validator = new Validator();
        $validator->validate($durationInMilliseconds, static::$schema['properties']['durationInMilliseconds']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->durationInMilliseconds = $durationInMilliseconds;

        return $clone;
    }

    public function withoutDurationInMilliseconds(): self
    {
        $clone = clone $this;
        unset($clone->durationInMilliseconds);

        return $clone;
    }

    public function withEnd(DateTime $end): self
    {
        $clone = clone $this;
        $clone->end = $end;

        return $clone;
    }

    public function withoutEnd(): self
    {
        $clone = clone $this;
        unset($clone->end);

        return $clone;
    }

    public function withExecutionEnd(DateTime $executionEnd): self
    {
        $clone = clone $this;
        $clone->executionEnd = $executionEnd;

        return $clone;
    }

    public function withoutExecutionEnd(): self
    {
        $clone = clone $this;
        unset($clone->executionEnd);

        return $clone;
    }

    public function withExecutionStart(DateTime $executionStart): self
    {
        $clone = clone $this;
        $clone->executionStart = $executionStart;

        return $clone;
    }

    public function withoutExecutionStart(): self
    {
        $clone = clone $this;
        unset($clone->executionStart);

        return $clone;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    public function withLogPath(string $logPath): self
    {
        $validator = new Validator();
        $validator->validate($logPath, static::$schema['properties']['logPath']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->logPath = $logPath;

        return $clone;
    }

    public function withoutLogPath(): self
    {
        $clone = clone $this;
        unset($clone->logPath);

        return $clone;
    }

    public function withStart(DateTime $start): self
    {
        $clone = clone $this;
        $clone->start = $start;

        return $clone;
    }

    public function withoutStart(): self
    {
        $clone = clone $this;
        unset($clone->start);

        return $clone;
    }

    public function withStatus(CronjobExecutionStatus $status): self
    {
        $clone = clone $this;
        $clone->status = $status;

        return $clone;
    }

    public function withSuccessful(bool $successful): self
    {
        $validator = new Validator();
        $validator->validate($successful, static::$schema['properties']['successful']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->successful = $successful;

        return $clone;
    }

    public function withTriggeredBy(CronjobExecutionTriggeredBy $triggeredBy): self
    {
        $clone = clone $this;
        $clone->triggeredBy = $triggeredBy;

        return $clone;
    }

    public function withoutTriggeredBy(): self
    {
        $clone = clone $this;
        unset($clone->triggeredBy);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CronjobExecution Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CronjobExecution
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $abortedBy = null;
        if (isset($input->{'abortedBy'})) {
            $abortedBy = CronjobExecutionAbortedBy::buildFromInput($input->{'abortedBy'}, validate: $validate);
        }
        $durationInMilliseconds = null;
        if (isset($input->{'durationInMilliseconds'})) {
            $durationInMilliseconds = (int)($input->{'durationInMilliseconds'});
        }
        $end = null;
        if (isset($input->{'end'})) {
            $end = new DateTime($input->{'end'});
        }
        $executionEnd = null;
        if (isset($input->{'executionEnd'})) {
            $executionEnd = new DateTime($input->{'executionEnd'});
        }
        $executionStart = null;
        if (isset($input->{'executionStart'})) {
            $executionStart = new DateTime($input->{'executionStart'});
        }
        $id = $input->{'id'};
        $logPath = null;
        if (isset($input->{'logPath'})) {
            $logPath = $input->{'logPath'};
        }
        $start = null;
        if (isset($input->{'start'})) {
            $start = new DateTime($input->{'start'});
        }
        $status = CronjobExecutionStatus::from($input->{'status'});
        $successful = (bool)($input->{'successful'});
        $triggeredBy = null;
        if (isset($input->{'triggeredBy'})) {
            $triggeredBy = CronjobExecutionTriggeredBy::buildFromInput($input->{'triggeredBy'}, validate: $validate);
        }

        $obj = new self($id, $status, $successful);
        $obj->abortedBy = $abortedBy;
        $obj->durationInMilliseconds = $durationInMilliseconds;
        $obj->end = $end;
        $obj->executionEnd = $executionEnd;
        $obj->executionStart = $executionStart;
        $obj->logPath = $logPath;
        $obj->start = $start;
        $obj->triggeredBy = $triggeredBy;
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
        if (isset($this->abortedBy)) {
            $output['abortedBy'] = ($this->abortedBy)->toJson();
        }
        if (isset($this->durationInMilliseconds)) {
            $output['durationInMilliseconds'] = $this->durationInMilliseconds;
        }
        if (isset($this->end)) {
            $output['end'] = ($this->end)->format(DateTime::ATOM);
        }
        if (isset($this->executionEnd)) {
            $output['executionEnd'] = ($this->executionEnd)->format(DateTime::ATOM);
        }
        if (isset($this->executionStart)) {
            $output['executionStart'] = ($this->executionStart)->format(DateTime::ATOM);
        }
        $output['id'] = $this->id;
        if (isset($this->logPath)) {
            $output['logPath'] = $this->logPath;
        }
        if (isset($this->start)) {
            $output['start'] = ($this->start)->format(DateTime::ATOM);
        }
        $output['status'] = ($this->status)->value;
        $output['successful'] = $this->successful;
        if (isset($this->triggeredBy)) {
            $output['triggeredBy'] = ($this->triggeredBy)->toJson();
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
        if (isset($this->abortedBy)) {
            $this->abortedBy = clone $this->abortedBy;
        }
        if (isset($this->end)) {
            $this->end = clone $this->end;
        }
        if (isset($this->executionEnd)) {
            $this->executionEnd = clone $this->executionEnd;
        }
        if (isset($this->executionStart)) {
            $this->executionStart = clone $this->executionStart;
        }
        if (isset($this->start)) {
            $this->start = clone $this->start;
        }
        if (isset($this->triggeredBy)) {
            $this->triggeredBy = clone $this->triggeredBy;
        }
    }
}
