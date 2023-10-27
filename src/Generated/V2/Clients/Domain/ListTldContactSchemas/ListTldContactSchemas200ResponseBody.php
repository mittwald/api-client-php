<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTldContactSchemas;

use InvalidArgumentException;
use JsonSchema\Validator;
use Psr\Http\Message\ResponseInterface;

class ListTldContactSchemas200ResponseBody
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
     * @var ListTldContactSchemas200ResponseBodyJsonSchemaAdminC|null
     */
    private ?ListTldContactSchemas200ResponseBodyJsonSchemaAdminC $jsonSchemaAdminC = null;

    /**
     * @var ListTldContactSchemas200ResponseBodyJsonSchemaOwnerC
     */
    private ListTldContactSchemas200ResponseBodyJsonSchemaOwnerC $jsonSchemaOwnerC;

    public ResponseInterface|null $httpResponse = null;

    /**
     * @param ListTldContactSchemas200ResponseBodyJsonSchemaOwnerC $jsonSchemaOwnerC
     */
    public function __construct(ListTldContactSchemas200ResponseBodyJsonSchemaOwnerC $jsonSchemaOwnerC)
    {
        $this->jsonSchemaOwnerC = $jsonSchemaOwnerC;
    }

    /**
     * @return ListTldContactSchemas200ResponseBodyJsonSchemaAdminC|null
     */
    public function getJsonSchemaAdminC(): ?ListTldContactSchemas200ResponseBodyJsonSchemaAdminC
    {
        return $this->jsonSchemaAdminC ?? null;
    }

    /**
     * @return ListTldContactSchemas200ResponseBodyJsonSchemaOwnerC
     */
    public function getJsonSchemaOwnerC(): ListTldContactSchemas200ResponseBodyJsonSchemaOwnerC
    {
        return $this->jsonSchemaOwnerC;
    }

    /**
     * @param ListTldContactSchemas200ResponseBodyJsonSchemaAdminC $jsonSchemaAdminC
     * @return self
     */
    public function withJsonSchemaAdminC(ListTldContactSchemas200ResponseBodyJsonSchemaAdminC $jsonSchemaAdminC): self
    {
        $clone = clone $this;
        $clone->jsonSchemaAdminC = $jsonSchemaAdminC;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutJsonSchemaAdminC(): self
    {
        $clone = clone $this;
        unset($clone->jsonSchemaAdminC);

        return $clone;
    }

    /**
     * @param ListTldContactSchemas200ResponseBodyJsonSchemaOwnerC $jsonSchemaOwnerC
     * @return self
     */
    public function withJsonSchemaOwnerC(ListTldContactSchemas200ResponseBodyJsonSchemaOwnerC $jsonSchemaOwnerC): self
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
     * @return ListTldContactSchemas200ResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListTldContactSchemas200ResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $jsonSchemaAdminC = null;
        if (isset($input->{'jsonSchemaAdminC'})) {
            $jsonSchemaAdminC = ListTldContactSchemas200ResponseBodyJsonSchemaAdminC::buildFromInput($input->{'jsonSchemaAdminC'}, validate: $validate);
        }
        $jsonSchemaOwnerC = ListTldContactSchemas200ResponseBodyJsonSchemaOwnerC::buildFromInput($input->{'jsonSchemaOwnerC'}, validate: $validate);

        $obj = new self($jsonSchemaOwnerC);
        $obj->jsonSchemaAdminC = $jsonSchemaAdminC;
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
        if (isset($this->jsonSchemaAdminC)) {
            $this->jsonSchemaAdminC = clone $this->jsonSchemaAdminC;
        }
        $this->jsonSchemaOwnerC = clone $this->jsonSchemaOwnerC;
    }

    public static function fromResponse(ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}