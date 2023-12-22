<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackup;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class CreateProjectBackupRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'description' => [
                'description' => 'Description of the Backup.',
                'example' => 'I\'m a ProjectBackup',
                'type' => 'string',
            ],
            'expirationTime' => [
                'description' => 'Time when to expire the Backup.',
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'expirationTime',
        ],
        'type' => 'object',
    ];

    /**
     * Description of the Backup.
     *
     * @var string|null
     */
    private ?string $description = null;

    /**
     * Time when to expire the Backup.
     *
     * @var DateTime
     */
    private DateTime $expirationTime;

    /**
     * @param DateTime $expirationTime
     */
    public function __construct(DateTime $expirationTime)
    {
        $this->expirationTime = $expirationTime;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    /**
     * @return DateTime
     */
    public function getExpirationTime(): DateTime
    {
        return $this->expirationTime;
    }

    /**
     * @param string $description
     * @return self
     */
    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDescription(): self
    {
        $clone = clone $this;
        unset($clone->description);

        return $clone;
    }

    /**
     * @param DateTime $expirationTime
     * @return self
     */
    public function withExpirationTime(DateTime $expirationTime): self
    {
        $clone = clone $this;
        $clone->expirationTime = $expirationTime;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateProjectBackupRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateProjectBackupRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $expirationTime = new DateTime($input->{'expirationTime'});

        $obj = new self($expirationTime);
        $obj->description = $description;
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
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        $output['expirationTime'] = ($this->expirationTime)->format(DateTime::ATOM);

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
        $this->expirationTime = clone $this->expirationTime;
    }
}
