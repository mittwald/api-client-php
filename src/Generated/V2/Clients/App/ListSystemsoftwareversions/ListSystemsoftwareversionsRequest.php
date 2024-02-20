<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\ListSystemsoftwareversions;

use InvalidArgumentException;
use JsonSchema\Validator;

class ListSystemsoftwareversionsRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'systemSoftwareId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'versionRange' => [
                'type' => 'string',
            ],
            'recommended' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'systemSoftwareId',
        ],
    ];

    /**
     * @var string
     */
    private string $systemSoftwareId;

    /**
     * @var string|null
     */
    private ?string $versionRange = null;

    /**
     * @var bool|null
     */
    private ?bool $recommended = null;

    private array $headers = [

    ];

    /**
     * @param string $systemSoftwareId
     */
    public function __construct(string $systemSoftwareId)
    {
        $this->systemSoftwareId = $systemSoftwareId;
    }

    /**
     * @return string
     */
    public function getSystemSoftwareId(): string
    {
        return $this->systemSoftwareId;
    }

    /**
     * @return string|null
     */
    public function getVersionRange(): ?string
    {
        return $this->versionRange ?? null;
    }

    /**
     * @return bool|null
     */
    public function getRecommended(): ?bool
    {
        return $this->recommended ?? null;
    }

    /**
     * @param string $systemSoftwareId
     * @return self
     */
    public function withSystemSoftwareId(string $systemSoftwareId): self
    {
        $validator = new Validator();
        $validator->validate($systemSoftwareId, static::$schema['properties']['systemSoftwareId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->systemSoftwareId = $systemSoftwareId;

        return $clone;
    }

    /**
     * @param string $versionRange
     * @return self
     */
    public function withVersionRange(string $versionRange): self
    {
        $validator = new Validator();
        $validator->validate($versionRange, static::$schema['properties']['versionRange']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->versionRange = $versionRange;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutVersionRange(): self
    {
        $clone = clone $this;
        unset($clone->versionRange);

        return $clone;
    }

    /**
     * @param bool $recommended
     * @return self
     */
    public function withRecommended(bool $recommended): self
    {
        $validator = new Validator();
        $validator->validate($recommended, static::$schema['properties']['recommended']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->recommended = $recommended;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutRecommended(): self
    {
        $clone = clone $this;
        unset($clone->recommended);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListSystemsoftwareversionsRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListSystemsoftwareversionsRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $systemSoftwareId = $input->{'systemSoftwareId'};
        $versionRange = null;
        if (isset($input->{'versionRange'})) {
            $versionRange = $input->{'versionRange'};
        }
        $recommended = null;
        if (isset($input->{'recommended'})) {
            $recommended = (bool)($input->{'recommended'});
        }

        $obj = new self($systemSoftwareId);
        $obj->versionRange = $versionRange;
        $obj->recommended = $recommended;
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
        $output['systemSoftwareId'] = $this->systemSoftwareId;
        if (isset($this->versionRange)) {
            $output['versionRange'] = $this->versionRange;
        }
        if (isset($this->recommended)) {
            $output['recommended'] = $this->recommended;
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
        $validator = new Validator();
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
        $systemSoftwareId = urlencode($mapped['systemSoftwareId']);
        return '/v2/system-software/' . $systemSoftwareId . '/versions';
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
        if (isset($mapped['versionRange'])) {
            $query['versionRange'] = $mapped['versionRange'];
        }
        if (isset($mapped['recommended'])) {
            $query['recommended'] = $mapped['recommended'];
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
