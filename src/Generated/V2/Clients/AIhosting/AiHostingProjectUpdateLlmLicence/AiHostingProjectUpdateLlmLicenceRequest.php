<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateLlmLicence;

use InvalidArgumentException;
use JsonSchema\Validator;

class AiHostingProjectUpdateLlmLicenceRequest
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'projectId' => [
                'type' => 'string',
            ],
            'licenceId' => [
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'createWebuiContainer' => [
                        'type' => 'boolean',
                    ],
                    'name' => [
                        'minLength' => 5,
                        'type' => 'string',
                    ],
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'projectId',
            'licenceId',
            'body',
        ],
    ];

    private string $projectId;

    private string $licenceId;

    private AiHostingProjectUpdateLlmLicenceRequestBody $body;

    private array $headers = [

    ];

    public function __construct(string $projectId, string $licenceId, AiHostingProjectUpdateLlmLicenceRequestBody $body)
    {
        $this->projectId = $projectId;
        $this->licenceId = $licenceId;
        $this->body = $body;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    public function getLicenceId(): string
    {
        return $this->licenceId;
    }

    public function getBody(): AiHostingProjectUpdateLlmLicenceRequestBody
    {
        return $this->body;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, self::$internalValidationSchema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    public function withLicenceId(string $licenceId): self
    {
        $validator = new Validator();
        $validator->validate($licenceId, self::$internalValidationSchema['properties']['licenceId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->licenceId = $licenceId;

        return $clone;
    }

    public function withBody(AiHostingProjectUpdateLlmLicenceRequestBody $body): self
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
     * @return AiHostingProjectUpdateLlmLicenceRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AiHostingProjectUpdateLlmLicenceRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectId = $input->{'projectId'};
        $licenceId = $input->{'licenceId'};
        $body = AiHostingProjectUpdateLlmLicenceRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($projectId, $licenceId, $body);

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
        $output['projectId'] = $this->projectId;
        $output['licenceId'] = $this->licenceId;
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
        $projectId = urlencode($mapped['projectId']);
        $licenceId = urlencode($mapped['licenceId']);
        return '/v2/projects/' . $projectId . '/llm-licences/' . $licenceId;
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
