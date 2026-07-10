<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\MigrationOrderDomainMigration;

use InvalidArgumentException;
use JsonSchema\Validator;

class MigrationOrderDomainMigrationBadRequestResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
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
    ];

    private string $message;

    /**
     * @var string[]|null
     */
    private ?array $params = null;

    private string $type;

    /**
     * One entry per problem. Each entry is a oneOf, mutually exclusive on type: a DomainNotMigratableValidationError (type domainNotMigratable, path = the affected domain, context.reason = the typed reason code), or a generic service-base validation error (type = the JSON-schema keyword such as required/pattern/format, path = the request field).
     *
     * @var mixed[]
     */
    private array $validationErrors;

    /**
     * @param mixed[] $validationErrors
     */
    public function __construct(string $message, string $type, array $validationErrors)
    {
        $this->message = $message;
        $this->type = $type;
        $this->validationErrors = $validationErrors;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string[]|null
     */
    public function getParams(): ?array
    {
        return $this->params ?? null;
    }

    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return mixed[]
     */
    public function getValidationErrors(): array
    {
        return $this->validationErrors;
    }

    public function withMessage(string $message): self
    {
        $validator = new Validator();
        $validator->validate($message, self::$internalValidationSchema['properties']['message']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->message = $message;

        return $clone;
    }

    /**
     * @param string[] $params
     */
    public function withParams(array $params): self
    {
        $validator = new Validator();
        $validator->validate($params, self::$internalValidationSchema['properties']['params']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->params = $params;

        return $clone;
    }

    public function withoutParams(): self
    {
        $clone = clone $this;
        unset($clone->params);

        return $clone;
    }

    public function withType(string $type): self
    {
        $validator = new Validator();
        $validator->validate($type, self::$internalValidationSchema['properties']['type']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    /**
     * @param mixed[] $validationErrors
     */
    public function withValidationErrors(array $validationErrors): self
    {
        $validator = new Validator();
        $validator->validate($validationErrors, self::$internalValidationSchema['properties']['validationErrors']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->validationErrors = $validationErrors;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MigrationOrderDomainMigrationBadRequestResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MigrationOrderDomainMigrationBadRequestResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $message = $input->{'message'};
        $params = null;
        if (isset($input->{'params'})) {
            $params = (array)$input->{'params'};
        }
        $type = $input->{'type'};
        $validationErrors = $input->{'validationErrors'};

        $obj = new self($message, $type, $validationErrors);
        $obj->params = $params;
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
        $output['message'] = $this->message;
        if (isset($this->params)) {
            $output['params'] = $this->params;
        }
        $output['type'] = $this->type;
        $output['validationErrors'] = $this->validationErrors;

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
    }
}
