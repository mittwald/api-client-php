<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite;

use InvalidArgumentException;
use JsonSchema\Validator;

class AcceptProjectInviteRequestBody
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'invitationToken' => [
                'description' => 'Token contained in the invite for authentication.',
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * Token contained in the invite for authentication.
     *
     * @var string|null
     */
    private ?string $invitationToken = null;

    private array $headers = [

    ];

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getInvitationToken(): ?string
    {
        return $this->invitationToken ?? null;
    }

    /**
     * @param string $invitationToken
     * @return self
     */
    public function withInvitationToken(string $invitationToken): self
    {
        $validator = new Validator();
        $validator->validate($invitationToken, static::$schema['properties']['invitationToken']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->invitationToken = $invitationToken;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutInvitationToken(): self
    {
        $clone = clone $this;
        unset($clone->invitationToken);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AcceptProjectInviteRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AcceptProjectInviteRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $invitationToken = null;
        if (isset($input->{'invitationToken'})) {
            $invitationToken = $input->{'invitationToken'};
        }

        $obj = new self();
        $obj->invitationToken = $invitationToken;
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
        if (isset($this->invitationToken)) {
            $output['invitationToken'] = $this->invitationToken;
        }

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
