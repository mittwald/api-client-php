<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSettingV2Deprecated;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateProjectMailSettingV2DeprecatedRequest
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
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
                                    'format' => 'email',
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
                                    'format' => 'email',
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

    /**
     * @var string
     */
    private string $projectId;

    /**
     * @var UpdateProjectMailSettingV2DeprecatedRequestSetting
     */
    private UpdateProjectMailSettingV2DeprecatedRequestSetting $setting;

    /**
     * @var UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative1|UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative2
     */
    private UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative1|UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative2 $body;

    private array $headers = [

    ];

    /**
     * @param string $projectId
     * @param UpdateProjectMailSettingV2DeprecatedRequestSetting $setting
     * @param UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative1|UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative2 $body
     */
    public function __construct(string $projectId, UpdateProjectMailSettingV2DeprecatedRequestSetting $setting, UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative1|UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative2 $body)
    {
        $this->projectId = $projectId;
        $this->setting = $setting;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @return UpdateProjectMailSettingV2DeprecatedRequestSetting
     */
    public function getSetting(): UpdateProjectMailSettingV2DeprecatedRequestSetting
    {
        return $this->setting;
    }

    /**
     * @return
     * UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative1|UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative2
     */
    public function getBody(): UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative1|UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative2
    {
        return $this->body;
    }

    /**
     * @param string $projectId
     * @return self
     */
    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * @param UpdateProjectMailSettingV2DeprecatedRequestSetting $setting
     * @return self
     */
    public function withSetting(UpdateProjectMailSettingV2DeprecatedRequestSetting $setting): self
    {
        $clone = clone $this;
        $clone->setting = $setting;

        return $clone;
    }

    /**
     * @param UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative1|UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative2 $body
     * @return self
     */
    public function withBody(UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative1|UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative2 $body): self
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
     * @return UpdateProjectMailSettingV2DeprecatedRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateProjectMailSettingV2DeprecatedRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectId = $input->{'projectId'};
        $setting = UpdateProjectMailSettingV2DeprecatedRequestSetting::from($input->{'setting'});
        $body = match (true) {
            UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative1::validateInput($input->{'body'}, true) => UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative1::buildFromInput($input->{'body'}, validate: $validate),
            UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative2::validateInput($input->{'body'}, true) => UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative2::buildFromInput($input->{'body'}, validate: $validate),
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
            $this->body instanceof UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative1, $this->body instanceof UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative2 => ($this->body)->toJson(),
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
        $this->body = match (true) {
            $this->body instanceof UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative1, $this->body instanceof UpdateProjectMailSettingV2DeprecatedRequestBodyAlternative2 => clone $this->body,
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
