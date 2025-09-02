<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetPublicKey;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionGetPublicKeyRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'serial' => [
                'example' => 'latest',
                'type' => 'string',
            ],
            'purpose' => [
                'default' => 'webhook',
                'enum' => [
                    'webhook',
                    'session_token',
                ],
                'example' => 'webhook',
                'type' => 'string',
            ],
            'format' => [
                'default' => 'raw',
                'enum' => [
                    'raw',
                    'spki',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'serial',
        ],
    ];

    private string $serial;

    private ExtensionGetPublicKeyRequestPurpose $purpose = ExtensionGetPublicKeyRequestPurpose::webhook;

    private ExtensionGetPublicKeyRequestFormat $format = ExtensionGetPublicKeyRequestFormat::raw;

    private array $headers = [

    ];

    public function __construct(string $serial)
    {
        $this->serial = $serial;
    }

    public function getSerial(): string
    {
        return $this->serial;
    }

    public function getPurpose(): ExtensionGetPublicKeyRequestPurpose
    {
        return $this->purpose;
    }

    public function getFormat(): ExtensionGetPublicKeyRequestFormat
    {
        return $this->format;
    }

    public function withSerial(string $serial): self
    {
        $validator = new Validator();
        $validator->validate($serial, self::$internalValidationSchema['properties']['serial']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->serial = $serial;

        return $clone;
    }

    public function withPurpose(ExtensionGetPublicKeyRequestPurpose $purpose): self
    {
        $clone = clone $this;
        $clone->purpose = $purpose;

        return $clone;
    }

    public function withFormat(ExtensionGetPublicKeyRequestFormat $format): self
    {
        $clone = clone $this;
        $clone->format = $format;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionGetPublicKeyRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionGetPublicKeyRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $serial = $input->{'serial'};
        $purpose = ExtensionGetPublicKeyRequestPurpose::webhook;
        if (isset($input->{'purpose'})) {
            $purpose = ExtensionGetPublicKeyRequestPurpose::from($input->{'purpose'});
        }
        $format = ExtensionGetPublicKeyRequestFormat::raw;
        if (isset($input->{'format'})) {
            $format = ExtensionGetPublicKeyRequestFormat::from($input->{'format'});
        }

        $obj = new self($serial);
        $obj->purpose = $purpose;
        $obj->format = $format;
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
        $output['serial'] = $this->serial;
        $output['purpose'] = ($this->purpose)->value;
        $output['format'] = ($this->format)->value;

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
        $serial = urlencode($mapped['serial']);
        return '/v2/public-keys/' . $serial;
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
        if (isset($mapped['purpose'])) {
            $query['purpose'] = $mapped['purpose'];
        }
        if (isset($mapped['format'])) {
            $query['format'] = $mapped['format'];
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
