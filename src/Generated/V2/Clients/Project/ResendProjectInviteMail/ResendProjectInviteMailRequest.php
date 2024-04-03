<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\ResendProjectInviteMail;

use InvalidArgumentException;
use JsonSchema\Validator;

class ResendProjectInviteMailRequest
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'projectInviteId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [

            ],
        ],
        'required' => [
            'projectInviteId',
            'body',
        ],
    ];

    private string $projectInviteId;

    /**
     * @var mixed
     */
    private $body;

    private array $headers = [

    ];

    /**
     * @param mixed $body
     */
    public function __construct(string $projectInviteId, $body)
    {
        $this->projectInviteId = $projectInviteId;
        $this->body = $body;
    }

    public function getProjectInviteId(): string
    {
        return $this->projectInviteId;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

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
     * @param mixed $body
     */
    public function withBody($body): self
    {
        $validator = new Validator();
        $validator->validate($body, static::$schema['properties']['body']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ResendProjectInviteMailRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ResendProjectInviteMailRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectInviteId = $input->{'projectInviteId'};
        $body = $input->{'body'};

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
        $output['body'] = $this->body;

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
        $projectInviteId = urlencode($mapped['projectInviteId']);
        return '/v2/project-invites/' . $projectInviteId . '/actions/resend';
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
