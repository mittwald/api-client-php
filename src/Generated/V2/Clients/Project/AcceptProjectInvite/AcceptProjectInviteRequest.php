<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite;

use InvalidArgumentException;

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
            'inviteId' => [
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
            'inviteId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $inviteId;

    /**
     * @var AcceptProjectInviteRequestBody
     */
    private AcceptProjectInviteRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $inviteId
     * @param AcceptProjectInviteRequestBody $body
     */
    public function __construct(string $inviteId, AcceptProjectInviteRequestBody $body)
    {
        $this->inviteId = $inviteId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getInviteId(): string
    {
        return $this->inviteId;
    }

    /**
     * @return AcceptProjectInviteRequestBody
     */
    public function getBody(): AcceptProjectInviteRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $inviteId
     * @return self
     */
    public function withInviteId(string $inviteId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($inviteId, static::$schema['properties']['inviteId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->inviteId = $inviteId;

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
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $inviteId = $input->{'inviteId'};
        $body = AcceptProjectInviteRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($inviteId, $body);

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
        $output['inviteId'] = $this->inviteId;
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
        $inviteId = urlencode($mapped['inviteId']);
        return '/v2/project-invites/' . $inviteId . '/actions/accept';
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
