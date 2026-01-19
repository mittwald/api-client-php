<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class CreateDomainAuthCodeCreatedResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'authCode' => [
                'type' => 'string',
            ],
            'expirationDate' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'authCode',
        ],
        'type' => 'object',
    ];

    private string $authCode;

    private ?DateTime $expirationDate = null;

    public function __construct(string $authCode)
    {
        $this->authCode = $authCode;
    }

    public function getAuthCode(): string
    {
        return $this->authCode;
    }

    public function getExpirationDate(): ?DateTime
    {
        return $this->expirationDate ?? null;
    }

    public function withAuthCode(string $authCode): self
    {
        $validator = new Validator();
        $validator->validate($authCode, self::$internalValidationSchema['properties']['authCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->authCode = $authCode;

        return $clone;
    }

    public function withExpirationDate(DateTime $expirationDate): self
    {
        $clone = clone $this;
        $clone->expirationDate = $expirationDate;

        return $clone;
    }

    public function withoutExpirationDate(): self
    {
        $clone = clone $this;
        unset($clone->expirationDate);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateDomainAuthCodeCreatedResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateDomainAuthCodeCreatedResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $authCode = $input->{'authCode'};
        $expirationDate = null;
        if (isset($input->{'expirationDate'})) {
            $expirationDate = new DateTime($input->{'expirationDate'});
        }

        $obj = new self($authCode);
        $obj->expirationDate = $expirationDate;
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
        $output['authCode'] = $this->authCode;
        if (isset($this->expirationDate)) {
            $output['expirationDate'] = ($this->expirationDate)->format(DateTime::ATOM);
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
        if (isset($this->expirationDate)) {
            $this->expirationDate = clone $this->expirationDate;
        }
    }
}
