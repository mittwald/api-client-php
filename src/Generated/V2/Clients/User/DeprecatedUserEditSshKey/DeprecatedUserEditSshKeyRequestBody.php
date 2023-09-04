<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditSshKey;

class DeprecatedUserEditSshKeyRequestBody
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'comment' => [
                'example' => 'a.lovelace@example.com',
                'type' => 'string',
            ],
            'expiresAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'comment',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $comment;

    /**
     * @var \DateTime|null
     */
    private ?\DateTime $expiresAt = null;

    private array $headers = [
        
    ];

    /**
     * @param string $comment
     */
    public function __construct(string $comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getComment() : string
    {
        return $this->comment;
    }

    /**
     * @return \DateTime|null
     */
    public function getExpiresAt() : ?\DateTime
    {
        return $this->expiresAt ?? null;
    }

    /**
     * @param string $comment
     * @return self
     */
    public function withComment(string $comment) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($comment, static::$schema['properties']['comment']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->comment = $comment;

        return $clone;
    }

    /**
     * @param \DateTime $expiresAt
     * @return self
     */
    public function withExpiresAt(\DateTime $expiresAt) : self
    {
        $clone = clone $this;
        $clone->expiresAt = $expiresAt;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExpiresAt() : self
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
     * @return DeprecatedUserEditSshKeyRequestBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : DeprecatedUserEditSshKeyRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $comment = $input->{'comment'};
        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = new \DateTime($input->{'expiresAt'});
        }

        $obj = new self($comment);
        $obj->expiresAt = $expiresAt;
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
        $output['comment'] = $this->comment;
        if (isset($this->expiresAt)) {
            $output['expiresAt'] = ($this->expiresAt)->format(\DateTime::ATOM);
        }

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
        if (isset($this->expiresAt)) {
            $this->expiresAt = clone $this->expiresAt;
        }
    }

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        $sshKeyId = urlencode($mapped['sshKeyId']);
        return '/v2/signup/ssh/' . $sshKeyId;
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

