<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlDatabase;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Database\CreateMySqlDatabase;
use Mittwald\ApiClient\Generated\V2\Schemas\Database\CreateMySqlUserWithDatabase;

class CreateMysqlDatabaseRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'database' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.database.CreateMySqlDatabase',
            ],
            'user' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.database.CreateMySqlUserWithDatabase',
            ],
        ],
        'required' => [
            'database',
            'user',
        ],
        'type' => 'object',
    ];

    private CreateMySqlDatabase $database;

    private CreateMySqlUserWithDatabase $user;

    public function __construct(CreateMySqlDatabase $database, CreateMySqlUserWithDatabase $user)
    {
        $this->database = $database;
        $this->user = $user;
    }

    public function getDatabase(): CreateMySqlDatabase
    {
        return $this->database;
    }

    public function getUser(): CreateMySqlUserWithDatabase
    {
        return $this->user;
    }

    public function withDatabase(CreateMySqlDatabase $database): self
    {
        $clone = clone $this;
        $clone->database = $database;

        return $clone;
    }

    public function withUser(CreateMySqlUserWithDatabase $user): self
    {
        $clone = clone $this;
        $clone->user = $user;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateMysqlDatabaseRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateMysqlDatabaseRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $database = CreateMySqlDatabase::buildFromInput($input->{'database'}, validate: $validate);
        $user = CreateMySqlUserWithDatabase::buildFromInput($input->{'user'}, validate: $validate);

        $obj = new self($database, $user);

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
        $output['database'] = $this->database->toJson();
        $output['user'] = $this->user->toJson();

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
