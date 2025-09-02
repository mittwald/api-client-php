<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\ListAppversions;

use InvalidArgumentException;
use JsonSchema\Validator;

class ListAppversionsRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'appId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'recommended' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'appId',
        ],
    ];

    private string $appId;

    private ?bool $recommended = null;

    private array $headers = [

    ];

    public function __construct(string $appId)
    {
        $this->appId = $appId;
    }

    public function getAppId(): string
    {
        return $this->appId;
    }

    public function getRecommended(): ?bool
    {
        return $this->recommended ?? null;
    }

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

    public function withRecommended(bool $recommended): self
    {
        $validator = new Validator();
        $validator->validate($recommended, self::$internalValidationSchema['properties']['recommended']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->recommended = $recommended;

        return $clone;
    }

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
     * @return ListAppversionsRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListAppversionsRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $appId = $input->{'appId'};
        $recommended = null;
        if (isset($input->{'recommended'})) {
            $recommended = (bool)($input->{'recommended'});
        }

        $obj = new self($appId);
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
        $output['appId'] = $this->appId;
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
        $appId = urlencode($mapped['appId']);
        return '/v2/apps/' . $appId . '/versions';
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
