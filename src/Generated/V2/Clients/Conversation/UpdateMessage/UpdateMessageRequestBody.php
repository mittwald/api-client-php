<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateMessage;

use InvalidArgumentException;

class UpdateMessageRequestBody
{
    public const method = 'patch';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'messageContent' => [
                'type' => 'string',
            ],
        ],
    ];

    /**
     * @var string|null
     */
    private ?string $messageContent = null;

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
    public function getMessageContent(): ?string
    {
        return $this->messageContent ?? null;
    }

    /**
     * @param string $messageContent
     * @return self
     */
    public function withMessageContent(string $messageContent): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($messageContent, static::$schema['properties']['messageContent']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->messageContent = $messageContent;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMessageContent(): self
    {
        $clone = clone $this;
        unset($clone->messageContent);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateMessageRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateMessageRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $messageContent = null;
        if (isset($input->{'messageContent'})) {
            $messageContent = $input->{'messageContent'};
        }

        $obj = new self();
        $obj->messageContent = $messageContent;
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
        if (isset($this->messageContent)) {
            $output['messageContent'] = $this->messageContent;
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
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $conversationId = urlencode($mapped['conversationId']);
        $messageId = urlencode($mapped['messageId']);
        return '/v2/conversations/' . $conversationId . '/messages/' . $messageId;
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
