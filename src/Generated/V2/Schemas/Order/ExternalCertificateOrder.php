<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * You are able to order an External Certificate if you already created a
 * Certificate Request.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ExternalCertificateOrder
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'description' => 'You are able to order an External Certificate if you already created a Certificate Request.',
        'properties' => [
            'certificateRequestId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'projectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'projectId',
            'certificateRequestId',
        ],
        'type' => 'object',
    ];

    private string $certificateRequestId;

    private string $projectId;

    public function __construct(string $certificateRequestId, string $projectId)
    {
        $this->certificateRequestId = $certificateRequestId;
        $this->projectId = $projectId;
    }

    public function getCertificateRequestId(): string
    {
        return $this->certificateRequestId;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    public function withCertificateRequestId(string $certificateRequestId): self
    {
        $validator = new Validator();
        $validator->validate($certificateRequestId, static::$schema['properties']['certificateRequestId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->certificateRequestId = $certificateRequestId;

        return $clone;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
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
     * @return ExternalCertificateOrder Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExternalCertificateOrder
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $certificateRequestId = $input->{'certificateRequestId'};
        $projectId = $input->{'projectId'};

        $obj = new self($certificateRequestId, $projectId);

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
        $output['certificateRequestId'] = $this->certificateRequestId;
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