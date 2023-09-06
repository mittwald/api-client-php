<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Backup;

use InvalidArgumentException;
use DateTime;

class ProjectBackupExport
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'downloadURL' => [
                'format' => 'url',
                'type' => 'string',
            ],
            'expiresAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'format' => [
                'example' => 'tar',
                'type' => 'string',
            ],
            'phase' => [
                'enum' => [
                    '',
                    'Pending',
                    'Exporting',
                    'Failed',
                    'Completed',
                    'Expired',
                ],
                'example' => 'Completed',
                'type' => 'string',
            ],
            'withPassword' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'format',
            'withPassword',
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $downloadURL = null;

    /**
     * @var DateTime|null
     */
    private ?DateTime $expiresAt = null;

    /**
     * @var string
     */
    private string $format;

    /**
     * @var ProjectBackupExportPhase|null
     */
    private ?ProjectBackupExportPhase $phase = null;

    /**
     * @var bool
     */
    private bool $withPassword;

    /**
     * @param string $format
     * @param bool $withPassword
     */
    public function __construct(string $format, bool $withPassword)
    {
        $this->format = $format;
        $this->withPassword = $withPassword;
    }

    /**
     * @return string|null
     */
    public function getDownloadURL(): ?string
    {
        return $this->downloadURL ?? null;
    }

    /**
     * @return DateTime|null
     */
    public function getExpiresAt(): ?DateTime
    {
        return $this->expiresAt ?? null;
    }

    /**
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * @return ProjectBackupExportPhase|null
     */
    public function getPhase(): ?ProjectBackupExportPhase
    {
        return $this->phase ?? null;
    }

    /**
     * @return bool
     */
    public function getWithPassword(): bool
    {
        return $this->withPassword;
    }

    /**
     * @param string $downloadURL
     * @return self
     */
    public function withDownloadURL(string $downloadURL): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($downloadURL, static::$schema['properties']['downloadURL']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->downloadURL = $downloadURL;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDownloadURL(): self
    {
        $clone = clone $this;
        unset($clone->downloadURL);

        return $clone;
    }

    /**
     * @param DateTime $expiresAt
     * @return self
     */
    public function withExpiresAt(DateTime $expiresAt): self
    {
        $clone = clone $this;
        $clone->expiresAt = $expiresAt;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExpiresAt(): self
    {
        $clone = clone $this;
        unset($clone->expiresAt);

        return $clone;
    }

    /**
     * @param string $format
     * @return self
     */
    public function withFormat(string $format): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($format, static::$schema['properties']['format']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->format = $format;

        return $clone;
    }

    /**
     * @param ProjectBackupExportPhase $phase
     * @return self
     */
    public function withPhase(ProjectBackupExportPhase $phase): self
    {
        $clone = clone $this;
        $clone->phase = $phase;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutPhase(): self
    {
        $clone = clone $this;
        unset($clone->phase);

        return $clone;
    }

    /**
     * @param bool $withPassword
     * @return self
     */
    public function withWithPassword(bool $withPassword): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($withPassword, static::$schema['properties']['withPassword']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->withPassword = $withPassword;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ProjectBackupExport Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ProjectBackupExport
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $downloadURL = null;
        if (isset($input->{'downloadURL'})) {
            $downloadURL = $input->{'downloadURL'};
        }
        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = new DateTime($input->{'expiresAt'});
        }
        $format = $input->{'format'};
        $phase = null;
        if (isset($input->{'phase'})) {
            $phase = ProjectBackupExportPhase::from($input->{'phase'});
        }
        $withPassword = (bool)($input->{'withPassword'});

        $obj = new self($format, $withPassword);
        $obj->downloadURL = $downloadURL;
        $obj->expiresAt = $expiresAt;
        $obj->phase = $phase;
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
        if (isset($this->downloadURL)) {
            $output['downloadURL'] = $this->downloadURL;
        }
        if (isset($this->expiresAt)) {
            $output['expiresAt'] = ($this->expiresAt)->format(DateTime::ATOM);
        }
        $output['format'] = $this->format;
        if (isset($this->phase)) {
            $output['phase'] = ($this->phase)->value;
        }
        $output['withPassword'] = $this->withPassword;

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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        if (isset($this->expiresAt)) {
            $this->expiresAt = clone $this->expiresAt;
        }
    }
}
