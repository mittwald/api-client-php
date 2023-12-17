<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectMembership;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetProjectMembershipRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'projectMembershipId' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'projectMembershipId',
        ],
    ];

    /**
     * @var string
     */
    private string $projectMembershipId;

    private array $headers = [

    ];

    /**
     * @param string $projectMembershipId
     */
    public function __construct(string $projectMembershipId)
    {
        $this->projectMembershipId = $projectMembershipId;
    }

    /**
     * @return string
     */
    public function getProjectMembershipId(): string
    {
        return $this->projectMembershipId;
    }

    /**
     * @param string $projectMembershipId
     * @return self
     */
    public function withProjectMembershipId(string $projectMembershipId): self
    {
        $validator = new Validator();
        $validator->validate($projectMembershipId, static::$schema['properties']['projectMembershipId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectMembershipId = $projectMembershipId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetProjectMembershipRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetProjectMembershipRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectMembershipId = $input->{'projectMembershipId'};

        $obj = new self($projectMembershipId);

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
        $output['projectMembershipId'] = $this->projectMembershipId;

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
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $projectMembershipId = urlencode($mapped['projectMembershipId']);
        return '/v2/project-memberships/' . $projectMembershipId;
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
