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
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'body' => [
                'properties' => [
                    'additionalServices' => [
                        'properties' => [
                            'dataCompare' => [
                                'enum' => [
                                    'default',
                                    'additionalCompare',
                                ],
                                'type' => 'string',
                            ],
                        ],
                        'required' => [
                            'dataCompare',
                        ],
                        'type' => 'object',
                    ],
                    'allDomains' => [
                        'description' => 'Should all project releated domains should be transferred to mittwald?',
                        'type' => 'boolean',
                    ],
                    'allowPasswordChange' => [
                        'description' => 'Has to be true. Do you accept that our mittwald team can change and get password from your current provider?',
                        'type' => 'boolean',
                    ],
                    'articleType' => [
                        'description' => 'Type of the article you want to relocate.',
                        'enum' => [
                            'cms-hosting',
                            'cms-hosting-express',
                            'onlineshop',
                            'onlineshop-express',
                        ],
                        'type' => 'string',
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
                    'prices' => [
                        'properties' => [
                            'positions' => [
                                'items' => [
                                    'properties' => [
                                        'name' => [
                                            'minLength' => 1,
                                            'type' => 'string',
                                        ],
                                        'price' => [
                                            'minimum' => 0,
                                            'type' => 'number',
                                        ],
                                    ],
                                    'required' => [
                                        'name',
                                        'price',
                                    ],
                                    'type' => 'object',
                                ],
                                'type' => 'array',
                            ],
                            'total' => [
                                'minimum' => 0,
                                'type' => 'number',
                            ],
                        ],
                        'required' => [
                            'positions',
                            'total',
                        ],
                        'type' => 'object',
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
                                            'Space-Server',
                                            'proSpace',
                                            'Agentur-Server',
                                            'CMS-Hosting',
                                            'Shop-Hosting',
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
                    'userId' => [
                        'oneOf' => [
                            [
                                'format' => 'uuid',
                                'minLength' => 1,
                                'type' => 'string',
                            ],
                            [
                                'maxLength' => 0,
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                'required' => [
                    'articleType',
                    'additionalServices',
                    'prices',
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

    private CreateRelocationRequestBody $body;

    private array $headers = [

    ];

    public function __construct(CreateRelocationRequestBody $body)
    {
        $this->body = $body;
    }

    public function getBody(): CreateRelocationRequestBody
    {
        return $this->body;
    }

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
        return '/v2/relocation';
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
