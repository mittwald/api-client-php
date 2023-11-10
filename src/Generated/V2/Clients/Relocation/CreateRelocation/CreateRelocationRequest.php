<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateRelocation;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateRelocationRequest
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'body' => [
                'properties' => [
                    'allDomains' => [
                        'description' => 'Should all project releated domains should be transferred to mittwald?',
                        'type' => 'boolean',
                    ],
                    'allowPasswordChange' => [
                        'description' => 'Has to be true. Do you accept that our mittwald team can change and get password from your current provider?',
                        'type' => 'boolean',
                    ],
                    'contact' => [
                        'properties' => [
                            'email' => [
                                'format' => 'email',
                                'minLength' => 1,
                                'type' => 'string',
                            ],
                            'firstName' => [
                                'minLength' => 1,
                                'type' => 'string',
                            ],
                            'lastName' => [
                                'minLength' => 1,
                                'type' => 'string',
                            ],
                            'phoneNumber' => [
                                'pattern' => '|^\\+([0-9]{2,3}|1)-[0-9]{2,5}-[0-9]+$',
                                'type' => 'string',
                            ],
                        ],
                        'required' => [
                            'firstName',
                            'lastName',
                            'email',
                        ],
                        'type' => 'object',
                    ],
                    'domains' => [
                        'description' => 'List of domains which should be transferred (when allDomains is not checked).',
                        'items' => [
                            '$ref' => '#/components/schemas/de.mittwald.v1.directus.Domain',
                        ],
                        'type' => 'array',
                    ],
                    'notes' => [
                        'description' => 'Anything our customer service needs to know for the relocation process.',
                        'type' => 'string',
                    ],
                    'provider' => [
                        'properties' => [
                            'loginUrl' => [
                                'description' => 'Url to the control panel of the provider',
                                'minLength' => 1,
                                'type' => 'string',
                            ],
                            'name' => [
                                'description' => 'Name of your provider',
                                'oneOf' => [
                                    [
                                        'minLength' => 1,
                                        'type' => 'string',
                                    ],
                                    [
                                        'enum' => [
                                            '1und1',
                                            'strato',
                                        ],
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'password' => [
                                'minLength' => 1,
                                'type' => 'string',
                            ],
                            'sourceAccount' => [
                                'description' => 'Which account of your provider should be moved?',
                                'minLength' => 1,
                                'type' => 'string',
                            ],
                            'userName' => [
                                'description' => 'Login name to your provider',
                                'minLength' => 1,
                                'type' => 'string',
                            ],
                        ],
                        'required' => [
                            'name',
                            'loginUrl',
                            'userName',
                            'password',
                            'sourceAccount',
                        ],
                        'type' => 'object',
                    ],
                    'target' => [
                        'properties' => [
                            'organisation' => [
                                'description' => 'Your customer or organisation number',
                                'minLength' => 1,
                                'type' => 'string',
                            ],
                            'product' => [
                                'description' => 'Help our customer service finding your target account',
                                'oneOf' => [
                                    [
                                        'minLength' => 1,
                                        'type' => 'string',
                                    ],
                                    [
                                        'enum' => [
                                            'spaceServer',
                                            'proSpace',
                                            'agencyServer',
                                            'cmsHosting',
                                            'shopHosting',
                                        ],
                                        'type' => 'string',
                                    ],
                                ],
                                'type' => 'string',
                            ],
                            'projectName' => [
                                'description' => 'In which p-account or short project id your project should be moved.',
                                'minLength' => 1,
                                'type' => 'string',
                            ],
                            'system' => [
                                'description' => 'Which mittwald system does the targetProject use?',
                                'enum' => [
                                    'kc',
                                    'mstudio',
                                ],
                                'type' => 'string',
                            ],
                        ],
                        'required' => [
                            'organisation',
                            'projectName',
                            'system',
                            'product',
                        ],
                        'type' => 'object',
                    ],
                ],
                'required' => [
                    'provider',
                    'contact',
                    'target',
                    'allowPasswordChange',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'body',
        ],
    ];

    /**
     * @var CreateRelocationRequestBody
     */
    private CreateRelocationRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param CreateRelocationRequestBody $body
     */
    public function __construct(CreateRelocationRequestBody $body)
    {
        $this->body = $body;
    }

    /**
     * @return CreateRelocationRequestBody
     */
    public function getBody(): CreateRelocationRequestBody
    {
        return $this->body;
    }

    /**
     * @param CreateRelocationRequestBody $body
     * @return self
     */
    public function withBody(CreateRelocationRequestBody $body): self
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
     * @return CreateRelocationRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateRelocationRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = CreateRelocationRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($body);

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
        return '/v2/relocation';
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
