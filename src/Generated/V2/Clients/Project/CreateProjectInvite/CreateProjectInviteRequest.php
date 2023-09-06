<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProjectInvite;

use InvalidArgumentException;

class CreateProjectInviteRequest
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
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'mailAddress' => [
                        'description' => 'Mail-address of the person to be invited.',
                        'format' => 'email',
                        'type' => 'string',
                    ],
                    'membershipExpiresAt' => [
                        'description' => 'Time the resulting ProjectMembership should expire at.',
                        'format' => 'date-time',
                        'type' => 'string',
                    ],
                    'message' => [
                        'description' => 'Message contained in the ProjectInvite.',
                        'type' => 'string',
                    ],
                    'role' => [
                        '$ref' => '#/components/schemas/de.mittwald.v1.membership.ProjectRoles',
                    ],
                ],
                'required' => [
                    'mailAddress',
                    'role',
                ],
                'type' => 'object',
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
     * @var CreateProjectInviteRequestBody
     */
    private CreateProjectInviteRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $projectId
     * @param CreateProjectInviteRequestBody $body
     */
    public function __construct(string $projectId, CreateProjectInviteRequestBody $body)
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
     * @return CreateProjectInviteRequestBody
     */
    public function getBody(): CreateProjectInviteRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $projectId
     * @return self
     */
    public function withProjectId(string $projectId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * @param CreateProjectInviteRequestBody $body
     * @return self
     */
    public function withBody(CreateProjectInviteRequestBody $body): self
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
     * @return CreateProjectInviteRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateProjectInviteRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectId = $input->{'projectId'};
        $body = CreateProjectInviteRequestBody::buildFromInput($input->{'body'}, validate: $validate);

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
        $projectId = urlencode($mapped['projectId']);
        return '/v2/project/' . $projectId . '/invites';
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
