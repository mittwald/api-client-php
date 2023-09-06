<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\SupportCodeRequest;

use InvalidArgumentException;

class SupportCodeRequestRequest
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
            'forceRecreate' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [

        ],
    ];

    /**
     * @var bool|null
     */
    private ?bool $forceRecreate = null;

    private array $headers = [

    ];

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return bool|null
     */
    public function getForceRecreate(): ?bool
    {
        return $this->forceRecreate ?? null;
    }

    /**
     * @param bool $forceRecreate
     * @return self
     */
    public function withForceRecreate(bool $forceRecreate): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($forceRecreate, static::$schema['properties']['forceRecreate']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->forceRecreate = $forceRecreate;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutForceRecreate(): self
    {
        $clone = clone $this;
        unset($clone->forceRecreate);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SupportCodeRequestRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SupportCodeRequestRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $forceRecreate = null;
        if (isset($input->{'forceRecreate'})) {
            $forceRecreate = (bool)($input->{'forceRecreate'});
        }

        $obj = new self();
        $obj->forceRecreate = $forceRecreate;
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
        if (isset($this->forceRecreate)) {
            $output['forceRecreate'] = $this->forceRecreate;
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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        return '/v2/users/self/credentials/support-code';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        if (isset($mapped['forceRecreate'])) {
            $query['forceRecreate'] = $mapped['forceRecreate'];
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
