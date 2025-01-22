<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotifications;

use InvalidArgumentException;
use JsonSchema\Validator;

class NotificationsReadAllNotificationsRequest
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'severities' => [
                'items' => [
                    'enum' => [
                        'success',
                        'info',
                        'warning',
                        'error',
                    ],
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'referenceId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'referenceAggregate' => [
                'type' => 'string',
            ],
            'referenceDomain' => [
                'type' => 'string',
            ],
            'body' => [
                'type' => 'object',
            ],
        ],
        'required' => [
            'body',
        ],
    ];

    /**
     * @var string[]|null
     */
    private ?array $severities = null;

    private ?string $referenceId = null;

    private ?string $referenceAggregate = null;

    private ?string $referenceDomain = null;

    private NotificationsReadAllNotificationsRequestBody $body;

    private array $headers = [

    ];

    public function __construct(NotificationsReadAllNotificationsRequestBody $body)
    {
        $this->body = $body;
    }

    /**
     * @return string[]|null
     */
    public function getSeverities(): ?array
    {
        return $this->severities ?? null;
    }

    public function getReferenceId(): ?string
    {
        return $this->referenceId ?? null;
    }

    public function getReferenceAggregate(): ?string
    {
        return $this->referenceAggregate ?? null;
    }

    public function getReferenceDomain(): ?string
    {
        return $this->referenceDomain ?? null;
    }

    public function getBody(): NotificationsReadAllNotificationsRequestBody
    {
        return $this->body;
    }

    /**
     * @param string[] $severities
     */
    public function withSeverities(array $severities): self
    {
        $validator = new Validator();
        $validator->validate($severities, self::$schema['properties']['severities']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->severities = $severities;

        return $clone;
    }

    public function withoutSeverities(): self
    {
        $clone = clone $this;
        unset($clone->severities);

        return $clone;
    }

    public function withReferenceId(string $referenceId): self
    {
        $validator = new Validator();
        $validator->validate($referenceId, self::$schema['properties']['referenceId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->referenceId = $referenceId;

        return $clone;
    }

    public function withoutReferenceId(): self
    {
        $clone = clone $this;
        unset($clone->referenceId);

        return $clone;
    }

    public function withReferenceAggregate(string $referenceAggregate): self
    {
        $validator = new Validator();
        $validator->validate($referenceAggregate, self::$schema['properties']['referenceAggregate']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->referenceAggregate = $referenceAggregate;

        return $clone;
    }

    public function withoutReferenceAggregate(): self
    {
        $clone = clone $this;
        unset($clone->referenceAggregate);

        return $clone;
    }

    public function withReferenceDomain(string $referenceDomain): self
    {
        $validator = new Validator();
        $validator->validate($referenceDomain, self::$schema['properties']['referenceDomain']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->referenceDomain = $referenceDomain;

        return $clone;
    }

    public function withoutReferenceDomain(): self
    {
        $clone = clone $this;
        unset($clone->referenceDomain);

        return $clone;
    }

    public function withBody(NotificationsReadAllNotificationsRequestBody $body): self
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
     * @return NotificationsReadAllNotificationsRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): NotificationsReadAllNotificationsRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $severities = null;
        if (isset($input->{'severities'})) {
            $severities = $input->{'severities'};
        }
        $referenceId = null;
        if (isset($input->{'referenceId'})) {
            $referenceId = $input->{'referenceId'};
        }
        $referenceAggregate = null;
        if (isset($input->{'referenceAggregate'})) {
            $referenceAggregate = $input->{'referenceAggregate'};
        }
        $referenceDomain = null;
        if (isset($input->{'referenceDomain'})) {
            $referenceDomain = $input->{'referenceDomain'};
        }
        $body = NotificationsReadAllNotificationsRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($body);
        $obj->severities = $severities;
        $obj->referenceId = $referenceId;
        $obj->referenceAggregate = $referenceAggregate;
        $obj->referenceDomain = $referenceDomain;
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
        if (isset($this->severities)) {
            $output['severities'] = $this->severities;
        }
        if (isset($this->referenceId)) {
            $output['referenceId'] = $this->referenceId;
        }
        if (isset($this->referenceAggregate)) {
            $output['referenceAggregate'] = $this->referenceAggregate;
        }
        if (isset($this->referenceDomain)) {
            $output['referenceDomain'] = $this->referenceDomain;
        }
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
        $validator = new \Mittwald\ApiClient\Validator\Validator();
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, self::$schema);

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
        return '/v2/notifications/actions/read-all';
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
        if (isset($mapped['severities'])) {
            $query['severities'] = $mapped['severities'];
        }
        if (isset($mapped['referenceId'])) {
            $query['referenceId'] = $mapped['referenceId'];
        }
        if (isset($mapped['referenceAggregate'])) {
            $query['referenceAggregate'] = $mapped['referenceAggregate'];
        }
        if (isset($mapped['referenceDomain'])) {
            $query['referenceDomain'] = $mapped['referenceDomain'];
        }
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
