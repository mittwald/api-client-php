<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\MigrationOrderDomainMigration;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Client\ResponseContainer;
use Psr\Http\Message\ResponseInterface;

class MigrationOrderDomainMigrationBadRequestResponse implements ResponseContainer
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'required' => [
            'body',
        ],
        'properties' => [
            'body' => [
                'properties' => [
                    'message' => [
                        'type' => 'string',
                    ],
                    'params' => [
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                        'type' => 'object',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'validationErrors' => [
                        'description' => 'One entry per problem. Each entry is a oneOf, mutually exclusive on type: a DomainNotMigratableValidationError (type domainNotMigratable, path = the affected domain, context.reason = the typed reason code), or a generic service-base validation error (type = the JSON-schema keyword such as required/pattern/format, path = the request field).',
                        'items' => [
                            'oneOf' => [
                                [
                                    '$ref' => '#/components/schemas/de.mittwald.v1.domainmigration.DomainNotMigratableValidationError',
                                ],
                                [
                                    'description' => 'A generic request/command validation failure from the service base (the standard validation-error shape). type is the JSON-schema keyword and is never domainNotMigratable.',
                                    'properties' => [
                                        'context' => [
                                            'additionalProperties' => [
                                                'type' => 'string',
                                            ],
                                            'type' => 'object',
                                        ],
                                        'message' => [
                                            'type' => 'string',
                                        ],
                                        'path' => [
                                            'description' => 'The request field that failed validation (JS property-access notation, e.g. .pAccount).',
                                            'type' => 'string',
                                        ],
                                        'type' => [
                                            'description' => 'JSON-schema validation keyword (e.g. required, pattern, format).',
                                            'not' => [
                                                'enum' => [
                                                    'domainNotMigratable',
                                                ],
                                            ],
                                            'type' => 'string',
                                        ],
                                    ],
                                    'required' => [
                                        'type',
                                        'message',
                                        'path',
                                    ],
                                    'type' => 'object',
                                ],
                            ],
                        ],
                        'type' => 'array',
                    ],
                ],
                'required' => [
                    'type',
                    'message',
                    'validationErrors',
                ],
                'type' => 'object',
            ],
        ],
    ];

    private MigrationOrderDomainMigrationBadRequestResponseBody $body;

    private ResponseInterface|null $httpResponse = null;

    public function __construct(MigrationOrderDomainMigrationBadRequestResponseBody $body)
    {
        $this->body = $body;
    }

    public function getBody(): MigrationOrderDomainMigrationBadRequestResponseBody
    {
        return $this->body;
    }

    public function withBody(MigrationOrderDomainMigrationBadRequestResponseBody $body): self
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
     * @return MigrationOrderDomainMigrationBadRequestResponse Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MigrationOrderDomainMigrationBadRequestResponse
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = MigrationOrderDomainMigrationBadRequestResponseBody::buildFromInput($input->{'body'}, validate: $validate);

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

    public static function fromResponse(ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }

    public function getResponse(): ResponseInterface|null
    {
        return $this->httpResponse;
    }
}
