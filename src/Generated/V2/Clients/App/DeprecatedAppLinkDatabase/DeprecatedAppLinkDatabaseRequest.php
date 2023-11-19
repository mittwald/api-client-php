<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\DeprecatedAppLinkDatabase;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedAppLinkDatabaseRequest
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
            'appInstallationId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'databaseId' => [
                        'format' => 'uuid',
                        'type' => 'string',
                    ],
                    'databaseUserIds' => [
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                        'type' => 'object',
                    ],
                    'purpose' => [
                        'enum' => [
                            'primary',
                            'cache',
                            'custom',
                        ],
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'databaseId',
                    'purpose',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'appInstallationId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $appInstallationId;

    /**
     * @var DeprecatedAppLinkDatabaseRequestBody
     */
    private DeprecatedAppLinkDatabaseRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $appInstallationId
     * @param DeprecatedAppLinkDatabaseRequestBody $body
     */
    public function __construct(string $appInstallationId, DeprecatedAppLinkDatabaseRequestBody $body)
    {
        $this->appInstallationId = $appInstallationId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getAppInstallationId(): string
    {
        return $this->appInstallationId;
    }

    /**
     * @return DeprecatedAppLinkDatabaseRequestBody
     */
    public function getBody(): DeprecatedAppLinkDatabaseRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $appInstallationId
     * @return self
     */
    public function withAppInstallationId(string $appInstallationId): self
    {
        $validator = new Validator();
        $validator->validate($appInstallationId, static::$schema['properties']['appInstallationId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->appInstallationId = $appInstallationId;

        return $clone;
    }

    /**
     * @param DeprecatedAppLinkDatabaseRequestBody $body
     * @return self
     */
    public function withBody(DeprecatedAppLinkDatabaseRequestBody $body): self
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
     * @return DeprecatedAppLinkDatabaseRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedAppLinkDatabaseRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $appInstallationId = $input->{'appInstallationId'};
        $body = DeprecatedAppLinkDatabaseRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($appInstallationId, $body);

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
        $output['appInstallationId'] = $this->appInstallationId;
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
        $this->body = clone $this->body;
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $appInstallationId = urlencode($mapped['appInstallationId']);
        return '/v2/appinstallations/' . $appInstallationId . '/databases';
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