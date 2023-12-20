<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite;

use InvalidArgumentException;
use JsonSchema\Validator;

class AcceptProjectInviteRequest
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
            'projectInviteId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'invitationToken' => [
                        'description' => 'Token contained in the invite for authentication.',
                        'type' => 'string',
                    ],
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'projectInviteId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $projectInviteId;

    /**
     * @var AcceptProjectInviteRequestBody
     */
    private AcceptProjectInviteRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $projectInviteId
     * @param AcceptProjectInviteRequestBody $body
     */
    public function __construct(string $projectInviteId, AcceptProjectInviteRequestBody $body)
    {
        $this->projectInviteId = $projectInviteId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getProjectInviteId(): string
    {
        return $this->projectInviteId;
    }

    /**
     * @return AcceptProjectInviteRequestBody
     */
    public function getBody(): AcceptProjectInviteRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $projectInviteId
     * @return self
     */
    public function withProjectInviteId(string $projectInviteId): self
    {
        $validator = new Validator();
        $validator->validate($projectInviteId, static::$schema['properties']['projectInviteId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectInviteId = $projectInviteId;

        return $clone;
    }

    /**
     * @param AcceptProjectInviteRequestBody $body
     * @return self
     */
    public function withBody(AcceptProjectInviteRequestBody $body): self
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
     * @return AcceptProjectInviteRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AcceptProjectInviteRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectInviteId = $input->{'projectInviteId'};
        $body = AcceptProjectInviteRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($projectInviteId, $body);

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
        $output['projectInviteId'] = $this->projectInviteId;
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
        $projectInviteId = urlencode($mapped['projectInviteId']);
        return '/v2/project-invites/' . $projectInviteId . '/actions/accept';
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
