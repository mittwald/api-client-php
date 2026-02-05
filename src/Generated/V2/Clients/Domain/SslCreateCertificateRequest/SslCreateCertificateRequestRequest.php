<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\SslCreateCertificateRequest;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Ssl\CertificateRequestCreateRequest;
use Mittwald\ApiClient\Generated\V2\Schemas\Ssl\CertificateRequestCreateWithCSRRequest;
use Mittwald\ApiClient\Generated\V2\Schemas\Ssl\CertificateRequestCreateWithDNSRequest;

class SslCreateCertificateRequestRequest
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'body' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.ssl.CertificateRequestCreateRequest',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.ssl.CertificateRequestCreateWithCSRRequest',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.ssl.CertificateRequestCreateWithDNSRequest',
                    ],
                ],
            ],
        ],
        'required' => [
            'body',
        ],
    ];

    private CertificateRequestCreateRequest|CertificateRequestCreateWithCSRRequest|CertificateRequestCreateWithDNSRequest $body;

    private array $headers = [

    ];

    public function __construct(CertificateRequestCreateRequest|CertificateRequestCreateWithCSRRequest|CertificateRequestCreateWithDNSRequest $body)
    {
        $this->body = $body;
    }

    public function getBody(): CertificateRequestCreateRequest|CertificateRequestCreateWithCSRRequest|CertificateRequestCreateWithDNSRequest
    {
        return $this->body;
    }

    public function withBody(CertificateRequestCreateRequest|CertificateRequestCreateWithCSRRequest|CertificateRequestCreateWithDNSRequest $body): self
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
     * @return SslCreateCertificateRequestRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SslCreateCertificateRequestRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = match (true) {
            CertificateRequestCreateRequest::validateInput($input->{'body'}, true) => CertificateRequestCreateRequest::buildFromInput($input->{'body'}, validate: $validate),
            CertificateRequestCreateWithCSRRequest::validateInput($input->{'body'}, true) => CertificateRequestCreateWithCSRRequest::buildFromInput($input->{'body'}, validate: $validate),
            CertificateRequestCreateWithDNSRequest::validateInput($input->{'body'}, true) => CertificateRequestCreateWithDNSRequest::buildFromInput($input->{'body'}, validate: $validate),
            default => throw new InvalidArgumentException("could not build property 'body' from JSON"),
        };

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
        $output['body'] = match (true) {
            ($this->body) instanceof CertificateRequestCreateRequest, ($this->body) instanceof CertificateRequestCreateWithCSRRequest, ($this->body) instanceof CertificateRequestCreateWithDNSRequest => $this->body->toJson(),
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
        $validator = new \Mittwald\ApiClient\Validator\Validator();
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, self::$internalValidationSchema);

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
            ($this->body) instanceof CertificateRequestCreateRequest, ($this->body) instanceof CertificateRequestCreateWithCSRRequest, ($this->body) instanceof CertificateRequestCreateWithDNSRequest => $this->body,
        };
    }

    /**
     * Builds the URL for this request
     *
     * This method is used internally by the client to build the URL for this request.
     * You should not need to call this method directly.
     *
     * @internal
     * @return string The URL for this request
     */
    public function buildUrl(): string
    {
        $mapped = $this->toJson();
        return '/v2/certificate-requests';
    }

    /**
     * Builds the request options for this request
     *
     * This method is used internally by the client to build the Guzzle request options
     * for this request. You should not need to call this method directly.
     *
     * @internal
     * @return array The Guzzle request options for this request
     */
    public function buildRequestOptions(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return [
            'query' => $query,
            'headers' => $this->headers,
            'json' => $this->getBody()->toJson(),
        ];
    }

    /**
     * Adds a header to this request
     *
     * You can use this method to add custom HTTP headers to the request.
     *
     * @param string $name The name of the header to add
     * @param string|array $value The value of the header to add
     * @return self A clone of this request with the header added
     */
    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
