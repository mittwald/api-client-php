<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewTariffChange;

use InvalidArgumentException;

class OrderPreviewTariffChangeRequest
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
                    'tariffChangeData' => [
                        'oneOf' => [
                            [
                                '$ref' => '#/components/schemas/de.mittwald.v1.order.ProjectHostingTariffChange',
                            ],
                            [
                                '$ref' => '#/components/schemas/de.mittwald.v1.order.ServerTariffChange',
                            ],
                        ],
                    ],
                    'tariffChangeType' => [
                        'enum' => [
                            'projectHosting',
                            'server',
                        ],
                        'type' => 'string',
                    ],
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'body',
        ],
    ];

    /**
     * @var OrderPreviewTariffChangeRequestBody
     */
    private OrderPreviewTariffChangeRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param OrderPreviewTariffChangeRequestBody $body
     */
    public function __construct(OrderPreviewTariffChangeRequestBody $body)
    {
        $this->body = $body;
    }

    /**
     * @return OrderPreviewTariffChangeRequestBody
     */
    public function getBody(): OrderPreviewTariffChangeRequestBody
    {
        return $this->body;
    }

    /**
     * @param OrderPreviewTariffChangeRequestBody $body
     * @return self
     */
    public function withBody(OrderPreviewTariffChangeRequestBody $body): self
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
     * @return OrderPreviewTariffChangeRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): OrderPreviewTariffChangeRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = OrderPreviewTariffChangeRequestBody::buildFromInput($input->{'body'}, validate: $validate);

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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        return '/v2/tariff-change-previews';
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
