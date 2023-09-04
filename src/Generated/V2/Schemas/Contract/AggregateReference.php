<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Contract;

class AggregateReference
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'aggregate' => [
                'example' => 'project',
                'type' => 'string',
            ],
            'domain' => [
                'example' => 'project',
                'type' => 'string',
            ],
            'id' => [
                'example' => 'a1b8f0e9-904f-4716-a1c0-81ccf5342a56',
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'domain',
            'aggregate',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $aggregate;

    /**
     * @var string
     */
    private string $domain;

    /**
     * @var string
     */
    private string $id;

    /**
     * @param string $aggregate
     * @param string $domain
     * @param string $id
     */
    public function __construct(string $aggregate, string $domain, string $id)
    {
        $this->aggregate = $aggregate;
        $this->domain = $domain;
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getAggregate() : string
    {
        return $this->aggregate;
    }

    /**
     * @return string
     */
    public function getDomain() : string
    {
        return $this->domain;
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @param string $aggregate
     * @return self
     */
    public function withAggregate(string $aggregate) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($aggregate, static::$schema['properties']['aggregate']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->aggregate = $aggregate;

        return $clone;
    }

    /**
     * @param string $domain
     * @return self
     */
    public function withDomain(string $domain) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($domain, static::$schema['properties']['domain']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domain = $domain;

        return $clone;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
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
     * @return AggregateReference Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : AggregateReference
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
    public function toJson() : array
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
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
    }
}

