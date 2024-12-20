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
            'pendingWebhooks' => [
                'default' => 0,
                'minimum' => 0,
                'type' => 'integer',
            ],
            'webhooksHalted' => [
                'default' => false,
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'id',
            'webhooksHalted',
            'pendingInstallation',
            'pendingRemoval',
            'pendingWebhooks',
        ],
        'type' => 'object',
    ];

    private string $id;

    private bool $pendingInstallation = false;

    private bool $pendingRemoval = false;

    private int $pendingWebhooks = 0;

    private bool $webhooksHalted = false;

    public function __construct(string $id)
    {
        $this->id = $id;
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

    public function getPendingWebhooks(): int
    {
        return $this->pendingWebhooks;
    }

    public function getWebhooksHalted(): bool
    {
        return $this->webhooksHalted;
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

    public function withPendingInstallation(bool $pendingInstallation): self
    {
        $validator = new Validator();
        $validator->validate($pendingInstallation, static::$schema['properties']['pendingInstallation']);
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
        $validator->validate($pendingRemoval, static::$schema['properties']['pendingRemoval']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->pendingRemoval = $pendingRemoval;

        return $clone;
    }

    public function withPendingWebhooks(int $pendingWebhooks): self
    {
        $validator = new Validator();
        $validator->validate($pendingWebhooks, static::$schema['properties']['pendingWebhooks']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->pendingWebhooks = $pendingWebhooks;

        return $clone;
    }

    public function withWebhooksHalted(bool $webhooksHalted): self
    {
        $validator = new Validator();
        $validator->validate($webhooksHalted, static::$schema['properties']['webhooksHalted']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->webhooksHalted = $webhooksHalted;

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

        $id = $input->{'id'};
        $pendingInstallation = false;
        if (isset($input->{'pendingInstallation'})) {
            $pendingInstallation = (bool)($input->{'pendingInstallation'});
        }
        $pendingRemoval = false;
        if (isset($input->{'pendingRemoval'})) {
            $pendingRemoval = (bool)($input->{'pendingRemoval'});
        }
        $pendingWebhooks = 0;
        if (isset($input->{'pendingWebhooks'})) {
            $pendingWebhooks = (int)($input->{'pendingWebhooks'});
        }
        $webhooksHalted = false;
        if (isset($input->{'webhooksHalted'})) {
            $webhooksHalted = (bool)($input->{'webhooksHalted'});
        }

        $obj = new self($id);
        $obj->pendingInstallation = $pendingInstallation;
        $obj->pendingRemoval = $pendingRemoval;
        $obj->pendingWebhooks = $pendingWebhooks;
        $obj->webhooksHalted = $webhooksHalted;
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
        $output['id'] = $this->id;
        $output['pendingInstallation'] = $this->pendingInstallation;
        $output['pendingRemoval'] = $this->pendingRemoval;
        $output['pendingWebhooks'] = $this->pendingWebhooks;
        $output['webhooksHalted'] = $this->webhooksHalted;

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
