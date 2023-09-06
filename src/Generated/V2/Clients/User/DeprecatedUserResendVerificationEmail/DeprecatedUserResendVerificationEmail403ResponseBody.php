<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserResendVerificationEmail;

use InvalidArgumentException;

class DeprecatedUserResendVerificationEmail403ResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'message' => [
                'type' => 'string',
                'example' => 'too many requests',
            ],
            'type' => [
                'type' => 'string',
                'example' => 'RateLimitError',
            ],
        ],
    ];

    /**
     * @var string|null
     */
    private ?string $message = null;

    /**
     * @var string|null
     */
    private ?string $type = null;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message ?? null;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type ?? null;
    }

    /**
     * @param string $message
     * @return self
     */
    public function withMessage(string $message): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($message, static::$schema['properties']['message']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->message = $message;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMessage(): self
    {
        $clone = clone $this;
        unset($clone->message);

        return $clone;
    }

    /**
     * @param string $type
     * @return self
     */
    public function withType(string $type): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($type, static::$schema['properties']['type']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutType(): self
    {
        $clone = clone $this;
        unset($clone->type);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedUserResendVerificationEmail403ResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedUserResendVerificationEmail403ResponseBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $message = null;
        if (isset($input->{'message'})) {
            $message = $input->{'message'};
        }
        $type = null;
        if (isset($input->{'type'})) {
            $type = $input->{'type'};
        }

        $obj = new self();
        $obj->message = $message;
        $obj->type = $type;
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
        if (isset($this->message)) {
            $output['message'] = $this->message;
        }
        if (isset($this->type)) {
            $output['type'] = $this->type;
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

    public static function fromResponse(\Psr\Http\Message\ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}
