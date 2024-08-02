<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for
 * de.mittwald.v1.conversation.ShareableAggregateReferenceAlternative4.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ShareableAggregateReferenceAlternative4
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'aggregate' => [
                'enum' => [
                    'appinstallation',
                ],
                'type' => 'string',
            ],
            'domain' => [
                'enum' => [
                    'app',
                ],
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

    private ShareableAggregateReferenceAlternative4Aggregate $aggregate;

    private ShareableAggregateReferenceAlternative4Domain $domain;

    private string $id;

    public function __construct(ShareableAggregateReferenceAlternative4Aggregate $aggregate, ShareableAggregateReferenceAlternative4Domain $domain, string $id)
    {
        $this->aggregate = $aggregate;
        $this->domain = $domain;
        $this->id = $id;
    }

    public function getAggregate(): ShareableAggregateReferenceAlternative4Aggregate
    {
        return $this->aggregate;
    }

    public function getDomain(): ShareableAggregateReferenceAlternative4Domain
    {
        return $this->domain;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function withAggregate(ShareableAggregateReferenceAlternative4Aggregate $aggregate): self
    {
        $clone = clone $this;
        $clone->aggregate = $aggregate;

        return $clone;
    }

    public function withDomain(ShareableAggregateReferenceAlternative4Domain $domain): self
    {
        $clone = clone $this;
        $clone->domain = $domain;

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

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ShareableAggregateReferenceAlternative4 Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ShareableAggregateReferenceAlternative4
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $aggregate = ShareableAggregateReferenceAlternative4Aggregate::from($input->{'aggregate'});
        $domain = ShareableAggregateReferenceAlternative4Domain::from($input->{'domain'});
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
        $output['aggregate'] = ($this->aggregate)->value;
        $output['domain'] = ($this->domain)->value;
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
