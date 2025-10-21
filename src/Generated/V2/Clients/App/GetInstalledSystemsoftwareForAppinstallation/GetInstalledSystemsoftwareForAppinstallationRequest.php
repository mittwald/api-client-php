<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\GetInstalledSystemsoftwareForAppinstallation;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetInstalledSystemsoftwareForAppinstallationRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'appInstallationId' => [
                'type' => 'string',
            ],
            'tagFilter' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'appInstallationId',
        ],
    ];

    private string $appInstallationId;

    private ?string $tagFilter = null;

    private array $headers = [

    ];

    public function __construct(string $appInstallationId)
    {
        $this->appInstallationId = $appInstallationId;
    }

    public function getAppInstallationId(): string
    {
        return $this->appInstallationId;
    }

    public function getTagFilter(): ?string
    {
        return $this->tagFilter ?? null;
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

    public function withTagFilter(string $tagFilter): self
    {
        $validator = new Validator();
        $validator->validate($tagFilter, self::$internalValidationSchema['properties']['tagFilter']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->tagFilter = $tagFilter;

        return $clone;
    }

    public function withoutTagFilter(): self
    {
        $clone = clone $this;
        unset($clone->tagFilter);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetInstalledSystemsoftwareForAppinstallationRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetInstalledSystemsoftwareForAppinstallationRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $appInstallationId = $input->{'appInstallationId'};
        $tagFilter = null;
        if (isset($input->{'tagFilter'})) {
            $tagFilter = $input->{'tagFilter'};
        }

        $obj = new self($appInstallationId);
        $obj->tagFilter = $tagFilter;
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
        if (isset($this->tagFilter)) {
            $output['tagFilter'] = $this->tagFilter;
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
        $appInstallationId = urlencode($mapped['appInstallationId']);
        return '/v2/app-installations/' . $appInstallationId . '/systemSoftware';
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
        if (isset($mapped['tagFilter'])) {
            $query['tagFilter'] = $mapped['tagFilter'];
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
