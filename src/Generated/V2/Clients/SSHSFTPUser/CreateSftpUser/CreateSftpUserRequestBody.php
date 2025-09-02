<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSftpUser;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative1;
use Mittwald\ApiClient\Generated\V2\Schemas\Sshuser\AuthenticationAlternative2;

class CreateSftpUserRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'accessLevel' => [
                'enum' => [
                    'read',
                    'full',
                ],
                'type' => 'string',
            ],
            'authentication' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.sshuser.Authentication',
            ],
            'description' => [
                'type' => 'string',
            ],
            'directories' => [
                'items' => [
                    'type' => 'string',
                ],
                'minItems' => 1,
                'type' => 'array',
            ],
            'expiresAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'description',
            'authentication',
            'directories',
        ],
        'type' => 'object',
    ];

    private ?CreateSftpUserRequestBodyAccessLevel $accessLevel = null;

    private AuthenticationAlternative1|AuthenticationAlternative2 $authentication;

    private string $description;

    /**
     * @var string[]
     */
    private array $directories;

    private ?DateTime $expiresAt = null;

    /**
     * @param string[] $directories
     */
    public function __construct(AuthenticationAlternative1|AuthenticationAlternative2 $authentication, string $description, array $directories)
    {
        $this->authentication = $authentication;
        $this->description = $description;
        $this->directories = $directories;
    }

    public function getAccessLevel(): ?CreateSftpUserRequestBodyAccessLevel
    {
        return $this->accessLevel ?? null;
    }

    public function getAuthentication(): AuthenticationAlternative1|AuthenticationAlternative2
    {
        return $this->authentication;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string[]
     */
    public function getDirectories(): array
    {
        return $this->directories;
    }

    public function getExpiresAt(): ?DateTime
    {
        return $this->expiresAt ?? null;
    }

    public function withAccessLevel(CreateSftpUserRequestBodyAccessLevel $accessLevel): self
    {
        $clone = clone $this;
        $clone->accessLevel = $accessLevel;

        return $clone;
    }

    public function withoutAccessLevel(): self
    {
        $clone = clone $this;
        unset($clone->accessLevel);

        return $clone;
    }

    public function withAuthentication(AuthenticationAlternative1|AuthenticationAlternative2 $authentication): self
    {
        $clone = clone $this;
        $clone->authentication = $authentication;

        return $clone;
    }

    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, self::$internalValidationSchema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @param string[] $directories
     */
    public function withDirectories(array $directories): self
    {
        $validator = new Validator();
        $validator->validate($directories, self::$internalValidationSchema['properties']['directories']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->directories = $directories;

        return $clone;
    }

    public function withExpiresAt(DateTime $expiresAt): self
    {
        $clone = clone $this;
        $clone->expiresAt = $expiresAt;

        return $clone;
    }

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
     * @return CreateSftpUserRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateSftpUserRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $accessLevel = null;
        if (isset($input->{'accessLevel'})) {
            $accessLevel = CreateSftpUserRequestBodyAccessLevel::from($input->{'accessLevel'});
        }
        $authentication = match (true) {
            default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
            AuthenticationAlternative1::validateInput($input->{'authentication'}, true) => AuthenticationAlternative1::buildFromInput($input->{'authentication'}, validate: $validate),
            AuthenticationAlternative2::validateInput($input->{'authentication'}, true) => AuthenticationAlternative2::buildFromInput($input->{'authentication'}, validate: $validate),
        };
        $description = $input->{'description'};
        $directories = $input->{'directories'};
        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = new DateTime($input->{'expiresAt'});
        }

        $obj = new self($authentication, $description, $directories);
        $obj->accessLevel = $accessLevel;
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
        if (isset($this->accessLevel)) {
            $output['accessLevel'] = ($this->accessLevel)->value;
        }
        $output['authentication'] = match (true) {
            default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
            ($this->authentication) instanceof AuthenticationAlternative1, ($this->authentication) instanceof AuthenticationAlternative2 => $this->authentication->toJson(),
        };
        $output['description'] = $this->description;
        $output['directories'] = $this->directories;
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
        $validator = new \Mittwald\ApiClient\Validator\Validator();
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, self::$internalValidationSchema);

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
}
