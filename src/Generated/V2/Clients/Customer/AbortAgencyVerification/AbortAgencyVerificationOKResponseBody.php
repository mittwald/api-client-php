<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\AbortAgencyVerification;

use InvalidArgumentException;
use JsonSchema\Validator;

class AbortAgencyVerificationOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'verificationId' => [
                'description' => 'The ID of the verification',
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * The ID of the verification
     */
    private ?string $verificationId = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getVerificationId(): ?string
    {
        return $this->verificationId ?? null;
    }

    public function withVerificationId(string $verificationId): self
    {
        $validator = new Validator();
        $validator->validate($verificationId, self::$schema['properties']['verificationId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->verificationId = $verificationId;

        return $clone;
    }

    public function withoutVerificationId(): self
    {
        $clone = clone $this;
        unset($clone->verificationId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AbortAgencyVerificationOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AbortAgencyVerificationOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $verificationId = null;
        if (isset($input->{'verificationId'})) {
            $verificationId = $input->{'verificationId'};
        }

        $obj = new self();
        $obj->verificationId = $verificationId;
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
        if (isset($this->verificationId)) {
            $output['verificationId'] = $this->verificationId;
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
