<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\ReplaceDatabase;

use InvalidArgumentException;
use JsonSchema\Validator;

class ReplaceDatabaseRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'databaseUserIds' => [
                'additionalProperties' => [
                    'type' => 'string',
                ],
                'description' => 'The IDs of the users of the database you want the old database to be replaced with.',
                'type' => 'object',
            ],
            'newDatabaseId' => [
                'description' => 'The ID of the database you want the old database to be replaced with.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'oldDatabaseId' => [
                'description' => 'The ID of the database you want to be replaced.',
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'oldDatabaseId',
            'newDatabaseId',
        ],
        'type' => 'object',
    ];

    /**
     * The IDs of the users of the database you want the old database to be replaced with.
     *
     * @var string[]|null
     */
    private ?array $databaseUserIds = null;

    /**
     * The ID of the database you want the old database to be replaced with.
     */
    private string $newDatabaseId;

    /**
     * The ID of the database you want to be replaced.
     */
    private string $oldDatabaseId;

    public function __construct(string $newDatabaseId, string $oldDatabaseId)
    {
        $this->newDatabaseId = $newDatabaseId;
        $this->oldDatabaseId = $oldDatabaseId;
    }

    /**
     * @return string[]|null
     */
    public function getDatabaseUserIds(): ?array
    {
        return $this->databaseUserIds ?? null;
    }

    public function getNewDatabaseId(): string
    {
        return $this->newDatabaseId;
    }

    public function getOldDatabaseId(): string
    {
        return $this->oldDatabaseId;
    }

    /**
     * @param string[] $databaseUserIds
     */
    public function withDatabaseUserIds(array $databaseUserIds): self
    {
        $validator = new Validator();
        $validator->validate($databaseUserIds, self::$internalValidationSchema['properties']['databaseUserIds']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->databaseUserIds = $databaseUserIds;

        return $clone;
    }

    public function withoutDatabaseUserIds(): self
    {
        $clone = clone $this;
        unset($clone->databaseUserIds);

        return $clone;
    }

    public function withNewDatabaseId(string $newDatabaseId): self
    {
        $validator = new Validator();
        $validator->validate($newDatabaseId, self::$internalValidationSchema['properties']['newDatabaseId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->newDatabaseId = $newDatabaseId;

        return $clone;
    }

    public function withOldDatabaseId(string $oldDatabaseId): self
    {
        $validator = new Validator();
        $validator->validate($oldDatabaseId, self::$internalValidationSchema['properties']['oldDatabaseId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->oldDatabaseId = $oldDatabaseId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ReplaceDatabaseRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ReplaceDatabaseRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $databaseUserIds = null;
        if (isset($input->{'databaseUserIds'})) {
            $databaseUserIds = (array)$input->{'databaseUserIds'};
        }
        $newDatabaseId = $input->{'newDatabaseId'};
        $oldDatabaseId = $input->{'oldDatabaseId'};

        $obj = new self($newDatabaseId, $oldDatabaseId);
        $obj->databaseUserIds = $databaseUserIds;
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
        if (isset($this->databaseUserIds)) {
            $output['databaseUserIds'] = $this->databaseUserIds;
        }
        $output['newDatabaseId'] = $this->newDatabaseId;
        $output['oldDatabaseId'] = $this->oldDatabaseId;

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
    }
}
