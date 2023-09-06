<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\ReconcileDetectedApps;

use InvalidArgumentException;
use JsonSchema\Validator;

class ReconcileDetectedAppsRequest
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
            'projectShortId' => [
                'type' => 'string',
            ],
            'body' => [
                'items' => [
                    'properties' => [
                        'appName' => [
                            'type' => 'string',
                        ],
                        'appVersionClusterVersion' => [
                            'type' => 'string',
                        ],
                        'databaseHost' => [
                            'type' => 'string',
                        ],
                        'databaseUserName' => [
                            'type' => 'string',
                        ],
                        'installationDirectory' => [
                            'type' => 'string',
                        ],
                    ],
                    'required' => [
                        'installationDirectory',
                        'appName',
                        'appVersionClusterVersion',
                    ],
                    'type' => 'object',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'projectShortId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $projectShortId;

    /**
     * @var ReconcileDetectedAppsRequestBodyItem[]
     */
    private array $body;

    private array $headers = [

    ];

    /**
     * @param string $projectShortId
     * @param ReconcileDetectedAppsRequestBodyItem[] $body
     */
    public function __construct(string $projectShortId, array $body)
    {
        $this->projectShortId = $projectShortId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getProjectShortId(): string
    {
        return $this->projectShortId;
    }

    /**
     * @return ReconcileDetectedAppsRequestBodyItem[]
     */
    public function getBody(): array
    {
        return $this->body;
    }

    /**
     * @param string $projectShortId
     * @return self
     */
    public function withProjectShortId(string $projectShortId): self
    {
        $validator = new Validator();
        $validator->validate($projectShortId, static::$schema['properties']['projectShortId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectShortId = $projectShortId;

        return $clone;
    }

    /**
     * @param ReconcileDetectedAppsRequestBodyItem[] $body
     * @return self
     */
    public function withBody(array $body): self
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
     * @return ReconcileDetectedAppsRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ReconcileDetectedAppsRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectShortId = $input->{'projectShortId'};
        $body = array_map(fn (array|object $i): ReconcileDetectedAppsRequestBodyItem => ReconcileDetectedAppsRequestBodyItem::buildFromInput($i, validate: $validate), $input->{'body'});

        $obj = new self($projectShortId, $body);

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
        $output['projectShortId'] = $this->projectShortId;
        $output['body'] = array_map(fn (ReconcileDetectedAppsRequestBodyItem $i) => $i->toJson(), $this->body);

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
        $this->body = array_map(fn (ReconcileDetectedAppsRequestBodyItem $i) => clone $i, $this->body);
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $projectShortId = urlencode($mapped['projectShortId']);
        return '/v2/projects/' . $projectShortId . '/appinstallations';
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
