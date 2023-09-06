<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

use InvalidArgumentException;
use JsonSchema\Validator;

class AppInstallationStatus
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'description' => '`AppInstallationStatus` describes the overall runtime status of an `AppInstallation`',
        'properties' => [
            'lastExitCode' => [
                'type' => 'number',
            ],
            'logFileLocation' => [
                'type' => 'string',
            ],
            'state' => [
                'enum' => [
                    'running',
                    'stopped',
                    'exited',
                ],
                'type' => 'string',
            ],
            'uptimeSeconds' => [
                'type' => 'number',
            ],
        ],
        'required' => [
            'state',
            'logFileLocation',
        ],
        'type' => 'object',
    ];

    /**
     * @var int|float|null
     */
    private int|float|null $lastExitCode = null;

    /**
     * @var string
     */
    private string $logFileLocation;

    /**
     * @var AppInstallationStatusState
     */
    private AppInstallationStatusState $state;

    /**
     * @var int|float|null
     */
    private int|float|null $uptimeSeconds = null;

    /**
     * @param string $logFileLocation
     * @param AppInstallationStatusState $state
     */
    public function __construct(string $logFileLocation, AppInstallationStatusState $state)
    {
        $this->logFileLocation = $logFileLocation;
        $this->state = $state;
    }

    /**
     * @return int|float|null
     */
    public function getLastExitCode(): int|float|null
    {
        return $this->lastExitCode;
    }

    /**
     * @return string
     */
    public function getLogFileLocation(): string
    {
        return $this->logFileLocation;
    }

    /**
     * @return AppInstallationStatusState
     */
    public function getState(): AppInstallationStatusState
    {
        return $this->state;
    }

    /**
     * @return int|float|null
     */
    public function getUptimeSeconds(): int|float|null
    {
        return $this->uptimeSeconds;
    }

    /**
     * @param int|float $lastExitCode
     * @return self
     */
    public function withLastExitCode(int|float $lastExitCode): self
    {
        $validator = new Validator();
        $validator->validate($lastExitCode, static::$schema['properties']['lastExitCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->lastExitCode = $lastExitCode;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutLastExitCode(): self
    {
        $clone = clone $this;
        unset($clone->lastExitCode);

        return $clone;
    }

    /**
     * @param string $logFileLocation
     * @return self
     */
    public function withLogFileLocation(string $logFileLocation): self
    {
        $validator = new Validator();
        $validator->validate($logFileLocation, static::$schema['properties']['logFileLocation']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->logFileLocation = $logFileLocation;

        return $clone;
    }

    /**
     * @param AppInstallationStatusState $state
     * @return self
     */
    public function withState(AppInstallationStatusState $state): self
    {
        $clone = clone $this;
        $clone->state = $state;

        return $clone;
    }

    /**
     * @param int|float $uptimeSeconds
     * @return self
     */
    public function withUptimeSeconds(int|float $uptimeSeconds): self
    {
        $validator = new Validator();
        $validator->validate($uptimeSeconds, static::$schema['properties']['uptimeSeconds']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->uptimeSeconds = $uptimeSeconds;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutUptimeSeconds(): self
    {
        $clone = clone $this;
        unset($clone->uptimeSeconds);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AppInstallationStatus Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AppInstallationStatus
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $lastExitCode = null;
        if (isset($input->{'lastExitCode'})) {
            $lastExitCode = str_contains($input->{'lastExitCode'}, '.') ? (float)($input->{'lastExitCode'}) : (int)($input->{'lastExitCode'});
        }
        $logFileLocation = $input->{'logFileLocation'};
        $state = AppInstallationStatusState::from($input->{'state'});
        $uptimeSeconds = null;
        if (isset($input->{'uptimeSeconds'})) {
            $uptimeSeconds = str_contains($input->{'uptimeSeconds'}, '.') ? (float)($input->{'uptimeSeconds'}) : (int)($input->{'uptimeSeconds'});
        }

        $obj = new self($logFileLocation, $state);
        $obj->lastExitCode = $lastExitCode;
        $obj->uptimeSeconds = $uptimeSeconds;
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
        if (isset($this->lastExitCode)) {
            $output['lastExitCode'] = $this->lastExitCode;
        }
        $output['logFileLocation'] = $this->logFileLocation;
        $output['state'] = ($this->state)->value;
        if (isset($this->uptimeSeconds)) {
            $output['uptimeSeconds'] = $this->uptimeSeconds;
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
    }
}
