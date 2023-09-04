<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Customer;

class CustomerMeta
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'avatarRefId' => [
                'type' => 'string',
            ],
            'customerId' => [
                'type' => 'string',
            ],
            'name' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'customerId',
            'name',
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $avatarRefId = null;

    /**
     * @var string
     */
    private string $customerId;

    /**
     * @var string
     */
    private string $name;

    /**
     * @param string $customerId
     * @param string $name
     */
    public function __construct(string $customerId, string $name)
    {
        $this->customerId = $customerId;
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getAvatarRefId() : ?string
    {
        return $this->avatarRefId ?? null;
    }

    /**
     * @return string
     */
    public function getCustomerId() : string
    {
        return $this->customerId;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $avatarRefId
     * @return self
     */
    public function withAvatarRefId(string $avatarRefId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($avatarRefId, static::$schema['properties']['avatarRefId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->avatarRefId = $avatarRefId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutAvatarRefId() : self
    {
        $clone = clone $this;
        unset($clone->avatarRefId);

        return $clone;
    }

    /**
     * @param string $customerId
     * @return self
     */
    public function withCustomerId(string $customerId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($customerId, static::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    /**
     * @param string $name
     * @return self
     */
    public function withName(string $name) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CustomerMeta Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : CustomerMeta
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $avatarRefId = null;
        if (isset($input->{'avatarRefId'})) {
            $avatarRefId = $input->{'avatarRefId'};
        }
        $customerId = $input->{'customerId'};
        $name = $input->{'name'};

        $obj = new self($customerId, $name);
        $obj->avatarRefId = $avatarRefId;
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
        if (isset($this->avatarRefId)) {
            $output['avatarRefId'] = $this->avatarRefId;
        }
        $output['customerId'] = $this->customerId;
        $output['name'] = $this->name;

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

