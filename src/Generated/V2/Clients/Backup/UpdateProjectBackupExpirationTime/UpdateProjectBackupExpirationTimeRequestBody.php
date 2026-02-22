<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupExpirationTime;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateProjectBackupExpirationTimeRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'expirationTime' => [
                'description' => 'Time when to expire the Backup.',
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * Time when to expire the Backup.
     */
    private ?DateTime $expirationTime = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getExpirationTime(): ?DateTime
    {
        return $this->expirationTime ?? null;
    }

    public function withExpirationTime(DateTime $expirationTime): self
    {
        $clone = clone $this;
        $clone->expirationTime = $expirationTime;

        return $clone;
    }

    public function withoutExpirationTime(): self
    {
        $clone = clone $this;
        unset($clone->expirationTime);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateProjectBackupExpirationTimeRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateProjectBackupExpirationTimeRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $expirationTime = null;
        if (isset($input->{'expirationTime'})) {
            $expirationTime = new DateTime($input->{'expirationTime'});
        }

        $obj = new self();
        $obj->expirationTime = $expirationTime;
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
        if (isset($this->expirationTime)) {
            $output['expirationTime'] = ($this->expirationTime)->format(DateTime::ATOM);
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
        if (isset($this->expirationTime)) {
            $this->expirationTime = clone $this->expirationTime;
        }
    }
}
