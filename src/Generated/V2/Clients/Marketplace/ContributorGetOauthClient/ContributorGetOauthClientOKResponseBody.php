<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetOauthClient;

use InvalidArgumentException;
use JsonSchema\Validator;

class ContributorGetOauthClientOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'allowedGrantTypes' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'allowedRedirectUris' => [
                'items' => [
                    'format' => 'uri',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'allowedScopes' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'description' => [
                'type' => 'string',
            ],
            'humanReadableName' => [
                'type' => 'string',
            ],
            'id' => [
                'type' => 'string',
            ],
            'type' => [
                'enum' => [
                    'public',
                    'confidential',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'humanReadableName',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]|null
     */
    private ?array $allowedGrantTypes = null;

    /**
     * @var string[]|null
     */
    private ?array $allowedRedirectUris = null;

    /**
     * @var string[]|null
     */
    private ?array $allowedScopes = null;

    private ?string $description = null;

    private string $humanReadableName;

    private string $id;

    private ?ContributorGetOauthClientOKResponseBodyType $type = null;

    public function __construct(string $humanReadableName, string $id)
    {
        $this->humanReadableName = $humanReadableName;
        $this->id = $id;
    }

    /**
     * @return string[]|null
     */
    public function getAllowedGrantTypes(): ?array
    {
        return $this->allowedGrantTypes ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getAllowedRedirectUris(): ?array
    {
        return $this->allowedRedirectUris ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getAllowedScopes(): ?array
    {
        return $this->allowedScopes ?? null;
    }

    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    public function getHumanReadableName(): string
    {
        return $this->humanReadableName;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getType(): ?ContributorGetOauthClientOKResponseBodyType
    {
        return $this->type ?? null;
    }

    /**
     * @param string[] $allowedGrantTypes
     */
    public function withAllowedGrantTypes(array $allowedGrantTypes): self
    {
        $validator = new Validator();
        $validator->validate($allowedGrantTypes, self::$internalValidationSchema['properties']['allowedGrantTypes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->allowedGrantTypes = $allowedGrantTypes;

        return $clone;
    }

    public function withoutAllowedGrantTypes(): self
    {
        $clone = clone $this;
        unset($clone->allowedGrantTypes);

        return $clone;
    }

    /**
     * @param string[] $allowedRedirectUris
     */
    public function withAllowedRedirectUris(array $allowedRedirectUris): self
    {
        $validator = new Validator();
        $validator->validate($allowedRedirectUris, self::$internalValidationSchema['properties']['allowedRedirectUris']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->allowedRedirectUris = $allowedRedirectUris;

        return $clone;
    }

    public function withoutAllowedRedirectUris(): self
    {
        $clone = clone $this;
        unset($clone->allowedRedirectUris);

        return $clone;
    }

    /**
     * @param string[] $allowedScopes
     */
    public function withAllowedScopes(array $allowedScopes): self
    {
        $validator = new Validator();
        $validator->validate($allowedScopes, self::$internalValidationSchema['properties']['allowedScopes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->allowedScopes = $allowedScopes;

        return $clone;
    }

    public function withoutAllowedScopes(): self
    {
        $clone = clone $this;
        unset($clone->allowedScopes);

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

    public function withHumanReadableName(string $humanReadableName): self
    {
        $validator = new Validator();
        $validator->validate($humanReadableName, self::$internalValidationSchema['properties']['humanReadableName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->humanReadableName = $humanReadableName;

        return $clone;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, self::$internalValidationSchema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    public function withType(ContributorGetOauthClientOKResponseBodyType $type): self
    {
        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    public function withoutType(): self
    {
        $clone = clone $this;
        unset($clone->type);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ContributorGetOauthClientOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ContributorGetOauthClientOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $allowedGrantTypes = null;
        if (isset($input->{'allowedGrantTypes'})) {
            $allowedGrantTypes = $input->{'allowedGrantTypes'};
        }
        $allowedRedirectUris = null;
        if (isset($input->{'allowedRedirectUris'})) {
            $allowedRedirectUris = $input->{'allowedRedirectUris'};
        }
        $allowedScopes = null;
        if (isset($input->{'allowedScopes'})) {
            $allowedScopes = $input->{'allowedScopes'};
        }
        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $humanReadableName = $input->{'humanReadableName'};
        $id = $input->{'id'};
        $type = null;
        if (isset($input->{'type'})) {
            $type = ContributorGetOauthClientOKResponseBodyType::from($input->{'type'});
        }

        $obj = new self($humanReadableName, $id);
        $obj->allowedGrantTypes = $allowedGrantTypes;
        $obj->allowedRedirectUris = $allowedRedirectUris;
        $obj->allowedScopes = $allowedScopes;
        $obj->description = $description;
        $obj->type = $type;
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
        if (isset($this->allowedGrantTypes)) {
            $output['allowedGrantTypes'] = $this->allowedGrantTypes;
        }
        if (isset($this->allowedRedirectUris)) {
            $output['allowedRedirectUris'] = $this->allowedRedirectUris;
        }
        if (isset($this->allowedScopes)) {
            $output['allowedScopes'] = $this->allowedScopes;
        }
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        $output['humanReadableName'] = $this->humanReadableName;
        $output['id'] = $this->id;
        if (isset($this->type)) {
            $output['type'] = ($this->type)->value;
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
