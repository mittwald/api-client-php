<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\GetNextTerminationDateForItem;

class GetNextTerminationDateForItem200ResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'contractItemId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'nextTerminationDate' => [
                'format' => 'date',
                'type' => 'string',
            ],
        ],
        'required' => [
            'contractItemId',
            'nextTerminationDate',
        ],
    ];

    /**
     * @var string
     */
    private string $contractItemId;

    /**
     * @var string
     */
    private string $nextTerminationDate;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     * @param string $contractItemId
     * @param string $nextTerminationDate
     */
    public function __construct(string $contractItemId, string $nextTerminationDate)
    {
        $this->contractItemId = $contractItemId;
        $this->nextTerminationDate = $nextTerminationDate;
    }

    /**
     * @return string
     */
    public function getContractItemId() : string
    {
        return $this->contractItemId;
    }

    /**
     * @return string
     */
    public function getNextTerminationDate() : string
    {
        return $this->nextTerminationDate;
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
     * @param string $nextTerminationDate
     * @return self
     */
    public function withNextTerminationDate(string $nextTerminationDate) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($nextTerminationDate, static::$schema['properties']['nextTerminationDate']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->nextTerminationDate = $nextTerminationDate;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetNextTerminationDateForItem200ResponseBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : GetNextTerminationDateForItem200ResponseBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contractItemId = $input->{'contractItemId'};
        $nextTerminationDate = $input->{'nextTerminationDate'};

        $obj = new self($contractItemId, $nextTerminationDate);

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
        $output['contractItemId'] = $this->contractItemId;
        $output['nextTerminationDate'] = $this->nextTerminationDate;

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

    public static function fromResponse(\Psr\Http\Message\ResponseInterface $httpResponse) : self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}

