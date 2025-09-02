<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\SslListCertificateRequests;

use InvalidArgumentException;
use JsonSchema\Validator;

class SslListCertificateRequestsRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'projectId' => [
                'type' => 'string',
            ],
            'ingressId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [

        ],
    ];

    private ?string $projectId = null;

    private ?string $ingressId = null;

    private array $headers = [

    ];

    /**
     *
     */
    public function __construct()
    {
    }

    public function getProjectId(): ?string
    {
        return $this->projectId ?? null;
    }

    public function getIngressId(): ?string
    {
        return $this->ingressId ?? null;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, self::$internalValidationSchema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    public function withoutProjectId(): self
    {
        $clone = clone $this;
        unset($clone->projectId);

        return $clone;
    }

    public function withIngressId(string $ingressId): self
    {
        $validator = new Validator();
        $validator->validate($ingressId, self::$internalValidationSchema['properties']['ingressId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->ingressId = $ingressId;

        return $clone;
    }

    public function withoutIngressId(): self
    {
        $clone = clone $this;
        unset($clone->ingressId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SslListCertificateRequestsRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SslListCertificateRequestsRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectId = null;
        if (isset($input->{'projectId'})) {
            $projectId = $input->{'projectId'};
        }
        $ingressId = null;
        if (isset($input->{'ingressId'})) {
            $ingressId = $input->{'ingressId'};
        }

        $obj = new self();
        $obj->projectId = $projectId;
        $obj->ingressId = $ingressId;
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
        if (isset($this->projectId)) {
            $output['projectId'] = $this->projectId;
        }
        if (isset($this->ingressId)) {
            $output['ingressId'] = $this->ingressId;
        }

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
        if (isset($mapped['projectId'])) {
            $query['projectId'] = $mapped['projectId'];
        }
        if (isset($mapped['ingressId'])) {
            $query['ingressId'] = $mapped['ingressId'];
        }
        return [
            'query' => $query,
            'headers' => $this->headers,
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
