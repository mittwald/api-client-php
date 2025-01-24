<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateProjectMailSetting;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedMailUpdateProjectMailSettingRequest
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'projectId' => [
                'type' => 'string',
            ],
            'setting' => [
                'enum' => [
                    'blacklist',
                    'whitelist',
                ],
                'type' => 'string',
            ],
            'body' => [
                'oneOf' => [
                    [
                        'properties' => [
                            'blacklist' => [
                                'items' => [
                                    'format' => 'idn-email',
                                    'type' => 'string',
                                ],
                                'type' => 'array',
                            ],
                        ],
                        'required' => [
                            'blacklist',
                        ],
                        'type' => 'object',
                    ],
                    [
                        'properties' => [
                            'whitelist' => [
                                'items' => [
                                    'format' => 'idn-email',
                                    'type' => 'string',
                                ],
                                'type' => 'array',
                            ],
                        ],
                        'required' => [
                            'whitelist',
                        ],
                        'type' => 'object',
                    ],
                ],
            ],
        ],
        'required' => [
            'projectId',
            'setting',
            'body',
        ],
    ];

    private string $projectId;

    private DeprecatedMailUpdateProjectMailSettingRequestSetting $setting;

    private DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative1|DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative2 $body;

    private array $headers = [

    ];

    public function __construct(string $projectId, DeprecatedMailUpdateProjectMailSettingRequestSetting $setting, DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative1|DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative2 $body)
    {
        $this->projectId = $projectId;
        $this->setting = $setting;
        $this->body = $body;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    public function getSetting(): DeprecatedMailUpdateProjectMailSettingRequestSetting
    {
        return $this->setting;
    }

    public function getBody(): DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative1|DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative2
    {
        return $this->body;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, self::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    public function withSetting(DeprecatedMailUpdateProjectMailSettingRequestSetting $setting): self
    {
        $clone = clone $this;
        $clone->setting = $setting;

        return $clone;
    }

    public function withBody(DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative1|DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative2 $body): self
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
     * @return DeprecatedMailUpdateProjectMailSettingRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedMailUpdateProjectMailSettingRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectId = $input->{'projectId'};
        $setting = DeprecatedMailUpdateProjectMailSettingRequestSetting::from($input->{'setting'});
        $body = match (true) {
            DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative1::validateInput($input->{'body'}, true) => DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative1::buildFromInput($input->{'body'}, validate: $validate),
            DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative2::validateInput($input->{'body'}, true) => DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative2::buildFromInput($input->{'body'}, validate: $validate),
            default => throw new InvalidArgumentException("could not build property 'body' from JSON"),
        };

        $obj = new self($projectId, $setting, $body);

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
        $output['setting'] = ($this->setting)->value;
        $output['body'] = match (true) {
            $this->body instanceof DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative1, $this->body instanceof DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative2 => ($this->body)->toJson(),
        };

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
        $validator->validate($input, self::$schema);

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
        $this->body = match (true) {
            $this->body instanceof DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative1, $this->body instanceof DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative2 => clone $this->body,
        };
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
        $setting = urlencode($mapped['setting']);
        return '/v2/projects/' . $projectId . '/mail-settings/' . $setting;
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
