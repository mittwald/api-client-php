<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUser;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateMysqlUserRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
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
        'type' => 'object',
    ];

    private ?string $accessIpMask = null;

    private ?UpdateMysqlUserRequestBodyAccessLevel $accessLevel = null;

    private ?string $description = null;

    private ?bool $externalAccess = null;

    private ?string $password = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getAccessIpMask(): ?string
    {
        return $this->accessIpMask ?? null;
    }

    public function getAccessLevel(): ?UpdateMysqlUserRequestBodyAccessLevel
    {
        return $this->accessLevel ?? null;
    }

    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    public function getExternalAccess(): ?bool
    {
        return $this->externalAccess ?? null;
    }

    public function getPassword(): ?string
    {
        return $this->password ?? null;
    }

    public function withAccessIpMask(string $accessIpMask): self
    {
        $validator = new Validator();
        $validator->validate($accessIpMask, self::$internalValidationSchema['properties']['accessIpMask']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->accessIpMask = $accessIpMask;

        return $clone;
    }

    public function withoutAccessIpMask(): self
    {
        $clone = clone $this;
        unset($clone->accessIpMask);

        return $clone;
    }

    public function withAccessLevel(UpdateMysqlUserRequestBodyAccessLevel $accessLevel): self
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

    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, self::$internalValidationSchema['properties']['description']);
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

    public function withExternalAccess(bool $externalAccess): self
    {
        $validator = new Validator();
        $validator->validate($externalAccess, self::$internalValidationSchema['properties']['externalAccess']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->externalAccess = $externalAccess;

        return $clone;
    }

    public function withoutExternalAccess(): self
    {
        $clone = clone $this;
        unset($clone->externalAccess);

        return $clone;
    }

    public function withPassword(string $password): self
    {
        $validator = new Validator();
        $validator->validate($password, self::$internalValidationSchema['properties']['password']);
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
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateMysqlUserRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateMysqlUserRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $accessIpMask = null;
        if (isset($input->{'accessIpMask'})) {
            $accessIpMask = $input->{'accessIpMask'};
        }
        $accessLevel = null;
        if (isset($input->{'accessLevel'})) {
            $accessLevel = UpdateMysqlUserRequestBodyAccessLevel::from($input->{'accessLevel'});
        }
        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $externalAccess = null;
        if (isset($input->{'externalAccess'})) {
            $externalAccess = (bool)($input->{'externalAccess'});
        }
        $password = null;
        if (isset($input->{'password'})) {
            $password = $input->{'password'};
        }

        $obj = new self();
        $obj->accessIpMask = $accessIpMask;
        $obj->accessLevel = $accessLevel;
        $obj->description = $description;
        $obj->externalAccess = $externalAccess;
        $obj->password = $password;
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
        if (isset($this->accessLevel)) {
            $output['accessLevel'] = ($this->accessLevel)->value;
        }
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        if (isset($this->externalAccess)) {
            $output['externalAccess'] = $this->externalAccess;
        }
        if (isset($this->password)) {
            $output['password'] = $this->password;
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
        $validator->validate($input, self::$internalValidationSchema);

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
