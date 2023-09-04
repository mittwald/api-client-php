<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Cronjob;

class CronjobExecution
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
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
            'shortId',
            'logPath',
            'status',
            'durationInMilliseconds',
            'successful',
        ],
        'type' => 'object',
    ];

    /**
     * @var CronjobExecutionAbortedBy|null
     */
    private ?CronjobExecutionAbortedBy $abortedBy = null;

    /**
     * @var int
     */
    private int $durationInMilliseconds;

    /**
     * @var \DateTime|null
     */
    private ?\DateTime $end = null;

    /**
     * @var \DateTime|null
     */
    private ?\DateTime $executionEnd = null;

    /**
     * @var \DateTime|null
     */
    private ?\DateTime $executionStart = null;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $logPath;

    /**
     * @var \DateTime|null
     */
    private ?\DateTime $start = null;

    /**
     * @var CronjobExecutionStatus
     */
    private CronjobExecutionStatus $status;

    /**
     * @var bool
     */
    private bool $successful;

    /**
     * @var CronjobExecutionTriggeredBy|null
     */
    private ?CronjobExecutionTriggeredBy $triggeredBy = null;

    /**
     * @param int $durationInMilliseconds
     * @param string $id
     * @param string $logPath
     * @param CronjobExecutionStatus $status
     * @param bool $successful
     */
    public function __construct(int $durationInMilliseconds, string $id, string $logPath, CronjobExecutionStatus $status, bool $successful)
    {
        $this->durationInMilliseconds = $durationInMilliseconds;
        $this->id = $id;
        $this->logPath = $logPath;
        $this->status = $status;
        $this->successful = $successful;
    }

    /**
     * @return CronjobExecutionAbortedBy|null
     */
    public function getAbortedBy() : ?CronjobExecutionAbortedBy
    {
        return $this->abortedBy ?? null;
    }

    /**
     * @return int
     */
    public function getDurationInMilliseconds() : int
    {
        return $this->durationInMilliseconds;
    }

    /**
     * @return \DateTime|null
     */
    public function getEnd() : ?\DateTime
    {
        return $this->end ?? null;
    }

    /**
     * @return \DateTime|null
     */
    public function getExecutionEnd() : ?\DateTime
    {
        return $this->executionEnd ?? null;
    }

    /**
     * @return \DateTime|null
     */
    public function getExecutionStart() : ?\DateTime
    {
        return $this->executionStart ?? null;
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLogPath() : string
    {
        return $this->logPath;
    }

    /**
     * @return \DateTime|null
     */
    public function getStart() : ?\DateTime
    {
        return $this->start ?? null;
    }

    /**
     * @return CronjobExecutionStatus
     */
    public function getStatus() : CronjobExecutionStatus
    {
        return $this->status;
    }

    /**
     * @return bool
     */
    public function getSuccessful() : bool
    {
        return $this->successful;
    }

    /**
     * @return CronjobExecutionTriggeredBy|null
     */
    public function getTriggeredBy() : ?CronjobExecutionTriggeredBy
    {
        return $this->triggeredBy ?? null;
    }

    /**
     * @param CronjobExecutionAbortedBy $abortedBy
     * @return self
     */
    public function withAbortedBy(CronjobExecutionAbortedBy $abortedBy) : self
    {
        $clone = clone $this;
        $clone->abortedBy = $abortedBy;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutAbortedBy() : self
    {
        $clone = clone $this;
        unset($clone->abortedBy);

        return $clone;
    }

    /**
     * @param int $durationInMilliseconds
     * @return self
     */
    public function withDurationInMilliseconds(int $durationInMilliseconds) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($durationInMilliseconds, static::$schema['properties']['durationInMilliseconds']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->durationInMilliseconds = $durationInMilliseconds;

        return $clone;
    }

    /**
     * @param \DateTime $end
     * @return self
     */
    public function withEnd(\DateTime $end) : self
    {
        $clone = clone $this;
        $clone->end = $end;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutEnd() : self
    {
        $clone = clone $this;
        unset($clone->end);

        return $clone;
    }

    /**
     * @param \DateTime $executionEnd
     * @return self
     */
    public function withExecutionEnd(\DateTime $executionEnd) : self
    {
        $clone = clone $this;
        $clone->executionEnd = $executionEnd;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExecutionEnd() : self
    {
        $clone = clone $this;
        unset($clone->executionEnd);

        return $clone;
    }

    /**
     * @param \DateTime $executionStart
     * @return self
     */
    public function withExecutionStart(\DateTime $executionStart) : self
    {
        $clone = clone $this;
        $clone->executionStart = $executionStart;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExecutionStart() : self
    {
        $clone = clone $this;
        unset($clone->executionStart);

        return $clone;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param string $logPath
     * @return self
     */
    public function withLogPath(string $logPath) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($logPath, static::$schema['properties']['logPath']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->logPath = $logPath;

        return $clone;
    }

    /**
     * @param \DateTime $start
     * @return self
     */
    public function withStart(\DateTime $start) : self
    {
        $clone = clone $this;
        $clone->start = $start;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutStart() : self
    {
        $clone = clone $this;
        unset($clone->start);

        return $clone;
    }

    /**
     * @param CronjobExecutionStatus $status
     * @return self
     */
    public function withStatus(CronjobExecutionStatus $status) : self
    {
        $clone = clone $this;
        $clone->status = $status;

        return $clone;
    }

    /**
     * @param bool $successful
     * @return self
     */
    public function withSuccessful(bool $successful) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($successful, static::$schema['properties']['successful']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->successful = $successful;

        return $clone;
    }

    /**
     * @param CronjobExecutionTriggeredBy $triggeredBy
     * @return self
     */
    public function withTriggeredBy(CronjobExecutionTriggeredBy $triggeredBy) : self
    {
        $clone = clone $this;
        $clone->triggeredBy = $triggeredBy;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTriggeredBy() : self
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
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : CronjobExecution
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $abortedBy = null;
        if (isset($input->{'abortedBy'})) {
            $abortedBy = CronjobExecutionAbortedBy::buildFromInput($input->{'abortedBy'}, validate: $validate);
        }
        $durationInMilliseconds = (int)($input->{'durationInMilliseconds'});
        $end = null;
        if (isset($input->{'end'})) {
            $end = new \DateTime($input->{'end'});
        }
        $executionEnd = null;
        if (isset($input->{'executionEnd'})) {
            $executionEnd = new \DateTime($input->{'executionEnd'});
        }
        $executionStart = null;
        if (isset($input->{'executionStart'})) {
            $executionStart = new \DateTime($input->{'executionStart'});
        }
        $id = $input->{'id'};
        $logPath = $input->{'logPath'};
        $start = null;
        if (isset($input->{'start'})) {
            $start = new \DateTime($input->{'start'});
        }
        $status = CronjobExecutionStatus::from($input->{'status'});
        $successful = (bool)($input->{'successful'});
        $triggeredBy = null;
        if (isset($input->{'triggeredBy'})) {
            $triggeredBy = CronjobExecutionTriggeredBy::buildFromInput($input->{'triggeredBy'}, validate: $validate);
        }

        $obj = new self($durationInMilliseconds, $id, $logPath, $status, $successful);
        $obj->abortedBy = $abortedBy;
        $obj->end = $end;
        $obj->executionEnd = $executionEnd;
        $obj->executionStart = $executionStart;
        $obj->start = $start;
        $obj->triggeredBy = $triggeredBy;
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
        if (isset($this->abortedBy)) {
            $output['abortedBy'] = ($this->abortedBy)->toJson();
        }
        $output['durationInMilliseconds'] = $this->durationInMilliseconds;
        if (isset($this->end)) {
            $output['end'] = ($this->end)->format(\DateTime::ATOM);
        }
        if (isset($this->executionEnd)) {
            $output['executionEnd'] = ($this->executionEnd)->format(\DateTime::ATOM);
        }
        if (isset($this->executionStart)) {
            $output['executionStart'] = ($this->executionStart)->format(\DateTime::ATOM);
        }
        $output['id'] = $this->id;
        $output['logPath'] = $this->logPath;
        if (isset($this->start)) {
            $output['start'] = ($this->start)->format(\DateTime::ATOM);
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

