<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlDatabase;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Database\CreateMySqlDatabase;
use Mittwald\ApiClient\Generated\V2\Schemas\Database\CreateMySqlUserWithDatabase;

class CreateMysqlDatabaseRequestBody
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
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

    /**
     * @var CreateMySqlDatabase
     */
    private CreateMySqlDatabase $database;

    /**
     * @var CreateMySqlUserWithDatabase
     */
    private CreateMySqlUserWithDatabase $user;

    private array $headers = [

    ];

    /**
     * @param CreateMySqlDatabase $database
     * @param CreateMySqlUserWithDatabase $user
     */
    public function __construct(CreateMySqlDatabase $database, CreateMySqlUserWithDatabase $user)
    {
        $this->database = $database;
        $this->user = $user;
    }

    /**
     * @return CreateMySqlDatabase
     */
    public function getDatabase(): CreateMySqlDatabase
    {
        return $this->database;
    }

    /**
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\Database\CreateMySqlUserWithDatabase
     */
    public function getUser(): CreateMySqlUserWithDatabase
    {
        return $this->user;
    }

    /**
     * @param CreateMySqlDatabase $database
     * @return self
     */
    public function withDatabase(CreateMySqlDatabase $database): self
    {
        $clone = clone $this;
        $clone->database = $database;

        return $clone;
    }

    /**
     * @param CreateMySqlUserWithDatabase $user
     * @return self
     */
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

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $projectId = urlencode($mapped['projectId']);
        return '/v2/projects/' . $projectId . '/mysql-databases';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
