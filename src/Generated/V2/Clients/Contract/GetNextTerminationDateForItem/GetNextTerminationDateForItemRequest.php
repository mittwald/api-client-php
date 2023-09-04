<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\GetNextTerminationDateForItem;

class GetNextTerminationDateForItemRequest
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
            'contractId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'contractItemId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'contractId',
            'contractItemId',
        ],
    ];

    /**
     * @var string
     */
    private string $contractId;

    /**
     * @var string
     */
    private string $contractItemId;

    private array $headers = [
        
    ];

    /**
     * @param string $contractId
     * @param string $contractItemId
     */
    public function __construct(string $contractId, string $contractItemId)
    {
        $this->contractId = $contractId;
        $this->contractItemId = $contractItemId;
    }

    /**
     * @return string
     */
    public function getContractId() : string
    {
        return $this->contractId;
    }

    /**
     * @return string
     */
    public function getContractItemId() : string
    {
        return $this->contractItemId;
    }

    /**
     * @param string $contractId
     * @return self
     */
    public function withContractId(string $contractId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($contractId, static::$schema['properties']['contractId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractId = $contractId;

        return $clone;
    }

    /**
     * @param string $contractItemId
     * @return self
     */
    public function withContractItemId(string $contractItemId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($contractItemId, static::$schema['properties']['contractItemId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractItemId = $contractItemId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetNextTerminationDateForItemRequest Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : GetNextTerminationDateForItemRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contractId = $input->{'contractId'};
        $contractItemId = $input->{'contractItemId'};

        $obj = new self($contractId, $contractItemId);

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
        $output['contractId'] = $this->contractId;
        $output['contractItemId'] = $this->contractItemId;

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
        $contractId = urlencode($mapped['contractId']);
        $contractItemId = urlencode($mapped['contractItemId']);
        return '/v2/contracts/' . $contractId . '/items/' . $contractItemId . '/next-termination-dates';
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

