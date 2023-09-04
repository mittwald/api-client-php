<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

class RequestedFile
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'status' => [
                'enum' => [
                    'requested',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'status',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $id;

    /**
     * @var RequestedFileStatus
     */
    private RequestedFileStatus $status;

    /**
     * @param string $id
     * @param RequestedFileStatus $status
     */
    public function __construct(string $id, RequestedFileStatus $status)
    {
        $this->id = $id;
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @return RequestedFileStatus
     */
    public function getStatus() : RequestedFileStatus
    {
        return $this->status;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param RequestedFileStatus $status
     * @return self
     */
    public function withStatus(RequestedFileStatus $status) : self
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
     * @return RequestedFile Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : RequestedFile
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $id = $input->{'id'};
        $status = RequestedFileStatus::from($input->{'status'});

        $obj = new self($id, $status);

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
        $output['id'] = $this->id;
        $output['status'] = ($this->status)->value;

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
}

