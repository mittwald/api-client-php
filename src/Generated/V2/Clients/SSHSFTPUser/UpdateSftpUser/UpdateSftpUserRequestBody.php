<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSftpUser;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\PublicKey;

class UpdateSftpUserRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'accessLevel' => [
                'enum' => [
                    'read',
                    'full',
                ],
                'type' => 'string',
            ],
            'active' => [
                'type' => 'boolean',
            ],
            'description' => [
                'type' => 'string',
            ],
            'directories' => [
                'items' => [
                    'type' => 'string',
                ],
                'minItems' => 1,
                'type' => 'array',
            ],
            'expiresAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'password' => [
                'maxLength' => 72,
                'type' => 'string',
            ],
            'publicKeys' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.sshuser.PublicKey',
                ],
                'type' => 'array',
            ],
        ],
        'type' => 'object',
    ];

    private ?UpdateSftpUserRequestBodyAccessLevel $accessLevel = null;

    private ?bool $active = null;

    private ?string $description = null;

    /**
     * @var string[]|null
     */
    private ?array $directories = null;

    private ?DateTime $expiresAt = null;

    private ?string $password = null;

    /**
     * @var PublicKey[]|null
     */
    private ?array $publicKeys = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getAccessLevel(): ?UpdateSftpUserRequestBodyAccessLevel
    {
        return $this->accessLevel ?? null;
    }

    public function getActive(): ?bool
    {
        return $this->active ?? null;
    }

    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getDirectories(): ?array
    {
        return $this->directories ?? null;
    }

    public function getExpiresAt(): ?DateTime
    {
        return $this->expiresAt ?? null;
    }

    public function getPassword(): ?string
    {
        return $this->password ?? null;
    }

    /**
     * @return PublicKey[]|null
     */
    public function getPublicKeys(): ?array
    {
        return $this->publicKeys ?? null;
    }

    public function withAccessLevel(UpdateSftpUserRequestBodyAccessLevel $accessLevel): self
    {
        $clone = clone $this;
        $clone->accessLevel = $accessLevel;

        return $clone;
    }

    public function withoutAccessLevel(): self
    {
        $clone = clone $this;
        unset($clone->accessLevel);

        return $clone;
    }

    public function withActive(bool $active): self
    {
        $validator = new Validator();
        $validator->validate($active, self::$schema['properties']['active']);
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

    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, self::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    public function withoutDescription(): self
    {
        $clone = clone $this;
        unset($clone->description);

        return $clone;
    }

    /**
     * @param string[] $directories
     */
    public function withDirectories(array $directories): self
    {
        $validator = new Validator();
        $validator->validate($directories, self::$schema['properties']['directories']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->directories = $directories;

        return $clone;
    }

    public function withoutDirectories(): self
    {
        $clone = clone $this;
        unset($clone->directories);

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

    public function withPassword(string $password): self
    {
        $validator = new Validator();
        $validator->validate($password, self::$schema['properties']['password']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->password = $password;

        return $clone;
    }

    public function withoutPassword(): self
    {
        $clone = clone $this;
        unset($clone->password);

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

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateSftpUserRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateSftpUserRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $accessLevel = null;
        if (isset($input->{'accessLevel'})) {
            $accessLevel = UpdateSftpUserRequestBodyAccessLevel::from($input->{'accessLevel'});
        }
        $active = null;
        if (isset($input->{'active'})) {
            $active = (bool)($input->{'active'});
        }
        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $directories = null;
        if (isset($input->{'directories'})) {
            $directories = $input->{'directories'};
        }
        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = new DateTime($input->{'expiresAt'});
        }
        $password = null;
        if (isset($input->{'password'})) {
            $password = $input->{'password'};
        }
        $publicKeys = null;
        if (isset($input->{'publicKeys'})) {
            $publicKeys = array_map(fn (array|object $i): PublicKey => PublicKey::buildFromInput($i, validate: $validate), $input->{'publicKeys'});
        }

        $obj = new self();
        $obj->accessLevel = $accessLevel;
        $obj->active = $active;
        $obj->description = $description;
        $obj->directories = $directories;
        $obj->expiresAt = $expiresAt;
        $obj->password = $password;
        $obj->publicKeys = $publicKeys;
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
        if (isset($this->accessLevel)) {
            $output['accessLevel'] = ($this->accessLevel)->value;
        }
        if (isset($this->active)) {
            $output['active'] = $this->active;
        }
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        if (isset($this->directories)) {
            $output['directories'] = $this->directories;
        }
        if (isset($this->expiresAt)) {
            $output['expiresAt'] = ($this->expiresAt)->format(DateTime::ATOM);
        }
        if (isset($this->password)) {
            $output['password'] = $this->password;
        }
        if (isset($this->publicKeys)) {
            $output['publicKeys'] = array_map(fn (PublicKey $i): array => $i->toJson(), $this->publicKeys);
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
        if (isset($this->expiresAt)) {
            $this->expiresAt = clone $this->expiresAt;
        }
    }
}
