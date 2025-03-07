<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\SetDatabaseUsers;

use InvalidArgumentException;
use JsonSchema\Validator;

class SetDatabaseUsersRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'databaseUserIds' => [
                'additionalProperties' => [
                    'type' => 'string',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'databaseUserIds',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]
     */
    private array $databaseUserIds;

    /**
     * @param string[] $databaseUserIds
     */
    public function __construct(array $databaseUserIds)
    {
        $this->databaseUserIds = $databaseUserIds;
    }

    /**
     * @return string[]
     */
    public function getDatabaseUserIds(): array
    {
        return $this->databaseUserIds;
    }

    /**
     * @param string[] $databaseUserIds
     */
    public function withDatabaseUserIds(array $databaseUserIds): self
    {
        $validator = new Validator();
        $validator->validate($databaseUserIds, self::$schema['properties']['databaseUserIds']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->databaseUserIds = $databaseUserIds;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SetDatabaseUsersRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SetDatabaseUsersRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $databaseUserIds = (array)$input->{'databaseUserIds'};

        $obj = new self($databaseUserIds);

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
        $output['databaseUserIds'] = $this->databaseUserIds;

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
