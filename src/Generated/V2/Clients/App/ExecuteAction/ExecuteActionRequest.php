<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\ExecuteAction;

use InvalidArgumentException;

class ExecuteActionRequest
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
            'appInstallationId' => [
                'type' => 'string',
            ],
            'action' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.Action',
            ],
            'body' => [
                'type' => 'object',
            ],
        ],
        'required' => [
            'appInstallationId',
            'action',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $appInstallationId;

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\App\Action
     */
    private \Mittwald\ApiClient\Generated\V2\Schemas\App\Action $action;

    /**
     * @var ExecuteActionRequestBody
     */
    private ExecuteActionRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $appInstallationId
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\App\Action $action
     * @param ExecuteActionRequestBody $body
     */
    public function __construct(string $appInstallationId, \Mittwald\ApiClient\Generated\V2\Schemas\App\Action $action, ExecuteActionRequestBody $body)
    {
        $this->appInstallationId = $appInstallationId;
        $this->action = $action;
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
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\App\Action
     */
    public function getAction(): \Mittwald\ApiClient\Generated\V2\Schemas\App\Action
    {
        return $this->action;
    }

    /**
     * @return ExecuteActionRequestBody
     */
    public function getBody(): ExecuteActionRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $appInstallationId
     * @return self
     */
    public function withAppInstallationId(string $appInstallationId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($appInstallationId, static::$schema['properties']['appInstallationId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->appInstallationId = $appInstallationId;

        return $clone;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\App\Action $action
     * @return self
     */
    public function withAction(\Mittwald\ApiClient\Generated\V2\Schemas\App\Action $action): self
    {
        $clone = clone $this;
        $clone->action = $action;

        return $clone;
    }

    /**
     * @param ExecuteActionRequestBody $body
     * @return self
     */
    public function withBody(ExecuteActionRequestBody $body): self
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
     * @return ExecuteActionRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExecuteActionRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $appInstallationId = $input->{'appInstallationId'};
        $action = \Mittwald\ApiClient\Generated\V2\Schemas\App\Action::from($input->{'action'});
        $body = ExecuteActionRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($appInstallationId, $action, $body);

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
        $output['action'] = $this->action->value;
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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        $action = urlencode($mapped['action']);
        return '/v2/appinstallations/' . $appInstallationId . '/actions/' . $action;
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
