<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallationCopy;

use InvalidArgumentException;
use JsonSchema\Validator;

class RequestAppinstallationCopyRequestBody
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'description' => [
                'type' => 'string',
            ],
            'targetProjectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'description',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $description;

    /**
     * @var string|null
     */
    private ?string $targetProjectId = null;

    private array $headers = [

    ];

    /**
     * @param string $description
     */
    public function __construct(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getTargetProjectId(): ?string
    {
        return $this->targetProjectId ?? null;
    }

    /**
     * @param string $description
     * @return self
     */
    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @param string $targetProjectId
     * @return self
     */
    public function withTargetProjectId(string $targetProjectId): self
    {
        $validator = new Validator();
        $validator->validate($targetProjectId, static::$schema['properties']['targetProjectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->targetProjectId = $targetProjectId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTargetProjectId(): self
    {
        $clone = clone $this;
        unset($clone->targetProjectId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RequestAppinstallationCopyRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RequestAppinstallationCopyRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $description = $input->{'description'};
        $targetProjectId = null;
        if (isset($input->{'targetProjectId'})) {
            $targetProjectId = $input->{'targetProjectId'};
        }

        $obj = new self($description);
        $obj->targetProjectId = $targetProjectId;
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
        $output['description'] = $this->description;
        if (isset($this->targetProjectId)) {
            $output['targetProjectId'] = $this->targetProjectId;
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
        $id = urlencode($mapped['id']);
        return '/v2/app-installations/' . $id . '/actions/copy';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
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
