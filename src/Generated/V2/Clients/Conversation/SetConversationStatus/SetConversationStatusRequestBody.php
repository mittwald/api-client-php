<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Conversation\SetConversationStatus;

use InvalidArgumentException;
use JsonSchema\Validator;

class SetConversationStatusRequestBody
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'status' => [
                'enum' => [
                    'open',
                    'answered',
                    'closed',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'status',
        ],
    ];

    /**
     * @var SetConversationStatusRequestBodyStatus
     */
    private SetConversationStatusRequestBodyStatus $status;

    private array $headers = [

    ];

    /**
     * @param SetConversationStatusRequestBodyStatus $status
     */
    public function __construct(SetConversationStatusRequestBodyStatus $status)
    {
        $this->status = $status;
    }

    /**
     * @return SetConversationStatusRequestBodyStatus
     */
    public function getStatus(): SetConversationStatusRequestBodyStatus
    {
        return $this->status;
    }

    /**
     * @param SetConversationStatusRequestBodyStatus $status
     * @return self
     */
    public function withStatus(SetConversationStatusRequestBodyStatus $status): self
    {
        $clone = clone $this;
        $clone->status = $status;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SetConversationStatusRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SetConversationStatusRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $status = SetConversationStatusRequestBodyStatus::from($input->{'status'});

        $obj = new self($status);

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
        $output['status'] = ($this->status)->value;

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
        $conversationId = urlencode($mapped['conversationId']);
        return '/v2/conversations/' . $conversationId . '/status';
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
