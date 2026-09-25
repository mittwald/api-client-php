<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainTransferability;

use InvalidArgumentException;
use JsonSchema\Validator;

class CheckDomainTransferabilityOKResponseBodyReasons
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'domainAgeTooSmall' => [
                'type' => 'boolean',
            ],
            'domainDoesNotExist' => [
                'type' => 'boolean',
            ],
            'enabledIngressInOtherProject' => [
                'description' => 'An enabled ingress for this domain already exists in a project other than the given projectId. Delete that ingress or transfer the domain into that project.',
                'type' => 'boolean',
            ],
            'inRedemptionPeriod' => [
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
            'inRedemptionPeriod',
            'enabledIngressInOtherProject',
        ],
        'type' => 'object',
    ];

    private bool $domainAgeTooSmall;

    private bool $domainDoesNotExist;

    /**
     * An enabled ingress for this domain already exists in a project other than the given projectId. Delete that ingress or transfer the domain into that project.
     */
    private bool $enabledIngressInOtherProject;

    private bool $inRedemptionPeriod;

    private bool $transferLock;

    private bool $wrongAuthCode;

    public function __construct(bool $domainAgeTooSmall, bool $domainDoesNotExist, bool $enabledIngressInOtherProject, bool $inRedemptionPeriod, bool $transferLock, bool $wrongAuthCode)
    {
        $this->domainAgeTooSmall = $domainAgeTooSmall;
        $this->domainDoesNotExist = $domainDoesNotExist;
        $this->enabledIngressInOtherProject = $enabledIngressInOtherProject;
        $this->inRedemptionPeriod = $inRedemptionPeriod;
        $this->transferLock = $transferLock;
        $this->wrongAuthCode = $wrongAuthCode;
    }

    public function getDomainAgeTooSmall(): bool
    {
        return $this->domainAgeTooSmall;
    }

    public function getDomainDoesNotExist(): bool
    {
        return $this->domainDoesNotExist;
    }

    public function getEnabledIngressInOtherProject(): bool
    {
        return $this->enabledIngressInOtherProject;
    }

    public function getInRedemptionPeriod(): bool
    {
        return $this->inRedemptionPeriod;
    }

    public function getTransferLock(): bool
    {
        return $this->transferLock;
    }

    public function getWrongAuthCode(): bool
    {
        return $this->wrongAuthCode;
    }

    public function withDomainAgeTooSmall(bool $domainAgeTooSmall): self
    {
        $validator = new Validator();
        $validator->validate($domainAgeTooSmall, self::$internalValidationSchema['properties']['domainAgeTooSmall']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domainAgeTooSmall = $domainAgeTooSmall;

        return $clone;
    }

    public function withDomainDoesNotExist(bool $domainDoesNotExist): self
    {
        $validator = new Validator();
        $validator->validate($domainDoesNotExist, self::$internalValidationSchema['properties']['domainDoesNotExist']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domainDoesNotExist = $domainDoesNotExist;

        return $clone;
    }

    public function withEnabledIngressInOtherProject(bool $enabledIngressInOtherProject): self
    {
        $validator = new Validator();
        $validator->validate($enabledIngressInOtherProject, self::$internalValidationSchema['properties']['enabledIngressInOtherProject']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->enabledIngressInOtherProject = $enabledIngressInOtherProject;

        return $clone;
    }

    public function withInRedemptionPeriod(bool $inRedemptionPeriod): self
    {
        $validator = new Validator();
        $validator->validate($inRedemptionPeriod, self::$internalValidationSchema['properties']['inRedemptionPeriod']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->inRedemptionPeriod = $inRedemptionPeriod;

        return $clone;
    }

    public function withTransferLock(bool $transferLock): self
    {
        $validator = new Validator();
        $validator->validate($transferLock, self::$internalValidationSchema['properties']['transferLock']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->transferLock = $transferLock;

        return $clone;
    }

    public function withWrongAuthCode(bool $wrongAuthCode): self
    {
        $validator = new Validator();
        $validator->validate($wrongAuthCode, self::$internalValidationSchema['properties']['wrongAuthCode']);
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
        $enabledIngressInOtherProject = (bool)($input->{'enabledIngressInOtherProject'});
        $inRedemptionPeriod = (bool)($input->{'inRedemptionPeriod'});
        $transferLock = (bool)($input->{'transferLock'});
        $wrongAuthCode = (bool)($input->{'wrongAuthCode'});

        $obj = new self($domainAgeTooSmall, $domainDoesNotExist, $enabledIngressInOtherProject, $inRedemptionPeriod, $transferLock, $wrongAuthCode);

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
        $output['enabledIngressInOtherProject'] = $this->enabledIngressInOtherProject;
        $output['inRedemptionPeriod'] = $this->inRedemptionPeriod;
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
