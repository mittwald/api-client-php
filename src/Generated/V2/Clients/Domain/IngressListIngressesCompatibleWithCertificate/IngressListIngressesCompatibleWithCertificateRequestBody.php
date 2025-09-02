<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesCompatibleWithCertificate;

use InvalidArgumentException;
use JsonSchema\Validator;

class IngressListIngressesCompatibleWithCertificateRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'certificate' => [
                'description' => 'PEM-encoded certificate. Linebreaks have to be escaped with 
.',
                'type' => 'string',
            ],
            'projectId' => [
                'description' => 'The projects UUID.',
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'projectId',
            'certificate',
        ],
        'type' => 'object',
    ];

    /**
     * PEM-encoded certificate. Linebreaks have to be escaped with
     * .
     */
    private string $certificate;

    /**
     * The projects UUID.
     */
    private string $projectId;

    public function __construct(string $certificate, string $projectId)
    {
        $this->certificate = $certificate;
        $this->projectId = $projectId;
    }

    public function getCertificate(): string
    {
        return $this->certificate;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    public function withCertificate(string $certificate): self
    {
        $validator = new Validator();
        $validator->validate($certificate, self::$internalValidationSchema['properties']['certificate']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->certificate = $certificate;

        return $clone;
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

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return IngressListIngressesCompatibleWithCertificateRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): IngressListIngressesCompatibleWithCertificateRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $certificate = $input->{'certificate'};
        $projectId = $input->{'projectId'};

        $obj = new self($certificate, $projectId);

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
        $output['projectId'] = $this->projectId;

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
}
