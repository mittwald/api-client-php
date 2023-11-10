<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateLegacyTariffChange;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateLegacyTariffChangeRequest
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
            'body' => [
                'properties' => [
                    'pAccount' => [
                        'pattern' => '^[pr][0-9]{2,8}$',
                        'type' => 'string',
                    ],
                    'targetTariff' => [
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'pAccount',
                    'targetTariff',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'body',
        ],
    ];

    /**
     * @var CreateLegacyTariffChangeRequestBody
     */
    private CreateLegacyTariffChangeRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param CreateLegacyTariffChangeRequestBody $body
     */
    public function __construct(CreateLegacyTariffChangeRequestBody $body)
    {
        $this->body = $body;
    }

    /**
     * @return CreateLegacyTariffChangeRequestBody
     */
    public function getBody(): CreateLegacyTariffChangeRequestBody
    {
        return $this->body;
    }

    /**
     * @param CreateLegacyTariffChangeRequestBody $body
     * @return self
     */
    public function withBody(CreateLegacyTariffChangeRequestBody $body): self
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
     * @return CreateLegacyTariffChangeRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateLegacyTariffChangeRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = CreateLegacyTariffChangeRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($body);

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
        $output['body'] = ($this->body)->toJson();

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
        $this->body = clone $this->body;
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        return '/v2/legacy-tariff-change';
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
