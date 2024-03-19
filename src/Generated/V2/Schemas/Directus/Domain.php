<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Directus;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.directus.Domain.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class Domain
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'authCode' => [
                'description' => 'The authcode of the domain. Leave empty when mittwald can generate a authcode on its own',
                'type' => 'string',
            ],
            'domainOwnerData' => [
                'description' => 'Leave empty when mittwald should keep the same domain owner',
                'type' => 'string',
            ],
            'name' => [
                'minLength' => 1,
                'type' => 'string',
            ],
        ],
        'required' => [
            'name',
        ],
        'type' => 'object',
    ];

    /**
     * The authcode of the domain. Leave empty when mittwald can generate a authcode on its own
     */
    private ?string $authCode = null;

    /**
     * Leave empty when mittwald should keep the same domain owner
     */
    private ?string $domainOwnerData = null;

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getAuthCode(): ?string
    {
        return $this->authCode ?? null;
    }

    public function getDomainOwnerData(): ?string
    {
        return $this->domainOwnerData ?? null;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function withAuthCode(string $authCode): self
    {
        $validator = new Validator();
        $validator->validate($authCode, static::$schema['properties']['authCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->authCode = $authCode;

        return $clone;
    }

    public function withoutAuthCode(): self
    {
        $clone = clone $this;
        unset($clone->authCode);

        return $clone;
    }

    public function withDomainOwnerData(string $domainOwnerData): self
    {
        $validator = new Validator();
        $validator->validate($domainOwnerData, static::$schema['properties']['domainOwnerData']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domainOwnerData = $domainOwnerData;

        return $clone;
    }

    public function withoutDomainOwnerData(): self
    {
        $clone = clone $this;
        unset($clone->domainOwnerData);

        return $clone;
    }

    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Domain Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Domain
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $authCode = null;
        if (isset($input->{'authCode'})) {
            $authCode = $input->{'authCode'};
        }
        $domainOwnerData = null;
        if (isset($input->{'domainOwnerData'})) {
            $domainOwnerData = $input->{'domainOwnerData'};
        }
        $name = $input->{'name'};

        $obj = new self($name);
        $obj->authCode = $authCode;
        $obj->domainOwnerData = $domainOwnerData;
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
        if (isset($this->authCode)) {
            $output['authCode'] = $this->authCode;
        }
        if (isset($this->domainOwnerData)) {
            $output['domainOwnerData'] = $this->domainOwnerData;
        }
        $output['name'] = $this->name;

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
