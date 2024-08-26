<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\SslCheckReplaceCertificate;

use InvalidArgumentException;
use JsonSchema\Validator;

class SslCheckReplaceCertificateRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'certificate' => [
                'type' => 'string',
            ],
            'privateKey' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'certificate',
        ],
        'type' => 'object',
    ];

    private string $certificate;

    private ?string $privateKey = null;

    public function __construct(string $certificate)
    {
        $this->certificate = $certificate;
    }

    public function getCertificate(): string
    {
        return $this->certificate;
    }

    public function getPrivateKey(): ?string
    {
        return $this->privateKey ?? null;
    }

    public function withCertificate(string $certificate): self
    {
        $validator = new Validator();
        $validator->validate($certificate, static::$schema['properties']['certificate']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->certificate = $certificate;

        return $clone;
    }

    public function withPrivateKey(string $privateKey): self
    {
        $validator = new Validator();
        $validator->validate($privateKey, static::$schema['properties']['privateKey']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->privateKey = $privateKey;

        return $clone;
    }

    public function withoutPrivateKey(): self
    {
        $clone = clone $this;
        unset($clone->privateKey);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SslCheckReplaceCertificateRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SslCheckReplaceCertificateRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $certificate = $input->{'certificate'};
        $privateKey = null;
        if (isset($input->{'privateKey'})) {
            $privateKey = $input->{'privateKey'};
        }

        $obj = new self($certificate);
        $obj->privateKey = $privateKey;
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
        $output['certificate'] = $this->certificate;
        if (isset($this->privateKey)) {
            $output['privateKey'] = $this->privateKey;
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
    }
}
