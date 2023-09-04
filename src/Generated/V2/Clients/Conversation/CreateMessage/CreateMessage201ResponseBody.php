<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateMessage;

class CreateMessage201ResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'conversationId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'messageId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'conversationId',
            'messageId',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $conversationId;

    /**
     * @var string
     */
    private string $messageId;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     * @param string $conversationId
     * @param string $messageId
     */
    public function __construct(string $conversationId, string $messageId)
    {
        $this->conversationId = $conversationId;
        $this->messageId = $messageId;
    }

    /**
     * @return string
     */
    public function getConversationId() : string
    {
        return $this->conversationId;
    }

    /**
     * @return string
     */
    public function getMessageId() : string
    {
        return $this->messageId;
    }

    /**
     * @param string $conversationId
     * @return self
     */
    public function withConversationId(string $conversationId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($conversationId, static::$schema['properties']['conversationId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->conversationId = $conversationId;

        return $clone;
    }

    /**
     * @param string $messageId
     * @return self
     */
    public function withMessageId(string $messageId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($messageId, static::$schema['properties']['messageId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->messageId = $messageId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateMessage201ResponseBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : CreateMessage201ResponseBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $conversationId = $input->{'conversationId'};
        $messageId = $input->{'messageId'};

        $obj = new self($conversationId, $messageId);

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
        $output['conversationId'] = $this->conversationId;
        $output['messageId'] = $this->messageId;

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
    }

    public static function fromResponse(\Psr\Http\Message\ResponseInterface $httpResponse) : self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}

