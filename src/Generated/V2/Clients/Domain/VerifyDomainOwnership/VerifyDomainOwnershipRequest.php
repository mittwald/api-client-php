<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\VerifyDomainOwnership;

class VerifyDomainOwnershipRequest
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'domainOwnershipId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                
            ],
        ],
        'required' => [
            'domainOwnershipId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $domainOwnershipId;

    /**
     * @var mixed
     */
    private $body;

    private array $headers = [
        
    ];

    /**
     * @param string $domainOwnershipId
     * @param mixed $body
     */
    public function __construct(string $domainOwnershipId, $body)
    {
        $this->domainOwnershipId = $domainOwnershipId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getDomainOwnershipId() : string
    {
        return $this->domainOwnershipId;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $domainOwnershipId
     * @return self
     */
    public function withDomainOwnershipId(string $domainOwnershipId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($domainOwnershipId, static::$schema['properties']['domainOwnershipId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domainOwnershipId = $domainOwnershipId;

        return $clone;
    }

    /**
     * @param mixed $body
     * @return self
     */
    public function withBody($body) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($body, static::$schema['properties']['body']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return VerifyDomainOwnershipRequest Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : VerifyDomainOwnershipRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $domainOwnershipId = $input->{'domainOwnershipId'};
        $body = $input->{'body'};

        $obj = new self($domainOwnershipId, $body);

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
        $output['domainOwnershipId'] = $this->domainOwnershipId;
        $output['body'] = $this->body;

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
        $domainOwnershipId = urlencode($mapped['domainOwnershipId']);
        return '/v2/domain-ownerships/' . $domainOwnershipId;
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
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

