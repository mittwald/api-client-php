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
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'projectId' => [
                'type' => 'string',
            ],
            'mailSetting' => [
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
                                    'pattern' => '^([a-zA-Z0-9.!#$%&\'*\\/=?^_{|}~-]+@[a-zA-Z0-9-*]+(?:\\.([a-zA-Z0-9-]+|\\*))+)$',
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
                                    'pattern' => '^([a-zA-Z0-9.!#$%&\'*\\/=?^_{|}~-]+@[a-zA-Z0-9-*]+(?:\\.([a-zA-Z0-9-]+|\\*))+)$',
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
            'mailSetting',
            'body',
        ],
    ];

    private string $projectId;

    private DeprecatedMailUpdateProjectMailSettingRequestMailSetting $mailSetting;

    private DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative1|DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative2 $body;

    private array $headers = [

    ];

    public function __construct(string $projectId, DeprecatedMailUpdateProjectMailSettingRequestMailSetting $mailSetting, DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative1|DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative2 $body)
    {
        $this->projectId = $projectId;
        $this->mailSetting = $mailSetting;
        $this->body = $body;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    public function getMailSetting(): DeprecatedMailUpdateProjectMailSettingRequestMailSetting
    {
        return $this->mailSetting;
    }

    public function getBody(): DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative1|DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative2
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

    public function withMailSetting(DeprecatedMailUpdateProjectMailSettingRequestMailSetting $mailSetting): self
    {
        $clone = clone $this;
        $clone->mailSetting = $mailSetting;

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
        $mailSetting = DeprecatedMailUpdateProjectMailSettingRequestMailSetting::from($input->{'mailSetting'});
        $body = match (true) {
            DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative1::validateInput($input->{'body'}, true) => DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative1::buildFromInput($input->{'body'}, validate: $validate),
            DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative2::validateInput($input->{'body'}, true) => DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative2::buildFromInput($input->{'body'}, validate: $validate),
            default => throw new InvalidArgumentException("could not build property 'body' from JSON"),
        };

        $obj = new self($projectId, $mailSetting, $body);

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
        $output['mailSetting'] = ($this->mailSetting)->value;
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
        $mailSetting = urlencode($mapped['mailSetting']);
        return '/v2/projects/' . $projectId . '/mail-settings/' . $mailSetting;
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
