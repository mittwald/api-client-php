<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainTransferability;

use InvalidArgumentException;
use JsonSchema\Validator;

class CheckDomainTransferabilityRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'authCode' => [
                'type' => 'string',
            ],
            'domain' => [
                'format' => 'naked-domain',
                'type' => 'string',
            ],
        ],
        'required' => [
            'domain',
        ],
    ];

    private ?string $authCode = null;

    private string $domain;

    public function __construct(string $domain)
    {
        $this->domain = $domain;
    }

    public function getAuthCode(): ?string
    {
        return $this->authCode ?? null;
    }

    public function getDomain(): string
    {
        return $this->domain;
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

    public function withoutAuthCode(): self
    {
        $clone = clone $this;
        unset($clone->authCode);

        return $clone;
    }

    public function withDomain(string $domain): self
    {
        $validator = new Validator();
        $validator->validate($domain, self::$internalValidationSchema['properties']['domain']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domain = $domain;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CheckDomainTransferabilityRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CheckDomainTransferabilityRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $authCode = null;
        if (isset($input->{'authCode'})) {
            $authCode = $input->{'authCode'};
        }
        $domain = $input->{'domain'};

        $obj = new self($domain);
        $obj->authCode = $authCode;
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
        if (isset($this->authCode)) {
            $output['authCode'] = $this->authCode;
        }
        $output['domain'] = $this->domain;

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
