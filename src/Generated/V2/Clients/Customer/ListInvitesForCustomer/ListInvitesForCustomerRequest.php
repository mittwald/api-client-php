<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer;

class ListInvitesForCustomerRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'customerId' => [
                'type' => 'string',
            ],
            'limit' => [
                'type' => 'integer',
            ],
            'skip' => [
                'type' => 'integer',
            ],
        ],
        'required' => [
            'customerId',
        ],
    ];

    /**
     * @var string
     */
    private string $customerId;

    /**
     * @var int|null
     */
    private ?int $limit = null;

    /**
     * @var int|null
     */
    private ?int $skip = null;

    private array $headers = [
        
    ];

    /**
     * @param string $customerId
     */
    public function __construct(string $customerId)
    {
        $this->customerId = $customerId;
    }

    /**
     * @return string
     */
    public function getCustomerId() : string
    {
        return $this->customerId;
    }

    /**
     * @return int|null
     */
    public function getLimit() : ?int
    {
        return $this->limit ?? null;
    }

    /**
     * @return int|null
     */
    public function getSkip() : ?int
    {
        return $this->skip ?? null;
    }

    /**
     * @param string $customerId
     * @return self
     */
    public function withCustomerId(string $customerId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($customerId, static::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    /**
     * @param int $limit
     * @return self
     */
    public function withLimit(int $limit) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($limit, static::$schema['properties']['limit']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->limit = $limit;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutLimit() : self
    {
        $clone = clone $this;
        unset($clone->limit);

        return $clone;
    }

    /**
     * @param int $skip
     * @return self
     */
    public function withSkip(int $skip) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($skip, static::$schema['properties']['skip']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->skip = $skip;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutSkip() : self
    {
        $clone = clone $this;
        unset($clone->skip);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListInvitesForCustomerRequest Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : ListInvitesForCustomerRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = $input->{'customerId'};
        $limit = null;
        if (isset($input->{'limit'})) {
            $limit = (int)($input->{'limit'});
        }
        $skip = null;
        if (isset($input->{'skip'})) {
            $skip = (int)($input->{'skip'});
        }

        $obj = new self($customerId);
        $obj->limit = $limit;
        $obj->skip = $skip;
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
        $output['customerId'] = $this->customerId;
        if (isset($this->limit)) {
            $output['limit'] = $this->limit;
        }
        if (isset($this->skip)) {
            $output['skip'] = $this->skip;
        }

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

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        $customerId = urlencode($mapped['customerId']);
        return '/v2/customers/' . $customerId . '/invites';
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
        if (isset($mapped['limit'])) {
            $query['limit'] = $mapped['limit'];
        }
        if (isset($mapped['skip'])) {
            $query['skip'] = $mapped['skip'];
        }
        return $query;
    }

    public function getHeaders() : array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value) : self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}

