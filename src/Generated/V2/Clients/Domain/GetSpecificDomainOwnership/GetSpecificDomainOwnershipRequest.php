<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\GetSpecificDomainOwnership;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetSpecificDomainOwnershipRequest
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
            'domainOwnershipId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'domainOwnershipId',
        ],
    ];

    /**
     * @var string
     */
    private string $domainOwnershipId;

    private array $headers = [

    ];

    /**
     * @param string $domainOwnershipId
     */
    public function __construct(string $domainOwnershipId)
    {
        $this->domainOwnershipId = $domainOwnershipId;
    }

    /**
     * @return string
     */
    public function getDomainOwnershipId(): string
    {
        return $this->domainOwnershipId;
    }

    /**
     * @param string $domainOwnershipId
     * @return self
     */
    public function withDomainOwnershipId(string $domainOwnershipId): self
    {
        $validator = new Validator();
        $validator->validate($domainOwnershipId, static::$schema['properties']['domainOwnershipId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domainOwnershipId = $domainOwnershipId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetSpecificDomainOwnershipRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetSpecificDomainOwnershipRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $domainOwnershipId = $input->{'domainOwnershipId'};

        $obj = new self($domainOwnershipId);

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
        $output['domainOwnershipId'] = $this->domainOwnershipId;

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
        $validator = new Validator();
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

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $domainOwnershipId = urlencode($mapped['domainOwnershipId']);
        return '/v2/domain-ownerships/' . $domainOwnershipId;
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
