<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateProjectMailSettingRequest
{
    public const method = 'patch';

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
     * @var UpdateProjectMailSettingRequestSetting
     */
    private UpdateProjectMailSettingRequestSetting $setting;

    /**
     * @var UpdateProjectMailSettingRequestBodyAlternative1|UpdateProjectMailSettingRequestBodyAlternative2
     */
    private UpdateProjectMailSettingRequestBodyAlternative1|UpdateProjectMailSettingRequestBodyAlternative2 $body;

    private array $headers = [

    ];

    /**
     * @param string $projectId
     * @param UpdateProjectMailSettingRequestSetting $setting
     * @param UpdateProjectMailSettingRequestBodyAlternative1|UpdateProjectMailSettingRequestBodyAlternative2 $body
     */
    public function __construct(string $projectId, UpdateProjectMailSettingRequestSetting $setting, UpdateProjectMailSettingRequestBodyAlternative1|UpdateProjectMailSettingRequestBodyAlternative2 $body)
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
     * @return UpdateProjectMailSettingRequestSetting
     */
    public function getSetting(): UpdateProjectMailSettingRequestSetting
    {
        return $this->setting;
    }

    /**
     * @return
     * UpdateProjectMailSettingRequestBodyAlternative1|UpdateProjectMailSettingRequestBodyAlternative2
     */
    public function getBody(): UpdateProjectMailSettingRequestBodyAlternative1|UpdateProjectMailSettingRequestBodyAlternative2
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
     * @param UpdateProjectMailSettingRequestSetting $setting
     * @return self
     */
    public function withSetting(UpdateProjectMailSettingRequestSetting $setting): self
    {
        $clone = clone $this;
        $clone->setting = $setting;

        return $clone;
    }

    /**
     * @param UpdateProjectMailSettingRequestBodyAlternative1|UpdateProjectMailSettingRequestBodyAlternative2 $body
     * @return self
     */
    public function withBody(UpdateProjectMailSettingRequestBodyAlternative1|UpdateProjectMailSettingRequestBodyAlternative2 $body): self
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
     * @return UpdateProjectMailSettingRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateProjectMailSettingRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectId = $input->{'projectId'};
        $setting = UpdateProjectMailSettingRequestSetting::from($input->{'setting'});
        $body = match (true) {
            UpdateProjectMailSettingRequestBodyAlternative1::validateInput($input->{'body'}, true) => UpdateProjectMailSettingRequestBodyAlternative1::buildFromInput($input->{'body'}, validate: $validate),
            UpdateProjectMailSettingRequestBodyAlternative2::validateInput($input->{'body'}, true) => UpdateProjectMailSettingRequestBodyAlternative2::buildFromInput($input->{'body'}, validate: $validate),
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
            $this->body instanceof UpdateProjectMailSettingRequestBodyAlternative1, $this->body instanceof UpdateProjectMailSettingRequestBodyAlternative2 => ($this->body)->toJson(),
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
            $this->body instanceof UpdateProjectMailSettingRequestBodyAlternative1, $this->body instanceof UpdateProjectMailSettingRequestBodyAlternative2 => clone $this->body,
        };
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $projectId = urlencode($mapped['projectId']);
        $setting = urlencode($mapped['setting']);
        return '/v2/projects/' . $projectId . '/mail-settings/' . $setting;
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
