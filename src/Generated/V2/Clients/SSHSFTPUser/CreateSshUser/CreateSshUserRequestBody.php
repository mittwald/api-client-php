<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSshUser;

use InvalidArgumentException;
use DateTime;

class CreateSshUserRequestBody
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'authentication' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.sshuser.Authentication',
            ],
            'description' => [
                'type' => 'string',
            ],
            'expiresAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'description',
            'authentication',
        ],
        'type' => 'object',
    ];

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative1|\Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative2
     */
    private \Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative1|\Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative2 $authentication;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var DateTime|null
     */
    private ?DateTime $expiresAt = null;

    private array $headers = [

    ];

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative1|\Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative2 $authentication
     * @param string $description
     */
    public function __construct(\Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative1|\Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative2 $authentication, string $description)
    {
        $this->authentication = $authentication;
        $this->description = $description;
    }

    /**
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative1|\Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative2
     */
    public function getAuthentication(): \Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative1|\Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative2
    {
        return $this->authentication;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return DateTime|null
     */
    public function getExpiresAt(): ?DateTime
    {
        return $this->expiresAt ?? null;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative1|\Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative2 $authentication
     * @return self
     */
    public function withAuthentication(\Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative1|\Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative2 $authentication): self
    {
        $clone = clone $this;
        $clone->authentication = $authentication;

        return $clone;
    }

    /**
     * @param string $description
     * @return self
     */
    public function withDescription(string $description): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @param DateTime $expiresAt
     * @return self
     */
    public function withExpiresAt(DateTime $expiresAt): self
    {
        $clone = clone $this;
        $clone->expiresAt = $expiresAt;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExpiresAt(): self
    {
        $clone = clone $this;
        unset($clone->expiresAt);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateSshUserRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateSshUserRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $authentication = match (true) {
            default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
            \Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative1::validateInput($input->{'authentication'}, true) => \Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative1::buildFromInput($input->{'authentication'}, validate: $validate),
            \Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative2::validateInput($input->{'authentication'}, true) => \Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative2::buildFromInput($input->{'authentication'}, validate: $validate),
        };
        $description = $input->{'description'};
        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = new DateTime($input->{'expiresAt'});
        }

        $obj = new self($authentication, $description);
        $obj->expiresAt = $expiresAt;
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
        $output['authentication'] = match (true) {
            default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
            ($this->authentication) instanceof \Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative1, ($this->authentication) instanceof \Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative2 => $this->authentication->toJson(),
        };
        $output['description'] = $this->description;
        if (isset($this->expiresAt)) {
            $output['expiresAt'] = ($this->expiresAt)->format(DateTime::ATOM);
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
        if (isset($this->expiresAt)) {
            $this->expiresAt = clone $this->expiresAt;
        }
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $projectId = urlencode($mapped['projectId']);
        return '/v2/projects/' . $projectId . '/ssh-users';
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
