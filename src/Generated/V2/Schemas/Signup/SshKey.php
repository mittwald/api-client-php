<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Signup;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class SshKey
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'algorithm' => [
                'example' => 'ssh-rsa',
                'type' => 'string',
            ],
            'comment' => [
                'example' => 'a.lovelace@example.com',
                'type' => 'string',
            ],
            'createdAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'expiresAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'fingerprint' => [
                'example' => 'a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1:a1',
                'format' => 'hexdump',
                'type' => 'string',
            ],
            'key' => [
                'type' => 'string',
            ],
            'sshKeyId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'sshKeyId',
            'algorithm',
            'key',
            'comment',
            'fingerprint',
            'createdAt',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $algorithm;

    /**
     * @var string
     */
    private string $comment;

    /**
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * @var DateTime|null
     */
    private ?DateTime $expiresAt = null;

    /**
     * @var string
     */
    private string $fingerprint;

    /**
     * @var string
     */
    private string $key;

    /**
     * @var string
     */
    private string $sshKeyId;

    /**
     * @param string $algorithm
     * @param string $comment
     * @param DateTime $createdAt
     * @param string $fingerprint
     * @param string $key
     * @param string $sshKeyId
     */
    public function __construct(string $algorithm, string $comment, DateTime $createdAt, string $fingerprint, string $key, string $sshKeyId)
    {
        $this->algorithm = $algorithm;
        $this->comment = $comment;
        $this->createdAt = $createdAt;
        $this->fingerprint = $fingerprint;
        $this->key = $key;
        $this->sshKeyId = $sshKeyId;
    }

    /**
     * @return string
     */
    public function getAlgorithm(): string
    {
        return $this->algorithm;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return DateTime|null
     */
    public function getExpiresAt(): ?DateTime
    {
        return $this->expiresAt ?? null;
    }

    /**
     * @return string
     */
    public function getFingerprint(): string
    {
        return $this->fingerprint;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getSshKeyId(): string
    {
        return $this->sshKeyId;
    }

    /**
     * @param string $algorithm
     * @return self
     */
    public function withAlgorithm(string $algorithm): self
    {
        $validator = new Validator();
        $validator->validate($algorithm, static::$schema['properties']['algorithm']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->algorithm = $algorithm;

        return $clone;
    }

    /**
     * @param string $comment
     * @return self
     */
    public function withComment(string $comment): self
    {
        $validator = new Validator();
        $validator->validate($comment, static::$schema['properties']['comment']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->comment = $comment;

        return $clone;
    }

    /**
     * @param DateTime $createdAt
     * @return self
     */
    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

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
     * @param string $fingerprint
     * @return self
     */
    public function withFingerprint(string $fingerprint): self
    {
        $validator = new Validator();
        $validator->validate($fingerprint, static::$schema['properties']['fingerprint']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->fingerprint = $fingerprint;

        return $clone;
    }

    /**
     * @param string $key
     * @return self
     */
    public function withKey(string $key): self
    {
        $validator = new Validator();
        $validator->validate($key, static::$schema['properties']['key']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->key = $key;

        return $clone;
    }

    /**
     * @param string $sshKeyId
     * @return self
     */
    public function withSshKeyId(string $sshKeyId): self
    {
        $validator = new Validator();
        $validator->validate($sshKeyId, static::$schema['properties']['sshKeyId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->sshKeyId = $sshKeyId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SshKey Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SshKey
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $algorithm = $input->{'algorithm'};
        $comment = $input->{'comment'};
        $createdAt = new DateTime($input->{'createdAt'});
        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = new DateTime($input->{'expiresAt'});
        }
        $fingerprint = $input->{'fingerprint'};
        $key = $input->{'key'};
        $sshKeyId = $input->{'sshKeyId'};

        $obj = new self($algorithm, $comment, $createdAt, $fingerprint, $key, $sshKeyId);
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
        $output['algorithm'] = $this->algorithm;
        $output['comment'] = $this->comment;
        $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        if (isset($this->expiresAt)) {
            $output['expiresAt'] = ($this->expiresAt)->format(DateTime::ATOM);
        }
        $output['fingerprint'] = $this->fingerprint;
        $output['key'] = $this->key;
        $output['sshKeyId'] = $this->sshKeyId;

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
        $this->createdAt = clone $this->createdAt;
        if (isset($this->expiresAt)) {
            $this->expiresAt = clone $this->expiresAt;
        }
    }
}
