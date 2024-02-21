<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainTransferability;

use InvalidArgumentException;
use JsonSchema\Validator;

class CheckDomainTransferabilityOKResponseBodyReasons
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'domainAgeTooSmall' => [
                'type' => 'boolean',
            ],
            'domainDoesNotExist' => [
                'type' => 'boolean',
            ],
            'transferLock' => [
                'type' => 'boolean',
            ],
            'wrongAuthCode' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'domainDoesNotExist',
            'wrongAuthCode',
            'transferLock',
            'domainAgeTooSmall',
        ],
        'type' => 'object',
    ];

    /**
     * @var bool
     */
    private bool $domainAgeTooSmall;

    /**
     * @var bool
     */
    private bool $domainDoesNotExist;

    /**
     * @var bool
     */
    private bool $transferLock;

    /**
     * @var bool
     */
    private bool $wrongAuthCode;

    /**
     * @param bool $domainAgeTooSmall
     * @param bool $domainDoesNotExist
     * @param bool $transferLock
     * @param bool $wrongAuthCode
     */
    public function __construct(bool $domainAgeTooSmall, bool $domainDoesNotExist, bool $transferLock, bool $wrongAuthCode)
    {
        $this->domainAgeTooSmall = $domainAgeTooSmall;
        $this->domainDoesNotExist = $domainDoesNotExist;
        $this->transferLock = $transferLock;
        $this->wrongAuthCode = $wrongAuthCode;
    }

    /**
     * @return bool
     */
    public function getDomainAgeTooSmall(): bool
    {
        return $this->domainAgeTooSmall;
    }

    /**
     * @return bool
     */
    public function getDomainDoesNotExist(): bool
    {
        return $this->domainDoesNotExist;
    }

    /**
     * @return bool
     */
    public function getTransferLock(): bool
    {
        return $this->transferLock;
    }

    /**
     * @return bool
     */
    public function getWrongAuthCode(): bool
    {
        return $this->wrongAuthCode;
    }

    /**
     * @param bool $domainAgeTooSmall
     * @return self
     */
    public function withDomainAgeTooSmall(bool $domainAgeTooSmall): self
    {
        $validator = new Validator();
        $validator->validate($domainAgeTooSmall, static::$schema['properties']['domainAgeTooSmall']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domainAgeTooSmall = $domainAgeTooSmall;

        return $clone;
    }

    /**
     * @param bool $domainDoesNotExist
     * @return self
     */
    public function withDomainDoesNotExist(bool $domainDoesNotExist): self
    {
        $validator = new Validator();
        $validator->validate($domainDoesNotExist, static::$schema['properties']['domainDoesNotExist']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domainDoesNotExist = $domainDoesNotExist;

        return $clone;
    }

    /**
     * @param bool $transferLock
     * @return self
     */
    public function withTransferLock(bool $transferLock): self
    {
        $validator = new Validator();
        $validator->validate($transferLock, static::$schema['properties']['transferLock']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->transferLock = $transferLock;

        return $clone;
    }

    /**
     * @param bool $wrongAuthCode
     * @return self
     */
    public function withWrongAuthCode(bool $wrongAuthCode): self
    {
        $validator = new Validator();
        $validator->validate($wrongAuthCode, static::$schema['properties']['wrongAuthCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->wrongAuthCode = $wrongAuthCode;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CheckDomainTransferabilityOKResponseBodyReasons Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CheckDomainTransferabilityOKResponseBodyReasons
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $domainAgeTooSmall = (bool)($input->{'domainAgeTooSmall'});
        $domainDoesNotExist = (bool)($input->{'domainDoesNotExist'});
        $transferLock = (bool)($input->{'transferLock'});
        $wrongAuthCode = (bool)($input->{'wrongAuthCode'});

        $obj = new self($domainAgeTooSmall, $domainDoesNotExist, $transferLock, $wrongAuthCode);

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
        $output['domainAgeTooSmall'] = $this->domainAgeTooSmall;
        $output['domainDoesNotExist'] = $this->domainDoesNotExist;
        $output['transferLock'] = $this->transferLock;
        $output['wrongAuthCode'] = $this->wrongAuthCode;

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
    }
}
