<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Cronjob\ReplaceCronjobAppInstallationId;

use InvalidArgumentException;
use JsonSchema\Validator;

class ReplaceCronjobAppInstallationIdRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'appInstallationId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'appInstallationId',
        ],
        'type' => 'object',
    ];

    private string $appInstallationId;

    public function __construct(string $appInstallationId)
    {
        $this->appInstallationId = $appInstallationId;
    }

    public function getAppInstallationId(): string
    {
        return $this->appInstallationId;
    }

    public function withAppInstallationId(string $appInstallationId): self
    {
        $validator = new Validator();
        $validator->validate($appInstallationId, self::$internalValidationSchema['properties']['appInstallationId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->appInstallationId = $appInstallationId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ReplaceCronjobAppInstallationIdRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ReplaceCronjobAppInstallationIdRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $appInstallationId = $input->{'appInstallationId'};

        $obj = new self($appInstallationId);

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
        $output['appInstallationId'] = $this->appInstallationId;

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
