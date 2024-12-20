<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Marketplace;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.marketplace.ExtensionHealth.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ExtensionHealth
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'disfunctionalReason' => [
                'type' => 'string',
            ],
            'extensionInstancesHealth' => [
                'default' => [

                ],
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.ExtensionInstanceHealth',
                ],
                'type' => 'array',
            ],
            'functional' => [
                'default' => false,
                'type' => 'boolean',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'published' => [
                'default' => false,
                'type' => 'boolean',
            ],
            'withdrawalReason' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'functional',
            'published',
            'extensionInstancesHealth',
        ],
        'type' => 'object',
    ];

    private ?string $disfunctionalReason = null;

    /**
     * @var ExtensionInstanceHealth[]
     */
    private array $extensionInstancesHealth = [

    ];

    private bool $functional = false;

    private string $id;

    private bool $published = false;

    private ?string $withdrawalReason = null;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getDisfunctionalReason(): ?string
    {
        return $this->disfunctionalReason ?? null;
    }

    /**
     * @return
     * ExtensionInstanceHealth[]
     */
    public function getExtensionInstancesHealth(): array
    {
        return $this->extensionInstancesHealth;
    }

    public function getFunctional(): bool
    {
        return $this->functional;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getPublished(): bool
    {
        return $this->published;
    }

    public function getWithdrawalReason(): ?string
    {
        return $this->withdrawalReason ?? null;
    }

    public function withDisfunctionalReason(string $disfunctionalReason): self
    {
        $validator = new Validator();
        $validator->validate($disfunctionalReason, static::$schema['properties']['disfunctionalReason']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->disfunctionalReason = $disfunctionalReason;

        return $clone;
    }

    public function withoutDisfunctionalReason(): self
    {
        $clone = clone $this;
        unset($clone->disfunctionalReason);

        return $clone;
    }

    /**
     * @param ExtensionInstanceHealth[] $extensionInstancesHealth
     */
    public function withExtensionInstancesHealth(array $extensionInstancesHealth): self
    {
        $clone = clone $this;
        $clone->extensionInstancesHealth = $extensionInstancesHealth;

        return $clone;
    }

    public function withFunctional(bool $functional): self
    {
        $validator = new Validator();
        $validator->validate($functional, static::$schema['properties']['functional']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->functional = $functional;

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

    public function withPublished(bool $published): self
    {
        $validator = new Validator();
        $validator->validate($published, static::$schema['properties']['published']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->published = $published;

        return $clone;
    }

    public function withWithdrawalReason(string $withdrawalReason): self
    {
        $validator = new Validator();
        $validator->validate($withdrawalReason, static::$schema['properties']['withdrawalReason']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->withdrawalReason = $withdrawalReason;

        return $clone;
    }

    public function withoutWithdrawalReason(): self
    {
        $clone = clone $this;
        unset($clone->withdrawalReason);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionHealth Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionHealth
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $disfunctionalReason = null;
        if (isset($input->{'disfunctionalReason'})) {
            $disfunctionalReason = $input->{'disfunctionalReason'};
        }
        $extensionInstancesHealth = [

            ];
        if (isset($input->{'extensionInstancesHealth'})) {
            $extensionInstancesHealth = array_map(fn (array|object $i): ExtensionInstanceHealth => ExtensionInstanceHealth::buildFromInput($i, validate: $validate), $input->{'extensionInstancesHealth'});
        }
        $functional = false;
        if (isset($input->{'functional'})) {
            $functional = (bool)($input->{'functional'});
        }
        $id = $input->{'id'};
        $published = false;
        if (isset($input->{'published'})) {
            $published = (bool)($input->{'published'});
        }
        $withdrawalReason = null;
        if (isset($input->{'withdrawalReason'})) {
            $withdrawalReason = $input->{'withdrawalReason'};
        }

        $obj = new self($id);
        $obj->disfunctionalReason = $disfunctionalReason;
        $obj->extensionInstancesHealth = $extensionInstancesHealth;
        $obj->functional = $functional;
        $obj->published = $published;
        $obj->withdrawalReason = $withdrawalReason;
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
        if (isset($this->disfunctionalReason)) {
            $output['disfunctionalReason'] = $this->disfunctionalReason;
        }
        $output['extensionInstancesHealth'] = array_map(fn (ExtensionInstanceHealth $i): array => $i->toJson(), $this->extensionInstancesHealth);
        $output['functional'] = $this->functional;
        $output['id'] = $this->id;
        $output['published'] = $this->published;
        if (isset($this->withdrawalReason)) {
            $output['withdrawalReason'] = $this->withdrawalReason;
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
