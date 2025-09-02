<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetBillingInformation;

use InvalidArgumentException;
use JsonSchema\Validator;

class ContributorGetBillingInformationOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'contributorId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'invoiceFooter' => [
                'type' => 'string',
            ],
            'onboardingStatus' => [
                'enum' => [
                    'NOT_STARTED',
                    'STARTED',
                    'SUCCESSFUL',
                ],
                'type' => 'string',
            ],
            'stripeAccountId' => [
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ?string $contributorId = null;

    private ?string $invoiceFooter = null;

    private ?ContributorGetBillingInformationOKResponseBodyOnboardingStatus $onboardingStatus = null;

    private ?string $stripeAccountId = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getContributorId(): ?string
    {
        return $this->contributorId ?? null;
    }

    public function getInvoiceFooter(): ?string
    {
        return $this->invoiceFooter ?? null;
    }

    public function getOnboardingStatus(): ?ContributorGetBillingInformationOKResponseBodyOnboardingStatus
    {
        return $this->onboardingStatus ?? null;
    }

    public function getStripeAccountId(): ?string
    {
        return $this->stripeAccountId ?? null;
    }

    public function withContributorId(string $contributorId): self
    {
        $validator = new Validator();
        $validator->validate($contributorId, self::$internalValidationSchema['properties']['contributorId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contributorId = $contributorId;

        return $clone;
    }

    public function withoutContributorId(): self
    {
        $clone = clone $this;
        unset($clone->contributorId);

        return $clone;
    }

    public function withInvoiceFooter(string $invoiceFooter): self
    {
        $validator = new Validator();
        $validator->validate($invoiceFooter, self::$internalValidationSchema['properties']['invoiceFooter']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->invoiceFooter = $invoiceFooter;

        return $clone;
    }

    public function withoutInvoiceFooter(): self
    {
        $clone = clone $this;
        unset($clone->invoiceFooter);

        return $clone;
    }

    public function withOnboardingStatus(ContributorGetBillingInformationOKResponseBodyOnboardingStatus $onboardingStatus): self
    {
        $clone = clone $this;
        $clone->onboardingStatus = $onboardingStatus;

        return $clone;
    }

    public function withoutOnboardingStatus(): self
    {
        $clone = clone $this;
        unset($clone->onboardingStatus);

        return $clone;
    }

    public function withStripeAccountId(string $stripeAccountId): self
    {
        $validator = new Validator();
        $validator->validate($stripeAccountId, self::$internalValidationSchema['properties']['stripeAccountId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->stripeAccountId = $stripeAccountId;

        return $clone;
    }

    public function withoutStripeAccountId(): self
    {
        $clone = clone $this;
        unset($clone->stripeAccountId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ContributorGetBillingInformationOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ContributorGetBillingInformationOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contributorId = null;
        if (isset($input->{'contributorId'})) {
            $contributorId = $input->{'contributorId'};
        }
        $invoiceFooter = null;
        if (isset($input->{'invoiceFooter'})) {
            $invoiceFooter = $input->{'invoiceFooter'};
        }
        $onboardingStatus = null;
        if (isset($input->{'onboardingStatus'})) {
            $onboardingStatus = ContributorGetBillingInformationOKResponseBodyOnboardingStatus::from($input->{'onboardingStatus'});
        }
        $stripeAccountId = null;
        if (isset($input->{'stripeAccountId'})) {
            $stripeAccountId = $input->{'stripeAccountId'};
        }

        $obj = new self();
        $obj->contributorId = $contributorId;
        $obj->invoiceFooter = $invoiceFooter;
        $obj->onboardingStatus = $onboardingStatus;
        $obj->stripeAccountId = $stripeAccountId;
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
        if (isset($this->contributorId)) {
            $output['contributorId'] = $this->contributorId;
        }
        if (isset($this->invoiceFooter)) {
            $output['invoiceFooter'] = $this->invoiceFooter;
        }
        if (isset($this->onboardingStatus)) {
            $output['onboardingStatus'] = ($this->onboardingStatus)->value;
        }
        if (isset($this->stripeAccountId)) {
            $output['stripeAccountId'] = $this->stripeAccountId;
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
    }
}
