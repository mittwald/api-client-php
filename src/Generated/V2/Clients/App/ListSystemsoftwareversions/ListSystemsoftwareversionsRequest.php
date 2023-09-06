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

        $obj = new self($systemSoftwareId);
        $obj->versionRange = $versionRange;
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

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $systemSoftwareId = urlencode($mapped['systemSoftwareId']);
        return '/v2/systemsoftware/' . $systemSoftwareId . '/versions';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        if (isset($mapped['versionRange'])) {
            $query['versionRange'] = $mapped['versionRange'];
        }
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
