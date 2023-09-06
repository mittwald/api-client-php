<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Signup;

use InvalidArgumentException;
use DateTime;

class ApiToken
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'apiTokenId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'createdAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'description' => [
                'example' => 'Api Token - read',
                'type' => 'string',
            ],
            'expiresAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'roles' => [
                'items' => [
                    'enum' => [
                        'api_read',
                        'api_write',
                    ],
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'apiTokenId',
            'roles',
            'description',
            'createdAt',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $apiTokenId;

    /**
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var DateTime|null
     */
    private ?DateTime $expiresAt = null;

    /**
     * @var string[]
     */
    private array $roles;

    /**
     * @param string $apiTokenId
     * @param DateTime $createdAt
     * @param string $description
     * @param string[] $roles
     */
    public function __construct(string $apiTokenId, DateTime $createdAt, string $description, array $roles)
    {
        $this->apiTokenId = $apiTokenId;
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->roles = $roles;
    }

    /**
     * @return string
     */
    public function getApiTokenId(): string
    {
        return $this->apiTokenId;
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
     * @return DateTime|null
     */
    public function getExpiresAt(): ?DateTime
    {
        return $this->expiresAt ?? null;
    }

    /**
     * @return string[]
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param string $apiTokenId
     * @return self
     */
    public function withApiTokenId(string $apiTokenId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($apiTokenId, static::$schema['properties']['apiTokenId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->apiTokenId = $apiTokenId;

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
     * @param string[] $roles
     * @return self
     */
    public function withRoles(array $roles): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($roles, static::$schema['properties']['roles']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->roles = $roles;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ApiToken Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ApiToken
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $apiTokenId = $input->{'apiTokenId'};
        $createdAt = new DateTime($input->{'createdAt'});
        $description = $input->{'description'};
        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = new DateTime($input->{'expiresAt'});
        }
        $roles = $input->{'roles'};

        $obj = new self($apiTokenId, $createdAt, $description, $roles);
        $obj->expiresAt = $expiresAt;
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
        $output['apiTokenId'] = $this->apiTokenId;
        $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        $output['description'] = $this->description;
        if (isset($this->expiresAt)) {
            $output['expiresAt'] = ($this->expiresAt)->format(DateTime::ATOM);
        }
        $output['roles'] = $this->roles;

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
        if (isset($this->expiresAt)) {
            $this->expiresAt = clone $this->expiresAt;
        }
    }
}
