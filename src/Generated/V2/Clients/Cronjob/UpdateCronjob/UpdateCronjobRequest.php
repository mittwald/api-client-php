<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjob;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateCronjobRequest
{
    public const method = 'patch';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'cronjobId' => [
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'active' => [
                        'type' => 'boolean',
                    ],
                    'description' => [
                        'example' => 'i am a cronjob',
                        'type' => 'string',
                    ],
                    'destination' => [
                        'oneOf' => [
                            [
                                '$ref' => '#/components/schemas/de.mittwald.v1.cronjob.CronjobUrl',
                            ],
                            [
                                '$ref' => '#/components/schemas/de.mittwald.v1.cronjob.CronjobCommand',
                            ],
                        ],
                    ],
                    'email' => [
                        'format' => 'email',
                        'type' => 'string',
                    ],
                    'failedExecutionAlertThreshold' => [
                        'minimum' => 0,
                        'type' => 'integer',
                    ],
                    'interval' => [
                        'example' => '*/5 * * * *',
                        'type' => 'string',
                    ],
                    'timeout' => [
                        'maximum' => 86400,
                        'minimum' => 1,
                        'type' => 'integer',
                    ],
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'cronjobId',
            'body',
        ],
    ];

    private string $cronjobId;

    private UpdateCronjobRequestBody $body;

    private array $headers = [

    ];

    public function __construct(string $cronjobId, UpdateCronjobRequestBody $body)
    {
        $this->cronjobId = $cronjobId;
        $this->body = $body;
    }

    public function getCronjobId(): string
    {
        return $this->cronjobId;
    }

    public function getBody(): UpdateCronjobRequestBody
    {
        return $this->body;
    }

    public function withCronjobId(string $cronjobId): self
    {
        $validator = new Validator();
        $validator->validate($cronjobId, self::$internalValidationSchema['properties']['cronjobId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->cronjobId = $cronjobId;

        return $clone;
    }

    public function withBody(UpdateCronjobRequestBody $body): self
    {
        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateCronjobRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateCronjobRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $cronjobId = $input->{'cronjobId'};
        $body = UpdateCronjobRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($cronjobId, $body);

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
        $output['cronjobId'] = $this->cronjobId;
        $output['body'] = ($this->body)->toJson();

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
        $this->body = clone $this->body;
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
        $cronjobId = urlencode($mapped['cronjobId']);
        return '/v2/cronjobs/' . $cronjobId;
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
        return [
            'query' => $query,
            'headers' => $this->headers,
            'json' => $this->getBody()->toJson(),
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
