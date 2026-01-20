<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjobAppId;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateCronjobAppIdRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'appId' => [
                'deprecated' => true,
                'description' => 'DEPRECATED: Use \'appInstallationId\' instead. This field will be removed in a future version.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'appInstallationId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'appId',
        ],
        'type' => 'object',
    ];

    /**
     * DEPRECATED: Use 'appInstallationId' instead. This field will be removed in a future version.
     *
     * @deprecated
     */
    private string $appId;

    private ?string $appInstallationId = null;

    public function __construct(string $appId)
    {
        $this->appId = $appId;
    }

    /**
     * @deprecated
     */
    public function getAppId(): string
    {
        return $this->appId;
    }

    public function getAppInstallationId(): ?string
    {
        return $this->appInstallationId ?? null;
    }

    /**
     * @deprecated
     */
    public function withAppId(string $appId): self
    {
        $validator = new Validator();
        $validator->validate($appId, self::$internalValidationSchema['properties']['appId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->appId = $appId;

        return $clone;
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

    public function withoutAppInstallationId(): self
    {
        $clone = clone $this;
        unset($clone->appInstallationId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateCronjobAppIdRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateCronjobAppIdRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $appId = $input->{'appId'};
        $appInstallationId = null;
        if (isset($input->{'appInstallationId'})) {
            $appInstallationId = $input->{'appInstallationId'};
        }

        $obj = new self($appId);
        $obj->appInstallationId = $appInstallationId;
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
        $output['appId'] = $this->appId;
        if (isset($this->appInstallationId)) {
            $output['appInstallationId'] = $this->appInstallationId;
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
}
