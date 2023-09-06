<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Sshuser;

use InvalidArgumentException;
use DateTime;

class SftpUser
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'description' => 'A representation of an SFTPUser.',
        'properties' => [
            'accessLevel' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.sshuser.AccessLevel',
            ],
            'active' => [
                'type' => 'boolean',
            ],
            'authUpdatedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'createdAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'description' => [
                'type' => 'string',
            ],
            'directories' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'expiresAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'hasPassword' => [
                'type' => 'boolean',
            ],
            'id' => [
                'type' => 'string',
            ],
            'projectId' => [
                'type' => 'string',
            ],
            'publicKeys' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.sshuser.PublicKey',
                ],
                'type' => 'array',
            ],
            'updatedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'userName' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'projectId',
            'description',
            'userName',
            'createdAt',
            'authUpdatedAt',
            'accessLevel',
            'hasPassword',
        ],
        'type' => 'object',
    ];

    /**
     * @var AccessLevel
     */
    private AccessLevel $accessLevel;

    /**
     * @var bool|null
     */
    private ?bool $active = null;

    /**
     * @var DateTime
     */
    private DateTime $authUpdatedAt;

    /**
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var string[]|null
     */
    private ?array $directories = null;

    /**
     * @var DateTime|null
     */
    private ?DateTime $expiresAt = null;

    /**
     * @var bool
     */
    private bool $hasPassword;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $projectId;

    /**
     * @var PublicKey[]|null
     */
    private ?array $publicKeys = null;

    /**
     * @var DateTime|null
     */
    private ?DateTime $updatedAt = null;

    /**
     * @var string
     */
    private string $userName;

    /**
     * @param AccessLevel $accessLevel
     * @param DateTime $authUpdatedAt
     * @param DateTime $createdAt
     * @param string $description
     * @param bool $hasPassword
     * @param string $id
     * @param string $projectId
     * @param string $userName
     */
    public function __construct(AccessLevel $accessLevel, DateTime $authUpdatedAt, DateTime $createdAt, string $description, bool $hasPassword, string $id, string $projectId, string $userName)
    {
        $this->accessLevel = $accessLevel;
        $this->authUpdatedAt = $authUpdatedAt;
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->hasPassword = $hasPassword;
        $this->id = $id;
        $this->projectId = $projectId;
        $this->userName = $userName;
    }

    /**
     * @return AccessLevel
     */
    public function getAccessLevel(): AccessLevel
    {
        return $this->accessLevel;
    }

    /**
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active ?? null;
    }

    /**
     * @return DateTime
     */
    public function getAuthUpdatedAt(): DateTime
    {
        return $this->authUpdatedAt;
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
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string[]|null
     */
    public function getDirectories(): ?array
    {
        return $this->directories ?? null;
    }

    /**
     * @return DateTime|null
     */
    public function getExpiresAt(): ?DateTime
    {
        return $this->expiresAt ?? null;
    }

    /**
     * @return bool
     */
    public function getHasPassword(): bool
    {
        return $this->hasPassword;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @return PublicKey[]|null
     */
    public function getPublicKeys(): ?array
    {
        return $this->publicKeys ?? null;
    }

    /**
     * @return DateTime|null
     */
    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt ?? null;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @param AccessLevel $accessLevel
     * @return self
     */
    public function withAccessLevel(AccessLevel $accessLevel): self
    {
        $clone = clone $this;
        $clone->accessLevel = $accessLevel;

        return $clone;
    }

    /**
     * @param bool $active
     * @return self
     */
    public function withActive(bool $active): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($active, static::$schema['properties']['active']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->active = $active;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutActive(): self
    {
        $clone = clone $this;
        unset($clone->active);

        return $clone;
    }

    /**
     * @param DateTime $authUpdatedAt
     * @return self
     */
    public function withAuthUpdatedAt(DateTime $authUpdatedAt): self
    {
        $clone = clone $this;
        $clone->authUpdatedAt = $authUpdatedAt;

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
     * @param string[] $directories
     * @return self
     */
    public function withDirectories(array $directories): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($directories, static::$schema['properties']['directories']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->directories = $directories;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDirectories(): self
    {
        $clone = clone $this;
        unset($clone->directories);

        return $clone;
    }

    /**
     * @param DateTime $expiresAt
     * @return self
     */
    public function withExpiresAt(DateTime $expiresAt): self
    {
        $clone = clone $this;
        $clone->expiresAt = $expiresAt;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExpiresAt(): self
    {
        $clone = clone $this;
        unset($clone->expiresAt);

        return $clone;
    }

    /**
     * @param bool $hasPassword
     * @return self
     */
    public function withHasPassword(bool $hasPassword): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($hasPassword, static::$schema['properties']['hasPassword']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->hasPassword = $hasPassword;

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
     * @param string $projectId
     * @return self
     */
    public function withProjectId(string $projectId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * @param PublicKey[] $publicKeys
     * @return self
     */
    public function withPublicKeys(array $publicKeys): self
    {
        $clone = clone $this;
        $clone->publicKeys = $publicKeys;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutPublicKeys(): self
    {
        $clone = clone $this;
        unset($clone->publicKeys);

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
     * @return self
     */
    public function withoutUpdatedAt(): self
    {
        $clone = clone $this;
        unset($clone->updatedAt);

        return $clone;
    }

    /**
     * @param string $userName
     * @return self
     */
    public function withUserName(string $userName): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($userName, static::$schema['properties']['userName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->userName = $userName;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SftpUser Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SftpUser
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $accessLevel = AccessLevel::from($input->{'accessLevel'});
        $active = null;
        if (isset($input->{'active'})) {
            $active = (bool)($input->{'active'});
        }
        $authUpdatedAt = new DateTime($input->{'authUpdatedAt'});
        $createdAt = new DateTime($input->{'createdAt'});
        $description = $input->{'description'};
        $directories = null;
        if (isset($input->{'directories'})) {
            $directories = $input->{'directories'};
        }
        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = new DateTime($input->{'expiresAt'});
        }
        $hasPassword = (bool)($input->{'hasPassword'});
        $id = $input->{'id'};
        $projectId = $input->{'projectId'};
        $publicKeys = null;
        if (isset($input->{'publicKeys'})) {
            $publicKeys = array_map(fn (array $i): PublicKey => PublicKey::buildFromInput($i, validate: $validate), $input->{'publicKeys'});
        }
        $updatedAt = null;
        if (isset($input->{'updatedAt'})) {
            $updatedAt = new DateTime($input->{'updatedAt'});
        }
        $userName = $input->{'userName'};

        $obj = new self($accessLevel, $authUpdatedAt, $createdAt, $description, $hasPassword, $id, $projectId, $userName);
        $obj->active = $active;
        $obj->directories = $directories;
        $obj->expiresAt = $expiresAt;
        $obj->publicKeys = $publicKeys;
        $obj->updatedAt = $updatedAt;
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
        $output['accessLevel'] = $this->accessLevel->value;
        if (isset($this->active)) {
            $output['active'] = $this->active;
        }
        $output['authUpdatedAt'] = ($this->authUpdatedAt)->format(DateTime::ATOM);
        $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        $output['description'] = $this->description;
        if (isset($this->directories)) {
            $output['directories'] = $this->directories;
        }
        if (isset($this->expiresAt)) {
            $output['expiresAt'] = ($this->expiresAt)->format(DateTime::ATOM);
        }
        $output['hasPassword'] = $this->hasPassword;
        $output['id'] = $this->id;
        $output['projectId'] = $this->projectId;
        if (isset($this->publicKeys)) {
            $output['publicKeys'] = array_map(fn (PublicKey $i): array => $i->toJson(), $this->publicKeys);
        }
        if (isset($this->updatedAt)) {
            $output['updatedAt'] = ($this->updatedAt)->format(DateTime::ATOM);
        }
        $output['userName'] = $this->userName;

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
        $this->authUpdatedAt = clone $this->authUpdatedAt;
        $this->createdAt = clone $this->createdAt;
        if (isset($this->expiresAt)) {
            $this->expiresAt = clone $this->expiresAt;
        }
        if (isset($this->updatedAt)) {
            $this->updatedAt = clone $this->updatedAt;
        }
    }
}
