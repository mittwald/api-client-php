<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContract;

class TerminateContractRequest
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
            'contractId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'reason' => [
                        'description' => 'A reason for the termination can be given as plain text.',
                        'example' => 'Projekt wird nicht mehr benötigt',
                        'type' => 'string',
                    ],
                    'terminationTargetDate' => [
                        'description' => 'The termination date has to be a valid date according to activation and contract period of the base ContractItem. If none given, the next possible termination date will be used.',
                        'format' => 'date-time',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'required' => [
            'contractId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $contractId;

    /**
     * @var TerminateContractRequestBody
     */
    private TerminateContractRequestBody $body;

    private array $headers = [
        
    ];

    /**
     * @param string $contractId
     * @param TerminateContractRequestBody $body
     */
    public function __construct(string $contractId, TerminateContractRequestBody $body)
    {
        $this->contractId = $contractId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getContractId() : string
    {
        return $this->contractId;
    }

    /**
     * @return TerminateContractRequestBody
     */
    public function getBody() : TerminateContractRequestBody
    {
        return $this->body;
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
     * @param TerminateContractRequestBody $body
     * @return self
     */
    public function withBody(TerminateContractRequestBody $body) : self
    {
        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return TerminateContractRequest Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : TerminateContractRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contractId = $input->{'contractId'};
        $body = TerminateContractRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($contractId, $body);

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
        $output['body'] = ($this->body)->toJson();

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
        $this->body = clone $this->body;
    }

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        $contractId = urlencode($mapped['contractId']);
        return '/v2/contracts/' . $contractId . '/termination';
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

