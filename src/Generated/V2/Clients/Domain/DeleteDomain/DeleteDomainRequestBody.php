<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain;

class DeleteDomainRequestBody
{
    public const method = 'delete';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'transit' => [
                'description' => 'If true, Domain is in grace period.',
                'type' => 'boolean',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * If true, Domain is in grace period.
     *
     * @var bool|null
     */
    private ?bool $transit = null;

    private array $headers = [
        
    ];

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return bool|null
     */
    public function getTransit() : ?bool
    {
        return $this->transit ?? null;
    }

    /**
     * @param bool $transit
     * @return self
     */
    public function withTransit(bool $transit) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($transit, static::$schema['properties']['transit']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->transit = $transit;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTransit() : self
    {
        $clone = clone $this;
        unset($clone->transit);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeleteDomainRequestBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : DeleteDomainRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $transit = null;
        if (isset($input->{'transit'})) {
            $transit = (bool)($input->{'transit'});
        }

        $obj = new self();
        $obj->transit = $transit;
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
        if (isset($this->transit)) {
            $output['transit'] = $this->transit;
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
        $domainId = urlencode($mapped['domainId']);
        return '/v2/domains/' . $domainId;
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

