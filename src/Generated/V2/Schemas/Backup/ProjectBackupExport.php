<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Backup;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.backup.ProjectBackupExport.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ProjectBackupExport
{
    /**
     * Schema used to validate input for creating instances of this class
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

    private ?string $downloadURL = null;

    private ?DateTime $expiresAt = null;

    private string $format;

    private ?ProjectBackupExportPhase $phase = null;

    private bool $withPassword;

    public function __construct(string $format, bool $withPassword)
    {
        $this->format = $format;
        $this->withPassword = $withPassword;
    }

    public function getDownloadURL(): ?string
    {
        return $this->downloadURL ?? null;
    }

    public function getExpiresAt(): ?DateTime
    {
        return $this->expiresAt ?? null;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function getPhase(): ?ProjectBackupExportPhase
    {
        return $this->phase ?? null;
    }

    public function getWithPassword(): bool
    {
        return $this->withPassword;
    }

    public function withDownloadURL(string $downloadURL): self
    {
        $validator = new Validator();
        $validator->validate($downloadURL, self::$schema['properties']['downloadURL']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->downloadURL = $downloadURL;

        return $clone;
    }

    public function withoutDownloadURL(): self
    {
        $clone = clone $this;
        unset($clone->downloadURL);

        return $clone;
    }

    public function withExpiresAt(DateTime $expiresAt): self
    {
        $clone = clone $this;
        $clone->expiresAt = $expiresAt;

        return $clone;
    }

    public function withoutExpiresAt(): self
    {
        $clone = clone $this;
        unset($clone->expiresAt);

        return $clone;
    }

    public function withFormat(string $format): self
    {
        $validator = new Validator();
        $validator->validate($format, self::$schema['properties']['format']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->format = $format;

        return $clone;
    }

    public function withPhase(ProjectBackupExportPhase $phase): self
    {
        $clone = clone $this;
        $clone->phase = $phase;

        return $clone;
    }

    public function withoutPhase(): self
    {
        $clone = clone $this;
        unset($clone->phase);

        return $clone;
    }

    public function withWithPassword(bool $withPassword): self
    {
        $validator = new Validator();
        $validator->validate($withPassword, self::$schema['properties']['withPassword']);
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
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
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
        if (isset($this->expiresAt)) {
            $this->expiresAt = clone $this->expiresAt;
        }
    }
}
