<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\SupportCodeRequest;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Client\ResponseContainer;
use Psr\Http\Message\ResponseInterface;

class SupportCodeRequestOKResponseBody implements ResponseContainer
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'expiresAt' => [
                'description' => 'Expiration of the support code',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'supportCode' => [
                'description' => 'support code to authenticate yourself against the mittwald support via telephone',
                'example' => '123456',
                'type' => 'string',
            ],
        ],
        'required' => [
            'token',
            'expires',
        ],
        'type' => 'object',
    ];

    /**
     * Expiration of the support code
     *
     * @var DateTime|null
     */
    private ?DateTime $expiresAt = null;

    /**
     * support code to authenticate yourself against the mittwald support via telephone
     *
     * @var string|null
     */
    private ?string $supportCode = null;

    private ResponseInterface|null $httpResponse = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return DateTime|null
     */
    public function getExpiresAt(): ?DateTime
    {
        return $this->expiresAt ?? null;
    }

    /**
     * @return string|null
     */
    public function getSupportCode(): ?string
    {
        return $this->supportCode ?? null;
    }

    /**
     * @param DateTime $expiresAt
     * @return self
     */
    public function withExpiresAt(DateTime $expiresAt): self
    {
        $clone = clone $this;
        $clone->expiresAt = $expiresAt;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExpiresAt(): self
    {
        $clone = clone $this;
        unset($clone->expiresAt);

        return $clone;
    }

    /**
     * @param string $supportCode
     * @return self
     */
    public function withSupportCode(string $supportCode): self
    {
        $validator = new Validator();
        $validator->validate($supportCode, static::$schema['properties']['supportCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->supportCode = $supportCode;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutSupportCode(): self
    {
        $clone = clone $this;
        unset($clone->supportCode);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SupportCodeRequestOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SupportCodeRequestOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = new DateTime($input->{'expiresAt'});
        }
        $supportCode = null;
        if (isset($input->{'supportCode'})) {
            $supportCode = $input->{'supportCode'};
        }

        $obj = new self();
        $obj->expiresAt = $expiresAt;
        $obj->supportCode = $supportCode;
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
        if (isset($this->expiresAt)) {
            $output['expiresAt'] = ($this->expiresAt)->format(DateTime::ATOM);
        }
        if (isset($this->supportCode)) {
            $output['supportCode'] = $this->supportCode;
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
        if (isset($this->expiresAt)) {
            $this->expiresAt = clone $this->expiresAt;
        }
    }

    public static function fromResponse(ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }

    public function getResponse(): ResponseInterface|null
    {
        return $this->httpResponse;
    }
}
