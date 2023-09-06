<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

use InvalidArgumentException;
use JsonSchema\Validator;

class User
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'avatarRefId' => [
                'type' => 'string',
            ],
            'clearName' => [
                'type' => 'string',
            ],
            'department' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.conversation.Department',
            ],
            'userId' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'userId',
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $avatarRefId = null;

    /**
     * @var string|null
     */
    private ?string $clearName = null;

    /**
     * @var Department|null
     */
    private ?Department $department = null;

    /**
     * @var string
     */
    private string $userId;

    /**
     * @param string $userId
     */
    public function __construct(string $userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return string|null
     */
    public function getAvatarRefId(): ?string
    {
        return $this->avatarRefId ?? null;
    }

    /**
     * @return string|null
     */
    public function getClearName(): ?string
    {
        return $this->clearName ?? null;
    }

    /**
     * @return Department|null
     */
    public function getDepartment(): ?Department
    {
        return $this->department ?? null;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $avatarRefId
     * @return self
     */
    public function withAvatarRefId(string $avatarRefId): self
    {
        $validator = new Validator();
        $validator->validate($avatarRefId, static::$schema['properties']['avatarRefId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->avatarRefId = $avatarRefId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutAvatarRefId(): self
    {
        $clone = clone $this;
        unset($clone->avatarRefId);

        return $clone;
    }

    /**
     * @param string $clearName
     * @return self
     */
    public function withClearName(string $clearName): self
    {
        $validator = new Validator();
        $validator->validate($clearName, static::$schema['properties']['clearName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->clearName = $clearName;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutClearName(): self
    {
        $clone = clone $this;
        unset($clone->clearName);

        return $clone;
    }

    /**
     * @param Department $department
     * @return self
     */
    public function withDepartment(Department $department): self
    {
        $clone = clone $this;
        $clone->department = $department;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDepartment(): self
    {
        $clone = clone $this;
        unset($clone->department);

        return $clone;
    }

    /**
     * @param string $userId
     * @return self
     */
    public function withUserId(string $userId): self
    {
        $validator = new Validator();
        $validator->validate($userId, static::$schema['properties']['userId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->userId = $userId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return User Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): User
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $avatarRefId = null;
        if (isset($input->{'avatarRefId'})) {
            $avatarRefId = $input->{'avatarRefId'};
        }
        $clearName = null;
        if (isset($input->{'clearName'})) {
            $clearName = $input->{'clearName'};
        }
        $department = null;
        if (isset($input->{'department'})) {
            $department = Department::from($input->{'department'});
        }
        $userId = $input->{'userId'};

        $obj = new self($userId);
        $obj->avatarRefId = $avatarRefId;
        $obj->clearName = $clearName;
        $obj->department = $department;
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
        if (isset($this->avatarRefId)) {
            $output['avatarRefId'] = $this->avatarRefId;
        }
        if (isset($this->clearName)) {
            $output['clearName'] = $this->clearName;
        }
        if (isset($this->department)) {
            $output['department'] = $this->department->value;
        }
        $output['userId'] = $this->userId;

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
}
