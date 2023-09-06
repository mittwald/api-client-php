<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressTls;

use InvalidArgumentException;

class IngressTlsRequest
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'ingressId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.ingress.TlsAcme',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.ingress.TlsCertificate',
                    ],
                ],
            ],
        ],
        'required' => [
            'ingressId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $ingressId;

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsAcme|\Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsCertificate
     */
    private \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsAcme|\Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsCertificate $body;

    private array $headers = [

    ];

    /**
     * @param string $ingressId
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsAcme|\Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsCertificate $body
     */
    public function __construct(string $ingressId, \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsAcme|\Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsCertificate $body)
    {
        $this->ingressId = $ingressId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getIngressId(): string
    {
        return $this->ingressId;
    }

    /**
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsAcme|\Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsCertificate
     */
    public function getBody(): \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsAcme|\Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsCertificate
    {
        return $this->body;
    }

    /**
     * @param string $ingressId
     * @return self
     */
    public function withIngressId(string $ingressId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($ingressId, static::$schema['properties']['ingressId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->ingressId = $ingressId;

        return $clone;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsAcme|\Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsCertificate $body
     * @return self
     */
    public function withBody(\Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsAcme|\Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsCertificate $body): self
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
     * @return IngressTlsRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): IngressTlsRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $ingressId = $input->{'ingressId'};
        $body = match (true) {
            \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsAcme::validateInput($input->{'body'}, true) => \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsAcme::buildFromInput($input->{'body'}, validate: $validate),
            \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsCertificate::validateInput($input->{'body'}, true) => \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsCertificate::buildFromInput($input->{'body'}, validate: $validate),
        };

        $obj = new self($ingressId, $body);

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
        $output['ingressId'] = $this->ingressId;
        $output['body'] = match (true) {
            ($this->body) instanceof \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsAcme, ($this->body) instanceof \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsCertificate => $this->body->toJson(),
        };

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
        $this->body = match (true) {
            ($this->body) instanceof \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsAcme, ($this->body) instanceof \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\TlsCertificate => $this->body,
        };
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $ingressId = urlencode($mapped['ingressId']);
        return '/v2/ingresses/' . $ingressId . '/tls';
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
