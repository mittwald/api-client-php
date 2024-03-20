<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Sshuser;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * A representation of an SSHUser.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class SshUser
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'description' => 'A representation of an SSHUser.',
        'properties' => [
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
            'hasPassword',
        ],
        'type' => 'object',
    ];

    private ?bool $active = null;

    private DateTime $authUpdatedAt;

    private DateTime $createdAt;

    private string $description;

    private ?DateTime $expiresAt = null;

    private bool $hasPassword;

    private string $id;

    private string $projectId;

    /**
     * @var PublicKey[]|null
     */
    private ?array $publicKeys = null;

    private ?DateTime $updatedAt = null;

    private string $userName;

    public function __construct(DateTime $authUpdatedAt, DateTime $createdAt, string $description, bool $hasPassword, string $id, string $projectId, string $userName)
    {
        $this->authUpdatedAt = $authUpdatedAt;
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->hasPassword = $hasPassword;
        $this->id = $id;
        $this->projectId = $projectId;
        $this->userName = $userName;
    }

    public function getActive(): ?bool
    {
        return $this->active ?? null;
    }

    public function getAuthUpdatedAt(): DateTime
    {
        return $this->authUpdatedAt;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getExpiresAt(): ?DateTime
    {
        return $this->expiresAt ?? null;
    }

    public function getHasPassword(): bool
    {
        return $this->hasPassword;
    }

    public function getId(): string
    {
        return $this->id;
    }

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

    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt ?? null;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function withActive(bool $active): self
    {
        $validator = new Validator();
        $validator->validate($active, static::$schema['properties']['active']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->active = $active;

        return $clone;
    }

    public function withoutActive(): self
    {
        $clone = clone $this;
        unset($clone->active);

        return $clone;
    }

    public function withAuthUpdatedAt(DateTime $authUpdatedAt): self
    {
        $clone = clone $this;
        $clone->authUpdatedAt = $authUpdatedAt;

        return $clone;
    }

    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

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

    public function withExpiresAt(DateTime $expiresAt): self
    {
        $clone = clone $this;
        $clone->expiresAt = $expiresAt;

        return $clone;
    }

    public function withoutExpiresAt(): self
    {
        $clone = clone $this;
        unset($clone->expiresAt);

        return $clone;
    }

    public function withHasPassword(bool $hasPassword): self
    {
        $validator = new Validator();
        $validator->validate($hasPassword, static::$schema['properties']['hasPassword']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->hasPassword = $hasPassword;

        return $clone;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
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
     */
    public function withPublicKeys(array $publicKeys): self
    {
        $clone = clone $this;
        $clone->publicKeys = $publicKeys;

        return $clone;
    }

    public function withoutPublicKeys(): self
    {
        $clone = clone $this;
        unset($clone->publicKeys);

        return $clone;
    }

    public function withUpdatedAt(DateTime $updatedAt): self
    {
        $clone = clone $this;
        $clone->updatedAt = $updatedAt;

        return $clone;
    }

    public function withoutUpdatedAt(): self
    {
        $clone = clone $this;
        unset($clone->updatedAt);

        return $clone;
    }

    public function withUserName(string $userName): self
    {
        $validator = new Validator();
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
     * @return SshUser Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SshUser
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $active = null;
        if (isset($input->{'active'})) {
            $active = (bool)($input->{'active'});
        }
        $authUpdatedAt = new DateTime($input->{'authUpdatedAt'});
        $createdAt = new DateTime($input->{'createdAt'});
        $description = $input->{'description'};
        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = new DateTime($input->{'expiresAt'});
        }
        $hasPassword = (bool)($input->{'hasPassword'});
        $id = $input->{'id'};
        $projectId = $input->{'projectId'};
        $publicKeys = null;
        if (isset($input->{'publicKeys'})) {
            $publicKeys = array_map(fn (array|object $i): PublicKey => PublicKey::buildFromInput($i, validate: $validate), $input->{'publicKeys'});
        }
        $updatedAt = null;
        if (isset($input->{'updatedAt'})) {
            $updatedAt = new DateTime($input->{'updatedAt'});
        }
        $userName = $input->{'userName'};

        $obj = new self($authUpdatedAt, $createdAt, $description, $hasPassword, $id, $projectId, $userName);
        $obj->active = $active;
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
        if (isset($this->active)) {
            $output['active'] = $this->active;
        }
        $output['authUpdatedAt'] = ($this->authUpdatedAt)->format(DateTime::ATOM);
        $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        $output['description'] = $this->description;
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
        $validator = new \Mittwald\ApiClient\Validator\Validator();
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
