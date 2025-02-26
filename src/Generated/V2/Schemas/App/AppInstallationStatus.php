<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * AppInstallationStatus describes the overall runtime status of an
 * AppInstallation.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class AppInstallationStatus
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'description' => 'AppInstallationStatus describes the overall runtime status of an AppInstallation.',
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

    private int|float|null $lastExitCode = null;

    private string $logFileLocation;

    private AppInstallationStatusState $state;

    private int|float|null $uptimeSeconds = null;

    public function __construct(string $logFileLocation, AppInstallationStatusState $state)
    {
        $this->logFileLocation = $logFileLocation;
        $this->state = $state;
    }

    public function getLastExitCode(): int|float|null
    {
        return $this->lastExitCode;
    }

    public function getLogFileLocation(): string
    {
        return $this->logFileLocation;
    }

    public function getState(): AppInstallationStatusState
    {
        return $this->state;
    }

    public function getUptimeSeconds(): int|float|null
    {
        return $this->uptimeSeconds;
    }

    public function withLastExitCode(int|float $lastExitCode): self
    {
        $validator = new Validator();
        $validator->validate($lastExitCode, self::$schema['properties']['lastExitCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->lastExitCode = $lastExitCode;

        return $clone;
    }

    public function withoutLastExitCode(): self
    {
        $clone = clone $this;
        unset($clone->lastExitCode);

        return $clone;
    }

    public function withLogFileLocation(string $logFileLocation): self
    {
        $validator = new Validator();
        $validator->validate($logFileLocation, self::$schema['properties']['logFileLocation']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->logFileLocation = $logFileLocation;

        return $clone;
    }

    public function withState(AppInstallationStatusState $state): self
    {
        $clone = clone $this;
        $clone->state = $state;

        return $clone;
    }

    public function withUptimeSeconds(int|float $uptimeSeconds): self
    {
        $validator = new Validator();
        $validator->validate($uptimeSeconds, self::$schema['properties']['uptimeSeconds']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->uptimeSeconds = $uptimeSeconds;

        return $clone;
    }

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
            $lastExitCode = str_contains((string)($input->{'lastExitCode'}), '.') ? (float)($input->{'lastExitCode'}) : (int)($input->{'lastExitCode'});
        }
        $logFileLocation = $input->{'logFileLocation'};
        $state = AppInstallationStatusState::from($input->{'state'});
        $uptimeSeconds = null;
        if (isset($input->{'uptimeSeconds'})) {
            $uptimeSeconds = str_contains((string)($input->{'uptimeSeconds'}), '.') ? (float)($input->{'uptimeSeconds'}) : (int)($input->{'uptimeSeconds'});
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
        $validator = new \Mittwald\ApiClient\Validator\Validator();
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, self::$schema);

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
