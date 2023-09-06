<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUser;

use InvalidArgumentException;

class UpdateMysqlUserRequestBody
{
    public const method = 'put';

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
            'description' => [
                'type' => 'string',
            ],
            'externalAccess' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'description',
            'accessLevel',
        ],
    ];

    /**
     * @var string|null
     */
    private ?string $accessIpMask = null;

    /**
     * @var UpdateMysqlUserRequestBodyAccessLevel
     */
    private UpdateMysqlUserRequestBodyAccessLevel $accessLevel;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var bool|null
     */
    private ?bool $externalAccess = null;

    private array $headers = [

    ];

    /**
     * @param UpdateMysqlUserRequestBodyAccessLevel $accessLevel
     * @param string $description
     */
    public function __construct(UpdateMysqlUserRequestBodyAccessLevel $accessLevel, string $description)
    {
        $this->accessLevel = $accessLevel;
        $this->description = $description;
    }

    /**
     * @return string|null
     */
    public function getAccessIpMask(): ?string
    {
        return $this->accessIpMask ?? null;
    }

    /**
     * @return UpdateMysqlUserRequestBodyAccessLevel
     */
    public function getAccessLevel(): UpdateMysqlUserRequestBodyAccessLevel
    {
        return $this->accessLevel;
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
     * @param UpdateMysqlUserRequestBodyAccessLevel $accessLevel
     * @return self
     */
    public function withAccessLevel(UpdateMysqlUserRequestBodyAccessLevel $accessLevel): self
    {
        $clone = clone $this;
        $clone->accessLevel = $accessLevel;

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
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateMysqlUserRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateMysqlUserRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $accessIpMask = null;
        if (isset($input->{'accessIpMask'})) {
            $accessIpMask = $input->{'accessIpMask'};
        }
        $accessLevel = UpdateMysqlUserRequestBodyAccessLevel::from($input->{'accessLevel'});
        $description = $input->{'description'};
        $externalAccess = null;
        if (isset($input->{'externalAccess'})) {
            $externalAccess = (bool)($input->{'externalAccess'});
        }

        $obj = new self($accessLevel, $description);
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
        $output['description'] = $this->description;
        if (isset($this->externalAccess)) {
            $output['externalAccess'] = $this->externalAccess;
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

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $id = urlencode($mapped['id']);
        return '/v2/mysql-users/' . $id;
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
