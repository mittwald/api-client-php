<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateMessage;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateMessageRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'fileIds' => [
                'items' => [
                    'format' => 'uuid',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'messageContent' => [
                'maxLength' => 8000,
                'type' => 'string',
            ],
        ],
    ];

    /**
     * @var string[]|null
     */
    private ?array $fileIds = null;

    private ?string $messageContent = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string[]|null
     */
    public function getFileIds(): ?array
    {
        return $this->fileIds ?? null;
    }

    public function getMessageContent(): ?string
    {
        return $this->messageContent ?? null;
    }

    /**
     * @param string[] $fileIds
     */
    public function withFileIds(array $fileIds): self
    {
        $validator = new Validator();
        $validator->validate($fileIds, self::$internalValidationSchema['properties']['fileIds']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->fileIds = $fileIds;

        return $clone;
    }

    public function withoutFileIds(): self
    {
        $clone = clone $this;
        unset($clone->fileIds);

        return $clone;
    }

    public function withMessageContent(string $messageContent): self
    {
        $validator = new Validator();
        $validator->validate($messageContent, self::$internalValidationSchema['properties']['messageContent']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->messageContent = $messageContent;

        return $clone;
    }

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
     * @return CreateMessageRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateMessageRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $fileIds = null;
        if (isset($input->{'fileIds'})) {
            $fileIds = $input->{'fileIds'};
        }
        $messageContent = null;
        if (isset($input->{'messageContent'})) {
            $messageContent = $input->{'messageContent'};
        }

        $obj = new self();
        $obj->fileIds = $fileIds;
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
        if (isset($this->fileIds)) {
            $output['fileIds'] = $this->fileIds;
        }
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
    }
}
