<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Marketplace;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.marketplace.ExtensionInstanceHealth.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ExtensionInstanceHealth
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
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'instantiationIsPending' => [
                'default' => false,
                'type' => 'boolean',
            ],
            'pendingWebhooksCount' => [
                'default' => 0,
                'minimum' => 0,
                'type' => 'integer',
            ],
            'removalIsPending' => [
                'default' => false,
                'type' => 'boolean',
            ],
            'webhooksAreHalted' => [
                'default' => false,
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'id',
            'aggregateReference',
            'webhooksAreHalted',
            'instantiationIsPending',
            'removalIsPending',
            'pendingWebhooksCount',
        ],
        'type' => 'object',
    ];

    private ExtensionInstanceHealthAggregateReference $aggregateReference;

    private string $id;

    private bool $instantiationIsPending = false;

    private int $pendingWebhooksCount = 0;

    private bool $removalIsPending = false;

    private bool $webhooksAreHalted = false;

    public function __construct(ExtensionInstanceHealthAggregateReference $aggregateReference, string $id)
    {
        $this->aggregateReference = $aggregateReference;
        $this->id = $id;
    }

    public function getAggregateReference(): ExtensionInstanceHealthAggregateReference
    {
        return $this->aggregateReference;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getInstantiationIsPending(): bool
    {
        return $this->instantiationIsPending;
    }

    public function getPendingWebhooksCount(): int
    {
        return $this->pendingWebhooksCount;
    }

    public function getRemovalIsPending(): bool
    {
        return $this->removalIsPending;
    }

    public function getWebhooksAreHalted(): bool
    {
        return $this->webhooksAreHalted;
    }

    public function withAggregateReference(ExtensionInstanceHealthAggregateReference $aggregateReference): self
    {
        $clone = clone $this;
        $clone->aggregateReference = $aggregateReference;

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

    public function withInstantiationIsPending(bool $instantiationIsPending): self
    {
        $validator = new Validator();
        $validator->validate($instantiationIsPending, static::$schema['properties']['instantiationIsPending']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->instantiationIsPending = $instantiationIsPending;

        return $clone;
    }

    public function withPendingWebhooksCount(int $pendingWebhooksCount): self
    {
        $validator = new Validator();
        $validator->validate($pendingWebhooksCount, static::$schema['properties']['pendingWebhooksCount']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->pendingWebhooksCount = $pendingWebhooksCount;

        return $clone;
    }

    public function withRemovalIsPending(bool $removalIsPending): self
    {
        $validator = new Validator();
        $validator->validate($removalIsPending, static::$schema['properties']['removalIsPending']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->removalIsPending = $removalIsPending;

        return $clone;
    }

    public function withWebhooksAreHalted(bool $webhooksAreHalted): self
    {
        $validator = new Validator();
        $validator->validate($webhooksAreHalted, static::$schema['properties']['webhooksAreHalted']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->webhooksAreHalted = $webhooksAreHalted;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionInstanceHealth Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionInstanceHealth
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $aggregateReference = ExtensionInstanceHealthAggregateReference::buildFromInput($input->{'aggregateReference'}, validate: $validate);
        $id = $input->{'id'};
        $instantiationIsPending = false;
        if (isset($input->{'instantiationIsPending'})) {
            $instantiationIsPending = (bool)($input->{'instantiationIsPending'});
        }
        $pendingWebhooksCount = 0;
        if (isset($input->{'pendingWebhooksCount'})) {
            $pendingWebhooksCount = (int)($input->{'pendingWebhooksCount'});
        }
        $removalIsPending = false;
        if (isset($input->{'removalIsPending'})) {
            $removalIsPending = (bool)($input->{'removalIsPending'});
        }
        $webhooksAreHalted = false;
        if (isset($input->{'webhooksAreHalted'})) {
            $webhooksAreHalted = (bool)($input->{'webhooksAreHalted'});
        }

        $obj = new self($aggregateReference, $id);
        $obj->instantiationIsPending = $instantiationIsPending;
        $obj->pendingWebhooksCount = $pendingWebhooksCount;
        $obj->removalIsPending = $removalIsPending;
        $obj->webhooksAreHalted = $webhooksAreHalted;
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
        $output['id'] = $this->id;
        $output['instantiationIsPending'] = $this->instantiationIsPending;
        $output['pendingWebhooksCount'] = $this->pendingWebhooksCount;
        $output['removalIsPending'] = $this->removalIsPending;
        $output['webhooksAreHalted'] = $this->webhooksAreHalted;

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
        $this->aggregateReference = clone $this->aggregateReference;
    }
}
