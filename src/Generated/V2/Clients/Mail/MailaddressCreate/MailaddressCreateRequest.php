<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressCreate;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Mail\CreateForwardAddress;
use Mittwald\ApiClient\Generated\V2\Schemas\Mail\CreateMailAddress;

class MailaddressCreateRequest
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
            'projectId' => [
                'type' => 'string',
            ],
            'body' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.mail.CreateForwardAddress',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.mail.CreateMailAddress',
                    ],
                ],
            ],
        ],
        'required' => [
            'projectId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $projectId;

    /**
     * @var CreateForwardAddress|CreateMailAddress
     */
    private CreateForwardAddress|CreateMailAddress $body;

    private array $headers = [

    ];

    /**
     * @param string $projectId
     * @param CreateForwardAddress|CreateMailAddress $body
     */
    public function __construct(string $projectId, CreateForwardAddress|CreateMailAddress $body)
    {
        $this->projectId = $projectId;
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
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\Mail\CreateForwardAddress|\Mittwald\ApiClient\Generated\V2\Schemas\Mail\CreateMailAddress
     */
    public function getBody(): CreateForwardAddress|CreateMailAddress
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
     * @param CreateForwardAddress|CreateMailAddress $body
     * @return self
     */
    public function withBody(CreateForwardAddress|CreateMailAddress $body): self
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
     * @return MailaddressCreateRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MailaddressCreateRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectId = $input->{'projectId'};
        $body = match (true) {
            CreateForwardAddress::validateInput($input->{'body'}, true) => CreateForwardAddress::buildFromInput($input->{'body'}, validate: $validate),
            CreateMailAddress::validateInput($input->{'body'}, true) => CreateMailAddress::buildFromInput($input->{'body'}, validate: $validate),
        };

        $obj = new self($projectId, $body);

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
        $output['body'] = match (true) {
            ($this->body) instanceof CreateForwardAddress, ($this->body) instanceof CreateMailAddress => $this->body->toJson(),
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
            ($this->body) instanceof CreateForwardAddress, ($this->body) instanceof CreateMailAddress => $this->body,
        };
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $projectId = urlencode($mapped['projectId']);
        return '/v2/projects/' . $projectId . '/mailaddresses';
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
