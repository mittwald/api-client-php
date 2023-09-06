<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalInformationUpdate;

use InvalidArgumentException;

class DeprecatedUserServicePersonalInformationUpdateRequest
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'userId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'person' => [
                        '$ref' => '#/components/schemas/de.mittwald.v1.commons.Person',
                    ],
                ],
                'required' => [
                    'person',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'userId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $userId;

    /**
     * @var DeprecatedUserServicePersonalInformationUpdateRequestBody
     */
    private DeprecatedUserServicePersonalInformationUpdateRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $userId
     * @param DeprecatedUserServicePersonalInformationUpdateRequestBody $body
     */
    public function __construct(string $userId, DeprecatedUserServicePersonalInformationUpdateRequestBody $body)
    {
        $this->userId = $userId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @return DeprecatedUserServicePersonalInformationUpdateRequestBody
     */
    public function getBody(): DeprecatedUserServicePersonalInformationUpdateRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $userId
     * @return self
     */
    public function withUserId(string $userId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($userId, static::$schema['properties']['userId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->userId = $userId;

        return $clone;
    }

    /**
     * @param DeprecatedUserServicePersonalInformationUpdateRequestBody $body
     * @return self
     */
    public function withBody(DeprecatedUserServicePersonalInformationUpdateRequestBody $body): self
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
     * @return DeprecatedUserServicePersonalInformationUpdateRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedUserServicePersonalInformationUpdateRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $userId = $input->{'userId'};
        $body = DeprecatedUserServicePersonalInformationUpdateRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($userId, $body);

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
        $output['userId'] = $this->userId;
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
        $this->body = clone $this->body;
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $userId = urlencode($mapped['userId']);
        return '/v2/user/' . $userId;
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
