<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Database;

use InvalidArgumentException;

class CreateMySqlUser
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'accessIpMask' => [
                'type' => 'string',
            ],
            'accessLevel' => [
                'enum' => [
                    'full',
                    'readonly',
                ],
                'type' => 'string',
            ],
            'databaseId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'description' => [
                'type' => 'string',
            ],
            'externalAccess' => [
                'type' => 'boolean',
            ],
            'password' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'databaseId',
            'password',
            'description',
            'accessLevel',
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $accessIpMask = null;

    /**
     * @var CreateMySqlUserAccessLevel
     */
    private CreateMySqlUserAccessLevel $accessLevel;

    /**
     * @var string
     */
    private string $databaseId;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var bool|null
     */
    private ?bool $externalAccess = null;

    /**
     * @var string
     */
    private string $password;

    /**
     * @param CreateMySqlUserAccessLevel $accessLevel
     * @param string $databaseId
     * @param string $description
     * @param string $password
     */
    public function __construct(CreateMySqlUserAccessLevel $accessLevel, string $databaseId, string $description, string $password)
    {
        $this->accessLevel = $accessLevel;
        $this->databaseId = $databaseId;
        $this->description = $description;
        $this->password = $password;
    }

    /**
     * @return string|null
     */
    public function getAccessIpMask(): ?string
    {
        return $this->accessIpMask ?? null;
    }

    /**
     * @return CreateMySqlUserAccessLevel
     */
    public function getAccessLevel(): CreateMySqlUserAccessLevel
    {
        return $this->accessLevel;
    }

    /**
     * @return string
     */
    public function getDatabaseId(): string
    {
        return $this->databaseId;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return bool|null
     */
    public function getExternalAccess(): ?bool
    {
        return $this->externalAccess ?? null;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $accessIpMask
     * @return self
     */
    public function withAccessIpMask(string $accessIpMask): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($accessIpMask, static::$schema['properties']['accessIpMask']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->accessIpMask = $accessIpMask;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutAccessIpMask(): self
    {
        $clone = clone $this;
        unset($clone->accessIpMask);

        return $clone;
    }

    /**
     * @param CreateMySqlUserAccessLevel $accessLevel
     * @return self
     */
    public function withAccessLevel(CreateMySqlUserAccessLevel $accessLevel): self
    {
        $clone = clone $this;
        $clone->accessLevel = $accessLevel;

        return $clone;
    }

    /**
     * @param string $databaseId
     * @return self
     */
    public function withDatabaseId(string $databaseId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($databaseId, static::$schema['properties']['databaseId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->databaseId = $databaseId;

        return $clone;
    }

    /**
     * @param string $description
     * @return self
     */
    public function withDescription(string $description): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @param bool $externalAccess
     * @return self
     */
    public function withExternalAccess(bool $externalAccess): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($externalAccess, static::$schema['properties']['externalAccess']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->externalAccess = $externalAccess;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExternalAccess(): self
    {
        $clone = clone $this;
        unset($clone->externalAccess);

        return $clone;
    }

    /**
     * @param string $password
     * @return self
     */
    public function withPassword(string $password): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($password, static::$schema['properties']['password']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->password = $password;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateMySqlUser Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateMySqlUser
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $accessIpMask = null;
        if (isset($input->{'accessIpMask'})) {
            $accessIpMask = $input->{'accessIpMask'};
        }
        $accessLevel = CreateMySqlUserAccessLevel::from($input->{'accessLevel'});
        $databaseId = $input->{'databaseId'};
        $description = $input->{'description'};
        $externalAccess = null;
        if (isset($input->{'externalAccess'})) {
            $externalAccess = (bool)($input->{'externalAccess'});
        }
        $password = $input->{'password'};

        $obj = new self($accessLevel, $databaseId, $description, $password);
        $obj->accessIpMask = $accessIpMask;
        $obj->externalAccess = $externalAccess;
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
        if (isset($this->accessIpMask)) {
            $output['accessIpMask'] = $this->accessIpMask;
        }
        $output['accessLevel'] = ($this->accessLevel)->value;
        $output['databaseId'] = $this->databaseId;
        $output['description'] = $this->description;
        if (isset($this->externalAccess)) {
            $output['externalAccess'] = $this->externalAccess;
        }
        $output['password'] = $this->password;

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
    }
}
