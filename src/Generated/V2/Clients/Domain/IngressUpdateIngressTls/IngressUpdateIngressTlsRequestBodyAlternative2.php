<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls;

use InvalidArgumentException;
use JsonSchema\Validator;

class IngressUpdateIngressTlsRequestBodyAlternative2
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'additionalProperties' => false,
        'properties' => [
            'certificateId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'certificateId',
        ],
        'type' => 'object',
    ];

    private string $certificateId;

    public function __construct(string $certificateId)
    {
        $this->certificateId = $certificateId;
    }

    public function getCertificateId(): string
    {
        return $this->certificateId;
    }

    public function withCertificateId(string $certificateId): self
    {
        $validator = new Validator();
        $validator->validate($certificateId, self::$schema['properties']['certificateId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->certificateId = $certificateId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return IngressUpdateIngressTlsRequestBodyAlternative2 Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): IngressUpdateIngressTlsRequestBodyAlternative2
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $certificateId = $input->{'certificateId'};

        $obj = new self($certificateId);

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
        $output['certificateId'] = $this->certificateId;

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
        $validator->validate($input, self::$schema);

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
