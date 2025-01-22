<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Marketplace;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.marketplace.ExtensionInstance.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ExtensionInstance
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'aggregateReference' => [
                'properties' => [
                    'aggregate' => [
                        'type' => 'string',
                    ],
                    'domain' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'format' => 'uuid',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'id',
                    'domain',
                    'aggregate',
                ],
                'type' => 'object',
            ],
            'consentedScopes' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'createdAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'disabled' => [
                'default' => false,
                'type' => 'boolean',
            ],
            'extensionId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'pendingInstallation' => [
                'default' => false,
                'type' => 'boolean',
            ],
            'pendingRemoval' => [
                'default' => false,
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'id',
            'extensionId',
            'disabled',
            'pendingInstallation',
            'pendingRemoval',
            'consentedScopes',
            'aggregateReference',
        ],
        'type' => 'object',
    ];

    private ExtensionInstanceAggregateReference $aggregateReference;

    /**
     * @var string[]
     */
    private array $consentedScopes;

    private ?DateTime $createdAt = null;

    private bool $disabled = false;

    private string $extensionId;

    private string $id;

    private bool $pendingInstallation = false;

    private bool $pendingRemoval = false;

    /**
     * @param string[] $consentedScopes
     */
    public function __construct(ExtensionInstanceAggregateReference $aggregateReference, array $consentedScopes, string $extensionId, string $id)
    {
        $this->aggregateReference = $aggregateReference;
        $this->consentedScopes = $consentedScopes;
        $this->extensionId = $extensionId;
        $this->id = $id;
    }

    public function getAggregateReference(): ExtensionInstanceAggregateReference
    {
        return $this->aggregateReference;
    }

    /**
     * @return string[]
     */
    public function getConsentedScopes(): array
    {
        return $this->consentedScopes;
    }

    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt ?? null;
    }

    public function getDisabled(): bool
    {
        return $this->disabled;
    }

    public function getExtensionId(): string
    {
        return $this->extensionId;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getPendingInstallation(): bool
    {
        return $this->pendingInstallation;
    }

    public function getPendingRemoval(): bool
    {
        return $this->pendingRemoval;
    }

    public function withAggregateReference(ExtensionInstanceAggregateReference $aggregateReference): self
    {
        $clone = clone $this;
        $clone->aggregateReference = $aggregateReference;

        return $clone;
    }

    /**
     * @param string[] $consentedScopes
     */
    public function withConsentedScopes(array $consentedScopes): self
    {
        $validator = new Validator();
        $validator->validate($consentedScopes, self::$schema['properties']['consentedScopes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->consentedScopes = $consentedScopes;

        return $clone;
    }

    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

    public function withoutCreatedAt(): self
    {
        $clone = clone $this;
        unset($clone->createdAt);

        return $clone;
    }

    public function withDisabled(bool $disabled): self
    {
        $validator = new Validator();
        $validator->validate($disabled, self::$schema['properties']['disabled']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->disabled = $disabled;

        return $clone;
    }

    public function withExtensionId(string $extensionId): self
    {
        $validator = new Validator();
        $validator->validate($extensionId, self::$schema['properties']['extensionId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->extensionId = $extensionId;

        return $clone;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, self::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    public function withPendingInstallation(bool $pendingInstallation): self
    {
        $validator = new Validator();
        $validator->validate($pendingInstallation, self::$schema['properties']['pendingInstallation']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->pendingInstallation = $pendingInstallation;

        return $clone;
    }

    public function withPendingRemoval(bool $pendingRemoval): self
    {
        $validator = new Validator();
        $validator->validate($pendingRemoval, self::$schema['properties']['pendingRemoval']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->pendingRemoval = $pendingRemoval;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionInstance Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionInstance
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $aggregateReference = ExtensionInstanceAggregateReference::buildFromInput($input->{'aggregateReference'}, validate: $validate);
        $consentedScopes = $input->{'consentedScopes'};
        $createdAt = null;
        if (isset($input->{'createdAt'})) {
            $createdAt = new DateTime($input->{'createdAt'});
        }
        $disabled = false;
        if (isset($input->{'disabled'})) {
            $disabled = (bool)($input->{'disabled'});
        }
        $extensionId = $input->{'extensionId'};
        $id = $input->{'id'};
        $pendingInstallation = false;
        if (isset($input->{'pendingInstallation'})) {
            $pendingInstallation = (bool)($input->{'pendingInstallation'});
        }
        $pendingRemoval = false;
        if (isset($input->{'pendingRemoval'})) {
            $pendingRemoval = (bool)($input->{'pendingRemoval'});
        }

        $obj = new self($aggregateReference, $consentedScopes, $extensionId, $id);
        $obj->createdAt = $createdAt;
        $obj->disabled = $disabled;
        $obj->pendingInstallation = $pendingInstallation;
        $obj->pendingRemoval = $pendingRemoval;
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
        $output['aggregateReference'] = ($this->aggregateReference)->toJson();
        $output['consentedScopes'] = $this->consentedScopes;
        if (isset($this->createdAt)) {
            $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        }
        $output['disabled'] = $this->disabled;
        $output['extensionId'] = $this->extensionId;
        $output['id'] = $this->id;
        $output['pendingInstallation'] = $this->pendingInstallation;
        $output['pendingRemoval'] = $this->pendingRemoval;

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
        $this->aggregateReference = clone $this->aggregateReference;
        if (isset($this->createdAt)) {
            $this->createdAt = clone $this->createdAt;
        }
    }
}
