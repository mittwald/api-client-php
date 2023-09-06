<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Database;

use InvalidArgumentException;
use DateTime;

class MySqlUser
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
            'createdAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'databaseId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'description' => [
                'type' => 'string',
            ],
            'disabled' => [
                'type' => 'boolean',
            ],
            'externalAccess' => [
                'type' => 'boolean',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'mainUser' => [
                'type' => 'boolean',
            ],
            'name' => [
                'type' => 'string',
            ],
            'passwordUpdatedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'updatedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'createdAt',
            'updatedAt',
            'databaseId',
            'name',
            'passwordUpdatedAt',
            'mainUser',
            'disabled',
            'accessLevel',
            'externalAccess',
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $accessIpMask = null;

    /**
     * @var MySqlUserAccessLevel
     */
    private MySqlUserAccessLevel $accessLevel;

    /**
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * @var string
     */
    private string $databaseId;

    /**
     * @var string|null
     */
    private ?string $description = null;

    /**
     * @var bool
     */
    private bool $disabled;

    /**
     * @var bool
     */
    private bool $externalAccess;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var bool
     */
    private bool $mainUser;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var DateTime
     */
    private DateTime $passwordUpdatedAt;

    /**
     * @var DateTime
     */
    private DateTime $updatedAt;

    /**
     * @param MySqlUserAccessLevel $accessLevel
     * @param DateTime $createdAt
     * @param string $databaseId
     * @param bool $disabled
     * @param bool $externalAccess
     * @param string $id
     * @param bool $mainUser
     * @param string $name
     * @param DateTime $passwordUpdatedAt
     * @param DateTime $updatedAt
     */
    public function __construct(MySqlUserAccessLevel $accessLevel, DateTime $createdAt, string $databaseId, bool $disabled, bool $externalAccess, string $id, bool $mainUser, string $name, DateTime $passwordUpdatedAt, DateTime $updatedAt)
    {
        $this->accessLevel = $accessLevel;
        $this->createdAt = $createdAt;
        $this->databaseId = $databaseId;
        $this->disabled = $disabled;
        $this->externalAccess = $externalAccess;
        $this->id = $id;
        $this->mainUser = $mainUser;
        $this->name = $name;
        $this->passwordUpdatedAt = $passwordUpdatedAt;
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string|null
     */
    public function getAccessIpMask(): ?string
    {
        return $this->accessIpMask ?? null;
    }

    /**
     * @return MySqlUserAccessLevel
     */
    public function getAccessLevel(): MySqlUserAccessLevel
    {
        return $this->accessLevel;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getDatabaseId(): string
    {
        return $this->databaseId;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    /**
     * @return bool
     */
    public function getDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * @return bool
     */
    public function getExternalAccess(): bool
    {
        return $this->externalAccess;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function getMainUser(): bool
    {
        return $this->mainUser;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return DateTime
     */
    public function getPasswordUpdatedAt(): DateTime
    {
        return $this->passwordUpdatedAt;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
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
     * @param MySqlUserAccessLevel $accessLevel
     * @return self
     */
    public function withAccessLevel(MySqlUserAccessLevel $accessLevel): self
    {
        $clone = clone $this;
        $clone->accessLevel = $accessLevel;

        return $clone;
    }

    /**
     * @param DateTime $createdAt
     * @return self
     */
    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

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
     * @return self
     */
    public function withoutDescription(): self
    {
        $clone = clone $this;
        unset($clone->description);

        return $clone;
    }

    /**
     * @param bool $disabled
     * @return self
     */
    public function withDisabled(bool $disabled): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($disabled, static::$schema['properties']['disabled']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->disabled = $disabled;

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
     * @param string $id
     * @return self
     */
    public function withId(string $id): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param bool $mainUser
     * @return self
     */
    public function withMainUser(bool $mainUser): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($mainUser, static::$schema['properties']['mainUser']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mainUser = $mainUser;

        return $clone;
    }

    /**
     * @param string $name
     * @return self
     */
    public function withName(string $name): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * @param DateTime $passwordUpdatedAt
     * @return self
     */
    public function withPasswordUpdatedAt(DateTime $passwordUpdatedAt): self
    {
        $clone = clone $this;
        $clone->passwordUpdatedAt = $passwordUpdatedAt;

        return $clone;
    }

    /**
     * @param DateTime $updatedAt
     * @return self
     */
    public function withUpdatedAt(DateTime $updatedAt): self
    {
        $clone = clone $this;
        $clone->updatedAt = $updatedAt;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MySqlUser Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MySqlUser
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $accessIpMask = null;
        if (isset($input->{'accessIpMask'})) {
            $accessIpMask = $input->{'accessIpMask'};
        }
        $accessLevel = MySqlUserAccessLevel::from($input->{'accessLevel'});
        $createdAt = new DateTime($input->{'createdAt'});
        $databaseId = $input->{'databaseId'};
        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $disabled = (bool)($input->{'disabled'});
        $externalAccess = (bool)($input->{'externalAccess'});
        $id = $input->{'id'};
        $mainUser = (bool)($input->{'mainUser'});
        $name = $input->{'name'};
        $passwordUpdatedAt = new DateTime($input->{'passwordUpdatedAt'});
        $updatedAt = new DateTime($input->{'updatedAt'});

        $obj = new self($accessLevel, $createdAt, $databaseId, $disabled, $externalAccess, $id, $mainUser, $name, $passwordUpdatedAt, $updatedAt);
        $obj->accessIpMask = $accessIpMask;
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
        if (isset($this->accessIpMask)) {
            $output['accessIpMask'] = $this->accessIpMask;
        }
        $output['accessLevel'] = ($this->accessLevel)->value;
        $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        $output['databaseId'] = $this->databaseId;
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        $output['disabled'] = $this->disabled;
        $output['externalAccess'] = $this->externalAccess;
        $output['id'] = $this->id;
        $output['mainUser'] = $this->mainUser;
        $output['name'] = $this->name;
        $output['passwordUpdatedAt'] = ($this->passwordUpdatedAt)->format(DateTime::ATOM);
        $output['updatedAt'] = ($this->updatedAt)->format(DateTime::ATOM);

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
        $this->createdAt = clone $this->createdAt;
        $this->passwordUpdatedAt = clone $this->passwordUpdatedAt;
        $this->updatedAt = clone $this->updatedAt;
    }
}
