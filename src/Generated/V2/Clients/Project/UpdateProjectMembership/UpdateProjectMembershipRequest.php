<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectMembership;

class UpdateProjectMembershipRequest
{
    public const method = 'patch';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'membershipId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'expiresAt' => [
                        'description' => 'Time the ProjectMembership should expire at.',
                        'format' => 'date-time',
                        'type' => 'string',
                    ],
                    'role' => [
                        '$ref' => '#/components/schemas/de.mittwald.v1.membership.ProjectRoles',
                    ],
                ],
                'required' => [
                    'role',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'membershipId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $membershipId;

    /**
     * @var UpdateProjectMembershipRequestBody
     */
    private UpdateProjectMembershipRequestBody $body;

    private array $headers = [
        
    ];

    /**
     * @param string $membershipId
     * @param UpdateProjectMembershipRequestBody $body
     */
    public function __construct(string $membershipId, UpdateProjectMembershipRequestBody $body)
    {
        $this->membershipId = $membershipId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getMembershipId() : string
    {
        return $this->membershipId;
    }

    /**
     * @return UpdateProjectMembershipRequestBody
     */
    public function getBody() : UpdateProjectMembershipRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $membershipId
     * @return self
     */
    public function withMembershipId(string $membershipId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($membershipId, static::$schema['properties']['membershipId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->membershipId = $membershipId;

        return $clone;
    }

    /**
     * @param UpdateProjectMembershipRequestBody $body
     * @return self
     */
    public function withBody(UpdateProjectMembershipRequestBody $body) : self
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
     * @return UpdateProjectMembershipRequest Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : UpdateProjectMembershipRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $membershipId = $input->{'membershipId'};
        $body = UpdateProjectMembershipRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($membershipId, $body);

        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson() : array
    {
        $output = [];
        $output['membershipId'] = $this->membershipId;
        $output['body'] = ($this->body)->toJson();

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
        $this->body = clone $this->body;
    }

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        $membershipId = urlencode($mapped['membershipId']);
        return '/v2/project-memberships/' . $membershipId;
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders() : array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value) : self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}

