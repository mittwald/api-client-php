<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\GetPasswordUpdatedAt;

use InvalidArgumentException;
use DateTime;

class GetPasswordUpdatedAt200ResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'passwordUpdatedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'passwordUpdatedAt',
        ],
        'type' => 'object',
    ];

    /**
     * @var DateTime
     */
    private DateTime $passwordUpdatedAt;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     * @param DateTime $passwordUpdatedAt
     */
    public function __construct(DateTime $passwordUpdatedAt)
    {
        $this->passwordUpdatedAt = $passwordUpdatedAt;
    }

    /**
     * @return DateTime
     */
    public function getPasswordUpdatedAt(): DateTime
    {
        return $this->passwordUpdatedAt;
    }

    /**
     * @param DateTime $passwordUpdatedAt
     * @return self
     */
    public function withPasswordUpdatedAt(DateTime $passwordUpdatedAt): self
    {
        $clone = clone $this;
        $clone->passwordUpdatedAt = $passwordUpdatedAt;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetPasswordUpdatedAt200ResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetPasswordUpdatedAt200ResponseBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $passwordUpdatedAt = new DateTime($input->{'passwordUpdatedAt'});

        $obj = new self($passwordUpdatedAt);

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
        $output['passwordUpdatedAt'] = ($this->passwordUpdatedAt)->format(DateTime::ATOM);

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
        $this->passwordUpdatedAt = clone $this->passwordUpdatedAt;
    }

    public static function fromResponse(\Psr\Http\Message\ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}
