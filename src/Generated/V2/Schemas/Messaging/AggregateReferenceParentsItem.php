<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Messaging;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.messaging.AggregateReference.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class AggregateReferenceParentsItem
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'aggregate' => [
                'type' => 'string',
            ],
            'domain' => [
                'type' => 'string',
            ],
            'id' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'aggregate',
            'domain',
        ],
        'type' => 'object',
    ];

    private string $aggregate;

    private string $domain;

    private string $id;

    public function __construct(string $aggregate, string $domain, string $id)
    {
        $this->aggregate = $aggregate;
        $this->domain = $domain;
        $this->id = $id;
    }

    public function getAggregate(): string
    {
        return $this->aggregate;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function withAggregate(string $aggregate): self
    {
        $validator = new Validator();
        $validator->validate($aggregate, self::$schema['properties']['aggregate']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->aggregate = $aggregate;

        return $clone;
    }

    public function withDomain(string $domain): self
    {
        $validator = new Validator();
        $validator->validate($domain, self::$schema['properties']['domain']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domain = $domain;

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

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AggregateReferenceParentsItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AggregateReferenceParentsItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $aggregate = $input->{'aggregate'};
        $domain = $input->{'domain'};
        $id = $input->{'id'};

        $obj = new self($aggregate, $domain, $id);

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
        $output['aggregate'] = $this->aggregate;
        $output['domain'] = $this->domain;
        $output['id'] = $this->id;

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
    }
}
