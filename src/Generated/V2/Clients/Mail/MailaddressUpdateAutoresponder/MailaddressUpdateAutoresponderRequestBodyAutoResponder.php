<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressUpdateAutoresponder;

class MailaddressUpdateAutoresponderRequestBodyAutoResponder
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'nullable' => true,
        'properties' => [
            'active' => [
                'type' => 'boolean',
            ],
            'expiresAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'message' => [
                'type' => 'string',
            ],
            'startsAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'message',
            'active',
        ],
        'type' => 'object',
    ];

    /**
     * @var bool
     */
    private bool $active;

    /**
     * @var \DateTime|null
     */
    private ?\DateTime $expiresAt = null;

    /**
     * @var string
     */
    private string $message;

    /**
     * @var \DateTime|null
     */
    private ?\DateTime $startsAt = null;

    private array $headers = [
        
    ];

    /**
     * @param bool $active
     * @param string $message
     */
    public function __construct(bool $active, string $message)
    {
        $this->active = $active;
        $this->message = $message;
    }

    /**
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }

    /**
     * @return \DateTime|null
     */
    public function getExpiresAt() : ?\DateTime
    {
        return $this->expiresAt ?? null;
    }

    /**
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }

    /**
     * @return \DateTime|null
     */
    public function getStartsAt() : ?\DateTime
    {
        return $this->startsAt ?? null;
    }

    /**
     * @param bool $active
     * @return self
     */
    public function withActive(bool $active) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($active, static::$schema['properties']['active']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->active = $active;

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
     * @param string $message
     * @return self
     */
    public function withMessage(string $message) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($message, static::$schema['properties']['message']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->message = $message;

        return $clone;
    }

    /**
     * @param \DateTime $startsAt
     * @return self
     */
    public function withStartsAt(\DateTime $startsAt) : self
    {
        $clone = clone $this;
        $clone->startsAt = $startsAt;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutStartsAt() : self
    {
        $clone = clone $this;
        unset($clone->startsAt);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MailaddressUpdateAutoresponderRequestBodyAutoResponder Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : MailaddressUpdateAutoresponderRequestBodyAutoResponder
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $active = (bool)($input->{'active'});
        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = new \DateTime($input->{'expiresAt'});
        }
        $message = $input->{'message'};
        $startsAt = null;
        if (isset($input->{'startsAt'})) {
            $startsAt = new \DateTime($input->{'startsAt'});
        }

        $obj = new self($active, $message);
        $obj->expiresAt = $expiresAt;
        $obj->startsAt = $startsAt;
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
        $output['active'] = $this->active;
        if (isset($this->expiresAt)) {
            $output['expiresAt'] = ($this->expiresAt)->format(\DateTime::ATOM);
        }
        $output['message'] = $this->message;
        if (isset($this->startsAt)) {
            $output['startsAt'] = ($this->startsAt)->format(\DateTime::ATOM);
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
        if (isset($this->startsAt)) {
            $this->startsAt = clone $this->startsAt;
        }
    }

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        $id = urlencode($mapped['id']);
        return '/v2/mailaddresses/' . $id . '/autoResponder';
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

