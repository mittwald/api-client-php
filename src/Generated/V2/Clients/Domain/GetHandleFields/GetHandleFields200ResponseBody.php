<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\GetHandleFields;

class GetHandleFields200ResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'jsonSchemaAdminC' => [
                'type' => 'object',
            ],
            'jsonSchemaOwnerC' => [
                'type' => 'object',
            ],
        ],
        'required' => [
            'jsonSchemaOwnerC',
        ],
        'type' => 'object',
    ];

    /**
     * @var GetHandleFields200ResponseBodyJsonSchemaAdminC|null
     */
    private ?GetHandleFields200ResponseBodyJsonSchemaAdminC $jsonSchemaAdminC = null;

    /**
     * @var GetHandleFields200ResponseBodyJsonSchemaOwnerC
     */
    private GetHandleFields200ResponseBodyJsonSchemaOwnerC $jsonSchemaOwnerC;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     * @param GetHandleFields200ResponseBodyJsonSchemaOwnerC $jsonSchemaOwnerC
     */
    public function __construct(GetHandleFields200ResponseBodyJsonSchemaOwnerC $jsonSchemaOwnerC)
    {
        $this->jsonSchemaOwnerC = $jsonSchemaOwnerC;
    }

    /**
     * @return GetHandleFields200ResponseBodyJsonSchemaAdminC|null
     */
    public function getJsonSchemaAdminC() : ?GetHandleFields200ResponseBodyJsonSchemaAdminC
    {
        return $this->jsonSchemaAdminC ?? null;
    }

    /**
     * @return GetHandleFields200ResponseBodyJsonSchemaOwnerC
     */
    public function getJsonSchemaOwnerC() : GetHandleFields200ResponseBodyJsonSchemaOwnerC
    {
        return $this->jsonSchemaOwnerC;
    }

    /**
     * @param GetHandleFields200ResponseBodyJsonSchemaAdminC $jsonSchemaAdminC
     * @return self
     */
    public function withJsonSchemaAdminC(GetHandleFields200ResponseBodyJsonSchemaAdminC $jsonSchemaAdminC) : self
    {
        $clone = clone $this;
        $clone->jsonSchemaAdminC = $jsonSchemaAdminC;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutJsonSchemaAdminC() : self
    {
        $clone = clone $this;
        unset($clone->jsonSchemaAdminC);

        return $clone;
    }

    /**
     * @param GetHandleFields200ResponseBodyJsonSchemaOwnerC $jsonSchemaOwnerC
     * @return self
     */
    public function withJsonSchemaOwnerC(GetHandleFields200ResponseBodyJsonSchemaOwnerC $jsonSchemaOwnerC) : self
    {
        $clone = clone $this;
        $clone->jsonSchemaOwnerC = $jsonSchemaOwnerC;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetHandleFields200ResponseBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : GetHandleFields200ResponseBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $jsonSchemaAdminC = null;
        if (isset($input->{'jsonSchemaAdminC'})) {
            $jsonSchemaAdminC = GetHandleFields200ResponseBodyJsonSchemaAdminC::buildFromInput($input->{'jsonSchemaAdminC'}, validate: $validate);
        }
        $jsonSchemaOwnerC = GetHandleFields200ResponseBodyJsonSchemaOwnerC::buildFromInput($input->{'jsonSchemaOwnerC'}, validate: $validate);

        $obj = new self($jsonSchemaOwnerC);
        $obj->jsonSchemaAdminC = $jsonSchemaAdminC;
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
        if (isset($this->jsonSchemaAdminC)) {
            $output['jsonSchemaAdminC'] = ($this->jsonSchemaAdminC)->toJson();
        }
        $output['jsonSchemaOwnerC'] = ($this->jsonSchemaOwnerC)->toJson();

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
        if (isset($this->jsonSchemaAdminC)) {
            $this->jsonSchemaAdminC = clone $this->jsonSchemaAdminC;
        }
        $this->jsonSchemaOwnerC = clone $this->jsonSchemaOwnerC;
    }

    public static function fromResponse(\Psr\Http\Message\ResponseInterface $httpResponse) : self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}

